<?php get_header(); ?>

  <main class="row">
      <div class="col-md-9 column posts">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <article>
            <span class="edit-post"><?php edit_post_link('edit'); ?></span>
            <header>
              <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
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

