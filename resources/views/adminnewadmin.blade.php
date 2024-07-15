@extends('layouts.admindashboardnavbar')
@section('css')

@endsection
@section('content')
<div class="container m-5">
    <h2>Admins</h2>
    <button id="toggleFormBtn" class="btn btn-warning">Add New Admin</button>

    <div class="container m-4">
        <form id="addAdminForm" style="display: none">
            <div class="form-group p-2">
                <label for="admin_email">Admin Email:</label>
                <input type="text" class="form-control" id="admin_email" placeholder="Enter admin email...">
            </div>
            <div class="form-group p-2">
                <label for="admin-password">Admin Password:</label>
                <input type="text" class="form-control" id="admin-email" placeholder="Enter admin password...">
                <small id="email-help" class="form-text text-muted">Password minumum 8 characters.</small>
            </div>
            <button type="submit" class="btn btn-warning mt-2">Submit</button>
        </form>
        </form>
    </div>

    <div class="container m-4">
        <h4>Admins</h4>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Admin Email</th>
                    <th>Admin Password</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    heh
                </td>
                <td>
                    heh
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<script>
        document.getElementById('toggleFormBtn').addEventListener('click', function() {
            var form = document.getElementById('addAdminForm');
            if (form.style.display === 'none' || form.style.display === '') {
                form.style.display = 'block';
            } else {
                form.style.display = 'none';
            }
        });

</script>


@endsection
