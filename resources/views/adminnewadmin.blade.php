@php
    use Carbon\Carbon;
@endphp
@extends('layouts.admindashboardnavbar')
@section('css')

@endsection
@section('content')
<div class="container m-5">
    <h2>Admins</h2>
    <button id="toggleFormBtn" class="btn btn-warning">Add New Admin</button>

    <div class="container m-4">
        <form id="addAdminForm" style="display: none" action="{{route('admin.accounts.add')}}" method="POST">
            @csrf
            <div class="form-group p-2">
                <label for="admin_email">Admin Email:</label>
                <input type="text" class="form-control" id="admin_email" name="email" placeholder="Enter admin email..." required>
            </div>
            <div class="form-group p-2">
                <label for="admin-password">Admin Password:</label>
                <input type="password" class="form-control" id="admin-email" name="password" required>
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
                    <th>Registered Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($admins as $admin)
                <tr>
                    <td>
                        {{$admin->petowner->email}}
                    </td>
                    <td>
                        {{Carbon::parse($admin->created_at)->format('d-m-Y')}}
                    </td>
                </tr>
                @endforeach
            {{-- <tr>
                <td>
                    heh
                </td>
                <td>
                    heh
                </td>
            </tr> --}}
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
