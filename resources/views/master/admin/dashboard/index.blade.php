<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Starlight Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="assets/starlite/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/starlite/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="assets/starlite/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="assets/starlite/lib/rickshaw/rickshaw.min.css" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="assets/starlite/css/starlight.css">
</head>

<body>

    <!-- ########## START: LEFT PANEL ########## -->

    <div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> starlight</a></div>
    <x-left-side-menu />
    <!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
        <div class="sl-header-left">
            <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i
                        class="icon ion-navicon-round"></i></a></div>
            <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i
                        class="icon ion-navicon-round"></i></a></div>
        </div><!-- sl-header-left -->
        <div class="sl-header-right">
            <nav class="nav">
                <div class="dropdown">
                    <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                        <span class="logged-name">Jane<span class="hidden-md-down"> Doe</span></span>
                        <img src="assets/starlite/img/img3.jpg" class="wd-32 rounded-circle" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-200">
                        <ul class="list-unstyled user-profile-nav">
                            <li><a href=""><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                            <li><a href=""><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                            <li><a href=""><i class="icon ion-ios-download-outline"></i> Downloads</a></li>
                            <li><a href=""><i class="icon ion-ios-star-outline"></i> Favorites</a></li>
                            <li><a href=""><i class="icon ion-ios-folder-outline"></i> Collections</a></li>
                            <li><a href="{{ route('logout') }}"><i class="icon ion-power"></i> Sign Out</a></li>
                        </ul>
                    </div><!-- dropdown-menu -->
                </div><!-- dropdown -->
            </nav>
            <div class="navicon-right">
                <a id="btnRightMenu" href="" class="pos-relative">
                    <i class="icon ion-ios-bell-outline"></i>
                    <!-- start: if statement -->
                    <span class="square-8 bg-danger"></span>
                    <!-- end: if statement -->
                </a>
            </div><!-- navicon-right -->
        </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <div class="sl-sideright">
        <ul class="nav nav-tabs nav-fill sidebar-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" role="tab" href="#messages">Messages (2)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" role="tab" href="#notifications">Notifications (8)</a>
            </li>
        </ul><!-- sidebar-tabs -->

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane pos-absolute a-0 mg-t-60 active" id="messages" role="tabpanel">
                <div class="media-list">
                    <!-- loop starts here -->
                    <a href="" class="media-list-link">
                        <div class="media">
                            <img src="assets/starlite/img/img3.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                                <span class="d-block tx-11 tx-gray-500">2 minutes ago</span>
                                <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire
                                    soul, like these sweet mornings of spring.</p>
                            </div>
                        </div><!-- media -->
                    </a>
                    <!-- loop ends here -->
                    <a href="" class="media-list-link">
                        <div class="media">
                            <img src="assets/starlite/img/img4.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Samantha Francis</p>
                                <span class="d-block tx-11 tx-gray-500">3 hours ago</span>
                                <p class="tx-13 mg-t-10 mg-b-0">My entire soul, like these sweet mornings of spring.
                                </p>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link">
                        <div class="media">
                            <img src="assets/starlite/img/img7.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Robert Walker</p>
                                <span class="d-block tx-11 tx-gray-500">5 hours ago</span>
                                <p class="tx-13 mg-t-10 mg-b-0">I should be incapable of drawing a single stroke at the
                                    present moment...</p>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link">
                        <div class="media">
                            <img src="assets/starlite/img/img5.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Larry Smith</p>
                                <span class="d-block tx-11 tx-gray-500">Yesterday, 8:34pm</span>

                                <p class="tx-13 mg-t-10 mg-b-0">When, while the lovely valley teems with vapour around
                                    me, and the meridian sun strikes...</p>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link">
                        <div class="media">
                            <img src="assets/starlite/img/img3.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                                <span class="d-block tx-11 tx-gray-500">Jan 23, 2:32am</span>
                                <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire
                                    soul, like these sweet mornings of spring.</p>
                            </div>
                        </div><!-- media -->
                    </a>
                </div><!-- media-list -->
                <div class="pd-15">
                    <a href=""
                        class="btn btn-secondary btn-block bd-0 rounded-0 tx-10 tx-uppercase tx-mont tx-medium tx-spacing-2">View
                        More Messages</a>
                </div>
            </div><!-- #messages -->

            <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="notifications" role="tabpanel">
                <div class="media-list">
                    <!-- loop starts here -->
                    <a href="" class="media-list-link read">
                        <div class="media pd-x-20 pd-y-15">
                            <img src="assets/starlite/img/img8.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth
                                        Bungaos</strong> tagged you and 18 others in a post.</p>
                                <span class="tx-12">October 03, 2017 8:45am</span>
                            </div>
                        </div><!-- media -->
                    </a>
                    <!-- loop ends here -->
                    <a href="" class="media-list-link read">
                        <div class="media pd-x-20 pd-y-15">
                            <img src="assets/starlite/img/img9.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa
                                        Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The
                                        Social Network</strong></p>
                                <span class="tx-12">October 02, 2017 12:44am</span>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link read">
                        <div class="media pd-x-20 pd-y-15">
                            <img src="assets/starlite/img/img10.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong
                                        class="tx-medium tx-gray-800">Sale Group</strong></p>
                                <span class="tx-12">October 01, 2017 10:20pm</span>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link read">
                        <div class="media pd-x-20 pd-y-15">
                            <img src="assets/starlite/img/img5.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius
                                        Erving</strong> wants to connect with you on your conversation with <strong
                                        class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                                <span class="tx-12">October 01, 2017 6:08pm</span>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link read">
                        <div class="media pd-x-20 pd-y-15">
                            <img src="assets/starlite/img/img8.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth
                                        Bungaos</strong> tagged you and 12 others in a post.</p>
                                <span class="tx-12">September 27, 2017 6:45am</span>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link read">
                        <div class="media pd-x-20 pd-y-15">
                            <img src="assets/starlite/img/img10.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700">10+ new items added are for sale in your <strong
                                        class="tx-medium tx-gray-800">Sale Group</strong></p>
                                <span class="tx-12">September 28, 2017 11:30pm</span>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link read">
                        <div class="media pd-x-20 pd-y-15">
                            <img src="assets/starlite/img/img9.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa
                                        Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The
                                        Great Pyramid</strong></p>
                                <span class="tx-12">September 26, 2017 11:01am</span>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link read">
                        <div class="media pd-x-20 pd-y-15">
                            <img src="assets/starlite/img/img5.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius
                                        Erving</strong> wants to connect with you on your conversation with <strong
                                        class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                                <span class="tx-12">September 23, 2017 9:19pm</span>
                            </div>
                        </div><!-- media -->
                    </a>
                </div><!-- media-list -->
            </div><!-- #notifications -->

        </div><!-- tab-content -->
    </div><!-- sl-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="assets/starlite/app/index.html">Starlight</a>
            <span class="breadcrumb-item active">Dashboard</span>
        </nav>

        <div class="sl-pagebody">


            <div class="card pd-20 pd-sm-40">
                {{-- <h6 class="card-body-title">Basic Buttons</h6> --}}
                {{-- <p class="mg-b-20 mg-sm-b-30">Twelve predefined button styles, each serving its own semantic purpose.</p> --}}
                <h6 class="card-body-title"> Pages on Home</h6>
                <p class="mg-b-20 mg-sm-b-30"> Customize with own semantic purpose. </p>

                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="btn-demo">
                            {{-- <button class="btn btn-primary btn-block mg-b-10">Primary</button> --}}
                            <button class="btn btn-primary btn-block mg-b-10" data-toggle="modal"
                                data-target="#HomePageHeroDescriptionModal3">Home Page Hero Description</button>
                            <button class="btn btn-primary active btn-block mg-b-10">Active</button>
                            <button class="btn btn-primary disabled btn-block mg-b-10">Disabled</button>
                        </div><!-- btn-demo -->
                    </div><!-- col-sm-3 -->

                    <div class="col-sm-6 col-md-3 mg-t-20 mg-sm-t-0">
                        <div class="btn-demo">
                            <button class="btn btn-secondary btn-block mg-b-10">Secondary</button>
                            <button class="btn btn-secondary active btn-block mg-b-10">Active</button>
                            <button class="btn btn-secondary disabled btn-block mg-b-10">Disabled</button>
                        </div><!-- btn-demo -->
                    </div><!-- col-sm-3 -->

                    <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
                        <div class="btn-demo">
                            <button class="btn btn-success btn-block mg-b-10">Success</button>
                            <button class="btn btn-success active btn-block mg-b-10">Active</button>
                            <button class="btn btn-success disabled btn-block mg-b-10">Disabled</button>
                        </div><!-- btn-demo -->
                    </div><!-- col-sm-3 -->

                    <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
                        <div class="btn-demo">
                            <button class="btn btn-warning btn-block mg-b-10">Warning</button>
                            <button class="btn btn-warning active btn-block mg-b-10">Active</button>
                            <button class="btn btn-warning disabled btn-block mg-b-10">Disabled</button>
                        </div><!-- btn-demo -->
                    </div><!-- col-sm-3 -->

                    <div class="col-sm-6 col-md-3 mg-t-50">
                        <div class="btn-demo">
                            <button class="btn btn-danger btn-block mg-b-10">Danger</button>
                            <button class="btn btn-danger active btn-block mg-b-10">Active</button>
                            <button class="btn btn-danger disabled btn-block mg-b-10">Disabled</button>
                        </div><!-- btn-demo -->
                    </div><!-- col-sm-3 -->

                    <div class="col-sm-6 col-md-3 mg-t-50">
                        <button class="btn btn-info btn-block mg-b-10">Info</button>
                        <button class="btn btn-info active btn-block mg-b-10">Active</button>
                        <button class="btn btn-info disabled btn-block mg-b-10">Disabled</button>
                    </div><!-- col-sm-3 -->

                    <div class="col-sm-6 col-md-3 mg-t-50">
                        <button class="btn btn-indigo btn-block mg-b-10">Indigo</button>
                        <button class="btn btn-indigo active btn-block mg-b-10">Active</button>
                        <button class="btn btn-indigo disabled btn-block mg-b-10">Disabled</button>
                    </div><!-- col-sm-3 -->

                    <div class="col-sm-6 col-md-3 mg-t-50">
                        <button class="btn btn-purple btn-block mg-b-10">Purple</button>
                        <button class="btn btn-purple active btn-block mg-b-10">Active</button>
                        <button class="btn btn-purple disabled btn-block mg-b-10">Disabled</button>
                    </div><!-- col-sm-3 -->

                    <div class="col-sm-6 col-md-3 mg-t-50">
                        <button class="btn btn-pink btn-block mg-b-10">Pink</button>
                        <button class="btn btn-pink active btn-block mg-b-10">Active</button>
                        <button class="btn btn-pink disabled btn-block mg-b-10">Disabled</button>
                    </div><!-- col-sm-3 -->

                    <div class="col-sm-6 col-md-3 mg-t-50">
                        <button class="btn btn-teal btn-block mg-b-10">Teal</button>
                        <button class="btn btn-teal active btn-block mg-b-10">Active</button>
                        <button class="btn btn-teal disabled btn-block mg-b-10">Disabled</button>
                    </div><!-- col-sm-3 -->

                    <div class="col-sm-6 col-md-3 mg-t-50">
                        <button class="btn btn-dark btn-block mg-b-10">Dark</button>
                        <button class="btn btn-dark active btn-block mg-b-10">Active</button>
                        <button class="btn btn-dark disabled btn-block mg-b-10">Disabled</button>
                    </div><!-- col-sm-3 -->
                </div><!-- row -->
            </div>



            <!-- LARGE MODAL -->
            <div id="HomePageHeroDescriptionModal3" class="modal fade">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content tx-size-sm">
                        <div class="modal-header pd-x-20">
                            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Home Page Hero Description On Left
                                side Message Preview</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body pd-20">
                            <h4 class=" lh-3 mg-b-20"><a href="{{ route('home') }}"
                                    class="tx-inverse hover-primary">Home Page Hero Description On Left side
                                    Message</a></h4>
                            {{-- <p class="mg-b-5">It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout. The point of using Lorem Ipsum is
                                that it has a more-or-less normal distribution of letters, as opposed to using 'Content
                                here, content here', making it look like readable English. </p> --}}
                            <form method="post" action="{{ route('update-hero-text-left') }}">
                                <!-- Replace with your route name -->
                                @csrf <!-- Include Laravel's CSRF token field for security -->

                                <textarea rows="5" class="form-control tx-16 bd pd-30 tx-inverse" name="hero_text_description_on_left">{{ $hero_text_description_on_left }}</textarea>

                                <button class="btn btn-primary btn-block mg-t-10" type="submit">Update Hero Text</button>
                            </form>
                        </div>
                        <!-- modal-body -->
                        <div class="modal-footer">
                            {{-- <button type="button" class="btn btn-info pd-x-20">Save changes</button> --}}
                            <button type="button" class="btn btn-secondary pd-x-20"
                                data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
                <!-- modal-dialog -->
            </div>
            <!-- modal -->


            <!-- row -->

        </div>
        <!-- sl-pagebody -->
        <footer class="sl-footer">
            <div class="footer-left">
                <div class="mg-b-2">Copyright &copy; 2017. Starlight. All Rights Reserved.</div>
                <div>Made by ThemePixels.</div>
            </div>
            <div class="footer-right d-flex align-items-center">
                <span class="tx-uppercase mg-r-10">Share:</span>
                <a target="_blank" class="pd-x-5"
                    href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/starlight"><i
                        class="fa fa-facebook tx-20"></i></a>
                <a target="_blank" class="pd-x-5"
                    href="https://twitter.com/home?status=Starlight,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/starlight"><i
                        class="fa fa-twitter tx-20"></i></a>
            </div>
        </footer>
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="assets/starlite/lib/jquery/jquery.js"></script>
    <script src="assets/starlite/lib/popper.js/popper.js"></script>
    <script src="assets/starlite/lib/bootstrap/bootstrap.js"></script>
    <script src="assets/starlite/lib/jquery-ui/jquery-ui.js"></script>
    <script src="assets/starlite/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="assets/starlite/lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
    <script src="assets/starlite/lib/d3/d3.js"></script>
    <script src="assets/starlite/lib/rickshaw/rickshaw.min.js"></script>
    <script src="assets/starlite/lib/chart.js/Chart.js"></script>
    <script src="assets/starlite/lib/Flot/jquery.flot.js"></script>
    <script src="assets/starlite/lib/Flot/jquery.flot.pie.js"></script>
    <script src="assets/starlite/lib/Flot/jquery.flot.resize.js"></script>
    <script src="assets/starlite/lib/flot-spline/jquery.flot.spline.js"></script>

    <script src="assets/starlite/js/starlight.js"></script>
    <script src="assets/starlite/js/ResizeSensor.js"></script>
    <script src="assets/starlite/js/dashboard.js"></script>
</body>

</html>
