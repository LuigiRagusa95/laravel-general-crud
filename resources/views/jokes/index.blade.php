@extends('templates.default')

@section('content')
<main>
    <div class="container">
        <div class="row row-100">
            <div class="col">
                <div class="content">
                    <div class="content__wrap">
                        @foreach ($jokes as $joke)
                        <div class="quote">
                            <div class="quote__options">
                                <ul>
                                    <li>
                                        <a href="{{ route('jokes.edit', $joke->id ) }}">
                                            <ion-icon name="shapes-outline"></ion-icon>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('jokes.destroy', $joke->id ) }}">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="quote__setup">{{ $joke->setup }}</div>
                            <div class="quote__punchline">{{ $joke->punchline }}</div>
                        </div>
                        @endforeach
                    </div>
                    {{ $jokes->links() }}
                </div>
            </div>
        </div>
    </div>
</main>
@endsection