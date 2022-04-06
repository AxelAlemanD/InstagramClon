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
    .stories-container{
        height: 190px;
        overflow-y: auto;
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

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <!-- PRIMER TARJETA -->
                <div class="card mb-5">
                    <div class="card-body d-flex">
                        <div class="d-flex flex-grow-1">
                            <div class="profile-picture rounded-circle" style="margin-right: 15;"></div>
                            <a href="#" class="text-dark text-decoration-none font-weight-bold align-self-center" style="font-weight: bold;">Juan_nava897</a>
                        </div>
                        <div class="align-self-center">
                            <i class="fas fa-ellipsis-h"></i>
                        </div>
                    </div>

                    <img src="images/post_4.jpg" class="img-fluid">

                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <i class="far fa-heart lead mr-3"></i>
                                <i class="far fa-comment lead mr-3"></i>
                                <i class="far fa-paper-plane lead mr-3"></i>
                            </div>
                            <div>
                            <i class="far fa-bookmark lead mr-3"></i>
                            </div>
                        </div>
                        <p style="font-weight: bold;">39 Me gusta</p>
                        <p class="mb-0"><a href="#" class="text-dark text-decoration-none" style="font-weight: bold;">Juan_nava897</a> Una de las mejores fotos que he tomado!</p>

                        <div class="d-flex mb-3">
                            <p class="flex-grow-1 mb-0"><a href="#" class="text-dark text-decoration-none" style="font-weight: bold;">Axel_Isai33</a> Que buena foto!!!</p>
                            <i class="far fa-heart align-self-center"></i>
                        </div>
                        <small class="d-block text-muted text-uppercase">Hace 8 horas</small>
                    </div>

                    <div class="d-flex border-top py-3 px-2">
                        <input type="text" class="form-control border-0" placeholder="Agrega un comentario...">
                        <button type="submit" class="btn btn-link text-decoration-none" style="font-weight: bold; color: #0095f6;">Publicar</button>
                    </div>
                </div>

                <!-- SEGUNDA TARJETA -->
                <div class="card mb-5">
                    <div class="card-body d-flex">
                        <div class="d-flex flex-grow-1">
                            <div class="profile-picture rounded-circle" style="margin-right: 15;"></div>
                            <a href="#" class="text-dark text-decoration-none font-weight-bold align-self-center" style="font-weight: bold;">Juan_nava897</a>
                        </div>
                        <div class="align-self-center">
                            <i class="fas fa-ellipsis-h"></i>
                        </div>
                    </div>

                    <img src="images/post_2.jpg" class="img-fluid">

                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <i class="far fa-heart lead mr-3"></i>
                                <i class="far fa-comment lead mr-3"></i>
                                <i class="far fa-paper-plane lead mr-3"></i>
                            </div>
                            <div>
                            <i class="far fa-bookmark lead mr-3"></i>
                            </div>
                        </div>
                        <p style="font-weight: bold;">39 Me gusta</p>
                        <p class="mb-0"><a href="#" class="text-dark text-decoration-none" style="font-weight: bold;">Juan_nava897</a> Una de las mejores fotos que he tomado!</p>

                        <div class="d-flex mb-3">
                            <p class="flex-grow-1 mb-0"><a href="#" class="text-dark text-decoration-none" style="font-weight: bold;">Axel_Isai33</a> Que buena foto!!!</p>
                            <i class="far fa-heart align-self-center"></i>
                        </div>
                        <small class="d-block text-muted text-uppercase">Hace 8 horas</small>
                    </div>

                    <div class="d-flex border-top py-3 px-2">
                        <input type="text" class="form-control border-0" placeholder="Agrega un comentario...">
                        <button type="submit" class="btn btn-link text-decoration-none" style="font-weight: bold; color: #0095f6;">Publicar</button>
                    </div>
                </div>

                <!-- TERCER TARJETA -->
                <div class="card">
                    <div class="card-body d-flex">
                        <div class="d-flex flex-grow-1">
                            <div class="profile-picture rounded-circle" style="margin-right: 15;"></div>
                            <a href="#" class="text-dark text-decoration-none font-weight-bold align-self-center" style="font-weight: bold;">Juan_nava897</a>
                        </div>
                        <div class="align-self-center">
                            <i class="fas fa-ellipsis-h"></i>
                        </div>
                    </div>

                    <img src="images/post_3.jpg" class="img-fluid">

                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <i class="far fa-heart lead mr-3"></i>
                                <i class="far fa-comment lead mr-3"></i>
                                <i class="far fa-paper-plane lead mr-3"></i>
                            </div>
                            <div>
                            <i class="far fa-bookmark lead mr-3"></i>
                            </div>
                        </div>
                        <p style="font-weight: bold;">39 Me gusta</p>
                        <p class="mb-0"><a href="#" class="text-dark text-decoration-none" style="font-weight: bold;">Juan_nava897</a> Una de las mejores fotos que he tomado!</p>

                        <div class="d-flex mb-3">
                            <p class="flex-grow-1 mb-0"><a href="#" class="text-dark text-decoration-none" style="font-weight: bold;">Axel_Isai33</a> Que buena foto!!!</p>
                            <i class="far fa-heart align-self-center"></i>
                        </div>
                        <small class="d-block text-muted text-uppercase">Hace 8 horas</small>
                    </div>

                    <div class="d-flex border-top py-3 px-2">
                        <input type="text" class="form-control border-0" placeholder="Agrega un comentario...">
                        <button type="submit" class="btn btn-link text-decoration-none" style="font-weight: bold; color: #0095f6;">Publicar</button>
                    </div>
                </div>
            </div>


            <div class="col-lg-4">
                <div class="d-flex mb-4">
                    <div class="profile-picture rounded-circle" style="margin-right: 15;"></div>
                    <div>
                        <a href="#" class="d-block text-decoration-none font-weight-bold mb-0">Juan_Nava897</a>
                        <small class="text-muted">Photographer</small>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex">
                            <p class="text-muted flex-grow-1"  style="font-weight: bold;">Stories</p>
                            <small><a href="" class="text-decoration-none text-dark" style="font-weight: bold;">Ver todas</a></small>
                        </div>
                        <div class="stories-container">
                            <div class="d-flex mb-4">
                                <div class="profile-picture rounded-circle" style="margin-right: 15;"></div>
                                <div>
                                    <a href="" class="d-block text-dark text-decoration-none" style="font-weight: bold;">Uriegas_33</a>
                                    <small class="text-muted">hace 3 horas</small>
                                </div>
                            </div>
                            <div class="d-flex mb-4">
                                <div class="profile-picture rounded-circle" style="margin-right: 15;"></div>
                                <div>
                                    <a href="" class="d-block text-dark text-decoration-none" style="font-weight: bold;">Uriegas_33</a>
                                    <small class=" text-muted">hace 3 horas</small>
                                </div>
                            </div>
                            <div class="d-flex mb-4">
                                <div class="profile-picture rounded-circle" style="margin-right: 15;"></div>
                                <div>
                                    <a href="" class="d-block text-dark text-decoration-none" style="font-weight: bold;">Uriegas_33</a>
                                    <small class=" text-muted">hace 3 horas</small>
                                </div>
                            </div>
                            <div class="d-flex mb-4">
                                <div class="profile-picture rounded-circle" style="margin-right: 15;"></div>
                                <div>
                                    <a href="" class="d-block text-dark text-decoration-none" style="font-weight: bold;">Uriegas_33</a>
                                    <small class=" text-muted">hace 3 horas</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <p class="text-muted flex-grow-1"  style="font-weight: bold;">Sugerencias para ti</p>
                            <small><a href="" class="text-decoration-none  text-dark" style="font-weight: bold;">Ver todo</a></small>
                        </div>


                            <div class="d-flex mb-4">
                                <div class="profile-picture rounded-circle" style="margin-right: 15;"></div>
                                <div>
                                    <a href="" class="d-block text-dark text-decoration-none" style="font-weight: bold;">Axel_Isai33</a>
                                    <small class="text-muted">Nuevo en instagram</small>
                                </div>
                                <div class="d-flex flex-grow-1">
                                    <a href="#" class="align-self-center text-decoration-none" style="margin-left: auto; font-weight: bold;">Seguir</a>
                                </div>
                            </div>
                            <div class="d-flex mb-4">
                                <div class="profile-picture rounded-circle" style="margin-right: 15;"></div>
                                <div>
                                    <a href="" class="d-block text-dark text-decoration-none" style="font-weight: bold;">Axel_Isai33</a>
                                    <small class=" text-muted">Nuevo en instagram</small>
                                </div>
                                <div class="d-flex flex-grow-1">
                                    <a href="#" class="align-self-center text-decoration-none" style="margin-left: auto; font-weight: bold;">Seguir</a>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="profile-picture rounded-circle" style="margin-right: 15;"></div>
                                <div>
                                    <a href="" class="d-block text-dark text-decoration-none" style="font-weight: bold;">Axel_Isai33</a>
                                    <small class=" text-muted">Nuevo en instagram</small>
                                </div>
                                <div class="d-flex flex-grow-1">
                                    <a href="#" class="align-self-center text-decoration-none" style="margin-left: auto; font-weight: bold;">Seguir</a>
                                </div>
                            </div>
                     </div>
                </div>
            </div>


        </div>
    </div>

</section>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>
