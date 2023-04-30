@extends('layouts.template-dashboard')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
          </button>
        </div>
      </div>

      {{-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> --}}

      <div class="card mt-5">
        <div class="card-body p-4">
            <h4 class="card-title text-center mb-4">Edit your profile here</h4>
            <form method="post" action="/dashboard/profile/{{ $profile->id }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="row justify-content-between">
                    <div class="col-md-6 my-1">
                        <label for="form-name" class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="form-name" placeholder="Name" value="{{ old('name', $profile->name) }} " name="name">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 my-1">
                        <label for="form-age" class="form-label">Age</label>
                        <input type="text" class="form-control @error('age') is-invalid @enderror" id="form-age" placeholder="Age" value="{{ old('age', $profile->age) }}" name="age">
                        @error('age')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 my-1">
                        <label for="form-name" class="form-label">Birthday</label>
                        <input type="text" class="form-control @error('birthday') is-invalid @enderror" id="form-birthday" placeholder="Birthday" value="{{ old('birthday', $profile->birthday) }}" name="birthday">
                        @error('birthday')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 my-1">
                        <label for="form-address" class="form-label">Address</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="form-address" placeholder="Address" value="{{ old('address', $profile->address) }}" name="address">
                        @error('address')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 my-1">
                        <label for="form-status" class="form-label">Status</label>
                        <input type="text" class="form-control @error('status') is-invalid @enderror" id="form-status" placeholder="Status" value="{{ old('status', $profile->status) }}" name="status">
                        @error('status')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 my-1">
                        <label for="form-job" class="form-label">Job</label>
                        <input type="text" class="form-control @error('job') is-invalid @enderror" id="form-job" placeholder="Job" value="{{ old('job', $profile->job) }}" name="job">
                        @error('job')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 my-1">
                        <label for="form-email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="form-email" placeholder="Email@example.com" value="{{ old('email', $profile->email) }}" name="email">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 my-1">
                        <label for="form-phone" class="form-label">Phone</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="form-phone" placeholder="Phone" value="{{ old('phone', $profile->phone) }}" name="phone">
                        @error('phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 my-1 mx-auto">
                        <label for="form-image" class="form-label">Profile Picture</label>
                        @if ($profile->image)
                            <img class="img-preview img-fluid mb-3 col-sm-6 d-flex rounded" src="{{ asset('storage/' . $profile->image) }}">
                        @else
                            <img class="img-preview img-fluid mb-3 col-sm-6 d-flex rounded">
                        @endif
                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="form-image" name="image" onchange="previewImage()">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="d-flex justify-content-end align-items-center mt-3">
                    <button type="submit" class="btn btn-primary me-1">Save</button>
                    <a href="/dashboard/profile"><button type="button" class="btn btn-danger ms-1">Cancel</button></a>
                </div>
            </form>
        </div>
      </div>

    </main>

@endsection
