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
  <link rel="icon" href="kiwi-icon.png">

  <title>AllPets | Where Every Pet Finds A Home</title>
  <style>
    .image-container{
        display: flex;
        justify-content: center;
        max-height: 400px;
    }
    .image-container img {
        max-width: 100%;
        min-height: 50%;
        max-height: 90%;
        object-fit: cover;
        padding-top: 8px;
    }
    .table-container{
    }
    </style>
</head>

<body>

    <main>
        <section id="header">
            <div>
              <a href="#" class="logo"><img src="/img/header-logo.png" alt=""/></a>
            </div>
            <div>
              <img class="header-pet" src="/img/header-pets.png" alt=""/>
            </div>
              <div>
                  <ul id ="navbar">
                      <li><a href="forum.html">Forum</a></li>
                      <li><a href="adopt.html">Adopt A Pet</a></li>
                      <li><a href="login.html">User</a></li> <!--changes between User and username-->
                  </ul>
              </div>
          </section>

        <div class="container mt-5 pet-name"><h3 class="ms-4"><b>Oyen</b></h3></div>
        <div class="container mt-4 d-flex flex-row">
            <div class="col image-container" >
                <img src="/img/huhcat.jpg" alt="">
            </div>
            <div class="col table-container">
                <table class="table table-borderless align-middle">
                    <tbody>
                        <tr>
                            <td><b>Breed</b></td>
                            <td>Domestic Short Hair</td>
                        </tr>
                        <tr>
                            <td><b>Age</b></td>
                            <td>3 years, Male</td>
                        </tr>
                        <tr>
                            <td><b>Vaccinated</b></td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td><b>Condition</b></td>
                            <td>Healthy</td>
                        </tr>
                        <tr>
                            <td><b>Location</b></td>
                            <td>Cyberjaya, Selangor</td>
                        </tr>
                        <tr>
                            <td><b>Date Posted</b></td>
                            <td>20/7/2024</td>
                        </tr>
                        <tr>
                            <td><b>Owner</b></td>
                            <td>PetFunds</td>
                        </tr>
                        <tr>
                            <td><b>Contact</b></td>
                            <td id="contact-number">01114344909</td>
                        </tr>
                        <tr>
                            <td><b>Adoption Fee</b></td>
                            <td>Free</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
       <div class="container desc">
        Description
       </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var contactNumberCell = document.getElementById("contact-number");
            var phoneNumber = contactNumberCell.textContent.trim();
            var whatsappLink = document.createElement("a");
            whatsappLink.href = "https://wa.me/6" + phoneNumber;
            whatsappLink.target = "_blank";
            whatsappLink.textContent = "(WhatsApp)";
            contactNumberCell.appendChild(document.createTextNode(" "));
            contactNumberCell.appendChild(whatsappLink);
        });
    </script>
</body>