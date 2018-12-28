<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}"  crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
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
                    <a href="{{url('/')}}">
                        <i class="fa fa-home text-white fa-2x"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-briefcase text-white fa-2x"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-line-chart text-white fa-2x"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-lg-4">
        <form action="@yield('form-search',url('search'))" method="GET" id="search">
            <input type="text" class="form-control" placeholder="Search ..." name="cari">
        </form>
    </div>
    <div class="col-lg-4">
        <nav>
            <ul>
                <li>
                    <a href="">
                        <i class="fa fa-bell text-white fa-2x"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-user text-white fa-2x"></i>
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

    <div class="container">
        <div class="row" style="margin-top:20px;">
            <div class="col-md-12 mx-auto">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            </div>
        </div>
    </div>

@yield('content')
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{asset('asset/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script>

    var active_link = "@yield('page-id')";
    var search_url = "@yield('page-search')";
    search_url = search_url.replace(" ","");
    var url1 = window.location;
    $(document).ready(function(){
        $("a#"+active_link).addClass("active");
        
    });

</script>
</body>
</html>