@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h2 class="panel-heading">Show product</h2>
                <div class="row py-3">
                    <div class="col-md-2">
                        <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-outline-danger">Удалить</button>
                        </form>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('product.edit', $product->id) }}" class="btn btn-outline-primary">Редактировать</a>
                    </div>
                </div>
                <div class="row">
                    <div class="panel-body">
    					<p>{{ $product->name }}</p>
                        <p>{{ $product->price }}</p>
    {{--                 <h3>Лекции курса </h3>
                    @foreach($lectures as $lecture)
                    <a href="/lecture/{{ $lecture->id }}">{{ $lecture->name }}</a>
                    @endforeach

                    <h3>Тесты курса </h3>
                    @foreach($tests as $test)
                    <a href="/test/{{ $test->id }}">{{ $test->name }}</a>
                    @endforeach --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection