<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{

    public function __construct(private UserPasswordHasherInterface $passwordHasher
    ) {}

    public function load(ObjectManager $manager): void
    {
        $password = 'Secret123';

        $adminUser = (new User())
            ->setFirstname('John')
            ->setLastname('Doe')
            ->setEmail('johndoe@example.com')
            ->setPhone('0123456789')
            ->setRoles(['ROLE_ADMIN'])
        ;
        $adminUser->setPassword($this->passwordHasher->hashPassword($adminUser, $password));
        $manager->persist($adminUser);

        $adminUser1 = (new User())
            ->setFirstname('Tom')
            ->setLastname('Doe')
            ->setPhone('0123456789')
            ->setEmail('tomdoe@example.com')
            ->setRoles(['ROLE_ADMIN'])
        ;
        $adminUser1->setPassword($this->passwordHasher->hashPassword($adminUser1, $password));
        $manager->persist($adminUser1);

        $manager->flush();
    }
}
