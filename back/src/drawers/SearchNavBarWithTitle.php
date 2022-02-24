<?php

namespace ve\drawers;

use ve\helpers\Helper;

class SearchNavBarWithTitle extends SearchNavBar {
    public string $label;
    public string $url;

    private static bool $rendered = false;

    public function style(): string {
        if (!static::$rendered) {
            static::$rendered = true;
            return <<<CSS
                /**
                 * HEADER DE SERVICES
                 */
                @font-face {
                    font-family:o-icomoon;
                    src:url(//c.woopic.com/fonts/o-icomoon.eot?20201014);
                    src:url(//c.woopic.com/fonts/o-icomoon.eot?20201014#iefix) format("embedded-opentype"),
                    url(//c.woopic.com/fonts/o-icomoon.woff2?20201014) format("woff2"),
                    url(//c.woopic.com/fonts/o-icomoon.woff?20201014) format("woff"),
                    url(//c.woopic.com/fonts/o-icomoon.ttf?20201014) format("truetype"),
                    url(//c.woopic.com/fonts/o-icomoon.svg?20201014#POLE-HP) format("svg");
                    font-weight:400;
                    font-style:normal;
                    font-display:auto
                }
            
                #o-header.o-onei [data-icon]:before,
                .o-icomoon .o-link-icon:before,
                .o-icomoon:before {
                    font-family:o-icomoon!important;
                    content:attr(data-icon);
                    font-style:normal;
                    font-weight:400;
                    font-variant:normal;
                    text-transform:none;
                    line-height:21px;
                    text-align:center;
                    font-size:14px;
                    display:inline-block;
                    -webkit-font-smoothing:antialiased;
                    -moz-osx-font-smoothing:grayscale
                }
                .o-icomoon.o-warning:before {
                    font-size:32px!important;
                    color:#FFCD0B
                }
                .o-icomoon.o-browser-arrow {
                    color:#000;
                    position:relative
                }
                .o-icomoon.o-browser-arrow:before {
                    font-size:16px!important;
                    position:absolute;
                    top:50%;
                    -moz-transform:translateY(-50%);
                    -ms-transform:translateY(-50%);
                    -webkit-transform:translateY(-50%);
                    transform:translateY(-50%)
                }
                .o-icomoon.o-close-bandeau:before {
                    font-size:24px!important
                }
                .o-sr-only {
                    position:absolute;
                    width:1px;
                    height:1px;
                    padding:0;
                    margin:-1px;
                    overflow:hidden;
                    clip:rect(0,0,0,0);
                    white-space:nowrap;
                    border:0
                }
                #o-header.o-onei {
                    background:#000
                }
                #o-header.o-onei:after {
                    content:'';
                    display:block;
                    clear:both
                }
                #o-header.o-onei * {
                    -moz-box-sizing:border-box;
                    -webkit-box-sizing:border-box;
                    box-sizing:border-box
                }
                #o-header.o-onei * ::after,
                #o-header.o-onei * ::before {
                    -moz-box-sizing:border-box;
                    -webkit-box-sizing:border-box;
                    box-sizing:border-box
                }
                #o-header.o-onei ul {
                    margin:0;
                    padding:0
                }
                #o-header.o-onei .o-anchor {
                    clear:both
                }
                #o-footer-accesDirect h2:after,
                #o-footer-lienLegal h2:after,
                #o-footer-syndication h2:after,
                #o-header h2:after,
                .o-footer-sitemap h2:after {
                    display:none
                }
                #o-header.o-onei {
                font-family:o-HelveticaNeue,Helvetica,Arial,sans-serif;
                line-height:normal;
                position:relative;
                z-index:auto
                }
                #o-header.o-onei .o-link {
                font-family:o-HelveticaNeue,Helvetica,Arial,sans-serif;
                font-size:14px;
                font-weight:700;
                color:#fff;
                text-decoration:none;
                display:inline-block;
                min-height:40px;
                height:auto;
                padding:0 10px;
                clear:both;
                cursor:pointer
                }
                #o-header.o-onei .o-link .o-link-icon {
                padding-top:10px;
                height:2.28571em;
                float:left;
                position:relative
                }
                #o-header.o-onei .o-link .o-link-icon:before {
                font-size:22px;
                line-height:1em;
                float:left
                }
                #o-header.o-onei .o-link .o-link-icon+.o-link-text {
                padding-left:10px
                }
                #o-header.o-onei .o-link .o-link-text {
                margin-top:13px;
                float:left
                }
                #o-header.o-onei .o-link .o-link-text span {
                font-weight:700
                }
                #o-header.o-onei .o-link:focus .o-link-text span,
                #o-header.o-onei .o-link:hover .o-link-text span {
                color:#ccc
                }
                #o-header.o-onei .o-link:active .o-link-text span {
                color:#f16e00
                }
                #o-header.o-onei .o-link:not(.o-link-noHover):focus,
                #o-header.o-onei .o-link:not(.o-link-noHover):hover {
                text-decoration:underline;
                color:#ccc
                }
                #o-header.o-onei .o-link:not(.o-link-noHover):focus .o-link-icon,
                #o-header.o-onei .o-link:not(.o-link-noHover):hover .o-link-icon {
                color:#ccc
                }
                #o-header.o-onei .o-link:not(.o-link-noHover):focus .o-link-text,
                #o-header.o-onei .o-link:not(.o-link-noHover):hover .o-link-text {
                text-decoration:underline;
                text-decoration-color:#ccc
                }
                #o-header.o-onei .o-link:not(.o-link-noHover):active {
                text-decoration:underline;
                color:#FF7900
                }
                #o-header.o-onei .o-link:not(.o-link-noHover):active .o-link-icon {
                color:#FF7900
                }
                #o-header.o-onei .o-link:not(.o-link-noHover):active .o-link-text {
                text-decoration:underline;
                text-decoration-color:#FF7900
                }
                #o-header.o-onei .o-link.o-touch {
                color:#f16e00;
                text-decoration:underline
                }
                #o-header.o-onei .o-link.o-touch .o-link-text {
                text-decoration:underline
                }
                #o-header.o-onei button.o-link {
                background-color:transparent;
                border:0;
                line-height:normal
                }
                #o-header.o-onei button.o-link span {
                text-align:left
                }
                #o-header.o-onei button.o-link span.o-link-text {
                margin-top:0;
                vertical-align:middle
                }
                #o-header.o-onei button.o-link span.o-link-icon {
                min-height:40px;
                padding-top:10px
                }
                #o-header.o-onei button.o-link:focus,
                #o-header.o-onei button.o-link:hover {
                background-color:transparent
                }
                #o-header.o-onei button.o-link:focus span.o-link-icon,
                #o-header.o-onei button.o-link:hover span.o-link-icon {
                color:#ccc
                }
                #o-header.o-onei button.o-link:active {
                background-color:transparent
                }
                #o-header.o-onei button.o-link:active span.o-link-icon {
                color:#f16e00!important
                }
                #o-header.o-onei .o-layer {
                -moz-box-shadow:rgba(0,0,0,.5) 0 0 5px;
                -webkit-box-shadow:rgba(0,0,0,.5) 0 0 5px;
                box-shadow:rgba(0,0,0,.5) 0 0 5px;
                background:#fff;
                border-top:4px solid #f16e00;
                width:25em;
                padding:0 30px 30px;
                visibility:hidden;
                position:absolute;
                font-family:o-HelveticaNeue,Helvetica,Arial,sans-serif;
                right:0;
                z-index:9998
                }
                #o-header.o-onei .o-layer .o-layer-arrow {
                position:absolute;
                top:-10px;
                right:0;
                left:0;
                height:10px
                }
                #o-header.o-onei .o-layer .o-layer-arrow>div {
                width:0;
                height:0;
                border-left:6px solid transparent;
                border-right:6px solid transparent;
                border-bottom:6px solid #f16e00;
                position:absolute
                }
                #o-header.o-onei .o-layer .o-layer-title {
                color:#000;
                font-size:26px;
                font-weight:700;
                min-height:70px;
                line-height:70px
                }
                #o-header.o-onei .o-layer[data-state=o-active] {
                visibility:visible
                }
                #o-header.o-onei .o-layer[data-state=o-inactive] {
                visibility:hidden
                }
                #o-header.o-onei #o-cookie {
                background:#333;
                height:115px;
                z-index:-1
                }
                #o-header.o-onei #o-cookie.o-cookie-consent {
                clear:both;
                height:auto
                }
                #o-header.o-onei #o-cookie.o-cookie-consent #o-cookie-consent-wrapper #o-cookie-consent-content {
                color:#fff;
                position:relative
                }
                #o-header.o-onei #o-cookie.o-cookie-consent #o-cookie-consent-wrapper #o-cookie-consent-content #o-cookie-consent-title {
                font-weight:700
                }
                #o-header.o-onei #o-cookie.o-cookie-consent #o-cookie-consent-wrapper #o-cookie-consent-content #o-cookie-consent-text a {
                color:#fff;
                text-decoration:underline
                }
                #o-header.o-onei #o-cookie.o-cookie-consent #o-cookie-consent-wrapper #o-cookie-consent-content .o-container-btn {
                width:175px
                }
                #o-header.o-onei #o-cookie.o-cookie-consent #o-cookie-consent-wrapper #o-cookie-consent-content .o-container-btn #o-cookie-consent-ok {
                font-size:16px;
                width:100%;
                padding:15px 40px;
                float:left;
                right:0;
                top:0;
                font-weight:700;
                border:1px solid #fff;
                text-align:center;
                cursor:pointer;
                color:#fff;
                transition:all .2s ease-in-out
                }
                #o-header.o-onei #o-cookie.o-cookie-consent #o-cookie-consent-wrapper #o-cookie-consent-content .o-container-btn #o-cookie-consent-ok:focus,
                #o-header.o-onei #o-cookie.o-cookie-consent #o-cookie-consent-wrapper #o-cookie-consent-content .o-container-btn #o-cookie-consent-ok:hover {
                color:#000;
                background-color:#fff;
                border-color:#fff
                }
                #o-header.o-onei #o-cookie.o-cookie-consent #o-cookie-consent-wrapper #o-cookie-consent-content .o-container-btn #o-cookie-consent-ok:active {
                color:#ff7900
                }
                @media (max-width:959px) {
                #o-header.o-onei #o-cookie.o-cookie-consent #o-cookie-consent-wrapper {
                padding:18px 0
                }
                #o-header.o-onei #o-cookie.o-cookie-consent #o-cookie-consent-wrapper #o-cookie-consent-title {
                font-size:22px;
                line-height:1.36
                }
                #o-header.o-onei #o-cookie.o-cookie-consent #o-cookie-consent-wrapper #o-cookie-consent-text {
                font-size:12px;
                line-height:1.5;
                margin:2px 193px 5px 0
                }
                #o-header.o-onei #o-cookie.o-cookie-consent #o-cookie-consent-wrapper .o-container-btn {
                position:absolute;
                top:0;
                right:0
                }
                #o-header.o-onei #o-cookie.o-cookie-consent #o-cookie-consent-wrapper .o-container-btn #o-cookie-consent-ok {
                margin-top:36px;
                font-size:14px;
                width:161px
                }
                #o-header.o-onei #o-cookie.o-cookie-consent #o-cookie-consent-wrapper .o-container-btn #o-cookie-consent-edit {
                color:#fff;
                text-decoration:none;
                display:inline-block;
                font-size:14px;
                font-weight:700;
                line-height:20px;
                padding:8px 0 9px;
                margin:14px auto 0;
                width:100%
                }
                #o-header.o-onei #o-cookie.o-cookie-consent #o-cookie-consent-wrapper .o-container-btn #o-cookie-consent-edit:hover {
                color:#f16e00
                }
                #o-header.o-onei #o-cookie.o-cookie-consent #o-cookie-consent-wrapper .o-container-btn #o-cookie-consent-edit:after {
                font-family:o-icomoon;
                content:'\e635';
                line-height:20px;
                color:#f16e00;
                font-size:14px;
                float:right
                }
                }
                @media (min-width:960px) {
                #o-header.o-onei #o-cookie.o-cookie-consent #o-cookie-consent-wrapper {
                padding:19px 0 19px 0
                }
                #o-header.o-onei #o-cookie.o-cookie-consent #o-cookie-consent-wrapper #o-cookie-consent-content #o-cookie-consent-title {
                position:absolute;
                font-size:22px;
                line-height:1.11;
                width:142px
                }
                #o-header.o-onei #o-cookie.o-cookie-consent #o-cookie-consent-wrapper #o-cookie-consent-content #o-cookie-consent-text {
                margin:4px 193px 5px 165px;
                font-size:12px;
                line-height:1.14
                }
                #o-header.o-onei #o-cookie.o-cookie-consent #o-cookie-consent-wrapper #o-cookie-consent-content .o-container-btn {
                position:absolute;
                top:0;
                right:0
                }
                #o-header.o-onei #o-cookie.o-cookie-consent #o-cookie-consent-wrapper #o-cookie-consent-content .o-container-btn #o-cookie-consent-ok {
                font-size:16px;
                width:100%;
                float:left
                }
                #o-header.o-onei #o-cookie.o-cookie-consent #o-cookie-consent-wrapper #o-cookie-consent-content .o-container-btn #o-cookie-consent-edit {
                color:#fff;
                text-decoration:none;
                display:inline-block;
                font-size:14px;
                font-weight:700;
                line-height:20px;
                padding:8px 0 9px;
                margin:14px auto 0;
                width:100%
                }
                #o-header.o-onei #o-cookie.o-cookie-consent #o-cookie-consent-wrapper #o-cookie-consent-content .o-container-btn #o-cookie-consent-edit:hover {
                color:#f16e00
                }
                #o-header.o-onei #o-cookie.o-cookie-consent #o-cookie-consent-wrapper #o-cookie-consent-content .o-container-btn #o-cookie-consent-edit:after {
                font-family:o-icomoon;
                content:'\e635';
                line-height:20px;
                color:#f16e00;
                font-size:14px;
                float:right
                }
                }
                @media (min-width:1200px) {
                #o-header.o-onei #o-cookie.o-cookie-consent #o-cookie-consent-wrapper #o-cookie-consent-content {
                max-width:1440px
                }
                #o-header.o-onei #o-cookie.o-cookie-consent #o-cookie-consent-wrapper #o-cookie-consent-content #o-cookie-consent-title {
                width:170px;
                height:67px;
                font-size:26px;
                font-weight:700;
                font-style:normal;
                font-stretch:normal;
                line-height:1.23;
                letter-spacing:normal
                }
                #o-header.o-onei #o-cookie.o-cookie-consent #o-cookie-consent-wrapper #o-cookie-consent-content #o-cookie-consent-text {
                margin:4px 191px 0 190px;
                font-size:14px;
                line-height:1.43;
                letter-spacing:normal
                }
                }
                #o-header.o-onei #o-accessibility {
                font-size:14px;
                min-height:2.857em;
                height:auto;
                background-color:#333;
                position:absolute;
                left:-9999px
                }
                #o-header.o-onei #o-accessibility.o-a11y-zone {
                position:static
                }
                #o-header.o-onei #o-accessibility #o-accessibility-wrapper>ul {
                list-style-type:none;
                list-style-image:none;
                clear:both
                }
                #o-header.o-onei #o-accessibility #o-accessibility-wrapper>ul>li {
                margin-right:45px;
                float:left;
                font-size:0
                }
                #o-header.o-onei #o-accessibility #o-accessibility-wrapper>ul>li .o-link {
                font-size:14px;
                font-weight:700;
                line-height:1em;
                padding-top:.9em;
                padding-bottom:.9em
                }
                #o-header.o-onei #o-accessibility #o-accessibility-wrapper>ul>li .o-link:focus,
                #o-header.o-onei #o-accessibility #o-accessibility-wrapper>ul>li .o-link:hover {
                color:#ccc
                }
                #o-header.o-onei #o-accessibility #o-accessibility-wrapper>ul>li .o-link:focus .o-link-text,
                #o-header.o-onei #o-accessibility #o-accessibility-wrapper>ul>li .o-link:hover .o-link-text {
                text-decoration-color:#ccc
                }
                #o-header.o-onei #o-accessibility #o-accessibility-wrapper>ul>li .o-link:active {
                color:#f16e00;
                text-decoration:underline;
                text-decoration-color:#f16e00
                }
                #o-header.o-onei #o-accessibility #o-accessibility-wrapper>ul>li .o-link:active .o-link-text {
                text-decoration-color:#f16e00
                }
                #o-header.o-onei #o-accessibility #o-accessibility-wrapper>ul>li .o-link:first-child {
                margin-left:-10px
                }
                #o-header.o-onei #o-accessibility #o-accessibility-wrapper>ul>li .o-link .o-link-text {
                margin:0;
                text-decoration:underline
                }
                #o-header.o-onei #o-ribbon {
                min-height:40px;
                height:auto
                }
                #o-header.o-onei #o-ribbon>div {
                min-height:40px;
                height:auto
                }
                #o-header.o-onei #o-ribbon #o-ribbon-left {
                float:left
                }
                #o-header.o-onei #o-ribbon #o-ribbon-left>ul>li {
                margin-right:10px
                }
                #o-header.o-onei #o-ribbon #o-ribbon-left>ul>li:first-child {
                margin-left:-10px
                }
                #o-header.o-onei #o-ribbon #o-ribbon-left>ul>li:last-child {
                margin-right:0!important
                }
                #o-header.o-onei #o-ribbon #o-ribbon-right {
                float:right;
                font-size:16px
                }
                #o-header.o-onei #o-ribbon #o-ribbon-right>ul>li {
                margin-left:10px
                }
                #o-header.o-onei #o-ribbon #o-ribbon-right>ul>li:first-child {
                margin-left:0!important
                }
                #o-header.o-onei #o-ribbon #o-ribbon-right>ul>li:last-child {
                margin-right:-10px
                }
                #o-header.o-onei #o-ribbon #o-ribbon-right :not(.o-nav-identity)#o-identityLink .o-link-text {
                margin-top:4px
                }
                #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink img {
                width:1.85714em;
                height:1.85714em;
                margin-top:8px;
                margin-right:10px;
                float:left;
                border:0;
                font-size:inherit
                }
                #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink img.o-avatar-default {
                -moz-border-radius:.92857em;
                -webkit-border-radius:.92857em;
                border-radius:.92857em
                }
                #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink .o-link-text {
                min-height:36px;
                height:auto;
                float:left;
                font-weight:400;
                display:block
                }
                #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink .o-link-text>span {
                display:block;
                min-height:36px
                }
                #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink.o-identityLink-connected .o-link-text {
                max-width:140px
                }
                #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink.o-identityLink-connected .o-link-text:active {
                color:#f16e00
                }
                #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink .o-identity-link-title {
                font-weight:700;
                display:block;
                text-decoration:none;
                overflow:hidden;
                text-overflow:ellipsis;
                white-space:nowrap
                }
                #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink .o-identity-link-msg {
                font-size:12px;
                display:block;
                margin-top:-2px;
                font-weight:400
                }
                #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink.o-identityLink-notConnected .o-identity-link-title {
                color:#f16e00;
                max-width:initial;
                min-width:0
                }
                #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink:focus,
                #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink:hover {
                text-decoration:underline;
                color:#ccc
                }
                #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink:focus .o-link-icon,
                #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink:hover .o-link-icon {
                color:#ccc
                }
                #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink:focus .o-identity-link-msg,
                #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink:hover .o-identity-link-msg {
                text-decoration:underline;
                text-decoration-color:#ccc;
                color:#ccc
                }
                #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink:active {
                text-decoration:underline;
                color:#f16e00
                }
                #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink:active .o-link-icon {
                color:#f16e00
                }
                #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink:active .o-identity-link-msg {
                text-decoration:underline;
                text-decoration-color:#f16e00;
                color:#f16e00
                }
                #o-header.o-onei #o-ribbon #o-ribbon-left>ul,
                #o-header.o-onei #o-ribbon #o-ribbon-right>ul {
                list-style-type:none;
                list-style-image:none;
                clear:both
                }
                #o-header.o-onei #o-ribbon #o-ribbon-left>ul>li,
                #o-header.o-onei #o-ribbon #o-ribbon-right>ul>li {
                font-size:16px;
                float:left;
                height:2.5em;
                position:relative
                }
                #o-header.o-onei #o-ribbon>div.o-ribbon-hide-label .o-link:not(.o-keep-text) .o-link-text {
                display:none
                }
                #o-header.o-onei #o-ribbon .o-notif-badge {
                -moz-border-radius:1em;
                -webkit-border-radius:1em;
                border-radius:1em;
                -moz-box-shadow:0 0 0 1px #000;
                -webkit-box-shadow:0 0 0 1px #000;
                box-shadow:0 0 0 1px #000;
                background:#e70002;
                font-weight:700;
                min-width:1.33333em;
                height:1.33333em;
                line-height:16px;
                color:#fff;
                font-size:12px;
                padding:0 4px;
                text-align:center;
                display:inline-block
                }
                #o-header.o-onei #o-ribbon .o-link .o-notif-badge {
                -moz-transform:translateX(50%);
                -ms-transform:translateX(50%);
                -webkit-transform:translateX(50%);
                transform:translateX(50%);
                position:absolute;
                right:0;
                top:3px
                }
                #o-header.o-onei #o-ribbon .o-layer-item .o-notif-badge {
                -moz-transform:translate(50%,-50%);
                -ms-transform:translate(50%,-50%);
                -webkit-transform:translate(50%,-50%);
                transform:translate(50%,-50%);
                position:absolute;
                right:0;
                top:0;
                z-index:1
                }
                #o-header.o-onei #o-ribbon .o-ribbon-is-connected #o-identityLayer .o-identityLayer-link {
                margin-top:23px
                }
                #o-header.o-onei #o-ribbon .o-ribbon-is-neutral #o-identityLayer .o-identityLayer-button {
                margin-top:43px
                }
                #o-header.o-onei #o-ribbon #o-identityLayer {
                padding-top:15px
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-avatar {
                text-align:center;
                margin-bottom:0
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-avatar img {
                width:5em;
                height:5em
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-avatar img.o-avatar-default {
                -moz-border-radius:2.5em;
                -webkit-border-radius:2.5em;
                border-radius:2.5em
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-fullname {
                color:#000;
                font-weight:700;
                font-size:26px;
                text-align:center;
                word-wrap:break-word
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-detail {
                color:#000;
                text-align:center;
                font-size:14px
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message {
                display:block;
                text-decoration:none;
                padding:18px 0 22px 0;
                margin:15px 0 0 0
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message.o-msg-warning {
                background:#fffae6
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message.o-msg-warning .o-link-icon::before {
                color:#FFCD0B!important
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message.o-msg-info {
                background:rgba(65,154,249,.2)
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message.o-msg-info .o-link-icon::before {
                color:#26b2ff!important
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message a.o-msg {
                padding:0 30px;
                color:#000;
                font-weight:700;
                font-size:16px;
                text-decoration:none;
                display:flex;
                align-items:center
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message a.o-msg .o-link-text {
                font-weight:700;
                color:#000
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message a.o-msg .o-link-text:after {
                font-family:o-icomoon;
                content:'\e635';
                line-height:normal;
                color:#000;
                font-size:12px;
                padding:0 0 0 5px;
                text-decoration:none
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message a.o-msg:focus .o-link-text,
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message a.o-msg:hover .o-link-text {
                text-decoration:underline;
                font-weight:700;
                color:#555;
                text-decoration-color:#555
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message a.o-msg:focus .o-link-text:after,
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message a.o-msg:hover .o-link-text:after {
                color:#555;
                text-decoration:none
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message a.o-msg:active .o-link-text {
                font-weight:700;
                color:#f16e00!important;
                text-decoration-color:#f16e00
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message a.o-msg:active .o-link-text:after {
                color:#f16e00;
                text-decoration:none
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message a.o-msg .o-link-icon {
                line-height:normal
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message a.o-msg .o-link-icon::before {
                font-size:32px;
                float:left;
                margin-left:-15px;
                padding:0 15px 0 0
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message span.o-msg {
                padding:0 30px;
                color:#000;
                font-weight:700;
                font-size:16px;
                text-decoration:none;
                display:flex;
                align-items:center
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message span.o-msg .o-link-text {
                font-weight:700;
                color:#000
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message span.o-msg .o-link-icon {
                line-height:normal
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message span.o-msg .o-link-icon::before {
                font-size:32px;
                float:left;
                margin-left:-15px;
                padding:0 15px 0 0
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message span.o-msg.o-msg-warning .o-link-icon::before {
                color:#FFCD0B!important
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message span.o-msg.o-msg-info .o-link-icon::before {
                color:#26b2ff!important
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-link {
                list-style-type:none;
                list-style-image:none
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-link li a {
                color:#000;
                text-decoration:none;
                display:inline-block;
                font-size:16px;
                font-weight:700;
                line-height:22px;
                padding:8px 0 9px;
                width:100%
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-link li a:visited {
                color:#000
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-link li a:focus {
                color:#555
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-link li a:hover {
                color:#555
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-link li a:active {
                color:#f16e00
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-link li a:focus span,
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-link li a:hover span {
                text-decoration:underline;
                text-decoration-color:#555
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-link li a:active span {
                text-decoration:underline;
                text-decoration-color:#f16e00
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-link li a:after {
                font-family:o-icomoon;
                content:'\e635';
                line-height:22px;
                color:#f16e00;
                font-size:14px;
                float:right
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-button {
                list-style-type:none;
                list-style-image:none;
                margin-top:23px
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-button li {
                margin-bottom:30px
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-button li:last-child {
                margin-bottom:0
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-button li a {
                text-decoration:none;
                display:block;
                min-height:50px;
                line-height:50px;
                font-size:16px;
                font-weight:700;
                border:1px solid #000;
                text-align:center
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-button li a {
                background-color:transparent;
                border:1px solid #000;
                color:#000
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-button li a:focus,
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-button li a:hover {
                background-color:transparent;
                border-color:#555;
                color:#555
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-button li a:active {
                background-color:transparent;
                border-color:#f16e00;
                color:#f16e00
                }
                #o-header.o-onei #o-ribbon #o-identityLayer #o-footer-identiteConnected-layer .o-layer-data ul.o-identityLayer-link {
                margin-top:23px
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button {
                margin-top:15px
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button li a {
                background-color:#000;
                border:1px solid #000;
                color:#fff;
                padding:0 15px
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button li a:focus,
                #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button li a:hover {
                background-color:#555;
                border-color:#555;
                color:#fff
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button li a:active {
                background-color:#f16e00;
                border-color:#f16e00;
                color:#fff
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button li a:disable {
                background-color:#ccc;
                border-color:#ccc;
                color:#fff
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button li:last-child {
                margin-bottom:0
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button+.o-identityLayer-link {
                padding-top:37px
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button+.o-identityLayer-msg {
                list-style:none;
                padding-top:7px;
                border-bottom:1px solid #ddd;
                text-align:center
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button+.o-identityLayer-msg li {
                padding-bottom:7px
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button+.o-identityLayer-msg li a {
                color:#000;
                font-size:14px;
                line-height:1.2;
                display:inline-block;
                text-decoration:none;
                border-bottom:1px solid none
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button+.o-identityLayer-msg li a .o-link-text span {
                line-height:inherit
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button+.o-identityLayer-msg li a:focus,
                #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button+.o-identityLayer-msg li a:hover {
                color:#555
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button+.o-identityLayer-msg li a:focus .o-link-text span,
                #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button+.o-identityLayer-msg li a:hover .o-link-text span {
                border-bottom:1px solid #555
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button+.o-identityLayer-msg li a:active .o-link-text span {
                color:#f16e00;
                border-bottom:1px solid #f16e00
                }
                #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button+.o-identityLayer-msg+.o-identityLayer-link {
                padding-top:22px
                }
                #o-header.o-onei #o-ribbon #o-identityLayer {
                font-size:16px;
                min-width:18.75em;
                width:auto
                }
                #o-header.o-onei #o-ribbon #o-lanceurLayer .o-layer-item {
                float:left;
                color:#000;
                width:6.875em;
                min-height:110px;
                margin:5px 0 0 0;
                list-style-type:none
                }
                #o-header.o-onei #o-ribbon #o-lanceurLayer .o-layer-item a {
                display:block;
                position:relative;
                height:100%;
                color:#000;
                border:2px solid #fff;
                font-size:16px;
                font-weight:700;
                text-decoration:none;
                text-align:center;
                padding-top:20px
                }
                #o-header.o-onei #o-ribbon #o-lanceurLayer .o-layer-item a:hover {
                border-color:#ddd
                }
                #o-header.o-onei #o-ribbon #o-lanceurLayer .o-layer-item a .o-link-icon {
                width:2.5em;
                height:2.5em;
                position:relative;
                margin:0 auto;
                display:block;
                right:0
                }
                #o-header.o-onei #o-ribbon #o-lanceurLayer .o-layer-item a .o-link-icon::before {
                font-size:40px;
                line-height:1em
                }
                #o-header.o-onei #o-ribbon #o-lanceurLayer .o-layer-item a .o-link-text {
                display:table;
                width:100%;
                text-align:justify;
                margin:0 auto;
                height:42px
                }
                #o-header.o-onei #o-ribbon #o-lanceurLayer .o-layer-item a .o-link-text span {
                display:table-cell;
                text-align:center;
                vertical-align:middle;
                width:110px
                }
                #o-header.o-onei #o-ribbon #o-lanceurLayer .o-layer-item:nth-child(3n+1) {
                clear:left
                }
                #o-header.o-onei #o-ribbon #o-lanceurLayer .o-layer-item:nth-child(3n+2) {
                margin:5px 5px 0 5px
                }
                #o-header.o-onei #o-ribbon #o-lanceurLayer .o-layer-item:nth-child(-n+3) {
                margin-top:0
                }
                #o-header.o-onei #o-ribbon #o-lanceurLayer .o-layer-item:hover {
                background:#ddd
                }
                #o-header.o-onei #o-ribbon #o-lanceurLayer .o-layer-item .o-notif-badge {
                -moz-box-shadow:0 0 0 0 #333;
                -webkit-box-shadow:0 0 0 0 #333;
                box-shadow:0 0 0 0 #333
                }
                #o-header.o-onei #o-ribbon #o-lanceurLayer {
                max-width:calc(100vw - 2em)
                }
                #o-header.o-onei #o-ribbon #o-notifLayer {
                width:31.25em;
                padding:0 0 30px
                }
                #o-header.o-onei #o-ribbon #o-notifLayer:not([data-sondage=nq]) {
                padding:0
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-title {
                position:relative;
                padding:0 30px
                }
                #o-header.o-onei #o-ribbon #o-notifLayer.o-notif-loaded:not(.o-notif-nomessages) .o-layer-data .o-notifLayer-container:after,
                #o-header.o-onei #o-ribbon #o-notifLayer.o-notif-loaded:not(.o-notif-nomessages) .o-layer-data .o-notifLayer-container:before {
                content:"";
                border-top:1px solid #ddd;
                position:absolute;
                right:30px;
                left:30px
                }
                #o-header.o-onei #o-ribbon #o-notifLayer.o-notif-loaded:not(.o-notif-nomessages) .o-layer-data .o-notifLayer-container:after {
                bottom:30px
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter {
                position:relative;
                padding:5px 30px 14px
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter {
                font-family:o-HelveticaNeue,Helvetica,Arial,sans-serif;
                font-size:14px;
                font-weight:700;
                height:2.28571em;
                line-height:1;
                transition:none!important;
                background:0 0;
                -moz-border-radius:2.28571em;
                -webkit-border-radius:2.28571em;
                border-radius:2.28571em;
                border:1px solid #ccc;
                outline:0;
                padding:5px 25px 7px
                }
                @media (hover:hover) and (pointer:fine) {
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter:hover {
                background-color:transparent;
                border-color:#555;
                color:#555;
                padding:5px 25px 7px
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter:active:hover,
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter[data-selected]:hover {
                background-color:transparent;
                border-color:#555
                }
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter[data-selected] {
                background-color:transparent;
                border:2px solid #f16e00;
                color:#000;
                font-weight:700;
                padding:5px 20px 7px 8px
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter[data-selected]:before {
                content:'\e810';
                font-family:o-icomoon;
                font-size:12px;
                margin:0;
                padding:0 8px 0 0;
                color:#f16e00
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter[data-selected]:focus,
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter[data-selected]:hover {
                background-color:transparent;
                border:2px solid #f16e00;
                color:#000;
                font-weight:700;
                padding:5px 20px 7px 8px
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter[data-selected]:focus:before,
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter[data-selected]:hover:before {
                content:'\e810';
                font-family:o-icomoon;
                font-size:12px;
                margin:0;
                padding:0 8px 0 0;
                color:#f16e00
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter[data-selected]:active {
                border:2px solid #f16e00!important;
                color:#555;
                font-weight:700;
                padding:6px 21px 8px 9px!important;
                height:2.28571em;
                line-height:1
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter[data-selected]:active:before {
                content:'\e810';
                font-family:o-icomoon;
                font-size:12px;
                margin:0;
                padding:0 8px 0 0;
                color:#555
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter:focus,
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter:hover {
                line-height:1;
                background-color:transparent;
                border:1px solid #f16e00;
                color:#555;
                font-weight:700;
                padding:5px 25px 7px
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter:focus:before,
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter:hover:before {
                color:#000
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter:active {
                line-height:1;
                background-color:transparent;
                border:2px solid #f16e00;
                color:#000;
                font-weight:700;
                padding:5px 20px 7px 8px
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter:active:before {
                content:'\e810';
                font-family:o-icomoon;
                font-size:12px;
                margin:0;
                padding:0 8px 0 0;
                color:#f16e00
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter:not(:last-child) {
                margin:0 15px 0 0
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul {
                margin:0;
                list-style-type:none;
                font-size:16px;
                width:100%;
                overflow-x:hidden;
                overflow-y:auto
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul::-webkit-scrollbar {
                width:10px
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul::-webkit-scrollbar-track {
                background:#fff
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul::-webkit-scrollbar-thumb {
                background:#ddd
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item {
                outline-offset:-1px
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link:focus span.o-notif-text,
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link:hover span.o-notif-text {
                border-color:#ddd;
                text-decoration:underline;
                text-decoration-color:#555
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link:active span.o-notif-text {
                border-color:#ddd;
                text-decoration:underline;
                text-decoration-color:#f16e00
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item:not(:last-child) .o-notif-link:after {
                content:"";
                border-bottom:1px solid #ddd;
                position:absolute;
                right:30px;
                bottom:0;
                left:30px
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link {
                display:table;
                text-decoration:none;
                color:#000;
                padding:0 30px 0;
                position:relative
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link:active {
                color:#f16e00!important
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link:active span.o-notif-text:active {
                color:#f16e00!important
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link:focus,
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link:hover {
                color:#555
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link:focus span.o-notif-text:focus,
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link:focus span.o-notif-text:hover,
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link:hover span.o-notif-text:focus,
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link:hover span.o-notif-text:hover {
                color:#555
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link.o-notif-new {
                font-weight:700
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link:visited {
                font-weight:400
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link .o-notif-object {
                max-width:40px
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link .o-notif-icon {
                padding:15px 15px 15px 0;
                display:table-cell;
                vertical-align:middle;
                width:2.5em
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link .o-notif-icon:before {
                font-size:16px
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link .o-notif-icon span:before {
                height:1em;
                width:1em;
                font-size:2.5em;
                line-height:1em
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link .o-notif-text {
                line-height:1.38;
                padding:10px 0;
                display:table-cell;
                vertical-align:middle;
                text-align:left;
                margin-left:40px;
                font-size:16px;
                -webkit-text-size-adjust:100%
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link .o-notif-text .o-notif-contrat {
                color:#555;
                font-size:14px;
                font-weight:400;
                display:block
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item:last-child a {
                border-bottom:none
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notif-message-empty-unread {
                padding:0 30px 0
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notif-message-empty-unread .o-notif-message-container {
                display:block;
                width:100%;
                text-decoration:none;
                padding:20px 5px 20px 55px;
                margin-top:22px;
                position:relative;
                background:#e9f7ff;
                color:#000!important;
                font-weight:700
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notif-message-empty-unread .o-notif-message-container:before {
                content:'';
                display:block;
                position:absolute;
                left:0;
                top:-22px;
                width:100%;
                height:1px;
                background-color:#ddd
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notif-message-empty-unread .o-notif-message-container:after {
                font-family:o-icomoon;
                content:'\e805';
                line-height:normal;
                color:#26b2ff;
                font-size:32px;
                padding:0;
                text-decoration:none;
                position:absolute;
                left:15px;
                top:15px
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notif-message-empty-unread .o-notif-message-container span {
                padding:5px;
                font-weight:700;
                font-size:16px
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notif-message-empty-unread .o-notif-message-container button {
                display:block;
                border:none;
                background-color:transparent;
                margin:0;
                padding:5px 0;
                font-weight:700;
                font-size:16px;
                text-align:left
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notif-message-empty-unread .o-notif-message-container button:after {
                font-family:o-icomoon;
                content:'\e635';
                line-height:normal;
                color:#000;
                font-size:10px;
                margin-left:10px;
                text-decoration:none
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notif-message-empty-unread .o-notif-message-container button:active,
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notif-message-empty-unread .o-notif-message-container button:focus-visible {
                border:none;
                outline:0
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage {
                border-top:15px solid #f4f4f4;
                color:#000
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-welcome a.o-link-text {
                float:left;
                color:#000;
                text-decoration:none;
                font-weight:700;
                font-size:14px;
                line-height:1.57143em;
                padding:0;
                margin:29px 0 0 30px
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-welcome a.o-link-text:visited {
                color:#000
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-welcome a.o-link-text:focus {
                color:#555
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-welcome a.o-link-text:hover {
                color:#555
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-welcome a.o-link-text:active {
                color:#f16e00
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-welcome a.o-link-text:focus span,
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-welcome a.o-link-text:hover span {
                text-decoration:underline;
                text-decoration-color:#555
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-welcome a.o-link-text:active span {
                text-decoration:underline;
                text-decoration-color:#f16e00
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-welcome a.o-link-text:after {
                float:right;
                font-family:o-icomoon;
                content:'\e635';
                color:#f16e00;
                font-size:14px;
                line-height:1.57143em;
                margin:0 0 0 15px
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-start,
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-welcome {
                padding-bottom:15px;
                overflow:hidden;
                margin:0 30px 15px
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-question {
                color:#000;
                margin:15px 0 0;
                font-size:16px;
                font-weight:700;
                overflow:hidden
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container {
                display:flex;
                flex-direction:column;
                align-items:center;
                justify-content:center;
                margin-bottom:10px
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-minmax-container {
                width:100%;
                display:flex;
                justify-content:space-between;
                font-size:12px;
                line-height:1.33333em;
                color:#000
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-minmax-container .o-min-max {
                font-size:16px;
                font-weight:700
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider {
                height:auto;
                width:100%
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider .o-range-label {
                display:block;
                position:relative;
                height:1.9em;
                padding:15px 0 0;
                width:1.3em;
                background:0 0;
                font-size:20px;
                font-weight:700;
                font-style:normal;
                line-height:1em;
                text-align:center;
                margin:0;
                box-sizing:border-box;
                color:#000;
                transform-origin:center center
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider .o-range-label[data-selected] {
                color:#f16e00
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider .o-range-label.o-warn-label {
                z-index:-1;
                top:11px;
                text-align:left;
                margin:0!important;
                margin-right:auto!important;
                width:auto;
                line-height:1.9em;
                height:1.9em;
                color:#000;
                background-color:#fce5e5;
                padding:0
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider .o-range-label.o-warn-label span {
                font-size:12px;
                position:relative;
                float:left
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider .o-range-label.o-warn-label:before {
                content:'\e807';
                color:#e70002;
                font-family:o-icomoon;
                font-size:26px;
                margin-left:13px;
                margin-right:13px;
                float:left
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line {
                display:block;
                font-size:19px;
                width:100%;
                height:5px;
                padding:0;
                margin:7px 0;
                -webkit-appearance:none
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line:focus {
                outline:0
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line::-webkit-slider-runnable-track {
                width:100%;
                height:5px;
                margin:0;
                padding:0;
                cursor:pointer;
                box-shadow:none;
                background:#ddd;
                border:none;
                -webkit-appearance:none
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line::-moz-range-track {
                width:100%;
                height:5px;
                margin:0;
                padding:0;
                cursor:pointer;
                box-shadow:none;
                background:#ddd;
                border:none
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line:focus::-webkit-slider-thumb {
                outline:1px dotted #000
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line::-webkit-slider-thumb {
                box-shadow:0 1px 1px 0 rgba(0,0,0,.5);
                border:1px solid #000;
                height:19px;
                width:19px;
                margin-left:0;
                margin-right:0;
                -moz-border-radius:50%;
                -webkit-border-radius:50%;
                border-radius:50%;
                background:#fff;
                cursor:pointer;
                -webkit-appearance:none;
                margin-top:-7px
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line[data-selected]:focus::-webkit-slider-thumb {
                outline:1px dotted #000
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line[data-selected]::-webkit-slider-thumb {
                border:1px solid #f16e00
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line::-moz-range-thumb {
                border:1px solid #000;
                box-shadow:0 1px 1px 0 rgba(0,0,0,.5);
                height:19px;
                width:19px;
                margin-left:0;
                margin-right:0;
                -moz-border-radius:50%;
                -webkit-border-radius:50%;
                border-radius:50%;
                background:#fff;
                cursor:pointer;
                -webkit-appearance:none;
                margin-top:-7px
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line:focus::-moz-range-thumb {
                outline:1px dotted #000
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line[data-selected]::-moz-range-thumb {
                border:1px solid #f16e00
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line::-moz-focus-outer {
                border:0
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line::-ms-fill-lower {
                background-color:#f16e00
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line::-ms-track {
                height:5px
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line::-ms-thumb {
                box-shadow:0 1px 1px 0 rgba(0,0,0,.5);
                border:1px solid #000;
                height:19px;
                width:19px;
                margin-left:0;
                margin-right:0;
                -moz-border-radius:50%;
                -webkit-border-radius:50%;
                border-radius:50%;
                background:#fff;
                cursor:pointer;
                -webkit-appearance:none
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line:focus::-ms-thumb {
                border:1px solid #f16e00;
                background:#fff
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line::-ms-fill-upper {
                background-color:#ddd;
                border:none
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line::-ms-tooltip {
                display:none
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-end {
                background-color:#ebfcee;
                padding:15px 30px;
                font-size:16px;
                font-weight:700;
                line-height:40px
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-end:before {
                content:"\e809";
                font-size:40px;
                color:#3de35a;
                margin-right:15px;
                float:left;
                line-height:40px
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-button {
                margin:15px 0 0;
                font-size:16px;
                line-height:1em;
                padding:1em 2.8125em;
                font-weight:700;
                width:auto;
                text-align:center;
                float:left;
                text-decoration:none
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-button {
                background-color:transparent;
                border:1px solid #000;
                color:#000
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-button:focus,
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-button:hover {
                background-color:transparent;
                border-color:#555;
                color:#555
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-button:active {
                background-color:transparent;
                border-color:#f16e00;
                color:#f16e00
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-msg {
                list-style-type:none;
                margin-left:30px
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-msg.error .o-notif-icon {
                color:#ffcd0b
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-msg.info .o-notif-icon {
                color:#26b2ff
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-msg span {
                display:table-cell;
                font-weight:700;
                vertical-align:middle
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-msg span::before {
                padding:16px 15px 15px 0;
                font-size:40px;
                line-height:40px
                }
                #o-header.o-onei #o-ribbon #o-notifLayer {
                max-height:31.25em;
                max-width:calc(100vw - 2em)
                }
                #o-header.o-onei #o-ribbon #o-notifLayer[data-sondage=nq] .o-notif-sondage {
                display:none
                }
                #o-header.o-onei #o-ribbon #o-notifLayer[data-sondage="q"] .o-notifLayer-container>ul {
                max-height:128px
                }
                #o-header.o-onei #o-ribbon #o-notifLayer[data-sondage="q"][data-sondage-stage=welcome] .o-notifLayer-container>ul {
                max-height:211px
                }
                #o-header.o-onei #o-ribbon #o-notifLayer[data-sondage="q"][data-sondage-stage=nq] {
                padding:0 0 30px
                }
                #o-header.o-onei #o-ribbon #o-notifLayer[data-sondage="q"][data-sondage-stage=nq] .o-notifLayer-container>ul {
                max-height:346px
                }
                #o-header.o-onei #o-ribbon #o-notifLayer[data-sondage="a"] .o-notifLayer-container>ul {
                max-height:289px
                }
                #o-header.o-onei #o-ribbon #o-notifLayer[data-sondage=nq] .o-notifLayer-container>ul {
                max-height:346px
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notif-link {
                width:31.25em;
                max-width:calc(100vw - 2em)
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-question {
                color:#000;
                margin-top:15px
                }
                #o-header.o-onei #o-ribbon .o-ribbon-search {
                margin:0 10px 0 39px
                }
                #o-header.o-onei #o-ribbon .o-ribbon-search label.o-search-label {
                padding-top:0
                }
                #o-header.o-onei #o-ribbon .o-ribbon-search.o-ribbon-search-fullwidth {
                margin-right:0
                }
                #o-header.o-onei #o-ribbon .o-ribbon-search .o-search-form {
                position:relative
                }
                #o-header.o-onei #o-ribbon .o-ribbon-search .o-search-form .o-search-icon {
                padding-top:10px;
                position:absolute;
                color:#fff;
                left:-1.8125em;
                height:32px;
                cursor:pointer
                }
                #o-header.o-onei #o-ribbon .o-ribbon-search .o-search-form .o-search-icon:hover {
                color:#f16e00
                }
                #o-header.o-onei #o-ribbon .o-ribbon-search .o-search-form .o-search-icon:before {
                font-size:22px;
                line-height:22px
                }
                #o-header.o-onei #o-ribbon .o-ribbon-search .o-search-form .o-search-label {
                margin-top:6px;
                min-height:30px;
                font-weight:700;
                color:#fff;
                display:inline-block;
                cursor:text
                }
                #o-header.o-onei #o-ribbon .o-ribbon-search .o-search-form .o-search-label:before {
                content:attr(data-placeholder);
                color:#fff;
                font-weight:700;
                font-family:o-HelveticaNeue,Helvetica,Arial,sans-serif;
                font-size:14px;
                height:2.28571em;
                line-height:30px;
                display:block;
                white-space:nowrap
                }
                #o-header.o-onei #o-ribbon .o-ribbon-search .o-search-form.o-active .o-search-label:before {
                content:''!important
                }
                #o-header.o-onei #o-ribbon .o-ribbon-search .o-search-form .o-search-input {
                margin-top:6px;
                height:2.28571em;
                width:100%;
                padding:0 5px;
                font-family:o-HelveticaNeue,Helvetica,Arial,sans-serif;
                font-size:14px;
                font-weight:700;
                color:#fff;
                border:0;
                position:absolute;
                right:0;
                background-color:transparent
                }
                #o-header.o-onei #o-ribbon .o-ribbon-search .o-search-form .o-search-result {
                color:#000;
                position:absolute;
                z-index:9997;
                right:0;
                top:2.28571em;
                left:-25px
                }
                #o-header.o-onei #o-ribbon .o-ribbon-search .o-search-form .o-search-result .o-search-progress {
                display:none
                }
                #o-header.o-onei #o-ribbon :not(.o-nav-identity)#o-identityLink .o-link-text {
                margin-top:4px
                }
                #o-header.o-onei #o-ribbon #o-identityLink img {
                width:1.85714em;
                height:1.85714em;
                margin-top:8px;
                margin-right:10px;
                float:left;
                border:0;
                font-size:inherit
                }
                #o-header.o-onei #o-ribbon #o-identityLink img.o-avatar-default {
                -moz-border-radius:.92857em;
                -webkit-border-radius:.92857em;
                border-radius:.92857em
                }
                #o-header.o-onei #o-ribbon #o-identityLink .o-link-text {
                min-height:36px;
                height:auto;
                float:left;
                font-weight:400;
                display:block
                }
                #o-header.o-onei #o-ribbon #o-identityLink .o-link-text>span {
                display:block;
                min-height:36px
                }
                #o-header.o-onei #o-ribbon #o-identityLink.o-identityLink-connected .o-link-text {
                max-width:140px
                }
                #o-header.o-onei #o-ribbon #o-identityLink.o-identityLink-connected .o-link-text:active {
                color:#f16e00
                }
                #o-header.o-onei #o-ribbon #o-identityLink .o-identity-link-title {
                font-weight:700;
                display:block;
                text-decoration:none;
                overflow:hidden;
                text-overflow:ellipsis;
                white-space:nowrap
                }
                #o-header.o-onei #o-ribbon #o-identityLink .o-identity-link-msg {
                font-size:12px;
                display:block;
                margin-top:-2px;
                font-weight:400
                }
                #o-header.o-onei #o-ribbon #o-identityLink.o-identityLink-notConnected .o-identity-link-title {
                color:#f16e00;
                max-width:initial;
                min-width:0
                }
                #o-header.o-onei #o-ribbon #o-identityLink:focus,
                #o-header.o-onei #o-ribbon #o-identityLink:hover {
                text-decoration:underline;
                color:#ccc
                }
                #o-header.o-onei #o-ribbon #o-identityLink:focus .o-link-icon,
                #o-header.o-onei #o-ribbon #o-identityLink:hover .o-link-icon {
                color:#ccc
                }
                #o-header.o-onei #o-ribbon #o-identityLink:focus .o-identity-link-msg,
                #o-header.o-onei #o-ribbon #o-identityLink:hover .o-identity-link-msg {
                text-decoration:underline;
                text-decoration-color:#ccc;
                color:#ccc
                }
                #o-header.o-onei #o-ribbon #o-identityLink:active {
                text-decoration:underline;
                color:#f16e00
                }
                #o-header.o-onei #o-ribbon #o-identityLink:active .o-link-icon {
                color:#f16e00
                }
                #o-header.o-onei #o-ribbon #o-identityLink:active .o-identity-link-msg {
                text-decoration:underline;
                text-decoration-color:#f16e00;
                color:#f16e00
                }
                #o-header.o-onei #o-ribbon #o-selectorLink {
                padding-right:30px
                }
                #o-header.o-onei #o-ribbon #o-selectorLink .o-link-text:after {
                -moz-transform:rotate(90deg);
                -ms-transform:rotate(90deg);
                -webkit-transform:rotate(90deg);
                transform:rotate(90deg);
                font-family:o-icomoon;
                content:'\e635';
                color:#f16e00;
                font-size:10px;
                position:absolute;
                right:10px;
                margin-top:5px
                }
                #o-header.o-onei #o-ribbon #o-selectorLink:hover .o-link-text:after {
                -moz-transform:rotate(-90deg);
                -ms-transform:rotate(-90deg);
                -webkit-transform:rotate(-90deg);
                transform:rotate(-90deg)
                }
                #o-header.o-onei #o-ribbon #o-selectorLayer {
                width:auto;
                border-top-width:2px;
                padding-bottom:20px;
                top:40px
                }
                #o-header.o-onei #o-ribbon #o-selectorLayer .o-layer-title {
                height:3.125em;
                min-height:3.125em!important;
                font-size:16px;
                margin-bottom:5px;
                white-space:nowrap
                }
                #o-header.o-onei #o-ribbon #o-selectorLayer ul {
                list-style:none
                }
                #o-header.o-onei #o-ribbon #o-selectorLayer ul li {
                border-top:1px solid #ddd
                }
                #o-header.o-onei #o-ribbon #o-selectorLayer ul li:first-child {
                border-top:0
                }
                #o-header.o-onei #o-ribbon #o-selectorLayer ul li a {
                color:#000;
                font-size:16px;
                text-decoration:none;
                display:block;
                padding:14px 30px 14px 0;
                position:relative
                }
                #o-header.o-onei #o-ribbon #o-selectorLayer ul li a:focus,
                #o-header.o-onei #o-ribbon #o-selectorLayer ul li a:hover {
                color:#555;
                text-decoration:underline;
                text-decoration-color:#555
                }
                #o-header.o-onei #o-ribbon #o-selectorLayer ul li a:active {
                color:#f16e00;
                text-decoration:underline;
                text-decoration-color:#f16e00
                }
                #o-header.o-onei #o-ribbon #o-selectorLayer ul li a:after {
                font-family:o-icomoon;
                font-weight:700;
                content:'\e635';
                line-height:22px;
                color:#f16e00;
                font-size:14px;
                position:absolute;
                top:0;
                right:0;
                bottom:0;
                display:flex;
                align-items:center
                }
                #o-header.o-onei #o-ribbon .o-ribbon-search .o-search-form .o-search-icon {
                left:-1.8125em
                }
                #o-header.o-onei #o-nav-sticky {
                -moz-transition:top .5s ease;
                -o-transition:top .5s ease;
                -webkit-transition:top .5s ease;
                transition:top .5s ease;
                visibility:hidden;
                background-color:#000;
                position:fixed;
                left:0;
                right:0;
                top:-60px;
                width:100%;
                min-height:60px;
                z-index:9999
                }
                #o-header.o-onei #o-nav-sticky.o-open {
                visibility:visible;
                top:0;
                min-height:60px
                }
                #o-header.o-onei #o-nav-sticky .o-nav-wrapper,
                #o-header.o-onei #o-nav-sticky .o-nav-wrapper .o-nav-container>ul {
                min-height:60px
                }
                #o-header.o-onei #o-nav-sticky .o-nav-wrapper .o-logo[data-logo=main] {
                display:none!important
                }
                #o-header.o-onei #o-nav-sticky .o-nav-wrapper .o-logo[data-logo=sticky] {
                display:block!important
                }
                #o-header.o-onei #o-nav-sticky .o-nav-wrapper .o-logo {
                width:30px;
                height:30px;
                margin-top:15px
                }
                #o-header.o-onei #o-nav-sticky .o-nav-wrapper .o-logo img {
                width:30px
                }
                #o-header.o-onei #o-nav-sticky .o-nav-evenement-image-container img {
                max-height:60px
                }
                #o-header.o-onei #o-service {
                background-color:#fff;
                min-height:110px;
                position:relative
                }
                #o-header.o-onei #o-service.o-searching {
                z-index:9994
                }
                #o-header.o-onei #o-service.o-service-theme-dark {
                background-color:#000;
                border-top:1px solid #555
                }
                #o-header.o-onei #o-service #o-service-content {
                position:relative;
                display:flex;
                justify-content:space-between;
                padding-top:25px;
                padding-bottom:25px
                }
                #o-header.o-onei #o-service #o-service-title {
                font-size:36px;
                font-weight:700;
                position:relative;
                left:0;
                display:inline-block;
                padding-right:45px;
                transition-property:opacity;
                transition-duration:.2s;
                transition-timing-function:linear;
                opacity:100%
                }
                #o-header.o-onei #o-service #o-service-title.o-service-title-multiLine .o-service-title-domain {
                font-size:30px;
                line-height:30px;
                font-weight:700
                }
                #o-header.o-onei #o-service #o-service-title.o-service-title-multiLine .o-service-title-subTitle {
                font-size:20px;
                display:block;
                font-weight:700
                }
                #o-header.o-onei #o-service #o-service-title:not(.o-service-title-multiLine) .o-service-title-domain {
                min-height:50px;
                line-height:50px
                }
                #o-header.o-onei #o-service #o-service-title .o-service-title-domain,
                #o-header.o-onei #o-service #o-service-title .o-service-title-subTitle {
                word-break:break-word
                }
                #o-header.o-onei #o-service #o-service-title a {
                color:#000;
                text-decoration:none
                }
                #o-header.o-onei #o-service #o-service-title a:visited {
                color:#000
                }
                #o-header.o-onei #o-service #o-service-title a:focus {
                color:#000
                }
                #o-header.o-onei #o-service #o-service-title a:hover {
                color:#000
                }
                #o-header.o-onei #o-service #o-service-title a:active {
                color:#000
                }
                #o-header.o-onei #o-service.o-searching #o-service-title {
                opacity:0;
                overflow:hidden
                }
                #o-header.o-onei #o-service.o-service-theme-light {
                color:#000
                }
                #o-header.o-onei #o-service.o-service-theme-dark #o-service-title {
                color:#fff
                }
                #o-header.o-onei #o-service.o-service-theme-dark #o-service-title a {
                color:#fff
                }
                #o-header.o-onei #o-service.o-service-theme-dark #o-service-title a:visited {
                color:#fff
                }
                #o-header.o-onei #o-service.o-service-theme-dark #o-service-title a:focus {
                color:#fff
                }
                #o-header.o-onei #o-service.o-service-theme-dark #o-service-title a:hover {
                color:#fff
                }
                #o-header.o-onei #o-service.o-service-theme-dark #o-service-title a:active {
                color:#fff
                }
                #o-header.o-onei #o-service #o-service-search {
                z-index:0;
                display:inline-block;
                position:relative;
                max-width:450px;
                text-align:right;
                height:67px
                }
                #o-header.o-onei #o-service #o-service-search .o-search-form {
                display:inline-block;
                padding:0;
                width:auto;
                height:auto;
                line-height:inherit;
                position:static;
                margin:11px 0 11px 0;
                text-align:left
                }
                #o-header.o-onei #o-service #o-service-search .o-search-form .o-search-label::before {
                display:block;
                box-sizing:border-box;
                font-size:16px;
                max-width:450px;
                min-width:270px;
                width:auto;
                line-height:22px;
                padding:9px 114px 13px 15px;
                text-overflow:ellipsis;
                white-space:nowrap;
                color:#555;
                overflow:hidden;
                position:relative;
                pointer-events:none;
                margin:0;
                opacity:100%;
                background-color:#f4f4f4;
                border-bottom:solid 1px #555;
                transition-property:opacity;
                transition-timing-function:linear;
                transition-duration:.2s
                }
                #o-header.o-onei #o-service #o-service-search .o-search-form .o-search-label::after {
                display:block;
                position:absolute;
                content:attr(data-placeholder);
                opacity:1%;
                visibility:hidden;
                top:21px;
                border:none;
                background-color:transparent;
                font-size:16px;
                line-height:22px;
                font-family:o-HelveticaNeue,Helvetica,Arial,sans-serif;
                text-align:left;
                left:0;
                right:0;
                padding:0;
                z-index:2000;
                max-width:none;
                overflow:visible;
                transition-property:opacity;
                transition-timing-function:linear;
                transition-duration:.2s
                }
                #o-header.o-onei #o-service #o-service-search .o-search-form input#o-search-input:placeholder-shown[type=text]~.o-search-label {
                color:#555
                }
                #o-header.o-onei #o-service #o-service-search .o-search-form input#o-search-input:-ms-input-placeholder[type=text]~.o-search-label {
                color:#555
                }
                #o-header.o-onei #o-service #o-service-search .o-search-form input#o-search-input[type=text] {
                width:calc(100% - 55px);
                box-sizing:border-box;
                border:none;
                outline:0;
                margin:0;
                font-size:18px;
                line-height:24px;
                position:absolute;
                top:11px;
                left:0;
                right:0;
                padding:9px 0 13px 15px;
                background-color:transparent;
                color:#000;
                text-align:left;
                z-index:3000
                }
                #o-header.o-onei #o-service #o-service-search .o-search-form input#o-search-input[type=text]~.o-search-label {
                color:transparent;
                user-select:none;
                -ms-user-select:none
                }
                #o-header.o-onei #o-service #o-service-search .o-search-form input#o-search-input[type=text]~.o-search-label::before {
                color:inherit
                }
                #o-header.o-onei #o-service #o-service-search .o-search-form input#o-search-input[type=text]:placeholder-shown~.o-search-label {
                color:#555;
                user-select:none;
                -ms-user-select:none
                }
                #o-header.o-onei #o-service #o-service-search .o-search-form input#o-search-input[type=text]:placeholder-shown~.o-search-label {
                color:#555;
                user-select:none;
                -ms-user-select:none
                }
                #o-header.o-onei #o-service #o-service-search .o-search-form .o-search-icon.o-icomoon {
                display:inline-block;
                position:absolute;
                z-index:2100;
                top:20px;
                right:15px;
                font-family:o-icomoon,serif;
                line-height:1em;
                color:#555;
                user-select:none;
                -ms-user-select:none;
                opacity:100%;
                transition-property:opacity;
                transition-timing-function:linear;
                transition-duration:.2s
                }
                #o-header.o-onei #o-service #o-service-search .o-search-form .o-search-icon.o-icomoon:before {
                font-size:24px
                }
                #o-header.o-onei #o-service #o-service-search .o-search-form::before {
                position:absolute;
                color:#f16e00;
                top:21px;
                line-height:1em;
                right:0;
                font-size:32px;
                z-index:1000;
                opacity:0;
                transition-property:opacity;
                transition-duration:.2s;
                transition-timing-function:linear
                }
                #o-header.o-onei #o-service .o-search-result {
                width:100%;
                position:absolute;
                z-index:1000;
                padding:0;
                top:99%;
                box-shadow:none;
                overflow:visible
                }
                #o-header.o-onei #o-service .o-search-result::after {
                display:block;
                position:absolute;
                content:'';
                height:100%;
                left:0;
                bottom:0;
                width:100%;
                box-shadow:0 1px 4px 0 rgba(0,0,0,.4);
                z-index:-1000;
                pointer-events:none
                }
                #o-header.o-onei #o-service .o-search-result .o-search-result-wrapper {
                background-color:#fff;
                width:100%;
                min-height:176px;
                top:100%;
                left:0;
                visibility:hidden;
                z-index:3000;
                overflow-y:auto;
                padding:0
                }
                #o-header.o-onei #o-service .o-search-result .o-search-result-wrapper .o-search-result-list {
                box-shadow:none;
                visibility:visible;
                animation-name:o-fade-slide-in-from-top;
                animation-duration:.3s
                }
                #o-header.o-onei #o-service .o-search-result .o-search-progress {
                display:block;
                position:absolute;
                top:93px;
                width:300px;
                height:auto;
                left:calc(50% - 150px);
                font-size:16px;
                text-align:center;
                pointer-events:none;
                cursor:default;
                z-index:-1000;
                visibility:hidden;
                animation-name:o-fade-slide-out-to-top;
                animation-duration:.2s;
                animation-iteration-count:1
                }
                #o-header.o-onei #o-service .o-search-result .o-search-progress::before {
                display:block;
                position:absolute;
                width:34px;
                height:34px;
                border-radius:50%;
                background-color:transparent;
                border-top:4px solid transparent;
                border-left:4px solid #f16e00;
                border-right:4px solid #f16e00;
                border-bottom:4px solid #f16e00;
                content:'';
                top:-41px;
                left:calc(50% - 17px);
                animation-name:o-turn-around;
                animation-duration:2s;
                animation-timing-function:linear;
                animation-iteration-count:infinite
                }
                #o-header.o-onei #o-service .o-search-result .o-search-progress.o-searching-progress-turn {
                visibility:visible
                }
                #o-header.o-onei #o-service.o-service-theme-dark .o-search-label:before {
                color:#ddd!important
                }
                #o-header.o-onei #o-service.o-service-theme-dark .o-search-input {
                background-color:#000;
                color:#fff!important
                }
                #o-header.o-onei #o-service.o-service-theme-dark .o-search-icon {
                color:#ddd
                }
                #o-header.o-onei #o-service.o-service-theme-dark .o-search-form .o-search-label::before {
                color:#aaa!important;
                background-color:#000!important;
                border-bottom-color:#aaa
                }
                #o-header.o-onei #o-service.o-service-theme-dark .o-search-form .o-search-label::after {
                color:#aaa!important
                }
                #o-header.o-onei #o-service.o-service-theme-dark .o-search-form input#o-search-input[type=text] {
                color:#fff!important
                }
                #o-header.o-onei #o-service.o-service-theme-dark .o-search-form input#o-search-input[type=text]~.o-search-label {
                color:#aaa!important
                }
                #o-header.o-onei #o-service.o-service-theme-dark .o-search-form .o-search-icon.o-icomoon {
                color:#aaa!important
                }
                #o-header.o-onei #o-service.o-service-theme-dark::after {
                background-color:#000!important;
                border-bottom-color:#fff
                }
                #o-header.o-onei #o-service.o-service-theme-dark.o-searching #o-service-search .o-search-result:before {
                background-color:#000!important
                }
                #o-header.o-onei #o-service.o-service-theme-dark.o-searching #o-service-search .o-search-result .o-search-result-list .suggestion {
                color:#fff!important
                }
                #o-header.o-onei #o-service:after {
                display:block;
                position:absolute;
                content:' ';
                height:0;
                background-color:#fff;
                right:0;
                bottom:0;
                opacity:0;
                width:0;
                transition:width .3s cubic-bezier(.33,1,.68,1),opacity .2s linear;
                padding:0;
                margin:0;
                border-bottom:solid 1px #000;
                z-index:3000
                }
                #o-header.o-onei #o-service.o-searching::after {
                opacity:100%;
                width:100%;
                animation-name:o-fade-slide-in-from-right;
                animation-duration:.3s;
                animation-timing-function:cubic-bezier(.33,1,.68,1)
                }
                #o-header.o-onei #o-service.o-searching #o-service-wrapper #o-service-content {
                height:117px;
                border:none
                }
                #o-header.o-onei #o-service.o-searching #o-service-search {
                position:static
                }
                #o-header.o-onei #o-service.o-searching #o-service-search .o-search-label::before {
                opacity:0
                }
                #o-header.o-onei #o-service.o-searching #o-service-search .o-search-label::after {
                opacity:100%;
                visibility:visible
                }
                #o-header.o-onei #o-service.o-searching #o-service-search input#o-search-input[type=text]~.o-search-label {
                color:#555
                }
                #o-header.o-onei #o-service.o-searching #o-service-search .o-search-form {
                z-index:0
                }
                #o-header.o-onei #o-service.o-searching #o-service-search .o-search-form input#o-search-input[type=text] {
                top:53px;
                padding:6px 147px 10px 0;
                height:40px;
                width:100%;
                font-size:18px;
                line-height:40px;
                z-index:11000
                }
                #o-header.o-onei #o-service.o-searching #o-service-search .o-search-form .o-search-icon.o-icomoon {
                top:45px;
                opacity:0
                }
                #o-header.o-onei #o-service.o-searching #o-service-search .o-search-form::before {
                top:57px;
                opacity:1
                }
                #o-header.o-onei #o-service.o-searching .o-search-result-list {
                visibility:visible;
                border:none;
                animation-name:fade-in;
                animation-duration:.2s;
                animation-delay:.2s;
                animation-iteration-count:1;
                padding-top:15px
                }
                #o-header.o-onei #o-service.o-searching .o-search-result-list::before {
                width:100vw;
                left:calc((100% - 100vw)/ 2)
                }
                #o-header.o-onei #o-service.o-searching .o-search-result-list .suggestion {
                margin:0 0 18px 0
                }
                #o-header.o-onei #o-service.o-searching .o-search-result-list .suggestion span.content {
                text-decoration:none;
                position:relative;
                display:inline-block;
                overflow:visible;
                padding:0;
                line-height:22px;
                min-height:22px
                }
                #o-header.o-onei #o-service.o-searching .o-search-result-list .suggestion span.content::after {
                position:absolute;
                display:block;
                content:'';
                background-color:transparent;
                animation:none;
                top:100%;
                right:0;
                width:0;
                height:0;
                border-bottom:solid 1px #f16e00
                }
                #o-header.o-onei #o-service.o-searching .o-search-result-list .suggestion span.content:hover::after {
                animation-name:o-underline-on;
                animation-duration:.3s;
                width:100%
                }
                #o-header.o-onei #o-service.o-searching .o-search-result-list .suggestion.highlighted {
                background-color:transparent
                }
                #o-header.o-onei #o-service.o-searching .o-search-result-list .suggestion.highlighted span.content::after {
                border-bottom:solid 1px #f16e00;
                width:100%;
                right:auto;
                left:0
                }
                #o-header.o-onei #o-service.o-searching .o-search-result-list .o-search-result-list {
                transform:translateY(0)
                }
                #o-header.o-onei #o-service #o-service-search .o-search-form .o-service-search-icon {
                left:-1.96875em
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper .o-logo[data-logo=main],
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper .o-logo[data-logo=main] {
                display:block!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper .o-logo[data-logo=sticky],
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper .o-logo[data-logo=sticky] {
                display:none!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-tunnel .o-logo,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-tunnel .o-logo {
                margin:15px 10px 15px 0!important;
                height:30px!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-tunnel .o-logo img,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-tunnel .o-logo img {
                width:30px!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger#o-nav .o-nav-neutral .o-logo,
                body:not(.une-arche) #o-header.o-onei .o-nav#o-nav .o-nav-neutral .o-logo {
                margin:25px 30px 25px 0!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-logo,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-logo {
                display:inline-block;
                margin:0 10px 15px 0;
                height:50px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-logo:focus,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-logo:focus {
                outline:1px dotted #fff;
                outline-offset:3px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-logo img,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-logo img {
                width:50px;
                border:0
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav>ul>li:first-child .o-nav-elt,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav>ul>li:first-child .o-nav-megaMenu,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav>ul>li:first-child .o-nav-elt,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav>ul>li:first-child .o-nav-megaMenu {
                margin-left:-10px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-megaMenu-firstLetterOrange .o-link-text::first-letter,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-megaMenu-firstLetterOrange .o-link-text::first-letter {
                color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral {
                min-height:70px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-avatar,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-avatar {
                text-align:center;
                margin-bottom:0
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-avatar img,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-avatar img {
                width:5em;
                height:5em
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-avatar img.o-avatar-default,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-avatar img.o-avatar-default {
                -moz-border-radius:2.5em;
                -webkit-border-radius:2.5em;
                border-radius:2.5em
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-fullname,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-fullname {
                color:#000;
                font-weight:700;
                font-size:26px;
                text-align:center;
                word-wrap:break-word
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-detail,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-detail {
                color:#000;
                text-align:center;
                font-size:14px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message {
                display:block;
                text-decoration:none;
                padding:18px 0 22px 0;
                margin:15px 0 0 0
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message.o-msg-warning,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message.o-msg-warning {
                background:#fffae6
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message.o-msg-warning .o-link-icon::before,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message.o-msg-warning .o-link-icon::before {
                color:#FFCD0B!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message.o-msg-info,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message.o-msg-info {
                background:rgba(65,154,249,.2)
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message.o-msg-info .o-link-icon::before,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message.o-msg-info .o-link-icon::before {
                color:#26b2ff!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg {
                padding:0 30px;
                color:#000;
                font-weight:700;
                font-size:16px;
                text-decoration:none;
                display:flex;
                align-items:center
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg .o-link-text,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg .o-link-text {
                font-weight:700;
                color:#000
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg .o-link-text:after,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg .o-link-text:after {
                font-family:o-icomoon;
                content:'\e635';
                line-height:normal;
                color:#000;
                font-size:12px;
                padding:0 0 0 5px;
                text-decoration:none
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg:focus .o-link-text,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg:hover .o-link-text,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg:focus .o-link-text,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg:hover .o-link-text {
                text-decoration:underline;
                font-weight:700;
                color:#555;
                text-decoration-color:#555
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg:focus .o-link-text:after,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg:hover .o-link-text:after,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg:focus .o-link-text:after,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg:hover .o-link-text:after {
                color:#555;
                text-decoration:none
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg:active .o-link-text,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg:active .o-link-text {
                font-weight:700;
                color:#f16e00!important;
                text-decoration-color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg:active .o-link-text:after,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg:active .o-link-text:after {
                color:#f16e00;
                text-decoration:none
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg .o-link-icon,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg .o-link-icon {
                line-height:normal
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg .o-link-icon::before,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg .o-link-icon::before {
                font-size:32px;
                float:left;
                margin-left:-15px;
                padding:0 15px 0 0
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message span.o-msg,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message span.o-msg {
                padding:0 30px;
                color:#000;
                font-weight:700;
                font-size:16px;
                text-decoration:none;
                display:flex;
                align-items:center
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message span.o-msg .o-link-text,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message span.o-msg .o-link-text {
                font-weight:700;
                color:#000
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message span.o-msg .o-link-icon,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message span.o-msg .o-link-icon {
                line-height:normal
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message span.o-msg .o-link-icon::before,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message span.o-msg .o-link-icon::before {
                font-size:32px;
                float:left;
                margin-left:-15px;
                padding:0 15px 0 0
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message span.o-msg.o-msg-warning .o-link-icon::before,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message span.o-msg.o-msg-warning .o-link-icon::before {
                color:#FFCD0B!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message span.o-msg.o-msg-info .o-link-icon::before,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message span.o-msg.o-msg-info .o-link-icon::before {
                color:#26b2ff!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link {
                list-style-type:none;
                list-style-image:none
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a {
                color:#000;
                text-decoration:none;
                display:inline-block;
                font-size:16px;
                font-weight:700;
                line-height:22px;
                padding:8px 0 9px;
                width:100%
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a:visited,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a:visited {
                color:#000
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a:focus,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a:focus {
                color:#555
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a:hover,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a:hover {
                color:#555
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a:active,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a:active {
                color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a:focus span,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a:hover span,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a:focus span,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a:hover span {
                text-decoration:underline;
                text-decoration-color:#555
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a:active span,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a:active span {
                text-decoration:underline;
                text-decoration-color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a:after,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a:after {
                font-family:o-icomoon;
                content:'\e635';
                line-height:22px;
                color:#f16e00;
                font-size:14px;
                float:right
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-button,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-button {
                list-style-type:none;
                list-style-image:none;
                margin-top:23px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-button li,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-button li {
                margin-bottom:30px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-button li:last-child,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-button li:last-child {
                margin-bottom:0
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-button li a,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-button li a {
                text-decoration:none;
                display:block;
                min-height:50px;
                line-height:50px;
                font-size:16px;
                font-weight:700;
                border:1px solid #000;
                text-align:center
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-button li a,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-button li a {
                background-color:transparent;
                border:1px solid #000;
                color:#000
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-button li a:focus,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-button li a:hover,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-button li a:focus,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-button li a:hover {
                background-color:transparent;
                border-color:#555;
                color:#555
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-button li a:active,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-button li a:active {
                background-color:transparent;
                border-color:#f16e00;
                color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity #o-footer-identiteConnected-layer .o-layer-data ul.o-identityLayer-link,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity #o-footer-identiteConnected-layer .o-layer-data ul.o-identityLayer-link {
                margin-top:23px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-tunnel,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-tunnel {
                min-height:60px!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-tunnel ul,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-tunnel ul {
                min-height:60px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-tunnel ul li.o-page-title,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-tunnel ul li.o-page-title {
                margin:18px 0 11px 20px!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper {
                min-height:70px;
                clear:both
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-tunnel,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-tunnel {
                display:flex
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral ul:first-of-type,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-tunnel ul:first-of-type,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral ul:first-of-type,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-tunnel ul:first-of-type {
                display:-webkit-flex;
                display:flex;
                flex:0 1 auto;
                flex-shrink:1
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral ul:first-of-type li,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-tunnel ul:first-of-type li,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral ul:first-of-type li,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-tunnel ul:first-of-type li {
                -moz-align-self:flex-end;
                -moz-flex:0 1 auto;
                -moz-flex-shrink:1;
                -webkit-align-self:flex-end;
                -webkit-flex:0 1 auto;
                -webkit-flex-shrink:1;
                -ms-align-self:flex-end;
                -ms-flex:0 1 auto;
                -ms-flex-shrink:1;
                -webkit-align-self:flex-end;
                -webkit-flex:0 1 auto;
                -webkit-flex-shrink:1;
                align-self:flex-end;
                flex:0 1 auto;
                flex-shrink:1;
                -webkit-align-self:flex-end;
                align-self:flex-end;
                flex-shrink:1
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral ul:first-of-type li.o-page-title,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-tunnel ul:first-of-type li.o-page-title,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral ul:first-of-type li.o-page-title,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-tunnel ul:first-of-type li.o-page-title {
                color:#fff
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral ul:first-of-type li.o-page-title h3,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-tunnel ul:first-of-type li.o-page-title h3,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral ul:first-of-type li.o-page-title h3,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-tunnel ul:first-of-type li.o-page-title h3 {
                color:#fff;
                line-height:1;
                font-weight:700;
                text-align:left;
                display:inline-block
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral ul li.o-page-title,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral ul li.o-page-title {
                margin:18px 0 20px 0
                }
                @media (max-width:960px) {
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral ul li.o-page-title h3,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral ul li.o-page-title h3 {
                font-size:16px;
                margin:0 0 6px
                }
                }
                @media (min-width:736px) and (max-width:1199px) {
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral ul li.o-page-title h3,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral ul li.o-page-title h3 {
                font-size:20px;
                margin:0 0 5px
                }
                }
                @media (min-width:961px) {
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral ul li.o-page-title h3,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral ul li.o-page-title h3 {
                font-size:26px;
                margin:0 0 5px
                }
                }
                @media (min-width:1440px) {
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral ul li.o-page-title h3,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral ul li.o-page-title h3 {
                font-size:30px;
                margin:0 0 5px
                }
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-tunnel ul li.o-page-title,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-tunnel ul li.o-page-title {
                margin:18px 0 11px 22px
                }
                @media (max-width:960px) {
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-tunnel ul li.o-page-title h3,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-tunnel ul li.o-page-title h3 {
                font-size:20px;
                margin:0 0 5px
                }
                }
                @media (min-width:961px) {
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-tunnel ul li.o-page-title h3,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-tunnel ul li.o-page-title h3 {
                font-size:22px;
                margin:0 0 5px
                }
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper .o-nav-items,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-items {
                float:right;
                display:flex
                }
                @media (max-width:1199px) {
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper .o-nav-items,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-items {
                height:70px
                }
                }
                @media (min-width:961px) {
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper .o-nav-items,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-items {
                height:auto
                }
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger.o-nav-space-lg .o-nav-container.o-nav-evenement-items .o-link,
                body:not(.une-arche) #o-header.o-onei .o-nav.o-nav-space-lg .o-nav-container.o-nav-evenement-items .o-link {
                padding:0 18px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger.o-nav-space-md .o-nav-container.o-nav-evenement-items .o-link,
                body:not(.une-arche) #o-header.o-onei .o-nav.o-nav-space-md .o-nav-container.o-nav-evenement-items .o-link {
                padding:0 15px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger.o-nav-space-sm .o-nav-container.o-nav-evenement-items .o-link,
                body:not(.une-arche) #o-header.o-onei .o-nav.o-nav-space-sm .o-nav-container.o-nav-evenement-items .o-link {
                padding:0 5px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container .o-link,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container .o-nav-megaMenu,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container .o-link,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container .o-nav-megaMenu {
                text-decoration:none
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container .o-link .o-link-text span,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container .o-nav-megaMenu .o-link-text span,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container .o-link .o-link-text span,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container .o-nav-megaMenu .o-link-text span {
                margin-bottom:2px;
                display:block
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container.o-nav-megaMenu-items>ul,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container.o-nav-megaMenu-items>ul {
                -moz-box-shadow:rgba(0,0,0,.5) 0 0 5px;
                -webkit-box-shadow:rgba(0,0,0,.5) 0 0 5px;
                box-shadow:rgba(0,0,0,.5) 0 0 5px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container.o-nav-megaMenu-items .o-link.o-nav-elt,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container.o-nav-megaMenu-items .o-link.o-nav-elt {
                text-align:center;
                margin:0;
                height:auto;
                padding:0 10px;
                vertical-align:bottom
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container.o-nav-megaMenu-items .o-link.o-nav-elt img,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container.o-nav-megaMenu-items .o-link.o-nav-elt img {
                margin:0;
                border-bottom:none;
                display:block;
                max-height:60px;
                border:none
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container.o-nav-megaMenu-items .o-link.o-nav-elt .o-link-text,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container.o-nav-megaMenu-items .o-link.o-nav-elt .o-link-text {
                padding:10px 0;
                margin:0 0 3px 0;
                text-decoration:none
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container.o-nav-megaMenu-items .o-link.o-nav-elt .o-link-text span,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container.o-nav-megaMenu-items .o-link.o-nav-elt .o-link-text span {
                margin-bottom:2px;
                display:block;
                font-weight:700
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container.o-nav-megaMenu-items .o-link.o-nav-elt:hover .o-link-text,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container.o-nav-megaMenu-items .o-link.o-nav-elt:hover .o-link-text {
                margin:0 0 0;
                border-bottom:3px solid #f16e00;
                text-decoration:none;
                display:block
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container.o-nav-megaMenu-items .o-link.o-nav-elt:hover .o-link-text span,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container.o-nav-megaMenu-items .o-link.o-nav-elt:hover .o-link-text span {
                color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container.o-nav-megaMenu-items .o-link.o-nav-elt:focus .o-link-text span,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container.o-nav-megaMenu-items .o-link.o-nav-elt:focus .o-link-text span {
                color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container.o-nav-evenement-items .o-link,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container.o-nav-evenement-items .o-link {
                text-align:center;
                margin:0;
                height:auto;
                vertical-align:bottom
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container.o-nav-evenement-items .o-link img,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container.o-nav-evenement-items .o-link img {
                margin:0;
                border-bottom:none;
                display:block;
                max-height:60px;
                border:none
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container.o-nav-evenement-items .o-link span.o-link-text,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container.o-nav-evenement-items .o-link span.o-link-text {
                padding:10px 0;
                margin:0 0 3px 0;
                text-decoration:none
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container.o-nav-evenement-items .o-link span.o-link-text span,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container.o-nav-evenement-items .o-link span.o-link-text span {
                margin-bottom:2px;
                display:block
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container.o-nav-evenement-items .o-link:focus .o-link-text,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container.o-nav-evenement-items .o-link:hover .o-link-text,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container.o-nav-evenement-items .o-link:focus .o-link-text,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container.o-nav-evenement-items .o-link:hover .o-link-text {
                margin:0 0 0;
                border-bottom:3px solid #f16e00;
                text-decoration:none;
                display:block
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul {
                list-style-type:none;
                list-style-image:none;
                clear:both
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer {
                background:#fff;
                left:0;
                right:0;
                border:none;
                padding:0 0 20px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-title,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-title {
                position:relative;
                width:100%;
                border-bottom:1px solid #ccc;
                line-height:1em;
                padding:25px 0;
                display:inline-block
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-title a,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-title a {
                text-decoration:none;
                font-weight:700;
                color:#000
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-title a:focus,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-title a:hover,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-title a:focus,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-title a:hover {
                text-decoration:underline;
                text-decoration-color:#555;
                font-weight:700;
                color:#555
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-title a:active,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-title a:active {
                color:#f16e00;
                text-decoration-color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-title:after,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-title:after {
                font-family:o-icomoon;
                content:'\e635';
                font-weight:400;
                font-size:14px;
                color:#f16e00;
                margin-left:15px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-navigation-layer-column,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-navigation-layer-column {
                color:#000;
                page-break-inside:avoid;
                font-size:18px;
                max-width:15em
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-navigation-layer-img,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-navigation-layer-img {
                top:20px;
                right:0;
                margin-top:20px;
                max-width:initial!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-navigation-layer-img a,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-navigation-layer-img img,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-navigation-layer-img a,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-navigation-layer-img img {
                display:block;
                border:0
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block:focus,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block:focus {
                outline:solid
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block:focus a,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block:hover a,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block:focus a,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block:hover a {
                text-decoration:none!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block:focus div:last-child a,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block:hover div:last-child a,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block:focus div:last-child a,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block:hover div:last-child a {
                color:#555;
                text-decoration:underline!important;
                text-decoration-color:#555!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block:active a,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block:active a {
                text-decoration:none!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block:active div:last-child a,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block:active div:last-child a {
                color:#f16e00;
                text-decoration:underline!important;
                text-decoration-color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block .o-megamenu-link,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block .o-megamenu-link {
                padding-bottom:0!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block .o-megamenu-link.o-megamenu-title,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block .o-megamenu-link.o-megamenu-title {
                padding:0!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block .o-megamenu-link.o-megamenu-title .o-megamenu-subtitle,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block .o-megamenu-link.o-megamenu-title .o-megamenu-subtitle {
                color:#000;
                font-weight:400!important;
                padding-top:2px!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block .o-megamenu-link.o-megamenu-title a.o-megamenu-item,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block .o-megamenu-link.o-megamenu-title a.o-megamenu-item {
                padding-top:2px!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link {
                display:block;
                text-decoration:none;
                padding:10px 5px 10px 0;
                color:#000;
                font-weight:700;
                text-decoration:none;
                padding:20px 0 7px;
                margin:0
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link:hover,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link:hover {
                font-weight:700
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link a.o-megamenu-cat,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link a.o-megamenu-cat {
                color:#000;
                font-weight:700;
                text-decoration:none
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link.o-megamenu-title,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link.o-megamenu-title {
                padding:5px 0!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link.o-megamenu-title .o-megamenu-subtitle,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link.o-megamenu-title .o-megamenu-subtitle {
                color:#000;
                font-weight:700;
                text-decoration:none
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link.o-megamenu-title a.o-megamenu-item,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link.o-megamenu-title a.o-megamenu-item {
                display:block;
                font-weight:700;
                text-decoration:none;
                color:#000;
                padding:8px 5px 8px 0;
                line-height:normal
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link.o-megamenu-title a.o-megamenu-item:focus,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link.o-megamenu-title a.o-megamenu-item:hover,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link.o-megamenu-title a.o-megamenu-item:focus,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link.o-megamenu-title a.o-megamenu-item:hover {
                color:#555;
                text-decoration:underline;
                text-decoration-color:#555
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link.o-megamenu-title a.o-megamenu-item:active,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link.o-megamenu-title a.o-megamenu-item:active {
                color:#f16e00;
                text-decoration-color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-infoBlock,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-infoBlock {
                display:block;
                text-decoration:none;
                padding:20px 0 6px 0;
                color:#555;
                font-weight:700;
                margin:0
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-infoBlock:hover,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-infoBlock:hover {
                font-weight:700
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-infoBlock .o-megamenu-infoblock,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-infoBlock .o-megamenu-infoblock {
                color:#000;
                font-weight:700;
                text-decoration:none;
                display:flex;
                align-items:center
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-infoBlock .o-megamenu-infoblock .o-link-text,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-infoBlock .o-megamenu-infoblock .o-link-text {
                font-weight:400;
                color:#000
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-infoBlock .o-megamenu-infoblock:focus .o-link-text,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-infoBlock .o-megamenu-infoblock:hover .o-link-text,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-infoBlock .o-megamenu-infoblock:focus .o-link-text,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-infoBlock .o-megamenu-infoblock:hover .o-link-text {
                text-decoration:underline;
                font-weight:400;
                color:#555;
                text-decoration-color:#555
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-infoBlock .o-megamenu-infoblock:active .o-link-text,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-infoBlock .o-megamenu-infoblock:active .o-link-text {
                font-weight:400;
                color:#f16e00!important;
                text-decoration-color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-infoBlock .o-megamenu-infoblock .o-link-icon::before,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-infoBlock .o-megamenu-infoblock .o-link-icon::before {
                color:#26b2ff!important;
                font-size:20px;
                margin-left:-25px;
                padding:0 5px 0 0
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category {
                list-style:none
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category [data-new='1']:after,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category [data-new='1']:after {
                display:inline-block;
                position:relative;
                text-decoration:underline;
                content:'New';
                background:#000;
                color:#fff;
                font-weight:700;
                font-size:12px;
                min-height:15px;
                height:auto;
                padding-left:3px;
                padding-right:3px;
                line-height:15px;
                margin-left:15px;
                top:-2px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category [data-new='1']:after,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category [data-new='1']:hover:after,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category [data-new='1']:after,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category [data-new='1']:hover:after {
                text-decoration:none
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category a,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category a {
                display:block;
                text-decoration:none;
                color:#333;
                padding:8px 5px 8px 0;
                line-height:normal
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category a:focus,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category a:hover,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category a:focus,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category a:hover {
                color:#555;
                text-decoration:underline;
                text-decoration-color:#555
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category a:active,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category a:active {
                color:#f16e00;
                text-decoration-color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category a.o-megamenu-more,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category a.o-megamenu-more {
                font-weight:700
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category a.o-megamenu-lastitem,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category a.o-megamenu-lastitem {
                padding-top:8px!important;
                margin-top:13px!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li:last-child,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-container>ul>li:last-child {
                margin-right:0;
                padding:0!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger {
                background-color:#000
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper .o-logo[data-logo=main] {
                display:block!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper .o-logo[data-logo=sticky] {
                display:none!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-tunnel .o-logo {
                margin:15px 10px 15px 0!important;
                height:30px!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-tunnel .o-logo img {
                width:30px!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger#o-nav .o-nav-neutral .o-logo {
                margin:25px 30px 25px 0!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-logo {
                display:inline-block;
                margin:0 10px 15px 0;
                height:50px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-logo:focus {
                outline:1px dotted #fff;
                outline-offset:3px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-logo img {
                width:50px;
                border:0
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav>ul>li:first-child .o-nav-elt,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav>ul>li:first-child .o-nav-megaMenu {
                margin-left:-10px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-megaMenu-firstLetterOrange .o-link-text::first-letter {
                color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral {
                min-height:70px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-avatar {
                text-align:center;
                margin-bottom:0
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-avatar img {
                width:5em;
                height:5em
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-avatar img.o-avatar-default {
                -moz-border-radius:2.5em;
                -webkit-border-radius:2.5em;
                border-radius:2.5em
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-fullname {
                color:#000;
                font-weight:700;
                font-size:26px;
                text-align:center;
                word-wrap:break-word
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-detail {
                color:#000;
                text-align:center;
                font-size:14px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message {
                display:block;
                text-decoration:none;
                padding:18px 0 22px 0;
                margin:15px 0 0 0
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message.o-msg-warning {
                background:#fffae6
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message.o-msg-warning .o-link-icon::before {
                color:#FFCD0B!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message.o-msg-info {
                background:rgba(65,154,249,.2)
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message.o-msg-info .o-link-icon::before {
                color:#26b2ff!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg {
                padding:0 30px;
                color:#000;
                font-weight:700;
                font-size:16px;
                text-decoration:none;
                display:flex;
                align-items:center
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg .o-link-text {
                font-weight:700;
                color:#000
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg .o-link-text:after {
                font-family:o-icomoon;
                content:'\e635';
                line-height:normal;
                color:#000;
                font-size:12px;
                padding:0 0 0 5px;
                text-decoration:none
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg:focus .o-link-text,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg:hover .o-link-text {
                text-decoration:underline;
                font-weight:700;
                color:#555;
                text-decoration-color:#555
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg:focus .o-link-text:after,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg:hover .o-link-text:after {
                color:#555;
                text-decoration:none
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg:active .o-link-text {
                font-weight:700;
                color:#f16e00!important;
                text-decoration-color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg:active .o-link-text:after {
                color:#f16e00;
                text-decoration:none
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg .o-link-icon {
                line-height:normal
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg .o-link-icon::before {
                font-size:32px;
                float:left;
                margin-left:-15px;
                padding:0 15px 0 0
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message span.o-msg {
                padding:0 30px;
                color:#000;
                font-weight:700;
                font-size:16px;
                text-decoration:none;
                display:flex;
                align-items:center
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message span.o-msg .o-link-text {
                font-weight:700;
                color:#000
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message span.o-msg .o-link-icon {
                line-height:normal
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message span.o-msg .o-link-icon::before {
                font-size:32px;
                float:left;
                margin-left:-15px;
                padding:0 15px 0 0
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message span.o-msg.o-msg-warning .o-link-icon::before {
                color:#FFCD0B!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message span.o-msg.o-msg-info .o-link-icon::before {
                color:#26b2ff!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link {
                list-style-type:none;
                list-style-image:none
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a {
                color:#000;
                text-decoration:none;
                display:inline-block;
                font-size:16px;
                font-weight:700;
                line-height:22px;
                padding:8px 0 9px;
                width:100%
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a:visited {
                color:#000
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a:focus {
                color:#555
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a:hover {
                color:#555
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a:active {
                color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a:focus span,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a:hover span {
                text-decoration:underline;
                text-decoration-color:#555
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a:active span {
                text-decoration:underline;
                text-decoration-color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a:after {
                font-family:o-icomoon;
                content:'\e635';
                line-height:22px;
                color:#f16e00;
                font-size:14px;
                float:right
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-button {
                list-style-type:none;
                list-style-image:none;
                margin-top:23px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-button li {
                margin-bottom:30px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-button li:last-child {
                margin-bottom:0
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-button li a {
                text-decoration:none;
                display:block;
                min-height:50px;
                line-height:50px;
                font-size:16px;
                font-weight:700;
                border:1px solid #000;
                text-align:center
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-button li a {
                background-color:transparent;
                border:1px solid #000;
                color:#000
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-button li a:focus,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-button li a:hover {
                background-color:transparent;
                border-color:#555;
                color:#555
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-button li a:active {
                background-color:transparent;
                border-color:#f16e00;
                color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral .o-nav-identity #o-footer-identiteConnected-layer .o-layer-data ul.o-identityLayer-link {
                margin-top:23px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-tunnel {
                min-height:60px!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-tunnel ul {
                min-height:60px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-tunnel ul li.o-page-title {
                margin:18px 0 11px 20px!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper {
                min-height:70px;
                clear:both
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-tunnel {
                display:flex
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral ul:first-of-type,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-tunnel ul:first-of-type {
                display:-webkit-flex;
                display:flex;
                flex:0 1 auto;
                flex-shrink:1
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral ul:first-of-type li,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-tunnel ul:first-of-type li {
                -moz-align-self:flex-end;
                -moz-flex:0 1 auto;
                -moz-flex-shrink:1;
                -webkit-align-self:flex-end;
                -webkit-flex:0 1 auto;
                -webkit-flex-shrink:1;
                -ms-align-self:flex-end;
                -ms-flex:0 1 auto;
                -ms-flex-shrink:1;
                -webkit-align-self:flex-end;
                -webkit-flex:0 1 auto;
                -webkit-flex-shrink:1;
                align-self:flex-end;
                flex:0 1 auto;
                flex-shrink:1;
                -webkit-align-self:flex-end;
                align-self:flex-end;
                flex-shrink:1
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral ul:first-of-type li.o-page-title,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-tunnel ul:first-of-type li.o-page-title {
                color:#fff
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral ul:first-of-type li.o-page-title h3,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-tunnel ul:first-of-type li.o-page-title h3 {
                color:#fff;
                line-height:1;
                font-weight:700;
                text-align:left;
                display:inline-block
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral ul li.o-page-title {
                margin:18px 0 20px 0
                }
                @media (max-width:960px) {
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral ul li.o-page-title h3 {
                font-size:16px;
                margin:0 0 6px
                }
                }
                @media (min-width:736px) and (max-width:1199px) {
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral ul li.o-page-title h3 {
                font-size:20px;
                margin:0 0 5px
                }
                }
                @media (min-width:961px) {
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral ul li.o-page-title h3 {
                font-size:26px;
                margin:0 0 5px
                }
                }
                @media (min-width:1440px) {
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-neutral ul li.o-page-title h3 {
                font-size:30px;
                margin:0 0 5px
                }
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-tunnel ul li.o-page-title {
                margin:18px 0 11px 22px
                }
                @media (max-width:960px) {
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-tunnel ul li.o-page-title h3 {
                font-size:20px;
                margin:0 0 5px
                }
                }
                @media (min-width:961px) {
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper.o-nav-tunnel ul li.o-page-title h3 {
                font-size:22px;
                margin:0 0 5px
                }
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper .o-nav-items {
                float:right;
                display:flex
                }
                @media (max-width:1199px) {
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper .o-nav-items {
                height:70px
                }
                }
                @media (min-width:961px) {
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-wrapper .o-nav-items {
                height:auto
                }
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger.o-nav-space-lg .o-nav-container.o-nav-evenement-items .o-link {
                padding:0 18px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger.o-nav-space-md .o-nav-container.o-nav-evenement-items .o-link {
                padding:0 15px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger.o-nav-space-sm .o-nav-container.o-nav-evenement-items .o-link {
                padding:0 5px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container .o-link,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container .o-nav-megaMenu {
                text-decoration:none
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container .o-link .o-link-text span,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container .o-nav-megaMenu .o-link-text span {
                margin-bottom:2px;
                display:block
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container.o-nav-megaMenu-items>ul {
                -moz-box-shadow:rgba(0,0,0,.5) 0 0 5px;
                -webkit-box-shadow:rgba(0,0,0,.5) 0 0 5px;
                box-shadow:rgba(0,0,0,.5) 0 0 5px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container.o-nav-megaMenu-items .o-link.o-nav-elt {
                text-align:center;
                margin:0;
                height:auto;
                padding:0 10px;
                vertical-align:bottom
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container.o-nav-megaMenu-items .o-link.o-nav-elt img {
                margin:0;
                border-bottom:none;
                display:block;
                max-height:60px;
                border:none
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container.o-nav-megaMenu-items .o-link.o-nav-elt .o-link-text {
                padding:10px 0;
                margin:0 0 3px 0;
                text-decoration:none
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container.o-nav-megaMenu-items .o-link.o-nav-elt .o-link-text span {
                margin-bottom:2px;
                display:block;
                font-weight:700
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container.o-nav-megaMenu-items .o-link.o-nav-elt:hover .o-link-text {
                margin:0 0 0;
                border-bottom:3px solid #f16e00;
                text-decoration:none;
                display:block
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container.o-nav-megaMenu-items .o-link.o-nav-elt:hover .o-link-text span {
                color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container.o-nav-megaMenu-items .o-link.o-nav-elt:focus .o-link-text span {
                color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container.o-nav-evenement-items .o-link {
                text-align:center;
                margin:0;
                height:auto;
                vertical-align:bottom
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container.o-nav-evenement-items .o-link img {
                margin:0;
                border-bottom:none;
                display:block;
                max-height:60px;
                border:none
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container.o-nav-evenement-items .o-link span.o-link-text {
                padding:10px 0;
                margin:0 0 3px 0;
                text-decoration:none
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container.o-nav-evenement-items .o-link span.o-link-text span {
                margin-bottom:2px;
                display:block
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container.o-nav-evenement-items .o-link:focus .o-link-text,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container.o-nav-evenement-items .o-link:hover .o-link-text {
                margin:0 0 0;
                border-bottom:3px solid #f16e00;
                text-decoration:none;
                display:block
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul {
                list-style-type:none;
                list-style-image:none;
                clear:both
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer {
                background:#fff;
                left:0;
                right:0;
                border:none;
                padding:0 0 20px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-title {
                position:relative;
                width:100%;
                border-bottom:1px solid #ccc;
                line-height:1em;
                padding:25px 0;
                display:inline-block
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-title a {
                text-decoration:none;
                font-weight:700;
                color:#000
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-title a:focus,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-title a:hover {
                text-decoration:underline;
                text-decoration-color:#555;
                font-weight:700;
                color:#555
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-title a:active {
                color:#f16e00;
                text-decoration-color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-title:after {
                font-family:o-icomoon;
                content:'\e635';
                font-weight:400;
                font-size:14px;
                color:#f16e00;
                margin-left:15px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-navigation-layer-column {
                color:#000;
                page-break-inside:avoid;
                font-size:18px;
                max-width:15em
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-navigation-layer-img {
                top:20px;
                right:0;
                margin-top:20px;
                max-width:initial!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-navigation-layer-img a,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-navigation-layer-img img {
                display:block;
                border:0
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block:focus {
                outline:solid
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block:focus a,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block:hover a {
                text-decoration:none!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block:focus div:last-child a,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block:hover div:last-child a {
                color:#555;
                text-decoration:underline!important;
                text-decoration-color:#555!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block:active a {
                text-decoration:none!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block:active div:last-child a {
                color:#f16e00;
                text-decoration:underline!important;
                text-decoration-color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block .o-megamenu-link {
                padding-bottom:0!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block .o-megamenu-link.o-megamenu-title {
                padding:0!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block .o-megamenu-link.o-megamenu-title .o-megamenu-subtitle {
                color:#000;
                font-weight:400!important;
                padding-top:2px!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block .o-megamenu-link.o-megamenu-title a.o-megamenu-item {
                padding-top:2px!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link {
                display:block;
                text-decoration:none;
                padding:10px 5px 10px 0;
                color:#000;
                font-weight:700;
                text-decoration:none;
                padding:20px 0 7px;
                margin:0
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link:hover {
                font-weight:700
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link a.o-megamenu-cat {
                color:#000;
                font-weight:700;
                text-decoration:none
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link.o-megamenu-title {
                padding:5px 0!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link.o-megamenu-title .o-megamenu-subtitle {
                color:#000;
                font-weight:700;
                text-decoration:none
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link.o-megamenu-title a.o-megamenu-item {
                display:block;
                font-weight:700;
                text-decoration:none;
                color:#000;
                padding:8px 5px 8px 0;
                line-height:normal
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link.o-megamenu-title a.o-megamenu-item:focus,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link.o-megamenu-title a.o-megamenu-item:hover {
                color:#555;
                text-decoration:underline;
                text-decoration-color:#555
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link.o-megamenu-title a.o-megamenu-item:active {
                color:#f16e00;
                text-decoration-color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-infoBlock {
                display:block;
                text-decoration:none;
                padding:20px 0 6px 0;
                color:#555;
                font-weight:700;
                margin:0
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-infoBlock:hover {
                font-weight:700
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-infoBlock .o-megamenu-infoblock {
                color:#000;
                font-weight:700;
                text-decoration:none;
                display:flex;
                align-items:center
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-infoBlock .o-megamenu-infoblock .o-link-text {
                font-weight:400;
                color:#000
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-infoBlock .o-megamenu-infoblock:focus .o-link-text,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-infoBlock .o-megamenu-infoblock:hover .o-link-text {
                text-decoration:underline;
                font-weight:400;
                color:#555;
                text-decoration-color:#555
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-infoBlock .o-megamenu-infoblock:active .o-link-text {
                font-weight:400;
                color:#f16e00!important;
                text-decoration-color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-infoBlock .o-megamenu-infoblock .o-link-icon::before {
                color:#26b2ff!important;
                font-size:20px;
                margin-left:-25px;
                padding:0 5px 0 0
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category {
                list-style:none
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category [data-new='1']:after {
                display:inline-block;
                position:relative;
                text-decoration:underline;
                content:'New';
                background:#000;
                color:#fff;
                font-weight:700;
                font-size:12px;
                min-height:15px;
                height:auto;
                padding-left:3px;
                padding-right:3px;
                line-height:15px;
                margin-left:15px;
                top:-2px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category [data-new='1']:after,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category [data-new='1']:hover:after {
                text-decoration:none
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category a {
                display:block;
                text-decoration:none;
                color:#333;
                padding:8px 5px 8px 0;
                line-height:normal
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category a:focus,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category a:hover {
                color:#555;
                text-decoration:underline;
                text-decoration-color:#555
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category a:active {
                color:#f16e00;
                text-decoration-color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category a.o-megamenu-more {
                font-weight:700
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category a.o-megamenu-lastitem {
                padding-top:8px!important;
                margin-top:13px!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li:last-child {
                margin-right:0;
                padding:0!important
                }
                body:not(.une-arche) #o-header.o-onei #o-ribbon>div.o-ribbon-hide-label .o-link:not(.o-keep-text) .o-link-text {
                display:none
                }
                body:not(.une-arche) #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink.o-identityLink-connected {
                overflow:hidden;
                max-width:15.625em;
                min-width:154px
                }
                body:not(.une-arche) #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink.o-identityLink-connected .o-link-text {
                max-width:calc(100% - 1.85714em - 10px)
                }
                @media (max-width:960px) {
                body:not(.une-arche) #o-header.o-onei #o-ribbon #o-ribbon-right .o-ribbon-search {
                margin-right:0
                }
                body:not(.une-arche) #o-header.o-onei #o-ribbon #o-ribbon-right .o-ribbon-search .o-search-form .o-search-label {
                display:none
                }
                body:not(.une-arche) #o-header.o-onei #o-ribbon #o-ribbon-right .o-ribbon-search .o-search-form:not(.o-active) .o-search-input {
                padding:0
                }
                }
                @media (max-width:479px) {
                body:not(.une-arche) #o-header.o-onei #o-ribbon #o-ribbon-right>ul>li {
                margin-left:5px
                }
                body:not(.une-arche) #o-header.o-onei #o-ribbon #o-ribbon-left>ul>li {
                margin-right:5px
                }
                }
                @media (max-width:960px) {
                body:not(.une-arche) #o-header.o-onei #o-ribbon.o-ribbon-search-active #o-ribbon-left>ul>li:not(.o-active),
                body:not(.une-arche) #o-header.o-onei #o-ribbon.o-ribbon-search-active #o-ribbon-right>ul>li:not(.o-active) {
                display:none
                }
                }
                @media (min-width:1200px) {
                body:not(.une-arche) #o-header.o-onei #o-ribbon #o-ribbon-left>ul>li {
                margin-right:25px
                }
                body:not(.une-arche) #o-header.o-onei #o-ribbon #o-ribbon-right>ul>li {
                margin-left:25px
                }
                }
                @media (max-width:1199px) {
                body:not(.une-arche) #o-header.o-onei #o-ribbon #o-ribbon-right .o-link:not(.o-keep-text) .o-link-text {
                display:none
                }
                }
                @media (max-width:1199px) and (max-width:479px) {
                body:not(.une-arche) #o-header.o-onei #o-ribbon #o-ribbon-right a.o-link.o-keep-text {
                min-width:0!important
                }
                body:not(.une-arche) #o-header.o-onei #o-ribbon #o-ribbon-right a.o-link.o-keep-text img {
                margin-right:0!important
                }
                body:not(.une-arche) #o-header.o-onei #o-ribbon #o-ribbon-right a.o-link.o-keep-text .o-link-text {
                display:none!important
                }
                }
                @media (max-width:960px) {
                body:not(.une-arche) #o-header.o-onei.o-responsive #o-service #o-service-content {
                flex-wrap:wrap
                }
                body:not(.une-arche) #o-header.o-onei.o-responsive #o-service #o-service-search .o-search-label:before {
                content:'Rechercher'
                }
                body:not(.une-arche) #o-header.o-onei.o-responsive #o-service #o-service-search,
                body:not(.une-arche) #o-header.o-onei.o-responsive #o-service #o-service-search .o-search-form .o-search-input {
                max-width:270px
                }
                }
                @media (max-width:1199px) {
                body:not(.une-arche) #o-header.o-onei.o-responsive #o-service #o-service-title {
                font-size:32px
                }
                }
                @-moz-keyframes showBurgerMenu {
                from {
                right:-250px
                }
                to {
                right:0
                }
                }
                @-webkit-keyframes showBurgerMenu {
                from {
                right:-250px
                }
                to {
                right:0
                }
                }
                @keyframes showBurgerMenu {
                from {
                right:-250px
                }
                to {
                right:0
                }
                }
                @-moz-keyframes hideBurgerMenu {
                from {
                right:0
                }
                to {
                right:-250px
                }
                }
                @-webkit-keyframes hideBurgerMenu {
                from {
                right:0
                }
                to {
                right:-250px
                }
                }
                @keyframes hideBurgerMenu {
                from {
                right:0
                }
                to {
                right:-250px
                }
                }
                @-moz-keyframes showBurgerMenuLayer {
                from {
                left:100%
                }
                to {
                left:0
                }
                }
                @-webkit-keyframes showBurgerMenuLayer {
                from {
                left:100%
                }
                to {
                left:0
                }
                }
                @keyframes showBurgerMenuLayer {
                from {
                left:100%
                }
                to {
                left:0
                }
                }
                @-moz-keyframes hideBurgerMenuLayer {
                from {
                left:0
                }
                to {
                left:100%
                }
                }
                @-webkit-keyframes hideBurgerMenuLayer {
                from {
                left:0
                }
                to {
                left:100%
                }
                }
                @keyframes hideBurgerMenuLayer {
                from {
                left:0
                }
                to {
                left:100%
                }
                }
                body:not(.une-arche) #o-header.o-onei .o-nav {
                position:relative
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity {
                order:2;
                margin-left:auto;
                margin-top:45px;
                min-width:155px
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity>div {
                font-size:14px;
                float:left;
                position:relative
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity :not(.o-nav-identity)#o-identityLink .o-link-text {
                margin-top:4px
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLink img {
                width:1.85714em;
                height:1.85714em;
                margin-top:8px;
                margin-right:10px;
                float:left;
                border:0;
                font-size:inherit
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLink img.o-avatar-default {
                -moz-border-radius:.92857em;
                -webkit-border-radius:.92857em;
                border-radius:.92857em
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLink .o-link-text {
                min-height:36px;
                height:auto;
                float:left;
                font-weight:400;
                display:block
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLink .o-link-text>span {
                display:block;
                min-height:36px
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLink.o-identityLink-connected .o-link-text {
                max-width:140px
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLink.o-identityLink-connected .o-link-text:active {
                color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLink .o-identity-link-title {
                font-weight:700;
                display:block;
                text-decoration:none;
                overflow:hidden;
                text-overflow:ellipsis;
                white-space:nowrap
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLink .o-identity-link-msg {
                font-size:12px;
                display:block;
                margin-top:-2px;
                font-weight:400
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLink.o-identityLink-notConnected .o-identity-link-title {
                color:#f16e00;
                max-width:initial;
                min-width:0
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLink:focus,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLink:hover {
                text-decoration:underline;
                color:#ccc
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLink:focus .o-link-icon,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLink:hover .o-link-icon {
                color:#ccc
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLink:focus .o-identity-link-msg,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLink:hover .o-identity-link-msg {
                text-decoration:underline;
                text-decoration-color:#ccc;
                color:#ccc
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLink:active {
                text-decoration:underline;
                color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLink:active .o-link-icon {
                color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLink:active .o-identity-link-msg {
                text-decoration:underline;
                text-decoration-color:#f16e00;
                color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity .o-ribbon-is-connected #o-identityLayer .o-identityLayer-link {
                margin-top:23px
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity .o-ribbon-is-neutral #o-identityLayer .o-identityLayer-button {
                margin-top:43px
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer {
                padding-top:15px
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-avatar {
                text-align:center;
                margin-bottom:0
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-avatar img {
                width:5em;
                height:5em
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-avatar img.o-avatar-default {
                -moz-border-radius:2.5em;
                -webkit-border-radius:2.5em;
                border-radius:2.5em
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-fullname {
                color:#000;
                font-weight:700;
                font-size:26px;
                text-align:center;
                word-wrap:break-word
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-detail {
                color:#000;
                text-align:center;
                font-size:14px
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-message {
                display:block;
                text-decoration:none;
                padding:18px 0 22px 0;
                margin:15px 0 0 0
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-message.o-msg-warning {
                background:#fffae6
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-message.o-msg-warning .o-link-icon::before {
                color:#FFCD0B!important
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-message.o-msg-info {
                background:rgba(65,154,249,.2)
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-message.o-msg-info .o-link-icon::before {
                color:#26b2ff!important
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-message a.o-msg {
                padding:0 30px;
                color:#000;
                font-weight:700;
                font-size:16px;
                text-decoration:none;
                display:flex;
                align-items:center
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-message a.o-msg .o-link-text {
                font-weight:700;
                color:#000
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-message a.o-msg .o-link-text:after {
                font-family:o-icomoon;
                content:'\e635';
                line-height:normal;
                color:#000;
                font-size:12px;
                padding:0 0 0 5px;
                text-decoration:none
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-message a.o-msg:focus .o-link-text,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-message a.o-msg:hover .o-link-text {
                text-decoration:underline;
                font-weight:700;
                color:#555;
                text-decoration-color:#555
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-message a.o-msg:focus .o-link-text:after,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-message a.o-msg:hover .o-link-text:after {
                color:#555;
                text-decoration:none
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-message a.o-msg:active .o-link-text {
                font-weight:700;
                color:#f16e00!important;
                text-decoration-color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-message a.o-msg:active .o-link-text:after {
                color:#f16e00;
                text-decoration:none
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-message a.o-msg .o-link-icon {
                line-height:normal
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-message a.o-msg .o-link-icon::before {
                font-size:32px;
                float:left;
                margin-left:-15px;
                padding:0 15px 0 0
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-message span.o-msg {
                padding:0 30px;
                color:#000;
                font-weight:700;
                font-size:16px;
                text-decoration:none;
                display:flex;
                align-items:center
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-message span.o-msg .o-link-text {
                font-weight:700;
                color:#000
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-message span.o-msg .o-link-icon {
                line-height:normal
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-message span.o-msg .o-link-icon::before {
                font-size:32px;
                float:left;
                margin-left:-15px;
                padding:0 15px 0 0
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-message span.o-msg.o-msg-warning .o-link-icon::before {
                color:#FFCD0B!important
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-message span.o-msg.o-msg-info .o-link-icon::before {
                color:#26b2ff!important
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-link {
                list-style-type:none;
                list-style-image:none
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-link li a {
                color:#000;
                text-decoration:none;
                display:inline-block;
                font-size:16px;
                font-weight:700;
                line-height:22px;
                padding:8px 0 9px;
                width:100%
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-link li a:visited {
                color:#000
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-link li a:focus {
                color:#555
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-link li a:hover {
                color:#555
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-link li a:active {
                color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-link li a:focus span,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-link li a:hover span {
                text-decoration:underline;
                text-decoration-color:#555
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-link li a:active span {
                text-decoration:underline;
                text-decoration-color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-link li a:after {
                font-family:o-icomoon;
                content:'\e635';
                line-height:22px;
                color:#f16e00;
                font-size:14px;
                float:right
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-button {
                list-style-type:none;
                list-style-image:none;
                margin-top:23px
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-button li {
                margin-bottom:30px
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-button li:last-child {
                margin-bottom:0
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-button li a {
                text-decoration:none;
                display:block;
                min-height:50px;
                line-height:50px;
                font-size:16px;
                font-weight:700;
                border:1px solid #000;
                text-align:center
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-button li a {
                background-color:transparent;
                border:1px solid #000;
                color:#000
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-button li a:focus,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-button li a:hover {
                background-color:transparent;
                border-color:#555;
                color:#555
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-button li a:active {
                background-color:transparent;
                border-color:#f16e00;
                color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer #o-footer-identiteConnected-layer .o-layer-data ul.o-identityLayer-link {
                margin-top:23px
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-not-auth .o-identityLayer-button {
                margin-top:15px
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-not-auth .o-identityLayer-button li a {
                background-color:#000;
                border:1px solid #000;
                color:#fff;
                padding:0 15px
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-not-auth .o-identityLayer-button li a:focus,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-not-auth .o-identityLayer-button li a:hover {
                background-color:#555;
                border-color:#555;
                color:#fff
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-not-auth .o-identityLayer-button li a:active {
                background-color:#f16e00;
                border-color:#f16e00;
                color:#fff
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-not-auth .o-identityLayer-button li a:disable {
                background-color:#ccc;
                border-color:#ccc;
                color:#fff
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-not-auth .o-identityLayer-button li:last-child {
                margin-bottom:0
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-not-auth .o-identityLayer-button+.o-identityLayer-link {
                padding-top:37px
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-not-auth .o-identityLayer-button+.o-identityLayer-msg {
                list-style:none;
                padding-top:7px;
                border-bottom:1px solid #ddd;
                text-align:center
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-not-auth .o-identityLayer-button+.o-identityLayer-msg li {
                padding-bottom:7px
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-not-auth .o-identityLayer-button+.o-identityLayer-msg li a {
                color:#000;
                font-size:14px;
                line-height:1.2;
                display:inline-block;
                text-decoration:none;
                border-bottom:1px solid none
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-not-auth .o-identityLayer-button+.o-identityLayer-msg li a .o-link-text span {
                line-height:inherit
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-not-auth .o-identityLayer-button+.o-identityLayer-msg li a:focus,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-not-auth .o-identityLayer-button+.o-identityLayer-msg li a:hover {
                color:#555
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-not-auth .o-identityLayer-button+.o-identityLayer-msg li a:focus .o-link-text span,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-not-auth .o-identityLayer-button+.o-identityLayer-msg li a:hover .o-link-text span {
                border-bottom:1px solid #555
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-not-auth .o-identityLayer-button+.o-identityLayer-msg li a:active .o-link-text span {
                color:#f16e00;
                border-bottom:1px solid #f16e00
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-not-auth .o-identityLayer-button+.o-identityLayer-msg+.o-identityLayer-link {
                padding-top:22px
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer {
                font-size:16px;
                min-width:18.75em;
                width:auto
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLink {
                height:3.42857em
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLink .o-identity-link-msg,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLink .o-identity-link-title {
                font-size:14px;
                margin-top:8px;
                font-weight:700
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLink.o-identityLink-connected {
                overflow-x:hidden;
                max-width:15.625em;
                min-width:154px
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLink.o-identityLink-connected .o-link-text {
                max-width:calc(100% - 1.85714em - 10px)
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-neutral .o-nav-identity #o-identityLayer .o-identityLayer-button {
                margin-top:43px
                }
                @media (max-width:960px) {
                body:not(.une-arche) #o-header.o-onei #o-nav-sticky {
                display:none
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-tunnel .o-logo {
                margin:15px 10px 15px 0!important
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper .o-logo {
                margin:5px 10px 15px 0!important
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-megaMenu-items {
                display:none
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-evenement-items.o-nav-container {
                padding:0;
                height:inherit
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-evenement-items.o-nav-container ul {
                display:flex;
                height:inherit
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-evenement-items.o-nav-container ul li {
                align-self:flex-end
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-evenement-items.o-nav-container ul li a {
                display:inline-block!important;
                vertical-align:bottom
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger {
                position:relative
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-megaMenu-items ul li .o-nav-burger-link a.o-link:focus .o-link-text span,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-megaMenu-items ul li .o-nav-burger-link a.o-link:hover .o-link-text span {
                color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger * {
                -moz-box-sizing:border-box;
                -webkit-box-sizing:border-box;
                box-sizing:border-box
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger.o-nav-megaMenu-items-closing .o-nav-container .o-nav-burger-itemMargin>div,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger.o-nav-megaMenu-items-closing .o-nav-container .o-nav-elt {
                -moz-animation:hideBurgerMenu .3s ease-out forwards;
                -webkit-animation:hideBurgerMenu .3s ease-out forwards;
                animation:hideBurgerMenu .3s ease-out forwards
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger.o-nav-megaMenu-items-closing .o-nav-container .o-layer[data-state=o-active] .o-navigation-layer-data {
                -moz-animation:hideBurgerMenuLayer .3s ease-out forwards;
                -webkit-animation:hideBurgerMenuLayer .3s ease-out forwards;
                animation:hideBurgerMenuLayer .3s ease-out forwards
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger.o-nav-megaMenu-items-closing .o-nav-container>ul {
                box-shadow:none!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger.opening .o-nav-megaMenu-items>ul,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger.opening-inside .o-nav-megaMenu-items>ul {
                box-shadow:none
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger.o-layer[data-state=o-active].o-nav-burgerMenu-layer-closing .o-navigation-layer-data {
                -moz-animation:hideBurgerMenuLayer .3s ease-out forwards;
                -webkit-animation:hideBurgerMenuLayer .3s ease-out forwards;
                animation:hideBurgerMenuLayer .3s ease-out forwards
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul {
                position:absolute;
                right:0;
                z-index:9995;
                list-style-type:none;
                list-style-image:none;
                overflow:hidden
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li {
                font-size:16px;
                min-height:3.75em;
                height:auto;
                float:right;
                clear:both
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-nav-burger-link {
                -moz-animation:showBurgerMenu .3s ease-out forwards;
                -webkit-animation:showBurgerMenu .3s ease-out forwards;
                animation:showBurgerMenu .3s ease-out forwards;
                min-height:3.75em;
                font-size:16px;
                height:auto;
                width:250px;
                float:right;
                clear:right;
                position:relative;
                z-index:9995
                }
                }
                @media (max-width:960px) and (max-width:479px) {
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-nav-burger-link {
                width:160px;
                height:auto
                }
                }
                @media (max-width:960px) {
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-nav-burger-itemMargin {
                height:4.375em;
                font-size:16px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-nav-burger-itemMargin>div {
                height:4.375em;
                font-size:16px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li:last-child {
                min-height:4.375em;
                font-size:16px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-link {
                height:inherit
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-link>span.o-link-text {
                margin-top:0;
                text-decoration:none
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-link>span.o-link-text span {
                text-decoration:none
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-nav-burger-itemMargin>div,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-nav-elt {
                -moz-animation:showBurgerMenu .3s ease-out forwards;
                -webkit-animation:showBurgerMenu .3s ease-out forwards;
                animation:showBurgerMenu .3s ease-out forwards;
                color:#fff;
                font-size:16px;
                font-weight:700;
                width:250px;
                display:block;
                padding:18px 30px!important;
                line-height:1.5em;
                text-decoration:none;
                right:-250px;
                position:absolute;
                background-color:#000;
                min-height:3.75em
                }
                }
                @media (max-width:960px) and (max-width:479px) {
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-nav-burger-itemMargin>div,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-nav-elt {
                width:160px
                }
                }
                @media (max-width:960px) {
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-nav-burger-itemMargin>div:hover .o-link-text,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-nav-elt:hover .o-link-text {
                border:0!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-nav-burger-itemMargin>div:focus,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-nav-elt:focus {
                outline-offset:-3px;
                outline:solid
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-nav-burger-itemMargin>div .o-link-text,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-nav-elt .o-link-text {
                margin:0!important;
                padding:0!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-nav-burger-itemMargin>div .o-link-text span,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-nav-elt .o-link-text span {
                margin:0!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-link,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-nav-elt,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-nav-megaMenu {
                cursor:pointer
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-link.o-active,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-link:focus,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-link:hover,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-link[data-state=o-active],
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-nav-elt.o-active,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-nav-elt:focus,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-nav-elt:hover,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-nav-elt[data-state=o-active],
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-nav-megaMenu.o-active,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-nav-megaMenu:focus,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-nav-megaMenu:hover,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-nav-megaMenu[data-state=o-active] {
                color:#f16e00;
                background-color:#fff
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-link .o-link-text span,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-nav-elt .o-link-text span,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-nav-megaMenu .o-link-text span {
                margin-bottom:0
                }
                }
                @media (max-width:960px) and (max-width:479px) {
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-link,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-nav-elt,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-nav-megaMenu {
                position:relative
                }
                }
                @media (max-width:960px) {
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-nav-burger-itemMargin.o-active,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-nav-burger-itemMargin:hover {
                cursor:default;
                color:#fff;
                background-color:#000
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer {
                -moz-box-shadow:none;
                -webkit-box-shadow:none;
                box-shadow:none;
                background-color:transparent;
                width:100%;
                height:100%;
                top:0;
                right:calc(-100% + 500px);
                left:0;
                padding:0;
                border-top:0;
                z-index:9994;
                overflow:hidden
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer[data-state=o-active] {
                visibility:visible
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer[data-state=o-active] .o-navigation-layer-data {
                -moz-animation:showBurgerMenuLayer .3s ease-out forwards;
                -webkit-animation:showBurgerMenuLayer .3s ease-out forwards;
                animation:showBurgerMenuLayer .3s ease-out forwards
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer[data-state=o-active].o-layer[data-state=o-active].o-nav-burgerMenu-layer-closing .o-navigation-layer-data {
                -moz-animation:hideBurgerMenuLayer .3s ease-out forwards;
                -webkit-animation:hideBurgerMenuLayer .3s ease-out forwards;
                animation:hideBurgerMenuLayer .3s ease-out forwards
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data {
                left:100%;
                position:absolute;
                background-color:#fff;
                width:calc(100% - 250px);
                padding:0 30px 30px calc(1.5625% + 15px)
                }
                }
                @media (max-width:960px) and (max-width:479px) {
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-data {
                width:calc(100% - 150px)
                }
                }
                @media (max-width:960px) {
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer ul {
                list-style-type:none;
                list-style-image:none
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-columns {
                justify-content:space-between;
                flex-wrap:wrap;
                align-items:stretch;
                columns:2;
                column-fill:balance;
                padding-bottom:30px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-columns.o-navigation-layer-column1 {
                columns:1
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-columns .o-navigation-layer-img {
                left:0!important;
                top:unset!important;
                right:unset!important;
                margin-top:30px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-columns .o-navigation-layer-img a,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-columns .o-navigation-layer-img img {
                display:block;
                max-width:100%;
                border:0
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-columns .o-megamenu-link {
                font-size:16px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-columns .o-navigation-layer-column .o-megamenu-item,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-columns .o-navigation-layer-column .o-megamenu-more {
                font-size:14px
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-columns .o-navigation-layer-column .o-megamenu-category-block .o-megamenu-link.o-megamenu-title .o-megamenu-subtitle,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-columns .o-navigation-layer-column .o-megamenu-category-block .o-megamenu-link.o-megamenu-title a.o-megamenu-item {
                font-size:14px!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-columns .o-navigation-layer-category .o-megamenu-item,
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-columns .o-navigation-layer-category .o-megamenu-more {
                font-size:14px
                }
                body:not(.une-arche) #o-header.o-onei .o-nav-evenement-image-container a {
                display:inline-block!important;
                margin:0 10px 0!important;
                height:auto!important;
                padding:0!important;
                position:relative
                }
                body:not(.une-arche) #o-header.o-onei .o-nav-evenement-image-container a:focus::after,
                body:not(.une-arche) #o-header.o-onei .o-nav-evenement-image-container a:hover::after {
                position:absolute;
                bottom:0;
                content:'';
                display:block;
                border-bottom:3px solid #f16e00;
                width:100%
                }
                body:not(.une-arche) #o-header.o-onei .o-nav-wrapper .o-nav-container {
                float:left
                }
                body:not(.une-arche) #o-header.o-onei a.o-nav-burger {
                display:block;
                position:relative;
                float:right;
                top:25px;
                width:2.1875em;
                height:1.625em;
                cursor:pointer;
                font-size:16px;
                background-color:unset;
                border:0;
                margin-left:15px
                }
                body:not(.une-arche) #o-header.o-onei a.o-nav-burger:hover span,
                body:not(.une-arche) #o-header.o-onei a.o-nav-burger:hover span:after,
                body:not(.une-arche) #o-header.o-onei a.o-nav-burger:hover span:before {
                background-color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei a.o-nav-burger:active,
                body:not(.une-arche) #o-header.o-onei a.o-nav-burger:focus {
                outline:1px dotted #fff;
                outline-offset:3px
                }
                body:not(.une-arche) #o-header.o-onei a.o-nav-burger:active span,
                body:not(.une-arche) #o-header.o-onei a.o-nav-burger:active span:after,
                body:not(.une-arche) #o-header.o-onei a.o-nav-burger:active span:before,
                body:not(.une-arche) #o-header.o-onei a.o-nav-burger:focus span,
                body:not(.une-arche) #o-header.o-onei a.o-nav-burger:focus span:after,
                body:not(.une-arche) #o-header.o-onei a.o-nav-burger:focus span:before {
                background-color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei a.o-nav-burger span,
                body:not(.une-arche) #o-header.o-onei a.o-nav-burger span:after,
                body:not(.une-arche) #o-header.o-onei a.o-nav-burger span:before {
                content:'';
                position:absolute;
                left:0;
                display:block;
                text-indent:-9999px;
                background-color:#fff;
                height:.25em;
                width:100%;
                font-size:16px
                }
                body:not(.une-arche) #o-header.o-onei a.o-nav-burger span:before {
                top:11px
                }
                body:not(.une-arche) #o-header.o-onei a.o-nav-burger span:after {
                top:22px
                }
                body:not(.une-arche) #o-header.o-onei a.o-nav-burger.open {
                height:30px
                }
                body:not(.une-arche) #o-header.o-onei a.o-nav-burger.open span {
                transform:rotate(45deg);
                top:50%
                }
                body:not(.une-arche) #o-header.o-onei a.o-nav-burger.open span:before {
                background-color:transparent;
                top:0!important
                }
                body:not(.une-arche) #o-header.o-onei a.o-nav-burger.open span:after {
                top:0;
                transform:rotate(-90deg)
                }
                }
                @media (max-width:735px) {
                body:not(.une-arche) #o-header.o-onei #o-nav-burger .o-nav-container>ul>li .o-layer .o-navigation-layer-columns {
                columns:1!important
                }
                }
                @media (min-width:961px) {
                body:not(.une-arche) #o-header.o-onei .o-nav .o-navigation-layer-columns {
                display:flex;
                justify-content:space-between;
                flex-wrap:wrap;
                align-items:stretch;
                list-style:none
                }
                body:not(.une-arche) #o-header.o-onei .o-nav.o-nav-space-lg .o-nav-container .o-nav-elt,
                body:not(.une-arche) #o-header.o-onei .o-nav.o-nav-space-lg .o-nav-container .o-nav-megaMenu {
                padding:0 18px
                }
                body:not(.une-arche) #o-header.o-onei .o-nav.o-nav-space-md .o-nav-container .o-nav-elt,
                body:not(.une-arche) #o-header.o-onei .o-nav.o-nav-space-md .o-nav-container .o-nav-megaMenu {
                padding:0 15px
                }
                body:not(.une-arche) #o-header.o-onei .o-nav.o-nav-space-sm .o-nav-container .o-nav-elt,
                body:not(.une-arche) #o-header.o-onei .o-nav.o-nav-space-sm .o-nav-container .o-nav-megaMenu {
                padding:0 5px
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper {
                display:-webkit-flex;
                display:flex
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container.o-nav-evenement-items .o-link-text span {
                margin-bottom:2px;
                display:block;
                font-weight:700
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-tunnel .o-nav-container>ul {
                min-height:60px!important
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container {
                float:left;
                display:flex
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul {
                display:-webkit-flex;
                display:flex;
                flex:0 1 auto;
                flex-shrink:1;
                min-height:70px
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul>li {
                -moz-align-self:flex-end;
                -moz-flex:0 1 auto;
                -moz-flex-shrink:1;
                -webkit-align-self:flex-end;
                -webkit-flex:0 1 auto;
                -webkit-flex-shrink:1;
                -ms-align-self:flex-end;
                -ms-flex:0 1 auto;
                -ms-flex-shrink:1;
                -webkit-align-self:flex-end;
                -webkit-flex:0 1 auto;
                -webkit-flex-shrink:1;
                align-self:flex-end;
                flex:0 1 auto;
                flex-shrink:1;
                -webkit-align-self:flex-end;
                align-self:flex-end;
                flex-shrink:1
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul>li .o-nav-elt,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul>li .o-nav-megaMenu {
                color:#fff;
                font-size:14px;
                font-weight:700;
                text-align:center;
                cursor:pointer;
                display:inline-block
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul>li .o-nav-elt.o-on .o-link-text,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul>li .o-nav-megaMenu.o-on .o-link-text {
                color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul>li .o-nav-elt .o-link-text,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul>li .o-nav-megaMenu .o-link-text {
                padding:10px 0;
                display:block;
                margin-bottom:3px
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul>li .o-nav-elt .o-link-text span,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul>li .o-nav-megaMenu .o-link-text span {
                margin-bottom:2px;
                display:block;
                font-weight:700
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul>li .o-nav-elt.o-on .o-link-text,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul>li .o-nav-megaMenu.o-on .o-link-text {
                margin:0;
                border-bottom:3px solid #f16e00;
                color:#f16e00
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul>li .o-nav-elt[data-state=o-active] .o-link-text,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul>li .o-nav-megaMenu[data-state=o-active] .o-link-text {
                margin:0;
                border-bottom:3px solid #f16e00
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul>li .o-layer {
                margin:auto;
                width:100%;
                max-width:1440px;
                left:0;
                right:0;
                border:none;
                padding-bottom:20px
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul>li .o-layer .o-navigation-layer-data {
                margin:0 calc(3.125% + 15px)
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul>li .o-layer[data-state=o-active] {
                visibility:visible!important
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul>li .o-layer[data-state=o-inactive] {
                visibility:hidden!important
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-items .o-nav-burger {
                display:none
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-evenement-image-container a {
                display:inline-block!important;
                margin:0 10px!important;
                height:auto!important;
                padding:0!important;
                position:relative
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-evenement-image-container a:focus::after,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-evenement-image-container a:hover::after {
                position:absolute;
                bottom:0;
                content:'';
                display:block;
                border-bottom:3px solid #f16e00;
                width:100%
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-navigation-layer-title {
                font-size:16px
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-megamenu-link {
                font-size:16px
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-megamenu-link.o-megamenu-title .o-megamenu-item,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-megamenu-link.o-megamenu-title .o-megamenu-subtitle {
                font-size:14px
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-megamenu-item,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-megamenu-lastitem,
                body:not(.une-arche) #o-header.o-onei .o-nav .o-megamenu-more {
                font-size:14px
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-megamenu-item .o-megamenu-infoblock {
                font-size:14px!important
                }
                body:not(.une-arche) #o-header.o-onei .o-nav .o-nav-megaMenu-items {
                display:block
                }
                }
                @media (min-width:1200px) {
                body:not(.une-arche) #o-header.o-onei #o-nav.o-nav-space-lg .o-logo {
                margin-right:25px!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav.o-nav-space-lg .o-nav-elt,
                body:not(.une-arche) #o-header.o-onei #o-nav.o-nav-space-lg .o-nav-megaMenu {
                padding:0 25px!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav.o-nav-space-md .o-logo {
                margin-right:22px!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav.o-nav-space-md .o-nav-elt,
                body:not(.une-arche) #o-header.o-onei #o-nav.o-nav-space-md .o-nav-megaMenu {
                padding:0 22px!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav.o-nav-space-sm .o-logo {
                margin-right:20px!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav.o-nav-space-sm .o-nav-elt,
                body:not(.une-arche) #o-header.o-onei #o-nav.o-nav-space-sm .o-nav-megaMenu {
                padding:0 20px!important
                }
                body:not(.une-arche) #o-header.o-onei .o-nav-elt,
                body:not(.une-arche) #o-header.o-onei .o-nav-megaMenu {
                font-size:16px!important
                }
                body:not(.une-arche) #o-header.o-onei .o-nav-evenement-items .o-link {
                font-size:16px!important;
                padding:0 22px!important
                }
                body:not(.une-arche) #o-header.o-onei .o-nav-wrapper .o-navigation-layer-title {
                font-size:18px!important
                }
                body:not(.une-arche) #o-header.o-onei .o-nav-wrapper .o-navigation-layer-data {
                margin:0 calc(3.125% + 108px)!important
                }
                body:not(.une-arche) #o-header.o-onei .o-nav-wrapper .o-megamenu-link {
                font-size:19px!important
                }
                body:not(.une-arche) #o-header.o-onei .o-nav-wrapper .o-megamenu-link.o-megamenu-title .o-megamenu-item,
                body:not(.une-arche) #o-header.o-onei .o-nav-wrapper .o-megamenu-link.o-megamenu-title .o-megamenu-subtitle {
                font-size:16px!important
                }
                body:not(.une-arche) #o-header.o-onei .o-nav-wrapper .o-navigation-layer-category .o-megamenu-item,
                body:not(.une-arche) #o-header.o-onei .o-nav-wrapper .o-navigation-layer-category .o-megamenu-lastitem,
                body:not(.une-arche) #o-header.o-onei .o-nav-wrapper .o-navigation-layer-category .o-megamenu-more {
                font-size:16px!important
                }
                body:not(.une-arche) #o-header.o-onei .o-nav-wrapper .o-megamenu-item a.o-megamenu-infoblock {
                font-size:16px!important
                }
                body:not(.une-arche) #o-header.o-onei #o-nav-sticky .o-nav-wrapper .o-navigation-layer-data {
                margin:0 calc(3.125% + 88px)!important
                }
                }
                body.une-arche #o-header.o-onei #o-identityLink.o-identityLink-connected .o-link-text {
                max-width:140px!important
                }
                body.une-arche #o-header.o-onei #o-ribbon {
                min-height:40px;
                height:auto
                }
                body.une-arche #o-header.o-onei #o-ribbon>div {
                min-height:40px;
                height:auto
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-ribbon-left {
                float:left
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-ribbon-left>ul>li {
                margin-right:10px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-ribbon-left>ul>li:first-child {
                margin-left:-10px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-ribbon-left>ul>li:last-child {
                margin-right:0!important
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-ribbon-right {
                float:right;
                font-size:16px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-ribbon-right>ul>li {
                margin-left:10px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-ribbon-right>ul>li:first-child {
                margin-left:0!important
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-ribbon-right>ul>li:last-child {
                margin-right:-10px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-ribbon-right :not(.o-nav-identity)#o-identityLink .o-link-text {
                margin-top:4px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink img {
                width:1.85714em;
                height:1.85714em;
                margin-top:8px;
                margin-right:10px;
                float:left;
                border:0;
                font-size:inherit
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink img.o-avatar-default {
                -moz-border-radius:.92857em;
                -webkit-border-radius:.92857em;
                border-radius:.92857em
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink .o-link-text {
                min-height:36px;
                height:auto;
                float:left;
                font-weight:400;
                display:block
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink .o-link-text>span {
                display:block;
                min-height:36px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink.o-identityLink-connected .o-link-text {
                max-width:140px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink.o-identityLink-connected .o-link-text:active {
                color:#f16e00
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink .o-identity-link-title {
                font-weight:700;
                display:block;
                text-decoration:none;
                overflow:hidden;
                text-overflow:ellipsis;
                white-space:nowrap
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink .o-identity-link-msg {
                font-size:12px;
                display:block;
                margin-top:-2px;
                font-weight:400
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink.o-identityLink-notConnected .o-identity-link-title {
                color:#f16e00;
                max-width:initial;
                min-width:0
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink:focus,
                body.une-arche #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink:hover {
                text-decoration:underline;
                color:#ccc
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink:focus .o-link-icon,
                body.une-arche #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink:hover .o-link-icon {
                color:#ccc
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink:focus .o-identity-link-msg,
                body.une-arche #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink:hover .o-identity-link-msg {
                text-decoration:underline;
                text-decoration-color:#ccc;
                color:#ccc
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink:active {
                text-decoration:underline;
                color:#f16e00
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink:active .o-link-icon {
                color:#f16e00
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-ribbon-right #o-identityLink:active .o-identity-link-msg {
                text-decoration:underline;
                text-decoration-color:#f16e00;
                color:#f16e00
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-ribbon-left>ul,
                body.une-arche #o-header.o-onei #o-ribbon #o-ribbon-right>ul {
                list-style-type:none;
                list-style-image:none;
                clear:both
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-ribbon-left>ul>li,
                body.une-arche #o-header.o-onei #o-ribbon #o-ribbon-right>ul>li {
                font-size:16px;
                float:left;
                height:2.5em;
                position:relative
                }
                body.une-arche #o-header.o-onei #o-ribbon>div.o-ribbon-hide-label .o-link:not(.o-keep-text) .o-link-text {
                display:none
                }
                body.une-arche #o-header.o-onei #o-ribbon .o-notif-badge {
                -moz-border-radius:1em;
                -webkit-border-radius:1em;
                border-radius:1em;
                -moz-box-shadow:0 0 0 1px #000;
                -webkit-box-shadow:0 0 0 1px #000;
                box-shadow:0 0 0 1px #000;
                background:#e70002;
                font-weight:700;
                min-width:1.33333em;
                height:1.33333em;
                line-height:16px;
                color:#fff;
                font-size:12px;
                padding:0 4px;
                text-align:center;
                display:inline-block
                }
                body.une-arche #o-header.o-onei #o-ribbon .o-link .o-notif-badge {
                -moz-transform:translateX(50%);
                -ms-transform:translateX(50%);
                -webkit-transform:translateX(50%);
                transform:translateX(50%);
                position:absolute;
                right:0;
                top:3px
                }
                body.une-arche #o-header.o-onei #o-ribbon .o-layer-item .o-notif-badge {
                -moz-transform:translate(50%,-50%);
                -ms-transform:translate(50%,-50%);
                -webkit-transform:translate(50%,-50%);
                transform:translate(50%,-50%);
                position:absolute;
                right:0;
                top:0;
                z-index:1
                }
                body.une-arche #o-header.o-onei #o-ribbon .o-ribbon-is-connected #o-identityLayer .o-identityLayer-link {
                margin-top:23px
                }
                body.une-arche #o-header.o-onei #o-ribbon .o-ribbon-is-neutral #o-identityLayer .o-identityLayer-button {
                margin-top:43px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer {
                padding-top:15px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-avatar {
                text-align:center;
                margin-bottom:0
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-avatar img {
                width:5em;
                height:5em
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-avatar img.o-avatar-default {
                -moz-border-radius:2.5em;
                -webkit-border-radius:2.5em;
                border-radius:2.5em
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-fullname {
                color:#000;
                font-weight:700;
                font-size:26px;
                text-align:center;
                word-wrap:break-word
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-detail {
                color:#000;
                text-align:center;
                font-size:14px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message {
                display:block;
                text-decoration:none;
                padding:18px 0 22px 0;
                margin:15px 0 0 0
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message.o-msg-warning {
                background:#fffae6
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message.o-msg-warning .o-link-icon::before {
                color:#FFCD0B!important
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message.o-msg-info {
                background:rgba(65,154,249,.2)
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message.o-msg-info .o-link-icon::before {
                color:#26b2ff!important
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message a.o-msg {
                padding:0 30px;
                color:#000;
                font-weight:700;
                font-size:16px;
                text-decoration:none;
                display:flex;
                align-items:center
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message a.o-msg .o-link-text {
                font-weight:700;
                color:#000
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message a.o-msg .o-link-text:after {
                font-family:o-icomoon;
                content:'\e635';
                line-height:normal;
                color:#000;
                font-size:12px;
                padding:0 0 0 5px;
                text-decoration:none
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message a.o-msg:focus .o-link-text,
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message a.o-msg:hover .o-link-text {
                text-decoration:underline;
                font-weight:700;
                color:#555;
                text-decoration-color:#555
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message a.o-msg:focus .o-link-text:after,
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message a.o-msg:hover .o-link-text:after {
                color:#555;
                text-decoration:none
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message a.o-msg:active .o-link-text {
                font-weight:700;
                color:#f16e00!important;
                text-decoration-color:#f16e00
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message a.o-msg:active .o-link-text:after {
                color:#f16e00;
                text-decoration:none
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message a.o-msg .o-link-icon {
                line-height:normal
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message a.o-msg .o-link-icon::before {
                font-size:32px;
                float:left;
                margin-left:-15px;
                padding:0 15px 0 0
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message span.o-msg {
                padding:0 30px;
                color:#000;
                font-weight:700;
                font-size:16px;
                text-decoration:none;
                display:flex;
                align-items:center
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message span.o-msg .o-link-text {
                font-weight:700;
                color:#000
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message span.o-msg .o-link-icon {
                line-height:normal
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message span.o-msg .o-link-icon::before {
                font-size:32px;
                float:left;
                margin-left:-15px;
                padding:0 15px 0 0
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message span.o-msg.o-msg-warning .o-link-icon::before {
                color:#FFCD0B!important
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-message span.o-msg.o-msg-info .o-link-icon::before {
                color:#26b2ff!important
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-link {
                list-style-type:none;
                list-style-image:none
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-link li a {
                color:#000;
                text-decoration:none;
                display:inline-block;
                font-size:16px;
                font-weight:700;
                line-height:22px;
                padding:8px 0 9px;
                width:100%
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-link li a:visited {
                color:#000
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-link li a:focus {
                color:#555
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-link li a:hover {
                color:#555
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-link li a:active {
                color:#f16e00
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-link li a:focus span,
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-link li a:hover span {
                text-decoration:underline;
                text-decoration-color:#555
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-link li a:active span {
                text-decoration:underline;
                text-decoration-color:#f16e00
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-link li a:after {
                font-family:o-icomoon;
                content:'\e635';
                line-height:22px;
                color:#f16e00;
                font-size:14px;
                float:right
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-button {
                list-style-type:none;
                list-style-image:none;
                margin-top:23px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-button li {
                margin-bottom:30px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-button li:last-child {
                margin-bottom:0
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-button li a {
                text-decoration:none;
                display:block;
                min-height:50px;
                line-height:50px;
                font-size:16px;
                font-weight:700;
                border:1px solid #000;
                text-align:center
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-button li a {
                background-color:transparent;
                border:1px solid #000;
                color:#000
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-button li a:focus,
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-button li a:hover {
                background-color:transparent;
                border-color:#555;
                color:#555
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-identityLayer-button li a:active {
                background-color:transparent;
                border-color:#f16e00;
                color:#f16e00
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer #o-footer-identiteConnected-layer .o-layer-data ul.o-identityLayer-link {
                margin-top:23px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button {
                margin-top:15px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button li a {
                background-color:#000;
                border:1px solid #000;
                color:#fff;
                padding:0 15px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button li a:focus,
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button li a:hover {
                background-color:#555;
                border-color:#555;
                color:#fff
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button li a:active {
                background-color:#f16e00;
                border-color:#f16e00;
                color:#fff
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button li a:disable {
                background-color:#ccc;
                border-color:#ccc;
                color:#fff
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button li:last-child {
                margin-bottom:0
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button+.o-identityLayer-link {
                padding-top:37px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button+.o-identityLayer-msg {
                list-style:none;
                padding-top:7px;
                border-bottom:1px solid #ddd;
                text-align:center
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button+.o-identityLayer-msg li {
                padding-bottom:7px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button+.o-identityLayer-msg li a {
                color:#000;
                font-size:14px;
                line-height:1.2;
                display:inline-block;
                text-decoration:none;
                border-bottom:1px solid none
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button+.o-identityLayer-msg li a .o-link-text span {
                line-height:inherit
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button+.o-identityLayer-msg li a:focus,
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button+.o-identityLayer-msg li a:hover {
                color:#555
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button+.o-identityLayer-msg li a:focus .o-link-text span,
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button+.o-identityLayer-msg li a:hover .o-link-text span {
                border-bottom:1px solid #555
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button+.o-identityLayer-msg li a:active .o-link-text span {
                color:#f16e00;
                border-bottom:1px solid #f16e00
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer .o-not-auth .o-identityLayer-button+.o-identityLayer-msg+.o-identityLayer-link {
                padding-top:22px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLayer {
                font-size:16px;
                min-width:18.75em;
                width:auto
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-lanceurLayer .o-layer-item {
                float:left;
                color:#000;
                width:6.875em;
                min-height:110px;
                margin:5px 0 0 0;
                list-style-type:none
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-lanceurLayer .o-layer-item a {
                display:block;
                position:relative;
                height:100%;
                color:#000;
                border:2px solid #fff;
                font-size:16px;
                font-weight:700;
                text-decoration:none;
                text-align:center;
                padding-top:20px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-lanceurLayer .o-layer-item a:hover {
                border-color:#ddd
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-lanceurLayer .o-layer-item a .o-link-icon {
                width:2.5em;
                height:2.5em;
                position:relative;
                margin:0 auto;
                display:block;
                right:0
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-lanceurLayer .o-layer-item a .o-link-icon::before {
                font-size:40px;
                line-height:1em
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-lanceurLayer .o-layer-item a .o-link-text {
                display:table;
                width:100%;
                text-align:justify;
                margin:0 auto;
                height:42px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-lanceurLayer .o-layer-item a .o-link-text span {
                display:table-cell;
                text-align:center;
                vertical-align:middle;
                width:110px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-lanceurLayer .o-layer-item:nth-child(3n+1) {
                clear:left
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-lanceurLayer .o-layer-item:nth-child(3n+2) {
                margin:5px 5px 0 5px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-lanceurLayer .o-layer-item:nth-child(-n+3) {
                margin-top:0
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-lanceurLayer .o-layer-item:hover {
                background:#ddd
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-lanceurLayer .o-layer-item .o-notif-badge {
                -moz-box-shadow:0 0 0 0 #333;
                -webkit-box-shadow:0 0 0 0 #333;
                box-shadow:0 0 0 0 #333
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-lanceurLayer {
                max-width:calc(100vw - 2em)
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer {
                width:31.25em;
                padding:0 0 30px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer:not([data-sondage=nq]) {
                padding:0
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-title {
                position:relative;
                padding:0 30px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer.o-notif-loaded:not(.o-notif-nomessages) .o-layer-data .o-notifLayer-container:after,
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer.o-notif-loaded:not(.o-notif-nomessages) .o-layer-data .o-notifLayer-container:before {
                content:"";
                border-top:1px solid #ddd;
                position:absolute;
                right:30px;
                left:30px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer.o-notif-loaded:not(.o-notif-nomessages) .o-layer-data .o-notifLayer-container:after {
                bottom:30px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter {
                position:relative;
                padding:5px 30px 14px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter {
                font-family:o-HelveticaNeue,Helvetica,Arial,sans-serif;
                font-size:14px;
                font-weight:700;
                height:2.28571em;
                line-height:1;
                transition:none!important;
                background:0 0;
                -moz-border-radius:2.28571em;
                -webkit-border-radius:2.28571em;
                border-radius:2.28571em;
                border:1px solid #ccc;
                outline:0;
                padding:5px 25px 7px
                }
                @media (hover:hover) and (pointer:fine) {
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter:hover {
                background-color:transparent;
                border-color:#555;
                color:#555;
                padding:5px 25px 7px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter:active:hover,
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter[data-selected]:hover {
                background-color:transparent;
                border-color:#555
                }
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter[data-selected] {
                background-color:transparent;
                border:2px solid #f16e00;
                color:#000;
                font-weight:700;
                padding:5px 20px 7px 8px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter[data-selected]:before {
                content:'\e810';
                font-family:o-icomoon;
                font-size:12px;
                margin:0;
                padding:0 8px 0 0;
                color:#f16e00
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter[data-selected]:focus,
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter[data-selected]:hover {
                background-color:transparent;
                border:2px solid #f16e00;
                color:#000;
                font-weight:700;
                padding:5px 20px 7px 8px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter[data-selected]:focus:before,
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter[data-selected]:hover:before {
                content:'\e810';
                font-family:o-icomoon;
                font-size:12px;
                margin:0;
                padding:0 8px 0 0;
                color:#f16e00
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter[data-selected]:active {
                border:2px solid #f16e00!important;
                color:#555;
                font-weight:700;
                padding:6px 21px 8px 9px!important;
                height:2.28571em;
                line-height:1
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter[data-selected]:active:before {
                content:'\e810';
                font-family:o-icomoon;
                font-size:12px;
                margin:0;
                padding:0 8px 0 0;
                color:#555
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter:focus,
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter:hover {
                line-height:1;
                background-color:transparent;
                border:1px solid #f16e00;
                color:#555;
                font-weight:700;
                padding:5px 25px 7px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter:focus:before,
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter:hover:before {
                color:#000
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter:active {
                line-height:1;
                background-color:transparent;
                border:2px solid #f16e00;
                color:#000;
                font-weight:700;
                padding:5px 20px 7px 8px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter:active:before {
                content:'\e810';
                font-family:o-icomoon;
                font-size:12px;
                margin:0;
                padding:0 8px 0 0;
                color:#f16e00
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-filter .o-filter:not(:last-child) {
                margin:0 15px 0 0
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul {
                margin:0;
                list-style-type:none;
                font-size:16px;
                width:100%;
                overflow-x:hidden;
                overflow-y:auto
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul::-webkit-scrollbar {
                width:10px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul::-webkit-scrollbar-track {
                background:#fff
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul::-webkit-scrollbar-thumb {
                background:#ddd
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item {
                outline-offset:-1px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link:focus span.o-notif-text,
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link:hover span.o-notif-text {
                border-color:#ddd;
                text-decoration:underline;
                text-decoration-color:#555
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link:active span.o-notif-text {
                border-color:#ddd;
                text-decoration:underline;
                text-decoration-color:#f16e00
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item:not(:last-child) .o-notif-link:after {
                content:"";
                border-bottom:1px solid #ddd;
                position:absolute;
                right:30px;
                bottom:0;
                left:30px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link {
                display:table;
                text-decoration:none;
                color:#000;
                padding:0 30px 0;
                position:relative
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link:active {
                color:#f16e00!important
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link:active span.o-notif-text:active {
                color:#f16e00!important
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link:focus,
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link:hover {
                color:#555
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link:focus span.o-notif-text:focus,
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link:focus span.o-notif-text:hover,
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link:hover span.o-notif-text:focus,
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link:hover span.o-notif-text:hover {
                color:#555
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link.o-notif-new {
                font-weight:700
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link:visited {
                font-weight:400
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link .o-notif-object {
                max-width:40px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link .o-notif-icon {
                padding:15px 15px 15px 0;
                display:table-cell;
                vertical-align:middle;
                width:2.5em
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link .o-notif-icon:before {
                font-size:16px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link .o-notif-icon span:before {
                height:1em;
                width:1em;
                font-size:2.5em;
                line-height:1em
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link .o-notif-text {
                line-height:1.38;
                padding:10px 0;
                display:table-cell;
                vertical-align:middle;
                text-align:left;
                margin-left:40px;
                font-size:16px;
                -webkit-text-size-adjust:100%
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link .o-notif-text .o-notif-contrat {
                color:#555;
                font-size:14px;
                font-weight:400;
                display:block
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item:last-child a {
                border-bottom:none
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notif-message-empty-unread {
                padding:0 30px 0
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notif-message-empty-unread .o-notif-message-container {
                display:block;
                width:100%;
                text-decoration:none;
                padding:20px 5px 20px 55px;
                margin-top:22px;
                position:relative;
                background:#e9f7ff;
                color:#000!important;
                font-weight:700
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notif-message-empty-unread .o-notif-message-container:before {
                content:'';
                display:block;
                position:absolute;
                left:0;
                top:-22px;
                width:100%;
                height:1px;
                background-color:#ddd
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notif-message-empty-unread .o-notif-message-container:after {
                font-family:o-icomoon;
                content:'\e805';
                line-height:normal;
                color:#26b2ff;
                font-size:32px;
                padding:0;
                text-decoration:none;
                position:absolute;
                left:15px;
                top:15px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notif-message-empty-unread .o-notif-message-container span {
                padding:5px;
                font-weight:700;
                font-size:16px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notif-message-empty-unread .o-notif-message-container button {
                display:block;
                border:none;
                background-color:transparent;
                margin:0;
                padding:5px 0;
                font-weight:700;
                font-size:16px;
                text-align:left
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notif-message-empty-unread .o-notif-message-container button:after {
                font-family:o-icomoon;
                content:'\e635';
                line-height:normal;
                color:#000;
                font-size:10px;
                margin-left:10px;
                text-decoration:none
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notif-message-empty-unread .o-notif-message-container button:active,
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notif-message-empty-unread .o-notif-message-container button:focus-visible {
                border:none;
                outline:0
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage {
                border-top:15px solid #f4f4f4;
                color:#000
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-welcome a.o-link-text {
                float:left;
                color:#000;
                text-decoration:none;
                font-weight:700;
                font-size:14px;
                line-height:1.57143em;
                padding:0;
                margin:29px 0 0 30px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-welcome a.o-link-text:visited {
                color:#000
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-welcome a.o-link-text:focus {
                color:#555
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-welcome a.o-link-text:hover {
                color:#555
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-welcome a.o-link-text:active {
                color:#f16e00
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-welcome a.o-link-text:focus span,
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-welcome a.o-link-text:hover span {
                text-decoration:underline;
                text-decoration-color:#555
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-welcome a.o-link-text:active span {
                text-decoration:underline;
                text-decoration-color:#f16e00
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-welcome a.o-link-text:after {
                float:right;
                font-family:o-icomoon;
                content:'\e635';
                color:#f16e00;
                font-size:14px;
                line-height:1.57143em;
                margin:0 0 0 15px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-start,
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-welcome {
                padding-bottom:15px;
                overflow:hidden;
                margin:0 30px 15px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-question {
                color:#000;
                margin:15px 0 0;
                font-size:16px;
                font-weight:700;
                overflow:hidden
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container {
                display:flex;
                flex-direction:column;
                align-items:center;
                justify-content:center;
                margin-bottom:10px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-minmax-container {
                width:100%;
                display:flex;
                justify-content:space-between;
                font-size:12px;
                line-height:1.33333em;
                color:#000
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-minmax-container .o-min-max {
                font-size:16px;
                font-weight:700
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider {
                height:auto;
                width:100%
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider .o-range-label {
                display:block;
                position:relative;
                height:1.9em;
                padding:15px 0 0;
                width:1.3em;
                background:0 0;
                font-size:20px;
                font-weight:700;
                font-style:normal;
                line-height:1em;
                text-align:center;
                margin:0;
                box-sizing:border-box;
                color:#000;
                transform-origin:center center
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider .o-range-label[data-selected] {
                color:#f16e00
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider .o-range-label.o-warn-label {
                z-index:-1;
                top:11px;
                text-align:left;
                margin:0!important;
                margin-right:auto!important;
                width:auto;
                line-height:1.9em;
                height:1.9em;
                color:#000;
                background-color:#fce5e5;
                padding:0
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider .o-range-label.o-warn-label span {
                font-size:12px;
                position:relative;
                float:left
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider .o-range-label.o-warn-label:before {
                content:'\e807';
                color:#e70002;
                font-family:o-icomoon;
                font-size:26px;
                margin-left:13px;
                margin-right:13px;
                float:left
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line {
                display:block;
                font-size:19px;
                width:100%;
                height:5px;
                padding:0;
                margin:7px 0;
                -webkit-appearance:none
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line:focus {
                outline:0
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line::-webkit-slider-runnable-track {
                width:100%;
                height:5px;
                margin:0;
                padding:0;
                cursor:pointer;
                box-shadow:none;
                background:#ddd;
                border:none;
                -webkit-appearance:none
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line::-moz-range-track {
                width:100%;
                height:5px;
                margin:0;
                padding:0;
                cursor:pointer;
                box-shadow:none;
                background:#ddd;
                border:none
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line:focus::-webkit-slider-thumb {
                outline:1px dotted #000
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line::-webkit-slider-thumb {
                box-shadow:0 1px 1px 0 rgba(0,0,0,.5);
                border:1px solid #000;
                height:19px;
                width:19px;
                margin-left:0;
                margin-right:0;
                -moz-border-radius:50%;
                -webkit-border-radius:50%;
                border-radius:50%;
                background:#fff;
                cursor:pointer;
                -webkit-appearance:none;
                margin-top:-7px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line[data-selected]:focus::-webkit-slider-thumb {
                outline:1px dotted #000
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line[data-selected]::-webkit-slider-thumb {
                border:1px solid #f16e00
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line::-moz-range-thumb {
                border:1px solid #000;
                box-shadow:0 1px 1px 0 rgba(0,0,0,.5);
                height:19px;
                width:19px;
                margin-left:0;
                margin-right:0;
                -moz-border-radius:50%;
                -webkit-border-radius:50%;
                border-radius:50%;
                background:#fff;
                cursor:pointer;
                -webkit-appearance:none;
                margin-top:-7px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line:focus::-moz-range-thumb {
                outline:1px dotted #000
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line[data-selected]::-moz-range-thumb {
                border:1px solid #f16e00
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line::-moz-focus-outer {
                border:0
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line::-ms-fill-lower {
                background-color:#f16e00
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line::-ms-track {
                height:5px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line::-ms-thumb {
                box-shadow:0 1px 1px 0 rgba(0,0,0,.5);
                border:1px solid #000;
                height:19px;
                width:19px;
                margin-left:0;
                margin-right:0;
                -moz-border-radius:50%;
                -webkit-border-radius:50%;
                border-radius:50%;
                background:#fff;
                cursor:pointer;
                -webkit-appearance:none
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line:focus::-ms-thumb {
                border:1px solid #f16e00;
                background:#fff
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line::-ms-fill-upper {
                background-color:#ddd;
                border:none
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-reponse .o-range-container .o-range-slider input[type=range].o-range-line::-ms-tooltip {
                display:none
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-end {
                background-color:#ebfcee;
                padding:15px 30px;
                font-size:16px;
                font-weight:700;
                line-height:40px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-end:before {
                content:"\e809";
                font-size:40px;
                color:#3de35a;
                margin-right:15px;
                float:left;
                line-height:40px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-button {
                margin:15px 0 0;
                font-size:16px;
                line-height:1em;
                padding:1em 2.8125em;
                font-weight:700;
                width:auto;
                text-align:center;
                float:left;
                text-decoration:none
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-button {
                background-color:transparent;
                border:1px solid #000;
                color:#000
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-button:focus,
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-button:hover {
                background-color:transparent;
                border-color:#555;
                color:#555
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-button:active {
                background-color:transparent;
                border-color:#f16e00;
                color:#f16e00
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-msg {
                list-style-type:none;
                margin-left:30px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-msg.error .o-notif-icon {
                color:#ffcd0b
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-msg.info .o-notif-icon {
                color:#26b2ff
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-msg span {
                display:table-cell;
                font-weight:700;
                vertical-align:middle
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-msg span::before {
                padding:16px 15px 15px 0;
                font-size:40px;
                line-height:40px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer {
                max-height:31.25em;
                max-width:calc(100vw - 2em)
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer[data-sondage=nq] .o-notif-sondage {
                display:none
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer[data-sondage="q"] .o-notifLayer-container>ul {
                max-height:128px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer[data-sondage="q"][data-sondage-stage=welcome] .o-notifLayer-container>ul {
                max-height:211px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer[data-sondage="q"][data-sondage-stage=nq] {
                padding:0 0 30px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer[data-sondage="q"][data-sondage-stage=nq] .o-notifLayer-container>ul {
                max-height:346px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer[data-sondage="a"] .o-notifLayer-container>ul {
                max-height:289px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer[data-sondage=nq] .o-notifLayer-container>ul {
                max-height:346px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notif-link {
                width:31.25em;
                max-width:calc(100vw - 2em)
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage .o-notifLayer-sondage-question {
                color:#000;
                margin-top:15px
                }
                body.une-arche #o-header.o-onei #o-ribbon .o-ribbon-search {
                margin:0 10px 0 39px
                }
                body.une-arche #o-header.o-onei #o-ribbon .o-ribbon-search label.o-search-label {
                padding-top:0
                }
                body.une-arche #o-header.o-onei #o-ribbon .o-ribbon-search.o-ribbon-search-fullwidth {
                margin-right:0
                }
                body.une-arche #o-header.o-onei #o-ribbon .o-ribbon-search .o-search-form {
                position:relative
                }
                body.une-arche #o-header.o-onei #o-ribbon .o-ribbon-search .o-search-form .o-search-icon {
                padding-top:10px;
                position:absolute;
                color:#fff;
                left:-1.8125em;
                height:32px;
                cursor:pointer
                }
                body.une-arche #o-header.o-onei #o-ribbon .o-ribbon-search .o-search-form .o-search-icon:hover {
                color:#f16e00
                }
                body.une-arche #o-header.o-onei #o-ribbon .o-ribbon-search .o-search-form .o-search-icon:before {
                font-size:22px;
                line-height:22px
                }
                body.une-arche #o-header.o-onei #o-ribbon .o-ribbon-search .o-search-form .o-search-label {
                margin-top:6px;
                min-height:30px;
                font-weight:700;
                color:#fff;
                display:inline-block;
                cursor:text
                }
                body.une-arche #o-header.o-onei #o-ribbon .o-ribbon-search .o-search-form .o-search-label:before {
                content:attr(data-placeholder);
                color:#fff;
                font-weight:700;
                font-family:o-HelveticaNeue,Helvetica,Arial,sans-serif;
                font-size:14px;
                height:2.28571em;
                line-height:30px;
                display:block;
                white-space:nowrap
                }
                body.une-arche #o-header.o-onei #o-ribbon .o-ribbon-search .o-search-form.o-active .o-search-label:before {
                content:''!important
                }
                body.une-arche #o-header.o-onei #o-ribbon .o-ribbon-search .o-search-form .o-search-input {
                margin-top:6px;
                height:2.28571em;
                width:100%;
                padding:0 5px;
                font-family:o-HelveticaNeue,Helvetica,Arial,sans-serif;
                font-size:14px;
                font-weight:700;
                color:#fff;
                border:0;
                position:absolute;
                right:0;
                background-color:transparent
                }
                body.une-arche #o-header.o-onei #o-ribbon .o-ribbon-search .o-search-form .o-search-result {
                color:#000;
                position:absolute;
                z-index:9997;
                right:0;
                top:2.28571em;
                left:-25px
                }
                body.une-arche #o-header.o-onei #o-ribbon .o-ribbon-search .o-search-form .o-search-result .o-search-progress {
                display:none
                }
                body.une-arche #o-header.o-onei #o-ribbon :not(.o-nav-identity)#o-identityLink .o-link-text {
                margin-top:4px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLink img {
                width:1.85714em;
                height:1.85714em;
                margin-top:8px;
                margin-right:10px;
                float:left;
                border:0;
                font-size:inherit
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLink img.o-avatar-default {
                -moz-border-radius:.92857em;
                -webkit-border-radius:.92857em;
                border-radius:.92857em
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLink .o-link-text {
                min-height:36px;
                height:auto;
                float:left;
                font-weight:400;
                display:block
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLink .o-link-text>span {
                display:block;
                min-height:36px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLink.o-identityLink-connected .o-link-text {
                max-width:140px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLink.o-identityLink-connected .o-link-text:active {
                color:#f16e00
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLink .o-identity-link-title {
                font-weight:700;
                display:block;
                text-decoration:none;
                overflow:hidden;
                text-overflow:ellipsis;
                white-space:nowrap
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLink .o-identity-link-msg {
                font-size:12px;
                display:block;
                margin-top:-2px;
                font-weight:400
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLink.o-identityLink-notConnected .o-identity-link-title {
                color:#f16e00;
                max-width:initial;
                min-width:0
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLink:focus,
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLink:hover {
                text-decoration:underline;
                color:#ccc
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLink:focus .o-link-icon,
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLink:hover .o-link-icon {
                color:#ccc
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLink:focus .o-identity-link-msg,
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLink:hover .o-identity-link-msg {
                text-decoration:underline;
                text-decoration-color:#ccc;
                color:#ccc
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLink:active {
                text-decoration:underline;
                color:#f16e00
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLink:active .o-link-icon {
                color:#f16e00
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-identityLink:active .o-identity-link-msg {
                text-decoration:underline;
                text-decoration-color:#f16e00;
                color:#f16e00
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-selectorLink {
                padding-right:30px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-selectorLink .o-link-text:after {
                -moz-transform:rotate(90deg);
                -ms-transform:rotate(90deg);
                -webkit-transform:rotate(90deg);
                transform:rotate(90deg);
                font-family:o-icomoon;
                content:'\e635';
                color:#f16e00;
                font-size:10px;
                position:absolute;
                right:10px;
                margin-top:5px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-selectorLink:hover .o-link-text:after {
                -moz-transform:rotate(-90deg);
                -ms-transform:rotate(-90deg);
                -webkit-transform:rotate(-90deg);
                transform:rotate(-90deg)
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-selectorLayer {
                width:auto;
                border-top-width:2px;
                padding-bottom:20px;
                top:40px
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-selectorLayer .o-layer-title {
                height:3.125em;
                min-height:3.125em!important;
                font-size:16px;
                margin-bottom:5px;
                white-space:nowrap
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-selectorLayer ul {
                list-style:none
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-selectorLayer ul li {
                border-top:1px solid #ddd
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-selectorLayer ul li:first-child {
                border-top:0
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-selectorLayer ul li a {
                color:#000;
                font-size:16px;
                text-decoration:none;
                display:block;
                padding:14px 30px 14px 0;
                position:relative
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-selectorLayer ul li a:focus,
                body.une-arche #o-header.o-onei #o-ribbon #o-selectorLayer ul li a:hover {
                color:#555;
                text-decoration:underline;
                text-decoration-color:#555
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-selectorLayer ul li a:active {
                color:#f16e00;
                text-decoration:underline;
                text-decoration-color:#f16e00
                }
                body.une-arche #o-header.o-onei #o-ribbon #o-selectorLayer ul li a:after {
                font-family:o-icomoon;
                font-weight:700;
                content:'\e635';
                line-height:22px;
                color:#f16e00;
                font-size:14px;
                position:absolute;
                top:0;
                right:0;
                bottom:0;
                display:flex;
                align-items:center
                }
                body.une-arche #o-header.o-onei #o-ribbon .o-ribbon-search .o-search-form .o-search-icon {
                left:-1.8125em
                }
                body.une-arche #o-header.o-onei .o-nav {
                background-color:#000
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper .o-logo[data-logo=main] {
                display:block!important
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper .o-logo[data-logo=sticky] {
                display:none!important
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-tunnel .o-logo {
                margin:15px 10px 15px 0!important;
                height:30px!important
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-tunnel .o-logo img {
                width:30px!important
                }
                body.une-arche #o-header.o-onei .o-nav#o-nav .o-nav-neutral .o-logo {
                margin:25px 30px 25px 0!important
                }
                body.une-arche #o-header.o-onei .o-nav .o-logo {
                display:inline-block;
                margin:0 10px 15px 0;
                height:50px
                }
                body.une-arche #o-header.o-onei .o-nav .o-logo:focus {
                outline:1px dotted #fff;
                outline-offset:3px
                }
                body.une-arche #o-header.o-onei .o-nav .o-logo img {
                width:50px;
                border:0
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav>ul>li:first-child .o-nav-elt,
                body.une-arche #o-header.o-onei .o-nav .o-nav>ul>li:first-child .o-nav-megaMenu {
                margin-left:-10px
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-megaMenu-firstLetterOrange .o-link-text::first-letter {
                color:#f16e00
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral {
                min-height:70px
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-avatar {
                text-align:center;
                margin-bottom:0
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-avatar img {
                width:5em;
                height:5em
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-avatar img.o-avatar-default {
                -moz-border-radius:2.5em;
                -webkit-border-radius:2.5em;
                border-radius:2.5em
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-fullname {
                color:#000;
                font-weight:700;
                font-size:26px;
                text-align:center;
                word-wrap:break-word
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-detail {
                color:#000;
                text-align:center;
                font-size:14px
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message {
                display:block;
                text-decoration:none;
                padding:18px 0 22px 0;
                margin:15px 0 0 0
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message.o-msg-warning {
                background:#fffae6
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message.o-msg-warning .o-link-icon::before {
                color:#FFCD0B!important
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message.o-msg-info {
                background:rgba(65,154,249,.2)
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message.o-msg-info .o-link-icon::before {
                color:#26b2ff!important
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg {
                padding:0 30px;
                color:#000;
                font-weight:700;
                font-size:16px;
                text-decoration:none;
                display:flex;
                align-items:center
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg .o-link-text {
                font-weight:700;
                color:#000
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg .o-link-text:after {
                font-family:o-icomoon;
                content:'\e635';
                line-height:normal;
                color:#000;
                font-size:12px;
                padding:0 0 0 5px;
                text-decoration:none
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg:focus .o-link-text,
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg:hover .o-link-text {
                text-decoration:underline;
                font-weight:700;
                color:#555;
                text-decoration-color:#555
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg:focus .o-link-text:after,
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg:hover .o-link-text:after {
                color:#555;
                text-decoration:none
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg:active .o-link-text {
                font-weight:700;
                color:#f16e00!important;
                text-decoration-color:#f16e00
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg:active .o-link-text:after {
                color:#f16e00;
                text-decoration:none
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg .o-link-icon {
                line-height:normal
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message a.o-msg .o-link-icon::before {
                font-size:32px;
                float:left;
                margin-left:-15px;
                padding:0 15px 0 0
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message span.o-msg {
                padding:0 30px;
                color:#000;
                font-weight:700;
                font-size:16px;
                text-decoration:none;
                display:flex;
                align-items:center
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message span.o-msg .o-link-text {
                font-weight:700;
                color:#000
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message span.o-msg .o-link-icon {
                line-height:normal
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message span.o-msg .o-link-icon::before {
                font-size:32px;
                float:left;
                margin-left:-15px;
                padding:0 15px 0 0
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message span.o-msg.o-msg-warning .o-link-icon::before {
                color:#FFCD0B!important
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-message span.o-msg.o-msg-info .o-link-icon::before {
                color:#26b2ff!important
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link {
                list-style-type:none;
                list-style-image:none
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a {
                color:#000;
                text-decoration:none;
                display:inline-block;
                font-size:16px;
                font-weight:700;
                line-height:22px;
                padding:8px 0 9px;
                width:100%
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a:visited {
                color:#000
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a:focus {
                color:#555
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a:hover {
                color:#555
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a:active {
                color:#f16e00
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a:focus span,
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a:hover span {
                text-decoration:underline;
                text-decoration-color:#555
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a:active span {
                text-decoration:underline;
                text-decoration-color:#f16e00
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-link li a:after {
                font-family:o-icomoon;
                content:'\e635';
                line-height:22px;
                color:#f16e00;
                font-size:14px;
                float:right
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-button {
                list-style-type:none;
                list-style-image:none;
                margin-top:23px
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-button li {
                margin-bottom:30px
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-button li:last-child {
                margin-bottom:0
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-button li a {
                text-decoration:none;
                display:block;
                min-height:50px;
                line-height:50px;
                font-size:16px;
                font-weight:700;
                border:1px solid #000;
                text-align:center
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-button li a {
                background-color:transparent;
                border:1px solid #000;
                color:#000
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-button li a:focus,
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-button li a:hover {
                background-color:transparent;
                border-color:#555;
                color:#555
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity .o-identityLayer-button li a:active {
                background-color:transparent;
                border-color:#f16e00;
                color:#f16e00
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral .o-nav-identity #o-footer-identiteConnected-layer .o-layer-data ul.o-identityLayer-link {
                margin-top:23px
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-tunnel {
                min-height:60px!important
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-tunnel ul {
                min-height:60px
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-tunnel ul li.o-page-title {
                margin:18px 0 11px 20px!important
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper {
                min-height:70px;
                clear:both
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral,
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-tunnel {
                display:flex
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral ul:first-of-type,
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-tunnel ul:first-of-type {
                display:-webkit-flex;
                display:flex;
                flex:0 1 auto;
                flex-shrink:1
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral ul:first-of-type li,
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-tunnel ul:first-of-type li {
                -moz-align-self:flex-end;
                -moz-flex:0 1 auto;
                -moz-flex-shrink:1;
                -webkit-align-self:flex-end;
                -webkit-flex:0 1 auto;
                -webkit-flex-shrink:1;
                -ms-align-self:flex-end;
                -ms-flex:0 1 auto;
                -ms-flex-shrink:1;
                -webkit-align-self:flex-end;
                -webkit-flex:0 1 auto;
                -webkit-flex-shrink:1;
                align-self:flex-end;
                flex:0 1 auto;
                flex-shrink:1;
                -webkit-align-self:flex-end;
                align-self:flex-end;
                flex-shrink:1
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral ul:first-of-type li.o-page-title,
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-tunnel ul:first-of-type li.o-page-title {
                color:#fff
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral ul:first-of-type li.o-page-title h3,
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-tunnel ul:first-of-type li.o-page-title h3 {
                color:#fff;
                line-height:1;
                font-weight:700;
                text-align:left;
                display:inline-block
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral ul li.o-page-title {
                margin:18px 0 20px 0
                }
                @media (max-width:960px) {
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral ul li.o-page-title h3 {
                font-size:16px;
                margin:0 0 6px
                }
                }
                @media (min-width:736px) and (max-width:1199px) {
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral ul li.o-page-title h3 {
                font-size:20px;
                margin:0 0 5px
                }
                }
                @media (min-width:961px) {
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral ul li.o-page-title h3 {
                font-size:26px;
                margin:0 0 5px
                }
                }
                @media (min-width:1440px) {
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-neutral ul li.o-page-title h3 {
                font-size:30px;
                margin:0 0 5px
                }
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-tunnel ul li.o-page-title {
                margin:18px 0 11px 22px
                }
                @media (max-width:960px) {
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-tunnel ul li.o-page-title h3 {
                font-size:20px;
                margin:0 0 5px
                }
                }
                @media (min-width:961px) {
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-tunnel ul li.o-page-title h3 {
                font-size:22px;
                margin:0 0 5px
                }
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-items {
                float:right;
                display:flex
                }
                @media (max-width:1199px) {
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-items {
                height:70px
                }
                }
                @media (min-width:961px) {
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-items {
                height:auto
                }
                }
                body.une-arche #o-header.o-onei .o-nav.o-nav-space-lg .o-nav-container.o-nav-evenement-items .o-link {
                padding:0 18px
                }
                body.une-arche #o-header.o-onei .o-nav.o-nav-space-md .o-nav-container.o-nav-evenement-items .o-link {
                padding:0 15px
                }
                body.une-arche #o-header.o-onei .o-nav.o-nav-space-sm .o-nav-container.o-nav-evenement-items .o-link {
                padding:0 5px
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container .o-link,
                body.une-arche #o-header.o-onei .o-nav .o-nav-container .o-nav-megaMenu {
                text-decoration:none
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container .o-link .o-link-text span,
                body.une-arche #o-header.o-onei .o-nav .o-nav-container .o-nav-megaMenu .o-link-text span {
                margin-bottom:2px;
                display:block
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container.o-nav-megaMenu-items>ul {
                -moz-box-shadow:rgba(0,0,0,.5) 0 0 5px;
                -webkit-box-shadow:rgba(0,0,0,.5) 0 0 5px;
                box-shadow:rgba(0,0,0,.5) 0 0 5px
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container.o-nav-megaMenu-items .o-link.o-nav-elt {
                text-align:center;
                margin:0;
                height:auto;
                padding:0 10px;
                vertical-align:bottom
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container.o-nav-megaMenu-items .o-link.o-nav-elt img {
                margin:0;
                border-bottom:none;
                display:block;
                max-height:60px;
                border:none
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container.o-nav-megaMenu-items .o-link.o-nav-elt .o-link-text {
                padding:10px 0;
                margin:0 0 3px 0;
                text-decoration:none
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container.o-nav-megaMenu-items .o-link.o-nav-elt .o-link-text span {
                margin-bottom:2px;
                display:block;
                font-weight:700
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container.o-nav-megaMenu-items .o-link.o-nav-elt:hover .o-link-text {
                margin:0 0 0;
                border-bottom:3px solid #f16e00;
                text-decoration:none;
                display:block
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container.o-nav-megaMenu-items .o-link.o-nav-elt:hover .o-link-text span {
                color:#f16e00
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container.o-nav-megaMenu-items .o-link.o-nav-elt:focus .o-link-text span {
                color:#f16e00
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container.o-nav-evenement-items .o-link {
                text-align:center;
                margin:0;
                height:auto;
                vertical-align:bottom
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container.o-nav-evenement-items .o-link img {
                margin:0;
                border-bottom:none;
                display:block;
                max-height:60px;
                border:none
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container.o-nav-evenement-items .o-link span.o-link-text {
                padding:10px 0;
                margin:0 0 3px 0;
                text-decoration:none
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container.o-nav-evenement-items .o-link span.o-link-text span {
                margin-bottom:2px;
                display:block
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container.o-nav-evenement-items .o-link:focus .o-link-text,
                body.une-arche #o-header.o-onei .o-nav .o-nav-container.o-nav-evenement-items .o-link:hover .o-link-text {
                margin:0 0 0;
                border-bottom:3px solid #f16e00;
                text-decoration:none;
                display:block
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul {
                list-style-type:none;
                list-style-image:none;
                clear:both
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer {
                background:#fff;
                left:0;
                right:0;
                border:none;
                padding:0 0 20px
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-title {
                position:relative;
                width:100%;
                border-bottom:1px solid #ccc;
                line-height:1em;
                padding:25px 0;
                display:inline-block
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-title a {
                text-decoration:none;
                font-weight:700;
                color:#000
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-title a:focus,
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-title a:hover {
                text-decoration:underline;
                text-decoration-color:#555;
                font-weight:700;
                color:#555
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-title a:active {
                color:#f16e00;
                text-decoration-color:#f16e00
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-title:after {
                font-family:o-icomoon;
                content:'\e635';
                font-weight:400;
                font-size:14px;
                color:#f16e00;
                margin-left:15px
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-navigation-layer-column {
                color:#000;
                page-break-inside:avoid;
                font-size:18px;
                max-width:15em
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-navigation-layer-img {
                top:20px;
                right:0;
                margin-top:20px;
                max-width:initial!important
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-navigation-layer-img a,
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-navigation-layer-img img {
                display:block;
                border:0
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block:focus {
                outline:solid
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block:focus a,
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block:hover a {
                text-decoration:none!important
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block:focus div:last-child a,
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block:hover div:last-child a {
                color:#555;
                text-decoration:underline!important;
                text-decoration-color:#555!important
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block:active a {
                text-decoration:none!important
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block:active div:last-child a {
                color:#f16e00;
                text-decoration:underline!important;
                text-decoration-color:#f16e00
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block .o-megamenu-link {
                padding-bottom:0!important
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block .o-megamenu-link.o-megamenu-title {
                padding:0!important
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block .o-megamenu-link.o-megamenu-title .o-megamenu-subtitle {
                color:#000;
                font-weight:400!important;
                padding-top:2px!important
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-category-block .o-megamenu-link.o-megamenu-title a.o-megamenu-item {
                padding-top:2px!important
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link {
                display:block;
                text-decoration:none;
                padding:10px 5px 10px 0;
                color:#000;
                font-weight:700;
                text-decoration:none;
                padding:20px 0 7px;
                margin:0
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link:hover {
                font-weight:700
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link a.o-megamenu-cat {
                color:#000;
                font-weight:700;
                text-decoration:none
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link.o-megamenu-title {
                padding:5px 0!important
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link.o-megamenu-title .o-megamenu-subtitle {
                color:#000;
                font-weight:700;
                text-decoration:none
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link.o-megamenu-title a.o-megamenu-item {
                display:block;
                font-weight:700;
                text-decoration:none;
                color:#000;
                padding:8px 5px 8px 0;
                line-height:normal
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link.o-megamenu-title a.o-megamenu-item:focus,
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link.o-megamenu-title a.o-megamenu-item:hover {
                color:#555;
                text-decoration:underline;
                text-decoration-color:#555
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-link.o-megamenu-title a.o-megamenu-item:active {
                color:#f16e00;
                text-decoration-color:#f16e00
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-infoBlock {
                display:block;
                text-decoration:none;
                padding:20px 0 6px 0;
                color:#555;
                font-weight:700;
                margin:0
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-infoBlock:hover {
                font-weight:700
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-infoBlock .o-megamenu-infoblock {
                color:#000;
                font-weight:700;
                text-decoration:none;
                display:flex;
                align-items:center
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-infoBlock .o-megamenu-infoblock .o-link-text {
                font-weight:400;
                color:#000
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-infoBlock .o-megamenu-infoblock:focus .o-link-text,
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-infoBlock .o-megamenu-infoblock:hover .o-link-text {
                text-decoration:underline;
                font-weight:400;
                color:#555;
                text-decoration-color:#555
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-infoBlock .o-megamenu-infoblock:active .o-link-text {
                font-weight:400;
                color:#f16e00!important;
                text-decoration-color:#f16e00
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns .o-megamenu-infoBlock .o-megamenu-infoblock .o-link-icon::before {
                color:#26b2ff!important;
                font-size:20px;
                margin-left:-25px;
                padding:0 5px 0 0
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category {
                list-style:none
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category [data-new='1']:after {
                display:inline-block;
                position:relative;
                text-decoration:underline;
                content:'New';
                background:#000;
                color:#fff;
                font-weight:700;
                font-size:12px;
                min-height:15px;
                height:auto;
                padding-left:3px;
                padding-right:3px;
                line-height:15px;
                margin-left:15px;
                top:-2px
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category [data-new='1']:after,
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category [data-new='1']:hover:after {
                text-decoration:none
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category a {
                display:block;
                text-decoration:none;
                color:#333;
                padding:8px 5px 8px 0;
                line-height:normal
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category a:focus,
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category a:hover {
                color:#555;
                text-decoration:underline;
                text-decoration-color:#555
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category a:active {
                color:#f16e00;
                text-decoration-color:#f16e00
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category a.o-megamenu-more {
                font-weight:700
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li .o-layer .o-navigation-layer-data .o-navigation-layer-columns ul.o-navigation-layer-category a.o-megamenu-lastitem {
                padding-top:8px!important;
                margin-top:13px!important
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-container>ul>li:last-child {
                margin-right:0;
                padding:0!important
                }
                body.une-arche #o-header.o-onei .o-nav .o-navigation-layer-columns {
                display:flex;
                justify-content:space-between;
                flex-wrap:wrap;
                align-items:stretch;
                list-style:none
                }
                body.une-arche #o-header.o-onei .o-nav.o-nav-space-lg .o-nav-container .o-nav-elt,
                body.une-arche #o-header.o-onei .o-nav.o-nav-space-lg .o-nav-container .o-nav-megaMenu {
                padding:0 18px
                }
                body.une-arche #o-header.o-onei .o-nav.o-nav-space-md .o-nav-container .o-nav-elt,
                body.une-arche #o-header.o-onei .o-nav.o-nav-space-md .o-nav-container .o-nav-megaMenu {
                padding:0 15px
                }
                body.une-arche #o-header.o-onei .o-nav.o-nav-space-sm .o-nav-container .o-nav-elt,
                body.une-arche #o-header.o-onei .o-nav.o-nav-space-sm .o-nav-container .o-nav-megaMenu {
                padding:0 5px
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper {
                display:-webkit-flex;
                display:flex
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container.o-nav-evenement-items .o-link-text span {
                margin-bottom:2px;
                display:block;
                font-weight:700
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper.o-nav-tunnel .o-nav-container>ul {
                min-height:60px!important
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container {
                float:left;
                display:flex
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul {
                display:-webkit-flex;
                display:flex;
                flex:0 1 auto;
                flex-shrink:1;
                min-height:70px
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul>li {
                -moz-align-self:flex-end;
                -moz-flex:0 1 auto;
                -moz-flex-shrink:1;
                -webkit-align-self:flex-end;
                -webkit-flex:0 1 auto;
                -webkit-flex-shrink:1;
                -ms-align-self:flex-end;
                -ms-flex:0 1 auto;
                -ms-flex-shrink:1;
                -webkit-align-self:flex-end;
                -webkit-flex:0 1 auto;
                -webkit-flex-shrink:1;
                align-self:flex-end;
                flex:0 1 auto;
                flex-shrink:1;
                -webkit-align-self:flex-end;
                align-self:flex-end;
                flex-shrink:1
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul>li .o-nav-elt,
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul>li .o-nav-megaMenu {
                color:#fff;
                font-size:14px;
                font-weight:700;
                text-align:center;
                cursor:pointer;
                display:inline-block
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul>li .o-nav-elt.o-on .o-link-text,
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul>li .o-nav-megaMenu.o-on .o-link-text {
                color:#f16e00
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul>li .o-nav-elt .o-link-text,
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul>li .o-nav-megaMenu .o-link-text {
                padding:10px 0;
                display:block;
                margin-bottom:3px
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul>li .o-nav-elt .o-link-text span,
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul>li .o-nav-megaMenu .o-link-text span {
                margin-bottom:2px;
                display:block;
                font-weight:700
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul>li .o-nav-elt.o-on .o-link-text,
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul>li .o-nav-megaMenu.o-on .o-link-text {
                margin:0;
                border-bottom:3px solid #f16e00;
                color:#f16e00
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul>li .o-nav-elt[data-state=o-active] .o-link-text,
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul>li .o-nav-megaMenu[data-state=o-active] .o-link-text {
                margin:0;
                border-bottom:3px solid #f16e00
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul>li .o-layer {
                margin:auto;
                width:100%;
                max-width:1440px;
                left:0;
                right:0;
                border:none;
                padding-bottom:20px
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul>li .o-layer .o-navigation-layer-data {
                margin:0 calc(3.125% + 15px)
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul>li .o-layer[data-state=o-active] {
                visibility:visible!important
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-container>ul>li .o-layer[data-state=o-inactive] {
                visibility:hidden!important
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-wrapper .o-nav-items .o-nav-burger {
                display:none
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-evenement-image-container a {
                display:inline-block!important;
                margin:0 10px!important;
                height:auto!important;
                padding:0!important;
                position:relative
                }
                body.une-arche #o-header.o-onei .o-nav .o-nav-evenement-image-container a:focus::after,
                body.une-arche #o-header.o-onei .o-nav .o-nav-evenement-image-container a:hover::after {
                position:absolute;
                bottom:0;
                content:'';
                display:block;
                border-bottom:3px solid #f16e00;
                width:100%
                }
                body.une-arche #o-header.o-onei .o-nav .o-navigation-layer-title {
                font-size:16px
                }
                body.une-arche #o-header.o-onei .o-nav .o-megamenu-link {
                font-size:16px
                }
                body.une-arche #o-header.o-onei .o-nav .o-megamenu-link.o-megamenu-title .o-megamenu-item,
                body.une-arche #o-header.o-onei .o-nav .o-megamenu-link.o-megamenu-title .o-megamenu-subtitle {
                font-size:14px
                }
                body.une-arche #o-header.o-onei .o-nav .o-megamenu-item,
                body.une-arche #o-header.o-onei .o-nav .o-megamenu-lastitem,
                body.une-arche #o-header.o-onei .o-nav .o-megamenu-more {
                font-size:14px
                }
                body.une-arche #o-header.o-onei .o-nav .o-megamenu-item .o-megamenu-infoblock {
                font-size:14px!important
                }
                body.une-arche #o-header.o-onei #o-nav-sticky {
                -moz-transition:top .5s ease;
                -o-transition:top .5s ease;
                -webkit-transition:top .5s ease;
                transition:top .5s ease;
                visibility:hidden;
                background-color:#000;
                position:fixed;
                left:0;
                right:0;
                top:-60px;
                width:100%;
                min-height:60px;
                z-index:9999
                }
                body.une-arche #o-header.o-onei #o-nav-sticky.o-open {
                visibility:visible;
                top:0;
                min-height:60px
                }
                body.une-arche #o-header.o-onei #o-nav-sticky .o-nav-wrapper,
                body.une-arche #o-header.o-onei #o-nav-sticky .o-nav-wrapper .o-nav-container>ul {
                min-height:60px
                }
                body.une-arche #o-header.o-onei #o-nav-sticky .o-nav-wrapper .o-logo[data-logo=main] {
                display:none!important
                }
                body.une-arche #o-header.o-onei #o-nav-sticky .o-nav-wrapper .o-logo[data-logo=sticky] {
                display:block!important
                }
                body.une-arche #o-header.o-onei #o-nav-sticky .o-nav-wrapper .o-logo {
                width:30px;
                height:30px;
                margin-top:15px
                }
                body.une-arche #o-header.o-onei #o-nav-sticky .o-nav-wrapper .o-logo img {
                width:30px
                }
                body.une-arche #o-header.o-onei #o-nav-sticky .o-nav-evenement-image-container img {
                max-height:60px
                }
                @media (max-width:479px) {
                #o-header.o-onei #o-identityLayer,
                #o-header.o-onei #o-lanceurLayer,
                #o-header.o-onei #o-notifLayer {
                right:0!important;
                width:320px!important
                }
                #o-header.o-onei #o-identityLayer .o-layer-arrow,
                #o-header.o-onei #o-lanceurLayer .o-layer-arrow,
                #o-header.o-onei #o-notifLayer .o-layer-arrow {
                display:none
                }
                #o-header #o-ribbon #o-ribbon-right ul li:nth-last-child(2) #o-notifLayer {
                right:-50px!important
                }
                #o-header #o-ribbon #o-ribbon-right ul li:nth-last-child(3) #o-lanceurLayer {
                right:-100px!important
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-layer-data .o-notifLayer-container ul .o-notif-item .o-notif-link.o-notif-new {
                width:100%
                }
                #o-header.o-onei #o-ribbon #o-notifLayer .o-notif-sondage {
                background-color:#fff
                }
                #o-header.o-onei #o-ribbon #o-lanceurLayer .o-layer-item:nth-child(3n+1) {
                clear:none
                }
                #formSearchCompletion-ribbon {
                max-width:200px
                }
                #formSearchCompletion-ribbon div.cmpl.ec {
                max-width:200px
                }
                #o-header.o-onei #o-ribbon .o-ribbon-search .o-search-form .o-search-result {
                left:auto;
                right:0
                }
                #o-header.o-onei #o-service #o-service-search .o-search-form .o-search-result {
                left:0;
                right:0;
                top:50px
                }
                #o-header.o-onei #o-service #o-service-search .o-search-form .o-search-input {
                right:20px;
                left:auto
                }
                #o-header.o-onei #o-service #o-service-search .o-search-form .o-search-input:focus {
                right:-7.5px;
                left:0
                }
                #o-header.o-onei #o-service #o-service-title {
                width:calc(100% - 48px)!important
                }
                }
                @media (min-width:480px) and (max-width:735px) {
                #o-header.o-onei #o-service #o-service-title {
                width:100%!important;
                padding-right:0
                }
                }
                @media (max-width:735px) {
                #o-header.o-onei #o-service #o-service-search {
                position:relative;
                -moz-transform:none;
                -ms-transform:none;
                -webkit-transform:none;
                transform:none;
                margin-left:24px;
                margin-top:5px
                }
                }
                @media all and (max-width:60em) {
                .o-footer-sitemap .o-footer-sitemap-column {
                width:33.3%!important
                }
                .o-footer-sitemap .o-footer-sitemap-column:nth-child(3n+1) {
                clear:left;
                padding-left:0
                }
                }
                @media (max-width:735px) {
                .o-footer-sitemap .o-footer-sitemap-column {
                width:50%!important
                }
                .o-footer-sitemap .o-footer-sitemap-column:nth-child(3n+1) {
                clear:none;
                padding-left:15px
                }
                .o-footer-sitemap .o-footer-sitemap-column:nth-child(2n+1) {
                clear:left;
                padding-left:0
                }
                }
                @media (max-width:479px) {
                .o-footer-sitemap .o-footer-sitemap-column {
                width:100%!important;
                clear:left!important;
                padding-left:0!important
                }
                #o-footer-syndication .o-footer-content a {
                margin-right:10px
                }
                }
                @media all and (min-width:75em) {
                .o-footer-sitemap .o-footer-sitemap-column h3 {
                font-size:18px!important;
                margin:0;
                padding:21px 0 8px 0
                }
                .o-footer-sitemap .o-footer-sitemap-column li {
                font-size:16px!important
                }
                #o-footer-lienLegal ul li {
                font-size:16px
                }
                }
                .o-anchor {
                display:block
                }
                #o-footer-accesDirect,
                #o-footer-lienLegal,
                #o-footer-syndication,
                #o-header.o-onei,
                .o-footer-sitemap {
                min-width:320px
                }
                body.une-arche .o-marge#o-accessibility-wrapper>ul,
                body.une-arche .o-marge#o-cookie-consent-wrapper>div,
                body.une-arche .o-marge#o-nav-sticky .o-nav-wrapper,
                body.une-arche .o-marge#o-nav>div,
                body.une-arche .o-marge#o-service-wrapper>div,
                body.une-arche .o-marge.o-search-result-wrapper>.o-search-result-list {
                margin:0 calc(3.125% + 15px)
                }
                body.une-arche .o-marge #o-ribbon-left {
                margin-left:calc(3.125% + 15px)
                }
                body.une-arche .o-marge #o-ribbon-right {
                margin-right:calc(3.125% + 15px)
                }
                body.une-arche .o-marge#o-footer-accesDirect .o-footer-content>div,
                body.une-arche .o-marge#o-footer-lienLegal .o-footer-content>div,
                body.une-arche .o-marge#o-footer-syndication .o-footer-content>div,
                body.une-arche .o-marge.o-footer-sitemap .o-footer-content>div {
                margin:0 calc(3.125% + 15px)
                }
                @media (max-width:960px) {
                body:not(.une-arche) .o-marge#o-accessibility-wrapper>ul,
                body:not(.une-arche) .o-marge#o-cookie-consent-wrapper>div,
                body:not(.une-arche) .o-marge#o-nav-sticky .o-nav-wrapper,
                body:not(.une-arche) .o-marge#o-nav>div,
                body:not(.une-arche) .o-marge#o-service-wrapper>div,
                body:not(.une-arche) .o-marge.o-search-result-wrapper>.o-search-result-list {
                margin:0 calc(1.5625% + 15px)
                }
                body:not(.une-arche) .o-marge #o-ribbon-left {
                margin-left:calc(1.5625% + 15px)
                }
                body:not(.une-arche) .o-marge #o-ribbon-right {
                margin-right:calc(1.5625% + 15px)
                }
                body:not(.une-arche) .o-marge#o-footer-accesDirect .o-footer-content>div,
                body:not(.une-arche) .o-marge#o-footer-lienLegal .o-footer-content>div,
                body:not(.une-arche) .o-marge#o-footer-syndication .o-footer-content>div,
                body:not(.une-arche) .o-marge.o-footer-sitemap .o-footer-content>div {
                margin:0 calc(1.5625% + 15px)
                }
                }
                @media (min-width:961px) {
                body:not(.une-arche) .o-marge#o-accessibility-wrapper>ul,
                body:not(.une-arche) .o-marge#o-cookie-consent-wrapper>div,
                body:not(.une-arche) .o-marge#o-nav-sticky .o-nav-wrapper,
                body:not(.une-arche) .o-marge#o-nav>div,
                body:not(.une-arche) .o-marge#o-service-wrapper>div,
                body:not(.une-arche) .o-marge.o-search-result-wrapper>.o-search-result-list {
                margin:0 calc(3.125% + 15px)
                }
                body:not(.une-arche) .o-marge #o-ribbon-left {
                margin-left:calc(3.125% + 15px)
                }
                body:not(.une-arche) .o-marge #o-ribbon-right {
                margin-right:calc(3.125% + 15px)
                }
                body:not(.une-arche) .o-marge#o-footer-accesDirect .o-footer-content>div,
                body:not(.une-arche) .o-marge#o-footer-lienLegal .o-footer-content>div,
                body:not(.une-arche) .o-marge#o-footer-syndication .o-footer-content>div,
                body:not(.une-arche) .o-marge.o-footer-sitemap .o-footer-content>div {
                margin:0 calc(3.125% + 15px)
                }
                }
                @media (min-width:1440px) {
                body:not(.une-arche) .o-marge#o-accessibility-wrapper,
                body:not(.une-arche) .o-marge#o-cookie-consent-wrapper,
                body:not(.une-arche) .o-marge#o-nav,
                body:not(.une-arche) .o-marge#o-nav-sticky>div,
                body:not(.une-arche) .o-marge#o-ribbon,
                body:not(.une-arche) .o-marge#o-service-wrapper,
                body:not(.une-arche) .o-marge.o-search-result-wrapper {
                max-width:1440px;
                margin:0 auto!important
                }
                body:not(.une-arche) .o-marge#o-footer-accesDirect .o-footer-content,
                body:not(.une-arche) .o-marge#o-footer-lienLegal .o-footer-content,
                body:not(.une-arche) .o-marge#o-footer-syndication .o-footer-content,
                body:not(.une-arche) .o-marge.o-footer-sitemap .o-footer-content {
                max-width:1440px;
                margin:0 auto
                }
                }

                #o-service {
                    min-height: 80px !important;
                    border-bottom: 1px inset #e4e4e4;
                }
            CSS;
        }
        return '';
    }

    public function draw(): string {
        $linkTag = empty($this->url) ? 'span' : "a href=\"{$this->url}\"";
        $linkEndTag = empty($this->url) ? 'span' : 'a';

        return (empty($this->label) ? '' : <<<HTML
            <header id="o-header" class="o-responsive fixed-center o-center-align fixed-center o-center-align o-onei">
        HTML) . parent::draw() . (empty($this->label) ? '' : <<<HTML
            <div id="o-service" class="o-service-theme-light">
                <div id="o-service-wrapper" class="o-marge" data-widthlimit="">
                    <div id="o-service-content">
                        <div id="o-service-title">
                            <div style="">
                                <div id="polarisHeader" class="crc-tms-zone crc-tms-zone--res_pro">
                                    <span class="service">
                                        <{$linkTag}>
                                            {$this->label}
                                        </{$linkEndTag}>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        HTML) . (empty($this->label) ? '' : <<<HTML
            </header>
        HTML);
    }
}