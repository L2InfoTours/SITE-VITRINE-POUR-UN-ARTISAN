<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;

use App\Entity\Image;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Vich\UploaderBundle\Form\Type\VichImageType;

use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;

class ImageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Image::class;
    }
    
    public function configureFields(string $pageName): iterable
    {
        return [
            'titre',
            ImageField::new('image')
            ->setBasePath($this->getParameter("app.path.chantier_images"))
            ->onlyOnIndex(),
            TextareaField::new('imageFile')
            ->setFormType(VichImageType::class)
            ->hideOnIndex()
            ->setFormTypeOption('allow_delete', false),
        ];
    }
    
    public function configureActions(Actions $actions): Actions
    {
        return $actions
            // ...
            // ->setPermission(Action::NEW, 'ROLE_ADMIN')
            ->setPermission(Action::DELETE, 'ROLE_ADMIN')
        ;
    }
}
