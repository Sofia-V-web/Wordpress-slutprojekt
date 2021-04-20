<!--Utvecklare: Sofia -->

<?php get_header();?>
<?php
global $post;
$content = $post->post_content;
?>

<main id="front-page-main">
   
    <section>
        <div id="Div-topImage-main">
            <img src="<?php echo get_the_post_thumbnail_url();?>" class="topImage" id="topImage-main">
        </div>
    </section>
    <section>
        <div class="three-largest-cities-div">
        <h3 id="three-largest-cities-title"><?php the_field("three_largest_cities");?></h3>

        <div class="city-square-container">
            <?php $featured_cities = get_field("featured_cities");?>
            <?php foreach($featured_cities as $sub_field):?>
                <div class="city-image-div">
                    <p><?php echo $sub_field["city_name"];?></p>
                    <a href="<?php echo $sub_field["city_page_link"];?>">
                        <img src="<?php echo $sub_field["city_image"];?>" class="city-image">
                    </a>
                </div>
            <?php endforeach;?>
            </div>
        </div>
    </section>

    <section>
        <div class="front-page-topic-content">
            <?php $front_page_topics=get_field("front_page_topics");?>
            <?php foreach($front_page_topics as $sub_field):?>
                <h3 class="front-page-topic-title"><?php echo $sub_field["topic_title"];?></h3>

                <div class="topic-image-div">
                    <a href="<?php echo $sub_field["topic_image_link"];?>">
                        <img src="<?php echo $sub_field['topic_image'];?>" class="topic-image">
                    </a>
                </div>
            <?php endforeach;?>

        </div>
    </section>
    <section>
        <div id="map-div">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6642974.722222704!2d7.42363058971724!3d62.75865583612047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465cb2396d35f0f1%3A0x22b8eba28dad6f62!2sSweden!5e0!3m2!1sen!2sse!4v1612383851782!5m2!1sen!2sse" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        
    </section>
</main>
<?php get_footer();?>