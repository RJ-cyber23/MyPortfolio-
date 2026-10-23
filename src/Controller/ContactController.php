<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Model\ContactMessage;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Attribute\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'Contact')]
    public function contact(
        Request $request,
        MailerInterface $mailer,
        LoggerInterface $logger,
        #[Autowire('%env(CONTACT_TO_EMAIL)%')] string $contactEmail,
    ): Response {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var ContactMessage $data */
            $data = $form->getData();

            $name = $data->name ?? '';
            $senderEmail = $data->email ?? '';
            $subject = $data->subject ?? '';
            $message = $data->message ?? '';

            $email = (new Email())
                ->from($contactEmail)
                ->to($contactEmail)
                ->replyTo($senderEmail)
                ->subject('Portfolio contact: '.str_replace(["\r", "\n"], ' ', $subject))
                ->text(sprintf(
                    "New message from the portfolio contact form.\n\nName: %s\nEmail: %s\nSubject: %s\n\n%s\n",
                    $name,
                    $senderEmail,
                    $subject,
                    $message,
                ));

            try {
                $mailer->send($email);
                $this->addFlash('contact_success', 'Thanks — your message was sent. I’ll get back to you soon.');

                return $this->redirectToRoute('Contact');
            } catch (\Throwable $e) {
                $logger->error('Contact form email failed to send.', ['exception' => $e]);
                $this->addFlash('contact_error', 'Your message could not be sent right now. Please try again in a moment.');
            }
        }

        return $this->render('Contact.html', [
            'form' => $form,
        ]);
    }
}
