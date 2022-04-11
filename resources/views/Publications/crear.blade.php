@extends('layouts.app')

@section('content')

{{-- <style>
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
    .profile-picture{
        background-image: url('images/perfil.jpg');
        background-size: cover;
        width: 3rem;
        height: 3rem;
    }
</style> --}}

{{-- 
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
</nav> --}}

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <!-- PRIMER TARJETA -->
                <div class="card mb-5">
                    <form>
                        <div class="card-body">
                            <h4 class="mb-1 font-weight-semibold">Crea una nueva publicación</h4>

                            <div class="row"style="margin-left: 1px;">
                                <div>
                                    <div class="profile-picture rounded-circle" style="margin-right: 15;"></div>
                                        <div>
                                            <a href="#" class="d-block text-decoration-none font-weight-bold mb-0">Juan_Nava897</a>
                                            <small class="text-muted">Photographer</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin-left: 10px;">
                                <div class="col-4">
                                    <div class="box-widget widget-user">
                                        <div class="widget-user-image d-sm-flex">
                                            <span class="avatar" style="background-image: url(({{asset('images/perfil.jpg')}}))">
                                            </span>
                                            <div class="ml-sm-3 mt-4">
                                                <div class="form-group">
                                                    <label class="form-label">Selecciona una imagen</label>
                                                    <div class="input-group file-browser">
                                                        <input type="text" class="form-control border-right-0 browse-file" placeholder="Cargar una imagen..." readonly="">
                                                        <label class="input-group-append mb-0">
                                                            <span class="btn ripple btn-primary">
                                                                Examinar <input type="file" class="file-browserinput" style="display: none;" multiple="" name="foto">
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <br>

                            <div class="row" style="margin-left: 10px;">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="form-label">Añade una descripción</label>
                                        <textarea class="form-control" type="text" rows="6" placeholder="Aña una descripción..." name="actividad"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-5 mb-4">
                                    <div class="form-group">
                                        <label class="form-label">Añade un titulo</label>
                                        <input class="form-control" type="text" placeholder="Añade un titulo..." name="departamento" maxlength="16">
                                    </div>
                                </div>

                            </div>

                            <div class="card-footer mt-3" >
                                <button type="submit" class="btn btn-primary" style="float: right;">
                                    <i class="feather  feather-save sidemenu_icon"></i>
                                    Postear</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
