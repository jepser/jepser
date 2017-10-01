{{--
  Template Name: Bio
--}}

@extends('layouts.app')

@section('content')
<div class="bio">
    <img src="@asset('images/jepser-profile.jpg')" class="bio__image">
    <div class="bio__container">
        <hr>
        <div class="bio__intro">
            <h2 class="bio__title">Jepser Bernardino Ambrocio, <br> Front-End developer & WordPress expert.</h2>
        </div>
        <hr>
        <div class="bio__life">
            <p>Vivo en <strike> la ciudad de Guatemala</strike> Barcelona, España.</p>
            <p>Tengo más de 7 años de experiencia como developer.</p>
            <p>He tenido el honor de haber colaborado con Saatchi & Saatchi, BBDO, Taco Bell y Starmedia.</p>
            <p>Soy co-fundador de <a href="http://royalestudios.com">Royal Estudios</a>.</p>
            <p>Me gusta la cerveza artesanal y los café de especialidad.</p>
            <p>Trabajo como Front-End Engineer en <a href="https://www.typeform.com">Typeform</a>.</p>
        </div>
    </div>
</div>
<div class="projects">
    <div class="projects__container">
        <hr>
        <h3 class="projects__title">Proyectos destacados</h3>
        <ul class="projects__list">
            <li class="projects__item project">
                <a href="http://jepser.com/labs/woocommerce-credomatic/" class="project__link">WooCredomatic, plugin de pago para Centro América</a>
            </li>
            <li class="projects__item project">
                <a href="http://spotify-youtube.jepser.com" class="project__link">Spotify to Youtube Converter App</a>
            </li>
            <li class="projects__item project">
                <a href="https://www.typeform.com/blog/human-experience/siri-is-dying-long-live-susan-bennett/" class="project__link">Siri is dying. Long live Susan Bennett.</a>
            </li>
            <li class="projects__item project">
                <a href="https://www.typeform.com/blog/human-experience/cui/" class="project__link">Technology Imitates Art: The rise of the conversational interface</a>
            </li>
            <li class="projects__item project">
                <a href="https://www.typeform.com/blog/guides/brand-awareness/" class="project__link">Brand awareness: Nearly everything you need to know</a>
            </li>
            <li class="projects__item project">
                <a href="https://www.typeform.com/blog/guides/net-promoter-score/" class="project__link">Guide to Net Promoter Score</a>
            </li>
        </ul>
    </div>
</div>
@endsection
