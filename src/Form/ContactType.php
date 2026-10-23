<?php

namespace App\Form;

use App\Model\ContactMessage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

final class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Name',
                'label_attr' => ['class' => 'form-label'],
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'Your name',
                    'autocomplete' => 'name',
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'label_attr' => ['class' => 'form-label'],
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'you@example.com',
                    'autocomplete' => 'email',
                ],
            ])
            ->add('subject', TextType::class, [
                'label' => 'Subject',
                'label_attr' => ['class' => 'form-label'],
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'What is this about?',
                ],
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Message',
                'label_attr' => ['class' => 'form-label'],
                'attr' => [
                    'class' => 'form-textarea',
                    'placeholder' => 'Tell me about the project, the problem, and what you need.',
                    'rows' => 6,
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ContactMessage::class,
        ]);
    }
}
