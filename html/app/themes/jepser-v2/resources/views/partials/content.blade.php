<article class="article article--mini">
  <header>
    @include('partials/entry-meta')
    <h2 class="article__title">
        <a href="{{ get_permalink() }}" class="article__link">{{ get_the_title() }}</a>
    </h2>
  </header>
  <div class="entry-summary">
    @php(the_excerpt())
  </div>
</article>
