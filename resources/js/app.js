//require('./bootstrap');
import {MDCTopAppBar} from '@material/top-app-bar';
import {MDCRipple} from '@material/ripple';
import {MDCDrawer} from '@material/drawer';
import mdcAutoInit from '@material/auto-init';
import {MDCFormField} from '@material/form-field';
import {MDCCheckbox} from '@material/checkbox';
import {MDCTextField} from '@material/textfield';
import {MDCSnackbar} from '@material/snackbar';

//app.blade.php
const iconButtonRipple = new MDCRipple(document.querySelector('.mdc-icon-button'));
const selector = '.mdc-button, .mdc-icon-button, .mdc-card__primary-action';
const ripples = [].map.call(document.querySelectorAll(selector), function(el) {
    return new MDCRipple(el);
});

iconButtonRipple.unbounded = true;
const topAppBar = MDCTopAppBar.attachTo(document.getElementById('app-bar'));
const drawer = new MDCDrawer(document.querySelector('.mdc-drawer'));
topAppBar.setScrollTarget(document.getElementById('main-content'));
topAppBar.listen('MDCTopAppBar:nav', () => {
    drawer.open = !drawer.open;
});

//login.blade.php
if (document.querySelector('.login-template') != null) {
    const textFieldEmail = new MDCTextField(document.querySelector('.email'));
    const textFieldPassword = new MDCTextField(document.querySelector('.password'));
    const checkbox = new MDCCheckbox(document.querySelector('.remember'));
    const formField = new MDCFormField(document.querySelector('.form-field-remember'));
    formField.input = checkbox;
    const buttonRipple = new MDCRipple(document.querySelector('.mdc-button'));
    if (document.querySelector('.mdc-snackbar') != null) {
        const snackbar = new MDCSnackbar(document.querySelector('.mdc-snackbar-error'));
        snackbar.open();
    }
}

//register.blade.php
if (document.querySelector('.register-template') != null) {
    const textFieldName = new MDCTextField(document.querySelector('.name'));
    const textFieldEmail = new MDCTextField(document.querySelector('.email'));
    const textFieldPassword = new MDCTextField(document.querySelector('.password'));
    const textFieldPasswordConfirm = new MDCTextField(document.querySelector('.password-confirm'));
    const buttonRipple = new MDCRipple(document.querySelector('.mdc-button'));
    if (document.querySelector('.mdc-snackbar') != null) {
        const snackbar = new MDCSnackbar(document.querySelector('.mdc-snackbar-error'));
        snackbar.open();
    }
}

//email.blade.php
if (document.querySelector('.email-template') != null) {
    const textFieldEmail = new MDCTextField(document.querySelector('.email'));
    const buttonRipple = new MDCRipple(document.querySelector('.mdc-button'));
    if (document.querySelector('.mdc-snackbar') != null) {
        const snackbar = new MDCSnackbar(document.querySelector('.mdc-snackbar-error'));
        snackbar.open();
    }
}

//reset.blade.php
if (document.querySelector('.reset-template') != null) {
    const textFieldEmail = new MDCTextField(document.querySelector('.email'));
    const textFieldPassword = new MDCTextField(document.querySelector('.password'));
    const textFieldPasswordConfirm = new MDCTextField(document.querySelector('.password-confirm'));
    const buttonRipple = new MDCRipple(document.querySelector('.mdc-button'));
    if (document.querySelector('.mdc-snackbar') != null) {
        const snackbar = new MDCSnackbar(document.querySelector('.mdc-snackbar-error'));
        snackbar.open();
    }
}

//confirm.blade.php
if (document.querySelector('.confirm-template') != null) {
    const textFieldPassword = new MDCTextField(document.querySelector('.password'));
    const buttonRipple = new MDCRipple(document.querySelector('.mdc-button'));
    if (document.querySelector('.mdc-snackbar') != null) {
        const snackbar = new MDCSnackbar(document.querySelector('.mdc-snackbar-error'));
        snackbar.open();
    }
}

//verify.blade.php
if (document.querySelector('.verify-template') != null) {
    const buttonRipple = new MDCRipple(document.querySelector('.mdc-button'));
}

//welcome.blade.php
if (document.querySelector('.welcome-card') != null) {
    const buttonRipple = new MDCRipple(document.querySelector('.mdc-button'));
}
