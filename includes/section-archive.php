<!--Utvecklare: Amar -->



<?php if(have_posts()): while(have_posts()): the_post();?>


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
       
                          <a href="<?php the_permalink();?>">
                             <img src="<?php echo get_the_post_thumbnail_url();?>" class="article-image2">
                        </a>
                        
                        
                        <p class="article-content1"><?php echo  get_the_excerpt(); ?></p>

                      <a href="<?php the_permalink();?>" id="btn3" class="btn btn-success">Read more</a>
    
  </div>
</div>

<?php endwhile; else: endif; ?>