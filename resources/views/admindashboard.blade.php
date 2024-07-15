@php
    use Carbon\Carbon;
@endphp
@extends('layouts.admindashboardnavbar')
@section('css')
<link rel="stylesheet" href="/css/pagination.css">
@endsection
@section('content')
        <div class="containter m-5">
            <h2>User Feedbacks</h2>
            <div class="container" style="min-width: 80%">
                @if (!$feedbacks->isEmpty())
                    @foreach ($feedbacks as $feedback)
                    <div class="container m-2 pt-4" style="background-color: white">
                        <div class="p-3">
                          <h6>{{$feedback->petowner->username}}</h6>
                          <p>{{$feedback->description}}</p>
                          <p>{{Carbon::parse($feedback->datetime)->diffForHumans()}}</p>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <p>There is no feedback</p>
                @endif


                {{-- <div class="container m-2 pt-4" style="background-color: white">
                    <div class="p-3">
                      <h6>weird place</h6>
                      <p>why dont i get notifs????</p>
                      <p>12 June 2024</p>
                    </div>
                </div>
                <div class="container m-2 pt-4" style="background-color: white">
                    <div class="p-3">
                    <h6>weird place</h6>
                    <p>hi</p>
                    <p>12 June 2024</p>
                    </div>
                </div> --}}
            </div><div style='margin:auto'>
            {{ $feedbacks->links('template.pagination') }}
        </div>
        </div>
@endsection
