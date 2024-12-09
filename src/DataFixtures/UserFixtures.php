<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $adminUser = (new User())
            ->setFirstname('John')
            ->setLastname('Doe')
            ->setEmail('johndoe@example.com')
            ->setPhone('0123456789')
            ->setRoles(['ROLE_ADMIN'])
            ->setPassword('Secret123')
        ;
        $manager->persist($adminUser);

        $adminUser1 = (new User())
            ->setFirstname('Tom')
            ->setLastname('Doe')
            ->setPhone('0123456789')
            ->setEmail('tomdoe@example.com')
            ->setRoles(['ROLE_ADMIN'])
            ->setPassword('Secret123')
        ;
        $manager->persist($adminUser1);

        $manager->flush();
    }
}
