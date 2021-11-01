<header class="banner pt-4 pb-14">
  <div class="container header flex items-center justify-between">
    <div class="flex">
      <a class="brand inline-block border-0" href="{{ home_url('/') }}">
        {{-- {{ get_bloginfo('name', 'display') }} --}}
        <img src="@asset('images/logo_dark.svg')">
      </a>
      <nav class="nav-primary inline-block">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'header_menu']) !!}
        @endif
      </nav>
    </div>
    
    <div class="flex flex-col md:flex-row items-center md:ml-4">
      <a href="#" class="border-0 mr-3">
        <img class="w-32" src="@asset('images/Google Play Badge.png')">
      </a>
      <a href="#" class="border-0 mr-3">
        <img class="w-32" src="@asset('images/App Store Badge.png')">
      </a>
    </div>
  </div>
</header>
