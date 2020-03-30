@extends('layouts.app')

@section('content')
    <div class="mdc-card demo-card demo-basic-with-header confirm-template">
        <div class="demo-card__primary">
            <h2 class="demo-card__title mdc-typography mdc-typography--headline6">
                {{ __('Confirm Password') }}
            </h2>
            <h3 class="demo-card__title mdc-typography mdc-typography--subtitle2">
                {{ __('Please confirm your password before continuing.') }}
            </h3>
        </div>
        <div class="mdc-card__primary-action demo-card__primary-action" tabindex="0">
            <form method="POST" action="{{ route('password.confirm') }}" autocomplete="false" autocomplete="off">
                @csrf

                <div class="mdc-form-field" style="width: 100%">
                    <label class="password mdc-text-field mdc-text-field--fullwidth">
                        <div class="mdc-text-field__ripple"></div>
                        <input
                                id="password"
                                type="password"
                                name="password"
                                required
                                class="mdc-text-field__input @error('password') is-invalid @enderror"
                                aria-labelledby="label-password"
                                readonly onfocus="this.removeAttribute('readonly');"
                                autofocus
                                autocomplete="current-password">

                        <span class="mdc-floating-label" id="label-password">{{ __('Password') }}</span>
                        <div class="mdc-line-ripple"></div>
                    </label>
                </div>
                <div class="mdc-card__actions">
                    <div class="mdc-card__action-buttons">
                        <button type="submit" class="mdc-button mdc-card__action mdc-card__action--button">
                            <span class="mdc-button__ripple"></span>
                            {{ __('Confirm Password') }}
                        </button>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="mdc-button mdc-card__action mdc-card__action--button">
                                <span class="mdc-button__ripple"></span>
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
            @error('password')
            <div class="mdc-snackbar mdc-snackbar-error">
                <div class="mdc-snackbar__surface mdc-snackbar__surface-error">
                    <div class="mdc-snackbar__label"
                         role="status"
                         aria-live="polite">
                        {{ $message }}
                    </div>
                </div>
            </div>
            @enderror
        </div>
    </div>
@endsection
