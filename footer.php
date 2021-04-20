<!--Utvecklare: Amar -->

<footer class="footer">
			<div class="footer-left">
           
            <h4>Social media</h4>
						<div class="socials">
							 <a href=""><i class="fa fa-facebook"></i></a>
						   <a href=""><i class="fa fa-twitter"></i></a>
							 <a href=""><i class="fa fa-instagram"></i></a>	
							 <a href=""><i class="fa fa-linkedin"></i></a>
               <a href=""><i class="fa fa-youtube"></i></a>

						</div>


                        <ul class="footer-right">
                           <li>
                           <h2></h2>
                                <ul class="box">
                                <li>
                                   <div>
                                      <?php
                                         $arguments = [
                                           "menu"=>"footer-menu1",
                                           "theme_location"=>"footer-menu",
                                           "menu_class"=>"footer-menu1"
                                                       ];
                                         $menuItems = wp_nav_menu($arguments);
                                      ?>
                                   </div>
                                   </li>
                                </ul>
                            


                            <li class="features">
                            <h2></h2>
                                <ul class="box">
                                  <li>
                                   <div>
                                      <?php
                                         $arguments = [
                                           "menu"=>"footer-menu2",
                                           "theme_location"=>"footer-menu",
                                           "menu_class"=>"footer-menu2"
                                                       ];
                                         $menuItems = wp_nav_menu($arguments);
                                      ?>
                                   </div>
                                   </li>

                                </ul>
                            </li>
                        
                            
                            
                        </ul>

                <div class="footer-bottom">
                    <p>All Rights Reserved by Sweden Tourism</p>
                </div>
		</footer>
	</div>

<?php wp_footer(); ?>

</body>
</html>