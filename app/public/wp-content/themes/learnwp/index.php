<?php get_header(); ?>
<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
  <div class="content-area">
    <main>
      <section class="middle-area">
        <div class="container">
          <div class="row">
            <div class="news col-md-9">
              <?php
                if(have_posts()):
                  while(have_posts()): the_post();
                    get_template_part('template-parts/content', get_post_format());
                  endwhile;
              ?>
              <div class="row">
                <div class="pages col-md-6 text-left">
                  <?php previous_posts_link("<< Newer posts"); ?>
                </div>
                <div class="pages col-md-6 text-right">
                  <?php next_posts_link("Older posts >>"); ?>
                </div>
              </div>
              <?php
                else:
                ?>
                <p>There are currently no posts, check back later</p>
              <?php endif; ?>
            </div>
            <aside class="sidebar col-md-3 h-100"><?php get_sidebar('blog'); ?></aside>
          </div>
        </div>
      </section>
    </main>
  </div>
<?php get_footer(); ?>
