<?php

namespace App\Controller;

use App\Entity\Chantier;
use App\Entity\Image;
use App\Entity\TypeChantier;
use App\Form\ChantierType;
use App\Repository\ChantierRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/chantier')]
class ChantierController extends AbstractController
{
    #[Route('/', name: 'chantier_index', methods: ['GET'])]
    public function index(ChantierRepository $chantierRepository): Response
    {
            $repo = $this->getDoctrine()->getRepository(Chantier::class);
            $projects = $repo->findAll();
            $Types = $this->getDoctrine()->getRepository(TypeChantier::class);

        return $this->render('chantier/index.html.twig', [
            'chantiers' => $chantierRepository->findAll(),
            'types' => $Types->findAll(),
            'projects' => $projects,
            'titre' => 'PROJETS',
        ]);
    }

    /**
    *   @Route("/{id}",name="chantier_show")
    */
    public function show($id) {

        $repo = $this->getDoctrine()->getRepository(Chantier::class);
        $chantiers = $repo->find($id);

            $repoImg = $this->getDoctrine()->getRepository(Chantier::class);
            $images = $repoImg->findAll();


        return $this->render('chantier/show.html.twig', [
            'chantier' => $chantiers,
            'images'  => $images,
            'titre' => 'CHANTIER',
        ]);
    }
}
