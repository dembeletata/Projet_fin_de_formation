<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Mettre a jour le mot de passe') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Assurez-vous que votre compte utilise un mot de passe long et aleatoire pour rester securiser.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="current_password" :value="__('Ancien mot de passe')" />
            <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password" :value="__('Nouveau mot de passe')" />
            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('Confirmer le mot de passe')" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Sauvegarder') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
<style>
    /* Styles pour la section de modification de mot de passe */

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

/* Style pour le formulaire de modification de mot de passe */
section form {
    display: flex; /* Affichage en flexbox */
    flex-direction: column; /* Direction de la colonne */
    gap: 1.5rem; /* Espacement entre les éléments */
    /* Autres styles pour le formulaire */
}

/* Style pour les champs de saisie */
section form x-text-input {
    width: 100%; /* Largeur pleine */
    /* Autres styles pour les champs de saisie */
}

/* Style pour les boutons */
section form x-primary-button {
    width: 100%; /* Largeur pleine */
    /* Autres styles pour le bouton principal */
}

/* Style pour le message "Saved" */
section form p {
    font-size: 0.875rem; /* Taille de police du texte */
    color: #666666; /* Couleur du texte */
    text-align: center; /* Alignement du texte */
    /* Autres styles pour le message "Saved" */
}

</style>
