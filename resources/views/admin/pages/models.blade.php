@extends('layouts.admin_layout')

@section('content')


<main class="content">
    <div class="container-fluid p-0">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModel">Add Model</button>
                    <div class="card">
                        <div class="card-title">Models</div>
                        <div class="card-body">
                            <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Model Name</th>
                                        <th>Age</th>
                                        <th>City</th>
                                        <th>Height</th>
                                        <th>Height/size</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td class="table-action">
                                            <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                            <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td class="table-action">
                                            <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                            <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td class="table-action">
                                            <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                            <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Michael Bruce</td>
                                        <td>Javascript Developer</td>
                                        <td>Michael Bruce</td>
                                        <td>Javascript Developer</td>
                                        <td class="table-action">
                                            <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                            <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Donna Snider</td>
                                        <td>Customer Support</td>
                                        <td>Donna Snider</td>
                                        <td>Customer Support</td>
                                        <td class="table-action">
                                            <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                            <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="modal fade" id="addModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Model</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="modelForm" action="{{ route('createModel') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <!-- <input type="hidden" name="modelId" id="modelId" value=""> -->
                            <label for="modelName">Model Name</label>
                            <input type="text" class="form-control" name="modelName" id="modelName" placeholder="Enter Model Name" required />
                            <label for="age">Age</label>
                            <input type="text" class="form-control" name="age" id="age" placeholder="Enter Model Age" required />
                            <label for="city">City</label>
                            <input type="text" class="form-control" name="city" id="city" placeholder="Enter Model city" />
                            <label for="category">Category</label>
                            <select class="form-control" name="categoryId" id="categoryId" required>
                                <option value="">Choose model category...</option>
                                @foreach ($categories as $category)
                                <option class="form-control" value="{{ $category->id }}">{{ $category->categoryName }}</option>
                                @endforeach
                            </select>
                            <label for="image">Model image</label>
                            <input type="file" class="form-control" name="image" id="image" required />
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</main>

@stop