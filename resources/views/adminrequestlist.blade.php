@php
    use Carbon\Carbon;
@endphp
@extends('layouts.admindashboardnavbar')
@section('css')
<link rel="stylesheet" href="/css/pagination.css">
@endsection
@section('content')
        <div class="containter m-5">
            <h2>User Requests</h2>
            <div class="container">
                @if (!$list->isEmpty())
                    @foreach ($list as $data)
                    <div class="container m-2 pt-4" style="background-color: white; min-width: 450px">
                        <div class="p-3">
                            <div class="d-flex justify-content-between">
                                <p><a href="{{route('admin.requestDetails.index',['requestId'=>$data->id])}}">New Request</a></p>
                                <p><a href="{{route('admin.requestDetails.index',['requestId'=>$data->id])}}">View Request Details..</a></p>
                            </div>
                            <h4>{{$data->animalrescuersandshelters->name}}</h4>
                          <p>{{Carbon::parse($data->created_at)->format('d-m-Y')}}</p>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <p>There are no any request</p>
                @endif
                {{-- <div class="container m-2 pt-4" style="background-color: white; min-width: 450px">
                    <div class="p-3">
                        <div class="d-flex justify-content-between">
                            <p><a href="">New Request</a></p>
                            <p><a href="">View Request Details..</a></p>
                        </div>
                        <h4>Jamie's Jams Diner Pets</h4>
                      <p>12 June 2024</p>
                    </div>
                </div>

                <div class="container m-2 pt-4" style="background-color: white; min-width: 450px">
                    <div class="p-3">
                        <div class="d-flex justify-content-between">
                            <p><a href="">New Request</a></p>
                            <p><a href="">View Request Details..</a></p>
                        </div>
                        <h4>Jamie's Jams Diner Pets</h4>
                      <p>12 June 2024</p>
                    </div>
                </div> --}}
            </div>
            <div style='margin:auto'>
                {{ $list->links('template.pagination') }}
            </div>
        </div>
@endsection
