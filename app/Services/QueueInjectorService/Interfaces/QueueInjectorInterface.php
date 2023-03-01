<?php

namespace App\Services\QueueInjectorService\Interfaces;

interface QueueInjectorInterface
{
    public function data(): array;

    public function handle(array $data): void;
}
