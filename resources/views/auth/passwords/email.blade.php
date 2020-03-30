@extends('layouts.app')

@section('content')
    <div class="mdc-card demo-card demo-basic-with-header email-template">
        <div class="demo-card__primary">
            <h2 class="demo-card__title mdc-typography mdc-typography--headline6">
                {{ __('Reset Password') }}
            </h2>
        </div>
        <div class="mdc-card__primary-action demo-card__primary-action" tabindex="0">
            <form method="POST" action="{{ route('password.email') }}" autocomplete="false" autocomplete="off">
                @csrf
                <div class="mdc-form-field" style="width: 100%">
                    <label class="email mdc-text-field mdc-text-field--fullwidth">
                        <div class="mdc-text-field__ripple"></div>
                        <input
                                id="email"
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                class="mdc-text-field__input @error('email') is-invalid @enderror"
                                aria-labelledby="label-email"
                                readonly onfocus="this.removeAttribute('readonly');"
                                autofocus>
                        <span class="mdc-floating-label" id="label-email">{{ __('E-Mail Address') }}</span>
                        <div class="mdc-line-ripple"></div>
                    </label>
                </div>
                <div class="mdc-card__actions">
                    <div class="mdc-card__action-buttons">
                        <button type="submit" class="mdc-button mdc-card__action mdc-card__action--button">
                            <span class="mdc-button__ripple"></span>
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </div>
            </form>
            @if (session('status'))
                <div class="mdc-snackbar mdc-snackbar-error">
                    <div class="mdc-snackbar__surface mdc-snackbar__surface-error">
                        <div class="mdc-snackbar__label"
                             role="status"
                             aria-live="polite">
                            {{ session('status') }}
                        </div>
                    </div>
                </div>
            @endif
            @error('email')
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
