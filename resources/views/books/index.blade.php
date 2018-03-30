@extends('layouts/theme_bootstrap4') 
@section('page-title')
<h1>หนังสือ</h1>
<p>ส่วนจัดการหลัก หนังสือ</p>
@endsection
 
@section('page-content')
<div class="card mb-12 box-shadow">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h3>รายการ หนังสือ</h3>
            </div>
            <div class="col">
                <a href="{{route('books.create')}}" class="btn btn-outline-primary float-right">เพิ่ม หนังสือ</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>รูปภาพ</th>
                    <th>ชื่อ</th>
                    <th>คำอธิบาย</th>
                    <th>เคยขาย</th>
                    <th>คำสั่ง</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                <tr>
                    <td>{{$book->id}}</td>
                    <td>
                        @if($book->img)
                        <img src="{{$book->img}}" height="80">@endif
                    </td>
                    <td>{{$book->name}}</td>
                    <td>{{$book->des}}</td>
                    <td>{{count($book->sells)}}</td>
                    <td width="200">
                        <form action="{{route('books.destroy',$book->id)}}" method="post" class="form-inline">
                            <a href="{{route('books.show',$book->id)}}" class="btn btn-primary">ดู / แก้ไข</a>&nbsp; @csrf
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