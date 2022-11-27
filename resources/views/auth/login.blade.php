

@extends('layouts.app')

@section('content')
    <section class="signin">
        <div class="container">
            <div class="user signinBx">
                <div class="imgBx">
                    <img src="/assets/images/img9.jpg" alt="">
                </div>
                <div class="formBx">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h2>เข้าสู่ระบบ</h2>
                        <input type="text" name="email" placeholder="อีเมล">
                        <input type="password" name="password" placeholder="รหัสผ่าน">
                        <input type="submit" value="เข้าสู่ระบบ" >
                        <p class="signup">ยังไม่มีบัญชี <a href="#" onclick="toggleForm();">ลงทะเบียน</a> </p>
                    </form>
                </div>
            </div>
            <div class="user signupBx">
                <div class="formBx">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h2>ลงทะเบียน</h2>
                        <input type="text" name="name" placeholder="ชื่อ">
                        <input type="text" name="email" placeholder="อีเมล">
                        <input type="password" name="password" placeholder="รหัสผ่าน">
                        <input type="password" name="password_confirmation" placeholder="ยืนยันรหัสผ่าน">
                        <input type="submit" value="ลงทะเบียน" >
                        <p class="signup">มีบัญชีแล้ว <a href="#" onclick="toggleForm();">เข้าสู่ระบบ</a> </p>
                    </form>
                </div>
                <div class="imgBx">
                    <img src="/assets/images/img10.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection    
