<?php

namespace App\Actions\Support;

use App\Traits\HasErrors;

abstract class Action
{
    use HasErrors;

    abstract public function handle();

    public function execute()
    {
        return $this->handle();
    }
}
