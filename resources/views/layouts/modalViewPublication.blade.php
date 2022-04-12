{{-- <div class="modal" tabindex="-1" role="dialog" id="post">
    <div class="modal-dialog modal-dialog-centered modal-xl " role="document">
        <div class="modal-content">
            <div class="row">
                <img src="{{asset(auth()->user()->image_url)}}" class="col-8" alt="">
                <div class="col-4 " >
                    <div class="profile-bar">
                        <div class="media">
                            <img src="{{asset(auth()->user()->image_url)}}" class="col-8" alt="">
                            <div class="media-body">
                                <h5 class="user-name">Juan_Nava897 <a href="#" class="follow-link"> Seguir </a>  </h5>
                            </div>
                        </div>
                    </div>

                    <div class="caption-comments overflow-auto">
                        <div class="media captions">
                        <div class="media-body">
                                <h5 class="user-name">Uriegas_33 </h5>
                                <div class="captions"> Sigueme para no perderte ninguna de mis publicaciones💯
                                </div>
                        </div>
                    </div>
                    <div class="media  captions">
                            <div class="media-body">
                            <h5 class="user-name">Uriegas_33 </h5>
                                <p class="comment">
                                    Que buena foto!!!
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="like-share-icon">
                        <p>
                            <a href="#" class=""> <i class="far fa-heart insta-button"></i>       </a>
                            <a href="#" class=""> <i class="far fa-comment insta-button"></i>     </a>
                            <a href="#" class=""> <i class="far fa-paper-plane insta-button"></i>  </a>

                        </p>
                        <p class="likes">  124 likes </p>
                    </div>

                    <div class="comment-bar">
                        <form action="">
                            <div class="input-group ">
                                <input type="text" class="form-control comment" id="" placeholder="Add a Comment..">
                            <div class="input-group-append">
                            <button class="btn post-button" type="submit"> Post </button>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> --}}




<div class="modal" tabindex="-1" role="dialog" id="post">
    <div class="modal-dialog modal-dialog-centered modal-xl " role="document">
        <div class="modal-content">
            <div class="row m-0">
                <div class="col-6">
                    <div class="row">
                        <img src="" alt="" id="image">
                    </div>
                </div>
                <div class="col-6 border-left">
                    <div class="row mb-2 border-bottom">
                        <div class="d-flex m-2">
                            <img src="" alt="user-img" class="profile-picture rounded-circle" id="userImage">
                            <div class="text-left">
                                <a href="#" class="d-block text-decoration-none font-weight-bold mb-0" id="username"></a>
                                {{-- <small class="text-muted">Photographer</small> --}}
                            </div>
                        </div>
                    </div>
                    <div class="row border-bottom mb-3 mt-3">
                        <p class="font-weight-bold" id="publicationTitle"></p>
                        {{-- <div class="form-group">
                            <input type="text" placeholder="Añade un titulo a tu publicación" name="title" maxlength="26" style="background-color: transparent; border:0px; width:100%;">
                        </div> --}}
                    </div>
                    {{-- <p style="font-weight: bold;" class="likes">{{count($publication->likes)}} Me gusta</p> --}}
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
                    <div class="row border-bottom mb-5 mt-3">
                        {{-- <div id="panelComentarios"> --}}
                        <div class="panelComentarios">
                        </div>
                        {{-- <div class="form-group">
                            <textarea type="text" rows="8" placeholder="Agrega un comentario" name="description" style="background-color: transparent; border:0px; width:100%;"></textarea>
                        </div> --}}
                    </div>
                    <div class="d-flex border-top py-3 px-2">
                        <input type="text" class="form-control border-0" placeholder="Agrega un comentario...">
                        <button type="submit" class="btn btn-link text-decoration-none" style="font-weight: bold; color: #0095f6;" onclick="addComment(event);"  data-id="{{$publication->id}}">Publicar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>