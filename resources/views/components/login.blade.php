<div class="container">
    <div>
        <nav class="container">
            <span class="Yellowtail text-6xl">tasks</span>
            <div>
                <router-link to="/tasks">
                    <span class="Rowdies">List</span>
                </router-link>
                <router-link v-bind:to="{name: 'task.create'}">
                <span class="Rowdies">ADD</span>
                </router-link>
                    @guest
                        @if (Route::has('login'))
                            <span>
                                <a class="Rowdies" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </span>
                        @endif
    
                        @if (Route::has('register'))
                            <span>
                                <a class="Rowdies" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </span>
                        @endif
                    @else
                        <span>
                            <a href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
    
                            <span class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
    
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </span>
                        </span>
                    @endguest
            </div>
        </nav>
    </div>
</div>