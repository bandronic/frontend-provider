<?php

namespace Bandronic\Frontend;

class FrontendService
{
    /**
     * The page title to be displayed
     * @var string
     */
    private $pageTitle = '';
    
    /**
     * The page main h1 page header
     * @var string
     */
    private $pageHeader = '';
        
    public function __construct($config = null)
    {
        // verify if the config is available
        if(!empty($config))
        {
            // set the title if the config contains it
            if(isset($config['title']))
            {
                $this->pageTitle = $config['title'];
            }
            
            // set the header if the config contains it
            if(isset($config['header']))
            {
                $this->pageTitle = $config['header'];
            }
        }
    }
    
    /**
     * Get the page title
     * @return string
     */
    public function getPageTitle()
    {
        return $this->pageTitle;
    }
    
    /**
     * Get the main h1 page header
     * @return string
     */
    public function getPageHeader()
    {
        return $this->pageHeader;
    }
}