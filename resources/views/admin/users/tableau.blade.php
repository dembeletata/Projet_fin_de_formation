@auth

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <title>LES ARTICLES</title>
    <style>
        body{
            background-color: rgb(227, 227, 227);
        }
        .container{
            display: flex;
            flex-direction: column;
            width: 750px;
            height: 750px;
        }
        .cont1{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            width: 100%;
        }
        .cont2{
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 200px;
            height: 200px;
            border-radius: 10px;
            background-color: rgb(255, 255, 255);
            padding: 10px;
            margin: 20px;
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.24), -1px -1px 5px rgba(0, 0, 0, 0.24);
            align-items: center;
            padding: 20px;
        }
        .cont3{
            font-family: sans-serif;
            font-size: 17px;
        }
        .cont4{
            font-family: sans-serif;
            font-size: 100px;
        }
    </style>
</head>
<body >

<div class="container-fluid">

    <!-- En-tête -->
    <div class="row bg-dark text-white p-3">
        <div class="col-md-6">
            <h3>Mon Tableau de Bord</h3>
        </div>
        <div class="col-md-6 text-right">
            <!-- Ajoutez des éléments d'en-tête supplémentaires ici -->
        </div>
    </div>

    <!-- Contenu principal -->
    <div style="display: flex; flex-direction:row">

        <!-- Menu latéral -->
        <div class="col-md-3">
            <br>
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

    <div class="cont1">
        <div class="cont2">
            <div class="cont3">Nombre D'utilisateurs</div>
            <div class="cont4">{{$nmbUser}}</div>
        </div>
        <div class="cont2">
            <div class="cont3">Nombre de Messages</div>
            <div class="cont4">{{$nmbMessage}}</div>
        </div>
    </div>
    <div class="cont1">
        <div class="cont2">
            <div class="cont3">Nombre de Categories</div>
            <div class="cont4">{{$nmbCategorie}}</div>
        </div>
        <div class="cont2">
            <div class="cont3">Nombre D'articles</div>
            <div class="cont4">{{$nmbPost}}</div>
        </div>
    </div>

</div>

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
