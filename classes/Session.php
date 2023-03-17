<?php

namespace Application;

use Exception;
use SplFileInfo;

/**
 * @property bool $is_auth
 * @property string $error
 */
class Session
{
    /**
     * @var bool
     */
    private $is_auth;
    /**
     * @var string
     */
    private $error;

    // задаем время жизни сессионных кук
    public function __construct(string $cookieTime = '+7 days')
    {
        session_start();

        $this->is_auth = $_SESSION['is_auth'] ?? null;
        $this->error = $_SESSION['error'] ?? null;
    }

    private function setIs_auth(bool $auth)
    {
        $this->is_auth = $auth;
        $_SESSION['is_auth'] = $auth;
    }

    private function setError(string $message)
    {
        $this->error = $message;
        $_SESSION['error'] = $message;
    }

    private function getIs_auth(): bool
    {
        return $this->is_auth;
    }

    private function issetIs_auth(): bool
    {
        return !is_null($this->is_auth);
    }

    private function unsetIs_auth()
    {
        $this->is_auth = null;
    }

    /**
     * @param string $name
     * @param $value
     * @throws Exception
     */
    public function __set(string $name, $value)
    {
        $method = 'set'. ucfirst($name);

        if (method_exists($this, $method)) {

            $this->{$method}($value);
            return;
        }

        throw new Exception(
            sprintf('Unknown method "%s" in class "%s"', $method, static::class)
        );
    }

    public function __get($name)
    {
        return $_SESSION[$name] ?? null;
    }

    public function __isset($name)
    {
        return isset($_SESSION);
    }

    public function __unset($name)
    {
        return isset($_SESSION);
    }
}