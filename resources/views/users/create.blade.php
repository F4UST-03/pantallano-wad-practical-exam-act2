<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Profile</title>
    <style>
        header {
            padding: 20px;
        }

        section {
            padding: 20px;
            border: 1px solid;
        }
    </style>
</head>
<body>
    <header>
        <h1>Create Profile</h1>
    </header>

    <section>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf

            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            <br>
            <button type="submit">Save</button>
        </form>
    </section>

</body>
</html>
