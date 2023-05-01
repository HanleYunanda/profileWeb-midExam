@extends('layouts.template-dashboard')

@section('content')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 border-bottom">
        <h1 class="h2">Messages</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
          </button>
        </div>
      </div>

      {{-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> --}}

      <div class="card col-lg-7 col-md-9">
        <div class="card-body">
            <div class="col-12">
                <h5>From : {{ $msg->name }}</h5>
                <h5>Email : {{ $msg->email }}</h5>
                <h5>Subject : {{ $msg->subject }}</h5>
                <h6>Message :</h6>
                <p>{{ $msg->message }}</p>
            </div>
        </div>
      </div>

    </main>

@endsection
