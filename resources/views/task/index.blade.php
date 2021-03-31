@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Úlohy</h1>
                </div>
                <div class="panel-body">
                    @foreach($tasks as $task)
                        <article>
                            <h4>{{ $task->title }}</h4>
                            <div>{{ $task->description }}</div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
