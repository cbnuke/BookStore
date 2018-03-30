@extends('layouts/theme_bootstrap4') 
@section('page-title')
<h1>ขายหนังสือ</h1>
<p>ส่วนจัดการหลัก ขายหนังสือ</p>
@endsection
 
@section('page-content')
<div class="card mb-12 box-shadow">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h3>รายการ ขายหนังสือ</h3>
            </div>
            <div class="col">
                <a href="{{route('sells.create')}}" class="btn btn-outline-primary float-right">ขายหนังสือ</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>ชื่อหนังสือ</th>
                    <th>ชื่อผู้ซื้อ</th>
                    <th>ราคาต้นทุน</th>
                    <th>ราคาขาย</th>
                    <th>ส่วนลด</th>
                    <th>คำสั่ง</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sells as $sell)
                <tr>
                    <td>{{$sell->id}}</td>
                    <td>{{$sell->book->name}}</td>
                    <td>{{$sell->member->name}}</td>
                    <td>{{$sell->book->import_price}}</td>
                    <td>{{$sell->book->sell_price}}</td>
                    <td>{{$sell->discount}}</td>
                    <td width="50">
                        <form action="{{route('sells.destroy',$sell->id)}}" method="post" class="form-inline">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">ลบ</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection