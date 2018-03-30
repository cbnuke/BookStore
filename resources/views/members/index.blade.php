@extends('layouts/theme_bootstrap4') 
@section('page-title')
<h1>สมาชิก</h1>
<p>ส่วนจัดการหลัก สมาชิก</p>
@endsection
 
@section('page-content')
<div class="card mb-12 box-shadow">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h3>รายการ สมาชิก</h3>
            </div>
            <div class="col">
                <a href="{{route('members.create')}}" class="btn btn-outline-primary float-right">เพิ่ม สมาชิก</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>ชื่อ</th>
                    <th>เบอร์โทร</th>
                    <th>คะแนน</th>
                    <th>เคยซื้อ</th>
                    <th>คำสั่ง</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($members as $member)
                <tr>
                    <td>{{$member->id}}</td>
                    <td>{{$member->name}}</td>
                    <td>{{$member->phone}}</td>
                    <td>{{$member->point}}</td>
                    <td>{{count($member->buys)}}</td>
                    <td width="200">
                        <form action="{{route('members.destroy',$member->id)}}" method="post" class="form-inline">
                            <a href="{{route('members.show',$member->id)}}" class="btn btn-primary">ดู / แก้ไข</a>&nbsp;
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