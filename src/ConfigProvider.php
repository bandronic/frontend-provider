<?php

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
                    Frontend\FrontendService::class => Factory\FrontendServiceFactory::class
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