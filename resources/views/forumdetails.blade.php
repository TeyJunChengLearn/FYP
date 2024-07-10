<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500;600;700&family=Lilita+One&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/test.css">
  <link rel="stylesheet" href="/css/announcements.css">
  <link rel="icon" href="kiwi-icon.png">

  <title>AllPets | Where Every Pet Finds A Home</title>
  <style>
    body {
      background-color: #FFF8F2;
    }

    .col-center {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }
  </style>
</head>

<body>

  <section id="header">
	    <div>
        <a href="#" class="logo"><img src="/img/header-logo.png" alt=""/></a>
      </div>
      <div>
        <img src="/img/header-pets.png" alt=""/>
      </div>
		  <div>
			  <ul id ="navbar">
				  <li><a href="forum.html">Forum</a></li>
				  <li><a href="adopt.html">Adopt/Marketplace</a></li>
				  <li><a href="login.html">User</a></li> <!--changes between User and username-->
			  </ul>
		  </div>
	</section>

    <main>
      <div class="container m-5">
        <div class="container m-5 pt-4" style="background-color: white">
            <div class="container py-2">
                <h4>Help me my dog is throwing up</h4>
                <p>Megan Bright | 19/02/2024</p>
                <p>Hello my dog is throwing up what should i do help em "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>

            </div>
        </div>
        <div class="container m-5 pt-4" style="background-color: white">
            <div class="row">
              <div class="col-auto col-center m-5">
                <img src="/img/notstonk.jpg" style="max-height: 80px; max-width: 80px;">
                <p>John Doe</p>
              </div>
              <div class="col-9">
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                <p>Reply</p>
            </div>
                <div class="col-1 d-flex flex-column">
                <i class="fas fa-angle-up"></i>
                <i class="fas fa-angle-down"></i>
              </div>
            </div>
        </div>
        <div class="container m-5 pt-4" style="background-color: white">
            <div class="row">
              <div class="col-auto col-center m-5">
                <img src="/img/notstonk.jpg" style="max-height: 80px; max-width: 80px;">
                <p>John Doe</p>
              </div>
              <div class="col-9">
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                <p>Reply</p>
            </div>
                <div class="col-1 d-flex flex-column">
                <i class="fas fa-angle-up"></i>
                <i class="fas fa-angle-down"></i>
              </div>
            </div>
        </div>
        <form method="GET" class="container m-5 pt-4" style="background-color: white">
           <div>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='content'></textarea>
                <input type="submit" class="btn btn-primary" value="Submit">
                {{-- Submit</button> --}}
           </div>
        </form>
      </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

