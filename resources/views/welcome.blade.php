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
    @if (Auth::user()->isActive == 0)
        <script>
            window.location = "check_active";
        </script>
    @else
    @endif
    <div class="container">
        <nav class="nav">
            <div class="hambu" onclick="showMenu()">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <div class="user_name und">
                <span class="head_text">


                    @if (Auth::check())
                        {{ Auth::user()->first_name }}
                    @endif
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
                                <li><a href="{{ route('adprofile') }}">My Account</a></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                            Logout
                                        </a>
                                    </form>
                                </li>
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
                            <li class="{{ request()->routeIs('dashboard') ? 'selected' : '' }}"><i
                                    class="fa fa-tachometer" aria-hidden="true"></i><a
                                    href="{{ route('dashboard') }}">Dashboard</a></li>


                            @role('client')
                                <li class="{{ request()->routeIs('transfer') ? 'selected' : '' }}"><i class="fa fa-money"
                                        aria-hidden="true"></i><a href="{{ route('transfer') }}">Make
                                        Transfer</a></li>
                                <li class="{{ request()->routeIs('history') ? 'selected' : '' }}"><i class="fa fa-history"
                                        aria-hidden="true"></i><a href="{{ route('history') }}">Transfer History</a></li>
                                <li class="{{ request()->routeIs('verify') ? 'selected' : '' }}"><i class="fa fa-key"
                                        aria-hidden="true"></i><a href="{{ route('verify') }}">verify transfer</a></li>


                                <li class="{{ request()->routeIs('adprofile') ? 'selected' : '' }}"><i
                                        class="fa fa-male" aria-hidden="true"></i><a
                                        href="{{ route('adprofile') }}">My
                                        Profile</a></li>
                            @endrole

                            @role('admin')
                                <li class="{{ request()->routeIs('transfers') ? 'selected' : '' }}"><i
                                        class="fa fa-money" aria-hidden="true"></i><a
                                        href="{{ route('transfers') }}">Transfers</a>
                                </li>
                                <li class="{{ request()->routeIs('summary') ? 'selected' : '' }}"><i
                                        class="fa fa-credit-card" aria-hidden="true"></i><a
                                        href="{{ route('summary') }}">Transactions</a>
                                </li>
                                <li class="{{ request()->routeIs('fundtransfer') ? 'selected' : '' }}"><i
                                        class="fa fa-credit-card-alt" aria-hidden="true"></i><a
                                        href="{{ route('fundtransfer') }}">Fund Account</a></li>
                                <li class="{{ request()->routeIs('users') ? 'selected' : '' }}"><i
                                        class="fa fa-solid fa-users"></i><a href="{{ route('users') }}">Users</a></li>
                            @endrole
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
                @role('client')
                    <a href="#">
                        <div class="tl_bal">
                            <div class="price">
                                <span>£{{ $total ? $total : 0 }}</span>
                            </div>
                            <div class="name">
                                Total Balance
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="tl_bal_2">
                            <div class="price">
                                <span>£{{ $last ? $last : 0 }}</span>
                            </div>
                            <div class="name">
                                Last Transaction
                            </div>
                        </div>
                    </a>
                @endrole
                @role('admin')
                    <a href="#">
                        <div class="tl_bal">
                            <div class="price">
                                <span>{{ $userCount ? $userCount : 0 }}</span>
                            </div>
                            <div class="name">
                                Total Users Account
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="tl_bal_2">
                            <div class="price">
                                <span>{{ $is_active ? $is_active : 0 }}</span>
                            </div>
                            <div class="name">
                                Active Account
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="tl_bal_2">
                            <div class="price">
                                <span>{{ $not_active ? $not_active : 0 }}</span>
                            </div>
                            <div class="name">
                                Inactive Account
                            </div>
                        </div>
                    </a>

                    <a href="#">
                        <div class="tl_bal_2">
                            <div class="price">
                                <span>£{{ $total_debit ? $total_debit : 0 }}</span>
                            </div>
                            <div class="name">
                                Debit Transactions
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="tl_bal_2">
                            <div class="price">
                                <span>£{{ $total_trans ? $total_trans : 0 }}</span>
                            </div>
                            <div class="name">
                                Credit Transactions
                            </div>
                        </div>
                    </a>
                @endrole
            </div>
        </main>

    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous" type="text/javascript"></script>
    <script>
        function fadeImg() {
            $('#img1').fadeToggle(1000)
        }

        function showMenu() {
            $('#side').animate({
                left: 5
            })
        }

        function removeSide() {
            $('#side').animate({
                left: -1000
            })
        }
    </script>
</body>

</html>
