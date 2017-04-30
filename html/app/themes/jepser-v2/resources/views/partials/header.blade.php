<header class="banner">
  <div class="banner__container">
    <a class="banner__brand" href="{{ home_url('/') }}"><img src="@asset('images/jepser-logo.svg')" /></a>
    <nav class="banner__navigation navigation">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu([
                'theme_location' => 'primary_navigation',
                'menu_class' => 'nav',
                'container'     => ''
            ])
        !!}
      @endif
    </nav>
  </div>
</header>
@if (!is_front_page())
<div class="page__title page-title">
    <h1 class="page-title__content">
        @if(is_single() || is_home())
            Blog
        @elseif(is_category())
            {{ single_cat_title() }}
        @else
            {{ the_title() }}
        @endif
    </h1>
</div>
@endif
