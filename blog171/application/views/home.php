<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
    <div class="sign-up-form">
       <h3 class="tittle">Bloggers <i class="glyphicon glyphicon-file"></i></h1>
			 <br>
       <br>
			 <?php
				foreach( $blogs as $blog ){
					echo "
								 <h2 class='top'>
									 <a class='img-responsive' alt='' href='/blog/" . $blog['blog_ID'] ."'>" . $blog['judul']."</a>

								 </h2>
                 <h4>". $blog['tanggal']."</h4>
								 <br>
                 <br>
							 ";
				}
			 ?>
    </div>
