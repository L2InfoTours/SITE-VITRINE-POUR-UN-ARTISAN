<?php

namespace App\Controller\Admin;

use App\Entity\Chantier;
use App\Entity\TypeChantier;
use App\Entity\DemandeDevis;
use App\Entity\Image;
use App\Entity\Offre;
use App\Entity\Reponse;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;

use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="app_admin")
     */
    public function index(): Response
    {
        // you can also render some template to display a proper Dashboard
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        return $this->render('admin/index.html.twig');
        // return parent::index();
        // // redirect to some CRUD controller
        // $routeBuilder = $this->get(AdminUrlGenerator::class);

        // return $this->redirect($routeBuilder->setController(ChantierCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        $hasAccess = $this->isGranted('ROLE_ADMIN');
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        return Dashboard::new()
            // the name visible to end users
            //->setTitle('ABC Legermain')
            // you can include HTML contents too (e.g. to link to an image)
            ->setTitle('&#x1F333; ABC Legermain')

            // the path defined in this method is passed to the Twig asset() function
            //->setFaviconPath('favicon.svg')

            // the domain used by default is 'messages'
            //->setTranslationDomain('my-custom-domain')

            // there's no need to define the "text direction" explicitly because
            // its default value is inferred dynamically from the user locale
            ->setTextDirection('ltr')

            // set this option if you prefer the page content to span the entire
            // browser width, instead of the default design which sets a max width
            ->renderContentMaximized()

            // set this option if you prefer the sidebar (which contains the main menu)
            // to be displayed as a narrow column instead of the default expanded design
            //->renderSidebarMinimized()

            // by default, all backend URLs include a signature hash. If a user changes any
            // query parameter (to "hack" the backend) the signature won't match and EasyAdmin
            // triggers an error. If this causes any issue in your backend, call this method
            // to disable this feature and remove all URL signature checks
            ->disableUrlSignatures()

            // by default, all backend URLs are generated as absolute URLs. If you
            // need to generate relative URLs instead, call this method
            ->generateRelativeUrls()
        ;
    }
    public function configureMenuItems(): iterable
    {
        return [
            MenuItem::linkToDashboard('Information', 'fa fa-info-circle'),

            MenuItem::section('Devis'),
            MenuItem::linkToCrud('Demande de devis', 'fa fa-comment', DemandeDevis::class),

            MenuItem::section('Chantier'),
            MenuItem::linkToCrud('Chantier', 'fa fa-hammer', Chantier::class),
            MenuItem::linkToCrud('Type de chantier','fa fa-tags', TypeChantier::class),
            MenuItem::linkToCrud('Image', 'fa fa-images', Image::class),
            MenuItem::section('Offre'),
            MenuItem::linkToCrud('Offre', 'fa fa-file', Offre::class),
            MenuItem::linkToCrud('Reponse', 'fa fa-reply', Reponse::class),
        ];
    }

    // public function configureCrud(Crud $crud): Crud
    // {
    //     return $crud
    //         ->setDateFormat('dd/MM/yyyy');
    // }
    
}
