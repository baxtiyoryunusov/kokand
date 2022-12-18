<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Elite Kokand | 404 </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Around - Multipurpose Bootstrap HTML Template">
    <meta name="keywords"
          content="bootstrap, business, corporate, coworking space, services, creative agency, dashboard, e-commerce, mobile app showcase, saas, multipurpose, product landing, shop, software, ui kit, web studio, landing, dark mode, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">
    <link rel="mask-icon" color="#6366f1" href="assets/favicon/safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#080032">
    <meta name="msapplication-config" content="assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="white">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <!-- Theme mode-->
    <script>
        let mode = window.localStorage.getItem('mode'),
            root = document.getElementsByTagName('html')[0];
        if (mode !== undefined && mode === 'dark') {
            root.classList.add('dark-mode');
        } else {
            root.classList.remove('dark-mode');
        }


    </script>
    <!-- Page loading styles-->
    <style>
        .page-loading {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-transition: all .4s .2s ease-in-out;
            transition: all .4s .2s ease-in-out;
            background-color: #fff;
            opacity: 0;
            visibility: hidden;
            z-index: 9999;
        }

        .dark-mode .page-loading {
            background-color: #121519;
        }

        .page-loading.active {
            opacity: 1;
            visibility: visible;
        }

        .page-loading-inner {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            text-align: center;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: opacity .2s ease-in-out;
            transition: opacity .2s ease-in-out;
            opacity: 0;
        }

        .page-loading.active > .page-loading-inner {
            opacity: 1;
        }

        .page-loading-inner > span {
            display: block;
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            font-weight: normal;
            color: #6f788b;
        }

        .dark-mode .page-loading-inner > span {
            color: #fff;
            opacity: .6;
        }

        .page-spinner {
            display: inline-block;
            width: 2.75rem;
            height: 2.75rem;
            margin-bottom: .75rem;
            vertical-align: text-bottom;
            background-color: #d7dde2;
            border-radius: 50%;
            opacity: 0;
            -webkit-animation: spinner .75s linear infinite;
            animation: spinner .75s linear infinite;
        }

        .dark-mode .page-spinner {
            background-color: rgba(255, 255, 255, .25);
        }

        @-webkit-keyframes spinner {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }
            50% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @keyframes spinner {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }
            50% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

    </style>
    <!-- Page loading scripts-->
    <script>
        (function () {
            window.onload = function () {
                const preloader = document.querySelector('.page-loading');
                preloader.classList.remove('active');
                setTimeout(function () {
                    preloader.remove();
                }, 1500);
            };
        })();

    </script>
    <!-- Import Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"
          id="google-font">
    <!-- Vendor styles-->
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="assets/css/theme.min.css">
    <style>
        :root {
            --ar-blue: #0d6efd;
            --ar-indigo: #6610f2;
            --ar-purple: #6f42c1;
            --ar-pink: #d63384;
            --ar-red: #dc3545;
            --ar-orange: #fd7e14;
            --ar-yellow: #ffc107;
            --ar-green: #198754;
            --ar-teal: #20c997;
            --ar-cyan: #0dcaf0;
            --ar-black: #000;
            --ar-white: #fff;
            --ar-gray: #858c97;
            --ar-gray-dark: #434a57;
            --ar-gray-100: #f6f9fc;
            --ar-gray-200: #edf1f5;
            --ar-gray-300: #e3e9ef;
            --ar-gray-400: #d7dde2;
            --ar-gray-500: #b4bbc3;
            --ar-gray-600: #858c97;
            --ar-gray-700: #576071;
            --ar-gray-800: #434a57;
            --ar-gray-900: #121519;
            --ar-primary: #448c74;
            --ar-secondary: #edf1f5;
            --ar-success: #3fca90;
            --ar-info: #3f7fca;
            --ar-warning: #edcb50;
            --ar-danger: #ed5050;
            --ar-light: #fff;
            --ar-dark: #121519;
            --ar-primary-rgb: 68, 140, 116;
            --ar-secondary-rgb: 237, 241, 245;
            --ar-success-rgb: 63, 202, 144;
            --ar-info-rgb: 63, 127, 202;
            --ar-warning-rgb: 237, 203, 80;
            --ar-danger-rgb: 237, 80, 80;
            --ar-light-rgb: 255, 255, 255;
            --ar-dark-rgb: 18, 21, 25;
            --ar-white-rgb: 255, 255, 255;
            --ar-black-rgb: 0, 0, 0;
            --ar-body-color-rgb: 87, 96, 113;
            --ar-body-bg-rgb: 255, 255, 255;
            --ar-font-sans-serif: "Inter", sans-serif;
            --ar-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            --ar-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
            --ar-root-font-size: 1rem;
            --ar-body-font-family: var(--ar-font-sans-serif);
            --ar-body-font-size: 1rem;
            --ar-body-font-weight: 400;
            --ar-body-line-height: 1.5;
            --ar-body-color: #576071;
            --ar-body-bg: #fff;
            --ar-border-width: 1px;
            --ar-border-style: solid;
            --ar-border-color: #e3e9ef;
            --ar-border-color-translucent: rgba(0, 0, 0, 0.175);
            --ar-border-radius: 1rem;
            --ar-border-radius-sm: calc(var(--ar-border-radius) * 0.75);
            --ar-border-radius-lg: calc(var(--ar-border-radius) * 1.125);
            --ar-border-radius-xl: calc(var(--ar-border-radius) * 1.5);
            --ar-border-radius-2xl: calc(var(--ar-border-radius) * 2.25);
            --ar-border-radius-pill: 50rem;
            --ar-link-color: #448c74;
            --ar-link-hover-color: #37715d;
            --ar-code-color: #e3116c;
            --ar-highlight-bg: #fff3cd
        }

        *, *::before, *::after {
            box-sizing: border-box
        }

        :root {
            font-size: var(--ar-root-font-size)
        }

        body {
            margin: 0;
            font-family: var(--ar-body-font-family);
            font-size: var(--ar-body-font-size);
            font-weight: var(--ar-body-font-weight);
            line-height: var(--ar-body-line-height);
            color: var(--ar-body-color);
            text-align: var(--ar-body-text-align);
            background-color: var(--ar-body-bg);
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
        }

        hr {
            margin: 0 0;
            color: var(--ar-border-color);
            border: 0;
            border-top: var(--ar-border-width) solid;
            opacity: 1
        }

        h6, .h6, h5, .h5, h4, .h4, h3, .h3, h2, .h2, h1, .h1 {
            margin-top: 0;
            margin-bottom: 1rem;
            font-weight: 600;
            line-height: 1.3;
            color: var(--ar-gray-900)
        }

        h1, .h1 {
            font-size: calc(1.375rem + 1.5vw)
        }

        @media (min-width: 1200px) {
            h1, .h1 {
                font-size: 2.5rem
            }
        }

        h2, .h2 {
            font-size: calc(1.325rem + 0.9vw)
        }

        @media (min-width: 1200px) {
            h2, .h2 {
                font-size: 2rem
            }
        }

        h3, .h3 {
            font-size: calc(1.3rem + 0.6vw)
        }

        @media (min-width: 1200px) {
            h3, .h3 {
                font-size: 1.75rem
            }
        }

        h4, .h4 {
            font-size: calc(1.275rem + 0.3vw)
        }

        @media (min-width: 1200px) {
            h4, .h4 {
                font-size: 1.5rem
            }
        }

        h5, .h5 {
            font-size: 1.25rem
        }

        h6, .h6 {
            font-size: 1rem
        }

        p {
            margin-top: 0;
            margin-bottom: 1.125rem
        }

        abbr[title] {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
            cursor: help;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none
        }

        address {
            margin-bottom: 1rem;
            font-style: normal;
            line-height: inherit
        }

        ol, ul {
            padding-left: 2rem
        }

        ol, ul, dl {
            margin-top: 0;
            margin-bottom: 1rem
        }

        ol ol, ul ul, ol ul, ul ol {
            margin-bottom: 0
        }

        dt {
            font-weight: 700
        }

        dd {
            margin-bottom: .5rem;
            margin-left: 0
        }

        blockquote {
            margin: 0 0 1rem
        }

        b, strong {
            font-weight: bolder
        }

        small, .small {
            font-size: 0.875em
        }

        mark, .mark {
            padding: .1875em;
            background-color: var(--ar-highlight-bg)
        }

        sub, sup {
            position: relative;
            font-size: 0.75em;
            line-height: 0;
            vertical-align: baseline
        }

        sub {
            bottom: -0.25em
        }

        sup {
            top: -0.5em
        }

        a {
            color: var(--ar-link-color);
            text-decoration: underline
        }

        a:hover {
            color: var(--ar-link-hover-color);
            text-decoration: none
        }

        a:not([href]):not([class]), a:not([href]):not([class]):hover {
            color: inherit;
            text-decoration: none
        }

        pre, code, kbd, samp {
            font-family: var(--ar-font-monospace);
            font-size: 1em
        }

        pre {
            display: block;
            margin-top: 0;
            margin-bottom: 1rem;
            overflow: auto;
            font-size: 0.875em;
            color: #fff
        }

        pre code {
            font-size: inherit;
            color: inherit;
            word-break: normal
        }

        code {
            font-size: 0.875em;
            color: var(--ar-code-color);
            word-wrap: break-word
        }

        a > code {
            color: inherit
        }

        kbd {
            padding: .1875rem .375rem;
            font-size: 0.875em;
            color: #fff;
            background-color: #010101;
            border-radius: calc(var(--ar-border-radius) * .75)
        }

        kbd kbd {
            padding: 0;
            font-size: 1em
        }

        figure {
            margin: 0 0 1rem
        }

        img, svg {
            vertical-align: middle
        }

        table {
            caption-side: bottom;
            border-collapse: collapse
        }

        caption {
            padding-top: .75rem;
            padding-bottom: .75rem;
            color: var(--ar-gray-600);
            text-align: left
        }

        th {
            font-weight: 600;
            text-align: inherit;
            text-align: -webkit-match-parent
        }

        thead, tbody, tfoot, tr, td, th {
            border-color: inherit;
            border-style: solid;
            border-width: 0
        }

        label {
            display: inline-block
        }

        button {
            border-radius: 0
        }

        button:focus:not(:focus-visible) {
            outline: 0
        }

        input, button, select, optgroup, textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit
        }

        button, select {
            text-transform: none
        }

        [role=button] {
            cursor: pointer
        }

        select {
            word-wrap: normal
        }

        select:disabled {
            opacity: 1
        }

        [list]:not([type=date]):not([type=datetime-local]):not([type=month]):not([type=week]):not([type=time])::-webkit-calendar-picker-indicator {
            display: none !important
        }

        button, [type=button], [type=reset], [type=submit] {
            -webkit-appearance: button
        }

        button:not(:disabled), [type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled) {
            cursor: pointer
        }

        ::-moz-focus-inner {
            padding: 0;
            border-style: none
        }

        textarea {
            resize: vertical
        }

        fieldset {
            min-width: 0;
            padding: 0;
            margin: 0;
            border: 0
        }

        legend {
            float: left;
            width: 100%;
            padding: 0;
            margin-bottom: .5rem;
            font-size: calc(1.275rem + 0.3vw);
            line-height: inherit
        }

        @media (min-width: 1200px) {
            legend {
                font-size: 1.5rem
            }
        }

        legend + * {
            clear: left
        }

        ::-webkit-datetime-edit-fields-wrapper, ::-webkit-datetime-edit-text, ::-webkit-datetime-edit-minute, ::-webkit-datetime-edit-hour-field, ::-webkit-datetime-edit-day-field, ::-webkit-datetime-edit-month-field, ::-webkit-datetime-edit-year-field {
            padding: 0
        }

        ::-webkit-inner-spin-button {
            height: auto
        }

        [type=search] {
            outline-offset: -2px;
            -webkit-appearance: textfield
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-color-swatch-wrapper {
            padding: 0
        }

        ::-webkit-file-upload-button {
            font: inherit;
            -webkit-appearance: button
        }

        ::file-selector-button {
            font: inherit;
            -webkit-appearance: button
        }

        output {
            display: inline-block
        }

        iframe {
            border: 0
        }

        summary {
            display: list-item;
            cursor: pointer
        }

        progress {
            vertical-align: baseline
        }

        [hidden] {
            display: none !important
        }

        .lead {
            font-size: calc(1.275rem + 0.3vw);
            font-weight: 400
        }

        @media (min-width: 1200px) {
            .lead {
                font-size: 1.5rem
            }
        }

        .display-1 {
            font-size: calc(1.625rem + 4.5vw);
            font-weight: 600;
            line-height: 1.3
        }

        @media (min-width: 1200px) {
            .display-1 {
                font-size: 5rem
            }
        }

        .display-2 {
            font-size: calc(1.575rem + 3.9vw);
            font-weight: 600;
            line-height: 1.3
        }

        @media (min-width: 1200px) {
            .display-2 {
                font-size: 4.5rem
            }
        }

        .display-3 {
            font-size: calc(1.525rem + 3.3vw);
            font-weight: 600;
            line-height: 1.3
        }

        @media (min-width: 1200px) {
            .display-3 {
                font-size: 4rem
            }
        }

        .display-4 {
            font-size: calc(1.475rem + 2.7vw);
            font-weight: 600;
            line-height: 1.3
        }

        @media (min-width: 1200px) {
            .display-4 {
                font-size: 3.5rem
            }
        }

        .display-5 {
            font-size: calc(1.425rem + 2.1vw);
            font-weight: 600;
            line-height: 1.3
        }

        @media (min-width: 1200px) {
            .display-5 {
                font-size: 3rem
            }
        }

        .display-6 {
            font-size: calc(1.3875rem + 1.65vw);
            font-weight: 600;
            line-height: 1.3
        }

        @media (min-width: 1200px) {
            .display-6 {
                font-size: 2.625rem
            }
        }

        .list-unstyled {
            padding-left: 0;
            list-style: none
        }

        .list-inline {
            padding-left: 0;
            list-style: none
        }

        .list-inline-item {
            display: inline-block
        }

        .list-inline-item:not(:last-child) {
            margin-right: 1rem
        }

        .initialism {
            font-size: 0.875em;
            text-transform: uppercase
        }

        .blockquote {
            margin-bottom: 1rem;
            font-size: calc(1.275rem + 0.3vw)
        }

        @media (min-width: 1200px) {
            .blockquote {
                font-size: 1.5rem
            }
        }

        .blockquote > :last-child {
            margin-bottom: 0
        }

        .blockquote-footer {
            margin-top: -1rem;
            margin-bottom: 1rem;
            font-size: 1rem;
            color: var(--ar-gray-900)
        }

        .blockquote-footer::before {
            content: "— "
        }

        .img-fluid {
            max-width: 100%;
            height: auto
        }

        .img-thumbnail {
            padding: .75rem;
            background-color: rgba(0, 0, 0, 0);
            border: var(--ar-border-width) solid var(--ar-border-color);
            border-radius: var(--ar-border-radius-2xl);
            max-width: 100%;
            height: auto
        }

        .figure {
            display: inline-block
        }

        .figure-img {
            margin-bottom: .5rem;
            line-height: 1
        }

        .figure-caption {
            font-size: calc(var(--ar-body-font-size) * 0.75);
            color: var(--ar-gray-600)
        }

        .container, .container-fluid, .container-xxl, .container-xl, .container-lg, .container-md, .container-sm {
            --ar-gutter-x: 1.5rem;
            --ar-gutter-y: 0;
            width: 100%;
            padding-right: calc(var(--ar-gutter-x) * .5);
            padding-left: calc(var(--ar-gutter-x) * .5);
            margin-right: auto;
            margin-left: auto
        }

        @media (min-width: 576px) {
            .container-sm, .container {
                max-width: 95%
            }
        }

        @media (min-width: 768px) {
            .container-md, .container-sm, .container {
                max-width: 95%
            }
        }

        @media (min-width: 992px) {
            .container-lg, .container-md, .container-sm, .container {
                max-width: 95%
            }
        }

        @media (min-width: 1200px) {
            .container-xl, .container-lg, .container-md, .container-sm, .container {
                max-width: 95%
            }
        }

        @media (min-width: 1400px) {
            .container-xxl, .container-xl, .container-lg, .container-md, .container-sm, .container {
                max-width: 1320px
            }
        }

        .row {
            --ar-gutter-x: 1.5rem;
            --ar-gutter-y: 0;
            display: flex;
            flex-wrap: wrap;
            margin-top: calc(-1 * var(--ar-gutter-y));
            margin-right: calc(-0.5 * var(--ar-gutter-x));
            margin-left: calc(-0.5 * var(--ar-gutter-x))
        }

        .row > * {
            flex-shrink: 0;
            width: 100%;
            max-width: 100%;
            padding-right: calc(var(--ar-gutter-x) * .5);
            padding-left: calc(var(--ar-gutter-x) * .5);
            margin-top: var(--ar-gutter-y)
        }

        .col {
            flex: 1 0 0%
        }

        .row-cols-auto > * {
            flex: 0 0 auto;
            width: auto
        }

        .row-cols-1 > * {
            flex: 0 0 auto;
            width: 100%
        }

        .row-cols-2 > * {
            flex: 0 0 auto;
            width: 50%
        }

        .row-cols-3 > * {
            flex: 0 0 auto;
            width: 33.3333333333%
        }

        .row-cols-4 > * {
            flex: 0 0 auto;
            width: 25%
        }

        .row-cols-5 > * {
            flex: 0 0 auto;
            width: 20%
        }

        .row-cols-6 > * {
            flex: 0 0 auto;
            width: 16.6666666667%
        }

        .col-auto {
            flex: 0 0 auto;
            width: auto
        }

        .col-1 {
            flex: 0 0 auto;
            width: 8.33333333%
        }

        .col-2 {
            flex: 0 0 auto;
            width: 16.66666667%
        }

        .col-3 {
            flex: 0 0 auto;
            width: 25%
        }

        .col-4 {
            flex: 0 0 auto;
            width: 33.33333333%
        }

        .col-5 {
            flex: 0 0 auto;
            width: 41.66666667%
        }

        .col-6 {
            flex: 0 0 auto;
            width: 50%
        }

        .col-7 {
            flex: 0 0 auto;
            width: 58.33333333%
        }

        .col-8 {
            flex: 0 0 auto;
            width: 66.66666667%
        }

        .col-9 {
            flex: 0 0 auto;
            width: 75%
        }

        .col-10 {
            flex: 0 0 auto;
            width: 83.33333333%
        }

        .col-11 {
            flex: 0 0 auto;
            width: 91.66666667%
        }

        .col-12 {
            flex: 0 0 auto;
            width: 100%
        }

        .offset-1 {
            margin-left: 8.33333333%
        }

        .offset-2 {
            margin-left: 16.66666667%
        }

        .offset-3 {
            margin-left: 25%
        }

        .offset-4 {
            margin-left: 33.33333333%
        }

        .offset-5 {
            margin-left: 41.66666667%
        }

        .offset-6 {
            margin-left: 50%
        }

        .offset-7 {
            margin-left: 58.33333333%
        }

        .offset-8 {
            margin-left: 66.66666667%
        }

        .offset-9 {
            margin-left: 75%
        }

        .offset-10 {
            margin-left: 83.33333333%
        }

        .offset-11 {
            margin-left: 91.66666667%
        }

        .g-0, .gx-0 {
            --ar-gutter-x: 0
        }

        .g-0, .gy-0 {
            --ar-gutter-y: 0
        }

        .g-1, .gx-1 {
            --ar-gutter-x: 0.25rem
        }

        .g-1, .gy-1 {
            --ar-gutter-y: 0.25rem
        }

        .g-2, .gx-2 {
            --ar-gutter-x: 0.5rem
        }

        .g-2, .gy-2 {
            --ar-gutter-y: 0.5rem
        }

        .g-3, .gx-3 {
            --ar-gutter-x: 1rem
        }

        .g-3, .gy-3 {
            --ar-gutter-y: 1rem
        }

        .g-4, .gx-4 {
            --ar-gutter-x: 1.5rem
        }

        .g-4, .gy-4 {
            --ar-gutter-y: 1.5rem
        }

        .g-5, .gx-5 {
            --ar-gutter-x: 3rem
        }

        .g-5, .gy-5 {
            --ar-gutter-y: 3rem
        }

        @media (min-width: 576px) {
            .col-sm {
                flex: 1 0 0%
            }

            .row-cols-sm-auto > * {
                flex: 0 0 auto;
                width: auto
            }

            .row-cols-sm-1 > * {
                flex: 0 0 auto;
                width: 100%
            }

            .row-cols-sm-2 > * {
                flex: 0 0 auto;
                width: 50%
            }

            .row-cols-sm-3 > * {
                flex: 0 0 auto;
                width: 33.3333333333%
            }

            .row-cols-sm-4 > * {
                flex: 0 0 auto;
                width: 25%
            }

            .row-cols-sm-5 > * {
                flex: 0 0 auto;
                width: 20%
            }

            .row-cols-sm-6 > * {
                flex: 0 0 auto;
                width: 16.6666666667%
            }

            .col-sm-auto {
                flex: 0 0 auto;
                width: auto
            }

            .col-sm-1 {
                flex: 0 0 auto;
                width: 8.33333333%
            }

            .col-sm-2 {
                flex: 0 0 auto;
                width: 16.66666667%
            }

            .col-sm-3 {
                flex: 0 0 auto;
                width: 25%
            }

            .col-sm-4 {
                flex: 0 0 auto;
                width: 33.33333333%
            }

            .col-sm-5 {
                flex: 0 0 auto;
                width: 41.66666667%
            }

            .col-sm-6 {
                flex: 0 0 auto;
                width: 50%
            }

            .col-sm-7 {
                flex: 0 0 auto;
                width: 58.33333333%
            }

            .col-sm-8 {
                flex: 0 0 auto;
                width: 66.66666667%
            }

            .col-sm-9 {
                flex: 0 0 auto;
                width: 75%
            }

            .col-sm-10 {
                flex: 0 0 auto;
                width: 83.33333333%
            }

            .col-sm-11 {
                flex: 0 0 auto;
                width: 91.66666667%
            }

            .col-sm-12 {
                flex: 0 0 auto;
                width: 100%
            }

            .offset-sm-0 {
                margin-left: 0
            }

            .offset-sm-1 {
                margin-left: 8.33333333%
            }

            .offset-sm-2 {
                margin-left: 16.66666667%
            }

            .offset-sm-3 {
                margin-left: 25%
            }

            .offset-sm-4 {
                margin-left: 33.33333333%
            }

            .offset-sm-5 {
                margin-left: 41.66666667%
            }

            .offset-sm-6 {
                margin-left: 50%
            }

            .offset-sm-7 {
                margin-left: 58.33333333%
            }

            .offset-sm-8 {
                margin-left: 66.66666667%
            }

            .offset-sm-9 {
                margin-left: 75%
            }

            .offset-sm-10 {
                margin-left: 83.33333333%
            }

            .offset-sm-11 {
                margin-left: 91.66666667%
            }

            .g-sm-0, .gx-sm-0 {
                --ar-gutter-x: 0
            }

            .g-sm-0, .gy-sm-0 {
                --ar-gutter-y: 0
            }

            .g-sm-1, .gx-sm-1 {
                --ar-gutter-x: 0.25rem
            }

            .g-sm-1, .gy-sm-1 {
                --ar-gutter-y: 0.25rem
            }

            .g-sm-2, .gx-sm-2 {
                --ar-gutter-x: 0.5rem
            }

            .g-sm-2, .gy-sm-2 {
                --ar-gutter-y: 0.5rem
            }

            .g-sm-3, .gx-sm-3 {
                --ar-gutter-x: 1rem
            }

            .g-sm-3, .gy-sm-3 {
                --ar-gutter-y: 1rem
            }

            .g-sm-4, .gx-sm-4 {
                --ar-gutter-x: 1.5rem
            }

            .g-sm-4, .gy-sm-4 {
                --ar-gutter-y: 1.5rem
            }

            .g-sm-5, .gx-sm-5 {
                --ar-gutter-x: 3rem
            }

            .g-sm-5, .gy-sm-5 {
                --ar-gutter-y: 3rem
            }
        }

        @media (min-width: 768px) {
            .col-md {
                flex: 1 0 0%
            }

            .row-cols-md-auto > * {
                flex: 0 0 auto;
                width: auto
            }

            .row-cols-md-1 > * {
                flex: 0 0 auto;
                width: 100%
            }

            .row-cols-md-2 > * {
                flex: 0 0 auto;
                width: 50%
            }

            .row-cols-md-3 > * {
                flex: 0 0 auto;
                width: 33.3333333333%
            }

            .row-cols-md-4 > * {
                flex: 0 0 auto;
                width: 25%
            }

            .row-cols-md-5 > * {
                flex: 0 0 auto;
                width: 20%
            }

            .row-cols-md-6 > * {
                flex: 0 0 auto;
                width: 16.6666666667%
            }

            .col-md-auto {
                flex: 0 0 auto;
                width: auto
            }

            .col-md-1 {
                flex: 0 0 auto;
                width: 8.33333333%
            }

            .col-md-2 {
                flex: 0 0 auto;
                width: 16.66666667%
            }

            .col-md-3 {
                flex: 0 0 auto;
                width: 25%
            }

            .col-md-4 {
                flex: 0 0 auto;
                width: 33.33333333%
            }

            .col-md-5 {
                flex: 0 0 auto;
                width: 41.66666667%
            }

            .col-md-6 {
                flex: 0 0 auto;
                width: 50%
            }

            .col-md-7 {
                flex: 0 0 auto;
                width: 58.33333333%
            }

            .col-md-8 {
                flex: 0 0 auto;
                width: 66.66666667%
            }

            .col-md-9 {
                flex: 0 0 auto;
                width: 75%
            }

            .col-md-10 {
                flex: 0 0 auto;
                width: 83.33333333%
            }

            .col-md-11 {
                flex: 0 0 auto;
                width: 91.66666667%
            }

            .col-md-12 {
                flex: 0 0 auto;
                width: 100%
            }

            .offset-md-0 {
                margin-left: 0
            }

            .offset-md-1 {
                margin-left: 8.33333333%
            }

            .offset-md-2 {
                margin-left: 16.66666667%
            }

            .offset-md-3 {
                margin-left: 25%
            }

            .offset-md-4 {
                margin-left: 33.33333333%
            }

            .offset-md-5 {
                margin-left: 41.66666667%
            }

            .offset-md-6 {
                margin-left: 50%
            }

            .offset-md-7 {
                margin-left: 58.33333333%
            }

            .offset-md-8 {
                margin-left: 66.66666667%
            }

            .offset-md-9 {
                margin-left: 75%
            }

            .offset-md-10 {
                margin-left: 83.33333333%
            }

            .offset-md-11 {
                margin-left: 91.66666667%
            }

            .g-md-0, .gx-md-0 {
                --ar-gutter-x: 0
            }

            .g-md-0, .gy-md-0 {
                --ar-gutter-y: 0
            }

            .g-md-1, .gx-md-1 {
                --ar-gutter-x: 0.25rem
            }

            .g-md-1, .gy-md-1 {
                --ar-gutter-y: 0.25rem
            }

            .g-md-2, .gx-md-2 {
                --ar-gutter-x: 0.5rem
            }

            .g-md-2, .gy-md-2 {
                --ar-gutter-y: 0.5rem
            }

            .g-md-3, .gx-md-3 {
                --ar-gutter-x: 1rem
            }

            .g-md-3, .gy-md-3 {
                --ar-gutter-y: 1rem
            }

            .g-md-4, .gx-md-4 {
                --ar-gutter-x: 1.5rem
            }

            .g-md-4, .gy-md-4 {
                --ar-gutter-y: 1.5rem
            }

            .g-md-5, .gx-md-5 {
                --ar-gutter-x: 3rem
            }

            .g-md-5, .gy-md-5 {
                --ar-gutter-y: 3rem
            }
        }

        @media (min-width: 992px) {
            .col-lg {
                flex: 1 0 0%
            }

            .row-cols-lg-auto > * {
                flex: 0 0 auto;
                width: auto
            }

            .row-cols-lg-1 > * {
                flex: 0 0 auto;
                width: 100%
            }

            .row-cols-lg-2 > * {
                flex: 0 0 auto;
                width: 50%
            }

            .row-cols-lg-3 > * {
                flex: 0 0 auto;
                width: 33.3333333333%
            }

            .row-cols-lg-4 > * {
                flex: 0 0 auto;
                width: 25%
            }

            .row-cols-lg-5 > * {
                flex: 0 0 auto;
                width: 20%
            }

            .row-cols-lg-6 > * {
                flex: 0 0 auto;
                width: 16.6666666667%
            }

            .col-lg-auto {
                flex: 0 0 auto;
                width: auto
            }

            .col-lg-1 {
                flex: 0 0 auto;
                width: 8.33333333%
            }

            .col-lg-2 {
                flex: 0 0 auto;
                width: 16.66666667%
            }

            .col-lg-3 {
                flex: 0 0 auto;
                width: 25%
            }

            .col-lg-4 {
                flex: 0 0 auto;
                width: 33.33333333%
            }

            .col-lg-5 {
                flex: 0 0 auto;
                width: 41.66666667%
            }

            .col-lg-6 {
                flex: 0 0 auto;
                width: 50%
            }

            .col-lg-7 {
                flex: 0 0 auto;
                width: 58.33333333%
            }

            .col-lg-8 {
                flex: 0 0 auto;
                width: 66.66666667%
            }

            .col-lg-9 {
                flex: 0 0 auto;
                width: 75%
            }

            .col-lg-10 {
                flex: 0 0 auto;
                width: 83.33333333%
            }

            .col-lg-11 {
                flex: 0 0 auto;
                width: 91.66666667%
            }

            .col-lg-12 {
                flex: 0 0 auto;
                width: 100%
            }

            .offset-lg-0 {
                margin-left: 0
            }

            .offset-lg-1 {
                margin-left: 8.33333333%
            }

            .offset-lg-2 {
                margin-left: 16.66666667%
            }

            .offset-lg-3 {
                margin-left: 25%
            }

            .offset-lg-4 {
                margin-left: 33.33333333%
            }

            .offset-lg-5 {
                margin-left: 41.66666667%
            }

            .offset-lg-6 {
                margin-left: 50%
            }

            .offset-lg-7 {
                margin-left: 58.33333333%
            }

            .offset-lg-8 {
                margin-left: 66.66666667%
            }

            .offset-lg-9 {
                margin-left: 75%
            }

            .offset-lg-10 {
                margin-left: 83.33333333%
            }

            .offset-lg-11 {
                margin-left: 91.66666667%
            }

            .g-lg-0, .gx-lg-0 {
                --ar-gutter-x: 0
            }

            .g-lg-0, .gy-lg-0 {
                --ar-gutter-y: 0
            }

            .g-lg-1, .gx-lg-1 {
                --ar-gutter-x: 0.25rem
            }

            .g-lg-1, .gy-lg-1 {
                --ar-gutter-y: 0.25rem
            }

            .g-lg-2, .gx-lg-2 {
                --ar-gutter-x: 0.5rem
            }

            .g-lg-2, .gy-lg-2 {
                --ar-gutter-y: 0.5rem
            }

            .g-lg-3, .gx-lg-3 {
                --ar-gutter-x: 1rem
            }

            .g-lg-3, .gy-lg-3 {
                --ar-gutter-y: 1rem
            }

            .g-lg-4, .gx-lg-4 {
                --ar-gutter-x: 1.5rem
            }

            .g-lg-4, .gy-lg-4 {
                --ar-gutter-y: 1.5rem
            }

            .g-lg-5, .gx-lg-5 {
                --ar-gutter-x: 3rem
            }

            .g-lg-5, .gy-lg-5 {
                --ar-gutter-y: 3rem
            }
        }

        @media (min-width: 1200px) {
            .col-xl {
                flex: 1 0 0%
            }

            .row-cols-xl-auto > * {
                flex: 0 0 auto;
                width: auto
            }

            .row-cols-xl-1 > * {
                flex: 0 0 auto;
                width: 100%
            }

            .row-cols-xl-2 > * {
                flex: 0 0 auto;
                width: 50%
            }

            .row-cols-xl-3 > * {
                flex: 0 0 auto;
                width: 33.3333333333%
            }

            .row-cols-xl-4 > * {
                flex: 0 0 auto;
                width: 25%
            }

            .row-cols-xl-5 > * {
                flex: 0 0 auto;
                width: 20%
            }

            .row-cols-xl-6 > * {
                flex: 0 0 auto;
                width: 16.6666666667%
            }

            .col-xl-auto {
                flex: 0 0 auto;
                width: auto
            }

            .col-xl-1 {
                flex: 0 0 auto;
                width: 8.33333333%
            }

            .col-xl-2 {
                flex: 0 0 auto;
                width: 16.66666667%
            }

            .col-xl-3 {
                flex: 0 0 auto;
                width: 25%
            }

            .col-xl-4 {
                flex: 0 0 auto;
                width: 33.33333333%
            }

            .col-xl-5 {
                flex: 0 0 auto;
                width: 41.66666667%
            }

            .col-xl-6 {
                flex: 0 0 auto;
                width: 50%
            }

            .col-xl-7 {
                flex: 0 0 auto;
                width: 58.33333333%
            }

            .col-xl-8 {
                flex: 0 0 auto;
                width: 66.66666667%
            }

            .col-xl-9 {
                flex: 0 0 auto;
                width: 75%
            }

            .col-xl-10 {
                flex: 0 0 auto;
                width: 83.33333333%
            }

            .col-xl-11 {
                flex: 0 0 auto;
                width: 91.66666667%
            }

            .col-xl-12 {
                flex: 0 0 auto;
                width: 100%
            }

            .offset-xl-0 {
                margin-left: 0
            }

            .offset-xl-1 {
                margin-left: 8.33333333%
            }

            .offset-xl-2 {
                margin-left: 16.66666667%
            }

            .offset-xl-3 {
                margin-left: 25%
            }

            .offset-xl-4 {
                margin-left: 33.33333333%
            }

            .offset-xl-5 {
                margin-left: 41.66666667%
            }

            .offset-xl-6 {
                margin-left: 50%
            }

            .offset-xl-7 {
                margin-left: 58.33333333%
            }

            .offset-xl-8 {
                margin-left: 66.66666667%
            }

            .offset-xl-9 {
                margin-left: 75%
            }

            .offset-xl-10 {
                margin-left: 83.33333333%
            }

            .offset-xl-11 {
                margin-left: 91.66666667%
            }

            .g-xl-0, .gx-xl-0 {
                --ar-gutter-x: 0
            }

            .g-xl-0, .gy-xl-0 {
                --ar-gutter-y: 0
            }

            .g-xl-1, .gx-xl-1 {
                --ar-gutter-x: 0.25rem
            }

            .g-xl-1, .gy-xl-1 {
                --ar-gutter-y: 0.25rem
            }

            .g-xl-2, .gx-xl-2 {
                --ar-gutter-x: 0.5rem
            }

            .g-xl-2, .gy-xl-2 {
                --ar-gutter-y: 0.5rem
            }

            .g-xl-3, .gx-xl-3 {
                --ar-gutter-x: 1rem
            }

            .g-xl-3, .gy-xl-3 {
                --ar-gutter-y: 1rem
            }

            .g-xl-4, .gx-xl-4 {
                --ar-gutter-x: 1.5rem
            }

            .g-xl-4, .gy-xl-4 {
                --ar-gutter-y: 1.5rem
            }

            .g-xl-5, .gx-xl-5 {
                --ar-gutter-x: 3rem
            }

            .g-xl-5, .gy-xl-5 {
                --ar-gutter-y: 3rem
            }
        }

        @media (min-width: 1400px) {
            .col-xxl {
                flex: 1 0 0%
            }

            .row-cols-xxl-auto > * {
                flex: 0 0 auto;
                width: auto
            }

            .row-cols-xxl-1 > * {
                flex: 0 0 auto;
                width: 100%
            }

            .row-cols-xxl-2 > * {
                flex: 0 0 auto;
                width: 50%
            }

            .row-cols-xxl-3 > * {
                flex: 0 0 auto;
                width: 33.3333333333%
            }

            .row-cols-xxl-4 > * {
                flex: 0 0 auto;
                width: 25%
            }

            .row-cols-xxl-5 > * {
                flex: 0 0 auto;
                width: 20%
            }

            .row-cols-xxl-6 > * {
                flex: 0 0 auto;
                width: 16.6666666667%
            }

            .col-xxl-auto {
                flex: 0 0 auto;
                width: auto
            }

            .col-xxl-1 {
                flex: 0 0 auto;
                width: 8.33333333%
            }

            .col-xxl-2 {
                flex: 0 0 auto;
                width: 16.66666667%
            }

            .col-xxl-3 {
                flex: 0 0 auto;
                width: 25%
            }

            .col-xxl-4 {
                flex: 0 0 auto;
                width: 33.33333333%
            }

            .col-xxl-5 {
                flex: 0 0 auto;
                width: 41.66666667%
            }

            .col-xxl-6 {
                flex: 0 0 auto;
                width: 50%
            }

            .col-xxl-7 {
                flex: 0 0 auto;
                width: 58.33333333%
            }

            .col-xxl-8 {
                flex: 0 0 auto;
                width: 66.66666667%
            }

            .col-xxl-9 {
                flex: 0 0 auto;
                width: 75%
            }

            .col-xxl-10 {
                flex: 0 0 auto;
                width: 83.33333333%
            }

            .col-xxl-11 {
                flex: 0 0 auto;
                width: 91.66666667%
            }

            .col-xxl-12 {
                flex: 0 0 auto;
                width: 100%
            }

            .offset-xxl-0 {
                margin-left: 0
            }

            .offset-xxl-1 {
                margin-left: 8.33333333%
            }

            .offset-xxl-2 {
                margin-left: 16.66666667%
            }

            .offset-xxl-3 {
                margin-left: 25%
            }

            .offset-xxl-4 {
                margin-left: 33.33333333%
            }

            .offset-xxl-5 {
                margin-left: 41.66666667%
            }

            .offset-xxl-6 {
                margin-left: 50%
            }

            .offset-xxl-7 {
                margin-left: 58.33333333%
            }

            .offset-xxl-8 {
                margin-left: 66.66666667%
            }

            .offset-xxl-9 {
                margin-left: 75%
            }

            .offset-xxl-10 {
                margin-left: 83.33333333%
            }

            .offset-xxl-11 {
                margin-left: 91.66666667%
            }

            .g-xxl-0, .gx-xxl-0 {
                --ar-gutter-x: 0
            }

            .g-xxl-0, .gy-xxl-0 {
                --ar-gutter-y: 0
            }

            .g-xxl-1, .gx-xxl-1 {
                --ar-gutter-x: 0.25rem
            }

            .g-xxl-1, .gy-xxl-1 {
                --ar-gutter-y: 0.25rem
            }

            .g-xxl-2, .gx-xxl-2 {
                --ar-gutter-x: 0.5rem
            }

            .g-xxl-2, .gy-xxl-2 {
                --ar-gutter-y: 0.5rem
            }

            .g-xxl-3, .gx-xxl-3 {
                --ar-gutter-x: 1rem
            }

            .g-xxl-3, .gy-xxl-3 {
                --ar-gutter-y: 1rem
            }

            .g-xxl-4, .gx-xxl-4 {
                --ar-gutter-x: 1.5rem
            }

            .g-xxl-4, .gy-xxl-4 {
                --ar-gutter-y: 1.5rem
            }

            .g-xxl-5, .gx-xxl-5 {
                --ar-gutter-x: 3rem
            }

            .g-xxl-5, .gy-xxl-5 {
                --ar-gutter-y: 3rem
            }
        }

        .table {
            --ar-table-color: var(--ar-body-color);
            --ar-table-bg: transparent;
            --ar-table-border-color: var(--ar-border-color);
            --ar-table-accent-bg: transparent;
            --ar-table-striped-color: var(--ar-body-color);
            --ar-table-striped-bg: rgba(0, 0, 0, 0.0375);
            --ar-table-active-color: var(--ar-body-color);
            --ar-table-active-bg: rgba(0, 0, 0, 0.05);
            --ar-table-hover-color: var(--ar-body-color);
            --ar-table-hover-bg: rgba(0, 0, 0, 0.05);
            width: 100%;
            margin-bottom: 1rem;
            color: var(--ar-table-color);
            vertical-align: top;
            border-color: var(--ar-table-border-color)
        }

        .table > :not(caption) > * > * {
            padding: .75rem .75rem;
            background-color: var(--ar-table-bg);
            border-bottom-width: 1px;
            box-shadow: inset 0 0 0 9999px var(--ar-table-accent-bg)
        }

        .table > tbody {
            vertical-align: inherit
        }

        .table > thead {
            vertical-align: bottom
        }

        .table-group-divider {
            border-top: 2px solid currentcolor
        }

        .caption-top {
            caption-side: top
        }

        .table-sm > :not(caption) > * > * {
            padding: .375rem .375rem
        }

        .table-bordered > :not(caption) > * {
            border-width: 1px 0
        }

        .table-bordered > :not(caption) > * > * {
            border-width: 0 1px
        }

        .table-borderless > :not(caption) > * > * {
            border-bottom-width: 0
        }

        .table-borderless > :not(:first-child) {
            border-top-width: 0
        }

        .table-striped > tbody > tr:nth-of-type(odd) > * {
            --ar-table-accent-bg: var(--ar-table-striped-bg);
            color: var(--ar-table-striped-color)
        }

        .table-striped-columns > :not(caption) > tr > :nth-child(even) {
            --ar-table-accent-bg: var(--ar-table-striped-bg);
            color: var(--ar-table-striped-color)
        }

        .table-active {
            --ar-table-accent-bg: var(--ar-table-active-bg);
            color: var(--ar-table-active-color)
        }

        .table-hover > tbody > tr:hover > * {
            --ar-table-accent-bg: var(--ar-table-hover-bg);
            color: var(--ar-table-hover-color)
        }

        .table-dark {
            --ar-table-color: #fff;
            --ar-table-bg: #121519;
            --ar-table-border-color: #36383c;
            --ar-table-striped-bg: #1b1e22;
            --ar-table-striped-color: #fff;
            --ar-table-active-bg: #1e2125;
            --ar-table-active-color: #fff;
            --ar-table-hover-bg: #1e2125;
            --ar-table-hover-color: #fff;
            color: var(--ar-table-color);
            border-color: var(--ar-table-border-color)
        }

        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch
        }

        @media (max-width: 575.98px) {
            .table-responsive-sm {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch
            }
        }

        @media (max-width: 767.98px) {
            .table-responsive-md {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch
            }
        }

        @media (max-width: 991.98px) {
            .table-responsive-lg {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch
            }
        }

        @media (max-width: 1199.98px) {
            .table-responsive-xl {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch
            }
        }

        @media (max-width: 1399.98px) {
            .table-responsive-xxl {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch
            }
        }

        .form-label {
            margin-bottom: .3125rem;
            font-size: calc(var(--ar-body-font-size) * 0.875);
            font-weight: 500;
            color: var(--ar-gray-900)
        }

        .col-form-label {
            padding-top: calc(0.825rem + var(--ar-border-width));
            padding-bottom: calc(0.825rem + var(--ar-border-width));
            margin-bottom: 0;
            font-size: inherit;
            font-weight: 500;
            line-height: 1.4;
            color: var(--ar-gray-900)
        }

        .col-form-label-lg {
            padding-top: calc(1rem + var(--ar-border-width));
            padding-bottom: calc(1rem + var(--ar-border-width));
            font-size: 1rem
        }

        .col-form-label-sm {
            padding-top: calc(0.575rem + var(--ar-border-width));
            padding-bottom: calc(0.575rem + var(--ar-border-width));
            font-size: calc(var(--ar-body-font-size) * 0.75)
        }

        .form-text {
            margin-top: .25rem;
            font-size: calc(var(--ar-body-font-size) * 0.75);
            color: var(--ar-gray-600)
        }

        .form-control {
            display: block;
            width: 100%;
            padding: .825rem 1rem;
            font-size: calc(var(--ar-body-font-size) * 0.875);
            font-weight: 400;
            line-height: 1.4;
            color: var(--ar-body-color);
            background-color: rgba(0, 0, 0, 0);
            background-clip: padding-box;
            border: var(--ar-border-width) solid var(--ar-gray-400);
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: var(--ar-border-radius);
            transition: border-color .15s ease-in-out
        }

        @media (prefers-reduced-motion: reduce) {
            .form-control {
                transition: none
            }
        }

        .form-control[type=file] {
            overflow: hidden
        }

        .form-control[type=file]:not(:disabled):not([readonly]) {
            cursor: pointer
        }

        .form-control:focus {
            color: var(--ar-body-color);
            background-color: rgba(0, 0, 0, 0);
            border-color: var(--ar-gray-700);
            outline: 0;
            box-shadow: unset
        }

        .form-control::-webkit-date-and-time-value {
            height: 1.4em
        }

        .form-control::-moz-placeholder {
            color: var(--ar-gray-500);
            opacity: 1
        }

        .form-control::placeholder {
            color: var(--ar-gray-500);
            opacity: 1
        }

        .form-control:disabled {
            background-color: var(--ar-gray-100);
            border-color: var(--ar-gray-300);
            opacity: 1
        }

        .form-control::-webkit-file-upload-button {
            padding: .825rem 1rem;
            margin: -0.825rem -1rem;
            -webkit-margin-end: 1rem;
            margin-inline-end: 1rem;
            color: var(--ar-body-color);
            background-color: rgba(0, 0, 0, 0);
            pointer-events: none;
            border-color: inherit;
            border-style: solid;
            border-width: 0;
            border-inline-end-width: var(--ar-border-width);
            border-radius: 0;
            -webkit-transition: color .2s ease-in-out, background-color .2s ease-in-out, border-color .2s ease-in-out, box-shadow .2s ease-in-out;
            transition: color .2s ease-in-out, background-color .2s ease-in-out, border-color .2s ease-in-out, box-shadow .2s ease-in-out
        }

        .form-control::file-selector-button {
            padding: .825rem 1rem;
            margin: -0.825rem -1rem;
            -webkit-margin-end: 1rem;
            margin-inline-end: 1rem;
            color: var(--ar-body-color);
            background-color: rgba(0, 0, 0, 0);
            pointer-events: none;
            border-color: inherit;
            border-style: solid;
            border-width: 0;
            border-inline-end-width: var(--ar-border-width);
            border-radius: 0;
            transition: color .2s ease-in-out, background-color .2s ease-in-out, border-color .2s ease-in-out, box-shadow .2s ease-in-out
        }

        @media (prefers-reduced-motion: reduce) {
            .form-control::-webkit-file-upload-button {
                -webkit-transition: none;
                transition: none
            }

            .form-control::file-selector-button {
                transition: none
            }
        }

        .form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button {
            background-color: rgba(0, 0, 0, .05)
        }

        .form-control:hover:not(:disabled):not([readonly])::file-selector-button {
            background-color: rgba(0, 0, 0, .05)
        }

        .form-control-plaintext {
            display: block;
            width: 100%;
            padding: .825rem 0;
            margin-bottom: 0;
            line-height: 1.4;
            color: #576071;
            background-color: rgba(0, 0, 0, 0);
            border: solid rgba(0, 0, 0, 0);
            border-width: var(--ar-border-width) 0
        }

        .form-control-plaintext:focus {
            outline: 0
        }

        .form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
            padding-right: 0;
            padding-left: 0
        }

        .form-control-sm {
            min-height: calc(1.4em + 1.15rem + calc(var(--ar-border-width) * 2));
            padding: .575rem .875rem;
            font-size: calc(var(--ar-body-font-size) * 0.75);
            border-radius: var(--ar-border-radius-sm)
        }

        .form-control-sm::-webkit-file-upload-button {
            padding: .575rem .875rem;
            margin: -0.575rem -0.875rem;
            -webkit-margin-end: .875rem;
            margin-inline-end: .875rem
        }

        .form-control-sm::file-selector-button {
            padding: .575rem .875rem;
            margin: -0.575rem -0.875rem;
            -webkit-margin-end: .875rem;
            margin-inline-end: .875rem
        }

        .form-control-lg {
            min-height: calc(1.4em + 2rem + calc(var(--ar-border-width) * 2));
            padding: 1rem 1.125rem;
            font-size: 1rem;
            border-radius: var(--ar-border-radius-lg)
        }

        .form-control-lg::-webkit-file-upload-button {
            padding: 1rem 1.125rem;
            margin: -1rem -1.125rem;
            -webkit-margin-end: 1.125rem;
            margin-inline-end: 1.125rem
        }

        .form-control-lg::file-selector-button {
            padding: 1rem 1.125rem;
            margin: -1rem -1.125rem;
            -webkit-margin-end: 1.125rem;
            margin-inline-end: 1.125rem
        }

        textarea.form-control {
            min-height: calc(1.4em + 1.65rem + calc(var(--ar-border-width) * 2))
        }

        textarea.form-control-sm {
            min-height: calc(1.4em + 1.15rem + calc(var(--ar-border-width) * 2))
        }

        textarea.form-control-lg {
            min-height: calc(1.4em + 2rem + calc(var(--ar-border-width) * 2))
        }

        .form-control-color {
            width: 3rem;
            height: calc(1.4em + 1.65rem + calc(var(--ar-border-width) * 2));
            padding: .825rem
        }

        .form-control-color:not(:disabled):not([readonly]) {
            cursor: pointer
        }

        .form-control-color::-moz-color-swatch {
            border: 0 !important;
            border-radius: var(--ar-border-radius)
        }

        .form-control-color::-webkit-color-swatch {
            border-radius: var(--ar-border-radius)
        }

        .form-control-color.form-control-sm {
            height: calc(1.4em + 1.15rem + calc(var(--ar-border-width) * 2))
        }

        .form-control-color.form-control-lg {
            height: calc(1.4em + 2rem + calc(var(--ar-border-width) * 2))
        }

        .form-select {
            display: block;
            width: 100%;
            padding: .825rem 3rem .825rem 1rem;
            -moz-padding-start: calc(1rem - 3px);
            font-size: calc(var(--ar-body-font-size) * 0.875);
            font-weight: 400;
            line-height: 1.4;
            color: var(--ar-body-color);
            background-color: rgba(0, 0, 0, 0);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23697488' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 1rem center;
            background-size: 16px 12px;
            border: var(--ar-border-width) solid var(--ar-gray-400);
            border-radius: var(--ar-border-radius);
            transition: border-color .15s ease-in-out;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none
        }

        @media (prefers-reduced-motion: reduce) {
            .form-select {
                transition: none
            }
        }

        .form-select:focus {
            border-color: var(--ar-gray-700);
            outline: 0;
            box-shadow: 0 0 0 0 rgba(68, 140, 116, .25)
        }

        .form-select[multiple], .form-select[size]:not([size="1"]) {
            padding-right: 1rem;
            background-image: none
        }

        .form-select:disabled {
            background-color: var(--ar-gray-100);
            border-color: var(--ar-gray-300)
        }

        .form-select:-moz-focusring {
            color: rgba(0, 0, 0, 0);
            text-shadow: 0 0 0 var(--ar-body-color)
        }

        .form-select-sm {
            padding-top: .575rem;
            padding-bottom: .575rem;
            padding-left: .875rem;
            font-size: calc(var(--ar-body-font-size) * 0.75);
            border-radius: var(--ar-border-radius-sm)
        }

        .form-select-lg {
            padding-top: 1rem;
            padding-bottom: 1rem;
            padding-left: 1.125rem;
            font-size: 1rem;
            border-radius: var(--ar-border-radius-lg)
        }

        .form-check {
            display: block;
            min-height: 1.5rem;
            padding-left: 1.625rem;
            margin-bottom: .325rem
        }

        .form-check .form-check-input {
            float: left;
            margin-left: -1.625rem
        }

        .form-check-reverse {
            padding-right: 1.625rem;
            padding-left: 0;
            text-align: right
        }

        .form-check-reverse .form-check-input {
            float: right;
            margin-right: -1.625rem;
            margin-left: 0
        }

        .form-check-input {
            width: 1.125rem;
            height: 1.125rem;
            margin-top: .1875rem;
            vertical-align: top;
            background-color: rgba(0, 0, 0, 0);
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            border: 1px solid var(--ar-gray-500);
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            print-color-adjust: exact
        }

        .form-check-input[type=checkbox] {
            border-radius: .375rem
        }

        .form-check-input[type=radio] {
            border-radius: 50%
        }

        .form-check-input:active {
            filter: brightness(90%)
        }

        .form-check-input:focus {
            border-color: var(--ar-gray-700);
            outline: 0;
            box-shadow: 0 0 0 0 rgba(68, 140, 116, .25)
        }

        .form-check-input:checked {
            background-color: var(--ar-primary);
            border-color: var(--ar-primary)
        }

        .form-check-input:checked[type=checkbox] {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='m6 10 3 3 6-6'/%3e%3c/svg%3e")
        }

        .form-check-input:checked[type=radio] {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='2' fill='%23fff'/%3e%3c/svg%3e")
        }

        .form-check-input[type=checkbox]:indeterminate {
            background-color: #448c74;
            border-color: #448c74;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e")
        }

        .form-check-input:disabled {
            pointer-events: none;
            filter: none;
            opacity: .6
        }

        .form-check-input[disabled] ~ .form-check-label, .form-check-input:disabled ~ .form-check-label {
            cursor: default;
            opacity: .6
        }

        .form-check-label {
            color: var(--ar-body-color)
        }

        .form-switch {
            padding-left: 3.375em
        }

        .form-switch .form-check-input {
            width: 2.875em;
            margin-left: -3.375em;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
            background-position: left center;
            border-radius: 2.875em;
            transition: background-position .15s ease-in-out
        }

        @media (prefers-reduced-motion: reduce) {
            .form-switch .form-check-input {
                transition: none
            }
        }

        .form-switch .form-check-input:focus {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e")
        }

        .form-switch .form-check-input:checked {
            background-position: right center;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e")
        }

        .form-switch.form-check-reverse {
            padding-right: 3.375em;
            padding-left: 0
        }

        .form-switch.form-check-reverse .form-check-input {
            margin-right: -3.375em;
            margin-left: 0
        }

        .form-check-inline {
            display: inline-block;
            margin-right: 1rem
        }

        .btn-check {
            position: absolute;
            clip: rect(0, 0, 0, 0);
            pointer-events: none
        }

        .btn-check[disabled] + .btn, .btn-check:disabled + .btn {
            pointer-events: none;
            filter: none;
            opacity: .65
        }

        .form-range {
            width: 100%;
            height: 1rem;
            padding: 0;
            background-color: rgba(0, 0, 0, 0);
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none
        }

        .form-range:focus {
            outline: 0
        }

        .form-range:focus::-webkit-slider-thumb {
            box-shadow: 0 0 0 1px #fff, unset
        }

        .form-range:focus::-moz-range-thumb {
            box-shadow: 0 0 0 1px #fff, unset
        }

        .form-range::-moz-focus-outer {
            border: 0
        }

        .form-range::-webkit-slider-thumb {
            width: 1rem;
            height: 1rem;
            margin-top: -0.25rem;
            background-color: var(--ar-primary);
            border: 0;
            border-radius: 1rem;
            -webkit-transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            -webkit-appearance: none;
            appearance: none
        }

        @media (prefers-reduced-motion: reduce) {
            .form-range::-webkit-slider-thumb {
                -webkit-transition: none;
                transition: none
            }
        }

        .form-range::-webkit-slider-thumb:active {
            background-color: var(--ar-primary)
        }

        .form-range::-webkit-slider-runnable-track {
            width: 100%;
            height: .5rem;
            color: rgba(0, 0, 0, 0);
            cursor: pointer;
            background-color: var(--ar-gray-300);
            border-color: rgba(0, 0, 0, 0);
            border-radius: 1rem
        }

        .form-range::-moz-range-thumb {
            width: 1rem;
            height: 1rem;
            background-color: var(--ar-primary);
            border: 0;
            border-radius: 1rem;
            -moz-transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            -moz-appearance: none;
            appearance: none
        }

        @media (prefers-reduced-motion: reduce) {
            .form-range::-moz-range-thumb {
                -moz-transition: none;
                transition: none
            }
        }

        .form-range::-moz-range-thumb:active {
            background-color: var(--ar-primary)
        }

        .form-range::-moz-range-track {
            width: 100%;
            height: .5rem;
            color: rgba(0, 0, 0, 0);
            cursor: pointer;
            background-color: var(--ar-gray-300);
            border-color: rgba(0, 0, 0, 0);
            border-radius: 1rem
        }

        .form-range:disabled {
            pointer-events: none
        }

        .form-range:disabled::-webkit-slider-thumb {
            background-color: #b4bbc3
        }

        .form-range:disabled::-moz-range-thumb {
            background-color: #b4bbc3
        }

        .form-floating {
            position: relative
        }

        .form-floating > .form-control, .form-floating > .form-control-plaintext, .form-floating > .form-select {
            height: calc(3.5rem + calc(var(--ar-border-width) * 2));
            line-height: 1.25
        }

        .form-floating > label {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            padding: 1rem 1rem;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            pointer-events: none;
            border: var(--ar-border-width) solid rgba(0, 0, 0, 0);
            transform-origin: 0 0;
            transition: opacity .1s ease-in-out, transform .1s ease-in-out
        }

        @media (prefers-reduced-motion: reduce) {
            .form-floating > label {
                transition: none
            }
        }

        .form-floating > .form-control, .form-floating > .form-control-plaintext {
            padding: 1rem 1rem
        }

        .form-floating > .form-control::-moz-placeholder, .form-floating > .form-control-plaintext::-moz-placeholder {
            color: rgba(0, 0, 0, 0)
        }

        .form-floating > .form-control::placeholder, .form-floating > .form-control-plaintext::placeholder {
            color: rgba(0, 0, 0, 0)
        }

        .form-floating > .form-control:not(:-moz-placeholder-shown), .form-floating > .form-control-plaintext:not(:-moz-placeholder-shown) {
            padding-top: 1.625rem;
            padding-bottom: .625rem
        }

        .form-floating > .form-control:focus, .form-floating > .form-control:not(:placeholder-shown), .form-floating > .form-control-plaintext:focus, .form-floating > .form-control-plaintext:not(:placeholder-shown) {
            padding-top: 1.625rem;
            padding-bottom: .625rem
        }

        .form-floating > .form-control:-webkit-autofill, .form-floating > .form-control-plaintext:-webkit-autofill {
            padding-top: 1.625rem;
            padding-bottom: .625rem
        }

        .form-floating > .form-select {
            padding-top: 1.625rem;
            padding-bottom: .625rem
        }

        .form-floating > .form-control:not(:-moz-placeholder-shown) ~ label {
            opacity: 1;
            transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem)
        }

        .form-floating > .form-control:focus ~ label, .form-floating > .form-control:not(:placeholder-shown) ~ label, .form-floating > .form-control-plaintext ~ label, .form-floating > .form-select ~ label {
            opacity: 1;
            transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem)
        }

        .form-floating > .form-control:-webkit-autofill ~ label {
            opacity: 1;
            transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem)
        }

        .form-floating > .form-control-plaintext ~ label {
            border-width: var(--ar-border-width) 0
        }

        .input-group {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: stretch;
            width: 100%
        }

        .input-group > .form-control, .input-group > .form-select, .input-group > .form-floating {
            position: relative;
            flex: 1 1 auto;
            width: 1%;
            min-width: 0
        }

        .input-group > .form-control:focus, .input-group > .form-select:focus, .input-group > .form-floating:focus-within {
            z-index: 3
        }

        .input-group .btn {
            position: relative;
            z-index: 2
        }

        .input-group .btn:focus {
            z-index: 3
        }

        .input-group-text {
            display: flex;
            align-items: center;
            padding: .825rem .75rem;
            font-size: calc(var(--ar-body-font-size) * 0.875);
            font-weight: 500;
            line-height: 1.4;
            color: var(--ar-body-color);
            text-align: center;
            white-space: nowrap;
            background-color: rgba(0, 0, 0, 0);
            border: var(--ar-border-width) solid rgba(0, 0, 0, 0);
            border-radius: var(--ar-border-radius)
        }

        .input-group-lg > .form-control, .input-group-lg > .form-select, .input-group-lg > .input-group-text, .input-group-lg > .btn {
            padding: 1rem 1.125rem;
            font-size: 1rem;
            border-radius: var(--ar-border-radius-lg)
        }

        .input-group-sm > .form-control, .input-group-sm > .form-select, .input-group-sm > .input-group-text, .input-group-sm > .btn {
            padding: .575rem .875rem;
            font-size: calc(var(--ar-body-font-size) * 0.75);
            border-radius: var(--ar-border-radius-sm)
        }

        .input-group-lg > .form-select, .input-group-sm > .form-select {
            padding-right: 4rem
        }

        .input-group:not(.has-validation) > :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating), .input-group:not(.has-validation) > .dropdown-toggle:nth-last-child(n+3), .input-group:not(.has-validation) > .form-floating:not(:last-child) > .form-control, .input-group:not(.has-validation) > .form-floating:not(:last-child) > .form-select {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .input-group.has-validation > :nth-last-child(n+3):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating), .input-group.has-validation > .dropdown-toggle:nth-last-child(n+4), .input-group.has-validation > .form-floating:nth-last-child(n+3) > .form-control, .input-group.has-validation > .form-floating:nth-last-child(n+3) > .form-select {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .input-group > :not(:first-child):not(.dropdown-menu):not(.form-floating):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback), .input-group > .form-floating:not(:first-child) > .form-control, .input-group > .form-floating:not(:first-child) > .form-select {
            margin-left: -var(--ar-border-width);
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .valid-feedback {
            display: none;
            width: 100%;
            margin-top: .25rem;
            font-size: calc(var(--ar-body-font-size) * 0.75);
            color: #3fca90
        }

        .valid-tooltip {
            position: absolute;
            top: 100%;
            z-index: 5;
            display: none;
            max-width: 100%;
            padding: .375rem .75rem;
            margin-top: .1rem;
            font-size: calc(var(--ar-body-font-size) * 0.75);
            color: #000;
            background-color: rgba(63, 202, 144, .9);
            border-radius: calc(var(--ar-border-radius) * .5)
        }

        .was-validated :valid ~ .valid-feedback, .was-validated :valid ~ .valid-tooltip, .is-valid ~ .valid-feedback, .is-valid ~ .valid-tooltip {
            display: block
        }

        .was-validated .form-control:valid, .form-control.is-valid {
            border-color: #3fca90;
            padding-right: calc(1.4em + 1.65rem);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%233fca90'%3e%3cpath d='M12 3.9c-4.5 0-8.1 3.6-8.1 8.1s3.6 8.1 8.1 8.1 8.1-3.6 8.1-8.1-3.6-8.1-8.1-8.1zM2.5 12c0-5.2 4.3-9.5 9.5-9.5s9.5 4.2 9.5 9.5c0 5.2-4.2 9.5-9.5 9.5-5.2 0-9.5-4.3-9.5-9.5zm14.3-4c.3.2.4.6.2.9L12.4 15c-.4.5-1.2.6-1.7.1L8 12.4c-.3-.3-.3-.7 0-1s.7-.3 1 0l2.6 2.6L16 8c0-.2.5-.2.8 0z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right calc(0.35em + 0.4125rem) center;
            background-size: calc(0.7em + 0.825rem) calc(0.7em + 0.825rem)
        }

        .was-validated .form-control:valid:focus, .form-control.is-valid:focus {
            border-color: #3fca90;
            box-shadow: 0 0 0 0 rgba(63, 202, 144, .25)
        }

        .was-validated textarea.form-control:valid, textarea.form-control.is-valid {
            padding-right: calc(1.4em + 1.65rem);
            background-position: top calc(0.35em + 0.4125rem) right calc(0.35em + 0.4125rem)
        }

        .was-validated .form-select:valid, .form-select.is-valid {
            border-color: #3fca90
        }

        .was-validated .form-select:valid:not([multiple]):not([size]), .was-validated .form-select:valid:not([multiple])[size="1"], .form-select.is-valid:not([multiple]):not([size]), .form-select.is-valid:not([multiple])[size="1"] {
            padding-right: 5.5rem;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23697488' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%233fca90'%3e%3cpath d='M12 3.9c-4.5 0-8.1 3.6-8.1 8.1s3.6 8.1 8.1 8.1 8.1-3.6 8.1-8.1-3.6-8.1-8.1-8.1zM2.5 12c0-5.2 4.3-9.5 9.5-9.5s9.5 4.2 9.5 9.5c0 5.2-4.2 9.5-9.5 9.5-5.2 0-9.5-4.3-9.5-9.5zm14.3-4c.3.2.4.6.2.9L12.4 15c-.4.5-1.2.6-1.7.1L8 12.4c-.3-.3-.3-.7 0-1s.7-.3 1 0l2.6 2.6L16 8c0-.2.5-.2.8 0z'/%3e%3c/svg%3e");
            background-position: right 1rem center, center right 3rem;
            background-size: 16px 12px, calc(0.7em + 0.825rem) calc(0.7em + 0.825rem)
        }

        .was-validated .form-select:valid:focus, .form-select.is-valid:focus {
            border-color: #3fca90;
            box-shadow: 0 0 0 0 rgba(63, 202, 144, .25)
        }

        .was-validated .form-control-color:valid, .form-control-color.is-valid {
            width: calc(3rem + calc(1.4em + 1.65rem))
        }

        .was-validated .form-check-input:valid, .form-check-input.is-valid {
            border-color: #3fca90
        }

        .was-validated .form-check-input:valid:checked, .form-check-input.is-valid:checked {
            background-color: #3fca90
        }

        .was-validated .form-check-input:valid:focus, .form-check-input.is-valid:focus {
            box-shadow: 0 0 0 0 rgba(63, 202, 144, .25)
        }

        .was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
            color: #3fca90
        }

        .form-check-inline .form-check-input ~ .valid-feedback {
            margin-left: .5em
        }

        .was-validated .input-group .form-control:valid, .input-group .form-control.is-valid, .was-validated .input-group .form-select:valid, .input-group .form-select.is-valid {
            z-index: 1
        }

        .was-validated .input-group .form-control:valid:focus, .input-group .form-control.is-valid:focus, .was-validated .input-group .form-select:valid:focus, .input-group .form-select.is-valid:focus {
            z-index: 3
        }

        .invalid-feedback {
            display: none;
            width: 100%;
            margin-top: .25rem;
            font-size: calc(var(--ar-body-font-size) * 0.75);
            color: #ed5050
        }

        .invalid-tooltip {
            position: absolute;
            top: 100%;
            z-index: 5;
            display: none;
            max-width: 100%;
            padding: .375rem .75rem;
            margin-top: .1rem;
            font-size: calc(var(--ar-body-font-size) * 0.75);
            color: #000;
            background-color: rgba(237, 80, 80, .9);
            border-radius: calc(var(--ar-border-radius) * .5)
        }

        .was-validated :invalid ~ .invalid-feedback, .was-validated :invalid ~ .invalid-tooltip, .is-invalid ~ .invalid-feedback, .is-invalid ~ .invalid-tooltip {
            display: block
        }

        .was-validated .form-control:invalid, .form-control.is-invalid {
            border-color: #ed5050;
            padding-right: calc(1.4em + 1.65rem);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12 2.5c-5.2 0-9.5 4.3-9.5 9.5s4.2 9.5 9.5 9.5c5.2 0 9.5-4.2 9.5-9.5 0-5.2-4.3-9.5-9.5-9.5zM6.7 5.8C8.1 4.6 10 3.9 12 3.9c4.5 0 8.1 3.6 8.1 8.1 0 2-.7 3.9-1.9 5.3L6.7 5.8zm-.9.9C4.6 8.1 3.9 10 3.9 12c0 4.5 3.6 8.1 8.1 8.1 2 0 3.9-.7 5.3-1.9L5.8 6.7z' fill-rule='evenodd' fill='%23ed5050'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right calc(0.35em + 0.4125rem) center;
            background-size: calc(0.7em + 0.825rem) calc(0.7em + 0.825rem)
        }

        .was-validated .form-control:invalid:focus, .form-control.is-invalid:focus {
            border-color: #ed5050;
            box-shadow: 0 0 0 0 rgba(237, 80, 80, .25)
        }

        .was-validated textarea.form-control:invalid, textarea.form-control.is-invalid {
            padding-right: calc(1.4em + 1.65rem);
            background-position: top calc(0.35em + 0.4125rem) right calc(0.35em + 0.4125rem)
        }

        .was-validated .form-select:invalid, .form-select.is-invalid {
            border-color: #ed5050
        }

        .was-validated .form-select:invalid:not([multiple]):not([size]), .was-validated .form-select:invalid:not([multiple])[size="1"], .form-select.is-invalid:not([multiple]):not([size]), .form-select.is-invalid:not([multiple])[size="1"] {
            padding-right: 5.5rem;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23697488' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12 2.5c-5.2 0-9.5 4.3-9.5 9.5s4.2 9.5 9.5 9.5c5.2 0 9.5-4.2 9.5-9.5 0-5.2-4.3-9.5-9.5-9.5zM6.7 5.8C8.1 4.6 10 3.9 12 3.9c4.5 0 8.1 3.6 8.1 8.1 0 2-.7 3.9-1.9 5.3L6.7 5.8zm-.9.9C4.6 8.1 3.9 10 3.9 12c0 4.5 3.6 8.1 8.1 8.1 2 0 3.9-.7 5.3-1.9L5.8 6.7z' fill-rule='evenodd' fill='%23ed5050'/%3e%3c/svg%3e");
            background-position: right 1rem center, center right 3rem;
            background-size: 16px 12px, calc(0.7em + 0.825rem) calc(0.7em + 0.825rem)
        }

        .was-validated .form-select:invalid:focus, .form-select.is-invalid:focus {
            border-color: #ed5050;
            box-shadow: 0 0 0 0 rgba(237, 80, 80, .25)
        }

        .was-validated .form-control-color:invalid, .form-control-color.is-invalid {
            width: calc(3rem + calc(1.4em + 1.65rem))
        }

        .was-validated .form-check-input:invalid, .form-check-input.is-invalid {
            border-color: #ed5050
        }

        .was-validated .form-check-input:invalid:checked, .form-check-input.is-invalid:checked {
            background-color: #ed5050
        }

        .was-validated .form-check-input:invalid:focus, .form-check-input.is-invalid:focus {
            box-shadow: 0 0 0 0 rgba(237, 80, 80, .25)
        }

        .was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
            color: #ed5050
        }

        .form-check-inline .form-check-input ~ .invalid-feedback {
            margin-left: .5em
        }

        .was-validated .input-group .form-control:invalid, .input-group .form-control.is-invalid, .was-validated .input-group .form-select:invalid, .input-group .form-select.is-invalid {
            z-index: 2
        }

        .was-validated .input-group .form-control:invalid:focus, .input-group .form-control.is-invalid:focus, .was-validated .input-group .form-select:invalid:focus, .input-group .form-select.is-invalid:focus {
            z-index: 3
        }

        .btn {
            --ar-btn-padding-x: 1.75rem;
            --ar-btn-padding-y: 0.825rem;
            --ar-btn-font-family: ;
            --ar-btn-font-size: calc(var(--ar-body-font-size) * 0.875);
            --ar-btn-font-weight: 600;
            --ar-btn-line-height: 1.4;
            --ar-btn-color: #576071;
            --ar-btn-bg: transparent;
            --ar-btn-border-width: var(--ar-border-width);
            --ar-btn-border-color: transparent;
            --ar-btn-border-radius: var(--ar-border-radius);
            --ar-btn-box-shadow: unset;
            --ar-btn-disabled-opacity: 0.65;
            --ar-btn-focus-box-shadow: 0 0 0 0 rgba(var(--ar-btn-focus-shadow-rgb), .5);
            display: inline-block;
            padding: var(--ar-btn-padding-y) var(--ar-btn-padding-x);
            font-family: var(--ar-btn-font-family);
            font-size: var(--ar-btn-font-size);
            font-weight: var(--ar-btn-font-weight);
            line-height: var(--ar-btn-line-height);
            color: var(--ar-btn-color);
            text-align: center;
            text-decoration: none;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            border: var(--ar-btn-border-width) solid var(--ar-btn-border-color);
            border-radius: var(--ar-btn-border-radius);
            background-color: var(--ar-btn-bg);
            transition: color .2s ease-in-out, background-color .2s ease-in-out, border-color .2s ease-in-out, box-shadow .2s ease-in-out
        }

        @media (prefers-reduced-motion: reduce) {
            .btn {
                transition: none
            }
        }

        .btn:hover {
            color: var(--ar-btn-hover-color);
            background-color: var(--ar-btn-hover-bg);
            border-color: var(--ar-btn-hover-border-color)
        }

        .btn-check:focus + .btn, .btn:focus {
            color: var(--ar-btn-hover-color);
            background-color: var(--ar-btn-hover-bg);
            border-color: var(--ar-btn-hover-border-color);
            outline: 0;
            box-shadow: var(--ar-btn-focus-box-shadow)
        }

        .btn-check:checked + .btn, .btn-check:active + .btn, .btn:active, .btn.active, .btn.show {
            color: var(--ar-btn-active-color);
            background-color: var(--ar-btn-active-bg);
            border-color: var(--ar-btn-active-border-color)
        }

        .btn-check:checked + .btn:focus, .btn-check:active + .btn:focus, .btn:active:focus, .btn.active:focus, .btn.show:focus {
            box-shadow: var(--ar-btn-focus-box-shadow)
        }

        .btn:disabled, .btn.disabled, fieldset:disabled .btn {
            color: var(--ar-btn-disabled-color);
            pointer-events: none;
            background-color: var(--ar-btn-disabled-bg);
            border-color: var(--ar-btn-disabled-border-color);
            opacity: var(--ar-btn-disabled-opacity)
        }

        .btn-primary {
            --ar-btn-color: #000;
            --ar-btn-bg: #448c74;
            --ar-btn-border-color: #448c74;
            --ar-btn-hover-color: #000;
            --ar-btn-hover-bg: #609d89;
            --ar-btn-hover-border-color: #579882;
            --ar-btn-focus-shadow-rgb: 58, 119, 99;
            --ar-btn-active-color: #000;
            --ar-btn-active-bg: #69a390;
            --ar-btn-active-border-color: #579882;
            --ar-btn-active-shadow: unset;
            --ar-btn-disabled-color: #000;
            --ar-btn-disabled-bg: #448c74;
            --ar-btn-disabled-border-color: #448c74
        }

        .btn-secondary {
            --ar-btn-color: #000;
            --ar-btn-bg: #edf1f5;
            --ar-btn-border-color: #edf1f5;
            --ar-btn-hover-color: #000;
            --ar-btn-hover-bg: #f0f3f7;
            --ar-btn-hover-border-color: #eff2f6;
            --ar-btn-focus-shadow-rgb: 201, 205, 208;
            --ar-btn-active-color: #000;
            --ar-btn-active-bg: #f1f4f7;
            --ar-btn-active-border-color: #eff2f6;
            --ar-btn-active-shadow: unset;
            --ar-btn-disabled-color: #000;
            --ar-btn-disabled-bg: #edf1f5;
            --ar-btn-disabled-border-color: #edf1f5
        }

        .btn-success {
            --ar-btn-color: #000;
            --ar-btn-bg: #3fca90;
            --ar-btn-border-color: #3fca90;
            --ar-btn-hover-color: #000;
            --ar-btn-hover-bg: #5cd2a1;
            --ar-btn-hover-border-color: #52cf9b;
            --ar-btn-focus-shadow-rgb: 54, 172, 122;
            --ar-btn-active-color: #000;
            --ar-btn-active-bg: #65d5a6;
            --ar-btn-active-border-color: #52cf9b;
            --ar-btn-active-shadow: unset;
            --ar-btn-disabled-color: #000;
            --ar-btn-disabled-bg: #3fca90;
            --ar-btn-disabled-border-color: #3fca90
        }

        .btn-info {
            --ar-btn-color: #000;
            --ar-btn-bg: #3f7fca;
            --ar-btn-border-color: #3f7fca;
            --ar-btn-hover-color: #000;
            --ar-btn-hover-bg: #5c92d2;
            --ar-btn-hover-border-color: #528ccf;
            --ar-btn-focus-shadow-rgb: 54, 108, 172;
            --ar-btn-active-color: #000;
            --ar-btn-active-bg: #6599d5;
            --ar-btn-active-border-color: #528ccf;
            --ar-btn-active-shadow: unset;
            --ar-btn-disabled-color: #000;
            --ar-btn-disabled-bg: #3f7fca;
            --ar-btn-disabled-border-color: #3f7fca
        }

        .btn-warning {
            --ar-btn-color: #000;
            --ar-btn-bg: #edcb50;
            --ar-btn-border-color: #edcb50;
            --ar-btn-hover-color: #000;
            --ar-btn-hover-bg: #f0d36a;
            --ar-btn-hover-border-color: #efd062;
            --ar-btn-focus-shadow-rgb: 201, 173, 68;
            --ar-btn-active-color: #000;
            --ar-btn-active-bg: #f1d573;
            --ar-btn-active-border-color: #efd062;
            --ar-btn-active-shadow: unset;
            --ar-btn-disabled-color: #000;
            --ar-btn-disabled-bg: #edcb50;
            --ar-btn-disabled-border-color: #edcb50
        }

        .btn-danger {
            --ar-btn-color: #000;
            --ar-btn-bg: #ed5050;
            --ar-btn-border-color: #ed5050;
            --ar-btn-hover-color: #000;
            --ar-btn-hover-bg: #f06a6a;
            --ar-btn-hover-border-color: #ef6262;
            --ar-btn-focus-shadow-rgb: 201, 68, 68;
            --ar-btn-active-color: #000;
            --ar-btn-active-bg: #f17373;
            --ar-btn-active-border-color: #ef6262;
            --ar-btn-active-shadow: unset;
            --ar-btn-disabled-color: #000;
            --ar-btn-disabled-bg: #ed5050;
            --ar-btn-disabled-border-color: #ed5050
        }

        .btn-light, .dark-mode .btn-dark:not(.ignore-dark-mode), .card-hover-primary:hover .btn-primary {
            --ar-btn-color: #000;
            --ar-btn-bg: #fff;
            --ar-btn-border-color: #fff;
            --ar-btn-hover-color: #000;
            --ar-btn-hover-bg: #d9d9d9;
            --ar-btn-hover-border-color: #cccccc;
            --ar-btn-focus-shadow-rgb: 217, 217, 217;
            --ar-btn-active-color: #000;
            --ar-btn-active-bg: #cccccc;
            --ar-btn-active-border-color: #bfbfbf;
            --ar-btn-active-shadow: unset;
            --ar-btn-disabled-color: #000;
            --ar-btn-disabled-bg: #fff;
            --ar-btn-disabled-border-color: #fff
        }

        .btn-dark {
            --ar-btn-color: #fff;
            --ar-btn-bg: #121519;
            --ar-btn-border-color: #121519;
            --ar-btn-hover-color: #fff;
            --ar-btn-hover-bg: #36383c;
            --ar-btn-hover-border-color: #2a2c30;
            --ar-btn-focus-shadow-rgb: 54, 56, 60;
            --ar-btn-active-color: #fff;
            --ar-btn-active-bg: #414447;
            --ar-btn-active-border-color: #2a2c30;
            --ar-btn-active-shadow: unset;
            --ar-btn-disabled-color: #fff;
            --ar-btn-disabled-bg: #121519;
            --ar-btn-disabled-border-color: #121519
        }

        .btn-outline-primary {
            --ar-btn-color: #448c74;
            --ar-btn-border-color: #448c74;
            --ar-btn-hover-color: #000;
            --ar-btn-hover-bg: #448c74;
            --ar-btn-hover-border-color: #448c74;
            --ar-btn-focus-shadow-rgb: 68, 140, 116;
            --ar-btn-active-color: #000;
            --ar-btn-active-bg: #448c74;
            --ar-btn-active-border-color: #448c74;
            --ar-btn-active-shadow: unset;
            --ar-btn-disabled-color: #448c74;
            --ar-btn-disabled-bg: transparent;
            --ar-btn-disabled-border-color: #448c74;
            --ar-gradient: none
        }

        .btn-outline-secondary {
            --ar-btn-color: #edf1f5;
            --ar-btn-border-color: #edf1f5;
            --ar-btn-hover-color: #000;
            --ar-btn-hover-bg: #edf1f5;
            --ar-btn-hover-border-color: #edf1f5;
            --ar-btn-focus-shadow-rgb: 237, 241, 245;
            --ar-btn-active-color: #000;
            --ar-btn-active-bg: #edf1f5;
            --ar-btn-active-border-color: #edf1f5;
            --ar-btn-active-shadow: unset;
            --ar-btn-disabled-color: #edf1f5;
            --ar-btn-disabled-bg: transparent;
            --ar-btn-disabled-border-color: #edf1f5;
            --ar-gradient: none
        }

        .btn-outline-success {
            --ar-btn-color: #3fca90;
            --ar-btn-border-color: #3fca90;
            --ar-btn-hover-color: #000;
            --ar-btn-hover-bg: #3fca90;
            --ar-btn-hover-border-color: #3fca90;
            --ar-btn-focus-shadow-rgb: 63, 202, 144;
            --ar-btn-active-color: #000;
            --ar-btn-active-bg: #3fca90;
            --ar-btn-active-border-color: #3fca90;
            --ar-btn-active-shadow: unset;
            --ar-btn-disabled-color: #3fca90;
            --ar-btn-disabled-bg: transparent;
            --ar-btn-disabled-border-color: #3fca90;
            --ar-gradient: none
        }

        .btn-outline-info {
            --ar-btn-color: #3f7fca;
            --ar-btn-border-color: #3f7fca;
            --ar-btn-hover-color: #000;
            --ar-btn-hover-bg: #3f7fca;
            --ar-btn-hover-border-color: #3f7fca;
            --ar-btn-focus-shadow-rgb: 63, 127, 202;
            --ar-btn-active-color: #000;
            --ar-btn-active-bg: #3f7fca;
            --ar-btn-active-border-color: #3f7fca;
            --ar-btn-active-shadow: unset;
            --ar-btn-disabled-color: #3f7fca;
            --ar-btn-disabled-bg: transparent;
            --ar-btn-disabled-border-color: #3f7fca;
            --ar-gradient: none
        }

        .btn-outline-warning {
            --ar-btn-color: #edcb50;
            --ar-btn-border-color: #edcb50;
            --ar-btn-hover-color: #000;
            --ar-btn-hover-bg: #edcb50;
            --ar-btn-hover-border-color: #edcb50;
            --ar-btn-focus-shadow-rgb: 237, 203, 80;
            --ar-btn-active-color: #000;
            --ar-btn-active-bg: #edcb50;
            --ar-btn-active-border-color: #edcb50;
            --ar-btn-active-shadow: unset;
            --ar-btn-disabled-color: #edcb50;
            --ar-btn-disabled-bg: transparent;
            --ar-btn-disabled-border-color: #edcb50;
            --ar-gradient: none
        }

        .btn-outline-danger {
            --ar-btn-color: #ed5050;
            --ar-btn-border-color: #ed5050;
            --ar-btn-hover-color: #000;
            --ar-btn-hover-bg: #ed5050;
            --ar-btn-hover-border-color: #ed5050;
            --ar-btn-focus-shadow-rgb: 237, 80, 80;
            --ar-btn-active-color: #000;
            --ar-btn-active-bg: #ed5050;
            --ar-btn-active-border-color: #ed5050;
            --ar-btn-active-shadow: unset;
            --ar-btn-disabled-color: #ed5050;
            --ar-btn-disabled-bg: transparent;
            --ar-btn-disabled-border-color: #ed5050;
            --ar-gradient: none
        }

        .btn-outline-light, .dark-mode .btn-outline-dark:not(.ignore-dark-mode), .card-hover-primary:hover .btn-outline-primary {
            --ar-btn-color: #fff;
            --ar-btn-border-color: #fff;
            --ar-btn-hover-color: #000;
            --ar-btn-hover-bg: #fff;
            --ar-btn-hover-border-color: #fff;
            --ar-btn-focus-shadow-rgb: 255, 255, 255;
            --ar-btn-active-color: #000;
            --ar-btn-active-bg: #fff;
            --ar-btn-active-border-color: #fff;
            --ar-btn-active-shadow: unset;
            --ar-btn-disabled-color: #fff;
            --ar-btn-disabled-bg: transparent;
            --ar-btn-disabled-border-color: #fff;
            --ar-gradient: none
        }

        .btn-outline-dark {
            --ar-btn-color: #121519;
            --ar-btn-border-color: #121519;
            --ar-btn-hover-color: #fff;
            --ar-btn-hover-bg: #121519;
            --ar-btn-hover-border-color: #121519;
            --ar-btn-focus-shadow-rgb: 18, 21, 25;
            --ar-btn-active-color: #fff;
            --ar-btn-active-bg: #121519;
            --ar-btn-active-border-color: #121519;
            --ar-btn-active-shadow: unset;
            --ar-btn-disabled-color: #121519;
            --ar-btn-disabled-bg: transparent;
            --ar-btn-disabled-border-color: #121519;
            --ar-gradient: none
        }

        .btn-link {
            --ar-btn-font-weight: 400;
            --ar-btn-color: var(--ar-link-color);
            --ar-btn-bg: transparent;
            --ar-btn-border-color: transparent;
            --ar-btn-hover-color: var(--ar-link-hover-color);
            --ar-btn-hover-border-color: transparent;
            --ar-btn-active-color: var(--ar-link-hover-color);
            --ar-btn-active-border-color: transparent;
            --ar-btn-disabled-color: #858c97;
            --ar-btn-disabled-border-color: transparent;
            --ar-btn-box-shadow: none;
            --ar-btn-focus-shadow-rgb: 58, 119, 99;
            text-decoration: underline
        }

        .btn-link:hover, .btn-link:focus {
            text-decoration: none
        }

        .btn-link:focus {
            color: var(--ar-btn-color)
        }

        .btn-link:hover {
            color: var(--ar-btn-hover-color)
        }

        .btn-lg, .btn-group-lg > .btn {
            --ar-btn-padding-y: 1rem;
            --ar-btn-padding-x: 2rem;
            --ar-btn-font-size: 1rem;
            --ar-btn-border-radius: var(--ar-border-radius-lg)
        }

        .btn-sm, .btn-group-sm > .btn {
            --ar-btn-padding-y: 0.575rem;
            --ar-btn-padding-x: 1.25rem;
            --ar-btn-font-size: calc(var(--ar-body-font-size) * 0.75);
            --ar-btn-border-radius: var(--ar-border-radius-sm)
        }

        .fade {
            transition: opacity .15s linear
        }

        @media (prefers-reduced-motion: reduce) {
            .fade {
                transition: none
            }
        }

        .fade:not(.show) {
            opacity: 0
        }

        .collapse:not(.show) {
            display: none
        }

        .collapsing {
            height: 0;
            overflow: hidden;
            transition: height .35s ease
        }

        @media (prefers-reduced-motion: reduce) {
            .collapsing {
                transition: none
            }
        }

        .collapsing.collapse-horizontal {
            width: 0;
            height: auto;
            transition: width .35s ease
        }

        @media (prefers-reduced-motion: reduce) {
            .collapsing.collapse-horizontal {
                transition: none
            }
        }

        .dropup, .dropend, .dropdown, .dropstart, .dropup-center, .dropdown-center {
            position: relative
        }

        .dropdown-toggle {
            white-space: nowrap
        }

        .dropdown-toggle::after {
            display: inline-block;
            margin-left: .15em;
            vertical-align: .255em;
            content: "";
            border-top: .3em solid;
            border-right: .3em solid rgba(0, 0, 0, 0);
            border-bottom: 0;
            border-left: .3em solid rgba(0, 0, 0, 0)
        }

        .dropdown-toggle:empty::after {
            margin-left: 0
        }

        .dropdown-menu {
            --ar-dropdown-min-width: 12rem;
            --ar-dropdown-padding-x: 0;
            --ar-dropdown-padding-y: 0.75rem;
            --ar-dropdown-spacer: 0.25rem;
            --ar-dropdown-font-size: calc(var(--ar-body-font-size) * 0.875);
            --ar-dropdown-color: #576071;
            --ar-dropdown-bg: #fff;
            --ar-dropdown-border-color: #f0f3f6;
            --ar-dropdown-border-radius: var(--ar-border-radius-lg);
            --ar-dropdown-border-width: var(--ar-border-width);
            --ar-dropdown-inner-border-radius: calc(var(--ar-border-radius-lg) - (var(--ar-border-width)));
            --ar-dropdown-divider-bg: var(--ar-border-color);
            --ar-dropdown-divider-margin-y: 0.375rem;
            --ar-dropdown-box-shadow: 0 0.4375rem 1.25rem rgba(208, 208, 196, 0.32);
            --ar-dropdown-link-color: var(--ar-gray-800);
            --ar-dropdown-link-hover-color: var(--ar-primary);
            --ar-dropdown-link-hover-bg: transparent;
            --ar-dropdown-link-active-color: var(--ar-primary);
            --ar-dropdown-link-active-bg: transparent;
            --ar-dropdown-link-disabled-color: var(--ar-gray-600);
            --ar-dropdown-item-padding-x: 1.25rem;
            --ar-dropdown-item-padding-y: 0.375rem;
            --ar-dropdown-header-color: var(--ar-gray-900);
            --ar-dropdown-header-padding-x: 1.25rem;
            --ar-dropdown-header-padding-y: 0.75rem;
            position: absolute;
            z-index: 1000;
            display: none;
            min-width: var(--ar-dropdown-min-width);
            padding: var(--ar-dropdown-padding-y) var(--ar-dropdown-padding-x);
            margin: 0;
            font-size: var(--ar-dropdown-font-size);
            color: var(--ar-dropdown-color);
            text-align: left;
            list-style: none;
            background-color: var(--ar-dropdown-bg);
            background-clip: padding-box;
            border: var(--ar-dropdown-border-width) solid var(--ar-dropdown-border-color);
            border-radius: var(--ar-dropdown-border-radius)
        }

        .dropdown-menu[data-bs-popper] {
            top: 100%;
            left: 0;
            margin-top: var(--ar-dropdown-spacer)
        }

        .dropdown-menu-start {
            --bs-position: start
        }

        .dropdown-menu-start[data-bs-popper] {
            right: auto;
            left: 0
        }

        .dropdown-menu-end {
            --bs-position: end
        }

        .dropdown-menu-end[data-bs-popper] {
            right: 0;
            left: auto
        }

        @media (min-width: 576px) {
            .dropdown-menu-sm-start {
                --bs-position: start
            }

            .dropdown-menu-sm-start[data-bs-popper] {
                right: auto;
                left: 0
            }

            .dropdown-menu-sm-end {
                --bs-position: end
            }

            .dropdown-menu-sm-end[data-bs-popper] {
                right: 0;
                left: auto
            }
        }

        @media (min-width: 768px) {
            .dropdown-menu-md-start {
                --bs-position: start
            }

            .dropdown-menu-md-start[data-bs-popper] {
                right: auto;
                left: 0
            }

            .dropdown-menu-md-end {
                --bs-position: end
            }

            .dropdown-menu-md-end[data-bs-popper] {
                right: 0;
                left: auto
            }
        }

        @media (min-width: 992px) {
            .dropdown-menu-lg-start {
                --bs-position: start
            }

            .dropdown-menu-lg-start[data-bs-popper] {
                right: auto;
                left: 0
            }

            .dropdown-menu-lg-end {
                --bs-position: end
            }

            .dropdown-menu-lg-end[data-bs-popper] {
                right: 0;
                left: auto
            }
        }

        @media (min-width: 1200px) {
            .dropdown-menu-xl-start {
                --bs-position: start
            }

            .dropdown-menu-xl-start[data-bs-popper] {
                right: auto;
                left: 0
            }

            .dropdown-menu-xl-end {
                --bs-position: end
            }

            .dropdown-menu-xl-end[data-bs-popper] {
                right: 0;
                left: auto
            }
        }

        @media (min-width: 1400px) {
            .dropdown-menu-xxl-start {
                --bs-position: start
            }

            .dropdown-menu-xxl-start[data-bs-popper] {
                right: auto;
                left: 0
            }

            .dropdown-menu-xxl-end {
                --bs-position: end
            }

            .dropdown-menu-xxl-end[data-bs-popper] {
                right: 0;
                left: auto
            }
        }

        .dropup .dropdown-menu[data-bs-popper] {
            top: auto;
            bottom: 100%;
            margin-top: 0;
            margin-bottom: var(--ar-dropdown-spacer)
        }

        .dropup .dropdown-toggle::after {
            display: inline-block;
            margin-left: .15em;
            vertical-align: .255em;
            content: "";
            border-top: 0;
            border-right: .3em solid rgba(0, 0, 0, 0);
            border-bottom: .3em solid;
            border-left: .3em solid rgba(0, 0, 0, 0)
        }

        .dropup .dropdown-toggle:empty::after {
            margin-left: 0
        }

        .dropend .dropdown-menu[data-bs-popper] {
            top: 0;
            right: auto;
            left: 100%;
            margin-top: 0;
            margin-left: var(--ar-dropdown-spacer)
        }

        .dropend .dropdown-toggle::after {
            display: inline-block;
            margin-left: .15em;
            vertical-align: .255em;
            content: "";
            border-top: .3em solid rgba(0, 0, 0, 0);
            border-right: 0;
            border-bottom: .3em solid rgba(0, 0, 0, 0);
            border-left: .3em solid
        }

        .dropend .dropdown-toggle:empty::after {
            margin-left: 0
        }

        .dropend .dropdown-toggle::after {
            vertical-align: 0
        }

        .dropstart .dropdown-menu[data-bs-popper] {
            top: 0;
            right: 100%;
            left: auto;
            margin-top: 0;
            margin-right: var(--ar-dropdown-spacer)
        }

        .dropstart .dropdown-toggle::after {
            display: inline-block;
            margin-left: .15em;
            vertical-align: .255em;
            content: ""
        }

        .dropstart .dropdown-toggle::after {
            display: none
        }

        .dropstart .dropdown-toggle::before {
            display: inline-block;
            margin-right: .15em;
            vertical-align: .255em;
            content: "";
            border-top: .3em solid rgba(0, 0, 0, 0);
            border-right: .3em solid;
            border-bottom: .3em solid rgba(0, 0, 0, 0)
        }

        .dropstart .dropdown-toggle:empty::after {
            margin-left: 0
        }

        .dropstart .dropdown-toggle::before {
            vertical-align: 0
        }

        .dropdown-divider {
            height: 0;
            margin: var(--ar-dropdown-divider-margin-y) 0;
            overflow: hidden;
            border-top: 1px solid var(--ar-dropdown-divider-bg);
            opacity: 1
        }

        .dropdown-item {
            display: block;
            width: 100%;
            padding: var(--ar-dropdown-item-padding-y) var(--ar-dropdown-item-padding-x);
            clear: both;
            font-weight: 400;
            color: var(--ar-dropdown-link-color);
            text-align: inherit;
            text-decoration: none;
            white-space: nowrap;
            background-color: rgba(0, 0, 0, 0);
            border: 0
        }

        .dropdown-item:hover, .dropdown-item:focus {
            color: var(--ar-dropdown-link-hover-color);
            background-color: var(--ar-dropdown-link-hover-bg)
        }

        .dropdown-item.active, .dropdown-item:active {
            color: var(--ar-dropdown-link-active-color);
            text-decoration: none;
            background-color: var(--ar-dropdown-link-active-bg)
        }

        .dropdown-item.disabled, .dropdown-item:disabled {
            color: var(--ar-dropdown-link-disabled-color);
            pointer-events: none;
            background-color: rgba(0, 0, 0, 0)
        }

        .dropdown-menu.show {
            display: block
        }

        .dropdown-header {
            display: block;
            padding: var(--ar-dropdown-header-padding-y) var(--ar-dropdown-header-padding-x);
            margin-bottom: 0;
            font-size: calc(var(--ar-body-font-size) * 0.875);
            color: var(--ar-dropdown-header-color);
            white-space: nowrap
        }

        .dropdown-item-text {
            display: block;
            padding: var(--ar-dropdown-item-padding-y) var(--ar-dropdown-item-padding-x);
            color: var(--ar-dropdown-link-color)
        }

        .dropdown-menu-dark, .dark-mode .dropdown-menu:not(.ignore-dark-mode) {
            --ar-dropdown-color: rgba(255, 255, 255, 0.7);
            --ar-dropdown-bg: var(--ar-dark);
            --ar-dropdown-border-color: rgba(255, 255, 255, 0.13);
            --ar-dropdown-box-shadow: 0 0.4375rem 1.25rem rgba(0, 0, 0, 0.4);
            --ar-dropdown-link-color: rgba(255, 255, 255, 0.9);
            --ar-dropdown-link-hover-color: var(--ar-primary);
            --ar-dropdown-divider-bg: rgba(255, 255, 255, 0.13);
            --ar-dropdown-link-hover-bg: transparent;
            --ar-dropdown-link-active-color: var(--ar-primary);
            --ar-dropdown-link-active-bg: transparent;
            --ar-dropdown-link-disabled-color: rgba(255, 255, 255, 0.5);
            --ar-dropdown-header-color: #fff
        }

        .btn-group, .btn-group-vertical {
            position: relative;
            display: inline-flex;
            vertical-align: middle
        }

        .btn-group > .btn, .btn-group-vertical > .btn {
            position: relative;
            flex: 1 1 auto
        }

        .btn-group > .btn-check:checked + .btn, .btn-group > .btn-check:focus + .btn, .btn-group > .btn:hover, .btn-group > .btn:focus, .btn-group > .btn:active, .btn-group > .btn.active, .btn-group-vertical > .btn-check:checked + .btn, .btn-group-vertical > .btn-check:focus + .btn, .btn-group-vertical > .btn:hover, .btn-group-vertical > .btn:focus, .btn-group-vertical > .btn:active, .btn-group-vertical > .btn.active {
            z-index: 1
        }

        .btn-toolbar {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start
        }

        .btn-toolbar .input-group {
            width: auto
        }

        .btn-group {
            border-radius: var(--ar-border-radius)
        }

        .btn-group > .btn:not(:first-child), .btn-group > .btn-group:not(:first-child) {
            margin-left: -var(--ar-border-width)
        }

        .btn-group > .btn:not(:last-child):not(.dropdown-toggle), .btn-group > .btn.dropdown-toggle-split:first-child, .btn-group > .btn-group:not(:last-child) > .btn {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .btn-group > .btn:nth-child(n+3), .btn-group > :not(.btn-check) + .btn, .btn-group > .btn-group:not(:first-child) > .btn {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .dropdown-toggle-split {
            padding-right: 1.3125rem;
            padding-left: 1.3125rem
        }

        .dropdown-toggle-split::after, .dropup .dropdown-toggle-split::after, .dropend .dropdown-toggle-split::after {
            margin-left: 0
        }

        .dropstart .dropdown-toggle-split::before {
            margin-right: 0
        }

        .btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
            padding-right: .9375rem;
            padding-left: .9375rem
        }

        .btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
            padding-right: 1.5rem;
            padding-left: 1.5rem
        }

        .btn-group-vertical {
            flex-direction: column;
            align-items: flex-start;
            justify-content: center
        }

        .btn-group-vertical > .btn, .btn-group-vertical > .btn-group {
            width: 100%
        }

        .btn-group-vertical > .btn:not(:first-child), .btn-group-vertical > .btn-group:not(:first-child) {
            margin-top: -var(--ar-border-width)
        }

        .btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle), .btn-group-vertical > .btn-group:not(:last-child) > .btn {
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0
        }

        .btn-group-vertical > .btn ~ .btn, .btn-group-vertical > .btn-group:not(:first-child) > .btn {
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .nav {
            --ar-nav-link-padding-x: 1.75rem;
            --ar-nav-link-padding-y: 0.725rem;
            --ar-nav-link-font-weight: 500;
            --ar-nav-link-color: var(--ar-gray-800);
            --ar-nav-link-hover-color: var(--ar-primary);
            --ar-nav-link-disabled-color: var(--ar-gray-600);
            display: flex;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none
        }

        .nav-link {
            display: block;
            padding: var(--ar-nav-link-padding-y) var(--ar-nav-link-padding-x);
            font-size: var(--ar-nav-link-font-size);
            font-weight: var(--ar-nav-link-font-weight);
            color: var(--ar-nav-link-color);
            text-decoration: none;
            transition: color .2s ease-in-out, background-color .2s ease-in-out, border-color .2s ease-in-out
        }

        @media (prefers-reduced-motion: reduce) {
            .nav-link {
                transition: none
            }
        }

        .nav-link:hover, .nav-link:focus {
            color: var(--ar-nav-link-hover-color)
        }

        .nav-link.disabled {
            color: var(--ar-nav-link-disabled-color);
            pointer-events: none;
            cursor: default
        }

        .nav-tabs {
            --ar-nav-tabs-border-width: var(--ar-border-width);
            --ar-nav-tabs-border-color: transparent;
            --ar-nav-tabs-border-radius: var(--ar-border-radius);
            --ar-nav-tabs-link-hover-border-color: transparent;
            --ar-nav-tabs-link-active-color: var(--ar-primary);
            --ar-nav-tabs-link-active-bg: transparent;
            --ar-nav-tabs-link-active-border-color: var(--ar-primary);
            border-bottom: var(--ar-nav-tabs-border-width) solid var(--ar-nav-tabs-border-color)
        }

        .nav-tabs .nav-link {
            margin-bottom: calc(var(--ar-nav-tabs-border-width) * -1);
            background: none;
            border: var(--ar-nav-tabs-border-width) solid rgba(0, 0, 0, 0);
            border-top-left-radius: var(--ar-nav-tabs-border-radius);
            border-top-right-radius: var(--ar-nav-tabs-border-radius)
        }

        .nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
            isolation: isolate;
            border-color: var(--ar-nav-tabs-link-hover-border-color)
        }

        .nav-tabs .nav-link.disabled, .nav-tabs .nav-link:disabled {
            color: var(--ar-nav-link-disabled-color);
            background-color: rgba(0, 0, 0, 0);
            border-color: rgba(0, 0, 0, 0)
        }

        .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link {
            color: var(--ar-nav-tabs-link-active-color);
            background-color: var(--ar-nav-tabs-link-active-bg);
            border-color: var(--ar-nav-tabs-link-active-border-color)
        }

        .nav-tabs .dropdown-menu {
            margin-top: calc(var(--ar-nav-tabs-border-width) * -1);
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .nav-pills {
            --ar-nav-pills-border-radius: 50rem;
            --ar-nav-pills-link-active-color: #fff;
            --ar-nav-pills-link-active-bg: var(--ar-primary)
        }

        .nav-pills .nav-link {
            background: none;
            border: 0;
            border-radius: var(--ar-nav-pills-border-radius)
        }

        .nav-pills .nav-link:disabled {
            color: var(--ar-nav-link-disabled-color);
            background-color: rgba(0, 0, 0, 0);
            border-color: rgba(0, 0, 0, 0)
        }

        .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
            color: var(--ar-nav-pills-link-active-color);
            background-color: var(--ar-nav-pills-link-active-bg)
        }

        .nav-fill > .nav-link, .nav-fill .nav-item {
            flex: 1 1 auto;
            text-align: center
        }

        .nav-justified > .nav-link, .nav-justified .nav-item {
            flex-basis: 0;
            flex-grow: 1;
            text-align: center
        }

        .nav-fill .nav-item .nav-link, .nav-justified .nav-item .nav-link {
            width: 100%
        }

        .tab-content > .tab-pane {
            display: none
        }

        .tab-content > .active {
            display: block
        }

        .navbar {
            --ar-navbar-padding-x: 0;
            --ar-navbar-padding-y: 0.75rem;
            --ar-navbar-color: var(--ar-gray-800);
            --ar-navbar-hover-color: var(--ar-primary);
            --ar-navbar-disabled-color: var(--ar-gray-600);
            --ar-navbar-active-color: var(--ar-primary);
            --ar-navbar-brand-padding-y: 0.5rem;
            --ar-navbar-brand-margin-end: 1rem;
            --ar-navbar-brand-font-size: 1.375rem;
            --ar-navbar-brand-color: var(--ar-gray-800);
            --ar-navbar-brand-hover-color: var(--ar-gray-800);
            --ar-navbar-nav-link-padding-x: 1rem;
            --ar-navbar-toggler-padding-y: 0.625rem;
            --ar-navbar-toggler-padding-x: 0.25rem;
            --ar-navbar-toggler-font-size: calc(var(--ar-body-font-size) * 1.125);
            --ar-navbar-toggler-icon-bg: initial;
            --ar-navbar-toggler-border-color: transparent;
            --ar-navbar-toggler-border-radius: 0;
            --ar-navbar-toggler-focus-width: 0;
            --ar-navbar-toggler-transition: box-shadow 0.15s ease-in-out;
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            padding: var(--ar-navbar-padding-y) var(--ar-navbar-padding-x)
        }

        .navbar > .container, .navbar > .container-fluid, .navbar > .container-sm, .navbar > .container-md, .navbar > .container-lg, .navbar > .container-xl, .navbar > .container-xxl {
            display: flex;
            flex-wrap: inherit;
            align-items: center;
            justify-content: space-between
        }

        .navbar-brand {
            padding-top: var(--ar-navbar-brand-padding-y);
            padding-bottom: var(--ar-navbar-brand-padding-y);
            margin-right: var(--ar-navbar-brand-margin-end);
            font-size: var(--ar-navbar-brand-font-size);
            color: var(--ar-navbar-brand-color);
            text-decoration: none;
            white-space: nowrap
        }

        .navbar-brand:hover, .navbar-brand:focus {
            color: var(--ar-navbar-brand-hover-color)
        }

        .navbar-nav {
            --ar-nav-link-padding-x: 0;
            --ar-nav-link-padding-y: 0.725rem;
            --ar-nav-link-font-weight: 500;
            --ar-nav-link-color: var(--ar-navbar-color);
            --ar-nav-link-hover-color: var(--ar-navbar-hover-color);
            --ar-nav-link-disabled-color: var(--ar-navbar-disabled-color);
            display: flex;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none
        }

        .navbar-nav .show > .nav-link, .navbar-nav .nav-link.active {
            color: var(--ar-navbar-active-color)
        }

        .navbar-nav .dropdown-menu {
            position: static
        }

        .navbar-text {
            padding-top: .725rem;
            padding-bottom: .725rem;
            color: var(--ar-navbar-color)
        }

        .navbar-text a, .navbar-text a:hover, .navbar-text a:focus {
            color: var(--ar-navbar-active-color)
        }

        .navbar-collapse {
            flex-basis: 100%;
            flex-grow: 1;
            align-items: center
        }

        .navbar-toggler {
            padding: var(--ar-navbar-toggler-padding-y) var(--ar-navbar-toggler-padding-x);
            font-size: var(--ar-navbar-toggler-font-size);
            line-height: 1;
            color: var(--ar-navbar-color);
            background-color: rgba(0, 0, 0, 0);
            border: var(--ar-border-width) solid var(--ar-navbar-toggler-border-color);
            border-radius: var(--ar-navbar-toggler-border-radius);
            transition: var(--ar-navbar-toggler-transition)
        }

        @media (prefers-reduced-motion: reduce) {
            .navbar-toggler {
                transition: none
            }
        }

        .navbar-toggler:hover {
            text-decoration: none
        }

        .navbar-toggler:focus {
            text-decoration: none;
            outline: 0;
            box-shadow: 0 0 0 var(--ar-navbar-toggler-focus-width)
        }

        .navbar-toggler-icon {
            display: inline-block;
            width: 1.5em;
            height: 1.5em;
            vertical-align: middle;
            background-image: var(--ar-navbar-toggler-icon-bg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%
        }

        .navbar-nav-scroll {
            max-height: var(--ar-scroll-height, 75vh);
            overflow-y: auto
        }

        @media (min-width: 576px) {
            .navbar-expand-sm {
                flex-wrap: nowrap;
                justify-content: flex-start
            }

            .navbar-expand-sm .navbar-nav {
                flex-direction: row
            }

            .navbar-expand-sm .navbar-nav .dropdown-menu {
                position: absolute
            }

            .navbar-expand-sm .navbar-nav .nav-link {
                padding-right: var(--ar-navbar-nav-link-padding-x);
                padding-left: var(--ar-navbar-nav-link-padding-x)
            }

            .navbar-expand-sm .navbar-nav-scroll {
                overflow: visible
            }

            .navbar-expand-sm .navbar-collapse {
                display: flex !important;
                flex-basis: auto
            }

            .navbar-expand-sm .navbar-toggler {
                display: none
            }

            .navbar-expand-sm .offcanvas {
                position: static;
                z-index: auto;
                flex-grow: 1;
                width: auto !important;
                height: auto !important;
                visibility: visible !important;
                background-color: rgba(0, 0, 0, 0) !important;
                border: 0 !important;
                transform: none !important;
                transition: none
            }

            .navbar-expand-sm .offcanvas .offcanvas-header {
                display: none
            }

            .navbar-expand-sm .offcanvas .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible
            }
        }

        @media (min-width: 768px) {
            .navbar-expand-md {
                flex-wrap: nowrap;
                justify-content: flex-start
            }

            .navbar-expand-md .navbar-nav {
                flex-direction: row
            }

            .navbar-expand-md .navbar-nav .dropdown-menu {
                position: absolute
            }

            .navbar-expand-md .navbar-nav .nav-link {
                padding-right: var(--ar-navbar-nav-link-padding-x);
                padding-left: var(--ar-navbar-nav-link-padding-x)
            }

            .navbar-expand-md .navbar-nav-scroll {
                overflow: visible
            }

            .navbar-expand-md .navbar-collapse {
                display: flex !important;
                flex-basis: auto
            }

            .navbar-expand-md .navbar-toggler {
                display: none
            }

            .navbar-expand-md .offcanvas {
                position: static;
                z-index: auto;
                flex-grow: 1;
                width: auto !important;
                height: auto !important;
                visibility: visible !important;
                background-color: rgba(0, 0, 0, 0) !important;
                border: 0 !important;
                transform: none !important;
                transition: none
            }

            .navbar-expand-md .offcanvas .offcanvas-header {
                display: none
            }

            .navbar-expand-md .offcanvas .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible
            }
        }

        @media (min-width: 992px) {
            .navbar-expand-lg {
                flex-wrap: nowrap;
                justify-content: flex-start
            }

            .navbar-expand-lg .navbar-nav {
                flex-direction: row
            }

            .navbar-expand-lg .navbar-nav .dropdown-menu {
                position: absolute
            }

            .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: var(--ar-navbar-nav-link-padding-x);
                padding-left: var(--ar-navbar-nav-link-padding-x)
            }

            .navbar-expand-lg .navbar-nav-scroll {
                overflow: visible
            }

            .navbar-expand-lg .navbar-collapse {
                display: flex !important;
                flex-basis: auto
            }

            .navbar-expand-lg .navbar-toggler {
                display: none
            }

            .navbar-expand-lg .offcanvas {
                position: static;
                z-index: auto;
                flex-grow: 1;
                width: auto !important;
                height: auto !important;
                visibility: visible !important;
                background-color: rgba(0, 0, 0, 0) !important;
                border: 0 !important;
                transform: none !important;
                transition: none
            }

            .navbar-expand-lg .offcanvas .offcanvas-header {
                display: none
            }

            .navbar-expand-lg .offcanvas .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible
            }
        }

        @media (min-width: 1200px) {
            .navbar-expand-xl {
                flex-wrap: nowrap;
                justify-content: flex-start
            }

            .navbar-expand-xl .navbar-nav {
                flex-direction: row
            }

            .navbar-expand-xl .navbar-nav .dropdown-menu {
                position: absolute
            }

            .navbar-expand-xl .navbar-nav .nav-link {
                padding-right: var(--ar-navbar-nav-link-padding-x);
                padding-left: var(--ar-navbar-nav-link-padding-x)
            }

            .navbar-expand-xl .navbar-nav-scroll {
                overflow: visible
            }

            .navbar-expand-xl .navbar-collapse {
                display: flex !important;
                flex-basis: auto
            }

            .navbar-expand-xl .navbar-toggler {
                display: none
            }

            .navbar-expand-xl .offcanvas {
                position: static;
                z-index: auto;
                flex-grow: 1;
                width: auto !important;
                height: auto !important;
                visibility: visible !important;
                background-color: rgba(0, 0, 0, 0) !important;
                border: 0 !important;
                transform: none !important;
                transition: none
            }

            .navbar-expand-xl .offcanvas .offcanvas-header {
                display: none
            }

            .navbar-expand-xl .offcanvas .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible
            }
        }

        @media (min-width: 1400px) {
            .navbar-expand-xxl {
                flex-wrap: nowrap;
                justify-content: flex-start
            }

            .navbar-expand-xxl .navbar-nav {
                flex-direction: row
            }

            .navbar-expand-xxl .navbar-nav .dropdown-menu {
                position: absolute
            }

            .navbar-expand-xxl .navbar-nav .nav-link {
                padding-right: var(--ar-navbar-nav-link-padding-x);
                padding-left: var(--ar-navbar-nav-link-padding-x)
            }

            .navbar-expand-xxl .navbar-nav-scroll {
                overflow: visible
            }

            .navbar-expand-xxl .navbar-collapse {
                display: flex !important;
                flex-basis: auto
            }

            .navbar-expand-xxl .navbar-toggler {
                display: none
            }

            .navbar-expand-xxl .offcanvas {
                position: static;
                z-index: auto;
                flex-grow: 1;
                width: auto !important;
                height: auto !important;
                visibility: visible !important;
                background-color: rgba(0, 0, 0, 0) !important;
                border: 0 !important;
                transform: none !important;
                transition: none
            }

            .navbar-expand-xxl .offcanvas .offcanvas-header {
                display: none
            }

            .navbar-expand-xxl .offcanvas .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible
            }
        }

        .navbar-expand {
            flex-wrap: nowrap;
            justify-content: flex-start
        }

        .navbar-expand .navbar-nav {
            flex-direction: row
        }

        .navbar-expand .navbar-nav .dropdown-menu {
            position: absolute
        }

        .navbar-expand .navbar-nav .nav-link {
            padding-right: var(--ar-navbar-nav-link-padding-x);
            padding-left: var(--ar-navbar-nav-link-padding-x)
        }

        .navbar-expand .navbar-nav-scroll {
            overflow: visible
        }

        .navbar-expand .navbar-collapse {
            display: flex !important;
            flex-basis: auto
        }

        .navbar-expand .navbar-toggler {
            display: none
        }

        .navbar-expand .offcanvas {
            position: static;
            z-index: auto;
            flex-grow: 1;
            width: auto !important;
            height: auto !important;
            visibility: visible !important;
            background-color: rgba(0, 0, 0, 0) !important;
            border: 0 !important;
            transform: none !important;
            transition: none
        }

        .navbar-expand .offcanvas .offcanvas-header {
            display: none
        }

        .navbar-expand .offcanvas .offcanvas-body {
            display: flex;
            flex-grow: 0;
            padding: 0;
            overflow-y: visible
        }

        .navbar-dark {
            --ar-navbar-color: rgba(255, 255, 255, 0.9);
            --ar-navbar-hover-color: var(--ar-primary);
            --ar-navbar-disabled-color: rgba(255, 255, 255, 0.5);
            --ar-navbar-active-color: var(--ar-primary);
            --ar-navbar-brand-color: #fff;
            --ar-navbar-brand-hover-color: #fff;
            --ar-navbar-toggler-border-color: transparent;
            --ar-navbar-toggler-icon-bg: initial
        }

        .card {
            --ar-card-spacer-y: 2.375rem;
            --ar-card-spacer-x: 2.375rem;
            --ar-card-title-spacer-y: 1rem;
            --ar-card-border-width: var(--ar-border-width);
            --ar-card-border-color: var(--ar-border-color);
            --ar-card-border-radius: var(--ar-border-radius-2xl);
            --ar-card-box-shadow: ;
            --ar-card-inner-border-radius: calc(var(--ar-border-radius-2xl) - (var(--ar-border-width)));
            --ar-card-cap-padding-y: 1.5rem;
            --ar-card-cap-padding-x: 2.375rem;
            --ar-card-cap-bg: transparent;
            --ar-card-cap-color: ;
            --ar-card-height: ;
            --ar-card-color: var(--ar-body-color);
            --ar-card-bg: #fff;
            --ar-card-img-overlay-padding: 1rem;
            --ar-card-group-margin: 0.75rem;
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            height: var(--ar-card-height);
            word-wrap: break-word;
            background-color: var(--ar-card-bg);
            background-clip: border-box;
            border: var(--ar-card-border-width) solid var(--ar-card-border-color);
            border-radius: var(--ar-card-border-radius)
        }

        .card > hr {
            margin-right: 0;
            margin-left: 0
        }

        .card > .list-group {
            border-top: inherit;
            border-bottom: inherit
        }

        .card > .list-group:first-child {
            border-top-width: 0;
            border-top-left-radius: var(--ar-card-inner-border-radius);
            border-top-right-radius: var(--ar-card-inner-border-radius)
        }

        .card > .list-group:last-child {
            border-bottom-width: 0;
            border-bottom-right-radius: var(--ar-card-inner-border-radius);
            border-bottom-left-radius: var(--ar-card-inner-border-radius)
        }

        .card > .card-header + .list-group, .card > .list-group + .card-footer {
            border-top: 0
        }

        .card-body {
            flex: 1 1 auto;
            padding: var(--ar-card-spacer-y) var(--ar-card-spacer-x);
            color: var(--ar-card-color)
        }

        .card-title {
            margin-bottom: var(--ar-card-title-spacer-y)
        }

        .card-subtitle {
            margin-top: calc(-0.5 * var(--ar-card-title-spacer-y));
            margin-bottom: 0
        }

        .card-text:last-child {
            margin-bottom: 0
        }

        .card-link + .card-link {
            margin-left: var(--ar-card-spacer-x)
        }

        .card-header {
            padding: var(--ar-card-cap-padding-y) var(--ar-card-cap-padding-x);
            margin-bottom: 0;
            color: var(--ar-card-cap-color);
            background-color: var(--ar-card-cap-bg);
            border-bottom: var(--ar-card-border-width) solid var(--ar-card-border-color)
        }

        .card-header:first-child {
            border-radius: var(--ar-card-inner-border-radius) var(--ar-card-inner-border-radius) 0 0
        }

        .card-footer {
            padding: var(--ar-card-cap-padding-y) var(--ar-card-cap-padding-x);
            color: var(--ar-card-cap-color);
            background-color: var(--ar-card-cap-bg);
            border-top: var(--ar-card-border-width) solid var(--ar-card-border-color)
        }

        .card-footer:last-child {
            border-radius: 0 0 var(--ar-card-inner-border-radius) var(--ar-card-inner-border-radius)
        }

        .card-header-tabs {
            margin-right: calc(-0.5 * var(--ar-card-cap-padding-x));
            margin-bottom: calc(-1 * var(--ar-card-cap-padding-y));
            margin-left: calc(-0.5 * var(--ar-card-cap-padding-x));
            border-bottom: 0
        }

        .card-header-tabs .nav-link.active {
            background-color: var(--ar-card-bg);
            border-bottom-color: var(--ar-card-bg)
        }

        .card-header-pills {
            margin-right: calc(-0.5 * var(--ar-card-cap-padding-x));
            margin-left: calc(-0.5 * var(--ar-card-cap-padding-x))
        }

        .card-img-overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            padding: var(--ar-card-img-overlay-padding);
            border-radius: var(--ar-card-inner-border-radius)
        }

        .card-img, .card-img-top, .card-img-bottom {
            width: 100%
        }

        .card-img, .card-img-top {
            border-top-left-radius: var(--ar-card-inner-border-radius);
            border-top-right-radius: var(--ar-card-inner-border-radius)
        }

        .card-img, .card-img-bottom {
            border-bottom-right-radius: var(--ar-card-inner-border-radius);
            border-bottom-left-radius: var(--ar-card-inner-border-radius)
        }

        .card-group > .card {
            margin-bottom: var(--ar-card-group-margin)
        }

        @media (min-width: 576px) {
            .card-group {
                display: flex;
                flex-flow: row wrap
            }

            .card-group > .card {
                flex: 1 0 0%;
                margin-bottom: 0
            }

            .card-group > .card + .card {
                margin-left: 0;
                border-left: 0
            }

            .card-group > .card:not(:last-child) {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0
            }

            .card-group > .card:not(:last-child) .card-img-top, .card-group > .card:not(:last-child) .card-header {
                border-top-right-radius: 0
            }

            .card-group > .card:not(:last-child) .card-img-bottom, .card-group > .card:not(:last-child) .card-footer {
                border-bottom-right-radius: 0
            }

            .card-group > .card:not(:first-child) {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0
            }

            .card-group > .card:not(:first-child) .card-img-top, .card-group > .card:not(:first-child) .card-header {
                border-top-left-radius: 0
            }

            .card-group > .card:not(:first-child) .card-img-bottom, .card-group > .card:not(:first-child) .card-footer {
                border-bottom-left-radius: 0
            }
        }

        .accordion {
            --ar-accordion-color: #000;
            --ar-accordion-bg: #f6f9fc;
            --ar-accordion-transition: color 0.2s ease-in-out, background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out, border-radius 0.15s ease;
            --ar-accordion-border-color: var(--ar-border-color);
            --ar-accordion-border-width: 0;
            --ar-accordion-border-radius: var(--ar-border-radius-lg);
            --ar-accordion-inner-border-radius: calc(var(--ar-border-radius-lg) - 0);
            --ar-accordion-btn-padding-x: 1.5rem;
            --ar-accordion-btn-padding-y: 1.5rem;
            --ar-accordion-btn-color: var(--ar-body-color);
            --ar-accordion-btn-bg: transparent;
            --ar-accordion-btn-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23434a57'%3e%3cpath d='M.5 6.3c.6-.6 1.6-.6 2.3 0l9.3 9.3 9.3-9.3c.6-.6 1.6-.6 2.3 0 .6.6.6 1.6 0 2.3L13.3 18.8c-.6.6-1.6.6-2.3 0L.8 8.5c-.9-.8-.9-1.6-.3-2.2z'/%3e%3c/svg%3e");
            --ar-accordion-btn-icon-width: calc(var(--ar-body-font-size) * 0.75);
            --ar-accordion-btn-icon-transform: rotate(-180deg);
            --ar-accordion-btn-icon-transition: transform 0.2s ease-in-out;
            --ar-accordion-btn-active-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='var%28--ar-primary%29'%3e%3cpath d='M.5 6.3c.6-.6 1.6-.6 2.3 0l9.3 9.3 9.3-9.3c.6-.6 1.6-.6 2.3 0 .6.6.6 1.6 0 2.3L13.3 18.8c-.6.6-1.6.6-2.3 0L.8 8.5c-.9-.8-.9-1.6-.3-2.2z'/%3e%3c/svg%3e");
            --ar-accordion-btn-focus-border-color: var(--ar-gray-700);
            --ar-accordion-btn-focus-box-shadow: unset;
            --ar-accordion-body-padding-x: 1.5rem;
            --ar-accordion-body-padding-y: 1.5rem;
            --ar-accordion-active-color: var(--ar-primary);
            --ar-accordion-active-bg: transparent
        }

        .accordion-button {
            position: relative;
            display: flex;
            align-items: center;
            width: 100%;
            padding: var(--ar-accordion-btn-padding-y) var(--ar-accordion-btn-padding-x);
            font-size: 1rem;
            color: var(--ar-accordion-btn-color);
            text-align: left;
            background-color: var(--ar-accordion-btn-bg);
            border: 0;
            border-radius: 0;
            overflow-anchor: none;
            transition: var(--ar-accordion-transition)
        }

        @media (prefers-reduced-motion: reduce) {
            .accordion-button {
                transition: none
            }
        }

        .accordion-button:not(.collapsed) {
            color: var(--ar-accordion-active-color);
            background-color: var(--ar-accordion-active-bg);
            box-shadow: inset 0 calc(var(--ar-accordion-border-width) * -1) 0 var(--ar-accordion-border-color)
        }

        .accordion-button:not(.collapsed)::after {
            background-image: var(--ar-accordion-btn-active-icon);
            transform: var(--ar-accordion-btn-icon-transform)
        }

        .accordion-button::after {
            flex-shrink: 0;
            width: var(--ar-accordion-btn-icon-width);
            height: var(--ar-accordion-btn-icon-width);
            margin-left: auto;
            content: "";
            background-image: var(--ar-accordion-btn-icon);
            background-repeat: no-repeat;
            background-size: var(--ar-accordion-btn-icon-width);
            transition: var(--ar-accordion-btn-icon-transition)
        }

        @media (prefers-reduced-motion: reduce) {
            .accordion-button::after {
                transition: none
            }
        }

        .accordion-button:hover {
            z-index: 2
        }

        .accordion-button:focus {
            z-index: 3;
            border-color: var(--ar-accordion-btn-focus-border-color);
            outline: 0;
            box-shadow: var(--ar-accordion-btn-focus-box-shadow)
        }

        .accordion-header {
            margin-bottom: 0
        }

        .accordion-item {
            color: var(--ar-accordion-color);
            background-color: var(--ar-accordion-bg);
            border: var(--ar-accordion-border-width) solid var(--ar-accordion-border-color)
        }

        .accordion-item:first-of-type {
            border-top-left-radius: var(--ar-accordion-border-radius);
            border-top-right-radius: var(--ar-accordion-border-radius)
        }

        .accordion-item:first-of-type .accordion-button {
            border-top-left-radius: var(--ar-accordion-inner-border-radius);
            border-top-right-radius: var(--ar-accordion-inner-border-radius)
        }

        .accordion-item:not(:first-of-type) {
            border-top: 0
        }

        .accordion-item:last-of-type {
            border-bottom-right-radius: var(--ar-accordion-border-radius);
            border-bottom-left-radius: var(--ar-accordion-border-radius)
        }

        .accordion-item:last-of-type .accordion-button.collapsed {
            border-bottom-right-radius: var(--ar-accordion-inner-border-radius);
            border-bottom-left-radius: var(--ar-accordion-inner-border-radius)
        }

        .accordion-item:last-of-type .accordion-collapse {
            border-bottom-right-radius: var(--ar-accordion-border-radius);
            border-bottom-left-radius: var(--ar-accordion-border-radius)
        }

        .accordion-body {
            padding: var(--ar-accordion-body-padding-y) var(--ar-accordion-body-padding-x)
        }

        .accordion-flush .accordion-collapse {
            border-width: 0
        }

        .accordion-flush .accordion-item {
            border-right: 0;
            border-left: 0;
            border-radius: 0
        }

        .accordion-flush .accordion-item:first-child {
            border-top: 0
        }

        .accordion-flush .accordion-item:last-child {
            border-bottom: 0
        }

        .accordion-flush .accordion-item .accordion-button {
            border-radius: 0
        }

        .breadcrumb {
            --ar-breadcrumb-padding-x: 0;
            --ar-breadcrumb-padding-y: 0;
            --ar-breadcrumb-margin-bottom: 1rem;
            --ar-breadcrumb-font-size: calc(var(--ar-body-font-size) * 0.875);
            --ar-breadcrumb-bg: ;
            --ar-breadcrumb-border-radius: ;
            --ar-breadcrumb-divider-color: var(--ar-gray-600);
            --ar-breadcrumb-item-padding-x: 0.5rem;
            --ar-breadcrumb-item-active-color: var(--ar-primary);
            display: flex;
            flex-wrap: wrap;
            padding: var(--ar-breadcrumb-padding-y) var(--ar-breadcrumb-padding-x);
            margin-bottom: var(--ar-breadcrumb-margin-bottom);
            font-size: var(--ar-breadcrumb-font-size);
            list-style: none;
            background-color: var(--ar-breadcrumb-bg);
            border-radius: var(--ar-breadcrumb-border-radius)
        }

        .breadcrumb-item + .breadcrumb-item {
            padding-left: var(--ar-breadcrumb-item-padding-x)
        }

        .breadcrumb-item + .breadcrumb-item::before {
            float: left;
            padding-right: var(--ar-breadcrumb-item-padding-x);
            color: var(--ar-breadcrumb-divider-color);
            content: var(--ar-breadcrumb-divider, "\e939") /* rtl: var(--ar-breadcrumb-divider, "\e938") */
        }

        .breadcrumb-item.active {
            color: var(--ar-breadcrumb-item-active-color)
        }

        .pagination {
            --ar-pagination-padding-x: 0.75rem;
            --ar-pagination-padding-y: 0.25rem;
            --ar-pagination-font-size: 1rem;
            --ar-pagination-color: var(--ar-gray-600);
            --ar-pagination-bg: transparent;
            --ar-pagination-border-width: 0;
            --ar-pagination-border-color: #e3e9ef;
            --ar-pagination-border-radius: 1rem;
            --ar-pagination-hover-color: var(--ar-gray-800);
            --ar-pagination-hover-bg: transparent;
            --ar-pagination-hover-border-color: #e3e9ef;
            --ar-pagination-focus-color: var(--ar-gray-800);
            --ar-pagination-focus-bg: transparent;
            --ar-pagination-focus-box-shadow: 0 0 0 0 rgba(68, 140, 116, 0.25);
            --ar-pagination-active-color: var(--ar-gray-900);
            --ar-pagination-active-bg: transparent;
            --ar-pagination-active-border-color: transparent;
            --ar-pagination-disabled-color: var(--ar-gray-500);
            --ar-pagination-disabled-bg: transparent;
            --ar-pagination-disabled-border-color: #e3e9ef;
            display: flex;
            padding-left: 0;
            list-style: none
        }

        .page-link {
            position: relative;
            display: block;
            padding: var(--ar-pagination-padding-y) var(--ar-pagination-padding-x);
            font-size: var(--ar-pagination-font-size);
            color: var(--ar-pagination-color);
            text-decoration: none;
            background-color: var(--ar-pagination-bg);
            border: var(--ar-pagination-border-width) solid var(--ar-pagination-border-color);
            transition: color .2s ease-in-out
        }

        @media (prefers-reduced-motion: reduce) {
            .page-link {
                transition: none
            }
        }

        .page-link:hover {
            z-index: 2;
            color: var(--ar-pagination-hover-color);
            background-color: var(--ar-pagination-hover-bg);
            border-color: var(--ar-pagination-hover-border-color)
        }

        .page-link:focus {
            z-index: 3;
            color: var(--ar-pagination-focus-color);
            background-color: var(--ar-pagination-focus-bg);
            outline: 0;
            box-shadow: var(--ar-pagination-focus-box-shadow)
        }

        .page-link.active, .active > .page-link {
            z-index: 3;
            color: var(--ar-pagination-active-color);
            background-color: var(--ar-pagination-active-bg);
            border-color: var(--ar-pagination-active-border-color)
        }

        .page-link.disabled, .disabled > .page-link {
            color: var(--ar-pagination-disabled-color);
            pointer-events: none;
            background-color: var(--ar-pagination-disabled-bg);
            border-color: var(--ar-pagination-disabled-border-color)
        }

        .page-item:not(:first-child) .page-link {
            margin-left: 0
        }

        .page-item:first-child .page-link {
            border-top-left-radius: var(--ar-pagination-border-radius);
            border-bottom-left-radius: var(--ar-pagination-border-radius)
        }

        .page-item:last-child .page-link {
            border-top-right-radius: var(--ar-pagination-border-radius);
            border-bottom-right-radius: var(--ar-pagination-border-radius)
        }

        .pagination-lg {
            --ar-pagination-padding-x: 0.875rem;
            --ar-pagination-padding-y: 0.25rem;
            --ar-pagination-font-size: calc(var(--ar-body-font-size) * 1.125);
            --ar-pagination-border-radius: calc(var(--ar-border-radius) * 1.125)
        }

        .pagination-sm {
            --ar-pagination-padding-x: 0.65rem;
            --ar-pagination-padding-y: 0.25rem;
            --ar-pagination-font-size: calc(var(--ar-body-font-size) * 0.875);
            --ar-pagination-border-radius: calc(var(--ar-border-radius) * 0.75)
        }

        .badge {
            --ar-badge-padding-x: 0.75em;
            --ar-badge-padding-y: 0.5em;
            --ar-badge-font-size: 0.75em;
            --ar-badge-font-weight: 600;
            --ar-badge-color: #fff;
            --ar-badge-border-radius: 50rem;
            display: inline-block;
            padding: var(--ar-badge-padding-y) var(--ar-badge-padding-x);
            font-size: var(--ar-badge-font-size);
            font-weight: var(--ar-badge-font-weight);
            line-height: 1;
            color: var(--ar-badge-color);
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: var(--ar-badge-border-radius)
        }

        .badge:empty {
            display: none
        }

        .btn .badge {
            position: relative;
            top: -1px
        }

        .alert {
            --ar-alert-bg: transparent;
            --ar-alert-padding-x: 1rem;
            --ar-alert-padding-y: 1rem;
            --ar-alert-margin-bottom: 1rem;
            --ar-alert-color: inherit;
            --ar-alert-border-color: transparent;
            --ar-alert-border: var(--ar-border-width) solid var(--ar-alert-border-color);
            --ar-alert-border-radius: var(--ar-border-radius-lg);
            position: relative;
            padding: var(--ar-alert-padding-y) var(--ar-alert-padding-x);
            margin-bottom: var(--ar-alert-margin-bottom);
            color: var(--ar-alert-color);
            background-color: var(--ar-alert-bg);
            border: var(--ar-alert-border);
            border-radius: var(--ar-alert-border-radius)
        }

        .alert-heading {
            color: inherit
        }

        .alert-link {
            font-weight: 600
        }

        .alert-dismissible {
            padding-right: 3rem
        }

        .alert-dismissible .btn-close {
            position: absolute;
            top: 0;
            right: 0;
            z-index: 2;
            padding: 1.25rem 1rem
        }

        .alert-primary {
            --ar-alert-color: #3d7e68;
            --ar-alert-bg: #ecf4f1;
            --ar-alert-border-color: #a2c6ba
        }

        .alert-primary .alert-link {
            color: #316553
        }

        .alert-secondary {
            --ar-alert-color: #d5d9dd;
            --ar-alert-bg: #fdfefe;
            --ar-alert-border-color: #f6f8fa
        }

        .alert-secondary .alert-link {
            color: #aaaeb1
        }

        .alert-success {
            --ar-alert-color: #39b682;
            --ar-alert-bg: #ecfaf4;
            --ar-alert-border-color: #9fe5c8
        }

        .alert-success .alert-link {
            color: #2e9268
        }

        .alert-info {
            --ar-alert-color: #3972b6;
            --ar-alert-bg: #ecf2fa;
            --ar-alert-border-color: #9fbfe5
        }

        .alert-info .alert-link {
            color: #2e5b92
        }

        .alert-warning {
            --ar-alert-color: #d5b748;
            --ar-alert-bg: #fdfaee;
            --ar-alert-border-color: #f6e5a8
        }

        .alert-warning .alert-link {
            color: #aa923a
        }

        .alert-danger {
            --ar-alert-color: #d54848;
            --ar-alert-bg: #fdeeee;
            --ar-alert-border-color: #f6a8a8
        }

        .alert-danger .alert-link {
            color: #aa3a3a
        }

        .alert-light {
            --ar-alert-color: #e6e6e6;
            --ar-alert-bg: white;
            --ar-alert-border-color: white
        }

        .alert-light .alert-link {
            color: #b8b8b8
        }

        .alert-dark {
            --ar-alert-color: #101317;
            --ar-alert-bg: #e7e8e8;
            --ar-alert-border-color: #898a8c
        }

        .alert-dark .alert-link {
            color: #0d0f12
        }

        @-webkit-keyframes progress-bar-stripes {
            0% {
                background-position-x: 1rem
            }
        }

        @keyframes progress-bar-stripes {
            0% {
                background-position-x: 1rem
            }
        }

        .progress {
            --ar-progress-height: 1rem;
            --ar-progress-font-size: 0.75rem;
            --ar-progress-bg: #e9eef3;
            --ar-progress-border-radius: 50rem;
            --ar-progress-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075);
            --ar-progress-bar-color: #fff;
            --ar-progress-bar-bg: #448c74;
            --ar-progress-bar-transition: width 0.6s ease;
            display: flex;
            height: var(--ar-progress-height);
            overflow: hidden;
            font-size: var(--ar-progress-font-size);
            background-color: var(--ar-progress-bg);
            border-radius: var(--ar-progress-border-radius)
        }

        .progress-bar {
            display: flex;
            flex-direction: column;
            justify-content: center;
            overflow: hidden;
            color: var(--ar-progress-bar-color);
            text-align: center;
            white-space: nowrap;
            background-color: var(--ar-progress-bar-bg);
            transition: var(--ar-progress-bar-transition)
        }

        @media (prefers-reduced-motion: reduce) {
            .progress-bar {
                transition: none
            }
        }

        .progress-bar-striped {
            background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            background-size: var(--ar-progress-height) var(--ar-progress-height)
        }

        .progress-bar-animated {
            -webkit-animation: 1s linear infinite progress-bar-stripes;
            animation: 1s linear infinite progress-bar-stripes
        }

        @media (prefers-reduced-motion: reduce) {
            .progress-bar-animated {
                -webkit-animation: none;
                animation: none
            }
        }

        .list-group {
            --ar-list-group-color: var(--ar-body-color);
            --ar-list-group-bg: transparent;
            --ar-list-group-border-color: var(--ar-border-color);
            --ar-list-group-border-width: var(--ar-border-width);
            --ar-list-group-border-radius: var(--ar-border-radius-xl);
            --ar-list-group-item-padding-x: 1.25rem;
            --ar-list-group-item-padding-y: 0.875rem;
            --ar-list-group-action-color: var(--ar-gray-800);
            --ar-list-group-action-hover-color: var(--ar-primary);
            --ar-list-group-action-hover-bg: transparent;
            --ar-list-group-action-active-color: var(--ar-primary);
            --ar-list-group-action-active-bg: transparent;
            --ar-list-group-disabled-color: var(--ar-gray-600);
            --ar-list-group-disabled-bg: transparent;
            --ar-list-group-active-color: #fff;
            --ar-list-group-active-bg: var(--ar-primary);
            --ar-list-group-active-border-color: var(--ar-primary);
            display: flex;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            border-radius: var(--ar-list-group-border-radius)
        }

        .list-group-numbered {
            list-style-type: none;
            counter-reset: section
        }

        .list-group-numbered > .list-group-item::before {
            content: counters(section, ".") ". ";
            counter-increment: section
        }

        .list-group-item-action {
            width: 100%;
            color: var(--ar-list-group-action-color);
            text-align: inherit
        }

        .list-group-item-action:hover, .list-group-item-action:focus {
            z-index: 1;
            color: var(--ar-list-group-action-hover-color);
            text-decoration: none;
            background-color: var(--ar-list-group-action-hover-bg)
        }

        .list-group-item-action:active {
            color: var(--ar-list-group-action-active-color);
            background-color: var(--ar-list-group-action-active-bg)
        }

        .list-group-item {
            position: relative;
            display: block;
            padding: var(--ar-list-group-item-padding-y) var(--ar-list-group-item-padding-x);
            color: var(--ar-list-group-color);
            text-decoration: none;
            background-color: var(--ar-list-group-bg);
            border: var(--ar-list-group-border-width) solid var(--ar-list-group-border-color)
        }

        .list-group-item:first-child {
            border-top-left-radius: inherit;
            border-top-right-radius: inherit
        }

        .list-group-item:last-child {
            border-bottom-right-radius: inherit;
            border-bottom-left-radius: inherit
        }

        .list-group-item.disabled, .list-group-item:disabled {
            color: var(--ar-list-group-disabled-color);
            pointer-events: none;
            background-color: var(--ar-list-group-disabled-bg)
        }

        .list-group-item.active {
            z-index: 2;
            color: var(--ar-list-group-active-color);
            background-color: var(--ar-list-group-active-bg);
            border-color: var(--ar-list-group-active-border-color)
        }

        .list-group-item + .list-group-item {
            border-top-width: 0
        }

        .list-group-item + .list-group-item.active {
            margin-top: calc(var(--ar-list-group-border-width) * -1);
            border-top-width: var(--ar-list-group-border-width)
        }

        .list-group-horizontal {
            flex-direction: row
        }

        .list-group-horizontal > .list-group-item:first-child {
            border-bottom-left-radius: var(--ar-list-group-border-radius);
            border-top-right-radius: 0
        }

        .list-group-horizontal > .list-group-item:last-child {
            border-top-right-radius: var(--ar-list-group-border-radius);
            border-bottom-left-radius: 0
        }

        .list-group-horizontal > .list-group-item.active {
            margin-top: 0
        }

        .list-group-horizontal > .list-group-item + .list-group-item {
            border-top-width: var(--ar-list-group-border-width);
            border-left-width: 0
        }

        .list-group-horizontal > .list-group-item + .list-group-item.active {
            margin-left: calc(var(--ar-list-group-border-width) * -1);
            border-left-width: var(--ar-list-group-border-width)
        }

        @media (min-width: 576px) {
            .list-group-horizontal-sm {
                flex-direction: row
            }

            .list-group-horizontal-sm > .list-group-item:first-child {
                border-bottom-left-radius: var(--ar-list-group-border-radius);
                border-top-right-radius: 0
            }

            .list-group-horizontal-sm > .list-group-item:last-child {
                border-top-right-radius: var(--ar-list-group-border-radius);
                border-bottom-left-radius: 0
            }

            .list-group-horizontal-sm > .list-group-item.active {
                margin-top: 0
            }

            .list-group-horizontal-sm > .list-group-item + .list-group-item {
                border-top-width: var(--ar-list-group-border-width);
                border-left-width: 0
            }

            .list-group-horizontal-sm > .list-group-item + .list-group-item.active {
                margin-left: calc(var(--ar-list-group-border-width) * -1);
                border-left-width: var(--ar-list-group-border-width)
            }
        }

        @media (min-width: 768px) {
            .list-group-horizontal-md {
                flex-direction: row
            }

            .list-group-horizontal-md > .list-group-item:first-child {
                border-bottom-left-radius: var(--ar-list-group-border-radius);
                border-top-right-radius: 0
            }

            .list-group-horizontal-md > .list-group-item:last-child {
                border-top-right-radius: var(--ar-list-group-border-radius);
                border-bottom-left-radius: 0
            }

            .list-group-horizontal-md > .list-group-item.active {
                margin-top: 0
            }

            .list-group-horizontal-md > .list-group-item + .list-group-item {
                border-top-width: var(--ar-list-group-border-width);
                border-left-width: 0
            }

            .list-group-horizontal-md > .list-group-item + .list-group-item.active {
                margin-left: calc(var(--ar-list-group-border-width) * -1);
                border-left-width: var(--ar-list-group-border-width)
            }
        }

        @media (min-width: 992px) {
            .list-group-horizontal-lg {
                flex-direction: row
            }

            .list-group-horizontal-lg > .list-group-item:first-child {
                border-bottom-left-radius: var(--ar-list-group-border-radius);
                border-top-right-radius: 0
            }

            .list-group-horizontal-lg > .list-group-item:last-child {
                border-top-right-radius: var(--ar-list-group-border-radius);
                border-bottom-left-radius: 0
            }

            .list-group-horizontal-lg > .list-group-item.active {
                margin-top: 0
            }

            .list-group-horizontal-lg > .list-group-item + .list-group-item {
                border-top-width: var(--ar-list-group-border-width);
                border-left-width: 0
            }

            .list-group-horizontal-lg > .list-group-item + .list-group-item.active {
                margin-left: calc(var(--ar-list-group-border-width) * -1);
                border-left-width: var(--ar-list-group-border-width)
            }
        }

        @media (min-width: 1200px) {
            .list-group-horizontal-xl {
                flex-direction: row
            }

            .list-group-horizontal-xl > .list-group-item:first-child {
                border-bottom-left-radius: var(--ar-list-group-border-radius);
                border-top-right-radius: 0
            }

            .list-group-horizontal-xl > .list-group-item:last-child {
                border-top-right-radius: var(--ar-list-group-border-radius);
                border-bottom-left-radius: 0
            }

            .list-group-horizontal-xl > .list-group-item.active {
                margin-top: 0
            }

            .list-group-horizontal-xl > .list-group-item + .list-group-item {
                border-top-width: var(--ar-list-group-border-width);
                border-left-width: 0
            }

            .list-group-horizontal-xl > .list-group-item + .list-group-item.active {
                margin-left: calc(var(--ar-list-group-border-width) * -1);
                border-left-width: var(--ar-list-group-border-width)
            }
        }

        @media (min-width: 1400px) {
            .list-group-horizontal-xxl {
                flex-direction: row
            }

            .list-group-horizontal-xxl > .list-group-item:first-child {
                border-bottom-left-radius: var(--ar-list-group-border-radius);
                border-top-right-radius: 0
            }

            .list-group-horizontal-xxl > .list-group-item:last-child {
                border-top-right-radius: var(--ar-list-group-border-radius);
                border-bottom-left-radius: 0
            }

            .list-group-horizontal-xxl > .list-group-item.active {
                margin-top: 0
            }

            .list-group-horizontal-xxl > .list-group-item + .list-group-item {
                border-top-width: var(--ar-list-group-border-width);
                border-left-width: 0
            }

            .list-group-horizontal-xxl > .list-group-item + .list-group-item.active {
                margin-left: calc(var(--ar-list-group-border-width) * -1);
                border-left-width: var(--ar-list-group-border-width)
            }
        }

        .list-group-flush {
            border-radius: 0
        }

        .list-group-flush > .list-group-item {
            border-width: 0 0 var(--ar-list-group-border-width)
        }

        .list-group-flush > .list-group-item:last-child {
            border-bottom-width: 0
        }

        .list-group-item-primary {
            color: #295446;
            background-color: #e7f0ed
        }

        .list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
            color: #295446;
            background-color: #d0d8d5
        }

        .list-group-item-primary.list-group-item-action.active {
            color: #fff;
            background-color: #295446;
            border-color: #295446
        }

        .list-group-item-secondary {
            color: #5f6062;
            background-color: #fdfdfe
        }

        .list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
            color: #5f6062;
            background-color: #e4e4e5
        }

        .list-group-item-secondary.list-group-item-action.active {
            color: #fff;
            background-color: #5f6062;
            border-color: #5f6062
        }

        .list-group-item-success {
            color: #267956;
            background-color: #e6f8f1
        }

        .list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
            color: #267956;
            background-color: #cfdfd9
        }

        .list-group-item-success.list-group-item-action.active {
            color: #fff;
            background-color: #267956;
            border-color: #267956
        }

        .list-group-item-info {
            color: #264c79;
            background-color: #e6eef8
        }

        .list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
            color: #264c79;
            background-color: #cfd6df
        }

        .list-group-item-info.list-group-item-action.active {
            color: #fff;
            background-color: #264c79;
            border-color: #264c79
        }

        .list-group-item-warning {
            color: #5f5120;
            background-color: #fdf8e8
        }

        .list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
            color: #5f5120;
            background-color: #e4dfd1
        }

        .list-group-item-warning.list-group-item-action.active {
            color: #fff;
            background-color: #5f5120;
            border-color: #5f5120
        }

        .list-group-item-danger {
            color: #8e3030;
            background-color: #fde8e8
        }

        .list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
            color: #8e3030;
            background-color: #e4d1d1
        }

        .list-group-item-danger.list-group-item-action.active {
            color: #fff;
            background-color: #8e3030;
            border-color: #8e3030
        }

        .list-group-item-light {
            color: #666;
            background-color: #fff
        }

        .list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
            color: #666;
            background-color: #e6e6e6
        }

        .list-group-item-light.list-group-item-action.active {
            color: #fff;
            background-color: #666;
            border-color: #666
        }

        .list-group-item-dark {
            color: #0b0d0f;
            background-color: #e0e1e1
        }

        .list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
            color: #0b0d0f;
            background-color: #cacbcb
        }

        .list-group-item-dark.list-group-item-action.active {
            color: #fff;
            background-color: #0b0d0f;
            border-color: #0b0d0f
        }

        .btn-close {
            box-sizing: content-box;
            width: 1.375em;
            height: 1.375em;
            padding: .25em .25em;
            color: #000;
            background: rgba(0, 0, 0, 0) url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath d='M8 1.2A6.74 6.74 0 0 0 1.2 8 6.74 6.74 0 0 0 8 14.8 6.74 6.74 0 0 0 14.8 8 6.74 6.74 0 0 0 8 1.2zM0 8c0-4.4 3.6-8 8-8s8 3.6 8 8-3.6 8-8 8-8-3.6-8-8zm10.6-2.6a.61.61 0 0 1 0 .8L8.8 8l1.9 1.9a.61.61 0 0 1 0 .8.61.61 0 0 1-.8 0L8 8.8l-1.9 1.9a.61.61 0 0 1-.8 0 .61.61 0 0 1 0-.8L7.2 8 5.4 6.1a.61.61 0 0 1 0-.8.61.61 0 0 1 .8 0l1.9 1.9L10 5.3c.1-.1.4-.1.6.1z' fill-rule='evenodd' fill='%23000'/%3e%3c/svg%3e") center/1.375em auto no-repeat;
            border: 0;
            border-radius: 1rem;
            opacity: .55
        }

        .btn-close:hover {
            color: #000;
            text-decoration: none;
            opacity: .85
        }

        .btn-close:focus {
            outline: 0;
            box-shadow: none;
            opacity: .85
        }

        .btn-close:disabled, .btn-close.disabled {
            pointer-events: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            opacity: .3
        }

        .btn-close-white {
            filter: invert(1) grayscale(100%) brightness(200%)
        }

        .toast {
            --ar-toast-padding-x: 1.25rem;
            --ar-toast-padding-y: 0.875rem;
            --ar-toast-spacing: 1.5rem;
            --ar-toast-max-width: 350px;
            --ar-toast-font-size: 0.875rem;
            --ar-toast-color: ;
            --ar-toast-bg: #fff;
            --ar-toast-border-width: var(--ar-border-width);
            --ar-toast-border-color: #f0f3f6;
            --ar-toast-border-radius: var(--ar-border-radius-lg);
            --ar-toast-box-shadow: 0 0.4375rem 1.25rem rgba(208, 208, 196, 0.32);
            --ar-toast-header-color: var(--ar-gray-900);
            --ar-toast-header-bg: transparent;
            --ar-toast-header-border-color: var(--ar-border-color);
            width: var(--ar-toast-max-width);
            max-width: 100%;
            font-size: var(--ar-toast-font-size);
            color: var(--ar-toast-color);
            pointer-events: auto;
            background-color: var(--ar-toast-bg);
            background-clip: padding-box;
            border: var(--ar-toast-border-width) solid var(--ar-toast-border-color);
            box-shadow: var(--ar-toast-box-shadow);
            border-radius: var(--ar-toast-border-radius)
        }

        .toast.showing {
            opacity: 0
        }

        .toast:not(.show) {
            display: none
        }

        .toast-container {
            position: absolute;
            z-index: 1090;
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
            max-width: 100%;
            pointer-events: none
        }

        .toast-container > :not(:last-child) {
            margin-bottom: var(--ar-toast-spacing)
        }

        .toast-header {
            display: flex;
            align-items: center;
            padding: var(--ar-toast-padding-y) var(--ar-toast-padding-x);
            color: var(--ar-toast-header-color);
            background-color: var(--ar-toast-header-bg);
            background-clip: padding-box;
            border-bottom: var(--ar-toast-border-width) solid var(--ar-toast-header-border-color);
            border-top-left-radius: calc(var(--ar-toast-border-radius) - var(--ar-toast-border-width));
            border-top-right-radius: calc(var(--ar-toast-border-radius) - var(--ar-toast-border-width))
        }

        .toast-header .btn-close {
            margin-right: calc(var(--ar-toast-padding-x) * -0.5);
            margin-left: var(--ar-toast-padding-x)
        }

        .toast-body {
            padding: var(--ar-toast-padding-x);
            word-wrap: break-word
        }

        .modal {
            --ar-modal-zindex: 1055;
            --ar-modal-width: 500px;
            --ar-modal-padding: 2.375rem;
            --ar-modal-margin: 0.5rem;
            --ar-modal-color: ;
            --ar-modal-bg: #fff;
            --ar-modal-border-color: var(--ar-border-color);
            --ar-modal-border-width: var(--ar-border-width);
            --ar-modal-border-radius: var(--ar-border-radius-2xl);
            --ar-modal-box-shadow: none;
            --ar-modal-inner-border-radius: calc(var(--ar-border-radius-2xl) - (var(--ar-border-width)));
            --ar-modal-header-padding-x: 2.375rem;
            --ar-modal-header-padding-y: 1.78125rem;
            --ar-modal-header-padding: 1.78125rem 2.375rem;
            --ar-modal-header-border-color: var(--ar-border-color);
            --ar-modal-header-border-width: var(--ar-border-width);
            --ar-modal-title-line-height: 1.5;
            --ar-modal-footer-gap: 0;
            --ar-modal-footer-bg: ;
            --ar-modal-footer-border-color: var(--ar-border-color);
            --ar-modal-footer-border-width: var(--ar-border-width);
            position: fixed;
            top: 0;
            left: 0;
            z-index: var(--ar-modal-zindex);
            display: none;
            width: 100%;
            height: 100%;
            overflow-x: hidden;
            overflow-y: auto;
            outline: 0
        }

        .modal-dialog {
            position: relative;
            width: auto;
            margin: var(--ar-modal-margin);
            pointer-events: none
        }

        .modal.fade .modal-dialog {
            transition: transform .2s ease-out;
            transform: scale(0.9)
        }

        @media (prefers-reduced-motion: reduce) {
            .modal.fade .modal-dialog {
                transition: none
            }
        }

        .modal.show .modal-dialog {
            transform: none
        }

        .modal.modal-static .modal-dialog {
            transform: scale(1.02)
        }

        .modal-dialog-scrollable {
            height: calc(100% - var(--ar-modal-margin) * 2)
        }

        .modal-dialog-scrollable .modal-content {
            max-height: 100%;
            overflow: hidden
        }

        .modal-dialog-scrollable .modal-body {
            overflow-y: auto
        }

        .modal-dialog-centered {
            display: flex;
            align-items: center;
            min-height: calc(100% - var(--ar-modal-margin) * 2)
        }

        .modal-content {
            position: relative;
            display: flex;
            flex-direction: column;
            width: 100%;
            color: var(--ar-modal-color);
            pointer-events: auto;
            background-color: var(--ar-modal-bg);
            background-clip: padding-box;
            border: var(--ar-modal-border-width) solid var(--ar-modal-border-color);
            border-radius: var(--ar-modal-border-radius);
            outline: 0
        }

        .modal-backdrop {
            --ar-backdrop-zindex: 1050;
            --ar-backdrop-bg: #000;
            --ar-backdrop-opacity: 0.65;
            position: fixed;
            top: 0;
            left: 0;
            z-index: var(--ar-backdrop-zindex);
            width: 100vw;
            height: 100vh;
            background-color: var(--ar-backdrop-bg)
        }

        .modal-backdrop.fade {
            opacity: 0
        }

        .modal-backdrop.show {
            opacity: var(--ar-backdrop-opacity)
        }

        .modal-header {
            display: flex;
            flex-shrink: 0;
            align-items: center;
            justify-content: space-between;
            padding: var(--ar-modal-header-padding);
            border-bottom: var(--ar-modal-header-border-width) solid var(--ar-modal-header-border-color);
            border-top-left-radius: var(--ar-modal-inner-border-radius);
            border-top-right-radius: var(--ar-modal-inner-border-radius)
        }

        .modal-header .btn-close {
            padding: calc(var(--ar-modal-header-padding-y) * .5) calc(var(--ar-modal-header-padding-x) * .5);
            margin: calc(var(--ar-modal-header-padding-y) * -0.5) calc(var(--ar-modal-header-padding-x) * -0.5) calc(var(--ar-modal-header-padding-y) * -0.5) auto
        }

        .modal-title {
            margin-bottom: 0;
            line-height: var(--ar-modal-title-line-height)
        }

        .modal-body {
            position: relative;
            flex: 1 1 auto;
            padding: var(--ar-modal-padding)
        }

        .modal-footer {
            display: flex;
            flex-shrink: 0;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-end;
            padding: calc(var(--ar-modal-padding) - var(--ar-modal-footer-gap) * .5);
            background-color: var(--ar-modal-footer-bg);
            border-top: var(--ar-modal-footer-border-width) solid var(--ar-modal-footer-border-color);
            border-bottom-right-radius: var(--ar-modal-inner-border-radius);
            border-bottom-left-radius: var(--ar-modal-inner-border-radius)
        }

        .modal-footer > * {
            margin: calc(var(--ar-modal-footer-gap) * .5)
        }

        @media (min-width: 576px) {
            .modal {
                --ar-modal-margin: 1.75rem;
                --ar-modal-box-shadow: none
            }

            .modal-dialog {
                max-width: var(--ar-modal-width);
                margin-right: auto;
                margin-left: auto
            }

            .modal-sm {
                --ar-modal-width: 300px
            }
        }

        @media (min-width: 992px) {
            .modal-lg, .modal-xl {
                --ar-modal-width: 800px
            }
        }

        @media (min-width: 1200px) {
            .modal-xl {
                --ar-modal-width: 1140px
            }
        }

        .modal-fullscreen {
            width: 100vw;
            max-width: none;
            height: 100%;
            margin: 0
        }

        .modal-fullscreen .modal-content {
            height: 100%;
            border: 0;
            border-radius: 0
        }

        .modal-fullscreen .modal-header, .modal-fullscreen .modal-footer {
            border-radius: 0
        }

        .modal-fullscreen .modal-body {
            overflow-y: auto
        }

        @media (max-width: 575.98px) {
            .modal-fullscreen-sm-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0
            }

            .modal-fullscreen-sm-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0
            }

            .modal-fullscreen-sm-down .modal-header, .modal-fullscreen-sm-down .modal-footer {
                border-radius: 0
            }

            .modal-fullscreen-sm-down .modal-body {
                overflow-y: auto
            }
        }

        @media (max-width: 767.98px) {
            .modal-fullscreen-md-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0
            }

            .modal-fullscreen-md-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0
            }

            .modal-fullscreen-md-down .modal-header, .modal-fullscreen-md-down .modal-footer {
                border-radius: 0
            }

            .modal-fullscreen-md-down .modal-body {
                overflow-y: auto
            }
        }

        @media (max-width: 991.98px) {
            .modal-fullscreen-lg-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0
            }

            .modal-fullscreen-lg-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0
            }

            .modal-fullscreen-lg-down .modal-header, .modal-fullscreen-lg-down .modal-footer {
                border-radius: 0
            }

            .modal-fullscreen-lg-down .modal-body {
                overflow-y: auto
            }
        }

        @media (max-width: 1199.98px) {
            .modal-fullscreen-xl-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0
            }

            .modal-fullscreen-xl-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0
            }

            .modal-fullscreen-xl-down .modal-header, .modal-fullscreen-xl-down .modal-footer {
                border-radius: 0
            }

            .modal-fullscreen-xl-down .modal-body {
                overflow-y: auto
            }
        }

        @media (max-width: 1399.98px) {
            .modal-fullscreen-xxl-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0
            }

            .modal-fullscreen-xxl-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0
            }

            .modal-fullscreen-xxl-down .modal-header, .modal-fullscreen-xxl-down .modal-footer {
                border-radius: 0
            }

            .modal-fullscreen-xxl-down .modal-body {
                overflow-y: auto
            }
        }

        .tooltip {
            --ar-tooltip-zindex: 1080;
            --ar-tooltip-max-width: 200px;
            --ar-tooltip-padding-x: 0.75rem;
            --ar-tooltip-padding-y: 0.375rem;
            --ar-tooltip-margin: ;
            --ar-tooltip-font-size: calc(var(--ar-body-font-size) * 0.875);
            --ar-tooltip-color: #fff;
            --ar-tooltip-bg: #000;
            --ar-tooltip-border-radius: var(--ar-border-radius-sm);
            --ar-tooltip-opacity: 0.9;
            --ar-tooltip-arrow-width: 0.8rem;
            --ar-tooltip-arrow-height: 0.4rem;
            z-index: var(--ar-tooltip-zindex);
            display: block;
            padding: var(--ar-tooltip-arrow-height);
            margin: var(--ar-tooltip-margin);
            font-family: var(--ar-font-sans-serif);
            font-style: normal;
            font-weight: 400;
            line-height: 1.5;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            white-space: normal;
            word-spacing: normal;
            line-break: auto;
            font-size: var(--ar-tooltip-font-size);
            word-wrap: break-word;
            opacity: 0
        }

        .tooltip.show {
            opacity: var(--ar-tooltip-opacity)
        }

        .tooltip .tooltip-arrow {
            display: block;
            width: var(--ar-tooltip-arrow-width);
            height: var(--ar-tooltip-arrow-height)
        }

        .tooltip .tooltip-arrow::before {
            position: absolute;
            content: "";
            border-color: rgba(0, 0, 0, 0);
            border-style: solid
        }

        .bs-tooltip-top .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow {
            bottom: 0
        }

        .bs-tooltip-top .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow::before {
            top: -1px;
            border-width: var(--ar-tooltip-arrow-height) calc(var(--ar-tooltip-arrow-width) * .5) 0;
            border-top-color: var(--ar-tooltip-bg)
        }

        .bs-tooltip-end .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow {
            left: 0;
            width: var(--ar-tooltip-arrow-height);
            height: var(--ar-tooltip-arrow-width)
        }

        .bs-tooltip-end .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow::before {
            right: -1px;
            border-width: calc(var(--ar-tooltip-arrow-width) * .5) var(--ar-tooltip-arrow-height) calc(var(--ar-tooltip-arrow-width) * .5) 0;
            border-right-color: var(--ar-tooltip-bg)
        }

        .bs-tooltip-bottom .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow {
            top: 0
        }

        .bs-tooltip-bottom .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow::before {
            bottom: -1px;
            border-width: 0 calc(var(--ar-tooltip-arrow-width) * .5) var(--ar-tooltip-arrow-height);
            border-bottom-color: var(--ar-tooltip-bg)
        }

        .bs-tooltip-start .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow {
            right: 0;
            width: var(--ar-tooltip-arrow-height);
            height: var(--ar-tooltip-arrow-width)
        }

        .bs-tooltip-start .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow::before {
            left: -1px;
            border-width: calc(var(--ar-tooltip-arrow-width) * .5) 0 calc(var(--ar-tooltip-arrow-width) * .5) var(--ar-tooltip-arrow-height);
            border-left-color: var(--ar-tooltip-bg)
        }

        .tooltip-inner {
            max-width: var(--ar-tooltip-max-width);
            padding: var(--ar-tooltip-padding-y) var(--ar-tooltip-padding-x);
            color: var(--ar-tooltip-color);
            text-align: center;
            background-color: var(--ar-tooltip-bg);
            border-radius: var(--ar-tooltip-border-radius)
        }

        .popover {
            --ar-popover-zindex: 1070;
            --ar-popover-max-width: 276px;
            --ar-popover-font-size: calc(var(--ar-body-font-size) * 0.875);
            --ar-popover-bg: #fff;
            --ar-popover-border-width: var(--ar-border-width);
            --ar-popover-border-color: #f0f3f6;
            --ar-popover-border-radius: var(--ar-border-radius-lg);
            --ar-popover-inner-border-radius: calc(var(--ar-border-radius-lg) - (var(--ar-border-width)));
            --ar-popover-box-shadow: 0 0.4375rem 1.25rem rgba(208, 208, 196, 0.32);
            --ar-popover-header-padding-x: 1.25rem;
            --ar-popover-header-padding-y: 0.875rem;
            --ar-popover-header-font-size: 1rem;
            --ar-popover-header-color: var(--ar-gray-800);
            --ar-popover-header-bg: transparent;
            --ar-popover-body-padding-x: 1.25rem;
            --ar-popover-body-padding-y: 1rem;
            --ar-popover-body-color: var(--ar-body-color);
            --ar-popover-arrow-width: 1rem;
            --ar-popover-arrow-height: 0.5rem;
            --ar-popover-arrow-border: var(--ar-popover-border-color);
            z-index: var(--ar-popover-zindex);
            display: block;
            max-width: var(--ar-popover-max-width);
            font-family: var(--ar-font-sans-serif);
            font-style: normal;
            font-weight: 400;
            line-height: 1.5;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            white-space: normal;
            word-spacing: normal;
            line-break: auto;
            font-size: var(--ar-popover-font-size);
            word-wrap: break-word;
            background-color: var(--ar-popover-bg);
            background-clip: padding-box;
            border: var(--ar-popover-border-width) solid var(--ar-popover-border-color);
            border-radius: var(--ar-popover-border-radius)
        }

        .popover .popover-arrow {
            display: block;
            width: var(--ar-popover-arrow-width);
            height: var(--ar-popover-arrow-height)
        }

        .popover .popover-arrow::before, .popover .popover-arrow::after {
            position: absolute;
            display: block;
            content: "";
            border-color: rgba(0, 0, 0, 0);
            border-style: solid;
            border-width: 0
        }

        .bs-popover-top > .popover-arrow, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow {
            bottom: calc(var(--ar-popover-arrow-height) * -1 - var(--ar-popover-border-width))
        }

        .bs-popover-top > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::before, .bs-popover-top > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::after {
            border-width: var(--ar-popover-arrow-height) calc(var(--ar-popover-arrow-width) * .5) 0
        }

        .bs-popover-top > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::before {
            bottom: 0;
            border-top-color: var(--ar-popover-arrow-border)
        }

        .bs-popover-top > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::after {
            bottom: var(--ar-popover-border-width);
            border-top-color: var(--ar-popover-bg)
        }

        .bs-popover-end > .popover-arrow, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow {
            left: calc(var(--ar-popover-arrow-height) * -1 - var(--ar-popover-border-width));
            width: var(--ar-popover-arrow-height);
            height: var(--ar-popover-arrow-width)
        }

        .bs-popover-end > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::before, .bs-popover-end > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::after {
            border-width: calc(var(--ar-popover-arrow-width) * .5) var(--ar-popover-arrow-height) calc(var(--ar-popover-arrow-width) * .5) 0
        }

        .bs-popover-end > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::before {
            left: 0;
            border-right-color: var(--ar-popover-arrow-border)
        }

        .bs-popover-end > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::after {
            left: var(--ar-popover-border-width);
            border-right-color: var(--ar-popover-bg)
        }

        .bs-popover-bottom > .popover-arrow, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow {
            top: calc(var(--ar-popover-arrow-height) * -1 - var(--ar-popover-border-width))
        }

        .bs-popover-bottom > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::before, .bs-popover-bottom > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::after {
            border-width: 0 calc(var(--ar-popover-arrow-width) * .5) var(--ar-popover-arrow-height)
        }

        .bs-popover-bottom > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::before {
            top: 0;
            border-bottom-color: var(--ar-popover-arrow-border)
        }

        .bs-popover-bottom > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::after {
            top: var(--ar-popover-border-width);
            border-bottom-color: var(--ar-popover-bg)
        }

        .bs-popover-bottom .popover-header::before, .bs-popover-auto[data-popper-placement^=bottom] .popover-header::before {
            position: absolute;
            top: 0;
            left: 50%;
            display: block;
            width: var(--ar-popover-arrow-width);
            margin-left: calc(var(--ar-popover-arrow-width) * -0.5);
            content: "";
            border-bottom: var(--ar-popover-border-width) solid var(--ar-popover-header-bg)
        }

        .bs-popover-start > .popover-arrow, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow {
            right: calc(var(--ar-popover-arrow-height) * -1 - var(--ar-popover-border-width));
            width: var(--ar-popover-arrow-height);
            height: var(--ar-popover-arrow-width)
        }

        .bs-popover-start > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::before, .bs-popover-start > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::after {
            border-width: calc(var(--ar-popover-arrow-width) * .5) 0 calc(var(--ar-popover-arrow-width) * .5) var(--ar-popover-arrow-height)
        }

        .bs-popover-start > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::before {
            right: 0;
            border-left-color: var(--ar-popover-arrow-border)
        }

        .bs-popover-start > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::after {
            right: var(--ar-popover-border-width);
            border-left-color: var(--ar-popover-bg)
        }

        .popover-header {
            padding: var(--ar-popover-header-padding-y) var(--ar-popover-header-padding-x);
            margin-bottom: 0;
            font-size: var(--ar-popover-header-font-size);
            color: var(--ar-popover-header-color);
            background-color: var(--ar-popover-header-bg);
            border-bottom: var(--ar-popover-border-width) solid var(--ar-popover-border-color);
            border-top-left-radius: var(--ar-popover-inner-border-radius);
            border-top-right-radius: var(--ar-popover-inner-border-radius)
        }

        .popover-header:empty {
            display: none
        }

        .popover-body {
            padding: var(--ar-popover-body-padding-y) var(--ar-popover-body-padding-x);
            color: var(--ar-popover-body-color)
        }

        .spinner-grow, .spinner-border {
            display: inline-block;
            width: var(--ar-spinner-width);
            height: var(--ar-spinner-height);
            vertical-align: var(--ar-spinner-vertical-align);
            border-radius: 50%;
            -webkit-animation: var(--ar-spinner-animation-speed) linear infinite var(--ar-spinner-animation-name);
            animation: var(--ar-spinner-animation-speed) linear infinite var(--ar-spinner-animation-name)
        }

        @-webkit-keyframes spinner-border {
            to {
                transform: rotate(360deg) /* rtl:ignore */
            }
        }

        @keyframes spinner-border {
            to {
                transform: rotate(360deg) /* rtl:ignore */
            }
        }

        .spinner-border {
            --ar-spinner-width: 2rem;
            --ar-spinner-height: 2rem;
            --ar-spinner-vertical-align: -0.125em;
            --ar-spinner-border-width: 0.15em;
            --ar-spinner-animation-speed: 0.75s;
            --ar-spinner-animation-name: spinner-border;
            border: var(--ar-spinner-border-width) solid currentcolor;
            border-right-color: rgba(0, 0, 0, 0)
        }

        .spinner-border-sm {
            --ar-spinner-width: 1rem;
            --ar-spinner-height: 1rem;
            --ar-spinner-border-width: 0.1em
        }

        @-webkit-keyframes spinner-grow {
            0% {
                transform: scale(0)
            }
            50% {
                opacity: 1;
                transform: none
            }
        }

        @keyframes spinner-grow {
            0% {
                transform: scale(0)
            }
            50% {
                opacity: 1;
                transform: none
            }
        }

        .spinner-grow {
            --ar-spinner-width: 2rem;
            --ar-spinner-height: 2rem;
            --ar-spinner-vertical-align: -0.125em;
            --ar-spinner-animation-speed: 0.75s;
            --ar-spinner-animation-name: spinner-grow;
            background-color: currentcolor;
            opacity: 0
        }

        .spinner-grow-sm {
            --ar-spinner-width: 1rem;
            --ar-spinner-height: 1rem
        }

        @media (prefers-reduced-motion: reduce) {
            .spinner-border, .spinner-grow {
                --ar-spinner-animation-speed: 1.5s
            }
        }

        .offcanvas, .offcanvas-xxl, .offcanvas-xl, .offcanvas-lg, .offcanvas-md, .offcanvas-sm {
            --ar-offcanvas-width: 350px;
            --ar-offcanvas-height: 30vh;
            --ar-offcanvas-padding-x: 1.5rem;
            --ar-offcanvas-padding-y: 1.5rem;
            --ar-offcanvas-color: ;
            --ar-offcanvas-bg: #fff;
            --ar-offcanvas-border-width: 0;
            --ar-offcanvas-border-color: var(--ar-border-color);
            --ar-offcanvas-box-shadow: 0 0.4375rem 1.25rem rgba(208, 208, 196, 0.32)
        }

        @media (max-width: 575.98px) {
            .offcanvas-sm {
                position: fixed;
                bottom: 0;
                z-index: 1045;
                display: flex;
                flex-direction: column;
                max-width: 100%;
                color: var(--ar-offcanvas-color);
                visibility: hidden;
                background-color: var(--ar-offcanvas-bg);
                background-clip: padding-box;
                outline: 0;
                transition: transform .3s ease-in-out
            }
        }

        @media (max-width: 575.98px)and (prefers-reduced-motion: reduce) {
            .offcanvas-sm {
                transition: none
            }
        }

        @media (max-width: 575.98px) {
            .offcanvas-sm.offcanvas-start {
                top: 0;
                left: 0;
                width: var(--ar-offcanvas-width);
                border-right: var(--ar-offcanvas-border-width) solid var(--ar-offcanvas-border-color);
                transform: translateX(-100%)
            }
        }

        @media (max-width: 575.98px) {
            .offcanvas-sm.offcanvas-end {
                top: 0;
                right: 0;
                width: var(--ar-offcanvas-width);
                border-left: var(--ar-offcanvas-border-width) solid var(--ar-offcanvas-border-color);
                transform: translateX(100%)
            }
        }

        @media (max-width: 575.98px) {
            .offcanvas-sm.offcanvas-top {
                top: 0;
                right: 0;
                left: 0;
                height: var(--ar-offcanvas-height);
                max-height: 100%;
                border-bottom: var(--ar-offcanvas-border-width) solid var(--ar-offcanvas-border-color);
                transform: translateY(-100%)
            }
        }

        @media (max-width: 575.98px) {
            .offcanvas-sm.offcanvas-bottom {
                right: 0;
                left: 0;
                height: var(--ar-offcanvas-height);
                max-height: 100%;
                border-top: var(--ar-offcanvas-border-width) solid var(--ar-offcanvas-border-color);
                transform: translateY(100%)
            }
        }

        @media (max-width: 575.98px) {
            .offcanvas-sm.showing, .offcanvas-sm.show:not(.hiding) {
                transform: none
            }
        }

        @media (max-width: 575.98px) {
            .offcanvas-sm.showing, .offcanvas-sm.hiding, .offcanvas-sm.show {
                visibility: visible
            }
        }

        @media (min-width: 576px) {
            .offcanvas-sm {
                --ar-offcanvas-height: auto;
                --ar-offcanvas-border-width: 0;
                background-color: rgba(0, 0, 0, 0) !important
            }

            .offcanvas-sm .offcanvas-header {
                display: none
            }

            .offcanvas-sm .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
                background-color: rgba(0, 0, 0, 0) !important
            }
        }

        @media (max-width: 767.98px) {
            .offcanvas-md {
                position: fixed;
                bottom: 0;
                z-index: 1045;
                display: flex;
                flex-direction: column;
                max-width: 100%;
                color: var(--ar-offcanvas-color);
                visibility: hidden;
                background-color: var(--ar-offcanvas-bg);
                background-clip: padding-box;
                outline: 0;
                transition: transform .3s ease-in-out
            }
        }

        @media (max-width: 767.98px)and (prefers-reduced-motion: reduce) {
            .offcanvas-md {
                transition: none
            }
        }

        @media (max-width: 767.98px) {
            .offcanvas-md.offcanvas-start {
                top: 0;
                left: 0;
                width: var(--ar-offcanvas-width);
                border-right: var(--ar-offcanvas-border-width) solid var(--ar-offcanvas-border-color);
                transform: translateX(-100%)
            }
        }

        @media (max-width: 767.98px) {
            .offcanvas-md.offcanvas-end {
                top: 0;
                right: 0;
                width: var(--ar-offcanvas-width);
                border-left: var(--ar-offcanvas-border-width) solid var(--ar-offcanvas-border-color);
                transform: translateX(100%)
            }
        }

        @media (max-width: 767.98px) {
            .offcanvas-md.offcanvas-top {
                top: 0;
                right: 0;
                left: 0;
                height: var(--ar-offcanvas-height);
                max-height: 100%;
                border-bottom: var(--ar-offcanvas-border-width) solid var(--ar-offcanvas-border-color);
                transform: translateY(-100%)
            }
        }

        @media (max-width: 767.98px) {
            .offcanvas-md.offcanvas-bottom {
                right: 0;
                left: 0;
                height: var(--ar-offcanvas-height);
                max-height: 100%;
                border-top: var(--ar-offcanvas-border-width) solid var(--ar-offcanvas-border-color);
                transform: translateY(100%)
            }
        }

        @media (max-width: 767.98px) {
            .offcanvas-md.showing, .offcanvas-md.show:not(.hiding) {
                transform: none
            }
        }

        @media (max-width: 767.98px) {
            .offcanvas-md.showing, .offcanvas-md.hiding, .offcanvas-md.show {
                visibility: visible
            }
        }

        @media (min-width: 768px) {
            .offcanvas-md {
                --ar-offcanvas-height: auto;
                --ar-offcanvas-border-width: 0;
                background-color: rgba(0, 0, 0, 0) !important
            }

            .offcanvas-md .offcanvas-header {
                display: none
            }

            .offcanvas-md .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
                background-color: rgba(0, 0, 0, 0) !important
            }
        }

        @media (max-width: 991.98px) {
            .offcanvas-lg {
                position: fixed;
                bottom: 0;
                z-index: 1045;
                display: flex;
                flex-direction: column;
                max-width: 100%;
                color: var(--ar-offcanvas-color);
                visibility: hidden;
                background-color: var(--ar-offcanvas-bg);
                background-clip: padding-box;
                outline: 0;
                transition: transform .3s ease-in-out
            }
        }

        @media (max-width: 991.98px)and (prefers-reduced-motion: reduce) {
            .offcanvas-lg {
                transition: none
            }
        }

        @media (max-width: 991.98px) {
            .offcanvas-lg.offcanvas-start {
                top: 0;
                left: 0;
                width: var(--ar-offcanvas-width);
                border-right: var(--ar-offcanvas-border-width) solid var(--ar-offcanvas-border-color);
                transform: translateX(-100%)
            }
        }

        @media (max-width: 991.98px) {
            .offcanvas-lg.offcanvas-end {
                top: 0;
                right: 0;
                width: var(--ar-offcanvas-width);
                border-left: var(--ar-offcanvas-border-width) solid var(--ar-offcanvas-border-color);
                transform: translateX(100%)
            }
        }

        @media (max-width: 991.98px) {
            .offcanvas-lg.offcanvas-top {
                top: 0;
                right: 0;
                left: 0;
                height: var(--ar-offcanvas-height);
                max-height: 100%;
                border-bottom: var(--ar-offcanvas-border-width) solid var(--ar-offcanvas-border-color);
                transform: translateY(-100%)
            }
        }

        @media (max-width: 991.98px) {
            .offcanvas-lg.offcanvas-bottom {
                right: 0;
                left: 0;
                height: var(--ar-offcanvas-height);
                max-height: 100%;
                border-top: var(--ar-offcanvas-border-width) solid var(--ar-offcanvas-border-color);
                transform: translateY(100%)
            }
        }

        @media (max-width: 991.98px) {
            .offcanvas-lg.showing, .offcanvas-lg.show:not(.hiding) {
                transform: none
            }
        }

        @media (max-width: 991.98px) {
            .offcanvas-lg.showing, .offcanvas-lg.hiding, .offcanvas-lg.show {
                visibility: visible
            }
        }

        @media (min-width: 992px) {
            .offcanvas-lg {
                --ar-offcanvas-height: auto;
                --ar-offcanvas-border-width: 0;
                background-color: rgba(0, 0, 0, 0) !important
            }

            .offcanvas-lg .offcanvas-header {
                display: none
            }

            .offcanvas-lg .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
                background-color: rgba(0, 0, 0, 0) !important
            }
        }

        @media (max-width: 1199.98px) {
            .offcanvas-xl {
                position: fixed;
                bottom: 0;
                z-index: 1045;
                display: flex;
                flex-direction: column;
                max-width: 100%;
                color: var(--ar-offcanvas-color);
                visibility: hidden;
                background-color: var(--ar-offcanvas-bg);
                background-clip: padding-box;
                outline: 0;
                transition: transform .3s ease-in-out
            }
        }

        @media (max-width: 1199.98px)and (prefers-reduced-motion: reduce) {
            .offcanvas-xl {
                transition: none
            }
        }

        @media (max-width: 1199.98px) {
            .offcanvas-xl.offcanvas-start {
                top: 0;
                left: 0;
                width: var(--ar-offcanvas-width);
                border-right: var(--ar-offcanvas-border-width) solid var(--ar-offcanvas-border-color);
                transform: translateX(-100%)
            }
        }

        @media (max-width: 1199.98px) {
            .offcanvas-xl.offcanvas-end {
                top: 0;
                right: 0;
                width: var(--ar-offcanvas-width);
                border-left: var(--ar-offcanvas-border-width) solid var(--ar-offcanvas-border-color);
                transform: translateX(100%)
            }
        }

        @media (max-width: 1199.98px) {
            .offcanvas-xl.offcanvas-top {
                top: 0;
                right: 0;
                left: 0;
                height: var(--ar-offcanvas-height);
                max-height: 100%;
                border-bottom: var(--ar-offcanvas-border-width) solid var(--ar-offcanvas-border-color);
                transform: translateY(-100%)
            }
        }

        @media (max-width: 1199.98px) {
            .offcanvas-xl.offcanvas-bottom {
                right: 0;
                left: 0;
                height: var(--ar-offcanvas-height);
                max-height: 100%;
                border-top: var(--ar-offcanvas-border-width) solid var(--ar-offcanvas-border-color);
                transform: translateY(100%)
            }
        }

        @media (max-width: 1199.98px) {
            .offcanvas-xl.showing, .offcanvas-xl.show:not(.hiding) {
                transform: none
            }
        }

        @media (max-width: 1199.98px) {
            .offcanvas-xl.showing, .offcanvas-xl.hiding, .offcanvas-xl.show {
                visibility: visible
            }
        }

        @media (min-width: 1200px) {
            .offcanvas-xl {
                --ar-offcanvas-height: auto;
                --ar-offcanvas-border-width: 0;
                background-color: rgba(0, 0, 0, 0) !important
            }

            .offcanvas-xl .offcanvas-header {
                display: none
            }

            .offcanvas-xl .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
                background-color: rgba(0, 0, 0, 0) !important
            }
        }

        @media (max-width: 1399.98px) {
            .offcanvas-xxl {
                position: fixed;
                bottom: 0;
                z-index: 1045;
                display: flex;
                flex-direction: column;
                max-width: 100%;
                color: var(--ar-offcanvas-color);
                visibility: hidden;
                background-color: var(--ar-offcanvas-bg);
                background-clip: padding-box;
                outline: 0;
                transition: transform .3s ease-in-out
            }
        }

        @media (max-width: 1399.98px)and (prefers-reduced-motion: reduce) {
            .offcanvas-xxl {
                transition: none
            }
        }

        @media (max-width: 1399.98px) {
            .offcanvas-xxl.offcanvas-start {
                top: 0;
                left: 0;
                width: var(--ar-offcanvas-width);
                border-right: var(--ar-offcanvas-border-width) solid var(--ar-offcanvas-border-color);
                transform: translateX(-100%)
            }
        }

        @media (max-width: 1399.98px) {
            .offcanvas-xxl.offcanvas-end {
                top: 0;
                right: 0;
                width: var(--ar-offcanvas-width);
                border-left: var(--ar-offcanvas-border-width) solid var(--ar-offcanvas-border-color);
                transform: translateX(100%)
            }
        }

        @media (max-width: 1399.98px) {
            .offcanvas-xxl.offcanvas-top {
                top: 0;
                right: 0;
                left: 0;
                height: var(--ar-offcanvas-height);
                max-height: 100%;
                border-bottom: var(--ar-offcanvas-border-width) solid var(--ar-offcanvas-border-color);
                transform: translateY(-100%)
            }
        }

        @media (max-width: 1399.98px) {
            .offcanvas-xxl.offcanvas-bottom {
                right: 0;
                left: 0;
                height: var(--ar-offcanvas-height);
                max-height: 100%;
                border-top: var(--ar-offcanvas-border-width) solid var(--ar-offcanvas-border-color);
                transform: translateY(100%)
            }
        }

        @media (max-width: 1399.98px) {
            .offcanvas-xxl.showing, .offcanvas-xxl.show:not(.hiding) {
                transform: none
            }
        }

        @media (max-width: 1399.98px) {
            .offcanvas-xxl.showing, .offcanvas-xxl.hiding, .offcanvas-xxl.show {
                visibility: visible
            }
        }

        @media (min-width: 1400px) {
            .offcanvas-xxl {
                --ar-offcanvas-height: auto;
                --ar-offcanvas-border-width: 0;
                background-color: rgba(0, 0, 0, 0) !important
            }

            .offcanvas-xxl .offcanvas-header {
                display: none
            }

            .offcanvas-xxl .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
                background-color: rgba(0, 0, 0, 0) !important
            }
        }

        .offcanvas {
            position: fixed;
            bottom: 0;
            z-index: 1045;
            display: flex;
            flex-direction: column;
            max-width: 100%;
            color: var(--ar-offcanvas-color);
            visibility: hidden;
            background-color: var(--ar-offcanvas-bg);
            background-clip: padding-box;
            outline: 0;
            transition: transform .3s ease-in-out
        }

        @media (prefers-reduced-motion: reduce) {
            .offcanvas {
                transition: none
            }
        }

        .offcanvas.offcanvas-start {
            top: 0;
            left: 0;
            width: var(--ar-offcanvas-width);
            border-right: var(--ar-offcanvas-border-width) solid var(--ar-offcanvas-border-color);
            transform: translateX(-100%)
        }

        .offcanvas.offcanvas-end {
            top: 0;
            right: 0;
            width: var(--ar-offcanvas-width);
            border-left: var(--ar-offcanvas-border-width) solid var(--ar-offcanvas-border-color);
            transform: translateX(100%)
        }

        .offcanvas.offcanvas-top {
            top: 0;
            right: 0;
            left: 0;
            height: var(--ar-offcanvas-height);
            max-height: 100%;
            border-bottom: var(--ar-offcanvas-border-width) solid var(--ar-offcanvas-border-color);
            transform: translateY(-100%)
        }

        .offcanvas.offcanvas-bottom {
            right: 0;
            left: 0;
            height: var(--ar-offcanvas-height);
            max-height: 100%;
            border-top: var(--ar-offcanvas-border-width) solid var(--ar-offcanvas-border-color);
            transform: translateY(100%)
        }

        .offcanvas.showing, .offcanvas.show:not(.hiding) {
            transform: none
        }

        .offcanvas.showing, .offcanvas.hiding, .offcanvas.show {
            visibility: visible
        }

        .offcanvas-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1040;
            width: 100vw;
            height: 100vh;
            background-color: #000
        }

        .offcanvas-backdrop.fade {
            opacity: 0
        }

        .offcanvas-backdrop.show {
            opacity: .65
        }

        .offcanvas-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: var(--ar-offcanvas-padding-y) var(--ar-offcanvas-padding-x)
        }

        .offcanvas-header .btn-close {
            padding: calc(var(--ar-offcanvas-padding-y) * .5) calc(var(--ar-offcanvas-padding-x) * .5);
            margin-top: calc(var(--ar-offcanvas-padding-y) * -0.5);
            margin-right: calc(var(--ar-offcanvas-padding-x) * -0.5);
            margin-bottom: calc(var(--ar-offcanvas-padding-y) * -0.5)
        }

        .offcanvas-title {
            margin-bottom: 0;
            line-height: 1.5
        }

        .offcanvas-body {
            flex-grow: 1;
            padding: var(--ar-offcanvas-padding-y) var(--ar-offcanvas-padding-x);
            overflow-y: auto
        }

        .placeholder {
            display: inline-block;
            min-height: 1em;
            vertical-align: middle;
            cursor: wait;
            background-color: currentcolor;
            opacity: .3
        }

        .placeholder.btn::before {
            display: inline-block;
            content: ""
        }

        .placeholder-xs {
            min-height: .6em
        }

        .placeholder-sm {
            min-height: .8em
        }

        .placeholder-lg {
            min-height: 1.2em
        }

        .placeholder-glow .placeholder {
            -webkit-animation: placeholder-glow 2s ease-in-out infinite;
            animation: placeholder-glow 2s ease-in-out infinite
        }

        @-webkit-keyframes placeholder-glow {
            50% {
                opacity: .12
            }
        }

        @keyframes placeholder-glow {
            50% {
                opacity: .12
            }
        }

        .placeholder-wave {
            -webkit-mask-image: linear-gradient(130deg, #000 55%, rgba(0, 0, 0, 0.88) 75%, #000 95%);
            mask-image: linear-gradient(130deg, #000 55%, rgba(0, 0, 0, 0.88) 75%, #000 95%);
            -webkit-mask-size: 200% 100%;
            mask-size: 200% 100%;
            -webkit-animation: placeholder-wave 2s linear infinite;
            animation: placeholder-wave 2s linear infinite
        }

        @-webkit-keyframes placeholder-wave {
            100% {
                -webkit-mask-position: -200% 0%;
                mask-position: -200% 0%
            }
        }

        @keyframes placeholder-wave {
            100% {
                -webkit-mask-position: -200% 0%;
                mask-position: -200% 0%
            }
        }

        .clearfix::after {
            display: block;
            clear: both;
            content: ""
        }

        .text-bg-primary {
            color: #000 !important;
            background-color: RGBA(68, 140, 116, var(--ar-bg-opacity, 1)) !important
        }

        .text-bg-secondary {
            color: #000 !important;
            background-color: RGBA(237, 241, 245, var(--ar-bg-opacity, 1)) !important
        }

        .text-bg-success {
            color: #000 !important;
            background-color: RGBA(63, 202, 144, var(--ar-bg-opacity, 1)) !important
        }

        .text-bg-info {
            color: #000 !important;
            background-color: RGBA(63, 127, 202, var(--ar-bg-opacity, 1)) !important
        }

        .text-bg-warning {
            color: #000 !important;
            background-color: RGBA(237, 203, 80, var(--ar-bg-opacity, 1)) !important
        }

        .text-bg-danger {
            color: #000 !important;
            background-color: RGBA(237, 80, 80, var(--ar-bg-opacity, 1)) !important
        }

        .text-bg-light {
            color: #000 !important;
            background-color: RGBA(255, 255, 255, var(--ar-bg-opacity, 1)) !important
        }

        .text-bg-dark {
            color: #fff !important;
            background-color: RGBA(18, 21, 25, var(--ar-bg-opacity, 1)) !important
        }

        .link-primary {
            color: #448c74 !important
        }

        .link-primary:hover, .link-primary:focus {
            color: #69a390 !important
        }

        .link-secondary {
            color: #edf1f5 !important
        }

        .link-secondary:hover, .link-secondary:focus {
            color: #f1f4f7 !important
        }

        .link-success {
            color: #3fca90 !important
        }

        .link-success:hover, .link-success:focus {
            color: #65d5a6 !important
        }

        .link-info {
            color: #3f7fca !important
        }

        .link-info:hover, .link-info:focus {
            color: #6599d5 !important
        }

        .link-warning {
            color: #edcb50 !important
        }

        .link-warning:hover, .link-warning:focus {
            color: #f1d573 !important
        }

        .link-danger {
            color: #ed5050 !important
        }

        .link-danger:hover, .link-danger:focus {
            color: #f17373 !important
        }

        .link-light {
            color: #fff !important
        }

        .link-light:hover, .link-light:focus {
            color: #fff !important
        }

        .link-dark {
            color: #121519 !important
        }

        .link-dark:hover, .link-dark:focus {
            color: #0e1114 !important
        }

        .ratio {
            position: relative;
            width: 100%
        }

        .ratio::before {
            display: block;
            padding-top: var(--ar-aspect-ratio);
            content: ""
        }

        .ratio > * {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        .ratio-1x1 {
            --ar-aspect-ratio: 100%
        }

        .ratio-4x3 {
            --ar-aspect-ratio: 75%
        }

        .ratio-16x9 {
            --ar-aspect-ratio: 56.25%
        }

        .ratio-21x9 {
            --ar-aspect-ratio: 42.8571428571%
        }

        .fixed-top {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1030
        }

        .fixed-bottom {
            position: fixed;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1030
        }

        .sticky-top {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1020
        }

        .sticky-bottom {
            position: -webkit-sticky;
            position: sticky;
            bottom: 0;
            z-index: 1020
        }

        @media (min-width: 576px) {
            .sticky-sm-top {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 1020
            }

            .sticky-sm-bottom {
                position: -webkit-sticky;
                position: sticky;
                bottom: 0;
                z-index: 1020
            }
        }

        @media (min-width: 768px) {
            .sticky-md-top {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 1020
            }

            .sticky-md-bottom {
                position: -webkit-sticky;
                position: sticky;
                bottom: 0;
                z-index: 1020
            }
        }

        @media (min-width: 992px) {
            .sticky-lg-top {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 1020
            }

            .sticky-lg-bottom {
                position: -webkit-sticky;
                position: sticky;
                bottom: 0;
                z-index: 1020
            }
        }

        @media (min-width: 1200px) {
            .sticky-xl-top {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 1020
            }

            .sticky-xl-bottom {
                position: -webkit-sticky;
                position: sticky;
                bottom: 0;
                z-index: 1020
            }
        }

        @media (min-width: 1400px) {
            .sticky-xxl-top {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 1020
            }

            .sticky-xxl-bottom {
                position: -webkit-sticky;
                position: sticky;
                bottom: 0;
                z-index: 1020
            }
        }

        .hstack {
            display: flex;
            flex-direction: row;
            align-items: center;
            align-self: stretch
        }

        .vstack {
            display: flex;
            flex: 1 1 auto;
            flex-direction: column;
            align-self: stretch
        }

        .visually-hidden, .visually-hidden-focusable:not(:focus):not(:focus-within) {
            position: absolute !important;
            width: 1px !important;
            height: 1px !important;
            padding: 0 !important;
            margin: -1px !important;
            overflow: hidden !important;
            clip: rect(0, 0, 0, 0) !important;
            white-space: nowrap !important;
            border: 0 !important
        }

        .stretched-link::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1;
            content: ""
        }

        .text-truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .vr {
            display: inline-block;
            align-self: stretch;
            width: 1px;
            min-height: 1em;
            background-color: currentcolor;
            opacity: 1
        }

        .align-baseline {
            vertical-align: baseline !important
        }

        .align-top {
            vertical-align: top !important
        }

        .align-middle {
            vertical-align: middle !important
        }

        .align-bottom {
            vertical-align: bottom !important
        }

        .align-text-bottom {
            vertical-align: text-bottom !important
        }

        .align-text-top {
            vertical-align: text-top !important
        }

        .float-start {
            float: left !important
        }

        .float-end {
            float: right !important
        }

        .float-none {
            float: none !important
        }

        .opacity-0 {
            opacity: 0 !important
        }

        .opacity-10 {
            opacity: .1 !important
        }

        .opacity-20 {
            opacity: .2 !important
        }

        .opacity-25 {
            opacity: .25 !important
        }

        .opacity-30 {
            opacity: .3 !important
        }

        .opacity-40 {
            opacity: .4 !important
        }

        .opacity-50 {
            opacity: .5 !important
        }

        .opacity-60 {
            opacity: .6 !important
        }

        .opacity-70 {
            opacity: .7 !important
        }

        .opacity-75 {
            opacity: .75 !important
        }

        .opacity-80 {
            opacity: .8 !important
        }

        .opacity-90 {
            opacity: .9 !important
        }

        .opacity-100 {
            opacity: 1 !important
        }

        .overflow-auto {
            overflow: auto !important
        }

        .overflow-hidden {
            overflow: hidden !important
        }

        .overflow-visible {
            overflow: visible !important
        }

        .overflow-scroll {
            overflow: scroll !important
        }

        .d-inline {
            display: inline !important
        }

        .d-inline-block {
            display: inline-block !important
        }

        .d-block {
            display: block !important
        }

        .d-grid {
            display: grid !important
        }

        .d-table {
            display: table !important
        }

        .d-table-row {
            display: table-row !important
        }

        .d-table-cell {
            display: table-cell !important
        }

        .d-flex {
            display: flex !important
        }

        .d-inline-flex {
            display: inline-flex !important
        }

        .d-none {
            display: none !important
        }

        .shadow {
            box-shadow: 0 .4375rem 1.25rem rgba(208, 208, 196, .32) !important
        }

        .shadow-sm {
            box-shadow: 0 .375rem .75rem -0.125rem rgba(208, 208, 196, .24) !important
        }

        .shadow-lg {
            box-shadow: 0 .5rem 1.75rem -0.125rem rgba(208, 208, 196, .48) !important
        }

        .shadow-none {
            box-shadow: none !important
        }

        .position-static {
            position: static !important
        }

        .position-relative {
            position: relative !important
        }

        .position-absolute {
            position: absolute !important
        }

        .position-fixed {
            position: fixed !important
        }

        .position-sticky {
            position: -webkit-sticky !important;
            position: sticky !important
        }

        .top-0 {
            top: 0 !important
        }

        .top-50 {
            top: 50% !important
        }

        .top-100 {
            top: 100% !important
        }

        .bottom-0 {
            bottom: 0 !important
        }

        .bottom-50 {
            bottom: 50% !important
        }

        .bottom-100 {
            bottom: 100% !important
        }

        .start-0 {
            left: 0 !important
        }

        .start-50 {
            left: 50% !important
        }

        .start-100 {
            left: 100% !important
        }

        .end-0 {
            right: 0 !important
        }

        .end-50 {
            right: 50% !important
        }

        .end-100 {
            right: 100% !important
        }

        .translate-middle {
            transform: translate(-50%, -50%) !important
        }

        .translate-middle-x {
            transform: translateX(-50%) !important
        }

        .translate-middle-y {
            transform: translateY(-50%) !important
        }

        .border {
            border: var(--ar-border-width) var(--ar-border-style) var(--ar-border-color) !important
        }

        .border-dashed {
            border: var(--ar-border-width) dashed #d6dfe8 !important
        }

        .border-0 {
            border: 0 !important
        }

        .border-top {
            border-top: var(--ar-border-width) var(--ar-border-style) var(--ar-border-color) !important
        }

        .border-top-0 {
            border-top: 0 !important
        }

        .border-end {
            border-right: var(--ar-border-width) var(--ar-border-style) var(--ar-border-color) !important
        }

        .border-end-0 {
            border-right: 0 !important
        }

        .border-bottom {
            border-bottom: var(--ar-border-width) var(--ar-border-style) var(--ar-border-color) !important
        }

        .border-bottom-0 {
            border-bottom: 0 !important
        }

        .border-start {
            border-left: var(--ar-border-width) var(--ar-border-style) var(--ar-border-color) !important
        }

        .border-start-0 {
            border-left: 0 !important
        }

        .border-primary {
            --ar-border-opacity: 1;
            border-color: rgba(var(--ar-primary-rgb), var(--ar-border-opacity)) !important
        }

        .border-secondary {
            --ar-border-opacity: 1;
            border-color: rgba(var(--ar-secondary-rgb), var(--ar-border-opacity)) !important
        }

        .border-success {
            --ar-border-opacity: 1;
            border-color: rgba(var(--ar-success-rgb), var(--ar-border-opacity)) !important
        }

        .border-info {
            --ar-border-opacity: 1;
            border-color: rgba(var(--ar-info-rgb), var(--ar-border-opacity)) !important
        }

        .border-warning {
            --ar-border-opacity: 1;
            border-color: rgba(var(--ar-warning-rgb), var(--ar-border-opacity)) !important
        }

        .border-danger {
            --ar-border-opacity: 1;
            border-color: rgba(var(--ar-danger-rgb), var(--ar-border-opacity)) !important
        }

        .border-light {
            --ar-border-opacity: 1;
            border-color: rgba(255, 255, 255, .13) !important
        }

        .border-dark {
            --ar-border-opacity: 1;
            border-color: rgba(var(--ar-dark-rgb), var(--ar-border-opacity)) !important
        }

        .border-white {
            --ar-border-opacity: 1;
            border-color: rgba(var(--ar-white-rgb), var(--ar-border-opacity)) !important
        }

        .border-input {
            --ar-border-opacity: 1;
            border-color: var(--ar-gray-400) !important
        }

        .border-1 {
            --ar-border-width: 1px
        }

        .border-2 {
            --ar-border-width: 2px
        }

        .border-3 {
            --ar-border-width: 3px
        }

        .border-4 {
            --ar-border-width: 4px
        }

        .border-5 {
            --ar-border-width: 5px
        }

        .border-opacity-10 {
            --ar-border-opacity: 0.1
        }

        .border-opacity-25 {
            --ar-border-opacity: 0.25
        }

        .border-opacity-50 {
            --ar-border-opacity: 0.5
        }

        .border-opacity-75 {
            --ar-border-opacity: 0.75
        }

        .border-opacity-100 {
            --ar-border-opacity: 1
        }

        .w-25 {
            width: 25% !important
        }

        .w-50 {
            width: 50% !important
        }

        .w-75 {
            width: 75% !important
        }

        .w-100 {
            width: 100% !important
        }

        .w-auto {
            width: auto !important
        }

        .mw-100 {
            max-width: 100% !important
        }

        .vw-100 {
            width: 100vw !important
        }

        .min-vw-100 {
            min-width: 100vw !important
        }

        .h-25 {
            height: 25% !important
        }

        .h-50 {
            height: 50% !important
        }

        .h-75 {
            height: 75% !important
        }

        .h-100 {
            height: 100% !important
        }

        .h-auto {
            height: auto !important
        }

        .mh-100 {
            max-height: 100% !important
        }

        .vh-100 {
            height: 100vh !important
        }

        .min-vh-100 {
            min-height: 100vh !important
        }

        .flex-fill {
            flex: 1 1 auto !important
        }

        .flex-row {
            flex-direction: row !important
        }

        .flex-column {
            flex-direction: column !important
        }

        .flex-row-reverse {
            flex-direction: row-reverse !important
        }

        .flex-column-reverse {
            flex-direction: column-reverse !important
        }

        .flex-grow-0 {
            flex-grow: 0 !important
        }

        .flex-grow-1 {
            flex-grow: 1 !important
        }

        .flex-shrink-0 {
            flex-shrink: 0 !important
        }

        .flex-shrink-1 {
            flex-shrink: 1 !important
        }

        .flex-wrap {
            flex-wrap: wrap !important
        }

        .flex-nowrap {
            flex-wrap: nowrap !important
        }

        .flex-wrap-reverse {
            flex-wrap: wrap-reverse !important
        }

        .justify-content-start {
            justify-content: flex-start !important
        }

        .justify-content-end {
            justify-content: flex-end !important
        }

        .justify-content-center {
            justify-content: center !important
        }

        .justify-content-between {
            justify-content: space-between !important
        }

        .justify-content-around {
            justify-content: space-around !important
        }

        .justify-content-evenly {
            justify-content: space-evenly !important
        }

        .align-items-start {
            align-items: flex-start !important
        }

        .align-items-end {
            align-items: flex-end !important
        }

        .align-items-center {
            align-items: center !important
        }

        .align-items-baseline {
            align-items: baseline !important
        }

        .align-items-stretch {
            align-items: stretch !important
        }

        .align-content-start {
            align-content: flex-start !important
        }

        .align-content-end {
            align-content: flex-end !important
        }

        .align-content-center {
            align-content: center !important
        }

        .align-content-between {
            align-content: space-between !important
        }

        .align-content-around {
            align-content: space-around !important
        }

        .align-content-stretch {
            align-content: stretch !important
        }

        .align-self-auto {
            align-self: auto !important
        }

        .align-self-start {
            align-self: flex-start !important
        }

        .align-self-end {
            align-self: flex-end !important
        }

        .align-self-center {
            align-self: center !important
        }

        .align-self-baseline {
            align-self: baseline !important
        }

        .align-self-stretch {
            align-self: stretch !important
        }

        .order-first {
            order: -1 !important
        }

        .order-0 {
            order: 0 !important
        }

        .order-1 {
            order: 1 !important
        }

        .order-2 {
            order: 2 !important
        }

        .order-3 {
            order: 3 !important
        }

        .order-4 {
            order: 4 !important
        }

        .order-5 {
            order: 5 !important
        }

        .order-last {
            order: 6 !important
        }

        .m-0 {
            margin: 0 !important
        }

        .m-1 {
            margin: .25rem !important
        }

        .m-2 {
            margin: .5rem !important
        }

        .m-3 {
            margin: 1rem !important
        }

        .m-4 {
            margin: 1.5rem !important
        }

        .m-5 {
            margin: 3rem !important
        }

        .m-auto {
            margin: auto !important
        }

        .mx-0 {
            margin-right: 0 !important;
            margin-left: 0 !important
        }

        .mx-1 {
            margin-right: .25rem !important;
            margin-left: .25rem !important
        }

        .mx-2 {
            margin-right: .5rem !important;
            margin-left: .5rem !important
        }

        .mx-3 {
            margin-right: 1rem !important;
            margin-left: 1rem !important
        }

        .mx-4 {
            margin-right: 1.5rem !important;
            margin-left: 1.5rem !important
        }

        .mx-5 {
            margin-right: 3rem !important;
            margin-left: 3rem !important
        }

        .mx-auto {
            margin-right: auto !important;
            margin-left: auto !important
        }

        .my-0 {
            margin-top: 0 !important;
            margin-bottom: 0 !important
        }

        .my-1 {
            margin-top: .25rem !important;
            margin-bottom: .25rem !important
        }

        .my-2 {
            margin-top: .5rem !important;
            margin-bottom: .5rem !important
        }

        .my-3 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important
        }

        .my-4 {
            margin-top: 1.5rem !important;
            margin-bottom: 1.5rem !important
        }

        .my-5 {
            margin-top: 3rem !important;
            margin-bottom: 3rem !important
        }

        .my-auto {
            margin-top: auto !important;
            margin-bottom: auto !important
        }

        .mt-0 {
            margin-top: 0 !important
        }

        .mt-1 {
            margin-top: .25rem !important
        }

        .mt-2 {
            margin-top: .5rem !important
        }

        .mt-3 {
            margin-top: 1rem !important
        }

        .mt-4 {
            margin-top: 1.5rem !important
        }

        .mt-5 {
            margin-top: 3rem !important
        }

        .mt-auto {
            margin-top: auto !important
        }

        .me-0 {
            margin-right: 0 !important
        }

        .me-1 {
            margin-right: .25rem !important
        }

        .me-2 {
            margin-right: .5rem !important
        }

        .me-3 {
            margin-right: 1rem !important
        }

        .me-4 {
            margin-right: 1.5rem !important
        }

        .me-5 {
            margin-right: 3rem !important
        }

        .me-auto {
            margin-right: auto !important
        }

        .mb-0 {
            margin-bottom: 0 !important
        }

        .mb-1 {
            margin-bottom: .25rem !important
        }

        .mb-2 {
            margin-bottom: .5rem !important
        }

        .mb-3 {
            margin-bottom: 1rem !important
        }

        .mb-4 {
            margin-bottom: 1.5rem !important
        }

        .mb-5 {
            margin-bottom: 3rem !important
        }

        .mb-auto {
            margin-bottom: auto !important
        }

        .ms-0 {
            margin-left: 0 !important
        }

        .ms-1 {
            margin-left: .25rem !important
        }

        .ms-2 {
            margin-left: .5rem !important
        }

        .ms-3 {
            margin-left: 1rem !important
        }

        .ms-4 {
            margin-left: 1.5rem !important
        }

        .ms-5 {
            margin-left: 3rem !important
        }

        .ms-auto {
            margin-left: auto !important
        }

        .m-n1 {
            margin: -0.25rem !important
        }

        .m-n2 {
            margin: -0.5rem !important
        }

        .m-n3 {
            margin: -1rem !important
        }

        .m-n4 {
            margin: -1.5rem !important
        }

        .m-n5 {
            margin: -3rem !important
        }

        .mx-n1 {
            margin-right: -0.25rem !important;
            margin-left: -0.25rem !important
        }

        .mx-n2 {
            margin-right: -0.5rem !important;
            margin-left: -0.5rem !important
        }

        .mx-n3 {
            margin-right: -1rem !important;
            margin-left: -1rem !important
        }

        .mx-n4 {
            margin-right: -1.5rem !important;
            margin-left: -1.5rem !important
        }

        .mx-n5 {
            margin-right: -3rem !important;
            margin-left: -3rem !important
        }

        .my-n1 {
            margin-top: -0.25rem !important;
            margin-bottom: -0.25rem !important
        }

        .my-n2 {
            margin-top: -0.5rem !important;
            margin-bottom: -0.5rem !important
        }

        .my-n3 {
            margin-top: -1rem !important;
            margin-bottom: -1rem !important
        }

        .my-n4 {
            margin-top: -1.5rem !important;
            margin-bottom: -1.5rem !important
        }

        .my-n5 {
            margin-top: -3rem !important;
            margin-bottom: -3rem !important
        }

        .mt-n1 {
            margin-top: -0.25rem !important
        }

        .mt-n2 {
            margin-top: -0.5rem !important
        }

        .mt-n3 {
            margin-top: -1rem !important
        }

        .mt-n4 {
            margin-top: -1.5rem !important
        }

        .mt-n5 {
            margin-top: -3rem !important
        }

        .me-n1 {
            margin-right: -0.25rem !important
        }

        .me-n2 {
            margin-right: -0.5rem !important
        }

        .me-n3 {
            margin-right: -1rem !important
        }

        .me-n4 {
            margin-right: -1.5rem !important
        }

        .me-n5 {
            margin-right: -3rem !important
        }

        .mb-n1 {
            margin-bottom: -0.25rem !important
        }

        .mb-n2 {
            margin-bottom: -0.5rem !important
        }

        .mb-n3 {
            margin-bottom: -1rem !important
        }

        .mb-n4 {
            margin-bottom: -1.5rem !important
        }

        .mb-n5 {
            margin-bottom: -3rem !important
        }

        .ms-n1 {
            margin-left: -0.25rem !important
        }

        .ms-n2 {
            margin-left: -0.5rem !important
        }

        .ms-n3 {
            margin-left: -1rem !important
        }

        .ms-n4 {
            margin-left: -1.5rem !important
        }

        .ms-n5 {
            margin-left: -3rem !important
        }

        .p-0 {
            padding: 0 !important
        }

        .p-1 {
            padding: .25rem !important
        }

        .p-2 {
            padding: .5rem !important
        }

        .p-3 {
            padding: 1rem !important
        }

        .p-4 {
            padding: 1.5rem !important
        }

        .p-5 {
            padding: 3rem !important
        }

        .px-0 {
            padding-right: 0 !important;
            padding-left: 0 !important
        }

        .px-1 {
            padding-right: .25rem !important;
            padding-left: .25rem !important
        }

        .px-2 {
            padding-right: .5rem !important;
            padding-left: .5rem !important
        }

        .px-3 {
            padding-right: 1rem !important;
            padding-left: 1rem !important
        }

        .px-4 {
            padding-right: 1.5rem !important;
            padding-left: 1.5rem !important
        }

        .px-5 {
            padding-right: 3rem !important;
            padding-left: 3rem !important
        }

        .py-0 {
            padding-top: 0 !important;
            padding-bottom: 0 !important
        }

        .py-1 {
            padding-top: .25rem !important;
            padding-bottom: .25rem !important
        }

        .py-2 {
            padding-top: .5rem !important;
            padding-bottom: .5rem !important
        }

        .py-3 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important
        }

        .py-4 {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important
        }

        .py-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important
        }

        .pt-0 {
            padding-top: 0 !important
        }

        .pt-1 {
            padding-top: .25rem !important
        }

        .pt-2 {
            padding-top: .5rem !important
        }

        .pt-3 {
            padding-top: 1rem !important
        }

        .pt-4 {
            padding-top: 1.5rem !important
        }

        .pt-5 {
            padding-top: 3rem !important
        }

        .pe-0 {
            padding-right: 0 !important
        }

        .pe-1 {
            padding-right: .25rem !important
        }

        .pe-2 {
            padding-right: .5rem !important
        }

        .pe-3 {
            padding-right: 1rem !important
        }

        .pe-4 {
            padding-right: 1.5rem !important
        }

        .pe-5 {
            padding-right: 3rem !important
        }

        .pb-0 {
            padding-bottom: 0 !important
        }

        .pb-1 {
            padding-bottom: .25rem !important
        }

        .pb-2 {
            padding-bottom: .5rem !important
        }

        .pb-3 {
            padding-bottom: 1rem !important
        }

        .pb-4 {
            padding-bottom: 1.5rem !important
        }

        .pb-5 {
            padding-bottom: 3rem !important
        }

        .ps-0 {
            padding-left: 0 !important
        }

        .ps-1 {
            padding-left: .25rem !important
        }

        .ps-2 {
            padding-left: .5rem !important
        }

        .ps-3 {
            padding-left: 1rem !important
        }

        .ps-4 {
            padding-left: 1.5rem !important
        }

        .ps-5 {
            padding-left: 3rem !important
        }

        .gap-0 {
            gap: 0 !important
        }

        .gap-1 {
            gap: .25rem !important
        }

        .gap-2 {
            gap: .5rem !important
        }

        .gap-3 {
            gap: 1rem !important
        }

        .gap-4 {
            gap: 1.5rem !important
        }

        .gap-5 {
            gap: 3rem !important
        }

        .font-monospace {
            font-family: var(--ar-font-monospace) !important
        }

        .fs-1 {
            font-size: calc(1.375rem + 1.5vw) !important
        }

        .fs-2 {
            font-size: calc(1.325rem + 0.9vw) !important
        }

        .fs-3 {
            font-size: calc(1.3rem + 0.6vw) !important
        }

        .fs-4 {
            font-size: calc(1.275rem + 0.3vw) !important
        }

        .fs-5 {
            font-size: 1.25rem !important
        }

        .fs-6 {
            font-size: 1rem !important
        }

        .fs-xl {
            font-size: calc(var(--ar-body-font-size) * 1.25) !important
        }

        .fs-lg {
            font-size: calc(var(--ar-body-font-size) * 1.125) !important
        }

        .fs-base {
            font-size: 1rem !important
        }

        .fs-sm {
            font-size: calc(var(--ar-body-font-size) * 0.875) !important
        }

        .fs-xs {
            font-size: calc(var(--ar-body-font-size) * 0.75) !important
        }

        .fst-italic {
            font-style: italic !important
        }

        .fst-normal {
            font-style: normal !important
        }

        .fw-light {
            font-weight: 300 !important
        }

        .fw-lighter {
            font-weight: lighter !important
        }

        .fw-normal {
            font-weight: 400 !important
        }

        .fw-bold {
            font-weight: 700 !important
        }

        .fw-semibold {
            font-weight: 600 !important
        }

        .fw-bolder {
            font-weight: bolder !important
        }

        .fw-500 {
            font-weight: 500 !important
        }

        .fw-medium {
            font-weight: 500 !important
        }

        .lh-1 {
            line-height: 1 !important
        }

        .lh-sm {
            line-height: 1.4 !important
        }

        .lh-base {
            line-height: 1.5 !important
        }

        .lh-lg {
            line-height: 1.6 !important
        }

        .text-start {
            text-align: left !important
        }

        .text-end {
            text-align: right !important
        }

        .text-center {
            text-align: center !important
        }

        .text-decoration-none {
            text-decoration: none !important
        }

        .text-decoration-underline {
            text-decoration: underline !important
        }

        .text-decoration-line-through {
            text-decoration: line-through !important
        }

        .text-lowercase {
            text-transform: lowercase !important
        }

        .text-uppercase {
            text-transform: uppercase !important
        }

        .text-capitalize {
            text-transform: capitalize !important
        }

        .text-wrap {
            white-space: normal !important
        }

        .text-nowrap {
            white-space: nowrap !important
        }

        .text-break {
            word-wrap: break-word !important;
            word-break: break-word !important
        }

        .text-primary {
            --ar-text-opacity: 1;
            color: rgba(var(--ar-primary-rgb), var(--ar-text-opacity)) !important
        }

        .text-secondary {
            --ar-text-opacity: 1;
            color: rgba(var(--ar-secondary-rgb), var(--ar-text-opacity)) !important
        }

        .text-success {
            --ar-text-opacity: 1;
            color: rgba(var(--ar-success-rgb), var(--ar-text-opacity)) !important
        }

        .text-info {
            --ar-text-opacity: 1;
            color: rgba(var(--ar-info-rgb), var(--ar-text-opacity)) !important
        }

        .text-warning {
            --ar-text-opacity: 1;
            color: rgba(var(--ar-warning-rgb), var(--ar-text-opacity)) !important
        }

        .text-danger {
            --ar-text-opacity: 1;
            color: rgba(var(--ar-danger-rgb), var(--ar-text-opacity)) !important
        }

        .text-light {
            --ar-text-opacity: 1;
            color: rgba(var(--ar-light-rgb), var(--ar-text-opacity)) !important
        }

        .text-dark {
            --ar-text-opacity: 1;
            color: rgba(var(--ar-dark-rgb), var(--ar-text-opacity)) !important
        }

        .text-black {
            --ar-text-opacity: 1;
            color: rgba(var(--ar-black-rgb), var(--ar-text-opacity)) !important
        }

        .text-white {
            --ar-text-opacity: 1;
            color: #fff !important
        }

        .text-body {
            --ar-text-opacity: 1;
            color: var(--ar-body-color) !important
        }

        .text-muted {
            --ar-text-opacity: 1;
            color: var(--ar-gray-600) !important
        }

        .text-nav {
            --ar-text-opacity: 1;
            color: var(--ar-nav-link-color) !important
        }

        .text-border {
            --ar-text-opacity: 1;
            color: var(--ar-border-color) !important
        }

        .text-reset {
            --ar-text-opacity: 1;
            color: inherit !important
        }

        .text-opacity-25 {
            --ar-text-opacity: 0.25
        }

        .text-opacity-50 {
            --ar-text-opacity: 0.5
        }

        .text-opacity-75 {
            --ar-text-opacity: 0.75
        }

        .text-opacity-100 {
            --ar-text-opacity: 1
        }

        .bg-primary {
            --ar-bg-opacity: 1;
            background-color: rgba(var(--ar-primary-rgb), var(--ar-bg-opacity)) !important
        }

        .bg-secondary {
            --ar-bg-opacity: 1;
            background-color: var(--ar-gray-100) !important
        }

        .bg-success {
            --ar-bg-opacity: 1;
            background-color: rgba(var(--ar-success-rgb), var(--ar-bg-opacity)) !important
        }

        .bg-info {
            --ar-bg-opacity: 1;
            background-color: rgba(var(--ar-info-rgb), var(--ar-bg-opacity)) !important
        }

        .bg-warning {
            --ar-bg-opacity: 1;
            background-color: rgba(var(--ar-warning-rgb), var(--ar-bg-opacity)) !important
        }

        .bg-danger {
            --ar-bg-opacity: 1;
            background-color: rgba(var(--ar-danger-rgb), var(--ar-bg-opacity)) !important
        }

        .bg-light {
            --ar-bg-opacity: 1;
            background-color: rgba(var(--ar-light-rgb), var(--ar-bg-opacity)) !important
        }

        .bg-dark {
            --ar-bg-opacity: 1;
            background-color: rgba(var(--ar-dark-rgb), var(--ar-bg-opacity)) !important
        }

        .bg-black {
            --ar-bg-opacity: 1;
            background-color: rgba(var(--ar-black-rgb), var(--ar-bg-opacity)) !important
        }

        .bg-white {
            --ar-bg-opacity: 1;
            background-color: rgba(var(--ar-white-rgb), var(--ar-bg-opacity)) !important
        }

        .bg-body {
            --ar-bg-opacity: 1;
            background-color: rgba(var(--ar-body-bg-rgb), var(--ar-bg-opacity)) !important
        }

        .bg-transparent {
            --ar-bg-opacity: 1;
            background-color: rgba(0, 0, 0, 0) !important
        }

        .bg-gray {
            --ar-bg-opacity: 1;
            background-color: var(--ar-gray-200) !important
        }

        .bg-opacity-10 {
            --ar-bg-opacity: 0.1
        }

        .bg-opacity-25 {
            --ar-bg-opacity: 0.25
        }

        .bg-opacity-50 {
            --ar-bg-opacity: 0.5
        }

        .bg-opacity-75 {
            --ar-bg-opacity: 0.75
        }

        .bg-opacity-100 {
            --ar-bg-opacity: 1
        }

        .bg-gradient {
            background-image: var(--ar-gradient) !important
        }

        .user-select-all {
            -webkit-user-select: all !important;
            -moz-user-select: all !important;
            user-select: all !important
        }

        .user-select-auto {
            -webkit-user-select: auto !important;
            -moz-user-select: auto !important;
            user-select: auto !important
        }

        .user-select-none {
            -webkit-user-select: none !important;
            -moz-user-select: none !important;
            user-select: none !important
        }

        .pe-none {
            pointer-events: none !important
        }

        .pe-auto {
            pointer-events: auto !important
        }

        .rounded {
            border-radius: var(--ar-border-radius) !important
        }

        .rounded-0 {
            border-radius: 0 !important
        }

        .rounded-1 {
            border-radius: var(--ar-border-radius-sm) !important
        }

        .rounded-2 {
            border-radius: var(--ar-border-radius) !important
        }

        .rounded-3 {
            border-radius: var(--ar-border-radius-lg) !important
        }

        .rounded-4 {
            border-radius: var(--ar-border-radius-xl) !important
        }

        .rounded-5 {
            border-radius: var(--ar-border-radius-2xl) !important
        }

        .rounded-circle {
            border-radius: 50% !important
        }

        .rounded-pill {
            border-radius: var(--ar-border-radius-pill) !important
        }

        .rounded-top {
            border-top-left-radius: var(--ar-border-radius) !important;
            border-top-right-radius: var(--ar-border-radius) !important
        }

        .rounded-top-0 {
            border-top-left-radius: 0 !important;
            border-top-right-radius: 0 !important
        }

        .rounded-end {
            border-top-right-radius: var(--ar-border-radius) !important;
            border-bottom-right-radius: var(--ar-border-radius) !important
        }

        .rounded-end-0 {
            border-top-right-radius: 0 !important;
            border-bottom-right-radius: 0 !important
        }

        .rounded-bottom {
            border-bottom-right-radius: var(--ar-border-radius) !important;
            border-bottom-left-radius: var(--ar-border-radius) !important
        }

        .rounded-bottom-0 {
            border-bottom-right-radius: 0 !important;
            border-bottom-left-radius: 0 !important
        }

        .rounded-start {
            border-bottom-left-radius: var(--ar-border-radius) !important;
            border-top-left-radius: var(--ar-border-radius) !important
        }

        .rounded-start-0 {
            border-bottom-left-radius: 0 !important;
            border-top-left-radius: 0 !important
        }

        .visible {
            visibility: visible !important
        }

        .invisible {
            visibility: hidden !important
        }

        .bg-faded-primary {
            --ar-bg-opacity: 0.1;
            background-color: rgba(var(--ar-primary-rgb), var(--ar-bg-opacity)) !important
        }

        .bg-faded-secondary {
            --ar-bg-opacity: 0.1;
            background-color: rgba(var(--ar-secondary-rgb), var(--ar-bg-opacity)) !important
        }

        .bg-faded-success {
            --ar-bg-opacity: 0.1;
            background-color: rgba(var(--ar-success-rgb), var(--ar-bg-opacity)) !important
        }

        .bg-faded-info {
            --ar-bg-opacity: 0.1;
            background-color: rgba(var(--ar-info-rgb), var(--ar-bg-opacity)) !important
        }

        .bg-faded-warning {
            --ar-bg-opacity: 0.1;
            background-color: rgba(var(--ar-warning-rgb), var(--ar-bg-opacity)) !important
        }

        .bg-faded-danger {
            --ar-bg-opacity: 0.1;
            background-color: rgba(var(--ar-danger-rgb), var(--ar-bg-opacity)) !important
        }

        .bg-faded-light {
            --ar-bg-opacity: 0.1;
            background-color: rgba(var(--ar-light-rgb), var(--ar-bg-opacity)) !important
        }

        .bg-faded-dark {
            --ar-bg-opacity: 0.1;
            background-color: rgba(var(--ar-dark-rgb), var(--ar-bg-opacity)) !important
        }

        .bg-size-cover {
            background-size: cover !important
        }

        .bg-size-contain {
            background-size: contain !important
        }

        .bg-position-center {
            background-position: center !important
        }

        .bg-position-center-y {
            background-position: left center !important
        }

        .bg-position-center-x {
            background-position: center top !important
        }

        .bg-position-top-end {
            background-position: top right !important
        }

        .bg-position-top-start {
            background-position: top left !important
        }

        .bg-position-top-center {
            background-position: top center !important
        }

        .bg-position-center-end {
            background-position: center right !important
        }

        .bg-position-center-start {
            background-position: center left !important
        }

        .bg-position-center-bottom {
            background-position: center bottom !important
        }

        .bg-position-bottom-end {
            background-position: bottom right !important
        }

        .bg-position-bottom-start {
            background-position: bottom left !important
        }

        .bg-position-bottom-center {
            background-position: bottom center !important
        }

        .bg-repeat-0 {
            background-repeat: no-repeat !important
        }

        .bg-repeat-x {
            background-repeat: repeat-x !important
        }

        .bg-repeat-y {
            background-repeat: repeat-y !important
        }

        .bg-attachment-fixed {
            background-attachment: fixed !important
        }

        .bg-image-none {
            background-image: none !important
        }

        .table-layout-fixed {
            table-layout: fixed !important
        }

        .zindex-1 {
            z-index: 1 !important
        }

        .zindex-2 {
            z-index: 2 !important
        }

        .zindex-3 {
            z-index: 3 !important
        }

        .zindex-4 {
            z-index: 4 !important
        }

        .zindex-5 {
            z-index: 5 !important
        }

        .zindex-10 {
            z-index: 10 !important
        }

        @media (min-width: 576px) {
            .float-sm-start {
                float: left !important
            }

            .float-sm-end {
                float: right !important
            }

            .float-sm-none {
                float: none !important
            }

            .d-sm-inline {
                display: inline !important
            }

            .d-sm-inline-block {
                display: inline-block !important
            }

            .d-sm-block {
                display: block !important
            }

            .d-sm-grid {
                display: grid !important
            }

            .d-sm-table {
                display: table !important
            }

            .d-sm-table-row {
                display: table-row !important
            }

            .d-sm-table-cell {
                display: table-cell !important
            }

            .d-sm-flex {
                display: flex !important
            }

            .d-sm-inline-flex {
                display: inline-flex !important
            }

            .d-sm-none {
                display: none !important
            }

            .position-sm-static {
                position: static !important
            }

            .position-sm-relative {
                position: relative !important
            }

            .position-sm-absolute {
                position: absolute !important
            }

            .position-sm-fixed {
                position: fixed !important
            }

            .position-sm-sticky {
                position: -webkit-sticky !important;
                position: sticky !important
            }

            .border-sm {
                border: var(--ar-border-width) var(--ar-border-style) var(--ar-border-color) !important
            }

            .border-sm-dashed {
                border: var(--ar-border-width) dashed #d6dfe8 !important
            }

            .border-sm-0 {
                border: 0 !important
            }

            .border-top-sm {
                border-top: var(--ar-border-width) var(--ar-border-style) var(--ar-border-color) !important
            }

            .border-top-sm-0 {
                border-top: 0 !important
            }

            .border-end-sm {
                border-right: var(--ar-border-width) var(--ar-border-style) var(--ar-border-color) !important
            }

            .border-end-sm-0 {
                border-right: 0 !important
            }

            .border-bottom-sm {
                border-bottom: var(--ar-border-width) var(--ar-border-style) var(--ar-border-color) !important
            }

            .border-bottom-sm-0 {
                border-bottom: 0 !important
            }

            .border-start-sm {
                border-left: var(--ar-border-width) var(--ar-border-style) var(--ar-border-color) !important
            }

            .border-start-sm-0 {
                border-left: 0 !important
            }

            .w-sm-25 {
                width: 25% !important
            }

            .w-sm-50 {
                width: 50% !important
            }

            .w-sm-75 {
                width: 75% !important
            }

            .w-sm-100 {
                width: 100% !important
            }

            .w-sm-auto {
                width: auto !important
            }

            .flex-sm-fill {
                flex: 1 1 auto !important
            }

            .flex-sm-row {
                flex-direction: row !important
            }

            .flex-sm-column {
                flex-direction: column !important
            }

            .flex-sm-row-reverse {
                flex-direction: row-reverse !important
            }

            .flex-sm-column-reverse {
                flex-direction: column-reverse !important
            }

            .flex-sm-grow-0 {
                flex-grow: 0 !important
            }

            .flex-sm-grow-1 {
                flex-grow: 1 !important
            }

            .flex-sm-shrink-0 {
                flex-shrink: 0 !important
            }

            .flex-sm-shrink-1 {
                flex-shrink: 1 !important
            }

            .flex-sm-wrap {
                flex-wrap: wrap !important
            }

            .flex-sm-nowrap {
                flex-wrap: nowrap !important
            }

            .flex-sm-wrap-reverse {
                flex-wrap: wrap-reverse !important
            }

            .justify-content-sm-start {
                justify-content: flex-start !important
            }

            .justify-content-sm-end {
                justify-content: flex-end !important
            }

            .justify-content-sm-center {
                justify-content: center !important
            }

            .justify-content-sm-between {
                justify-content: space-between !important
            }

            .justify-content-sm-around {
                justify-content: space-around !important
            }

            .justify-content-sm-evenly {
                justify-content: space-evenly !important
            }

            .align-items-sm-start {
                align-items: flex-start !important
            }

            .align-items-sm-end {
                align-items: flex-end !important
            }

            .align-items-sm-center {
                align-items: center !important
            }

            .align-items-sm-baseline {
                align-items: baseline !important
            }

            .align-items-sm-stretch {
                align-items: stretch !important
            }

            .align-content-sm-start {
                align-content: flex-start !important
            }

            .align-content-sm-end {
                align-content: flex-end !important
            }

            .align-content-sm-center {
                align-content: center !important
            }

            .align-content-sm-between {
                align-content: space-between !important
            }

            .align-content-sm-around {
                align-content: space-around !important
            }

            .align-content-sm-stretch {
                align-content: stretch !important
            }

            .align-self-sm-auto {
                align-self: auto !important
            }

            .align-self-sm-start {
                align-self: flex-start !important
            }

            .align-self-sm-end {
                align-self: flex-end !important
            }

            .align-self-sm-center {
                align-self: center !important
            }

            .align-self-sm-baseline {
                align-self: baseline !important
            }

            .align-self-sm-stretch {
                align-self: stretch !important
            }

            .order-sm-first {
                order: -1 !important
            }

            .order-sm-0 {
                order: 0 !important
            }

            .order-sm-1 {
                order: 1 !important
            }

            .order-sm-2 {
                order: 2 !important
            }

            .order-sm-3 {
                order: 3 !important
            }

            .order-sm-4 {
                order: 4 !important
            }

            .order-sm-5 {
                order: 5 !important
            }

            .order-sm-last {
                order: 6 !important
            }

            .m-sm-0 {
                margin: 0 !important
            }

            .m-sm-1 {
                margin: .25rem !important
            }

            .m-sm-2 {
                margin: .5rem !important
            }

            .m-sm-3 {
                margin: 1rem !important
            }

            .m-sm-4 {
                margin: 1.5rem !important
            }

            .m-sm-5 {
                margin: 3rem !important
            }

            .m-sm-auto {
                margin: auto !important
            }

            .mx-sm-0 {
                margin-right: 0 !important;
                margin-left: 0 !important
            }

            .mx-sm-1 {
                margin-right: .25rem !important;
                margin-left: .25rem !important
            }

            .mx-sm-2 {
                margin-right: .5rem !important;
                margin-left: .5rem !important
            }

            .mx-sm-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important
            }

            .mx-sm-4 {
                margin-right: 1.5rem !important;
                margin-left: 1.5rem !important
            }

            .mx-sm-5 {
                margin-right: 3rem !important;
                margin-left: 3rem !important
            }

            .mx-sm-auto {
                margin-right: auto !important;
                margin-left: auto !important
            }

            .my-sm-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important
            }

            .my-sm-1 {
                margin-top: .25rem !important;
                margin-bottom: .25rem !important
            }

            .my-sm-2 {
                margin-top: .5rem !important;
                margin-bottom: .5rem !important
            }

            .my-sm-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important
            }

            .my-sm-4 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important
            }

            .my-sm-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important
            }

            .my-sm-auto {
                margin-top: auto !important;
                margin-bottom: auto !important
            }

            .mt-sm-0 {
                margin-top: 0 !important
            }

            .mt-sm-1 {
                margin-top: .25rem !important
            }

            .mt-sm-2 {
                margin-top: .5rem !important
            }

            .mt-sm-3 {
                margin-top: 1rem !important
            }

            .mt-sm-4 {
                margin-top: 1.5rem !important
            }

            .mt-sm-5 {
                margin-top: 3rem !important
            }

            .mt-sm-auto {
                margin-top: auto !important
            }

            .me-sm-0 {
                margin-right: 0 !important
            }

            .me-sm-1 {
                margin-right: .25rem !important
            }

            .me-sm-2 {
                margin-right: .5rem !important
            }

            .me-sm-3 {
                margin-right: 1rem !important
            }

            .me-sm-4 {
                margin-right: 1.5rem !important
            }

            .me-sm-5 {
                margin-right: 3rem !important
            }

            .me-sm-auto {
                margin-right: auto !important
            }

            .mb-sm-0 {
                margin-bottom: 0 !important
            }

            .mb-sm-1 {
                margin-bottom: .25rem !important
            }

            .mb-sm-2 {
                margin-bottom: .5rem !important
            }

            .mb-sm-3 {
                margin-bottom: 1rem !important
            }

            .mb-sm-4 {
                margin-bottom: 1.5rem !important
            }

            .mb-sm-5 {
                margin-bottom: 3rem !important
            }

            .mb-sm-auto {
                margin-bottom: auto !important
            }

            .ms-sm-0 {
                margin-left: 0 !important
            }

            .ms-sm-1 {
                margin-left: .25rem !important
            }

            .ms-sm-2 {
                margin-left: .5rem !important
            }

            .ms-sm-3 {
                margin-left: 1rem !important
            }

            .ms-sm-4 {
                margin-left: 1.5rem !important
            }

            .ms-sm-5 {
                margin-left: 3rem !important
            }

            .ms-sm-auto {
                margin-left: auto !important
            }

            .m-sm-n1 {
                margin: -0.25rem !important
            }

            .m-sm-n2 {
                margin: -0.5rem !important
            }

            .m-sm-n3 {
                margin: -1rem !important
            }

            .m-sm-n4 {
                margin: -1.5rem !important
            }

            .m-sm-n5 {
                margin: -3rem !important
            }

            .mx-sm-n1 {
                margin-right: -0.25rem !important;
                margin-left: -0.25rem !important
            }

            .mx-sm-n2 {
                margin-right: -0.5rem !important;
                margin-left: -0.5rem !important
            }

            .mx-sm-n3 {
                margin-right: -1rem !important;
                margin-left: -1rem !important
            }

            .mx-sm-n4 {
                margin-right: -1.5rem !important;
                margin-left: -1.5rem !important
            }

            .mx-sm-n5 {
                margin-right: -3rem !important;
                margin-left: -3rem !important
            }

            .my-sm-n1 {
                margin-top: -0.25rem !important;
                margin-bottom: -0.25rem !important
            }

            .my-sm-n2 {
                margin-top: -0.5rem !important;
                margin-bottom: -0.5rem !important
            }

            .my-sm-n3 {
                margin-top: -1rem !important;
                margin-bottom: -1rem !important
            }

            .my-sm-n4 {
                margin-top: -1.5rem !important;
                margin-bottom: -1.5rem !important
            }

            .my-sm-n5 {
                margin-top: -3rem !important;
                margin-bottom: -3rem !important
            }

            .mt-sm-n1 {
                margin-top: -0.25rem !important
            }

            .mt-sm-n2 {
                margin-top: -0.5rem !important
            }

            .mt-sm-n3 {
                margin-top: -1rem !important
            }

            .mt-sm-n4 {
                margin-top: -1.5rem !important
            }

            .mt-sm-n5 {
                margin-top: -3rem !important
            }

            .me-sm-n1 {
                margin-right: -0.25rem !important
            }

            .me-sm-n2 {
                margin-right: -0.5rem !important
            }

            .me-sm-n3 {
                margin-right: -1rem !important
            }

            .me-sm-n4 {
                margin-right: -1.5rem !important
            }

            .me-sm-n5 {
                margin-right: -3rem !important
            }

            .mb-sm-n1 {
                margin-bottom: -0.25rem !important
            }

            .mb-sm-n2 {
                margin-bottom: -0.5rem !important
            }

            .mb-sm-n3 {
                margin-bottom: -1rem !important
            }

            .mb-sm-n4 {
                margin-bottom: -1.5rem !important
            }

            .mb-sm-n5 {
                margin-bottom: -3rem !important
            }

            .ms-sm-n1 {
                margin-left: -0.25rem !important
            }

            .ms-sm-n2 {
                margin-left: -0.5rem !important
            }

            .ms-sm-n3 {
                margin-left: -1rem !important
            }

            .ms-sm-n4 {
                margin-left: -1.5rem !important
            }

            .ms-sm-n5 {
                margin-left: -3rem !important
            }

            .p-sm-0 {
                padding: 0 !important
            }

            .p-sm-1 {
                padding: .25rem !important
            }

            .p-sm-2 {
                padding: .5rem !important
            }

            .p-sm-3 {
                padding: 1rem !important
            }

            .p-sm-4 {
                padding: 1.5rem !important
            }

            .p-sm-5 {
                padding: 3rem !important
            }

            .px-sm-0 {
                padding-right: 0 !important;
                padding-left: 0 !important
            }

            .px-sm-1 {
                padding-right: .25rem !important;
                padding-left: .25rem !important
            }

            .px-sm-2 {
                padding-right: .5rem !important;
                padding-left: .5rem !important
            }

            .px-sm-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important
            }

            .px-sm-4 {
                padding-right: 1.5rem !important;
                padding-left: 1.5rem !important
            }

            .px-sm-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important
            }

            .py-sm-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important
            }

            .py-sm-1 {
                padding-top: .25rem !important;
                padding-bottom: .25rem !important
            }

            .py-sm-2 {
                padding-top: .5rem !important;
                padding-bottom: .5rem !important
            }

            .py-sm-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important
            }

            .py-sm-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important
            }

            .py-sm-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important
            }

            .pt-sm-0 {
                padding-top: 0 !important
            }

            .pt-sm-1 {
                padding-top: .25rem !important
            }

            .pt-sm-2 {
                padding-top: .5rem !important
            }

            .pt-sm-3 {
                padding-top: 1rem !important
            }

            .pt-sm-4 {
                padding-top: 1.5rem !important
            }

            .pt-sm-5 {
                padding-top: 3rem !important
            }

            .pe-sm-0 {
                padding-right: 0 !important
            }

            .pe-sm-1 {
                padding-right: .25rem !important
            }

            .pe-sm-2 {
                padding-right: .5rem !important
            }

            .pe-sm-3 {
                padding-right: 1rem !important
            }

            .pe-sm-4 {
                padding-right: 1.5rem !important
            }

            .pe-sm-5 {
                padding-right: 3rem !important
            }

            .pb-sm-0 {
                padding-bottom: 0 !important
            }

            .pb-sm-1 {
                padding-bottom: .25rem !important
            }

            .pb-sm-2 {
                padding-bottom: .5rem !important
            }

            .pb-sm-3 {
                padding-bottom: 1rem !important
            }

            .pb-sm-4 {
                padding-bottom: 1.5rem !important
            }

            .pb-sm-5 {
                padding-bottom: 3rem !important
            }

            .ps-sm-0 {
                padding-left: 0 !important
            }

            .ps-sm-1 {
                padding-left: .25rem !important
            }

            .ps-sm-2 {
                padding-left: .5rem !important
            }

            .ps-sm-3 {
                padding-left: 1rem !important
            }

            .ps-sm-4 {
                padding-left: 1.5rem !important
            }

            .ps-sm-5 {
                padding-left: 3rem !important
            }

            .gap-sm-0 {
                gap: 0 !important
            }

            .gap-sm-1 {
                gap: .25rem !important
            }

            .gap-sm-2 {
                gap: .5rem !important
            }

            .gap-sm-3 {
                gap: 1rem !important
            }

            .gap-sm-4 {
                gap: 1.5rem !important
            }

            .gap-sm-5 {
                gap: 3rem !important
            }

            .text-sm-start {
                text-align: left !important
            }

            .text-sm-end {
                text-align: right !important
            }

            .text-sm-center {
                text-align: center !important
            }
        }

        @media (min-width: 768px) {
            .float-md-start {
                float: left !important
            }

            .float-md-end {
                float: right !important
            }

            .float-md-none {
                float: none !important
            }

            .d-md-inline {
                display: inline !important
            }

            .d-md-inline-block {
                display: inline-block !important
            }

            .d-md-block {
                display: block !important
            }

            .d-md-grid {
                display: grid !important
            }

            .d-md-table {
                display: table !important
            }

            .d-md-table-row {
                display: table-row !important
            }

            .d-md-table-cell {
                display: table-cell !important
            }

            .d-md-flex {
                display: flex !important
            }

            .d-md-inline-flex {
                display: inline-flex !important
            }

            .d-md-none {
                display: none !important
            }

            .position-md-static {
                position: static !important
            }

            .position-md-relative {
                position: relative !important
            }

            .position-md-absolute {
                position: absolute !important
            }

            .position-md-fixed {
                position: fixed !important
            }

            .position-md-sticky {
                position: -webkit-sticky !important;
                position: sticky !important
            }

            .border-md {
                border: var(--ar-border-width) var(--ar-border-style) var(--ar-border-color) !important
            }

            .border-md-dashed {
                border: var(--ar-border-width) dashed #d6dfe8 !important
            }

            .border-md-0 {
                border: 0 !important
            }

            .border-top-md {
                border-top: var(--ar-border-width) var(--ar-border-style) var(--ar-border-color) !important
            }

            .border-top-md-0 {
                border-top: 0 !important
            }

            .border-end-md {
                border-right: var(--ar-border-width) var(--ar-border-style) var(--ar-border-color) !important
            }

            .border-end-md-0 {
                border-right: 0 !important
            }

            .border-bottom-md {
                border-bottom: var(--ar-border-width) var(--ar-border-style) var(--ar-border-color) !important
            }

            .border-bottom-md-0 {
                border-bottom: 0 !important
            }

            .border-start-md {
                border-left: var(--ar-border-width) var(--ar-border-style) var(--ar-border-color) !important
            }

            .border-start-md-0 {
                border-left: 0 !important
            }

            .w-md-25 {
                width: 25% !important
            }

            .w-md-50 {
                width: 50% !important
            }

            .w-md-75 {
                width: 75% !important
            }

            .w-md-100 {
                width: 100% !important
            }

            .w-md-auto {
                width: auto !important
            }

            .flex-md-fill {
                flex: 1 1 auto !important
            }

            .flex-md-row {
                flex-direction: row !important
            }

            .flex-md-column {
                flex-direction: column !important
            }

            .flex-md-row-reverse {
                flex-direction: row-reverse !important
            }

            .flex-md-column-reverse {
                flex-direction: column-reverse !important
            }

            .flex-md-grow-0 {
                flex-grow: 0 !important
            }

            .flex-md-grow-1 {
                flex-grow: 1 !important
            }

            .flex-md-shrink-0 {
                flex-shrink: 0 !important
            }

            .flex-md-shrink-1 {
                flex-shrink: 1 !important
            }

            .flex-md-wrap {
                flex-wrap: wrap !important
            }

            .flex-md-nowrap {
                flex-wrap: nowrap !important
            }

            .flex-md-wrap-reverse {
                flex-wrap: wrap-reverse !important
            }

            .justify-content-md-start {
                justify-content: flex-start !important
            }

            .justify-content-md-end {
                justify-content: flex-end !important
            }

            .justify-content-md-center {
                justify-content: center !important
            }

            .justify-content-md-between {
                justify-content: space-between !important
            }

            .justify-content-md-around {
                justify-content: space-around !important
            }

            .justify-content-md-evenly {
                justify-content: space-evenly !important
            }

            .align-items-md-start {
                align-items: flex-start !important
            }

            .align-items-md-end {
                align-items: flex-end !important
            }

            .align-items-md-center {
                align-items: center !important
            }

            .align-items-md-baseline {
                align-items: baseline !important
            }

            .align-items-md-stretch {
                align-items: stretch !important
            }

            .align-content-md-start {
                align-content: flex-start !important
            }

            .align-content-md-end {
                align-content: flex-end !important
            }

            .align-content-md-center {
                align-content: center !important
            }

            .align-content-md-between {
                align-content: space-between !important
            }

            .align-content-md-around {
                align-content: space-around !important
            }

            .align-content-md-stretch {
                align-content: stretch !important
            }

            .align-self-md-auto {
                align-self: auto !important
            }

            .align-self-md-start {
                align-self: flex-start !important
            }

            .align-self-md-end {
                align-self: flex-end !important
            }

            .align-self-md-center {
                align-self: center !important
            }

            .align-self-md-baseline {
                align-self: baseline !important
            }

            .align-self-md-stretch {
                align-self: stretch !important
            }

            .order-md-first {
                order: -1 !important
            }

            .order-md-0 {
                order: 0 !important
            }

            .order-md-1 {
                order: 1 !important
            }

            .order-md-2 {
                order: 2 !important
            }

            .order-md-3 {
                order: 3 !important
            }

            .order-md-4 {
                order: 4 !important
            }

            .order-md-5 {
                order: 5 !important
            }

            .order-md-last {
                order: 6 !important
            }

            .m-md-0 {
                margin: 0 !important
            }

            .m-md-1 {
                margin: .25rem !important
            }

            .m-md-2 {
                margin: .5rem !important
            }

            .m-md-3 {
                margin: 1rem !important
            }

            .m-md-4 {
                margin: 1.5rem !important
            }

            .m-md-5 {
                margin: 3rem !important
            }

            .m-md-auto {
                margin: auto !important
            }

            .mx-md-0 {
                margin-right: 0 !important;
                margin-left: 0 !important
            }

            .mx-md-1 {
                margin-right: .25rem !important;
                margin-left: .25rem !important
            }

            .mx-md-2 {
                margin-right: .5rem !important;
                margin-left: .5rem !important
            }

            .mx-md-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important
            }

            .mx-md-4 {
                margin-right: 1.5rem !important;
                margin-left: 1.5rem !important
            }

            .mx-md-5 {
                margin-right: 3rem !important;
                margin-left: 3rem !important
            }

            .mx-md-auto {
                margin-right: auto !important;
                margin-left: auto !important
            }

            .my-md-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important
            }

            .my-md-1 {
                margin-top: .25rem !important;
                margin-bottom: .25rem !important
            }

            .my-md-2 {
                margin-top: .5rem !important;
                margin-bottom: .5rem !important
            }

            .my-md-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important
            }

            .my-md-4 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important
            }

            .my-md-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important
            }

            .my-md-auto {
                margin-top: auto !important;
                margin-bottom: auto !important
            }

            .mt-md-0 {
                margin-top: 0 !important
            }

            .mt-md-1 {
                margin-top: .25rem !important
            }

            .mt-md-2 {
                margin-top: .5rem !important
            }

            .mt-md-3 {
                margin-top: 1rem !important
            }

            .mt-md-4 {
                margin-top: 1.5rem !important
            }

            .mt-md-5 {
                margin-top: 3rem !important
            }

            .mt-md-auto {
                margin-top: auto !important
            }

            .me-md-0 {
                margin-right: 0 !important
            }

            .me-md-1 {
                margin-right: .25rem !important
            }

            .me-md-2 {
                margin-right: .5rem !important
            }

            .me-md-3 {
                margin-right: 1rem !important
            }

            .me-md-4 {
                margin-right: 1.5rem !important
            }

            .me-md-5 {
                margin-right: 3rem !important
            }

            .me-md-auto {
                margin-right: auto !important
            }

            .mb-md-0 {
                margin-bottom: 0 !important
            }

            .mb-md-1 {
                margin-bottom: .25rem !important
            }

            .mb-md-2 {
                margin-bottom: .5rem !important
            }

            .mb-md-3 {
                margin-bottom: 1rem !important
            }

            .mb-md-4 {
                margin-bottom: 1.5rem !important
            }

            .mb-md-5 {
                margin-bottom: 3rem !important
            }

            .mb-md-auto {
                margin-bottom: auto !important
            }

            .ms-md-0 {
                margin-left: 0 !important
            }

            .ms-md-1 {
                margin-left: .25rem !important
            }

            .ms-md-2 {
                margin-left: .5rem !important
            }

            .ms-md-3 {
                margin-left: 1rem !important
            }

            .ms-md-4 {
                margin-left: 1.5rem !important
            }

            .ms-md-5 {
                margin-left: 3rem !important
            }

            .ms-md-auto {
                margin-left: auto !important
            }

            .m-md-n1 {
                margin: -0.25rem !important
            }

            .m-md-n2 {
                margin: -0.5rem !important
            }

            .m-md-n3 {
                margin: -1rem !important
            }

            .m-md-n4 {
                margin: -1.5rem !important
            }

            .m-md-n5 {
                margin: -3rem !important
            }

            .mx-md-n1 {
                margin-right: -0.25rem !important;
                margin-left: -0.25rem !important
            }

            .mx-md-n2 {
                margin-right: -0.5rem !important;
                margin-left: -0.5rem !important
            }

            .mx-md-n3 {
                margin-right: -1rem !important;
                margin-left: -1rem !important
            }

            .mx-md-n4 {
                margin-right: -1.5rem !important;
                margin-left: -1.5rem !important
            }

            .mx-md-n5 {
                margin-right: -3rem !important;
                margin-left: -3rem !important
            }

            .my-md-n1 {
                margin-top: -0.25rem !important;
                margin-bottom: -0.25rem !important
            }

            .my-md-n2 {
                margin-top: -0.5rem !important;
                margin-bottom: -0.5rem !important
            }

            .my-md-n3 {
                margin-top: -1rem !important;
                margin-bottom: -1rem !important
            }

            .my-md-n4 {
                margin-top: -1.5rem !important;
                margin-bottom: -1.5rem !important
            }

            .my-md-n5 {
                margin-top: -3rem !important;
                margin-bottom: -3rem !important
            }

            .mt-md-n1 {
                margin-top: -0.25rem !important
            }

            .mt-md-n2 {
                margin-top: -0.5rem !important
            }

            .mt-md-n3 {
                margin-top: -1rem !important
            }

            .mt-md-n4 {
                margin-top: -1.5rem !important
            }

            .mt-md-n5 {
                margin-top: -3rem !important
            }

            .me-md-n1 {
                margin-right: -0.25rem !important
            }

            .me-md-n2 {
                margin-right: -0.5rem !important
            }

            .me-md-n3 {
                margin-right: -1rem !important
            }

            .me-md-n4 {
                margin-right: -1.5rem !important
            }

            .me-md-n5 {
                margin-right: -3rem !important
            }

            .mb-md-n1 {
                margin-bottom: -0.25rem !important
            }

            .mb-md-n2 {
                margin-bottom: -0.5rem !important
            }

            .mb-md-n3 {
                margin-bottom: -1rem !important
            }

            .mb-md-n4 {
                margin-bottom: -1.5rem !important
            }

            .mb-md-n5 {
                margin-bottom: -3rem !important
            }

            .ms-md-n1 {
                margin-left: -0.25rem !important
            }

            .ms-md-n2 {
                margin-left: -0.5rem !important
            }

            .ms-md-n3 {
                margin-left: -1rem !important
            }

            .ms-md-n4 {
                margin-left: -1.5rem !important
            }

            .ms-md-n5 {
                margin-left: -3rem !important
            }

            .p-md-0 {
                padding: 0 !important
            }

            .p-md-1 {
                padding: .25rem !important
            }

            .p-md-2 {
                padding: .5rem !important
            }

            .p-md-3 {
                padding: 1rem !important
            }

            .p-md-4 {
                padding: 1.5rem !important
            }

            .p-md-5 {
                padding: 3rem !important
            }

            .px-md-0 {
                padding-right: 0 !important;
                padding-left: 0 !important
            }

            .px-md-1 {
                padding-right: .25rem !important;
                padding-left: .25rem !important
            }

            .px-md-2 {
                padding-right: .5rem !important;
                padding-left: .5rem !important
            }

            .px-md-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important
            }

            .px-md-4 {
                padding-right: 1.5rem !important;
                padding-left: 1.5rem !important
            }

            .px-md-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important
            }

            .py-md-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important
            }

            .py-md-1 {
                padding-top: .25rem !important;
                padding-bottom: .25rem !important
            }

            .py-md-2 {
                padding-top: .5rem !important;
                padding-bottom: .5rem !important
            }

            .py-md-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important
            }

            .py-md-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important
            }

            .py-md-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important
            }

            .pt-md-0 {
                padding-top: 0 !important
            }

            .pt-md-1 {
                padding-top: .25rem !important
            }

            .pt-md-2 {
                padding-top: .5rem !important
            }

            .pt-md-3 {
                padding-top: 1rem !important
            }

            .pt-md-4 {
                padding-top: 1.5rem !important
            }

            .pt-md-5 {
                padding-top: 3rem !important
            }

            .pe-md-0 {
                padding-right: 0 !important
            }

            .pe-md-1 {
                padding-right: .25rem !important
            }

            .pe-md-2 {
                padding-right: .5rem !important
            }

            .pe-md-3 {
                padding-right: 1rem !important
            }

            .pe-md-4 {
                padding-right: 1.5rem !important
            }

            .pe-md-5 {
                padding-right: 3rem !important
            }

            .pb-md-0 {
                padding-bottom: 0 !important
            }

            .pb-md-1 {
                padding-bottom: .25rem !important
            }

            .pb-md-2 {
                padding-bottom: .5rem !important
            }

            .pb-md-3 {
                padding-bottom: 1rem !important
            }

            .pb-md-4 {
                padding-bottom: 1.5rem !important
            }

            .pb-md-5 {
                padding-bottom: 3rem !important
            }

            .ps-md-0 {
                padding-left: 0 !important
            }

            .ps-md-1 {
                padding-left: .25rem !important
            }

            .ps-md-2 {
                padding-left: .5rem !important
            }

            .ps-md-3 {
                padding-left: 1rem !important
            }

            .ps-md-4 {
                padding-left: 1.5rem !important
            }

            .ps-md-5 {
                padding-left: 3rem !important
            }

            .gap-md-0 {
                gap: 0 !important
            }

            .gap-md-1 {
                gap: .25rem !important
            }

            .gap-md-2 {
                gap: .5rem !important
            }

            .gap-md-3 {
                gap: 1rem !important
            }

            .gap-md-4 {
                gap: 1.5rem !important
            }

            .gap-md-5 {
                gap: 3rem !important
            }

            .text-md-start {
                text-align: left !important
            }

            .text-md-end {
                text-align: right !important
            }

            .text-md-center {
                text-align: center !important
            }
        }

        @media (min-width: 992px) {
            .float-lg-start {
                float: left !important
            }

            .float-lg-end {
                float: right !important
            }

            .float-lg-none {
                float: none !important
            }

            .d-lg-inline {
                display: inline !important
            }

            .d-lg-inline-block {
                display: inline-block !important
            }

            .d-lg-block {
                display: block !important
            }

            .d-lg-grid {
                display: grid !important
            }

            .d-lg-table {
                display: table !important
            }

            .d-lg-table-row {
                display: table-row !important
            }

            .d-lg-table-cell {
                display: table-cell !important
            }

            .d-lg-flex {
                display: flex !important
            }

            .d-lg-inline-flex {
                display: inline-flex !important
            }

            .d-lg-none {
                display: none !important
            }

            .position-lg-static {
                position: static !important
            }

            .position-lg-relative {
                position: relative !important
            }

            .position-lg-absolute {
                position: absolute !important
            }

            .position-lg-fixed {
                position: fixed !important
            }

            .position-lg-sticky {
                position: -webkit-sticky !important;
                position: sticky !important
            }

            .border-lg {
                border: var(--ar-border-width) var(--ar-border-style) var(--ar-border-color) !important
            }

            .border-lg-dashed {
                border: var(--ar-border-width) dashed #d6dfe8 !important
            }

            .border-lg-0 {
                border: 0 !important
            }

            .border-top-lg {
                border-top: var(--ar-border-width) var(--ar-border-style) var(--ar-border-color) !important
            }

            .border-top-lg-0 {
                border-top: 0 !important
            }

            .border-end-lg {
                border-right: var(--ar-border-width) var(--ar-border-style) var(--ar-border-color) !important
            }

            .border-end-lg-0 {
                border-right: 0 !important
            }

            .border-bottom-lg {
                border-bottom: var(--ar-border-width) var(--ar-border-style) var(--ar-border-color) !important
            }

            .border-bottom-lg-0 {
                border-bottom: 0 !important
            }

            .border-start-lg {
                border-left: var(--ar-border-width) var(--ar-border-style) var(--ar-border-color) !important
            }

            .border-start-lg-0 {
                border-left: 0 !important
            }

            .w-lg-25 {
                width: 25% !important
            }

            .w-lg-50 {
                width: 50% !important
            }

            .w-lg-75 {
                width: 75% !important
            }

            .w-lg-100 {
                width: 100% !important
            }

            .w-lg-auto {
                width: auto !important
            }

            .flex-lg-fill {
                flex: 1 1 auto !important
            }

            .flex-lg-row {
                flex-direction: row !important
            }

            .flex-lg-column {
                flex-direction: column !important
            }

            .flex-lg-row-reverse {
                flex-direction: row-reverse !important
            }

            .flex-lg-column-reverse {
                flex-direction: column-reverse !important
            }

            .flex-lg-grow-0 {
                flex-grow: 0 !important
            }

            .flex-lg-grow-1 {
                flex-grow: 1 !important
            }

            .flex-lg-shrink-0 {
                flex-shrink: 0 !important
            }

            .flex-lg-shrink-1 {
                flex-shrink: 1 !important
            }

            .flex-lg-wrap {
                flex-wrap: wrap !important
            }

            .flex-lg-nowrap {
                flex-wrap: nowrap !important
            }

            .flex-lg-wrap-reverse {
                flex-wrap: wrap-reverse !important
            }

            .justify-content-lg-start {
                justify-content: flex-start !important
            }

            .justify-content-lg-end {
                justify-content: flex-end !important
            }

            .justify-content-lg-center {
                justify-content: center !important
            }

            .justify-content-lg-between {
                justify-content: space-between !important
            }

            .justify-content-lg-around {
                justify-content: space-around !important
            }

            .justify-content-lg-evenly {
                justify-content: space-evenly !important
            }

            .align-items-lg-start {
                align-items: flex-start !important
            }

            .align-items-lg-end {
                align-items: flex-end !important
            }

            .align-items-lg-center {
                align-items: center !important
            }

            .align-items-lg-baseline {
                align-items: baseline !important
            }

            .align-items-lg-stretch {
                align-items: stretch !important
            }

            .align-content-lg-start {
                align-content: flex-start !important
            }

            .align-content-lg-end {
                align-content: flex-end !important
            }

            .align-content-lg-center {
                align-content: center !important
            }

            .align-content-lg-between {
                align-content: space-between !important
            }

            .align-content-lg-around {
                align-content: space-around !important
            }

            .align-content-lg-stretch {
                align-content: stretch !important
            }

            .align-self-lg-auto {
                align-self: auto !important
            }

            .align-self-lg-start {
                align-self: flex-start !important
            }

            .align-self-lg-end {
                align-self: flex-end !important
            }

            .align-self-lg-center {
                align-self: center !important
            }

            .align-self-lg-baseline {
                align-self: baseline !important
            }

            .align-self-lg-stretch {
                align-self: stretch !important
            }

            .order-lg-first {
                order: -1 !important
            }

            .order-lg-0 {
                order: 0 !important
            }

            .order-lg-1 {
                order: 1 !important
            }

            .order-lg-2 {
                order: 2 !important
            }

            .order-lg-3 {
                order: 3 !important
            }

            .order-lg-4 {
                order: 4 !important
            }

            .order-lg-5 {
                order: 5 !important
            }

            .order-lg-last {
                order: 6 !important
            }

            .m-lg-0 {
                margin: 0 !important
            }

            .m-lg-1 {
                margin: .25rem !important
            }

            .m-lg-2 {
                margin: .5rem !important
            }

            .m-lg-3 {
                margin: 1rem !important
            }

            .m-lg-4 {
                margin: 1.5rem !important
            }

            .m-lg-5 {
                margin: 3rem !important
            }

            .m-lg-auto {
                margin: auto !important
            }

            .mx-lg-0 {
                margin-right: 0 !important;
                margin-left: 0 !important
            }

            .mx-lg-1 {
                margin-right: .25rem !important;
                margin-left: .25rem !important
            }

            .mx-lg-2 {
                margin-right: .5rem !important;
                margin-left: .5rem !important
            }

            .mx-lg-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important
            }

            .mx-lg-4 {
                margin-right: 1.5rem !important;
                margin-left: 1.5rem !important
            }

            .mx-lg-5 {
                margin-right: 3rem !important;
                margin-left: 3rem !important
            }

            .mx-lg-auto {
                margin-right: auto !important;
                margin-left: auto !important
            }

            .my-lg-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important
            }

            .my-lg-1 {
                margin-top: .25rem !important;
                margin-bottom: .25rem !important
            }

            .my-lg-2 {
                margin-top: .5rem !important;
                margin-bottom: .5rem !important
            }

            .my-lg-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important
            }

            .my-lg-4 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important
            }

            .my-lg-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important
            }

            .my-lg-auto {
                margin-top: auto !important;
                margin-bottom: auto !important
            }

            .mt-lg-0 {
                margin-top: 0 !important
            }

            .mt-lg-1 {
                margin-top: .25rem !important
            }

            .mt-lg-2 {
                margin-top: .5rem !important
            }

            .mt-lg-3 {
                margin-top: 1rem !important
            }

            .mt-lg-4 {
                margin-top: 1.5rem !important
            }

            .mt-lg-5 {
                margin-top: 3rem !important
            }

            .mt-lg-auto {
                margin-top: auto !important
            }

            .me-lg-0 {
                margin-right: 0 !important
            }

            .me-lg-1 {
                margin-right: .25rem !important
            }

            .me-lg-2 {
                margin-right: .5rem !important
            }

            .me-lg-3 {
                margin-right: 1rem !important
            }

            .me-lg-4 {
                margin-right: 1.5rem !important
            }

            .me-lg-5 {
                margin-right: 3rem !important
            }

            .me-lg-auto {
                margin-right: auto !important
            }

            .mb-lg-0 {
                margin-bottom: 0 !important
            }

            .mb-lg-1 {
                margin-bottom: .25rem !important
            }

            .mb-lg-2 {
                margin-bottom: .5rem !important
            }

            .mb-lg-3 {
                margin-bottom: 1rem !important
            }

            .mb-lg-4 {
                margin-bottom: 1.5rem !important
            }

            .mb-lg-5 {
                margin-bottom: 3rem !important
            }

            .mb-lg-auto {
                margin-bottom: auto !important
            }

            .ms-lg-0 {
                margin-left: 0 !important
            }

            .ms-lg-1 {
                margin-left: .25rem !important
            }

            .ms-lg-2 {
                margin-left: .5rem !important
            }

            .ms-lg-3 {
                margin-left: 1rem !important
            }

            .ms-lg-4 {
                margin-left: 1.5rem !important
            }

            .ms-lg-5 {
                margin-left: 3rem !important
            }

            .ms-lg-auto {
                margin-left: auto !important
            }

            .m-lg-n1 {
                margin: -0.25rem !important
            }

            .m-lg-n2 {
                margin: -0.5rem !important
            }

            .m-lg-n3 {
                margin: -1rem !important
            }

            .m-lg-n4 {
                margin: -1.5rem !important
            }

            .m-lg-n5 {
                margin: -3rem !important
            }

            .mx-lg-n1 {
                margin-right: -0.25rem !important;
                margin-left: -0.25rem !important
            }

            .mx-lg-n2 {
                margin-right: -0.5rem !important;
                margin-left: -0.5rem !important
            }

            .mx-lg-n3 {
                margin-right: -1rem !important;
                margin-left: -1rem !important
            }

            .mx-lg-n4 {
                margin-right: -1.5rem !important;
                margin-left: -1.5rem !important
            }

            .mx-lg-n5 {
                margin-right: -3rem !important;
                margin-left: -3rem !important
            }

            .my-lg-n1 {
                margin-top: -0.25rem !important;
                margin-bottom: -0.25rem !important
            }

            .my-lg-n2 {
                margin-top: -0.5rem !important;
                margin-bottom: -0.5rem !important
            }

            .my-lg-n3 {
                margin-top: -1rem !important;
                margin-bottom: -1rem !important
            }

            .my-lg-n4 {
                margin-top: -1.5rem !important;
                margin-bottom: -1.5rem !important
            }

            .my-lg-n5 {
                margin-top: -3rem !important;
                margin-bottom: -3rem !important
            }

            .mt-lg-n1 {
                margin-top: -0.25rem !important
            }

            .mt-lg-n2 {
                margin-top: -0.5rem !important
            }

            .mt-lg-n3 {
                margin-top: -1rem !important
            }

            .mt-lg-n4 {
                margin-top: -1.5rem !important
            }

            .mt-lg-n5 {
                margin-top: -3rem !important
            }

            .me-lg-n1 {
                margin-right: -0.25rem !important
            }

            .me-lg-n2 {
                margin-right: -0.5rem !important
            }

            .me-lg-n3 {
                margin-right: -1rem !important
            }

            .me-lg-n4 {
                margin-right: -1.5rem !important
            }

            .me-lg-n5 {
                margin-right: -3rem !important
            }

            .mb-lg-n1 {
                margin-bottom: -0.25rem !important
            }

            .mb-lg-n2 {
                margin-bottom: -0.5rem !important
            }

            .mb-lg-n3 {
                margin-bottom: -1rem !important
            }

            .mb-lg-n4 {
                margin-bottom: -1.5rem !important
            }

            .mb-lg-n5 {
                margin-bottom: -3rem !important
            }

            .ms-lg-n1 {
                margin-left: -0.25rem !important
            }

            .ms-lg-n2 {
                margin-left: -0.5rem !important
            }

            .ms-lg-n3 {
                margin-left: -1rem !important
            }

            .ms-lg-n4 {
                margin-left: -1.5rem !important
            }

            .ms-lg-n5 {
                margin-left: -3rem !important
            }

            .p-lg-0 {
                padding: 0 !important
            }

            .p-lg-1 {
                padding: .25rem !important
            }

            .p-lg-2 {
                padding: .5rem !important
            }

            .p-lg-3 {
                padding: 1rem !important
            }

            .p-lg-4 {
                padding: 1.5rem !important
            }

            .p-lg-5 {
                padding: 3rem !important
            }

            .px-lg-0 {
                padding-right: 0 !important;
                padding-left: 0 !important
            }

            .px-lg-1 {
                padding-right: .25rem !important;
                padding-left: .25rem !important
            }

            .px-lg-2 {
                padding-right: .5rem !important;
                padding-left: .5rem !important
            }

            .px-lg-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important
            }

            .px-lg-4 {
                padding-right: 1.5rem !important;
                padding-left: 1.5rem !important
            }

            .px-lg-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important
            }

            .py-lg-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important
            }

            .py-lg-1 {
                padding-top: .25rem !important;
                padding-bottom: .25rem !important
            }

            .py-lg-2 {
                padding-top: .5rem !important;
                padding-bottom: .5rem !important
            }

            .py-lg-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important
            }

            .py-lg-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important
            }

            .py-lg-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important
            }

            .pt-lg-0 {
                padding-top: 0 !important
            }

            .pt-lg-1 {
                padding-top: .25rem !important
            }

            .pt-lg-2 {
                padding-top: .5rem !important
            }

            .pt-lg-3 {
                padding-top: 1rem !important
            }

            .pt-lg-4 {
                padding-top: 1.5rem !important
            }

            .pt-lg-5 {
                padding-top: 3rem !important
            }

            .pe-lg-0 {
                padding-right: 0 !important
            }

            .pe-lg-1 {
                padding-right: .25rem !important
            }

            .pe-lg-2 {
                padding-right: .5rem !important
            }

            .pe-lg-3 {
                padding-right: 1rem !important
            }

            .pe-lg-4 {
                padding-right: 1.5rem !important
            }

            .pe-lg-5 {
                padding-right: 3rem !important
            }

            .pb-lg-0 {
                padding-bottom: 0 !important
            }

            .pb-lg-1 {
                padding-bottom: .25rem !important
            }

            .pb-lg-2 {
                padding-bottom: .5rem !important
            }

            .pb-lg-3 {
                padding-bottom: 1rem !important
            }

            .pb-lg-4 {
                padding-bottom: 1.5rem !important
            }

            .pb-lg-5 {
                padding-bottom: 3rem !important
            }

            .ps-lg-0 {
                padding-left: 0 !important
            }

            .ps-lg-1 {
                padding-left: .25rem !important
            }

            .ps-lg-2 {
                padding-left: .5rem !important
            }

            .ps-lg-3 {
                padding-left: 1rem !important
            }

            .ps-lg-4 {
                padding-left: 1.5rem !important
            }

            .ps-lg-5 {
                padding-left: 3rem !important
            }

            .gap-lg-0 {
                gap: 0 !important
            }

            .gap-lg-1 {
                gap: .25rem !important
            }

            .gap-lg-2 {
                gap: .5rem !important
            }

            .gap-lg-3 {
                gap: 1rem !important
            }

            .gap-lg-4 {
                gap: 1.5rem !important
            }

            .gap-lg-5 {
                gap: 3rem !important
            }

            .text-lg-start {
                text-align: left !important
            }

            .text-lg-end {
                text-align: right !important
            }

            .text-lg-center {
                text-align: center !important
            }
        }

        @media (min-width: 1200px) {
            .float-xl-start {
                float: left !important
            }

            .float-xl-end {
                float: right !important
            }

            .float-xl-none {
                float: none !important
            }

            .d-xl-inline {
                display: inline !important
            }

            .d-xl-inline-block {
                display: inline-block !important
            }

            .d-xl-block {
                display: block !important
            }

            .d-xl-grid {
                display: grid !important
            }

            .d-xl-table {
                display: table !important
            }

            .d-xl-table-row {
                display: table-row !important
            }

            .d-xl-table-cell {
                display: table-cell !important
            }

            .d-xl-flex {
                display: flex !important
            }

            .d-xl-inline-flex {
                display: inline-flex !important
            }

            .d-xl-none {
                display: none !important
            }

            .position-xl-static {
                position: static !important
            }

            .position-xl-relative {
                position: relative !important
            }

            .position-xl-absolute {
                position: absolute !important
            }

            .position-xl-fixed {
                position: fixed !important
            }

            .position-xl-sticky {
                position: -webkit-sticky !important;
                position: sticky !important
            }

            .border-xl {
                border: var(--ar-border-width) var(--ar-border-style) var(--ar-border-color) !important
            }

            .border-xl-dashed {
                border: var(--ar-border-width) dashed #d6dfe8 !important
            }

            .border-xl-0 {
                border: 0 !important
            }

            .border-top-xl {
                border-top: var(--ar-border-width) var(--ar-border-style) var(--ar-border-color) !important
            }

            .border-top-xl-0 {
                border-top: 0 !important
            }

            .border-end-xl {
                border-right: var(--ar-border-width) var(--ar-border-style) var(--ar-border-color) !important
            }

            .border-end-xl-0 {
                border-right: 0 !important
            }

            .border-bottom-xl {
                border-bottom: var(--ar-border-width) var(--ar-border-style) var(--ar-border-color) !important
            }

            .border-bottom-xl-0 {
                border-bottom: 0 !important
            }

            .border-start-xl {
                border-left: var(--ar-border-width) var(--ar-border-style) var(--ar-border-color) !important
            }

            .border-start-xl-0 {
                border-left: 0 !important
            }

            .w-xl-25 {
                width: 25% !important
            }

            .w-xl-50 {
                width: 50% !important
            }

            .w-xl-75 {
                width: 75% !important
            }

            .w-xl-100 {
                width: 100% !important
            }

            .w-xl-auto {
                width: auto !important
            }

            .flex-xl-fill {
                flex: 1 1 auto !important
            }

            .flex-xl-row {
                flex-direction: row !important
            }

            .flex-xl-column {
                flex-direction: column !important
            }

            .flex-xl-row-reverse {
                flex-direction: row-reverse !important
            }

            .flex-xl-column-reverse {
                flex-direction: column-reverse !important
            }

            .flex-xl-grow-0 {
                flex-grow: 0 !important
            }

            .flex-xl-grow-1 {
                flex-grow: 1 !important
            }

            .flex-xl-shrink-0 {
                flex-shrink: 0 !important
            }

            .flex-xl-shrink-1 {
                flex-shrink: 1 !important
            }

            .flex-xl-wrap {
                flex-wrap: wrap !important
            }

            .flex-xl-nowrap {
                flex-wrap: nowrap !important
            }

            .flex-xl-wrap-reverse {
                flex-wrap: wrap-reverse !important
            }

            .justify-content-xl-start {
                justify-content: flex-start !important
            }

            .justify-content-xl-end {
                justify-content: flex-end !important
            }

            .justify-content-xl-center {
                justify-content: center !important
            }

            .justify-content-xl-between {
                justify-content: space-between !important
            }

            .justify-content-xl-around {
                justify-content: space-around !important
            }

            .justify-content-xl-evenly {
                justify-content: space-evenly !important
            }

            .align-items-xl-start {
                align-items: flex-start !important
            }

            .align-items-xl-end {
                align-items: flex-end !important
            }

            .align-items-xl-center {
                align-items: center !important
            }

            .align-items-xl-baseline {
                align-items: baseline !important
            }

            .align-items-xl-stretch {
                align-items: stretch !important
            }

            .align-content-xl-start {
                align-content: flex-start !important
            }

            .align-content-xl-end {
                align-content: flex-end !important
            }

            .align-content-xl-center {
                align-content: center !important
            }

            .align-content-xl-between {
                align-content: space-between !important
            }

            .align-content-xl-around {
                align-content: space-around !important
            }

            .align-content-xl-stretch {
                align-content: stretch !important
            }

            .align-self-xl-auto {
                align-self: auto !important
            }

            .align-self-xl-start {
                align-self: flex-start !important
            }

            .align-self-xl-end {
                align-self: flex-end !important
            }

            .align-self-xl-center {
                align-self: center !important
            }

            .align-self-xl-baseline {
                align-self: baseline !important
            }

            .align-self-xl-stretch {
                align-self: stretch !important
            }

            .order-xl-first {
                order: -1 !important
            }

            .order-xl-0 {
                order: 0 !important
            }

            .order-xl-1 {
                order: 1 !important
            }

            .order-xl-2 {
                order: 2 !important
            }

            .order-xl-3 {
                order: 3 !important
            }

            .order-xl-4 {
                order: 4 !important
            }

            .order-xl-5 {
                order: 5 !important
            }

            .order-xl-last {
                order: 6 !important
            }

            .m-xl-0 {
                margin: 0 !important
            }

            .m-xl-1 {
                margin: .25rem !important
            }

            .m-xl-2 {
                margin: .5rem !important
            }

            .m-xl-3 {
                margin: 1rem !important
            }

            .m-xl-4 {
                margin: 1.5rem !important
            }

            .m-xl-5 {
                margin: 3rem !important
            }

            .m-xl-auto {
                margin: auto !important
            }

            .mx-xl-0 {
                margin-right: 0 !important;
                margin-left: 0 !important
            }

            .mx-xl-1 {
                margin-right: .25rem !important;
                margin-left: .25rem !important
            }

            .mx-xl-2 {
                margin-right: .5rem !important;
                margin-left: .5rem !important
            }

            .mx-xl-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important
            }

            .mx-xl-4 {
                margin-right: 1.5rem !important;
                margin-left: 1.5rem !important
            }

            .mx-xl-5 {
                margin-right: 3rem !important;
                margin-left: 3rem !important
            }

            .mx-xl-auto {
                margin-right: auto !important;
                margin-left: auto !important
            }

            .my-xl-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important
            }

            .my-xl-1 {
                margin-top: .25rem !important;
                margin-bottom: .25rem !important
            }

            .my-xl-2 {
                margin-top: .5rem !important;
                margin-bottom: .5rem !important
            }

            .my-xl-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important
            }

            .my-xl-4 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important
            }

            .my-xl-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important
            }

            .my-xl-auto {
                margin-top: auto !important;
                margin-bottom: auto !important
            }

            .mt-xl-0 {
                margin-top: 0 !important
            }

            .mt-xl-1 {
                margin-top: .25rem !important
            }

            .mt-xl-2 {
                margin-top: .5rem !important
            }

            .mt-xl-3 {
                margin-top: 1rem !important
            }

            .mt-xl-4 {
                margin-top: 1.5rem !important
            }

            .mt-xl-5 {
                margin-top: 3rem !important
            }

            .mt-xl-auto {
                margin-top: auto !important
            }

            .me-xl-0 {
                margin-right: 0 !important
            }

            .me-xl-1 {
                margin-right: .25rem !important
            }

            .me-xl-2 {
                margin-right: .5rem !important
            }

            .me-xl-3 {
                margin-right: 1rem !important
            }

            .me-xl-4 {
                margin-right: 1.5rem !important
            }

            .me-xl-5 {
                margin-right: 3rem !important
            }

            .me-xl-auto {
                margin-right: auto !important
            }

            .mb-xl-0 {
                margin-bottom: 0 !important
            }

            .mb-xl-1 {
                margin-bottom: .25rem !important
            }

            .mb-xl-2 {
                margin-bottom: .5rem !important
            }

            .mb-xl-3 {
                margin-bottom: 1rem !important
            }

            .mb-xl-4 {
                margin-bottom: 1.5rem !important
            }

            .mb-xl-5 {
                margin-bottom: 3rem !important
            }

            .mb-xl-auto {
                margin-bottom: auto !important
            }

            .ms-xl-0 {
                margin-left: 0 !important
            }

            .ms-xl-1 {
                margin-left: .25rem !important
            }

            .ms-xl-2 {
                margin-left: .5rem !important
            }

            .ms-xl-3 {
                margin-left: 1rem !important
            }

            .ms-xl-4 {
                margin-left: 1.5rem !important
            }

            .ms-xl-5 {
                margin-left: 3rem !important
            }

            .ms-xl-auto {
                margin-left: auto !important
            }

            .m-xl-n1 {
                margin: -0.25rem !important
            }

            .m-xl-n2 {
                margin: -0.5rem !important
            }

            .m-xl-n3 {
                margin: -1rem !important
            }

            .m-xl-n4 {
                margin: -1.5rem !important
            }

            .m-xl-n5 {
                margin: -3rem !important
            }

            .mx-xl-n1 {
                margin-right: -0.25rem !important;
                margin-left: -0.25rem !important
            }

            .mx-xl-n2 {
                margin-right: -0.5rem !important;
                margin-left: -0.5rem !important
            }

            .mx-xl-n3 {
                margin-right: -1rem !important;
                margin-left: -1rem !important
            }

            .mx-xl-n4 {
                margin-right: -1.5rem !important;
                margin-left: -1.5rem !important
            }

            .mx-xl-n5 {
                margin-right: -3rem !important;
                margin-left: -3rem !important
            }

            .my-xl-n1 {
                margin-top: -0.25rem !important;
                margin-bottom: -0.25rem !important
            }

            .my-xl-n2 {
                margin-top: -0.5rem !important;
                margin-bottom: -0.5rem !important
            }

            .my-xl-n3 {
                margin-top: -1rem !important;
                margin-bottom: -1rem !important
            }

            .my-xl-n4 {
                margin-top: -1.5rem !important;
                margin-bottom: -1.5rem !important
            }

            .my-xl-n5 {
                margin-top: -3rem !important;
                margin-bottom: -3rem !important
            }

            .mt-xl-n1 {
                margin-top: -0.25rem !important
            }

            .mt-xl-n2 {
                margin-top: -0.5rem !important
            }

            .mt-xl-n3 {
                margin-top: -1rem !important
            }

            .mt-xl-n4 {
                margin-top: -1.5rem !important
            }

            .mt-xl-n5 {
                margin-top: -3rem !important
            }

            .me-xl-n1 {
                margin-right: -0.25rem !important
            }

            .me-xl-n2 {
                margin-right: -0.5rem !important
            }

            .me-xl-n3 {
                margin-right: -1rem !important
            }

            .me-xl-n4 {
                margin-right: -1.5rem !important
            }

            .me-xl-n5 {
                margin-right: -3rem !important
            }

            .mb-xl-n1 {
                margin-bottom: -0.25rem !important
            }

            .mb-xl-n2 {
                margin-bottom: -0.5rem !important
            }

            .mb-xl-n3 {
                margin-bottom: -1rem !important
            }

            .mb-xl-n4 {
                margin-bottom: -1.5rem !important
            }

            .mb-xl-n5 {
                margin-bottom: -3rem !important
            }

            .ms-xl-n1 {
                margin-left: -0.25rem !important
            }

            .ms-xl-n2 {
                margin-left: -0.5rem !important
            }

            .ms-xl-n3 {
                margin-left: -1rem !important
            }

            .ms-xl-n4 {
                margin-left: -1.5rem !important
            }

            .ms-xl-n5 {
                margin-left: -3rem !important
            }

            .p-xl-0 {
                padding: 0 !important
            }

            .p-xl-1 {
                padding: .25rem !important
            }

            .p-xl-2 {
                padding: .5rem !important
            }

            .p-xl-3 {
                padding: 1rem !important
            }

            .p-xl-4 {
                padding: 1.5rem !important
            }

            .p-xl-5 {
                padding: 3rem !important
            }

            .px-xl-0 {
                padding-right: 0 !important;
                padding-left: 0 !important
            }

            .px-xl-1 {
                padding-right: .25rem !important;
                padding-left: .25rem !important
            }

            .px-xl-2 {
                padding-right: .5rem !important;
                padding-left: .5rem !important
            }

            .px-xl-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important
            }

            .px-xl-4 {
                padding-right: 1.5rem !important;
                padding-left: 1.5rem !important
            }

            .px-xl-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important
            }

            .py-xl-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important
            }

            .py-xl-1 {
                padding-top: .25rem !important;
                padding-bottom: .25rem !important
            }

            .py-xl-2 {
                padding-top: .5rem !important;
                padding-bottom: .5rem !important
            }

            .py-xl-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important
            }

            .py-xl-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important
            }

            .py-xl-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important
            }

            .pt-xl-0 {
                padding-top: 0 !important
            }

            .pt-xl-1 {
                padding-top: .25rem !important
            }

            .pt-xl-2 {
                padding-top: .5rem !important
            }

            .pt-xl-3 {
                padding-top: 1rem !important
            }

            .pt-xl-4 {
                padding-top: 1.5rem !important
            }

            .pt-xl-5 {
                padding-top: 3rem !important
            }

            .pe-xl-0 {
                padding-right: 0 !important
            }

            .pe-xl-1 {
                padding-right: .25rem !important
            }

            .pe-xl-2 {
                padding-right: .5rem !important
            }

            .pe-xl-3 {
                padding-right: 1rem !important
            }

            .pe-xl-4 {
                padding-right: 1.5rem !important
            }

            .pe-xl-5 {
                padding-right: 3rem !important
            }

            .pb-xl-0 {
                padding-bottom: 0 !important
            }

            .pb-xl-1 {
                padding-bottom: .25rem !important
            }

            .pb-xl-2 {
                padding-bottom: .5rem !important
            }

            .pb-xl-3 {
                padding-bottom: 1rem !important
            }

            .pb-xl-4 {
                padding-bottom: 1.5rem !important
            }

            .pb-xl-5 {
                padding-bottom: 3rem !important
            }

            .ps-xl-0 {
                padding-left: 0 !important
            }

            .ps-xl-1 {
                padding-left: .25rem !important
            }

            .ps-xl-2 {
                padding-left: .5rem !important
            }

            .ps-xl-3 {
                padding-left: 1rem !important
            }

            .ps-xl-4 {
                padding-left: 1.5rem !important
            }

            .ps-xl-5 {
                padding-left: 3rem !important
            }

            .gap-xl-0 {
                gap: 0 !important
            }

            .gap-xl-1 {
                gap: .25rem !important
            }

            .gap-xl-2 {
                gap: .5rem !important
            }

            .gap-xl-3 {
                gap: 1rem !important
            }

            .gap-xl-4 {
                gap: 1.5rem !important
            }

            .gap-xl-5 {
                gap: 3rem !important
            }

            .text-xl-start {
                text-align: left !important
            }

            .text-xl-end {
                text-align: right !important
            }

            .text-xl-center {
                text-align: center !important
            }
        }

        @media (min-width: 1400px) {
            .float-xxl-start {
                float: left !important
            }

            .float-xxl-end {
                float: right !important
            }

            .float-xxl-none {
                float: none !important
            }

            .d-xxl-inline {
                display: inline !important
            }

            .d-xxl-inline-block {
                display: inline-block !important
            }

            .d-xxl-block {
                display: block !important
            }

            .d-xxl-grid {
                display: grid !important
            }

            .d-xxl-table {
                display: table !important
            }

            .d-xxl-table-row {
                display: table-row !important
            }

            .d-xxl-table-cell {
                display: table-cell !important
            }

            .d-xxl-flex {
                display: flex !important
            }

            .d-xxl-inline-flex {
                display: inline-flex !important
            }

            .d-xxl-none {
                display: none !important
            }

            .position-xxl-static {
                position: static !important
            }

            .position-xxl-relative {
                position: relative !important
            }

            .position-xxl-absolute {
                position: absolute !important
            }

            .position-xxl-fixed {
                position: fixed !important
            }

            .position-xxl-sticky {
                position: -webkit-sticky !important;
                position: sticky !important
            }

            .border-xxl {
                border: var(--ar-border-width) var(--ar-border-style) var(--ar-border-color) !important
            }

            .border-xxl-dashed {
                border: var(--ar-border-width) dashed #d6dfe8 !important
            }

            .border-xxl-0 {
                border: 0 !important
            }

            .border-top-xxl {
                border-top: var(--ar-border-width) var(--ar-border-style) var(--ar-border-color) !important
            }

            .border-top-xxl-0 {
                border-top: 0 !important
            }

            .border-end-xxl {
                border-right: var(--ar-border-width) var(--ar-border-style) var(--ar-border-color) !important
            }

            .border-end-xxl-0 {
                border-right: 0 !important
            }

            .border-bottom-xxl {
                border-bottom: var(--ar-border-width) var(--ar-border-style) var(--ar-border-color) !important
            }

            .border-bottom-xxl-0 {
                border-bottom: 0 !important
            }

            .border-start-xxl {
                border-left: var(--ar-border-width) var(--ar-border-style) var(--ar-border-color) !important
            }

            .border-start-xxl-0 {
                border-left: 0 !important
            }

            .w-xxl-25 {
                width: 25% !important
            }

            .w-xxl-50 {
                width: 50% !important
            }

            .w-xxl-75 {
                width: 75% !important
            }

            .w-xxl-100 {
                width: 100% !important
            }

            .w-xxl-auto {
                width: auto !important
            }

            .flex-xxl-fill {
                flex: 1 1 auto !important
            }

            .flex-xxl-row {
                flex-direction: row !important
            }

            .flex-xxl-column {
                flex-direction: column !important
            }

            .flex-xxl-row-reverse {
                flex-direction: row-reverse !important
            }

            .flex-xxl-column-reverse {
                flex-direction: column-reverse !important
            }

            .flex-xxl-grow-0 {
                flex-grow: 0 !important
            }

            .flex-xxl-grow-1 {
                flex-grow: 1 !important
            }

            .flex-xxl-shrink-0 {
                flex-shrink: 0 !important
            }

            .flex-xxl-shrink-1 {
                flex-shrink: 1 !important
            }

            .flex-xxl-wrap {
                flex-wrap: wrap !important
            }

            .flex-xxl-nowrap {
                flex-wrap: nowrap !important
            }

            .flex-xxl-wrap-reverse {
                flex-wrap: wrap-reverse !important
            }

            .justify-content-xxl-start {
                justify-content: flex-start !important
            }

            .justify-content-xxl-end {
                justify-content: flex-end !important
            }

            .justify-content-xxl-center {
                justify-content: center !important
            }

            .justify-content-xxl-between {
                justify-content: space-between !important
            }

            .justify-content-xxl-around {
                justify-content: space-around !important
            }

            .justify-content-xxl-evenly {
                justify-content: space-evenly !important
            }

            .align-items-xxl-start {
                align-items: flex-start !important
            }

            .align-items-xxl-end {
                align-items: flex-end !important
            }

            .align-items-xxl-center {
                align-items: center !important
            }

            .align-items-xxl-baseline {
                align-items: baseline !important
            }

            .align-items-xxl-stretch {
                align-items: stretch !important
            }

            .align-content-xxl-start {
                align-content: flex-start !important
            }

            .align-content-xxl-end {
                align-content: flex-end !important
            }

            .align-content-xxl-center {
                align-content: center !important
            }

            .align-content-xxl-between {
                align-content: space-between !important
            }

            .align-content-xxl-around {
                align-content: space-around !important
            }

            .align-content-xxl-stretch {
                align-content: stretch !important
            }

            .align-self-xxl-auto {
                align-self: auto !important
            }

            .align-self-xxl-start {
                align-self: flex-start !important
            }

            .align-self-xxl-end {
                align-self: flex-end !important
            }

            .align-self-xxl-center {
                align-self: center !important
            }

            .align-self-xxl-baseline {
                align-self: baseline !important
            }

            .align-self-xxl-stretch {
                align-self: stretch !important
            }

            .order-xxl-first {
                order: -1 !important
            }

            .order-xxl-0 {
                order: 0 !important
            }

            .order-xxl-1 {
                order: 1 !important
            }

            .order-xxl-2 {
                order: 2 !important
            }

            .order-xxl-3 {
                order: 3 !important
            }

            .order-xxl-4 {
                order: 4 !important
            }

            .order-xxl-5 {
                order: 5 !important
            }

            .order-xxl-last {
                order: 6 !important
            }

            .m-xxl-0 {
                margin: 0 !important
            }

            .m-xxl-1 {
                margin: .25rem !important
            }

            .m-xxl-2 {
                margin: .5rem !important
            }

            .m-xxl-3 {
                margin: 1rem !important
            }

            .m-xxl-4 {
                margin: 1.5rem !important
            }

            .m-xxl-5 {
                margin: 3rem !important
            }

            .m-xxl-auto {
                margin: auto !important
            }

            .mx-xxl-0 {
                margin-right: 0 !important;
                margin-left: 0 !important
            }

            .mx-xxl-1 {
                margin-right: .25rem !important;
                margin-left: .25rem !important
            }

            .mx-xxl-2 {
                margin-right: .5rem !important;
                margin-left: .5rem !important
            }

            .mx-xxl-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important
            }

            .mx-xxl-4 {
                margin-right: 1.5rem !important;
                margin-left: 1.5rem !important
            }

            .mx-xxl-5 {
                margin-right: 3rem !important;
                margin-left: 3rem !important
            }

            .mx-xxl-auto {
                margin-right: auto !important;
                margin-left: auto !important
            }

            .my-xxl-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important
            }

            .my-xxl-1 {
                margin-top: .25rem !important;
                margin-bottom: .25rem !important
            }

            .my-xxl-2 {
                margin-top: .5rem !important;
                margin-bottom: .5rem !important
            }

            .my-xxl-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important
            }

            .my-xxl-4 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important
            }

            .my-xxl-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important
            }

            .my-xxl-auto {
                margin-top: auto !important;
                margin-bottom: auto !important
            }

            .mt-xxl-0 {
                margin-top: 0 !important
            }

            .mt-xxl-1 {
                margin-top: .25rem !important
            }

            .mt-xxl-2 {
                margin-top: .5rem !important
            }

            .mt-xxl-3 {
                margin-top: 1rem !important
            }

            .mt-xxl-4 {
                margin-top: 1.5rem !important
            }

            .mt-xxl-5 {
                margin-top: 3rem !important
            }

            .mt-xxl-auto {
                margin-top: auto !important
            }

            .me-xxl-0 {
                margin-right: 0 !important
            }

            .me-xxl-1 {
                margin-right: .25rem !important
            }

            .me-xxl-2 {
                margin-right: .5rem !important
            }

            .me-xxl-3 {
                margin-right: 1rem !important
            }

            .me-xxl-4 {
                margin-right: 1.5rem !important
            }

            .me-xxl-5 {
                margin-right: 3rem !important
            }

            .me-xxl-auto {
                margin-right: auto !important
            }

            .mb-xxl-0 {
                margin-bottom: 0 !important
            }

            .mb-xxl-1 {
                margin-bottom: .25rem !important
            }

            .mb-xxl-2 {
                margin-bottom: .5rem !important
            }

            .mb-xxl-3 {
                margin-bottom: 1rem !important
            }

            .mb-xxl-4 {
                margin-bottom: 1.5rem !important
            }

            .mb-xxl-5 {
                margin-bottom: 3rem !important
            }

            .mb-xxl-auto {
                margin-bottom: auto !important
            }

            .ms-xxl-0 {
                margin-left: 0 !important
            }

            .ms-xxl-1 {
                margin-left: .25rem !important
            }

            .ms-xxl-2 {
                margin-left: .5rem !important
            }

            .ms-xxl-3 {
                margin-left: 1rem !important
            }

            .ms-xxl-4 {
                margin-left: 1.5rem !important
            }

            .ms-xxl-5 {
                margin-left: 3rem !important
            }

            .ms-xxl-auto {
                margin-left: auto !important
            }

            .m-xxl-n1 {
                margin: -0.25rem !important
            }

            .m-xxl-n2 {
                margin: -0.5rem !important
            }

            .m-xxl-n3 {
                margin: -1rem !important
            }

            .m-xxl-n4 {
                margin: -1.5rem !important
            }

            .m-xxl-n5 {
                margin: -3rem !important
            }

            .mx-xxl-n1 {
                margin-right: -0.25rem !important;
                margin-left: -0.25rem !important
            }

            .mx-xxl-n2 {
                margin-right: -0.5rem !important;
                margin-left: -0.5rem !important
            }

            .mx-xxl-n3 {
                margin-right: -1rem !important;
                margin-left: -1rem !important
            }

            .mx-xxl-n4 {
                margin-right: -1.5rem !important;
                margin-left: -1.5rem !important
            }

            .mx-xxl-n5 {
                margin-right: -3rem !important;
                margin-left: -3rem !important
            }

            .my-xxl-n1 {
                margin-top: -0.25rem !important;
                margin-bottom: -0.25rem !important
            }

            .my-xxl-n2 {
                margin-top: -0.5rem !important;
                margin-bottom: -0.5rem !important
            }

            .my-xxl-n3 {
                margin-top: -1rem !important;
                margin-bottom: -1rem !important
            }

            .my-xxl-n4 {
                margin-top: -1.5rem !important;
                margin-bottom: -1.5rem !important
            }

            .my-xxl-n5 {
                margin-top: -3rem !important;
                margin-bottom: -3rem !important
            }

            .mt-xxl-n1 {
                margin-top: -0.25rem !important
            }

            .mt-xxl-n2 {
                margin-top: -0.5rem !important
            }

            .mt-xxl-n3 {
                margin-top: -1rem !important
            }

            .mt-xxl-n4 {
                margin-top: -1.5rem !important
            }

            .mt-xxl-n5 {
                margin-top: -3rem !important
            }

            .me-xxl-n1 {
                margin-right: -0.25rem !important
            }

            .me-xxl-n2 {
                margin-right: -0.5rem !important
            }

            .me-xxl-n3 {
                margin-right: -1rem !important
            }

            .me-xxl-n4 {
                margin-right: -1.5rem !important
            }

            .me-xxl-n5 {
                margin-right: -3rem !important
            }

            .mb-xxl-n1 {
                margin-bottom: -0.25rem !important
            }

            .mb-xxl-n2 {
                margin-bottom: -0.5rem !important
            }

            .mb-xxl-n3 {
                margin-bottom: -1rem !important
            }

            .mb-xxl-n4 {
                margin-bottom: -1.5rem !important
            }

            .mb-xxl-n5 {
                margin-bottom: -3rem !important
            }

            .ms-xxl-n1 {
                margin-left: -0.25rem !important
            }

            .ms-xxl-n2 {
                margin-left: -0.5rem !important
            }

            .ms-xxl-n3 {
                margin-left: -1rem !important
            }

            .ms-xxl-n4 {
                margin-left: -1.5rem !important
            }

            .ms-xxl-n5 {
                margin-left: -3rem !important
            }

            .p-xxl-0 {
                padding: 0 !important
            }

            .p-xxl-1 {
                padding: .25rem !important
            }

            .p-xxl-2 {
                padding: .5rem !important
            }

            .p-xxl-3 {
                padding: 1rem !important
            }

            .p-xxl-4 {
                padding: 1.5rem !important
            }

            .p-xxl-5 {
                padding: 3rem !important
            }

            .px-xxl-0 {
                padding-right: 0 !important;
                padding-left: 0 !important
            }

            .px-xxl-1 {
                padding-right: .25rem !important;
                padding-left: .25rem !important
            }

            .px-xxl-2 {
                padding-right: .5rem !important;
                padding-left: .5rem !important
            }

            .px-xxl-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important
            }

            .px-xxl-4 {
                padding-right: 1.5rem !important;
                padding-left: 1.5rem !important
            }

            .px-xxl-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important
            }

            .py-xxl-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important
            }

            .py-xxl-1 {
                padding-top: .25rem !important;
                padding-bottom: .25rem !important
            }

            .py-xxl-2 {
                padding-top: .5rem !important;
                padding-bottom: .5rem !important
            }

            .py-xxl-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important
            }

            .py-xxl-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important
            }

            .py-xxl-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important
            }

            .pt-xxl-0 {
                padding-top: 0 !important
            }

            .pt-xxl-1 {
                padding-top: .25rem !important
            }

            .pt-xxl-2 {
                padding-top: .5rem !important
            }

            .pt-xxl-3 {
                padding-top: 1rem !important
            }

            .pt-xxl-4 {
                padding-top: 1.5rem !important
            }

            .pt-xxl-5 {
                padding-top: 3rem !important
            }

            .pe-xxl-0 {
                padding-right: 0 !important
            }

            .pe-xxl-1 {
                padding-right: .25rem !important
            }

            .pe-xxl-2 {
                padding-right: .5rem !important
            }

            .pe-xxl-3 {
                padding-right: 1rem !important
            }

            .pe-xxl-4 {
                padding-right: 1.5rem !important
            }

            .pe-xxl-5 {
                padding-right: 3rem !important
            }

            .pb-xxl-0 {
                padding-bottom: 0 !important
            }

            .pb-xxl-1 {
                padding-bottom: .25rem !important
            }

            .pb-xxl-2 {
                padding-bottom: .5rem !important
            }

            .pb-xxl-3 {
                padding-bottom: 1rem !important
            }

            .pb-xxl-4 {
                padding-bottom: 1.5rem !important
            }

            .pb-xxl-5 {
                padding-bottom: 3rem !important
            }

            .ps-xxl-0 {
                padding-left: 0 !important
            }

            .ps-xxl-1 {
                padding-left: .25rem !important
            }

            .ps-xxl-2 {
                padding-left: .5rem !important
            }

            .ps-xxl-3 {
                padding-left: 1rem !important
            }

            .ps-xxl-4 {
                padding-left: 1.5rem !important
            }

            .ps-xxl-5 {
                padding-left: 3rem !important
            }

            .gap-xxl-0 {
                gap: 0 !important
            }

            .gap-xxl-1 {
                gap: .25rem !important
            }

            .gap-xxl-2 {
                gap: .5rem !important
            }

            .gap-xxl-3 {
                gap: 1rem !important
            }

            .gap-xxl-4 {
                gap: 1.5rem !important
            }

            .gap-xxl-5 {
                gap: 3rem !important
            }

            .text-xxl-start {
                text-align: left !important
            }

            .text-xxl-end {
                text-align: right !important
            }

            .text-xxl-center {
                text-align: center !important
            }
        }

        @media (min-width: 1200px) {
            .fs-1 {
                font-size: 2.5rem !important
            }

            .fs-2 {
                font-size: 2rem !important
            }

            .fs-3 {
                font-size: 1.75rem !important
            }

            .fs-4 {
                font-size: 1.5rem !important
            }
        }

        @media print {
            .d-print-inline {
                display: inline !important
            }

            .d-print-inline-block {
                display: inline-block !important
            }

            .d-print-block {
                display: block !important
            }

            .d-print-grid {
                display: grid !important
            }

            .d-print-table {
                display: table !important
            }

            .d-print-table-row {
                display: table-row !important
            }

            .d-print-table-cell {
                display: table-cell !important
            }

            .d-print-flex {
                display: flex !important
            }

            .d-print-inline-flex {
                display: inline-flex !important
            }

            .d-print-none {
                display: none !important
            }
        }

        html * {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        html, body {
            height: 100%
        }

        body {
            display: flex;
            flex-direction: column
        }

        .page-wrapper {
            flex: 1 0 auto
        }

        .footer {
            flex-shrink: 0
        }

        :root {
            --ar-user-selection-color: rgba(var(--ar-primary-rgb), 0.22);
            --ar-heading-color: var(--ar-gray-900);
            --ar-heading-font-weight: 600;
            --ar-heading-link-color: var(--ar-gray-800);
            --ar-heading-link-hover-color: var(--ar-primary);
            --ar-blockquote-color: var(--ar-gray-900);
            --ar-blockquote-font-size: 1.5rem;
            --ar-blockquote-footer-color: var(--ar-gray-900);
            --ar-blockquote-footer-font-size: 1rem;
            --ar-blockquote-mark-size: 3rem;
            --ar-blockquote-mark-color: var(--ar-primary);
            --ar-nav-link-color: var(--ar-gray-800)
        }

        a {
            transition: color .2s ease-in-out
        }

        a:focus {
            outline: none
        }

        a[class^=bg-]:not(.btn), a[class*=bg-]:not(.btn) {
            transition: background-color .25s ease
        }

        img, figure {
            max-width: 100%;
            height: auto;
            vertical-align: middle
        }

        svg {
            max-width: 100%
        }

        .dark-mode-img {
            display: none
        }

        iframe {
            width: 100%
        }

        ::-moz-selection {
            background: var(--ar-user-selection-color)
        }

        ::selection {
            background: var(--ar-user-selection-color)
        }

        ::-moz-selection {
            background: var(--ar-user-selection-color)
        }

        b, strong {
            font-weight: 700
        }

        small, .small {
            font-weight: inherit
        }

        button:focus {
            outline: none
        }

        .container-start {
            margin-left: calc((100% - (1320px - 1.5rem)) / 2)
        }

        .container-end {
            margin-right: calc((100% - (1320px - 1.5rem)) / 2)
        }

        @media (max-width: 1399.98px) {
            .container-start {
                margin-left: calc((100% - (95% - 1.5rem)) / 2)
            }

            .container-end {
                margin-right: calc((100% - (95% - 1.5rem)) / 2)
            }
        }

        @media (max-width: 575.98px) {
            .container-start, .container-end {
                width: 100%;
                padding: 0 .75rem;
                margin-right: auto;
                margin-left: auto
            }
        }

        @font-face {
            font-family: "around-icons";
            src: url("../fonts/around-icons.ttf?den6mh") format("truetype"), url("../fonts/around-icons.woff?den6mh") format("woff"), url("../fonts/around-icons.svg?den6mh#around-icons") format("svg");
            font-weight: normal;
            font-style: normal;
            font-display: block
        }

        [class^=ai-], [class*=" ai-"], [class^=bi-], [class*=" bi-"] {
            display: inline-block;
            font-family: "around-icons" !important;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            vertical-align: middle;
            line-height: 1
        }

        .ai-activity:before {
            content: ""
        }

        .ai-airbnb:before {
            content: ""
        }

        .ai-align-center:before {
            content: ""
        }

        .ai-align-justify:before {
            content: ""
        }

        .ai-align-left:before {
            content: ""
        }

        .ai-align-right:before {
            content: ""
        }

        .ai-anchor:before {
            content: ""
        }

        .ai-apple:before {
            content: ""
        }

        .ai-archive:before {
            content: ""
        }

        .ai-arrow-down-left:before {
            content: ""
        }

        .ai-arrow-down-right:before {
            content: ""
        }

        .ai-arrow-down:before {
            content: ""
        }

        .ai-arrow-left:before {
            content: ""
        }

        .ai-arrow-right:before {
            content: ""
        }

        .ai-arrow-up-left:before {
            content: ""
        }

        .ai-arrow-up-right:before {
            content: ""
        }

        .ai-arrow-up:before {
            content: ""
        }

        .ai-at:before {
            content: ""
        }

        .ai-award:before {
            content: ""
        }

        .ai-bar-chart-1:before {
            content: ""
        }

        .ai-bar-chart-2:before {
            content: ""
        }

        .ai-bar-chart-3:before {
            content: ""
        }

        .ai-battery-1:before {
            content: ""
        }

        .ai-battery-2:before {
            content: ""
        }

        .ai-battery-3:before {
            content: ""
        }

        .ai-battery-charge:before {
            content: ""
        }

        .ai-battery:before {
            content: ""
        }

        .ai-behance:before {
            content: ""
        }

        .ai-bell-minus:before {
            content: ""
        }

        .ai-bell-off:before {
            content: ""
        }

        .ai-bell-plus:before {
            content: ""
        }

        .ai-bell:before {
            content: ""
        }

        .ai-blogger:before {
            content: ""
        }

        .ai-bluetooth:before {
            content: ""
        }

        .ai-book:before {
            content: ""
        }

        .ai-bookmark-minus:before {
            content: ""
        }

        .ai-bookmark-plus:before {
            content: ""
        }

        .ai-bookmark:before {
            content: ""
        }

        .ai-box:before {
            content: ""
        }

        .ai-briefcase-plus:before {
            content: ""
        }

        .ai-briefcase:before {
            content: ""
        }

        .ai-bulb:before {
            content: ""
        }

        .ai-calendar-check:before {
            content: ""
        }

        .ai-calendar-minus:before {
            content: ""
        }

        .ai-calendar-plus:before {
            content: ""
        }

        .ai-calendar-x:before {
            content: ""
        }

        .ai-calendar:before {
            content: ""
        }

        .ai-camera-off:before {
            content: ""
        }

        .ai-camera:before {
            content: ""
        }

        .ai-capsule:before {
            content: ""
        }

        .ai-card:before {
            content: ""
        }

        .ai-cart:before {
            content: ""
        }

        .ai-cast:before {
            content: ""
        }

        .ai-check:before {
            content: ""
        }

        .ai-checks:before {
            content: ""
        }

        .ai-chevron-down:before {
            content: ""
        }

        .ai-chevron-left:before, .bi-chevron-left:before {
            content: ""
        }

        .ai-chevron-right:before, .bi-chevron-right:before {
            content: ""
        }

        .ai-chevron-up:before {
            content: ""
        }

        .ai-chevrons-down:before {
            content: ""
        }

        .ai-chevrons-left:before {
            content: ""
        }

        .ai-chevrons-right:before {
            content: ""
        }

        .ai-chevrons-up:before {
            content: ""
        }

        .ai-chip:before {
            content: ""
        }

        .ai-circle-alert:before {
            content: ""
        }

        .ai-circle-arrow-down:before {
            content: ""
        }

        .ai-circle-arrow-left:before {
            content: ""
        }

        .ai-circle-arrow-right:before {
            content: ""
        }

        .ai-circle-arrow-up:before {
            content: ""
        }

        .ai-circle-check:before {
            content: ""
        }

        .ai-circle-help:before {
            content: ""
        }

        .ai-circle-info:before {
            content: ""
        }

        .ai-circle-minus:before {
            content: ""
        }

        .ai-circle-plus:before {
            content: ""
        }

        .ai-circle-slash:before {
            content: ""
        }

        .ai-circle-x:before {
            content: ""
        }

        .ai-clipboard:before {
            content: ""
        }

        .ai-cloud-download:before {
            content: ""
        }

        .ai-cloud-drizzle:before {
            content: ""
        }

        .ai-cloud-lightning:before {
            content: ""
        }

        .ai-cloud-rain:before {
            content: ""
        }

        .ai-cloud-snow:before {
            content: ""
        }

        .ai-cloud-upload:before {
            content: ""
        }

        .ai-cloud:before {
            content: ""
        }

        .ai-code-curly:before {
            content: ""
        }

        .ai-code:before {
            content: ""
        }

        .ai-codepen:before {
            content: ""
        }

        .ai-collapse:before {
            content: ""
        }

        .ai-command:before {
            content: ""
        }

        .ai-compass:before {
            content: ""
        }

        .ai-copy:before {
            content: ""
        }

        .ai-crop:before {
            content: ""
        }

        .ai-cross:before {
            content: ""
        }

        .ai-crosshair:before {
            content: ""
        }

        .ai-cup-hot:before {
            content: ""
        }

        .ai-cup:before {
            content: ""
        }

        .ai-database:before {
            content: ""
        }

        .ai-delete:before {
            content: ""
        }

        .ai-disc:before {
            content: ""
        }

        .ai-discord:before {
            content: ""
        }

        .ai-discount:before {
            content: ""
        }

        .ai-dislike:before {
            content: ""
        }

        .ai-disqus:before {
            content: ""
        }

        .ai-dollar:before {
            content: ""
        }

        .ai-dots-horizontal:before {
            content: ""
        }

        .ai-dots-vertical:before {
            content: ""
        }

        .ai-dots:before {
            content: ""
        }

        .ai-download:before {
            content: ""
        }

        .ai-drawer:before {
            content: ""
        }

        .ai-dribbble:before {
            content: ""
        }

        .ai-dropbox:before {
            content: ""
        }

        .ai-droplet:before {
            content: ""
        }

        .ai-edit-alt:before {
            content: ""
        }

        .ai-edit:before {
            content: ""
        }

        .ai-emoji-happy:before {
            content: ""
        }

        .ai-emoji-meh:before {
            content: ""
        }

        .ai-emoji-sad:before {
            content: ""
        }

        .ai-emoji-smile:before {
            content: ""
        }

        .ai-emoji-surprise:before {
            content: ""
        }

        .ai-evernote:before {
            content: ""
        }

        .ai-expand:before {
            content: ""
        }

        .ai-external-link:before {
            content: ""
        }

        .ai-facebook:before {
            content: ""
        }

        .ai-fast-forward:before {
            content: ""
        }

        .ai-file-minus:before {
            content: ""
        }

        .ai-file-plus:before {
            content: ""
        }

        .ai-file-text:before {
            content: ""
        }

        .ai-file:before {
            content: ""
        }

        .ai-filter:before {
            content: ""
        }

        .ai-flag:before {
            content: ""
        }

        .ai-flickr:before {
            content: ""
        }

        .ai-folder-minus:before {
            content: ""
        }

        .ai-folder-plus:before {
            content: ""
        }

        .ai-folder:before {
            content: ""
        }

        .ai-foursquare:before {
            content: ""
        }

        .ai-gift:before {
            content: ""
        }

        .ai-github:before {
            content: ""
        }

        .ai-globe:before {
            content: ""
        }

        .ai-google-drive:before {
            content: ""
        }

        .ai-google-play:before {
            content: ""
        }

        .ai-google:before {
            content: ""
        }

        .ai-grid:before {
            content: ""
        }

        .ai-hangouts:before {
            content: ""
        }

        .ai-hard-drive:before {
            content: ""
        }

        .ai-hashtag:before {
            content: ""
        }

        .ai-headphone:before {
            content: ""
        }

        .ai-heart-filled:before {
            content: ""
        }

        .ai-heart:before {
            content: ""
        }

        .ai-help:before {
            content: ""
        }

        .ai-hide:before {
            content: ""
        }

        .ai-home:before {
            content: ""
        }

        .ai-horizontal-align-center:before {
            content: ""
        }

        .ai-horizontal-align-left:before {
            content: ""
        }

        .ai-horizontal-align-right:before {
            content: ""
        }

        .ai-image:before {
            content: ""
        }

        .ai-inbox:before {
            content: ""
        }

        .ai-instagram:before {
            content: ""
        }

        .ai-joystick:before {
            content: ""
        }

        .ai-key:before {
            content: ""
        }

        .ai-kickstarter:before {
            content: ""
        }

        .ai-layer:before {
            content: ""
        }

        .ai-layout-column:before {
            content: ""
        }

        .ai-layout-grid:before {
            content: ""
        }

        .ai-layout-row:before {
            content: ""
        }

        .ai-layout-side:before {
            content: ""
        }

        .ai-like:before {
            content: ""
        }

        .ai-link:before {
            content: ""
        }

        .ai-linkedin:before {
            content: ""
        }

        .ai-list:before {
            content: ""
        }

        .ai-lock-closed:before {
            content: ""
        }

        .ai-lock-open:before {
            content: ""
        }

        .ai-login:before {
            content: ""
        }

        .ai-logout:before {
            content: ""
        }

        .ai-mail:before {
            content: ""
        }

        .ai-map-pin:before {
            content: ""
        }

        .ai-map:before {
            content: ""
        }

        .ai-maximize:before {
            content: ""
        }

        .ai-medium:before {
            content: ""
        }

        .ai-menu:before {
            content: ""
        }

        .ai-message-minus:before {
            content: ""
        }

        .ai-message-plus:before {
            content: ""
        }

        .ai-message:before {
            content: ""
        }

        .ai-messages:before {
            content: ""
        }

        .ai-messenger:before {
            content: ""
        }

        .ai-microphone-off:before {
            content: ""
        }

        .ai-microphone:before {
            content: ""
        }

        .ai-minimize:before {
            content: ""
        }

        .ai-mobile:before {
            content: ""
        }

        .ai-monitor:before {
            content: ""
        }

        .ai-moon:before {
            content: ""
        }

        .ai-movie:before {
            content: ""
        }

        .ai-music:before {
            content: ""
        }

        .ai-note:before {
            content: ""
        }

        .ai-octagon-alert:before {
            content: ""
        }

        .ai-octagon:before {
            content: ""
        }

        .ai-odnoklassniki:before {
            content: ""
        }

        .ai-open-book:before {
            content: ""
        }

        .ai-paint-roll:before {
            content: ""
        }

        .ai-paperclip:before {
            content: ""
        }

        .ai-patreon:before {
            content: ""
        }

        .ai-pause:before {
            content: ""
        }

        .ai-paypal:before {
            content: ""
        }

        .ai-pen:before {
            content: ""
        }

        .ai-pencil:before {
            content: ""
        }

        .ai-phone-call:before {
            content: ""
        }

        .ai-phone-in:before {
            content: ""
        }

        .ai-phone-out:before {
            content: ""
        }

        .ai-phone-x:before {
            content: ""
        }

        .ai-phone:before {
            content: ""
        }

        .ai-pie-chart:before {
            content: ""
        }

        .ai-pin:before {
            content: ""
        }

        .ai-pinterest:before {
            content: ""
        }

        .ai-planet:before {
            content: ""
        }

        .ai-play-filled:before {
            content: ""
        }

        .ai-play-next:before {
            content: ""
        }

        .ai-play-previous:before {
            content: ""
        }

        .ai-play:before {
            content: ""
        }

        .ai-plug:before {
            content: ""
        }

        .ai-power:before {
            content: ""
        }

        .ai-printer:before {
            content: ""
        }

        .ai-pulse:before {
            content: ""
        }

        .ai-quora:before {
            content: ""
        }

        .ai-reddit:before {
            content: ""
        }

        .ai-redo:before {
            content: ""
        }

        .ai-refresh:before {
            content: ""
        }

        .ai-repeat:before {
            content: ""
        }

        .ai-rewind:before {
            content: ""
        }

        .ai-rotate-left:before {
            content: ""
        }

        .ai-rotate-right:before {
            content: ""
        }

        .ai-rss:before {
            content: ""
        }

        .ai-save:before {
            content: ""
        }

        .ai-scan:before {
            content: ""
        }

        .ai-search:before {
            content: ""
        }

        .ai-send:before {
            content: ""
        }

        .ai-server:before {
            content: ""
        }

        .ai-settings:before {
            content: ""
        }

        .ai-share:before {
            content: ""
        }

        .ai-shield:before {
            content: ""
        }

        .ai-shopping-bag:before {
            content: ""
        }

        .ai-show:before {
            content: ""
        }

        .ai-shuffle:before {
            content: ""
        }

        .ai-skype:before {
            content: ""
        }

        .ai-slack:before {
            content: ""
        }

        .ai-slider:before {
            content: ""
        }

        .ai-snapchat:before {
            content: ""
        }

        .ai-soundcloud:before {
            content: ""
        }

        .ai-speaker:before {
            content: ""
        }

        .ai-spotify:before {
            content: ""
        }

        .ai-square-info:before {
            content: ""
        }

        .ai-square-minus:before {
            content: ""
        }

        .ai-square-plus:before {
            content: ""
        }

        .ai-square-x:before {
            content: ""
        }

        .ai-square:before {
            content: ""
        }

        .ai-stack-overflow:before {
            content: ""
        }

        .ai-star-filled:before {
            content: ""
        }

        .ai-star-half:before {
            content: ""
        }

        .ai-star:before {
            content: ""
        }

        .ai-steam:before {
            content: ""
        }

        .ai-sticker:before {
            content: ""
        }

        .ai-sun:before {
            content: ""
        }

        .ai-table-column:before {
            content: ""
        }

        .ai-table-row:before {
            content: ""
        }

        .ai-table:before {
            content: ""
        }

        .ai-tablet:before {
            content: ""
        }

        .ai-tag:before {
            content: ""
        }

        .ai-telegram:before {
            content: ""
        }

        .ai-terminal:before {
            content: ""
        }

        .ai-time:before {
            content: ""
        }

        .ai-tinder:before {
            content: ""
        }

        .ai-toggle-left:before {
            content: ""
        }

        .ai-toggle-right:before {
            content: ""
        }

        .ai-tool:before {
            content: ""
        }

        .ai-trash:before {
            content: ""
        }

        .ai-trello:before {
            content: ""
        }

        .ai-triangle-alert:before {
            content: ""
        }

        .ai-triangle:before {
            content: ""
        }

        .ai-tumblr:before {
            content: ""
        }

        .ai-twitch:before {
            content: ""
        }

        .ai-twitter:before {
            content: ""
        }

        .ai-undo:before {
            content: ""
        }

        .ai-upload:before {
            content: ""
        }

        .ai-user-check:before {
            content: ""
        }

        .ai-user-group:before {
            content: ""
        }

        .ai-user-minus:before {
            content: ""
        }

        .ai-user-plus:before {
            content: ""
        }

        .ai-user-x:before {
            content: ""
        }

        .ai-user:before {
            content: ""
        }

        .ai-vertical-align-bottom:before {
            content: ""
        }

        .ai-vertical-align-center:before {
            content: ""
        }

        .ai-vertical-align-top:before {
            content: ""
        }

        .ai-viber:before {
            content: ""
        }

        .ai-video-off:before {
            content: ""
        }

        .ai-video:before {
            content: ""
        }

        .ai-vimeo:before {
            content: ""
        }

        .ai-vk:before {
            content: ""
        }

        .ai-volume-1:before {
            content: ""
        }

        .ai-volume-2:before {
            content: ""
        }

        .ai-volume-x:before {
            content: ""
        }

        .ai-volume:before {
            content: ""
        }

        .ai-vote-down:before {
            content: ""
        }

        .ai-vote-up:before {
            content: ""
        }

        .ai-wallet:before {
            content: ""
        }

        .ai-wechat:before {
            content: ""
        }

        .ai-whatsapp:before {
            content: ""
        }

        .ai-wifi-off:before {
            content: ""
        }

        .ai-wifi:before {
            content: ""
        }

        .ai-wordpress:before {
            content: ""
        }

        .ai-xing:before {
            content: ""
        }

        .ai-yelp:before {
            content: ""
        }

        .ai-youtube:before {
            content: ""
        }

        .ai-zoom-in:before {
            content: ""
        }

        .ai-zoom-out:before {
            content: ""
        }

        .ai-bulb-alt:before {
            content: ""
        }

        .ai-chart:before {
            content: ""
        }

        .ai-check-alt:before {
            content: ""
        }

        .ai-circle-check-filled:before {
            content: ""
        }

        .ai-dashboard:before {
            content: ""
        }

        .ai-mail-filled:before {
            content: ""
        }

        .ai-rocket:before {
            content: ""
        }

        .ai-quotes:before {
            content: ""
        }

        .ai-search-settings:before {
            content: ""
        }

        .ai-settings-filled:before {
            content: ""
        }

        .ai-tiktok:before {
            content: ""
        }

        .ai-zoom:before {
            content: ""
        }

        .ai-cross-alt:before {
            content: ""
        }

        .ai-cafe:before {
            content: ""
        }

        .ai-flower:before {
            content: ""
        }

        .ai-rug:before {
            content: ""
        }

        .ai-sofa:before {
            content: ""
        }

        .ai-spa:before {
            content: ""
        }

        .ai-towel:before {
            content: ""
        }

        .ai-plus:before {
            content: ""
        }

        .ai-canteen:before {
            content: ""
        }

        .ai-clock:before {
            content: ""
        }

        .ai-parking:before {
            content: ""
        }

        .ai-shower:before {
            content: ""
        }

        .ai-space:before {
            content: ""
        }

        .ai-stairs:before {
            content: ""
        }

        h4, .h4, .fs-4, h5, .h5, .fs-5, h6, .h6, .fs-6 {
            line-height: 1.4
        }

        h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6 {
            font-weight: var(--ar-heading-font-weight)
        }

        h1 > a, .h1 > a, h2 > a, .h2 > a, h3 > a, .h3 > a, h4 > a, .h4 > a, h5 > a, .h5 > a, h6 > a, .h6 > a {
            color: var(--ar-heading-link-color);
            text-decoration: none
        }

        h1 > a:hover, .h1 > a:hover, h2 > a:hover, .h2 > a:hover, h3 > a:hover, .h3 > a:hover, h4 > a:hover, .h4 > a:hover, h5 > a:hover, .h5 > a:hover, h6 > a:hover, .h6 > a:hover {
            color: var(--ar-heading-link-hover-color)
        }

        .blockquote {
            position: relative;
            color: var(--ar-blockquote-color);
            font-size: var(--ar-blockquote-font-size);
            padding-left: calc(var(--ar-blockquote-mark-size) + 1.75rem)
        }

        .blockquote::before {
            position: absolute;
            top: 0;
            left: 0;
            margin: -0.1875rem -0.1875rem 1rem -0.1875rem;
            color: var(--ar-blockquote-mark-color);
            font-family: "around-icons";
            font-size: var(--ar-blockquote-mark-size);
            line-height: 1;
            content: ""
        }

        .blockquote-footer {
            display: flex;
            margin: 0;
            padding-top: .5rem;
            padding-left: calc(var(--ar-blockquote-mark-size) + 1.75rem);
            color: var(--ar-blockquote-footer-color);
            font-size: var(--ar-blockquote-footer-font-size);
            font-weight: 600
        }

        .blockquote-footer::before {
            display: block;
            width: 2rem;
            height: .0625rem;
            margin-top: .75rem;
            margin-right: 1rem;
            background-color: var(--ar-blockquote-footer-color);
            content: ""
        }

        .text-center .blockquote {
            padding-left: 0
        }

        .text-center .blockquote::before {
            position: static;
            display: block
        }

        .text-center .blockquote-footer {
            justify-content: center;
            padding-left: 0
        }

        .text-center .blockquote-footer::before {
            display: none
        }

        .text-end .blockquote {
            padding-left: 0;
            padding-right: calc(var(--ar-blockquote-mark-size) + 1.75rem)
        }

        .text-end .blockquote::before {
            right: 0;
            left: auto
        }

        .text-end .blockquote-footer {
            justify-content: end;
            padding-left: 0;
            padding-right: calc(var(--ar-blockquote-mark-size) + 1.75rem)
        }

        @media (max-width: 575.98px) {
            .blockquote {
                padding-left: calc(var(--ar-blockquote-mark-size) * .75 + 1rem)
            }

            .blockquote::before {
                font-size: calc(var(--ar-blockquote-mark-size) * .75);
                margin-bottom: .75rem
            }

            .blockquote-footer {
                padding-left: calc(var(--ar-blockquote-mark-size) * .75 + 1rem)
            }

            .blockquote-footer::before {
                width: 1.25rem;
                margin-right: .75rem
            }

            .text-end .blockquote, .text-end .blockquote-footer {
                padding-right: calc(var(--ar-blockquote-mark-size) * .75 + 1rem)
            }
        }

        dt {
            color: var(--ar-heading-color);
            font-weight: var(--ar-heading-font-weight)
        }

        body .dark-mode p, body .dark-mode ul, body .dark-mode ol, body .dark-mode span, body .dark-mode dd {
            color: var(--ar-body-color)
        }

        del.text-muted {
            color: var(--ar-gray-500) !important
        }

        :not(pre) > code[class*=language-], pre[class*=language-], pre {
            --ar-pre-padding-y: 1.5rem;
            --ar-pre-padding-x: 1rem;
            --ar-pre-border-width: var(--ar-border-width);
            --ar-pre-border-color: rgba(255, 255, 255, 0.13);
            --ar-pre-bg: #121519;
            --ar-pre-line-numbers-border-width: var(--ar-border-width);
            --ar-pre-line-numbers-border-color: rgba(255, 255, 255, 0.13);
            --ar-pre-line-numbers-color: rgba(255, 255, 255, 0.4);
            --ar-pre-tag-color: #47abfd;
            --ar-pre-comment-color: rgba(255, 255, 255, .4);
            --ar-pre-attr-name-color: #a8e1ff;
            --ar-pre-attr-value-color: #f0c93e;
            --ar-pre-class-name-color: #35bcba;
            margin: 0;
            padding: 1.5rem 1rem;
            border: var(--ar-border-width) solid rgba(255, 255, 255, .13);
            border-radius: var(--ar-border-radius-xl);
            background-color: #121519;
            font-size: .875em
        }

        .code-toolbar :not(pre) > code[class*=language-], .code-toolbar pre[class*=language-] {
            padding-top: calc(var(--ar-pre-padding-y) * 1.5)
        }

        code[class*=language-], pre[class*=language-], pre {
            --ar-pre-color: #fff;
            color: var(--ar-pre-color);
            text-shadow: none
        }

        .line-numbers .line-numbers-rows {
            border-right: var(--ar-pre-line-numbers-border-width) solid var(--ar-pre-line-numbers-border-color)
        }

        .line-numbers .line-numbers-rows > span::before {
            color: var(--ar-pre-line-numbers-color)
        }

        div.code-toolbar > .toolbar {
            opacity: 1
        }

        div.code-toolbar > .toolbar > .toolbar-item > a, div.code-toolbar > .toolbar > .toolbar-item > button, div.code-toolbar > .toolbar .toolbar-item > span {
            display: inline-block;
            margin: .375rem .5rem;
            padding: .25rem .75rem;
            transition: color .2s ease-in-out, background-color .2s ease-in-out, border-color .2s ease-in-out, box-shadow .2s ease-in-out;
            border-radius: calc(var(--ar-border-radius) * .75);
            border: 1px solid rgba(var(--ar-primary-rgb), 0.35);
            background-color: rgba(68, 140, 116, .12);
            color: var(--ar-primary);
            font-size: calc(var(--ar-body-font-size) * .75);
            font-weight: 700;
            box-shadow: none
        }

        div.code-toolbar > .toolbar > .toolbar-item > a:focus, div.code-toolbar > .toolbar > .toolbar-item > button:focus, div.code-toolbar > .toolbar .toolbar-item > span:focus {
            outline: none;
            box-shadow: none
        }

        div.code-toolbar > .toolbar > .toolbar-item > a:hover, div.code-toolbar > .toolbar > .toolbar-item > button:hover, div.code-toolbar > .toolbar .toolbar-item > span:hover {
            background-color: var(--ar-primary);
            color: #fff !important
        }

        .token.boolean, .token.constant, .token.deleted, .token.number, .token.property, .token.symbol, .token.tag {
            color: var(--ar-pre-tag-color)
        }

        .token.cdata, .token.comment, .token.doctype, .token.prolog {
            color: var(--ar-pre-comment-color)
        }

        .token.attr-name, .token.builtin, .token.char, .token.inserted, .token.selector {
            color: var(--ar-pre-attr-name-color)
        }

        .token.atrule, .token.attr-value, .token.keyword, .token.string {
            color: var(--ar-pre-attr-value-color)
        }

        .language-css .token.string, .style .token.string, .token.entity, .token.operator, .token.url, .token.class-name, .token.function {
            color: var(--ar-pre-class-name-color);
            background: none
        }

        kbd {
            border-radius: .5rem
        }

        .table {
            --ar-table-th-color: var(--ar-gray-900)
        }

        .table thead th, .table tbody th {
            color: var(--ar-table-th-color) !important
        }

        .table-dark {
            --ar-table-th-color: #fff;
            --ar-table-color: rgba(255, 255, 255, 0.7);
            --ar-table-striped-color: var(--ar-table-dark-color)
        }

        .table > :not(:last-child) > :last-child > * {
            border-bottom-color: #c3d0dc
        }

        .table.table-dark > :not(:last-child) > :last-child > * {
            border-bottom-color: rgba(255, 255, 255, .3)
        }

        .table > :not(:first-child) {
            border-top: 0
        }

        input[type=search]::-webkit-search-decoration, input[type=search]::-webkit-search-cancel-button, input[type=search]::-webkit-search-results-button, input[type=search]::-webkit-search-results-decoration {
            display: none
        }

        input[type=time]::-webkit-calendar-picker-indicator {
            background: none
        }

        .form-control:disabled, .form-select:disabled {
            cursor: not-allowed;
            box-shadow: none !important
        }

        .form-control[readonly], .form-control:disabled {
            box-shadow: none !important
        }

        label {
            font-size: calc(var(--ar-body-font-size) * .875)
        }

        .form-floating > label {
            color: var(--ar-gray-500);
            font-weight: 500
        }

        .input-group-text .form-check-input {
            margin-top: 0
        }

        .form-switch {
            margin-bottom: .5rem
        }

        .form-switch .form-check-input {
            height: 1.5rem;
            margin-top: unset;
            border: unset;
            background-color: var(--ar-gray-500);
            filter: none
        }

        .form-switch .form-check-input:checked {
            background-color: var(--ar-primary)
        }

        .form-switch .form-check-input:disabled {
            box-shadow: none
        }

        .form-switch.mode-switch {
            display: flex;
            padding-left: 0;
            margin-bottom: 0
        }

        .form-switch.mode-switch .form-check-label {
            transition: color .15s ease-in-out;
            font-size: 1rem;
            font-weight: 500
        }

        .form-switch.mode-switch .form-check-label:first-of-type {
            order: 1;
            margin-right: .625rem;
            color: var(--ar-primary)
        }

        .form-switch.mode-switch .form-check-label:last-of-type {
            order: 3;
            margin-left: .625rem
        }

        .form-switch.mode-switch .form-check-input {
            order: 2;
            margin-left: 0;
            background-color: var(--ar-primary) !important
        }

        .form-switch.mode-switch .form-check-input:checked ~ .form-check-label:first-of-type {
            color: var(--ar-body-color)
        }

        .form-switch.mode-switch .form-check-input:checked ~ .form-check-label:last-of-type {
            color: var(--ar-primary)
        }

        .bg-primary .form-check-input:checked {
            border-color: #fff !important;
            background-color: #fff !important;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23448c74' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3l6-6'/%3e%3c/svg%3e") !important
        }

        .form-control-flush, .form-select-flush {
            padding-right: .75rem;
            padding-left: .75rem;
            border: 0;
            color: var(--ar-gray-800);
            font-weight: 500
        }

        .form-select-flush {
            padding-right: 2.25rem
        }

        .password-toggle {
            position: relative
        }

        .password-toggle .form-control {
            padding-right: 3rem
        }

        .password-toggle-btn {
            position: absolute;
            top: 50%;
            right: .625rem;
            margin-bottom: 0;
            padding: .5rem;
            transform: translateY(-50%);
            font-size: 1rem;
            line-height: 1;
            cursor: pointer
        }

        .password-toggle-btn .password-toggle-indicator {
            transition: color .2s ease-in-out;
            color: var(--ar-gray-600);
            font-family: "around-icons";
            font-size: 1.25em;
            font-style: normal
        }

        .password-toggle-btn .password-toggle-indicator::before {
            content: ""
        }

        .password-toggle-btn .password-toggle-indicator:hover {
            color: var(--ar-gray-800)
        }

        .password-toggle-btn .password-toggle-check {
            position: absolute;
            left: 0;
            z-index: -1;
            width: 1rem;
            height: 1.25rem;
            opacity: 0
        }

        .password-toggle-btn .password-toggle-check:checked ~ .password-toggle-indicator::before {
            content: ""
        }

        .valid-feedback, .invalid-feedback, .valid-tooltip, .invalid-tooltip {
            font-weight: 500
        }

        .valid-tooltip {
            position: static;
            background-color: rgba(63, 202, 144, .1);
            color: #3fca90
        }

        .invalid-tooltip {
            position: static;
            background-color: rgba(237, 80, 80, .1);
            color: #ed5050
        }

        .was-validated :invalid ~ .invalid-tooltip, .is-invalid ~ .invalid-tooltip, .was-validated :valid ~ .valid-tooltip, .is-valid ~ .valid-tooltip {
            display: table
        }

        .was-validated .password-toggle .form-control:invalid, .was-validated .password-toggle .form-control.is-invalid, .was-validated .password-toggle .form-control:valid, .was-validated .password-toggle .form-control.is-valid {
            padding-right: 4rem
        }

        .was-validated .password-toggle .form-control:invalid + .password-toggle-btn, .was-validated .password-toggle .form-control.is-invalid + .password-toggle-btn, .was-validated .password-toggle .form-control:valid + .password-toggle-btn, .was-validated .password-toggle .form-control.is-valid + .password-toggle-btn {
            right: 2.1rem
        }

        .was-validated .input-group .form-control:invalid, .was-validated .input-group .form-control:valid {
            z-index: 4
        }

        .was-validated :valid:not(:required):not(.form-check-input):not(.btn), .is-valid:not(:required):not(.form-check-input):not(.btn) {
            border-color: var(--ar-gray-400) !important;
            background: none
        }

        .was-validated :valid:not(:required):not(.form-check-input):not(.btn):focus, .is-valid:not(:required):not(.form-check-input):not(.btn):focus {
            border-color: var(--ar-gray-700) !important
        }

        .was-validated .input-group :valid:not(:required):not(.btn) {
            border-color: rgba(0, 0, 0, 0) !important
        }

        .was-validated .input-group :valid:not(:required):not(.btn):focus {
            border-color: rgba(0, 0, 0, 0) !important
        }

        .was-validated .form-check-input:valid:checked, .form-check-input.is-valid:checked {
            background-color: var(--ar-primary);
            border-color: var(--ar-primary)
        }

        .was-validated .form-check-input:invalid:checked, .form-check-input.is-invalid:checked {
            background-color: rgba(0, 0, 0, 0);
            border-color: 1px solid var(--ar-gray-500)
        }

        .was-validated .form-check-input:valid ~ .form-check-label, .was-validated .form-check-input.is-valid ~ .form-check-label {
            color: inherit
        }

        .range-slider {
            --ar-range-slider-height: 0.1875rem;
            --ar-range-slider-bg: var(--ar-border-color);
            --ar-range-slider-connect-bg: var(--ar-primary);
            --ar-range-slider-handle-size: 1.0625rem;
            --ar-range-slider-handle-bg: var(--ar-primary);
            --ar-range-slider-handle-border-radius: 50%;
            --ar-range-slider-pips-color: var(--ar-body-color);
            --ar-range-slider-pips-font-size: calc(var(--ar-body-font-size) * 0.75);
            --ar-range-slider-pips-border-width: var(--ar-border-width);
            --ar-range-slider-pips-border-color: #d0dae4;
            --ar-range-slider-tooltip-padding-y: 0.375rem;
            --ar-range-slider-tooltip-padding-x: 0.75rem;
            --ar-range-slider-tooltip-bg: transparent;
            --ar-range-slider-tooltip-color: var(--ar-gray-800);
            --ar-range-slider-tooltip-font-size: calc(var(--ar-body-font-size) * 0.875);
            --ar-range-slider-tooltip-border-radius: var(--ar-border-radius-sm)
        }

        .range-slider-ui {
            height: var(--ar-range-slider-height);
            margin: 0;
            margin-top: 3.25rem;
            margin-right: 0;
            margin-bottom: 1.75rem;
            margin-left: 0;
            border: 0;
            background-color: var(--ar-range-slider-bg);
            box-shadow: none
        }

        [data-pips] .range-slider-ui {
            margin-bottom: 3.5rem
        }

        .range-slider-ui .noUi-connect {
            background-color: var(--ar-range-slider-connect-bg)
        }

        .range-slider-ui .noUi-handle {
            top: 50%;
            width: var(--ar-range-slider-handle-size);
            height: var(--ar-range-slider-handle-size);
            margin-top: calc(var(--ar-range-slider-handle-size) * -0.5);
            border: 0;
            border-radius: var(--ar-range-slider-handle-border-radius);
            background-color: var(--ar-range-slider-handle-bg);
            box-shadow: none
        }

        .range-slider-ui .noUi-handle::before, .range-slider-ui .noUi-handle::after {
            display: none
        }

        .range-slider-ui .noUi-handle:focus {
            outline: none
        }

        .range-slider-ui .noUi-marker-normal {
            display: none
        }

        .range-slider-ui .noUi-marker-horizontal.noUi-marker {
            width: var(--ar-range-slider-pips-border-width);
            background-color: var(--ar-range-slider-pips-border-color)
        }

        .range-slider-ui .noUi-marker-horizontal.noUi-marker-large {
            height: .75rem
        }

        .range-slider-ui .noUi-value {
            padding-top: .125rem;
            color: var(--ar-range-slider-pips-color);
            font-size: var(--ar-range-slider-pips-font-size)
        }

        .range-slider-ui .noUi-tooltip {
            padding: var(--ar-range-slider-tooltip-padding-y) var(--ar-range-slider-tooltip-padding-x);
            border: 0;
            background-color: var(--ar-range-slider-tooltip-bg);
            color: var(--ar-range-slider-tooltip-color);
            font-size: var(--ar-range-slider-tooltip-font-size);
            font-weight: 500;
            line-height: 1.2;
            border-radius: var(--ar-range-slider-tooltip-border-radius)
        }

        html:not([dir=rtl]) .range-slider-ui.noUi-horizontal .noUi-handle {
            right: calc(var(--ar-range-slider-handle-size) * -0.5)
        }

        .subscription-status {
            display: table;
            border-radius: calc(var(--ar-border-radius) * .5);
            font-size: .8125rem
        }

        .subscription-status.status-success, .subscription-status.status-error {
            margin-top: .5rem;
            padding: .375rem .75rem
        }

        .subscription-status.status-success {
            background-color: rgba(63, 202, 144, .1);
            color: #2ea875
        }

        .subscription-status.status-error {
            background-color: rgba(237, 80, 80, .1);
            color: #ed5050
        }

        .credit-card-icon {
            width: 40px;
            height: 26px;
            background-image: url(../img/credit-cards.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 0
        }

        .credit-card-icon.amex {
            background-position: 0 -52px !important
        }

        .credit-card-icon.diners {
            background-position: 0 -78px !important
        }

        .credit-card-icon.discover {
            background-position: 0 -104px !important
        }

        .credit-card-icon.jcb {
            background-position: 0 -130px !important
        }

        .credit-card-icon.mastercard {
            background-position: 0 -156px !important
        }

        .credit-card-icon.visa {
            background-position: 0 -182px !important
        }

        .btn-check + .btn-outline-secondary {
            --ar-btn-hover-bg: transparent;
            --ar-btn-active-bg: transparent
        }

        .btn-check + .btn-outline-secondary:not(.btn-icon) {
            --ar-btn-active-border-color: var(--ar-primary);
            --ar-btn-active-color: var(--ar-primary)
        }

        .btn-check + .btn-icon.btn-outline-secondary {
            --ar-btn-border-color: transparent;
            --ar-btn-hover-border-color: transparent
        }

        .count-input {
            display: inline-flex;
            align-items: center
        }

        .count-input .form-control {
            width: 1.5rem;
            padding: 0;
            border: 0;
            background: 0 !important;
            font-size: var(--ar-body-font-size);
            font-weight: 500;
            text-align: center;
            -moz-appearance: textfield
        }

        .count-input .form-control::-webkit-outer-spin-button, .count-input .form-control::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0
        }

        .count-input .btn {
            --ar-btn-color: var(--ar-gray-800) !important;
            --ar-btn-hover-color: var(--ar-primary) !important;
            --ar-btn-active-color: var(--ar-primary) !important;
            --ar-btn-hover-border-color: transparent;
            --ar-btn-active-border-color: transparent;
            --ar-btn-font-weight: 500
        }

        .input-group {
            --ar-input-group-padding-y: 0.5rem;
            --ar-input-group-padding-x: 0.5rem;
            --ar-input-group-border-color: var(--ar-gray-400);
            --ar-input-group-border-width: var(--ar-border-width);
            --ar-input-group-border-radius: var(--ar-border-radius-lg);
            padding: var(--ar-input-group-padding-y) var(--ar-input-group-padding-x);
            border: var(--ar-input-group-border-width) solid var(--ar-input-group-border-color);
            border-radius: var(--ar-input-group-border-radius)
        }

        .input-group .form-control, .input-group .form-select {
            border-color: rgba(0, 0, 0, 0) !important;
            border-radius: 0 !important
        }

        .input-group [class^=ai-], .input-group [class*=" ai-"] {
            font-size: 1.25em
        }

        .input-group .btn {
            --ar-btn-padding-y: 0.825rem;
            --ar-btn-padding-x: 1.75rem;
            --ar-btn-border-radius: var(--ar-border-radius);
            padding: var(--ar-btn-padding-y) var(--ar-btn-padding-x)
        }

        .input-group .btn:not(.rounded-pill) {
            border-radius: var(--ar-btn-border-radius) !important
        }

        .input-group-lg {
            --ar-input-group-border-radius: var(--ar-border-radius-xl)
        }

        .input-group-lg .btn {
            --ar-btn-padding-y: 1rem;
            --ar-btn-padding-x: 2rem;
            --ar-btn-border-radius: var(--ar-border-radius-lg)
        }

        .input-group-sm {
            --ar-input-group-border-radius: var(--ar-border-radius)
        }

        .input-group-sm .btn {
            --ar-btn-padding-y: 0.575rem;
            --ar-btn-padding-x: 1.25rem;
            --ar-btn-border-radius: var(--ar-border-radius-sm)
        }

        .input-group-text {
            border-radius: 0 !important
        }

        .input-group-text + .form-control, .input-group-text + .form-select, .input-group-text + .input-group-text {
            padding-left: 0
        }

        .form-control + .input-group-text, .form-select + .input-group-text {
            padding-left: 0
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center
        }

        .btn:not([class^=btn-outline-]):not([class*=" btn-outline-"]):not(.btn-secondary):not(.btn-light):not(.btn-link) {
            --ar-btn-color: #fff
        }

        .btn > [class^=ai-], .btn > [class*=" ai-"] {
            font-size: 1.25em
        }

        .btn-primary {
            --ar-btn-hover-color: #fff;
            --ar-btn-active-color: #fff;
            --ar-btn-hover-bg: #37715d;
            --ar-btn-active-bg: #37715d;
            --ar-btn-hover-border-color: #37715d;
            --ar-btn-active-border-color: #37715d;
            --ar-btn-disabled-color: #fff
        }

        .btn-secondary {
            --ar-btn-hover-color: #fff;
            --ar-btn-active-color: #fff;
            --ar-btn-hover-bg: #d3dde6;
            --ar-btn-active-bg: #d3dde6;
            --ar-btn-hover-border-color: #d3dde6;
            --ar-btn-active-border-color: #d3dde6;
            --ar-btn-disabled-color: #fff
        }

        .btn-success {
            --ar-btn-hover-color: #fff;
            --ar-btn-active-color: #fff;
            --ar-btn-hover-bg: #31b07b;
            --ar-btn-active-bg: #31b07b;
            --ar-btn-hover-border-color: #31b07b;
            --ar-btn-active-border-color: #31b07b;
            --ar-btn-disabled-color: #fff
        }

        .btn-info {
            --ar-btn-hover-color: #fff;
            --ar-btn-active-color: #fff;
            --ar-btn-hover-bg: #316bb0;
            --ar-btn-active-bg: #316bb0;
            --ar-btn-hover-border-color: #316bb0;
            --ar-btn-active-border-color: #316bb0;
            --ar-btn-disabled-color: #fff
        }

        .btn-warning {
            --ar-btn-hover-color: #fff;
            --ar-btn-active-color: #fff;
            --ar-btn-hover-bg: #e9c02b;
            --ar-btn-active-bg: #e9c02b;
            --ar-btn-hover-border-color: #e9c02b;
            --ar-btn-active-border-color: #e9c02b;
            --ar-btn-disabled-color: #fff
        }

        .btn-danger {
            --ar-btn-hover-color: #fff;
            --ar-btn-active-color: #fff;
            --ar-btn-hover-bg: #e92b2b;
            --ar-btn-active-bg: #e92b2b;
            --ar-btn-hover-border-color: #e92b2b;
            --ar-btn-active-border-color: #e92b2b;
            --ar-btn-disabled-color: #fff
        }

        .btn-light, .dark-mode .btn-dark:not(.ignore-dark-mode), .card-hover-primary:hover .btn-primary {
            --ar-btn-hover-color: #fff;
            --ar-btn-active-color: #fff;
            --ar-btn-hover-bg: #ebebeb;
            --ar-btn-active-bg: #ebebeb;
            --ar-btn-hover-border-color: #ebebeb;
            --ar-btn-active-border-color: #ebebeb;
            --ar-btn-disabled-color: #fff
        }

        .btn-dark {
            --ar-btn-hover-color: #fff;
            --ar-btn-active-color: #fff;
            --ar-btn-hover-bg: #010101;
            --ar-btn-active-bg: #010101;
            --ar-btn-hover-border-color: #010101;
            --ar-btn-active-border-color: #010101;
            --ar-btn-disabled-color: #fff
        }

        .btn-secondary, .btn-light, .dark-mode .btn-dark:not(.ignore-dark-mode), .card-hover-primary:hover .btn-primary {
            --ar-btn-color: #434a57 !important;
            --ar-btn-hover-color: #121519 !important;
            --ar-btn-active-color: #121519 !important;
            --ar-btn-disabled-color: #576071
        }

        [class^=btn-outline-], [class*=" btn-outline-"] {
            --ar-btn-hover-color: #fff;
            --ar-btn-active-color: #fff
        }

        .btn-outline-secondary {
            --ar-btn-color: #434a57;
            --ar-btn-hover-color: #121519;
            --ar-btn-active-color: #121519;
            --ar-btn-hover-bg: #edf1f5;
            --ar-btn-active-bg: #edf1f5;
            --ar-btn-border-color: #d7dde2;
            --ar-btn-hover-border-color: #d7dde2;
            --ar-btn-active-border-color: #d7dde2;
            --ar-btn-disabled-color: #576071;
            --ar-btn-disabled-border-color: #e3e9ef
        }

        .btn-outline-light, .dark-mode .btn-outline-dark:not(.ignore-dark-mode), .card-hover-primary:hover .btn-outline-primary {
            --ar-btn-hover-color: #434a57;
            --ar-btn-active-color: #434a57;
            --ar-btn-hover-bg: #fff;
            --ar-btn-active-bg: #fff
        }

        .btn-link {
            --ar-btn-font-weight: 600;
            text-decoration: none
        }

        .btn-icon {
            --ar-btn-size: 3rem;
            flex-shrink: 0;
            width: var(--ar-btn-size);
            height: var(--ar-btn-size);
            padding: 0
        }

        .btn-icon.btn-xs {
            --ar-btn-size: 1rem;
            --ar-btn-font-size: calc(var(--ar-body-font-size) * 0.75)
        }

        .btn-icon.btn-sm, .btn-group-sm > .btn-icon.btn {
            --ar-btn-size: 2.25rem
        }

        .btn-icon.btn-lg, .btn-group-lg > .btn-icon.btn {
            --ar-btn-size: 3.5rem
        }

        .btn-icon.btn-xl {
            --ar-btn-size: 4.5rem;
            --ar-btn-font-size: calc(var(--ar-body-font-size) * 1.125)
        }

        .btn-icon > .ai-play, .btn-icon > .ai-play-filled {
            margin-left: .1875rem
        }

        .btn-group .btn {
            --ar-btn-padding-x: 1.3125rem
        }

        .btn-group .btn.dropdown-toggle-split {
            --ar-btn-padding-x: 0.875rem;
            padding-right: var(--ar-btn-padding-x);
            padding-left: var(--ar-btn-padding-x)
        }

        .btn-group-lg .btn, .btn-group .btn-lg {
            --ar-btn-padding-x: 1.5rem
        }

        .btn-group-lg .btn.dropdown-toggle-split, .btn-group .btn-lg.dropdown-toggle-split {
            --ar-btn-padding-x: 1rem;
            padding-right: var(--ar-btn-padding-x);
            padding-left: var(--ar-btn-padding-x)
        }

        .btn-group-sm .btn, .btn-group .btn-sm {
            --ar-btn-padding-x: 0.9375rem
        }

        .btn-group-sm .btn.dropdown-toggle-split, .btn-group .btn-sm.dropdown-toggle-split {
            --ar-btn-padding-x: 0.625rem;
            padding-right: var(--ar-btn-padding-x);
            padding-left: var(--ar-btn-padding-x)
        }

        .btn-group > .btn:not(:first-child), .btn-group > .btn-group:not(:first-child) {
            margin-left: calc(var(--ar-border-width) * -1)
        }

        .btn-close {
            transition: opacity .25s ease-in-out
        }

        .btn-more::before {
            content: attr(data-hide-label)
        }

        .btn-more::after {
            display: inline-block;
            margin-left: .25rem;
            will-change: transform;
            transition: transform .2s ease-in-out;
            transform: rotate(180deg);
            font-family: "around-icons";
            font-size: 1.5em;
            content: ""
        }

        .btn-more.fs-2::after, .btn-more.fs-3::after, .btn-more.fs-4::after, .btn-more.fs-5::after {
            font-size: 1em
        }

        .btn-more.h2::after, .btn-more.h3::after, .btn-more.h4::after, .btn-more.h5::after, .btn-more.h6::after {
            font-weight: 500
        }

        .btn-more.collapsed::before {
            content: attr(data-show-label)
        }

        .btn-more.collapsed::after {
            transform: none
        }

        .btn-scroll-top {
            --ar-btn-scroll-top-size: 2.5rem;
            --ar-btn-scroll-top-font-size: 1.25rem;
            --ar-btn-scroll-top-color: var(--ar-gray-800);
            --ar-btn-scroll-top-bg: var(--ar-body-bg);
            --ar-btn-scroll-top-border-radius: 50%;
            --ar-btn-scroll-top-box-shadow: 0 0.275rem 1.125rem rgba(18, 21, 25, 0.1);
            position: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
            right: 1rem;
            bottom: 1rem;
            width: var(--ar-btn-scroll-top-size);
            height: var(--ar-btn-scroll-top-size);
            transition: transform .25s ease-in-out, opacity .25s;
            transform: scale(0);
            border-radius: 50%;
            color: var(--ar-btn-scroll-top-color) !important;
            font-size: var(--ar-btn-scroll-top-font-size);
            box-shadow: var(--ar-btn-scroll-top-box-shadow);
            text-decoration: none;
            opacity: 0;
            z-index: 1030
        }

        .btn-scroll-top::before {
            position: absolute;
            top: .0625rem;
            left: .0625rem;
            width: calc(var(--ar-btn-scroll-top-size) - .125rem);
            height: calc(var(--ar-btn-scroll-top-size) - .125rem);
            background-color: var(--ar-btn-scroll-top-bg);
            border-radius: 50%;
            z-index: -1;
            content: ""
        }

        .btn-scroll-top > svg {
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            transform: rotate(90deg)
        }

        .btn-scroll-top.show {
            transform: scale(1);
            opacity: 1
        }

        .btn-airbnb:hover, .btn-airbnb:focus, .btn-airbnb:active {
            border-color: #fd5c63 !important;
            background-color: #fd5c63 !important;
            color: #fff !important
        }

        .btn-behance:hover, .btn-behance:focus, .btn-behance:active {
            border-color: #1769ff !important;
            background-color: #1769ff !important;
            color: #fff !important
        }

        .btn-blogger:hover, .btn-blogger:focus, .btn-blogger:active {
            border-color: #f57d00 !important;
            background-color: #f57d00 !important;
            color: #fff !important
        }

        .btn-codepen:hover, .btn-codepen:focus, .btn-codepen:active {
            border-color: #0ebeff !important;
            background-color: #0ebeff !important;
            color: #fff !important
        }

        .btn-discord:hover, .btn-discord:focus, .btn-discord:active {
            border-color: #7289da !important;
            background-color: #7289da !important;
            color: #fff !important
        }

        .btn-disqus:hover, .btn-disqus:focus, .btn-disqus:active {
            border-color: #2e9fff !important;
            background-color: #2e9fff !important;
            color: #fff !important
        }

        .btn-dribbble:hover, .btn-dribbble:focus, .btn-dribbble:active {
            border-color: #ea4c89 !important;
            background-color: #ea4c89 !important;
            color: #fff !important
        }

        .btn-dropbox:hover, .btn-dropbox:focus, .btn-dropbox:active {
            border-color: #007ee5 !important;
            background-color: #007ee5 !important;
            color: #fff !important
        }

        .btn-evernote:hover, .btn-evernote:focus, .btn-evernote:active {
            border-color: #2dbe60 !important;
            background-color: #2dbe60 !important;
            color: #fff !important
        }

        .btn-facebook:hover, .btn-facebook:focus, .btn-facebook:active {
            border-color: #1877f2 !important;
            background-color: #1877f2 !important;
            color: #fff !important
        }

        .btn-flickr:hover, .btn-flickr:focus, .btn-flickr:active {
            border-color: #0063dc !important;
            background-color: #0063dc !important;
            color: #fff !important
        }

        .btn-foursquare:hover, .btn-foursquare:focus, .btn-foursquare:active {
            border-color: #f94877 !important;
            background-color: #f94877 !important;
            color: #fff !important
        }

        .btn-github:hover, .btn-github:focus, .btn-github:active {
            border-color: #4078c0 !important;
            background-color: #4078c0 !important;
            color: #fff !important
        }

        .btn-google:hover, .btn-google:focus, .btn-google:active {
            border-color: #ea4335 !important;
            background-color: #ea4335 !important;
            color: #fff !important
        }

        .btn-hangouts:hover, .btn-hangouts:focus, .btn-hangouts:active {
            border-color: #0f9d58 !important;
            background-color: #0f9d58 !important;
            color: #fff !important
        }

        .btn-instagram:hover, .btn-instagram:focus, .btn-instagram:active {
            border-color: #405de6 !important;
            background-color: #405de6 !important;
            color: #fff !important
        }

        .btn-kickstarter:hover, .btn-kickstarter:focus, .btn-kickstarter:active {
            border-color: #2bde73 !important;
            background-color: #2bde73 !important;
            color: #fff !important
        }

        .btn-linkedin:hover, .btn-linkedin:focus, .btn-linkedin:active {
            border-color: #0077b5 !important;
            background-color: #0077b5 !important;
            color: #fff !important
        }

        .btn-medium:hover, .btn-medium:focus, .btn-medium:active {
            border-color: #00ab6c !important;
            background-color: #00ab6c !important;
            color: #fff !important
        }

        .btn-messenger:hover, .btn-messenger:focus, .btn-messenger:active {
            border-color: #0084ff !important;
            background-color: #0084ff !important;
            color: #fff !important
        }

        .btn-odnoklassniki:hover, .btn-odnoklassniki:focus, .btn-odnoklassniki:active {
            border-color: #ed812b !important;
            background-color: #ed812b !important;
            color: #fff !important
        }

        .btn-patreon:hover, .btn-patreon:focus, .btn-patreon:active {
            border-color: #f96854 !important;
            background-color: #f96854 !important;
            color: #fff !important
        }

        .btn-pinterest:hover, .btn-pinterest:focus, .btn-pinterest:active {
            border-color: #e60023 !important;
            background-color: #e60023 !important;
            color: #fff !important
        }

        .btn-quora:hover, .btn-quora:focus, .btn-quora:active {
            border-color: #a82400 !important;
            background-color: #a82400 !important;
            color: #fff !important
        }

        .btn-reddit:hover, .btn-reddit:focus, .btn-reddit:active {
            border-color: #ff4500 !important;
            background-color: #ff4500 !important;
            color: #fff !important
        }

        .btn-skype:hover, .btn-skype:focus, .btn-skype:active {
            border-color: #00aff0 !important;
            background-color: #00aff0 !important;
            color: #fff !important
        }

        .btn-slack:hover, .btn-slack:focus, .btn-slack:active {
            border-color: #611f69 !important;
            background-color: #611f69 !important;
            color: #fff !important
        }

        .btn-snapchat:hover, .btn-snapchat:focus, .btn-snapchat:active {
            border-color: #fffc00 !important;
            background-color: #fffc00 !important;
            color: #fff !important
        }

        .btn-soundcloud:hover, .btn-soundcloud:focus, .btn-soundcloud:active {
            border-color: #f80 !important;
            background-color: #f80 !important;
            color: #fff !important
        }

        .btn-spotify:hover, .btn-spotify:focus, .btn-spotify:active {
            border-color: #1db954 !important;
            background-color: #1db954 !important;
            color: #fff !important
        }

        .btn-stack-overflow:hover, .btn-stack-overflow:focus, .btn-stack-overflow:active {
            border-color: #f48024 !important;
            background-color: #f48024 !important;
            color: #fff !important
        }

        .btn-steam:hover, .btn-steam:focus, .btn-steam:active {
            border-color: #00adee !important;
            background-color: #00adee !important;
            color: #fff !important
        }

        .btn-telegram:hover, .btn-telegram:focus, .btn-telegram:active {
            border-color: #08c !important;
            background-color: #08c !important;
            color: #fff !important
        }

        .btn-tiktok:hover, .btn-tiktok:focus, .btn-tiktok:active {
            border-color: #fe2c55 !important;
            background-color: #fe2c55 !important;
            color: #fff !important
        }

        .btn-tinder:hover, .btn-tinder:focus, .btn-tinder:active {
            border-color: #fe3c72 !important;
            background-color: #fe3c72 !important;
            color: #fff !important
        }

        .btn-trello:hover, .btn-trello:focus, .btn-trello:active {
            border-color: #0079bf !important;
            background-color: #0079bf !important;
            color: #fff !important
        }

        .btn-tumblr:hover, .btn-tumblr:focus, .btn-tumblr:active {
            border-color: #35465c !important;
            background-color: #35465c !important;
            color: #fff !important
        }

        .btn-twitch:hover, .btn-twitch:focus, .btn-twitch:active {
            border-color: #9146ff !important;
            background-color: #9146ff !important;
            color: #fff !important
        }

        .btn-twitter:hover, .btn-twitter:focus, .btn-twitter:active {
            border-color: #1da1f2 !important;
            background-color: #1da1f2 !important;
            color: #fff !important
        }

        .btn-viber:hover, .btn-viber:focus, .btn-viber:active {
            border-color: #59267c !important;
            background-color: #59267c !important;
            color: #fff !important
        }

        .btn-vimeo:hover, .btn-vimeo:focus, .btn-vimeo:active {
            border-color: #1ab7ea !important;
            background-color: #1ab7ea !important;
            color: #fff !important
        }

        .btn-vk:hover, .btn-vk:focus, .btn-vk:active {
            border-color: #45668e !important;
            background-color: #45668e !important;
            color: #fff !important
        }

        .btn-wechat:hover, .btn-wechat:focus, .btn-wechat:active {
            border-color: #7bb32e !important;
            background-color: #7bb32e !important;
            color: #fff !important
        }

        .btn-whatsapp:hover, .btn-whatsapp:focus, .btn-whatsapp:active {
            border-color: #128c7e !important;
            background-color: #128c7e !important;
            color: #fff !important
        }

        .btn-wordpress:hover, .btn-wordpress:focus, .btn-wordpress:active {
            border-color: #0087be !important;
            background-color: #0087be !important;
            color: #fff !important
        }

        .btn-xing:hover, .btn-xing:focus, .btn-xing:active {
            border-color: #026466 !important;
            background-color: #026466 !important;
            color: #fff !important
        }

        .btn-yelp:hover, .btn-yelp:focus, .btn-yelp:active {
            border-color: #af0606 !important;
            background-color: #af0606 !important;
            color: #fff !important
        }

        .btn-youtube:hover, .btn-youtube:focus, .btn-youtube:active {
            border-color: red !important;
            background-color: red !important;
            color: #fff !important
        }

        .btn-zoom:hover, .btn-zoom:focus, .btn-zoom:active {
            border-color: #2d8cff !important;
            background-color: #2d8cff !important;
            color: #fff !important
        }

        .btn-snapchat:hover, .btn-snapchat:focus, .btn-snapchat:active {
            color: #434a57 !important
        }

        .dropdown-toggle::before, .dropdown-toggle::after {
            font-family: "around-icons";
            font-size: 1.375em;
            font-weight: normal;
            vertical-align: middle !important;
            border: none !important;
            line-height: 1
        }

        .dropdown-toggle::after {
            margin-right: -0.25rem;
            content: ""
        }

        .dropdown-toggle.fs-sm::after {
            margin-top: -0.0625rem !important
        }

        .dropdown-toggle.btn:not(.btn-lg)::before, .dropdown-toggle.btn:not(.btn-lg)::after {
            font-size: 1.375em
        }

        .dropup .dropdown-toggle::after {
            content: ""
        }

        .dropstart .dropdown-toggle::before {
            margin-left: -0.3125rem;
            content: ""
        }

        .dropend .dropdown-toggle::after {
            margin-right: -0.3125rem;
            font-size: 1.15em !important;
            content: ""
        }

        .dropdown-toggle-split::before, .dropdown-toggle-split::after {
            margin: 0
        }

        .dropdown-menu {
            --ar-dropdown-link-font-weight: 500;
            box-shadow: 0 .4375rem 1.25rem rgba(208, 208, 196, .32)
        }

        .dropdown-menu li:hover > .dropdown-item, .dropdown-menu .dropdown-item.show {
            color: var(--ar-dropdown-link-hover-color)
        }

        .dropdown-menu .active > .dropdown-item {
            color: var(--ar-dropdown-link-active-color)
        }

        .dropdown-menu .active > .dropdown-item, .dropdown-menu .dropdown-item.active {
            pointer-events: none
        }

        .dropdown-menu.w-100 {
            min-width: 100%
        }

        .dropdown-menu-dark, .dark-mode .dropdown-menu:not(.ignore-dark-mode) {
            box-shadow: 0 .4375rem 1.25rem rgba(0, 0, 0, .4)
        }

        .dropdown-menu-dark li:hover > .dropdown-item, .dark-mode .dropdown-menu:not(.ignore-dark-mode) li:hover > .dropdown-item, .dropdown-menu-dark .dropdown-item.show, .dark-mode .dropdown-menu:not(.ignore-dark-mode) .dropdown-item.show {
            color: var(--ar-dropdown-link-hover-color)
        }

        .dropdown-menu-dark .active > .dropdown-item, .dark-mode .dropdown-menu:not(.ignore-dark-mode) .active > .dropdown-item {
            color: var(--ar-dropdown-link-active-color)
        }

        .dropdown-item {
            font-weight: var(--ar-dropdown-link-font-weight)
        }

        .dropdown-item [class^=opacity-], .dropdown-item [class*=" opacity-"] {
            transition: opacity .2s ease-in-out
        }

        .dropdown-item:hover *, .dropdown-item.active *, .dropdown-item.show * {
            opacity: 1 !important
        }

        li:hover > .dropdown-item *, li.active > .dropdown-item * {
            opacity: 1 !important
        }

        .dropdown-divider {
            margin-right: var(--ar-dropdown-item-padding-x);
            margin-left: var(--ar-dropdown-item-padding-x)
        }

        hr.dropdown-divider {
            border: 0;
            height: var(--ar-dropdown-border-width);
            background-color: var(--ar-dropdown-divider-bg)
        }

        .dropdown-menu-dark hr.dropdown-divider, .dark-mode .dropdown-menu:not(.ignore-dark-mode) hr.dropdown-divider {
            border: 0;
            background-color: var(--ar-dropdown-divider-bg)
        }

        .dropdown-menu.show {
            -webkit-animation: fade-in .2s ease-in-out;
            animation: fade-in .2s ease-in-out
        }

        @-webkit-keyframes fade-in {
            from {
                opacity: 0
            }
            to {
                opacity: 1
            }
        }

        @keyframes fade-in {
            from {
                opacity: 0
            }
            to {
                opacity: 1
            }
        }

        .nav {
            --ar-nav-link-active-color: var(--ar-primary)
        }

        .nav-item {
            margin-bottom: 0
        }

        .nav-link {
            display: flex;
            align-items: center;
            background: none;
            border: 0
        }

        .nav-link [class^=opacity-], .nav-link [class*=" opacity-"] {
            transition: opacity .2s ease-in-out
        }

        .nav-link:hover *, .nav-link.active * {
            opacity: 1 !important
        }

        .nav-link.active {
            color: var(--ar-nav-link-active-color)
        }

        .nav-link.active:not([data-bs-toggle=dropdown]) {
            pointer-events: none;
            cursor: default
        }

        .nav-link.text-muted:hover, .nav-link.text-muted:active {
            color: var(--ar-gray-800) !important
        }

        .dropdown:hover > .nav-link *, .nav-item:hover > .nav-link *, .dropdown.active > .nav-link *, .nav-item.active > .nav-link * {
            opacity: 1 !important
        }

        .nav-tabs.nav-fill .nav-link, .nav-tabs.nav-justified .nav-link, .nav-pills.nav-fill .nav-link, .nav-pills.nav-justified .nav-link {
            justify-content: center
        }

        .nav-tabs .dropdown-menu, .nav-pills .dropdown-menu {
            border-top-left-radius: var(--ar-dropdown-border-radius);
            border-top-right-radius: var(--ar-dropdown-border-radius)
        }

        .nav-tabs {
            margin-bottom: 1rem
        }

        .nav-tabs .nav-item {
            margin-right: .375rem;
            margin-bottom: .375rem
        }

        .nav-tabs .nav-item:last-child {
            margin-right: 0
        }

        .nav-tabs.justify-content-center .nav-item {
            margin-right: .1875rem;
            margin-left: .1875rem
        }

        .nav-tabs.justify-content-end .nav-item {
            margin-right: 0;
            margin-left: .375rem
        }

        .nav-tabs.flex-column .nav-item {
            margin-right: 0;
            margin-left: 0
        }

        .nav-tabs.flex-column .nav-item:last-child {
            margin-bottom: 0
        }

        .nav-tabs .nav-link {
            border-radius: var(--ar-nav-tabs-border-radius);
            font-weight: 600
        }

        .nav-pills {
            margin-bottom: .625rem
        }

        .nav-pills .nav-item {
            margin-right: .875rem;
            margin-bottom: .875rem
        }

        .nav-pills .nav-item:last-child {
            margin-right: 0
        }

        .nav-pills.justify-content-center .nav-item {
            margin-right: .4375rem;
            margin-left: .4375rem
        }

        .nav-pills.justify-content-end .nav-item {
            margin-right: 0;
            margin-left: 1rem
        }

        .nav-pills.flex-column .nav-item {
            margin-right: 0;
            margin-left: 0
        }

        .nav-pills.flex-column .nav-item:last-child {
            margin-bottom: 0
        }

        .nav-pills .nav-link {
            font-weight: 600
        }

        .navbar-brand {
            --ar-navbar-brand-padding-y: 0.5rem;
            --ar-navbar-brand-margin-end: 1rem;
            --ar-navbar-brand-font-size: 1.375rem;
            --ar-navbar-brand-font-weight: 600;
            display: flex;
            align-items: center;
            padding: calc(var(--ar-navbar-brand-padding-y) * .5) 0;
            font-weight: var(--ar-navbar-brand-font-weight)
        }

        .navbar-collapse {
            margin-top: 1rem;
            border: 1px solid rgba(0, 0, 0, 0);
            border-radius: var(--ar-border-radius-lg)
        }

        .navbar-nav {
            --ar-nav-link-font-weight: 500;
            --ar-mega-dropdown-column-width: 14rem;
            padding: .75rem 1.25rem
        }

        .navbar-nav .nav-link {
            padding-top: calc(var(--ar-nav-link-padding-y) * .75);
            padding-bottom: calc(var(--ar-nav-link-padding-y) * .75)
        }

        .navbar-toggler {
            position: relative;
            width: 1.875rem;
            height: 2.25rem
        }

        .navbar-toggler-icon {
            display: block;
            top: 50%;
            margin-top: -0.0625rem;
            transition-duration: .075s;
            transition-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
        }

        .navbar-toggler-icon, .navbar-toggler-icon::before, .navbar-toggler-icon::after {
            position: absolute;
            width: 1.375rem;
            height: .125rem;
            transition-property: transform;
            background-color: var(--ar-navbar-toggler-color)
        }

        .navbar-toggler-icon::before, .navbar-toggler-icon::after {
            display: block;
            width: .9625rem;
            content: ""
        }

        .navbar-toggler-icon:after {
            right: 0
        }

        .navbar-toggler-icon::before {
            top: -0.4375rem;
            transition: top .075s .12s ease, opacity .075s ease, width .15s ease-in-out
        }

        .navbar-toggler-icon::after {
            bottom: -0.4375rem;
            transition: bottom .075s .12s ease, transform .075s cubic-bezier(0.55, 0.055, 0.675, 0.19), width .15s ease-in-out
        }

        .navbar-toggler:hover .navbar-toggler-icon, .navbar-toggler:hover .navbar-toggler-icon::before, .navbar-toggler:hover .navbar-toggler-icon::after {
            width: 1.375rem
        }

        [aria-expanded=true] .navbar-toggler-icon {
            transform: rotate(45deg);
            transition-delay: .12s;
            transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
        }

        [aria-expanded=true] .navbar-toggler-icon::before, [aria-expanded=true] .navbar-toggler-icon::after {
            width: 1.375rem
        }

        [aria-expanded=true] .navbar-toggler-icon::before {
            top: 0;
            opacity: 0;
            transition: top .075s ease, opacity .075s .12s ease
        }

        [aria-expanded=true] .navbar-toggler-icon::after {
            bottom: 0;
            transform: rotate(-90deg);
            transition: bottom .075s ease, transform .075s .12s cubic-bezier(0.215, 0.61, 0.355, 1)
        }

        .navbar .dropdown-toggle::after {
            margin-top: .0625rem;
            font-size: 1.25em
        }

        .navbar .navbar-nav .dropdown-menu {
            padding-top: calc(var(--ar-dropdown-padding-y) * .25);
            padding-bottom: calc(var(--ar-dropdown-padding-y) * .5);
            border: 0;
            border-left: var(--ar-dropdown-border-width, 1px) solid var(--ar-border-color);
            border-radius: 0;
            background-color: rgba(0, 0, 0, 0);
            background: none;
            box-shadow: none
        }

        .navbar .navbar-nav .dropdown-menu.dropdown-menu-dark, .navbar .navbar-nav .dark-mode .dropdown-menu:not(.ignore-dark-mode), .dark-mode .navbar .navbar-nav .dropdown-menu:not(.ignore-dark-mode) {
            --ar-border-color: rgba(255, 255, 255, 0.13)
        }

        .navbar .navbar-nav .dropdown-menu .dropdown-menu {
            margin-right: .75rem;
            margin-left: .75rem
        }

        .navbar .navbar-nav .dropdown-menu .dropdown-toggle::after {
            margin-top: -0.0625rem;
            margin-right: 0;
            margin-left: .125rem
        }

        .navbar .navbar-nav .dropdown-menu .dropdown-divider {
            display: none
        }

        .navbar .navbar-nav .dropdown-menu[data-bs-popper] {
            margin-top: 0
        }

        @-webkit-keyframes dropdown-show {
            from {
                transform: scale(0.9);
                opacity: 0
            }
            to {
                transform: scale(1);
                opacity: 1
            }
        }

        @keyframes dropdown-show {
            from {
                transform: scale(0.9);
                opacity: 0
            }
            to {
                transform: scale(1);
                opacity: 1
            }
        }

        @media (min-width: 576px) {
            .navbar-expand-sm .navbar-brand {
                padding: var(--ar-navbar-brand-padding-y) 0
            }

            .navbar-expand-sm .navbar-collapse {
                margin-top: 0;
                border: 0 !important;
                background-color: rgba(0, 0, 0, 0) !important
            }

            .navbar-expand-sm .navbar-nav {
                padding: 0
            }

            .navbar-expand-sm .navbar-nav .nav-link {
                padding-top: var(--ar-nav-link-padding-y);
                padding-bottom: var(--ar-nav-link-padding-y)
            }

            .navbar-expand-sm .offcanvas {
                background-color: rgba(0, 0, 0, 0) !important
            }

            .navbar-expand-sm .offcanvas-header {
                display: none
            }

            .navbar-expand-sm .dropdown-divider {
                display: block
            }

            .navbar-expand-sm .navbar-nav .dropdown-menu {
                padding-top: var(--ar-dropdown-padding-y);
                padding-bottom: var(--ar-dropdown-padding-y);
                margin-top: var(--ar-dropdown-spacer) !important;
                border: var(--ar-dropdown-border-width) solid var(--ar-dropdown-border-color);
                border-radius: var(--ar-dropdown-border-radius);
                background-color: var(--ar-dropdown-bg);
                box-shadow: var(--ar-dropdown-box-shadow)
            }

            .navbar-expand-sm .dropdown-menu.show {
                display: none
            }

            .navbar-expand-sm .dropdown::before {
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                height: .375rem;
                content: ""
            }

            .navbar-expand-sm .dropdown:hover > .dropdown-menu {
                display: block;
                -webkit-animation: dropdown-show .25s cubic-bezier(0.68, -0.55, 0.265, 1.55);
                animation: dropdown-show .25s cubic-bezier(0.68, -0.55, 0.265, 1.55)
            }

            .navbar-expand-sm .dropdown .dropdown .dropdown-toggle {
                display: flex;
                align-items: center
            }

            .navbar-expand-sm .dropdown .dropdown .dropdown-toggle::after {
                margin-top: 0;
                margin-right: -0.3125rem;
                margin-left: auto;
                font-size: 1.375em;
                content: ""
            }

            .navbar-expand-sm .dropdown .dropdown .dropdown-menu {
                top: calc((var(--ar-dropdown-item-padding-y) + var(--ar-dropdown-padding-y)) * -1);
                left: 100%;
                margin-right: 0;
                margin-left: -0.375rem
            }

            .navbar-expand-sm .dropdown .dropdown-menu-end {
                left: auto;
                right: 0
            }

            .navbar-expand-sm .mega-dropdown-column {
                width: var(--ar-mega-dropdown-column-width);
                padding: 0 .5rem
            }

            .navbar-expand-sm .mega-dropdown-column li:hover > .mega-dropdown-column.opacity-0 {
                opacity: 100% !important
            }
        }

        @media (min-width: 768px) {
            .navbar-expand-md .navbar-brand {
                padding: var(--ar-navbar-brand-padding-y) 0
            }

            .navbar-expand-md .navbar-collapse {
                margin-top: 0;
                border: 0 !important;
                background-color: rgba(0, 0, 0, 0) !important
            }

            .navbar-expand-md .navbar-nav {
                padding: 0
            }

            .navbar-expand-md .navbar-nav .nav-link {
                padding-top: var(--ar-nav-link-padding-y);
                padding-bottom: var(--ar-nav-link-padding-y)
            }

            .navbar-expand-md .offcanvas {
                background-color: rgba(0, 0, 0, 0) !important
            }

            .navbar-expand-md .offcanvas-header {
                display: none
            }

            .navbar-expand-md .dropdown-divider {
                display: block
            }

            .navbar-expand-md .navbar-nav .dropdown-menu {
                padding-top: var(--ar-dropdown-padding-y);
                padding-bottom: var(--ar-dropdown-padding-y);
                margin-top: var(--ar-dropdown-spacer) !important;
                border: var(--ar-dropdown-border-width) solid var(--ar-dropdown-border-color);
                border-radius: var(--ar-dropdown-border-radius);
                background-color: var(--ar-dropdown-bg);
                box-shadow: var(--ar-dropdown-box-shadow)
            }

            .navbar-expand-md .dropdown-menu.show {
                display: none
            }

            .navbar-expand-md .dropdown::before {
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                height: .375rem;
                content: ""
            }

            .navbar-expand-md .dropdown:hover > .dropdown-menu {
                display: block;
                -webkit-animation: dropdown-show .25s cubic-bezier(0.68, -0.55, 0.265, 1.55);
                animation: dropdown-show .25s cubic-bezier(0.68, -0.55, 0.265, 1.55)
            }

            .navbar-expand-md .dropdown .dropdown .dropdown-toggle {
                display: flex;
                align-items: center
            }

            .navbar-expand-md .dropdown .dropdown .dropdown-toggle::after {
                margin-top: 0;
                margin-right: -0.3125rem;
                margin-left: auto;
                font-size: 1.375em;
                content: ""
            }

            .navbar-expand-md .dropdown .dropdown .dropdown-menu {
                top: calc((var(--ar-dropdown-item-padding-y) + var(--ar-dropdown-padding-y)) * -1);
                left: 100%;
                margin-right: 0;
                margin-left: -0.375rem
            }

            .navbar-expand-md .dropdown .dropdown-menu-end {
                left: auto;
                right: 0
            }

            .navbar-expand-md .mega-dropdown-column {
                width: var(--ar-mega-dropdown-column-width);
                padding: 0 .5rem
            }

            .navbar-expand-md .mega-dropdown-column li:hover > .mega-dropdown-column.opacity-0 {
                opacity: 100% !important
            }
        }

        @media (min-width: 992px) {
            .navbar-expand-lg .navbar-brand {
                padding: var(--ar-navbar-brand-padding-y) 0
            }

            .navbar-expand-lg .navbar-collapse {
                margin-top: 0;
                border: 0 !important;
                background-color: rgba(0, 0, 0, 0) !important
            }

            .navbar-expand-lg .navbar-nav {
                padding: 0
            }

            .navbar-expand-lg .navbar-nav .nav-link {
                padding-top: var(--ar-nav-link-padding-y);
                padding-bottom: var(--ar-nav-link-padding-y)
            }

            .navbar-expand-lg .offcanvas {
                background-color: rgba(0, 0, 0, 0) !important
            }

            .navbar-expand-lg .offcanvas-header {
                display: none
            }

            .navbar-expand-lg .dropdown-divider {
                display: block
            }

            .navbar-expand-lg .navbar-nav .dropdown-menu {
                padding-top: var(--ar-dropdown-padding-y);
                padding-bottom: var(--ar-dropdown-padding-y);
                margin-top: var(--ar-dropdown-spacer) !important;
                border: var(--ar-dropdown-border-width) solid var(--ar-dropdown-border-color);
                border-radius: var(--ar-dropdown-border-radius);
                background-color: var(--ar-dropdown-bg);
                box-shadow: var(--ar-dropdown-box-shadow)
            }

            .navbar-expand-lg .dropdown-menu.show {
                display: none
            }

            .navbar-expand-lg .dropdown::before {
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                height: .375rem;
                content: ""
            }

            .navbar-expand-lg .dropdown:hover > .dropdown-menu {
                display: block;
                -webkit-animation: dropdown-show .25s cubic-bezier(0.68, -0.55, 0.265, 1.55);
                animation: dropdown-show .25s cubic-bezier(0.68, -0.55, 0.265, 1.55)
            }

            .navbar-expand-lg .dropdown .dropdown .dropdown-toggle {
                display: flex;
                align-items: center
            }

            .navbar-expand-lg .dropdown .dropdown .dropdown-toggle::after {
                margin-top: 0;
                margin-right: -0.3125rem;
                margin-left: auto;
                font-size: 1.375em;
                content: ""
            }

            .navbar-expand-lg .dropdown .dropdown .dropdown-menu {
                top: calc((var(--ar-dropdown-item-padding-y) + var(--ar-dropdown-padding-y)) * -1);
                left: 100%;
                margin-right: 0;
                margin-left: -0.375rem
            }

            .navbar-expand-lg .dropdown .dropdown-menu-end {
                left: auto;
                right: 0
            }

            .navbar-expand-lg .mega-dropdown-column {
                width: var(--ar-mega-dropdown-column-width);
                padding: 0 .5rem
            }

            .navbar-expand-lg .mega-dropdown-column li:hover > .mega-dropdown-column.opacity-0 {
                opacity: 100% !important
            }
        }

        @media (min-width: 1200px) {
            .navbar-expand-xl .navbar-brand {
                padding: var(--ar-navbar-brand-padding-y) 0
            }

            .navbar-expand-xl .navbar-collapse {
                margin-top: 0;
                border: 0 !important;
                background-color: rgba(0, 0, 0, 0) !important
            }

            .navbar-expand-xl .navbar-nav {
                padding: 0
            }

            .navbar-expand-xl .navbar-nav .nav-link {
                padding-top: var(--ar-nav-link-padding-y);
                padding-bottom: var(--ar-nav-link-padding-y)
            }

            .navbar-expand-xl .offcanvas {
                background-color: rgba(0, 0, 0, 0) !important
            }

            .navbar-expand-xl .offcanvas-header {
                display: none
            }

            .navbar-expand-xl .dropdown-divider {
                display: block
            }

            .navbar-expand-xl .navbar-nav .dropdown-menu {
                padding-top: var(--ar-dropdown-padding-y);
                padding-bottom: var(--ar-dropdown-padding-y);
                margin-top: var(--ar-dropdown-spacer) !important;
                border: var(--ar-dropdown-border-width) solid var(--ar-dropdown-border-color);
                border-radius: var(--ar-dropdown-border-radius);
                background-color: var(--ar-dropdown-bg);
                box-shadow: var(--ar-dropdown-box-shadow)
            }

            .navbar-expand-xl .dropdown-menu.show {
                display: none
            }

            .navbar-expand-xl .dropdown::before {
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                height: .375rem;
                content: ""
            }

            .navbar-expand-xl .dropdown:hover > .dropdown-menu {
                display: block;
                -webkit-animation: dropdown-show .25s cubic-bezier(0.68, -0.55, 0.265, 1.55);
                animation: dropdown-show .25s cubic-bezier(0.68, -0.55, 0.265, 1.55)
            }

            .navbar-expand-xl .dropdown .dropdown .dropdown-toggle {
                display: flex;
                align-items: center
            }

            .navbar-expand-xl .dropdown .dropdown .dropdown-toggle::after {
                margin-top: 0;
                margin-right: -0.3125rem;
                margin-left: auto;
                font-size: 1.375em;
                content: ""
            }

            .navbar-expand-xl .dropdown .dropdown .dropdown-menu {
                top: calc((var(--ar-dropdown-item-padding-y) + var(--ar-dropdown-padding-y)) * -1);
                left: 100%;
                margin-right: 0;
                margin-left: -0.375rem
            }

            .navbar-expand-xl .dropdown .dropdown-menu-end {
                left: auto;
                right: 0
            }

            .navbar-expand-xl .mega-dropdown-column {
                width: var(--ar-mega-dropdown-column-width);
                padding: 0 .5rem
            }

            .navbar-expand-xl .mega-dropdown-column li:hover > .mega-dropdown-column.opacity-0 {
                opacity: 100% !important
            }
        }

        @media (min-width: 1400px) {
            .navbar-expand-xxl .navbar-brand {
                padding: var(--ar-navbar-brand-padding-y) 0
            }

            .navbar-expand-xxl .navbar-collapse {
                margin-top: 0;
                border: 0 !important;
                background-color: rgba(0, 0, 0, 0) !important
            }

            .navbar-expand-xxl .navbar-nav {
                padding: 0
            }

            .navbar-expand-xxl .navbar-nav .nav-link {
                padding-top: var(--ar-nav-link-padding-y);
                padding-bottom: var(--ar-nav-link-padding-y)
            }

            .navbar-expand-xxl .offcanvas {
                background-color: rgba(0, 0, 0, 0) !important
            }

            .navbar-expand-xxl .offcanvas-header {
                display: none
            }

            .navbar-expand-xxl .dropdown-divider {
                display: block
            }

            .navbar-expand-xxl .navbar-nav .dropdown-menu {
                padding-top: var(--ar-dropdown-padding-y);
                padding-bottom: var(--ar-dropdown-padding-y);
                margin-top: var(--ar-dropdown-spacer) !important;
                border: var(--ar-dropdown-border-width) solid var(--ar-dropdown-border-color);
                border-radius: var(--ar-dropdown-border-radius);
                background-color: var(--ar-dropdown-bg);
                box-shadow: var(--ar-dropdown-box-shadow)
            }

            .navbar-expand-xxl .dropdown-menu.show {
                display: none
            }

            .navbar-expand-xxl .dropdown::before {
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                height: .375rem;
                content: ""
            }

            .navbar-expand-xxl .dropdown:hover > .dropdown-menu {
                display: block;
                -webkit-animation: dropdown-show .25s cubic-bezier(0.68, -0.55, 0.265, 1.55);
                animation: dropdown-show .25s cubic-bezier(0.68, -0.55, 0.265, 1.55)
            }

            .navbar-expand-xxl .dropdown .dropdown .dropdown-toggle {
                display: flex;
                align-items: center
            }

            .navbar-expand-xxl .dropdown .dropdown .dropdown-toggle::after {
                margin-top: 0;
                margin-right: -0.3125rem;
                margin-left: auto;
                font-size: 1.375em;
                content: ""
            }

            .navbar-expand-xxl .dropdown .dropdown .dropdown-menu {
                top: calc((var(--ar-dropdown-item-padding-y) + var(--ar-dropdown-padding-y)) * -1);
                left: 100%;
                margin-right: 0;
                margin-left: -0.375rem
            }

            .navbar-expand-xxl .dropdown .dropdown-menu-end {
                left: auto;
                right: 0
            }

            .navbar-expand-xxl .mega-dropdown-column {
                width: var(--ar-mega-dropdown-column-width);
                padding: 0 .5rem
            }

            .navbar-expand-xxl .mega-dropdown-column li:hover > .mega-dropdown-column.opacity-0 {
                opacity: 100% !important
            }
        }

        .navbar-expand .navbar-brand {
            padding: var(--ar-navbar-brand-padding-y) 0
        }

        .navbar-expand .navbar-collapse {
            margin-top: 0;
            border: 0 !important;
            background-color: rgba(0, 0, 0, 0) !important
        }

        .navbar-expand .navbar-nav {
            padding: 0
        }

        .navbar-expand .navbar-nav .nav-link {
            padding-top: var(--ar-nav-link-padding-y);
            padding-bottom: var(--ar-nav-link-padding-y)
        }

        .navbar-expand .offcanvas {
            background-color: rgba(0, 0, 0, 0) !important
        }

        .navbar-expand .offcanvas-header {
            display: none
        }

        .navbar-expand .dropdown-divider {
            display: block
        }

        .navbar-expand .navbar-nav .dropdown-menu {
            padding-top: var(--ar-dropdown-padding-y);
            padding-bottom: var(--ar-dropdown-padding-y);
            margin-top: var(--ar-dropdown-spacer) !important;
            border: var(--ar-dropdown-border-width) solid var(--ar-dropdown-border-color);
            border-radius: var(--ar-dropdown-border-radius);
            background-color: var(--ar-dropdown-bg);
            box-shadow: var(--ar-dropdown-box-shadow)
        }

        .navbar-expand .dropdown-menu.show {
            display: none
        }

        .navbar-expand .dropdown::before {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            height: .375rem;
            content: ""
        }

        .navbar-expand .dropdown:hover > .dropdown-menu {
            display: block;
            -webkit-animation: dropdown-show .25s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            animation: dropdown-show .25s cubic-bezier(0.68, -0.55, 0.265, 1.55)
        }

        .navbar-expand .dropdown .dropdown .dropdown-toggle {
            display: flex;
            align-items: center
        }

        .navbar-expand .dropdown .dropdown .dropdown-toggle::after {
            margin-top: 0;
            margin-right: -0.3125rem;
            margin-left: auto;
            font-size: 1.375em;
            content: ""
        }

        .navbar-expand .dropdown .dropdown .dropdown-menu {
            top: calc((var(--ar-dropdown-item-padding-y) + var(--ar-dropdown-padding-y)) * -1);
            left: 100%;
            margin-right: 0;
            margin-left: -0.375rem
        }

        .navbar-expand .dropdown .dropdown-menu-end {
            left: auto;
            right: 0
        }

        .navbar-expand .mega-dropdown-column {
            width: var(--ar-mega-dropdown-column-width);
            padding: 0 .5rem
        }

        .navbar-expand .mega-dropdown-column li:hover > .mega-dropdown-column.opacity-0 {
            opacity: 100% !important
        }

        .navbar {
            --ar-navbar-stuck-bg: var(--ar-light);
            --ar-navbar-toggler-color: var(--ar-gray-800);
            --ar-navbar-collapse-bg: var(--ar-light);
            --ar-navbar-collapse-border-color: var(--ar-border-color);
            transition: background-color .1s ease-in-out
        }

        .navbar.navbar-stuck {
            background-color: var(--ar-navbar-stuck-bg)
        }

        .navbar .navbar-collapse {
            border-color: var(--ar-navbar-collapse-border-color);
            background-color: var(--ar-navbar-collapse-bg)
        }

        .navbar .nav-item:hover > .nav-link:not(.disabled), .navbar .nav-item .nav-link.show:not(.disabled) {
            color: var(--ar-navbar-hover-color)
        }

        .navbar .nav-item.active > .nav-link:not(.disabled) {
            color: var(--ar-navbar-active-color)
        }

        .navbar .dropdown:hover > .nav-link {
            color: var(--ar-navbar-hover-color)
        }

        .navbar-dark {
            --ar-navbar-stuck-bg: var(--ar-dark);
            --ar-navbar-toggler-color: rgba(255, 255, 255, 0.9);
            --ar-navbar-collapse-bg: var(--ar-dark);
            --ar-navbar-collapse-border-color: rgba(255, 255, 255, 0.13)
        }

        .card-header, .card-footer {
            width: calc(100% - var(--ar-card-spacer-x) * 2);
            margin: auto;
            padding-right: 0;
            padding-left: 0
        }

        @media (max-width: 450px) {
            .card-header, .card-footer {
                width: calc(100% - var(--ar-card-spacer-x) * .75 * 2)
            }

            .card-body {
                padding: calc(var(--ar-card-spacer-y) * .75) calc(var(--ar-card-spacer-x) * .75)
            }
        }

        .card-title {
            margin-top: -0.25rem
        }

        .card-text {
            margin-bottom: 1.5rem
        }

        .card-header-tabs, .card-header-pills {
            margin: 0
        }

        .card-header-tabs .nav-item, .card-header-pills .nav-item {
            margin-bottom: 0
        }

        .card-header-tabs .nav-link.active {
            border-bottom-color: var(--ar-nav-tabs-link-active-border-color);
            background-color: rgba(0, 0, 0, 0)
        }

        .card-body > .list-group {
            border-top: var(--ar-list-group-border-width) solid var(--ar-list-group-border-color);
            border-bottom: var(--ar-list-group-border-width) solid var(--ar-list-group-border-color)
        }

        [class^=rounded-].overflow-hidden, [class*=" rounded-"].overflow-hidden {
            transform: translateZ(0)
        }

        .card-hover {
            position: relative
        }

        .card-hover .opacity-0, .card-hover .opacity-100 {
            transition: opacity .3s ease-in-out
        }

        .card-hover .card-lifted, .card-hover.card-lifted {
            transition: transform .25s ease-in-out
        }

        .card-hover:hover .opacity-0 {
            opacity: 1 !important
        }

        .card-hover:hover .opacity-100 {
            opacity: 0 !important
        }

        .card-hover:hover .card-lifted, .card-hover:hover.card-lifted {
            transform: translateY(-0.3rem)
        }

        .card-hover-primary {
            transition: border-color .3s ease-in-out, background-color .3s ease-in-out
        }

        .card-hover-primary .card-title, .card-hover-primary .card-text {
            transition: color .25s ease-in-out
        }

        .card-hover-primary:hover {
            --ar-heading-color: #fff;
            --ar-body-color: rgba(255, 255, 255, .7);
            border-color: var(--ar-primary) !important;
            background-color: var(--ar-primary) !important
        }

        .card-hover-primary:hover .card-title {
            color: var(--ar-heading-color)
        }

        .card-flip {
            display: block;
            height: 100%;
            border: 0;
            border-radius: 0;
            background-color: rgba(0, 0, 0, 0);
            perspective: 1000px;
            text-decoration: none
        }

        .card-flip-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform .5s ease-in-out;
            transform-style: preserve-3d
        }

        .card-flip-front, .card-flip-back {
            height: 100%;
            padding: 1.5rem;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            transform: rotateX(0deg)
        }

        .card-flip-front {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover
        }

        .card-flip-back {
            position: relative;
            transform: rotateY(180deg);
            background-color: #fff
        }

        .card-flip:hover .card-flip-inner {
            transform: rotateY(180deg)
        }

        .message-box-start, .message-box-end {
            width: 100%;
            padding: 1rem;
            background-color: var(--ar-gray-200)
        }

        .message-box-start {
            border-top-left-radius: var(--ar-border-radius-lg);
            border-top-right-radius: var(--ar-border-radius-lg);
            border-bottom-right-radius: var(--ar-border-radius-lg)
        }

        .message-box-end {
            border-top-left-radius: var(--ar-border-radius-lg);
            border-top-right-radius: var(--ar-border-radius-lg);
            border-bottom-left-radius: var(--ar-border-radius-lg)
        }

        .accordion {
            --ar-accordion-color: var(--ar-body-color);
            --ar-accordion-spacer: 1rem;
            --ar-accordion-btn-color: #434a57;
            --ar-accordion-btn-font-size: var(--ar-body-font-size);
            --ar-accordion-btn-font-weight: 600
        }

        .accordion-item {
            border-radius: var(--ar-accordion-border-radius) !important
        }

        .accordion-item:not(:last-child) {
            margin-bottom: var(--ar-accordion-spacer)
        }

        .accordion-button {
            border-radius: var(--ar-accordion-border-radius) !important;
            font-size: var(--ar-accordion-btn-font-size);
            font-weight: var(--ar-accordion-btn-font-weight);
            line-height: 1.5
        }

        .accordion-body {
            padding-top: 0
        }

        .accordion-alt {
            --ar-accordion-btn-font-size: 1.75rem
        }

        .accordion-alt .accordion-item {
            border-radius: 0 !important;
            background: none !important
        }

        .accordion-alt .accordion-item:not(:last-child) {
            margin-bottom: 0
        }

        @media (min-width: 576px) {
            .accordion-alt .accordion-item:not(:last-child) {
                margin-bottom: calc(var(--ar-accordion-spacer) * .25)
            }
        }

        .accordion-alt .accordion-button {
            padding-top: calc(var(--ar-accordion-spacer) * .75);
            padding-right: 0;
            padding-bottom: var(--ar-accordion-spacer);
            padding-left: 0
        }

        .accordion-alt .accordion-button::after {
            width: .5em;
            height: .5em;
            background-size: .5em
        }

        .accordion-alt .accordion-body {
            padding-right: 0;
            padding-left: 0
        }

        .accordion-orders .accordion-button::after {
            margin-right: .25rem;
            margin-left: .5rem
        }

        .accordion-orders .accordion-button .accordion-button-img {
            transition: opacity .15s ease-in-out;
            opacity: 0
        }

        .accordion-orders .accordion-button.collapsed .accordion-button-img {
            opacity: 1
        }

        .breadcrumb {
            --ar-breadcrumb-color: var(--ar-gray-600);
            --ar-breadcrumb-font-weight: 500;
            --ar-breadcrumb-divider-font-size: 1.2em;
            --ar-breadcrumb-item-hover-color: var(--ar-gray-900);
            font-weight: var(--ar-breadcrumb-font-weight)
        }

        .breadcrumb-item {
            display: flex;
            align-items: center
        }

        .breadcrumb-item + .breadcrumb-item::before {
            margin-top: .15em;
            font-family: "around-icons";
            font-weight: normal;
            font-size: var(--ar-breadcrumb-divider-font-size);
            line-height: 1
        }

        .breadcrumb-item > a {
            display: flex;
            align-items: center;
            color: var(--ar-breadcrumb-color);
            text-decoration: none
        }

        .breadcrumb-item:hover > a {
            color: var(--ar-breadcrumb-item-hover-color)
        }

        .pagination {
            margin-bottom: 0
        }

        .page-item {
            font-weight: 500
        }

        .badge.bg-secondary, .badge.bg-light {
            --ar-badge-color: var(--ar-gray-800)
        }

        .badge.bg-secondary {
            background-color: var(--ar-secondary) !important
        }

        a.badge {
            text-decoration: none
        }

        .alert {
            --ar-alert-link-color: inherit
        }

        .alert .alert-link {
            color: var(--ar-alert-link-color)
        }

        .alert > [class^=ai-], .alert > [class*=" ai-"] {
            margin-top: .125rem
        }

        .alert-secondary {
            --ar-alert-bg: #f4f6f9
        }

        .alert-secondary, .alert-light {
            --ar-alert-color: #434a57;
            --ar-alert-border-color: var(--ar-border-color);
            --ar-alert-link-color: #121519
        }

        .alert-dark {
            --ar-alert-border-color: #121519;
            --ar-alert-bg: #121519;
            --ar-alert-color: rgba(255, 255, 255, .8);
            --ar-alert-link-color: #fff
        }

        .alert-dismissible .btn-close {
            padding: calc(var(--ar-alert-padding-y) * 1.125) var(--ar-alert-padding-x)
        }

        .alert-primary .btn-close {
            background: rgba(0, 0, 0, 0) url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath d='M8 1.2A6.74 6.74 0 0 0 1.2 8 6.74 6.74 0 0 0 8 14.8 6.74 6.74 0 0 0 14.8 8 6.74 6.74 0 0 0 8 1.2zM0 8c0-4.4 3.6-8 8-8s8 3.6 8 8-3.6 8-8 8-8-3.6-8-8zm10.6-2.6a.61.61 0 0 1 0 .8L8.8 8l1.9 1.9a.61.61 0 0 1 0 .8.61.61 0 0 1-.8 0L8 8.8l-1.9 1.9a.61.61 0 0 1-.8 0 .61.61 0 0 1 0-.8L7.2 8 5.4 6.1a.61.61 0 0 1 0-.8.61.61 0 0 1 .8 0l1.9 1.9L10 5.3c.1-.1.4-.1.6.1z' fill-rule='evenodd' fill='%23264e41'/%3e%3c/svg%3e") center/1.375em auto no-repeat
        }

        .alert-success .btn-close {
            background: rgba(0, 0, 0, 0) url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath d='M8 1.2A6.74 6.74 0 0 0 1.2 8 6.74 6.74 0 0 0 8 14.8 6.74 6.74 0 0 0 14.8 8 6.74 6.74 0 0 0 8 1.2zM0 8c0-4.4 3.6-8 8-8s8 3.6 8 8-3.6 8-8 8-8-3.6-8-8zm10.6-2.6a.61.61 0 0 1 0 .8L8.8 8l1.9 1.9a.61.61 0 0 1 0 .8.61.61 0 0 1-.8 0L8 8.8l-1.9 1.9a.61.61 0 0 1-.8 0 .61.61 0 0 1 0-.8L7.2 8 5.4 6.1a.61.61 0 0 1 0-.8.61.61 0 0 1 .8 0l1.9 1.9L10 5.3c.1-.1.4-.1.6.1z' fill-rule='evenodd' fill='%2325885f'/%3e%3c/svg%3e") center/1.375em auto no-repeat
        }

        .alert-info .btn-close {
            background: rgba(0, 0, 0, 0) url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath d='M8 1.2A6.74 6.74 0 0 0 1.2 8 6.74 6.74 0 0 0 8 14.8 6.74 6.74 0 0 0 14.8 8 6.74 6.74 0 0 0 8 1.2zM0 8c0-4.4 3.6-8 8-8s8 3.6 8 8-3.6 8-8 8-8-3.6-8-8zm10.6-2.6a.61.61 0 0 1 0 .8L8.8 8l1.9 1.9a.61.61 0 0 1 0 .8.61.61 0 0 1-.8 0L8 8.8l-1.9 1.9a.61.61 0 0 1-.8 0 .61.61 0 0 1 0-.8L7.2 8 5.4 6.1a.61.61 0 0 1 0-.8.61.61 0 0 1 .8 0l1.9 1.9L10 5.3c.1-.1.4-.1.6.1z' fill-rule='evenodd' fill='%23255388'/%3e%3c/svg%3e") center/1.375em auto no-repeat
        }

        .alert-warning .btn-close {
            background: rgba(0, 0, 0, 0) url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath d='M8 1.2A6.74 6.74 0 0 0 1.2 8 6.74 6.74 0 0 0 8 14.8 6.74 6.74 0 0 0 14.8 8 6.74 6.74 0 0 0 8 1.2zM0 8c0-4.4 3.6-8 8-8s8 3.6 8 8-3.6 8-8 8-8-3.6-8-8zm10.6-2.6a.61.61 0 0 1 0 .8L8.8 8l1.9 1.9a.61.61 0 0 1 0 .8.61.61 0 0 1-.8 0L8 8.8l-1.9 1.9a.61.61 0 0 1-.8 0 .61.61 0 0 1 0-.8L7.2 8 5.4 6.1a.61.61 0 0 1 0-.8.61.61 0 0 1 .8 0l1.9 1.9L10 5.3c.1-.1.4-.1.6.1z' fill-rule='evenodd' fill='%23cca515'/%3e%3c/svg%3e") center/1.375em auto no-repeat
        }

        .alert-danger .btn-close {
            background: rgba(0, 0, 0, 0) url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath d='M8 1.2A6.74 6.74 0 0 0 1.2 8 6.74 6.74 0 0 0 8 14.8 6.74 6.74 0 0 0 14.8 8 6.74 6.74 0 0 0 8 1.2zM0 8c0-4.4 3.6-8 8-8s8 3.6 8 8-3.6 8-8 8-8-3.6-8-8zm10.6-2.6a.61.61 0 0 1 0 .8L8.8 8l1.9 1.9a.61.61 0 0 1 0 .8.61.61 0 0 1-.8 0L8 8.8l-1.9 1.9a.61.61 0 0 1-.8 0 .61.61 0 0 1 0-.8L7.2 8 5.4 6.1a.61.61 0 0 1 0-.8.61.61 0 0 1 .8 0l1.9 1.9L10 5.3c.1-.1.4-.1.6.1z' fill-rule='evenodd' fill='%23cc1515'/%3e%3c/svg%3e") center/1.375em auto no-repeat
        }

        .list-group-item-action {
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
            color: var(--ar-list-group-action-color);
            font-weight: 500
        }

        .list-group-item-action:active {
            transition: none
        }

        .list-group-flush .list-group-item {
            padding-right: 0;
            padding-left: 0
        }

        .toast {
            --ar-toast-header-font-size: 1rem
        }

        .toast-header {
            position: relative;
            border: 0;
            font-size: var(--ar-toast-header-font-size);
            font-weight: var(--ar-heading-font-weight)
        }

        .toast-header::after {
            position: absolute;
            left: var(--ar-toast-padding-x);
            bottom: calc(var(--ar-toast-border-width) * -1);
            width: calc(100% - var(--ar-toast-padding-x) * 2);
            height: var(--ar-toast-border-width);
            background-color: var(--ar-toast-header-border-color);
            content: ""
        }

        .toast-header[class^=bg-]::after, .toast-header[class*=" bg-"]::after {
            display: none
        }

        .toast-header .btn-close {
            font-size: .875em;
            margin-right: 0;
            padding-right: 0
        }

        .toast-body {
            padding-top: .9625rem
        }

        .modal-content {
            padding-right: var(--ar-modal-padding);
            padding-left: var(--ar-modal-padding)
        }

        .modal-header, .modal-footer {
            padding: var(--ar-modal-header-padding-y) 0
        }

        .modal-body {
            margin-right: calc(var(--ar-modal-padding) * -1);
            margin-left: calc(var(--ar-modal-padding) * -1)
        }

        @media (max-width: 450px) {
            .modal-header, .modal-footer {
                padding: calc(var(--ar-modal-header-padding-y) * .875) 0
            }

            .modal-content {
                padding-right: calc(var(--ar-modal-padding) * .75);
                padding-left: calc(var(--ar-modal-padding) * .75)
            }

            .modal-body {
                padding: calc(var(--ar-modal-padding) * .75);
                margin-right: calc(var(--ar-modal-padding) * -0.75);
                margin-left: calc(var(--ar-modal-padding) * -0.75)
            }
        }

        .popover {
            --ar-popover-arrow-border: var(--ar-border-color);
            box-shadow: 0 .4375rem 1.25rem rgba(208, 208, 196, .32)
        }

        .popover-header {
            width: calc(100% - var(--ar-popover-header-padding-x) * 2);
            margin: auto;
            padding-right: 0;
            padding-left: 0;
            border-bottom-color: var(--ar-border-color)
        }

        .offcanvas-header {
            padding: calc(var(--ar-offcanvas-padding-y) * .75) var(--ar-offcanvas-padding-x)
        }

        .offcanvas-body {
            display: block !important
        }

        .offcanvas.show, .offcanvas-sm.show, .offcanvas-md.show, .offcanvas-lg.show, .offcanvas-xl.show, .offcanvas-xxl.show {
            box-shadow: var(--ar-offcanvas-box-shadow)
        }

        [data-simplebar] {
            --ar-scrollbar-width: 0.25rem;
            --ar-scrollbar-bg: #c5cad1;
            --ar-scrollbar-border-radius: var(--ar-border-radius);
            --ar-scrollbar-track-width: 0.125rem;
            --ar-scrollbar-track-bg: #e9eef3
        }

        .simplebar-scrollbar::before {
            right: 0;
            left: 0;
            transition: none;
            background-color: var(--ar-scrollbar-bg);
            border-radius: var(--ar-scrollbar-border-radius);
            opacity: 1 !important
        }

        .simplebar-track {
            transition: opacity .15s ease-in-out;
            border-radius: var(--ar-scrollbar-border-radius);
            background-color: var(--ar-scrollbar-track-bg);
            overflow: initial;
            opacity: 0
        }

        .simplebar-track.simplebar-vertical {
            right: calc(var(--ar-scrollbar-width) * .5);
            width: var(--ar-scrollbar-track-width)
        }

        .simplebar-track.simplebar-vertical .simplebar-scrollbar {
            left: 50%;
            width: var(--ar-scrollbar-width);
            margin-left: calc(var(--ar-scrollbar-width) * -0.5)
        }

        .simplebar-track.simplebar-vertical .simplebar-scrollbar:before {
            top: 0;
            bottom: 0
        }

        .simplebar-track.simplebar-horizontal {
            bottom: calc(var(--ar-scrollbar-width) * .5);
            height: var(--ar-scrollbar-track-width)
        }

        .simplebar-track.simplebar-horizontal .simplebar-scrollbar {
            height: var(--ar-scrollbar-width);
            top: 50%;
            margin-top: calc(var(--ar-scrollbar-width) * -0.5);
            bottom: 0
        }

        .simplebar-track.simplebar-horizontal .simplebar-scrollbar::before {
            right: 0;
            left: 0
        }

        .simplebar-wrapper:hover ~ .simplebar-track, [data-simplebar-auto-hide=false] .simplebar-track {
            opacity: 1
        }

        .masonry-grid[data-columns] {
            overflow: hidden;
            margin-right: -0.75rem;
            margin-left: -0.75rem
        }

        .masonry-grid[data-columns]::after {
            display: block;
            clear: both;
            content: ""
        }

        .masonry-grid[data-columns] .masonry-grid-item {
            width: 100%;
            float: left;
            padding-right: .75rem;
            padding-left: .75rem;
            padding-bottom: 1.5rem
        }

        .masonry-grid[data-columns="1"] .masonry-grid-item {
            width: 100%
        }

        @media (min-width: 576px) {
            .masonry-grid[data-columns="2"] .masonry-grid-item, .masonry-grid[data-columns="3"] .masonry-grid-item, .masonry-grid[data-columns="4"] .masonry-grid-item, .masonry-grid[data-columns="5"] .masonry-grid-item, .masonry-grid[data-columns="6"] .masonry-grid-item {
                width: 50%
            }
        }

        @media (min-width: 768px) {
            .masonry-grid[data-columns="4"] .masonry-grid-item, .masonry-grid[data-columns="5"] .masonry-grid-item, .masonry-grid[data-columns="6"] .masonry-grid-item {
                width: 33.333%
            }
        }

        @media (min-width: 992px) {
            .masonry-grid[data-columns="3"] .masonry-grid-item, .masonry-grid[data-columns="4"] .masonry-grid-item, .masonry-grid[data-columns="5"] .masonry-grid-item, .masonry-grid[data-columns="6"] .masonry-grid-item {
                width: 33.333%
            }
        }

        @media (min-width: 1200px) {
            .masonry-grid[data-columns="4"] .masonry-grid-item, .masonry-grid[data-columns="5"] .masonry-grid-item, .masonry-grid[data-columns="6"] .masonry-grid-item {
                width: 25%
            }
        }

        @media (min-width: 1400px) {
            .masonry-grid[data-columns="5"] .masonry-grid-item {
                width: 20%
            }

            .masonry-grid[data-columns="6"] .masonry-grid-item {
                width: 16.666%
            }
        }

        .btn-prev, .btn-next {
            transition: all .25s ease-in-out
        }

        .btn-prev > [class^=ai-], .btn-prev > [class*=" ai-"], .btn-next > [class^=ai-], .btn-next > [class*=" ai-"] {
            font-size: 1.4em
        }

        .swiper-button-disabled, .swiper-button-disabled:disabled {
            opacity: .55
        }

        .swiper .btn-prev:not(.position-static), .swiper .btn-next:not(.position-static) {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 5
        }

        .swiper .btn-prev {
            left: 1.25rem
        }

        .swiper .btn-next {
            right: 1.25rem
        }

        .swiper-nav-onhover .btn-prev, .swiper-nav-onhover .btn-next {
            opacity: 0 !important
        }

        .swiper-nav-onhover:hover .btn-prev, .swiper-nav-onhover:hover .btn-next {
            opacity: 1 !important
        }

        .swiper-nav-onhover:hover .btn-prev.swiper-button-disabled, .swiper-nav-onhover:hover .btn-prev.swiper-button-disabled:disabled, .swiper-nav-onhover:hover .btn-next.swiper-button-disabled, .swiper-nav-onhover:hover .btn-next.swiper-button-disabled:disabled {
            opacity: .55 !important
        }

        .swiper-pagination {
            --ar-carousel-pagination-bullet-size: 0.75rem;
            --ar-carousel-pagination-bullet-spacer: 1rem;
            --ar-carousel-pagination-bullet-border-color: var(--ar-gray-600);
            --ar-carousel-pagination-bullet-border-width: var(--ar-border-width);
            --ar-carousel-pagination-bullet-border-radius: 50%;
            --ar-carousel-pagination-bullet-bg: transparent;
            --ar-carousel-pagination-bullet-active-border-color: var(--ar-primary);
            --ar-carousel-pagination-bullet-active-bg: var(--ar-primary);
            --ar-carousel-pagination-progressbar-height: 0.1875rem;
            --ar-carousel-pagination-progressbar-bg: var(--ar-border-color);
            --ar-carousel-pagination-progressbar-fill-bg: var(--ar-primary);
            display: flex;
            justify-content: center;
            align-items: center;
            bottom: 1.25rem
        }

        .swiper-pagination-bullet {
            position: relative;
            width: var(--ar-carousel-pagination-bullet-size);
            height: var(--ar-carousel-pagination-bullet-size);
            transition: border-color .2s ease-in-out, background-color .2s ease-in-out;
            border: var(--ar-carousel-pagination-bullet-border-width) solid var(--ar-carousel-pagination-bullet-border-color);
            border-radius: var(--ar-carousel-pagination-bullet-border-radius);
            background-color: var(--ar-carousel-pagination-bullet-bg);
            opacity: 1
        }

        .swiper-pagination-bullet:focus {
            outline: none
        }

        .swiper-pagination-bullet-active {
            border-color: var(--ar-carousel-pagination-bullet-active-border-color);
            background-color: var(--ar-carousel-pagination-bullet-active-bg)
        }

        .swiper-horizontal > .swiper-pagination-bullets, .swiper-pagination-bullets.swiper-pagination-horizontal {
            bottom: 1.25rem
        }

        .swiper-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet, .swiper-pagination-bullets.swiper-pagination-horizontal .swiper-pagination-bullet {
            margin-right: calc(var(--ar-carousel-pagination-bullet-spacer) * .5);
            margin-left: calc(var(--ar-carousel-pagination-bullet-spacer) * .5)
        }

        .swiper-vertical > .swiper-pagination-bullets, .swiper-pagination-bullets.swiper-pagination-vertical {
            flex-direction: column;
            right: 1.25rem
        }

        .swiper-vertical > .swiper-pagination-bullets .swiper-pagination-bullet, .swiper-pagination-bullets.swiper-pagination-vertical .swiper-pagination-bullet {
            margin-top: calc(var(--ar-carousel-pagination-bullet-spacer) * .5);
            margin-bottom: calc(var(--ar-carousel-pagination-bullet-spacer) * .5)
        }

        .swiper-pagination-progressbar {
            background-color: var(--ar-carousel-pagination-progressbar-bg)
        }

        .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
            background-color: var(--ar-carousel-pagination-progressbar-fill-bg)
        }

        .swiper-horizontal > .swiper-pagination-progressbar, .swiper-pagination-progressbar.swiper-pagination-horizontal {
            height: var(--ar-carousel-pagination-progressbar-height)
        }

        .swiper-vertical > .swiper-pagination-progressbar, .swiper-pagination-progressbar.swiper-pagination-vertical {
            width: var(--ar-carousel-pagination-progressbar-height)
        }

        .swiper-scrollbar {
            --ar-carousel-scrollbar-width: 0.125rem;
            --ar-carousel-scrollbar-bg: var(--ar-border-color);
            --ar-carousel-scrollbar-drag-width: 0.25rem;
            --ar-carousel-scrollbar-drag-bg: var(--ar-gray-500);
            background-color: var(--ar-carousel-scrollbar-bg)
        }

        .swiper-scrollbar-drag {
            background-color: var(--ar-gray-500)
        }

        .swiper-vertical > .swiper-scrollbar {
            right: .25rem;
            width: var(--ar-carousel-scrollbar-width)
        }

        .swiper-vertical > .swiper-scrollbar .swiper-scrollbar-drag {
            left: 50%;
            width: var(--ar-carousel-scrollbar-drag-width);
            margin-left: calc(var(--ar-carousel-scrollbar-drag-width) * -0.5)
        }

        .swiper-horizontal > .swiper-scrollbar {
            bottom: .25rem;
            height: var(--ar-carousel-scrollbar-width)
        }

        .swiper-horizontal > .swiper-scrollbar .swiper-scrollbar-drag {
            top: 50%;
            height: var(--ar-carousel-scrollbar-drag-width);
            margin-top: calc(var(--ar-carousel-scrollbar-drag-width) * -0.5)
        }

        .from-top, .from-bottom, .from-start, .from-end, .scale-up, .scale-down {
            transition: all .4s .4s ease-in-out;
            opacity: 0;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden
        }

        .from-top {
            transform: translateY(-2.25rem)
        }

        .from-bottom {
            transform: translateY(2.25rem)
        }

        .from-start {
            transform: translateX(-2.25rem)
        }

        .from-end {
            transform: translateX(2.25rem)
        }

        .scale-up {
            transform: scale(0.85)
        }

        .swiper-slide-active .from-top, .swiper-slide-active .from-bottom, .active .from-top, .active .from-bottom {
            transform: translateY(0);
            opacity: 1
        }

        .swiper-slide-active .from-start, .swiper-slide-active .from-end, .active .from-start, .active .from-end {
            transform: translateX(0);
            opacity: 1
        }

        .swiper-slide-active .scale-up, .swiper-slide-active .scale-down, .active .scale-up, .active .scale-down {
            transform: scale(1);
            opacity: 1
        }

        .swiper-slide-cover {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover
        }

        .swiper-scale-effect .swiper-slide-cover {
            transition: 8.5s ease-out;
            transform: scale(1.1)
        }

        .swiper-scale-effect .swiper-slide.swiper-slide-active .swiper-slide-cover {
            transform: scale(1)
        }

        .lg-backdrop {
            z-index: 1055
        }

        .lg-outer {
            z-index: 1060
        }

        .lg-outer .lg-thumb-item:hover, .lg-outer .lg-thumb-item.active {
            border-color: var(--ar-primary)
        }

        .lg-on {
            overflow: hidden
        }

        .lg-item:focus, .lg:focus, .lg-outer:focus, .lg-inner:focus {
            outline: none
        }

        .jarallax {
            position: relative;
            z-index: 0
        }

        .jarallax .jarallax-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background-position: center;
            background-size: cover
        }

        [data-disable-parallax-down=xs] {
            transform: none !important;
            opacity: 1 !important
        }

        @media (max-width: 575.98px) {
            [data-disable-parallax-down=sm] {
                transform: none !important;
                opacity: 1 !important
            }
        }

        @media (max-width: 767.98px) {
            [data-disable-parallax-down=md] {
                transform: none !important;
                opacity: 1 !important
            }
        }

        @media (max-width: 991.98px) {
            [data-disable-parallax-down=lg] {
                transform: none !important;
                opacity: 1 !important
            }
        }

        @media (min-width: 576px) {
            [data-disable-parallax-up=sm] {
                transform: none !important;
                opacity: 1 !important
            }
        }

        @media (min-width: 768px) {
            [data-disable-parallax-up=md] {
                transform: none !important;
                opacity: 1 !important
            }
        }

        @media (min-width: 992px) {
            [data-disable-parallax-up=lg] {
                transform: none !important;
                opacity: 1 !important
            }
        }

        @media (min-width: 1200px) {
            [data-disable-parallax-up=xl] {
                transform: none !important;
                opacity: 1 !important
            }
        }

        .parallax {
            position: relative
        }

        .parallax-layer {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        .parallax-layer:first-child {
            position: relative
        }

        .parallax-layer > img {
            display: block;
            width: 100%
        }

        .interactive-map:focus {
            outline: none
        }

        .leaflet-touch .leaflet-control-layers, .leaflet-touch .leaflet-bar {
            border: 0;
            border-radius: var(--ar-border-radius-sm);
            box-shadow: 0 .4375rem 1.25rem rgba(208, 208, 196, .32)
        }

        .leaflet-touch .leaflet-bar a {
            transition: color .2s ease-in-out, background-color .2s ease-in-out, border-color .2s ease-in-out;
            color: #434a57;
            font-weight: normal;
            line-height: 26px
        }

        .leaflet-touch .leaflet-bar a:first-child {
            border-bottom-color: #e3e9ef;
            border-top-left-radius: var(--ar-border-radius-sm);
            border-top-right-radius: var(--ar-border-radius-sm)
        }

        .leaflet-touch .leaflet-bar a:last-child {
            border-bottom-left-radius: var(--ar-border-radius-sm);
            border-bottom-right-radius: var(--ar-border-radius-sm)
        }

        .leaflet-touch .leaflet-bar a:hover {
            background-color: #fff;
            color: var(--ar-primary)
        }

        .leaflet-touch .leaflet-bar a.leaflet-disabled {
            background-color: #fff;
            color: rgba(133, 140, 151, .8)
        }

        .leaflet-left .leaflet-control {
            margin-left: 1rem
        }

        .leaflet-top .leaflet-control {
            margin-top: 1rem
        }

        .leaflet-container a {
            color: var(--ar-primary);
            font-weight: 500
        }

        .leaflet-popup-content-wrapper {
            min-width: 17.5rem;
            padding: 0;
            border-radius: var(--ar-border-radius-lg);
            overflow: hidden
        }

        .leaflet-popup-content-wrapper .leaflet-popup-content {
            width: 100% !important;
            margin: 0 !important;
            color: var(--ar-body-color)
        }

        .leaflet-popup-content-wrapper, .leaflet-popup-tip {
            box-shadow: 0 .1875rem .875rem rgba(18, 21, 25, .32)
        }

        .leaflet-container {
            font-family: "Inter", sans-serif
        }

        .leaflet-container a.leaflet-popup-close-button {
            top: .5rem;
            right: .5rem;
            width: 1.5rem;
            height: 1.5rem;
            padding: 0;
            border: 1px solid #e3e9ef;
            border-radius: 50%;
            color: rgba(67, 74, 87, .7);
            font-size: 1rem;
            line-height: 1.25rem;
            text-align: center
        }

        .leaflet-container a.leaflet-popup-close-button:hover {
            color: #434a57
        }

        .leaflet-popup:focus, .leaflet-marker-icon:focus {
            outline: none
        }

        .leaflet-popup-tip-container {
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden
        }

        @-moz-document url-prefix() {
            .leaflet-container a.leaflet-popup-close-button {
                line-height: 1.375rem
            }
        }

        .date-picker[readonly] {
            background-color: rgba(0, 0, 0, 0)
        }

        .date-picker:focus {
            border-color: var(--ar-gray-700)
        }

        .flatpickr-calendar {
            width: 325px;
            padding: 0 .5rem;
            border: var(--ar-border-width) solid #f0f3f6;
            border-radius: var(--ar-border-radius-lg);
            box-shadow: 0 .4375rem 1.25rem rgba(208, 208, 196, .32)
        }

        .flatpickr-calendar::before, .flatpickr-calendar::after {
            display: none
        }

        .flatpickr-innerContainer {
            padding-bottom: 1.125rem
        }

        .flatpickr-months {
            padding: .75rem 0
        }

        .flatpickr-months svg {
            vertical-align: top
        }

        .flatpickr-months .flatpickr-prev-month, .flatpickr-months .flatpickr-next-month {
            top: .75rem
        }

        .flatpickr-months .flatpickr-prev-month svg, .flatpickr-months .flatpickr-next-month svg {
            fill: var(--ar-gray-800)
        }

        .flatpickr-months .flatpickr-prev-month:hover svg, .flatpickr-months .flatpickr-next-month:hover svg {
            fill: var(--ar-primary)
        }

        span.flatpickr-weekday, .flatpickr-time .flatpickr-time-separator {
            color: var(--ar-gray-600)
        }

        .flatpickr-current-month .flatpickr-monthDropdown-months {
            padding: .25rem;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none
        }

        .numInputWrapper, .numInput, .flatpickr-current-month .flatpickr-monthDropdown-months {
            color: var(--ar-gray-900) !important
        }

        .numInputWrapper:hover, .flatpickr-current-month .flatpickr-monthDropdown-months:hover {
            background-color: var(--ar-gray-200)
        }

        .numInput:hover {
            background-color: rgba(0, 0, 0, 0) !important
        }

        .flatpickr-day {
            height: 38px;
            border-radius: 0;
            border-radius: var(--ar-border-radius);
            color: var(--ar-gray-900);
            line-height: 37px
        }

        .flatpickr-day:hover:not(.flatpickr-disabled):not(.today):not(.selected) {
            border-color: var(--ar-gray-200);
            background-color: var(--ar-gray-200)
        }

        .flatpickr-day.today {
            border-color: rgba(var(--ar-primary-rgb), 0.5) !important;
            color: var(--ar-primary) !important
        }

        .flatpickr-day.today.selected {
            color: #fff !important
        }

        .flatpickr-day.today:hover {
            background-color: rgba(0, 0, 0, 0)
        }

        .flatpickr-day.selected {
            border-color: var(--ar-primary) !important;
            background-color: var(--ar-primary) !important
        }

        .flatpickr-day.flatpickr-disabled {
            color: var(--ar-gray-500) !important
        }

        .flatpickr-day.prevMonthDay, .flatpickr-day.nextMonthDay {
            color: var(--ar-gray-600)
        }

        .flatpickr-day.inRange {
            border-color: var(--ar-gray-200) !important;
            background-color: var(--ar-gray-200) !important;
            box-shadow: -5px 0 0 var(--ar-gray-200), 5px 0 0 var(--ar-gray-200)
        }

        .flatpickr-day.startRange, .flatpickr-day.endRange, .flatpickr-day.endRange.seleced, .flatpickr-day.endRange:hover {
            border-color: var(--ar-primary) !important;
            background-color: var(--ar-primary) !important
        }

        .flatpickr-day.selected.endRange, .flatpickr-day.startRange.endRange, .flatpickr-day.endRange.endRange {
            border-radius: 0;
            border-radius: 0 1rem 1rem 0
        }

        .flatpickr-day.selected.startRange, .flatpickr-day.startRange.startRange, .flatpickr-day.endRange.startRange {
            border-radius: 0;
            border-radius: 1rem 0 0 1rem
        }

        .flatpickr-day.selected.startRange + .endRange:not(:nth-child(7n+1)), .flatpickr-day.startRange.startRange + .endRange:not(:nth-child(7n+1)), .flatpickr-day.endRange.startRange + .endRange:not(:nth-child(7n+1)) {
            box-shadow: -10px 0 0 #448c74
        }

        .flatpickr-time {
            margin-bottom: .5rem
        }

        .flatpickr-time .flatpickr-am-pm {
            color: var(--ar-gray-800)
        }

        .flatpickr-time input:hover, .flatpickr-time .flatpickr-am-pm:hover, .flatpickr-time input:focus, .flatpickr-time .flatpickr-am-pm:focus {
            background-color: var(--ar-gray-200)
        }

        .flatpickr-time input.flatpickr-hour {
            font-weight: 600
        }

        .flatpickr-calendar.hasTime .flatpickr-time {
            border-color: var(--ar-border-color)
        }

        .fc-daygrid, .fc-timegrid, .fc-list {
            padding: .5rem;
            border-radius: calc(var(--ar-border-radius) * 1.5);
            background-color: var(--ar-gray-100)
        }

        .fc-col-header-cell {
            padding: .75rem 0 !important;
            border-bottom: 1px dashed var(--ar-gray-400) !important
        }

        .fc-col-header-cell-cushion, .fc-list-day-cushion {
            color: var(--ar-gray-800) !important
        }

        .fc .fc-list-sticky .fc-list-day > * {
            background-color: rgba(0, 0, 0, 0)
        }

        .fc-list-day-cushion {
            border-radius: calc(var(--ar-border-radius) * .75);
            background-color: #fff
        }

        .fc .fc-list-event:hover td {
            background-color: var(--ar-gray-200)
        }

        .fc-scrollgrid td {
            border-top: 1px dashed var(--ar-gray-400);
            border-left: 1px dashed var(--ar-gray-400)
        }

        @media (min-width: 992px) {
            .fc-scrollgrid td {
                padding-right: .25rem;
                padding-left: .25rem
            }
        }

        .fc-prev-button, .fc-next-button {
            --ar-btn-size: 3rem;
            width: var(--ar-btn-size);
            height: var(--ar-btn-size);
            padding: 0
        }

        .fc-prev-button > [class^=bi-], .fc-prev-button > [class*=" bi-"], .fc-next-button > [class^=bi-], .fc-next-button > [class*=" bi-"] {
            font-size: 1.625em
        }

        .fc-today-button {
            --ar-btn-padding-x: 1.25rem
        }

        .calendar .btn-group .btn-primary {
            background-color: rgba(0, 0, 0, 0);
            color: var(--ar-primary)
        }

        .calendar .btn-group .btn-primary.active {
            background-color: var(--ar-primary);
            color: #fff
        }

        .fc .fc-toolbar {
            overflow: auto;
            margin-bottom: .75rem !important;
            padding-bottom: .875rem
        }

        .fc-toolbar-title {
            margin: 0 1rem !important;
            font-size: calc(1.275rem + 0.3vw) !important;
            font-weight: 500
        }

        @media (min-width: 1200px) {
            .fc-toolbar-title {
                font-size: 1.5rem !important
            }
        }

        .fc-toolbar-chunk {
            white-space: nowrap
        }

        .fc-list-empty {
            background-color: rgba(0, 0, 0, 0) !important
        }

        .fc-h-event, .fc-v-event {
            --fc-event-border-color: var(--ar-primary);
            --fc-event-bg-color: var(--ar-primary)
        }

        .fc-h-event.text-nav .fc-event-main, .fc-h-event.text-dark .fc-event-main, .fc-v-event.text-nav .fc-event-main, .fc-v-event.text-dark .fc-event-main {
            color: currentColor
        }

        .fc-h-event .fc-event-title, .fc-v-event .fc-event-title {
            font-weight: 600 !important
        }

        .fc-daygrid-dot-event.fc-event-mirror, .fc-daygrid-dot-event:hover {
            background-color: var(--ar-gray-200)
        }

        .fc-daygrid-event-dot, .fc-list-event-dot {
            --fc-event-border-color: var(--ar-primary)
        }

        .event-custom-style.fc-daygrid-event {
            flex-direction: column;
            align-items: start
        }

        .event-custom-style .fc-daygrid-event-dot {
            display: none
        }

        .event-custom-style .fc-event-time {
            font-size: calc(var(--ar-body-font-size) * .75)
        }

        tr.event-custom-style {
            background-color: rgba(0, 0, 0, 0) !important
        }

        .border-purple {
            border-color: #7950ed !important
        }

        .fc-daygrid-event-harness {
            margin-bottom: .25rem
        }

        .fc-timegrid-event-harness-inset .fc-timegrid-event, .fc-timegrid-event.fc-event-mirror, .fc-timegrid-more-link {
            box-shadow: 0 0 0 1px rgba(255, 255, 255, .3)
        }

        .ct-chart {
            --ar-chart-line-color: var(--ar-primary);
            --ar-chart-line-width: 0.125rem;
            --ar-chart-point-color: var(--ar-primary);
            --ar-chart-point-size: 0.625rem;
            --ar-chart-bar-color: var(--ar-primary);
            --ar-chart-bar-width: 0.625rem;
            --ar-chart-pie-label-color: #fff
        }

        .ct-line {
            stroke: var(--ar-chart-line-color) !important;
            stroke-width: var(--ar-chart-line-width)
        }

        .ct-point {
            stroke: var(--ar-chart-point-color) !important;
            stroke-width: var(--ar-chart-point-size)
        }

        .ct-bar {
            stroke: var(--ar-chart-bar-color) !important;
            stroke-width: var(--ar-chart-bar-width)
        }

        .ct-chart-pie .ct-label, .ct-chart-donut .ct-label {
            fill: var(--ar-chart-pie-label-color);
            font-size: var(--ar-body-font-size)
        }

        .steps {
            --ar-steps-padding-y: 1.5rem;
            --ar-steps-padding-x: 1.5rem;
            --ar-steps-number-size: 4.5rem;
            --ar-steps-number-inner-size: 3.5rem;
            --ar-steps-number-border-radius: 50%;
            --ar-steps-number-font-size: calc(var(--ar-body-font-size) * 1.25);
            --ar-steps-number-inner-bg: var(--ar-gray-100);
            --ar-steps-number-color: var(--ar-primary);
            --ar-steps-connect-width: var(--ar-border-width);
            --ar-steps-connect-style: dashed;
            --ar-steps-connect-color: var(--ar-gray-400);
            --ar-steps-active-number-bg: rgba(var(--ar-primary-rgb), 0.1);
            --ar-steps-active-number-inner-bg: var(--ar-primary);
            --ar-steps-active-number-color: #fff;
            display: flex;
            flex-direction: column;
            margin: calc(var(--ar-steps-padding-y) * -1) 0
        }

        .step {
            position: relative;
            display: flex;
            align-items: center;
            padding: var(--ar-steps-padding-y) 0
        }

        .step::before, .step::after {
            position: absolute;
            left: calc(var(--ar-steps-number-size) * .5);
            height: calc(50% - var(--ar-steps-number-size) * .5);
            border-left: var(--ar-steps-connect-width) var(--ar-steps-connect-style) var(--ar-steps-connect-color)
        }

        .step::before {
            top: 0
        }

        .step::after {
            bottom: 0
        }

        .step:not(:first-child)::before {
            content: ""
        }

        .step:not(:last-child)::after {
            content: ""
        }

        .step-number {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            width: var(--ar-steps-number-size);
            height: var(--ar-steps-number-size)
        }

        .step-number::before {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            transform: scale(0.5);
            transition: transform .3s ease-in-out, opacity .2s;
            border-radius: var(--ar-steps-number-border-radius);
            background-color: var(--ar-steps-active-number-bg);
            opacity: 0;
            content: ""
        }

        .step-number-inner {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            width: var(--ar-steps-number-inner-size);
            height: var(--ar-steps-number-inner-size);
            transition: color .3s ease-in-out, background-color .3s ease-in-out;
            border-radius: var(--ar-steps-number-border-radius);
            background-color: var(--ar-steps-number-inner-bg);
            color: var(--ar-steps-number-color);
            font-size: var(--ar-steps-number-font-size);
            font-weight: 700;
            z-index: 2
        }

        .step-body {
            padding-left: var(--ar-steps-padding-x)
        }

        .steps-hoverable .step:hover .step-number::before, .step.active .step-number::before {
            transform: scale(1);
            opacity: 1
        }

        .steps-hoverable .step:hover .step-number-inner, .step.active .step-number-inner {
            background-color: var(--ar-steps-active-number-inner-bg);
            color: var(--ar-steps-active-number-color)
        }

        .steps-no-connector .step::before, .steps-no-connector .step::after {
            display: none !important
        }

        @media (min-width: 576px) {
            .steps-horizontal-sm.steps {
                flex-direction: row;
                margin: 0 calc(var(--ar-steps-padding-x) * -1)
            }

            .steps-horizontal-sm .step {
                display: block;
                flex-basis: 0;
                flex-grow: 1;
                padding: 0 var(--ar-steps-padding-x)
            }

            .steps-horizontal-sm .step::before, .steps-horizontal-sm .step::after {
                top: calc(var(--ar-steps-number-size) * .5);
                border-top: var(--ar-steps-connect-width) var(--ar-steps-connect-style) var(--ar-steps-connect-color);
                border-left: 0
            }

            .steps-horizontal-sm .step::before {
                display: none
            }

            .steps-horizontal-sm .step::after {
                right: calc(var(--ar-steps-padding-y) * -1);
                left: auto;
                width: calc(100% - var(--ar-steps-number-size));
                height: auto
            }

            .steps-horizontal-sm .step-body {
                padding-top: var(--ar-steps-padding-y);
                padding-left: 0
            }

            .steps-horizontal-sm.steps-center {
                text-align: center
            }

            .steps-horizontal-sm.steps-center .step::before, .steps-horizontal-sm.steps-center .step::after {
                display: block;
                width: calc(50% - var(--ar-steps-number-size) * .5)
            }

            .steps-horizontal-sm.steps-center .step::before {
                left: 0
            }

            .steps-horizontal-sm.steps-center .step::after {
                right: 0
            }

            .steps-horizontal-sm.steps-center .step:first-child::before {
                display: none
            }

            .steps-horizontal-sm.steps-center .step:last-child::after {
                display: none
            }

            .steps-horizontal-sm.steps-center .step-number {
                margin-right: auto;
                margin-left: auto
            }

            .steps-horizontal-sm.steps-end {
                text-align: right
            }

            .steps-horizontal-sm.steps-end .step::after {
                right: auto;
                left: calc(var(--ar-steps-padding-y) * -1)
            }

            .steps-horizontal-sm.steps-end .step:first-child::after {
                display: none
            }

            .steps-horizontal-sm.steps-end .step:last-child::after {
                content: ""
            }

            .steps-horizontal-sm.steps-end .step-number {
                margin-left: auto
            }
        }

        @media (min-width: 768px) {
            .steps-horizontal-md.steps {
                flex-direction: row;
                margin: 0 calc(var(--ar-steps-padding-x) * -1)
            }

            .steps-horizontal-md .step {
                display: block;
                flex-basis: 0;
                flex-grow: 1;
                padding: 0 var(--ar-steps-padding-x)
            }

            .steps-horizontal-md .step::before, .steps-horizontal-md .step::after {
                top: calc(var(--ar-steps-number-size) * .5);
                border-top: var(--ar-steps-connect-width) var(--ar-steps-connect-style) var(--ar-steps-connect-color);
                border-left: 0
            }

            .steps-horizontal-md .step::before {
                display: none
            }

            .steps-horizontal-md .step::after {
                right: calc(var(--ar-steps-padding-y) * -1);
                left: auto;
                width: calc(100% - var(--ar-steps-number-size));
                height: auto
            }

            .steps-horizontal-md .step-body {
                padding-top: var(--ar-steps-padding-y);
                padding-left: 0
            }

            .steps-horizontal-md.steps-center {
                text-align: center
            }

            .steps-horizontal-md.steps-center .step::before, .steps-horizontal-md.steps-center .step::after {
                display: block;
                width: calc(50% - var(--ar-steps-number-size) * .5)
            }

            .steps-horizontal-md.steps-center .step::before {
                left: 0
            }

            .steps-horizontal-md.steps-center .step::after {
                right: 0
            }

            .steps-horizontal-md.steps-center .step:first-child::before {
                display: none
            }

            .steps-horizontal-md.steps-center .step:last-child::after {
                display: none
            }

            .steps-horizontal-md.steps-center .step-number {
                margin-right: auto;
                margin-left: auto
            }

            .steps-horizontal-md.steps-end {
                text-align: right
            }

            .steps-horizontal-md.steps-end .step::after {
                right: auto;
                left: calc(var(--ar-steps-padding-y) * -1)
            }

            .steps-horizontal-md.steps-end .step:first-child::after {
                display: none
            }

            .steps-horizontal-md.steps-end .step:last-child::after {
                content: ""
            }

            .steps-horizontal-md.steps-end .step-number {
                margin-left: auto
            }
        }

        @media (min-width: 992px) {
            .steps-horizontal-lg.steps {
                flex-direction: row;
                margin: 0 calc(var(--ar-steps-padding-x) * -1)
            }

            .steps-horizontal-lg .step {
                display: block;
                flex-basis: 0;
                flex-grow: 1;
                padding: 0 var(--ar-steps-padding-x)
            }

            .steps-horizontal-lg .step::before, .steps-horizontal-lg .step::after {
                top: calc(var(--ar-steps-number-size) * .5);
                border-top: var(--ar-steps-connect-width) var(--ar-steps-connect-style) var(--ar-steps-connect-color);
                border-left: 0
            }

            .steps-horizontal-lg .step::before {
                display: none
            }

            .steps-horizontal-lg .step::after {
                right: calc(var(--ar-steps-padding-y) * -1);
                left: auto;
                width: calc(100% - var(--ar-steps-number-size));
                height: auto
            }

            .steps-horizontal-lg .step-body {
                padding-top: var(--ar-steps-padding-y);
                padding-left: 0
            }

            .steps-horizontal-lg.steps-center {
                text-align: center
            }

            .steps-horizontal-lg.steps-center .step::before, .steps-horizontal-lg.steps-center .step::after {
                display: block;
                width: calc(50% - var(--ar-steps-number-size) * .5)
            }

            .steps-horizontal-lg.steps-center .step::before {
                left: 0
            }

            .steps-horizontal-lg.steps-center .step::after {
                right: 0
            }

            .steps-horizontal-lg.steps-center .step:first-child::before {
                display: none
            }

            .steps-horizontal-lg.steps-center .step:last-child::after {
                display: none
            }

            .steps-horizontal-lg.steps-center .step-number {
                margin-right: auto;
                margin-left: auto
            }

            .steps-horizontal-lg.steps-end {
                text-align: right
            }

            .steps-horizontal-lg.steps-end .step::after {
                right: auto;
                left: calc(var(--ar-steps-padding-y) * -1)
            }

            .steps-horizontal-lg.steps-end .step:first-child::after {
                display: none
            }

            .steps-horizontal-lg.steps-end .step:last-child::after {
                content: ""
            }

            .steps-horizontal-lg.steps-end .step-number {
                margin-left: auto
            }
        }

        @media (min-width: 1200px) {
            .steps-horizontal-xl.steps {
                flex-direction: row;
                margin: 0 calc(var(--ar-steps-padding-x) * -1)
            }

            .steps-horizontal-xl .step {
                display: block;
                flex-basis: 0;
                flex-grow: 1;
                padding: 0 var(--ar-steps-padding-x)
            }

            .steps-horizontal-xl .step::before, .steps-horizontal-xl .step::after {
                top: calc(var(--ar-steps-number-size) * .5);
                border-top: var(--ar-steps-connect-width) var(--ar-steps-connect-style) var(--ar-steps-connect-color);
                border-left: 0
            }

            .steps-horizontal-xl .step::before {
                display: none
            }

            .steps-horizontal-xl .step::after {
                right: calc(var(--ar-steps-padding-y) * -1);
                left: auto;
                width: calc(100% - var(--ar-steps-number-size));
                height: auto
            }

            .steps-horizontal-xl .step-body {
                padding-top: var(--ar-steps-padding-y);
                padding-left: 0
            }

            .steps-horizontal-xl.steps-center {
                text-align: center
            }

            .steps-horizontal-xl.steps-center .step::before, .steps-horizontal-xl.steps-center .step::after {
                display: block;
                width: calc(50% - var(--ar-steps-number-size) * .5)
            }

            .steps-horizontal-xl.steps-center .step::before {
                left: 0
            }

            .steps-horizontal-xl.steps-center .step::after {
                right: 0
            }

            .steps-horizontal-xl.steps-center .step:first-child::before {
                display: none
            }

            .steps-horizontal-xl.steps-center .step:last-child::after {
                display: none
            }

            .steps-horizontal-xl.steps-center .step-number {
                margin-right: auto;
                margin-left: auto
            }

            .steps-horizontal-xl.steps-end {
                text-align: right
            }

            .steps-horizontal-xl.steps-end .step::after {
                right: auto;
                left: calc(var(--ar-steps-padding-y) * -1)
            }

            .steps-horizontal-xl.steps-end .step:first-child::after {
                display: none
            }

            .steps-horizontal-xl.steps-end .step:last-child::after {
                content: ""
            }

            .steps-horizontal-xl.steps-end .step-number {
                margin-left: auto
            }
        }

        @media (min-width: 1400px) {
            .steps-horizontal-xxl.steps {
                flex-direction: row;
                margin: 0 calc(var(--ar-steps-padding-x) * -1)
            }

            .steps-horizontal-xxl .step {
                display: block;
                flex-basis: 0;
                flex-grow: 1;
                padding: 0 var(--ar-steps-padding-x)
            }

            .steps-horizontal-xxl .step::before, .steps-horizontal-xxl .step::after {
                top: calc(var(--ar-steps-number-size) * .5);
                border-top: var(--ar-steps-connect-width) var(--ar-steps-connect-style) var(--ar-steps-connect-color);
                border-left: 0
            }

            .steps-horizontal-xxl .step::before {
                display: none
            }

            .steps-horizontal-xxl .step::after {
                right: calc(var(--ar-steps-padding-y) * -1);
                left: auto;
                width: calc(100% - var(--ar-steps-number-size));
                height: auto
            }

            .steps-horizontal-xxl .step-body {
                padding-top: var(--ar-steps-padding-y);
                padding-left: 0
            }

            .steps-horizontal-xxl.steps-center {
                text-align: center
            }

            .steps-horizontal-xxl.steps-center .step::before, .steps-horizontal-xxl.steps-center .step::after {
                display: block;
                width: calc(50% - var(--ar-steps-number-size) * .5)
            }

            .steps-horizontal-xxl.steps-center .step::before {
                left: 0
            }

            .steps-horizontal-xxl.steps-center .step::after {
                right: 0
            }

            .steps-horizontal-xxl.steps-center .step:first-child::before {
                display: none
            }

            .steps-horizontal-xxl.steps-center .step:last-child::after {
                display: none
            }

            .steps-horizontal-xxl.steps-center .step-number {
                margin-right: auto;
                margin-left: auto
            }

            .steps-horizontal-xxl.steps-end {
                text-align: right
            }

            .steps-horizontal-xxl.steps-end .step::after {
                right: auto;
                left: calc(var(--ar-steps-padding-y) * -1)
            }

            .steps-horizontal-xxl.steps-end .step:first-child::after {
                display: none
            }

            .steps-horizontal-xxl.steps-end .step:last-child::after {
                content: ""
            }

            .steps-horizontal-xxl.steps-end .step-number {
                margin-left: auto
            }
        }

        .steps-horizontal.steps {
            flex-direction: row;
            margin: 0 calc(var(--ar-steps-padding-x) * -1)
        }

        .steps-horizontal .step {
            display: block;
            flex-basis: 0;
            flex-grow: 1;
            padding: 0 var(--ar-steps-padding-x)
        }

        .steps-horizontal .step::before, .steps-horizontal .step::after {
            top: calc(var(--ar-steps-number-size) * .5);
            border-top: var(--ar-steps-connect-width) var(--ar-steps-connect-style) var(--ar-steps-connect-color);
            border-left: 0
        }

        .steps-horizontal .step::before {
            display: none
        }

        .steps-horizontal .step::after {
            right: calc(var(--ar-steps-padding-y) * -1);
            left: auto;
            width: calc(100% - var(--ar-steps-number-size));
            height: auto
        }

        .steps-horizontal .step-body {
            padding-top: var(--ar-steps-padding-y);
            padding-left: 0
        }

        .steps-horizontal.steps-center {
            text-align: center
        }

        .steps-horizontal.steps-center .step::before, .steps-horizontal.steps-center .step::after {
            display: block;
            width: calc(50% - var(--ar-steps-number-size) * .5)
        }

        .steps-horizontal.steps-center .step::before {
            left: 0
        }

        .steps-horizontal.steps-center .step::after {
            right: 0
        }

        .steps-horizontal.steps-center .step:first-child::before {
            display: none
        }

        .steps-horizontal.steps-center .step:last-child::after {
            display: none
        }

        .steps-horizontal.steps-center .step-number {
            margin-right: auto;
            margin-left: auto
        }

        .steps-horizontal.steps-end {
            text-align: right
        }

        .steps-horizontal.steps-end .step::after {
            right: auto;
            left: calc(var(--ar-steps-padding-y) * -1)
        }

        .steps-horizontal.steps-end .step:first-child::after {
            display: none
        }

        .steps-horizontal.steps-end .step:last-child::after {
            content: ""
        }

        .steps-horizontal.steps-end .step-number {
            margin-left: auto
        }

        .hotspots, .hotspots-alt {
            position: relative
        }

        .hotspots .hotspot, .hotspots-alt .hotspot {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: border-color .25s ease-in-out, background-color .25s ease-in-out;
            border-radius: 50%;
            cursor: pointer;
            z-index: 2
        }

        .hotspots .hotspot-inner, .hotspots-alt .hotspot-inner {
            display: flex;
            align-items: center;
            justify-content: center;
            transition: color .25s ease-in-out, background-color .25s ease-in-out;
            border-radius: 50%
        }

        .hotspots {
            --ar-hotspots-size: 4rem;
            --ar-hotspots-border-width: var(--ar-border-width);
            --ar-hotspots-border-color: rgba(255, 255, 255, 0.5);
            --ar-hotspots-color: var(--ar-primary);
            --ar-hotspots-inner-bg: #fff;
            --ar-hotspots-hover-border-color: rgba(var(--ar-primary-rgb), 0.5);
            --ar-hotspots-hover-color: #fff;
            --ar-hotspots-hover-inner-bg: var(--ar-primary)
        }

        .hotspots .hotspot {
            width: var(--ar-hotspots-size);
            height: var(--ar-hotspots-size);
            border: var(--ar-hotspots-border-width) solid var(--ar-hotspots-border-color)
        }

        .hotspots .hotspot-inner {
            width: calc(var(--ar-hotspots-size) - 1rem);
            height: calc(var(--ar-hotspots-size) - 1rem);
            background-color: var(--ar-hotspots-inner-bg);
            color: var(--ar-hotspots-color);
            font-weight: 600
        }

        .hotspots [class^=ai-], .hotspots [class*=" ai-"] {
            font-size: 1.2em
        }

        .hotspots .hotspot:hover, .hotspots .hotspot:focus {
            border-color: var(--ar-hotspots-hover-border-color)
        }

        .hotspots .hotspot:hover .hotspot-inner, .hotspots .hotspot:focus .hotspot-inner {
            background-color: var(--ar-hotspots-hover-inner-bg);
            color: var(--ar-hotspots-hover-color)
        }

        .hotspots-alt {
            --ar-hotspots-size: 2rem;
            --ar-hotspots-border-width: var(--ar-border-width);
            --ar-hotspots-border-color: rgba(255, 255, 255, 0.4);
            --ar-hotspots-bg: rgba(255, 255, 255, 0.1);
            --ar-hotspots-inner-bg: #fff;
            --ar-hotspots-hover-border-color: rgba(var(--ar-primary-rgb), 0.4);
            --ar-hotspots-hover-bg: rgba(var(--ar-primary-rgb), 0.2);
            --ar-hotspots-hover-inner-bg: var(--ar-primary)
        }

        .hotspots-alt .hotspot {
            background-color: var(--ar-hotspots-bg);
            -webkit-backdrop-filter: blur(0.25rem);
            backdrop-filter: blur(0.25rem)
        }

        .hotspots-alt .hotspot:hover, .hotspots-alt .hotspot:focus {
            background-color: var(--ar-hotspots-hover-bg)
        }

        .hotspots-alt .hotspot-inner {
            width: calc(var(--ar-hotspots-size) - 1.25rem);
            height: calc(var(--ar-hotspots-size) - 1.25rem)
        }

        img-comparison-slider {
            display: block;
            --divider-width: 0.1875rem;
            --divider-color: var(--ar-primary);
            --default-handle-opacity: 1
        }

        img-comparison-slider:focus {
            outline: none
        }

        .binded-content {
            position: relative;
            height: 100%
        }

        .binded-item {
            display: flex;
            position: absolute;
            top: 0;
            left: 0;
            flex-direction: column;
            width: 100%;
            height: 100%;
            transition: opacity .35s ease-in-out, visibility .35s ease-in-out;
            visibility: hidden;
            opacity: 0
        }

        .binded-item.active {
            position: relative;
            visibility: visible;
            opacity: 1
        }

        .swap-image {
            display: inline-block;
            position: relative;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none
        }

        .swap-image .swap-from, .swap-image .swap-to {
            display: block;
            transition: opacity .25s ease-in-out
        }

        .swap-image .swap-to {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            z-index: 0
        }

        .swap-image:hover .swap-from, .swap-image.active .swap-from {
            opacity: 0
        }

        .swap-image:hover .swap-to, .swap-image.active .swap-to {
            opacity: 1
        }

        .card:hover > .swap-image .swap-from, .card:hover > .swap-image .swap-to, .card.card-active > .swap-image .swap-from, .card.card-active > .swap-image .swap-to, .nav-link:hover > .swap-image .swap-from, .nav-link:hover > .swap-image .swap-to, .nav-link.active > .swap-image .swap-from, .nav-link.active > .swap-image .swap-to {
            transition-duration: .2s
        }

        .card:hover > .swap-image .swap-from, .card.card-active > .swap-image .swap-from, .nav-link:hover > .swap-image .swap-from, .nav-link.active > .swap-image .swap-from {
            opacity: 0
        }

        .card:hover > .swap-image .swap-to, .card.card-active > .swap-image .swap-to, .nav-link:hover > .swap-image .swap-to, .nav-link.active > .swap-image .swap-to {
            opacity: 1
        }

        .zoom-effect-wrapper {
            position: relative;
            transform: translateZ(0);
            overflow: hidden
        }

        .zoom-effect-img {
            display: block;
            transition: transform .4s ease-in-out
        }

        .zoom-effect:hover .zoom-effect-img {
            transform: scale(1.05)
        }

        .polygon-avatar {
            display: block;
            width: 6.25rem;
            height: 6.25rem;
            -webkit-clip-path: path("M44.2392 4.03005C47.6985 1.61004 52.3015 1.61004 55.7608 4.03005C57.9922 5.59105 60.7615 6.1797 63.4349 5.66124C67.5795 4.85747 71.7845 6.72967 73.9604 10.3475C75.364 12.6811 77.6545 14.3453 80.3076 14.959C84.4207 15.9105 87.5007 19.3311 88.0171 23.5212C88.3501 26.224 89.7657 28.6759 91.9398 30.3157C95.3104 32.8578 96.7328 37.2355 95.5002 41.2733C94.7051 43.8779 95.0011 46.6936 96.3203 49.0759C98.3654 52.7692 97.8843 57.347 95.116 60.5344C93.3303 62.5904 92.4554 65.283 92.6915 67.996C93.0577 72.2018 90.7562 76.1881 86.9307 77.974C84.4632 79.1259 82.5687 81.2299 81.681 83.8044C80.3048 87.7955 76.581 90.5011 72.3599 90.5766C69.6371 90.6253 67.0507 91.7768 65.1926 93.7677C62.312 96.854 57.8096 97.811 53.9228 96.1631C51.4156 95.1002 48.5844 95.1002 46.0772 96.1631C42.1904 97.811 37.688 96.854 34.8074 93.7677C32.9493 91.7768 30.3629 90.6253 27.6401 90.5766C23.419 90.5011 19.6952 87.7955 18.319 83.8044C17.4313 81.2299 15.5368 79.1259 13.0693 77.974C9.24381 76.1881 6.94232 72.2018 7.30846 67.996C7.54464 65.283 6.66974 62.5904 4.88405 60.5344C2.1157 57.347 1.63456 52.7692 3.67971 49.0759C4.99892 46.6936 5.29487 43.8779 4.4998 41.2733C3.26722 37.2355 4.68961 32.8578 8.06016 30.3157C10.2343 28.6759 11.6499 26.224 11.9829 23.5212C12.4993 19.3311 15.5793 15.9105 19.6924 14.959C22.3455 14.3453 24.636 12.6811 26.0396 10.3475C28.2155 6.72967 32.4205 4.85747 36.5651 5.66124C39.2385 6.1797 42.0078 5.59105 44.2392 4.03005Z");
            clip-path: path("M44.2392 4.03005C47.6985 1.61004 52.3015 1.61004 55.7608 4.03005C57.9922 5.59105 60.7615 6.1797 63.4349 5.66124C67.5795 4.85747 71.7845 6.72967 73.9604 10.3475C75.364 12.6811 77.6545 14.3453 80.3076 14.959C84.4207 15.9105 87.5007 19.3311 88.0171 23.5212C88.3501 26.224 89.7657 28.6759 91.9398 30.3157C95.3104 32.8578 96.7328 37.2355 95.5002 41.2733C94.7051 43.8779 95.0011 46.6936 96.3203 49.0759C98.3654 52.7692 97.8843 57.347 95.116 60.5344C93.3303 62.5904 92.4554 65.283 92.6915 67.996C93.0577 72.2018 90.7562 76.1881 86.9307 77.974C84.4632 79.1259 82.5687 81.2299 81.681 83.8044C80.3048 87.7955 76.581 90.5011 72.3599 90.5766C69.6371 90.6253 67.0507 91.7768 65.1926 93.7677C62.312 96.854 57.8096 97.811 53.9228 96.1631C51.4156 95.1002 48.5844 95.1002 46.0772 96.1631C42.1904 97.811 37.688 96.854 34.8074 93.7677C32.9493 91.7768 30.3629 90.6253 27.6401 90.5766C23.419 90.5011 19.6952 87.7955 18.319 83.8044C17.4313 81.2299 15.5368 79.1259 13.0693 77.974C9.24381 76.1881 6.94232 72.2018 7.30846 67.996C7.54464 65.283 6.66974 62.5904 4.88405 60.5344C2.1157 57.347 1.63456 52.7692 3.67971 49.0759C4.99892 46.6936 5.29487 43.8779 4.4998 41.2733C3.26722 37.2355 4.68961 32.8578 8.06016 30.3157C10.2343 28.6759 11.6499 26.224 11.9829 23.5212C12.4993 19.3311 15.5793 15.9105 19.6924 14.959C22.3455 14.3453 24.636 12.6811 26.0396 10.3475C28.2155 6.72967 32.4205 4.85747 36.5651 5.66124C39.2385 6.1797 42.0078 5.59105 44.2392 4.03005Z")
        }

        @-webkit-keyframes rotate-cw {
            to {
                transform: rotate(360deg)
            }
        }

        @keyframes rotate-cw {
            to {
                transform: rotate(360deg)
            }
        }

        @-webkit-keyframes rotate-ccw {
            to {
                transform: rotate(-360deg)
            }
        }

        @keyframes rotate-ccw {
            to {
                transform: rotate(-360deg)
            }
        }

        @-webkit-keyframes swinging {
            0% {
                transform: rotate(10deg)
            }
            50% {
                transform: rotate(-5deg)
            }
            100% {
                transform: rotate(10deg)
            }
        }

        @keyframes swinging {
            0% {
                transform: rotate(10deg)
            }
            50% {
                transform: rotate(-5deg)
            }
            100% {
                transform: rotate(10deg)
            }
        }

        @-webkit-keyframes heartbeat {
            0%, 40%, 80%, 100% {
                transform: scale(0.8)
            }
            20%, 60% {
                transform: scale(1)
            }
        }

        @keyframes heartbeat {
            0%, 40%, 80%, 100% {
                transform: scale(0.8)
            }
            20%, 60% {
                transform: scale(1)
            }
        }

        .heartbeat {
            -webkit-animation: heartbeat 1.4s infinite;
            animation: heartbeat 1.4s infinite
        }

        @-webkit-keyframes blinking {
            from {
                opacity: 0
            }
        }

        @keyframes blinking {
            from {
                opacity: 0
            }
        }

        .blinking {
            -webkit-animation: blinking 1s infinite;
            animation: blinking 1s infinite
        }

        .dark-mode {
            --ar-gray-100: rgba(255, 255, 255, .025);
            --ar-gray-200: rgba(255, 255, 255, .05);
            --ar-gray-300: rgba(255, 255, 255, .13);
            --ar-gray-400: rgba(255, 255, 255, .25);
            --ar-gray-500: rgba(255, 255, 255, .4);
            --ar-gray-600: rgba(255, 255, 255, .5);
            --ar-gray-700: rgba(255, 255, 255, .7);
            --ar-gray-800: rgba(255, 255, 255, .9);
            --ar-gray-900: #fff;
            --ar-body-bg: #121519;
            --ar-body-bg-rgb: 18, 21, 25;
            --ar-body-color: var(--ar-gray-700);
            --ar-secondary-bg: var(--ar-gray-100);
            --ar-border-color: rgba(255, 255, 255, 0.13);
            --ar-heading-color: var(--ar-gray-900);
            --ar-nav-link-color: var(--ar-gray-800)
        }

        .dark-mode .d-dark-mode-none {
            display: none !important
        }

        .dark-mode .d-dark-mode-block {
            display: block !important
        }

        .dark-mode .d-dark-mode-inline {
            display: inline !important
        }

        .dark-mode .d-dark-mode-inline-block {
            display: inline-block !important
        }

        .dark-mode .d-dark-mode-inline-flex {
            display: inline-flex !important
        }

        .dark-mode .d-dark-mode-flex {
            display: flex !important
        }

        .dark-mode .border-dashed {
            border-color: rgba(255, 255, 255, .18) !important
        }

        .dark-mode .text-dark:not(.badge) {
            color: rgba(var(--ar-light-rgb), var(--ar-text-opacity)) !important
        }

        .dark-mode .border-dark:not(.badge) {
            border-color: var(--ar-gray-800) !important
        }

        .dark-mode .bg-light:not(.badge) {
            background-color: var(--ar-dark) !important
        }

        .dark-mode .bg-white.badge, .dark-mode .bg-light.badge {
            color: #434a57
        }

        .dark-mode .text-dark-mode-dark {
            color: var(--ar-dark) !important
        }

        .dark-mode .bg-secondary {
            background-color: var(--ar-secondary-bg) !important
        }

        .dark-mode body.bg-secondary {
            background-color: rgba(var(--ar-body-bg-rgb), 0.975) !important
        }

        .dark-mode .bg-secondary.badge {
            background-color: var(--ar-gray-200) !important
        }

        .dark-mode .shadow {
            box-shadow: 0 .4375rem 1.25rem rgba(0, 0, 0, .4) !important
        }

        .dark-mode .ignore-dark-mode {
            --ar-gray-100: #f6f9fc;
            --ar-gray-200: #edf1f5;
            --ar-gray-300: #e3e9ef;
            --ar-gray-400: #d7dde2;
            --ar-gray-500: #b4bbc3;
            --ar-gray-600: #858c97;
            --ar-gray-700: #576071;
            --ar-gray-800: #434a57;
            --ar-gray-900: #121519;
            --ar-border-color: var(--ar-gray-300);
            --ar-body-color: var(--ar-gray-700);
            --ar-heading-color: var(--ar-gray-900);
            --ar-nav-link-color: var(--ar-gray-800)
        }

        .dark-mode .ignore-dark-mode p, .dark-mode .ignore-dark-mode ul, .dark-mode .ignore-dark-mode ol, .dark-mode .ignore-dark-mode span, .dark-mode .ignore-dark-mode dd {
            color: var(--ar-body-color)
        }

        .dark-mode .ignore-dark-mode .text-dark {
            color: var(--ar-dark) !important
        }

        .dark-mode .table:not(.ignore-dark-mode) {
            --ar-table-striped-bg: rgba(255, 255, 255, 0.0375);
            --ar-table-hover-bg: rgba(255, 255, 255, 0.05);
            --ar-table-hover-color: var(--ar-body-color)
        }

        .dark-mode .table:not(.ignore-dark-mode) > :not(:last-child) > :last-child > * {
            border-bottom-color: rgba(255, 255, 255, .3)
        }

        .dark-mode .btn-secondary:not(.ignore-dark-mode) {
            --ar-btn-color: var(--ar-gray-800) !important;
            --ar-btn-hover-color: #fff !important;
            --ar-btn-active-color: #fff !important;
            --ar-btn-border-color: transparent;
            --ar-btn-hover-border-color: transparent;
            --ar-btn-active-border-color: transparent;
            --ar-btn-bg: var(--ar-gray-200);
            --ar-btn-hover-bg: rgba(255, 255, 255, .1);
            --ar-btn-active-bg: rgba(255, 255, 255, .1)
        }

        .dark-mode .btn-outline-secondary:not(.ignore-dark-mode) {
            --ar-btn-color: var(--ar-gray-800);
            --ar-btn-hover-color: var(--ar-gray-800);
            --ar-btn-active-color: var(--ar-gray-800);
            --ar-btn-border-color: rgba(255, 255, 255, .18);
            --ar-btn-hover-border-color: rgba(255, 255, 255, .18);
            --ar-btn-active-border-color: rgba(255, 255, 255, .18);
            --ar-btn-hover-bg: var(--ar-gray-200);
            --ar-btn-active-bg: var(--ar-gray-200)
        }

        .dark-mode .form-select:not(.ignore-dark-mode) {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='rgba%28255, 255, 255, 0.6%29' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e")
        }

        @-moz-document url-prefix() {
            .dark-mode option {
                color: #434a57
            }
        }

        .dark-mode .form-switch:not(.ignore-dark-mode) .form-check-input {
            background-color: rgba(255, 255, 255, .25)
        }

        .dark-mode .form-switch:not(.ignore-dark-mode) .form-check-input:checked {
            background-color: var(--ar-primary)
        }

        .dark-mode .btn-check + .btn-outline-secondary {
            --ar-btn-hover-bg: transparent;
            --ar-btn-active-bg: transparent
        }

        .dark-mode .btn-check + .btn-outline-secondary.btn-icon {
            --ar-btn-border-color: transparent;
            --ar-btn-hover-border-color: transparent
        }

        .dark-mode .btn-check:checked + .btn-icon.btn-outline-secondary {
            --ar-btn-active-border-color: rgba(255, 255, 255, .3)
        }

        .dark-mode .range-slider:not(.ignore-dark-mode) {
            --ar-range-slider-pips-border-color: rgba(255, 255, 255, .2)
        }

        .dark-mode .credit-card-icon:not(.ignore-dark-mode) {
            background-position: 0 -26px
        }

        .dark-mode .navbar:not(.ignore-dark-mode) {
            --ar-navbar-stuck-bg: var(--ar-dark);
            --ar-navbar-collapse-bg: var(--ar-dark)
        }

        .dark-mode .navbar.ignore-dark-mode .dropdown-menu {
            --ar-dropdown-color: #576071;
            --ar-dropdown-bg: #fff;
            --ar-dropdown-border-color: #f0f3f6;
            --ar-dropdown-box-shadow: 0 0.4375rem 1.25rem rgba(208, 208, 196, 0.32);
            --ar-dropdown-link-color: var(--ar-gray-800);
            --ar-dropdown-link-hover-color: var(--ar-primary);
            --ar-dropdown-divider-bg: var(--ar-border-color);
            --ar-dropdown-link-hover-bg: transparent;
            --ar-dropdown-link-active-color: var(--ar-primary);
            --ar-dropdown-link-active-bg: transparent;
            --ar-dropdown-link-disabled-color: var(--ar-gray-600);
            --ar-dropdown-header-color: var(--ar-gray-900)
        }

        .dark-mode .placeholder {
            opacity: .24
        }

        @keyframes placeholder-glow {
            50% {
                opacity: .1
            }
        }

        .dark-mode .placeholder-wave {
            -webkit-mask-image: linear-gradient(130deg, #000 55%, rgba(0, 0, 0, 0.9) 75%, #000 95%);
            mask-image: linear-gradient(130deg, #000 55%, rgba(0, 0, 0, 0.9) 75%, #000 95%)
        }

        .dark-mode .card:not(.ignore-dark-mode) {
            --ar-card-bg: var(--ar-dark)
        }

        .dark-mode .card-flip-back {
            background-color: var(--ar-dark)
        }

        .dark-mode .card-hover-primary:hover {
            border-color: var(--ar-primary) !important;
            background-color: var(--ar-primary) !important
        }

        .dark-mode .accordion:not(.ignore-dark-mode) {
            --ar-accordion-bg: rgba(255, 255, 255, 0.02);
            --ar-accordion-btn-color: rgba(255, 255, 255, 0.9);
            --ar-accordion-btn-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='rgba%28255, 255, 255, 0.9%29'%3e%3cpath d='M.5 6.3c.6-.6 1.6-.6 2.3 0l9.3 9.3 9.3-9.3c.6-.6 1.6-.6 2.3 0 .6.6.6 1.6 0 2.3L13.3 18.8c-.6.6-1.6.6-2.3 0L.8 8.5c-.9-.8-.9-1.6-.3-2.2z'/%3e%3c/svg%3e")
        }

        .dark-mode .popover {
            --ar-popover-bg: #121519;
            --ar-popover-border-color: rgba(255, 255, 255, 0.13);
            box-shadow: 0 .4375rem 1.25rem rgba(0, 0, 0, .4)
        }

        .dark-mode .modal {
            --ar-modal-bg: var(--ar-dark)
        }

        .dark-mode .alert-primary {
            --ar-alert-bg: rgba(68, 140, 116, .05);
            --ar-alert-border-color: rgba(68, 140, 116, .25)
        }

        .dark-mode .alert-secondary {
            --ar-alert-bg: rgba(237, 241, 245, .05);
            --ar-alert-border-color: rgba(237, 241, 245, .25)
        }

        .dark-mode .alert-success {
            --ar-alert-bg: rgba(63, 202, 144, .05);
            --ar-alert-border-color: rgba(63, 202, 144, .25)
        }

        .dark-mode .alert-info {
            --ar-alert-bg: rgba(63, 127, 202, .05);
            --ar-alert-border-color: rgba(63, 127, 202, .25)
        }

        .dark-mode .alert-warning {
            --ar-alert-bg: rgba(237, 203, 80, .05);
            --ar-alert-border-color: rgba(237, 203, 80, .25)
        }

        .dark-mode .alert-danger {
            --ar-alert-bg: rgba(237, 80, 80, .05);
            --ar-alert-border-color: rgba(237, 80, 80, .25)
        }

        .dark-mode .alert-light {
            --ar-alert-bg: rgba(255, 255, 255, .05);
            --ar-alert-border-color: rgba(255, 255, 255, .25)
        }

        .dark-mode .alert-dark {
            --ar-alert-bg: rgba(18, 21, 25, .05);
            --ar-alert-border-color: rgba(18, 21, 25, .25)
        }

        .dark-mode .alert-secondary, .dark-mode .alert-light, .dark-mode .alert-dark {
            --ar-alert-border-color: var(--ar-border-color)
        }

        .dark-mode .alert-secondary, .dark-mode .alert-light {
            --ar-alert-bg: rgba(255, 255, 255, 0.04);
            --ar-alert-color: rgba(255, 255, 255, .8);
            --ar-alert-link-color: #fff
        }

        .dark-mode .progress {
            background-color: rgba(255, 255, 255, .08)
        }

        .dark-mode .progress-bar.bg-dark {
            background-color: #fff !important;
            color: #121519
        }

        .dark-mode .progress-bar.bg-dark.progress-bar-striped {
            background-image: linear-gradient(45deg, rgba(18, 21, 25, 0.15) 25%, transparent 25%, transparent 50%, rgba(18, 21, 25, 0.15) 50%, rgba(18, 21, 25, 0.15) 75%, transparent 75%, transparent)
        }

        .dark-mode .toast {
            --ar-toast-border-color: rgba(255, 255, 255, 0.13);
            --ar-toast-bg: #121519;
            box-shadow: 0 .4375rem 1.25rem rgba(0, 0, 0, .4)
        }

        .dark-mode .toast-header::after {
            display: block !important
        }

        .dark-mode .btn-close {
            filter: invert(1) grayscale(100%) brightness(200%)
        }

        .dark-mode .offcanvas, .dark-mode .offcanvas-sm, .dark-mode .offcanvas-md, .dark-mode .offcanvas-lg, .dark-mode .offcanvas-xl, .dark-mode .offcanvas-xxl {
            --ar-offcanvas-bg: var(--ar-dark);
            --ar-offcanvas-box-shadow: 0 0.4375rem 1.25rem rgba(0, 0, 0, 0.4)
        }

        .dark-mode [data-simplebar] {
            --ar-scrollbar-bg: rgba(255, 255, 255, 0.28);
            --ar-scrollbar-track-bg: rgba(255, 255, 255, 0.13)
        }

        .dark-mode .flatpickr-calendar {
            border-color: rgba(255, 255, 255, .13);
            background: var(--ar-dark);
            box-shadow: 0 .4375rem 1.25rem rgba(0, 0, 0, .4)
        }

        .dark-mode .flatpickr-day.inRange {
            border-color: rgba(0, 0, 0, 0) !important;
            box-shadow: -5px 0 0 rgba(255, 255, 255, .025), 5px 0 0 rgba(255, 255, 255, .025)
        }

        .dark-mode .ct-grid {
            stroke: rgba(255, 255, 255, .22)
        }

        .dark-mode .ct-label {
            color: rgba(255, 255, 255, .5)
        }

        .dark-mode .leaflet-popup-content-wrapper, .dark-mode .leaflet-popup-tip {
            background: #121519
        }

        .dark-mode .leaflet-container a.leaflet-popup-close-button {
            border-color: rgba(255, 255, 255, .18);
            color: rgba(255, 255, 255, .65)
        }

        .dark-mode .leaflet-container a.leaflet-popup-close-button:hover {
            color: #fff
        }

        .dark-mode .fc-col-header-cell {
            border-bottom-color: var(--ar-gray-300) !important
        }

        .dark-mode .fc-scrollgrid td {
            border-top-color: var(--ar-gray-300);
            border-left-color: var(--ar-gray-300)
        }

        .dark-mode .fc-list-day-cushion {
            background-color: #121519
        }

        /*# sourceMappingURL=theme.min.css.map */
    </style>


    <!-- Google Tag Manager-->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WKV3GT5');
    </script>
</head>
<!-- Body-->
<body>
<!-- Google Tag Manager (noscript)-->
<noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0"
            style="display: none; visibility: hidden;"></iframe>
</noscript>
<!-- Page loading spinner-->

<!-- Page wrapper-->
<main class="page-wrapper">
    <!-- Page content-->
    <div class="container overflow-hidden pb-5">
        <!-- Dangling lamp-->
        <div class="d-flex justify-content-center px-5 mt-n1"><img class="d-dark-mode-none"
                                                                   src="https://around.createx.studio/assets/img/404/lamp-light.png"
                                                                   width="348" alt="Lamp"
                                                                   style="transform-origin: 50% 0; animation: swinging 3.5s ease-in-out forwards infinite;"><img
                class="d-none d-dark-mode-block" src="assets/img/404/lamp-dark.png" width="348" alt="Lamp"
                style="transform-origin: 50% 0; animation: swinging 3.5s ease-in-out forwards infinite;"></div>
        <!-- Text + search bar-->
        <div class="d-flex justify-content-center pb-1 mb-md-1">
            <div style="max-width: 420px;">
                <div class="d-none d-sm-block" style="margin-top: -127px;"></div>
                <div class="d-sm-none" style="margin-top: -25%;"></div>
                <div class="d-flex align-items-center mb-4">
                    <h1 class="display-1 mb-0">404</h1>
                    <p class="text-dark lead ps-4 mb-0">Voy! Bu sahifa yetishmayapti...</p>
                </div>
                <form class="input-group">
                    <input class="form-control" type="search" placeholder="Enter keywords" required>
                    <button class="btn btn-dark" type="submit">Search</button>
                </form>
            </div>
        </div>
        <!-- Categories-->
        <h2 class="h4 text-center ">Bizning toifalarimizdan birini  tanlashingiz mumkin</h2>
        <div class="row g-4 pb-3 pb-lg-4 d-flex justify-content-center pb-xl-5">


                    @foreach($menuAll as $item)
                    <div class="col-sm-3">
                        <!-- Card-->
                        <div class="card zoom-effect border-0 rounded-1 overflow-hidden"><span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-10 zindex-2"></span>
                            <div class="zoom-effect-wrapper rounded-1"><img class="zoom-effect-img" src="{{asset('')}}{{$item->img}}" alt="Category image"></div><a class="card-body d-flex flex-column justify-content-end align-items-start position-absolute top-0 start-0 w-100 h-100 text-decoration-none zindex-3" href="shop-catalog.html"><span class="bg-light text-dark rounded-pill fs-sm fw-semibold lh-1 py-3 px-4">{{$item->name}}</span></a>
                        </div>
                    </div>

                    @endforeach
              
        </div>
    </div>
</main>
<!-- Back to top button-->
<!-- Vendor scripts: js libraries and plugins-->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<!-- Main theme script-->
<script src="assets/js/theme.min.js"></script>
<script>
    /*!
* Bootstrap v5.2.0 (https://getbootstrap.com/)
* Copyright 2011-2022 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
* Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
*/
    !function (t, e) {
        "object" == typeof exports && "undefined" != typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define(e) : (t = "undefined" != typeof globalThis ? globalThis : t || self).bootstrap = e()
    }(this, (function () {
        "use strict";
        const t = "transitionend", e = t => {
                let e = t.getAttribute("data-bs-target");
                if (!e || "#" === e) {
                    let i = t.getAttribute("href");
                    if (!i || !i.includes("#") && !i.startsWith(".")) return null;
                    i.includes("#") && !i.startsWith("#") && (i = `#${i.split("#")[1]}`), e = i && "#" !== i ? i.trim() : null
                }
                return e
            }, i = t => {
                const i = e(t);
                return i && document.querySelector(i) ? i : null
            }, n = t => {
                const i = e(t);
                return i ? document.querySelector(i) : null
            }, s = e => {
                e.dispatchEvent(new Event(t))
            }, o = t => !(!t || "object" != typeof t) && (void 0 !== t.jquery && (t = t[0]), void 0 !== t.nodeType),
            r = t => o(t) ? t.jquery ? t[0] : t : "string" == typeof t && t.length > 0 ? document.querySelector(t) : null,
            a = t => {
                if (!o(t) || 0 === t.getClientRects().length) return !1;
                const e = "visible" === getComputedStyle(t).getPropertyValue("visibility"),
                    i = t.closest("details:not([open])");
                if (!i) return e;
                if (i !== t) {
                    const e = t.closest("summary");
                    if (e && e.parentNode !== i) return !1;
                    if (null === e) return !1
                }
                return e
            },
            l = t => !t || t.nodeType !== Node.ELEMENT_NODE || !!t.classList.contains("disabled") || (void 0 !== t.disabled ? t.disabled : t.hasAttribute("disabled") && "false" !== t.getAttribute("disabled")),
            c = t => {
                if (!document.documentElement.attachShadow) return null;
                if ("function" == typeof t.getRootNode) {
                    const e = t.getRootNode();
                    return e instanceof ShadowRoot ? e : null
                }
                return t instanceof ShadowRoot ? t : t.parentNode ? c(t.parentNode) : null
            }, h = () => {
            }, d = t => {
                t.offsetHeight
            }, u = () => window.jQuery && !document.body.hasAttribute("data-bs-no-jquery") ? window.jQuery : null, f = [],
            p = () => "rtl" === document.documentElement.dir, g = t => {
                var e;
                e = () => {
                    const e = u();
                    if (e) {
                        const i = t.NAME, n = e.fn[i];
                        e.fn[i] = t.jQueryInterface, e.fn[i].Constructor = t, e.fn[i].noConflict = () => (e.fn[i] = n, t.jQueryInterface)
                    }
                }, "loading" === document.readyState ? (f.length || document.addEventListener("DOMContentLoaded", (() => {
                    for (const t of f) t()
                })), f.push(e)) : e()
            }, m = t => {
                "function" == typeof t && t()
            }, _ = (e, i, n = !0) => {
                if (!n) return void m(e);
                const o = (t => {
                    if (!t) return 0;
                    let {transitionDuration: e, transitionDelay: i} = window.getComputedStyle(t);
                    const n = Number.parseFloat(e), s = Number.parseFloat(i);
                    return n || s ? (e = e.split(",")[0], i = i.split(",")[0], 1e3 * (Number.parseFloat(e) + Number.parseFloat(i))) : 0
                })(i) + 5;
                let r = !1;
                const a = ({target: n}) => {
                    n === i && (r = !0, i.removeEventListener(t, a), m(e))
                };
                i.addEventListener(t, a), setTimeout((() => {
                    r || s(i)
                }), o)
            }, b = (t, e, i, n) => {
                const s = t.length;
                let o = t.indexOf(e);
                return -1 === o ? !i && n ? t[s - 1] : t[0] : (o += i ? 1 : -1, n && (o = (o + s) % s), t[Math.max(0, Math.min(o, s - 1))])
            }, v = /[^.]*(?=\..*)\.|.*/, y = /\..*/, w = /::\d+$/, A = {};
        let E = 1;
        const T = {mouseenter: "mouseover", mouseleave: "mouseout"},
            C = new Set(["click", "dblclick", "mouseup", "mousedown", "contextmenu", "mousewheel", "DOMMouseScroll", "mouseover", "mouseout", "mousemove", "selectstart", "selectend", "keydown", "keypress", "keyup", "orientationchange", "touchstart", "touchmove", "touchend", "touchcancel", "pointerdown", "pointermove", "pointerup", "pointerleave", "pointercancel", "gesturestart", "gesturechange", "gestureend", "focus", "blur", "change", "reset", "select", "submit", "focusin", "focusout", "load", "unload", "beforeunload", "resize", "move", "DOMContentLoaded", "readystatechange", "error", "abort", "scroll"]);

        function O(t, e) {
            return e && `${e}::${E++}` || t.uidEvent || E++
        }

        function x(t) {
            const e = O(t);
            return t.uidEvent = e, A[e] = A[e] || {}, A[e]
        }

        function k(t, e, i = null) {
            return Object.values(t).find((t => t.callable === e && t.delegationSelector === i))
        }

        function L(t, e, i) {
            const n = "string" == typeof e, s = n ? i : e || i;
            let o = N(t);
            return C.has(o) || (o = t), [n, s, o]
        }

        function D(t, e, i, n, s) {
            if ("string" != typeof e || !t) return;
            let [o, r, a] = L(e, i, n);
            if (e in T) {
                const t = t => function (e) {
                    if (!e.relatedTarget || e.relatedTarget !== e.delegateTarget && !e.delegateTarget.contains(e.relatedTarget)) return t.call(this, e)
                };
                r = t(r)
            }
            const l = x(t), c = l[a] || (l[a] = {}), h = k(c, r, o ? i : null);
            if (h) return void (h.oneOff = h.oneOff && s);
            const d = O(r, e.replace(v, "")), u = o ? function (t, e, i) {
                return function n(s) {
                    const o = t.querySelectorAll(e);
                    for (let {target: r} = s; r && r !== this; r = r.parentNode) for (const a of o) if (a === r) return j(s, {delegateTarget: r}), n.oneOff && P.off(t, s.type, e, i), i.apply(r, [s])
                }
            }(t, i, r) : function (t, e) {
                return function i(n) {
                    return j(n, {delegateTarget: t}), i.oneOff && P.off(t, n.type, e), e.apply(t, [n])
                }
            }(t, r);
            u.delegationSelector = o ? i : null, u.callable = r, u.oneOff = s, u.uidEvent = d, c[d] = u, t.addEventListener(a, u, o)
        }

        function S(t, e, i, n, s) {
            const o = k(e[i], n, s);
            o && (t.removeEventListener(i, o, Boolean(s)), delete e[i][o.uidEvent])
        }

        function I(t, e, i, n) {
            const s = e[i] || {};
            for (const o of Object.keys(s)) if (o.includes(n)) {
                const n = s[o];
                S(t, e, i, n.callable, n.delegationSelector)
            }
        }

        function N(t) {
            return t = t.replace(y, ""), T[t] || t
        }

        const P = {
            on(t, e, i, n) {
                D(t, e, i, n, !1)
            }, one(t, e, i, n) {
                D(t, e, i, n, !0)
            }, off(t, e, i, n) {
                if ("string" != typeof e || !t) return;
                const [s, o, r] = L(e, i, n), a = r !== e, l = x(t), c = l[r] || {}, h = e.startsWith(".");
                if (void 0 === o) {
                    if (h) for (const i of Object.keys(l)) I(t, l, i, e.slice(1));
                    for (const i of Object.keys(c)) {
                        const n = i.replace(w, "");
                        if (!a || e.includes(n)) {
                            const e = c[i];
                            S(t, l, r, e.callable, e.delegationSelector)
                        }
                    }
                } else {
                    if (!Object.keys(c).length) return;
                    S(t, l, r, o, s ? i : null)
                }
            }, trigger(t, e, i) {
                if ("string" != typeof e || !t) return null;
                const n = u();
                let s = null, o = !0, r = !0, a = !1;
                e !== N(e) && n && (s = n.Event(e, i), n(t).trigger(s), o = !s.isPropagationStopped(), r = !s.isImmediatePropagationStopped(), a = s.isDefaultPrevented());
                let l = new Event(e, {bubbles: o, cancelable: !0});
                return l = j(l, i), a && l.preventDefault(), r && t.dispatchEvent(l), l.defaultPrevented && s && s.preventDefault(), l
            }
        };

        function j(t, e) {
            for (const [i, n] of Object.entries(e || {})) try {
                t[i] = n
            } catch (e) {
                Object.defineProperty(t, i, {configurable: !0, get: () => n})
            }
            return t
        }

        const M = new Map, H = {
            set(t, e, i) {
                M.has(t) || M.set(t, new Map);
                const n = M.get(t);
                n.has(e) || 0 === n.size ? n.set(e, i) : console.error(`Bootstrap doesn't allow more than one instance per element. Bound instance: ${Array.from(n.keys())[0]}.`)
            }, get: (t, e) => M.has(t) && M.get(t).get(e) || null, remove(t, e) {
                if (!M.has(t)) return;
                const i = M.get(t);
                i.delete(e), 0 === i.size && M.delete(t)
            }
        };

        function $(t) {
            if ("true" === t) return !0;
            if ("false" === t) return !1;
            if (t === Number(t).toString()) return Number(t);
            if ("" === t || "null" === t) return null;
            if ("string" != typeof t) return t;
            try {
                return JSON.parse(decodeURIComponent(t))
            } catch (e) {
                return t
            }
        }

        function W(t) {
            return t.replace(/[A-Z]/g, (t => `-${t.toLowerCase()}`))
        }

        const B = {
            setDataAttribute(t, e, i) {
                t.setAttribute(`data-bs-${W(e)}`, i)
            }, removeDataAttribute(t, e) {
                t.removeAttribute(`data-bs-${W(e)}`)
            }, getDataAttributes(t) {
                if (!t) return {};
                const e = {}, i = Object.keys(t.dataset).filter((t => t.startsWith("bs") && !t.startsWith("bsConfig")));
                for (const n of i) {
                    let i = n.replace(/^bs/, "");
                    i = i.charAt(0).toLowerCase() + i.slice(1, i.length), e[i] = $(t.dataset[n])
                }
                return e
            }, getDataAttribute: (t, e) => $(t.getAttribute(`data-bs-${W(e)}`))
        };

        class F {
            static get Default() {
                return {}
            }

            static get DefaultType() {
                return {}
            }

            static get NAME() {
                throw new Error('You have to implement the static method "NAME", for each component!')
            }

            _getConfig(t) {
                return t = this._mergeConfigObj(t), t = this._configAfterMerge(t), this._typeCheckConfig(t), t
            }

            _configAfterMerge(t) {
                return t
            }

            _mergeConfigObj(t, e) {
                const i = o(e) ? B.getDataAttribute(e, "config") : {};
                return {...this.constructor.Default, ..."object" == typeof i ? i : {}, ...o(e) ? B.getDataAttributes(e) : {}, ..."object" == typeof t ? t : {}}
            }

            _typeCheckConfig(t, e = this.constructor.DefaultType) {
                for (const n of Object.keys(e)) {
                    const s = e[n], r = t[n],
                        a = o(r) ? "element" : null == (i = r) ? `${i}` : Object.prototype.toString.call(i).match(/\s([a-z]+)/i)[1].toLowerCase();
                    if (!new RegExp(s).test(a)) throw new TypeError(`${this.constructor.NAME.toUpperCase()}: Option "${n}" provided type "${a}" but expected type "${s}".`)
                }
                var i
            }
        }

        class z extends F {
            constructor(t, e) {
                super(), (t = r(t)) && (this._element = t, this._config = this._getConfig(e), H.set(this._element, this.constructor.DATA_KEY, this))
            }

            dispose() {
                H.remove(this._element, this.constructor.DATA_KEY), P.off(this._element, this.constructor.EVENT_KEY);
                for (const t of Object.getOwnPropertyNames(this)) this[t] = null
            }

            _queueCallback(t, e, i = !0) {
                _(t, e, i)
            }

            _getConfig(t) {
                return t = this._mergeConfigObj(t, this._element), t = this._configAfterMerge(t), this._typeCheckConfig(t), t
            }

            static getInstance(t) {
                return H.get(r(t), this.DATA_KEY)
            }

            static getOrCreateInstance(t, e = {}) {
                return this.getInstance(t) || new this(t, "object" == typeof e ? e : null)
            }

            static get VERSION() {
                return "5.2.0"
            }

            static get DATA_KEY() {
                return `bs.${this.NAME}`
            }

            static get EVENT_KEY() {
                return `.${this.DATA_KEY}`
            }

            static eventName(t) {
                return `${t}${this.EVENT_KEY}`
            }
        }

        const R = (t, e = "hide") => {
            const i = `click.dismiss${t.EVENT_KEY}`, s = t.NAME;
            P.on(document, i, `[data-bs-dismiss="${s}"]`, (function (i) {
                if (["A", "AREA"].includes(this.tagName) && i.preventDefault(), l(this)) return;
                const o = n(this) || this.closest(`.${s}`);
                t.getOrCreateInstance(o)[e]()
            }))
        };

        class q extends z {
            static get NAME() {
                return "alert"
            }

            close() {
                if (P.trigger(this._element, "close.bs.alert").defaultPrevented) return;
                this._element.classList.remove("show");
                const t = this._element.classList.contains("fade");
                this._queueCallback((() => this._destroyElement()), this._element, t)
            }

            _destroyElement() {
                this._element.remove(), P.trigger(this._element, "closed.bs.alert"), this.dispose()
            }

            static jQueryInterface(t) {
                return this.each((function () {
                    const e = q.getOrCreateInstance(this);
                    if ("string" == typeof t) {
                        if (void 0 === e[t] || t.startsWith("_") || "constructor" === t) throw new TypeError(`No method named "${t}"`);
                        e[t](this)
                    }
                }))
            }
        }

        R(q, "close"), g(q);
        const V = '[data-bs-toggle="button"]';

        class K extends z {
            static get NAME() {
                return "button"
            }

            toggle() {
                this._element.setAttribute("aria-pressed", this._element.classList.toggle("active"))
            }

            static jQueryInterface(t) {
                return this.each((function () {
                    const e = K.getOrCreateInstance(this);
                    "toggle" === t && e[t]()
                }))
            }
        }

        P.on(document, "click.bs.button.data-api", V, (t => {
            t.preventDefault();
            const e = t.target.closest(V);
            K.getOrCreateInstance(e).toggle()
        })), g(K);
        const Q = {
                find: (t, e = document.documentElement) => [].concat(...Element.prototype.querySelectorAll.call(e, t)),
                findOne: (t, e = document.documentElement) => Element.prototype.querySelector.call(e, t),
                children: (t, e) => [].concat(...t.children).filter((t => t.matches(e))),
                parents(t, e) {
                    const i = [];
                    let n = t.parentNode.closest(e);
                    for (; n;) i.push(n), n = n.parentNode.closest(e);
                    return i
                },
                prev(t, e) {
                    let i = t.previousElementSibling;
                    for (; i;) {
                        if (i.matches(e)) return [i];
                        i = i.previousElementSibling
                    }
                    return []
                },
                next(t, e) {
                    let i = t.nextElementSibling;
                    for (; i;) {
                        if (i.matches(e)) return [i];
                        i = i.nextElementSibling
                    }
                    return []
                },
                focusableChildren(t) {
                    const e = ["a", "button", "input", "textarea", "select", "details", "[tabindex]", '[contenteditable="true"]'].map((t => `${t}:not([tabindex^="-"])`)).join(",");
                    return this.find(e, t).filter((t => !l(t) && a(t)))
                }
            }, X = {endCallback: null, leftCallback: null, rightCallback: null},
            Y = {endCallback: "(function|null)", leftCallback: "(function|null)", rightCallback: "(function|null)"};

        class U extends F {
            constructor(t, e) {
                super(), this._element = t, t && U.isSupported() && (this._config = this._getConfig(e), this._deltaX = 0, this._supportPointerEvents = Boolean(window.PointerEvent), this._initEvents())
            }

            static get Default() {
                return X
            }

            static get DefaultType() {
                return Y
            }

            static get NAME() {
                return "swipe"
            }

            dispose() {
                P.off(this._element, ".bs.swipe")
            }

            _start(t) {
                this._supportPointerEvents ? this._eventIsPointerPenTouch(t) && (this._deltaX = t.clientX) : this._deltaX = t.touches[0].clientX
            }

            _end(t) {
                this._eventIsPointerPenTouch(t) && (this._deltaX = t.clientX - this._deltaX), this._handleSwipe(), m(this._config.endCallback)
            }

            _move(t) {
                this._deltaX = t.touches && t.touches.length > 1 ? 0 : t.touches[0].clientX - this._deltaX
            }

            _handleSwipe() {
                const t = Math.abs(this._deltaX);
                if (t <= 40) return;
                const e = t / this._deltaX;
                this._deltaX = 0, e && m(e > 0 ? this._config.rightCallback : this._config.leftCallback)
            }

            _initEvents() {
                this._supportPointerEvents ? (P.on(this._element, "pointerdown.bs.swipe", (t => this._start(t))), P.on(this._element, "pointerup.bs.swipe", (t => this._end(t))), this._element.classList.add("pointer-event")) : (P.on(this._element, "touchstart.bs.swipe", (t => this._start(t))), P.on(this._element, "touchmove.bs.swipe", (t => this._move(t))), P.on(this._element, "touchend.bs.swipe", (t => this._end(t))))
            }

            _eventIsPointerPenTouch(t) {
                return this._supportPointerEvents && ("pen" === t.pointerType || "touch" === t.pointerType)
            }

            static isSupported() {
                return "ontouchstart" in document.documentElement || navigator.maxTouchPoints > 0
            }
        }

        const G = "next", J = "prev", Z = "left", tt = "right", et = "slid.bs.carousel", it = "carousel", nt = "active",
            st = {ArrowLeft: tt, ArrowRight: Z},
            ot = {interval: 5e3, keyboard: !0, pause: "hover", ride: !1, touch: !0, wrap: !0}, rt = {
                interval: "(number|boolean)",
                keyboard: "boolean",
                pause: "(string|boolean)",
                ride: "(boolean|string)",
                touch: "boolean",
                wrap: "boolean"
            };

        class at extends z {
            constructor(t, e) {
                super(t, e), this._interval = null, this._activeElement = null, this._isSliding = !1, this.touchTimeout = null, this._swipeHelper = null, this._indicatorsElement = Q.findOne(".carousel-indicators", this._element), this._addEventListeners(), this._config.ride === it && this.cycle()
            }

            static get Default() {
                return ot
            }

            static get DefaultType() {
                return rt
            }

            static get NAME() {
                return "carousel"
            }

            next() {
                this._slide(G)
            }

            nextWhenVisible() {
                !document.hidden && a(this._element) && this.next()
            }

            prev() {
                this._slide(J)
            }

            pause() {
                this._isSliding && s(this._element), this._clearInterval()
            }

            cycle() {
                this._clearInterval(), this._updateInterval(), this._interval = setInterval((() => this.nextWhenVisible()), this._config.interval)
            }

            _maybeEnableCycle() {
                this._config.ride && (this._isSliding ? P.one(this._element, et, (() => this.cycle())) : this.cycle())
            }

            to(t) {
                const e = this._getItems();
                if (t > e.length - 1 || t < 0) return;
                if (this._isSliding) return void P.one(this._element, et, (() => this.to(t)));
                const i = this._getItemIndex(this._getActive());
                if (i === t) return;
                const n = t > i ? G : J;
                this._slide(n, e[t])
            }

            dispose() {
                this._swipeHelper && this._swipeHelper.dispose(), super.dispose()
            }

            _configAfterMerge(t) {
                return t.defaultInterval = t.interval, t
            }

            _addEventListeners() {
                this._config.keyboard && P.on(this._element, "keydown.bs.carousel", (t => this._keydown(t))), "hover" === this._config.pause && (P.on(this._element, "mouseenter.bs.carousel", (() => this.pause())), P.on(this._element, "mouseleave.bs.carousel", (() => this._maybeEnableCycle()))), this._config.touch && U.isSupported() && this._addTouchEventListeners()
            }

            _addTouchEventListeners() {
                for (const t of Q.find(".carousel-item img", this._element)) P.on(t, "dragstart.bs.carousel", (t => t.preventDefault()));
                const t = {
                    leftCallback: () => this._slide(this._directionToOrder(Z)),
                    rightCallback: () => this._slide(this._directionToOrder(tt)),
                    endCallback: () => {
                        "hover" === this._config.pause && (this.pause(), this.touchTimeout && clearTimeout(this.touchTimeout), this.touchTimeout = setTimeout((() => this._maybeEnableCycle()), 500 + this._config.interval))
                    }
                };
                this._swipeHelper = new U(this._element, t)
            }

            _keydown(t) {
                if (/input|textarea/i.test(t.target.tagName)) return;
                const e = st[t.key];
                e && (t.preventDefault(), this._slide(this._directionToOrder(e)))
            }

            _getItemIndex(t) {
                return this._getItems().indexOf(t)
            }

            _setActiveIndicatorElement(t) {
                if (!this._indicatorsElement) return;
                const e = Q.findOne(".active", this._indicatorsElement);
                e.classList.remove(nt), e.removeAttribute("aria-current");
                const i = Q.findOne(`[data-bs-slide-to="${t}"]`, this._indicatorsElement);
                i && (i.classList.add(nt), i.setAttribute("aria-current", "true"))
            }

            _updateInterval() {
                const t = this._activeElement || this._getActive();
                if (!t) return;
                const e = Number.parseInt(t.getAttribute("data-bs-interval"), 10);
                this._config.interval = e || this._config.defaultInterval
            }

            _slide(t, e = null) {
                if (this._isSliding) return;
                const i = this._getActive(), n = t === G, s = e || b(this._getItems(), i, n, this._config.wrap);
                if (s === i) return;
                const o = this._getItemIndex(s), r = e => P.trigger(this._element, e, {
                    relatedTarget: s,
                    direction: this._orderToDirection(t),
                    from: this._getItemIndex(i),
                    to: o
                });
                if (r("slide.bs.carousel").defaultPrevented) return;
                if (!i || !s) return;
                const a = Boolean(this._interval);
                this.pause(), this._isSliding = !0, this._setActiveIndicatorElement(o), this._activeElement = s;
                const l = n ? "carousel-item-start" : "carousel-item-end",
                    c = n ? "carousel-item-next" : "carousel-item-prev";
                s.classList.add(c), d(s), i.classList.add(l), s.classList.add(l), this._queueCallback((() => {
                    s.classList.remove(l, c), s.classList.add(nt), i.classList.remove(nt, c, l), this._isSliding = !1, r(et)
                }), i, this._isAnimated()), a && this.cycle()
            }

            _isAnimated() {
                return this._element.classList.contains("slide")
            }

            _getActive() {
                return Q.findOne(".active.carousel-item", this._element)
            }

            _getItems() {
                return Q.find(".carousel-item", this._element)
            }

            _clearInterval() {
                this._interval && (clearInterval(this._interval), this._interval = null)
            }

            _directionToOrder(t) {
                return p() ? t === Z ? J : G : t === Z ? G : J
            }

            _orderToDirection(t) {
                return p() ? t === J ? Z : tt : t === J ? tt : Z
            }

            static jQueryInterface(t) {
                return this.each((function () {
                    const e = at.getOrCreateInstance(this, t);
                    if ("number" != typeof t) {
                        if ("string" == typeof t) {
                            if (void 0 === e[t] || t.startsWith("_") || "constructor" === t) throw new TypeError(`No method named "${t}"`);
                            e[t]()
                        }
                    } else e.to(t)
                }))
            }
        }

        P.on(document, "click.bs.carousel.data-api", "[data-bs-slide], [data-bs-slide-to]", (function (t) {
            const e = n(this);
            if (!e || !e.classList.contains(it)) return;
            t.preventDefault();
            const i = at.getOrCreateInstance(e), s = this.getAttribute("data-bs-slide-to");
            return s ? (i.to(s), void i._maybeEnableCycle()) : "next" === B.getDataAttribute(this, "slide") ? (i.next(), void i._maybeEnableCycle()) : (i.prev(), void i._maybeEnableCycle())
        })), P.on(window, "load.bs.carousel.data-api", (() => {
            const t = Q.find('[data-bs-ride="carousel"]');
            for (const e of t) at.getOrCreateInstance(e)
        })), g(at);
        const lt = "show", ct = "collapse", ht = "collapsing", dt = '[data-bs-toggle="collapse"]',
            ut = {parent: null, toggle: !0}, ft = {parent: "(null|element)", toggle: "boolean"};

        class pt extends z {
            constructor(t, e) {
                super(t, e), this._isTransitioning = !1, this._triggerArray = [];
                const n = Q.find(dt);
                for (const t of n) {
                    const e = i(t), n = Q.find(e).filter((t => t === this._element));
                    null !== e && n.length && this._triggerArray.push(t)
                }
                this._initializeChildren(), this._config.parent || this._addAriaAndCollapsedClass(this._triggerArray, this._isShown()), this._config.toggle && this.toggle()
            }

            static get Default() {
                return ut
            }

            static get DefaultType() {
                return ft
            }

            static get NAME() {
                return "collapse"
            }

            toggle() {
                this._isShown() ? this.hide() : this.show()
            }

            show() {
                if (this._isTransitioning || this._isShown()) return;
                let t = [];
                if (this._config.parent && (t = this._getFirstLevelChildren(".collapse.show, .collapse.collapsing").filter((t => t !== this._element)).map((t => pt.getOrCreateInstance(t, {toggle: !1})))), t.length && t[0]._isTransitioning) return;
                if (P.trigger(this._element, "show.bs.collapse").defaultPrevented) return;
                for (const e of t) e.hide();
                const e = this._getDimension();
                this._element.classList.remove(ct), this._element.classList.add(ht), this._element.style[e] = 0, this._addAriaAndCollapsedClass(this._triggerArray, !0), this._isTransitioning = !0;
                const i = `scroll${e[0].toUpperCase() + e.slice(1)}`;
                this._queueCallback((() => {
                    this._isTransitioning = !1, this._element.classList.remove(ht), this._element.classList.add(ct, lt), this._element.style[e] = "", P.trigger(this._element, "shown.bs.collapse")
                }), this._element, !0), this._element.style[e] = `${this._element[i]}px`
            }

            hide() {
                if (this._isTransitioning || !this._isShown()) return;
                if (P.trigger(this._element, "hide.bs.collapse").defaultPrevented) return;
                const t = this._getDimension();
                this._element.style[t] = `${this._element.getBoundingClientRect()[t]}px`, d(this._element), this._element.classList.add(ht), this._element.classList.remove(ct, lt);
                for (const t of this._triggerArray) {
                    const e = n(t);
                    e && !this._isShown(e) && this._addAriaAndCollapsedClass([t], !1)
                }
                this._isTransitioning = !0, this._element.style[t] = "", this._queueCallback((() => {
                    this._isTransitioning = !1, this._element.classList.remove(ht), this._element.classList.add(ct), P.trigger(this._element, "hidden.bs.collapse")
                }), this._element, !0)
            }

            _isShown(t = this._element) {
                return t.classList.contains(lt)
            }

            _configAfterMerge(t) {
                return t.toggle = Boolean(t.toggle), t.parent = r(t.parent), t
            }

            _getDimension() {
                return this._element.classList.contains("collapse-horizontal") ? "width" : "height"
            }

            _initializeChildren() {
                if (!this._config.parent) return;
                const t = this._getFirstLevelChildren(dt);
                for (const e of t) {
                    const t = n(e);
                    t && this._addAriaAndCollapsedClass([e], this._isShown(t))
                }
            }

            _getFirstLevelChildren(t) {
                const e = Q.find(":scope .collapse .collapse", this._config.parent);
                return Q.find(t, this._config.parent).filter((t => !e.includes(t)))
            }

            _addAriaAndCollapsedClass(t, e) {
                if (t.length) for (const i of t) i.classList.toggle("collapsed", !e), i.setAttribute("aria-expanded", e)
            }

            static jQueryInterface(t) {
                const e = {};
                return "string" == typeof t && /show|hide/.test(t) && (e.toggle = !1), this.each((function () {
                    const i = pt.getOrCreateInstance(this, e);
                    if ("string" == typeof t) {
                        if (void 0 === i[t]) throw new TypeError(`No method named "${t}"`);
                        i[t]()
                    }
                }))
            }
        }

        P.on(document, "click.bs.collapse.data-api", dt, (function (t) {
            ("A" === t.target.tagName || t.delegateTarget && "A" === t.delegateTarget.tagName) && t.preventDefault();
            const e = i(this), n = Q.find(e);
            for (const t of n) pt.getOrCreateInstance(t, {toggle: !1}).toggle()
        })), g(pt);
        var gt = "top", mt = "bottom", _t = "right", bt = "left", vt = "auto", yt = [gt, mt, _t, bt], wt = "start",
            At = "end", Et = "clippingParents", Tt = "viewport", Ct = "popper", Ot = "reference",
            xt = yt.reduce((function (t, e) {
                return t.concat([e + "-" + wt, e + "-" + At])
            }), []), kt = [].concat(yt, [vt]).reduce((function (t, e) {
                return t.concat([e, e + "-" + wt, e + "-" + At])
            }), []), Lt = "beforeRead", Dt = "read", St = "afterRead", It = "beforeMain", Nt = "main", Pt = "afterMain",
            jt = "beforeWrite", Mt = "write", Ht = "afterWrite", $t = [Lt, Dt, St, It, Nt, Pt, jt, Mt, Ht];

        function Wt(t) {
            return t ? (t.nodeName || "").toLowerCase() : null
        }

        function Bt(t) {
            if (null == t) return window;
            if ("[object Window]" !== t.toString()) {
                var e = t.ownerDocument;
                return e && e.defaultView || window
            }
            return t
        }

        function Ft(t) {
            return t instanceof Bt(t).Element || t instanceof Element
        }

        function zt(t) {
            return t instanceof Bt(t).HTMLElement || t instanceof HTMLElement
        }

        function Rt(t) {
            return "undefined" != typeof ShadowRoot && (t instanceof Bt(t).ShadowRoot || t instanceof ShadowRoot)
        }

        const qt = {
            name: "applyStyles", enabled: !0, phase: "write", fn: function (t) {
                var e = t.state;
                Object.keys(e.elements).forEach((function (t) {
                    var i = e.styles[t] || {}, n = e.attributes[t] || {}, s = e.elements[t];
                    zt(s) && Wt(s) && (Object.assign(s.style, i), Object.keys(n).forEach((function (t) {
                        var e = n[t];
                        !1 === e ? s.removeAttribute(t) : s.setAttribute(t, !0 === e ? "" : e)
                    })))
                }))
            }, effect: function (t) {
                var e = t.state, i = {
                    popper: {position: e.options.strategy, left: "0", top: "0", margin: "0"},
                    arrow: {position: "absolute"},
                    reference: {}
                };
                return Object.assign(e.elements.popper.style, i.popper), e.styles = i, e.elements.arrow && Object.assign(e.elements.arrow.style, i.arrow), function () {
                    Object.keys(e.elements).forEach((function (t) {
                        var n = e.elements[t], s = e.attributes[t] || {},
                            o = Object.keys(e.styles.hasOwnProperty(t) ? e.styles[t] : i[t]).reduce((function (t, e) {
                                return t[e] = "", t
                            }), {});
                        zt(n) && Wt(n) && (Object.assign(n.style, o), Object.keys(s).forEach((function (t) {
                            n.removeAttribute(t)
                        })))
                    }))
                }
            }, requires: ["computeStyles"]
        };

        function Vt(t) {
            return t.split("-")[0]
        }

        var Kt = Math.max, Qt = Math.min, Xt = Math.round;

        function Yt(t, e) {
            void 0 === e && (e = !1);
            var i = t.getBoundingClientRect(), n = 1, s = 1;
            if (zt(t) && e) {
                var o = t.offsetHeight, r = t.offsetWidth;
                r > 0 && (n = Xt(i.width) / r || 1), o > 0 && (s = Xt(i.height) / o || 1)
            }
            return {
                width: i.width / n,
                height: i.height / s,
                top: i.top / s,
                right: i.right / n,
                bottom: i.bottom / s,
                left: i.left / n,
                x: i.left / n,
                y: i.top / s
            }
        }

        function Ut(t) {
            var e = Yt(t), i = t.offsetWidth, n = t.offsetHeight;
            return Math.abs(e.width - i) <= 1 && (i = e.width), Math.abs(e.height - n) <= 1 && (n = e.height), {
                x: t.offsetLeft,
                y: t.offsetTop,
                width: i,
                height: n
            }
        }

        function Gt(t, e) {
            var i = e.getRootNode && e.getRootNode();
            if (t.contains(e)) return !0;
            if (i && Rt(i)) {
                var n = e;
                do {
                    if (n && t.isSameNode(n)) return !0;
                    n = n.parentNode || n.host
                } while (n)
            }
            return !1
        }

        function Jt(t) {
            return Bt(t).getComputedStyle(t)
        }

        function Zt(t) {
            return ["table", "td", "th"].indexOf(Wt(t)) >= 0
        }

        function te(t) {
            return ((Ft(t) ? t.ownerDocument : t.document) || window.document).documentElement
        }

        function ee(t) {
            return "html" === Wt(t) ? t : t.assignedSlot || t.parentNode || (Rt(t) ? t.host : null) || te(t)
        }

        function ie(t) {
            return zt(t) && "fixed" !== Jt(t).position ? t.offsetParent : null
        }

        function ne(t) {
            for (var e = Bt(t), i = ie(t); i && Zt(i) && "static" === Jt(i).position;) i = ie(i);
            return i && ("html" === Wt(i) || "body" === Wt(i) && "static" === Jt(i).position) ? e : i || function (t) {
                var e = -1 !== navigator.userAgent.toLowerCase().indexOf("firefox");
                if (-1 !== navigator.userAgent.indexOf("Trident") && zt(t) && "fixed" === Jt(t).position) return null;
                var i = ee(t);
                for (Rt(i) && (i = i.host); zt(i) && ["html", "body"].indexOf(Wt(i)) < 0;) {
                    var n = Jt(i);
                    if ("none" !== n.transform || "none" !== n.perspective || "paint" === n.contain || -1 !== ["transform", "perspective"].indexOf(n.willChange) || e && "filter" === n.willChange || e && n.filter && "none" !== n.filter) return i;
                    i = i.parentNode
                }
                return null
            }(t) || e
        }

        function se(t) {
            return ["top", "bottom"].indexOf(t) >= 0 ? "x" : "y"
        }

        function oe(t, e, i) {
            return Kt(t, Qt(e, i))
        }

        function re(t) {
            return Object.assign({}, {top: 0, right: 0, bottom: 0, left: 0}, t)
        }

        function ae(t, e) {
            return e.reduce((function (e, i) {
                return e[i] = t, e
            }), {})
        }

        const le = {
            name: "arrow", enabled: !0, phase: "main", fn: function (t) {
                var e, i = t.state, n = t.name, s = t.options, o = i.elements.arrow, r = i.modifiersData.popperOffsets,
                    a = Vt(i.placement), l = se(a), c = [bt, _t].indexOf(a) >= 0 ? "height" : "width";
                if (o && r) {
                    var h = function (t, e) {
                            return re("number" != typeof (t = "function" == typeof t ? t(Object.assign({}, e.rects, {placement: e.placement})) : t) ? t : ae(t, yt))
                        }(s.padding, i), d = Ut(o), u = "y" === l ? gt : bt, f = "y" === l ? mt : _t,
                        p = i.rects.reference[c] + i.rects.reference[l] - r[l] - i.rects.popper[c],
                        g = r[l] - i.rects.reference[l], m = ne(o),
                        _ = m ? "y" === l ? m.clientHeight || 0 : m.clientWidth || 0 : 0, b = p / 2 - g / 2, v = h[u],
                        y = _ - d[c] - h[f], w = _ / 2 - d[c] / 2 + b, A = oe(v, w, y), E = l;
                    i.modifiersData[n] = ((e = {})[E] = A, e.centerOffset = A - w, e)
                }
            }, effect: function (t) {
                var e = t.state, i = t.options.element, n = void 0 === i ? "[data-popper-arrow]" : i;
                null != n && ("string" != typeof n || (n = e.elements.popper.querySelector(n))) && Gt(e.elements.popper, n) && (e.elements.arrow = n)
            }, requires: ["popperOffsets"], requiresIfExists: ["preventOverflow"]
        };

        function ce(t) {
            return t.split("-")[1]
        }

        var he = {top: "auto", right: "auto", bottom: "auto", left: "auto"};

        function de(t) {
            var e, i = t.popper, n = t.popperRect, s = t.placement, o = t.variation, r = t.offsets, a = t.position,
                l = t.gpuAcceleration, c = t.adaptive, h = t.roundOffsets, d = t.isFixed, u = r.x,
                f = void 0 === u ? 0 : u, p = r.y, g = void 0 === p ? 0 : p,
                m = "function" == typeof h ? h({x: f, y: g}) : {x: f, y: g};
            f = m.x, g = m.y;
            var _ = r.hasOwnProperty("x"), b = r.hasOwnProperty("y"), v = bt, y = gt, w = window;
            if (c) {
                var A = ne(i), E = "clientHeight", T = "clientWidth";
                A === Bt(i) && "static" !== Jt(A = te(i)).position && "absolute" === a && (E = "scrollHeight", T = "scrollWidth"), (s === gt || (s === bt || s === _t) && o === At) && (y = mt, g -= (d && A === w && w.visualViewport ? w.visualViewport.height : A[E]) - n.height, g *= l ? 1 : -1), s !== bt && (s !== gt && s !== mt || o !== At) || (v = _t, f -= (d && A === w && w.visualViewport ? w.visualViewport.width : A[T]) - n.width, f *= l ? 1 : -1)
            }
            var C, O = Object.assign({position: a}, c && he), x = !0 === h ? function (t) {
                var e = t.x, i = t.y, n = window.devicePixelRatio || 1;
                return {x: Xt(e * n) / n || 0, y: Xt(i * n) / n || 0}
            }({x: f, y: g}) : {x: f, y: g};
            return f = x.x, g = x.y, l ? Object.assign({}, O, ((C = {})[y] = b ? "0" : "", C[v] = _ ? "0" : "", C.transform = (w.devicePixelRatio || 1) <= 1 ? "translate(" + f + "px, " + g + "px)" : "translate3d(" + f + "px, " + g + "px, 0)", C)) : Object.assign({}, O, ((e = {})[y] = b ? g + "px" : "", e[v] = _ ? f + "px" : "", e.transform = "", e))
        }

        const ue = {
            name: "computeStyles", enabled: !0, phase: "beforeWrite", fn: function (t) {
                var e = t.state, i = t.options, n = i.gpuAcceleration, s = void 0 === n || n, o = i.adaptive,
                    r = void 0 === o || o, a = i.roundOffsets, l = void 0 === a || a, c = {
                        placement: Vt(e.placement),
                        variation: ce(e.placement),
                        popper: e.elements.popper,
                        popperRect: e.rects.popper,
                        gpuAcceleration: s,
                        isFixed: "fixed" === e.options.strategy
                    };
                null != e.modifiersData.popperOffsets && (e.styles.popper = Object.assign({}, e.styles.popper, de(Object.assign({}, c, {
                    offsets: e.modifiersData.popperOffsets,
                    position: e.options.strategy,
                    adaptive: r,
                    roundOffsets: l
                })))), null != e.modifiersData.arrow && (e.styles.arrow = Object.assign({}, e.styles.arrow, de(Object.assign({}, c, {
                    offsets: e.modifiersData.arrow,
                    position: "absolute",
                    adaptive: !1,
                    roundOffsets: l
                })))), e.attributes.popper = Object.assign({}, e.attributes.popper, {"data-popper-placement": e.placement})
            }, data: {}
        };
        var fe = {passive: !0};
        const pe = {
            name: "eventListeners", enabled: !0, phase: "write", fn: function () {
            }, effect: function (t) {
                var e = t.state, i = t.instance, n = t.options, s = n.scroll, o = void 0 === s || s, r = n.resize,
                    a = void 0 === r || r, l = Bt(e.elements.popper),
                    c = [].concat(e.scrollParents.reference, e.scrollParents.popper);
                return o && c.forEach((function (t) {
                    t.addEventListener("scroll", i.update, fe)
                })), a && l.addEventListener("resize", i.update, fe), function () {
                    o && c.forEach((function (t) {
                        t.removeEventListener("scroll", i.update, fe)
                    })), a && l.removeEventListener("resize", i.update, fe)
                }
            }, data: {}
        };
        var ge = {left: "right", right: "left", bottom: "top", top: "bottom"};

        function me(t) {
            return t.replace(/left|right|bottom|top/g, (function (t) {
                return ge[t]
            }))
        }

        var _e = {start: "end", end: "start"};

        function be(t) {
            return t.replace(/start|end/g, (function (t) {
                return _e[t]
            }))
        }

        function ve(t) {
            var e = Bt(t);
            return {scrollLeft: e.pageXOffset, scrollTop: e.pageYOffset}
        }

        function ye(t) {
            return Yt(te(t)).left + ve(t).scrollLeft
        }

        function we(t) {
            var e = Jt(t), i = e.overflow, n = e.overflowX, s = e.overflowY;
            return /auto|scroll|overlay|hidden/.test(i + s + n)
        }

        function Ae(t) {
            return ["html", "body", "#document"].indexOf(Wt(t)) >= 0 ? t.ownerDocument.body : zt(t) && we(t) ? t : Ae(ee(t))
        }

        function Ee(t, e) {
            var i;
            void 0 === e && (e = []);
            var n = Ae(t), s = n === (null == (i = t.ownerDocument) ? void 0 : i.body), o = Bt(n),
                r = s ? [o].concat(o.visualViewport || [], we(n) ? n : []) : n, a = e.concat(r);
            return s ? a : a.concat(Ee(ee(r)))
        }

        function Te(t) {
            return Object.assign({}, t, {left: t.x, top: t.y, right: t.x + t.width, bottom: t.y + t.height})
        }

        function Ce(t, e) {
            return e === Tt ? Te(function (t) {
                var e = Bt(t), i = te(t), n = e.visualViewport, s = i.clientWidth, o = i.clientHeight, r = 0, a = 0;
                return n && (s = n.width, o = n.height, /^((?!chrome|android).)*safari/i.test(navigator.userAgent) || (r = n.offsetLeft, a = n.offsetTop)), {
                    width: s,
                    height: o,
                    x: r + ye(t),
                    y: a
                }
            }(t)) : Ft(e) ? function (t) {
                var e = Yt(t);
                return e.top = e.top + t.clientTop, e.left = e.left + t.clientLeft, e.bottom = e.top + t.clientHeight, e.right = e.left + t.clientWidth, e.width = t.clientWidth, e.height = t.clientHeight, e.x = e.left, e.y = e.top, e
            }(e) : Te(function (t) {
                var e, i = te(t), n = ve(t), s = null == (e = t.ownerDocument) ? void 0 : e.body,
                    o = Kt(i.scrollWidth, i.clientWidth, s ? s.scrollWidth : 0, s ? s.clientWidth : 0),
                    r = Kt(i.scrollHeight, i.clientHeight, s ? s.scrollHeight : 0, s ? s.clientHeight : 0),
                    a = -n.scrollLeft + ye(t), l = -n.scrollTop;
                return "rtl" === Jt(s || i).direction && (a += Kt(i.clientWidth, s ? s.clientWidth : 0) - o), {
                    width: o,
                    height: r,
                    x: a,
                    y: l
                }
            }(te(t)))
        }

        function Oe(t) {
            var e, i = t.reference, n = t.element, s = t.placement, o = s ? Vt(s) : null, r = s ? ce(s) : null,
                a = i.x + i.width / 2 - n.width / 2, l = i.y + i.height / 2 - n.height / 2;
            switch (o) {
                case gt:
                    e = {x: a, y: i.y - n.height};
                    break;
                case mt:
                    e = {x: a, y: i.y + i.height};
                    break;
                case _t:
                    e = {x: i.x + i.width, y: l};
                    break;
                case bt:
                    e = {x: i.x - n.width, y: l};
                    break;
                default:
                    e = {x: i.x, y: i.y}
            }
            var c = o ? se(o) : null;
            if (null != c) {
                var h = "y" === c ? "height" : "width";
                switch (r) {
                    case wt:
                        e[c] = e[c] - (i[h] / 2 - n[h] / 2);
                        break;
                    case At:
                        e[c] = e[c] + (i[h] / 2 - n[h] / 2)
                }
            }
            return e
        }

        function xe(t, e) {
            void 0 === e && (e = {});
            var i = e, n = i.placement, s = void 0 === n ? t.placement : n, o = i.boundary, r = void 0 === o ? Et : o,
                a = i.rootBoundary, l = void 0 === a ? Tt : a, c = i.elementContext, h = void 0 === c ? Ct : c,
                d = i.altBoundary, u = void 0 !== d && d, f = i.padding, p = void 0 === f ? 0 : f,
                g = re("number" != typeof p ? p : ae(p, yt)), m = h === Ct ? Ot : Ct, _ = t.rects.popper,
                b = t.elements[u ? m : h], v = function (t, e, i) {
                    var n = "clippingParents" === e ? function (t) {
                        var e = Ee(ee(t)), i = ["absolute", "fixed"].indexOf(Jt(t).position) >= 0 && zt(t) ? ne(t) : t;
                        return Ft(i) ? e.filter((function (t) {
                            return Ft(t) && Gt(t, i) && "body" !== Wt(t)
                        })) : []
                    }(t) : [].concat(e), s = [].concat(n, [i]), o = s[0], r = s.reduce((function (e, i) {
                        var n = Ce(t, i);
                        return e.top = Kt(n.top, e.top), e.right = Qt(n.right, e.right), e.bottom = Qt(n.bottom, e.bottom), e.left = Kt(n.left, e.left), e
                    }), Ce(t, o));
                    return r.width = r.right - r.left, r.height = r.bottom - r.top, r.x = r.left, r.y = r.top, r
                }(Ft(b) ? b : b.contextElement || te(t.elements.popper), r, l), y = Yt(t.elements.reference),
                w = Oe({reference: y, element: _, strategy: "absolute", placement: s}), A = Te(Object.assign({}, _, w)),
                E = h === Ct ? A : y, T = {
                    top: v.top - E.top + g.top,
                    bottom: E.bottom - v.bottom + g.bottom,
                    left: v.left - E.left + g.left,
                    right: E.right - v.right + g.right
                }, C = t.modifiersData.offset;
            if (h === Ct && C) {
                var O = C[s];
                Object.keys(T).forEach((function (t) {
                    var e = [_t, mt].indexOf(t) >= 0 ? 1 : -1, i = [gt, mt].indexOf(t) >= 0 ? "y" : "x";
                    T[t] += O[i] * e
                }))
            }
            return T
        }

        function ke(t, e) {
            void 0 === e && (e = {});
            var i = e, n = i.placement, s = i.boundary, o = i.rootBoundary, r = i.padding, a = i.flipVariations,
                l = i.allowedAutoPlacements, c = void 0 === l ? kt : l, h = ce(n),
                d = h ? a ? xt : xt.filter((function (t) {
                    return ce(t) === h
                })) : yt, u = d.filter((function (t) {
                    return c.indexOf(t) >= 0
                }));
            0 === u.length && (u = d);
            var f = u.reduce((function (e, i) {
                return e[i] = xe(t, {placement: i, boundary: s, rootBoundary: o, padding: r})[Vt(i)], e
            }), {});
            return Object.keys(f).sort((function (t, e) {
                return f[t] - f[e]
            }))
        }

        const Le = {
            name: "flip", enabled: !0, phase: "main", fn: function (t) {
                var e = t.state, i = t.options, n = t.name;
                if (!e.modifiersData[n]._skip) {
                    for (var s = i.mainAxis, o = void 0 === s || s, r = i.altAxis, a = void 0 === r || r, l = i.fallbackPlacements, c = i.padding, h = i.boundary, d = i.rootBoundary, u = i.altBoundary, f = i.flipVariations, p = void 0 === f || f, g = i.allowedAutoPlacements, m = e.options.placement, _ = Vt(m), b = l || (_ !== m && p ? function (t) {
                        if (Vt(t) === vt) return [];
                        var e = me(t);
                        return [be(t), e, be(e)]
                    }(m) : [me(m)]), v = [m].concat(b).reduce((function (t, i) {
                        return t.concat(Vt(i) === vt ? ke(e, {
                            placement: i,
                            boundary: h,
                            rootBoundary: d,
                            padding: c,
                            flipVariations: p,
                            allowedAutoPlacements: g
                        }) : i)
                    }), []), y = e.rects.reference, w = e.rects.popper, A = new Map, E = !0, T = v[0], C = 0; C < v.length; C++) {
                        var O = v[C], x = Vt(O), k = ce(O) === wt, L = [gt, mt].indexOf(x) >= 0,
                            D = L ? "width" : "height",
                            S = xe(e, {placement: O, boundary: h, rootBoundary: d, altBoundary: u, padding: c}),
                            I = L ? k ? _t : bt : k ? mt : gt;
                        y[D] > w[D] && (I = me(I));
                        var N = me(I), P = [];
                        if (o && P.push(S[x] <= 0), a && P.push(S[I] <= 0, S[N] <= 0), P.every((function (t) {
                            return t
                        }))) {
                            T = O, E = !1;
                            break
                        }
                        A.set(O, P)
                    }
                    if (E) for (var j = function (t) {
                        var e = v.find((function (e) {
                            var i = A.get(e);
                            if (i) return i.slice(0, t).every((function (t) {
                                return t
                            }))
                        }));
                        if (e) return T = e, "break"
                    }, M = p ? 3 : 1; M > 0 && "break" !== j(M); M--) ;
                    e.placement !== T && (e.modifiersData[n]._skip = !0, e.placement = T, e.reset = !0)
                }
            }, requiresIfExists: ["offset"], data: {_skip: !1}
        };

        function De(t, e, i) {
            return void 0 === i && (i = {x: 0, y: 0}), {
                top: t.top - e.height - i.y,
                right: t.right - e.width + i.x,
                bottom: t.bottom - e.height + i.y,
                left: t.left - e.width - i.x
            }
        }

        function Se(t) {
            return [gt, _t, mt, bt].some((function (e) {
                return t[e] >= 0
            }))
        }

        const Ie = {
            name: "hide", enabled: !0, phase: "main", requiresIfExists: ["preventOverflow"], fn: function (t) {
                var e = t.state, i = t.name, n = e.rects.reference, s = e.rects.popper,
                    o = e.modifiersData.preventOverflow, r = xe(e, {elementContext: "reference"}),
                    a = xe(e, {altBoundary: !0}), l = De(r, n), c = De(a, s, o), h = Se(l), d = Se(c);
                e.modifiersData[i] = {
                    referenceClippingOffsets: l,
                    popperEscapeOffsets: c,
                    isReferenceHidden: h,
                    hasPopperEscaped: d
                }, e.attributes.popper = Object.assign({}, e.attributes.popper, {
                    "data-popper-reference-hidden": h,
                    "data-popper-escaped": d
                })
            }
        }, Ne = {
            name: "offset", enabled: !0, phase: "main", requires: ["popperOffsets"], fn: function (t) {
                var e = t.state, i = t.options, n = t.name, s = i.offset, o = void 0 === s ? [0, 0] : s,
                    r = kt.reduce((function (t, i) {
                        return t[i] = function (t, e, i) {
                            var n = Vt(t), s = [bt, gt].indexOf(n) >= 0 ? -1 : 1,
                                o = "function" == typeof i ? i(Object.assign({}, e, {placement: t})) : i, r = o[0],
                                a = o[1];
                            return r = r || 0, a = (a || 0) * s, [bt, _t].indexOf(n) >= 0 ? {x: a, y: r} : {x: r, y: a}
                        }(i, e.rects, o), t
                    }), {}), a = r[e.placement], l = a.x, c = a.y;
                null != e.modifiersData.popperOffsets && (e.modifiersData.popperOffsets.x += l, e.modifiersData.popperOffsets.y += c), e.modifiersData[n] = r
            }
        }, Pe = {
            name: "popperOffsets", enabled: !0, phase: "read", fn: function (t) {
                var e = t.state, i = t.name;
                e.modifiersData[i] = Oe({
                    reference: e.rects.reference,
                    element: e.rects.popper,
                    strategy: "absolute",
                    placement: e.placement
                })
            }, data: {}
        }, je = {
            name: "preventOverflow", enabled: !0, phase: "main", fn: function (t) {
                var e = t.state, i = t.options, n = t.name, s = i.mainAxis, o = void 0 === s || s, r = i.altAxis,
                    a = void 0 !== r && r, l = i.boundary, c = i.rootBoundary, h = i.altBoundary, d = i.padding,
                    u = i.tether, f = void 0 === u || u, p = i.tetherOffset, g = void 0 === p ? 0 : p,
                    m = xe(e, {boundary: l, rootBoundary: c, padding: d, altBoundary: h}), _ = Vt(e.placement),
                    b = ce(e.placement), v = !b, y = se(_), w = "x" === y ? "y" : "x",
                    A = e.modifiersData.popperOffsets, E = e.rects.reference, T = e.rects.popper,
                    C = "function" == typeof g ? g(Object.assign({}, e.rects, {placement: e.placement})) : g,
                    O = "number" == typeof C ? {mainAxis: C, altAxis: C} : Object.assign({mainAxis: 0, altAxis: 0}, C),
                    x = e.modifiersData.offset ? e.modifiersData.offset[e.placement] : null, k = {x: 0, y: 0};
                if (A) {
                    if (o) {
                        var L, D = "y" === y ? gt : bt, S = "y" === y ? mt : _t, I = "y" === y ? "height" : "width",
                            N = A[y], P = N + m[D], j = N - m[S], M = f ? -T[I] / 2 : 0, H = b === wt ? E[I] : T[I],
                            $ = b === wt ? -T[I] : -E[I], W = e.elements.arrow,
                            B = f && W ? Ut(W) : {width: 0, height: 0},
                            F = e.modifiersData["arrow#persistent"] ? e.modifiersData["arrow#persistent"].padding : {
                                top: 0,
                                right: 0,
                                bottom: 0,
                                left: 0
                            }, z = F[D], R = F[S], q = oe(0, E[I], B[I]),
                            V = v ? E[I] / 2 - M - q - z - O.mainAxis : H - q - z - O.mainAxis,
                            K = v ? -E[I] / 2 + M + q + R + O.mainAxis : $ + q + R + O.mainAxis,
                            Q = e.elements.arrow && ne(e.elements.arrow),
                            X = Q ? "y" === y ? Q.clientTop || 0 : Q.clientLeft || 0 : 0,
                            Y = null != (L = null == x ? void 0 : x[y]) ? L : 0, U = N + K - Y,
                            G = oe(f ? Qt(P, N + V - Y - X) : P, N, f ? Kt(j, U) : j);
                        A[y] = G, k[y] = G - N
                    }
                    if (a) {
                        var J, Z = "x" === y ? gt : bt, tt = "x" === y ? mt : _t, et = A[w],
                            it = "y" === w ? "height" : "width", nt = et + m[Z], st = et - m[tt],
                            ot = -1 !== [gt, bt].indexOf(_), rt = null != (J = null == x ? void 0 : x[w]) ? J : 0,
                            at = ot ? nt : et - E[it] - T[it] - rt + O.altAxis,
                            lt = ot ? et + E[it] + T[it] - rt - O.altAxis : st, ct = f && ot ? function (t, e, i) {
                                var n = oe(t, e, i);
                                return n > i ? i : n
                            }(at, et, lt) : oe(f ? at : nt, et, f ? lt : st);
                        A[w] = ct, k[w] = ct - et
                    }
                    e.modifiersData[n] = k
                }
            }, requiresIfExists: ["offset"]
        };

        function Me(t, e, i) {
            void 0 === i && (i = !1);
            var n, s, o = zt(e), r = zt(e) && function (t) {
                var e = t.getBoundingClientRect(), i = Xt(e.width) / t.offsetWidth || 1,
                    n = Xt(e.height) / t.offsetHeight || 1;
                return 1 !== i || 1 !== n
            }(e), a = te(e), l = Yt(t, r), c = {scrollLeft: 0, scrollTop: 0}, h = {x: 0, y: 0};
            return (o || !o && !i) && (("body" !== Wt(e) || we(a)) && (c = (n = e) !== Bt(n) && zt(n) ? {
                scrollLeft: (s = n).scrollLeft,
                scrollTop: s.scrollTop
            } : ve(n)), zt(e) ? ((h = Yt(e, !0)).x += e.clientLeft, h.y += e.clientTop) : a && (h.x = ye(a))), {
                x: l.left + c.scrollLeft - h.x,
                y: l.top + c.scrollTop - h.y,
                width: l.width,
                height: l.height
            }
        }

        function He(t) {
            var e = new Map, i = new Set, n = [];

            function s(t) {
                i.add(t.name), [].concat(t.requires || [], t.requiresIfExists || []).forEach((function (t) {
                    if (!i.has(t)) {
                        var n = e.get(t);
                        n && s(n)
                    }
                })), n.push(t)
            }

            return t.forEach((function (t) {
                e.set(t.name, t)
            })), t.forEach((function (t) {
                i.has(t.name) || s(t)
            })), n
        }

        var $e = {placement: "bottom", modifiers: [], strategy: "absolute"};

        function We() {
            for (var t = arguments.length, e = new Array(t), i = 0; i < t; i++) e[i] = arguments[i];
            return !e.some((function (t) {
                return !(t && "function" == typeof t.getBoundingClientRect)
            }))
        }

        function Be(t) {
            void 0 === t && (t = {});
            var e = t, i = e.defaultModifiers, n = void 0 === i ? [] : i, s = e.defaultOptions,
                o = void 0 === s ? $e : s;
            return function (t, e, i) {
                void 0 === i && (i = o);
                var s, r, a = {
                    placement: "bottom",
                    orderedModifiers: [],
                    options: Object.assign({}, $e, o),
                    modifiersData: {},
                    elements: {reference: t, popper: e},
                    attributes: {},
                    styles: {}
                }, l = [], c = !1, h = {
                    state: a, setOptions: function (i) {
                        var s = "function" == typeof i ? i(a.options) : i;
                        d(), a.options = Object.assign({}, o, a.options, s), a.scrollParents = {
                            reference: Ft(t) ? Ee(t) : t.contextElement ? Ee(t.contextElement) : [],
                            popper: Ee(e)
                        };
                        var r, c, u = function (t) {
                            var e = He(t);
                            return $t.reduce((function (t, i) {
                                return t.concat(e.filter((function (t) {
                                    return t.phase === i
                                })))
                            }), [])
                        }((r = [].concat(n, a.options.modifiers), c = r.reduce((function (t, e) {
                            var i = t[e.name];
                            return t[e.name] = i ? Object.assign({}, i, e, {
                                options: Object.assign({}, i.options, e.options),
                                data: Object.assign({}, i.data, e.data)
                            }) : e, t
                        }), {}), Object.keys(c).map((function (t) {
                            return c[t]
                        }))));
                        return a.orderedModifiers = u.filter((function (t) {
                            return t.enabled
                        })), a.orderedModifiers.forEach((function (t) {
                            var e = t.name, i = t.options, n = void 0 === i ? {} : i, s = t.effect;
                            if ("function" == typeof s) {
                                var o = s({state: a, name: e, instance: h, options: n});
                                l.push(o || function () {
                                })
                            }
                        })), h.update()
                    }, forceUpdate: function () {
                        if (!c) {
                            var t = a.elements, e = t.reference, i = t.popper;
                            if (We(e, i)) {
                                a.rects = {
                                    reference: Me(e, ne(i), "fixed" === a.options.strategy),
                                    popper: Ut(i)
                                }, a.reset = !1, a.placement = a.options.placement, a.orderedModifiers.forEach((function (t) {
                                    return a.modifiersData[t.name] = Object.assign({}, t.data)
                                }));
                                for (var n = 0; n < a.orderedModifiers.length; n++) if (!0 !== a.reset) {
                                    var s = a.orderedModifiers[n], o = s.fn, r = s.options, l = void 0 === r ? {} : r,
                                        d = s.name;
                                    "function" == typeof o && (a = o({state: a, options: l, name: d, instance: h}) || a)
                                } else a.reset = !1, n = -1
                            }
                        }
                    }, update: (s = function () {
                        return new Promise((function (t) {
                            h.forceUpdate(), t(a)
                        }))
                    }, function () {
                        return r || (r = new Promise((function (t) {
                            Promise.resolve().then((function () {
                                r = void 0, t(s())
                            }))
                        }))), r
                    }), destroy: function () {
                        d(), c = !0
                    }
                };
                if (!We(t, e)) return h;

                function d() {
                    l.forEach((function (t) {
                        return t()
                    })), l = []
                }

                return h.setOptions(i).then((function (t) {
                    !c && i.onFirstUpdate && i.onFirstUpdate(t)
                })), h
            }
        }

        var Fe = Be(), ze = Be({defaultModifiers: [pe, Pe, ue, qt]}),
            Re = Be({defaultModifiers: [pe, Pe, ue, qt, Ne, Le, je, le, Ie]});
        const qe = Object.freeze(Object.defineProperty({
                __proto__: null,
                popperGenerator: Be,
                detectOverflow: xe,
                createPopperBase: Fe,
                createPopper: Re,
                createPopperLite: ze,
                top: gt,
                bottom: mt,
                right: _t,
                left: bt,
                auto: vt,
                basePlacements: yt,
                start: wt,
                end: At,
                clippingParents: Et,
                viewport: Tt,
                popper: Ct,
                reference: Ot,
                variationPlacements: xt,
                placements: kt,
                beforeRead: Lt,
                read: Dt,
                afterRead: St,
                beforeMain: It,
                main: Nt,
                afterMain: Pt,
                beforeWrite: jt,
                write: Mt,
                afterWrite: Ht,
                modifierPhases: $t,
                applyStyles: qt,
                arrow: le,
                computeStyles: ue,
                eventListeners: pe,
                flip: Le,
                hide: Ie,
                offset: Ne,
                popperOffsets: Pe,
                preventOverflow: je
            }, Symbol.toStringTag, {value: "Module"})), Ve = "dropdown", Ke = "ArrowUp", Qe = "ArrowDown",
            Xe = "click.bs.dropdown.data-api", Ye = "keydown.bs.dropdown.data-api", Ue = "show",
            Ge = '[data-bs-toggle="dropdown"]:not(.disabled):not(:disabled)', Je = `${Ge}.show`, Ze = ".dropdown-menu",
            ti = p() ? "top-end" : "top-start", ei = p() ? "top-start" : "top-end",
            ii = p() ? "bottom-end" : "bottom-start", ni = p() ? "bottom-start" : "bottom-end",
            si = p() ? "left-start" : "right-start", oi = p() ? "right-start" : "left-start", ri = {
                autoClose: !0,
                boundary: "clippingParents",
                display: "dynamic",
                offset: [0, 2],
                popperConfig: null,
                reference: "toggle"
            }, ai = {
                autoClose: "(boolean|string)",
                boundary: "(string|element)",
                display: "string",
                offset: "(array|string|function)",
                popperConfig: "(null|object|function)",
                reference: "(string|element|object)"
            };

        class li extends z {
            constructor(t, e) {
                super(t, e), this._popper = null, this._parent = this._element.parentNode, this._menu = Q.findOne(Ze, this._parent), this._inNavbar = this._detectNavbar()
            }

            static get Default() {
                return ri
            }

            static get DefaultType() {
                return ai
            }

            static get NAME() {
                return Ve
            }

            toggle() {
                return this._isShown() ? this.hide() : this.show()
            }

            show() {
                if (l(this._element) || this._isShown()) return;
                const t = {relatedTarget: this._element};
                if (!P.trigger(this._element, "show.bs.dropdown", t).defaultPrevented) {
                    if (this._createPopper(), "ontouchstart" in document.documentElement && !this._parent.closest(".navbar-nav")) for (const t of [].concat(...document.body.children)) P.on(t, "mouseover", h);
                    this._element.focus(), this._element.setAttribute("aria-expanded", !0), this._menu.classList.add(Ue), this._element.classList.add(Ue), P.trigger(this._element, "shown.bs.dropdown", t)
                }
            }

            hide() {
                if (l(this._element) || !this._isShown()) return;
                const t = {relatedTarget: this._element};
                this._completeHide(t)
            }

            dispose() {
                this._popper && this._popper.destroy(), super.dispose()
            }

            update() {
                this._inNavbar = this._detectNavbar(), this._popper && this._popper.update()
            }

            _completeHide(t) {
                if (!P.trigger(this._element, "hide.bs.dropdown", t).defaultPrevented) {
                    if ("ontouchstart" in document.documentElement) for (const t of [].concat(...document.body.children)) P.off(t, "mouseover", h);
                    this._popper && this._popper.destroy(), this._menu.classList.remove(Ue), this._element.classList.remove(Ue), this._element.setAttribute("aria-expanded", "false"), B.removeDataAttribute(this._menu, "popper"), P.trigger(this._element, "hidden.bs.dropdown", t)
                }
            }

            _getConfig(t) {
                if ("object" == typeof (t = super._getConfig(t)).reference && !o(t.reference) && "function" != typeof t.reference.getBoundingClientRect) throw new TypeError(`${Ve.toUpperCase()}: Option "reference" provided type "object" without a required "getBoundingClientRect" method.`);
                return t
            }

            _createPopper() {
                if (void 0 === qe) throw new TypeError("Bootstrap's dropdowns require Popper (https://popper.js.org)");
                let t = this._element;
                "parent" === this._config.reference ? t = this._parent : o(this._config.reference) ? t = r(this._config.reference) : "object" == typeof this._config.reference && (t = this._config.reference);
                const e = this._getPopperConfig();
                this._popper = Re(t, this._menu, e)
            }

            _isShown() {
                return this._menu.classList.contains(Ue)
            }

            _getPlacement() {
                const t = this._parent;
                if (t.classList.contains("dropend")) return si;
                if (t.classList.contains("dropstart")) return oi;
                if (t.classList.contains("dropup-center")) return "top";
                if (t.classList.contains("dropdown-center")) return "bottom";
                const e = "end" === getComputedStyle(this._menu).getPropertyValue("--bs-position").trim();
                return t.classList.contains("dropup") ? e ? ei : ti : e ? ni : ii
            }

            _detectNavbar() {
                return null !== this._element.closest(".navbar")
            }

            _getOffset() {
                const {offset: t} = this._config;
                return "string" == typeof t ? t.split(",").map((t => Number.parseInt(t, 10))) : "function" == typeof t ? e => t(e, this._element) : t
            }

            _getPopperConfig() {
                const t = {
                    placement: this._getPlacement(),
                    modifiers: [{name: "preventOverflow", options: {boundary: this._config.boundary}}, {
                        name: "offset",
                        options: {offset: this._getOffset()}
                    }]
                };
                return (this._inNavbar || "static" === this._config.display) && (B.setDataAttribute(this._menu, "popper", "static"), t.modifiers = [{
                    name: "applyStyles",
                    enabled: !1
                }]), {...t, ..."function" == typeof this._config.popperConfig ? this._config.popperConfig(t) : this._config.popperConfig}
            }

            _selectMenuItem({key: t, target: e}) {
                const i = Q.find(".dropdown-menu .dropdown-item:not(.disabled):not(:disabled)", this._menu).filter((t => a(t)));
                i.length && b(i, e, t === Qe, !i.includes(e)).focus()
            }

            static jQueryInterface(t) {
                return this.each((function () {
                    const e = li.getOrCreateInstance(this, t);
                    if ("string" == typeof t) {
                        if (void 0 === e[t]) throw new TypeError(`No method named "${t}"`);
                        e[t]()
                    }
                }))
            }

            static clearMenus(t) {
                if (2 === t.button || "keyup" === t.type && "Tab" !== t.key) return;
                const e = Q.find(Je);
                for (const i of e) {
                    const e = li.getInstance(i);
                    if (!e || !1 === e._config.autoClose) continue;
                    const n = t.composedPath(), s = n.includes(e._menu);
                    if (n.includes(e._element) || "inside" === e._config.autoClose && !s || "outside" === e._config.autoClose && s) continue;
                    if (e._menu.contains(t.target) && ("keyup" === t.type && "Tab" === t.key || /input|select|option|textarea|form/i.test(t.target.tagName))) continue;
                    const o = {relatedTarget: e._element};
                    "click" === t.type && (o.clickEvent = t), e._completeHide(o)
                }
            }

            static dataApiKeydownHandler(t) {
                const e = /input|textarea/i.test(t.target.tagName), i = "Escape" === t.key,
                    n = [Ke, Qe].includes(t.key);
                if (!n && !i) return;
                if (e && !i) return;
                t.preventDefault();
                const s = Q.findOne(Ge, t.delegateTarget.parentNode), o = li.getOrCreateInstance(s);
                if (n) return t.stopPropagation(), o.show(), void o._selectMenuItem(t);
                o._isShown() && (t.stopPropagation(), o.hide(), s.focus())
            }
        }

        P.on(document, Ye, Ge, li.dataApiKeydownHandler), P.on(document, Ye, Ze, li.dataApiKeydownHandler), P.on(document, Xe, li.clearMenus), P.on(document, "keyup.bs.dropdown.data-api", li.clearMenus), P.on(document, Xe, Ge, (function (t) {
            t.preventDefault(), li.getOrCreateInstance(this).toggle()
        })), g(li);
        const ci = ".fixed-top, .fixed-bottom, .is-fixed, .sticky-top", hi = ".sticky-top", di = "padding-right",
            ui = "margin-right";

        class fi {
            constructor() {
                this._element = document.body
            }

            getWidth() {
                const t = document.documentElement.clientWidth;
                return Math.abs(window.innerWidth - t)
            }

            hide() {
                const t = this.getWidth();
                this._disableOverFlow(), this._setElementAttributes(this._element, di, (e => e + t)), this._setElementAttributes(ci, di, (e => e + t)), this._setElementAttributes(hi, ui, (e => e - t))
            }

            reset() {
                this._resetElementAttributes(this._element, "overflow"), this._resetElementAttributes(this._element, di), this._resetElementAttributes(ci, di), this._resetElementAttributes(hi, ui)
            }

            isOverflowing() {
                return this.getWidth() > 0
            }

            _disableOverFlow() {
                this._saveInitialAttribute(this._element, "overflow"), this._element.style.overflow = "hidden"
            }

            _setElementAttributes(t, e, i) {
                const n = this.getWidth();
                this._applyManipulationCallback(t, (t => {
                    if (t !== this._element && window.innerWidth > t.clientWidth + n) return;
                    this._saveInitialAttribute(t, e);
                    const s = window.getComputedStyle(t).getPropertyValue(e);
                    t.style.setProperty(e, `${i(Number.parseFloat(s))}px`)
                }))
            }

            _saveInitialAttribute(t, e) {
                const i = t.style.getPropertyValue(e);
                i && B.setDataAttribute(t, e, i)
            }

            _resetElementAttributes(t, e) {
                this._applyManipulationCallback(t, (t => {
                    const i = B.getDataAttribute(t, e);
                    null !== i ? (B.removeDataAttribute(t, e), t.style.setProperty(e, i)) : t.style.removeProperty(e)
                }))
            }

            _applyManipulationCallback(t, e) {
                if (o(t)) e(t); else for (const i of Q.find(t, this._element)) e(i)
            }
        }

        const pi = "show", gi = "mousedown.bs.backdrop",
            mi = {className: "modal-backdrop", clickCallback: null, isAnimated: !1, isVisible: !0, rootElement: "body"},
            _i = {
                className: "string",
                clickCallback: "(function|null)",
                isAnimated: "boolean",
                isVisible: "boolean",
                rootElement: "(element|string)"
            };

        class bi extends F {
            constructor(t) {
                super(), this._config = this._getConfig(t), this._isAppended = !1, this._element = null
            }

            static get Default() {
                return mi
            }

            static get DefaultType() {
                return _i
            }

            static get NAME() {
                return "backdrop"
            }

            show(t) {
                if (!this._config.isVisible) return void m(t);
                this._append();
                const e = this._getElement();
                this._config.isAnimated && d(e), e.classList.add(pi), this._emulateAnimation((() => {
                    m(t)
                }))
            }

            hide(t) {
                this._config.isVisible ? (this._getElement().classList.remove(pi), this._emulateAnimation((() => {
                    this.dispose(), m(t)
                }))) : m(t)
            }

            dispose() {
                this._isAppended && (P.off(this._element, gi), this._element.remove(), this._isAppended = !1)
            }

            _getElement() {
                if (!this._element) {
                    const t = document.createElement("div");
                    t.className = this._config.className, this._config.isAnimated && t.classList.add("fade"), this._element = t
                }
                return this._element
            }

            _configAfterMerge(t) {
                return t.rootElement = r(t.rootElement), t
            }

            _append() {
                if (this._isAppended) return;
                const t = this._getElement();
                this._config.rootElement.append(t), P.on(t, gi, (() => {
                    m(this._config.clickCallback)
                })), this._isAppended = !0
            }

            _emulateAnimation(t) {
                _(t, this._getElement(), this._config.isAnimated)
            }
        }

        const vi = ".bs.focustrap", yi = "backward", wi = {autofocus: !0, trapElement: null},
            Ai = {autofocus: "boolean", trapElement: "element"};

        class Ei extends F {
            constructor(t) {
                super(), this._config = this._getConfig(t), this._isActive = !1, this._lastTabNavDirection = null
            }

            static get Default() {
                return wi
            }

            static get DefaultType() {
                return Ai
            }

            static get NAME() {
                return "focustrap"
            }

            activate() {
                this._isActive || (this._config.autofocus && this._config.trapElement.focus(), P.off(document, vi), P.on(document, "focusin.bs.focustrap", (t => this._handleFocusin(t))), P.on(document, "keydown.tab.bs.focustrap", (t => this._handleKeydown(t))), this._isActive = !0)
            }

            deactivate() {
                this._isActive && (this._isActive = !1, P.off(document, vi))
            }

            _handleFocusin(t) {
                const {trapElement: e} = this._config;
                if (t.target === document || t.target === e || e.contains(t.target)) return;
                const i = Q.focusableChildren(e);
                0 === i.length ? e.focus() : this._lastTabNavDirection === yi ? i[i.length - 1].focus() : i[0].focus()
            }

            _handleKeydown(t) {
                "Tab" === t.key && (this._lastTabNavDirection = t.shiftKey ? yi : "forward")
            }
        }

        const Ti = "hidden.bs.modal", Ci = "show.bs.modal", Oi = "modal-open", xi = "show", ki = "modal-static",
            Li = {backdrop: !0, focus: !0, keyboard: !0},
            Di = {backdrop: "(boolean|string)", focus: "boolean", keyboard: "boolean"};

        class Si extends z {
            constructor(t, e) {
                super(t, e), this._dialog = Q.findOne(".modal-dialog", this._element), this._backdrop = this._initializeBackDrop(), this._focustrap = this._initializeFocusTrap(), this._isShown = !1, this._isTransitioning = !1, this._scrollBar = new fi, this._addEventListeners()
            }

            static get Default() {
                return Li
            }

            static get DefaultType() {
                return Di
            }

            static get NAME() {
                return "modal"
            }

            toggle(t) {
                return this._isShown ? this.hide() : this.show(t)
            }

            show(t) {
                this._isShown || this._isTransitioning || P.trigger(this._element, Ci, {relatedTarget: t}).defaultPrevented || (this._isShown = !0, this._isTransitioning = !0, this._scrollBar.hide(), document.body.classList.add(Oi), this._adjustDialog(), this._backdrop.show((() => this._showElement(t))))
            }

            hide() {
                this._isShown && !this._isTransitioning && (P.trigger(this._element, "hide.bs.modal").defaultPrevented || (this._isShown = !1, this._isTransitioning = !0, this._focustrap.deactivate(), this._element.classList.remove(xi), this._queueCallback((() => this._hideModal()), this._element, this._isAnimated())))
            }

            dispose() {
                for (const t of [window, this._dialog]) P.off(t, ".bs.modal");
                this._backdrop.dispose(), this._focustrap.deactivate(), super.dispose()
            }

            handleUpdate() {
                this._adjustDialog()
            }

            _initializeBackDrop() {
                return new bi({isVisible: Boolean(this._config.backdrop), isAnimated: this._isAnimated()})
            }

            _initializeFocusTrap() {
                return new Ei({trapElement: this._element})
            }

            _showElement(t) {
                document.body.contains(this._element) || document.body.append(this._element), this._element.style.display = "block", this._element.removeAttribute("aria-hidden"), this._element.setAttribute("aria-modal", !0), this._element.setAttribute("role", "dialog"), this._element.scrollTop = 0;
                const e = Q.findOne(".modal-body", this._dialog);
                e && (e.scrollTop = 0), d(this._element), this._element.classList.add(xi), this._queueCallback((() => {
                    this._config.focus && this._focustrap.activate(), this._isTransitioning = !1, P.trigger(this._element, "shown.bs.modal", {relatedTarget: t})
                }), this._dialog, this._isAnimated())
            }

            _addEventListeners() {
                P.on(this._element, "keydown.dismiss.bs.modal", (t => {
                    if ("Escape" === t.key) return this._config.keyboard ? (t.preventDefault(), void this.hide()) : void this._triggerBackdropTransition()
                })), P.on(window, "resize.bs.modal", (() => {
                    this._isShown && !this._isTransitioning && this._adjustDialog()
                })), P.on(this._element, "mousedown.dismiss.bs.modal", (t => {
                    t.target === t.currentTarget && ("static" !== this._config.backdrop ? this._config.backdrop && this.hide() : this._triggerBackdropTransition())
                }))
            }

            _hideModal() {
                this._element.style.display = "none", this._element.setAttribute("aria-hidden", !0), this._element.removeAttribute("aria-modal"), this._element.removeAttribute("role"), this._isTransitioning = !1, this._backdrop.hide((() => {
                    document.body.classList.remove(Oi), this._resetAdjustments(), this._scrollBar.reset(), P.trigger(this._element, Ti)
                }))
            }

            _isAnimated() {
                return this._element.classList.contains("fade")
            }

            _triggerBackdropTransition() {
                if (P.trigger(this._element, "hidePrevented.bs.modal").defaultPrevented) return;
                const t = this._element.scrollHeight > document.documentElement.clientHeight,
                    e = this._element.style.overflowY;
                "hidden" === e || this._element.classList.contains(ki) || (t || (this._element.style.overflowY = "hidden"), this._element.classList.add(ki), this._queueCallback((() => {
                    this._element.classList.remove(ki), this._queueCallback((() => {
                        this._element.style.overflowY = e
                    }), this._dialog)
                }), this._dialog), this._element.focus())
            }

            _adjustDialog() {
                const t = this._element.scrollHeight > document.documentElement.clientHeight,
                    e = this._scrollBar.getWidth(), i = e > 0;
                if (i && !t) {
                    const t = p() ? "paddingLeft" : "paddingRight";
                    this._element.style[t] = `${e}px`
                }
                if (!i && t) {
                    const t = p() ? "paddingRight" : "paddingLeft";
                    this._element.style[t] = `${e}px`
                }
            }

            _resetAdjustments() {
                this._element.style.paddingLeft = "", this._element.style.paddingRight = ""
            }

            static jQueryInterface(t, e) {
                return this.each((function () {
                    const i = Si.getOrCreateInstance(this, t);
                    if ("string" == typeof t) {
                        if (void 0 === i[t]) throw new TypeError(`No method named "${t}"`);
                        i[t](e)
                    }
                }))
            }
        }

        P.on(document, "click.bs.modal.data-api", '[data-bs-toggle="modal"]', (function (t) {
            const e = n(this);
            ["A", "AREA"].includes(this.tagName) && t.preventDefault(), P.one(e, Ci, (t => {
                t.defaultPrevented || P.one(e, Ti, (() => {
                    a(this) && this.focus()
                }))
            }));
            const i = Q.findOne(".modal.show");
            i && Si.getInstance(i).hide(), Si.getOrCreateInstance(e).toggle(this)
        })), R(Si), g(Si);
        const Ii = "show", Ni = "showing", Pi = "hiding", ji = ".offcanvas.show", Mi = "hidePrevented.bs.offcanvas",
            Hi = "hidden.bs.offcanvas", $i = {backdrop: !0, keyboard: !0, scroll: !1},
            Wi = {backdrop: "(boolean|string)", keyboard: "boolean", scroll: "boolean"};

        class Bi extends z {
            constructor(t, e) {
                super(t, e), this._isShown = !1, this._backdrop = this._initializeBackDrop(), this._focustrap = this._initializeFocusTrap(), this._addEventListeners()
            }

            static get Default() {
                return $i
            }

            static get DefaultType() {
                return Wi
            }

            static get NAME() {
                return "offcanvas"
            }

            toggle(t) {
                return this._isShown ? this.hide() : this.show(t)
            }

            show(t) {
                this._isShown || P.trigger(this._element, "show.bs.offcanvas", {relatedTarget: t}).defaultPrevented || (this._isShown = !0, this._backdrop.show(), this._config.scroll || (new fi).hide(), this._element.setAttribute("aria-modal", !0), this._element.setAttribute("role", "dialog"), this._element.classList.add(Ni), this._queueCallback((() => {
                    this._config.scroll && !this._config.backdrop || this._focustrap.activate(), this._element.classList.add(Ii), this._element.classList.remove(Ni), P.trigger(this._element, "shown.bs.offcanvas", {relatedTarget: t})
                }), this._element, !0))
            }

            hide() {
                this._isShown && (P.trigger(this._element, "hide.bs.offcanvas").defaultPrevented || (this._focustrap.deactivate(), this._element.blur(), this._isShown = !1, this._element.classList.add(Pi), this._backdrop.hide(), this._queueCallback((() => {
                    this._element.classList.remove(Ii, Pi), this._element.removeAttribute("aria-modal"), this._element.removeAttribute("role"), this._config.scroll || (new fi).reset(), P.trigger(this._element, Hi)
                }), this._element, !0)))
            }

            dispose() {
                this._backdrop.dispose(), this._focustrap.deactivate(), super.dispose()
            }

            _initializeBackDrop() {
                const t = Boolean(this._config.backdrop);
                return new bi({
                    className: "offcanvas-backdrop",
                    isVisible: t,
                    isAnimated: !0,
                    rootElement: this._element.parentNode,
                    clickCallback: t ? () => {
                        "static" !== this._config.backdrop ? this.hide() : P.trigger(this._element, Mi)
                    } : null
                })
            }

            _initializeFocusTrap() {
                return new Ei({trapElement: this._element})
            }

            _addEventListeners() {
                P.on(this._element, "keydown.dismiss.bs.offcanvas", (t => {
                    "Escape" === t.key && (this._config.keyboard ? this.hide() : P.trigger(this._element, Mi))
                }))
            }

            static jQueryInterface(t) {
                return this.each((function () {
                    const e = Bi.getOrCreateInstance(this, t);
                    if ("string" == typeof t) {
                        if (void 0 === e[t] || t.startsWith("_") || "constructor" === t) throw new TypeError(`No method named "${t}"`);
                        e[t](this)
                    }
                }))
            }
        }

        P.on(document, "click.bs.offcanvas.data-api", '[data-bs-toggle="offcanvas"]', (function (t) {
            const e = n(this);
            if (["A", "AREA"].includes(this.tagName) && t.preventDefault(), l(this)) return;
            P.one(e, Hi, (() => {
                a(this) && this.focus()
            }));
            const i = Q.findOne(ji);
            i && i !== e && Bi.getInstance(i).hide(), Bi.getOrCreateInstance(e).toggle(this)
        })), P.on(window, "load.bs.offcanvas.data-api", (() => {
            for (const t of Q.find(ji)) Bi.getOrCreateInstance(t).show()
        })), P.on(window, "resize.bs.offcanvas", (() => {
            for (const t of Q.find("[aria-modal][class*=show][class*=offcanvas-]")) "fixed" !== getComputedStyle(t).position && Bi.getOrCreateInstance(t).hide()
        })), R(Bi), g(Bi);
        const Fi = new Set(["background", "cite", "href", "itemtype", "longdesc", "poster", "src", "xlink:href"]),
            zi = /^(?:(?:https?|mailto|ftp|tel|file|sms):|[^#&/:?]*(?:[#/?]|$))/i,
            Ri = /^data:(?:image\/(?:bmp|gif|jpeg|jpg|png|tiff|webp)|video\/(?:mpeg|mp4|ogg|webm)|audio\/(?:mp3|oga|ogg|opus));base64,[\d+/a-z]+=*$/i,
            qi = (t, e) => {
                const i = t.nodeName.toLowerCase();
                return e.includes(i) ? !Fi.has(i) || Boolean(zi.test(t.nodeValue) || Ri.test(t.nodeValue)) : e.filter((t => t instanceof RegExp)).some((t => t.test(i)))
            }, Vi = {
                "*": ["class", "dir", "id", "lang", "role", /^aria-[\w-]*$/i],
                a: ["target", "href", "title", "rel"],
                area: [],
                b: [],
                br: [],
                col: [],
                code: [],
                div: [],
                em: [],
                hr: [],
                h1: [],
                h2: [],
                h3: [],
                h4: [],
                h5: [],
                h6: [],
                i: [],
                img: ["src", "srcset", "alt", "title", "width", "height"],
                li: [],
                ol: [],
                p: [],
                pre: [],
                s: [],
                small: [],
                span: [],
                sub: [],
                sup: [],
                strong: [],
                u: [],
                ul: []
            }, Ki = {
                allowList: Vi,
                content: {},
                extraClass: "",
                html: !1,
                sanitize: !0,
                sanitizeFn: null,
                template: "<div></div>"
            }, Qi = {
                allowList: "object",
                content: "object",
                extraClass: "(string|function)",
                html: "boolean",
                sanitize: "boolean",
                sanitizeFn: "(null|function)",
                template: "string"
            }, Xi = {entry: "(string|element|function|null)", selector: "(string|element)"};

        class Yi extends F {
            constructor(t) {
                super(), this._config = this._getConfig(t)
            }

            static get Default() {
                return Ki
            }

            static get DefaultType() {
                return Qi
            }

            static get NAME() {
                return "TemplateFactory"
            }

            getContent() {
                return Object.values(this._config.content).map((t => this._resolvePossibleFunction(t))).filter(Boolean)
            }

            hasContent() {
                return this.getContent().length > 0
            }

            changeContent(t) {
                return this._checkContent(t), this._config.content = {...this._config.content, ...t}, this
            }

            toHtml() {
                const t = document.createElement("div");
                t.innerHTML = this._maybeSanitize(this._config.template);
                for (const [e, i] of Object.entries(this._config.content)) this._setContent(t, i, e);
                const e = t.children[0], i = this._resolvePossibleFunction(this._config.extraClass);
                return i && e.classList.add(...i.split(" ")), e
            }

            _typeCheckConfig(t) {
                super._typeCheckConfig(t), this._checkContent(t.content)
            }

            _checkContent(t) {
                for (const [e, i] of Object.entries(t)) super._typeCheckConfig({selector: e, entry: i}, Xi)
            }

            _setContent(t, e, i) {
                const n = Q.findOne(i, t);
                n && ((e = this._resolvePossibleFunction(e)) ? o(e) ? this._putElementInTemplate(r(e), n) : this._config.html ? n.innerHTML = this._maybeSanitize(e) : n.textContent = e : n.remove())
            }

            _maybeSanitize(t) {
                return this._config.sanitize ? function (t, e, i) {
                    if (!t.length) return t;
                    if (i && "function" == typeof i) return i(t);
                    const n = (new window.DOMParser).parseFromString(t, "text/html"),
                        s = [].concat(...n.body.querySelectorAll("*"));
                    for (const t of s) {
                        const i = t.nodeName.toLowerCase();
                        if (!Object.keys(e).includes(i)) {
                            t.remove();
                            continue
                        }
                        const n = [].concat(...t.attributes), s = [].concat(e["*"] || [], e[i] || []);
                        for (const e of n) qi(e, s) || t.removeAttribute(e.nodeName)
                    }
                    return n.body.innerHTML
                }(t, this._config.allowList, this._config.sanitizeFn) : t
            }

            _resolvePossibleFunction(t) {
                return "function" == typeof t ? t(this) : t
            }

            _putElementInTemplate(t, e) {
                if (this._config.html) return e.innerHTML = "", void e.append(t);
                e.textContent = t.textContent
            }
        }

        const Ui = new Set(["sanitize", "allowList", "sanitizeFn"]), Gi = "fade", Ji = "show", Zi = ".modal",
            tn = "hide.bs.modal", en = "hover", nn = "focus", sn = {
                AUTO: "auto",
                TOP: "top",
                RIGHT: p() ? "left" : "right",
                BOTTOM: "bottom",
                LEFT: p() ? "right" : "left"
            }, on = {
                allowList: Vi,
                animation: !0,
                boundary: "clippingParents",
                container: !1,
                customClass: "",
                delay: 0,
                fallbackPlacements: ["top", "right", "bottom", "left"],
                html: !1,
                offset: [0, 0],
                placement: "top",
                popperConfig: null,
                sanitize: !0,
                sanitizeFn: null,
                selector: !1,
                template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
                title: "",
                trigger: "hover focus"
            }, rn = {
                allowList: "object",
                animation: "boolean",
                boundary: "(string|element)",
                container: "(string|element|boolean)",
                customClass: "(string|function)",
                delay: "(number|object)",
                fallbackPlacements: "array",
                html: "boolean",
                offset: "(array|string|function)",
                placement: "(string|function)",
                popperConfig: "(null|object|function)",
                sanitize: "boolean",
                sanitizeFn: "(null|function)",
                selector: "(string|boolean)",
                template: "string",
                title: "(string|element|function)",
                trigger: "string"
            };

        class an extends z {
            constructor(t, e) {
                if (void 0 === qe) throw new TypeError("Bootstrap's tooltips require Popper (https://popper.js.org)");
                super(t, e), this._isEnabled = !0, this._timeout = 0, this._isHovered = !1, this._activeTrigger = {}, this._popper = null, this._templateFactory = null, this._newContent = null, this.tip = null, this._setListeners()
            }

            static get Default() {
                return on
            }

            static get DefaultType() {
                return rn
            }

            static get NAME() {
                return "tooltip"
            }

            enable() {
                this._isEnabled = !0
            }

            disable() {
                this._isEnabled = !1
            }

            toggleEnabled() {
                this._isEnabled = !this._isEnabled
            }

            toggle(t) {
                if (this._isEnabled) {
                    if (t) {
                        const e = this._initializeOnDelegatedTarget(t);
                        return e._activeTrigger.click = !e._activeTrigger.click, void (e._isWithActiveTrigger() ? e._enter() : e._leave())
                    }
                    this._isShown() ? this._leave() : this._enter()
                }
            }

            dispose() {
                clearTimeout(this._timeout), P.off(this._element.closest(Zi), tn, this._hideModalHandler), this.tip && this.tip.remove(), this._disposePopper(), super.dispose()
            }

            show() {
                if ("none" === this._element.style.display) throw new Error("Please use show on visible elements");
                if (!this._isWithContent() || !this._isEnabled) return;
                const t = P.trigger(this._element, this.constructor.eventName("show")),
                    e = (c(this._element) || this._element.ownerDocument.documentElement).contains(this._element);
                if (t.defaultPrevented || !e) return;
                this.tip && (this.tip.remove(), this.tip = null);
                const i = this._getTipElement();
                this._element.setAttribute("aria-describedby", i.getAttribute("id"));
                const {container: n} = this._config;
                if (this._element.ownerDocument.documentElement.contains(this.tip) || (n.append(i), P.trigger(this._element, this.constructor.eventName("inserted"))), this._popper ? this._popper.update() : this._popper = this._createPopper(i), i.classList.add(Ji), "ontouchstart" in document.documentElement) for (const t of [].concat(...document.body.children)) P.on(t, "mouseover", h);
                this._queueCallback((() => {
                    const t = this._isHovered;
                    this._isHovered = !1, P.trigger(this._element, this.constructor.eventName("shown")), t && this._leave()
                }), this.tip, this._isAnimated())
            }

            hide() {
                if (!this._isShown()) return;
                if (P.trigger(this._element, this.constructor.eventName("hide")).defaultPrevented) return;
                const t = this._getTipElement();
                if (t.classList.remove(Ji), "ontouchstart" in document.documentElement) for (const t of [].concat(...document.body.children)) P.off(t, "mouseover", h);
                this._activeTrigger.click = !1, this._activeTrigger.focus = !1, this._activeTrigger.hover = !1, this._isHovered = !1, this._queueCallback((() => {
                    this._isWithActiveTrigger() || (this._isHovered || t.remove(), this._element.removeAttribute("aria-describedby"), P.trigger(this._element, this.constructor.eventName("hidden")), this._disposePopper())
                }), this.tip, this._isAnimated())
            }

            update() {
                this._popper && this._popper.update()
            }

            _isWithContent() {
                return Boolean(this._getTitle())
            }

            _getTipElement() {
                return this.tip || (this.tip = this._createTipElement(this._newContent || this._getContentForTemplate())), this.tip
            }

            _createTipElement(t) {
                const e = this._getTemplateFactory(t).toHtml();
                if (!e) return null;
                e.classList.remove(Gi, Ji), e.classList.add(`bs-${this.constructor.NAME}-auto`);
                const i = (t => {
                    do {
                        t += Math.floor(1e6 * Math.random())
                    } while (document.getElementById(t));
                    return t
                })(this.constructor.NAME).toString();
                return e.setAttribute("id", i), this._isAnimated() && e.classList.add(Gi), e
            }

            setContent(t) {
                this._newContent = t, this._isShown() && (this._disposePopper(), this.show())
            }

            _getTemplateFactory(t) {
                return this._templateFactory ? this._templateFactory.changeContent(t) : this._templateFactory = new Yi({
                    ...this._config,
                    content: t,
                    extraClass: this._resolvePossibleFunction(this._config.customClass)
                }), this._templateFactory
            }

            _getContentForTemplate() {
                return {".tooltip-inner": this._getTitle()}
            }

            _getTitle() {
                return this._resolvePossibleFunction(this._config.title) || this._config.originalTitle
            }

            _initializeOnDelegatedTarget(t) {
                return this.constructor.getOrCreateInstance(t.delegateTarget, this._getDelegateConfig())
            }

            _isAnimated() {
                return this._config.animation || this.tip && this.tip.classList.contains(Gi)
            }

            _isShown() {
                return this.tip && this.tip.classList.contains(Ji)
            }

            _createPopper(t) {
                const e = "function" == typeof this._config.placement ? this._config.placement.call(this, t, this._element) : this._config.placement,
                    i = sn[e.toUpperCase()];
                return Re(this._element, t, this._getPopperConfig(i))
            }

            _getOffset() {
                const {offset: t} = this._config;
                return "string" == typeof t ? t.split(",").map((t => Number.parseInt(t, 10))) : "function" == typeof t ? e => t(e, this._element) : t
            }

            _resolvePossibleFunction(t) {
                return "function" == typeof t ? t.call(this._element) : t
            }

            _getPopperConfig(t) {
                const e = {
                    placement: t,
                    modifiers: [{
                        name: "flip",
                        options: {fallbackPlacements: this._config.fallbackPlacements}
                    }, {name: "offset", options: {offset: this._getOffset()}}, {
                        name: "preventOverflow",
                        options: {boundary: this._config.boundary}
                    }, {name: "arrow", options: {element: `.${this.constructor.NAME}-arrow`}}, {
                        name: "preSetPlacement",
                        enabled: !0,
                        phase: "beforeMain",
                        fn: t => {
                            this._getTipElement().setAttribute("data-popper-placement", t.state.placement)
                        }
                    }]
                };
                return {...e, ..."function" == typeof this._config.popperConfig ? this._config.popperConfig(e) : this._config.popperConfig}
            }

            _setListeners() {
                const t = this._config.trigger.split(" ");
                for (const e of t) if ("click" === e) P.on(this._element, this.constructor.eventName("click"), this._config.selector, (t => this.toggle(t))); else if ("manual" !== e) {
                    const t = e === en ? this.constructor.eventName("mouseenter") : this.constructor.eventName("focusin"),
                        i = e === en ? this.constructor.eventName("mouseleave") : this.constructor.eventName("focusout");
                    P.on(this._element, t, this._config.selector, (t => {
                        const e = this._initializeOnDelegatedTarget(t);
                        e._activeTrigger["focusin" === t.type ? nn : en] = !0, e._enter()
                    })), P.on(this._element, i, this._config.selector, (t => {
                        const e = this._initializeOnDelegatedTarget(t);
                        e._activeTrigger["focusout" === t.type ? nn : en] = e._element.contains(t.relatedTarget), e._leave()
                    }))
                }
                this._hideModalHandler = () => {
                    this._element && this.hide()
                }, P.on(this._element.closest(Zi), tn, this._hideModalHandler), this._config.selector ? this._config = {
                    ...this._config,
                    trigger: "manual",
                    selector: ""
                } : this._fixTitle()
            }

            _fixTitle() {
                const t = this._config.originalTitle;
                t && (this._element.getAttribute("aria-label") || this._element.textContent.trim() || this._element.setAttribute("aria-label", t), this._element.removeAttribute("title"))
            }

            _enter() {
                this._isShown() || this._isHovered ? this._isHovered = !0 : (this._isHovered = !0, this._setTimeout((() => {
                    this._isHovered && this.show()
                }), this._config.delay.show))
            }

            _leave() {
                this._isWithActiveTrigger() || (this._isHovered = !1, this._setTimeout((() => {
                    this._isHovered || this.hide()
                }), this._config.delay.hide))
            }

            _setTimeout(t, e) {
                clearTimeout(this._timeout), this._timeout = setTimeout(t, e)
            }

            _isWithActiveTrigger() {
                return Object.values(this._activeTrigger).includes(!0)
            }

            _getConfig(t) {
                const e = B.getDataAttributes(this._element);
                for (const t of Object.keys(e)) Ui.has(t) && delete e[t];
                return t = {...e, ..."object" == typeof t && t ? t : {}}, t = this._mergeConfigObj(t), t = this._configAfterMerge(t), this._typeCheckConfig(t), t
            }

            _configAfterMerge(t) {
                return t.container = !1 === t.container ? document.body : r(t.container), "number" == typeof t.delay && (t.delay = {
                    show: t.delay,
                    hide: t.delay
                }), t.originalTitle = this._element.getAttribute("title") || "", "number" == typeof t.title && (t.title = t.title.toString()), "number" == typeof t.content && (t.content = t.content.toString()), t
            }

            _getDelegateConfig() {
                const t = {};
                for (const e in this._config) this.constructor.Default[e] !== this._config[e] && (t[e] = this._config[e]);
                return t
            }

            _disposePopper() {
                this._popper && (this._popper.destroy(), this._popper = null)
            }

            static jQueryInterface(t) {
                return this.each((function () {
                    const e = an.getOrCreateInstance(this, t);
                    if ("string" == typeof t) {
                        if (void 0 === e[t]) throw new TypeError(`No method named "${t}"`);
                        e[t]()
                    }
                }))
            }
        }

        g(an);
        const ln = {
            ...an.Default,
            content: "",
            offset: [0, 8],
            placement: "right",
            template: '<div class="popover" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>',
            trigger: "click"
        }, cn = {...an.DefaultType, content: "(null|string|element|function)"};

        class hn extends an {
            static get Default() {
                return ln
            }

            static get DefaultType() {
                return cn
            }

            static get NAME() {
                return "popover"
            }

            _isWithContent() {
                return this._getTitle() || this._getContent()
            }

            _getContentForTemplate() {
                return {".popover-header": this._getTitle(), ".popover-body": this._getContent()}
            }

            _getContent() {
                return this._resolvePossibleFunction(this._config.content)
            }

            static jQueryInterface(t) {
                return this.each((function () {
                    const e = hn.getOrCreateInstance(this, t);
                    if ("string" == typeof t) {
                        if (void 0 === e[t]) throw new TypeError(`No method named "${t}"`);
                        e[t]()
                    }
                }))
            }
        }

        g(hn);
        const dn = "click.bs.scrollspy", un = "active", fn = "[href]",
            pn = {offset: null, rootMargin: "0px 0px -25%", smoothScroll: !1, target: null},
            gn = {offset: "(number|null)", rootMargin: "string", smoothScroll: "boolean", target: "element"};

        class mn extends z {
            constructor(t, e) {
                super(t, e), this._targetLinks = new Map, this._observableSections = new Map, this._rootElement = "visible" === getComputedStyle(this._element).overflowY ? null : this._element, this._activeTarget = null, this._observer = null, this._previousScrollData = {
                    visibleEntryTop: 0,
                    parentScrollTop: 0
                }, this.refresh()
            }

            static get Default() {
                return pn
            }

            static get DefaultType() {
                return gn
            }

            static get NAME() {
                return "scrollspy"
            }

            refresh() {
                this._initializeTargetsAndObservables(), this._maybeEnableSmoothScroll(), this._observer ? this._observer.disconnect() : this._observer = this._getNewObserver();
                for (const t of this._observableSections.values()) this._observer.observe(t)
            }

            dispose() {
                this._observer.disconnect(), super.dispose()
            }

            _configAfterMerge(t) {
                return t.target = r(t.target) || document.body, t
            }

            _maybeEnableSmoothScroll() {
                this._config.smoothScroll && (P.off(this._config.target, dn), P.on(this._config.target, dn, fn, (t => {
                    const e = this._observableSections.get(t.target.hash);
                    if (e) {
                        t.preventDefault();
                        const i = this._rootElement || window, n = e.offsetTop - this._element.offsetTop;
                        if (i.scrollTo) return void i.scrollTo({top: n, behavior: "smooth"});
                        i.scrollTop = n
                    }
                })))
            }

            _getNewObserver() {
                const t = {root: this._rootElement, threshold: [.1, .5, 1], rootMargin: this._getRootMargin()};
                return new IntersectionObserver((t => this._observerCallback(t)), t)
            }

            _observerCallback(t) {
                const e = t => this._targetLinks.get(`#${t.target.id}`), i = t => {
                        this._previousScrollData.visibleEntryTop = t.target.offsetTop, this._process(e(t))
                    }, n = (this._rootElement || document.documentElement).scrollTop,
                    s = n >= this._previousScrollData.parentScrollTop;
                this._previousScrollData.parentScrollTop = n;
                for (const o of t) {
                    if (!o.isIntersecting) {
                        this._activeTarget = null, this._clearActiveClass(e(o));
                        continue
                    }
                    const t = o.target.offsetTop >= this._previousScrollData.visibleEntryTop;
                    if (s && t) {
                        if (i(o), !n) return
                    } else s || t || i(o)
                }
            }

            _getRootMargin() {
                return this._config.offset ? `${this._config.offset}px 0px -30%` : this._config.rootMargin
            }

            _initializeTargetsAndObservables() {
                this._targetLinks = new Map, this._observableSections = new Map;
                const t = Q.find(fn, this._config.target);
                for (const e of t) {
                    if (!e.hash || l(e)) continue;
                    const t = Q.findOne(e.hash, this._element);
                    a(t) && (this._targetLinks.set(e.hash, e), this._observableSections.set(e.hash, t))
                }
            }

            _process(t) {
                this._activeTarget !== t && (this._clearActiveClass(this._config.target), this._activeTarget = t, t.classList.add(un), this._activateParents(t), P.trigger(this._element, "activate.bs.scrollspy", {relatedTarget: t}))
            }

            _activateParents(t) {
                if (t.classList.contains("dropdown-item")) Q.findOne(".dropdown-toggle", t.closest(".dropdown")).classList.add(un); else for (const e of Q.parents(t, ".nav, .list-group")) for (const t of Q.prev(e, ".nav-link, .nav-item > .nav-link, .list-group-item")) t.classList.add(un)
            }

            _clearActiveClass(t) {
                t.classList.remove(un);
                const e = Q.find("[href].active", t);
                for (const t of e) t.classList.remove(un)
            }

            static jQueryInterface(t) {
                return this.each((function () {
                    const e = mn.getOrCreateInstance(this, t);
                    if ("string" == typeof t) {
                        if (void 0 === e[t] || t.startsWith("_") || "constructor" === t) throw new TypeError(`No method named "${t}"`);
                        e[t]()
                    }
                }))
            }
        }

        P.on(window, "load.bs.scrollspy.data-api", (() => {
            for (const t of Q.find('[data-bs-spy="scroll"]')) mn.getOrCreateInstance(t)
        })), g(mn);
        const _n = "ArrowLeft", bn = "ArrowRight", vn = "ArrowUp", yn = "ArrowDown", wn = "active", An = "fade",
            En = "show", Tn = '[data-bs-toggle="tab"], [data-bs-toggle="pill"], [data-bs-toggle="list"]',
            Cn = `.nav-link:not(.dropdown-toggle), .list-group-item:not(.dropdown-toggle), [role="tab"]:not(.dropdown-toggle), ${Tn}`;

        class On extends z {
            constructor(t) {
                super(t), this._parent = this._element.closest('.list-group, .nav, [role="tablist"]'), this._parent && (this._setInitialAttributes(this._parent, this._getChildren()), P.on(this._element, "keydown.bs.tab", (t => this._keydown(t))))
            }

            static get NAME() {
                return "tab"
            }

            show() {
                const t = this._element;
                if (this._elemIsActive(t)) return;
                const e = this._getActiveElem(), i = e ? P.trigger(e, "hide.bs.tab", {relatedTarget: t}) : null;
                P.trigger(t, "show.bs.tab", {relatedTarget: e}).defaultPrevented || i && i.defaultPrevented || (this._deactivate(e, t), this._activate(t, e))
            }

            _activate(t, e) {
                t && (t.classList.add(wn), this._activate(n(t)), this._queueCallback((() => {
                    "tab" === t.getAttribute("role") ? (t.focus(), t.removeAttribute("tabindex"), t.setAttribute("aria-selected", !0), this._toggleDropDown(t, !0), P.trigger(t, "shown.bs.tab", {relatedTarget: e})) : t.classList.add(En)
                }), t, t.classList.contains(An)))
            }

            _deactivate(t, e) {
                t && (t.classList.remove(wn), t.blur(), this._deactivate(n(t)), this._queueCallback((() => {
                    "tab" === t.getAttribute("role") ? (t.setAttribute("aria-selected", !1), t.setAttribute("tabindex", "-1"), this._toggleDropDown(t, !1), P.trigger(t, "hidden.bs.tab", {relatedTarget: e})) : t.classList.remove(En)
                }), t, t.classList.contains(An)))
            }

            _keydown(t) {
                if (![_n, bn, vn, yn].includes(t.key)) return;
                t.stopPropagation(), t.preventDefault();
                const e = [bn, yn].includes(t.key), i = b(this._getChildren().filter((t => !l(t))), t.target, e, !0);
                i && On.getOrCreateInstance(i).show()
            }

            _getChildren() {
                return Q.find(Cn, this._parent)
            }

            _getActiveElem() {
                return this._getChildren().find((t => this._elemIsActive(t))) || null
            }

            _setInitialAttributes(t, e) {
                this._setAttributeIfNotExists(t, "role", "tablist");
                for (const t of e) this._setInitialAttributesOnChild(t)
            }

            _setInitialAttributesOnChild(t) {
                t = this._getInnerElement(t);
                const e = this._elemIsActive(t), i = this._getOuterElement(t);
                t.setAttribute("aria-selected", e), i !== t && this._setAttributeIfNotExists(i, "role", "presentation"), e || t.setAttribute("tabindex", "-1"), this._setAttributeIfNotExists(t, "role", "tab"), this._setInitialAttributesOnTargetPanel(t)
            }

            _setInitialAttributesOnTargetPanel(t) {
                const e = n(t);
                e && (this._setAttributeIfNotExists(e, "role", "tabpanel"), t.id && this._setAttributeIfNotExists(e, "aria-labelledby", `#${t.id}`))
            }

            _toggleDropDown(t, e) {
                const i = this._getOuterElement(t);
                if (!i.classList.contains("dropdown")) return;
                const n = (t, n) => {
                    const s = Q.findOne(t, i);
                    s && s.classList.toggle(n, e)
                };
                n(".dropdown-toggle", wn), n(".dropdown-menu", En), n(".dropdown-item", wn), i.setAttribute("aria-expanded", e)
            }

            _setAttributeIfNotExists(t, e, i) {
                t.hasAttribute(e) || t.setAttribute(e, i)
            }

            _elemIsActive(t) {
                return t.classList.contains(wn)
            }

            _getInnerElement(t) {
                return t.matches(Cn) ? t : Q.findOne(Cn, t)
            }

            _getOuterElement(t) {
                return t.closest(".nav-item, .list-group-item") || t
            }

            static jQueryInterface(t) {
                return this.each((function () {
                    const e = On.getOrCreateInstance(this);
                    if ("string" == typeof t) {
                        if (void 0 === e[t] || t.startsWith("_") || "constructor" === t) throw new TypeError(`No method named "${t}"`);
                        e[t]()
                    }
                }))
            }
        }

        P.on(document, "click.bs.tab", Tn, (function (t) {
            ["A", "AREA"].includes(this.tagName) && t.preventDefault(), l(this) || On.getOrCreateInstance(this).show()
        })), P.on(window, "load.bs.tab", (() => {
            for (const t of Q.find('.active[data-bs-toggle="tab"], .active[data-bs-toggle="pill"], .active[data-bs-toggle="list"]')) On.getOrCreateInstance(t)
        })), g(On);
        const xn = "hide", kn = "show", Ln = "showing",
            Dn = {animation: "boolean", autohide: "boolean", delay: "number"},
            Sn = {animation: !0, autohide: !0, delay: 5e3};

        class In extends z {
            constructor(t, e) {
                super(t, e), this._timeout = null, this._hasMouseInteraction = !1, this._hasKeyboardInteraction = !1, this._setListeners()
            }

            static get Default() {
                return Sn
            }

            static get DefaultType() {
                return Dn
            }

            static get NAME() {
                return "toast"
            }

            show() {
                P.trigger(this._element, "show.bs.toast").defaultPrevented || (this._clearTimeout(), this._config.animation && this._element.classList.add("fade"), this._element.classList.remove(xn), d(this._element), this._element.classList.add(kn, Ln), this._queueCallback((() => {
                    this._element.classList.remove(Ln), P.trigger(this._element, "shown.bs.toast"), this._maybeScheduleHide()
                }), this._element, this._config.animation))
            }

            hide() {
                this.isShown() && (P.trigger(this._element, "hide.bs.toast").defaultPrevented || (this._element.classList.add(Ln), this._queueCallback((() => {
                    this._element.classList.add(xn), this._element.classList.remove(Ln, kn), P.trigger(this._element, "hidden.bs.toast")
                }), this._element, this._config.animation)))
            }

            dispose() {
                this._clearTimeout(), this.isShown() && this._element.classList.remove(kn), super.dispose()
            }

            isShown() {
                return this._element.classList.contains(kn)
            }

            _maybeScheduleHide() {
                this._config.autohide && (this._hasMouseInteraction || this._hasKeyboardInteraction || (this._timeout = setTimeout((() => {
                    this.hide()
                }), this._config.delay)))
            }

            _onInteraction(t, e) {
                switch (t.type) {
                    case"mouseover":
                    case"mouseout":
                        this._hasMouseInteraction = e;
                        break;
                    case"focusin":
                    case"focusout":
                        this._hasKeyboardInteraction = e
                }
                if (e) return void this._clearTimeout();
                const i = t.relatedTarget;
                this._element === i || this._element.contains(i) || this._maybeScheduleHide()
            }

            _setListeners() {
                P.on(this._element, "mouseover.bs.toast", (t => this._onInteraction(t, !0))), P.on(this._element, "mouseout.bs.toast", (t => this._onInteraction(t, !1))), P.on(this._element, "focusin.bs.toast", (t => this._onInteraction(t, !0))), P.on(this._element, "focusout.bs.toast", (t => this._onInteraction(t, !1)))
            }

            _clearTimeout() {
                clearTimeout(this._timeout), this._timeout = null
            }

            static jQueryInterface(t) {
                return this.each((function () {
                    const e = In.getOrCreateInstance(this, t);
                    if ("string" == typeof t) {
                        if (void 0 === e[t]) throw new TypeError(`No method named "${t}"`);
                        e[t](this)
                    }
                }))
            }
        }

        return R(In), g(In), {
            Alert: q,
            Button: K,
            Carousel: at,
            Collapse: pt,
            Dropdown: li,
            Modal: Si,
            Offcanvas: Bi,
            Popover: hn,
            ScrollSpy: mn,
            Tab: On,
            Toast: In,
            Tooltip: an
        }
    }));
    //# sourceMappingURL=bootstrap.bundle.min.js.map
    /*! smooth-scroll v16.1.3 | (c) 2020 Chris Ferdinandi | MIT License | http://github.com/cferdinandi/smooth-scroll */
    window.Element && !Element.prototype.closest && (Element.prototype.closest = function (e) {
        var t, n = (this.document || this.ownerDocument).querySelectorAll(e), o = this;
        do {
            for (t = n.length; 0 <= --t && n.item(t) !== o;) ;
        } while (t < 0 && (o = o.parentElement));
        return o
    }), (function () {
        if ("function" == typeof window.CustomEvent) return;

        function e(e, t) {
            t = t || {bubbles: !1, cancelable: !1, detail: void 0};
            var n = document.createEvent("CustomEvent");
            return n.initCustomEvent(e, t.bubbles, t.cancelable, t.detail), n
        }

        e.prototype = window.Event.prototype, window.CustomEvent = e
    })(), (function () {
        for (var r = 0, e = ["ms", "moz", "webkit", "o"], t = 0; t < e.length && !window.requestAnimationFrame; ++t) window.requestAnimationFrame = window[e[t] + "RequestAnimationFrame"], window.cancelAnimationFrame = window[e[t] + "CancelAnimationFrame"] || window[e[t] + "CancelRequestAnimationFrame"];
        window.requestAnimationFrame || (window.requestAnimationFrame = function (e, t) {
            var n = (new Date).getTime(), o = Math.max(0, 16 - (n - r)), a = window.setTimeout((function () {
                e(n + o)
            }), o);
            return r = n + o, a
        }), window.cancelAnimationFrame || (window.cancelAnimationFrame = function (e) {
            clearTimeout(e)
        })
    })(), (function (e, t) {
        "function" == typeof define && define.amd ? define([], (function () {
            return t(e)
        })) : "object" == typeof exports ? module.exports = t(e) : e.SmoothScroll = t(e)
    })("undefined" != typeof global ? global : "undefined" != typeof window ? window : this, (function (M) {
        "use strict";
        var q = {
            ignore: "[data-scroll-ignore]",
            header: null,
            topOnEmptyHash: !0,
            speed: 500,
            speedAsDuration: !1,
            durationMax: null,
            durationMin: null,
            clip: !0,
            offset: 0,
            easing: "easeInOutCubic",
            customEasing: null,
            updateURL: !0,
            popstate: !0,
            emitEvents: !0
        }, I = function () {
            var n = {};
            return Array.prototype.forEach.call(arguments, (function (e) {
                for (var t in e) {
                    if (!e.hasOwnProperty(t)) return;
                    n[t] = e[t]
                }
            })), n
        }, r = function (e) {
            "#" === e.charAt(0) && (e = e.substr(1));
            for (var t, n = String(e), o = n.length, a = -1, r = "", i = n.charCodeAt(0); ++a < o;) {
                if (0 === (t = n.charCodeAt(a))) throw new InvalidCharacterError("Invalid character: the input contains U+0000.");
                1 <= t && t <= 31 || 127 == t || 0 === a && 48 <= t && t <= 57 || 1 === a && 48 <= t && t <= 57 && 45 === i ? r += "\\" + t.toString(16) + " " : r += 128 <= t || 45 === t || 95 === t || 48 <= t && t <= 57 || 65 <= t && t <= 90 || 97 <= t && t <= 122 ? n.charAt(a) : "\\" + n.charAt(a)
            }
            return "#" + r
        }, F = function () {
            return Math.max(document.body.scrollHeight, document.documentElement.scrollHeight, document.body.offsetHeight, document.documentElement.offsetHeight, document.body.clientHeight, document.documentElement.clientHeight)
        }, L = function (e) {
            return e ? (t = e, parseInt(M.getComputedStyle(t).height, 10) + e.offsetTop) : 0;
            var t
        }, x = function (e, t, n) {
            0 === e && document.body.focus(), n || (e.focus(), document.activeElement !== e && (e.setAttribute("tabindex", "-1"), e.focus(), e.style.outline = "none"), M.scrollTo(0, t))
        }, H = function (e, t, n, o) {
            if (t.emitEvents && "function" == typeof M.CustomEvent) {
                var a = new CustomEvent(e, {bubbles: !0, detail: {anchor: n, toggle: o}});
                document.dispatchEvent(a)
            }
        };
        return function (o, e) {
            var b, a, A, O, C = {};
            C.cancelScroll = function (e) {
                cancelAnimationFrame(O), O = null, e || H("scrollCancel", b)
            }, C.animateScroll = function (a, r, e) {
                C.cancelScroll();
                var i = I(b || q, e || {}), c = "[object Number]" === Object.prototype.toString.call(a),
                    t = c || !a.tagName ? null : a;
                if (c || t) {
                    var s = M.pageYOffset;
                    i.header && !A && (A = document.querySelector(i.header));
                    var n, o, u, l, m, d, f, h, p = L(A), g = c ? a : (function (e, t, n, o) {
                            var a = 0;
                            if (e.offsetParent) for (; a += e.offsetTop, e = e.offsetParent;) ;
                            return a = Math.max(a - t - n, 0), o && (a = Math.min(a, F() - M.innerHeight)), a
                        })(t, p, parseInt("function" == typeof i.offset ? i.offset(a, r) : i.offset, 10), i.clip),
                        y = g - s, v = F(), w = 0,
                        S = (n = y, u = (o = i).speedAsDuration ? o.speed : Math.abs(n / 1e3 * o.speed), o.durationMax && u > o.durationMax ? o.durationMax : o.durationMin && u < o.durationMin ? o.durationMin : parseInt(u, 10)),
                        E = function (e) {
                            var t, n, o;
                            l || (l = e), w += e - l, d = s + y * (n = m = 1 < (m = 0 === S ? 0 : w / S) ? 1 : m, "easeInQuad" === (t = i).easing && (o = n * n), "easeOutQuad" === t.easing && (o = n * (2 - n)), "easeInOutQuad" === t.easing && (o = n < .5 ? 2 * n * n : (4 - 2 * n) * n - 1), "easeInCubic" === t.easing && (o = n * n * n), "easeOutCubic" === t.easing && (o = --n * n * n + 1), "easeInOutCubic" === t.easing && (o = n < .5 ? 4 * n * n * n : (n - 1) * (2 * n - 2) * (2 * n - 2) + 1), "easeInQuart" === t.easing && (o = n * n * n * n), "easeOutQuart" === t.easing && (o = 1 - --n * n * n * n), "easeInOutQuart" === t.easing && (o = n < .5 ? 8 * n * n * n * n : 1 - 8 * --n * n * n * n), "easeInQuint" === t.easing && (o = n * n * n * n * n), "easeOutQuint" === t.easing && (o = 1 + --n * n * n * n * n), "easeInOutQuint" === t.easing && (o = n < .5 ? 16 * n * n * n * n * n : 1 + 16 * --n * n * n * n * n), t.customEasing && (o = t.customEasing(n)), o || n), M.scrollTo(0, Math.floor(d)), (function (e, t) {
                                var n = M.pageYOffset;
                                if (e == t || n == t || (s < t && M.innerHeight + n) >= v) return C.cancelScroll(!0), x(a, t, c), H("scrollStop", i, a, r), !(O = l = null)
                            })(d, g) || (O = M.requestAnimationFrame(E), l = e)
                        };
                    0 === M.pageYOffset && M.scrollTo(0, 0), f = a, h = i, c || history.pushState && h.updateURL && history.pushState({
                        smoothScroll: JSON.stringify(h),
                        anchor: f.id
                    }, document.title, f === document.documentElement ? "#top" : "#" + f.id), "matchMedia" in M && M.matchMedia("(prefers-reduced-motion)").matches ? x(a, Math.floor(g), !1) : (H("scrollStart", i, a, r), C.cancelScroll(!0), M.requestAnimationFrame(E))
                }
            };
            var t = function (e) {
                if (!e.defaultPrevented && !(0 !== e.button || e.metaKey || e.ctrlKey || e.shiftKey) && "closest" in e.target && (a = e.target.closest(o)) && "a" === a.tagName.toLowerCase() && !e.target.closest(b.ignore) && a.hostname === M.location.hostname && a.pathname === M.location.pathname && /#/.test(a.href)) {
                    var t, n;
                    try {
                        t = r(decodeURIComponent(a.hash))
                    } catch (e) {
                        t = r(a.hash)
                    }
                    if ("#" === t) {
                        if (!b.topOnEmptyHash) return;
                        n = document.documentElement
                    } else n = document.querySelector(t);
                    (n = n || "#top" !== t ? n : document.documentElement) && (e.preventDefault(), (function (e) {
                        if (history.replaceState && e.updateURL && !history.state) {
                            var t = M.location.hash;
                            t = t || "", history.replaceState({
                                smoothScroll: JSON.stringify(e),
                                anchor: t || M.pageYOffset
                            }, document.title, t || M.location.href)
                        }
                    })(b), C.animateScroll(n, a))
                }
            }, n = function (e) {
                if (null !== history.state && history.state.smoothScroll && history.state.smoothScroll === JSON.stringify(b)) {
                    var t = history.state.anchor;
                    "string" == typeof t && t && !(t = document.querySelector(r(history.state.anchor))) || C.animateScroll(t, null, {updateURL: !1})
                }
            };
            C.destroy = function () {
                b && (document.removeEventListener("click", t, !1), M.removeEventListener("popstate", n, !1), C.cancelScroll(), O = A = a = b = null)
            };
            return (function () {
                if (!("querySelector" in document && "addEventListener" in M && "requestAnimationFrame" in M && "closest" in M.Element.prototype)) throw"Smooth Scroll: This browser does not support the required JavaScript methods and browser APIs.";
                C.destroy(), b = I(q, e || {}), A = b.header ? document.querySelector(b.header) : null, document.addEventListener("click", t, !1), b.updateURL && b.popstate && M.addEventListener("popstate", n, !1)
            })(), C
        }
    }));

    function ownKeys(t, e) {
        var r, a = Object.keys(t);
        return Object.getOwnPropertySymbols && (r = Object.getOwnPropertySymbols(t), e && (r = r.filter(function (e) {
            return Object.getOwnPropertyDescriptor(t, e).enumerable
        })), a.push.apply(a, r)), a
    }

    function _objectSpread(t) {
        for (var e = 1; e < arguments.length; e++) {
            var r = null != arguments[e] ? arguments[e] : {};
            e % 2 ? ownKeys(Object(r), !0).forEach(function (e) {
                _defineProperty(t, e, r[e])
            }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(r)) : ownKeys(Object(r)).forEach(function (e) {
                Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(r, e))
            })
        }
        return t
    }

    function _defineProperty(e, t, r) {
        return t in e ? Object.defineProperty(e, t, {
            value: r,
            enumerable: !0,
            configurable: !0,
            writable: !0
        }) : e[t] = r, e
    }

    function _typeof(e) {
        return (_typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (e) {
            return typeof e
        } : function (e) {
            return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
        })(e)
    }

    /**
     * Around | Multipurpose Bootstrap HTML Template
     * Copyright 2022 Createx Studio
     * Theme core scripts
     *
     * @author Createx Studio
     * @version 3.0.0
     */
    !function () {
        "use strict";
        var t, e, r, a, n, o, l, c;
        null !== (e = document.querySelector('[data-bs-toggle="mode"]')) && (t = e.querySelector(".form-check-input"), "dark" === mode ? (root.classList.add("dark-mode"), t.checked = !0) : (root.classList.remove("dark-mode"), t.checked = !1), e.addEventListener("click", function (e) {
            t.checked ? (root.classList.add("dark-mode"), window.localStorage.setItem("mode", "dark")) : (root.classList.remove("dark-mode"), window.localStorage.setItem("mode", "light"))
        })), null != (a = document.querySelector(".navbar.fixed-top")) && (a.classList, r = function (e) {
            20 < e.currentTarget.pageYOffset ? (a.classList.add("navbar-stuck"), a.classList.contains("navbar-ignore-dark-mode") && a.classList.remove("ignore-dark-mode")) : (a.classList.remove("navbar-stuck"), a.classList.contains("navbar-ignore-dark-mode") && a.classList.add("ignore-dark-mode"))
        }, window.addEventListener("load", function (e) {
            r(e)
        }), window.addEventListener("scroll", function (e) {
            r(e)
        })), null !== document.querySelector("[data-aos]") && AOS.init(), new SmoothScroll("[data-scroll]", {
            speed: 800,
            speedAsDuration: !0,
            offset: function (e, t) {
                return t.dataset.scrollOffset || 20
            },
            header: "[data-scroll-header]",
            updateURL: !1
        }), null != (c = document.querySelector(".btn-scroll-top")) && (n = parseInt(450, 10), o = c.querySelector("svg circle"), l = o.getTotalLength(), o.style.strokeDasharray = l, o.style.strokeDashoffset = l, window.addEventListener("scroll", function (e) {
            e.currentTarget.pageYOffset > n ? c.classList.add("show") : c.classList.remove("show"), e = (document.body.scrollTop + document.documentElement.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight), o.style.strokeDashoffset = l - l * e
        })), function () {
            var n, o = document.querySelectorAll(".masonry-grid");
            if (null !== o) for (var e = 0; e < o.length; e++) {
                var t = function (e) {
                    n = new Shuffle(o[e], {
                        itemSelector: ".masonry-grid-item",
                        sizer: ".masonry-grid-item"
                    }), imagesLoaded(o[e]).on("progress", function () {
                        n.layout()
                    });
                    var a = o[e].closest(".masonry-filterable");
                    if (null === a) return {v: void 0};
                    for (var t = a.querySelectorAll(".masonry-filters [data-group]"), r = 0; r < t.length; r++) t[r].addEventListener("click", function (e) {
                        var t = a.querySelector(".masonry-filters .active"), r = this.dataset.group;
                        null !== t && t.classList.remove("active"), this.classList.add("active"), n.filter(r), e.preventDefault()
                    })
                }(e);
                if ("object" === _typeof(t)) return t.v
            }
        }(), function () {
            for (var r = document.querySelectorAll(".password-toggle"), e = 0; e < r.length; e++) !function (e) {
                var t = r[e].querySelector(".form-control");
                r[e].querySelector(".password-toggle-btn").addEventListener("click", function (e) {
                    "checkbox" === e.target.type && (e.target.checked ? t.type = "text" : t.type = "password")
                }, !1)
            }(e)
        }(), function () {
            var e = document.querySelectorAll(".interactive-map");
            if (0 !== e.length) for (var t = 0; t < e.length; t++) {
                var r = e[t].dataset.mapOptions, a = (e[t].dataset.mapOptionsJson, void 0);
                if (r && "" !== r) {
                    var r = JSON.parse(r),
                        n = r.mapLayer || "https://api.maptiler.com/maps/pastel/{z}/{x}/{y}.png?key=BO4zZpr0fIIoydRTOLSx",
                        o = r.center || [0, 0], l = r.zoom || 1, c = !1 !== r.scrollWheelZoom, s = r.markers,
                        a = L.map(e[t], {scrollWheelZoom: c}).setView(o, l);
                    if (L.tileLayer(n, {
                        tileSize: 512,
                        zoomOffset: -1,
                        minZoom: 1,
                        attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
                        crossOrigin: !0
                    }).addTo(a), s) for (var i = 0; i < s.length; i++) {
                        var d = s[i].iconUrl, u = s[i].shadowUrl, d = L.icon({
                            iconUrl: d || "assets/img/map/marker-icon.png",
                            iconSize: [30, 43],
                            iconAnchor: [14, 43],
                            shadowUrl: u || "assets/img/map/marker-shadow.png",
                            shadowSize: [41, 41],
                            shadowAnchor: [13, 41],
                            popupAnchor: [1, -40]
                        }), u = s[i].popup, d = L.marker(s[i].position, {icon: d}).addTo(a);
                        u && d.bindPopup(u)
                    }
                } else a = L.map(e[t]).setView([0, 0], 1), L.tileLayer("https://api.maptiler.com/maps/pastel/{z}/{x}/{y}.png?key=BO4zZpr0fIIoydRTOLSx", {
                    tileSize: 512,
                    zoomOffset: -1,
                    minZoom: 1,
                    attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
                    crossOrigin: !0
                }).addTo(a)
            }
        }(), function () {
            for (var e = document.querySelectorAll(".parallax"), t = 0; t < e.length; t++) new Parallax(e[t])
        }(), function () {
            for (var e = document.querySelectorAll(".swiper"), t = function (e, t) {
                null != t.dataset.swiperOptions && (r = JSON.parse(t.dataset.swiperOptions));
                var r, a, n, t = new Swiper(t, r);
                r.controlledSlider && (null != (n = document.querySelector(r.controlledSlider)).dataset.swiperOptions && (a = JSON.parse(n.dataset.swiperOptions)), n = new Swiper(n, a), t.controller.control = n), r.bindedContent && t.on("activeIndexChange", function (e) {
                    var t = document.querySelector(e.slides[e.activeIndex].dataset.swiperBinded);
                    document.querySelector(e.slides[e.previousIndex].dataset.swiperBinded).classList.remove("active"), t.classList.add("active")
                })
            }, r = void 0, a = 0; a < e.length; a++) t.call(r, a, e[a])
        }(), function () {
            var e = document.querySelectorAll(".gallery");
            if (e.length) for (var t = 0; t < e.length; t++) {
                var r = !!e[t].dataset.thumbnails, a = !!e[t].dataset.video, n = [lgZoom, lgFullscreen],
                    a = a ? [lgVideo] : [], r = r ? [lgThumbnail] : [], n = [].concat(n, a, r);
                lightGallery(e[t], {
                    selector: ".gallery-item",
                    plugins: n,
                    licenseKey: "D4194FDD-48924833-A54AECA3-D6F8E646",
                    download: !1,
                    autoplayVideoOnSlide: !0,
                    zoomFromOrigin: !1,
                    youtubePlayerParams: {modestbranding: 1, showinfo: 0, rel: 0},
                    vimeoPlayerParams: {byline: 0, portrait: 0, color: "6366f1"}
                })
            }
        }(), function () {
            function l(e, t) {
                return e + t
            }

            var e = document.querySelectorAll("[data-line-chart]"), t = document.querySelectorAll("[data-bar-chart]"),
                c = document.querySelectorAll("[data-pie-chart]");
            if (0 !== e.length || 0 !== t.length || 0 !== c.length) {
                var s, r = document.head || document.getElementsByTagName("head")[0],
                    i = document.createElement("style");
                r.appendChild(i);
                for (var a = 0; a < e.length; a++) {
                    var n = JSON.parse(e[a].dataset.lineChart),
                        o = null != e[a].dataset.options ? JSON.parse(e[a].dataset.options) : "",
                        d = e[a].dataset.seriesColor;
                    if (e[a].classList.add("line-chart-" + a), null != d) for (var u = JSON.parse(d), p = 0; p < u.colors.length; p++) s = "\n.line-chart-".concat(a, " .ct-series:nth-child(").concat(p + 1, ") .ct-line,\n.line-chart-").concat(a, " .ct-series:nth-child(").concat(p + 1, ") .ct-point {\nstroke: ").concat(u.colors[p], " !important;\n}\n"), i.appendChild(document.createTextNode(s));
                    new Chartist.Line(e[a], n, o)
                }
                for (var m = 0; m < t.length; m++) {
                    var f = JSON.parse(t[m].dataset.barChart),
                        h = null != t[m].dataset.options ? JSON.parse(t[m].dataset.options) : "",
                        v = t[m].dataset.seriesColor;
                    if (t[m].classList.add("bar-chart-" + m), null != v) for (var g = JSON.parse(v), y = 0; y < g.colors.length; y++) s = "\n.bar-chart-".concat(m, " .ct-series:nth-child(").concat(y + 1, ") .ct-bar {\nstroke: ").concat(g.colors[y], " !important;\n}\n"), i.appendChild(document.createTextNode(s));
                    new Chartist.Bar(t[m], f, h)
                }
                for (var S = 0; S < c.length; S++) !function (e) {
                    var t = JSON.parse(c[e].dataset.pieChart),
                        r = null != c[e].dataset.options ? JSON.parse(c[e].dataset.options) : "",
                        a = c[e].dataset.seriesColor;
                    if (c[e].classList.add("ct-pie-chart-" + e), null != a) for (var n = JSON.parse(a), o = 0; o < n.colors.length; o++) s = "\n.ct-pie-chart-".concat(e, " .ct-series:nth-child(").concat(o + 1, ") .ct-slice-pie {\nfill: ").concat(n.colors[o], " !important;\n}\n.ct-pie-chart-").concat(e, " .ct-series:nth-child(").concat(o + 1, ") .ct-slice-donut {\nstroke: ").concat(n.colors[o], " !important;\n}\n"), i.appendChild(document.createTextNode(s));
                    new Chartist.Pie(c[e], t, _objectSpread({
                        labelInterpolationFnc: function (e) {
                            return Math.round(e / t.series.reduce(l) * 100) + "%"
                        }
                    }, r))
                }(S)
            }
        }(), function () {
            for (var n = document.querySelectorAll(".range-slider"), e = 0; e < n.length; e++) !function (e) {
                var t = n[e].querySelector(".range-slider-ui"), r = n[e].querySelector(".range-slider-value-min"),
                    a = n[e].querySelector(".range-slider-value-max"), e = {
                        dataStartMin: parseInt(n[e].dataset.startMin, 10),
                        dataStartMax: parseInt(n[e].dataset.startMax, 10),
                        dataMin: parseInt(n[e].dataset.min, 10),
                        dataMax: parseInt(n[e].dataset.max, 10),
                        dataStep: parseInt(n[e].dataset.step, 10),
                        dataPips: n[e].dataset.pips
                    };
                noUiSlider.create(t, {
                    start: e.dataStartMax ? [e.dataStartMin, e.dataStartMax] : [e.dataStartMin],
                    connect: !!e.dataStartMax || "lower",
                    step: e.dataStep,
                    pips: !!e.dataPips && {mode: "count", values: 5},
                    tooltips: !0,
                    range: {min: e.dataMin, max: e.dataMax},
                    format: {
                        to: function (e) {
                            return "$" + parseInt(e, 10)
                        }, from: function (e) {
                            return Number(e)
                        }
                    }
                }), t.noUiSlider.on("update", function (e, t) {
                    e = (e = e[t]).replace(/\D/g, "");
                    t ? a && (a.value = Math.round(e)) : r && (r.value = Math.round(e))
                }), r && r.addEventListener("change", function () {
                    t.noUiSlider.set([this.value, null])
                }), a && a.addEventListener("change", function () {
                    t.noUiSlider.set([null, this.value])
                })
            }(e)
        }(), function () {
            var e = document.querySelectorAll(".date-picker");
            if (0 !== e.length) for (var t = 0; t < e.length; t++) {
                var r = void 0,
                    a = (null != e[t].dataset.datepickerOptions && (r = JSON.parse(e[t].dataset.datepickerOptions)), e[t].classList.contains("date-range") ? {plugins: [new rangePlugin({input: e[t].dataset.linkedInput})]} : "{}"),
                    a = _objectSpread(_objectSpread(_objectSpread({}, {disableMobile: "true"}), a), r);
                flatpickr(e[t], a)
            }
        }(), function () {
            for (var e = document.querySelectorAll(".calendar"), t = function (e, t) {
                var r = _objectSpread({themeSystem: "bootstrap5"}, r = null != t.dataset.calendarOptions ? JSON.parse(t.dataset.calendarOptions) : r);
                new FullCalendar.Calendar(t, r).render()
            }, r = void 0, a = 0; a < e.length; a++) t.call(r, a, e[a])
        }(), window.addEventListener("load", function () {
            var e = document.getElementsByClassName("needs-validation");
            Array.prototype.filter.call(e, function (t) {
                t.addEventListener("submit", function (e) {
                    !1 === t.checkValidity() && (e.preventDefault(), e.stopPropagation()), t.classList.add("was-validated")
                }, !1)
            })
        }, !1), function () {
            var a = document.querySelectorAll("[data-format]");
            if (0 !== a.length) for (var e = 0; e < a.length; e++) !function (e) {
                var e = a[e], t = e.parentNode.querySelector(".credit-card-icon"), r = void 0;
                null != e.dataset.format && (r = JSON.parse(e.dataset.format)), t ? new Cleave(e, _objectSpread(_objectSpread({}, r), {}, {
                    onCreditCardTypeChanged: function (e) {
                        t.className = "credit-card-icon " + e
                    }
                })) : new Cleave(e, r)
            }(e)
        }(), function () {
            for (var e = document.querySelectorAll("[data-binded-label]"), t = 0; t < e.length; t++) e[t].addEventListener("change", function () {
                var e = this.dataset.bindedLabel;
                try {
                    document.getElementById(e).textContent = this.value
                } catch (e) {
                    e.message = "Cannot set property 'textContent' of null", console.error("Make sure the [data-binded-label] matches with the id of the target element you want to change text of!")
                }
            })
        }(), function () {
            for (var e = document.querySelectorAll("[data-binded-content]"), t = (document.querySelectorAll("[data-scroll-binded]"), document.querySelector(".binded-content"), 0); t < e.length; t++) e[t].addEventListener("click", function (e) {
                e = e.currentTarget.dataset.bindedContent;
                (function (e) {
                    for (var t = [], r = e.parentNode.firstChild; r;) 1 === r.nodeType && r !== e && t.push(r), r = r.nextSibling;
                    return t
                })(e = document.querySelector(e)).map(function (e) {
                    e.classList.remove("active")
                }), e.classList.add("active")
            })
        }(), function () {
            for (var n = document.querySelectorAll(".count-input"), e = 0; e < n.length; e++) !function (e) {
                var e = n[e], t = e.querySelector("[data-increment]"), r = e.querySelector("[data-decrement]"),
                    a = e.querySelector(".form-control");
                t.addEventListener("click", function () {
                    a.value++
                }), r.addEventListener("click", function () {
                    0 < a.value && a.value--
                })
            }(e)
        }(), function () {
            var r = document.querySelectorAll("[data-focus-on-open]");
            if (null !== r) for (var e = 0; e < r.length; e++) !function (t) {
                var e = JSON.parse(r[t].dataset.focusOnOpen);
                document.querySelector(e[1]).addEventListener("shown.bs.".concat(e[0]), function (e) {
                    r[t].focus()
                })
            }(e)
        }(), [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')).map(function (e) {
            return new bootstrap.Tooltip(e, {trigger: "hover"})
        }), [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]')).map(function (e) {
            return new bootstrap.Popover(e)
        }), [].slice.call(document.querySelectorAll(".toast")).map(function (e) {
            return new bootstrap.Toast(e)
        }), function () {
            var e = document.querySelectorAll('[data-bs-toggle="video"]');
            if (e.length) for (var t = 0; t < e.length; t++) lightGallery(e[t], {
                selector: "this",
                plugins: [lgVideo],
                licenseKey: "D4194FDD-48924833-A54AECA3-D6F8E646",
                download: !1,
                youtubePlayerParams: {modestbranding: 1, showinfo: 0, rel: 0},
                vimeoPlayerParams: {byline: 0, portrait: 0, color: "6366f1"}
            })
        }(), function () {
            var e = document.querySelectorAll(".price-switch-wrapper");
            if (!(e.length <= 0)) for (var t = 0; t < e.length; t++) e[t].querySelector('[data-bs-toggle="price"]').addEventListener("change", function (e) {
                var t = e.currentTarget.querySelector("[data-monthly-switch]"),
                    r = e.currentTarget.querySelector("[data-annual-switch]"),
                    a = e.currentTarget.closest(".price-switch-wrapper").querySelectorAll("[data-monthly-price]"),
                    e = e.currentTarget.closest(".price-switch-wrapper").querySelectorAll("[data-annual-price]");
                if (1 == t.checked) for (var n = a, o = e, l = 0; l < n.length; l++) o[l].classList.add("d-none"), n[l].classList.remove("d-none");
                if (1 == r.checked) for (var c = a, s = e, i = 0; i < c.length; i++) c[i].classList.add("d-none"), s[i].classList.remove("d-none")
            })
        }(), function () {
            var e = document.querySelectorAll('[data-bs-toggle="checkbox"]');
            if (0 !== e.length) for (var t = 0; t < e.length; t++) e[t].addEventListener("click", function (e) {
                e.preventDefault();
                var e = document.querySelector(e.target.dataset.bsTarget),
                    t = e.querySelectorAll('input[type="checkbox"]');
                if (e.classList.toggle("all-checked"), e.classList.contains("all-checked")) for (var r = 0; r < t.length; r++) t[r].checked = !0; else for (var a = 0; a < t.length; a++) t[a].checked = !1
            })
        }(), function () {
            var e = document.querySelectorAll(".countdown");
            if (0 !== e.length) for (var t = 0; t < e.length; t++) {
                var r = e[t].dataset.countdownDate;
                timezz(e[t], {date: r})
            }
        }(), function () {
            var l = document.querySelectorAll(".subscription-form");
            if (null !== l) {
                for (var e = 0; e < l.length; e++) !function (e) {
                    var t = l[e].querySelector('button[type="submit"]'), r = t.innerHTML,
                        a = l[e].querySelector(".form-control"), n = l[e].querySelector(".subscription-form-antispam"),
                        o = l[e].querySelector(".subscription-status");
                    l[e].addEventListener("submit", function (e) {
                        e && e.preventDefault(), "" === n.value && c(this, t, a, r, o)
                    })
                }(e);
                var c = function (e, t, r, a, n) {
                    t.innerHTML = "Sending...";
                    var e = e.action.replace("/post?", "/post-json?"),
                        o = "&" + r.name + "=" + encodeURIComponent(r.value), l = document.createElement("script"),
                        c = (l.src = e + "&c=callback" + o, document.body.appendChild(l), "callback");
                    window[c] = function (e) {
                        delete window[c], document.body.removeChild(l), t.innerHTML = a, "success" == e.result ? (r.classList.remove("is-invalid"), r.classList.add("is-valid"), n.classList.remove("status-error"), n.classList.add("status-success"), n.innerHTML = e.msg, setTimeout(function () {
                            r.classList.remove("is-valid"), n.innerHTML = "", n.classList.remove("status-success")
                        }, 6e3)) : (r.classList.remove("is-valid"), r.classList.add("is-invalid"), n.classList.remove("status-success"), n.classList.add("status-error"), n.innerHTML = e.msg.substring(4), setTimeout(function () {
                            r.classList.remove("is-invalid"), n.innerHTML = "", n.classList.remove("status-error")
                        }, 6e3))
                    }
                }
            }
        }()
    }();</script>
<!-- Customizer-->
<script>!function () {
        function e(e) {
            return localStorage.getItem(e)
        }

        function r(e, r) {
            localStorage.setItem(e, r)
        }

        var t = document.getElementById("customizer-styles"), n = document.getElementById("custom-generated-styles"),
            o = `\n:root {\n${e("theme-primary") && `--ar-primary: ${e("theme-primary")};`}\n${e("theme-primary-rgb") && `--ar-primary-rgb: ${e("theme-primary-rgb")};`}\n${e("theme-warning") && `--ar-warning-rgb: ${e("theme-warning")};`}\n${e("theme-warning-rgb") && `--ar-warning-rgb: ${e("theme-warning-rgb")};`}\n${e("theme-info") && `--ar-info-rgb: ${e("theme-info")};`}\n${e("theme-info-rgb") && `--ar-info-rgb: ${e("theme-info-rgb")};`}\n${e("theme-success") && `--ar-success-rgb: ${e("success-info")};`}\n${e("theme-success-rgb") && `--ar-success-rgb: ${e("success-info-rgb")};`}\n${e("theme-danger") && `--ar-danger-rgb: ${e("danger-info")};`}\n${e("theme-danger-rgb") && `--ar-danger-rgb: ${e("danger-info-rgb")};`}\n${e("theme-font-family") && `--ar-body-font-family: ${e("theme-font-family")};`}\n${e("theme-root-font-size") && `--ar-root-font-size: ${e("theme-root-font-size")};`}\n${e("theme-body-font-size") && `--ar-body-font-size: ${e("theme-body-font-size")};`}\n${e("theme-border-width") && `--ar-border-width: ${e("theme-border-width")};`}\n${e("theme-border-radius") && `--ar-border-radius: ${e("theme-border-radius")};`}\n${e("theme-border-radius-sm") && `--ar-border-radius-sm: ${e("theme-border-radius-sm")};`}\n${e("theme-border-radius-lg") && `--ar-border-radius-lg: ${e("theme-border-radius-lg")};`}\n${e("theme-border-radius-xl") && `--ar-border-radius-xl: ${e("theme-border-radius-xl")};`}\n${e("theme-border-radius-2xl") && `--ar-border-radius-2xl: ${e("theme-border-radius-2xl")};`}\n${e("theme-primary") && `--ar-link-color: ${e("theme-primary")};`}\n${e("theme-primary-btn-hover-active-border-bg-color") && `--ar-link-hover-color: ${e("theme-primary-btn-hover-active-border-bg-color")};`}\n}\n.btn-primary {\n${e("theme-primary") && `--ar-btn-bg: ${e("theme-primary")};`}\n${e("theme-primary") && `--ar-btn-border-color: ${e("theme-primary")};`}\n${e("theme-primary-btn-hover-active-border-bg-color") && `--ar-btn-hover-bg: ${e("theme-primary-btn-hover-active-border-bg-color")};`}\n${e("theme-primary-btn-hover-active-border-bg-color") && `--ar-btn-hover-border-color: ${e("theme-primary-btn-hover-active-border-bg-color")};`}\n${e("theme-primary-btn-hover-active-border-bg-color") && `--ar-btn-active-bg: ${e("theme-primary-btn-hover-active-border-bg-color")};`}\n${e("theme-primary-btn-hover-active-border-bg-color") && `--ar-btn-active-border-color: ${e("theme-primary-btn-hover-active-border-bg-color")};`}\n${e("theme-primary") && `--ar-btn-disabled-bg: ${e("theme-primary")};`}\n${e("theme-primary") && `--ar-btn-disabled-border-color: ${e("theme-primary")};`}\n}\n.btn-warning {\n${e("theme-warning") && `--ar-btn-bg: ${e("theme-warning")};`}\n${e("theme-warning") && `--ar-btn-border-color: ${e("theme-warning")};`}\n${e("theme-warning-btn-hover-active-border-bg-color") && `--ar-btn-hover-bg: ${e("theme-warning-btn-hover-active-border-bg-color")};`}\n${e("theme-warning-btn-hover-active-border-bg-color") && `--ar-btn-hover-border-color: ${e("theme-warning-btn-hover-active-border-bg-color")};`}\n${e("theme-warning-btn-hover-active-border-bg-color") && `--ar-btn-active-bg: ${e("theme-warning-btn-hover-active-border-bg-color")};`}\n${e("theme-warning-btn-hover-active-border-bg-color") && `--ar-btn-active-border-color: ${e("theme-warning-btn-hover-active-border-bg-color")};`}\n${e("theme-warning") && `--ar-btn-disabled-bg: ${e("theme-warning")};`}\n${e("theme-warning") && `--ar-btn-disabled-border-color: ${e("theme-warning")};`}\n}\n.btn-info {\n${e("theme-info") && `--ar-btn-bg: ${e("theme-info")};`}\n${e("theme-info") && `--ar-btn-border-color: ${e("theme-info")};`}\n${e("theme-info-btn-hover-active-border-bg-color") && `--ar-btn-hover-bg: ${e("theme-info-btn-hover-active-border-bg-color")};`}\n${e("theme-info-btn-hover-active-border-bg-color") && `--ar-btn-hover-border-color: ${e("theme-info-btn-hover-active-border-bg-color")};`}\n${e("theme-info-btn-hover-active-border-bg-color") && `--ar-btn-active-bg: ${e("theme-info-btn-hover-active-border-bg-color")};`}\n${e("theme-info-btn-hover-active-border-bg-color") && `--ar-btn-active-border-color: ${e("theme-info-btn-hover-active-border-bg-color")};`}\n${e("theme-info") && `--ar-btn-disabled-bg: ${e("theme-info")};`}\n${e("theme-info") && `--ar-btn-disabled-border-color: ${e("theme-info")};`}\n}\n.btn-success {\n${e("theme-success") && `--ar-btn-bg: ${e("theme-success")};`}\n${e("theme-success") && `--ar-btn-border-color: ${e("theme-success")};`}\n${e("theme-success-btn-hover-active-border-bg-color") && `--ar-btn-hover-bg: ${e("theme-success-btn-hover-active-border-bg-color")};`}\n${e("theme-success-btn-hover-active-border-bg-color") && `--ar-btn-hover-border-color: ${e("theme-success-btn-hover-active-border-bg-color")};`}\n${e("theme-success-btn-hover-active-border-bg-color") && `--ar-btn-active-bg: ${e("theme-success-btn-hover-active-border-bg-color")};`}\n${e("theme-success-btn-hover-active-border-bg-color") && `--ar-btn-active-border-color: ${e("theme-success-btn-hover-active-border-bg-color")};`}\n${e("theme-success") && `--ar-btn-disabled-bg: ${e("theme-success")};`}\n${e("theme-success") && `--ar-btn-disabled-border-color: ${e("theme-success")};`}\n}\n.btn-danger {\n${e("theme-danger") && `--ar-btn-bg: ${e("theme-danger")};`}\n${e("theme-danger") && `--ar-btn-border-color: ${e("theme-danger")};`}\n${e("theme-danger-btn-hover-active-border-bg-color") && `--ar-btn-hover-bg: ${e("theme-danger-btn-hover-active-border-bg-color")};`}\n${e("theme-danger-btn-hover-active-border-bg-color") && `--ar-btn-hover-border-color: ${e("theme-danger-btn-hover-active-border-bg-color")};`}\n${e("theme-danger-btn-hover-active-border-bg-color") && `--ar-btn-active-bg: ${e("theme-danger-btn-hover-active-border-bg-color")};`}\n${e("theme-danger-btn-hover-active-border-bg-color") && `--ar-btn-active-border-color: ${e("theme-danger-btn-hover-active-border-bg-color")};`}\n${e("theme-danger") && `--ar-btn-disabled-bg: ${e("theme-danger")};`}\n${e("theme-danger") && `--ar-btn-disabled-border-color: ${e("theme-danger")};`}\n}\n.btn-outline-primary {\n${e("theme-primary") && `--ar-btn-color: ${e("theme-primary")};`}\n${e("theme-primary") && `--ar-btn-border-color: ${e("theme-primary")};`}\n${e("theme-primary") && `--ar-btn-hover-bg: ${e("theme-primary")};`}\n${e("theme-primary") && `--ar-btn-hover-border-color: ${e("theme-primary")};`}\n${e("theme-primary") && `--ar-btn-active-bg: ${e("theme-primary")};`}\n${e("theme-primary") && `--ar-btn-active-border-color: ${e("theme-primary")};`}\n${e("theme-primary") && `--ar-btn-disabled-color: ${e("theme-primary")};`}\n${e("theme-primary") && `--ar-btn-disabled-border-color: ${e("theme-primary")};`}\n}\n.btn-outline-warning {\n${e("theme-warning") && `--ar-btn-color: ${e("theme-warning")};`}\n${e("theme-warning") && `--ar-btn-border-color: ${e("theme-warning")};`}\n${e("theme-warning") && `--ar-btn-hover-bg: ${e("theme-warning")};`}\n${e("theme-warning") && `--ar-btn-hover-border-color: ${e("theme-warning")};`}\n${e("theme-warning") && `--ar-btn-active-bg: ${e("theme-warning")};`}\n${e("theme-warning") && `--ar-btn-active-border-color: ${e("theme-warning")};`}\n${e("theme-warning") && `--ar-btn-disabled-color: ${e("theme-warning")};`}\n${e("theme-warning") && `--ar-btn-disabled-border-color: ${e("theme-warning")};`}\n}\n.btn-outline-info {\n${e("theme-info") && `--ar-btn-color: ${e("theme-info")};`}\n${e("theme-info") && `--ar-btn-border-color: ${e("theme-info")};`}\n${e("theme-info") && `--ar-btn-hover-bg: ${e("theme-info")};`}\n${e("theme-info") && `--ar-btn-hover-border-color: ${e("theme-info")};`}\n${e("theme-info") && `--ar-btn-active-bg: ${e("theme-info")};`}\n${e("theme-info") && `--ar-btn-active-border-color: ${e("theme-info")};`}\n${e("theme-info") && `--ar-btn-disabled-color: ${e("theme-info")};`}\n${e("theme-info") && `--ar-btn-disabled-border-color: ${e("theme-info")};`}\n}\n.btn-outline-success {\n${e("theme-success") && `--ar-btn-color: ${e("theme-success")};`}\n${e("theme-success") && `--ar-btn-border-color: ${e("theme-success")};`}\n${e("theme-success") && `--ar-btn-hover-bg: ${e("theme-success")};`}\n${e("theme-success") && `--ar-btn-hover-border-color: ${e("theme-success")};`}\n${e("theme-success") && `--ar-btn-active-bg: ${e("theme-success")};`}\n${e("theme-success") && `--ar-btn-active-border-color: ${e("theme-success")};`}\n${e("theme-success") && `--ar-btn-disabled-color: ${e("theme-success")};`}\n${e("theme-success") && `--ar-btn-disabled-border-color: ${e("theme-success")};`}\n}\n.btn-outline-danger {\n${e("theme-danger") && `--ar-btn-color: ${e("theme-danger")};`}\n${e("theme-danger") && `--ar-btn-border-color: ${e("theme-danger")};`}\n${e("theme-danger") && `--ar-btn-hover-bg: ${e("theme-danger")};`}\n${e("theme-danger") && `--ar-btn-hover-border-color: ${e("theme-danger")};`}\n${e("theme-danger") && `--ar-btn-active-bg: ${e("theme-danger")};`}\n${e("theme-danger") && `--ar-btn-active-border-color: ${e("theme-danger")};`}\n${e("theme-danger") && `--ar-btn-disabled-color: ${e("theme-danger")};`}\n${e("theme-danger") && `--ar-btn-disabled-border-color: ${e("theme-danger")};`}\n}\n`,
            a = o;
        a = o.replace(/null|\s*(?![A-Z])/g, "");
        t.append(a), a.split("}").map(function (e) {
            -1 !== e.indexOf("{--") && n.append(e + "}")
        });
        var i = {
            root: t.sheet.cssRules[0],
            primaryBtn: t.sheet.cssRules[1],
            warningBtn: t.sheet.cssRules[2],
            infoBtn: t.sheet.cssRules[3],
            successBtn: t.sheet.cssRules[4],
            dangerBtn: t.sheet.cssRules[5],
            primaryOutlineBtn: t.sheet.cssRules[6],
            warningOutlineBtn: t.sheet.cssRules[7],
            infoOutlineBtn: t.sheet.cssRules[8],
            successOutlineBtn: t.sheet.cssRules[9],
            dangerOutlineBtn: t.sheet.cssRules[10]
        };

        function b() {
            n.innerHTML = i.root.cssText.replace(/null|\s*(?![A-Z])/g, ""), n.innerHTML += -1 === i.primaryBtn.cssText.indexOf("{ }") ? i.primaryBtn.cssText.replace(/ /g, "") : "", n.innerHTML += -1 === i.warningBtn.cssText.indexOf("{ }") ? i.warningBtn.cssText.replace(/ /g, "") : "", n.innerHTML += -1 === i.infoBtn.cssText.indexOf("{ }") ? i.infoBtn.cssText.replace(/ /g, "") : "", n.innerHTML += -1 === i.successBtn.cssText.indexOf("{ }") ? i.successBtn.cssText.replace(/ /g, "") : "", n.innerHTML += -1 === i.dangerBtn.cssText.indexOf("{ }") ? i.dangerBtn.cssText.replace(/ /g, "") : "", n.innerHTML += -1 === i.primaryOutlineBtn.cssText.indexOf("{ }") ? i.primaryOutlineBtn.cssText.replace(/ /g, "") : "", n.innerHTML += -1 === i.warningOutlineBtn.cssText.indexOf("{ }") ? i.warningOutlineBtn.cssText.replace(/ /g, "") : "", n.innerHTML += -1 === i.infoOutlineBtn.cssText.indexOf("{ }") ? i.infoOutlineBtn.cssText.replace(/ /g, "") : "", n.innerHTML += -1 === i.successOutlineBtn.cssText.indexOf("{ }") ? i.successOutlineBtn.cssText.replace(/ /g, "") : "", n.innerHTML += -1 === i.dangerOutlineBtn.cssText.indexOf("{ }") ? i.dangerOutlineBtn.cssText.replace(/ /g, "") : ""
        }

        function s(e) {
            var r = 0, t = 0, n = 0;
            return 4 == e.length ? (r = "0x" + e[1] + e[1], t = "0x" + e[2] + e[2], n = "0x" + e[3] + e[3]) : 7 == e.length && (r = "0x" + e[1] + e[2], t = "0x" + e[3] + e[4], n = "0x" + e[5] + e[6]), +r + "," + +t + "," + +n
        }

        function c(e, r) {
            var t = parseInt(e.replace("#", ""), 16), n = Math.round(2.55 * r), o = (t >> 16) + n,
                a = (t >> 8 & 255) + n, i = (255 & t) + n;
            return "#" + (16777216 + 65536 * (o < 255 ? o < 1 ? 0 : o : 255) + 256 * (a < 255 ? a < 1 ? 0 : a : 255) + (i < 255 ? i < 1 ? 0 : i : 255)).toString(16).slice(1)
        }

        for (var l = document.querySelectorAll("#theme-colors .color-swatch"), d = 0; d < l.length; d++) {
            var m = l[d].querySelector("label"), h = l[d].querySelector('input[type="color"]');
            colorInput = l[d].querySelector('input[type="text"]'), colorInput.value = e(l[d].id) || colorInput.value, h.value = e(l[d].id) || h.value, m.style.backgroundColor = e(l[d].id) || h.value, h.addEventListener("input", function (e) {
                var n = e.target.parentElement.querySelector("label"),
                    o = e.target.parentElement.querySelector('input[type="text"]'), a = e.target.value;
                t.sheet.cssRules[d + 1];
                r("theme-" + e.target.id, a), r("theme-" + e.target.id + "-rgb", s(a)), r("theme-" + e.target.id + "-btn-hover-active-border-bg-color", c(a, -10)), n.style.backgroundColor = a, o.value = a, i.root.style.setProperty("--ar-" + e.target.id, a), i.root.style.setProperty("--ar-" + e.target.id + "-rgb", s(a)), i[e.target.id + "Btn"].style.setProperty("--ar-btn-bg", a), i[e.target.id + "Btn"].style.setProperty("--ar-btn-border-color", a), i[e.target.id + "Btn"].style.setProperty("--ar-btn-hover-bg", c(a, -10)), i[e.target.id + "Btn"].style.setProperty("--ar-btn-hover-border-color", c(a, -10)), i[e.target.id + "Btn"].style.setProperty("--ar-btn-active-bg", c(a, -10)), i[e.target.id + "Btn"].style.setProperty("--ar-btn-active-border-color", c(a, -10)), i[e.target.id + "Btn"].style.setProperty("--ar-btn-disabled-bg", a), i[e.target.id + "Btn"].style.setProperty("--ar-btn-disabled-border-color", a), i[e.target.id + "OutlineBtn"].style.setProperty("--ar-btn-color", a), i[e.target.id + "OutlineBtn"].style.setProperty("--ar-btn-border-color", a), i[e.target.id + "OutlineBtn"].style.setProperty("--ar-btn-hover-bg", a), i[e.target.id + "OutlineBtn"].style.setProperty("--ar-btn-hover-border-color", a), i[e.target.id + "OutlineBtn"].style.setProperty("--ar-btn-active-bg", a), i[e.target.id + "OutlineBtn"].style.setProperty("--ar-btn-active-border-color", a), i[e.target.id + "OutlineBtn"].style.setProperty("--ar-btn-disabled-color", a), i[e.target.id + "OutlineBtn"].style.setProperty("--ar-btn-disabled-border-color", a), "primary" === e.target.id && (r("theme-link-hover-color", c(a, -10)), i.root.style.setProperty("--ar-link-color", a), i.root.style.setProperty("--ar-link-hover-color", c(a, -10))), b()
            }), colorInput.addEventListener("change", function (e) {
                var t = e.target.parentElement.querySelector("label"),
                    n = e.target.parentElement.querySelector('input[type="color"]'), o = e.target.value;
                0 != o.length && o.startsWith("#") && (r("theme-" + n.id, o), r("theme-" + n.id + "-rgb", s(o)), r("theme-" + n.id + "-btn-hover-active-border-bg-color", c(o, -10)), t.style.backgroundColor = o, n.value = o, i.root.style.setProperty("--ar-" + n.id, o), i.root.style.setProperty("--ar-" + n.id + "-rgb", s(o)), i[n.id + "Btn"].style.setProperty("--ar-btn-bg", o), i[n.id + "Btn"].style.setProperty("--ar-btn-border-color", o), i[n.id + "Btn"].style.setProperty("--ar-btn-hover-bg", c(o, -10)), i[n.id + "Btn"].style.setProperty("--ar-btn-hover-border-color", c(o, -10)), i[n.id + "Btn"].style.setProperty("--ar-btn-active-bg", c(o, -10)), i[n.id + "Btn"].style.setProperty("--ar-btn-active-border-color", c(o, -10)), i[n.id + "Btn"].style.setProperty("--ar-btn-disabled-bg", o), i[n.id + "Btn"].style.setProperty("--ar-btn-disabled-border-color", o), i[n.id + "OutlineBtn"].style.setProperty("--ar-btn-color", o), i[n.id + "OutlineBtn"].style.setProperty("--ar-btn-border-color", o), i[n.id + "OutlineBtn"].style.setProperty("--ar-btn-hover-bg", o), i[n.id + "OutlineBtn"].style.setProperty("--ar-btn-hover-border-color", o), i[n.id + "OutlineBtn"].style.setProperty("--ar-btn-active-bg", o), i[n.id + "OutlineBtn"].style.setProperty("--ar-btn-active-border-color", o), i[n.id + "OutlineBtn"].style.setProperty("--ar-btn-disabled-color", o), i[n.id + "OutlineBtn"].style.setProperty("--ar-btn-disabled-border-color", o), "primary" === n.id && (r("theme-link-hover-color", c(o, -10)), i.root.style.setProperty("--ar-link-color", o), i.root.style.setProperty("--ar-link-hover-color", c(o, -10))), b())
            })
        }
        var g = document.getElementById("font-url"), u = document.getElementById("google-font");
        u.href = e("theme-font-url") || g.value, g.value = e("theme-font-url") || g.value, g.addEventListener("blur", function (e) {
            var t = e.target.value;
            r("theme-font-url", t), u.href = t
        });
        var v = document.getElementById("body-font-family");
        v.value = e("theme-font-family") || v.value, v.addEventListener("blur", function (e) {
            var t = e.target.value;
            r("theme-font-family", t), i.root.style.setProperty("--ar-body-font-family", t), b()
        });
        var $ = document.getElementById("root-font-size");
        $.value = e("theme-root-font-size") || $.value, $.addEventListener("change", function (e) {
            var t = e.target.value;
            r("theme-root-font-size", t), i.root.style.setProperty("--ar-root-font-size", t), b()
        });
        var y = document.getElementById("body-font-size");
        y.value = e("theme-body-font-size") || y.value, y.addEventListener("change", function (e) {
            var t = e.target.value;
            r("theme-body-font-size", t), i.root.style.setProperty("--ar-body-font-size", t), b()
        });
        var p = document.getElementById("border-width");
        p.value = parseInt(e("theme-border-width")) || p.value, p.addEventListener("input", function (e) {
            var t = e.target.value;
            r("theme-border-width", t + "px"), i.root.style.setProperty("--ar-border-width", t + "px"), b()
        });
        var f = document.getElementById("border-radius");
        f.value = parseFloat(e("theme-border-radius")) || f.value, f.addEventListener("input", function (e) {
            var t = e.target.value;
            r("theme-border-radius", t + "rem"), i.root.style.setProperty("--ar-border-radius", t + "rem"), b()
        });
        var B = document.querySelectorAll('#theme-border-radiuses input[type="number"');
        for (d = 0; d < B.length; d++) B[d].value = e("theme-" + B[d].id + "multiplier") || B[d].value, B[d].addEventListener("input", function (e) {
            var t = e.target.value;
            r("theme-" + e.target.id, "calc(var(--ar-border-radius) * " + t + ")"), r("theme-" + e.target.id + "multiplier", t), i.root.style.setProperty("--ar-" + e.target.id, "calc(var(--ar-border-radius) * " + t + ")"), b()
        });

        var P = document.getElementById("copy-styles-btn");
        P.addEventListener("click", function () {
            var e = document.createRange();
            e.selectNode(n), window.getSelection().removeAllRanges(), window.getSelection().addRange(e), navigator.clipboard.writeText(n.innerHTML), this.innerHTML = '<i class="ai-check me-2 ms-n1"></i>Copied!', setTimeout(function () {
                P.innerHTML = '<i class="ai-copy me-2 ms-n1"></i>Copy styles'
            }, 2e3)
        })
    }();</script>
</body>
</html>
