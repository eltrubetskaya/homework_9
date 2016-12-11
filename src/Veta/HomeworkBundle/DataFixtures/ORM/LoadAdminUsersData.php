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
use Veta\HomeworkBundle\Entity\AdminUsers;

class LoadAdminUsersData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $Adminuser = new AdminUsers();
        $Adminuser->setLogin('admin');
        $Adminuser->setStatus(true);
        $Adminuser->setNickName('AdminTest');
        $Adminuser->setPass(md5(uniqid('test')));
        $Adminuser->setPrivilege($this->getReference('privilege_id'));

        $manager->persist($Adminuser);
        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 5;
    }
}
