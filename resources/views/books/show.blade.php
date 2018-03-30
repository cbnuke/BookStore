@extends('layouts/theme_bootstrap4') 
@section('page-title')
<h1>หนังสือ</h1>
<p>ส่วนจัดการหลัก หนังสือ</p>
@endsection
 
@section('page-content')
<div class="card mb-6 box-shadow">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h3>ข้อมูล หนังสือ</h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('books.update',$book->id)}}" method="post">
            <input type="hidden" name="_method" value="PATCH"> @csrf
            <div class="row">
                <div class="col-md-12">
                    <label>ชื่อ</label>
                    <input type="text" class="form-control" name="name" value="{{$book->name}}" required=" ">
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12 ">
                    <label>คำอธิบาย</label>
                    <input type="text " class="form-control " name="des" value="{{$book->des}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>ประเภท</label>
                    <select name="types_id" class="form-control" required="">
                            @foreach ($types as $type)
                            @if($type->id==$book->types_id)
                            <option value="{{$type->id}}" selected>{{$type->name}}</option>
                            @else
                            <option value="{{$type->id}}">{{$type->name}}</option>
                            @endif
                            @endforeach
                        </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>ราคาต้นทุน</label>
                    <input type="number" class="form-control" name="import_price" value="{{$book->import_price}}" required=" ">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>ราคาขาย</label>
                    <input type="number " class="form-control " name="sell_price" value="{{$book->sell_price}}" required=" ">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>คะแนน</label>
                    <input type="number " class="form-control " name="point" value="{{$book->point}}" required=" ">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>ลิงค์รูปภาพ</label>
                    <input type="text " class="form-control " name="img" value="{{$book->img}}">
                </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg " type="submit ">บันทึก</button>&nbsp;
            <a href="{{route( 'books.index')}} " class="btn btn-light btn-lg ">ยกเลิก</a>
        </form>
    </div>
</div>
<hr class="mb-4 ">
<div class="card mb-6 box-shadow ">
    <div class="card-header ">
        <div class="row ">
            <div class="col ">
                <h3>รายการสมาชิก ที่ซื้อหนังสือนี้</h3>
            </div>
        </div>
    </div>
    <div class="card-body ">
        <table class="table ">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>ชื่อ</th>
                    <th>เบอร์โทร</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($book->sells as $sell)
                <tr>
                    <td>{{$sell->id}}</td>
                    <td>{{$sell->member->name}}</td>
                    <td>{{$sell->member->phone}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection