<?php

namespace Bandronic\View;

use Bandronic\Frontend\FrontendService;

class Home
{
    public function __invoke(FrontendService $frontend)
    {
        $body = '<head><title>' . $frontend->getPageTitle() . '</title></body>';
        $body .= '<body><h1>' . $frontend->getPageHeader() . '</h1></body>';
        
        return $body;
    }
}