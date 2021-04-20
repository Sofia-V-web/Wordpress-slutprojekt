<!--Utvecklare: Amar -->


<?php 

/*Template Name: contact*/

get_header(); 
?>

<main>
            

    <section>
       <div>
             <div class="breadcrumbs">
               <?php get_template_part("./template-parts/breadcrumbs");?>
             </div>
             
             <?php if(have_posts()): while(have_posts()): the_post();?>


              <div class="card mb-3">
               <div class="card-body"> 
                          
               
               <p class="text-body"><img src="<?php echo get_the_post_thumbnail_url();?>" class="article-image1"></p>
                          <a href="<?php the_permalink();?>" id="btn1" class="btn btn-default">Call us: 00462482781 </a>
                      <br>
                      <a href="<?php the_permalink();?>" id="btn2" class="btn btn-default">Email us: hdksldjf@gmail.se</a>
                    </div>
              </div>

            <?php endwhile; else: endif; ?>
    
        </div>
    </section>
   



</main>


<?php get_footer(); ?>