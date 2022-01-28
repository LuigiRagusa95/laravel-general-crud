@extends('templates.default')

@section('content')
<main>
    <div class="container">
        <div class="row row-100">
            <div class="col">
                <div class="content">
                    @if (session('deleted'))
                    <div class="alert success">{{session('deleted')}}</div>
                    @endif
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
                                        <form action="{{route('jokes.destroy', $joke->id )}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="button" type="submit">
                                                <a>
                                                    <ion-icon name="trash-outline"></ion-icon>
                                                </a>
                                            </button>
                                        </form>
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