@php
    use Carbon\Carbon;
@endphp

@extends('layouts.forumlayout')
@section('css')
<link rel="stylesheet" href="/css/test.css">
  <link rel="stylesheet" href="/css/adoptplace.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/pagination.css">
@endsection
@section('content')
<body style="background-color: #fff8f2">
  <main>
    <div class="container m-5" >
      <div class="title">
        <h2>Adopt A Pet</h2>
      </div>
      @if($user!=null && $user['animalrescuer']['status'] == true)
      <button id="toggleFormBtn" class="btn btn-warning">Add a Pet</button>

                <form id="addPetForm" method="POST" action='{{route('adopt.add')}}' class="container m-5 p-4" style="background-color: white; display: none" enctype="multipart/form-data">
                    @csrf
                    <div class="row my-2">
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Pet Name" name="name" required>
                      </div>
                      <div class="col">
                        <select name='pettype' class="form-control" id='typeSelect' required>
                            <option selected disabled>Pet Type</option>
                            <option value='0'>Cat</option>
                            <option value='1'>Dog</option>
                        </select>
                      </div>
                      <div class="col">
                        <input type="text" class="form-control" name='petbreed' placeholder="Pet Breed" required>
                      </div>
                    </div>
                    <div class="row my-2">
                        <div class="col">
                            <select name='gender' class="form-control" id='genderSelect' required>
                                <option selected disabled>Pet Gender</option>
                                <option value="0">Male</option>
                                <option value='1'>Female</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="text" name='age' class="form-control" placeholder="Pet Age" required>
                          </div>
                          <div class="col">
                            <select name='vacinated' class="form-control" id='vaccinatedSelect' required>
                                <option selected disabled >Vaccinated</option>
                                <option value='0'>Yes</option>
                                <option value='1'>No</option>
                            </select>
                        </div>
                          <div class="col">
                            <input type="text" name='condition' class="form-control" placeholder="Condition" required>
                          </div>
                    </div>
                    <div class="row my-2">
                        <div class="col">
                            <input type="text" name="location" class="form-control" placeholder="Address" required>
                        </div>
                        <div class="col">
                            <input type="text" name='phonenumber' class="form-control" placeholder="Contact Number" oninput="validatePhoneNumber(this)" required>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" name='adoptionfee' placeholder="Adoption Fee" required>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col">
                            <input type="file" class="form-control" name='image' accept=".jpg, .jpeg, .png, .gif, .svg, .webp" placeholder="Add Pet Image(s)" required multiple>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col">
                            <textarea class="form-control" name='description' placeholder="Pet Description..."></textarea>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-warning my-3" value="Submit">

                  </form>
     @endif
      <div class="pet-list mt-5">
        @if(!$adoptPets->isEmpty())
                @foreach($adoptPets as $adoptPet)
                <a href="{{route('adoptPet.index',['adoptPetId'=>$adoptPet->id])}}">
                <div class="pet-container">
                    <div class="pet-image"><img class="pet-img" src="{{$adoptPet->image}}" alt="Fluffy"></div>
                    <div class="pet-details">
                      <h3>{{$adoptPet->name}}</h3>
                      <p>For Sale</p>
                      <p>{{$adoptPet->age}},@if($adoptPet->gender==0)Male @else Female @endif</p>
                      <p>{{$adoptPet->petbreed}}</p>
                      <p>{{$adoptPet->animalrescuersandshelters->petowner->username}} | {{Carbon::parse($adoptPet->created_at)->format('d-m-Y')}}</p>
                    </div>
                  </div>
                </a>
                @endforeach
            @else
            <p>There are no any adopt pet</p>
        @endif
        {{-- <div class="pet-container">
          <div class="pet-image"><img class="pet-img" src="/img/huhcat.jpg" alt="Fluffy"></div>
          <div class="pet-details">
            <h3>Huh cat</h3>
            <p>For Sale, Selangor</p>
            <p>3 years, Male</p>
            <p>Domestic Short Hair</p>
            <p>PetFunds | April 20</p>
          </div>
        </div>
        <div class="pet-container">
          <div class="pet-image"><img class="pet-img" src="/img/huhcat.jpg" alt="Fluffy"></div>
          <div class="pet-details">
            <h3>Huh cat</h3>
            <p>For Sale, Selangor</p>
            <p>3 years, Male</p>
            <p>Domestic Short Hair</p>
            <p>PetFunds | April 20</p>
          </div>
        </div>
        <div class="pet-container">
          <div class="pet-image"><img class="pet-img" src="/img/huhcat.jpg" alt="Fluffy"></div>
          <div class="pet-details">
            <h3>Huh cat</h3>
            <p>For Sale, Selangor</p>
            <p>3 years, Male</p>
            <p>Domestic Short Hair</p>
            <p>PetFunds | April 20</p>
          </div>
        </div>
        <div class="pet-container">
          <div class="pet-image"><img class="pet-img" src="/img/huhcat.jpg" alt="Fluffy"></div>
          <div class="pet-details">
            <h3>Huh cat</h3>
            <p>For Sale, Selangor</p>
            <p>3 years, Male</p>
            <p>Domestic Short Hair</p>
            <p>PetFunds | April 20</p>
          </div>
        </div> --}}
      </div>
    </div>
    {{$adoptPets->links('template.pagination')}}
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script>
    document.getElementById('toggleFormBtn').addEventListener('click', function() {
        var form = document.getElementById('addPetForm');
        if (form.style.display === 'none' || form.style.display === '') {
            form.style.display = 'block';
        } else {
            form.style.display = 'none';
        }
    });

    // document.getElementById('feedbackForm').addEventListener('submit', function(event) {
    //     event.preventDefault(); // Prevent the default form submission
    //     this.style.display = 'none'; // Hide the form
    //     // Optionally, you can add code here to handle the form submission (e.g., send data to the server)
    // });
    function validatePhoneNumber(input) {
        input.value = input.value.replace(/[^0-9]/g, '');
    }
    document.getElementById('addPetForm').addEventListener('submit', function(event) {
        var vaccinatedSelect = document.getElementById('vaccinatedSelect');
        if (vaccinatedSelect.value === 'Vaccinated') {
            event.preventDefault();
            alert('Please select a valid vaccination status.');
        }
        var typeSelect = document.getElementById('typeSelect');
        if (typeSelect.value === 'Pet Type') {
            event.preventDefault();
            alert('Please select a valid Pet Type.');
        }
        var genderSelect = document.getElementById('genderSelect');
        if (genderSelect.value === 'Pet Gender') {
            event.preventDefault();
            alert('Please select a valid Pet Gender.');
        }
    });
</script>
</body>
</html>
@endsection
