<?php
/**
 * 
 *
 * @author  Hwavin
 * @date    2015-02-25  12:13
 * @version $Id$
 */




class ErrorController extends Yaf\Controller_Abstract
{
    public function errorAction($exception)
    {
        echo '<pre>';
        var_dump($exception);
        return false;
    }
}