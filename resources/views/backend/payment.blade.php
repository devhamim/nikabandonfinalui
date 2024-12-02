@extends('backend.layouts.app')
@section('content')
<div class="content">
    <div class="breadcrumb-wrapper breadcrumb-contacts">
        <div>
            <h1>Payment List</h1>
            <p class="breadcrumbs"><span><a href="{{ route('dashboard') }}">Dashboard</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Payment
            </p>
        </div>
        {{-- <div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#addclient"> Add Payment
            </button>
        </div> --}}
    </div>

    <div class="row">
        <div class="col-12">
            <div class="ec-vendor-list card card-default">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="responsive-data-table" class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Packages</th>
                                    <th>Payment</th>
                                    <th>Number</th>
                                    <th>Trxid</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($payments as $payment)
                                    <tr>
                                        <td>
                                            @if ($payment->name != null)
                                                {{ $payment->name }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>
                                            {{ $payment->rel_to_package->name }}
                                        </td>
                                        <td>{{ $payment->payment }}</td>
                                        <td>{{ $payment->number }}</td>
                                        <td>{{ $payment->trxid }}</td>
                                        <td>{{ $payment->message }}</td>
                                        <td>
                                            @if ($payment->status == 1)
                                                <div class="badge badge-success">Active</div>
                                            @else
                                                <div class="badge badge-danger">Deactive</div>
                                            @endif
                                        </td>
                                        <td>{{ $payment->created_at->format('d-m-Y') }}</td>
                                        <td>
                                            <div class="btn-group mb-1">
                                                <button type="button"
                                                    class="btn btn-outline-success">Info</button>
                                                <button type="button"
                                                    class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static">
                                                    <span class="sr-only">Info</span>
                                                </button>

                                                <div class="dropdown-menu">
                                                    <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editclient{{ $payment->id }}">
                                                        Edit
                                                    </button>
                                                    <form action="{{ route('payment.destroy',  $payment->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to delete this item?')">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                        <!-- Edit User Modal  -->

                                    <div class="modal fade modal-add-contact" id="editclient{{ $payment->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content">
                                                <form action="{{ route('payment.update', $payment->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-header px-4">
                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Payment</h5>
                                                    </div>
                                                    <input id="customer_id" name="customer_id" value="{{ $payment->customer_id }}" type="hidden" >
                                                    <input id="packages" name="packages" value="{{ $payment->id }}" type="hidden" >
                                                    <div class="modal-body px-4">
                                                        <div class="row mb-2">
                                                            <div class="col-lg-6">
                                                                <div class="form-group mb-4">
                                                                    <label for="name">Name <span class="text-danger">*</span></label>
                                                                    <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $payment->name }}">
                                                                    @error('name')
                                                                        <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-lg-6">
                                                                <div class="form-group mb-4">
                                                                    <label for="status">Status</label>
                                                                    <select name="status" id="status" class="form-control">
                                                                        <option value="1"{{ $payment->status == 1?'selected':'' }}>Active</option>
                                                                        <option value="0"{{ $payment->status == 0?'selected':'' }}>Deactive</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer px-4">
                                                        <button type="button" class="btn btn-secondary btn-pill"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-primary btn-pill">Save Contact</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add package Modal  -->
    {{-- <div class="modal fade modal-add-contact" id="addclient" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <form action="{{ route('payment.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header px-4">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Add New Premium Package</h5>
                    </div>

                    <div class="modal-body px-4">
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name">Package Name <span class="text-danger">*</span></label>
                                    <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                                    @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="discount_price">Discount Price <span class="text-danger">*</span></label>
                                    <input type="text" id="discount_price" class="form-control @error('discount_price') is-invalid @enderror" name="discount_price" value="{{ old('discount_price') }}">
                                    @error('discount_price')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="price">Price <span class="text-danger">*</span></label>
                                    <input type="text" id="price" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}">
                                    @error('price')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="validity">Validity <span class="text-danger">*</span></label>
                                    <input type="text" id="validity" class="form-control @error('validity') is-invalid @enderror" name="validity" value="{{ old('validity') }}">
                                    @error('validity')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="interested">Interested <span class="text-danger">*</span></label>
                                    <input type="text" id="interested" class="form-control @error('interested') is-invalid @enderror" name="interested" value="{{ old('interested') }}">
                                    @error('interested')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                           
                        </div>
                    </div>

                    <div class="modal-footer px-4">
                        <button type="button" class="btn btn-secondary btn-pill"
                            data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary btn-pill">Save Contact</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
    <!-- Add User Modal end -->
</div>
@endsection
