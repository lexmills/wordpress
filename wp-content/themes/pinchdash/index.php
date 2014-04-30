<?php get_header(); ?>

  <main class="row">
      <div class="col-md-9 column posts">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <article>
            <header>
              <h2><?php the_title(); ?></h2>
              <time><?php the_time('F jS, Y') ?></time>
            </header>
              <?php the_content(); ?>
          </article>
        <?php endwhile; else: ?>
          <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
      </div>

    <?php get_sidebar(); ?>

<?php get_footer(); ?>
