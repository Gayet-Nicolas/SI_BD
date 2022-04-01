<?php

namespace App\Controller\Admin;

use App\Entity\Injury;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class InjuryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Injury::class;
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
