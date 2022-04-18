<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    @yield('style')
</head>

<body>
    <div class="container">
        <nav class="nav">
            <div class="hambu" onclick="showMenu()">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <div class="user_name und">
                <span class="head_text">
                    Chylau ketem
                </span>
            </div>
            <div class="user_welcome und">
                <span class="head_text">
                    Welcome to your dashboard
                </span>
            </div>
            <div class="user_icons und">
                <div>
                    <i class="fa fa-search" aria-hidden="true"></i>
                </div>
                <div>
                    <a href="http://"><i class="fa fa-bell-o" aria-hidden="true"></i></a>
                </div>
                <div class="p_img_c">
                    <img src="https://images.unsplash.com/photo-1580250864656-cd501faa9c76?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MXwxNjk3MDJ8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60"
                        alt="" srcset="" onclick="fadeImg()">
                        <div class="profile_menu" id="img1" style="display: none">
                            <div class="pm_l">
                                <ul>
                                    <li><a href="{{route('profile')}}">My Account</a></li>
                                    <li><a href="{{route('reset')}}">Change Password</a></li>
                                    <li><a href="">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                </div>
            </div>
        </nav>

        <main>
            <div class="side_bar" id="side">
                <div class="dashboard">
                    <div class="cancel" onclick="removeSide()">
                        <i class="fa fa-times-circle" aria-hidden="true"></i>
                    </div>
                    <div class="d_cont">
                        <ul>
                            <li class="selected"><i class="fa fa-tachometer" aria-hidden="true"></i><a href="{{route('dashboard')}}" class="selected">Dashboard</a></li>
                            <li><i class="fa fa-money" aria-hidden="true"></i><a href="{{route('transfer')}}">Make Transfer</a></li>
                            <li><i class="fa fa-history" aria-hidden="true"></i><a href="{{route('history')}}">Transfer History</a></li>
                            <li><i class="fa fa-credit-card" aria-hidden="true"></i><a href="{{route('summary')}}">Transaction History</a>
                            </li>
                            <li><i class="fa fa-male" aria-hidden="true"></i><a href="{{route('profile')}}">My Profile</a></li>
                            <li><i class="fa fa-key" aria-hidden="true"></i><a href="{{route('reset')}}">Change Password</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>

            <div class="contents">
                <div class="detail">
                    @yield('content')
                </div>
            </div>
            <div class="balance">
                <a href="">
                    <div class="tl_bal">
                        <div class="price">
                            <span>£930,00</span>
                        </div>
                        <div class="name">
                            Total Balance
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="tl_bal_2">
                        <div class="price">
                            <span>£3,950</span>
                        </div>
                        <div class="name">
                            Last Transaction
                        </div>
                    </div>
                </a>
               
            </div>
        </main>

    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous" type="text/javascript"></script>
    <script>
        function fadeImg(){
           $('#img1').fadeToggle(1000)
        }

        function showMenu(){
            $('#side').animate({left:5})
        }
        function removeSide(){
            $('#side').animate({left:-1000})
        }
        </script>
</body>

</html>
