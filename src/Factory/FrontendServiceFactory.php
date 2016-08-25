<?php

namespace Bandronic\Factory;

use Bandronic\Frontend\FrontendService;
use Interop\Container\ContainerInterface;

class FrontendServiceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $config = $container->get('config')['frontend'];
        return new FrontendService($config);
    }
}