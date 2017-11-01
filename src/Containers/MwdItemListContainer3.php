<?php

namespace Mwd\Containers;

use Plenty\Plugin\Templates\Twig;

class MwdItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('Mwd::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}