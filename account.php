<?php session_start(); ?>

<?php include('header.php'); 


?>
  <!-- / menu -->  
 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
    <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
    <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Account Page</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>                   
          <li class="active">Account</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

 <!-- Cart view section -->
 <section id="aa-myaccount">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="aa-myaccount-area">         
            <div class="row">
              <div class="col-md-6">
                <div class="aa-myaccount-login">
                <h4>Login</h4>
                 <form action="login.php" class="aa-login-form" method="POST">
                  <label for="">Email address<span>*</span></label>
                   <input type="text" name="username" placeholder="Email">
                   <label for="">Password<span>*</span></label>
                    <input type="password" name="password" placeholder="Password">
                    <button type="submit" name="login" class="aa-browse-btn">Login</button>
                    <label class="rememberme" for="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
                    <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
                  </form>
                </div>
              </div>
              <div class="col-md-6">
                <div class="aa-myaccount-register">                 
                 <h4>Register</h4>
                 <form action="register.php" method="POST" class="aa-login-form">
                    <label for="">First Name<span>*</span></label>
                    <input type="text" name="firstname" placeholder="Fist Name">
                    <label for="">Last Name<span>*</span></label>
                    <input type="text" name="lastname" placeholder="Last Name">
                    <label for="">Email<span>*</span></label>
                    <input type="text" name="email" placeholder="Email">
                    <label for="">Password<span>*</span></label>
                    <input type="password" name="password" placeholder="Password">
                    <label for="">Country<span>*</span></label>
                    <input type="text" name="country" placeholder="Country">
                    <label for="">City<span>*</span></label>
                    <input type="text" name="city" placeholder="City">
                    <button type="submit" name="register" class="aa-browse-btn">Register</button>                    
                  </form>
                </div>
              </div>
            </div>          
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->

  <?php include('footer.php')?>