<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Zairito</title>

    <link rel="shortcut icon" href="{{ asset('favicon/favicon.png') }}" type="image/x-icon">

    <link rel="apple-touch-icon" href="{{ asset('favicon/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/summernote-bs4.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/image-preview.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/summernote.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/summernote-lite.min.css') }}">
    <link href="{{ asset('css/extra.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/cookie-consent.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="sidebar__area">
        <div class="sidebar__close">
            <button class="close-btn">
                <i class="fa fa-close"></i>
            </button>
        </div>
        <div class="sidebar__brand">
            <a href="dashboard">
                <img src="/logo/footer-logo.png" alt="icon">
            </a>
        </div>
       @include('include.sidebar');
    </div>

    <div class="main-content">

        <header class="header__area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header__navbar">
                            <div class="header__navbar__left">
                                <button class="sidebar-toggler">
                                    <img src="/images/icons/header/bars.svg" alt="">
                                </button>
                                <a href="https://zairito.zainikthemes.com" target="_blank"
                                    class="btn btn-primary text-white">Visit Site</a>
                            </div>
                            <div class="header__navbar__right">
                                <ul class="header__menu">
                                    <li>
                                        <a href="#" class="btn btn-dropdown user-profile"
                                            data-bs-toggle="dropdown">
                                            <img src="/admin_profile/profile.png" alt="icon">
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="profile">
                                                    <img src="/images/icons/user.svg" alt="icon">
                                                    <span>Profile</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);"
                                                    data-bs-toggle="modal" data-bs-target="#logoutModal">
                                                    <img src="/images/icons/logout.svg" alt="icon">
                                                    <span>Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="page-content-wrap">

            @yield('content')

            <footer class="footer__area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer__copyright">
                                <div class="footer__copyright__left">
                                    <h2>2023 &copy; Zairito</h2>
                                </div>
                                <div class="footer__copyright__right">
                                    <h2>Designed &amp; Developed By Zainiktheme</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
    </div>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary me-2"
                        data-bs-dismiss="modal">Cancel</button>
                    <a href="logout" class="btn btn-primary">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('js/popper.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('summernote-bs4.min.js')}}"></script>
    <script src="{{ asset('summernote-init.js')}}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('js/custom/data-table-page.js')}}"></script>
    <script src="{{ asset('select2.min.js')}}"></script>
    <script src="{{ asset('js/metisMenu.min.js')}}"></script>
    <script src="{{ asset('js/image-preview.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
    <script src="{{ asset('js/custom.js')}}"></script>
    <script src="{{ asset('js/summernote-lite.min.js')}}"></script>
    <script src="{{ asset('js/toastr.min.js')}}"></script>
    <script src="{{ asset('chart.min.js')}}"></script>
    <script src="{{ asset('dashboard.js')}}"></script>
    <script>
        multipleLineChart = document.getElementById('multipleLineChart').getContext('2d'),
            multipleLineChart2 = document.getElementById('multipleLineChart2').getContext('2d')

        var myMultipleLineChart = new Chart(multipleLineChart, {
            type: 'bar',
            data: {
                labels: ['02 Mar', '01 Mar', '28 Feb', '27 Feb', '26 Feb', '25 Feb', '24 Feb', '23 Feb', '22 Feb',
                    '21 Feb', '20 Feb', '19 Feb', '18 Feb', '17 Feb', '16 Feb', '15 Feb', '14 Feb', '13 Feb',
                    '12 Feb', '11 Feb', '10 Feb', '09 Feb', '08 Feb', '07 Feb', '06 Feb', '05 Feb', '04 Feb',
                    '03 Feb', '02 Feb', '01 Feb',
                ],
                datasets: [{
                    label: "Product Sales",
                    borderColor: "#6777ef",
                    pointBorderColor: "#FFF",
                    pointBackgroundColor: "#6777ef",
                    pointBorderWidth: 2,
                    pointHoverRadius: 4,
                    pointHoverBorderWidth: 1,
                    pointRadius: 4,
                    backgroundColor: '#6777ef',
                    fill: true,
                    borderWidth: 2,
                    data: ['0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0',
                        '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0',
                    ]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                tooltips: {
                    bodySpacing: 4,
                    mode: "nearest",
                    intersect: 0,
                    position: "nearest",
                    xPadding: 10,
                    yPadding: 10,
                    caretPadding: 10
                },
                layout: {
                    padding: {
                        left: 15,
                        right: 15,
                        top: 15,
                        bottom: 15
                    }
                }
            }
        });

        var myMultipleLineChart2 = new Chart(multipleLineChart2, {
            type: 'bar',
            data: {
                labels: ['02 Mar', '01 Mar', '28 Feb', '27 Feb', '26 Feb', '25 Feb', '24 Feb', '23 Feb', '22 Feb',
                    '21 Feb', '20 Feb', '19 Feb', '18 Feb', '17 Feb', '16 Feb', '15 Feb', '14 Feb', '13 Feb',
                    '12 Feb', '11 Feb', '10 Feb', '09 Feb', '08 Feb', '07 Feb', '06 Feb', '05 Feb', '04 Feb',
                    '03 Feb', '02 Feb', '01 Feb',
                ],
                datasets: [{
                    label: "Earning $",
                    borderColor: "#66bb6a",
                    pointBorderColor: "#FFF",
                    pointBackgroundColor: "#66bb6a",
                    pointBorderWidth: 2,
                    pointHoverRadius: 4,
                    pointHoverBorderWidth: 1,
                    pointRadius: 4,
                    backgroundColor: '#66bb6a',
                    fill: true,
                    borderWidth: 2,
                    data: ['0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0',
                        '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0',
                    ]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                tooltips: {
                    bodySpacing: 4,
                    mode: "nearest",
                    intersect: 0,
                    position: "nearest",
                    xPadding: 10,
                    yPadding: 10,
                    caretPadding: 10
                },
                layout: {
                    padding: {
                        left: 15,
                        right: 15,
                        top: 15,
                        bottom: 15
                    }
                }
            }
        });
    </script>
    <script src="https://zairito.zainikthemes.com/vendor/sweetalert/sweetalert.all.js"></script>
    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
    </script>
    <div class="js-cookie-consent cookie-consent alert alert-dismissible fade show" role="alert">
        <div class="main-cookie-content">
            <p class="cookie-consent__message m-0">
                Your experience on this site will be improved by allowing cookies.
            </p>
            <button class="allow-button primary-btn js-cookie-consent-agree cookie-consent__agree">
                Allow Cookies
            </button>
        </div>
        <button type="button" class="btn-close front-close-btn" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <script>
        window.laravelCookieConsent = (function() {

            const COOKIE_VALUE = 1;
            const COOKIE_DOMAIN = 'zairito.zainikthemes.com';

            function consentWithCookies() {
                setCookie('laravel_cookie_consent', COOKIE_VALUE, 1);
                hideCookieDialog();
            }

            function cookieExists(name) {
                return (document.cookie.split('; ').indexOf(name + '=' + COOKIE_VALUE) !== -1);
            }

            function hideCookieDialog() {
                const dialogs = document.getElementsByClassName('js-cookie-consent');

                for (let i = 0; i < dialogs.length; ++i) {
                    dialogs[i].style.display = 'none';
                }
            }

            function setCookie(name, value, expirationInDays) {
                const date = new Date();
                date.setTime(date.getTime() + (expirationInDays * 24 * 60 * 60 * 1000));
                document.cookie = name + '=' + value +
                    ';expires=' + date.toUTCString() +
                    ';domain=' + COOKIE_DOMAIN +
                    ';path=/' +
                    '';
            }

            if (cookieExists('laravel_cookie_consent')) {
                hideCookieDialog();
            }

            const buttons = document.getElementsByClassName('js-cookie-consent-agree');

            for (let i = 0; i < buttons.length; ++i) {
                buttons[i].addEventListener('click', consentWithCookies);
            }

            return {
                consentWithCookies: consentWithCookies,
                hideCookieDialog: hideCookieDialog
            };
        })();
    </script>
</body>

</html>
