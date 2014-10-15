<?php
namespace Qafoo;

class ProductSearchTest extends ShopwareMinkTestCase
{
    public function testSearchStrandtuch()
    {
        $page = $this->visit('/search?sSearch=Strandtuch');

        $this->assertContains(
            'Zu "Strandtuch" wurden 5 Artikel gefunden',
            $page->getContent()
        );
    }
}
