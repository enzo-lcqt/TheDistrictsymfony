<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactFormType;
use App\Service\MailService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    private $entityManager;
    private $mailer;
    private $mailService;

    public function __construct(EntityManagerInterface $entityManager, MailerInterface $mailer, MailService $mailService)
    {
        $this->entityManager = $entityManager;
        $this->mailer = $mailer;
        $this->mailService = $mailService;
    }

    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request): Response
    {
        $form = $this->createForm(ContactFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Création d'une instance de Contact
            $message = new Contact();
            
            // Remplissage de l'entité Contact avec les données du formulaire
            $message->setEmail($form->get('email')->getData());
            $message->setObjet($form->get('objet')->getData());
            $message->setMessage($form->get('message')->getData());

            // Persistance des données
            $this->entityManager->persist($message);
            $this->entityManager->flush();

            // Envoi de l'e-mail avec le service MailService
            $email = $this->mailService->sendMail('hello@example.com', $message->getEmail(), $message->getObjet(), $message->getMessage());
            
            // Vous pouvez rediriger l'utilisateur vers une page de confirmation
            return $this->redirectToRoute('app_accueil');
        }

        // Si le formulaire n'a pas encore été soumis ou n'est pas valide, afficher le formulaire
        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
