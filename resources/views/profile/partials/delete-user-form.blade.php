<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Supprimer le compte') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Une fois votre compte supprimer toutes vos informormation serrons perdu.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Supprimer le compte') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
<style>
    /* Styles pour la section de suppression de compte */

/* Style pour l'en-tête */
section header {
    text-align: center; /* Alignement du texte */
    /* Autres styles pour l'en-tête */
}

/* Style pour le titre de l'en-tête */
section header h2 {
    font-size: 1.5rem; /* Taille de police du titre */
    color: #333333; /* Couleur du texte du titre */
    margin-bottom: 0.5rem; /* Marge inférieure */
    /* Autres styles pour le titre */
}

/* Style pour le paragraphe de l'en-tête */
section header p {
    font-size: 0.875rem; /* Taille de police du paragraphe */
    color: #666666; /* Couleur du texte du paragraphe */
    /* Autres styles pour le paragraphe */
}

/* Style pour le bouton de suppression */
section x-danger-button {
    display: block; /* Affichage en bloc */
    width: 100%; /* Largeur pleine */
    margin-top: 1rem; /* Marge supérieure */
    /* Autres styles pour le bouton de suppression */
}

/* Style pour le formulaire de confirmation */
section form {
    padding: 1.5rem; /* Remplissage du formulaire */
    background-color: #f9f9f9; /* Couleur de fond */
    border-radius: 0.5rem; /* Bordure arrondie */
    /* Autres styles pour le formulaire */
}

/* Style pour le titre du formulaire */
section form h2 {
    font-size: 1.25rem; /* Taille de police du titre */
    color: #333333; /* Couleur du texte du titre */
    margin-bottom: 1rem; /* Marge inférieure */
    /* Autres styles pour le titre */
}

/* Style pour le paragraphe du formulaire */
section form p {
    font-size: 0.875rem; /* Taille de police du paragraphe */
    color: #666666; /* Couleur du texte du paragraphe */
    margin-bottom: 1.5rem; /* Marge inférieure */
    /* Autres styles pour le paragraphe */
}

/* Style pour le champ de mot de passe */
section form x-text-input {
    width: 100%; /* Largeur pleine */
    margin-bottom: 1rem; /* Marge inférieure */
    /* Autres styles pour le champ de mot de passe */
}

/* Style pour les boutons de formulaire */
section form x-secondary-button,
section form x-danger-button {
    margin-left: 0.5rem; /* Marge à gauche */
    /* Autres styles pour les boutons de formulaire */
}

</style>
