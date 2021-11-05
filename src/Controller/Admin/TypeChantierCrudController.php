<?php

namespace App\Controller\Admin;

use App\Entity\TypeChantier;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TypeChantierCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TypeChantier::class;
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
