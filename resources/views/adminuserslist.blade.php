@extends('layouts.admindashboardnavbar')
@section('css')

@endsection
@section('content')
<div class="container m-5">
    <h2>Users List</h2>

    <div class="container m-4">
        <label>Pet Owners</label>
        <input type="text" id="searchOwnerInput" class="form-control mb-3" placeholder="Search for pet owners...">
        <div class="table-responsive" style="max-height: 300px; overflow-y: auto;">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Register Date</th>
                    </tr>
                </thead>
                <tbody id="petOwnersTable">
                    <tr>
                        <td>jamieballs</td>
                        <td>jamieballs@gmail.com</td>
                        <td>12 July 2024</td>
                    </tr>
                    <tr>
                        <td>xuanxuan</td>
                        <td>jamieballs@gmail.com</td>
                        <td>12 July 2024</td>
                    </tr>
                    <tr>
                        <td>xuanxuan</td>
                        <td>jamieballs@gmail.com</td>
                        <td>12 July 2024</td>
                    </tr>
                    <tr>
                        <td>xuanxuan</td>
                        <td>jamieballs@gmail.com</td>
                        <td>12 July 2024</td>
                    </tr>
                    <tr>
                        <td>xuanxuan</td>
                        <td>jamieballs@gmail.com</td>
                        <td>12 July 2024</td>
                    </tr>
                    <tr>
                        <td>xuanxuan</td>
                        <td>jamieballs@gmail.com</td>
                        <td>12 July 2024</td>
                    </tr>
                    <tr>
                        <td>xuanxuan</td>
                        <td>jamieballs@gmail.com</td>
                        <td>12 July 2024</td>
                    </tr>
                    <tr>
                        <td>xuanxuan</td>
                        <td>jamieballs@gmail.com</td>
                        <td>12 July 2024</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <div class="container m-4">
        <label>Animal Shelters and Rescuers</label>
        <input type="text" id="searchShelterInput" class="form-control mb-3" placeholder="Search for animal shelters...">
        <div class="table-responsive" style="max-height: 300px; overflow-y: auto;">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Organzization Name</th>
                    <th>Email</th>
                    <th>Register Date</th>
                </tr>
            </thead>
            <tbody id="animalShelterTable">
            <tr>
                <td>jamieballs</td>
                <td>jamieballs@gmail.com</td>
                <td>12 July 2024</td>
            </tr>
            <tr>
                <td>jamieballs</td>
                <td>jamieballs@gmail.com</td>
                <td>12 July 2024</td>
            </tr>
            </tbody>
        </table>
        </div>
    </div>
</div>
<script>
    document.getElementById('searchOwnerInput').addEventListener('keyup', function() {
        var filter = this.value.toUpperCase();
        var table = document.getElementById('petOwnersTable');
        var tr = table.getElementsByTagName('tr');

        for (var i = 0; i < tr.length; i++) {
            var tdArray = tr[i].getElementsByTagName('td');
            var found = false;
            for (var j = 0; j < tdArray.length; j++) {
                if (tdArray[j]) {
                    var txtValue = tdArray[j].textContent || tdArray[j].innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        found = true;
                        break;
                    }
                }
            }
            if (found) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    });
    document.getElementById('searchShelterInput').addEventListener('keyup', function() {
        var filter = this.value.toUpperCase();
        var table = document.getElementById('animalShelterTable');
        var tr = table.getElementsByTagName('tr');

        for (var i = 0; i < tr.length; i++) {
            var tdArray = tr[i].getElementsByTagName('td');
            var found = false;
            for (var j = 0; j < tdArray.length; j++) {
                if (tdArray[j]) {
                    var txtValue = tdArray[j].textContent || tdArray[j].innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        found = true;
                        break;
                    }
                }
            }
            if (found) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    });
    </script>
@endsection
