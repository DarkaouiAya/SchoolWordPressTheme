<?php
/* Template Name : Presentation Template*/

get_header();
?>
<div class="classes-wrapper">
        <div class="classes-entry">
            <h1>Présentation</h1>
            <p>Dans ce module, vous pouvez trouver une présentation sur l'école supérieur de technologie, et ses trois filières. </p>
        </div>

        <div class="class-container class-container-pink">
            <h2>Génie Informatique</h2>
            <img src="<?php bloginfo('template_url')?>/images/images(1).jpg" class="instructor-headshot" alt="">
            <div class="class-container-content">
                <div class="class-instructor-section">
                    <h3>Chef de département</h3>
                    <p class="instructor-name">Dr.Hicham Toumi </p>
                </div>
                <div class="class-length-section">
                    <h3>Durée</h3>
                    <p class="length">2 ans</p>
                </div>
                <p class="class-description">Le génie informatique est une discipline qui traite de la conception, du développement et de la fabrication de systèmes informatiques, à la fois matériels et logiciels. Concevoir, réaliser et mettre en œuvre une application informatique, administrer les systèmes de réseaux informatiques, suppose en effet une qualification particulière. C'est cette dernière, tournée vers l'informatique, que vous apportera le DUT en Génie informatique proposé par l'ESTSB.</p>
                
            </div>
        </div>
        <div class="class-container class-container-purple">
            <h2>Technique de management</h2>
            <img src="<?php bloginfo('template_url')?>/images/management.png" class="instructor-headshot" alt="">
            <div class="class-container-content">
                <div class="class-instructor-section">
                    <h3>Chef de département</h3>
                    <p class="instructor-name">Dr.Amine abderma</p>
                </div>
                <div class="class-length-section">
                    <h3>Durée</h3>
                    <p class="length">2 ans</p>
                </div>
                <p class="class-description">Le développement du monde des entreprises au Maroc nécessite des cadres spécialisés hautement qualifiés pour permettre aux entreprises nationales et celles qui sont basées au Maroc ou à l'étranger de pouvoir se positionner stratégiquement sur le marché globalisé actuel et d'être compétitives à tous niveaux. C'est la vocation fondamentale de la filière Technique de Management qui regroupe des dominantes très demandées et à forte valeur ajoutée. </p>
            </div>
        </div>
        <div class="class-container class-container-green">
            <h2>Génie Agroenvironnement</h2>
            <img src="<?php bloginfo('template_url')?>/images/Agriculture.jpg" class="instructor-headshot" alt="">
            <div class="class-container-content">
                <div class="class-instructor-section">
                    <h3>Chef de département</h3>
                    <p class="instructor-name">Dr. fatna Zaakour</p>
                </div>
                <div class="class-length-section">
                    <h3>Durée</h3>
                    <p class="length">2 ans</p>
                </div>
                <p class="class-description">L’agronomie est une discipline scientifique et technologique dont le champ principal est la connaissance et la compréhension des relations entre les plantes cultivées et leur milieu (envisagé sous ses aspects physiques, chimiques et biologiques). Elle vient en support au développement et à la mise en œuvre des techniques agricoles en vue de produire des biens (productions végétales et animales) utiles à l’Homme. En complément, le maintien de services tels que la conservation des paysages, la conservation des sols, le respect de l'environnement, relève d'un objectif de développement durable.</p> 
            </div>
        </div>

    </div>
<?php


get_footer();
?>