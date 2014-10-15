<?php
namespace Qafoo;

class ProductCategoryTest extends ShopwareMinkTestCase
{
    public function testGenussweltenKategorie()
    {
        $page = $this->visit('/');

        $page->clickLink('Genusswelten');

        $this->assertContains(
            'Special Finish Lagerkorn X.O.',
            $page->getContent()
        );
    }
}
