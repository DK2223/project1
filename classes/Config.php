<?php

namespace Application;

/**
 * Класс для получения рсновных настроек проекта
 */
class Config
{
   private $params = [];

   private static $instance;

   private function __construct(){

       $this->params = require_once(dirname(__FILE__, 2).'/config.php');
   }
   private function __clone(){}

   private static function init(): Config
   {
        if (!static::$instance) {

            static::$instance = new self;
        }

        return static::$instance;
   }

   private function _get(string $paramName, $defaultValue = ''): string
   {
        return $this->params[$paramName]??$defaultValue;
   }

   public static function get(string $param_name, $defaultValue = ''): string
   {
       $config = static::init();

       return $config->_get($param_name, $defaultValue);
   }
}