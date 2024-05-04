<?php

declare(strict_types=1);

namespace WebServCo\Http\Container\Message\Response;

use WebServCo\Http\Contract\Message\Response\Container\ResponseServiceContainerInterface;
use WebServCo\Http\Contract\Message\Response\StatusCodeServiceInterface;
use WebServCo\Http\Service\Message\Response\StatusCodeService;

final class ResponseServiceContainer implements ResponseServiceContainerInterface
{
    private ?StatusCodeServiceInterface $statusCodeService = null;

    public function getStatusCodeService(): StatusCodeServiceInterface
    {
        if ($this->statusCodeService === null) {
            $this->statusCodeService = new StatusCodeService();
        }

        return $this->statusCodeService;
    }
}
