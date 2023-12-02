@auth

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <title>Document</title>
</head>
<style>
            body{
            background-color: rgb(227, 227, 227);
        }

    .messages{
        width: 400px;
        border-radius: 5px;
        background-color: rgb(235, 231, 231);
        padding: 10px;
        margin: 20px;
        box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.24), -1px -1px 5px rgba(0, 0, 0, 0.24);
    }
    .email{
        font-family: sans-serif;
        font-size: 20px;
        color: rgb(253, 114, 0);
    }
    .message{
        font-family: sans-serif;
        font-size: 20px;
        color: rgb(0, 0, 0);

    }
</style>
<body>
<div class="container-fluid">

    <!-- En-tête -->
    <div class="row bg-dark text-white p-3">
        <div class="col-md-6">
            <h3>Message</h3>
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
            <div class="column">


                            @foreach($messages as $message)
                                <div class="messages">


                                    <div class="email">
                                        {{$message->user->email}}
                                    </div>
                                    <div class="message">
                                        {{ $message->message }}
                                    </div>
                                </div>

                                {{-- <td>
                                <form action="{{ route('admin.users.destroy', ['user'=> $user]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                <button class=" btn btn-danger " type="submit">Suprimer</button>
                                </form>
                                </td> --}}
                                <!-- Ajoutez d'autres colonnes pour afficher plus d'informations -->

                            @endforeach

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
