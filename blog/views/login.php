<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <div class="row justify-content-center align-items-center" style="height: 550px;">
        <div class="col-md-5 my-auto card p-3" style="border-radius: 1rem;">
            <div class="d-flex align-items-center mb-3 pb-1">
                <span class="h1 fw-bold mb-0">Login</span>
            </div>
            <?php
            if (isset($_GET['error']) && $_GET['error'] == 1) {
                echo "<div class='alert alert-warning' role='alert'>Login failed. Please try again.</div>";
            }
            ?>
            <form method="POST" action="login/login">
                <div class="form-outline mb-4">
                    <input type="text" name="username" class="form-control" placeholder="Username" />
                </div>
                <div class="form-outline mb-4">
                    <input type="password" name="password" class="form-control" placeholder="Password" />
                </div>

                <button type="submit" class="btn btn-dark btn-lg btn-block">Login</button>
            </form>
        </div>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
