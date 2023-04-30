@extends('layouts.template-dashboard')

@section('content')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 border-bottom">
        <h1 class="h2">Skill</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
          </button>
        </div>
      </div>

      {{-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> --}}

      <div class="card">
        <div class="card-body row table-responsive">
            <div class="col-lg-6 p-3">
                <div class="container text-center">
                    <h3>Hardskills</h3>
                </div>
                <a href="/dashboard/skill/create"><button type="button" class="btn btn-success"><i class="bi bi-plus"></i>Add New</button></a>
                <table class="table table-striped table-hover mt-3">
                    <thead>
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Skill</th>
                        <th scope="col">Value</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hardskills as $hardskill)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{$hardskill->name }}</td>
                            <td>{{$hardskill->value }}%</td>
                            <td>
                                <a href="/dashboard/skill/{{$hardskill->id }}/edit"><button type="button" class="btn btn-primary"><i class="bi bi-pencil-square"></i></button></a>
                                <form action="/dashboard/skill/{{$hardskill->id }}" method="post" class="d-inline">
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
            <div class="col-lg-6 p-3">
                <div class="container text-center">
                    <h3>Softskills</h3>
                </div>
                <a href="/dashboard/skill/create"><button type="button" class="btn btn-success"><i class="bi bi-plus"></i>Add New</button></a>
                <table class="table table-striped table-hover mt-3">
                    <thead>
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Skill</th>
                        <th scope="col">Value</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($softskills as $softskill)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{$softskill->name }}</td>
                            <td>{{$softskill->value }}%</td>
                            <td>
                                <a href="/dashboard/skill/{{$softskill->id }}/edit"><button type="button" class="btn btn-primary"><i class="bi bi-pencil-square"></i></button></a>
                                <form action="/dashboard/skill/{{$softskill->id }}" method="post" class="d-inline">
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
      </div>

    </main>

@endsection
