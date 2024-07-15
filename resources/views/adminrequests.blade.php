@extends('layouts.admindashboardnavbar')
@section('css')

@endsection
@section('content')
<div class="container m-5">
    <h2>User Requests</h2>
    <div class="container align-left mt-2" style="max-width: 50%"> <!--hi zhe bian-->
        <label>New Animal Shelter and Rescuer Request</label>
        <table class="table table-borderless">
            <tr>
                <td><a  target="_blank">Username</a></td>
                <td><a  target="_blank">{{$approvalDetails->animalrescuersandshelters->petowner->username}}</a></td>
            </tr>
            <tr>
                <td><a  target="_blank">Email</a></td>
                <td><a  target="_blank">{{$approvalDetails->animalrescuersandshelters->petowner->email}}</a></td>
            </tr>
            <tr>
                <td><a  target="_blank">Organization Name</a></td>
                <td><a  target="_blank">{{$approvalDetails->animalrescuersandshelters->name}}</a></td>
            </tr>
            <tr>
                <td><a  target="_blank">Organization Structure</a></td>
                <td><a  target="_blank">@if ($approvalDetails->animalrescuersandshelters->structure==0) Non-profit @else Charitable @endif</a></td>
            </tr>
            <tr>
                <td><a  target="_blank">Location</a></td>
                <td><a  target="_blank">{{$approvalDetails->animalrescuersandshelters->location}}</a></td>
            </tr>
            <tr>
                <td><a  target="_blank">Phone Number</a></td>
                <td><a  target="_blank">{{$approvalDetails->animalrescuersandshelters->phonenumber}}</a></td>
            </tr>
            <tr>
                <td><a  target="_blank">Tax Identification Number</a></td>
                <td><a  target="_blank">{{$approvalDetails->animalrescuersandshelters->taxidentificationnumber}}</a></td>
            </tr>
            <tr>
                <td><a href="/img/huhcat.jpg" target="_blank">License Picture</a></td>
                <td><a href="{{$approvalDetails->animalrescuersandshelters->businesslicense}}" target="_blank"><img src="{{$approvalDetails->animalrescuersandshelters->businesslicense}}"/></a></td>
            </tr>
            <tr>
                <td><a target="_blank">Organization Description</a></td>
                <td><a target="_blank">{{$approvalDetails->animalrescuersandshelters->description}}</a></td>
            </tr>
          </table>
          <a href="{{route('admin.requestApprove',['requestId'=>$approvalDetails->id])}}" ><button  class="btn btn-success">Approve</button></a>
          <a href="{{route('admin.requestDecline',['requestId'=>$approvalDetails->id])}}" ><button  class="btn btn-danger">Decline</button></a>
    </div>
</div>
<style>
    .align-left {
        margin-left: 0;
    }
</style>
@endsection
