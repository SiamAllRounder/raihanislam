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
    <link href="{{ asset('assets/starlite/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/starlite/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/starlite/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/starlite/lib/highlightjs/github.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/starlite/lib/medium-editor/medium-editor.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/starlite/lib/medium-editor/default.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/starlite/lib/summernote/summernote-bs4.css') }}" rel="stylesheet">


    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('assets/starlite/css/starlight.css') }}">
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
        </div>
        <div class="sl-header-left">
            <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href="{{ route('home') }}"><i
                        class="fa fa-home"></i></a></div>
            <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href="{{ route('home') }}"><i
                        class="fa fa-home"></i></a></div>
        </div>
        <!-- sl-header-left -->
        <div class="sl-header-right">
            <nav class="nav">
                <div class="dropdown">
                    <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                        <span class="logged-name">Jane<span class="hidden-md-down"> Doe</span></span>
                        <img src="{{ asset('assets/starlite/img/img3.jpg') }}" class="wd-32 rounded-circle"
                            alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-200">
                        <ul class="list-unstyled user-profile-nav">
                            <li><a href=""><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                            <li><a href=""><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                            <li><a href=""><i class="icon ion-ios-download-outline"></i> Downloads</a></li>
                            <li><a href=""><i class="icon ion-ios-star-outline"></i> Favorites</a></li>
                            <li><a href=""><i class="icon ion-ios-folder-outline"></i> Collections</a></li>
                            <li><a href=""><i class="icon ion-power"></i> Sign Out</a></li>
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
                            <img src="{{ asset('assets/starlite/img/img3.jpg') }}" class="wd-40 rounded-circle"
                                alt="">
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
                            <img src="{{ asset('assets/starlite/img/img4.jpg') }}" class="wd-40 rounded-circle"
                                alt="">
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
                            <img src="{{ asset('assets/starlite/img/img7.jpg') }}" class="wd-40 rounded-circle"
                                alt="">
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
                            <img src="{{ asset('assets/starlite/img/img5.jpg') }}" class="wd-40 rounded-circle"
                                alt="">
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
                            <img src="{{ asset('assets/starlite/img/img3.jpg') }}" class="wd-40 rounded-circle"
                                alt="">
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
                            <img src="{{ asset('assets/starlite/img/img8.jpg') }}" class="wd-40 rounded-circle"
                                alt="">
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
                            <img src="{{ asset('assets/starlite/img/img9.jpg') }}" class="wd-40 rounded-circle"
                                alt="">
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
                            <img src="{{ asset('assets/starlite/img/img10.jpg') }}" class="wd-40 rounded-circle"
                                alt="">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong
                                        class="tx-medium tx-gray-800">Sale Group</strong></p>
                                <span class="tx-12">October 01, 2017 10:20pm</span>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link read">
                        <div class="media pd-x-20 pd-y-15">
                            <img src="{{ asset('assets/starlite/img/img5.jpg') }}" class="wd-40 rounded-circle"
                                alt="">
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
                            <img src="{{ asset('assets/starlite/img/img8.jpg') }}" class="wd-40 rounded-circle"
                                alt="">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth
                                        Bungaos</strong> tagged you and 12 others in a post.</p>
                                <span class="tx-12">September 27, 2017 6:45am</span>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link read">
                        <div class="media pd-x-20 pd-y-15">
                            <img src="{{ asset('assets/starlite/img/img10.jpg') }}" class="wd-40 rounded-circle"
                                alt="">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700">10+ new items added are for sale in your <strong
                                        class="tx-medium tx-gray-800">Sale Group</strong></p>
                                <span class="tx-12">September 28, 2017 11:30pm</span>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link read">
                        <div class="media pd-x-20 pd-y-15">
                            <img src="{{ asset('assets/starlite/img/img9.jpg') }}" class="wd-40 rounded-circle"
                                alt="">
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
                            <img src="{{ asset('assets/starlite/img/img5.jpg') }}" class="wd-40 rounded-circle"
                                alt="">
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
            <a class="breadcrumb-item" href="index.html">Starlight</a>
            <a class="breadcrumb-item" href="index.html">Footer</a>
            <span class="breadcrumb-item active">Text Editor</span>
        </nav>

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Footer Text Editor</h5>
                <p>A WYSIWYG is one that allows a developer to see what the end result will look like while the
                    interface or document is being created.</p>
            </div>
            <!-- sl-page-title -->
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Medium Editor Plugin</h6>
                <p class="mg-b-20 mg-sm-b-30">Below is an example of a basic inline editing using medium-editor.</p>

                <p>Try highlighting some of the text below.</p>
                {{-- <div class="editable tx-16 bd pd-30 tx-inverse">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</div> --}}
                <form method="post" action="{{ route('footer-text-editor') }}">
                    <!-- Replace with your route name -->
                    @csrf <!-- Include Laravel's CSRF token field for security -->

                    <textarea rows="3" class="form-control tx-16 bd pd-30 tx-inverse" name="footnote_text">{{ $footnote->footernote }}</textarea>

                    <button type="submit">Update Footnote</button>
                </form>

            </div>
            <!-- card -->

            <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">HTML Code</p>
            <pre><code class="html pd-20">&lt;div class="editable"&gt;One morning, when...&lt;/div&gt;</code></pre>

            <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Javascript Code</p>
            <pre><code class="javascript pd-20">var editor = new MediumEditor('.editable');</code></pre>

            <div class="card pd-20 pd-sm-40 mg-t-50">
                <h6 class="card-body-title">Summernote Editor</h6>
                <p class="mg-b-20 mg-sm-b-30">A super simple WYSIWYG editor on Bootstrap.</p>
                <div id="summernote">Salamoon Alaikoom from Summer Note</div>
            </div><!-- card -->

            <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">HTML Code</p>
            <pre><code class="html pd-20">&lt;div id="summernote"&gt;Salamoon Alaikoom from Summer Note&lt;/div&gt;</code></pre>

            <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Javascript Code</p>
            <pre class="mg-b-0"><code class="javascript pd-20">$('#summernote').summernote({
height: 150
})</code></pre>

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

    <script src="{{ asset('assets/starlite/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/starlite/lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('assets/starlite/lib/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/starlite/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('assets/starlite/lib/highlightjs/highlight.pack.js') }}"></script>
    <script src="{{ asset('assets/starlite/lib/medium-editor/medium-editor.js') }}"></script>
    <script src="{{ asset('assets/starlite/lib/summernote/summernote-bs4.min.js') }}"></script>

    <script src="{{ asset('assets/starlite/js/starlight.js') }}"></script>
    <script>
        $(function() {
            'use strict';

            // Inline editor
            var editor = new MediumEditor('.editable');

            // Summernote editor
            $('#summernote').summernote({
                height: 150,
                tooltip: false
            })
        });
    </script>

</body>

</html>
