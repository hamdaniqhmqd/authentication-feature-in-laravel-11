<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="{{ asset('css/dashboardAdmin.css') }}">
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="{{ asset('asset/' . $manager->gambar) }}" alt="">
            </div>

            <span class="logo_name">CodingLab</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links" style="padding-left: 0">
                <li>
                    <a href="{{ route('manager/dashboard') }}">
                        <i class='bx bxs-dashboard'></i>
                        <span class="link-name">Dahsboard</span>
                    </a>
                </li>
            </ul>

            <ul class="logout-mode" style="padding-left: 0">
                <li>
                    <a href="{{ url('/logout') }}">
                        <i class='bx bx-log-out'></i>
                        <span class="link-name">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class='bx bx-menu sidebar-toggle'></i>

            <div class="profile">
                <span class="admin-name">{{ $manager->nama }}</span>
                <img src="{{ asset('asset/' . $manager->gambar) }}" alt="">
            </div>
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard {{ $manager->role }} {{ $manager->nama }}</span>
                </div>
            </div>
        </div>
    </section>


    <script src="script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="{{ asset('js/dashboardAdmin.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if (session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif (session('error'))
            Swal.fire({
                icon: "error",
                title: "PERINGATAN",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    </script>
</body>

</html>
