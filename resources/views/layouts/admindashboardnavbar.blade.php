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
  @yield('css')
  <title>AllPets | Where Every Pet Finds A Home</title>
</head>

<body >
    <div class="whole d-flex">
        <div class="flex-shrink-1 d-flex flex-column" style="background-color: #fff8f2">
            <div class="p-4">
                <a href="#" class="logo"><img src="/img/header-logo.png" alt=""/></a>
            </div>
            <div class="d-flex flex-column mb-auto gap-2">
                <a href="#" class="d-flex align-items-center ps-4 w-100 gap-4 link text-decoration-none text-dark">
                    <img src="/img/dashboard.png">
                    <span>Dashboard</span>
                </a>
                <a href="#" class="d-flex align-items-center ps-4 w-100 gap-4 link text-decoration-none text-dark">
                    <img src="/img/admin.png">
                    <span>Admins</span>
                </a>
                <a href="#" class="d-flex align-items-center ps-4 w-100 gap-4 link text-decoration-none text-dark">
                    <img src="/img/group.png">
                    <span>Users</span>
                </a>
                <a href="#" class="d-flex align-items-center ps-4 w-100 gap-4 link text-decoration-none text-dark">
                    <img src="/img/category.png">
                    <span>Forum Categories</span>
                </a>
                <a href="#" class="d-flex align-items-center ps-4 w-100 gap-4 link text-decoration-none text-dark">
                    <img src="/img/request.png">
                    <span>Requests</span>
                </a>
            </div>
            <a href="#" class="d-flex align-items-center ps-4 w-100 gap-4 link text-decoration-none text-dark">
                <img src="/img/logout.png">
                <span class="text-nowrap">Return to Forum</span>
            </a>
        </div>
        @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
