<?php

/*
Template Name: Special Layout
*/

get_header();

if (have_posts()) :
  while (have_posts()) : the_post(); ?>

  <article class="post page">

    <nav class="site-nav children-links clearfix">

      <span class="parent-link"><a href="<?php echo get_the_permalink(get_top_ancestor_id()); ?>">
      <?php echo get_the_title(get_top_ancestor_id()); ?></a></span>

      <ul>
        <?php
        $args = array(
        'child_of' => get_top_ancestor_id(),
        'title_li' => ''
        );
        ?>

        <?php wp_list_pages($args); ?>
      </ul>
  </nav>

    <h2><?php the_title(); ?></h2>

    <div class="info-box">
      <h4>Disclaimer Title</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis varius orci nec dictum fringilla. Mauris a consequat urna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur sit amet vestibulum turpis. Integer non egestas neque. Mauris non fermentum urna, sed molestie massa. Suspendisse potenti. Vestibulum et odio sed ipsum elementum dignissim in in augue. Praesent semper lectus velit, vitae dignissim augue facilisis eget. Nulla porta justo at mattis efficitur. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur aliquam purus non efficitur placerat.
</p>

    </div>
    <?php the_content(); ?>
  </article>

  <?php endwhile;

  else :
    echo '<p>No content found</p>';

  endif;

  get_footer();

?>
