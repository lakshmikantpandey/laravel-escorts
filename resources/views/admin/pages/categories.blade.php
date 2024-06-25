@extends('layouts.admin_layout')

@section('content')


<main class="content">
    <div class="container-fluid p-0">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <button class="btn btn-primary" type="button">Add Category</button>
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
                                               <a href="/delete-category/{{$category->id}}"  class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="far fa-trash-alt"></i></a>
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
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
            </button>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>
    </div>
</main>

@stop