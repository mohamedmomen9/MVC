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
<div class="container">
        <div class="row justify-content-md-center">
            <section class="col">
                <h1><a href="/check24/blog/home"><img width="60px" scr="<?php echo constant("BLOG_LOGO"); ?>"/></a><?php echo constant("BLOG_NAME"); ?></h1>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="/check24/blog/home">Ubersicht</a></li>
                        <li class="nav-item"><a class="nav-link" href="/check24/blog/blog/create">Impressum</a></li>
                    </ul>
                    <div my-2 my-lg-0><a class="nav-link" href="/check24/blog/login">Login</a></div>
                </nav>
            </section>
            <div class="container">
            <?php foreach($data as $row){
                    ?>
                    <div class="row justify-content-between">
                        <h3  class="p-2 m-2"><?php echo $row['date']." - ".$row['title']; ?></h3>
                        <div class="col col-sm-9">
                            <?php echo $row['text']; ?>
                            <p class="p-2 font-weight-light">
                                Author: <?php $user = new App\Models\User();
                                    echo $user->getUsername($row['user']); ?>
                            </p>
                        </div>
                        <div class="col col-sm-3">
                            <img src='<?php echo $row['image'] ?>' width='200px' height='200px'>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#"><<</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">>></a></li>
                </ul>
            </nav>
        </div>
</div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
