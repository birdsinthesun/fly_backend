<?php

namespace Bits\FlyBackendBundle\EventListener;

use Contao\CoreBundle\ServiceAnnotation\Hook;

class BackendStyleListener
{
    /**
     * @Hook("contao.backend.stylesheets")
     */
    public function addBackendStylesheets(array $stylesheets): array
    {
        $stylesheets[] = 'bundles/flybackend/css/backend.css';
        return $stylesheets;
    }
}
