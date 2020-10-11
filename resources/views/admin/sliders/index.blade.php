@extends('admin.layouts.master')
@section('sliders') active @stop
@section('content')

<main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3">Sliders</h1>

            <div class="row">
                <div class="col-md-3 col-xl-2">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Slider Manage</h5>
                        </div>

                        <div class="list-group list-group-flush" role="tablist">
                            <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account" role="tab" aria-selected="false">
                                All Sliders
                            </a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#password" role="tab" aria-selected="true">
                                Add Slider
                            </a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#" role="tab">
                                Privacy and safety
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-9 col-xl-10">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                </div>
                                <div class="card-body">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Order</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Discount</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($sliders->count() > 0)
                                            @foreach($sliders as $slider)
                                                <tr>
                                                    <td>{{$slider->orders}}</td>
                                                    <td><img src="{{asset($slider->image)}}" width="100px" height="50px"></td>
                                                    <td>{{$slider->title}}</td>
                                                    <td>{{$slider->spacial_discount}}</td>
                                                    <td>{{$slider->status}}</td>
                                                    <td class="table-action d-flex align-items-center">
                                                        <a href="{{ route('sliders.edit', $slider->id) }}"><i class="align-middle" data-feather="edit-2"></i></a>
                                                        <form id="delete-form-{{$slider->id}}"
                                                              action="{{ route('sliders.destroy', $slider->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                        <a class="ml-3" href="javascript:void(0);" onclick="deleteTable({{$slider->id}})"><i class="align-middle"
                                                                                                                                               data-feather="trash"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="6"><h4 class="text-center">No Sliders Found !</h4></td>
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="password" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Add New Slider</h5>
                                    <form action="{{route('sliders.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="title">Title</label>
                                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                                           name="title"/>
                                                    @error('title')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Sub Title</label>
                                                    <input type="text" class="form-control @error('sub_title') is-invalid @enderror" id="sub_title"
                                                           name="sub_title"/>
                                                    @error('sub_title')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="spacial_discount">Spacial Discount</label>
                                                    <input type="text" class="form-control @error('spacial_discount') is-invalid @enderror" id="spacial_discount"
                                                           name="spacial_discount"/>
                                                    @error('spacial_discount')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="btn_link">Button Link</label>
                                                    <input type="text" class="form-control @error('btn_link') is-invalid @enderror"
                                                           id="btn_link" name="btn_link">
                                                    @error('btn_link')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="btn_text">Button Text</label>
                                                    <input type="text" class="form-control @error('btn_text') is-invalid @enderror"
                                                           id="btn_text" name="btn_text"/>
                                                    @error('btn_text')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="twitter">Status</label>
                                                    <select name="status" class="form-control">
                                                        <option value="0">Inactive</option>
                                                        <option value="1">Active</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="orders">Order By</label>
                                                    <input type="number" class="form-control @error('orders') is-invalid @enderror"
                                                           id="orders" name="orders" />
                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="text-center">
                                                    <img alt="Charles Hall" src=""
                                                         class="rounded-circle img-responsive mt-2" width="128"
                                                         height="128" />
                                                    <div class="mt-2">
                                                        <span class="btn btn-primary"><input type="file" name="image"></span>
                                                    </div>
                                                    <small>Slider Upload Here</small>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@stop

@push('scripts')
<script>
    function deleteTable(id) {
        if(confirm("Do you want to delete this item?")) {
            document.getElementById('delete-form-'+id).submit();
            toastr.success('Deleted!', "")
        }
    }
</script>
@endpush