<?php

namespace Mwd\Containers;

use Plenty\Plugin\Templates\Twig;

class MwdItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('Mwd::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}