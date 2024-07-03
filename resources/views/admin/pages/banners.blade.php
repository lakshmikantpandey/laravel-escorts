@extends('layouts.admin_layout')

@section('content')


<main class="content">
    <div class="container-fluid p-0">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addBannerModal">Add Banner</button>
                    <div class="card mt-2">
                        <div class="card-title">Banners</div>
                        <div class="card-body">
                            <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($banners as $banner)
                                    <tr>
                                        <td class="banner-image">
                                            <img height="100" width="100" src="{{ asset('admin/img/banners/' . $banner->image) }}" alt="Banner Image">
                                        </td>
                                        <td class="text-nowrap">
                                        <a href="#" class="btn btn-sm btn-primary editBanner" data-id="{{ $banner->id }}" data-name="{{ $banner->image }}" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fas fa-edit"></i></a>
                                            <a href="delete-banner/{{$banner->id}}" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="far fa-trash-alt"></i></a>
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

        <div class="modal fade" id="addBannerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="bannerModalTitle">Add Banner</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="bannerForm" action="{{ route('createBanner') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="banner_id" id="banner_id">
                        <div class="modal-body">
                            <label for="image">Banner Image</label>
                            <input type="file" class="form-control" name="image" id="image" />
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary" id="saveBannerBtn">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</main>

<script>
    $(document).ready(function() {
        $('.editBanner').click(function() {
            var banner_id = $(this).data('id');
            var banner_image = $(this).data('name');
            
            $('#bannerModalTitle').text('Edit Banner');
            $('#bannerForm').attr('action', 'update-banner/' + banner_id);
            $('#banner_id').val(banner_id);
            $('#addBannerModal').modal('show');
        });
    });
</script>

@stop