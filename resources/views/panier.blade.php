<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pannier d'achat</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <style>
        .monbouton {
  background-color: rgba(255, 123, 0, 0);
  color: rgb(255, 123, 0);
  border: 1px solid rgb(255, 123, 0);
  padding: 10px 10px;
  text-align: center;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 50px;
}

.monbouton:hover {
  background-color: rgb(255, 123, 0);
  color: rgb(255, 255, 255);
  border: none;
}

        body{
            margin: 0;
        }
        .mere{
            width: 100%;
            margin: 0;
        }
        .navbar{
            width: 1270px;
            display: flex;
            justify-content: space-between;
            padding-left: 10%;
            padding-right: 10%;
            background-color: rgb(255, 123, 0);
        }
        .navbar-nav{
            width: 40%;
            display: flex;
            flex-direction: row;
        }

        body {
      background-color: #f8f9fa;
    }
    .panier {
        display: flex;
        flex-direction: column;
      border: 2px solid rgb(255, 123, 0);
      border-radius: 10px;
      padding: 20px;
      background-color: white;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      margin: 20px;

    }
    .produit {
      display: flex;
      justify-content: space-between;
      flex-direction: row;
      margin-bottom: 10px;
    }
    .produit span {
      color: orange;
    }
    .total {
      margin-top: 10px;
      font-weight: bold;
    }
    tr{
        width: 100%;
        align-items: center;
    }
    .container{
        align-items: center;
    }
    </style>

</head>
<body>

    <div class="container mere">
        <div>


            @include('haeder');

            <br>
            <br>
            <br>
            <br>
            <div class="container">
                <div class="row">
                  <div class="col-md-6 offset-md-3">
                    <div class="panier">

                      <div class="produit">
                        <table class="table table-striped" style="display: flex; flex-direction: column">
                            <thead>
                                <tr>
                                    <th>Titre</th>

                                    <th>Prix</th>
                                    <!-- Ajoutez d'autres colonnes pour afficher plus d'informations -->
                                </tr>
                            </thead>
                            @foreach (session('panier', []) as $key => $article)

                            <tbody>

                                <tr>
                                    <td>{{ $article['titre']}}</td>

                                    {{-- <td>
                                        <img src="{{ $article['image'] }}" alt="Image de la publication" width="80" style="border-radius: 50px">
                                    </td> --}}
                                    <br>
                                    <br>
                                    <td> <strong style="color: rgb(255, 123, 0)">{{$article['prix']}}$</strong></td>
                                    <td>
                                        <form method="POST" action="{{ route('remove_from_cart', $key) }}">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="monbouton">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach




                        </table>

                      </div>
                        <div class="total">
                            Prix Total: {{ collect(session('panier'))->sum('prix')}}$
                        </div>
                        <button class="monbouton" id="Ppoint">Passer la commande</button>

                    </div>

                  </div>
                </div>

              </div>
        </div>

    </div>
    {{-- @include('footer'); --}}


    @php
$prixPP=collect(session('panier'))->sum('prix');
@endphp
<script>
var prixPP = @json($prixPP);
var button = document.getElementById("Ppoint");

if (prixP===0) {
    button.style.display = "none";
} else {
    button.style.display = "block";
}

</script>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>
</html>






    </div>

    <script src="{{ asset('js/bootstrap.js') }}">

</body>
</html>
