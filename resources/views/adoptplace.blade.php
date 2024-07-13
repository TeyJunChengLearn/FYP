@extends('layouts.forumlayout')
@section('css')
<link rel="stylesheet" href="/css/test.css">
  <link rel="stylesheet" href="/css/adoptplace.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

@endsection
@section('content')
<body style="background-color: #fff8f2">
  <main>
    <div class="container m-5" >
      <div class="title">
        <h2>Adopt A Pet</h2>
      </div>
      <button id="toggleFormBtn" class="btn btn-warning">Add a Pet</button>

                <form id="addPetForm" method="POST"  class="container m-5 p-4" style="background-color: white; display: none">
                    <div class="row my-2">
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Pet Name">
                      </div>
                      <div class="col">
                        <select class="form-control">
                            <option selected disabled>Pet Type</option>
                            <option>Cat</option>
                            <option>Dog</option>
                        </select>
                      </div>
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Pet Breed">
                      </div>
                    </div>
                    <div class="row my-2">
                        <div class="col">
                            <select class="form-control">
                                <option selected disabled>Pet Gender</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Pet Age">
                          </div>
                          <div class="col">
                            <select class="form-control">
                                <option selected disabled>Vaccinated</option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                          <div class="col">
                            <input type="text" class="form-control" placeholder="Condition">
                          </div>
                    </div>
                    <div class="row my-2">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Address">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Contact Number">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Adoption Fee">
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col">
                            <input type="file" class="form-control" placeholder="Add Pet Image(s)" multiple>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col">
                            <textarea class="form-control" placeholder="Pet Description..."></textarea>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-warning my-3" value="Submit">

                  </form>                    {{-- Submit</button> --}}
      <div class="pet-list mt-5">
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
      </div>
    </div>
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
</script>
</body>
</html>
@endsection
