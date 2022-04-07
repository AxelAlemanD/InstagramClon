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
    .profile-picture{
        background-image: url('images/perfil.jpg');
        background-size: cover;
        width: 3rem;
        height: 3rem;
    }

    .container{
       	height: 100%;
       	align-content: center;
    }

    .image_outer_container{
       	margin-top: 20px;
       	border-radius: 50%;
    }

    .image_inner_container{
       	border-radius: 50%;
       	padding: 5px;
        background: #833ab4;
        background: -webkit-linear-gradient(to bottom, #fcb045, #fd1d1d, #833ab4);
        background: linear-gradient(to bottom, #fcb045, #fd1d1d, #833ab4);
    }
    .image_inner_container img{
       	height: 200px;
       	width: 200px;
       	border-radius: 50%;
       	border: 5px solid white;
    }
    .image{
        display: block;
        width: 100%;
    }
    .overlay{
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100%;
        width: 100%;
        opacity: 0;
        transition: .5s ease;
        background-color: rgba(255, 255, 255, 0.9);
    }
    .caption{
        font-size: 2rem;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        text-align: center;
    }

    .img-container:hover .overlay{
        opacity: 1;
    }
    .list {
    position: absolute;
    margin-top: 150px;
    margin-left: 390px;
    }

    .list ul li {
    float: left;
    }
    .bio-user{
        margin-left: 12px;
        margin-top: 20px;
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
    <body style="background: #EFEFBB;
        background: -webkit-linear-gradient(to right, #D4D3DD, #EFEFBB);
        background: linear-gradient(to right, #D4D3DD, #EFEFBB);">
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container d-flex justify-content-between">
        <div>
            <a class="navbar-brand border-right pr-4" href="#"><i class="fa-brands fa-instagram lead"></i></a>
            <img src="images/insta.png" class="img-fluid w-50">
        </div>
        <form class="d-flex position-relative">
            <input class="form-control bg-grey border  text-center mr-2" type="Search" placeholder="Search" aria-label="Search">
            <button class="btn btn-link text-muted position-absolute" type="submit"><i class="fas fa-search"></i></button>
        </form>

        <div class="collapse navbar-collapse w-auto" id="navbarSupportedContent">
            <ul class="navbar-nav  mb-2 " style="margin-left: auto;">
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
            <div class="profile-picture rounded-circle" style="margin-left: 15;"></div>
        </div>
    </div>
</nav>

            <div class="container">
                <div class="d-flex justify-content-center py-5">
                    <div class="image_outer_container">
                        <div class="image_inner_container">
                            <img src="images/perfil.jpg">
                        </div>
                    </div>
                    <div class="profile-user-settings d-flex justify-content-between align-items-center">
                        <h1 class="profile-user-name px-3">Juan_Nava897</h1>
                        <button class="btn btn-primary font-weight-bold">seguir</button>
                        <button class="btn profile-settings-btn" aria-label="profile settings"><i class="fas fa-cog" aria-hidden="true"></i></button>
                    </div>

                    <div class="list">
                        <ul class="list-unstyled">
                            <li class="px-3"><span class="font-weight-bold">9</span> publicaciones</li>
                            <li class="px-3"><span class="font-weight-bold">3.2k</span> seguidores</li>
                            <li class="px-3"><span class="font-weight-bold">4</span> seguidos</li>
                        </ul>
                        <ul class="list-unstyled">
                            <li class="bio-user"><span class="font-weight-bold px-1">Juan_Nava897</span>Lorem ipsum dolor sit, amet consectetur adipisicing elit 📷✈️🏕️</li>
                        </ul>
                    </div>
                </div>



                <div class="row">
                    <div class="col-lg-4 col-sm-6 py-3 px-2">
                        <div class="thumbnail">
                            <div class="img-container">
                                <img src="images/post_4.jpg" alt="" class="image">
                                <div class="overlay">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 py-3 px-2">
                        <div class="thumbnail">
                            <div class="img-container">
                                <img src="images/post_4.jpg" alt="" class="image">
                                <div class="overlay">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 py-3 px-2">
                        <div class="thumbnail">
                            <div class="img-container">
                                <img src="images/post_4.jpg" alt="" class="image">
                                <div class="overlay">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 py-1 px-2">
                        <div class="thumbnail">
                            <div class="img-container">
                                <img src="images/post_4.jpg" alt="" class="image">
                                <div class="overlay">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 py-1 px-2">
                        <div class="thumbnail">
                            <div class="img-container">
                                <img src="images/post_4.jpg" alt="" class="image">
                                <div class="overlay">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 py-1 px-2">
                        <div class="thumbnail">
                            <div class="img-container">
                                <img src="images/post_4.jpg" alt="" class="image">
                                <div class="overlay">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 py-3 px-2">
                        <div class="thumbnail">
                            <div class="img-container">
                                <img src="images/post_4.jpg" alt="" class="image">
                                <div class="overlay">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 py-3 px-2">
                        <div class="thumbnail">
                            <div class="img-container">
                                <img src="images/post_4.jpg" alt="" class="image">
                                <div class="overlay">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 py-3 px-2">
                        <div class="thumbnail">
                            <div class="img-container">
                                <img src="images/post_4.jpg" alt="" class="image">
                                <div class="overlay">

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </body>
</html>
