<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post</title>
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
        <h1>Edit Post</h1>
    </header>
    <section>
        <form action="{{ route('posts.update', ['id' => $post->id]) }}" method='POST'>
            @csrf
            @method('PUT')

            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ $post->title }}">
            <br>
            <label for="content">Content</label>
            <textarea name="body" id="body" value="{{ $post->body }}"></textarea>

            <button type='submit'>Save</button>
        </form>
    </section>

    <div>
        <button><a href="{{ route('posts.index') }}">Back</a></button>
    </div>
</body>
</html>