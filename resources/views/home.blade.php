@extends('layouts.app')

@section('content')
    <div class="mdc-card demo-card demo-basic-with-header login-template">
        <div class="demo-card__primary">
            <h2 class="demo-card__title mdc-typography mdc-typography--headline6">
                Dashboard
            </h2>
            <h6 class="demo-card__title mdc-typography mdc-typography--headline6">
                @if (session('status'))

                        {{ session('status') }}

                @endif
                    You are logged in!
            </h6>
        </div>
    </div>
@endsection
