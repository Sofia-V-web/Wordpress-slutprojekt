<?php
/*Template Name: göteborg*/

/*utvecklare: Amar. I created this page with a slider and repeater. 
*/


get_header();

?>
<?php $page_title = get_field('page_title');?>

<main>

             <div class="breadcrumbs">
               <?php get_template_part("./template-parts/breadcrumbs");?>
			 </div>
			 

            <section class="slideshow" data-autoplay="5000" data-singleitem="false" data-items="2">
				   
			<div class="container">
			<?php if( have_rows('slides') ):?>

                <div class="flexslider carousel">
				 <ul class="slides">

			<?php while( have_rows('slides') ) : the_row();
					
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
				

			





			


				<?php if( have_rows('best_places') ):?>


					    <section class="columns red text-center">
				           <div class="container">
					        <div class="row top">
						     <div class="col-xs-12">
							  <h2 class="goteborgh2"><?php echo $page_title;?></h2>
						     </div>
					        </div>
					<div class="row_bottom">

                       
				<?php while( have_rows('best_places') ) : the_row();
				
					 $image = get_sub_field('image');
					 $title = get_sub_field('title');
					 $paragraph = get_sub_field('paragraph');
					 $link = get_sub_field('link');
				
				
				?>
                       
						
					   <div class="col-xs-3">
							<img src="<?php echo $image['sizes']['product_image_small'];?>" alt=""/>
							<h3><?php echo $title;?></h3>
							<p><?php echo $paragraph;?></p>

						  <?php	if($link):?>
						  <div class="goteborgbutton">
							<a href="" id="btn" class="btn btn-success">Läs mer</a></div>
						    <?php endif;?>
						
						</div>

					



                     
                       <?php endwhile;?>


					    
						      
					           </div>
				                 </div>
                                  </section>
                   
                    <?php else :
                       
                             endif;?>


</main>

 <?php get_footer(); ?>