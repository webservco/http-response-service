<?php

declare(strict_types=1);

namespace WebServCo\Http\Service\Message\Response;

use InvalidArgumentException;
use Override;
use WebServCo\Http\Contract\Message\Response\StatusCodeServiceInterface;

use function array_key_exists;

final class StatusCodeService implements StatusCodeServiceInterface
{
    #[Override]
    public function getReasonPhraseByStatusCode(int $code): string
    {
        return self::STATUS_CODES[$code] ?? throw new InvalidArgumentException('Invalid status code specified.');
    }

    #[Override]
    public function validateStatusCode(int $code): bool
    {
        if (array_key_exists($code, self::STATUS_CODES)) {
            return true;
        }

        throw new InvalidArgumentException('Invalid status code specified.');
    }
}
