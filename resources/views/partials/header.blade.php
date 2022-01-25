<header>

    <ul class="nav nav-pills p-5">
        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{ route('home') }}">Pacchetti</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteName() === 'about' ? 'active' : '' }}" href="{{ route('about') }}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteName() === 'contacts' ? 'active' : '' }}" href="{{ route('contacts') }}">Contacts</a>
        </li>
        
    </ul>
    
</header>