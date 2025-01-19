<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
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
        <h1>Create Post</h1>
    </header>

    <section>
        <form action="{{ route('posts.store') }}", method="POST">
            @csrf

            <label for="title">Title:</label>
            <input type="text" name="title" id="title" placeholder="Enter title">
            <br>
            <label for="content">Content</label>
            <textarea name="body" id="body" placeholder="Enter your content">Content:</textarea>

            <button type='submit'>Save</button>
        </form>
    </section>

    <div>
        <button><a href="{{ route('posts.index') }}">Back</a></button>
    </div>
</body>
</html>
