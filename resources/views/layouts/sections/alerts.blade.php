<div class="row flush-message">
    <div class="card-body px-5 mt-1">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close flash-msg-close"></button>
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close flash-msg-close"></button>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible" role="alert">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close flash-msg-close"></button>
            </div>
        @endif
    </div>
</div>

@section('page-script')
    <script>
        $(document).ready(function() {
            $('.flash-msg-close').click(function() {
                $('.flush-message').hide();
            });
        });

        setTimeout(function() {
            $('.flush-message').hide();
        }, 10000);
    </script>
@endsection
