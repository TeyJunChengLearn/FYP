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
  <link rel="stylesheet" href="/css/admindashboard.css">
  <link rel="icon" href="kiwi-icon.png">

  <title>AllPets | Where Every Pet Finds A Home</title>
</head>

<body>
    <div class="whole d-flex">
        <div class="flex-shrink-1 d-flex flex-column" style="background-color: #FEF8F3">
            <div class="p-4">
                <a href="#" class="logo"><img src="/img/header-logo.png" alt=""/></a>
            </div>
            <div class="d-flex flex-column mb-auto gap-2">
                <a href="#" class="d-flex align-items-center ps-4 w-100 gap-4 link text-decoration-none text-dark">
                    <img src="/img/dashboard.png">
                    <span>Dashboard</span>
                </a>
                <a href="#" class="d-flex align-items-center ps-4 w-100 gap-4 link text-decoration-none text-dark">
                    <img src="/img/group.png">
                    <span>Users</span>
                </a>
                <a href="#" class="d-flex align-items-center ps-4 w-100 gap-4 link text-decoration-none text-dark">
                    <img src="/img/request.png">
                    <span>Requests</span>
                </a>
                <a href="#" class="d-flex align-items-center ps-4 w-100 gap-4 link text-decoration-none text-dark">
                    <img src="/img/repeat.png">
                    <span class="text-nowrap">Recent Activity</span>
                </a>
            </div>
            <a href="#" class="d-flex align-items-center ps-4 w-100 gap-4 link text-decoration-none text-dark">
                <img src="/img/logout.png">
                <span class="text-nowrap">Return to Forum</span>
            </a>
        </div>
        <div class="w-100">
            <div class="py-3 px-5">
                <h3 class="p-0 m-0">Dashboard</h3>
                <div class="d-flex align-items-center">
                    <p class="p-0 m-0 ">Welcome to AllPets' Admin Dashboard</p>
                    <button type="button" class="btn btn-outline-warning ms-auto fw-bold" style="color: black !important">Add Notes</button>
                </div>
                <div class="row gap-2">
                    <div class="m-5 col shadow rounded-4 d-flex">
                        <div>
                            <p class="pt-3 text-nowrap">Forum Posts</p>
                            <h2>7438</h2>
                            <p class="text-success">+2.1%</p> 
                        </div>
                        <img class="px-2 img-fluid rounded-4" src="/img/stonk.jpg"/>
                    </div>
                    <div class="m-5 col shadow rounded-4 d-flex">
                        <div>
                            <p class="pt-3">New Pets</p>
                            <h2>7438</h2>
                            <p class="text-danger">-2.1%</p> 
                        </div>
                        <img class="px-2 img-fluid rounded-4" src="/img/notstonk.jpg"/>
                    </div>
                    <div class="m-5 col shadow rounded-4 d-flex">
                        <div>
                            <p class="pt-3 text-nowrap">New Users</p>
                            <h2>7438</h2>
                            <p class="text-info">&#xb1 2.1%</p> 
                        </div>
                        <img class="px-2 img-fluid rounded-4" src="/img/confusedstonk.jpg"/>
                    </div>
                </div>
            </div>
                
            <div class="row">
                <div class="m-5 mt-3 col shadow rounded-4 d-flex">
                    <div class="d-flex justify-content-between">
                        <div class="col">
                            <h5 class="p-1 mt-2">Server Status</h5>
                        </div>
                        <div class="col flex-end dropdown">
                            <button class="btn btn-warning btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown button
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="progress vertical">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                            </div>  
                          </div>
                          <div class="progress vertical">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                          </div>  
                          </div>
                          <div class="progress vertical">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                          </div>  
                          </div>
                           <div class="progress vertical">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                          </div>  
                          </div>
                    </div>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>