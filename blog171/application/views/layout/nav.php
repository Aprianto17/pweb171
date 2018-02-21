<nav class="navbar navbar-default navbar-fixed-top" role="navigation">

      <div class="h-top" id="home" role="navigation">
       <div class="top-header">
          <ul class="cl-effect-16 top-nag">
            <li><a href="<?php echo site_url('welcome/menu1') ?>" data-hover="About">About</a></li>
            <li><a href="services.html" data-hover="SERVICES">SERVICES</a></li>
            <li><a href="/welcome/contact" data-hover="CONTACT">Contact</a></li>
            <?php
            if (!isset($this->session->uid)){
             ?>
             <li><a href="/user/login" data-hover="Login">Login</a></li>
             <li><a href="/user/reg" data-hover="Registration">Registration</a></li>
            <?php } ?>

            <?php

              if( isset( $this->session->uid ) ){
                echo  "
                        <li><a href='/user/profil/". $this->session->uid ."'data-hover='Provil'>".'Provil'."</a></li>
                        <li><a href='/signout' data-hover='Signout' >signout</a></li>
                      ";
              }
            ?>



          </ul>
          <div class="search-box">
              <div class="b-search">
                <form action="/blog/search"  >
                    <input type="text" name="search" value="Search" >
                    <input type="submit" value="">
                </form>
              </div>
            </div>

          <div class="clearfix"></div>
        </div>
       </div>

       <!-- menu samping -->
       <div class="full">
       <div class="col-md-3 top-nav">
              <div class="logo">
             <a href="/"><h2>Blogger</h2></a>
           </div>
           <div class="top-menu">
            <span class="menu"> </span>

           <ul class="cl-effect-16">
             <li><a class="active" href="/" data-hover="HOME">Home</a></li>
             <li><a href="/blog/post" data-hover="Post">Post</a></li>

             <li><a href="services.html" data-hover="Services">Services</a></li>
             <li><a href="/welcome/contact" data-hover="CONTACT">Contact</a></li>
           </ul>
           <!-- script-for-nav -->
           <script>
             $( "span.menu" ).click(function() {
               $( ".top-menu ul" ).slideToggle(300, function() {
               // Animation complete.
               });
             });
           </script>
         <!-- script-for-nav -->
           <ul class="side-icons">
               <li><a class="fb" href="#"></a></li>
               <li><a class="twitt" href="#"></a></li>
               <li><a class="goog" href="#"></a></li>
               <li><a class="drib" href="#"></a></li>
              </ul>
           </div>
           <br>
           <br>
           <br>
       </div>
       <div class="col-md-9 main">
       <!--banner-section-->



</nav>
</header>
<br>
<br>
<br>
<br>

<div class="col-md-9 main">
    <!-- <div id="home">
    </div> -->
