<?php

namespace App\Controller\Admin;

use App\Entity\Reponse;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

use Vich\UploaderBundle\Form\Type\VichFileType;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

class ReponseCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Reponse::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
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
            AssociationField::new('offre'),
            
        ];
    }
    
}
