<?php
    $funFacts = [
        'En Guatemala hay un "Silicon Valley", pero con frijoles.',
        'En Guatemala hay 33 volcanes.',
        'Guatemala tiene 21 idiomas mayas.',
        'Guatemala tiene uno de los mejores cafés del mundo. Mi recomendación, Geisha de Huehuetenango.',
        'Si les gusta la cerveza, prueben el Principe Gris.',
        'La zona hipster de Guatemala es la zona 4.',
        'Mi café favorito es en Rojo Cerezo, zona 4.'
    ];

    $randomFact = array_rand($funFacts, 1);
?>
<?php if (!is_front_page()) { ?>
<footer class="footer">
    <div class="footer__container">
        <ul class="footer__list">
            <li class="footer__item footer__item--hire">
                <a class="typeform-share" href="https://jepser.typeform.com/to/yQ1K0K" data-mode="1" target="_blank">Libre para proyectos</a>
            </li>
            <li class="footer__item footer__item--random">
                <?= $funFacts[$randomFact]; ?>
            </li>
        </ul>
    </div>
</footer>
<?php } ?>
