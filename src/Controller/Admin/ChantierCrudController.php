<?php

namespace App\Controller\Admin;

use App\Entity\Chantier;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

use Vich\UploaderBundle\Form\Type\VichImageType;

use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;

use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use App\Form\ImageType;

use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

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
            CollectionField::new('images')
            ->setEntryType(ImageType::class)
            ->setFormTypeOption('by_reference', false)
            ->onlyOnForms(),
            CollectionField::new('images')
            ->setTemplatePath('images.html.twig')
            ->onlyOnDetail(),
        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions->add(Crud::PAGE_INDEX, 'detail');
    }
    
}