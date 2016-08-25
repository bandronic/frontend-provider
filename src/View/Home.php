<?php

namespace Bandronic\View;

class Home
{
    public function __invoke()
    {
        $body = '<head><title>' . $this->frontend->getPageTitle() . '<title></body>';
        $body .= '<body><h1>' . $this->frontend->getPageHeader() . '</h1></body>';
        
        return $body;
    }
}