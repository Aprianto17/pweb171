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
  <br>
  <br>

  <div class="coment-form">
    <h4>Leave your comment</h4>
    <form action="/comen/submit" method="post" >
      <input type="text" placeholder="Nama" name="nama" >
      <textarea type="text" placeholder="Your Comment..." name="comentar" ></textarea>
      <input type="submit" value="Submit Comment" >
    </form>
  </div>

  <?php
    if(($this->session->uid)==$blog['user_ID']){
      echo "
            <h3>
              <a class='delete'  href='/blog/delete/".$blog['blog_ID'] ."'>Delete</a>
            </h3>
            <br>
            <h3>
              <a class='delete'  href='/blog/edit/".$blog['blog_ID']."'>Edit</a>
            </h3>
           ";
    }
  ?>
</div>
<br>
