{{-- @dd($exp) --}}
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

      <div class="card col-md-6">
        <div class="card-body">
            <form method="post" action="/dashboard/category/">
            @csrf
                <div class="container row">
                    <div class="col-md-10">
                        <label for="form-name" class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="form-name" placeholder="Name" value="{{ old('name') }}" name="name">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-8 mt-3 d-flex justify-content-end align-items-center">
                        <button type="submit" class="btn btn-primary me-1">Save</button>
                        <a href="/dashboard/category"><button type="button" class="btn btn-danger ms-1">Cancel</button></a>
                    </div>
                </div>
            </form>
        </div>
      </div>

    </main>

@endsection
