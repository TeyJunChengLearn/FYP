@php
    use Carbon\Carbon;
@endphp
@extends('layouts.forumlayout')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="/css/test.css">
@endsection
@section('content')
        <main>
        <div class="container m-5">
        <div class="container mt-5 pet-name"><h3 class="ms-4"><b>Oyen</b></h3></div>
        <div class="container mt-4 d-flex flex-row">
            <div class="col image-container" style="display: flex; justify-content: center; align-items: center; height: 380px;">
                <img src="{{$adoptPet->image}}" alt="" style="max-height: 380px; min-height:380px">
            </div>
            <div class="col table-container" style="background-color: #FFF8F2;">
                <table class="table table-borderless align-middle">
                    <tbody>
                        <tr>
                            <td><b>Breed</b></td>
                            <td>{{$adoptPet->petbreed}}</td>
                        </tr>
                        <tr>
                            <td><b>Gender</b></td>
                            {{-- <td>Male</td> --}}
                            @if($adoptPet->gender == 0)
                            <td>Male</td>
                                @else
                            <td>Female</td>
                            @endif
                        </tr>
                        <tr>
                            <td><b>Age</b></td>
                            <td>{{$adoptPet->age}}</td>
                        </tr>
                        <tr>
                            <td><b>Vaccinated</b></td>
                            {{-- <td>Yes</td> --}}
                            @if($adoptPet->vacinated == 0)
                            <td>yes</td>
                                @else
                            <td>no</td>
                            @endif
                        </tr>
                        <tr>
                            <td><b>Condition</b></td>
                            <td>{{$adoptPet->condition}}</td>
                        </tr>
                        <tr>
                            <td><b>Location</b></td>
                            <td>{{$adoptPet->location}}</td>
                        </tr>
                        <tr>
                            <td><b>Date Posted</b></td>
                            <td>{{Carbon::parse($adoptPet->created_at)->format('d-m-Y')}}</td>
                        </tr>
                        <tr>
                            <td><b>Owner</b></td>
                            <td>{{$adoptPet->animalrescuersandshelters->petowner->username}}</td>
                        </tr>
                        <tr>
                            <td><b>Contact</b></td>
                            <td id="contact-number">{{$adoptPet->phonenumber}}</td>
                        </tr>
                        <tr>
                            <td><b>Adoption Fee</b></td>
                            {{-- <td>Free</td> --}}
                            @if ($adoptPet->adoptionfee==0)
                                    <td>Free</td>
                                @else
                                    <td>{{$adoptPet->adoptionfee}}</td>
                            @endif
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
       <div class="container desc">
        <p>{{$adoptPet->description}}</p>
       </div>
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
