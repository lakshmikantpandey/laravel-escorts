@extends('layouts.admin_layout')

@section('content')


<main class="content">
    <div class="container-fluid p-0">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addEditModelModal">Add Model</button>
                    <div class="card mt-2">
                        <div class="card-title">Models</div>
                        <div class="card-body">
                            <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Model Name</th>
                                        <th>Age</th>
                                        <th>City</th>
                                        <th>Height</th>
                                        <th>Category</th>
                                        <th>Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($models as $model)
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>{{$model->modelName}}</td>
                                        <td>{{$model->age}}</td>
                                        <td>{{$model->city}}</td>
                                        <td>{{$model->height}}</td>
                                        <td>{{$model->categoryId}}</td>
                                        <td class="banner-image">
                                            <img height="100" width="100" src="{{ asset('admin/img/models/' . $model->image) }}" alt="Model Image">
                                        </td>
                                        <td class="text-nowrap">
                                            <a href="#" class="btn btn-sm btn-primary editModel" data-id="{{ $model->id }}" data-name="{{ $model->modelName }}" data-age="{{ $model->age }}" data-height="{{ $model->height }}" data-city="{{ $model->city }}" data-category="{{ $model->categoryId }}" data-image="{{ $model->image }}" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fas fa-edit"></i></a>
                                            <a href="/admin/delete-model/{{$model->id}}" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="far fa-trash-alt"></i></a>
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

        <div class="modal fade" id="addEditModelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Model Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="modelForm" action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="modelId" id="modelId">
                        <div class="modal-body">
                            <label for="modelName">Model Name</label>
                            <input type="text" class="form-control" name="modelName" id="modelName" placeholder="Enter Model Name" required>
                            <label for="age">Age</label>
                            <input type="text" class="form-control" name="age" id="age" placeholder="Enter Model Age" required>
                            <label for="height">Height</label>
                            <input type="text" class="form-control" name="height" id="height" placeholder="Enter Model Height" required>
                            <label for="city">City</label>
                            <input type="text" class="form-control" name="city" id="city" placeholder="Enter Model city">
                            <label for="categoryId">Category</label>
                            <select class="form-control" name="categoryId" id="categoryId" required>
                                <option value="">Choose model category...</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->categoryName }}</option>
                                @endforeach
                            </select>
                            <label for="image">Model image</label>
                            <input type="file" class="form-control" name="image" id="image">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary" id="saveModelBtn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</main>


<script>
    $(document).ready(function() {
        $('.editModel').on('click', function() {
            var id = $(this).data('id');
            var name = $(this).data('name');
            var age = $(this).data('age');
            var height = $(this).data('height');
            var city = $(this).data('city');
            var categoryId = $(this).data('category');
            var image = $(this).data('image');

            $('#modelId').val(id);
            $('#modelName').val(name);
            $('#age').val(age);
            $('#height').val(height);
            $('#city').val(city);
            $('#categoryId').val(categoryId);

            $('#modelForm').attr('action', '/admin/edit-model/' + id);
            $('#modelForm').attr('method', 'POST');

            $('#addEditModelModal').modal('show');
        });
    });
</script>
@stop