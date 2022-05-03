@extends('welcome')
@section('style')
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/transfer.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="title">
        <span>Edit Profile</span>
    </div>
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <form  method="post" action="{{route('update_user')}}">
        @csrf
        <input type="hidden" name="id" value="{{$user->id}}">
        <div class="tr_inputs">
            <div class="td_input">
                <label for="">First Name *</label>
                <input type="text" name="fname" id="" placeholder="e.g John" value="{{ $user->first_name }}">
            </div>
            <div class="td_input">
                <label for="">Last Name *</label>
                <input type="text" name="lname" id="" placeholder="e.g Doe" value="{{$user->last_name }}" >
            </div>
            <div class="td_input">
                <label for="">Email *</label>
                <input type="text" name="email" id="" placeholder="e.g johndoe@gmail.com" value="{{ $user->email }}">
            </div>

            <div class="td_input">
                <label for="">Security Question- What is your pet name *</label>
                <input type="text" name="sq" id="" placeholder="Ragnar" value="{{ $user->sq }}">
            </div>
            <div class="td_input">
                <label for="">Verify your pet name *</label>
                <input type="text" name="vsq" id="" placeholder="Ragnar" value = "{{ $user->vsq }}">
            </div>
            <div class="td_input">
                <label for="">Phone *</label>
                <input type="number" name="phone_no" id="" placeholder="+12468965" value = "{{ $user->phone_no }}">
            </div>
            <div class="share_grid">
                <div class="td_input">
                    <label for="">Date of Birth *</label>
                    <Input type="date" name="dob" id="" placeholder="25/06/1995" value="{{ $user->dob }}">
                </div>
                <div class="td_input">
                    <label for="">Gender *</label>
                    <select name="gender" id="">
                        <option value="" disabled>gender</option>
                        <option value="male" @if ($user->gender === 'male') selected @endif>male</option>
                        <option value="female" @if ($user->gender === 'female') selected @endif>female</option>
                    </select>
                </div>
            </div>

            <div class="td_input">
                <label for="">Account Type *</label>
                <select name="acc_type" id="">
                    <option value="" disabled>Account Type</option>
                    <option value="svac" @if ($user->acc_type === 'Savings Account') selected @endif>Savings Account</option>
                    <option value="caac" @if ($user->acc_type === 'Current Account') selected @endif>Current Account</option>
                    <option value="fdac" @if ($user->acc_type === 'Fixed Deposite') selected @endif>Fixed Deposite</option>
                </select>
            </div>
            <div class="td_input">
                <label for="">Address *</label>
                <Input type="address" name="address" id="" placeholder="7 ap-z street, texas, USA" value="{{ $user->address }}">
            </div>
            <div class="td_input">
                <label for="">Zip Code *</label>
                <Input type="text" name="zp" id="" placeholder="10111" value = "{{ $user->zp }}">
            </div>
            <div class="td_input">
                <label for="">State *</label>
                <Input type="text" name="state" id="" placeholder="Texas" value = "{{ $user->state }}">
            </div>
            <div class="td_input">
                <label for="">Country *</label>
                <Input type="text" name="country" id="" placeholder="USA" value = "{{ $user->country }}">
            </div>
            <div class="td_input">
                <label for="">City *</label>
                <Input type="text" name="city" id="" placeholder="New York" value = "{{ $user->city }}">
            </div>


        </div>
        <div class="tr_btn">
            <input type="submit" value="submit">
        </div>

    </form>
@endsection
