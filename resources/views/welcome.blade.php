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
                <div>
                    <img src="https://images.unsplash.com/photo-1580250864656-cd501faa9c76?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MXwxNjk3MDJ8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60"
                        alt="" srcset="">
                </div>
            </div>
        </nav>

        <main>
            <div class="side_bar">
                <div class="dashboard">
                    <div class="d_cont">
                        <ul>
                            <li class="selected"><i class="fa fa-tachometer" aria-hidden="true"></i><a href="" class="selected">Dashboard</a></li>
                            <li><i class="fa fa-money" aria-hidden="true"></i><a href="">Make Transfer</a></li>
                            <li><i class="fa fa-history" aria-hidden="true"></i><a href="">Transfer History</a></li>
                            <li><i class="fa fa-credit-card" aria-hidden="true"></i><a href="">Transaction History</a>
                            </li>
                            <li><i class="fa fa-male" aria-hidden="true"></i><a href="">My Profile</a></li>
                            <li><i class="fa fa-key" aria-hidden="true"></i><a href="">Change Password</a></li>
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



</body>

</html>
