<!--Utvecklare: Amar -->

<?php
/*Template Name: archive*/
get_header();

?>
    <main>

   
               <div class="breadcrumbs">
                    <?php get_template_part("./template-parts/breadcrumbs");?>
               </div>

       <section class="page-wrap">
               <div class="container-pagination">
       
               


                  <?php get_template_part('includes/section','archive');?>
                  
                  <!-- pagination starts-->
                 <div class="pagination"><?php 
                  
                  global $wp_query;

                  $big = 999999999;

                  echo paginate_links( array(
                      'base' => str_replace($big, '%#%', esc_url(get_pagenum_link( $big))),
                      'format' => '?page=%#%',
                      'current' => max(1, get_query_var('paged')),
                      'total' => $wp_query->max_num_pages
                  ));
                                               
                  
                  ?>
                  
                  <!-- pagination ends-->

                  </div> 


                </div>
       
       
        </section>

    </main>
        
<?php get_footer(); ?>