@extends('admin.layouts.master')
@section('products-menu') active @stop
@section('show') show @stop
@section('all-products') active @stop

@section('content')

<main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-flex align-items-center">
                    <h2>All Products</h2>
                    <a href="{{route('products.create')}}" class="btn btn-primary ml-3">Add Product</a>
                </div>
            </div>

        <div class="cotainer-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th width="20px">Image</th>
                                    <th width="30px">Name</th>
                                    <th width="20px">Price</th>
                                    <th width="10px">Status</th>
                                    <th width="20px">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($products->count() > 0)
                                    @foreach($products as $product)
                                        <tr>
                                            <td>
                                                <img src="/{{ $product->image }}" alt="image" style="width:100px;">
                                            </td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>
                                                @if ($product->is_enable === 1)
                                                    <span class="text-success"><i class="fas fa-circle"></i></span>
                                                @else($product->is_enable === 0)
                                                    <span class="text-danger"><i class="fas fa-circle"></i></span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                                                <button class="btn btn-danger" type="button" onclick="deleteTable({{$product->id}})">
                                                    Delete
                                                </button>

                                                <form id="delete-form-{{$product->id}}"
                                                      action="{{ route('products.destroy', $product->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4"><h4 class="text-center">No Product Found !</h4></td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
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