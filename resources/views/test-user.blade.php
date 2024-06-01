<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PICT - CTF</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/bootstrap4-neon-glow.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
    <link rel="stylesheet" href="{{ asset('css/particles.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>
    <style>
        .bg-sidebar {
            background-color: #1c1c1c; /* Sesuaikan dengan warna sidebar */
        }
    </style>
</head>
<body>
    <div id="particles-js"></div>
    <div class="navbar-dark text-white">
        <div class="container">
            <nav class="navbar px-0 navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="#"><span class="text-danger">CTFin</span><span class="text-white">AJA</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2 navbar-search-input" type="search" placeholder="Cari..." aria-label="Search">
                        <button class="btn navbar-search-button my-2 my-sm-0" type="submit">Cari</button>
                    </form>
                </div>
            </nav>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="sidebar bg-sidebar">
                    <div class="user-info text-center">
                        <img src="{{ asset('img/sample_placeholder.png') }}" alt="User Image" class="img-fluid rounded-circle">
                        <h4 class="mt-2">Name User</h4>
                    </div>
                    <ul class="nav flex-column mt-4">
                        <li class="nav-item">
                            <a class="nav-link " href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Challenges</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Scoreboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Notification</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Settings</li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card bg-sidebar text-white">
                    <div class="card-body">
                        <h3 class="card-title">Investigasi Pelaku</h3>
                        <p class="card-text">Forensic & Stegano | 30 point</p>
                        <p class="card-text">Anda adalah seorang digital forensik investigator yang menangani kasus peretasan satelit Cibiru606 oleh MR.Bucchaereli. Anda diberikan sebuah bahan petunjuk oleh informan rekan Anda, Anda diminta untuk melacak perangkat yang digunakan oleh peretas yang bernama MR.Bucchaereli itu.</p>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="CTFinAJA{*}">
                            </div>
                            <button type="submit" class="btn btn-primary">SUBMIT</button>
                        </form>
                        <div class="mt-3">
                            <button class="btn btn-success">Download</button>
                            <button class="btn btn-success">Get HINT</button>
                        </div>
                    </div>
                </div>
                <div class="card bg-sidebar text-white mt-4">
                    <div class="card-body">
                        <h4 class="card-title">Recent Solvers</h4>
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>abaykansaja</td>
                                    <td>Feb/17th, 00:53:47</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Asep</td>
                                    <td>Feb/21st, 13:09:45</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Riza</td>
                                    <td>Feb/21st, 23:54:13</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Faizal</td>
                                    <td>Feb/21st, 23:54:13</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Jkul</td>
                                    <td>Feb/21st, 23:54:13</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="{{ asset('js/particles.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>