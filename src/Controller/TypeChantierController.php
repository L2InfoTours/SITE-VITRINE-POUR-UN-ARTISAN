<?php

namespace App\Controller;

use App\Entity\TypeChantier;
use App\Form\TypeChantierType;
use App\Repository\TypeChantierRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/type/chantier')]
class TypeChantierController extends AbstractController
{
    #[Route('/', name: 'type_chantier_index', methods: ['GET'])]
    public function index(TypeChantierRepository $typeChantierRepository): Response
    {
        return $this->render('type_chantier/index.html.twig', [
            'type_chantiers' => $typeChantierRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'type_chantier_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $typeChantier = new TypeChantier();
        $form = $this->createForm(TypeChantierType::class, $typeChantier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($typeChantier);
            $entityManager->flush();

            return $this->redirectToRoute('type_chantier_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('type_chantier/new.html.twig', [
            'type_chantier' => $typeChantier,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'type_chantier_show', methods: ['GET'])]
    public function show(TypeChantier $typeChantier): Response
    {
        return $this->render('type_chantier/show.html.twig', [
            'type_chantier' => $typeChantier,
        ]);
    }

    #[Route('/{id}/edit', name: 'type_chantier_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, TypeChantier $typeChantier): Response
    {
        $form = $this->createForm(TypeChantierType::class, $typeChantier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('type_chantier_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('type_chantier/edit.html.twig', [
            'type_chantier' => $typeChantier,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'type_chantier_delete', methods: ['POST'])]
    public function delete(Request $request, TypeChantier $typeChantier): Response
    {
        if ($this->isCsrfTokenValid('delete'.$typeChantier->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($typeChantier);
            $entityManager->flush();
        }

        return $this->redirectToRoute('type_chantier_index', [], Response::HTTP_SEE_OTHER);
    }
}
