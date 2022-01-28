@extends('templates.default')

@section('content')
<main>
    <div class="container">
        <div class="row row-100">
            <div class="col">
                @foreach ($jokes as $joke)
                <div class="quote">
                    <div class="quote__setup">{{ $joke->setup }}</div>
                    <div class="quote__punchline">{{ $joke->setup }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</main>
@endsection