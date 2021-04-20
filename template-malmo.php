<!--Sofia-->
<?php
/*
Template Name: Malmö
*/
?>
<?php get_header();?>


<main>
    <section>
        
    <div class="breadcrumbs">
            <?php get_template_part("./template-parts/breadcrumbs");?>
        </div>

            <img src="<?php echo get_the_post_thumbnail_url();?>" class="topImage" >
    </section>

    <section>
            <?php $malmoContent = get_field("content_repeater");?>
            <?php foreach($malmoContent as $sub_field):?>
                <div class="MalmoContent">
                        <a href="<?php echo the_permalink();?>">
                            <h3 class="contentTitle"><?php echo $sub_field["content_title"];?></h3>
                        </a>
                    <div class="contentImageDiv" >
                        <a href="">
                            <img src="<?php echo $sub_field["content_image"];?>"class="contentImage">
                        </a>
                    </div>
                </div>
            <?php endforeach;?>
            
        
    </section>
</main>

<?php get_footer();?>