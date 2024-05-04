<?php

declare(strict_types=1);

namespace WebServCo\Http\Contract\Message\Response\Container;

use WebServCo\Http\Contract\Message\Response\StatusCodeServiceInterface;

interface ResponseServiceContainerInterface
{
    public function getStatusCodeService(): StatusCodeServiceInterface;
}
