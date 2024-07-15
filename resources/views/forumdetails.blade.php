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
        <div class="container">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('forum.index')}}">Forum</a></li>
              <li class="breadcrumb-item"><a href="{{ route('forumCategory.index', ['categoryId' => $category->id]) }}">{{$category->name}}</a></li>
              <li class="breadcrumb-item active" aria-current="page">...</li>
            </ol>
          </nav>
        </div>
        <div class="container m-5 pt-4" style="background-color: white">
            <div class="container py-2">
                <h4>{{$forumPost->title}}</h4>
                <p>{{$forumPost->petowner->username}} | {{Carbon::parse($forumPost->datetime)->format('d-m-Y')}}</p>
                <p>{{$forumPost->description}}</p>

            </div>
        </div>
        <div class="container mx-5"><h5>Comments</h5></div>
        {{-- @if($forumPost->comment->isEmpty())
            <p>is empty</p>
            @else

        @endif --}}
        @foreach ($forumPost->comment as $comment)
        <div class="container m-5 pt-4" style="background-color: white">
            <div class="p-3">
                <h6>{{$comment->petowner->username}}</h6>
                <p>{{$comment->description}}</p>
                <p>{{Carbon::parse($comment->datetime)->diffForHumans()}}<p>
            </div>

        </div>
        @endforeach

        {{-- <div class="container m-5 pt-4" style="background-color: white">
            <div class="row">
              <div class="col-auto col-center m-5">
                <img src="/img/notstonk.jpg" style="max-height: 80px; max-width: 80px;">
                <p>John Doe</p>
              </div>
              <div class="col-10">
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </div>
            </div>
        </div>
        <div class="container m-5 pt-4" style="background-color: white">
            <div class="row">
              <div class="col-auto col-center m-5">
                <img src="/img/notstonk.jpg" style="max-height: 80px; max-width: 80px;">
                <p>John Doe</p>
              </div>
              <div class="col-10">
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </div>
            </div>
        </div> --}}
        @if($user!=false)
        <form method="POST" class="container m-5 pt-4" action="{{route('forumCategoryComment.add')}}" style="background-color: white">
           @csrf
           <input type='number' name='forumId' value='{{$forumPost->id}}' hidden>
            <div>
                <label for="forumComment" class="form-label">Leave a Comment</label>
                <textarea class="form-control" id="forumComment" rows="3" name='content' placeholder="Comment..." required></textarea>
                <input type="submit" class="btn btn-warning my-3" value="Submit">
                {{-- Submit</button> --}}
           </div>
        </form>
        @endif
      </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection
