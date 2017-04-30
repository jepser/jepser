<article @php(post_class())>
  <header>
    @include('partials/entry-meta')
    <h2 class="article__title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
  </header>
  <div class="entry-summary">
    @php(the_excerpt())
  </div>
</article>
