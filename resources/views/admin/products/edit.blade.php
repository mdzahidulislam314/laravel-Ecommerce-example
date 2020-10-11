@extends('admin.layouts.master')
@section('products-menu') active @stop
@section('show') show @stop
@section('add-products') active @stop

@section('css')
    <style>
        .gallery img {
            width: 140px;
            height: 100px;
            margin: 0 8px;
            margin-top: 8px;
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- Tabs navs -->
                                <ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="ex1-tab-1" data-toggle="tab" href="#ex1-tabs-1"
                                           role="tab" aria-controls="ex1-tabs-1" aria-selected="true">General</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="ex1-tab-2" data-toggle="tab" href="#ex1-tabs-2"
                                           role="tab" aria-controls="ex1-tabs-2" aria-selected="false">Price</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="ex1-tab-3" data-toggle="tab" href="#ex1-tabs-3"
                                           role="tab" aria-controls="ex1-tabs-3" aria-selected="false">Images</a>
                                    </li>
                                </ul>
                                <!-- Tabs navs -->

                                <!-- Tabs content -->
                                <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    @method('PUT')
                                    <div class="tab-content" id="ex1-content">
                                        <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <div class="form-wrapper mt-5 mb-5">
                                                        <form>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Product Name</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="name" value="{{ $product->name }}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="" class="col-sm-2 col-form-label">Product Details</label>
                                                                <div class="col-sm-10">
                                                                <textarea type="text" class="form-control ckeditor" name="details"  rows="5">{{ $product->details }}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="" class="col-sm-2 col-form-label">Product Description</label>
                                                                <div class="col-sm-10">
                                                                    <textarea type="text" class="form-control ckeditor" name="description"  rows="3">{{ $product->description }}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Product Quantity</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" name="quantity" value="{{ $product->quantity }}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-2 col-form-label"> Brand </label>
                                                                <div class="col-sm-10">
                                                                    <select name="brand_id" class="form-control">
                                                                        <option value="" disabled selected>Please Select</option>
                                                                        @foreach($brands as $brand)
                                                                            <option value="{{$brand->id}}" {{ ( $product->brand_id == $brand->id) ? 'selected' : '' }}>
                                                                                {{$brand->name}}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-2 col-form-label"> Categories </label>
                                                                <div class="col-sm-10">
                                                                    <select name="cat_id[]" class="form-control js-example-basic-multiple">
                                                                        <option value="" disabled selected>Please Select</option>
                                                                        @foreach($categories as $category)
                                                                            <option value="{{$category->id}}"
                                                                                    {{ ( $product->cat_id == $category->id) ? 'selected' : '' }}>
                                                                                {{$category->name}}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-2"></div>
                                                                <div class="col-sm-10">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="gridCheck1" name="is_enable"
                                                                               value="0" {{ ( $product->is_enable == true) ? 'checked' : '' }}>
                                                                        <label class="form-check-label" for="gridCheck1">
                                                                            Status
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-2"></div>
                                                                <div class="col-sm-10">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="gridCheck1" name="featured"
                                                                               value="0" {{ ( $product->featured == true) ? 'checked' : '' }}>
                                                                        <label class="form-check-label" for="gridCheck1">
                                                                            Feature
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-2"></div>
                                                                <div class="col-sm-10">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="gridCheck1" name="hot_deal"
                                                                               value="0" {{ ( $product->hot_deal == true) ? 'checked' : '' }}>
                                                                        <label class="form-check-label" for="gridCheck1">
                                                                            Hot Deal
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-10">
                                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <div class="form-wrapper mt-5 mb-5">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label"><b>Regular Price</b></label>
                                                            <div class="col-sm-10">
                                                                <input type="number" class="form-control" name="price" value="{{$product->price}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label"><b>Spacial Price</b></label>
                                                            <div class="col-sm-10">
                                                                <input type="number" class="form-control" name="spacial_price" value="{{$product->spacial_price }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-10">
                                                                <button type="submit" class="btn btn-primary">Save</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <div class="form-wrapper mt-5 mb-5">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label"><b>Base Image</b></label>
                                                            <div class="col-sm-10">
                                                                 <span class="btn btn-primary d-block">
                                                                    <input class="d-block" type="file" name="image" accept="image/*" onchange="loadImage(event)" id="image">
                                                                </span>
                                                                <div class="show-img text-center">
                                                                    <div class="old-img d-inline-block mr-5">
                                                                        <h5>Old-></h5>
                                                                        @if (isset($product->image))
                                                                            <img height="100" width="140" src="{{ asset($product->image) }}"/>
                                                                        @endif
                                                                    </div>
                                                                    <div class="new-img d-inline-block">
                                                                        <h5>New-></h5>
                                                                        <img height="100" width="140" id="output"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label"><b>Additional Image</b></label>
                                                            <div class="col-sm-10">
                                                                 <span class="btn btn-primary d-block">
                                                                    <input class="d-block" type="file" name="images[]" id="gallery-photo-add" multiple>
                                                                </span>
                                                                <div class="show-img text-center">
                                                                    <div class="old-img d-inline-block">
                                                                        <h5>Old-></h5>
                                                                        @if (isset($product->images))
                                                                            @foreach (json_decode($product->images) as $image)
                                                                                <img height="100" width="140" src="{{ asset($image) }}"/>
                                                                            @endforeach
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="show-img text-center">
                                                                    <div class="new-img d-inline-block">
                                                                        <h5>New-></h5>
                                                                        <div class="gallery"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-10">
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
                                <!-- Tabs content -->
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
        $(function() {
            // Multiple images preview in browser
            var imagesPreview = function(input, placeToInsertImagePreview) {
                console.log(imagesPreview);
                if (input.files) {
                    var filesAmount = input.files.length;

                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();

                        reader.onload = function(event) {
                            $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                        }
                        reader.readAsDataURL(input.files[i]);
                    }
                }
            };

            $('#gallery-photo-add').on('change', function() {
                imagesPreview(this, 'div.gallery');
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>

@endpush
