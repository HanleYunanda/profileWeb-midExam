<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- Bootstrap core CSS = assets/dist/css/bootstrap.min.css -->
    <link href="{{ asset('admin/assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- Trix CSS -->
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('admin/dashboard.css') }}" rel="stylesheet">

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>

  </head>

  <body>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3 pb-5 px-3 d-flex flex-column justify-content-between h-100">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is("dashboard/profile*") ? 'active' : '' }}" href="/dashboard/profile">
                        <i class="bi bi-person-circle"></i>
                        Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/education*') ? 'active' : '' }}" href="/dashboard/education">
                        <i class="bi bi-mortarboard-fill"></i>
                        Education
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is("dashboard/skill*") ? 'active' : '' }}" href="/dashboard/skill">
                        <i class="bi bi-person-fill-gear"></i>
                        Skills
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is("dashboard/experience*") ? 'active' : '' }}" href="/dashboard/experience">
                        <i class="bi bi-journals"></i>
                        Experiences
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is("dashboard/message*") ? 'active' : '' }}" href="/dashboard/message">
                        <i class="bi bi-chat-left-dots"></i>
                        Messages
                        </a>
                    </li>
                </ul>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="/" id="landingPage-link" style="color: green">
                        <i class="bi bi-arrow-left-circle"></i>
                        Go to Landing Page
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout" id="logout-link" style="color: red">
                        <i class="bi bi-box-arrow-right"></i>
                        Logout
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

    @yield('content')

    </div>
</div>

    <!-- Bootstrap core JS = assets/dist/js/bootstrap.bundle.min.js -->
    <script src="{{ asset('admin/assets/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>

    <!-- Trix JS -->
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

    <script>
        function previewImage() {
            const image = document.querySelector('#form-image');
            const imgPreveiw = document.querySelector('.img-preview');

            // imgPreveiw.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreveiw.src = oFREvent.target.result;
            }
        }

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

        const range = document.getElementById('form-value');
        const percentage = document.getElementById('value-percentage');

        range.addEventListener('change', (e) => {
        const percentageValue = e.target.value;
        percentage.textContent = percentageValue;
        });
    </script>

    <!-- Custom script for this template -->
    <script src="{{ asset('admin/dashboard.js') }}"></script>
  </body>
</html>

