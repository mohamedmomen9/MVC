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
    <div class="row justify-content-center align-items-center">
        <div class="col-md-8 my-auto card p-3" style="border-radius: 1rem;">
            <div class="d-flex align-items-center mb-3 pb-1">
                <span class="h1 fw-bold mb-0">New Blog</span>
            </div>
            <form method="post" action="http://localhost/check24/blog/blog/store">
                <div class="form-outline mb-4">
                    <input type="title" class="form-control" placeholder="Titel" name="title" required>
                </div>
                <div class="form-outline mb-4">
                    <input type="title" class="form-control" placeholder="Link zum Bild" name="image" required>
                </div>
                <div class="form-outline mb-4">
                    <textarea class="form-control" name="text" placeholder="Text" rows="5"></textarea>
                </div>
                <input type="hidden" name="user" value="1">
                <button type="submit" class="btn btn-dark btn-lg btn-block">Absenden</button>
            </form>
        </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
