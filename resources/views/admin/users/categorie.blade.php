@auth

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <title>LES ARTICLES</title>
    <style>
        #produit{
            display: block;
        }
        body{
            background-color: rgb(227, 227, 227);
        }

    </style>
</head>
<body>

<div class="container-fluid">

    <!-- En-tête -->
    <div class="row bg-dark text-white p-3">
        <div class="col-md-6">
            <h3>CategorieS de Produits</h3>
        </div>
        <div class="col-md-6 text-right">
            <!-- Ajoutez des éléments d'en-tête supplémentaires ici -->
        </div>
    </div>

    <!-- Contenu principal -->
    <div class="row mt-3">

        <!-- Menu latéral -->
        <div class="col-md-3">
            <div class="list-group">
                <a href="/admin/users/tableau" class="list-group-item list-group-item-action">Tableau de Bord</a>
                {{-- <a href="#" class="list-group-item list-group-item-action">Statistiques</a> --}}
                <a href="/admin/users" class="list-group-item list-group-item-action" >Utilisateurs</a>
                <a href="/admin/users/message" class="list-group-item list-group-item-action" >Message</a>
                <a href="/admin/users/produit" class="list-group-item list-group-item-action" >Liste des Produits</a>
                <a href="/admin/users/categorie" class="list-group-item list-group-item-action" >Ajouter une categorie</a>
                <a href="/admin" class="list-group-item list-group-item-action" >Ajouter un Produit</a>


                <!-- Ajoutez des liens supplémentaires ici -->
            </div>
        </div>



    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1>AJOUTER UNE CATEGORIE</h1>
                <hr>

                <ul>
                    @foreach ($errors->all() as $error )
                        <li class="alert alert-danger">{{$error}}</li>
                    @endforeach

                </ul>
                <form action="/ajouter/categorie" method="POST" class="form-group">
                    @csrf

                    <div class="form-group">
                        <label for="Nom">Nom</label>
                        <input type="text" class="form-control form-check" id="Nom" name="nom">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">AJOUTER LA CATEGORIE</button>
                    <br>
                    <br>
*                </form>
            </div>
        </div>
    </div>

<script>
    function toggleForm() {
        var form = document.getElementById("produit");
        if (form.style.display === "block") {
            form.style.display = "none";

        } else {
            form.style.display = "block";
        }
    }
</script>
<script>
    // function toggleUsers() {
    //     var users = document.getElementById("users");
    //     if (users.style.display === "none") {
    //         users.style.display = "block";

    //     } else {
    //         users.style.display = "none";
    //     }
    // }
</script>
<!-- Scripts Bootstrap -->
<script src="{{ asset('js/bootstrap.min.js') }}">
<script src="{{ asset('js/popper.min.js') }}">
<script src="{{ asset('js/jquery.slim.min.js') }}">


</body>
</html>
@endauth
