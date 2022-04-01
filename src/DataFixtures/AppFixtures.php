<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private $passwordHasher;
    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $admin = new User();
        $plaintextPassword = 'nimda';
        $hashedPassword = $this->passwordHasher->hashPassword(
            $admin,
            $plaintextPassword
        );
        $admin->setUsername("admin");
        $admin->setPassword($hashedPassword);
        $admin->setRoles(['ROLE_ADMIN']);
        $manager->persist($admin);
        $manager->flush();

        $admin_user = new User();
        $plaintextPassword = 'nimda';
        $hashedPassword = $this->passwordHasher->hashPassword(
            $admin_user,
            $plaintextPassword
        );
        $admin_user->setUsername("admin_user");
        $admin_user->setPassword($hashedPassword);
        $admin_user->setRoles(['ROLE_ADMIN_USER']);
        $manager->persist($admin_user);
        $manager->flush();

        $admin_index = new User();
        $plaintextPassword = 'nimda';
        $hashedPassword = $this->passwordHasher->hashPassword(
            $admin_index,
            $plaintextPassword
        );
        $admin_index->setUsername("admin_index");
        $admin_index->setPassword($hashedPassword);
        $admin_index->setRoles(['ROLE_ADMIN_INDEX']);
        $manager->persist($admin_index);
        $manager->flush();
/*
        $auto_task = new User();
        $plaintextPassword = 'ksat';
        $hashedPassword = $this->passwordHasher->hashPassword(
            $auto_task,
            $plaintextPassword
        );

        $auto_task->setUsername("auto_task");
        $auto_task->setPassword($hashedPassword);
        $auto_task->setRoles(['ROLE_AUTO_TASK']);
        $manager->persist($auto_task);
        $manager->flush();*/

        $develop = new User();
        $plaintextPassword = 'ved';
        $hashedPassword = $this->passwordHasher->hashPassword(
            $develop,
            $plaintextPassword
        );
        $develop->setUsername("develop");
        $develop->setPassword($hashedPassword);
        $develop->setRoles(['ROLE_DEVELOP']);
        $manager->persist($develop);
        $manager->flush();

        $modo_comu = new User();
        $plaintextPassword = 'odom';
        $hashedPassword = $this->passwordHasher->hashPassword(
            $modo_comu,
            $plaintextPassword
        );
        $modo_comu->setUsername("modo_comu");
        $modo_comu->setPassword($hashedPassword);
        $modo_comu->setRoles(['ROLE_MODO_COMU']);
        $manager->persist($modo_comu);
        $manager->flush();

        $spec_horse = new User();
        $plaintextPassword = 'ceps';
        $hashedPassword = $this->passwordHasher->hashPassword(
            $spec_horse,
            $plaintextPassword
        );
        $spec_horse->setUsername("spec_horse");
        $spec_horse->setPassword($hashedPassword);
        $spec_horse->setRoles(['ROLE_SPEC_HORSE']);
        $manager->persist($spec_horse);
        $manager->flush();

        $comp_admin = new User();
        $plaintextPassword = 'pmoc';
        $hashedPassword = $this->passwordHasher->hashPassword(
            $comp_admin,
            $plaintextPassword
        );
        $comp_admin->setUsername("comp_admin");
        $comp_admin->setPassword($hashedPassword);
        $comp_admin->setRoles(['ROLE_COMP_ADMIN']);
        $manager->persist($comp_admin);
        $manager->flush();

        $history_admin = new User();
        $plaintextPassword = 'tsih';
        $hashedPassword = $this->passwordHasher->hashPassword(
            $history_admin,
            $plaintextPassword
        );
        $history_admin->setUsername("history_admin");
        $history_admin->setPassword($hashedPassword);
        $history_admin->setRoles(['ROLE_HISTORY_ADMIN']);
        $manager->persist($history_admin);
        $manager->flush();

        $customer = new User();
        $plaintextPassword = 'tsuc';
        $hashedPassword = $this->passwordHasher->hashPassword(
            $customer,
            $plaintextPassword
        );
        $customer->setUsername("customer");
        $customer->setPassword($hashedPassword);
        $customer->setRoles(['ROLE_CUSTOMER']);
        $manager->persist($customer);
        $manager->flush();
    }
}
