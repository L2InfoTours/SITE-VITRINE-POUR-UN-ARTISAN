<?php

namespace App\Controller\Admin;

use App\Entity\Chantier;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ChantierCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Chantier::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            'nom',
            'contenu',
            'adresse',
            'images',
        ];
    }
    
}
