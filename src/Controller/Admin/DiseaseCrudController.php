<?php

namespace App\Controller\Admin;

use App\Entity\Disease;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class DiseaseCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Disease::class;
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
            ->disable(Action::DELETE, 'ROLE_SPEC_HORSE')
            ->disable(Action::NEW, 'ROLE_SPEC_HORSE')

            ;
    }
}
