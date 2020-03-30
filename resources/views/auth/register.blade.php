@extends('layouts.app')

@section('content')
    <div class="mdc-card demo-card demo-basic-with-header register-template">
        <div class="demo-card__primary">
            <h2 class="demo-card__title mdc-typography mdc-typography--headline6">{{ __('Register') }}</h2>
        </div>
        <div class="mdc-card__primary-action demo-card__primary-action" tabindex="0">
            <form method="POST" action="{{ route('register') }}" autocomplete="off">
                @csrf
                <div class="mdc-form-field" style="width: 100%">
                    <label class="name mdc-text-field mdc-text-field--fullwidth">
                        <div class="mdc-text-field__ripple"></div>
                        <input
                                id="name"
                                type="text"
                                name="name"
                                value="{{ old('name') }}"
                                required
                                class="mdc-text-field__input @error('name') is-invalid @enderror"
                                aria-labelledby="label-name"
                                readonly onfocus="this.removeAttribute('readonly');"
                                autofocus>
                        <span class="mdc-floating-label" id="label-name">{{ __('Name') }}</span>
                        <div class="mdc-line-ripple"></div>
                    </label>
                </div>
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
                                autocomplete="new-password">
                        <span class="mdc-floating-label" id="label-password">{{ __('Password') }}</span>
                        <div class="mdc-line-ripple"></div>
                    </label>
                </div>
                <div class="mdc-form-field" style="width: 100%">
                    <label class="password-confirm mdc-text-field mdc-text-field--fullwidth">
                        <div class="mdc-text-field__ripple"></div>
                        <input
                                id="password-confirm"
                                type="password"
                                name="password_confirmation"
                                required
                                class="mdc-text-field__input @error('password') is-invalid @enderror"
                                aria-labelledby="label-password-confirm"
                                readonly onfocus="this.removeAttribute('readonly');"
                                autocomplete="new-password">
                        <span class="mdc-floating-label" id="label-password-confirm">{{ __('Confirm Password') }}</span>
                        <div class="mdc-line-ripple"></div>
                    </label>
                </div>

                <div class="mdc-card__actions">
                    <div class="mdc-card__action-buttons">
                        <button type="submit" class="mdc-button mdc-card__action mdc-card__action--button">
                            <span class="mdc-button__ripple"></span>
                            {{ __('Register') }}
                        </button>
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
            @error('name')
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
