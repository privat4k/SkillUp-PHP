<?php
require_once 'dz.php';

class Smartform extends Form_dz
{
    protected function prepareAttr(array $attr)
    {
        if (isset($attr['name'])
            && !isset($attr['value'])
            && isset($_REQUEST[$attr['name']])
        ){
           $attr['value'] = $_REQUEST[$attr['name']];
        }

        return parent::prepareAttr($attr);
    }


}