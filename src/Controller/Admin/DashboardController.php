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
     * @Route("/admin")
     */
    public function index(): Response
    {
        $hasAccess = $this->isGranted('ROLE_ADMIN');
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        // redirect to some CRUD controller
        $routeBuilder = $this->get(AdminUrlGenerator::class);

        return $this->redirect($routeBuilder->setController(DemandeDevisCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
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
            MenuItem::linkToDashboard('Dashboard', 'fa fa-home'),

            MenuItem::section('Consulter'),
            MenuItem::linkToCrud('DemandeDevis', 'fa fa-comment', DemandeDevis::class),

            MenuItem::section('Modifier'),
            MenuItem::linkToCrud('Chantier', 'fa fa-tags', Chantier::class),
            MenuItem::linkToCrud('TypeChantier','fa fa-comment', TypeChantier::class),
            MenuItem::linkToCrud('Image', 'fa fa-comment', Image::class),
            MenuItem::linkToCrud('Offre', 'fa fa-comment', Offre::class),
            MenuItem::linkToCrud('Reponse', 'fa fa-comment', Reponse::class),
        ];
    }
}
