<?php

namespace Bandronic\Factory;

use Interop\Container\ContainerInterface;
use Bandronic\Frontend\FrontendMiddleware;
use Bandronic\Frontend\FrontendService;

class FrontendFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $service = $container->get(FrontendService::class);
        
        return new FrontendMiddleware($service);
    }
}