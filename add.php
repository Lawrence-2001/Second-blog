<?php
include_once('functions.php');

$article = [
    'title' => [
        'assets' => NULL,
        'errors' => []
    ],
    'body' => [
        'assets' => NULL,
        'errors' => []
    ]
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    fill_article_arr($article);
    check_article_arr($article);
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Bloggy - Personal Blog Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<div class="wrapper">
    <div class="sidebar">
        <div class="sidebar-text d-flex flex-column h-100 justify-content-center text-center">
            <img class="mx-auto d-block w-75 bg-primary img-fluid rounded-circle mb-4 p-3" src="img/profile.jpg"
                 alt="Image">
            <h1 class="font-weight-bold">Kate Glover</h1>
            <p class="mb-4">
                Justo stet no accusam stet invidunt sanctus magna clita vero eirmod, sit sit labore dolores lorem. Lorem
                at sit dolor dolores sed diam justo
            </p>
            <div class="d-flex justify-content-center mb-5">
                <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <a href="" class="btn btn-lg btn-block btn-primary mt-auto">Hire Me</a>
        </div>
        <div class="sidebar-icon d-flex flex-column h-100 justify-content-center text-right">
            <i class="fas fa-2x fa-angle-double-right text-primary"></i>
        </div>
    </div>
    <div class="content">
        <!-- Navbar Start -->
        <div class="container p-0">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
                <a href="" class="navbar-brand d-block d-lg-none">Navigation</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav m-auto">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="template/about.html" class="nav-item nav-link">About</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu">
                                <a href="template/blog.html" class="dropdown-item">Blog Grid</a>
                                <a href="template/single.html" class="dropdown-item">Blog Detail</a>
                            </div>
                        </div>
                        <a href="add.php" class="nav-item nav-link">Add article</a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->

        <!-- Blog List Start -->
        <div class="container bg-white pt-5">
            <form action="add.php" method="post">
                <label for="article_title">Title:</label><br>
                <input type="text" name="article_title"><br><br>
                <?= split_errors($article['title']['errors']) ?>
                <label for="article_body">Article:</label><br>
                <input type="text" name="article_body"><br><br>
                <?= split_errors($article['body']['errors']) ?>
                <button type="submit">Submit</button>
            </form>
            <br><br><br><br>
        </div>
        <!-- Blog List End -->


        <!-- Footer Start -->
        <div class="container py-4 bg-secondary text-center">
            <p class="m-0 text-white">
                &copy; <a class="text-white font-weight-bold" href="#">Your Site Name</a>. All Rights Reserved. Designed
                by <a class="text-white font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
            </p>
        </div>
        <!-- Footer End -->
    </div>
</div>

<!-- Back to Top -->
<a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>
</html>