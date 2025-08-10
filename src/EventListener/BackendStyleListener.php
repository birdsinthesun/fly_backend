<?php

namespace Bits\FlyBackendBundle\EventListener;

use Contao\CoreBundle\ServiceAnnotation\Hook;

class BackendStyleListener
{
    /**
     * @Hook("contao.backend.stylesheets")
     */
    public function __invoke(array $stylesheets): array
    {
        $stylesheets[] = 'system/flybackend/styles/basic.css';
        return $stylesheets;
    }
}
