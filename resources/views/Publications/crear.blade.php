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
                        <h4 class="mb-1 text-center">Crea una nueva publicación</h4>
                    </div>
                        <div class="card-body">
                            <form action="{{route('publications.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row m-0 w-100 justify-content-center align-items-center text-center">
                                    <div class="col-6">
                                        <div class="row">
                                            <img src="" alt="" id="image">
                                            <div class="form-group">
                                                <label class="form-label" id="aviso">
                                                    Sube una imagen en formato JPG, JPEG o PNG. <br>
                                                    Tamaño máximo: 1mb
                                                </label>
                                                <div class="input-group file-browser">
                                                    <label class="input-group-append mb-0 m-auto">
                                                        <span class="btn ripple btn-primary" id="descripcionBtn">
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
                                                <img src="{{ asset($currentUser->image_url) }}" alt="user-img" class="profile-picture rounded-circle">
                                                <div class="text-left">
                                                    <a href="#" class="d-block text-decoration-none font-weight-bold mb-0">{{$currentUser->username}}</a>
                                                    <small class="text-muted">Photographer</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row border-bottom mb-3 mt-3">
                                            <div class="form-group">
                                                <input type="text" placeholder="Añade un titulo a tu publicación" name="title" maxlength="26" style="background-color: transparent; border:0px; width:100%;">
                                            </div>
                                        </div>
                                        <div class="row border-bottom mb-5 mt-3">
                                            <div class="form-group">
                                                <textarea type="text" rows="8" placeholder="Agrega un comentario" name="description" style="background-color: transparent; border:0px; width:100%;"></textarea>
                                            </div>
                                        </div> 
                                        <div class="row pl-5 pr-5 mt-5 pt-5">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="feather  feather-save sidemenu_icon"></i>
                                                Publicar</button>
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



@section('extra-js')
<script type="text/javascript">
    function previewImage(e) {
        const preview = document.getElementById('image');
        const aviso = document.getElementById('aviso');
        // const btn = document.getElementById('descripcionBtn');

    	preview.src = URL.createObjectURL(e.target.files[0]);
    	preview.onload = () => URL.revokeObjectURL(preview.src);

        aviso.remove();

        // btn.innerText = 'Seleccionar otra imagen';
    }
</script>
@endsection