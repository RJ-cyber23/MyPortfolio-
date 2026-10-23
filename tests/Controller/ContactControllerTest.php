<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\MailerAssertionsTrait;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class ContactControllerTest extends WebTestCase
{
    use MailerAssertionsTrait;

    public function testContactPageRendersForm(): void
    {
        $client = static::createClient();
        $client->request('GET', '/contact');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorExists('form.contact-form');
        $this->assertSelectorExists('input[name="contact[name]"]');
        $this->assertSelectorExists('input[name="contact[email]"]');
        $this->assertSelectorExists('input[name="contact[subject]"]');
        $this->assertSelectorExists('textarea[name="contact[message]"]');
    }

    public function testValidContactFormSendsEmailToConfiguredAddress(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/contact');

        $form = $crawler->selectButton('Send message')->form([
            'contact[name]' => 'Jane Doe',
            'contact[email]' => 'jane@example.com',
            'contact[subject]' => 'Project inquiry',
            'contact[message]' => 'I would like to talk about a new project.',
        ]);

        $client->submit($form);

        $this->assertResponseRedirects('/contact');
        $this->assertEmailCount(1);

        $email = $this->getMailerMessage();
        $this->assertEmailAddressContains($email, 'To', 'reyjohnbmarcelo45@gmail.com');
        $this->assertEmailAddressContains($email, 'Reply-To', 'jane@example.com');
        $this->assertEmailSubjectContains($email, 'Project inquiry');
        $this->assertEmailTextBodyContains($email, 'Jane Doe');

        $client->followRedirect();
        $this->assertSelectorExists('.flash-success');
    }

    public function testInvalidContactFormShowsErrorsAndDoesNotSend(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/contact');

        $form = $crawler->selectButton('Send message')->form([
            'contact[name]' => '',
            'contact[email]' => 'not-an-email',
            'contact[subject]' => '',
            'contact[message]' => 'short',
        ]);

        $client->submit($form);

        $this->assertResponseStatusCodeSame(422);
        $this->assertStringContainsString('Please enter your name.', $client->getResponse()->getContent());
        $this->assertStringContainsString('Please enter a valid email address.', $client->getResponse()->getContent());
        $this->assertEmailCount(0);
    }
}
