@isset($publication)
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
                            </div>

                            @if ($publication->user_id == auth()->user()->id)
                            <div style="margin-left: 50%;">
                                <form action="{{route('publications.destroy', $publication->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Eliminar" type="submit">Eliminar</button>
                                </form>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="row border-bottom mb-3 mt-3">
                        <p class="font-weight-bold" id="publicationTitle"></p>
                        <p id="publicationDescription"></p>
                    </div>
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
                        <div class="panelComentarios">
                        </div>
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
@endisset