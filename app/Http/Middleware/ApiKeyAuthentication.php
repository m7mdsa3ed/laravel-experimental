<?php

namespace App\Http\Middleware;

use App\Models\ApiKey;
use Closure;
use Illuminate\Http\Request;

class ApiKeyAuthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $apiKey = $request->header('api-key');
        
        if (!$apiKey) {
            return response()->json([
                'message' => 'API key is missing'
            ], 401);
        }

        $apiKey = ApiKey::where('key', $apiKey)->first();

        if (!$apiKey) {
            return response()->json([
                'message' => 'Invalid API key'
            ], 401);
        }

        if (!$apiKey->is_active) {
            return response()->json([
                'message' => 'API key is inactive'
            ], 401);
        }

        return $next($request);
    }
}
