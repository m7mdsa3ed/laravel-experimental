<?php

namespace App\Actions;

use App\Actions\Support\Action;
use App\Models\User;

class CreateUserAction extends Action
{
    public function __construct(
        public $inputs,
    ) {
        //
    }

    public function handle()
    {
        $user = new User();

        $user->name = 'John Doe';

        // Saving Logic 

        return $user;
    }
}
