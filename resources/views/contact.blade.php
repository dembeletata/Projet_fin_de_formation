<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <style>
    /* Style personnalisé pour la couleur orange */
    body {
      background-color: #ffffff;
    }
    .contact-form {
      background-color: #f1f1f1;
      border-radius: 10px;
      padding: 40px;
      margin-top: 50px;
      border: 2px solid rgb(255, 123, 0);
      width: 600px;

    }
    .form-control {
      border-radius: 0;
    }
    .btn-orange {
      background-color: rgb(255, 123, 0);
      color: #fff;
      border: none;
      padding: 5px 10px;
      border-radius: 10px;
      margin: 20px;
    }
    h2{
        color: rgb(255, 123, 0);

    }
    .btn-orange:hover {
      background-color: rgb(206, 101, 3);
      color: #fff;
    }
  </style>
</head>
<body>

<div class="container">
    @include("haeder");
    <br>
    <br>
    <br>
    <br>
  <div class="row justify-content-center">
    <div class="col-md-6">

        @if (session('status'))
            <div class="alert alert-success">
                        {{session('status')}}
            </div>
        @endif
        <ul>
            @foreach ($errors->all() as $error )
                <li class="alert alert-danger">{{$error}}</li>
             @endforeach

        </ul>
      <form action="/contact/traitement" method="POST" class="contact-form" enctype="multipart/form-data">
        @csrf
        <h2 class="text-center mb-4">Contactez-nous</h2>
        <div class="form-group">


            <input type="text" class="form-control" name="user_id" value="{{Auth::user()->id}} " style="display:none">


        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="titre" placeholder="Titre du Message">
        </div>
        <div class="form-group">
          <textarea name="message" class="form-control" rows="5" placeholder="Message" required></textarea>
        </div>
        <button type="submit" class="btn btn-orange btn-block">Envoyer</button>
      </form>

    </div>
  </div>
  {{-- @include("footer"); --}}
</div>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
