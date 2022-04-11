@extends('layouts.app')

@section('content')

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <!-- TERCER TARJETA -->
                @isset($follows)
                    @foreach ($follows as $follow)
                        @foreach ($follow->publications as $publication)
                            <div class="card">
                                <div class="card-body d-flex">
                                    <div class="d-flex flex-grow-1">
                                        <div class="profile-picture rounded-circle" style="margin-right: 15;"></div>
                                        <a href="{{route('profile.show', $publication->user_id)}}" class="text-dark text-decoration-none font-weight-bold align-self-center" style="font-weight: bold;">{{$publication->user->username}}</a>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </div>
                                </div>
                            
                                <img src="{{$publication->image_url}}" class="img-fluid">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <a href="" onclick="like(event);" data-id="{{$publication->id}}" class="@if($publication->isLiked()) text-danger fill-danger @else text-dark @endif"><i class="far fa-heart lead mr-3"></i></a>
                                            <i class="far fa-comment lead mr-3"></i>
                                            <i class="far fa-paper-plane lead mr-3"></i>
                                        </div>
                                        <div>
                                        <i class="far fa-bookmark lead mr-3"></i>
                                        </div>
                                    </div>
                                    <p style="font-weight: bold;" class="likes">{{count($publication->likes)}} Me gusta</p>
                                    <div class="panelComentarios">
                                    @foreach ($publication->comments as $comment)
                                        
                                            <div>
                                                <p class="mb-0"><a href="{{route('profile.show', $comment->user_id)}}" class="text-dark text-decoration-none" style="font-weight: bold;">{{$comment->user->username}} </a>{{$comment->text}}</p>    
                                                <small class="d-block text-muted text-uppercase">Hace 8 horas</small>
                                            </div>
                                    @endforeach
                                    </div>
                                </div>
                            
                                <div class="d-flex border-top py-3 px-2">
                                    <input type="text" class="form-control border-0" placeholder="Agrega un comentario...">
                                    <button type="submit" class="btn btn-link text-decoration-none" style="font-weight: bold; color: #0095f6;" onclick="addComment(event);"  data-id="{{$publication->id}}">Publicar</button>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                @endisset
            </div>
                

            {{-- COLUMNA LATERAL --}}
            <div class="col-lg-4">
                <div class="d-flex mb-4">
                    <div class="profile-picture rounded-circle" style="margin-right: 15;"></div>
                    <div>
                        <a href="{{route('profile.index')}}" class="d-block text-decoration-none font-weight-bold mb-0">{{$currentUser->username}}</a>
                        {{-- <small class="text-muted">Photographer</small> --}}
                    </div>
                </div>

                {{-- HISTORIAS --}}
                {{-- <div class="card mb-4">
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
                </div> --}}



                {{-- SUGERENCIAS --}}
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <p class="text-muted flex-grow-1"  style="font-weight: bold;">Sugerencias para ti</p>
                            <small><a href="" class="text-decoration-none  text-dark" style="font-weight: bold;">Ver todo</a></small>
                        </div>
                        @foreach ($suggestions as $suggestion)
                        <div class="d-flex mb-4">
                            <div class="profile-picture rounded-circle" style="margin-right: 15;"></div>
                            <div>
                                <a href="{{route('profile.show', $suggestion->user_id)}}" class="d-block text-dark text-decoration-none" style="font-weight: bold;">{{$suggestion->user->username}}</a>
                                {{-- <small class="text-muted">Nuevo en instagram</small> --}}
                            </div>
                            <div class="d-flex flex-grow-1">
                                <a href="#" class="align-self-center text-decoration-none" style="margin-left: auto; font-weight: bold;" onclick="followUser(event)" data-id="{{$suggestion->user_id}}">@if ($suggestion->isFollowing()) Siguiendo @else Seguir @endif</a>
                            </div>
                        </div>                            
                        @endforeach
                     </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection