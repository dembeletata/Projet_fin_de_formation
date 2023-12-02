<x-guest-layout>
    <div class="vide mt-5">

    </div>
    <form method="POST" action="{{ route('register') }}" class=" mt-5">
        <h1>Inscrivez vous</h1>
        @csrf

        <!-- Name -->
        <div class="mb-3">
            <input id="name" class="form-control bg-light border-orange" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="Nom:TRAORE"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div class="mb-3">
            <input id="lastname" class="form-control bg-light border-orange" type="text" name="lastname" value="{{ old('lastname') }}" required autofocus autocomplete="lastname" placeholder="Prenom: Issa ..."/>
            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mb-3">
            <input id="email" class="form-control bg-light border-orange" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" placeholder="Email:exemple@gmail.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mb-3">
            <input id="password" class="form-control bg-light border-orange" type="password" name="password" required autocomplete="new-password" placeholder="Mot de passe ..."/>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
            <input id="password_confirmation" class="form-control bg-light border-orange" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Comfirmer ..."/>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mb-3">
            <button type="submit" class="mon-bouton">{{ __("S'inscrire") }}</button>


        </div>
        <li class="nav-item">
            <a class="text-decoration-none me-4 text-orange" href="{{ route('login') }}" style="color: rgb(255, 123, 0)">{{ __('Déja inscris?') }}</a>

            <a class="nav-link mon-bouton2" href="login">Se connecter</a>
        </li>

    </form>
    <style>
        h1{
            color: rgb(255, 123, 0);
            margin: 10px;
            margin-top: -10px;
        }
        input{
            width: 100%;
            background-color: rgb(252, 171, 96);
            border: none;
            border-radius: 5px;
            font-size: 20px;


        }
        .vide{
            width: 400px;
            height: 100px;
            background-color: rgb(255, 123, 0);
            border-radius: 10px;
            margin-left: 35%;
            margin-bottom: -140px;


        }
        form{
            width: 600px;
            height: 500px;
            border: 1px solid rgb(255, 123, 0);
            border-radius: 10px;
            padding: 50px;
            align-items: center;
            margin-left: 28%;
            text-align: center;
            background-color: rgb(255, 255, 255);
            box-shadow: 1px 1px -26px rgb(255, 159, 69), -1px -1px -26px rgb(255, 159, 69);
            margin-top: 400px;

        }
        .mon-bouton {
            background-color: rgb(255, 123, 0);
            color: rgb(255, 255, 255);
            border: none;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 5px;
        }

        .mon-bouton:hover {
            background-color: rgb(192, 95, 5);
            color: rgb(255, 255, 255);
            border: none;
        }
        .mon-bouton2 {
            background-color: rgba(0, 0, 255, 0);
            color: rgb(255, 123, 0);
            border: 1px solid rgb(255, 123, 0);
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 5px;
        }

        .mon-bouton2:hover {
            background-color: rgb(255, 123, 0);
            color: rgb(255, 255, 255);
            border: none;
        }

    </style>

</x-guest-layout>
{{-- <button href="login" class="btn btn-danger">{{ __("Se Connecté") }}</button> --}}

