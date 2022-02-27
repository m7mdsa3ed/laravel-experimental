<?php

namespace App\Http\Controllers;

use App\Actions\CreateUserAction;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function save(Request $request)
    {
        // Validate Request 

        // Logic Validation

        $inputs = $request->input();

        // Call Action
        $action = new CreateUserAction($inputs);

        $action->execute();

        if ($action->failed()) {
            $errors = $action->getErrors();

            return back()->withErrors($errors);
        }
    }
}
