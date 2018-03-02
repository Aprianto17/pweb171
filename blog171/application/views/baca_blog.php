<div class="sign-up-form">
   <h3 class="tittle"><?= $blog['judul'] ?><i class="glyphicon glyphicon-file"></i></h1>
   <br>
   <br>
   <p>
  <?php
      $cara = str_replace("\n","<br>",$blog['isi']);
      echo $cara;
   ?>
  </p>
  <h5><?= $blog['tanggal'] ?></h5>
  <h5><?= $blog['nama'] ?></h5>
  <h5><?= $blog['email'] ?></h5>
  <br>
  <br>


  <div class="single-bottom">
    <div class="single-middle">
      <ul class="social-share">
        <li><span>Responses</span></li>
      </ul>
    <div class="clearfix"> </div>
    </div>
  </div>

  <?php
  foreach( $comen as $comens ){
    $cara = str_replace("\n","<br>",$comens['comentar']);
    if ($comens['foto']) {
     echo "
            <div class='media response-info'>
              <div class='media-left response-text-left'>
                <a >
                <img class='media-object' src='/asset/images/profil/".$comens['user_ID'].".".$comens['foto']."' />
                </a>
                <h5>".$comens['nama']."</h5>
              </div>
              <div class='media-body response-text-right'>
                <p>". $cara."</p>
                <ul>
                  <li>". $comens['tanggal']."</li>
                </ul>
              </div>
            </div>
          ";
    }else {
      echo "
             <div class='media response-info'>
               <div class='media-left response-text-left'>
                 <a >
                 <img class='media-object' src='/asset/images/sin3.jpg' />
                 </a>
                 <h5>".$comens['nama']."</h5>
               </div>
               <div class='media-body response-text-right'>
                 <p>". $cara."</p>
                 <ul>
                   <li>". $comens['tanggal']."</li>
                 </ul>
               </div>
             </div>
           ";
    }
   }
  ?>

  <div class="coment-form">
    <h4>Leave your comment</h4>
    <form action="/comen/submit" method="post" >
      <input type="hidden" name="blog_ID" value="<?= $blog['blog_ID']  ?>">

      <textarea type="text" placeholder="Your Comment..." name="comentar" ></textarea>
      <input type="submit" value="Submit Comment" >
    </form>
  </div>


  <?php
    if(($this->session->uid)==$blog['user_ID']){
      echo "
            <h3>
              <a class='delete'  href='/blog/delete/".$blog['blog_ID'] ."'>Delete</a> | <a class='delete'  href='/blog/edit/".$blog['blog_ID']."'>Edit</a>
            </h3>
           ";
    }
  ?>
</div>
<br>
