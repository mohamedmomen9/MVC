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
		<h1><a href="/check24/blog/home"><img width="60px" scr="<?php echo constant("BLOG_LOGO"); ?>"/></a><?php echo constant("BLOG_NAME"); ?></h1>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="/check24/blog/home">Ubersicht</a></li>
                <li class="nav-item"><a class="nav-link" href="/check24/blog/blog/create">Impressum</a></li>
            </ul>
            <div my-2 my-lg-0><a class="nav-link" href="/check24/blog/login/logout">Logout</a></div>
        </nav>
	<section>
        <table  class="table">
            <?php foreach($data as $row){
                echo "<tr><td>".$row['title']."</td>";
                echo "<td>".$row['text']."</td>";
                echo "<td>".$row['image']."</td></tr>";

            }?>
        </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
		integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
		crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>