<?php

namespace App\Controller\Admin;

use App\Entity\Reponse;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

use Vich\UploaderBundle\Form\Type\VichFileType;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

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
            TextareaField::new('cvFile')
            ->setFormType(VichFileType::class)
            ->hideOnIndex()
            ->setFormTypeOption('allow_delete', false),
            'lettre_motivation',
            'telephone',
            'email',
            AssociationField::new('offre'),
            
        ];
    }
    
}
