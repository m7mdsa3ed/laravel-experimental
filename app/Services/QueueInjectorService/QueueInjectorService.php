<?php

namespace App\Services\QueueInjectorService;

use App\Services\QueueInjectorService\Interfaces\QueueInjectorInterface;
use Illuminate\Queue\Events\JobProcessing;
use Illuminate\Support\Facades\Queue;

class QueueInjectorService
{
    private static array $injectors;

    public static function boot(): void
    {
        Queue::createPayloadUsing(function (string $connection, ?string $queueName, array $payload) {
            $payloadData = $payload['data'];

            $injectors = self::$injectors;

            foreach ($injectors as $injector) {
                $injectorInstance = app($injector);

                if ($injectorInstance instanceof QueueInjectorInterface) {
                    $payloadData['injectors'][$injector] = $injectorInstance->data();
                }
            }

            return $payloadData;
        });

        Queue::before(function (JobProcessing $jobProcessing) {
            $payload = $jobProcessing->job->payload();

            $injectors = $payload['injectors'];

            foreach ($injectors as $instanceName => $data) {
                $callback = implode('', [$instanceName, '@', 'handle']);

                app()->call($callback, [
                    'data' => $data,
                ]);
            }
        });
    }

    public static function setInjectors($injectors): void
    {
        self::$injectors = $injectors;
    }
}
