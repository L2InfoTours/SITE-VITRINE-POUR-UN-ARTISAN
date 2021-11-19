<?php

namespace App\Controller\Admin;

use App\Entity\TypeChantier;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Vich\UploaderBundle\Form\Type\VichImageType;

use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;

use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class TypeChantierCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TypeChantier::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id', 'Date de création')
            ->setValue(false)
            ->onlyOnIndex(),
            'type',
            ImageField::new('image')
            ->setBasePath($this->getParameter("app.path.type_chantier_images"))
            ->onlyOnIndex(),
            TextareaField::new('imageFile')
            ->setFormType(VichImageType::class)
            ->hideOnIndex()
            ->setFormTypeOption('allow_delete', false),
        ];
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setDefaultSort(['id' => 'DESC']);
    }
}
