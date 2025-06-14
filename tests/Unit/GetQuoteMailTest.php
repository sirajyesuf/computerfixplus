<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Mail\GetQuote;
use Illuminate\Mail\Mailables\Address;

class GetQuoteMailTest extends TestCase
{
    public function test_get_quote_mail_has_correct_data(): void
    {
        $fullname = 'John Doe';
        $email = 'john@example.com';
        $problem = 'My laptop screen is broken and needs repair.';

        $mail = new GetQuote($fullname, $email, $problem);

        $this->assertEquals($fullname, $mail->fullname);
        $this->assertEquals($email, $mail->email);
        $this->assertEquals($problem, $mail->problem);
    }

    public function test_get_quote_mail_envelope_has_reply_to(): void
    {
        $fullname = 'Jane Smith';
        $email = 'jane@example.com';
        $problem = 'Computer won\'t start up.';

        $mail = new GetQuote($fullname, $email, $problem);
        $envelope = $mail->envelope();

        $this->assertCount(1, $envelope->replyTo);
        $this->assertEquals($email, $envelope->replyTo[0]->address);
        $this->assertEquals($fullname, $envelope->replyTo[0]->name);
    }

    public function test_get_quote_mail_content_view(): void
    {
        $fullname = 'Test User';
        $email = 'test@example.com';
        $problem = 'Testing the mail content.';

        $mail = new GetQuote($fullname, $email, $problem);
        $content = $mail->content();

        $this->assertEquals('mail.getquote', $content->view);
        $this->assertEquals($fullname, $content->with['fullname']);
        $this->assertEquals($email, $content->with['email']);
        $this->assertEquals($problem, $content->with['problem']);
    }

    public function test_get_quote_mail_with_special_characters(): void
    {
        $fullname = 'José María Rodríguez';
        $email = 'jose@example.com';
        $problem = 'Computer issues with áéíóú characters & symbols @#$%';

        $mail = new GetQuote($fullname, $email, $problem);

        $this->assertEquals($fullname, $mail->fullname);
        $this->assertEquals($email, $mail->email);
        $this->assertEquals($problem, $mail->problem);
    }

    public function test_get_quote_mail_with_empty_strings(): void
    {
        $fullname = '';
        $email = '';
        $problem = '';

        $mail = new GetQuote($fullname, $email, $problem);

        $this->assertEquals($fullname, $mail->fullname);
        $this->assertEquals($email, $mail->email);
        $this->assertEquals($problem, $mail->problem);
    }

    public function test_get_quote_mail_with_long_content(): void
    {
        $fullname = 'Very Long Name ' . str_repeat('Test ', 20);
        $email = 'longemail@example.com';
        $problem = str_repeat('This is a very detailed problem description. ', 100);

        $mail = new GetQuote($fullname, $email, $problem);

        $this->assertEquals($fullname, $mail->fullname);
        $this->assertEquals($email, $mail->email);
        $this->assertEquals($problem, $mail->problem);
    }
} 