<?php

namespace Imie\SkillsBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ImieSkillsBundle extends Bundle
{
    public function getParent() {
        return 'FOSUserBundle';
    }
}
