<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editpost</title>
</head>
<body>
    <p>you are now editing a comment {{ $postId }}</p>
    <form action="{{ url('home/storecomment/'.$postId) }}">
        @csrf
        <label for="title">Content</label>
        <input type="text" name="content" id="content" placeholder="content">

        <input type="submit" value="submit">
    </form>
</body>
</html>