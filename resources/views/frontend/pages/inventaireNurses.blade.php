@extends('frontend.layout.index')


@section('content')
<div class="grid lg:grid-cols-3 gap-3">

    @foreach ($inventaire as $item )
    <div class="">
        {{$item->name}}
    </div>
    @endforeach


</div>
@endsection
