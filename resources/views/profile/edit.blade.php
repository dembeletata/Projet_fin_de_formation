<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="color: rgb(255, 255, 255)">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
    <style>
        /* Styles pour la mise en forme de la structure HTML */

/* Style pour l'ensemble de la page */
body {
    font-family: Arial, sans-serif; /* Police de caractères par défaut */
    background-color: #f3f4f6; /* Couleur de fond de la page */
    color: #333333; /* Couleur du texte par défaut */
}

/* Style pour la disposition centrale */
.max-w-7xl {
    margin-left: auto; /* Marge à gauche automatique */
    margin-right: auto; /* Marge à droite automatique */
}

/* Style pour chaque bloc de contenu */
div.bg-white {
    padding: 1.5rem; /* Espacement interne */
    margin-bottom: 1.5rem; /* Marge inférieure */
    border-radius: 0.5rem; /* Coins arrondis */
    box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075); /* Ombre */
}

/* Style pour les formulaires */
form {
    display: flex; /* Affichage en ligne */
    flex-direction: column; /* Orientation verticale */
    gap: 1rem; /* Espacement entre les éléments enfants */
}

/* Style pour les titres */
h2 {
    font-size: 1.5rem; /* Taille de la police */
    font-weight: 600; /* Épaisseur de la police */
    margin-bottom: 1rem; /* Marge inférieure */
    color: #4a5568; /* Couleur du texte */
}

/* Style pour les paragraphes */
p {
    font-size: 0.875rem; /* Taille de la police */
    line-height: 1.25rem; /* Hauteur de ligne */
    color: #718096; /* Couleur du texte */
}

/* Style pour les champs de saisie */
input[type='text'],
input[type='email'],
input[type='password'] {
    width: 100%; /* Largeur pleine */
    padding: 0.5rem; /* Espacement interne */
    border-radius: 0.25rem; /* Coins arrondis */
    border: 1px solid #cbd5e0; /* Bordure */
}

/* Style pour les boutons */
button {
    padding: 0.5rem 1rem; /* Espacement interne */
    border-radius: 0.25rem; /* Coins arrondis */
    border: none; /* Pas de bordure */
    cursor: pointer; /* Curseur interactif */
    font-weight: 500; /* Épaisseur de la police */
    transition: background-color 0.3s ease; /* Transition fluide de la couleur de fond */
}

/* Style pour les boutons de couleur principale */
button.primary-button {
    background-color: #4f46e5; /* Couleur de fond */
    color: #ffffff; /* Couleur du texte */
}

/* Style pour les boutons de couleur secondaire */
button.secondary-button {
    background-color: #d1d5db; /* Couleur de fond */
    color: #333333; /* Couleur du texte */
}

    </style>
</x-app-layout>
