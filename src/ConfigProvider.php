<?php

namespace Bandronic;

class ConfigProvider
{
    public function __invoke()
    {
        return 
        [
            'dependencies' =>
            [
              'factories' =>
                [
                    Frontend\FrontendService::class => Factory\FrontendServiceFactory::class,
                    Frontend\FrontendMiddleware::class => Factory\FrontendFactory::class
                ]
            ],
            'frontend' =>
            [
                'title' => '',
                'header' => ''
            ]
        ];
    }
}