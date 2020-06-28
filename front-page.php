<?php
/* Front Page Template */
    get_header();
?>
<div class="home">
        <div class="home-hero-section">
            <div class="hero-content">
                <h1>Ecole Supérieur de Technologie Sidi Bennour</h1>
                <p>L'école supérieur de technologie Sidi bennour a été créer en 2016 à la ville Sidi Bennour. Elle assure des formations de très haute niveau.
                    Bienvenue à l'ESTSB.
                </p>
                <button class="button button-home button-purple"><a href="#">Voir Archives</a></button>
                <button class="button button-home button-pink"><a href="#">Voir Actualités</a></button>
            </div>
        </div>
        <div class="home-philosophy-section">
            <h2>La philosophie de l'ESTSB</h2>
            <p>Ici à l'ESTSB, on croit aux étudiants et leurs capacités, et on se base sur la créativite pour l'exploiter dans des réalisations marqués soit au niveau personnel de l'étudiant ou bien dans le niveau national dans des compétitions.</p>
        </div>
        <div class="home-location-section">
            <h2>Localisation</h2>
            <p>Sidi Bennour route principale
                <br> Sidi Bennour, El Jadida, Doukhala-Abda
                <br> 24353
            </p>
        </div>
        <div class="home-featured-instructors-section">
            <h2>Administration</h2>
            <div class="featured-instructors-width-wrapper">
                <div class="featured-instructor featured-instructor-pink">
                    <img src="<?php bloginfo('template_url') ?>/images/Toumi-Hicham.jpg" alt="">
                    <h3>Toumi Hicham</h3>
                    <br> Chef de département génie informatique
                    <p>Doctor Hicham Toumi on informatique from University hasssan 2 Casablanca,IBN MSIk Morocco and master on Network and communication from University Chouaib  Doukkali El Jadida
                    </p>
                    <button class="button"><a href="">Read More</a></button>
                </div>
                <div class="featured-instructor featured-instructor-teal">
                    <img src="<?php bloginfo('template_url') ?>/images/najib-saber.jpg" alt="">
                    <h3>Najib Saber</h3>
                    <p>Enseignant Chercheur chez Université Chouaïb Doukkali El Jadida, et directeur de l'ESTSB.
                    </p>
                    <button class="button"><a href="">Read More</a></button>
                </div>
                <div class="featured-instructor featured-instructor-purple">
                    <img src="<?php bloginfo('template_url') ?>/images/(0).jfif." alt="">
                    <h3>Amine Abderma</h3>
                    <br> Chef de département Technique de management
                    <p>Chercheur ,Consultant et formateur : management multi projet, management de projet, management socio-économique, systèmes de gestion intégrée OPEN ERP, management des ressources humaines et management public

                    </p>
                    <button class="button"><a href="">Read More</a></button>
                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>