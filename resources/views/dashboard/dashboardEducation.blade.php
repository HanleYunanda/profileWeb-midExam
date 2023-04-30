@extends('layouts.template-dashboard')

@section('content')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 border-bottom">
        <h1 class="h2">Education</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
          </button>
        </div>
      </div>

      {{-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> --}}

      <div class="card" id="education-section">
        <div class="card-body p-3 d-flex justify-content-center align-items-center row">
            @foreach ($educations as $edu)
                <div class="card m-2 col-lg-4 col-md-5">
                    <div class="container mt-4 d-flex justify-content-center">
                        <img src="{{ asset('storage/' . $edu->image) }}" class="img-fluid" alt="{{ $edu->name }}">
                    </div>
                    <div class="card-body">
                    <h5 class="card-title">{{ $edu->name }}</h5>
                    <p class="card-text">{{ $edu->desc }}</p>
                    <a href="/dashboard/education/{{ $edu->id }}/edit"><button type="button" class="btn btn-primary px-3"><i class="bi bi-pencil-square me-1"></i>Edit</button></a>
                    </div>
                </div>
            @endforeach
        </div>
      </div>

    </main>

@endsection
