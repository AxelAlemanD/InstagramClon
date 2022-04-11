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


    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
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
                {{-- <div class="profile-picture rounded-circle" style="margin-left: 15;"></div> --}}
                <a href="{{route('profile.index')}}"><img src="{{asset('images/perfil.jpg')}}" alt="" class="profile-picture rounded-circle" ></a>
                {{-- <div class="profile-picture rounded-circle" style="margin-left: 15;">
                    <a href="{{route('profile.index')}}"><img src="{{asset('images/perfil.jpg')}}" alt="" class="profile-picture rounded-circle" ></a>
                </div> --}}
            </div>
        </div>
    </nav>
    <div id="app">
        

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
    </script>
</body>
</html>
