<?php
/**
 * 
 *
 * @author  Hwavin
 * @date    2015-02-26  17:59
 * @version $Id$
 */

/**
 * 引导文件
 * Class Bootstrap
 */
class Bootstrap extends Yaf\Bootstrap_Abstract{

    /**
     * 注册配置对象
     */
    public function _initConfig()
    {
        $config = Yaf\Application::app()->getConfig();
        Yaf\Registry::set("config", $config);
    }
}
