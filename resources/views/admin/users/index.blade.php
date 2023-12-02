@auth

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <title>Document</title>
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
            <h3>Liste des utilisateurs</h3>
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
                <!-- Contenu principal -->
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-12">
                    <h2>Liste des utilisateurs</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <!-- Ajoutez d'autres colonnes pour afficher plus d'informations -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                <form action="{{ route('admin.users.destroy', ['user'=> $user]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                <button class=" btn btn-danger " type="submit">Suprimer</button>
                                </form>
                                </td>
                                <!-- Ajoutez d'autres colonnes pour afficher plus d'informations -->
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
    // function toggleForm() {
    //     var form = document.getElementById("produit");
    //     if (form.style.display === "none") {
    //         form.style.display = "block";
    //     } else {
    //         form.style.display = "none";
    //     }
    // }
</script>

</body>
</html>
@endauth
