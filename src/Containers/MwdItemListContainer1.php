<?php

namespace Mwd\Containers;

use Plenty\Plugin\Templates\Twig;

class MwdItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('Mwd::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}