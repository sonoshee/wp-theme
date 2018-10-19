<?php get_header(); ?>
<div class="container">
  <div class="contents">
    <!-- Article -->
    <?php if(have_posts()): the_post(); ?>

    <article <?php post_class('kiji'); ?>>
      <div class="kiji-info">
        <!-- Get Post Datetime -->
        <span class="kiji-date">
          <i class="fas fa-pencil-alt"></i>
          <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
            <?php echo get_the_date(); ?>
          </time>
        </span>
        <!-- Get Categories -->
        <?php if(has_category()): ?>
        <span class="cat-data">
          <?php echo get_the_category_list(' '); ?>
        </span>
        <?php endif; ?>
        <!-- title -->
        <h1><?php the_title(); ?></h1>
        <!-- i-catch -->
        <?php if(has_post_thumbnail()): ?>
        <div class="kiji-img">
          <?php the_post_thumbnail('large'); ?>
        </div>
        <?php endif; ?>
        <!-- Get the body -->
        <?php the_content(); ?>
        <!-- tags -->
        <div class="kiji-tag">
          <?php the_tags('<ul><li>tag: </li><li>','</li><li>','</li></ul>'); ?>
        </div>
      </div>
    </article>

    <?php endif; ?>
    <!-- End Article -->
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
