<html>
<head>
    <title>Post</title>
</head>
<body>
    <h1> Post title</h1>
    @if($post_num)
        <h2> Post #{{($post_num)}}</h2>
    @else 
        <h2> Invalid post id</h2>
    @endif
    <p> this is where the content of posts will go</p>
</body>
</html>
