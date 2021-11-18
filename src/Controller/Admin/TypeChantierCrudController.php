<?php

namespace App\Controller\Admin;

use App\Entity\TypeChantier;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Vich\UploaderBundle\Form\Type\VichImageType;

use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;

class TypeChantierCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TypeChantier::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
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
}
