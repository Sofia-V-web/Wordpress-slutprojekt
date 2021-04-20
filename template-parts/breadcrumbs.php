<?php
/* 
Utvecklare: Sofia 
Breadcrumbs blev en template-part för lättare använda CSS i Blog där sidebar måste nå till nav.
*/
global $post;
    $divider = "/";
    $blog = "Blog";
    $hem = "Home";
    $searchResults = "Search Results";
    $archive = "Archive";
?>

<ul class="breadcrumbs-list">
    <?php
    /* Denna kod gör så att breadcrumbs i home.php ser ut så här: Home / Blog.
    Breadcrumbs i single.php  blir Home / Blog / Post Name. */
    if(is_home()){
        echo "<li><a href=".get_site_url().">".$hem."</a></li>";
        echo "<li>".$divider."</li>";
        echo "<li><a href=".get_site_url().">".$blog."</a></li>";
    }elseif(is_single()){
        echo "<li><a href=".get_site_url().">".$hem."</a></li>";
        echo "<li>".$divider."</li>";
        echo "<li><a href=".get_post_type_archive_link("post").">Blog</a></li>";
        echo "<li>".$divider."</li>";
        echo "<li>".$post->post_title."</li>"; 
    }
    else{
        echo "<li><a href=".get_site_url().">".$hem."</a></li>";
        
    }
/* Denna kod visar dem andra sidornas titel efter Home / ~Page Name Here~
*/
    if(is_page()){
        echo "<li>".$divider."</li>";
        if(!empty($post->post_parent)){
            echo "<li>";
            echo "<a href=".get_permalink($post->post_parent).">";
            echo get_the_title($post->post_parent);
            echo "</a></li>";
            echo "<li>".$divider."</li>";
        }
        echo "<li>".$post->post_title."</li>";
    }elseif (is_search()){
        echo "<li>".$divider."</li>";
        echo "<li>".$searchResults."</li>";
    }
    elseif (is_archive()){
        echo "<li>".$divider."</li>";
        echo "<li>".$archive."</li>";
    }else{
        echo "";
    }
    ?>
</ul>