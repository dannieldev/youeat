<?php get_header(); ?>

    <?php  while(have_posts()): the_post();?> <!-- Recorrer informacio -->
        <?php the_post_thumbnail(''); ?> <!-- Imprimir Imagen -->
        <h1></h1> <!-- Titulo -->


        <div class="hero" style="backgroud-image:url(<?php echo  get_the_post_thumbnail_url() ?>);">
            <div class="contenido-hero">
                <div class="texto-hero">
                <?php the_title('<h1>', '</h1>'); ?>
                </div>
            </div>
        </div>
            
        <div class="principal contenedor">
             <main class="text-centrado contenido-paguinas">
                <?php the_content();?> <!-- Comentario -->
            </main>
        </div>    
    <?php endwhile; ?>

<?php get_footer(); ?>