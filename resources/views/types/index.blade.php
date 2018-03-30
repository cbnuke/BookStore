@extends('layouts/theme_bootstrap4') 
@section('page-title')
<h1>ประเภทหนังสือ</h1>
<p>ส่วนจัดการหลัก ประเภทหนังสือ</p>
@endsection
 
@section('page-content')
<div class="card mb-12 box-shadow">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h3>รายการ ประเภทหนังสือ</h3>
            </div>
            <div class="col">
                <a href="{{route('types.create')}}" class="btn btn-outline-primary float-right">เพิ่ม ประเภทหนังสือ</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>ชื่อ</th>
                    <th>จำนวนหนังสือ</th>
                    <th>คำสั่ง</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($types as $type)
                <tr>
                    <td>{{$type->id}}</td>
                    <td>{{$type->name}}</td>
                    <td>{{count($type->books)}}</td>
                    <td width="200">
                        <form action="{{route('types.destroy',$type->id)}}" method="post" class="form-inline">
                            <a href="{{route('types.show',$type->id)}}" class="btn btn-primary">ดู / แก้ไข</a>&nbsp; @csrf
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