<?php

namespace App\Controller;

use App\Entity\DemandeDevis;
use App\Form\DemandeDevisType;
use App\Repository\DemandeDevisRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DemandeDevisController extends AbstractController
{
	#[Route('/', name: 'demande_devis', methods: ['GET', 'POST'])]
    public function index(DemandeDevisRepository $demandeDevisRepository): Response
    {
        return $this->render('demande_devis/index.html.twig', [
            'demande_devis' => $demandeDevisRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'demande_devis_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $demandeDevi = new DemandeDevis();
        $form = $this->createForm(DemandeDevisType::class, $demandeDevi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($demandeDevi);
            $entityManager->flush();

            return $this->redirectToRoute('demande_devis_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('demande_devis/new.html.twig', [
            'demande_devi' => $demandeDevi,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'demande_devis_show', methods: ['GET'])]
    public function show(DemandeDevis $demandeDevi): Response
    {
        return $this->render('demande_devis/show.html.twig', [
            'demande_devi' => $demandeDevi,
        ]);
    }

    #[Route('/{id}/edit', name: 'demande_devis_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, DemandeDevis $demandeDevi): Response
    {
        $form = $this->createForm(DemandeDevisType::class, $demandeDevi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('demande_devis_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('demande_devis/edit.html.twig', [
            'demande_devi' => $demandeDevi,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'demande_devis_delete', methods: ['POST'])]
    public function delete(Request $request, DemandeDevis $demandeDevi): Response
    {
        if ($this->isCsrfTokenValid('delete'.$demandeDevi->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($demandeDevi);
            $entityManager->flush();
        }

        return $this->redirectToRoute('demande_devis_index', [], Response::HTTP_SEE_OTHER);
    }
}
