@extends('layouts.admin_layout')

@section('content')


<main class="content">
    <div class="container-fluid p-0">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCategoryModal">Add Category</button>
                    <div class="card">
                        <div class="card-title">Categories</div>
                        <div class="card-body">
                            <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Name</th>
                                        <th>Created at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>{{$category->categoryName}}</td>
                                        <td>{{$category->created_at}}</td>
                                        <td class="text-nowrap">
                                        <a href="#" class="btn btn-sm btn-primary editCategory" data-id="{{ $category->id }}" data-name="{{ $category->categoryName }}" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fas fa-edit"></i></a>
                                            <a href="/delete-category/{{$category->id}}" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="categoryForm" action="{{ route('createCategory') }}" method="POST" role="form">
                        @csrf
                        <div class="modal-body">
                            <input type="hidden" name="categoryId" id="categoryId" value="">
                            <label for="categoryName">Category Name</label>
                            <input type="text" class="form-control" name="categoryName" id="categoryName" placeholder="Enter Category Name" />
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" id="saveCategoryBtn" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</main>


<script>
    $(document).ready(function() {
        $('.editCategory').click(function() {
            var category_id = $(this).data('id');
            var category_name = $(this).data('name');
            
            $('#categoryId').val(category_id);
            $('#categoryName').val(category_name);
            $('#exampleModalLabel').text('Edit Category');
            $('#saveCategoryBtn').text('Update');
            $('#categoryForm').attr('action', '/update-category/' + category_id);
            $('#addCategoryModal').modal('show');
        });
    });
</script>


@stop