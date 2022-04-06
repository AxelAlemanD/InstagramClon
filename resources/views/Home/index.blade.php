<style>
    :root{
        --white: #ffffff;
        --grey: #fafafa;
    }
    .bg-grey {
        background-color: var(--grey);
    }
    .bg-light {
        background-color: var(--light)!important;
    }
    .navbar{
        min-height: 5rem;
    }
    i.lead {
        font-size: 1.8rem;
    }
    .form-control::focus{
        box-shadow: none;
    }
</style>


<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/99852e9fe2.js" crossorigin="anonymous"></script>

        <title>Instagram Clone</title>
    </head>
    <body class="bg-grey">
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container d-flex justify-content-between">
        <div>
            <a class="navbar-brand border-right pr-4" href="#"><i class="fa-brands fa-instagram lead"></i></a>
            <img src="images/insta.png" class="img-fluid w-50">
        </div>
        <form class="d-flex position-relative">
            <input class="form-control bg-grey border text-center mr-2" type="Search" placeholder="Search" aria-label="Search">
            <button class="btn btn-link text-muted position-absolute" type="submit"><i class="fas fa-search"></i></button>
        </form>

        <div class="collapse navbar-collapse w-auto" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link"  href="#"><i class="far fa-compass lead text-dark mr-3"></i></a>
                </li>
                <li class="nav-item">
                <a class="nav-link"  href="#"><i class="far fa-heart lead text-dark mr-3"></i></a>
                </li>
                <li class="nav-item">
                <a class="nav-link"  href="#"><i class="far fa-user lead text-dark"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
