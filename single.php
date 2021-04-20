<!--Amar & Sofia-->

<?php

get_header();

?>

<main>
    <section>
      <div class="blog-content" >        
        <div class="breadcrumbs">
            <?php get_template_part("./template-parts/breadcrumbs");?>
        </div>
         
       <div class="card mb-3">
          <div class="card-body">
             
             <h3 class="title-card"><?php the_title();?></h3>

             <p class="post-info1"><?php the_time('F jS, Y'); ?> | by 

             <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>">

             <?php the_author(); ?></a> | Posted in
       

           <?php 
    
            $categories = get_the_category();
            $separator = ", ";
            $output = '';


            if($categories) {

            foreach ($categories as $category) {
             
            $output .= ' <a href="' .get_category_link($category->term_id). '">'.$category->cat_name . '</a>'. $separator;
            }

            echo trim($output, $separator);
            };
    
            ?>


           </p>
       
           <img src="<?php echo get_the_post_thumbnail_url();?>" class="article-image2">
           <p class="article-content1"><?php echo get_the_content(); ?></p>

   
    
          </div>
        </div>
     </section>
</main>


<?php get_footer(); ?>