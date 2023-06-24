<!-- Container (content) -->
@extends('layouts.master')
    @section('content')
    <main role="main" class="container">

        <h1 class="mt-5 text-danger">Acceuil</h1>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ex fugiat sit dolor. Nesciunt voluptate consequuntur error, eius possimus dicta veniam cumque obcaecati esse pariatur doloribus a aut voluptatem accusamus.

        <div class="row mt-5">
        @foreach ($blogs as $blog)

            @if ($blog['status'] == 1)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h2>{{ $blog['title'] }}</h2>
                            <p>{{ $blog['body'] }}</p>
                        </div>
                    </div>
                </div>
                @else
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h2>{{ $blog['title'] }}</h2>
                            <p>{{ $blog['body'] }}</p>
                            <div class="btn-sm btn-warning">En attente</div>
                        </div>
                    </div>
                </div>
            @endif

        @endforeach
        </div>
    </main>
@endsection