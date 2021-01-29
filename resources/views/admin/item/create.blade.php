@php
$title = '商品追加';
@endphp
@extends('layouts.admin')
@section('content')
<section>
<form action="{{ route('admin.item.add') }}" method="post">
@csrf
<button class="btn btn-primary">Add</button>
<a href="{{ route('admin.item.index') }}" class="btn btn-outline-primary">Back</a>
</form>
</section>
@endsection
