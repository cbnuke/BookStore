@extends('layouts/theme_bootstrap4') 
@section('page-title')
<h1>ประเภทหนังสือ</h1>
<p>เพิ่ม ประเภทหนังสือ</p>
@endsection
 
@section('page-content')
<div class="card mb-12 box-shadow">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h3>ข้อมูล ประเภทหนังสือ</h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('types.store')}}" method="post">
            <input type="hidden" name="_method" value="POST"> @csrf
            <div class="row">
                <div class="col-md-12">
                    <label>ชื่อ</label>
                    <input type="text" class="form-control" name="name" required="">
                </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg" type="submit">บันทึก</button>&nbsp;
            <a href="{{route('types.index')}}" class="btn btn-light btn-lg">ยกเลิก</a>
        </form>
    </div>
</div>
@endsection