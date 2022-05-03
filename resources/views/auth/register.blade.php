@extends('welcome')
@section('style')
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/transfer.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="title">
        <span>Create Account</span>
    </div>
    
    <x-auth-validation-errors class="mb-4 mt-4" :errors="$errors" />
    <form action="{{route('register')}}" method="POST">
        @csrf
        <div class="tr_inputs">
            <div class="td_input">
                <label for="">First Name *</label>
                <input type="text" name="fname" id="" placeholder="e.g John">
            </div>
            <div class="td_input">
                <label for="">Last Name *</label>
                <input type="text" name="lname" id="" placeholder="e.g Doe">
            </div>
            <div class="td_input">
                <label for="">Email *</label>
                <input type="text" name="email" id="" placeholder="e.g johndoe@gmail.com">
            </div>
            
            <div class="td_input">
                <label for="">password *</label>
                <input type="text" name="password" id="" placeholder="">
            </div>
            <div class="td_input">
                <label for="">Confirm Password *</label>
                <input type="text" name="password_confirmation" id="" placeholder="">
            </div>
            <div class="td_input">
                <label for="">Security Question- What is your pet name *</label>
                <input type="text" name="sq" id="" placeholder="Ragnar">
            </div>
            <div class="td_input">
                <label for="">Verify your pet name *</label>
                <input type="text" name="vsq" id="" placeholder="Ragnar">
            </div>
            <div class="td_input">
                <label for="">Phone *</label>
                <input type="number" name="phone_no" id="" placeholder="+12468965">
            </div>
            <div class="share_grid">
                <div class="td_input">
                    <label for="">Date of Birth *</label>
                    <Input type="date" name="dob" id="" placeholder="25/06/1995">
                </div>
                <div class="td_input">
                    <label for="">Gender *</label>
                    <select name="gender" id="">
                        <option value="" selected disabled>gender</option>
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </select>
                </div>
            </div>

            <div class="td_input">
                <label for="">Account Type *</label>
                <select name="acc_type" id="">
                    <option value="" selected disabled>Account Type</option>
                    <option value="svac">Savings Account</option>
                    <option value="caac">Current Account</option>
                    <option value="fdac">Fixed Deposite</option>
                </select>
            </div>
            <div class="td_input">
                <label for="">Address *</label>
                <Input type="address" name="address" id="" placeholder="7 ap-z street, texas, USA">
            </div>
            <div class="td_input">
                <label for="">Zip Code *</label>
                <Input type="text" name="zp" id="" placeholder="10111">
            </div>
            <div class="td_input">
                <label for="">State *</label>
                <Input type="text" name="state" id="" placeholder="Texas">
            </div>
            <div class="td_input">
                <label for="">Country *</label>
                <Input type="text" name="country" id="" placeholder="USA">
            </div>
            <div class="td_input">
                <label for="">City *</label>
                <Input type="text" name="city" id="" placeholder="New York">
            </div>

           
        </div>
        <div class="tr_btn">
            <input type="submit" value="submit">
        </div>

    </form>
@endsection
