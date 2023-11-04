<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merchant Creation Notification</title>
</head>
<body>
    <h1>Merchant Registration Approved</h1>

    <p>Hello {{ $user->username }},</p>

    <p>We are pleased to inform you that a new merchant has been approved and created. Below are the details:</p>

    <ul>
        <li>Merchant Name: {{ $merchant->name }}</li>
        <li>Created At: {{ $merchant->created_at->format('F j, Y \a\t h:i A') }}</li>
    </ul>

    <p>Thank you for using our platform.</p>

    <p>Regards,<br>Your UnivFoods Team</p>
</body>
</html>
