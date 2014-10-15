<?php
namespace Qafoo;

class ProductSearchFormTest extends ShopwareMinkTestCase
{
    public function testSearchStrandtuch()
    {
        $page = $this->visit('/');

        $page->fillField('searchfield', 'Strandtuch');
        $page->pressButton('submit_search_btn');

        $this->assertEquals(
            'Zu "Strandtuch" wurden 5 Artikel gefunden!',
            $page->find('css', '.result_box')->getText()
        );
    }
}
