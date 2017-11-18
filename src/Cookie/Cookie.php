<?php

namespace Adil\Genie\Cookie;

use Adil\Genie\Cookie\CookieJar;

class Cookie
{
    protected $jars = [];

    public function set(string $key, $value)
    {
        return $this->jars[] = new CookieJar($key, $value);
    }

    public function get()
    {
    }
    
    public function unset()
    {
    }

    public function destroy()
    {
    }
}
