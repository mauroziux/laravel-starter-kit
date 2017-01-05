<style>
    html {
        font-family: sans-serif;
        line-height: 1.15;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
    }

    body {
        margin: 0;
    }

    header,
    main,
    section {
        display: block;
    }

    a {
        background-color: transparent;
        -webkit-text-decoration-skip: objects;
    }

    h1 {
        font-size: 2em;
        margin: .67em 0;
    }

    img {
        border-style: none;
    }

    button,
    input {
        font: inherit;
        margin: 0;
    }

    button,
    input {
        overflow: visible;
    }

    button {
        text-transform: none;
    }

    [type=submit],
    button,
    html [type=button] {
        -webkit-appearance: button;
    }

    [type=button]::-moz-focus-inner,
    [type=submit]::-moz-focus-inner,
    button::-moz-focus-inner {
        border-style: none;
        padding: 0;
    }

    [type=button]:-moz-focusring,
    [type=submit]:-moz-focusring,
    button:-moz-focusring {
        outline: 1px dotted ButtonText;
    }

    ::-webkit-input-placeholder {
        color: inherit;
        opacity: .54;
    }

    ::-webkit-file-upload-button {
        -webkit-appearance: button;
        font: inherit;
    }

    html {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    *,
    ::after,
    ::before {
        -webkit-box-sizing: inherit;
        box-sizing: inherit;
    }

    @-ms-viewport {
        width: device-width;
    }

    html {
        font-size: 16px;
        -ms-overflow-style: scrollbar;
    }

    body {
        font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
        font-size: 1rem;
        line-height: 1.5;
        color: #373a3c;
        background-color: #fff;
    }

    h1,
    h2,
    h4 {
        margin-top: 0;
        margin-bottom: .5rem;
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    ul {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    a {
        color: #0275d8;
        text-decoration: none;
    }

    img {
        vertical-align: middle;
    }

    a,
    button,
    input {
        -ms-touch-action: manipulation;
        touch-action: manipulation;
    }

    button,
    input {
        line-height: inherit;
    }

    .h1,
    .h3,
    .h4,
    h1,
    h2,
    h4 {
        margin-bottom: .5rem;
        font-family: inherit;
        font-weight: 500;
        line-height: 1.1;
        color: inherit;
    }

    .h1,
    h1 {
        font-size: 2.5rem;
    }

    h2 {
        font-size: 2rem;
    }

    .h3 {
        font-size: 1.75rem;
    }

    .h4,
    h4 {
        font-size: 1.5rem;
    }

    .row {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    @media (min-width:576px) {
        .row {
            margin-right: -15px;
            margin-left: -15px;
        }
    }

    @media (min-width:768px) {
        .row {
            margin-right: -15px;
            margin-left: -15px;
        }
    }

    @media (min-width:992px) {
        .row {
            margin-right: -15px;
            margin-left: -15px;
        }
    }

    @media (min-width:1200px) {
        .row {
            margin-right: -15px;
            margin-left: -15px;
        }
    }

    .col-lg-6,
    .col-md,
    .col-md-12,
    .col-sm,
    .col-sm-12,
    .col-sm-3,
    .col-xl-5,
    .col-xs,
    .col-xs-6 {
        position: relative;
        min-height: 1px;
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
    }

    @media (min-width:576px) {
        .col-lg-6,
        .col-md,
        .col-md-12,
        .col-sm,
        .col-sm-12,
        .col-sm-3,
        .col-xl-5,
        .col-xs,
        .col-xs-6 {
            padding-right: 15px;
            padding-left: 15px;
        }
    }

    @media (min-width:768px) {
        .col-lg-6,
        .col-md,
        .col-md-12,
        .col-sm,
        .col-sm-12,
        .col-sm-3,
        .col-xl-5,
        .col-xs,
        .col-xs-6 {
            padding-right: 15px;
            padding-left: 15px;
        }
    }

    @media (min-width:992px) {
        .col-lg-6,
        .col-md,
        .col-md-12,
        .col-sm,
        .col-sm-12,
        .col-sm-3,
        .col-xl-5,
        .col-xs,
        .col-xs-6 {
            padding-right: 15px;
            padding-left: 15px;
        }
    }

    @media (min-width:1200px) {
        .col-lg-6,
        .col-md,
        .col-md-12,
        .col-sm,
        .col-sm-12,
        .col-sm-3,
        .col-xl-5,
        .col-xs,
        .col-xs-6 {
            padding-right: 15px;
            padding-left: 15px;
        }
    }

    .col-xs {
        -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%;
    }

    .col-xs-6 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%;
    }

    @media (min-width:576px) {
        .col-sm {
            -webkit-flex-basis: 0;
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%;
        }

        .col-sm-3 {
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 25%;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%;
        }

        .col-sm-12 {
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 100%;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }
    }

    @media (min-width:768px) {
        .col-md {
            -webkit-flex-basis: 0;
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%;
        }

        .col-md-12 {
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 100%;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }
    }

    @media (min-width:992px) {
        .col-lg-6 {
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 50%;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }
    }

    @media (min-width:1200px) {
        .col-xl-5 {
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 41.666667%;
            -ms-flex: 0 0 41.666667%;
            flex: 0 0 41.666667%;
            max-width: 41.666667%;
        }
    }

    .form-control {
        display: block;
        width: 100%;
        padding: .5rem .75rem;
        font-size: 1rem;
        line-height: 1.25;
        color: #55595c;
        background-color: #fff;
        background-image: none;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        border: 1px solid rgba(0,0,0,.15);
        border-radius: .25rem;
    }

    .form-control::-ms-expand {
        background-color: transparent;
        border: 0;
    }

    .form-control::-webkit-input-placeholder {
        color: #999;
        opacity: 1;
    }

    .form-control::-moz-placeholder {
        color: #999;
        opacity: 1;
    }

    .form-control:-ms-input-placeholder {
        color: #999;
        opacity: 1;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .btn {
        display: inline-block;
        font-weight: 400;
        line-height: 1.25;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        border: 1px solid transparent;
        padding: .5rem 1rem;
        font-size: 1rem;
        border-radius: .25rem;
    }

    .btn-danger {
        color: #fff;
        background-color: #d9534f;
        border-color: #d9534f;
    }

    .btn-link {
        font-weight: 400;
        color: #0275d8;
        border-radius: 0;
    }

    .btn-link {
        background-color: transparent;
    }

    .btn-link {
        border-color: transparent;
    }

    .btn-lg {
        padding: .75rem 1.5rem;
        font-size: 1.25rem;
        border-radius: .3rem;
    }

    .btn-block {
        display: block;
        width: 100%;
    }

    input[type=submit].btn-block {
        width: 100%;
    }

    .flex-items-xs-middle {
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .flex-items-xs-left {
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start;
    }

    .flex-items-xs-right {
        -webkit-box-pack: end;
        -webkit-justify-content: flex-end;
        -ms-flex-pack: end;
        justify-content: flex-end;
    }

    @media (min-width:768px) {
        .flex-items-md-right {
            -webkit-box-pack: end;
            -webkit-justify-content: flex-end;
            -ms-flex-pack: end;
            justify-content: flex-end;
        }
    }

    .text-xs-right {
        text-align: right!important;
    }

    .text-xs-center {
        text-align: center!important;
    }

    @media (min-width:768px) {
        .text-md-left {
            text-align: left!important;
        }
    }

    .text-uppercase {
        text-transform: uppercase!important;
    }

    .text-white {
        color: #fff!important;
    }

    @media (max-width:991px) {
        .hidden-md-down {
            display: none!important;
        }
    }

    @media (min-width:992px) {
        .hidden-lg-up {
            display: none!important;
        }
    }

    html,
    body {
        height: 100%;
    }

    body {
        font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #646464;
        background-color: #0275d8;
    }

    a {
        color: #00a1f1;
    }

    h1,
    h2,
    h4,
    .h1,
    .h3,
    .h4 {
        margin: 0;
        font-family: "Source Sans Pro", "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-weight: 600;
        line-height: 1.2;
        color: inherit;
    }

    .h1,
    .h3,
    .h4 {
        font-weight: inherit;
    }

    h1,
    .h1 {
        font-size: 36px;
    }

    h2 {
        font-size: 30px;
    }

    .h3 {
        font-size: 24px;
    }

    h4,
    .h4 {
        font-size: 20px;
    }

    .font-w600 {
        font-weight: 600 !important;
    }

    .font-w700 {
        font-weight: 700 !important;
    }

    p {
        line-height: 1.6;
    }

    .text-white {
        color: #fff;
    }

    .text-white-op {
        color: rgba(255, 255, 255, 0.85);
    }

    .bg-white {
        background-color: #fff;
    }

    .btn {
        font-weight: 600;
        border-radius: 2px;
    }

    .btn-link {
        text-decoration: none;
    }

    .btn-danger {
        color: #fff;
        background-color: #f55;
        border-color: #ff2222;
    }

    .form-control {
        color: #646464;
        border: 1px solid #e6e6e6;
        border-radius: 3px;
        box-shadow: none;
    }

    .form-control::-moz-placeholder {
        color: #aaa;
    }

    .form-control:-ms-input-placeholder {
        color: #aaa;
    }

    .form-control::-webkit-input-placeholder {
        color: #aaa;
    }

    input[type="text"].form-control,
    input[type="email"].form-control {
        -webkit-appearance: none;
    }

    .form-control.input-lg {
        font-size: 14px;
        border-radius: 3px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .modal-content {
        border: none;
        border-radius: 0;
        box-shadow: none;
    }

    .img-responsive {
        width: 100%;
    }

    .fa {
        display: inline-block;
        font: normal normal normal 14px/1 FontAwesome;
        font-size: inherit;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .fa-2x {
        font-size: 2em;
    }

    .pull-right {
        float: right;
    }

    .fa-times:before {
        content: "\f00d";
    }

    .fa-navicon:before {
        content: "\f0c9";
    }

    #header-navbar {
        min-height: 60px;
        background-color: #fff;
    }

    #header-navbar:before,
    #header-navbar:after {
        content: " ";
        display: table;
    }

    #header-navbar:after {
        clear: both;
    }

    .header-navbar-fixed #header-navbar {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1030;
        min-width: 320px;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.02);
    }

    .header-navbar-transparent #header-navbar {
        background-color: transparent;
        box-shadow: none;
    }

    #page-container {
        margin: 0 auto;
        width: 100%;
        min-width: 320px;
        background-color: #2c343f;
    }

    .content {
        margin: 0 auto;
        padding: 16px 14px 1px;
        max-width: 100%;
        overflow-x: visible;
    }

    .content p,
    .content .push {
        margin-bottom: 16px;
    }

    .content.content-full {
        padding-bottom: 16px;
    }

    @media screen and (min-width: 768px) {
        .content {
            margin: 0 auto;
            padding: 30px 30px 1px;
            max-width: 100%;
            overflow-x: visible;
        }

        .content p,
        .content .push {
            margin-bottom: 30px;
        }

        .content.content-full {
            padding-bottom: 30px;
        }
    }

    .content-mini {
        margin: 0 auto;
        padding: 13px 14px 1px;
        max-width: 100%;
        overflow-x: visible;
    }

    .content-mini.content-mini-full {
        padding-bottom: 13px;
    }

    @media screen and (min-width: 768px) {
        .content-mini {
            margin: 0 auto;
            padding: 13px 30px 1px;
            max-width: 100%;
            overflow-x: visible;
        }

        .content-mini.content-mini-full {
            padding-bottom: 13px;
        }
    }

    .content-boxed {
        margin: 0 auto;
        width: 100%;
        max-width: 1280px;
    }

    .block {
        margin-bottom: 30px;
        background-color: #fff;
        box-shadow: 0 2px rgba(0, 0, 0, 0.01);
    }

    .block-content {
        margin: 0 auto;
        padding: 20px 20px 1px;
        max-width: 100%;
        overflow-x: visible;
    }

    .nav-main-header {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        margin: 0;
        padding: 20px;
        width: 100%;
        list-style: none;
        background-color: #2c343f;
        z-index: 1031;
        opacity: 0;
        overflow-y: auto;
        -webkit-overflow-scrolling: touch;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-transform: translateX(0) translateY(-100%) translateZ(0);
        transform: translateX(0) translateY(-100%) translateZ(0);
    }

    .nav-main-header > li {
        margin: 0 0 10px;
    }

    .nav-main-header a {
        display: block;
        padding: 0 12px;
        min-height: 34px;
        color: rgba(255, 255, 255, 0.5);
        font-weight: 600;
        line-height: 34px;
    }

    @media screen and (min-width: 992px) {
        .nav-main-header {
            position: static;
            top: auto;
            right: auto;
            bottom: auto;
            left: auto;
            padding: 0;
            width: auto;
            background-color: transparent;
            z-index: auto;
            opacity: 1;
            overflow-y: visible;
            -webkit-overflow-scrolling: auto;
            -webkit-backface-visibility: visible;
            backface-visibility: visible;
            -webkit-transform: translateX(0) translateY(0) translateZ(0);
            transform: translateX(0) translateY(0) translateZ(0);
        }

        .nav-main-header > li {
            position: relative;
            margin: 0 10px 0 0;
            float: left;
        }
    }

    .nav-header {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .nav-header:before,
    .nav-header:after {
        content: " ";
        display: table;
    }

    .nav-header:after {
        clear: both;
    }

    .nav-header > li {
        margin-right: 12px;
        float: left;
    }

    .nav-header > li > a {
        padding: 0 12px;
        display: block;
        height: 34px;
        line-height: 34px;
        font-weight: 600;
    }

    .nav-header .header-content {
        line-height: 34px;
    }

    .push-5-t {
        margin-top: 5px !important;
    }

    .push-10-t {
        margin-top: 10px !important;
    }

    .push-15-t {
        margin-top: 15px !important;
    }

    .push-20-t {
        margin-top: 20px !important;
    }

    .push-30-t {
        margin-top: 30px !important;
    }

    .overflow-hidden {
        overflow: hidden;
    }

    .animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    @-webkit-keyframes bounceInRight {
        0%, 60%, 75%, 90%, 100% {
            -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        }

        0% {
            opacity: 0;
            -webkit-transform: translate3d(3000px, 0, 0);
            transform: translate3d(3000px, 0, 0);
        }

        60% {
            opacity: 1;
            -webkit-transform: translate3d(-25px, 0, 0);
            transform: translate3d(-25px, 0, 0);
        }

        75% {
            -webkit-transform: translate3d(10px, 0, 0);
            transform: translate3d(10px, 0, 0);
        }

        90% {
            -webkit-transform: translate3d(-5px, 0, 0);
            transform: translate3d(-5px, 0, 0);
        }

        100% {
            -webkit-transform: none;
            transform: none;
        }
    }

    @keyframes bounceInRight {
        0%, 60%, 75%, 90%, 100% {
            -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        }

        0% {
            opacity: 0;
            -webkit-transform: translate3d(3000px, 0, 0);
            transform: translate3d(3000px, 0, 0);
        }

        60% {
            opacity: 1;
            -webkit-transform: translate3d(-25px, 0, 0);
            transform: translate3d(-25px, 0, 0);
        }

        75% {
            -webkit-transform: translate3d(10px, 0, 0);
            transform: translate3d(10px, 0, 0);
        }

        90% {
            -webkit-transform: translate3d(-5px, 0, 0);
            transform: translate3d(-5px, 0, 0);
        }

        100% {
            -webkit-transform: none;
            transform: none;
        }
    }

    .bounceInRight {
        -webkit-animation-name: bounceInRight;
        animation-name: bounceInRight;
    }

    .content-boxed {
        display: flex;
    }

    .bg-lineal-gradient-blue {
        background: linear-gradient(to right bottom,#2c343f 1%,#0275d8 80%,#00a1f1 90%, #00a1f1 30%);
    }

    .div-full {
        min-height: 90vh;
        z-index: 0;
    }

    .rw-words {
        display: inline;
    }

    .rw-words span {
        position: absolute;
        opacity: 0;
        width: 100%;
    }

    .rw-words-1 span {
        animation: rotateWordsFirst 12s linear infinite 0s;
    }

    .rw-words span:nth-child(2) {
        animation-delay: 3s;
    }

    .rw-words span:nth-child(3) {
        animation-delay: 6s;
    }

    .rw-words span:nth-child(4) {
        animation-delay: 9s;
    }

    @keyframes rotateWordsFirst {
        0% {
            opacity: 1;
            animation-timing-function: ease-in;
            height: 10px;
        }

        8% {
            opacity: 1;
            height: 60px;
        }

        19% {
            opacity: 1;
            height: 60px;
        }

        25% {
            opacity: 0;
            height: 60px;
        }

        100% {
            opacity: 0;
        }
    }

    .portada {
        margin: 100px 20px 30px;
        position: fixed;
    }

    .portada .h1 {
        line-height: 0.9em;
    }

    #section-2 {
        z-index: 2;
        position: relative;
    }

    #header-navbar {
        height: 75px;
    }

    .font-s20 {
        font-size: 20px !important;
    }

    .padding-30 {
        padding: 30px !important;
    }

    .btn-green {
        background-color: #0e596c !important;
        color: #f5f5f5 !important;
    }

    .bg-green-light {
        background-color: #37b99b !important;
        color: #fff;
    }

    .overflow-hidden {
        overflow: hidden;
    }

    @media (max-width: 768px) {
        .rw-words span {
            left: 0;
        }

        .div-full {
            min-height: 80vh;
        }

        .modal-dialog {
            width: 500px !important;
        }

        .h1 {
            font-size: 34px !important;
            letter-spacing: -1px;
            line-height: 35px !important;
        }

        .h3 {
            font-size: 22px !important;
            letter-spacing: -1px;
            line-height: 22px !important;
        }

        .h4 {
            font-size: 20px !important;
            line-height: 18px !important;
        }

        .portada {
            margin: 100px 30px 50px 30px !important;
        }

        .font-s20 {
            font-size: 16px !important;
        }

        .padding-30 {
            padding: 10px !important;
        }
    }

    @media screen and (max-width: 576px) {
        .div-full {
            min-height: 100vh;
        }

        .h1 {
            font-size: 28px !important;
            letter-spacing: -1px;
            line-height: 24px !important;
        }

        .h3 {
            font-size: 22px !important;
            letter-spacing: -1px;
            line-height: 22px !important;
        }

        .h4 {
            font-size: 20px !important;
            line-height: 18px !important;
        }

        .portada {
            margin: 100px 10px 50px 10px !important;
        }

        .font-s20 {
            font-size: 16px !important;
        }

        .padding-30 {
            padding: 10px !important;
        }
    }
</style>