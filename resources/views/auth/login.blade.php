@extends('layouts.app')

@section('content')
    <div class="mdc-card demo-card demo-basic-with-header login-template">
        <div class="demo-card__primary">
            <h2 class="demo-card__title mdc-typography mdc-typography--headline6">
                {{ __('Login') }}
            </h2>
        </div>
        <div class="mdc-card__primary-action demo-card__primary-action" tabindex="0">
            <form method="POST" action="{{ route('login') }}" autocomplete="false" autocomplete="off">
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
                                autofocus>
                        <span class="mdc-floating-label" id="label-password">{{ __('Password') }}</span>
                        <div class="mdc-line-ripple"></div>
                    </label>
                </div>
                <div class="mdc-form-field form-field-remember" style="width: 100%">
                    <div class="mdc-checkbox remember">
                        <input type="checkbox"
                               name="remember" {{ old('remember') ? 'checked' : '' }}
                               class="mdc-checkbox__native-control"
                               id="remember"/>
                        <div class="mdc-checkbox__background">
                            <svg class="mdc-checkbox__checkmark"
                                 viewBox="0 0 24 24">
                                <path class="mdc-checkbox__checkmark-path"
                                      fill="none"
                                      d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                            </svg>
                            <div class="mdc-checkbox__mixedmark"></div>
                        </div>
                        <div class="mdc-checkbox__ripple"></div>
                    </div>
                    <label for="remember">{{ __('Remember Me') }}</label>
                </div>
                <div class="mdc-card__actions">
                    <div class="mdc-card__action-buttons">
                        <button type="submit" class="mdc-button mdc-card__action mdc-card__action--button">  <span class="mdc-button__ripple"></span> {{ __('Login') }}</button>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="mdc-button mdc-card__action mdc-card__action--button">  <span class="mdc-button__ripple"></span> {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
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
