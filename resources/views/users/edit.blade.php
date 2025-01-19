<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User Info</title>
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
        <h1>Edit Profile</h1>
    </header>

    <section>
        <form action="{{ route('users.update', ['id' => $user->id]) }}" method='POST'>
            @csrf
            @method('PUT')

            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ $user->name }}">
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ $user->email }}">
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" value="{{ $user->password }}">
            <br>

            <button type="submit">Save</button>
        </form>
    </section>

    <div>
        <button type='submit'>Save</button>
        <button><a href="{{ route('users.index') }}">Back</a></button>
    </div>
</body>
</html>
