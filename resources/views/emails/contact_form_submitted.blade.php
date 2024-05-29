<!-- resources/views/emails/contact_form_submitted.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            line-height: 1.6;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        h1 {
            color: #4CAF50;
            text-align: center;
        }

        p {
            margin: 10px 0;
        }

        .content {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .content p {
            margin: 0 0 10px;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9em;
            color: #888;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>New Contact Form Submission</h1>
        <div class="content">
            <p><strong>Name:</strong> {{ $contact->name }}</p>
            <p><strong>Email:</strong> {{ $contact->email }}</p>
            <p><strong>Phone:</strong> {{ $contact->phone }}</p>
            <p><strong>Subject:</strong> {{ $contact->subject }}</p>
            <p><strong>Message:</strong> {{ $contact->message }}</p>
        </div>
        <div class="footer">
            <p>Dear Heaven Vision Church Team,</p>
            <p>We have received a new contact form submission. Please review the details above and reach out to the
                individual as soon as possible.</p>
            <p>Best regards,<br>Heaven Vision Church Website</p>
            <p><small>Please do not reply to this email. If you have any questions, contact us at <a
                        href="mailto:info@heavenvisionchurchinternational.com">info@heavenvisionchurchinternational.com</a>.</small>
            </p>
        </div>
    </div>
</body>

</html>
