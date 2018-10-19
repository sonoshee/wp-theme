<?php get_header(); ?>
<div class="container">
  <div class="contents">
    <?php if(have_post()): the_post(); ?>
    <article <?php post_class('kiji'); ?>>
      <div class="kiji-info">
        <span class="kiji-date">
          <i class="fas fa-pencil-alt"></i>
          <time>
          </time>
        </span>
      </div>
    </article>
    <?php enfif; ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
