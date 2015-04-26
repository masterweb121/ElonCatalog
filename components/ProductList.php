<?php namespace Elon\Catalog\Components;

use Cms\Classes\ComponentBase;

/**
 * 
 * @author Denis Dolgopolov <dolgopolovdc@gmail.com>
 *
 */
class ProductList extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'ProductList Component',
            'description' => 'Component from products list'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

}