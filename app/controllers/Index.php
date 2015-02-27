<?php
/**
 * 
 *
 * @author  Hwavin
 * @date    2015-02-13  15:02
 * @version $Id$
 */
 

class IndexController extends BaseController
{

    public function indexAction()
    {
        $this->server('log')->debug('你大爷1');
        return false;
    }
} 
