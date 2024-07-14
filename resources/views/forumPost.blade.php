@php
    use Carbon\Carbon;
@endphp

@extends('layouts.forumlayout')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="/css/test.css">
<link rel="stylesheet" href="/css/pagination.css">

@endsection
@section('content')
    <main>
      <div class="container m-5">
        <div class="container"><h3><b>{{$category->name}}</b></h3></div>
            @if($user!=null)
                <button id="toggleFormBtn" class="btn btn-warning">Add Post</button>

                <form id="announcementForm" method="POST" action='{{ route('forumCategory.add', ['categoryId' => $category->id]) }}' class="container m-5 p-4" style="background-color: white; display: none">
                    @csrf
                    <div>
                        <input class="form-control my-2" id="announcementTitle" type="text" placeholder="Title" name='title' required></input>
                        <textarea class="form-control" id="announcementDesc" rows="3" name='description' placeholder="Description" required></textarea>
                        <input type="submit" class="btn btn-warning my-3" value="Submit">
                        {{-- Submit</button> --}}
                    </div>
                </form>
            @endif

        <div class="container m-5 pt-4" style="background-color: white">
            @if (!$forumPosts->isEmpty())
                @foreach ($forumPosts as $forumPost)
                <a href="{{route('forumCategoryPost.index', ['categoryId' => $category->id,'forumId'=>$forumPost->id])}}">
                    <div class="container d-flex">
                    <div class="col flex-grow-1">
                        <h5>{{$forumPost->title}}</h5>
                        <p>{{$forumPost->petowner->username}} | {{Carbon::parse($forumPost->datetime)->format('d-m-Y')}}</p>
                    </div>
                    {{-- <div class="col-auto">
                        <i class="fas fa-thumbtack"></i>
                    </div> --}}
                    </div>
                </a>
                <hr>
                @endforeach

            @else
                <p>There are no posts.</p>
            @endif
            {{-- <a href="#">
                <div class="container d-flex">
                <div class="col flex-grow-1">
                    <h5>Announcement title</h5>
                    <p>Megan Bright | 19/02/2024</p>
                </div>
                <div class="col-auto">
                    <i class="fas fa-thumbtack"></i>
                </div>
                </div>
            </a>
            <hr>
            <a href="#">
            <div class="container d-flex">
              <div class="col flex-grow-1">
                <h5>Website Maintainence Soon (Free 10 Pulls)</h5>
                <p>Megan Bright | 19/02/2024</p>
              </div>
              <div class="col-auto hidden">
                <i class="fas fa-thumbtack"></i>
              </div>
            </div>
            </a>
            <hr>
            <a href="#">
                <div class="container d-flex">
                <div class="col flex-grow-1">
                    <h5>Website Maintainence Soon (Free 10 Pulls)</h5>
                    <p>Megan Bright | 19/02/2024</p>
                </div>
                <div class="col-auto hidden">
                    <i class="fas fa-thumbtack"></i>
                </div>
                </div>
            </a>
            <hr>
            <a href="#">
                <div class="container d-flex">
                <div class="col flex-grow-1">
                    <h5>Website Maintainence Soon (Free 10 Pulls)</h5>
                    <p>Megan Bright | 19/02/2024</p>
                </div>
                <div class="col-auto hidden">
                    <i class="fas fa-thumbtack"></i>
                </div>
                </div>
            </a> --}}

        </div>
      </div>
      <div class="container m-5">
        {{ $forumPosts->links('template.pagination') }}
      </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.getElementById('toggleFormBtn').addEventListener('click', function() {
            var form = document.getElementById('announcementForm');
            if (form.style.display === 'none' || form.style.display === '') {
                form.style.display = 'block';
            } else {
                form.style.display = 'none';
            }
        });

        // document.getElementById('announcementForm').addEventListener('submit', function(event) {
        //     event.preventDefault(); // Prevent the default form submission
        //     this.style.display = 'none'; // Hide the form
        //     // Optionally, you can add code here to handle the form submission (e.g., send data to the server)
        // });
    </script>

@endsection
