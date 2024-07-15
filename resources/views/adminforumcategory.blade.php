@extends('layouts.admindashboardnavbar')
@section('css')

@endsection
@section('content')
<div class="container m-5">
    <h2>Forum Category</h2>
    <button id="toggleFormBtn" class="btn btn-warning">Add New Category</button>

    <div class="container m-4">
        <form id="addCategoryForm" style="display: none" method="POST" action="{{route('admin.forumCategory.add')}}">
            <div class="form-group p-2">
                @csrf
                <label for="category_name">Category Name:</label>
                <input type="text" class="form-control" id="category_name" name='name' placeholder="Enter category name">
                <button type="submit" class="btn btn-warning mt-2">Submit</button>
            </div>
        </form>
        </form>
    </div>

    <div class="container m-4">
        <table class="table table-hover ">
            <thead>
                <tr>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if (!($forumCategories->isEmpty()))
                    @foreach ($forumCategories as $forumCategory)
                    <tr>
                        <td class="category-name">
                            <form class="edit-category-form"  method="POST" action={{route('admin.forumCategory.edit')}}>
                                @csrf
                                <input type='number' name='id' value='{{$forumCategory->id}}' hidden>
                                <span class="category-text">{{$forumCategory->name}}</span>
                                <input type="text" name="category_name" class="form-control d-none" value="{{$forumCategory->name}}">
                            </form>
                        </td>
                        <td>
                            <button class="btn btn-secondary edit-btn">Edit</button>
                        </td>
                    </tr>
                    @endforeach
                @endif


            {{-- <tr>
                <td class="category-name">
                    <form class="edit-category-form"  method="POST">
                        @csrf
                        <input type='number' name='id' value='{{}}'>
                        <span class="category-text">Cat</span>
                        <input type="text" name="category_name" class="form-control d-none" value="Cat">
                    </form>
                </td>
                <td>
                    <button class="btn btn-secondary edit-btn">Edit</button>
                </td>
            </tr> --}}
            </tbody>
        </table>
    </div>
</div>
<script>
        document.getElementById('toggleFormBtn').addEventListener('click', function() {
            var form = document.getElementById('addCategoryForm');
            if (form.style.display === 'none' || form.style.display === '') {
                form.style.display = 'block';
            } else {
                form.style.display = 'none';
            }
        });
        document.addEventListener('click', function(e) {
    if (e.target && e.target.classList.contains('edit-btn')) {
        var row = e.target.closest('tr');
        var form = row.querySelector('.edit-category-form');
        var span = form.querySelector('.category-text');
        var input = form.querySelector('input[name="category_name"]');

        span.classList.add('d-none');
        input.classList.remove('d-none');

        e.target.textContent = 'Update';
        e.target.classList.remove('edit-btn');
        e.target.classList.add('update-btn');
    } else if (e.target && e.target.classList.contains('update-btn')) {
        var row = e.target.closest('tr');
        var form = row.querySelector('.edit-category-form');
        form.submit();
    }
});

</script>
@endsection
