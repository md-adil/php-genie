<?php
namespace Adil\Genie\Session;

use PHPUnit\Framework\TestCase;

class SessionTest extends TestCase
{
    public function setUp()
    {
        $this->session = new Session();
    }
    
    public function testGet()
    {
        $this->assertEquals($this->session->get('name'), null);
    }
}
