@php
$title = '商品編集'；
@endphp

@extends('layouts.admin')

@section('content')
<section>
     <form action="{{ route('admin.item.update',['id' =>$id]) }}" method="post">
          @csrf
          <button class="btn btn-primary">update</button>
          <a href="{{ route('admin.item.index') }}" class="btn btn-outline-primary">Back</a>
     </form>
</section>
@endsection