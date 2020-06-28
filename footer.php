<?php 
/* Footer Menu */ ?>

<footer class="footer">
        <nav class="footer-navigation">
        <?php 
                 wp_nav_menu( $arg= array(
                     'menu_class' => 'main-navigation',
                     'theme_location' => 'footer'
                 ));
           
           ?>
           
        </nav>
        <p class="copyright">
            <small>Tout contenu de ce site appartient à l'école supérieur de technologie Sidi Bennour &copy; ASMAA EL HARAT ; AYA DARKAOUI</small>
        </p>
    </footer>
<? php wp_foot(); ?>
</body>

</html>