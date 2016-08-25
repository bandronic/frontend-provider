<?php

namespace Bandronic\Frontend;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Bandronic\View\Home;

class FrontendMiddleware
{
    private $frontend;
    
    public function __construct(FrontendService $frontend)
    {
        $this->frontend = $frontend;
    }
    
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, callable $next = null)
    {
        $home = new Home();
        
        $page = new HtmlResponse($home($this->frontend));
        
        if($next)
        {
            return $next($request, $page);
        }
        
        return $page;
    }
}