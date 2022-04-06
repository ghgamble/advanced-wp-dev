<?php get_header(); ?>

<div id="primary">
  <div id="main">
    <div class="container">
      <?php
      while(have_posts()):
        the_post();
        get_template_part('template-parts/content', 'single');
        ?>
        <div class="row">
          <div class="pages col-6 text-left">
            <?php next_post_link('&laquo; %link'); ?>
          </div>
          <div class="pages col-6 text-right">
            <?php previous_post_link('%link &raquo'); ?>
          </div>
        </div>
        <?php
        if(comments_open() || get_comments_number()):
          comments_template();
          // If you want to make a different one from the comments standard default comments.php
          // comments_template('/comments-other-template.php');
        endif;
      endwhile;
      ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
