@extends('layouts.dashboard.main')

@section('content')
<section class="productForm">
    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="formBox">
            <div class="row50">
                <div class="inputBox">
                    <span>สินค้า</span>
                    <input type="text" name="name" value="{{ $product->name }}" placeholder="ชื่อสินค้า">
                </div>
                <div class="inputBox">
                    <span>หมวดหมู่</span>
                    <input type="text" name="category" value="{{ $product->category }}" placeholder="หมวดหมู่">
                </div>
            </div>
            <div class="row50">
                <div class="inputBox">
                    <span>ราคา</span>
                    <input type="text" name="price" value="{{ $product->price }}" placeholder="ราคา">
                </div>
                <div class="inputBox">
                    <span>สต็อก</span>
                    <input type="text" name="inventory" value="{{ $product->inventory }}" placeholder="สต็อก">
                </div>
            </div>
            <div class="row100">
                <div class="inputBox">
                    <span>รายละเอียดสินค้า</span>
                    <textarea name="description" placeholder="รายละเอียดสินค้า">{{ $product->description }}</textarea>
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