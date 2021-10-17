<?php

namespace App\Controller\Admin;

use App\Entity\Offre;
use App\Form\ReponseType;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;

use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
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
            DateField::new('date')
            ->onlyOnIndex()
            ->setFormat('dd/MM/yyyy'),
            ChoiceField::new('niveau_etude')->setChoices([
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
            MoneyField::new('remuneration')
            ->setCurrency('EUR'),
            'profile',
            ChoiceField::new('type', "Type d'offre")->setChoices([
                'Stage' => 'Stage',
                'Alternance' => 'Alternance',
                'CDD' => 'CDD',
                'CDI' => 'CDI',
            ]),
            IntegerField::new('duree', 'Nombre de jours'),
            CollectionField::new('reponses')
            ->setEntryType(ReponseType::class)
            ->setFormTypeOption('by_reference', false)
            ->onlyOnForms(),
            CollectionField::new('reponses')
            ->setTemplatePath('reponses.html.twig')
            ->onlyOnDetail(),
        ];
    }
}
