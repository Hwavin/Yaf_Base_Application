<?php
/**
 * 日志类
 *
 * @author  Hwavin
 * @date    2015-02-25  14:35
 * @version $Id$
 */

namespace local\Log;

class Logger implements LoggerInterface
{
    /**
     *
     */
    const EMERG  = 0;
    const ALERT  = 1;
    const CRIT   = 2;
    const ERR    = 3;
    const WARN   = 4;
    const NOTICE = 5;
    const INFO   = 6;
    const DEBUG  = 7;

    /**
     * @var array
     */
    public static $errorPriorityMap = array(
        E_NOTICE            => self::NOTICE,
        E_USER_NOTICE       => self::NOTICE,
        E_WARNING           => self::WARN,
        E_CORE_WARNING      => self::WARN,
        E_USER_WARNING      => self::WARN,
        E_ERROR             => self::ERR,
        E_USER_ERROR        => self::ERR,
        E_CORE_ERROR        => self::ERR,
        E_RECOVERABLE_ERROR => self::ERR,
        E_STRICT            => self::DEBUG,
        E_DEPRECATED        => self::DEBUG,
        E_USER_DEPRECATED   => self::DEBUG,
    );

    public function __construct($config = array())
    {


    }

    /**
     * @param $level
     * @param $message
     * @param array $extra
     */
    public function write($level, $message = null, $extra = array())
    {
        echo $message;
    }


    /**
     * @param string $message
     * @param array $extra
     * @return LoggerInterface|void
     */
    public function emerg($message, $extra = array())
    {
        return $this->write(self::EMERG, $message, $extra);
    }

    /**
     * @param string $message
     * @param array|Traversable $extra
     * @return LoggerInterface
     */
    public function alert($message, $extra = array())
    {
        return $this->write(self::ALERT, $message, $extra);
    }

    /**
     * @param string $message
     * @param array|Traversable $extra
     * @return LoggerInterface
     */
    public function crit($message, $extra = array())
    {
        return $this->write(self::CRIT, $message, $extra);
    }

    /**
     * @param string $message
     * @param array|Traversable $extra
     * @return LoggerInterface
     */
    public function err($message, $extra = array())
    {
        return $this->write(self::ERR, $message, $extra);
    }

    /**
     * @param string $message
     * @param array|Traversable $extra
     * @return LoggerInterface
     */
    public function warn($message, $extra = array())
    {
        return $this->write(self::WARN, $message, $extra);
    }

    /**
     * @param string $message
     * @param array|Traversable $extra
     * @return LoggerInterface
     */
    public function notice($message, $extra = array())
    {
        return $this->write(self::NOTICE, $message, $extra);
    }

    /**
     * @param string $message
     * @param array|Traversable $extra
     * @return LoggerInterface
     */
    public function info($message, $extra = array())
    {
        return $this->write(self::INFO, $message, $extra);
    }

    /**
     * @param string $message
     * @param array|Traversable $extra
     * @return LoggerInterface
     */
    public function debug($message, $extra = array())
    {
        return $this->write(self::DEBUG, $message, $extra);
    }

} 