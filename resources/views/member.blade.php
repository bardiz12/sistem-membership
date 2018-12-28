<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}"  crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    
    <script src="main.js"></script>
</head>
<body>
<div class="contain">
<section id="top">
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-3">
        <div class="nav">
            <ul>
                <li>
                    <a href="">
                        <img src="{{asset('asset/images/crop/1.png')}}" alt="">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{asset('asset/images/crop/2.png')}}" alt="">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{asset('asset/images/crop/3.png')}}" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-lg-4">
        <form action="" method="POST">
            <input type="text" class="form-control" name="search" placeholder="Search ...">
        </form>
    </div>
    <div class="col-lg-4">
        <nav>
            <ul>
                <li>
                    <a href="">
                        <img src="{{asset('asset/images/crop/4.png')}}" alt="">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{asset('asset/images/crop/5.png')}}" alt="">
                    </a>
                    <ul>
                        <li>
                            <a href="{{url('profile/edit')}} ">Profile</a>
                        </li>
                        <li>
                            <a  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 Log Out
                             </a>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                             </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
</section>
@yield('content')
</div>

<script src="{{asset('asset/js/bootstrap.min.js')}}" type="text/javascript"></script>
</body>
</html>