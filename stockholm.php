<?php 
/*Template Name: stockholm*/


/*utvecklare: Amar. I created this page because Anuja is unfortunately sick and couldnt do it. 
*/


get_header();?>


<?php $stockholm = get_field('stockholm');?>

<?php $stockholm2 = get_field('stockholm2');?>


    <main>
			
	 <section>
         <div class="main-sidebar">
             <div class="breadcrumbs">
               <?php get_template_part("./template-parts/breadcrumbs");?>
             </div>
             
     

      
               
       
                <div class="texttest">
                <h1  class="titlestockholm"><?php echo $stockholm['title'];?></h1>
                   <p ><?php echo $stockholm['text'];?></p>
                 </div>


               


                 <div class="card mb-3">
                   <div class="card-body"> 
                          
                    <p class="text-body"><img src="<?php echo get_the_post_thumbnail_url();?>" class="stockholm-image"></p>
                   </div>
                 </div>
                 
       
       

                 <div class="texttest">
                <h1  class="titlestockholm"><?php echo $stockholm2['title'];?></h1>
                   <p ><?php echo  get_the_excerpt(); ?><?php echo $stockholm2['text'];?></p>



                 </div>
       
                

                 <section class="slideshow" data-autoplay="5000" data-singleitem="false" data-items="2">
				   
			<div class="container">
			<?php if( have_rows('slides2') ):?>

                <div class="flexslider carousel">
				 <ul class="slides">

			<?php while( have_rows('slides2') ) : the_row();
					
					$image = get_sub_field('image');
					$imageurl = $image['sizes']['slider'];
					?>

                    <li><img src="<?php echo $imageurl;?>" alt=""/></li>
					  
					<?php endwhile;?>
			
			      </ul>	
			     </div>
				 </section>

				 </div>
				 <?php endif;?>
				



               
               
		</div> 
			   
			   
        </section>
	</main>
        
		<?php get_footer(); ?>