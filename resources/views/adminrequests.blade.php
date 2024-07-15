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
                <td><a href="/img/huhcat.jpg" target="_blank">Username</a></td>
                <td><a href="/img/huhcat.jpg" target="_blank">jamiebgbgbg</a></td>
            </tr>
            <tr>
                <td><a href="/img/huhcat.jpg" target="_blank">Email</a></td>
                <td><a href="/img/huhcat.jpg" target="_blank">jamie@hehe.com</a></td>
            </tr>
            <tr>
                <td><a href="/img/huhcat.jpg" target="_blank">Organization Name</a></td>
                <td><a href="/img/huhcat.jpg" target="_blank">jamie boing boing</a></td>
            </tr>
            <tr>
                <td><a href="/img/huhcat.jpg" target="_blank">Organization Structure</a></td>
                <td><a href="/img/huhcat.jpg" target="_blank">Non-profit</a></td>
            </tr>
            <tr>
                <td><a href="/img/huhcat.jpg" target="_blank">Location</a></td>
                <td><a href="/img/huhcat.jpg" target="_blank">Malaysia</a></td>
            </tr>
            <tr>
                <td><a href="/img/huhcat.jpg" target="_blank">Phone Number</a></td>
                <td><a href="/img/huhcat.jpg" target="_blank">01232132</a></td>
            </tr>
            <tr>
                <td><a href="/img/huhcat.jpg" target="_blank">Tax Identification Number</a></td>
                <td><a href="/img/huhcat.jpg" target="_blank">G69420</a></td>
            </tr>
            <tr>
                <td><a href="/img/huhcat.jpg" target="_blank">License Picture</a></td>
                <td><a href="/img/huhcat.jpg" target="_blank"><img src="/img/huhcat.jpg"/></a></td>
            </tr>
            <tr>
                <td><a href="/img/huhcat.jpg" target="_blank">Organization Description</a></td>
                <td><a href="/img/huhcat.jpg" target="_blank">this is legit lolololo</a></td>
            </tr>
          </table>
          <button class="btn btn-success">Approve</button>
          <button class="btn btn-danger">Decline</button>
    </div>
</div>
<style>
    .align-left {
        margin-left: 0;
    }
</style>
@endsection
