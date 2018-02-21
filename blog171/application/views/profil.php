<div class="sign-up-form">
  <h3 class="tittle reg">My Provil <i class="glyphicon glyphicon-user"></i></h3>
    <div class="col-md-2">
      <h4 class="a">Nama : </h4>
    </div>
     <h4 class="tittle"><?= $userid['nama'] ?></h4>
     <br>
     <div class="col-md-2">
       <h4 class="a">Email : </h4>
     </div>
     <h4 class="tittle"><?=$userid['email']?></h4>
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
