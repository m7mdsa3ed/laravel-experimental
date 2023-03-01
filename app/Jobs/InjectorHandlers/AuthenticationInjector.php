<?php

namespace App\Jobs\InjectorHandlers;

use App\Services\QueueInjectorService\Interfaces\QueueInjectorInterface;

class AuthenticationInjector implements QueueInjectorInterface
{
    public function data(): array
    {
        return [
            'userId' => 1
        ];
    }

    public function handle(array $data): void
    {
        auth()->loginUsingId($data['userId']);
    }
}
