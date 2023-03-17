<?php

class Session
{

    private $cookieTime;


    // задаем время жизни сессионных кук
    public function __construct(string $cookieTime = '+7 days')
    {
        $this->cookieTime = strtotime($cookieTime);
        session_cache_limiter(false);
    }


    // стартуем сессию
    public function start()
    {
        session_start();
        $name = session_id();
    }

    public static function check()
    {
        $name = session_id();
    }
  /*  public static function check()
    {
        if (isset($name)){
            return $foo = True;
        }
        else {
            return $foo = False;
        }
    }


    public function isSessionExsists() {
        $sessionName = session_name();
        if (isset($_COOKIE[$sessionName]) || isset($_REQUEST[$sessionName])) {
            session_start();
            return !empty($_SESSION);
        }
        return false;
    }
*/
}