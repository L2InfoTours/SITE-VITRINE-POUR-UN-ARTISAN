<?php

namespace App\Controller\Admin;

use App\Entity\Chantier;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class IndexController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Chantier::class;
    }

    
    // public function configureFields(string $pageName): iterable
    // {
    //     return [
    //         'nom',
    //         'contenu',
    //         'adresse',
    //         AssociationField::new('types'),
    //         CollectionField::new('images')
    //         ->setEntryType(ImageType::class)
    //         ->setFormTypeOption('by_reference', false)
    //         ->onlyOnForms(),
    //         CollectionField::new('images')
    //         ->setTemplatePath('images.html.twig')
    //         ->onlyOnDetail(),
    //     ];
    // }

    // public function configureActions(Actions $actions): Actions
    // {
    //     return $actions->add(Crud::PAGE_INDEX, 'detail');
    // }
    
}
