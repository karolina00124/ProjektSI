<?php
/**
 * Category fixtures.
 */

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Faker\Generator;

/**
 * Class CategoryFixtures.
 */
class CategoryFixtures extends Fixture
{
    protected Generator $faker;
    protected ObjectManager $manager;

    public function load(ObjectManager $manager)
    {
        $this->faker = Factory::create();
        $this->manager =$manager;

       for ($i=0; $i<8; $i++)
       {
           $category = new Category();
           $category->setTitle($this->faker->sentence);
           $category->setCreatedAt($this->faker->dateTimeBetween('-100 days', '-1 days'));
           $category->setUpdatedAt($this->faker->dateTimeBetween('-100 days', '-1 days'));
           $this->manager->persist($category);

       }

        $manager->flush();
    }
}
