<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <style>
        #container{
            overflow: hidden;

        }
        .scrolling-wrapper{
            display: flex;
            animation: scroll 20s linear infinite;
        }
        .article{
            margin: 3px;
        }
        body{
            margin: 0;
            padding: 0;
            background-color: rgba(235, 234, 234, 0.589);
        }
        .mere{
            width: 100%;
            align-items: center;
        }
        .hero-bg {
            background-color: rgb(255, 255, 255);
            height: 600px;
            width: 1270px;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            color: white; /* Couleur du texte sur l'image de fond */
        }

        .bienvenue{
            color: black;
        }
        /* .btn{
            background: rgb(255, 123, 0);
        } */
        .souligne-survol:hover {
            text-decoration: underline;
        }
        .article{
            /* border: 1px solid rgb(112, 111, 111); */
            border-radius: 6px;
            background-color: white;
        }
        .articleE{
            /* border: 1px solid rgb(112, 111, 111); */
            border-radius: 4px;
            background-color: white;
        }
        .image{
            border-top-left-radius: 6px;
            border-top-right-radius: 6px;
        }
        .imageE{
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
        }
        .scroll{
            white-space: nowrap;
            overflow: auto;
            display: flex

        }
        .scroll .article-scroll{
            flex: 0 0 auto;
        }
        .scrolling{
            display: flex;
            flex-direction: column;
            overflow-y: auto;
            height: 600px;
            width:20%;
        }

        .monArticle{
            transition: margin-bottom 0.3s, box-shadow 0.3s;

        }
        .monArticle:hover{
            margin-bottom: 20px; /* Ajoute un margin-bottom */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Ajoute une ombre */
        }
        .image-slider {
  width: 600px;
  overflow: hidden;
  position: relative;
}

.image-container {
  display: flex;
  width: fit-content;
  animation: slideImages 15s linear infinite; /* Réglez la vitesse et la durée du défilement */
}

.image-container img {
  width: 100%;
  height: auto;
  object-fit: cover; /* Pour ajuster la taille de l'image au conteneur */
}

@keyframes slideImages {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-100%); /* Déplace les images vers la gauche */
  }
}

    </style>

