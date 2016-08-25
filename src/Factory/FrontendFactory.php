<?php

namespace Factory;

use Interop\Container\ContainerInterface;
use Frontend\FrontendService;
use Frontend\FrontendMiddleware;

class FrontendFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $service = $container->get(FrontendService::class);
        
        return new FrontendMiddleware($service);
    }
}