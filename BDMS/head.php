<html>

<head>


<style>

.header {
  overflow:hidden;
  background-color:#347fd0;
  box-shadow: inset 0 -15px 30px rgba(10,4,60,0.4), 0 5px 10px rgba(10,20,100,0.5);
  top: 0;
  width:100%;
  padding: 10px 5px;
  color:#FF0404  ;
}

/* Style the header links */
.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 20px;
  font-weight:bold;
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
  font-size: 18px;
  font-weight: bold;
  color:white ;
}

/* Change the background color on mouse-over */
.header a:hover {
  background-color: #ddd;
  color: black;
 
}




/* Float the link section to the right */
.header-right {
  float: right;
}

/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
/* Style the active/current link*/
a.act{
background:#ddd;
color: black;
border-radius:20px;
}
a.logo2{
  background-color:white;
}
</style>
</head>

<body>
  <div class="header">
    <a href="home.php" class="logo"<?php if($active=='home') echo "class='logo2'"; ?>>Home</a>
    <div class="header-right">
    
      <a href="why_donate_blood.php"  <?php if($active=='why') echo "class='act'"; ?>>Why Donate Blood</a>
      <a href="donate_blood.php"  <?php if($active=='donate') echo "class='act'"; ?>>Become A Donor</a>
      <a href="need_blood.php" <?php if($active=='need') echo "class='act'"; ?>>Need Blood</a>
      <a href="contact_us.php" <?php if($active=='contact') echo "class='act'"; ?>>Contact Us</a>
      <a href="about_us.php"  <?php if($active=='about') echo "class='act'"; ?> >About Us</a>
    </div>
  </div>

</body>
</html>