</head>
<body>
            @include("haeder");
            <br>
            <br>


    <div class="container mere">
        <div>



            {{-- <div class="hero-bg container-fluid list-group-item ">
            &hscr;
            &hscr;
           <br>
           <br>
           <br>
            <div class="text-center bienvenue">
                <br>
                <h1 class="display-4">
                    Bienvenue sur <strong>TouTrouver</strong>

                    @if (Auth::check())
                        <strong style="color: rgb(255, 123, 0);">
                            {{Auth::user()->lastname}}
                        </strong>
                    @endif
                </h1>
                <p class="lead">Un site génial pour faire tout vos achats facilement et rapidement.</p>
                <a class="btn  btn-lg  btn-outline-dark" href="#catalogue" role="button">Découvrir</a>
            </div>
            <div class="col-md-6">
                <br>
                <br>
                <img src="{{ asset('images/hero.jpg') }}" alt="Image d'illustration" class="img-fluid hero-img">
            </div>
            </div> --}}
        </div>
        <div style="display: flex; flex-direction:row;">
            <div class="image-slider">
                <div class="image-container">
                    <img src="{{ asset('images/bienvenue.jpg') }}" alt=" " >
                    <img src="{{ asset('images/achat.jpg') }}" alt=" " >
                    <img src="{{ asset('images/col1.jpg') }}" alt=" " >

                  <!-- Ajoutez autant d'images que nécessaire -->
                </div>
              </div>
            <div class="image-slider">
                <div class="image-container">
                    <img src="{{ asset('images/col2.jpg') }}" alt=" " >
                    <img src="{{ asset('images/col3.jpg') }}" alt=" " >
                    <img src="{{ asset('images/col4.jpg') }}" alt=" " >
                </div>
              </div>
        </div>


        <div class="container mt-4 " style="align-items: center; width: 1270px; ">


            {{-- <h2 class="text-center" id="catalogue">Catalogue des Produits</h2> --}}
            @if (session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif


        <div class="scroll"  >

            @foreach($posts as $post)
                @if($post->categorie_id === 2) <!-- Supposons que l'ID de la catégorie "Vêtements" est 1 -->
                            <li class="list-group articleE article-srcoll monArticle " :hover style="width: 140px; margin:5px; padding:0px; text-align:center;" >
                                <div style="height: 100px">
                                    @if($post->image)
                                        <img src="{{asset('storage/' . $post->image) }}" alt="Image de la publication" class="imageE w-100  ">
                                    @endif
                                </div>
                                    <div style="padding: 3px; background-color: white; border-bottom-left-radius: 4px;border-bottom-right-radius: 4px;">
                                    <h6 style="font-size: 10px">{{ $post->titre }}<p>{{ $post->contenue }}</p>
                                    </h6>
                                    <h6>Prix : <strong style="color: rgb(255, 123, 0)">{{ $post->prix }}$</strong></h6>
                                    @auth
                                    <form action="{{route('ajouter.au.panier', ['id' => $post -> id])}}" method="POST">
                                        @csrf
                                        <button style="font-size: 15px; border: none;" type="submit" class="btn btn-outline-dark ajouter.au.panier" >Ajouter <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                                    </svg></button>
                                    </div>
                                    </form>
                                    @endauth


                    </li>


                @endif
            @endforeach
        </div>
        <div style="display: flex; flex-direction: row;" id="categorie">

            <ul class=" " style=" display: flex; flex-direction: row; flex-wrap:wrap; width: 90%;  "id="categorie1">

            @foreach($posts as $post)
                @if ($post->categorie_id === 1)
                    <li class="list-group article monArticle " :hover style="width: 180px; margin:5px; padding:0px;" >
                        <div style="height: 200px">
                        @if($post->image)
                            <img src="{{asset('storage/' . $post->image) }}" alt="Image de la publication" class="image w-100  ">
                        @endif
                        </div>
                        <div style="padding: 3px; background-color: white; border-bottom-left-radius: 6px;border-bottom-right-radius: 6px;">
                        <h6>{{ $post->titre }}<p>{{ $post->contenue }}</p>
                        </h6>
                        <h5>Prix : <strong style="color: rgb(255, 123, 0)">{{ $post->prix }}$</strong></h5>
                        @auth
                        <form action="{{route('ajouter.au.panier', ['id' => $post -> id])}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-outline-dark ajouter.au.panier" onclick="toggleDiv()">Ajouter <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                        </svg></button>
                        </div>
                        </form>
                        @endauth




                    </li>
                @endif
            @endforeach
            </ul>

            <div class="scrolling" id="categorie1">

                @foreach($posts as $post)
                    @if($post->categorie_id === 3) <!-- Supposons que l'ID de la catégorie "Vêtements" est 1 -->
                                <li class="list-group articleE .article-scrolling monArticle "  style="width: 165px; margin:10px; padding:0px; text-align:center; margin-right: 20px;                                " >
                                    <div style="height: 100px">
                                        @if($post->image)
                                            <img src="{{asset('storage/' . $post->image) }}" alt="Image de la publication" class="imageE w-100  ">
                                        @endif
                                    </div>
                                        <div style="padding: 3px; background-color: white; border-bottom-left-radius: 4px;border-bottom-right-radius: 4px;">
                                        <h6 style="font-size: 10px">{{ $post->titre }}<p>{{ $post->contenue }}</p>
                                        </h6>
                                        <h6>Prix : <strong style="color: rgb(255, 123, 0)">{{ $post->prix }}$</strong></h6>
                                        @auth
                                        <form action="{{route('ajouter.au.panier', ['id' => $post -> id])}}" method="POST">
                                            @csrf
                                            <button style="font-size: 15px; border: none;" type="submit" class="btn btn-outline-dark ajouter.au.panier" >Ajouter <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                                        </svg></button>
                                        </div>
                                        </form>
                                        @endauth


                        </li>


                    @endif
                @endforeach
            </div>
        </div>
            <style>
                ul:nth-child(4n) {
                            clear: both;
                            }
            </style>


            </div>
        </div>
            @include("footer");


        </body>
        </html>






    </div>
    <script src="{{ asset('js/jquery.js') }}">

    <script src="{{ asset('js/bootstrap.js') }}">

            <script>
            $(document).ready(function () {
                $('.ajouter-au-panier').click(function () {
                    var postId = $(this).data('post-id');
                    $.ajax({
                        url: '/ajouter-au-panier/' + postId,
                        type: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function (response) {
                            alert(response.message); // Vous pouvez gérer la réponse comme vous le souhaitez
                        },
                        error: function (error) {
                            console.log(error);
                        }
                    });
                });
            });
            const imageContainer = document.querySelector('.image-container');

            // Obtenir la largeur totale des images pour ajuster la translation
            const images = document.querySelectorAll('.image-container img');
            let totalWidth = 0;
            images.forEach(image => {
            totalWidth += image.clientWidth;
            });
            imageContainer.style.width = `${totalWidth}px`;

        </script>


</body>
</html>
