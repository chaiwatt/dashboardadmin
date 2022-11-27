@extends('layouts.dashboard.main')

@section('content')
    <div class="cardBox">
        <div class="card">
            <div>
                <div class="numbers">{{ $report['view'] }}</div>
                <div class="cardName">เข้าดูสินค้า</div>
            </div>
            <div class="iconBox">
                <i class="fa-solid fa-eye"></i>
            </div>
        </div>
        <div class="card">
            <div>
                <div class="numbers">{{ $report['quantity'] }}</div>
                <div class="cardName">จำนวน</div>
            </div>
            <div class="iconBox">
                <i class="fa-solid fa-cart-shopping"></i>
            </div>  
        </div>
        <div class="card">
            <div>
                <div class="numbers">{{ $report['inventory'] }}</div>
                <div class="cardName">สต็อก</div>
            </div>
            <div class="iconBox">
                <i class="fa-solid fa-store"></i>
            </div>
        </div>
        <div class="card">
            <div>
                <div class="numbers">{{ $report['summary'] }}</div>
                <div class="cardName">คงคลัง</div>
            </div>
            <div class="iconBox">
                <i class="fa-solid fa-sack-dollar"></i>
            </div>
        </div>
    </div>

    <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>รายการสินค้า</h2>
                <a href="{{ route('products.create') }}" class="btn teal"><i class="fa-solid fa-plus"></i></a>
            </div>
            <table>
                <thead>
                    <tr>
                        <td>ชื่อสินค้า</td>
                        <td>ราคา</td>
                        <td>หมวดหมู่</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->category }}</td>
                            <td>
                                <form class="inline" action="{{ route('products.destroy',$product->id) }}" method="POST">
                                    <a href="{{ route('products.edit',$product->id) }}" class="btn sm primary">แก้ไข</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btnDel">ลบ</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach  
                </tbody>
            </table>
        </div>
        <div class="recentCustomers">
            <div class="cardHeader">
                <h2>รายการลูกค้า</h2>
            </div>
            <table>
                <tbody>
                    <tr>
                        <td width="60px"><div class="imgBx"><img src="/assets/images/img1.jpg" alt=""></div></td>
                        <td><h4>David<br><span>เชียงใหม่</span></h4></td>
                    </tr>
                    <tr>
                        <td width="60px"><div class="imgBx"><img src="/assets/images/img2.jpg" alt=""></div></td>
                        <td><h4>Muhummad<br><span>ลำพูน</span></h4></td>
                    </tr>
                    <tr>
                        <td width="60px"><div class="imgBx"><img src="/assets/images/img3.jpg" alt=""></div></td>
                        <td><h4>Amilia<br><span>ลำปาง</span></h4></td>
                    </tr>
                    <tr>
                        <td width="60px"><div class="imgBx"><img src="/assets/images/img4.jpg" alt=""></div></td>
                        <td><h4>Somchai<br><span>กรุงเทพ</span></h4></td>
                    </tr>
                    <tr>
                        <td width="60px"><div class="imgBx"><img src="/assets/images/img5.jpg" alt=""></div></td>
                        <td><h4>Kumo<br><span>กรุงเทพ</span></h4></td>
                    </tr>
                    <tr>
                        <td width="60px"><div class="imgBx"><img src="/assets/images/img6.jpg" alt=""></div></td>
                        <td><h4>Jame<br><span>กรุงเทพ</span></h4></td>
                    </tr>
                    <tr>
                        <td width="60px"><div class="imgBx"><img src="/assets/images/img7.jpg" alt=""></div></td>
                        <td><h4>Sarah<br><span>ชลบุรี</span></h4></td>
                    </tr>
                    <tr>
                        <td width="60px"><div class="imgBx"><img src="/assets/images/img8.jpg" alt=""></div></td>
                        <td><h4>Program<br><span>ระยอง</span> </h4></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection