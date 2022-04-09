@extends('layouts.app')

@section('content')
<style>
    *{
        margin: 0;
        padding: 0;
    }
    .phone{
        padding-top: 10px;
        height: 650px;
        float: right;
        margin: 1px;
    }
    body{
        background: #EFEFBB;
        background: -webkit-linear-gradient(to right, #D4D3DD, #EFEFBB);
        background: linear-gradient(to right, #D4D3DD, #EFEFBB);
    }
    .container{
        margin-top: 20px;
    }
    .right-column{
        background: #fff;
        border: 1px solid #e6e6e6;
        width: 350px;
        margin: 10px;
        border-radius: 10px;
        padding: 40px;
    }
    .instagram-logo{
        margin-top: 10px ;
        margin-bottom: 10px;
        width: 200px;
    }
    .info{
        font-weight: 600px;
        line-height: 20px;
        font-size: 17px;
        color: #999;
    }
    button img{
        height: 18px !important;
        padding: 0 8px 2px;
    }
    .or{
        font-size: 13px!important;
        color: #999;
        font-weight: 600;
    }
    .or::before{
        content: '';
        background: #efefef;
        display: block;
        height: 2px;
        width: 110px;
        position: relative;
        top: 11px
    }
    .or::after{
        content: '';
        background: #efefef;
        display: block;
        height: 2px;
        width: 110px;
        position: relative;
        bottom: 10px;
        left: 160px;
    }
    .form-group{
        margin-bottom: 6px!important;
    }
    .form-control{
        background: #fafafa!important;
        border: 1px solid #efefef !important;
        font-size: 12px;
    }
    ::placeholder{
        color: #999 !important;
    }
    .btn{
        margin: 12px auto;
        padding: 2px!important;
        font-weight: 600!important;
    }
    .btn-primary{
        background-color: #3897f0;
        border: 1px solid #3897f0!important;
    }
    .terms{
        line-height: 18px;
        font-size: 14px;color: #999;
        margin: 5px 20px;
    }
    .right-column-login{
        background: #fff;
        border: 1px solid #e6e6e6;
        width: 350px;
        margin: 10px;
        padding: 20px;
        border-radius: 10px;
    }
    .right-column-login a:hover{
        text-decoration: none;
    }
</style>


    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                    <img src="images/instagram.png" class="phone">
            </div>
            <div class="col-sm-6">
                <div class="right-column text-center">
                    <img src="images/letras.png" class="instagram-logo">
                    <p class="info">Sign up to see photo and videos form your friends</p>
                    <button type="submit" class="btn btn-primary btn-block"><img src="images/facebook.png"> Log in with Facebook</button>
                    <p class="or">OR</p>

                    <form method="POST" action="{{ route('register') }}">
                    @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Mobile Number or Email">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Full Name">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username">
                        </div>

                        <div class="form-group">
                            <input type="passsword" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Sign up</button>
                    </form>
                    <p class="terms">By signing up, you agree to our<b> Terms, Data Policy</b> and <b>Cookies Policy</b>.</p>
                </div>

                <div class="right-column-login text-center">
                    <p>Have an account? <a href="#">  Login</a></p>
                </div>

            </div>
        </div>
    </div>
@endsection
