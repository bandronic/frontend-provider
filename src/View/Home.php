<?php

namespace Bandronic\View;

class Home
{
    public function __invoke(FrontendService $frontend)
    {
        $body = '<head><title>' . $frontend->getPageTitle() . '<title></body>';
        $body .= '<body><h1>' . $frontend->getPageHeader() . '</h1></body>';
        
        return $body;
    }
}