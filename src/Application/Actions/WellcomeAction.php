<?php
declare(strict_types=1);

namespace App\Application\Actions;

use App\Application\Actions\Action;
use Psr\Http\Message\ResponseInterface as Response;

class WellcomeAction extends Action
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        $body = 'Hello world!';
        $this->response->getBody()->write($body);
        return $this->response;
    }
}
