<?php
/**
 * 主入口文件
 *
 * @author  Hwavin
 * @date    2015-02-13  12:23
 * @version $Id$
 */

header('Content-type: text/html; charset=utf-8');
define('APP_PATH', realpath('..'));
$app  = new Yaf\Application(APP_PATH . '/conf/application.ini', YAF\ENVIRON);
$app->bootstrap()->run();