# webservco/http-response-service

A PHP component/library. Please see [webservco/sandbox](https://webservco.github.io/sandbox/) for an example project using these types of components.

List of HTTP status codes, with a validator for them.

- Related: `webservco/http` (`Response` validates its status code with this), `webservco/dependency-container` (`getResponseServiceContainer()`)

---

## Installation

```shell
composer require webservco/http-response-service
```

---

## Usage

```php
use WebServCo\Http\Contract\Message\Response\StatusCodeServiceInterface;
use WebServCo\Http\Service\Message\Response\StatusCodeService;

// \WebServCo\Http\Contract\Message\Response\StatusCodeServiceInterface
$statusCodeService = new StatusCodeService();
// Throws for a code that isn't in the list.
$statusCodeService->validateStatusCode($code);

$isRedirect = array_key_exists($code, StatusCodeServiceInterface::REDIRECT_STATUS_CODES);
```

The interface extends `Fig\Http\Message\StatusCodeInterface`. Constants like `STATUS_NOT_FOUND` are available through it.

---

## Contracts

| Interface | Implementation | Purpose |
| --- | --- | --- |
| `Contract\Message\Response\StatusCodeServiceInterface` | `Service\Message\Response\StatusCodeService` | `STATUS_CODES` and `REDIRECT_STATUS_CODES` lists, and `validateStatusCode()`. |
| `Contract\Message\Response\Container\ResponseServiceContainerInterface` | `Container\Message\Response\ResponseServiceContainer` | Gives access to the status code service. |

Namespaces are relative to `WebServCo\Http\`.

---

## Development

```shell
# Start project.
ddev start
# Install dependencies.
ddev c u
# Run all validations.
ddev c c
# Run unit tests.
ddev c test:dox
```

---

## License

[MIT](LICENSE.md)
