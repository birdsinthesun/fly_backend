<?php

namespace Bits\FlyBackendBundle\EventListener;

use Contao\CoreBundle\Routing\ScopeMatcher;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;


#[AsEventListener]
class AssetListener
{
    
    private ScopeMatcher $scopeMatcher;
    
    public function __construct(ScopeMatcher $scopeMatcher)
    {
        $this->scopeMatcher = $scopeMatcher;
    }

    public function __invoke(RequestEvent $event): void
    {
        
        if ($this->scopeMatcher->isBackendMainRequest($event)) {
           
            $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/flybackend/assets/js/filter.js';
           
            
        }
           
    }
}