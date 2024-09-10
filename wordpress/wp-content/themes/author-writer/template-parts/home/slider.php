<?php
/**
 * Template part for displaying slider section
 *
 * @package Author Writer
 * @subpackage author_writer
 */

?>
<?php $author_writer_static_image = get_stylesheet_directory_uri() . '/assets/images/sliderimage.png'; ?>
<?php if( get_theme_mod( 'author_writer_slider_arrows') != '') { ?>

<section id="slider">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <?php $author_writer_slide_pages = array();
      for ( $author_writer_count = 1; $author_writer_count <= 4; $author_writer_count++ ) {
        $author_writer_mod = intval( get_theme_mod( 'author_writer_slider_page' . $author_writer_count ));
        if ( 'page-none-selected' != $author_writer_mod ) {
          $author_writer_slide_pages[] = $author_writer_mod;
        }
      }
      if( !empty($author_writer_slide_pages) ) :
        $author_writer_args = array(
          'post_type' => 'page',
          'post__in' => $author_writer_slide_pages,
          'orderby' => 'post__in'
        );
        $author_writer_query = new WP_Query( $author_writer_args );
        if ( $author_writer_query->have_posts() ) :
          $i = 1;
    ?>
    <div class="carousel-inner" role="listbox">
      <?php  while ( $author_writer_query->have_posts() ) : $author_writer_query->the_post(); ?>
        <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
         <?php if(has_post_thumbnail()){ ?>
               <img src="<?php the_post_thumbnail_url('full'); ?>"/> <?php }else {echo ('<img src="'.$author_writer_static_image .'">'); } ?>
          <div class="carousel-caption">
            <div class="inner_carousel">
              <?php if( get_theme_mod( 'author_writer_slider_top') != '') { ?>
                <p class="slider-top"><?php echo esc_html( get_theme_mod('author_writer_slider_top','')); ?></p>
              <?php } ?>
             <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <div class="more-btn">
                  <a class="me-3" href="<?php the_permalink(); ?>"><?php esc_html_e('Latest Books','author-writer'); ?></a>
                  <?php if( get_theme_mod( 'author_writer_slide_btn_2',true) != '' || get_theme_mod( 'author_writer_slider_button2_mob',true) != '') { ?>
                    <?php if(get_theme_mod('author_writer_slide_btn_2' ) != ''){?>
                      <a class="btn-2" href="<?php echo esc_url( get_theme_mod('author_writer_slide_btn_2','') ); ?>"><?php esc_html_e('Buy Now','author-writer'); ?></a>
                    <?php }?>
                  <?php }?>
                </div>
            </div>
          </div>
        </div>
      <?php $i++; endwhile;
      wp_reset_postdata();?>
    </div>
    <?php else : ?>
        <div class="no-postfound"></div>
      <?php endif;
    endif;?>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left"></i></span>
      <span class="screen-reader-text"><?php esc_html_e('Previous','author-writer'); ?></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span>
      <span class="screen-reader-text"><?php esc_html_e('Next','author-writer'); ?></span>
    </a> 
  </div>
  <div class="clearfix"></div>
</section>

<?php } ?>
