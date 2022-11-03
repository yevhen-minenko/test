<?php

declare(strict_types=1);

namespace App;

use Bref\Context\Context;
use Bref\Event\Handler;

class Task implements Handler
{
    public function handle(
        $event,
        Context $context
    ): string {
        return $event['name'];
    }
}