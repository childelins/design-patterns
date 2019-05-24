<?php

namespace DesignPatterns\Creational\Singleton;

class Singleton
{
    private static $instance;

    public static function getInstance(): Singleton
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return self::$instance;
    }

    /**
     * 这里私有方法阻止用户随意的创建该对象实例
     *
     * @return void
     */
    private function __constrcut()
    {
    }

    /**
     * 该私有方法阻止实例被克隆
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * 该私有方法阻止实例被序列化
     */
    private function __wakeup()
    {
    }
}
