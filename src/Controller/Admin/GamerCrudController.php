<?php

namespace App\Controller\Admin;

use App\Entity\Gamer;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class GamerCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Gamer::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('username'),
            EmailField::new('email'),
            TextField::new('password')->hideOnIndex(),
            TextField::new('lastname'),
            TextField::new('firstname'),
            IntegerField::new('sex'),
            DateField::new('birthDate'),
            TextField::new('phone'),
            TextField::new('address'),
            TextField::new('avatar'),
            TextField::new('description'),
            TextField::new('websiteAddress'),
            IntegerField::new('bankAccount'),
            TextField::new('ipAddress'),
            DateField::new('createdAt')->onlyOnIndex(),
            DateField::new('lastConnexionDate')->onlyOnIndex(),
            IntegerField::new('horsesCapacity')


        ->onlyOnIndex()
        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->disable(Action::NEW, 'ROLE_MODO_COMU')
            ;
    }

}
