<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Portfolio</title>
</head>

<body>
    <h2>Registration</h2>
    <form action="{{ url('/register') }}" method="POST">
    @csrf

    <input type="text" name="student_id" placeholder="Student ID" required>
    <br><br>
    <input type="text" name="name" placeholder="Name" required>
    <br><br>
    <input type="email" name="email" placeholder="Email" required>
    <br><br>
    <input type="password" name="password" placeholder="Password" required>
    <br><br>
    <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
    <br><br>
    <button type="submit">Register</button>
</form>

</body>

</html>