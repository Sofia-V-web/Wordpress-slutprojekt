<!--Sofia-->
<?php get_header();?>

<?php
global $post;
$title = $post->post_title;
?>

<main>
    <section>
        <div class="blog-content" >        
        <div class="breadcrumbs">
            <?php get_template_part("./template-parts/breadcrumbs");?>
        </div>

          <div class="article-content">
            <?php while(have_posts()): the_post();?>
            <article>
                 <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                <div class="aritcle-image-div">
                        <a href="<?php the_permalink();?>">
                             <img src="<?php echo get_the_post_thumbnail_url();?>" class="article-image">
                        </a>
                </div>
                <p><?php the_excerpt();?></p>
            </article>
            <?php endwhile;?>
            
            <div id="blog-pagination">
              <?php
              the_posts_pagination();
              ?>
            </div>
          </div>

        <?php get_sidebar("blog-sidebar");?>

              
        </div>
    </section>
</main>

<?php get_footer();?>