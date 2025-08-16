<?php

namespace Bits\MmShopBundle\EventListener\Asset;

use Contao\CoreBundle\Routing\ScopeMatcher;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;


#[AsEventListener]
class AssetListener
{
    private Connection $db;
    
    private ScopeMatcher $scopeMatcher;
    
    public function __construct(Connection $db,ScopeMatcher $scopeMatcher)
    {
        $this->scopeMatcher = $scopeMatcher;
        $this->db = $db;
    }

    public function __invoke(RequestEvent $event): void
    {
        
        if ($this->scopeMatcher->isBackendMainRequest($event)) {
           
            $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/flybackend/js/filter.js';
           
            
        }
           
    }
}