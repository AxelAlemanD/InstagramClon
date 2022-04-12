@extends('layouts.app')

@section('content')

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">


@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
                <!-- PRIMER TARJETA -->
                <div class="card mb-5 rounded shadow">
                    <div class="card-header">
                        <h4 class="mb-1 text-center">Editar publicación</h4>
                    </div>
                        <div class="card-body">
                            <form action="{{route('publications.store')}}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="row m-0 w-100 justify-content-center align-items-center text-center">
                                    <div class="col-6">
                                        <div class="row">
                                            <img src="{{$publication->image_url}}" alt="" id="image">
                                            <div class="form-group">
                                                <label class="form-label">
                                                    Sube una imagen en formato JPG, JPEG o PNG. <br>
                                                    Tamaño máximo: 1mb
                                                </label>
                                                <div class="input-group file-browser">
                                                    <label class="input-group-append mb-0 m-auto">
                                                        <span class="btn ripple btn-primary">
                                                            Seleccionar imagen <input type="file" class="file-browserinput" style="display: none;" accept="image/*" name="image_url" id="image_url" onchange="previewImage(event)">
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 border-left">
                                        <div class="row mb-2 border-bottom">
                                            <div class="d-flex m-2">
                                                <div class="profile-picture rounded-circle mr-3" style="margin-right: 15;"></div>
                                                <div class="text-left">
                                                    <a href="#" class="d-block text-decoration-none font-weight-bold mb-0">{{$currentUser->username}}</a>
                                                    <small class="text-muted">Photographer</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row border-bottom mb-3 mt-3">
                                            <div class="form-group">
                                                <input type="text" placeholder="Añade un titulo a tu publicación" name="title" maxlength="26" style="background-color: transparent; border:0px; width:100%;" value="{{$publication->title}}">
                                            </div>
                                        </div>
                                        <div class="row border-bottom mb-5 mt-3">
                                            <div class="form-group">
                                                <textarea type="text" rows="8" placeholder="Agrega un comentario" name="description" style="background-color: transparent; border:0px; width:100%;">{{$publication->description}}</textarea>
                                            </div>
                                        </div> 
                                        <div class="row pl-5 pr-5 mt-5 pt-5">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="feather  feather-save sidemenu_icon"></i>
                                                Actualizar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
