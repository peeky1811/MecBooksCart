<style>
  body{
    display:flex;
    flex-direction:column;
    min-height:100vh;
  }
  @media(max-width:1070px){
    .navbar-header{
      float: none;
    }
    .navbar-left, .navbar-right{
      float: none !important;
    }
    .navbar-toggle{
      display: block;
    }
    .navbar-collapse.collapse{
      display: none !important;
    }
    .nav>li>a {
    padding-left: 10px;
    padding-right:10px;
    }
    .collapse.in{
      display: block !important;
    }
  }
  
 
  @media(min-width:768px){
     /* To make dropdown hover only above 768px */
    .dropdown:hover .dropdown-menu{
      display: block;
      margin-top: 0px;
    }
  }
  .dropdown-menu{
    background: #333;
    
  }
  .dropdown-menu>li>a{
    color: #fff;
  }
  .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover {
    color: #262626;
    text-decoration: none;
    background-color: #d5a3a3;
}

</style>
<nav class="navbar navbar-inverse">
        
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="logo.png" width="55" height="23" alt="logo.png" class="pull-left" >MecBooksCart</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
          
            <?php
                if(isset($_SESSION['username'])){
            ?>
              <li><a href="bs.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
              <li><a href="about.php"><span class="glyphicon glyphicon-sunglasses"></span> About Us</a></li>
              <li><a href="contact.php"><span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="buy.php"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></li>
              <li><a href="sell.php"><span class="glyphicon glyphicon-book"></span> Sell</a></li>
              <li><a href="sell_list.php"><span class="glyphicon glyphicon-list-alt"></span> My Sell List</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span> Settings <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="change_pwd.php">Change Password</a></li>
                  <li><a href="edit_profile.php">Edit Profile</a></li>
                </ul>
              </li>
              <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            </ul>
            <?php
                }else{
            ?>
              <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
              <li><a href="about.php"><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
              <li><a href="contact.php"><span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <?php
                }
                ?>
            </ul>
          </div>
        
      </nav>