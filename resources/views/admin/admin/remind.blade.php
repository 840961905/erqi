@extends('layout.admins')

@section('title',$title)

@section('content')
<div class="alert alert-danger alert-dismissable">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    <h1>权限不足，请联系管理员</h1>
</div>
@endsection
