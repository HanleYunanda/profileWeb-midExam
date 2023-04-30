@extends('layouts.template-dashboard')

@section('content')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 border-bottom">
        <h1 class="h2">Profile</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
          </button>
        </div>
      </div>

      {{-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> --}}

      <div class="card col-lg-8">
        <div class="card-body row">
            <div class="col-md-12 d-flex justify-content-center mb-3">
                <img src="{{ asset('storage/' . $profile->image) }}" alt="Profile Pictures" class="img-fluid profile-picture rounded">
            </div>
            <div class="col-md-6">
                <p>Name : {{ $profile["name"] }}</p>
            </div>
            <div class="col-md-6">
                <p>Age : {{ $profile["age"] }}</p>
            </div>
            <div class="col-md-6">
                <p>Birthday : {{ $profile["birthday"] }}</p>
            </div>
            <div class="col-md-6">
                <p>Address : {{ $profile["address"] }}</p>
            </div>
            <div class="col-md-6">
                <p>Status : {{ $profile["status"] }}</p>
            </div>
            <div class="col-md-6">
                <p>Job : {{ $profile["job"] }}</p>
            </div>
            <div class="col-md-6">
                <p>Email : {{ $profile["email"] }}</p>
            </div>
            <div class="col-md-6">
                <p>Phone : {{ $profile["phone"] }}</p>
            </div>
            <div class="container d-flex justify-content-end mt-5">
                <a href="/dashboard/profile/{{ $profile->id }}/edit"><button type="button" class="btn btn-primary px-3"><i class="bi bi-pencil-square me-1"></i>Edit</button></a>
            </div>
        </div>
      </div>

    </main>

@endsection
