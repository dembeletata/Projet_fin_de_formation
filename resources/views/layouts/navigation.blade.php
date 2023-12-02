<nav x-data="{ open: false }" class="nav bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                    </x-slot>

                    <x-slot name="content" >

                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden" style="display: flex; flex-direction:row">
        <div>
            <h2 style="padding: 30px; color: rgb(213, 103, 0)">Bonjour a vous!
            </h2>
        </div>
        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">

            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1" style="display: flex; flex-direction:row;">
                <button class="mon-Bouton">
                <x-responsive-nav-link :href="route('profile.edit')" class="mon-Bouton">
                    {{ __('Profile') }}
                </x-responsive-nav-link>
                </button>


                <!-- Authentication -->
            </div>
        </div>
    </div>

</nav>
<style>
            .mon-Bouton {
  background-color: rgb(255, 123, 0);
  color: rgb(255, 255, 255);
  border: 1px solid rgb(255, 123, 0);
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 10px;
}

.mon-Bouton:hover {
  background-color: rgb(213, 103, 0);
  color: rgb(255, 255, 255);
  border: none;
}

    /* Base Styles */
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
}

/* Navigation Bar */
.nav {
    background-color: #ffffff00;
    border-bottom: 1px solid #e6e6e6;
    margin-left: 0;
    padding-right: 600px;
}

.nav .flex {
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 4rem;
}


/* User Dropdown */
.nav .hidden button {
    cursor: pointer;
    border: none;
    background-color: transparent;
    display: inline-flex;
    items-align: center;
    padding: 8px 12px;
    font-size: 14px;
    font-weight: 500;
    color: #555;
}

.nav .hidden button:hover {
    color: #333;
}

/* Responsive Navigation */
.nav .hidden .block {
    display: block;
}

/* Responsive Settings Options */
.nav .hidden .pt-4 {
    padding-top: 1rem;
}

.nav .hidden .px-4 {
    padding: 0 1rem;
}

.nav .hidden .font-medium {
    font-weight: 500;
}

.nav .hidden .text-base {
    font-size: 16px;
}

.nav .hidden .text-gray-800 {
    color: #333;
}

.nav .hidden .text-gray-500 {
    color: #777;
}

.nav .hidden .mt-3 {
    margin-top: 0.75rem;
}

.nav .hidden .space-y-1 {
    margin-bottom: 0.25rem;
}

/* Add any additional styling as needed */
</style>
