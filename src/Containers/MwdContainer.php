<?php

namespace Mwd\Containers;

use Plenty\Plugin\Templates\Twig;

class MwdContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('Mwd::Stylesheet');
    }
}