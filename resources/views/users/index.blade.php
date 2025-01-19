<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        table, tr {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>User Id</th>
            <th>Title</th>
            <th>Post</th>
        </tr>

        @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->password }}</td>
            <td>
                <button><a href="{{ route('users.edit', $user->id) }}">Edit</a></button>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit">Delete</button>
            </td>

            @foreach ($users->post as $post)
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
                <td>
                    <button><a href="{{ route('users.edit', $student->id) }}">Edit</a></button>
                            <form action="{{ route('users.destroy', $student->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                            <button type="submit">Delete</button>
                </td>
            @endforeach

        </tr>
        @endforeach





        <button>Create Profile</button>
    </table>
</body>
</html>
