@extends('layouts.template-dashboard')

@section('content')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
          </button>
        </div>
      </div>

      {{-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> --}}

      <div class="card">
        <div class="card-body table-responsive">
            <table class="table table-striped table-hover mt-3">
                <thead>
                    <tr>
                      <th scope="col">No.</th>
                      <th scope="col">Name</th>
                      <th scope="col">Subject</th>
                      <th scope="col">Email</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($messages as $msg)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $msg->name }}</td>
                        <td>{{ $msg->subject }}</td>
                        <td>{{ $msg->email }}</td>
                        <td>
                            <a href="/dashboard/message/{{ $msg->id }}"><button type="button" class="btn btn-primary"><i class="bi bi-eye"></i></i></button></a>
                            <form action="/dashboard/message/{{ $msg->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
              </table>
        </div>
      </div>

    </main>

@endsection
