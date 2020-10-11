@extends('admin.layouts.master')
@section('sliders') active @stop
@section('show') show @stop
@section('all-sliders') active @stop

@section('css')
    <style>
        .show-img {
            background: #F1F1F1;
            padding: 10px;
            border-radius: 5px;
            margin-top: 6px;
        }
        .show-img img {
            border: 1px solid #000000;
            border-radius: 5px;
        }
    </style>
@stop

@section('content')

    <main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3 col-md-6">
                <div class="col-auto d-flex align-items-center">
                    <h2>Edit Product</h2>
                    <a href="{{route('products.index')}}" class="btn btn-primary ml-4">All Product</a>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                            </ul>
                            @endforeach
                        </div>
                    @endif
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#General" role="tab" aria-controls="nav-home"
                                           aria-selected="true">General</a>
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#Image" role="tab" aria-controls="nav-profile"
                                           aria-selected="false">Image</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#Price" role="tab" aria-controls="nav-contact"
                                           aria-selected="false">Price</a>
                                    </div>
                                </nav>
                                <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    @method('PUT')
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="General" role="tabpanel" aria-labelledby="nav-home-tab">
                                            <div class="">
                                                <div class="row">
                                                    <div class="col-lg-7">
                                                        <div class="form-wrapper mt-5 mb-5">
                                                            <form>
                                                                <div class="form-group row">
                                                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Product Name</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" name="name" value="{{ $product->name }}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="" class="col-sm-3 col-form-label">Short Description</label>
                                                                    <div class="col-sm-9">
                                                                <textarea type="text" class="form-control ckeditor" name="details"  rows="5">
                                                                    {{$product->details}}
                                                                </textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="" class="col-sm-3 col-form-label">Long Description</label>
                                                                    <div class="col-sm-9">
                                                                        <textarea type="text" class="form-control ckeditor" name="description"  rows="3">
                                                                            {{ $product->description }}
                                                                        </textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Product Quantity</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="number" class="form-control" name="quantity" value="{{$product->quantity}}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="inputEmail3" class="col-sm-3 col-form-label"> Brand </label>
                                                                    <div class="col-sm-9">
                                                                        <select name="brand_id" class="form-control">
                                                                            <option value="" disabled selected>Please Select</option>
                                                                            @foreach($brands as $brand)
                                                                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="inputEmail3" class="col-sm-3 col-form-label"> Categories </label>
                                                                    <div class="col-sm-9">
                                                                        <select name="categories[]" class="form-control js-example-basic-multiple">
                                                                            <option value="" disabled selected>Please Select</option>
                                                                            @foreach($categories as $category)
                                                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-3"></div>
                                                                    <div class="col-sm-9">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="gridCheck1" name="is_enable" value="0" {{$product->is_enable == true ? 'checked' : ''}}>
                                                                            <label class="form-check-label" for="gridCheck1">
                                                                                Status
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-3"></div>
                                                                    <div class="col-sm-9">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="gridCheck1" name="featured" value="0" {{$product->featured == true ? 'checked' : ''}}>
                                                                            <label class="form-check-label" for="gridCheck1">
                                                                                Feature
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-3"></div>
                                                                    <div class="col-sm-9">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="gridCheck1" name="hot_deal" value="0" {{$product->hot_deal == true ? 'checked' : ''}}>
                                                                            <label class="form-check-label" for="gridCheck1">
                                                                                Hot Deal
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-9">
                                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Image" role="tabpanel" aria-labelledby="nav-profile-tab">
                                            <div class="">
                                                <div class="row">
                                                    <div class="col-lg-7">
                                                        <div class="form-wrapper mt-5 mb-5">
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-3 col-form-label">Base Image</label>
                                                                <div class="col-sm-9">
                                                                    <input type="file" accept="image/*" onchange="loadFile(event)" id="image" class="form-control" name="image"
                                                                           value="{{ $product->image }}">
                                                                    <div class="show-img">
                                                                        <img height="100" width="100" src="{{ asset($product->image) }}"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-3 col-form-label">Additional Image</label>
                                                                <div class="col-sm-9">
                                                                    <input type="file" class="form-control" name="images[]" multiple value="{{ $product->images }}">
                                                                    <div class="show-img">
                                                                        @foreach (json_decode($product->images) as $image)
                                                                            <img height="100" width="100" src="{{ asset($image) }}"/>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-9">
                                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Price" role="tabpanel" aria-labelledby="nav-contact-tab">
                                            <div class="">
                                                <div class="row">
                                                    <div class="col-lg-7">
                                                        <div class="form-wrapper mt-5 mb-5">
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-3 col-form-label">Regular Price</label>
                                                                <div class="col-sm-9">
                                                                    <input type="number" class="form-control" name="price" value="{{$product->price }}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-3 col-form-label">Spacial Price</label>
                                                                <div class="col-sm-9">
                                                                    <input type="number" class="form-control" name="spacial_price" value="{{$product->spacial_price }}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-9">
                                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
@stop

@push('script')

    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>

    <script>
        var loadFile = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('output');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
    </script>

@endpush
