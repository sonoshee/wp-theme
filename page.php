<?php get_header(); ?>
<div class="container">
  <div class="contents">
    <!-- Article -->
    <?php if(have_posts()): the_post(); ?>

    <article <?php post_class('kiji'); ?>>
        <!-- title -->
        <h1><?php the_title(); ?></h1>
        <!-- Get the body -->
        <?php the_content(); ?>
        <?php echo("this is test"); ?>
        <!-- tags -->
      </div>
    </article>

    <?php endif; ?>
    <!-- End Article -->
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>
