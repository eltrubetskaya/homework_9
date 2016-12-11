<?php
/**
 * Created by PhpStorm.
 * User: elena
 * Date: 10.12.16
 * Time: 14:06
 */

namespace Veta\HomeworkBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Veta\HomeworkBundle\Entity\Product;

class LoadProductData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $product = new Product();
        $product->setProductName("Lanvin Eclat D'Arpege f 50ml");
        $product->setBrand($this->getReference('brand_id'));
        $product->setCategory($this->getReference('category_id'));
        $product->setDiscription('May the fragrance of lilacs supplemented tender juiciness of Sicilian lemon. The notes of wisteria flowers, green tea leaf, peach, Chinese osmanthus surprising and majestic red peony help to really feel his irresistibility.');
        $product->setStatus(true);
        $product->setPrice('28$');

        $manager->persist($product);
        $manager->flush();

        $this->addReference('product_id', $product);
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 3;
    }
}
