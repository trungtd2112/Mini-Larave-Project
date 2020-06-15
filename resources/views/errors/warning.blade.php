@if (Session::has('error'))
    <div class="alert alert-danger" role="alert">
        <strong>{{Session::get('error')}}</strong>
    </div>
@endif

@foreach ($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
        <strong>{{$error}}</strong>
    </div>
@endforeach