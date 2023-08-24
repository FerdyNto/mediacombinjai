@if ($errors->any())
    <div class="alert alert-warning">
        <ol>
            @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ol>
    </div>
@endif

@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    {{-- <script>
        alert() - > success('Berhasil', '{!! $message !!}');
    </script> --}}
@endif
