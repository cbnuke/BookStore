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
        <form action="{{route('sells.store')}}" method="post">
            <input type="hidden" name="_method" value="POST"> @csrf
            <div class="row">
                <div class="col-md-12">
                    <label>สมาชิก</label>
                    <select name="members_id" class="form-control" required="">
                            @foreach ($members as $member)
                        <option value="{{$member->id}}">{{$member->name}}</option>
                            @endforeach
                        </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>หนังสือ</label>
                    <select name="books_id" class="form-control" required="">
                                @foreach ($books as $book)
                            <option value="{{$book->id}}">{{$book->name}}</option>
                                @endforeach
                            </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>ส่วนลด</label>
                    <input type="number" class="form-control" name="discount" required="">
                </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg" type="submit">บันทึก</button>&nbsp;
            <a href="{{route('types.index')}}" class="btn btn-light btn-lg">ยกเลิก</a>
        </form>
    </div>
</div>
@endsection