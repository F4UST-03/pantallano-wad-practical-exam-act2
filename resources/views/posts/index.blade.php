<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <table>
        <tr>
            <th>Post Id</th>
            <th>Title</th>
            <th>Content</th>
            <th>Author</th>
        </tr>

        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->body }}</td>

            @foreach ($post->users as $user)
            <td>{{ $user->name }}</td>
            @endforeach

            <td><a href="{{ route('posts.show', $post->id) }}">View Post</a></td>
            <td><a href="{{ route('posts.edit', $post->id) }}">Edit</a></td>
            <td>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <button><a href="{{ route('posts.create') }}">Create Post</a></button>
    <button><a href="{{ route('users.index') }}">Back to users</a></button>
</body>
</html>
