<?php

declare(strict_types=1);

namespace AppTest\Handler;

use App\Handler\HomePageHandler;
use Fig\Http\Message\StatusCodeInterface;
use Laminas\Diactoros\Response\HtmlResponse;
use Laminas\Diactoros\Response\JsonResponse;
use Laminas\Http\Client;
use Laminas\Http\Request;
use Laminas\Uri\Http;
use Mezzio\Router\RouterInterface;
use Mezzio\Template\TemplateRendererInterface;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ServerRequestInterface;

use function get_class;

class CategoriaHandlerTest extends TestCase
{

    public function testGetCategoria (): void
    {
        $client = new Client();
        $request = new Request();
        $request->setMethod("GET");
        $request->setUri("http://nginx/v1/categoria");
        $response = $client->send($request);

        $this->assertEquals(StatusCodeInterface::STATUS_OK, $response->getStatusCode());
    }

}
