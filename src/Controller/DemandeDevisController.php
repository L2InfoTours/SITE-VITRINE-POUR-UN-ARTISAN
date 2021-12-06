<?php

namespace App\Controller;

use App\Entity\DemandeDevis;
use App\Form\DemandeDevisType;
use App\Repository\DemandeDevisRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/devis-contact')]
class DemandeDevisController extends AbstractController
{
    #[Route('/', name: 'demande_devis_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $demandeDevi = new DemandeDevis();
        $form = $this->createForm(DemandeDevisType::class, $demandeDevi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($demandeDevi);
            $entityManager->flush();

            return $this->redirectToRoute('demande_devis_new', [
            ], Response::HTTP_SEE_OTHER);
        }
        
        return $this->renderForm('demande_devis/new.html.twig', [
            'demande_devi' => $demandeDevi,
            "titre" => "Demande de devis",
            'form' => $form,
        ]);
    }
}
