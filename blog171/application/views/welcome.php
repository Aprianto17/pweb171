
<!-- login-page -->
<div class="login">
  <div class="login-grids">
    <div class="col-md-6 log">
         <h3 class="tittle">Login <i class="glyphicon glyphicon-lock"></i></h3>
         <p>Welcome, please enter the following to continue.</p>
         <p>If you have previously Login with us, <a href="#">click here</a></p>
         <form action="/user/signin" method="post">
           <div class="col-md-8">
             <h5>Email:</h5>
           </div>
           <div class="col-md-9">
             <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Alamat Email Anda">
           </div>

           <div class="col-md-8">
             <h5>Password:</h5>
           </div>
           <div class="col-md-12">
             <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Password Anda">
           </div>

           <input type="submit" value="Sign In" >

           <!-- <form action="/user/signin" method="post">
             Email: <br>
             Password: <br>

           </form> -->


         </form>
        <a href="#">Forgot Password ?</a>
    </div>
    <div class="col-md-6 login-right">
         <h3 class="tittle">New Registration <i class="glyphicon glyphicon-file"></i></h3>
        <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
        <a href="/user/reg" class="hvr-bounce-to-bottom button">Create An Account</a>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
