<?php
/**
 * 服务对象类
 *
 * @author  Hwavin
 * @date    2015-02-26  16:25
 * @version $Id$
 */

namespace Local;

use Yaf;

class Servers {

    static protected $_config     = array();
    static protected $_serverName = null;
    static protected $_servers = array(
        'log'   => 'Local\Log\Logger',

    );

    /**
     * 返回服务对象
     * @param null $serverName
     * @param array $config
     * @return mixed
     */
    static public function factory($serverName = null, $config = array())
    {
        if (!Yaf\Registry::has($serverName)) {
            self::$_serverName = $serverName;

            $config = $config + self::_getServersConfig();
            Yaf\Registry::set($serverName, new self::$_servers[$serverName]($config));
        }
        return Yaf\Registry::get($serverName);
    }

    /**
     * 获取服务配置信息
     * @return array|null
     */
    static protected function _getServersConfig()
    {
        if (empty(self::$_config)) {
            self::$_config = Yaf\Registry::get('config')->toArray();
        }

        if (isset(self::$_config[self::$_serverName])) {
            return self::$_config[self::$_serverName];
        }
        return array();
    }

} 