<?php
get_header();
?>

<div class="container">
  <main>
    <div>
<?php
if( have_posts() ) :
  while ( have_posts() ) : the_post()
  ?>

        <article class="bericht">
               <h2><?php the_title(); ?></h2>
               <?php the_content() ?>

        </article>
    <!-- einde container -->
            <?php endwhile;
              else :
            echo 'Geen berichten gevonden';

              endif;
              // einde wordpress loop

          ?>
          </div>
          <aside>
            <?php dynamic_sidebar( 'widget_aside'); ?>
          </aside>
      </main>
    </div>

        <?php

      //footer toevoegen
      get_footer();
      ?>
