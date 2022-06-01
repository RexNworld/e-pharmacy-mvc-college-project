<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <title>Keita Tv admin</title>
    <link rel="stylesheet" href="../static/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="../static/css/styles.css">
    <script src="../static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/static/js/sijax/sijax.js"></script>
    <script type="text/javascript">
        { { g.sijax.get_js() | safe } }
    </script>
    <script type="text/javascript" src="/static/js/sijax/sijax_upload.js"></script>
    <script type="text/javascript">
        {{ form_init_js|safe }}
    </script>
</head>

<body id="page-top">
    <div id="wrapper">
        {% include "sidebar.html" %}
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <h3 class="text-dark mb-1">{{title}}</h3>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Admin</span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <span><b>ID:&nbsp;&nbsp;{{vid}}</b></span>
                    <form class="border rounded-pill" method="POST" enctype="multipart/form-data" name="EditEpsiodeForm" id="EditEpsiodeForm">
                        <input type="hidden" name="csrf_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" value="{{vid}}" required>
                        <label class="form-label" style="font-weight: bold;">Episode Name</label>
                        <input class="form-control" type="text" required="" autofocus="" name="episode_name" placeholder="ex: Episode 1" style="border-width: 1px;border-color: rgb(51,12,38);"><br>
                        <label class="form-label" style="font-weight: bold;">Episode Description: (Optional)</label>
                        <textarea class="form-control" name="episode_description" placeholder="Some info about the episode" rows="3" style="border-width: 1px;border-color: rgb(51,12,38);"></textarea>
                        <div class="row">
                            <div class="col">
                                <label class="form-label" style="font-weight: bold;">Duration</label>
                                <input class="form-control" type="text" name="duration" placeholder="00h 00m 00s" required="" style="border-color: rgb(51,12,38);">
                            </div>
                            <div class="col">
                                <label class="form-label" style="font-weight: bold;">Release Date</label>
                                <input class="form-control" type="datetime-local" required name="release_date" style="border-color: rgb(51,12,38);">
                            </div>
                        </div>
                        <label class="form-label" style="font-weight: bold;">thumbnail URL (320px X 240px)</label>
                        <input class="form-control" type="url" required="" name="thumbnail" style="border-color: rgb(51,12,38);">
                        <label class="form-label" style="font-weight: bold;">Resolutions</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">1080p</span>
                            <input type="url" class="form-control" placeholder="Enter 1080p URL" aria-label="1080p" name="1080p" style="border-color: rgb(51,12,38);" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">720p</span>
                            <input type="url" class="form-control" placeholder="Enter 720p URL" aria-label="720p" name="720p" style="border-color: rgb(51,12,38);" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">480p</span>
                            <input type="url" class="form-control" placeholder="Enter 480p URL" aria-label="480p" name="480p" style="border-color: rgb(51,12,38);" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">360p</span>
                            <input type="url" class="form-control" placeholder="Enter 360p URL" aria-label="360p" name="360p" style="border-color: rgb(51,12,38);" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">240p</span>
                            <input type="url" class="form-control" placeholder="Enter 240p URL" aria-label="240p" name="240p" style="border-color: rgb(51,12,38);" aria-describedby="basic-addon1">
                        </div>
                        <input type="submit" class="btn btn-primary d-block btn-user" style="margin: 10px 0;" value="upload" />
                    </form>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Keita Tv 2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>