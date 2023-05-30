{{-- @dd($profile) --}}
{{-- @dd($edu) --}}

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('landingPage/style.css') }}">

    <title>Home</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top py-4" id="navbar">
        <div class="container">
          <a class="navbar-brand me-5" href="/">
            <img src="{{ asset('landingPage/img/Logo.png') }}" class="img-fluid" alt="Logo">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#profile-section">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#resume-section">Experiences</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#contact-section">Contact</a>
              </li>
            </ul>
            @auth
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/dashboard">Dashboard</a>
                    </li>
                </ul>
            @else
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/login">Login</a>
                    </li>
                </ul>
            @endauth
          </div>
        </div>
      </nav>

      <section class="container-fluid position-relative p-0 mb-5" id="hero-section">
        <div class="container-fluid position-absolute h-100 w-100" id="hero-cover"></div>
        <div class="d-flex flex-column position-absolute bottom-0 end-0" id="hero-text">
            <span>Hi! I'm</span>
            <span>Hanley Yunanda</span>
            <span>a Fullstack Developer</span>
        </div>
        <img src="{{ asset('landingPage/img/Hero.png') }}" alt="Hero" class="hero-img w-100">
      </section>

      <section class="container mb-5 py-5" id="profile-section">
        <div class="row justify-content-center p-3 my-5">
            <div class="col-md-4 d-flex flex-column justify-content-center align-items-center p-3">
                <img src="{{ asset('storage/' . $profile->image) }}" alt="Profile Picture" class="profile-picture img-fluid">
            </div>
            <div class="col-md-7 d-flex flex-column justify-content-center align-items-center mx-3">
                <h1 class="mt-5 mb-3">My Profile</h1>
                <div class="row justify-content-between">
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
                </div>
            </div>
        </div>
      </section>

      <section class="container mb-5 py-5 d-flex flex-column justify-content-center align-items-center" id="edu-section">
        <h1 class="mb-5">Education</h1>
        <div class="row container g-5">
            @foreach ($educations as $edu)
            <div class="col-lg-6">
                <div class="row p-3 edu-container">
                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('storage/' . $edu->image) }}" alt="{{ 'Logo ' . $edu->name }}" class="img-fluid edu-logo">
                    </div>
                    <div class="col-md-8 d-flex flex-column">
                        <span class="fs-6">{{ $edu->year }}</span>
                        <span class="fs-4 fw-bolder">{{ $edu->name }}</span>
                        <span class="fs-6 fw-bold edu-desc">{{ $edu->desc}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
      </section>

      <section class="container-fluid mb-5 py-5 d-flex flex-column justify-content-center align-items-center" id="skill-container">
        <div class="container d-flex justify-content-center mb-3 mt-5">
            <h1>Skills</h1>
        </div>
        <div class="container row mb-5">
            <div class="col-md-6 my-3">
                <h3>Hardskills</h3>
                @foreach ($hardskills as $hardskill)
                <div class="container my-2">
                    <h5 class="mb-1">{{ $hardskill->name }}</h5>
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="{{ $hardskill->value }}" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-info" style="width: {{ $hardskill->value }}%"></div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-6 my-3">
                <h3>Softskills</h3>
                @foreach ($softskills as $softskill)
                <div class="container my-2">
                    <h5 class="mb-1">{{ $softskill->name }}</h5>
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="{{ $softskill->value }}" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-info" style="width: {{ $softskill->value }}%"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
      </section>

      <section class="container mb-5 py-5 pb-5 d-flex flex-column justify-content-center align-items-center" id="resume-section">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="container d-flex flex-column justify-content-center align-items-center">
                <h1 class="mb-4 mt-5">My Expreiences</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="resume-title">Binus Univeristy</h3>
                    @foreach ($expBinus as $binus)
                    <div class="resume-item">
                        <h4>{{ $binus->title }}</h4>
                        <h5>{{ $binus->period }}</h5>
                        {!! $binus->desc !!}
                    </div>
                    @endforeach
                </div>
                <div class="col-lg-6">
                    <h3 class="resume-title">HIMTI</h3>
                    @foreach ($expHimti as $himti)
                    <div class="resume-item">
                        <h4>{{ $himti->title }}</h4>
                        <h5>{{ $himti->period }}</h5>
                        {!! $himti->desc !!}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
      </section>

      <section class="container mb-5 py-5 pb-5 d-flex flex-column justify-content-center align-items-center" id="contact-section">
        <div class="container col-md-8 p-5">
            <h1 class="text-center mb-3">Contact Me</h1>
            <form action="/saveMessage" method="post">
                @csrf
                <div class="mb-3">
                    <label for="form-email" class="form-label">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="form-email" placeholder="name@example.com" name="email">
                    @error('email')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="form-name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="form-name" placeholder="Name" name="name">
                    @error('name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="form-subject" class="form-label">Subject</label>
                    <input type="text" class="form-control @error('subject') is-invalid @enderror" id="form-subject" placeholder="Subject" name="subject">
                    @error('subject')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="form-message" class="form-label">Message</label>
                    <textarea class="form-control @error('message') is-invalid @enderror" id="form-message" rows="5" placeholder="Place your message here..." name="message"></textarea>
                    @error('message')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <button type="submit" class="btn btn-primary me-1">Save</button>
                  </div>
            </form>
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
        </div>
      </section>



      <footer class="container-fluid footer p-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h5 class="mb-4">You can find me here</h5>
                    <div class="row ms-3">
                        <div class="col-md-6">
                            <a href="mailto:hanley.saputra@binus.ac.id"><i class="bi bi-envelope-at"></i><h6 class="d-inline-flex ms-2">Email</h6></a>
                        </div>
                        <div class="col-md-6">
                            <a href="https://wa.me/6285156678285"><i class="bi bi-whatsapp"></i><h6 class="d-inline-flex ms-2">Whatsapp</h6></a>
                        </div>
                        <div class="col-md-6">
                            <a href="https://id.linkedin.com/in/hanley-yunanda-saputra-639a51223"><i class="bi bi-linkedin"></i><h6 class="d-inline-flex ms-2">Linkedin</h6></a>
                        </div>
                        <div class="col-md-6">
                            <a href="https://github.com/HanleYunanda"><i class="bi bi-github"></i><h6 class="d-inline-flex ms-2">GitHub</h6></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('landingPage/img/Logo.png') }}" class="img-fluid mt-4" alt="Logo">
                </div>
            </div>
        </div>
      </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
