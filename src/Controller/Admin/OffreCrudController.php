<?php

namespace App\Controller\Admin;

use App\Entity\Offre;
use App\Form\ReponseType;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;

use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;

use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
// use App\Form\ImageType;

class OffreCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Offre::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id', 'Date de création')
            ->setValue(false)
            ->hideOnForm(),
            DateField::new('date')
            ->onlyOnIndex(),
            ChoiceField::new('niveau_etude', 'Niveau d\'études')->setChoices([
                'Bac+1' => 'Bac+1',
                'Bac+2' => 'Bac+2',
                'Bac+3' => 'Bac+3',
                'Bac+4' => 'Bac+4',
                'Bac+5' => 'Bac+5',
                'Bac+5 +' => 'Bac+5 +',
            ]),
            'lieu',
            'intitule',
            'mission',
            MoneyField::new('remuneration', 'Rémunération')
            ->setCurrency('EUR'),
            'profile',
            ChoiceField::new('type', "Type d'offre")->setChoices([
                'Stage' => 'Stage',
                'Alternance' => 'Alternance',
                'CDD' => 'CDD',
                'CDI' => 'CDI',
            ]),
            IntegerField::new('duree', 'Nombre de jours'),
            //MODIFER
            CollectionField::new('reponses', 'Réponses')
            ->setEntryType(ReponseType::class)
            ->setFormTypeOption('by_reference', false)
            ->onlyOnForms()
            ->allowAdd(false)
            ->allowDelete(false),
            //CONSULTER
            CollectionField::new('reponses', 'Réponses')
            ->setTemplatePath('reponses.html.twig')
            ->onlyOnDetail()
        ];
    }
    public function configureActions(Actions $actions): Actions
    {
        return $actions->add(Crud::PAGE_INDEX, 'detail');
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setDefaultSort(['id' => 'DESC'])
            ->setDateFormat('dd/MM/yyyy');
    }
}
