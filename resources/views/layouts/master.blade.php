
@include('section/head')


<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        @include('section/mobileheader')
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        @include('section/menusidebar')
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            @include('section/desktopHead')
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            @include('section/firstContent')

            @yield('mainContent')




            @include('section/footer')
        </div>
    </div>
    </div>
    <!-- END MAIN CONTENT-->
    <!-- END PAGE CONTAINER-->
    </div>

    </div>

    