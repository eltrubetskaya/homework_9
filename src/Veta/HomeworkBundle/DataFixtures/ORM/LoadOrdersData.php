<?php
/**
 * Created by PhpStorm.
 * User: elena
 * Date: 10.12.16
 * Time: 15:30
 */

namespace Veta\HomeworkBundle\DataFixtures\ORM;

use DateTime;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Veta\HomeworkBundle\Entity\Orders;

class LoadOrdersData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $order = new Orders();
        $order->setProduct($this->getReference('product_id'));
        $order->setStatusOrder($this->getReference('status_id'));
        $order->setUser($this->getReference('user_id'));
        $order->setComments('first order');
        $order->setDateCreate(new DateTime());

        $manager->persist($order);
        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 8;
    }
}
