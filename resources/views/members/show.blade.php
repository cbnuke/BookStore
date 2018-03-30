@extends('layouts/theme_bootstrap4') 
@section('page-title')
<h1>สมาชิก</h1>
<p>ส่วนจัดการหลัก สมาชิก</p>
@endsection
 
@section('page-content')
<div class="card mb-6 box-shadow">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h3>ข้อมูล สมาชิก</h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('members.update',$member->id)}}" method="post">
            <input type="hidden" name="_method" value="PATCH"> @csrf
            <div class="row">
                <div class="col-md-12">
                    <label>ชื่อ</label>
                    <input type="text" class="form-control" name="name" value="{{$member->name}}" required="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>เบอร์โทร</label>
                    <input type="text" class="form-control" name="phone" value="{{$member->phone}}" required="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>คะแนน</label>
                    <input type="number" class="form-control" name="point" value="{{$member->point}}" required="">
                </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg" type="submit">บันทึก</button>&nbsp;
            <a href="{{route('members.index')}}" class="btn btn-light btn-lg">ยกเลิก</a>
        </form>
    </div>
</div>
<hr class="mb-4">
<div class="card mb-6 box-shadow">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h3>รายการหนังสือ ที่เคยซื้อ</h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>ชื่อ</th>
                    <th>คำอธิบาย</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($member->buys as $sell)
                <tr>
                    <td>{{$sell->id}}</td>
                    <td>{{$sell->book->name}}</td>
                    <td>{{$sell->book->des}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection