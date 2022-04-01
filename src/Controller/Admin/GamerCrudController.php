<?php

namespace App\Controller\Admin;

use App\Entity\Gamer;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class GamerCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Gamer::class;
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
