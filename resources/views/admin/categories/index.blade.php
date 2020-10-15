@extends('admin.layouts.master')
@section('products-menu') active @stop
@section('show') show @stop
@section('all-cat') active @stop
@section('content')

    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3">Categories</h1>

            <div class="row">
                <div class="col-md-3 col-xl-2">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Category Management</h5>
                        </div>
                        <div class="list-group list-group-flush" role="tablist">
                            <a class="list-group-item list-group-item-action active" data-toggle="list" href="#category" role="tab" aria-selected="false">
                                Category
                            </a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#subcategory" role="tab" aria-selected="true">
                               Sub Category
                            </a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#" role="tab">
                                Privacy and safety
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-9 col-xl-10">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="category" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <div class="form-wrapper">
                                                    <div class="form-group">
                                                        <label class="form-label">Category Name</label>
                                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label d-block">Status</label>
                                                        <select name="status" class="form-control">
                                                            <option value="" selected disabled>Select</option>
                                                            <option value="0">Disable</option>
                                                            <option value="1">Enable</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label d-block">Image</label>
                                                        <span class="btn btn-primary d-block">
                                                            <input class="d-block" type="file" name="image" accept="image/*" onchange="loadImage(event)" id="image">
                                                        </span>
                                                        <div class="show-img text-center">
                                                            <div class="new-img d-inline-block">
                                                                <h5>New Image-></h5>
                                                                <img height="100" width="140" id="output"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-10">
                                                            <button type="submit" class="btn btn-primary">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-lg-7">
                                            <table class="table table-hover table-sm table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @if($categories->count() > 0)
                                                    @foreach($categories as $category)
                                                        <tr>
                                                            <td>{{$loop->index+ 1}}</td>
                                                            <td><img src="{{asset($category->image)}}" class="rounded-circle mr-2" alt="Avatar" width="48" height="48"></td>
                                                            <td>{{$category->name}}</td>
                                                            <td class="table-action d-flex align-items-center">
                                                                <a href="{{ route('categories.edit', $category->id) }}"><i class="align-middle" data-feather="edit-2"></i></a>
                                                                <form id="delete-form-{{$category->id}}"
                                                                      action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                </form>
                                                                <a class="ml-3" href="javascript:void(0);" onclick="deleteTable({{$category->id}})"><i class="align-middle"
                                                                                                                                                       data-feather="trash"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td colspan="4"><h4 class="text-center">No Category Found !</h4></td>
                                                    </tr>
                                                @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="subcategory" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <form action="{{ route('sub-categories.store') }}" method="POST">
                                                {{ csrf_field() }}
                                                <div class="form-wrapper">
                                                    <div class="form-group">
                                                        <label class="form-label">SubCategory Name</label>
                                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label d-block">Category Name</label>
                                                        <select name="cat_id" class="form-control">
                                                            <option value="" selected disabled>Select category</option>
                                                            @foreach($categories as $category)
                                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label d-block">Status</label>
                                                        <select name="status" class="form-control">
                                                            <option value="" selected disabled>Select</option>
                                                            <option value="0">Disable</option>
                                                            <option value="1">Enable</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-10">
                                                            <button type="submit" class="btn btn-primary">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-lg-8">
                                            <table class="table table-hover table-bordered table-sm">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Category</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @if($subcategories->count() > 0)
                                                    @foreach($subcategories as $subcategory)
                                                        <tr>
                                                            <td>{{$loop->index+ 1}}</td>
                                                            <td>{{$subcategory->category->name}} -> {{$subcategory->name}}</td>
                                                            <td>{{$subcategory->status}}</td>
                                                            <td class="table-action d-flex align-items-center">
                                                                <a href="{{ route('sub-categories.edit', $subcategory->id) }}"><i class="align-middle"
                                                                                                                               data-feather="edit-2"></i></a>
                                                                <form id="delete-form-{{$subcategory->id}}"
                                                                      action="{{ route('sub-categories.destroy', $subcategory->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                </form>
                                                                <a class="ml-3" href="javascript:void(0);" onclick="deleteTable({{$subcategory->id}})"><i class="align-middle"
                                                                                                                                                       data-feather="trash"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td colspan="4"><h4 class="text-center">No Category Found !</h4></td>
                                                    </tr>
                                                @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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
        var loadImage = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('output');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
    </script>
    <script>
        function deleteTable(id) {
            if(confirm("Do you want to delete this item?")) {
                document.getElementById('delete-form-'+id).submit();
                toastr.success('Deleted!', "")
            }
        }
    </script>

@endpush