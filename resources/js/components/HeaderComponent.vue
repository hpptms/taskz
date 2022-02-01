<template>
    <nav>
        <div class="md:container md:mx-auto">
            <div class="login-navi">
                <div class="flex flex-row-reverse">
                    <!-- Authentication Links -->
                    @guest
                    @if (Route::has('register'))
                        <div class="nav-item px-4 py-2 m-2">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </div>
                    @endif
                    @if (Route::has('login'))
                        <div class="nav-item px-4 py-2 m-2">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> 
                        </div>
                    @endif                          
                    @else
                        <div class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle px-4 py-2 m-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                        <div class="dropdown-menu dropdown-menu-end px-4 py-2 m-2" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                            </form>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </nav>
<template>

<script>
    export default {}
</script>