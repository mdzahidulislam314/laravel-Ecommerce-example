@extends('admin.layouts.master')
@section('coupons') active @stop
@section('content')

    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3">Coupons</h1>

            <div class="row">
                <div class="col-md-12 col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-5">
                                    <form action="{{ route('coupons.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <label class="form-label">Coupon Code</label>
                                                <input type="text" class="form-control" name="code" value="{{ old('code') }}" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label d-block">Coupon Type</label>
                                                <select name="type" class="form-control">
                                                    <option value="" selected disabled>Select</option>
                                                    <option value="Fixed">Fixed</option>
                                                    <option value="Percent">Percent</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Value (fixed amount)</label>
                                                <input type="text" class="form-control" name="value" value="{{ old('value') }}" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Percent (%)</label>
                                                <input type="text" class="form-control" name="percent_off" value="{{ old('percent_off') }}" />
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
                                <div class="col-lg-7">
                                    <table class="table table-hover table-bordered table-sm">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Code</th>
                                            <th>Type</th>
                                            <th>value</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                            <tbody>
                                            @if($coupons->count() > 0)
                                                @foreach($coupons as $coupon)
                                                    <tr>
                                                        <td>{{$loop->index+ 1}}</td>
                                                        <td>{{$coupon->code}}</td>
                                                        <td>{{$coupon->type}}</td>
                                                        <td>
                                                            @if ($coupon->percent_off === null)
                                                                Tk.{{$coupon->value}}
                                                            @else
                                                                % {{$coupon->percent_off}}
                                                            @endif
                                                        </td>
                                                        <td>{{$coupon->status}}</td>
                                                        <td class="table-action d-flex align-items-center">
                                                            <a href="{{ route('coupons.edit', $coupon->id) }}"><i class="align-middle"
                                                                                                                              data-feather="edit-2"></i></a>
                                                            <form id="delete-form-{{$coupon->id}}"
                                                                  action="{{ route('coupons.destroy', $coupon->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                            </form>
                                                            <a class="ml-3" href="javascript:void(0);" onclick="deleteTable({{$coupon->id}})"><i class="align-middle"
                                                                                                                                                      data-feather="trash"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="6"><h4 class="text-center">No Coupons Found !</h4></td>
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