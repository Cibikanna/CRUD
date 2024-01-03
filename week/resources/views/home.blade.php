@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Form') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <form method="post" action="{{route('layout-upload')}}" class="form">
                            @csrf
                            <label>Name</label>
                            <input type="text" name="name" autocomplete="off">
                            <br>
                            <label>Age</label>
                            <input type="number" name="age" autocomplete="off">
                            <br>

                            <label>Number</label>
                            <input type="number" name="number" autocomplete="off">
                            <br>

                            <button type="submit">send</button>
                        </form>

                        <a href="{{route('show-table')}}">Show table</a>
{{--                    {{ __('You are logged in!') }}--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
