<?php
/*
* Template Name: page
*/
?>
<?php get_header(); ?>

<section class="contact">
    <h3 class="text-center  py-5">Nous rejoindre</h3>
    <div class="container mb-5">
        <div class="row">
            <div class="contact-use col-md-12 col-lg-6 mx-auto">
                <h4 class="text-center my-4">Nous contacter</h4>
                    <div class="py-4">
                        <h6>RESTONS EN CONTACT</h6>
                        <p>Retrouvez-nous dans l’espace « Galliéni Coworking », nouveau lieu dédié à l’innovation et au
                            numérique au coeur de Nouméa.</p>
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Map.jpg" alt="localisation le-pays">
                    </div>
            </div>
            <div class="contact-use mx-auto">
                <h4 class="text-center my-4">Mail: contact@lepays.nc</h4>
                    <div class="py-4">
                        <span>Le pays New Caledonia</span><br>
                        <span>34 rue Gallieni</span><br>
                        <span>98 800 Nouméa</span>
                    </div>
                    <form action="" class="mt-5">
                        <div class="d-flex mb-3 justify-content-around">
                            <input  type="text" placeholder="Name">
                            <input type="text" placeholder="Prenom">
                        </div>
                        <div class="d-flex justify-content-around">
                            <input type="text" placeholder="Telephone">
                            <input type="text" placeholder="Mail">
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <input type="text" class="contact-use-comment">
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <button class="">Contacter</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
    <div class="container">
        <h6 class="text-center">S'ABONNER A LA NEWSLETTER</h6>
        <div class="d-flex justify-content-center mt-5">
            <input type="text" placeholder="Mail">
        </div>
        <div class="d-flex justify-content-center py-5">
            <button>Envoyer</button>
        </div>
    </div>
</section>

<?php get_footer(); ?>