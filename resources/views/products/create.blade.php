@extends('layouts.dashboard.main')

@section('content')
<section class="productForm">
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="formBox">
            <div class="row50">
                <div class="inputBox">
                    <span>สินค้า</span>
                    <input type="text" name="name" placeholder="ชื่อสินค้า">
                </div>
                <div class="inputBox">
                    <span>หมวดหมู่</span>
                    <input type="text" name="category" placeholder="หมวดหมู่">
                </div>
            </div>
            <div class="row50">
                <div class="inputBox">
                    <span>ราคา</span>
                    <input type="text" name="price" placeholder="ราคา">
                </div>
                <div class="inputBox">
                    <span>สต็อก</span>
                    <input type="text" name="inventory" placeholder="สต็อก">
                </div>
            </div>
            <div class="row100">
                <div class="inputBox">
                    <span>รายละเอียดสินค้า</span>
                    <textarea name="description" placeholder="รายละเอียดสินค้า"></textarea>
                </div>
            </div>
            <div class="row100">
                <div class="inputBox">
                    <input type="submit" value="บันทึก">
                </div>
            </div>
        </div>
    </form>

</section>
@endsection