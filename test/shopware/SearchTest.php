<?php

class Shopware_Tests_Controllers_Frontend_SearchTest
    extends Enlight_Components_Test_Controller_TestCase
{
    public function testSearch()
    {
        $this->Request()
            ->setMethod('GET');
        $this->dispatch('/search?sSearch=Strandtuch');

        $this->assertContains(
            'Zu "Strandtuch" wurden 5 Artikel gefunden',
            $this->Response()->getBody()
        );
    }
}

