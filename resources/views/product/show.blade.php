@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                <h2 class="panel-heading py-2">Show product</h2>
                    <div class="card p-4">
                        <div class="col-md-12">
        					<h3>{{ $product->name }}</h3>
                            <p>{{ $product->price }}</p>
                            {{-- <h3>Лекции курса </h3>
                            @foreach($lectures as $lecture)
                            <a href="/lecture/{{ $lecture->id }}">{{ $lecture->name }}</a>
                            @endforeach

                            <h3>Тесты курса </h3>
                            @foreach($tests as $test)
                            <a href="/test/{{ $test->id }}">{{ $test->name }}</a>
                            @endforeach --}}
                        </div>
                        <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-block btn-outline-danger my-2">Удалить</button>
                        </form>
                        <a href="{{ route('product.edit', $product->id) }}" class="btn btn-block btn-outline-primary my-2">Редактировать</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection