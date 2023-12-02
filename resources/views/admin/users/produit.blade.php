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

    </style>
</head>
<body>

<div class="container-fluid">

    <!-- En-tête -->
    <div class="row bg-dark text-white p-3">
        <div class="col-md-6">
            <h3>Mes Produits</h3>
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
                <a href="/" class="btn btn-danger">home</a>


                <!-- Ajoutez des liens supplémentaires ici -->
            </div>
        </div>

        <div class="col-md-9" id="produit">
            <div class="row">
                <div class="col-md-12">
                    <h2>Liste des utilisateurs</h2>
                    <table class="table table-striped" style="margin: 0px">
                        <thead>
                            <tr>
                                <th>id du produit</th>
                                <th>Titre</th>
                                <th>Contenue</th>
                                <th>Image</th>
                                <th>Prix</th>
                                <!-- Ajoutez d'autres colonnes pour afficher plus d'informations -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->titre }}</td>
                                <td>{{ $post->contenue }}</td>
                                <td>
                                @if($post->image)
                                    <img src="{{asset('storage/' . $post->image) }}" alt="Image de la publication" width="100" style="border-radius: 50px">
                                @endif
                                </td>
                                
                                <td>Prix : <strong style="color: rgb(255, 123, 0)">{{ $post->prix }}$</strong></td>
                                @auth
                                <td>

                                    <a href="/delete-post/{{$post->id}}" class=" btn btn-danger " >Suprimer</a>

                                </td>
                                @endauth




                            </tr>
                        @endforeach
                                    </tbody>
                    </table>
                </div>
            </div>
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
