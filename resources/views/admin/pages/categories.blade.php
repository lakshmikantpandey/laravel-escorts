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
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->created_at}}</td>
                                        <td class="text-nowrap">
                                            <a href="mailto:{{$category->email}}" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="bottom" title="Reply"><i class="fas fa-reply"></i></a>
                                            <a href="tel:{{$category->phone}}" class="btn btn-sm btn-info"><i class="fas fa-phone-volume" data-toggle="tooltip" data-placement="bottom" title="Call"></i></a>
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
                    <form action="{{ route('createCategory') }}" method="POST" role="form">
                        <div class="modal-body">
                            <label for="categoryName">Category Name</label>
                            <input type="text" class="form-control" name="categoryName" placeholder="Enter Category Name" />
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

@stop