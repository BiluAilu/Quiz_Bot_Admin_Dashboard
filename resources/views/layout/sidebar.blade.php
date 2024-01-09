 <style>
.brand .logo {
    display: flex;
    align-items: center;
    padding-left: 20px; /* Adjust the padding as needed */
}

.brand .logo .a img {
    width: 40px; /* Adjust the width of the image as needed */
    height:  60px; /* Adjust the height of the image as needed */
    /* Maintain aspect ratio */
    margin-right: 10px; /* Adjust the margin as needed */
}

.brand .logo-text {
    display: flex;
    flex-direction: column;
    justify-content: center;
}

 </style>

 <!-- Left Sidenav -->
  <div class="left-sidenav">
<!-- LOGO -->
<div class="brand">
    <a href="index.html" class="logo">
        <span class="a">
            <img src="{{asset('assets/images/robo-advisor.png')}}" alt="logo-small" class="logo-sm">
        </span>
        <span class="logo-text">
            {{-- <img src="{{asset('assets/images/logo.png')}}" alt="logo-large" class="logo-lg logo-light"> --}}
            Quiz Bot
            {{-- <img src="{{asset('assets/images/logo-dark.png')}}" alt="logo-large" class="logo-lg logo-dark"> --}}
        </span>
    </a>
</div>
<!--end logo-->

    <div class="menu-content h-100" data-simplebar>
        <ul class="metismenu left-sidenav-menu">
            <li class="menu-label mt-0">Main</li>
            <li>
                <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                {{-- <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="index.html"><i class="ti-control-record"></i>Analytics</a></li>
                    <li class="nav-item"><a class="nav-link" href="sales-index.html"><i class="ti-control-record"></i>Sales</a></li>
                </ul> --}}
            </li>

            <li>
                <a href="javascript: void(0);"><i data-feather="grid" class="align-self-center menu-icon"></i><span>Apps</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">


                    <li class="nav-item"><a class="nav-link" href="{{route('question.index')}}"><i class="ti-control-record"></i>Questions To be Approved</a></li>


                </ul>
            </li>


        </ul>

        {{-- <div class="update-msg text-center">
            <a href="javascript: void(0);" class="float-end close-btn text-muted" data-dismiss="update-msg" aria-label="Close" aria-hidden="true">
                <i class="mdi mdi-close"></i>
            </a>
            <h5 class="mt-3">Mannat Themes</h5>
            <p class="mb-3">We Design and Develop Clean and High Quality Web Applications</p>
            <a href="javascript: void(0);" class="btn btn-outline-warning btn-sm">Upgrade your plan</a>
        </div> --}}
    </div>
</div>
<!-- end left-sidenav-->
