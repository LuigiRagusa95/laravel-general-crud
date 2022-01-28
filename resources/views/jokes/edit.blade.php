@extends('templates.default')

@section('content')
<main>
    <div class="container">
        <div class="row row-100">
            <div class="col">
                <div class="content">
                    <div class="content__wrap">
                        <form action="{{route('jokes.update', $joke->id)}}" method="post" autocomplete="off">
                            @csrf
                            @method('PATCH')
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Setup</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="setup"
                                    value="{{$joke->setup}}">
                            </div>
                            <div class="mb-3">
                                <label for="punchline" class="form-label">Punchline</label>
                                <input type="text" class="form-control" id="punchline" name="punchline"
                                    value="{{$joke->setup}}">
                            </div>
                            <button class="btn btn-primary" type="submit">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection