<?php
/**
 * Created by PhpStorm.
 * User: elena
 * Date: 10.12.16
 * Time: 14:21
 */

namespace Veta\HomeworkBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Veta\HomeworkBundle\Entity\Users;

class LoadUsersData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $user = new Users();
        $user->setLogin('test');
        $user->setStatus(true);
        $user->setEmail('test@test.com');
        $user->setFirstName('Test');
        $user->setLastName('Test');
        $user->setPass(md5(uniqid('test')));

        $manager->persist($user);
        $manager->flush();

        $this->addReference('user_id', $user);
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 6;
    }
}
