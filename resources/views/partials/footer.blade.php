<footer class="footer py-0 overflow-hidden">
  <div class="container">
    {{-- @php dynamic_sidebar('sidebar-footer') @endphp --}}


    <div class="py-14 flex flex-col md:flex-row md:items-center">


      <div class="md:w-5/6 flex flex-col relative md:mr-4">
        <img class="logo w-8 mb-6" src="@asset('images/Logo.svg')">

        @if (has_nav_menu('top_footer_nav'))
          {!! wp_nav_menu(['theme_location' => 'top_footer_nav', 'menu_class' => 'footer-nav menu pl-0 mb-3 list-none']) !!}
        @endif

        @if (has_nav_menu('primary_footer_nav'))
          {!! wp_nav_menu(['theme_location' => 'primary_footer_nav', 'menu_class' => 'footer-nav menu pl-0 mb-6 list-none']) !!}
        @endif

        <p class="body-2">© 2020 Landify UI Kit. All rights reserved</p>
      </div>


      <div class="w-full md:w-1/6 flex flex-col relative md:ml-4">
        <p class="subtitle-2 text-gray-300">Get the App</p>
        <img class="w-1/2 mx-auto md:w-full md:mr-3 mb-4" src="@asset('images/Google Play Badge.png')">
        <img class="w-1/2 mx-auto md:w-full md:mr-3" src="@asset('images/App Store Badge.png')">
      </div>

    </div>


  </div>
</footer>
