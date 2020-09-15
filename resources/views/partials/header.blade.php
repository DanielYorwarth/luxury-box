<header class="header">
  <div class="container">

    @if ( has_custom_logo() ) 
      <div class="header__logo">
        {{the_custom_logo()}}
      </div>
    @else 
      <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    @endif      
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
