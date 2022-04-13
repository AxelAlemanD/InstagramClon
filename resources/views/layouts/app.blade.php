<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/99852e9fe2.js" crossorigin="anonymous"></script>

    <!-- Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    @yield('extra-css')
</head>
<body style="background: #EFEFBB;
        background: -webkit-linear-gradient(to right, #D4D3DD, #EFEFBB);
        background: linear-gradient(to right, #D4D3DD, #EFEFBB);">
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container d-flex justify-content-between">
            <div>
                <a class="navbar-brand border-right pr-4" href="{{route('home')}}"><i class="fa-brands fa-instagram lead"></i></a>
                <a href="{{route('home')}}"><img src="{{asset('images/insta.png')}}" class="img-fluid w-50"></a>
            </div>
            <div class="col-md-4">
                <select class="livesearch form-control p-3" name="livesearch"></select>
            </div>
        
            <div class="collapse navbar-collapse w-auto" id="navbarSupportedContent">
                <ul class="navbar-nav  mb-2 " style="margin-left: auto;">
                    <li class="nav-item">
                        <a href="#"  data-toggle="modal" data-target="#createPublication">
                            <i class="far fa-solid fa-camera lead text-dark mr-3"></i>
                        </a>
                        {{-- <a class="nav-link"  href="{{route('publications.create')}}"><i class="far fa-solid fa-camera lead text-dark mr-3"></i></a> --}}
                    </li>
                    <li class="nav-item">
                    <a class="nav-link"  href="#"><i class="far fa-heart lead text-dark mr-3"></i></a>
                    </li>
                </ul>
                <a href="{{route('profile.index')}}"><img src="{{asset(auth()->user()->image_url)}}" alt="" class="profile-picture rounded-circle" ></a>
            </div>
        </div>
    </nav>
    <div id="app">
        

        <main class="py-4">
            @yield('content')
            @extends('layouts.createPublication')
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> --}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Select2 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <script>
        function like(event) {
            event.preventDefault();
            let id = event.target.parentNode.getAttribute('data-id');            
            let user_id = {{auth()->user()->id}};

            $.ajax({
                type: "GET",
                dataType: "json",
                url: "{{route('likePublication')}}",
                data: {
                    'user_id': user_id,
                    'id': id,
                },
                success: function(response) {
                    if(response === 'like'){
                        event.target.style.setProperty("color", "red"); 
                    }else{
                        event.target.style.setProperty("color", "black"); 
                    }
                    countLikes(event.target);
                    
                }
            });
        }

        
        function countLikes(currentPublication) {
            let id = currentPublication.parentNode.getAttribute('data-id');
            let likesCount = currentPublication.closest(".d-flex").nextElementSibling;
            
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "{{route('getTotalLikesPublication')}}",
                data: {
                    'id': id,
                },
                success: function(totalLikes) {
                    likesCount.innerText = totalLikes + ' Me gusta';
                }
            });            
        }


        function addComment(event) {
            event.preventDefault();
            let id = event.target.getAttribute('data-id');            
            let user_id = {{auth()->user()->id}};
            let input = event.target.previousElementSibling;

            let panelComentarios = event.target.parentNode.previousElementSibling.querySelector('.panelComentarios');

            $.ajax({
                type: "GET",
                dataType: "json",
                url: "{{route('addComment')}}",
                data: {
                    'user_id': user_id,
                    'id': id,
                    'text': input.value,
                },
                success: function(newComment) {

                    let comment = document.createElement('div');
                    comment.innerHTML = '<p class="mb-0"><a href="{{route('profile.show',' + newComment.user_id')}}" class="text-dark text-decoration-none" style="font-weight: bold;">'+newComment.username+' </a>'+newComment.text+'</p>'+
                                    '<small class="d-block text-muted text-uppercase">Hace 8 horas</small>';
                                            
            
                    panelComentarios.appendChild(comment);
                    input.value = '';

                }
            });
        }

        function followUser(event) {
            event.preventDefault();
            let id = event.target.getAttribute('data-id');            
            let user_id = {{auth()->user()->id}};

            $.ajax({
                type: "post",
                dataType: "json",
                url: "{{route('followUser')}}",
                data: {
                    'user_id': user_id,
                    'id': id,
                },
                success: function(newFollow) {
                    if (newFollow === 'follow') {
                        event.target.innerText = 'Siguiendo';
                    } else {
                        event.target.innerText = 'Seguir';
                    }
                    window.location.reload();
                }
            });
        }

        function loadData(event) {
            const idPublication = event.target.parentNode.getAttribute('data-publication');
            let image = document.getElementById('image');
            let userImage = document.getElementById('userImage');
            let userName = document.getElementById('username');
            let publicationTitle = document.getElementById('publicationTitle');
            let panelComentarios = document.querySelector('.panelComentarios');
            
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "{{route('getPublication')}}",
                data: {
                    'id': idPublication,
                },
                success: function(data) {
                    image.src = '../'+data.publication.image_url;
                    userImage.src = '../'+data.profile.image_url;
                    userName.innerText = data.profile.username;
                    userName.href = 'profile/'+ data.profile.id;
                    publicationTitle.innerText = data.publication.title

                    panelComentarios.innerHTML = '';

                    data.comments.forEach( function(valor, indice, array) {
                        let comment = document.createElement('div');
                        comment.innerHTML = '<p class="mb-0"><a href="profile/'+ valor.user_id+'" class="text-dark text-decoration-none" style="font-weight: bold;">'+valor.user.username+' </a>'+valor.text+'</p>'+
                                    '<small class="d-block text-muted text-uppercase">Hace 8 horas</small>';
            
                        panelComentarios.appendChild(comment);
                    });
                }
            });
        }

        $('.livesearch').select2({
            placeholder: 'Select user',
            ajax: {
                url: '/user-search',
                dataType: 'json',
                delay: 250,
                processResults: function (data) {
                    return {
                        results: $.map(data, function (item) {
                            return {
                                text: item.username,
                                id: item.id
                            }
                        })
                    };
                },
                cache: true
            }
        });
        // When option appears under the search bar redirect to the profile
        $('.livesearch').on('select2:select', function (e) {
            if({{auth()->user()->id}} !== e.params.data.id){
                window.location.href = '/profile/'+e.params.data.id;
            }
            else{
                window.location.href = '/profile';
            }
        });
    </script>

    @yield('extra-js')
</body>
</html>
