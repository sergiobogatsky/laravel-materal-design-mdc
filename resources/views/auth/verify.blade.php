@extends('layouts.app')

@section('content')
    <div class="mdc-card demo-card demo-basic-with-header verify-template">
        <div class="demo-card__primary">
            <h2 class="demo-card__title mdc-typography mdc-typography--headline6">
                {{ __('Verify Your Email Address') }}
            </h2>
        </div>
        <div class="mdc-card__primary-action demo-card__primary-action" tabindex="0">
            <form method="POST" action="{{ route('verification.resend') }}" autocomplete="false" autocomplete="off">
                @csrf
                <div class="mdc-card__media mdc-card__media">
                    @if (session('resent'))

                        {{ __('A fresh verification link has been sent to your email address.') }}

                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                </div>

                <div class="mdc-card__actions">
                    <div class="mdc-card__action-buttons">
                        <button type="submit" class="mdc-button mdc-card__action mdc-card__action--button">
                            <span class="mdc-button__ripple"></span>
                            {{ __('click here to request another') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
