<?php

namespace Bookboon\ApiBundle;

use Bookboon\ApiBundle\DependencyInjection\BookboonApiExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ApiBundle extends Bundle
{
    public function getContainerExtension() : BookboonApiExtension
    {
        return new BookboonApiExtension();
    }
}
