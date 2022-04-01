<?php

namespace App\Controller\Admin;

use App\Entity\Infrastructure;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class InfrastructureCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Infrastructure::class;
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
}
