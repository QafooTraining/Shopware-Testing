<?php
namespace Qafoo;

abstract class ShopwareMinkTestCase extends \PHPUnit_Framework_TestCase
{
    protected $driver;
    protected $session;

    public function setUp()
    {
        parent::setUp();

        $this->driver = new \Behat\Mink\Driver\GoutteDriver();
        $this->session = new \Behat\Mink\Session($this->driver);
    }

    protected function visit($relativePath)
    {
        if (!isset($_SERVER['SHOPWARE_BASE'])) {
            $_SERVER['SHOPWARE_BASE'] = 'http://localhost:8000';
        }
        $this->session->visit($_SERVER['SHOPWARE_BASE'] . $relativePath);

        return $this->session->getPage();
    }
}
