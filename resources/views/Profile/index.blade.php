@extends('layouts.app')

@section('extra-css')
<style>

.nav-top {
    height: 63px;
    background-color: white !important;
    border-top:0.5px solid #dbdbdb;
    border-bottom:1px solid #dbdbdb;
}

.nav-container {
    padding-left: 25% !important;
    padding-right: 25% !important;
}

@media screen and (max-width: 1605px) {
    .nav-container {
        padding-left: 20% !important;
        padding-right: 20% !important;
    }
  }

@media screen and (max-width: 992px) {
    .nav-container {
        padding-left: 5% !important;
        padding-right: 5% !important;
    }
}

.img-nav {
    border-radius: 100%;
    -o-border-radius: 100%;
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    max-width:30px;
    max-height:25px;
}

.img-profile {
    border-radius: 100%;
    width:150px;
    height:150px;
}

.username {
    font-weight: 300; font-size: 28px;
}

.name {
    font-size: 16px; display: inline; font-weight: 600 !important;
}

.profile-datas {
    font-size: 16px;
}

.profile-desc {
    font-size: 16px;
}

.nav-feed {
    border-bottom: none !important;
    display:flex;
    align-items: center;
    justify-content: center;
    padding-bottom: 15px;
}

.nav-link-1 {
    color: #495057;
    background-color: #fafafa !important;
    border-color: gray #fff #fff !important;
    border-top-right-radius: .0rem !important;
    border-top-left-radius: .0rem !important;
    font-size: 12px;
    font-weight: 600;
}

.nav-link-2 {
    color: #a2a8af;
    background-color: #fafafa !important;
    border-color: #fff #fff #fff !important;
    border-top-right-radius: .0rem !important;
    border-top-left-radius: .0rem !important;
    font-size: 12px;
    font-weight: 600;
}


.card {
    border: 0px solid rgba(0,0,0,.125) !important;
    border-radius: .0rem !important;
}

.card .card-img, .card-img-top {
    border-top-left-radius: 0rem !important;
    border-top-right-radius: 0rem !important;
}

.stories{
    text-align: center;
    font-size: 15px;
    font-weight: 600;
}

.form-control {
    border-radius: .15rem !important;
    padding: 0% !important;
    background-color: #fafafa !important;
    text-align: center;
    font-size: 15px !important;
}

.icons {
    padding: 4%;
    font-size: 25px;
}

.button-edit {
    color: white !important;
    font-size: 14px !important;
    font-weight: 600 !important;
    border-color: #dae1e7 !important;
}

.btn {
    padding: .100rem .50rem !important;
}
</style>
@endsection
@section('content')
    <!-- Main-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-0 col-md-2"></div>
                <div class="col-12 col-md-8">

                    <!-- Profile-->
                    <div class="container">
                        <div class="row" style="padding-top: 30px;">
                            <div class="col-3">
                                <img class="img-profile" src="{{asset('images/perfil.jpg')}}">
                            </div>
                            <div class="col-7">
                                <div class="row" style="padding-top: 20px; padding-bottom: 10px;">
                                    <div class="col-8 col-lg-5">
                                        <h2 class="username">{{$currentUser->username}}</h2>
                                    </div>
                                    <div class="col-4 col-lg-6"><button type="button"
                                            class="btn btn-primary font-weight-bold button-edit" style="color: #ffffff;">Seguir</button></div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <p class="profile-datas"><strong>3</strong> publicaciones</p>
                                    </div>
                                    <div class="col-4">
                                        <p class="profile-datas"><strong>5</strong> seguidores</p>
                                    </div>
                                    <div class="col-4">
                                        <p class="profile-datas"><strong>3</strong> siguiendo</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <h1 class="name">{{$currentUser->username}}</h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <p class="profile-desc">Ingeniero | Network Architect</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2"></div>
                        </div>
                    </div>

                    <!-- Stories-->
                    <div style="padding-top: 0px;">
                        <div class="row">
                            <div class="col-2"> <canvas id="myCrl"></canvas></div>
                            <div class="col-2"> <canvas id="myCrl1"></canvas></div>
                            <div class="col-2"> <canvas id="myCrl2"></canvas></div>
                        </div>
                    </div>
                    <div style="padding-bottom: 40px;">
                        <div class="row">
                            <div class="col-2 stories"> Foto_1</div>
                            <div class="col-2 stories"> Foto_2</div>
                            <div class="col-2 stories"> Foto_3</div>
                        </div>
                    </div>

                    <!-- Line-->
                    <hr size="3" width="100%" color="#EEEEEE" style="margin: 0%;">

                    <!-- Nav-Feed-->
                    <ul class="nav nav-tabs nav-feed" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active nav-link-1" id="home-tab" data-bs-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true"><i class="bi bi-grid-3x3"></i> PUBLICACIONES</a>
                        </li>


                    </ul>

                    <!-- Card-Feed-->
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row" style="padding-bottom: 25px;">
                                <div class="col-4">
                                    <div class="card">
                                        <img src="{{asset('images/post_1.jpg')}}" class="card-img-top" alt="...">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card">
                                        <img src="{{asset('images/post_2.jpg')}}" class="card-img-top" alt="...">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card">
                                        <img src="{{asset('images/post_3.jpg')}}" class="card-img-top" alt="...">
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 25px;">
                                <div class="col-4">
                                    <div class="card">
                                        <img src="{{asset('images/post_4.jpg')}}" class="card-img-top" alt="...">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card">
                                        <img src="{{asset('images/post_5.jpg')}}" class="card-img-top" alt="...">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card">
                                        <img src="{{asset('images/post_6.jpg')}}" class="card-img-top" alt="...">
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 25px;">
                                <div class="col-4">
                                    <div class="card">
                                        <img src="{{asset('images/post_7.jpg')}}" class="card-img-top" alt="...">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card">
                                        <img src="{{asset('images/post_8.jpg')}}" class="card-img-top" alt="...">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card">
                                        <img src="{{asset('images/post_9.jpg')}}" class="card-img-top" alt="...">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"></div>
                    </div>
                </div>
                <div class="col-0 col-md-2"></div>
            </div>
        </div>
    </section>
@endsection
@section('extra-js')

    <script type="text/javascript">

        var crl = document.getElementById('myCrl').getContext('2d');

        crl.beginPath();
        crl.arc(60, 100, 40, 0, 2 * Math.PI);
        crl.fillStyle = '#00ACC1';
        crl.fill();
        crl.linewidth = 5;
        crl.strokeStyle = '#dbdbdb';
        crl.stroke();

        var crl1 = document.getElementById('myCrl1').getContext('2d');

        crl1.beginPath();
        crl1.arc(60, 100, 40, 0, 2 * Math.PI);
        crl1.fillStyle = '#F8BBD0';
        crl1.fill();
        crl1.linewidth = 5;
        crl1.strokeStyle = '#dbdbdb';
        crl1.stroke();

        var crl2 = document.getElementById('myCrl2').getContext('2d');

        crl2.beginPath();
        crl2.arc(60, 100, 40, 0, 2 * Math.PI);
        crl2.fillStyle = '#E91E63';
        crl2.fill();
        crl2.linewidth = 5;
        crl2.strokeStyle = '#dbdbdb';
        crl2.stroke();

    </script>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>

@endsection