<?php

namespace App\Traits;

trait HasErrors
{
    private $_errors = [];

    public function getErrors(): array
    {
        return $this->_errors;
    }

    public function hasErrors(): bool
    {
        return !!count($this->getErrors());
    }

    public function hasError($key): bool
    {
        return array_key_exists($key, $this->_errors);
    }

    public function getError($key): mixed
    {
        if ($this->hasError($key)) {
            return $this->_errors[$key];
        }
    }

    public function setError($key, $value): void
    {
        $this->_errors[$key] = $value;
    }

    public function success()
    {
        return !$this->hasErrors();
    }

    public function failed()
    {
        return !$this->success();
    }
}
