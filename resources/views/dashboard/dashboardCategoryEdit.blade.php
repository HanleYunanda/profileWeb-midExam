@extends('layouts.template-dashboard')

@section('content')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 border-bottom">
        <h1 class="h2">Categories</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
          </button>
        </div>
      </div>

      {{-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> --}}

      <div class="card mt-5 col-md-6 mb-5">
        <div class="card-body p-4">
            <h4 class="card-title text-center mb-4">Edit your category info here</h4>
            <form method="post" action="/dashboard/category/{{ $category->id }}">
                @method('put')
                @csrf
                <div class="container my-1">
                    <label for="form-name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="form-name" placeholder="Name" name="name" value="{{ old('name', $category->name) }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <div class="d-flex justify-content-end align-items-center mt-3">
                    <button type="submit" class="btn btn-primary me-1">Save</button>
                    <a href="/dashboard/category"><button type="button" class="btn btn-danger ms-1">Cancel</button></a>
                </div>
            </form>
        </div>
      </div>

    </main>

@endsection
