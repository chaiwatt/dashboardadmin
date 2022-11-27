<section class="navigation">
    <ul>
        <li>
            <a href="#">
                <span class="icon"><i class="fa-solid fa-apple-whole"></i></span>
                <span class="title"><h2>Brand Name</h2></span>
            </a>
        </li>
        <li>
            <a href="{{route('dashboard')}}">
                <span class="icon"><i class="fa-solid fa-house-chimney"></i></span>
                <span class="title">แดชบอร์ด</span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="icon"><i class="fa-solid fa-user"></i></span>
                <span class="title">ลูกค้า</span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="icon"><i class="fa-solid fa-comments"></i></span>
                <span class="title">กล่องข้อความ</span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="icon"><i class="fa-solid fa-circle-question"></i></span>
                <span class="title">ช่วยเหลือ</span>
            </a>
        </li>
        <li>
            <a href="{{ route('products.create') }}">
                <span class="icon"><i class="fa-solid fa-cart-plus"></i></span>
                <span class="title">เพิ่มสินค้า</span>
            </a>
        </li>
        <li>
            <a href="{{route('login')}}">
                <span class="icon"><i class="fa-solid fa-lock"></i></span>
                <span class="title">ลงทะเบียน/รับสมัคร</span>
            </a>
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span>
                <span class="title">ออกจากระบบ</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</section>