@extends('default')
@section('body_class', 'start_page')
@section('content')
        <section class="newest-articles">
            @component('/components/slider-article')
            @endcomponent
        </section>

        <section class="list-articles">
        lista
        </section>
@endsection