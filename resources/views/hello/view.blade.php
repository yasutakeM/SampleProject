@extends('layouts.common')

@include('components.head')


@section('topArea')

{{$msg}}

<br>

{{$test}}

<br><br>


@foreach($products as $product)
<div style="color: #fff;">
    {{ $product->productName }}
</div>
@endforeach




@endsection