<?php
namespace Qafoo;

class ProductSearchCssTest extends ShopwareMinkTestCase
{
    public function testSearchStrandtuch()
    {
        $page = $this->visit('/search?sSearch=Strandtuch');

        $this->assertEquals(
            'Zu "Strandtuch" wurden 5 Artikel gefunden!',
            $page->find('css', '.result_box')->getText()
        );
    }
}
