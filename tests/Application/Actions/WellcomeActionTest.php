<?php
declare(strict_types=1);

namespace Tests\Application\Actions;

use App\Application\Actions\ActionPayload;
use App\Domain\User\UserRepository;
use App\Domain\User\User;
use DI\Container;
use Tests\TestCase;

class WellcomeActionTest extends TestCase
{
    public function testAction()
    {
        $app = $this->getAppInstance();
        $request = $this->createRequest('GET', '/');
        $response = $app->handle($request);

        $payload = (string) $response->getBody();

        $this->assertEquals('Hello world!', $payload);
    }
}
