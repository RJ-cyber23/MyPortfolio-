<?php

namespace App\Model;

use Symfony\Component\Validator\Constraints as Assert;

final class ContactMessage
{
    #[Assert\NotBlank(message: 'Please enter your name.')]
    #[Assert\Length(max: 120, maxMessage: 'Your name cannot be longer than {{ limit }} characters.')]
    public ?string $name = '';

    #[Assert\NotBlank(message: 'Please enter your email address.')]
    #[Assert\Email(message: 'Please enter a valid email address.')]
    #[Assert\Length(max: 180, maxMessage: 'Your email address cannot be longer than {{ limit }} characters.')]
    public ?string $email = '';

    #[Assert\NotBlank(message: 'Please enter a subject.')]
    #[Assert\Length(max: 150, maxMessage: 'The subject cannot be longer than {{ limit }} characters.')]
    #[Assert\Regex(pattern: '/[\r\n]/', match: false, message: 'The subject cannot contain line breaks.')]
    public ?string $subject = '';

    #[Assert\NotBlank(message: 'Please write a message.')]
    #[Assert\Length(
        min: 10,
        max: 5000,
        minMessage: 'Your message should be at least {{ limit }} characters.',
        maxMessage: 'Your message cannot be longer than {{ limit }} characters.',
    )]
    public ?string $message = '';
}
