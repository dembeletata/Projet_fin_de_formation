<br>
<br>
<br>
<br>
<nav class="navbar navbar-expand-lg navbar-dark container-fluid fixed-top">
    <img src="{{ asset('images/tt.png') }}" alt=" " class="img-fluid hero-img" width="120">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">ACCUEIL</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="/apropo">A_PROPOS</a>
            </li>
            @auth
                <li class="nav-item">
                    <a class="nav-link" href="/contact">CONTACT</a>
                </li>
                <li class="nav-item">
                    <a href="dashboard/" style="z-index: 1;">

                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path style="color: white" d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path style="color: white" fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                      </svg>
                    </a>
                </li>
            @endauth
            @guest
                <li class="nav-item">
                    <a class="nav-link mon-bouton" href="login">Connexion</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link mon-bouton" href="register">Inscription</a>
                </li>
            @endguest
            @auth
            <form action="{{ route('logout')}}" method="POST">
                @csrf
                <li class="nav-item">
                <button type="submit" class="mon-bouton" style="margin-left:20px; margin-right:40px;">
                    Deconnexion
                </button>
                </li>
            </form>

            @endauth


            @auth
                <li class="nav-item">
                    <div class="point" id="point">

                    </div>
                <a href="panier/" style="z-index: 1;">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                 <path style="color: white" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>

                </svg>

                </a>

                </li>
            @endauth





        </ul>
    </div>
</nav>
<style>
    #point{
        width: 15px;
        height: 15px;
        background: red;
        border-radius: 50px;
        border: 1px solid white;
        margin-bottom: -15px;
        margin-left: 30px;
        z-index: 2;

    }
    .navbar{
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding-left: 10%;
            padding-right: 10%;
            background-color: rgb(255, 123, 0);
            height: 150px;
            align-items: center;
        }
        .navbar-nav{
            width: 40%;
            display: flex;
            flex-direction: row;
        }
        .mon-bouton {
  background-color: rgba(0, 0, 255, 0);
  color: white;
  border: 1px solid whitesmoke;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 10px;
}

.mon-bouton:hover {
  background-color: rgb(255, 255, 255);
  color: black;
  border: none;
}

</style>
@php
$prixP=collect(session('panier'))->sum('prix');
@endphp
<script>
var prixP = @json($prixP);
var div = document.getElementById("point");

if (prixP===0) {
    div.style.display = "none";
} else {
    div.style.display = "block";
}

</script>
