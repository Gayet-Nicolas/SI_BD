<?php

namespace App\Controller\Admin;

use App\Entity\Competition;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CompetitionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Competition::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->disable(Action::DELETE, 'ROLE_CUSTOMER')
            ->disable(Action::NEW, 'ROLE_CUSTOMER')
            ->disable(Action::EDIT, 'ROLE_CUSTOMER')
            ->disable(Action::NEW, 'ROLE_MODO_COMU')

            ;
    }

}
