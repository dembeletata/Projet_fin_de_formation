<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À Propos de Nous - MonSite</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.container {
    max-width: 960px;
    margin: 0 auto;
    padding: 20px;
}

.team-member {
    text-align: center;
    margin-bottom: 20px;
}

.team-member img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

    </style>
</head>
<body>
    @include("haeder");
    <br>
    <br>


    <div class="container">
        <h1>À Propos de Nous</h1>
        <p>Bienvenue sur TouTrouver, votre destination en ligne pour des produits de qualité.</p>

        <h2>Notre Histoire</h2>
        <p>Nous avons commencé notre aventure en 2023 avec une passion pour offrir les meilleurs produits à nos clients...</p>

        <h2>Notre Équipe</h2>
        <div class="team-members">
            <div class="team-member">
                <img src="{{ asset('images/tata.jpg') }}" alt="Jane Doe">
                <h3>DEMBELE Tata</h3>
                <p>PDG - Expert en en developpement.</p>
            </div>
            <div class="team-member">
                <img src="{{ asset('images/djami.jpg') }}" alt="John Smith">
                <h3>DEMBELE Djamilatou</h3>
                <p>Directrice Marketing - Passionnée par les nouvelles tendances et la créativité.</p>
            </div>
            <div class="team-member">
                <img src="{{ asset('images/lcon.jpg') }}" alt="John Smith">
                <h3>CAMARA Abou</h3>
                <p>Responsable Logistique - Expert en gestion des stocks et de la livraison.</p>
            </div>
        </div>

    </div>

    @include("footer");


    <script src="scripts.js"></script>
</body>
</html>
