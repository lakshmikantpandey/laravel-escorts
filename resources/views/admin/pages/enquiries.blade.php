@extends('layouts.admin_layout')

@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('fail'))
    <div class="alert alert-danger">
        {{ session('fail') }}
    </div>
@endif

@if(session('Message_deleted'))
    <div class="alert alert-success">
        {{ session('Message_deleted') }}
    </div>
@endif


<main class="content">
    <div class="container-fluid p-0">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-title">Enquiries</div>
                        <div class="card-body">
                            <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Mobile</th>
                                        <th>Model Preference</th>
                                        <th>Message</th>
                                        <th>Budget</th>
                                        <th>City</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($enquiries as $enquiry)
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{$enquiry->name}}</td>
                                            <td>{{$enquiry->age}}</td>
                                            <td>{{$enquiry->mobile}}</td>
                                            <td>{{$enquiry->model_preference}}</td>
                                            <td>{{$enquiry->message}}</td>
                                            <td>{{$enquiry->budget}}</td>
                                            <td>{{$enquiry->city}}</td>
                                            <td class="text-nowrap">
                                               <a href="tel:{{$enquiry->phone}}" class="btn btn-sm btn-info"><i class="fas fa-phone-volume" data-toggle="tooltip" data-placement="bottom" title="Call"></i></a>
                                               <a href="delete-enquiry/{{$enquiry->id}}"  class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="far fa-trash-alt"></i></a>
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

    </div>
</main>

@stop