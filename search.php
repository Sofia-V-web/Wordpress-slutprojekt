<!--Sofia-->
<?php
/*
Template Name: Search Results
*/
?>
<?php get_header();?>

<?php
global $post;
$title = $post->post_title;
$content = $post->post_content;
?>

<main>
        <div class="searchContent">

        <div class="breadcrumbs">
            <?php get_template_part("./template-parts/breadcrumbs");?>
        </div>

        <div class="searchContentResults">
        <?php if(have_posts()):?>
            <?php while(have_posts()): the_post();?>
            
                <h2><a href="<?php the_permalink();?>"><?php echo $title ;?></a></h1>
                <div class="aritcle-image-div">
                        <a href="<?php the_permalink();?>">
                             <img src="<?php echo get_the_post_thumbnail_url();?>" class="article-image">
                        </a>
                </div>
                <p><?php the_excerpt();?></p>

            <?php endwhile;?>
         <?php endif;?>
        </div>
        <?php get_sidebar("blog-sidebar");?>
        </div>
</main>
<?php get_footer();?>