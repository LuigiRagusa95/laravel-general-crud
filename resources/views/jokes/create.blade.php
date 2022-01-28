@extends('templates.default')

@section('content')
<main>
    <div class="container">
        <div class="row row-100">
            <div class="col">
                <div class="content">
                    <div class="content__wrap">
                        <form action="{{route('jokes.store')}}" method="post" autocomplete="off">
                            @csrf
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Setup</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="setup">
                            </div>
                            <div class="mb-3">
                                <label for="punchline" class="form-label">Punchline</label>
                                <input type="text" class="form-control" id="punchline" name="punchline">
                            </div>
                            <button class="btn btn-primary" type="submit">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection