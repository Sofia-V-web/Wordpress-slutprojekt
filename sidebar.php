<!---Sofia-->

<?php
if(is_active_sidebar("blog-sidebar")):
?>

<aside id="blog-sidebar">
    <div>
        <ul class="sidebar-content">
            <?php dynamic_sidebar("blog-sidebar");?>
        </ul>
    </div>
</aside>

<?php endif;?>