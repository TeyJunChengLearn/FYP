<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Gruppo&family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
  <link rel="stylesheet" href="catstyle.css">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="kiwi-icon.png">
  <link rel="stylesheet" href="AI Chat.css">
  <link rel="stylesheet" href="CookiePolicy.css">

  <title>AllPets | Where Every Pet Finds A Home</title>
</head>

<body>


  
<header>

  <div class="alert" id="alert">
    <p>SAVE MORE FOR YOUR ORDER WITH CODE [MAY10] OR [MAY20]. MIN. SPEND APPLICABLE. &nbsp; <a href="shopall.html">SHOP NOW</a></p>
    <i class="far fa-times-circle"></i>
  </div>
  <nav>
    <div class="navbar" id="navbar">
        <a href="#" class="logo"><img src="logopics/kiwious-high-resolution-logo-color-on-transparent-background (1).png" alt=""/></a>
        <ul id ="navrow">
          <li><a href="index.html">Home</a></li>
          <li><a href="Aboutt.html">About Us</a></li>
          <li class="dropdown"><a href="shopall.html">Shop</a>
            <div class="dropdown-content">
              <a href="shopall.html">Shop All</a>
              <a href="newarrivals.html">New Arrivals</a>
              <a href="cleansers.html">Cleansers</a>
              <a href="exfoliators.html">Exfoliators</a>
              <a href="toners.html">Toners</a>
              <a href="masks.html">Masks</a>
              <a href="serums.html">Serums</a>
              <a href="moisturisers.html">Moisturisers</a>
              <a href="suncare.html">Suncare</a>
              <a href="lipcare.html">Lip Care</a>
              </div>
          </li>
          <li class="dropdown"><a href="Contact.html">Contact Us</a>
            <div class="dropdown-content">
              <a href="Contact.html">Our Contacts</a>
              <a href="C&R.html">Comment / Rating</a>
              </div>
          </li>
        </ul>
      <ul class="top-right-links">
        <li>
          <i class="fas fa-user"></i>
        </li>
        <li class="shopping-cart-icon">
          <i class="fas fa-shopping-bag">
            <span class="total-cart-items" id="total-cart-items"></span>
          </i>
        </li>
      </ul>
    </div>
  </nav>
  
  <div class="userpopup hidden">
    <div class="userpopup-container">
    <div class="userpopup-header">
      <div class="close-user-window">
          <span>Close</span>
          <i class="far fa-times-circle"></i>
        </div>
      <h2>Choose Your User</h2>
      <a href="U&ALogin.html"><button class="member-btn" id="member-btn">Member View</button></a>
      <a href="AdminLogin.html"><button class="admin-btn" id="admin-btn">Admin View</button></a>
    </div>
  </div>
</div>


    <div class="shopping-cart-container">
      <div class="shopping-cart-header">
        <div class="close-cart-window">
          <span>Close</span>
          <i class="far fa-times-circle"></i>
        </div>
        <h2>
          My Shopping Cart
        </h2>
      </div>
      <div class="rewards-cartItems-wrapper">
        <div class="shopping-cart-items">
        </div>

        <div class="shopping-cart-total">
          <span>Total:</span>
          <span class="cart-total-price" id="cart-total-price">
            RM0.00
          </span>
        </div>
        <button class="checkout-btn" id="checkout-btn">
         <b>Checkout</b> 
        </button>
      </div>
    </div>

</header>


  <main>

  </main>
  <footer>
		
		<div class="col">
			<a href="#" class="logo"><img src="logopics/kiwious-high-resolution-logo-white-on-transparent-background.png" alt=""/></a>
			<p 
			style="font-size: 10px;padding-left: 13px;">Get The Glow You Deserve.</p>
			<h4 style="padding-left: 10px;margin-top: 20px;">Follow Us</h4>
      <div class="icon">
        <a href="https://www.facebook.com"><i class='bx bxl-facebook-circle'></i></a>
				<a href="https://www.instagram.com"><i class='bx bxl-instagram'></i></a>
				<a href="https://www.tiktok.com"><i class='bx bxl-tiktok'></i></a>
				<a href="https://www.twitter.com"><i class='bx bxl-twitter'></i></a>
			</div>
		</div>
		<div class="col">
			<h4>About</h4>
			<a href="Aboutt.html">About Us</a>
			<a href="PrivacyPolicy.html">Terms & Conditions</a>
			<a href="Contact.html">Contact Us</a>
		</div>
		
		<div class="col">
			<h4>My Account</h4>
			<a href="U&ALogin.html">Sign In</a>
			<a href="FAQ.html">FAQ</a>
		</div>
		
		<div class="col">
			<br/>
			<p><b>KEEP IN TOUCH WITH KIWIOUS</b></p>
			<p>Sign up to receive updates on new products and promotions.</p>
			<form>
				<input type="email" id="newsemail" placeholder="Your e-mail address..."></form>
        <button type="submit" onclick="clearEmailAndAlert()">JOIN</button>
		</div>
	</footer>
	
	<section id="copyright">
	<div>
		<p>&copy; 2023 Kiwious. All Rights Reserved.</p>
	</div>
	</section>


 
    </body>
    </html>
    