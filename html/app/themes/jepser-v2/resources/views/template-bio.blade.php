{{--
  Template Name: Bio
--}}

@extends('layouts.app')

@section('content')
<div class="bio">
    <div class="bio__intro">
        <h2 class="bio__title">Jepser Bernardino Ambrocio, <br> Front-End developer & WordPress expert.</h2>
    </div>
    <div class="bio__live">
        <p>Vivo en <stroke>Guatemala</stroke> Barcelona.</p>
        <p>Trabajo en Typeform.</p>
    </div>
  @while(have_posts()) @php(the_post())
    @include('partials.content-page')
  @endwhile
</div>
@endsection
