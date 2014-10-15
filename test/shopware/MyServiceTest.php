<?php

class Shopware_Tests_Models_MyServiceTest
  extends Enlight_Components_Test_TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->entityManager = Shopware()->Models();
    }

    public function testQuery()
    {
        $dql = 'SELECT o FROM Shopware\Models\Order\Order o';
        $query = $this->entityManager->createQuery($dql);

        $orders = $query->getResult();

        $this->assertEquals(4, count($orders));
    }
}
