@extends('layouts.app')

@section('content')
    <section id="movies" class="mt-4">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">

                @forelse($movies as $key => $movie)
                    <div class="col">
                        <div class="card p-4 h-100">
                            <div class="card-title">
                                <h3 class="text-center pb-2">{{ $movie->title }}</h3>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled">

                                    <li>
                                        <strong>Original title:</strong> {{ $movie->original_title }}
                                    </li>
                                    <li>
                                        <strong>Nationality:</strong> {{ $movie->nationality }}
                                    </li>
                                    <li>
                                        <strong>Release date:</strong> {{ $movie->date }}
                                    </li>
                                    <li>
                                        <strong>Vote:</strong> {{ $movie->vote }}
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                @empty
                    <h2>Nothing found</h2>
                @endforelse

            </div>
        </div>
    </section>
@endsection
