<?php

namespace App\Controller\Admin;

use App\Entity\Reponse;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

use Vich\UploaderBundle\Form\Type\VichFileType;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class ReponseCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Reponse::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id', 'Date de création')
            ->setValue(false)
            ->hideOnForm(),
            AssociationField::new('offre'),
            'nom',
            'prenom',
            // ImageField::new('cv')
            // ->setBasePath($this->getParameter("app.path.reponse_cv"))
            // ->onlyOnIndex(),
            // ImageField::new('cv')
            // ->setBasePath($this->getParameter("app.path.reponse_cv")),
            'cv',
            TextareaField::new('cvFile')
            ->setFormType(VichFileType::class)
            ->hideOnIndex()
            ->setFormTypeOption('allow_delete', false),
            TextEditorField::new('lettre_motivation'),
            TelephoneField::new('telephone', 'Téléphone'),
            'email',
            
        ];
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setDefaultSort(['id' => 'DESC']);
    }
    
}
