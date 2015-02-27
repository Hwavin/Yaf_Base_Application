<?php
/**
 * 
 *
 * @author  Hwavin
 * @date    2015-02-26  15:42
 * @version $Id$
 */
 

class BaseController extends Yaf\Controller_Abstract
{
    /**
     * @param $servername
     * @return mixed
     */
    public function server($servername = null)
    {
        return Local\Servers::factory($servername);
    }

} 