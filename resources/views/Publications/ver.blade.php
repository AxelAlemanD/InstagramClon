<style>
    body{
    background-color:#bdc3c7 ;
}



::-webkit-scrollbar {
    height: 0px;
    width: 0px;
    background: transparent; /* make scrollbar transparent */
  }


.col-8{
    background-color: #ffffff;
    /* border: 1px solid black; */
    border-right: 1px solid rgba(138, 138, 138, 0.65);
}

.col-4{

    background-color: #ffffff;

}

.profile-bar{
    background-color: #ffffff;
    height: 12%;
    width: 104%;
    border-bottom: 1px solid rgba(138, 138, 138, 0.65);
}


.profile-image{
    height: 40px;
    width: 45px;
    border: 2px solid #929292;
    border-radius: 50%;
    margin: 0;
    margin-top: 7%;
    margin-left: 4%;
}

.media-body{
    margin: 0;
    margin-top: 8%;
    margin-left: 5%;
    color: black;
}
.follow-link{
    font-size: 105%;
    color: #0095F6;
}
.follow-link:hover{
    color: #0095F6;
    text-decoration: none;
}

.caption-comments{
    background-color: #ffffff;
    height: 72%;
    width: 104%;
    font-size: 80%;
    border-bottom: 1px solid rgba(138, 138, 138, 0.65);

}





.like-share-icon{
    background-color: #ffffff;
    height: 10%;
    width: 104%;
    border-bottom: 1px solid rgba(138, 138, 138, 0.65);

}

.far{
    font-size: 150%;
    color: black;
    margin-left: 2%;
    margin-top: 2%;
}
.likes{
    margin: 0;
    margin-left: 4%;
    margin-top: -3%;
}


.comment-bar{
    background-color: #ffffff;
    height: 6%;
    width: 104%;
    border: 0;
}

input{
    height: 200px;
    color: yellow;
    border: 0px;
}


.comment{
    border: 0;
  }

.comment:focus{
    outline: 0;
    box-shadow: none;
}

.post-button{
    color: #00ADF1;
    font-weight: 600;
}

.post-button:hover{
    color: rgb(1, 183, 255);
  }

.post-button:focus{
    outline: 0;
    box-shadow: none;
  }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7f3bd65769.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="modal.css">

</head>
<body>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
      </button>


  <div class="modal" tabindex="-1" role="dialog" id="exampleModal">
    <div class="modal-dialog modal-dialog-centered modal-xl " role="document">
      <div class="modal-content">
        <!-- <div class="modal-body"> -->
         <!-- <div class="container-fluid"> -->
           <div class="row">
             <!-- <div class="col-8"> -->
               <img src="{{asset(auth()->user()->image_url)}}" class="col-8" alt="">
             <!-- </div> -->
             <div class="col-4 ">

               <div class="profile-bar">

                  <div class="media">
                      <img src="{{asset(auth()->user()->image_url)}}" class=" profile-image " >
                       <div class="media-body">
                             <h5 class="user-name">Juan_Nava897 <a href="#" class="follow-link"> Follow </a>  </h5>
                        </div>
                    </div>

               </div>

               <div class="caption-comments overflow-auto">

                  <div class="media captions">
                      <img src="{{asset(auth()->user()->image_url)}}" class="profile-image" >
                       <div class="media-body">
                           <h5 class="user-name">Juan_Nava897 </h5>
                             <div class="captions"> Sigueme para no perderte ninguna de mis publicaciones💯
                               </div>
                       </div>
                   </div>

                   <div class="media  captions">
                      <img src="{{asset(auth()->user()->image_url)}}"  class="profile-image ">
                        <div class="media-body">
                           <h5 class="user-name">Juan_Nava897 </h5>
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
                     </div>
                    </div>
                    </form>
               </div>

             </div>
           </div>
         <!-- </div> -->

        <!-- </div> -->

      </div>
    </div>
  </div>


</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</html>
