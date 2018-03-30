@extends('layouts/theme_bootstrap4') 
@section('page-title')
<h1>หนังสือ</h1>
<p>เพิ่ม หนังสือ</p>
@endsection
 
@section('page-content')
<div class="card mb-12 box-shadow">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h3>ข้อมูล หนังสือ</h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('books.store')}}" method="post">
            <input type="hidden" name="_method" value="POST"> @csrf
            <div class="row">
                <div class="col-md-12">
                    <label>ชื่อ</label>
                    <input type="text" class="form-control" name="name" required="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>คำอธิบาย</label>
                    <input type="text" class="form-control" name="des">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>ประเภท</label>
                    <select name="types_id" class="form-control" required="">
                        @foreach ($types as $type)
                    <option value="{{$type->id}}">{{$type->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>ราคาต้นทุน</label>
                    <input type="number" class="form-control" name="import_price" required="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>ราคาขาย</label>
                    <input type="number" class="form-control" name="sell_price" required="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>คะแนน</label>
                    <input type="number" class="form-control" name="point" required="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>ลิงค์รูปภาพ</label>
                    <input type="text" class="form-control" name="img">
                </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg" type="submit">บันทึก</button>&nbsp;
            <a href="{{route('books.index')}}" class="btn btn-light btn-lg">ยกเลิก</a>
        </form>
    </div>
</div>
@endsection