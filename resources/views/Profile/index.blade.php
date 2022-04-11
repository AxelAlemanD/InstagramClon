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
</style> --}}

<div class="container">
    <div class="d-flex justify-content-center py-5">
        <div class="image_outer_container">
            <div class="image_inner_container">
                <img src="images/perfil.jpg">
            </div>
        </div>
        <div class="profile-user-settings d-flex justify-content-between align-items-center">
            <h1 class="profile-user-name px-3">{{$currentUser->username}}</h1>
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
                <li class="bio-user"><span class="font-weight-bold px-1">{{$currentUser->username}}</span>Lorem ipsum dolor sit, amet consectetur adipisicing elit 📷✈️🏕️</li>
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
@endsection