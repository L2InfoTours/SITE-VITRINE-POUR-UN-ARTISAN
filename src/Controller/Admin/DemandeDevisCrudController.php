<?php

namespace App\Controller\Admin;

use App\Entity\DemandeDevis;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;


class DemandeDevisCrudController extends AbstractCrudController
{
    
    public static function getEntityFqcn(): string
    {
        return DemandeDevis::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            'nom',
            'adresse',
            TextEditorField::new('description'),
            'telephone',
            'email',
            ChoiceField::new('status')->setChoices([
                    'En cours' => 'En cours',
                    'Validé' => 'Validé',
                    'Cloturé' => 'Cloturé',
                ])->hideWhenCreating(),
        ];
    }
    
}