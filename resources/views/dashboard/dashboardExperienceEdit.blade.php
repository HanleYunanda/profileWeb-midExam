{{-- @dd($exp) --}}
@extends('layouts.template-dashboard')

@section('content')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 border-bottom">
        <h1 class="h2">Experiences</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
          </button>
        </div>
      </div>

      {{-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> --}}

      <div class="card">
        <div class="card-body">
            <form method="post" action="/dashboard/experience/{{ $exp->id }}">
            @method('put')
            @csrf
                <div class="container row">
                    <div class="col-md-8">
                        <label for="form-title" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="form-title" placeholder="Title" value="{{ old('title', $exp->title) }}" name="title">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-8">
                        <label for="form-period" class="form-label">Period</label>
                        <input type="text" class="form-control @error('period') is-invalid @enderror" id="form-period" placeholder="Period" value="{{ old('period', $exp->period) }}" name="period">
                        @error('period')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-8">
                        <label for="form-category" class="form-label">Category</label>
                        @error('category')
                        <p class="text-danger m-0">{{ $message }}</p>
                        @enderror
                        <select class="form-select" name="category_id" id="form-category">
                            @for ($i=0; $i<=1; $i++)
                                @if (old('category', $exp->category_id) == $typeExp[$i]->id)
                                    <option value="1" selected>{{ $typeExp[$i]->name }}</option>
                                @else
                                    <option value="2">{{ $typeExp[$i]->name }}</option>
                                @endif
                            @endfor
                          </select>
                    </div>
                    <div class="col-md-8">
                        <label for="form-desc" class="form-label">Description</label>
                        @error('desc')
                            <p class="text-danger m-0">{{ $message }}</p>
                        @enderror
                        <input type="hidden" name="desc" id="form-desc" value="{{ old('desc', $exp->desc) }}">
                        <trix-editor input="form-desc"></trix-editor>
                    </div>
                    <div class="col-md-8 mt-3 d-flex justify-content-end align-items-center">
                        <button type="submit" class="btn btn-primary me-1">Save</button>
                        <a href="/dashboard/experience"><button type="button" class="btn btn-danger ms-1">Cancel</button></a>
                    </div>
                </div>
            </form>
        </div>
      </div>

    </main>

@endsection
