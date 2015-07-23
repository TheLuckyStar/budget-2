
<div class="col-md-12">

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @foreach ($errors->getBag('default')->toArray() as $key => $messages)
        @if (is_int($key) && is_array($messages))
            @foreach ($messages as $message)
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @endforeach
        @endif
    @endforeach

</div>
