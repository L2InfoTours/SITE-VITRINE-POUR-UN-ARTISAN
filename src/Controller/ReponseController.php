<?php

namespace App\Controller;

use App\Entity\Reponse;
use App\Form\Reponse1Type;
use App\Repository\ReponseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/offre')]
class ReponseController extends AbstractController
{
	#[Route('/', name: 'reponse_index', methods: ['GET'])]
	public function index(): Response
	{
		$page = 0;
		$id = 0;
		return $this->search($id,$page);
	}
    #[Route('/reponse={id}&page={page}', name: 'reponse_search', methods: ['GET'])]
    public function search(int $id,int $page): Response
    {
		$pageLength = 4;
		$page = 0;
		$id = 0;
		$repo = $this->getDoctrine()->getRepository(Reponse::class);
		$reponse = $repo->find($id);
		$reponses = $repo->findAll();

		return $this->render('reponse/index.html.twig', [
			'reponses' => array_slice($reponses,$page,$pageLength),
			'reponse' => $reponse,
			'page'=>$page,
		]);
	}

    #[Route('/new', name: 'reponse_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $reponse = new Reponse();
        $form = $this->createForm(Reponse1Type::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reponse);
            $entityManager->flush();

            return $this->redirectToRoute('reponse_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reponse/new.html.twig', [
            'reponse' => $reponse,
            'form' => $form,
        ]);
    }

    // #[Route('/{id}', name: 'reponse_show', methods: ['GET'])]
    // public function show(Reponse $reponse): Response
    // {
    //     return $this->render('reponse/show.html.twig', [
    //         'reponse' => $reponse,
    //     ]);
    // }

    #[Route('/{id}/edit', name: 'reponse_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reponse $reponse): Response
    {
        $form = $this->createForm(Reponse1Type::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reponse_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reponse/edit.html.twig', [
            'reponse' => $reponse,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'reponse_delete', methods: ['POST'])]
    public function delete(Request $request, Reponse $reponse): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reponse->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reponse);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reponse_index', [], Response::HTTP_SEE_OTHER);
    }
}
