<?php

namespace App\Controller;

use App\Entity\Offre;
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
	#[Route('/', name: 'reponse_index', methods: ['GET','POST'])]
	public function index(): Response
	{
		$page = 0;
		$id = 0;
		return $this->search($id,$page);
	}
	#[Route('/offre={id}&page={page}', name: 'offre_search', methods: ['GET'])]
	public function search(int $id,int $page): Response
	{
		$pageLength = 4;
		$page = 0;
		$id = 0;
		$repo = $this->getDoctrine()->getRepository(Offre::class);
		$offre = $repo->find($id);
		$offres = $repo->findAll();

		return $this->render('reponse/index.html.twig', [
			'offres' => array_slice($offres,$page,$pageLength),
			'offre' => $offre,
			'page'=>$page,
			'message'=>'',
		]);
	}
	#[Route('/postuler', name: 'reponse_new', methods: ['GET', 'POST'])]
	public function new(Request $request): Response
	{
		$reponse = new Reponse();
		$form = $this->createForm(Reponse1Type::class, $reponse);
		$form->handleRequest($request);
		$error = "";

		if ($form->isSubmitted() && $form->isValid()) {
			
			$message="GOOD";
			$file = $form['cv']->getData();

			if ($file) {
				$originalFilename = $file->getClientOriginalName();
				//pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = 'CV-'.uniqid().'.'."pdf";//$file->guessExtension();
                try {
                    $file->move(
                        $this->getParameter('cvs_directory'),
                        $newFilename
                    );
					$reponse->setCvFile($newFilename);
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }
			}
			
			// $reponse->setCvFile($file);

			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($reponse);
			$entityManager->flush();

			return $this->redirectToRoute('reponse_index', [
				'message' => $message,
			], Response::HTTP_SEE_OTHER);
		}else{
			// $error = $form;
		}

		return $this->renderForm('reponse/new.html.twig', [
			'form' => $form,
			'error' => $error,
		]);
	}
}
