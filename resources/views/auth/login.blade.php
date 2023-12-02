<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="vide  mt-5">

    </div>
    <form method="POST" action="{{ route('login') }}" class=" mt-5">
        <h1>Connectez vous</h1>
        @csrf

        <!-- Email Address -->
        <div class="mb-3">
            {{-- <label for="email" class="form-label">{{ __('Email') }}</label> --}}
            <input id="email"  type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email:exemple@gmail.com"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mb-3">
            {{-- <label for="password" class="form-label">{{ __('Password') }}</label> --}}
            <input id="password"  type="password" name="password" required autocomplete="current-password" placeholder="Mot de passe..." />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="mb-3 form-check">
            <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
            <label for="remember_me" class="form-check-label">{{ __('Remember me') }}</label>
        </div>

        <div class="mb-3">
            @if (Route::has('password.request'))
                <a class="text-decoration-none me-3" href="{{ route('password.request') }}" style="color: rgb(255, 123, 0)">{{ __('Mot de passe oublié?') }}</a>
            @endif
            <button type="submit" class="mon-bouton">{{ __('Se Connecté') }}</button>
        </div>
        <li class="nav-item">
            <a class="nav-link mon-bouton2" href="/register">S'INSCRIRE</a>
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
        height: 400px;
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
{{-- <button href="register" class="btn btn-danger">{{ __("S'inscrire") }}</button> --}}

