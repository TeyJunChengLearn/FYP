@extends('layouts.forumlayout')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="/css/test.css">
@endsection
@section('content')
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
@endsection
