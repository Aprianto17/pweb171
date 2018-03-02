<div class="sign-up-form">
  <h3 class="tittle reg">My Profil <i class="glyphicon glyphicon-user"></i></h3>
  <!-- <div class="col-md-2"> -->
  <div class="media-left response-text-left">
    <a >
      <?php
      if ($userid['foto']) {
        echo "<img class='media-object' src='/asset/images/profil/".$userid['user_ID'].".".$userid['foto']."' />";
      }else {
        echo "<img class='media-object' src='/asset/images/sin3.jpg' />";
      }
      ?>
      <!-- <img class="media-object" src="/asset/images/sin3.jpg" /> -->
    </a>
  </div>
    <div class="col-md-2">
      <h4 class="a">Nama : </h4>
    </div>
    <h4 class="tittle"><?=$userid['nama']?></h4>
     <br>
     <div class="col-md-2">
       <h4 class="a">Email : </h4>
     </div>
     <h4 class="tittle"><?=$userid['email']?></h4>
  <!-- </div> -->

     <br>
     <br>

        <h3 class="tittle">My Bloggers <i class="glyphicon glyphicon-file"></i></h1>
       <br>
        <br>
       <?php
        foreach( $user as $users ){
          echo "
                 <h2 class='top'>
                   <a class='img-responsive' alt='' href='/blog/" . $users['blog_ID'] ."'>" . $users['judul']."</a>

                 </h2>
                  <h4>". $users['tanggal']."</h4>
                 <br>
                  <br>
               ";
        }
       ?>
   <br>
   <br>

</div>
<br>
<br>
<br>
<br>
<br>
