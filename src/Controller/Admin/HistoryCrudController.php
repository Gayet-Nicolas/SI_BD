<?php

namespace App\Controller\Admin;

use App\Entity\History;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class HistoryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return History::class;
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
