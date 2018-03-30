@extends('layouts/theme_bootstrap4') 
@section('page-title')
<h1>ประเภทหนังสือ</h1>
<p>ส่วนจัดการหลัก ประเภทหนังสือ</p>
@endsection
 
@section('page-content')
<div class="card mb-6 box-shadow">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h3>ข้อมูล ประเภทหนังสือ</h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('types.update',$type->id)}}" method="post">
            <input type="hidden" name="_method" value="PATCH"> @csrf
            <div class="row">
                <div class="col-md-12">
                    <label>ชื่อ</label>
                    <input type="text" class="form-control" name="name" value="{{$type->name}}" required="">
                </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg" type="submit">บันทึก</button>&nbsp;
            <a href="{{route('types.index')}}" class="btn btn-light btn-lg">ยกเลิก</a>
        </form>
    </div>
</div>
<hr class="mb-4">
<div class="card mb-6 box-shadow">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h3>รายการหนังสือ ที่อยู่ในประเภทหนังสือนี้</h3>
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
                @foreach ($type->books as $book)
                <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->name}}</td>
                    <td>{{$book->des}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection