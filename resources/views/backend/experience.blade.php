@extends('backend.layouts.app')
@section('content')
<div class="content">
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <p class="breadcrumbs"><span><a href="{{ route('dashboard') }}">Dashboard</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Experiences</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Experiences</h2>
                </div>

                <div class="card-body">
                    <form class="row g-3" method="POST" action="{{ route('experience.update', $experiences->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row ec-vendor-uploads">
                            <div class="col-lg-12">
                                <div class="ec-vendor-upload-detail">
                                    <div class="form-group row mb-6">
                                        <div class="col-lg-6">
                                            <div class="card-img mx-auto rounded-circle">
                                                @if ($experiences->image != null)
                                                    <img width="50%" src="{{ asset('uploads/experience') }}/{{ $experiences->image }}" alt="image">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="coverImage"
                                            class="col-sm-4 col-lg-2 col-form-label">Profile Image <p style="font-size: 13px" class="text-secondary">Size max 1MB (Optional)</p></label>
                                            <div class="col-sm-4 col-lg-6">
                                                <div class="custom-file mb-1">
                                                    <input type="file" class="custom-file-input" name="image" id="coverImage" onchange="previewImage(event)">
                                                    <label class="custom-file-label" for="coverImage">Choose
                                                        file...</label>
                                                    <div class="invalid-feedback">Example invalid custom
                                                        file feedback</div>
                                                </div>
                                                @error('image')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-4 col-lg-4" style="height: 100px">
                                                <img id="preview" src="#" alt="Selected Image" style="display: none; max-width: 200px; max-height: 200px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3 mt-3">
                                        <div class="col-lg-12">
                                            <label for="title">Title <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required value="{{ $experiences->title }}">
                                            @error('title')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-3 mt-3">
                                        <div class="col-lg-6">
                                            <label for="subtitle">Subtitle <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('subtitle') is-invalid @enderror" id="subtitle" name="subtitle" required value="{{ $experiences->subtitle }}">
                                            @error('subtitle')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="experience">Experience <span class="text-danger">*</span></label>
                                            <input ttype="text" class="form-control @error('experience') is-invalid @enderror" id="experience" name="experience" required value="{{ $experiences->experience }}">
                                            @error('experience')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-3 mt-3">
                                        <div class="col-lg-6">
                                            <label for="list_one">List One <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('list_one') is-invalid @enderror" id="list_one" name="list_one" required value="{{ $experiences->list_one }}">
                                            @error('list_one')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="list_one_number">List One Number <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control @error('list_one_number') is-invalid @enderror" id="list_one_number" name="list_one_number" required value="{{ $experiences->list_one_number }}">
                                            @error('list_one_number')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-3 mt-3">
                                        <div class="col-lg-6">
                                            <label for="list_two">List Two <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('list_two') is-invalid @enderror" id="list_two" name="list_two" required value="{{ $experiences->list_two }}">
                                            @error('list_two')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="list_two_number">List Two Number <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control @error('list_two_number') is-invalid @enderror" id="list_two_number" name="list_two_number" required value="{{ $experiences->list_two_number }}">
                                            @error('list_two_number')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-3 mt-3">
                                        <div class="col-lg-6">
                                            <label for="list_three">List Three <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('list_three') is-invalid @enderror" id="list_three" name="list_three" required value="{{ $experiences->list_three }}">
                                            @error('list_three')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="list_three_number">List Three Number <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control @error('list_three_number') is-invalid @enderror" id="list_three_number" name="list_three_number" required value="{{ $experiences->list_three_number }}">
                                            @error('list_three_number')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-3 mt-3">
                                        <div class="col-md-12">
                                            <input type="hidden" name="id" value="{{ $experiences->id }}">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" required rows="4">{{ $experiences->description }}</textarea>
                                            @error('description')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <button type="submit" class="btn btn-primary">Submit</button>
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
@endsection
