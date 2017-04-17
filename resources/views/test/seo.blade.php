@extends('layout.user')
@section('menu')
    @include('menu.menuUser')
@endsection('menu')
@section('content')
<div class="alert alert-danger">
    <div>Thành 666 : Không cho phép xóa bài kỹ thuật</div>
    <div>Thành 666 : Cho phép xóa bài hồi phục</div>
</div>
<div class="panel panel-default">
    <div class="panel-heading text-center">
        Nội dung sửa cho seo
    </div>
    <table class="table table-bordered">
        <tr class="active">
            <td>STT</td>
            <td>Ngày</td>
            <td>Nội dung</td>
            <td>#</td>
        </tr>
        <tr>
            <td>1</td>
            <td>17/4</td>
            <td>đổi link bài đuôi .htm thành đuôi .html</td>
            <td>#</td>
        </tr>
    </table>
</div>
@endsection('content')