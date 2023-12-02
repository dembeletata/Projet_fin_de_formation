<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Information sur mon profil') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Mettre a jour les information de profil et l'adresse e-mail de voter compte.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __("votre adresse e-mail n'est pas verifie.") }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Cliquer ici pour renvoyer e-mail de verification.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('un nouveau lien de verification a ete envoyer a votre adresse e-mail.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Sauvegarder') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
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
    /* Styles pour la section de mise à jour des informations de profil */

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

/* Style pour les champs de saisie */
section form x-text-input {
    width: 100%; /* Largeur pleine */
    /* Autres styles pour les champs de saisie */
}

/* Style pour le bouton d'envoi de la vérification */
section form #send-verification button {
    text-decoration: underline; /* Soulignement du texte du bouton */
    font-size: 0.875rem; /* Taille de police du bouton */
    color: #4f46e5; /* Couleur du texte du bouton */
    /* Autres styles pour le bouton d'envoi de la vérification */
}

/* Style pour le message de confirmation "Saved" */
section form p {
    font-size: 0.875rem; /* Taille de police du texte */
    color: #666666; /* Couleur du texte */
    text-align: center; /* Alignement du texte */
    /* Autres styles pour le message de confirmation "Saved" */
}

</style>
