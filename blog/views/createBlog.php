<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png">
    <title><?php echo constant("BLOG_NAME"); ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

	<section>
        <form method="post" action="http://localhost/check24/blog/blog/store">
            <label for="username"><b>Title</b></label>
            <input type="title" placeholder="Enter title" name="title" required>

            <label for="image"><b>Image</b></label>
            <input type="title" placeholder="Enter image link" name="image" required>

            <label for="username"><b>Text</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <button type="submit">Login</button>
        </form>
	<section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
		integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
		crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>