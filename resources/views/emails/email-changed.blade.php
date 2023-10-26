<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Changed Notification</title>
</head>
<body>
    <h1>Your Email has been changed!</h1>

    <p>Hello {{ $user->username }}</p>

    <p>Your email has been successfully changed from {{ $old_email }}  to {{ $new_email }} </p>

    <p>If you didn't take this action, Please contact Us asap by email us at univfoods@gmail.com</p>
</body>
</html>
