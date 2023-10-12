<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merchant Creation Notification</title>
</head>
<body>
    <h1>Merchant Created Successfully!</h1>

    <p>Hello {{ $user->name }},</p>

    <p>We are pleased to inform you that a new merchant has been created. Below are the details:</p>

    <ul>
        <li>Merchant Name: {{ $merchant->name }}</li>
        <li>Area: {{ $merchant->area->name }}</li>
        <li>Created At: {{ $merchant->created_at->format('F j, Y \a\t h:i A') }}</li>
    </ul>

    <p>Thank you for using our platform.</p>

    <p>Regards,<br>Your Application Team</p>
</body>
</html>
