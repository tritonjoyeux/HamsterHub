<?php

namespace HamsterHubBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class HamsterHubBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
