<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=1920, maximum-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png">
	<meta name="og:type" content="website"><meta name="twitter:card" content="photo"><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script id="anima-hotspots-script" src="hotspots.js"></script><style type="text/css">/* SCROLLBAR */

[dark-scroll]::-webkit-scrollbar {
  width: 10px;
  height: 10px;
}

[dark-scroll]::-webkit-scrollbar-track-piece {
  background-color: #2b2b2b;
  border: 1px solid #1d1d1d;
}

[dark-scroll]::-webkit-scrollbar-thumb {
  height: 10px;
  background-color: #4d4d4d;
}
[dark-scroll]::-webkit-scrollbar-thumb:hover {
  background-color: #5a5a5a;
}

/* GROUPING */

[data-id].ui-selecting {
  box-shadow: 0 0 0 1px #4285f4 !important;
}
[data-id].ui-selected {
  box-shadow: 0 0 0 1px #4285f4 !important;
}

/* CURSOR */

body[mode='comments'] * {
  cursor: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzAiIGhlaWdodD0iMzAiIHZpZXdCb3g9IjAgMCAzMCAzMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik00LjkxNjQ4IDIzLjQxMDlDNS40OTE1MyAyMi45ODg3IDUuOTMxNzkgMjIuMzkzNSA2LjIzMjggMjEuNjQwN0M0Ljc5MDY5IDE5LjczODMgNCAxNy4zOTMzIDQgMTQuOTk3NUM0IDguOTM0MSA4LjkzMjgyIDQgMTUuMDAyMiA0QzIxLjA3MTcgNCAyNiA4LjkzOTE5IDI2IDE1LjAwMjVDMjYgMjEuMDY1OSAyMS4wNjcyIDI2IDE0Ljk5NzggMjZDMTIuOTg5NiAyNiAxMS4wMzUzIDI1LjQ1NTcgOS4zMjM2NyAyNC40MjMxQzguNDI5NjUgMjQuOTU3MiA3LjQxNDM0IDI1LjIyNjggNi4zMDAxOCAyNS4yMjY4QzUuOTU0MjYgMjUuMjI2OCA1LjU5OTM1IDI1LjIwMTQgNS4yNTM0MiAyNS4xNDU0QzQuOTAzIDI1LjA4OTUgNC42Mjg5NiAyNC44MDQ2IDQuNTUyNTggMjQuNDE4QzQuNDc2MjEgMjQuMDI2NCA0LjYxOTk3IDIzLjYyOTYgNC45MTY0OCAyMy40MTA5WiIgZmlsbD0iI0ZGNjI1MCIvPgo8L3N2Zz4K')
      0 24,
    auto !important;
}

/* default node state */

[data-id]:not(.hidden) {
  pointer-events: all !important;
}

/* is_image */

[data-id].is_image [data-id] {
  pointer-events: none !important;
}

#og-content-wrapper {
  display: none;
}
</style><script id="s_html2canvas" src="https://animaapp.s3.amazonaws.com/static/html2canvas.min.js"></script><script id="s_anima-tracking" src="https://animaapp.s3.amazonaws.com/static/anima-tracking.js"></script><script id="anima-overrides-script" src="overrides.js"></script><script src="https://animaapp.s3.amazonaws.com/js/timeline.js"></script><style>
@import url("https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css");
@font-face {
    font-family: "DINNext LT Arabic-Bold";
	font-style: normal;
	font-weight: 700;
    src: url('https://anima-uploads.s3.amazonaws.com/5c51504ce900f8000a90a732/Linotype - DIN Next LT Arabic Bold.ttf') format("truetype");
}

@font-face {
    font-family: "DINNext LT Arabic-Regular";
	font-style: normal;
	font-weight: 400;
    src: url('https://anima-uploads.s3.amazonaws.com/5c51504ce900f8000a90a732/Linotype - DIN Next LT Arabic Regular.ttf') format("truetype");
}

.component-wrapper a,
.screen a {
    text-decoration: none;
    display: contents;
}



.full-width-a {
    width: 100%;
}

.full-height-a {
    height: 100%;
}

.screen textarea:focus,
.screen input:focus {
    outline: none;
}

.screen *,
.component-wrapper *{
    box-sizing: border-box;
}

.screen div {
    -webkit-text-size-adjust: none;
}

.container-center-vertical,
.container-center-horizontal {
    pointer-events: none;
    display: flex;
    flex-direction: row;
    padding: 0;
    margin: 0;
}

.container-center-vertical {
    align-items: center;
    height: 100%;
}

.container-center-horizontal {
    justify-content: center;
    width: 100%;
}

.container-center-vertical > *,
.container-center-horizontal > * {
    pointer-events: auto;
    flex-shrink: 0;
}

.component-wrapper,
.screen {
    overflow-wrap: break-word;
    word-wrap: break-word;
    word-break: break-all;
    word-break: break-word;
}

.auto-animated div {
    opacity: 0;
    position: absolute;
    --z-index: -1;
}

.auto-animated .container-center-vertical,
.auto-animated .container-center-horizontal {
    opacity: 1;
}

.overlay {
position: absolute;
opacity: 0;
display: none;
top: 0;
width: 100%;
height: 100%;
position: fixed;
}

.animate-appear {
    opacity: 0;
    display: block;
    animation: reveal 0.3s ease-in-out 1 normal forwards;
}

.animate-disappear {
    opacity: 1;
    display: block;
    animation: reveal 0.3s ease-in-out 1 reverse forwards;
}

.animate-nodelay {
    animation-delay: 0s;
}

@keyframes reveal {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}
.align-self-flex-start {
    align-self: flex-start;
}
.align-self-flex-end {
    align-self: flex-end;
}
.align-self-flex-center {
    align-self: center;
}
.valign-text-middle {
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.valign-text-bottom {
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
}
 input:focus {
    outline: none;
}
.component-wrapper,
.component-wrapper * {
    pointer-events: none;
}

.component-wrapper a *,
.component-wrapper a,
.component-wrapper input,
.component-wrapper video,
.component-wrapper iframe,
.listeners-active,
.listeners-active * {
    pointer-events: auto;
}

.hidden,
.hidden * {
    visibility: hidden;
    pointer-events: none;
}

.smart-layers-pointers,
.smart-layers-pointers * {
    pointer-events: auto;
    visibility: visible;
}

.component-wrapper.not-ready,
.component-wrapper.not-ready * {
    visibility: hidden !important;
}

.listeners-active-click,
.listeners-active-click * {
    cursor: pointer;
}

/* screen - home-page */

.dinnextltarabic-bold-salem-14px {
  color: var(--salem);
  font-family: 'DINNext LT Arabic-Bold', Helvetica, Arial, serif;
  font-size: 14px;
  font-style: normal;
  font-weight: 700;
}
.dinnextltarabic-bold-salem-23px {
  color: var(--salem);
  font-family: 'DINNext LT Arabic-Bold', Helvetica, Arial, serif;
  font-size: 23px;
  font-style: normal;
  font-weight: 700;
}
.dinnextltarabic-bold-salem-53px {
  color: var(--salem);
  font-family: 'DINNext LT Arabic-Bold', Helvetica, Arial, serif;
  font-size: 53px;
  font-style: normal;
  font-weight: 700;
}
.dinnextltarabic-bold-white-16px {
  color: var(--white);
  font-family: 'DINNext LT Arabic-Bold', Helvetica, Arial, serif;
  font-size: 16px;
  font-style: normal;
  font-weight: 700;
}
.dinnextltarabic-bold-white-18px {
  color: var(--white);
  font-family: 'DINNext LT Arabic-Bold', Helvetica, Arial, serif;
  font-size: 18px;
  font-style: normal;
  font-weight: 700;
}
.dinnextltarabic-bold-white-20px {
  color: var(--white);
  font-family: 'DINNext LT Arabic-Bold', Helvetica, Arial, serif;
  font-size: 20px;
  font-style: normal;
  font-weight: 700;
}
.dinnextltarabic-bold-white-26px {
  color: var(--white);
  font-family: 'DINNext LT Arabic-Bold', Helvetica, Arial, serif;
  font-size: 26px;
  font-style: normal;
  font-weight: 700;
}
.dinnextltarabic-regular-normal-gray-16px {
  color: var(--gray);
  font-family: 'DINNext LT Arabic-Regular', Helvetica, Arial, serif;
  font-size: 16px;
  font-style: normal;
  font-weight: 400;
}
.dinnextltarabic-regular-normal-white-14px {
  color: var(--white);
  font-family: 'DINNext LT Arabic-Regular', Helvetica, Arial, serif;
  font-size: 14px;
  font-style: normal;
  font-weight: 400;
}
.dinnextltarabic-regular-normal-white-18px {
  color: var(--white);
  font-family: 'DINNext LT Arabic-Regular', Helvetica, Arial, serif;
  font-size: 18px;
  font-style: normal;
  font-weight: 400;
}
.home-page {
  background-color: var(--white);
  height: 3885px;
  overflow: hidden;
  overflow-x: hidden;
  position: relative;
  width: 1920px;
}
.home-page .black-C61RwL {
  background-color: transparent;
  height: 21px;
  left: 1259px;
  position: absolute;
  top: 3172px;
  width: 30px;
}
.home-page .call-C61RwL {
  background-color: transparent;
  height: 22px;
  left: 1508px;
  position: absolute;
  top: 3327px;
  width: 22px;
}
.home-page .certificate-1-C61RwL {
  background-color: transparent;
  height: 90px;
  left: 1038px;
  position: absolute;
  top: 2788px;
  width: 89px;
}
.home-page .conference-C61RwL {
  background-color: transparent;
  height: 90px;
  left: 763px;
  position: absolute;
  top: 2788px;
  width: 90px;
}
.home-page .down-arrow-3-2P4qUJ {
  background-color: transparent;
  height: 4px;
  left: 388px;
  position: absolute;
  top: 1701px;
  transform: rotate(90deg);
  width: 8px;
}
.home-page .down-arrow-3-C61RwL {
  background-color: transparent;
  height: 9px;
  left: 442px;
  position: absolute;
  top: 2288px;
  width: 16px;
}
.home-page .down-arrow-3-QxM5SU {
  background-color: transparent;
  height: 4px;
  left: 388px;
  position: absolute;
  top: 1237px;
  transform: rotate(90deg);
  width: 8px;
}
.home-page .down-arrow-3-VMr6Om {
  background-color: transparent;
  height: 9px;
  left: 442px;
  position: absolute;
  top: 2480px;
  width: 16px;
}
.home-page .down-arrow-3-mzXdH9 {
  background-color: transparent;
  height: 9px;
  left: 442px;
  position: absolute;
  top: 2540px;
  width: 16px;
}
.home-page .down-arrow-3-qr8e7q {
  background-color: transparent;
  height: 4px;
  left: 816px;
  position: absolute;
  top: 1701px;
  transform: rotate(90deg);
  width: 8px;
}
.home-page .down-arrow-4-0xverS {
  background-color: transparent;
  height: 10px;
  left: calc(33.08% - 3px);
  position: absolute;
  top: 12px;
  width: 9px;
}
.home-page .down-arrow-4-B2GfxI {
  background-color: transparent;
  height: 10px;
  left: calc(33.08% - 3px);
  position: absolute;
  top: 12px;
  width: 9px;
}
.home-page .down-arrow-4-vUOK69 {
  background-color: transparent;
  height: 10px;
  left: calc(33.08% - 3px);
  position: absolute;
  top: 12px;
  width: 9px;
}
.home-page .email-1-C61RwL {
  background-color: transparent;
  height: 22px;
  left: 1508px;
  position: absolute;
  top: 3289px;
  width: 22px;
}
.home-page .fax-C61RwL {
  background-color: transparent;
  background-image: url();
  background-size: 100% 100%;
  height: 22px;
  left: 1508px;
  position: absolute;
  top: 3366px;
  width: 22px;
}
.home-page .group-1-C61RwL {
  background-color: transparent;
  border: 1px solid var(--white);
  height: 56px;
  left: 1228px;
  position: absolute;
  top: 2323px;
  width: 302px;
}
.home-page .group-10-C61RwL {
  background-color: transparent;
  height: 261px;
  left: 390px;
  position: absolute;
  top: 1303px;
  width: 368px;
}
.home-page .group-11-C61RwL {
  background-color: transparent;
  height: 261px;
  left: 776px;
  position: absolute;
  top: 1303px;
  width: 368px;
}
.home-page .group-12-Hq3tTi {
  background-color: transparent;
  background-image: url(https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-13@1x.svg);
  background-size: 100% 100%;
  height: 100%;
  left: 0px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-12-NAvAIr {
  background-color: transparent;
  background-image: url(https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-13@1x.svg);
  background-size: 100% 100%;
  height: 100%;
  left: 0px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-12-snFBxC {
  background-color: transparent;
  background-image: url(https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-13@1x.svg);
  background-size: 100% 100%;
  height: 100%;
  left: 0px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-13-F9Fwyw {
  background-color: transparent;
  bottom: 1px;
  height: 4px;
  left: 0px;
  position: absolute;
  width: 100%;
}
.home-page .group-13-jPptoO {
  background-color: transparent;
  bottom: 1px;
  height: 4px;
  left: 0px;
  position: absolute;
  width: 100%;
}
.home-page .group-13-mfPh9b {
  background-color: transparent;
  bottom: 1px;
  height: 4px;
  left: 0px;
  position: absolute;
  width: 100%;
}
.home-page .group-14-5UzcaE {
  background-color: transparent;
  background-image: url(https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-14@1x.svg);
  background-size: 100% 100%;
  height: 100%;
  left: 0px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-14-6uPUs0 {
  background-color: transparent;
  background-image: url(https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-14@1x.svg);
  background-size: 100% 100%;
  height: 100%;
  left: 0px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-14-a5qPDp {
  background-color: transparent;
  background-image: url(https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-14@1x.svg);
  background-size: 100% 100%;
  height: 100%;
  left: 0px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-15-F9Fwyw {
  background-color: transparent;
  height: calc(100.00% - 1px);
  position: absolute;
  right: calc(49.99% - 2px);
  top: 0px;
  width: 4px;
}
.home-page .group-15-jPptoO {
  background-color: transparent;
  height: calc(100.00% - 1px);
  position: absolute;
  right: calc(49.99% - 2px);
  top: 0px;
  width: 4px;
}
.home-page .group-15-mfPh9b {
  background-color: transparent;
  height: calc(100.00% - 1px);
  position: absolute;
  right: calc(49.99% - 2px);
  top: 0px;
  width: 4px;
}
.home-page .group-16-C61RwL {
  background-color: var(--cultured-pearl);
  height: 237px;
  left: 1300px;
  position: absolute;
  top: 1754px;
  width: 230px;
}
.home-page .group-17-C61RwL {
  background-color: var(--cultured-pearl);
  height: 237px;
  left: 818px;
  position: absolute;
  top: 1754px;
  width: 230px;
}
.home-page .group-18-C61RwL {
  background-color: var(--cultured-pearl);
  height: 237px;
  left: 1059px;
  position: absolute;
  top: 1754px;
  width: 230px;
}
.home-page .group-2-2P6mkC {
  background-color: transparent;
  height: 100%;
  left: 0px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-2-GAqQv4 {
  background-color: transparent;
  height: 100%;
  left: 0px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-2-KSzZLP {
  background-color: transparent;
  height: 100%;
  left: 0px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-2-MlVLO3 {
  background-color: transparent;
  background-image: url(https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-1@1x.svg);
  background-size: 100% 100%;
  height: 100%;
  left: 0px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-2-OSjNJ4 {
  background-color: transparent;
  background-image: url(https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-1@1x.svg);
  background-size: 100% 100%;
  height: 100%;
  left: 0px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-2-vbc91U {
  background-color: transparent;
  background-image: url(https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-1@1x.svg);
  background-size: 100% 100%;
  height: 100%;
  left: 0px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-20-Ju0xSg {
  background-color: transparent;
  height: 100%;
  left: 0px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-21-R9td65 {
  background-color: transparent;
  background-image: url(https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-25@1x.svg);
  background-size: 100% 100%;
  height: 100%;
  left: 0px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-22-hvAGCq {
  background-color: transparent;
  height: 21px;
  left: calc(50.00% - 10px);
  position: absolute;
  top: 0px;
  width: 21px;
}
.home-page .group-23-mhOZds {
  background-color: transparent;
  background-image: url(https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-26@1x.svg);
  background-size: 100% 100%;
  height: 100%;
  left: 0px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-24-hvAGCq {
  background-color: transparent;
  bottom: 0px;
  height: 68px;
  left: calc(50.00% - 18px);
  position: absolute;
  width: 36px;
}
.home-page .group-25-JNNVZB {
  background-color: var(--atlantis);
  height: 100%;
  left: 0px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-26-hvAGCq {
  background-color: transparent;
  bottom: 0px;
  height: 28px;
  position: absolute;
  right: calc(49.43% - 1px);
  width: 3px;
}
.home-page .group-27-70fnSN {
  background-color: transparent;
  background-image: url(https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-27@1x.svg);
  background-size: 100% 100%;
  height: 100%;
  left: 0px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-28-hvAGCq {
  background-color: transparent;
  height: 18px;
  position: absolute;
  right: 6px;
  top: calc(20.83% - 4px);
  width: 18px;
}
.home-page .group-29-aGnX7n {
  background-color: transparent;
  background-image: url(https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-28@1x.svg);
  background-size: 100% 100%;
  height: 100%;
  left: 0px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-3-C61RwL {
  background-color: transparent;
  height: 90px;
  left: 1325px;
  position: absolute;
  top: 2788px;
  width: 90px;
}
.home-page .group-3-Cx26oa {
  background-color: transparent;
  background-image: url(https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-2-1@1x.svg);
  background-size: 100% 100%;
  height: 100%;
  left: 0px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-3-m23VTR {
  background-color: transparent;
  background-image: url(https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-2@1x.svg);
  background-size: 100% 100%;
  height: 100%;
  left: 0px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-3-u9wY8u {
  background-color: transparent;
  background-image: url(https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-2@1x.svg);
  background-size: 100% 100%;
  height: 100%;
  left: 0px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-30-hvAGCq {
  background-color: transparent;
  bottom: 0px;
  height: 56px;
  position: absolute;
  right: 0px;
  width: 24px;
}
.home-page .group-31-tc4m1e {
  background-color: transparent;
  background-image: url(https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-29@1x.svg);
  background-size: 100% 100%;
  height: 100%;
  left: 0px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-32-hvAGCq {
  background-color: transparent;
  bottom: 0px;
  height: 28px;
  position: absolute;
  right: calc(25.93% - 2px);
  width: 9px;
}
.home-page .group-33-1Uvi6f {
  background-color: var(--atlantis);
  height: 100%;
  left: 0px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-34-hvAGCq {
  background-color: transparent;
  bottom: 0px;
  height: 22px;
  position: absolute;
  right: 13px;
  width: 3px;
}
.home-page .group-35-Wf2jKW {
  background-color: transparent;
  background-image: url(https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-30@1x.svg);
  background-size: 100% 100%;
  height: 100%;
  left: 0px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-36-hvAGCq {
  background-color: transparent;
  height: 18px;
  left: 6px;
  position: absolute;
  top: calc(20.83% - 4px);
  width: 18px;
}
.home-page .group-37-3Rqxx0 {
  background-color: transparent;
  background-image: url(https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-31@1x.svg);
  background-size: 100% 100%;
  height: 100%;
  left: 0px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-38-hvAGCq {
  background-color: transparent;
  bottom: 0px;
  height: 56px;
  left: 0px;
  position: absolute;
  width: 24px;
}
.home-page .group-39-I6xh79 {
  background-color: transparent;
  background-image: url(https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-32@1x.svg);
  background-size: 100% 100%;
  height: 100%;
  left: 0px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-4-VyzZeT {
  background-color: transparent;
  height: 24px;
  left: 37px;
  position: relative;
  top: calc(46.88% - 11px);
  width: calc(100.00% - 74px);
}
.home-page .group-40-hvAGCq {
  background-color: transparent;
  bottom: 0px;
  height: 28px;
  left: calc(25.93% - 2px);
  position: absolute;
  width: 9px;
}
.home-page .group-41-6FshY4 {
  background-color: var(--atlantis);
  height: 100%;
  left: 0px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-42-hvAGCq {
  background-color: transparent;
  bottom: 0px;
  height: 22px;
  left: 14px;
  position: absolute;
  width: 3px;
}
.home-page .group-43-ZqXNp2 {
  background-color: var(--atlantis);
  height: 100%;
  left: 1px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-44-zr5wVD {
  background-color: transparent;
  height: 3px;
  left: calc(49.91% - 1px);
  position: absolute;
  top: calc(48.36% - 1px);
  width: 2px;
}
.home-page .group-45-qiI7sJ {
  background-color: var(--atlantis);
  height: 100%;
  left: 1px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-46-zr5wVD {
  background-color: transparent;
  bottom: calc(44.73% - 1px);
  height: 3px;
  left: calc(49.90% - 5px);
  position: absolute;
  width: 10px;
}
.home-page .group-47-xkQ6g1 {
  background-color: transparent;
  background-image: url(https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-33@1x.svg);
  background-size: 100% 100%;
  height: 100%;
  left: 0px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-48-zr5wVD {
  background-color: transparent;
  bottom: 0px;
  height: 22px;
  left: 4px;
  position: absolute;
  width: calc(100.00% - 9px);
}
.home-page .group-49-RgDte2 {
  background-color: transparent;
  background-image: url(https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-34@1x.svg);
  background-size: 100% 100%;
  height: 100%;
  left: 0px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-5-PIEh7b {
  background-color: transparent;
  height: 24px;
  left: calc(49.85% - 51px);
  position: relative;
  top: calc(46.88% - 11px);
  width: 102px;
}
.home-page .group-50-zr5wVD {
  background-color: transparent;
  height: calc(100.00% - 25px);
  left: 0px;
  position: absolute;
  top: 0px;
  width: 100%;
}
.home-page .group-51-SlKBxm {
  background-color: transparent;
  background-image: url(https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-65@1x.svg);
  background-size: 100% 100%;
  height: 100%;
  left: 0px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-52-bxRgYj {
  background-color: transparent;
  height: 100%;
  left: 0px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-53-OQRFIN {
  background-color: transparent;
  background-image: url(https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-67@1x.svg);
  background-size: 100% 100%;
  height: 100%;
  left: 0px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-54-uBKP6Q {
  background-color: transparent;
  height: 100%;
  left: 0px;
  position: relative;
  top: 0px;
  width: 100%;
}
.home-page .group-55-C61RwL {
  background-color: transparent;
  height: 54px;
  left: 1206px;
  position: absolute;
  top: 3793px;
  width: 326px;
}
.home-page .group-6-C61RwL {
  background-color: var(--salem);
  height: 56px;
  left: 1344px;
  position: absolute;
  top: 1053px;
  width: 186px;
}
.home-page .group-8-C61RwL {
  background-color: transparent;
  height: 37px;
  left: 1394px;
  position: absolute;
  top: 571px;
  width: 103px;
}
.home-page .group-9-C61RwL {
  background-color: transparent;
  height: 261px;
  left: 1162px;
  position: absolute;
  top: 1303px;
  width: 368px;
}
.home-page .image-1-C61RwL {
  background-color: transparent;
  height: 112px;
  left: 1446px;
  position: absolute;
  top: 22px;
  width: 84px;
}
.home-page .image-1-VMr6Om {
  background-color: transparent;
  height: 82px;
  left: 390px;
  position: absolute;
  top: 3778px;
  width: 62px;
}
.home-page .image-2-lY2RgE {
  background-color: transparent;
  height: calc(100.00% + 94px);
  left: -116px;
  position: absolute;
  top: -56px;
  width: calc(100.00% + 220px);
}
.home-page .image-3-xwQzQP {
  background-color: transparent;
  height: calc(100.00% + 136px);
  left: -76px;
  position: absolute;
  top: -31px;
  width: calc(100.00% + 98px);
}
.home-page .image-4-JMZXos {
  background-color: transparent;
  height: calc(100.00% + 9px);
  left: -27px;
  position: absolute;
  top: -4px;
  width: calc(100.00% + 38px);
}
.home-page .image-4-b6vfd9 {
  background-color: transparent;
  height: calc(100.00% + 9px);
  left: -27px;
  position: absolute;
  top: -4px;
  width: calc(100.00% + 38px);
}
.home-page .image-4-lLYBwi {
  background-color: transparent;
  height: calc(100.00% + 9px);
  left: -27px;
  position: absolute;
  top: -4px;
  width: calc(100.00% + 38px);
}
.home-page .infosjuorgsa-C61RwL {
  background-color: transparent;
  color: var(--gray);
  font-family: 'DINNext LT Arabic-Regular', Helvetica, Arial, serif;
  font-size: 20px;
  font-style: normal;
  font-weight: 400;
  height: auto;
  left: 1355px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: 3286px;
  white-space: nowrap;
  width: auto;
}
.home-page .left-arrow-1-3cZhlu {
  background-color: transparent;
  height: 13px;
  left: 4px;
  position: absolute;
  top: calc(47.93% - 6px);
  width: 27px;
}
.home-page .left-arrow-1-bc1X8j {
  background-color: transparent;
  bottom: 3px;
  height: 13px;
  left: 0px;
  position: absolute;
  width: 27px;
}
.home-page .left-arrow-1-vSihsz {
  background-color: transparent;
  bottom: 3px;
  height: 13px;
  left: 0px;
  position: absolute;
  width: 27px;
}
.home-page .line-1-C61RwL {
  background-color: transparent;
  height: 1px;
  left: 442px;
  position: absolute;
  top: 2452px;
  width: 595px;
}
.home-page .line-2-C61RwL {
  background-color: transparent;
  height: 1px;
  left: 442px;
  position: absolute;
  top: 2518px;
  width: 595px;
}
.home-page .line-3-C61RwL {
  background-color: transparent;
  height: 348px;
  left: 1078px;
  position: absolute;
  top: 2234px;
  width: 1px;
}
.home-page .mask-group-1-C61RwL {
  background-color: transparent;
  height: 400px;
  left: 390px;
  position: absolute;
  top: 715px;
  width: 570px;
}
.home-page .mask-group-2-C61RwL {
  background-color: transparent;
  height: 400px;
  left: 390px;
  position: absolute;
  top: 249px;
  width: 716px;
}
.home-page .mask-group-3-9dtg3L {
  background-color: transparent;
  height: 100%;
  left: 0px;
  position: absolute;
  top: 0px;
  width: 100%;
}
.home-page .mask-group-3-CcEnn8 {
  background-color: transparent;
  height: 100%;
  left: 0px;
  position: absolute;
  top: 0px;
  width: 100%;
}
.home-page .mask-group-3-bAyQtV {
  background-color: transparent;
  height: 100%;
  left: 0px;
  position: absolute;
  top: 0px;
  width: 100%;
}
.home-page .online-conference-C61RwL {
  background-color: transparent;
  height: 90px;
  left: 509px;
  position: absolute;
  top: 2788px;
  width: 90px;
}
.home-page .paper-1-0xverS {
  background-color: transparent;
  background-image: url(https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-7@1x.svg);
  background-size: 100% 100%;
  height: 83px;
  position: absolute;
  right: calc(50.00% - 42px);
  top: calc(33.75% - 28px);
  width: 84px;
}
.home-page .paper-1-B2GfxI {
  background-color: transparent;
  background-image: url(https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-7@1x.svg);
  background-size: 100% 100%;
  height: 83px;
  position: absolute;
  right: calc(50.00% - 42px);
  top: calc(33.75% - 28px);
  width: 84px;
}
.home-page .paper-1-vUOK69 {
  background-color: transparent;
  background-image: url(https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-7@1x.svg);
  background-size: 100% 100%;
  height: 83px;
  position: absolute;
  right: calc(50.00% - 42px);
  top: calc(33.75% - 28px);
  width: 84px;
}
.home-page .path-1-hC1ZJx {
  background-color: transparent;
  height: calc(100.00% + 4px);
  left: 2px;
  position: absolute;
  top: -2px;
  transform: rotate(-90deg);
  width: calc(100.00% - 4px);
}
.home-page .path-1-qpjULP {
  background-color: transparent;
  height: calc(100.00% + 4px);
  left: 2px;
  position: absolute;
  top: -2px;
  transform: rotate(-90deg);
  width: calc(100.00% - 4px);
}
.home-page .path-1-rFW5xj {
  background-color: transparent;
  height: calc(100.00% + 4px);
  left: 2px;
  position: absolute;
  top: -2px;
  transform: rotate(-90deg);
  width: calc(100.00% - 4px);
}
.home-page .path-10-BDVYIj {
  background-color: transparent;
  height: 2px;
  position: absolute;
  right: 8px;
  top: calc(43.80% - 1px);
  width: 38px;
}
.home-page .path-10-Pdo3nh {
  background-color: transparent;
  height: 2px;
  position: absolute;
  right: 8px;
  top: calc(43.80% - 1px);
  width: 38px;
}
.home-page .path-10-Vk12Zd {
  background-color: transparent;
  height: 2px;
  position: absolute;
  right: 8px;
  top: calc(43.80% - 1px);
  width: 38px;
}
.home-page .path-11-BDVYIj {
  background-color: transparent;
  bottom: calc(45.37% - 1px);
  height: 2px;
  position: absolute;
  right: 8px;
  width: 38px;
}
.home-page .path-11-Pdo3nh {
  background-color: transparent;
  bottom: calc(45.37% - 1px);
  height: 2px;
  position: absolute;
  right: 8px;
  width: 38px;
}
.home-page .path-11-Vk12Zd {
  background-color: transparent;
  bottom: calc(45.37% - 1px);
  height: 2px;
  position: absolute;
  right: 8px;
  width: 38px;
}
.home-page .path-12-BDVYIj {
  background-color: transparent;
  bottom: calc(34.54% - 1px);
  height: 2px;
  position: absolute;
  right: 8px;
  width: 38px;
}
.home-page .path-12-Pdo3nh {
  background-color: transparent;
  bottom: calc(34.54% - 1px);
  height: 2px;
  position: absolute;
  right: 8px;
  width: 38px;
}
.home-page .path-12-Vk12Zd {
  background-color: transparent;
  bottom: calc(34.54% - 1px);
  height: 2px;
  position: absolute;
  right: 8px;
  width: 38px;
}
.home-page .path-16-Vdnrqs {
  background-color: transparent;
  height: 3px;
  left: 10px;
  position: absolute;
  top: calc(36.52% - 1px);
  width: 36px;
}
.home-page .path-17-Vdnrqs {
  background-color: transparent;
  height: 3px;
  left: 10px;
  position: absolute;
  top: calc(47.12% - 1px);
  width: 36px;
}
.home-page .path-18-Vdnrqs {
  background-color: transparent;
  bottom: calc(42.27% - 1px);
  height: 3px;
  left: 10px;
  position: absolute;
  width: 36px;
}
.home-page .path-19-Vdnrqs {
  background-color: transparent;
  bottom: calc(31.67% - 1px);
  height: 3px;
  left: 10px;
  position: absolute;
  width: 36px;
}
.home-page .path-20-Vdnrqs {
  background-color: transparent;
  bottom: 14px;
  height: 3px;
  left: 10px;
  position: absolute;
  width: 20px;
}
.home-page .path-21-Vdnrqs {
  background-color: transparent;
  height: 10px;
  left: calc(48.56% - 16px);
  position: absolute;
  top: 9px;
  width: 33px;
}
.home-page .path-22-Vdnrqs {
  background-color: transparent;
  height: 100%;
  left: 0px;
  position: absolute;
  top: 1px;
  width: calc(100.00% - 18px);
}
.home-page .path-23-Vdnrqs {
  background-color: transparent;
  bottom: 10px;
  height: 51px;
  position: absolute;
  right: 0px;
  width: 38px;
}
.home-page .path-24-Vdnrqs {
  background-color: transparent;
  bottom: calc(44.71% - 10px);
  height: 22px;
  position: absolute;
  right: 8px;
  width: 22px;
}
.home-page .path-3-W6Brx1 {
  background-color: transparent;
  height: 19px;
  left: calc(28.57% - 5px);
  position: absolute;
  top: 1px;
  width: 19px;
}
.home-page .path-35-NQHsaS {
  background-color: transparent;
  height: 29px;
  left: 19px;
  position: absolute;
  top: 1px;
  width: calc(100.00% - 38px);
}
.home-page .path-36-NQHsaS {
  background-color: transparent;
  height: 35px;
  left: 0px;
  position: absolute;
  top: 1px;
  width: 17px;
}
.home-page .path-37-NQHsaS {
  background-color: transparent;
  height: 35px;
  position: absolute;
  right: 1px;
  top: 1px;
  width: 17px;
}
.home-page .path-38-NQHsaS {
  background-color: transparent;
  height: 14px;
  left: calc(50.00% - 6px);
  position: absolute;
  top: 3px;
  width: 12px;
}
.home-page .path-39-NQHsaS {
  background-color: transparent;
  bottom: 12px;
  height: 35px;
  left: calc(50.00% - 14px);
  position: absolute;
  width: 29px;
}
.home-page .path-4-W6Brx1 {
  background-color: transparent;
  bottom: 0px;
  height: 17px;
  left: 1px;
  position: absolute;
  width: 34px;
}
.home-page .path-40-NQHsaS {
  background-color: transparent;
  bottom: 1px;
  height: 35px;
  position: absolute;
  right: 1px;
  width: 29px;
}
.home-page .path-41-NQHsaS {
  background-color: transparent;
  bottom: 1px;
  height: 35px;
  left: 0px;
  position: absolute;
  width: 29px;
}
.home-page .path-42-NQHsaS {
  background-color: transparent;
  height: 3px;
  left: calc(21.67% - 1px);
  position: absolute;
  top: calc(43.33% - 1px);
  width: 3px;
}
.home-page .path-43-NQHsaS {
  background-color: transparent;
  height: 3px;
  left: calc(26.67% - 1px);
  position: absolute;
  top: calc(43.33% - 1px);
  width: 3px;
}
.home-page .path-44-NQHsaS {
  background-color: transparent;
  height: 3px;
  left: calc(31.67% - 1px);
  position: absolute;
  top: calc(43.33% - 1px);
  width: 3px;
}
.home-page .path-45-NQHsaS {
  background-color: transparent;
  height: 19px;
  left: 13px;
  position: absolute;
  top: calc(44.90% - 8px);
  width: 23px;
}
.home-page .path-46-NQHsaS {
  background-color: transparent;
  height: 3px;
  position: absolute;
  right: calc(21.67% - 1px);
  top: calc(48.33% - 1px);
  width: 3px;
}
.home-page .path-47-NQHsaS {
  background-color: transparent;
  height: 3px;
  position: absolute;
  right: calc(26.67% - 1px);
  top: calc(48.33% - 1px);
  width: 3px;
}
.home-page .path-48-NQHsaS {
  background-color: transparent;
  height: 3px;
  position: absolute;
  right: calc(31.67% - 1px);
  top: calc(48.33% - 1px);
  width: 3px;
}
.home-page .path-49-NQHsaS {
  background-color: transparent;
  height: 19px;
  position: absolute;
  right: 13px;
  top: calc(44.90% - 8px);
  width: 23px;
}
.home-page .path-5-W6Brx1 {
  background-color: transparent;
  height: 3px;
  position: absolute;
  right: 1px;
  top: calc(44.87% - 1px);
  width: 19px;
}
.home-page .path-6-W6Brx1 {
  background-color: transparent;
  height: 18px;
  position: absolute;
  right: 0px;
  top: calc(41.30% - 7px);
  width: 10px;
}
.home-page .path-62-C61RwL {
  background-color: transparent;
  height: 21px;
  left: 1379px;
  position: absolute;
  top: 3172px;
  width: 21px;
}
.home-page .path-63-C61RwL {
  background-color: transparent;
  height: 21px;
  left: 1436px;
  position: absolute;
  top: 3172px;
  width: 26px;
}
.home-page .path-64-C61RwL {
  background-color: transparent;
  height: 21px;
  left: 1320px;
  position: absolute;
  top: 3172px;
  width: 21px;
}
.home-page .path-66-dOxxEk {
  background-color: transparent;
  height: 9px;
  left: calc(50.00% - 4px);
  position: absolute;
  top: 3px;
  width: 9px;
}
.home-page .path-68-LcnPDl {
  background-color: transparent;
  height: 7px;
  position: absolute;
  right: 3px;
  top: 3px;
  width: 7px;
}
.home-page .path-69-LcnPDl {
  background-color: transparent;
  height: 5px;
  position: absolute;
  right: calc(28.27% - 1px);
  top: calc(30.44% - 2px);
  width: 5px;
}
.home-page .path-70-LcnPDl {
  background-color: transparent;
  height: 3px;
  position: absolute;
  right: calc(36.54% - 1px);
  top: calc(38.47% - 1px);
  width: 3px;
}
.home-page .path-72-YzKg0Q {
  background-color: transparent;
  height: 3px;
  position: absolute;
  right: calc(25.17% - 2px);
  top: calc(36.05% - 1px);
  width: 8px;
}
.home-page .path-73-YzKg0Q {
  background-color: transparent;
  bottom: 44.97%;
  height: 1px;
  position: absolute;
  right: calc(47.34% - 1px);
  width: 2px;
}
.home-page .path-74-YzKg0Q {
  background-color: transparent;
  bottom: 44.96%;
  height: 1px;
  position: absolute;
  right: calc(33.06% - 1px);
  width: 2px;
}
.home-page .path-75-YzKg0Q {
  background-color: transparent;
  bottom: 44.97%;
  height: 1px;
  position: absolute;
  right: 18.79%;
  width: 2px;
}
.home-page .path-76-YzKg0Q {
  background-color: transparent;
  bottom: 36.49%;
  height: 1px;
  position: absolute;
  right: calc(47.34% - 1px);
  width: 2px;
}
.home-page .path-77-YzKg0Q {
  background-color: transparent;
  bottom: 36.48%;
  height: 1px;
  position: absolute;
  right: calc(33.06% - 1px);
  width: 2px;
}
.home-page .path-78-YzKg0Q {
  background-color: transparent;
  bottom: 36.49%;
  height: 1px;
  position: absolute;
  right: 18.79%;
  width: 2px;
}
.home-page .path-79-YzKg0Q {
  background-color: transparent;
  bottom: 28.02%;
  height: 1px;
  position: absolute;
  right: calc(47.34% - 1px);
  width: 2px;
}
.home-page .path-8-BDVYIj {
  background-color: transparent;
  height: 2px;
  position: absolute;
  right: 8px;
  top: calc(22.14% - 1px);
  width: 38px;
}
.home-page .path-8-Pdo3nh {
  background-color: transparent;
  height: 2px;
  position: absolute;
  right: 8px;
  top: calc(22.14% - 1px);
  width: 38px;
}
.home-page .path-8-Vk12Zd {
  background-color: transparent;
  height: 2px;
  position: absolute;
  right: 8px;
  top: calc(22.14% - 1px);
  width: 38px;
}
.home-page .path-80-YzKg0Q {
  background-color: transparent;
  bottom: 28.01%;
  height: 1px;
  position: absolute;
  right: calc(33.06% - 1px);
  width: 2px;
}
.home-page .path-81-YzKg0Q {
  background-color: transparent;
  bottom: 28.02%;
  height: 1px;
  position: absolute;
  right: 18.79%;
  width: 2px;
}
.home-page .path-82-YzKg0Q {
  background-color: transparent;
  bottom: 19.54%;
  height: 1px;
  position: absolute;
  right: calc(47.34% - 1px);
  width: 2px;
}
.home-page .path-83-YzKg0Q {
  background-color: transparent;
  bottom: 19.53%;
  height: 1px;
  position: absolute;
  right: calc(33.06% - 1px);
  width: 2px;
}
.home-page .path-84-YzKg0Q {
  background-color: transparent;
  bottom: 19.54%;
  height: 1px;
  position: absolute;
  right: 18.79%;
  width: 2px;
}
.home-page .path-9-BDVYIj {
  background-color: transparent;
  height: 2px;
  position: absolute;
  right: 8px;
  top: calc(32.97% - 1px);
  width: 38px;
}
.home-page .path-9-Pdo3nh {
  background-color: transparent;
  height: 2px;
  position: absolute;
  right: 8px;
  top: calc(32.97% - 1px);
  width: 38px;
}
.home-page .path-9-Vk12Zd {
  background-color: transparent;
  height: 2px;
  position: absolute;
  right: 8px;
  top: calc(32.97% - 1px);
  width: 38px;
}
.home-page .rectangle-1-C61RwL {
  background-color: var(--salem);
  height: 400px;
  left: 1104px;
  position: absolute;
  top: 249px;
  width: 426px;
}
.home-page .rectangle-12-9dtg3L {
  background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, #000000 100%);
  background-color: transparent;
  bottom: 0px;
  height: 125px;
  left: 0px;
  position: absolute;
  width: 100%;
}
.home-page .rectangle-12-CcEnn8 {
  background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, #000000 100%);
  background-color: transparent;
  bottom: 0px;
  height: 125px;
  left: 0px;
  position: absolute;
  width: 100%;
}
.home-page .rectangle-12-bAyQtV {
  background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, #000000 100%);
  background-color: transparent;
  bottom: 0px;
  height: 125px;
  left: 0px;
  position: absolute;
  width: 100%;
}
.home-page .rectangle-13-9dtg3L {
  background-color: var(--salem);
  height: 30px;
  position: absolute;
  right: 0px;
  top: 0px;
  width: 63px;
}
.home-page .rectangle-13-CcEnn8 {
  background-color: var(--salem);
  height: 30px;
  position: absolute;
  right: 0px;
  top: 0px;
  width: 63px;
}
.home-page .rectangle-13-bAyQtV {
  background-color: var(--salem);
  height: 30px;
  position: absolute;
  right: 0px;
  top: 0px;
  width: 63px;
}
.home-page .rectangle-14-C61RwL {
  background-color: var(--cultured-pearl);
  height: 445px;
  left: 0px;
  position: absolute;
  top: 1172px;
  width: 1920px;
}
.home-page .rectangle-15-C61RwL {
  background-color: var(--cultured-pearl);
  height: 110px;
  left: 390px;
  position: absolute;
  top: 1754px;
  width: 363px;
}
.home-page .rectangle-16-C61RwL {
  background-color: var(--salem);
  height: 110px;
  left: 646px;
  position: absolute;
  top: 1754px;
  width: 107px;
}
.home-page .rectangle-17-C61RwL {
  background-color: var(--cultured-pearl);
  height: 110px;
  left: 390px;
  position: absolute;
  top: 1881px;
  width: 363px;
}
.home-page .rectangle-18-C61RwL {
  background-color: var(--salem);
  height: 110px;
  left: 646px;
  position: absolute;
  top: 1881px;
  width: 107px;
}
.home-page .rectangle-2-C61RwL {
  background: linear-gradient(108.68deg, #007c42 3.18%, #97d12b 98.34%);
  background-color: transparent;
  height: 561px;
  left: 390px;
  position: absolute;
  top: 2063px;
  width: 1530px;
}
.home-page .rectangle-25-C61RwL {
  background-color: var(--cultured-pearl);
  height: 361px;
  left: 0px;
  position: absolute;
  top: 3061px;
  width: 1920px;
}
.home-page .rectangle-26-C61RwL {
  background-color: rgba(59,59,59,1.0);
  height: 337px;
  left: 0px;
  position: absolute;
  top: 3422px;
  width: 1920px;
}
.home-page .rectangle-47-C61RwL {
  background-color: var(--salem);
  height: 44px;
  left: 1486px;
  position: absolute;
  top: 3161px;
  width: 44px;
}
.home-page .rectangle-48-C61RwL {
  background-color: var(--salem);
  height: 44px;
  left: 1427px;
  position: absolute;
  top: 3161px;
  width: 44px;
}
.home-page .rectangle-49-C61RwL {
  background-color: var(--salem);
  height: 44px;
  left: 1368px;
  position: absolute;
  top: 3161px;
  width: 44px;
}
.home-page .rectangle-50-C61RwL {
  background-color: var(--salem);
  height: 44px;
  left: 1309px;
  position: absolute;
  top: 3161px;
  width: 44px;
}
.home-page .rectangle-51-C61RwL {
  background-color: var(--salem);
  height: 44px;
  left: 1252px;
  position: absolute;
  top: 3161px;
  width: 44px;
}
.home-page .rectangle-7-C61RwL {
  background: linear-gradient(267.9deg, #97d12c 0%, #007c42 66.81%);
  background-color: transparent;
  height: 63px;
  left: 0px;
  position: absolute;
  top: 150px;
  width: 1920px;
}
.home-page .rectangle-8-C61RwL {
  background-color: var(--atlantis);
  height: 100px;
  left: 390px;
  position: absolute;
  top: 24px;
  width: 232px;
}
.home-page .screen-sho--114612-pm-C61RwL {
  background-color: transparent;
  height: 361px;
  left: 390px;
  position: absolute;
  top: 3061px;
  width: 646px;
}
.home-page .textlabel-00LGpa {
  background-color: transparent;
  height: auto;
  left: 1202px;
  letter-spacing: 0.00px;
  line-height: 16px;
  position: absolute;
  text-align: left;
  top: 174px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-0xverS {
  background-color: transparent;
  bottom: 12px;
  color: var(--salem);
  font-family: 'DINNext LT Arabic-Bold', Helvetica, Arial, serif;
  font-size: 20px;
  font-style: normal;
  font-weight: 700;
  height: 80px;
  left: 8px;
  letter-spacing: 0.00px;
  line-height: 20px;
  overflow: hidden;
  position: absolute;
  text-align: center;
  width: calc(100.00% - 14px);
}
.home-page .textlabel-1xrfOz {
  background-color: transparent;
  height: auto;
  left: 864px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: 3652px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-2P4qUJ {
  background-color: transparent;
  height: auto;
  left: 1181px;
  letter-spacing: 0.00px;
  line-height: 53px;
  position: absolute;
  text-align: left;
  top: 1670px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-3cZhlu {
  background-color: transparent;
  color: var(--atlantis);
  font-family: 'DINNext LT Arabic-Regular', Helvetica, Arial, serif;
  font-size: 18px;
  font-style: normal;
  font-weight: 400;
  height: 39px;
  left: 0px;
  letter-spacing: 0.00px;
  line-height: 18px;
  position: absolute;
  text-align: right;
  top: 0px;
  width: calc(100.00% + 2px);
}
.home-page .textlabel-3kIbHG {
  background-color: transparent;
  height: auto;
  left: 827px;
  letter-spacing: 0.00px;
  line-height: 14px;
  position: absolute;
  text-align: left;
  top: 1694px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-4W6TZx {
  background-color: transparent;
  bottom: 0px;
  color: var(--gray);
  font-family: 'DINNext LT Arabic-Bold', Helvetica, Arial, serif;
  font-size: 16px;
  font-style: normal;
  font-weight: 700;
  height: 23px;
  left: 0px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  white-space: nowrap;
  width: calc(100.00% + 2px);
}
.home-page .textlabel-4XW1xH {
  background-color: transparent;
  height: auto;
  left: 1154px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: 3546px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-4yyt9N {
  background-color: transparent;
  height: auto;
  left: 1154px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: 3510px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-6y9Vs4 {
  background-color: transparent;
  height: auto;
  left: 1154px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: 3616px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-92ze9u {
  background-color: transparent;
  height: auto;
  left: 573px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: 3616px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-9dtg3L {
  background-color: transparent;
  color: var(--white);
  font-family: 'DINNext LT Arabic-Bold', Helvetica, Arial, serif;
  font-size: 14px;
  font-style: normal;
  font-weight: 700;
  height: 21px;
  letter-spacing: 0.00px;
  line-height: 14px;
  position: absolute;
  right: 19px;
  text-align: right;
  top: 6px;
  white-space: nowrap;
  width: 22px;
}
.home-page .textlabel-AViU91 {
  background-color: transparent;
  height: auto;
  left: 1099px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: 3462px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-B2GfxI {
  background-color: transparent;
  bottom: 12px;
  color: var(--salem);
  font-family: 'DINNext LT Arabic-Bold', Helvetica, Arial, serif;
  font-size: 20px;
  font-style: normal;
  font-weight: 700;
  height: 80px;
  left: 8px;
  letter-spacing: 0.00px;
  line-height: 20px;
  overflow: hidden;
  position: absolute;
  text-align: center;
  width: calc(100.00% - 14px);
}
.home-page .textlabel-C61RwL {
  background-color: transparent;
  height: auto;
  left: 1442px;
  letter-spacing: 0.00px;
  line-height: 16px;
  position: absolute;
  text-align: left;
  top: 174px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-CcEnn8 {
  background-color: transparent;
  color: var(--white);
  font-family: 'DINNext LT Arabic-Bold', Helvetica, Arial, serif;
  font-size: 14px;
  font-style: normal;
  font-weight: 700;
  height: 21px;
  letter-spacing: 0.00px;
  line-height: 14px;
  position: absolute;
  right: 19px;
  text-align: right;
  top: 6px;
  white-space: nowrap;
  width: 22px;
}
.home-page .textlabel-HlKRTo {
  background-color: transparent;
  height: auto;
  left: 681px;
  letter-spacing: 0.00px;
  line-height: 20px;
  position: absolute;
  text-align: left;
  top: 1954px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-IyHLVi {
  background-color: transparent;
  height: auto;
  left: 573px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: 3580px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-J1YQmd {
  background-color: transparent;
  height: auto;
  left: 560px;
  letter-spacing: 0.00px;
  line-height: 53px;
  position: absolute;
  text-align: left;
  top: 1670px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-JNxCmP {
  background-color: transparent;
  height: auto;
  left: 481px;
  letter-spacing: 0.00px;
  line-height: 23px;
  position: absolute;
  text-align: left;
  top: 2959px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-JyuZ4U {
  background-color: transparent;
  height: auto;
  left: 573px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: 3510px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-K0Quix {
  background-color: transparent;
  height: auto;
  left: 1017px;
  letter-spacing: 0.00px;
  line-height: 23px;
  position: absolute;
  text-align: left;
  top: 2959px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-KWQdvW {
  background-color: transparent;
  height: auto;
  left: 809px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: 3462px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-MGnoC8 {
  background-color: transparent;
  height: auto;
  left: 447px;
  letter-spacing: 0.00px;
  line-height: 20px;
  position: absolute;
  text-align: center;
  top: 88px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-NVuCL2 {
  background-color: transparent;
  color: var(--salem);
  font-family: 'DINNext LT Arabic-Bold', Helvetica, Arial, serif;
  font-size: 26px;
  font-style: normal;
  font-weight: 700;
  height: auto;
  left: 1476px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: 3096px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-NjZa5V {
  background-color: transparent;
  height: auto;
  left: 740px;
  letter-spacing: 0.00px;
  line-height: 23px;
  position: absolute;
  text-align: left;
  top: 2959px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-Pmjxql {
  background-color: transparent;
  height: auto;
  left: 1445px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: 3580px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-QL5zbd {
  background-color: transparent;
  height: auto;
  left: 870px;
  letter-spacing: 0.00px;
  line-height: 16px;
  position: absolute;
  text-align: left;
  top: 174px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-QxM5SU {
  background-color: transparent;
  height: auto;
  left: 1204px;
  letter-spacing: 0.00px;
  line-height: 53px;
  position: absolute;
  text-align: left;
  top: 1214px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-R7WrHk {
  background-color: transparent;
  color: var(--white);
  font-family: 'DINNext LT Arabic-Bold', Helvetica, Arial, serif;
  font-size: 28px;
  font-style: normal;
  font-weight: 700;
  height: 49px;
  left: 567px;
  letter-spacing: 0.00px;
  line-height: 28px;
  position: absolute;
  text-align: right;
  top: 2221px;
  width: 471px;
}
.home-page .textlabel-RG4bZJ {
  background-color: transparent;
  height: 23px;
  left: calc(44.58% - 34px);
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: -2px;
  white-space: nowrap;
  width: 77px;
}
.home-page .textlabel-V4bTox {
  background-color: transparent;
  height: auto;
  left: 1445px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: 3546px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-VMr6Om {
  background-color: transparent;
  color: var(--salem);
  font-family: 'DINNext LT Arabic-Bold', Helvetica, Arial, serif;
  font-size: 63px;
  font-style: normal;
  font-weight: 700;
  height: auto;
  left: 1292px;
  letter-spacing: 0.00px;
  line-height: 63px;
  position: absolute;
  text-align: left;
  top: 742px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-VkPPtx {
  background-color: transparent;
  height: auto;
  left: 399px;
  letter-spacing: 0.00px;
  line-height: 14px;
  position: absolute;
  text-align: left;
  top: 1230px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-XJjdz4 {
  background-color: transparent;
  height: auto;
  left: 573px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: 3688px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-XZCSIE {
  background-color: transparent;
  height: auto;
  left: 1445px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: 3616px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-XewAxu {
  background-color: transparent;
  height: auto;
  left: 864px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: 3510px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-YWzA7M {
  background-color: transparent;
  height: auto;
  left: 399px;
  letter-spacing: 0.00px;
  line-height: 14px;
  position: absolute;
  text-align: left;
  top: 1694px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-Yjvnfr {
  background-color: transparent;
  height: auto;
  left: 573px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: 3546px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-YulvC6 {
  background-color: transparent;
  height: auto;
  left: 1154px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: 3688px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-a5WPlX {
  background-color: transparent;
  color: var(--white);
  font-family: 'DINNext LT Arabic-Regular', Helvetica, Arial, serif;
  font-size: 20px;
  font-style: normal;
  font-weight: 400;
  height: auto;
  left: 681px;
  letter-spacing: 0.00px;
  line-height: 20px;
  position: absolute;
  text-align: left;
  top: 1828px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-a73nmY {
  background-color: transparent;
  color: var(--white);
  font-family: 'DINNext LT Arabic-Bold', Helvetica, Arial, serif;
  font-size: 23px;
  font-style: normal;
  font-weight: 700;
  height: 96px;
  left: 1104px;
  letter-spacing: 0.00px;
  line-height: 23px;
  position: absolute;
  text-align: right;
  top: 2229px;
  width: 428px;
}
.home-page .textlabel-bAyQtV {
  background-color: transparent;
  color: var(--white);
  font-family: 'DINNext LT Arabic-Bold', Helvetica, Arial, serif;
  font-size: 14px;
  font-style: normal;
  font-weight: 700;
  height: 21px;
  letter-spacing: 0.00px;
  line-height: 14px;
  position: absolute;
  right: 19px;
  text-align: right;
  top: 6px;
  white-space: nowrap;
  width: 22px;
}
.home-page .textlabel-bc1X8j {
  background-color: transparent;
  height: calc(100.00% + 2px);
  letter-spacing: 0.00px;
  line-height: 18px;
  position: absolute;
  right: -2px;
  text-align: right;
  top: 3px;
  white-space: nowrap;
  width: 76px;
}
.home-page .textlabel-braEeW {
  background-color: transparent;
  height: auto;
  left: 864px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: 3688px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-c0AJH2 {
  background-color: transparent;
  height: auto;
  left: 573px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: 3652px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-cOS1dg {
  background-color: transparent;
  height: auto;
  left: 864px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: 3616px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-dMQSMw {
  background-color: transparent;
  height: auto;
  left: 433px;
  letter-spacing: 0.00px;
  line-height: 16px;
  position: absolute;
  text-align: left;
  top: 174px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-eCxQ2N {
  background-color: transparent;
  height: auto;
  left: 560px;
  letter-spacing: 0.00px;
  line-height: 16px;
  position: absolute;
  text-align: left;
  top: 174px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-fFhl4P {
  background-color: transparent;
  height: auto;
  left: 1445px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: 3652px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-fxLfJc {
  background-color: transparent;
  height: auto;
  left: 1154px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: 3652px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-lK5iyl {
  background-color: transparent;
  color: var(--salem);
  font-family: 'DINNext LT Arabic-Bold', Helvetica, Arial, serif;
  font-size: 26px;
  font-style: normal;
  font-weight: 700;
  height: auto;
  left: 1406px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: 3244px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-mzXdH9 {
  background-color: transparent;
  color: var(--white);
  font-family: 'DINNext LT Arabic-Bold', Helvetica, Arial, serif;
  font-size: 53px;
  font-style: normal;
  font-weight: 700;
  height: auto;
  left: 1247px;
  letter-spacing: 0.00px;
  line-height: 53px;
  position: absolute;
  text-align: left;
  top: 2110px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-nJJrl1 {
  background-color: transparent;
  height: 23px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  right: 0px;
  text-align: right;
  top: -2px;
  white-space: nowrap;
  width: 123px;
}
.home-page .textlabel-o8kkY2 {
  background-color: transparent;
  height: auto;
  left: 864px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: 3580px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-oGxSr2 {
  background-color: transparent;
  height: auto;
  left: 1315px;
  letter-spacing: 0.00px;
  line-height: 23px;
  position: absolute;
  text-align: left;
  top: 2959px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-pIlutZ {
  background-color: transparent;
  height: auto;
  left: 518px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: 3462px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-qr8e7q {
  background-color: transparent;
  height: auto;
  left: 1340px;
  letter-spacing: 0.00px;
  line-height: 53px;
  position: absolute;
  text-align: left;
  top: 2676px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-rxvq3k {
  background-color: transparent;
  height: auto;
  left: 1311px;
  letter-spacing: 0.00px;
  line-height: 16px;
  position: absolute;
  text-align: left;
  top: 174px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-rzkej8 {
  background-color: transparent;
  height: auto;
  left: 746px;
  letter-spacing: 0.00px;
  line-height: 16px;
  position: absolute;
  text-align: left;
  top: 174px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-sOxCtc {
  background-color: transparent;
  height: auto;
  left: 1445px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: 3510px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-uUmcMD {
  background-color: transparent;
  height: auto;
  left: 1390px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: 3462px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-ucCvyV {
  background-color: transparent;
  height: auto;
  left: 1154px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: 3580px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-ujBnGL {
  background-color: transparent;
  height: auto;
  left: 864px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: 3546px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-vSihsz {
  background-color: transparent;
  height: calc(100.00% + 2px);
  left: 16px;
  letter-spacing: 0.00px;
  line-height: 18px;
  position: absolute;
  text-align: right;
  top: 3px;
  white-space: nowrap;
  width: calc(100.00% - 14px);
}
.home-page .textlabel-vUOK69 {
  background-color: transparent;
  bottom: 12px;
  color: var(--salem);
  font-family: 'DINNext LT Arabic-Bold', Helvetica, Arial, serif;
  font-size: 20px;
  font-style: normal;
  font-weight: 700;
  height: 80px;
  left: 8px;
  letter-spacing: 0.00px;
  line-height: 20px;
  overflow: hidden;
  position: absolute;
  text-align: center;
  width: calc(100.00% - 14px);
}
.home-page .textlabel-x5xjB4 {
  background-color: transparent;
  height: auto;
  left: 1045px;
  letter-spacing: 0.00px;
  line-height: 16px;
  position: absolute;
  text-align: left;
  top: 174px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-xsJokX {
  background-color: transparent;
  height: auto;
  left: 1445px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: 3688px;
  white-space: nowrap;
  width: auto;
}
.home-page .textlabel-xvqGsu {
  background-color: transparent;
  color: var(--salem);
  font-family: 'DINNext LT Arabic-Regular', Helvetica, Arial, serif;
  font-size: 16px;
  font-style: normal;
  font-weight: 400;
  height: auto;
  left: 1295px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: 3130px;
  white-space: nowrap;
  width: auto;
}
.home-page .user-6-C61RwL {
  background-color: transparent;
  height: 40px;
  left: 483px;
  position: absolute;
  top: 36px;
  width: 45px;
}
.home-page .whatsapp-C61RwL {
  background-color: transparent;
  height: 21px;
  left: 1497px;
  position: absolute;
  top: 3172px;
  width: 21px;
}
.home-page .x-C61RwL {
  background-color: transparent;
  color: var(--white);
  font-family: 'DINNext LT Arabic-Regular', Helvetica, Arial, serif;
  font-size: 15px;
  font-style: normal;
  font-weight: 400;
  height: 128px;
  left: 454px;
  letter-spacing: 0.00px;
  line-height: 15px;
  position: absolute;
  text-align: right;
  top: 2313px;
  width: 562px;
}
.home-page .x0114878444-C61RwL {
  background-color: transparent;
  color: var(--gray);
  font-family: 'DINNext LT Arabic-Regular', Helvetica, Arial, serif;
  font-size: 20px;
  font-style: normal;
  font-weight: 400;
  height: auto;
  left: 1383px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: 3364px;
  white-space: nowrap;
  width: auto;
}
.home-page .x0114878555-0114878855-C61RwL {
  background-color: transparent;
  color: var(--gray);
  font-family: 'DINNext LT Arabic-Regular', Helvetica, Arial, serif;
  font-size: 20px;
  font-style: normal;
  font-weight: 400;
  height: auto;
  left: 1254px;
  letter-spacing: 0.00px;
  line-height: 24px;
  position: absolute;
  text-align: right;
  top: 3326px;
  white-space: nowrap;
  width: auto;
}
.home-page .x07-01-2021-9dtg3L {
  background-color: transparent;
  bottom: 10px;
  height: 30px;
  letter-spacing: 0.00px;
  line-height: 14px;
  position: absolute;
  right: 16px;
  text-align: right;
  text-shadow: 0px 2px 1px rgba(0,0,0,1.0);;
  width: 168px;
}
.home-page .x07-01-2021-CcEnn8 {
  background-color: transparent;
  bottom: 10px;
  height: 30px;
  letter-spacing: 0.00px;
  line-height: 14px;
  position: absolute;
  right: 16px;
  text-align: right;
  text-shadow: 0px 2px 1px rgba(0,0,0,1.0);;
  width: 168px;
}
.home-page .x07-01-2021-bAyQtV {
  background-color: transparent;
  bottom: 10px;
  height: 30px;
  letter-spacing: 0.00px;
  line-height: 14px;
  position: absolute;
  right: 16px;
  text-align: right;
  text-shadow: 0px 2px 1px rgba(0,0,0,1.0);;
  width: 168px;
}
.home-page .x1-C61RwL {
  background-color: transparent;
  height: 49px;
  left: 567px;
  letter-spacing: 0.00px;
  line-height: 18px;
  position: absolute;
  text-align: right;
  top: 2273px;
  width: 471px;
}
.home-page .x110522-C61RwL {
  background-color: transparent;
  height: auto;
  left: 987px;
  letter-spacing: 0.00px;
  line-height: 53px;
  position: absolute;
  text-align: left;
  top: 2894px;
  white-space: nowrap;
  width: auto;
}
.home-page .x1245-C61RwL {
  background-color: transparent;
  height: auto;
  left: 489px;
  letter-spacing: 0.00px;
  line-height: 53px;
  position: absolute;
  text-align: left;
  top: 2894px;
  white-space: nowrap;
  width: auto;
}
.home-page .x14-C61RwL {
  background-color: transparent;
  color: var(--white);
  font-family: 'DINNext LT Arabic-Regular', Helvetica, Arial, serif;
  font-size: 53px;
  font-style: normal;
  font-weight: 400;
  height: auto;
  left: 670px;
  letter-spacing: 0.00px;
  line-height: 53px;
  position: absolute;
  text-align: left;
  top: 1766px;
  white-space: nowrap;
  width: auto;
}
.home-page .x14-VMr6Om {
  background-color: transparent;
  color: var(--white);
  font-family: 'DINNext LT Arabic-Bold', Helvetica, Arial, serif;
  font-size: 53px;
  font-style: normal;
  font-weight: 700;
  height: auto;
  left: 670px;
  letter-spacing: 0.00px;
  line-height: 53px;
  position: absolute;
  text-align: left;
  top: 1894px;
  white-space: nowrap;
  width: auto;
}
.home-page .x1442-C61RwL {
  background-color: transparent;
  height: 170px;
  left: 1141px;
  letter-spacing: 0.00px;
  line-height: 18px;
  overflow: hidden;
  position: absolute;
  text-align: right;
  top: 400px;
  width: 359px;
}
.home-page .x15-0xverS {
  background-color: transparent;
  bottom: -2px;
  color: var(--salem);
  font-family: 'DINNext LT Arabic-Bold', Helvetica, Arial, serif;
  font-size: 11px;
  font-style: normal;
  font-weight: 700;
  height: 31px;
  left: 8px;
  letter-spacing: 0.00px;
  line-height: 11px;
  position: absolute;
  text-align: center;
  width: calc(100.00% - 14px);
}
.home-page .x15-B2GfxI {
  background-color: transparent;
  bottom: -2px;
  color: var(--salem);
  font-family: 'DINNext LT Arabic-Bold', Helvetica, Arial, serif;
  font-size: 11px;
  font-style: normal;
  font-weight: 700;
  height: 31px;
  left: 8px;
  letter-spacing: 0.00px;
  line-height: 11px;
  position: absolute;
  text-align: center;
  width: calc(100.00% - 14px);
}
.home-page .x15-vUOK69 {
  background-color: transparent;
  bottom: -2px;
  color: var(--salem);
  font-family: 'DINNext LT Arabic-Bold', Helvetica, Arial, serif;
  font-size: 11px;
  font-style: normal;
  font-weight: 700;
  height: 31px;
  left: 8px;
  letter-spacing: 0.00px;
  line-height: 11px;
  position: absolute;
  text-align: center;
  width: calc(100.00% - 14px);
}
.home-page .x2-9dtg3L {
  background-color: transparent;
  bottom: 32px;
  height: 71px;
  left: 10px;
  letter-spacing: 0.00px;
  line-height: 20px;
  overflow: hidden;
  position: absolute;
  text-align: right;
  text-shadow: 0px 2px 1px rgba(0,0,0,1.0);;
  width: calc(100.00% - 26px);
}
.home-page .x2-C61RwL {
  background-color: transparent;
  height: auto;
  left: 877px;
  letter-spacing: 0.00px;
  line-height: 18px;
  position: absolute;
  text-align: right;
  top: 2475px;
  white-space: nowrap;
  width: auto;
}
.home-page .x2-CcEnn8 {
  background-color: transparent;
  bottom: 32px;
  height: 71px;
  left: 10px;
  letter-spacing: 0.00px;
  line-height: 20px;
  overflow: hidden;
  position: absolute;
  text-align: right;
  text-shadow: 0px 2px 1px rgba(0,0,0,1.0);;
  width: calc(100.00% - 26px);
}
.home-page .x2-VMr6Om {
  background-color: transparent;
  color: var(--white);
  font-family: 'DINNext LT Arabic-Bold', Helvetica, Arial, serif;
  font-size: 32px;
  font-style: normal;
  font-weight: 700;
  height: 117px;
  left: 1141px;
  letter-spacing: 0.00px;
  line-height: 32px;
  overflow: hidden;
  position: absolute;
  text-align: right;
  top: 307px;
  width: 359px;
}
.home-page .x2-bAyQtV {
  background-color: transparent;
  bottom: 32px;
  height: 71px;
  left: 10px;
  letter-spacing: 0.00px;
  line-height: 20px;
  overflow: hidden;
  position: absolute;
  text-align: right;
  text-shadow: 0px 2px 1px rgba(0,0,0,1.0);;
  width: calc(100.00% - 26px);
}
.home-page .x2021-C61RwL {
  background-color: transparent;
  color: var(--salem);
  font-family: 'DINNext LT Arabic-Regular', Helvetica, Arial, serif;
  font-size: 16px;
  font-style: normal;
  font-weight: 400;
  height: 78px;
  left: 399px;
  letter-spacing: 0.00px;
  line-height: 16px;
  overflow: hidden;
  position: absolute;
  text-align: right;
  top: 1775px;
  width: 230px;
}
.home-page .x2021-VMr6Om {
  background-color: transparent;
  color: var(--salem);
  font-family: 'DINNext LT Arabic-Bold', Helvetica, Arial, serif;
  font-size: 16px;
  font-style: normal;
  font-weight: 700;
  height: 78px;
  left: 399px;
  letter-spacing: 0.00px;
  line-height: 16px;
  overflow: hidden;
  position: absolute;
  text-align: right;
  top: 1902px;
  width: 230px;
}
.home-page .x2189719823-0xverS {
  background-color: transparent;
  color: var(--gray);
  font-family: 'DINNext LT Arabic-Regular', Helvetica, Arial, serif;
  font-size: 11px;
  font-style: normal;
  font-weight: 400;
  height: 22px;
  left: 8px;
  letter-spacing: 0.00px;
  line-height: 11px;
  position: absolute;
  text-align: left;
  top: 9px;
  width: 72px;
}
.home-page .x2189719823-B2GfxI {
  background-color: transparent;
  color: var(--gray);
  font-family: 'DINNext LT Arabic-Regular', Helvetica, Arial, serif;
  font-size: 11px;
  font-style: normal;
  font-weight: 400;
  height: 22px;
  left: 8px;
  letter-spacing: 0.00px;
  line-height: 11px;
  position: absolute;
  text-align: left;
  top: 9px;
  width: 72px;
}
.home-page .x2189719823-vUOK69 {
  background-color: transparent;
  color: var(--gray);
  font-family: 'DINNext LT Arabic-Regular', Helvetica, Arial, serif;
  font-size: 11px;
  font-style: normal;
  font-weight: 400;
  height: 22px;
  left: 8px;
  letter-spacing: 0.00px;
  line-height: 11px;
  position: absolute;
  text-align: left;
  top: 9px;
  width: 72px;
}
.home-page .x27-20-08051422-C61RwL {
  background-color: transparent;
  color: var(--gray);
  font-family: 'DINNext LT Arabic-Regular', Helvetica, Arial, serif;
  font-size: 18px;
  font-style: normal;
  font-weight: 400;
  height: 206px;
  left: 1001px;
  letter-spacing: 0.00px;
  line-height: 18px;
  position: absolute;
  text-align: right;
  top: 836px;
  width: 537px;
}
.home-page .x3-C61RwL {
  background-color: transparent;
  height: auto;
  left: 896px;
  letter-spacing: 0.00px;
  line-height: 18px;
  position: absolute;
  text-align: right;
  top: 2535px;
  white-space: nowrap;
  width: auto;
}
.home-page .x3566-C61RwL {
  background-color: transparent;
  height: auto;
  left: 742px;
  letter-spacing: 0.00px;
  line-height: 53px;
  position: absolute;
  text-align: left;
  top: 2894px;
  white-space: nowrap;
  width: auto;
}
.home-page .x44224-C61RwL {
  background-color: transparent;
  height: auto;
  left: 1289px;
  letter-spacing: 0.00px;
  line-height: 53px;
  position: absolute;
  text-align: left;
  top: 2894px;
  white-space: nowrap;
  width: auto;
}
.home-page .youtube-mIXknJ {
  background-color: transparent;
  background-image: url(https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/fill-195@1x.svg);
  background-size: 100% 100%;
  height: 100%;
  left: 0px;
  position: relative;
  top: 0px;
  width: 100%;
}
:root {
  --atlantis: rgba(133,199,46,1.0);
  --cultured-pearl: rgba(245,245,245,1.0);
  --gray: rgba(144,144,144,1.0);
  --salem: rgba(0,124,66,1.0);
  --white: rgba(255,255,255,1.0);
}
</style><meta name="author" content="AnimaApp.com - Design to code, Automated."><script id="anime-js-script" src="https://cdn.jsdelivr.net/npm/animejs@3.1.0/lib/anime.min.js" integrity="sha256-98Q574VkbV+PkxXCKSgL6jVq9mrVbS7uCdA+vt0sLS8=" crossorigin="anonymous"></script><script id="imgloaded-js-script" src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script><style id="hotspots-styles">
    .hotspot {
      position: absolute;
      border: 1px solid #2a9fd8;
      background: rgba(0, 173, 255, 0.54);
      opacity: 0;
      z-index: -1;
    }
  </style><style id="hide-styles">
    .hotspot {
      display:none !important;
    }
  </style><style id="action-links-styles">
.omniview-anima-action-links .link{
  height: 30px;
  width: 30px;
  border-radius: 1000px;
  background: #3B3B3B;
  border-radius: 1000px;
  display:flex;
  align-items:center;
  justify-content:center;
  cursor:pointer;
}

.omniview-anima-action-links .restart{
  height: 30px;
  padding:0 12px;
  background: #3B3B3B;
  border-radius: 1000px;
  display:flex;
  align-items:center;
  justify-content:center;
  cursor:pointer;
  color:#f1f1f1;
  font-size: 12px;
}

.omniview-anima-action-links{
  display:flex;
  align-items:center;
  position:fixed;
  bottom:20px;
  right:20px;
  font-family:  Arial, Helvetica, sans-serif;
  transition: all 0.5s ease-in-out;
  opacity:1;
}

.omniview-anima-action-links > * + *{
   margin-right: 0;
   margin-left: 10px;
}

.idle{
  opacity:0;
  pointer-events:none;
}



</style><link href="https://www.googletagmanager.com" rel="preconnect"><script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-105546425-1" charset="utf-8"></script></head>
<body style="margin: 0px; background: rgb(255, 255, 255); overflow-x: hidden;" dark-scroll="">
<input type="hidden" id="anPageName" name="page" value="home-page">
<div class="container-center-horizontal">
<div class="home-page screen " data-id="064d2955-02be-44ea-84ee-a00d1e7cdaa9">
<div class="rectangle-15-C61RwL" data-id="9e08ceb6-32d8-4666-a4cf-b0d2f6241e42"></div>
<div class="rectangle-17-C61RwL" data-id="1f4afffa-d18f-49d9-ac12-0f4f6ea4839d"></div>
<div class="rectangle-16-C61RwL" data-id="41fa2da5-0c06-4503-b9c0-26be60c64656"></div>
<div class="rectangle-18-C61RwL" data-id="87e88a93-c634-4bd8-b321-ddb34651d4f8"></div>
<div class="rectangle-14-C61RwL" data-id="0b65b20c-430c-4964-83a8-15892d17ecdd"></div>
<div class="rectangle-25-C61RwL" data-id="0895dc94-411a-41f0-a4ef-ac5ace868c9f"></div>
<div class="rectangle-26-C61RwL" data-id="4c21f5ea-2452-4f63-84b3-8dc863b6098c"></div>
<img class="image-1-C61RwL" data-id="4075a22b-5554-4128-b04a-dc5303067efa" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/image-1@1x.png" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/image-1@1x.png"><div class="rectangle-1-C61RwL" data-id="92dd5252-41d0-4af7-b189-3682a4628598"></div><div class="rectangle-8-C61RwL" data-id="d36f6478-2a69-4a7f-bb1a-396c5227760c"></div><div class="rectangle-7-C61RwL" data-id="32e080fd-cd7a-4f6c-8cb5-07b5ebd6306d"></div><div class="rectangle-2-C61RwL" data-id="6d36e7cc-8c4f-4b44-b25d-e9d61b1dc095"></div><div class="textlabel-C61RwL dinnextltarabic-bold-white-16px" data-id="476424be-42d8-4d6f-bc70-4027dc5a0720">الرئيسية</div><h1 class="textlabel-VMr6Om" data-id="82daa290-1079-4470-92f0-5af56cd4d7b4">عن الهيئة</h1><div class="textlabel-mzXdH9" data-id="e722c8a3-2964-48b6-b54b-c8df92420883">عضوية الهيئة</div><div class="textlabel-QxM5SU dinnextltarabic-bold-salem-53px" data-id="e3d0da92-2c0b-4fbe-aa99-97368c2bbd53">المركز الإعلامي</div><div class="textlabel-2P4qUJ dinnextltarabic-bold-salem-53px" data-id="652198e3-119d-49b4-afec-b02082616db0">اللوائح والأنظمة</div><div class="textlabel-qr8e7q dinnextltarabic-bold-salem-53px" data-id="f0124b98-213a-4104-9c31-ef45a91ed0cf">إحصائيات</div><div class="textlabel-J1YQmd dinnextltarabic-bold-salem-53px" data-id="b87ad8db-f5dd-4fa0-af08-3073109bee04">الفعاليات</div><div class="x14-C61RwL" data-id="871f9124-6154-446d-87fc-1cb4763d871f">14</div><div class="x14-VMr6Om" data-id="4da3628e-6a18-46ea-ae1e-4ef2518633b9">14</div><p class="x2021-C61RwL" data-id="d8ffe1fe-0d82-4926-be4e-1380cb1c2c2e">مجلس الإعلام الرياضي في هيئة الصحفيين بالاحساء يناقش برامجه للعام 2021<br></p><p class="x2021-VMr6Om" data-id="0c42676b-634e-4ea5-8b01-8bf617f060c6">مجلس الإعلام الرياضي في هيئة الصحفيين بالاحساء يناقش برامجه للعام 2021<br></p><div class="textlabel-a5WPlX" data-id="985a04a3-14ef-4945-af5f-9594283d8052">فبراير</div><div class="textlabel-HlKRTo dinnextltarabic-bold-white-20px" data-id="406eab68-04a2-469c-b5ac-2f351a4739ba">فبراير</div><div class="textlabel-VkPPtx dinnextltarabic-bold-salem-14px" data-id="04ae67cb-ec7e-4230-a061-2a6df1168347">المزيد</div><div class="textlabel-YWzA7M dinnextltarabic-bold-salem-14px" data-id="ca4e6226-64a0-4c73-abd4-1075e0862752">المزيد</div><div class="textlabel-3kIbHG dinnextltarabic-bold-salem-14px" data-id="8d37e9c5-aafc-412b-8c64-c85154755951">المزيد</div><div class="textlabel-a73nmY" data-id="7eb58663-3f72-438b-80a2-4292d588ccbe">يحق لكل من يمارس عملاً صحفياً التقدم بطلب الانتساب إلى عضوية الهيئة</div><div class="textlabel-R7WrHk" data-id="ef593a97-94e9-498f-ad39-e7298905a74d">شروط التقدم للعضوية</div><div class="x1-C61RwL dinnextltarabic-bold-white-18px" data-id="80cf67ca-f02b-4000-b658-5956e331a09c">1- العضو المتفرغ</div><div class="x2-C61RwL dinnextltarabic-bold-white-18px" data-id="9b934016-6520-44fc-a419-ca066a61ffe7">2- العضو غير المتفرغ</div><div class="x3-C61RwL dinnextltarabic-bold-white-18px" data-id="dc1d96ac-08b9-4215-bc2c-2cfe946359ca">3- العضو المنتسب</div><p class="x-C61RwL" data-id="5bebc912-f3be-4992-9189-22260faeb8d6">أ‌. كل صحفي سعودي متفرغ للمهنة الصحفية.<br>ب‌. كل صحفي معتمد ومتفرغ للعمل مراسلاً أو مدير مكتب بموجب اتفاق خطي لأي من الوسائل الإعلامية المحلية وغير المحلية نظير راتب ثابت ولا يمارس مهنة أخرى.<br>ج‌. أن تتوافر في الوسيلة الإعلامية التي يعمل بها جميع شروط المهنة الصحفية وفنون التحرير الصحفي وعلى رأسها الخبر.<br></p><div class="x27-20-08051422-C61RwL" data-id="891387af-1aad-45d5-bd8a-80b98f086a8d">تأسست هيئة الصحفيين السعوديين لخدمة الأهداف المهنية للصحفيين في المملكة العربية السعودية بموجب المادة رقم “27” من نظام المؤسسات الصحفية الصادر بالمرسوم الملكي رقم (م/20) بتاريخ 08/05/1422هـ، وتم إقرار لائحتها الأساسية في الاجتماع الأول للجمعية العمومية الذي انعقد بتاريخ 19/4/1425هـ الموافق 7/7/2004م، وتم اعتماد معالي وزير الثقافة والاعلام هذه اللائحة بموجب القرار رقم (م/و/383) بتاريخ 11/8/1425هـ. وينطلق تأسيس الهيئة من رغبة حقيقية في خدمة الأهداف المهنية للصحفيين في المملكة العربية السعودية. </div><div class="group-1-C61RwL" data-id="0407f4cb-20bc-4cab-9fff-78334c7ff45c"><div class="group-4-VyzZeT" data-id="dc02da06-0161-48a4-8152-688746633810"><div class="textlabel-vSihsz dinnextltarabic-regular-normal-white-18px" data-id="7eb3adab-58ec-4209-b38d-dd317e8f662d">طلب عضوية هيئة الصحفيين</div><div class="left-arrow-1-vSihsz" data-id="2bc2daff-1492-4a9e-9ebc-824fb88438a0"><div class="group-3-m23VTR" data-id="246edcec-0b0a-4412-80ed-94c438001816"></div></div></div></div><div class="textlabel-rxvq3k dinnextltarabic-bold-white-16px" data-id="7760c5ec-20d5-4639-b94a-39296c210f73">عن الهيئة</div><div class="textlabel-00LGpa dinnextltarabic-bold-white-16px" data-id="b9931df6-926c-441a-8d22-48ba26058bed">الأخبار</div><div class="textlabel-x5xjB4 dinnextltarabic-bold-white-16px" data-id="823c7e8e-c0ae-4691-8fa4-0b1cbb56b350">ميثاق الشرف</div><div class="textlabel-QL5zbd dinnextltarabic-bold-white-16px" data-id="6a0fe0b1-4010-4319-9004-7bd70644d2ee">اللوائح والأنظمة</div><div class="textlabel-rzkej8 dinnextltarabic-bold-white-16px" data-id="65d9dea3-400c-43b0-ad8c-a53f15cb0195">الصحافة</div><div class="textlabel-eCxQ2N dinnextltarabic-bold-white-16px" data-id="0e97b1e3-c120-432e-921c-11eb790094c9">الإذاعة والتلفزيون</div><div class="textlabel-dMQSMw dinnextltarabic-bold-white-16px" data-id="f2586381-e1a3-4271-a9a0-0053f622128f">التوظيف</div><img class="line-1-C61RwL" data-id="d998bb5c-8600-4939-b8af-fc31e7a19d4e" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/line-1@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/line-1@1x.svg"><img class="line-3-C61RwL" data-id="904bbd41-bcb9-4710-8a2e-965c7649e832" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/line-3@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/line-3@1x.svg"><img class="line-2-C61RwL" data-id="43570013-6a60-487a-9367-23f7ba1a4d5f" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/line-1@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/line-1@1x.svg"><img class="mask-group-1-C61RwL" data-id="5b5fc54b-08ae-4c13-ac78-936f2b13fc18" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/mask-group-1@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/mask-group-1@1x.svg"><img class="mask-group-2-C61RwL" data-id="c70faa20-2200-472d-a3c6-0b4d1080cb5c" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/mask-group-2@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/mask-group-2@1x.svg"><div class="x2-VMr6Om" data-id="04f868af-1d63-4b1c-a866-9d514a4a237b">‏صحفيو الأحساء يتجولون في ⁧‫#كرنفال الزهور2 في جواثى<br></div><div class="textlabel-MGnoC8 dinnextltarabic-bold-white-20px" data-id="50ec45b2-5608-4ef6-bfd6-bc13518bda13">تسجيل الدخول</div>
<div class="x1442-C61RwL dinnextltarabic-regular-normal-white-18px" data-id="9f2a6449-2df2-45ef-a19c-f599971d42b5">استقبلت أسرة مكتب وزارة البيئة والمياه والزراعة بالأحساء أسرة هيئة الصحفيين السعوديين بالاحساء مساء أمس الاربعاء ٢٢ جمادى الاول 1442 هـ في فعاليات النسخة الثانية من كرنفال الزهور بالأحساء والمقام بمدينة جواثا السياحية وتستمر فعالياته حتى ١٥ يناير الجاري&nbsp;&nbsp;بمشاركة مدير هيئة الصحفيين السعوديين بالاحساء وسعادة مدير عام مكتب وزارة البيئة والمياه والزراعة م ابراهيم بن خليل الخليل، وعدد من مسؤولي المكتب واعضاء الهيئة.</div><div class="down-arrow-3-C61RwL" data-id="ca8f6abd-f232-4d1d-9a02-b7c47313e9a3">
<div class="group-2-MlVLO3" data-id="34563ba5-29d3-4bff-91da-3bdba5b29fde"></div></div><div class="down-arrow-3-VMr6Om" data-id="f4ff7f50-7b29-4b4a-aabd-510114b6b75e"><div class="group-2-vbc91U" data-id="7243fb4f-2a70-4779-978b-9bcc5bf8e478"></div></div><div class="down-arrow-3-mzXdH9" data-id="da355166-9855-488a-b533-3d6d104e1a62"><div class="group-2-OSjNJ4" data-id="25414a36-4e8b-4d3a-add3-a9de151cad43"></div></div><div class="group-8-C61RwL" data-id="0d9f00c9-1436-4bc4-9a55-43920632580c"><div class="textlabel-3cZhlu" data-id="aed2d8c6-2fc1-472c-be8a-922382d94b28">التفاصيل</div><div class="left-arrow-1-3cZhlu" data-id="d04823e4-9b6d-4664-9036-11d6736e4b03"><div class="group-3-Cx26oa" data-id="20db3617-f30a-46f4-bda4-539be2e3e86a"></div></div></div><div class="group-6-C61RwL" data-id="a3c8943b-f9ea-42c0-82f5-6c4172a4f1e5"><div class="group-5-PIEh7b" data-id="876cd31c-d521-4d5d-bfc2-961f6a1b85b3"><div class="textlabel-bc1X8j dinnextltarabic-regular-normal-white-18px" data-id="14c0a2e7-5fc1-403d-8364-5e955b6707a2">اقرأ المزيد</div><div class="left-arrow-1-bc1X8j" data-id="f3f3f738-6f41-42e9-aa0b-d8478c1abfbe"><div class="group-3-u9wY8u" data-id="f3047e57-3412-4737-9897-c700d16b5d0c"></div></div></div></div><div class="user-6-C61RwL" data-id="6588cbb3-4e06-44c9-832f-844435a79b13"><img class="path-3-W6Brx1" data-id="899f9362-2b24-4a24-8c15-82818fe5a77d" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-3@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-3@1x.svg"><img class="path-4-W6Brx1" data-id="b7d65905-f1d2-400d-8fb1-15c17050fb01" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-4@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-4@1x.svg"><img class="path-5-W6Brx1" data-id="1da4f4b4-8e22-4b84-a622-1300d3549d86" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-5@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-5@1x.svg"><img class="path-6-W6Brx1" data-id="dec13352-8aab-4976-9122-8372c6dd6f15" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-6@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-6@1x.svg"></div><div class="group-9-C61RwL" data-id="c182ef0c-12f3-4e92-8c71-b442ee665169"><img class="mask-group-3-9dtg3L" data-id="32375e1d-f947-47da-ac97-85d54c32d9a0" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/mask-group-3@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/mask-group-3@1x.svg"><div class="rectangle-12-9dtg3L" data-id="328a12bf-b560-464d-a730-58d97f6cab58"></div><div class="x2-9dtg3L dinnextltarabic-bold-white-20px" data-id="1cc3e262-4f94-48c7-8a0d-3342e9380a74">‏صحفيو الأحساء يتجولون في ⁧‫#كرنفال الزهور2 في جواثى<br></div><p class="x07-01-2021-9dtg3L dinnextltarabic-regular-normal-white-14px" data-id="19e4e4e5-d684-4138-a078-365a9fc77d36">الخميس 07 / 01 / 2021 م</p><div class="rectangle-13-9dtg3L" data-id="0d6d527d-37a2-4df9-b04a-aac82b29cc01"></div><div class="textlabel-9dtg3L" data-id="8dc0d8ee-959a-473e-af6f-734603f429b7">عام</div></div><div class="group-10-C61RwL" data-id="d84c8939-03c3-4cca-a55c-04a0a6a0234a"><img class="mask-group-3-CcEnn8" data-id="f4a80d7c-5971-4982-85b3-f88dbd7ec0f5" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/mask-group-3-1@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/mask-group-3-1@1x.svg"><div class="rectangle-12-CcEnn8" data-id="49235b1c-712e-4a26-a723-fa7c89a308b1"></div><div class="x2-CcEnn8 dinnextltarabic-bold-white-20px" data-id="afcc73ff-bbcf-45a9-848f-3580dff9c43e">‏صحفيو الأحساء يتجولون في ⁧‫#كرنفال الزهور2 في جواثى<br></div><p class="x07-01-2021-CcEnn8 dinnextltarabic-regular-normal-white-14px" data-id="8a1c71e2-92a6-47a4-a84a-b886f675b2f3">الخميس 07 / 01 / 2021 م</p><div class="rectangle-13-CcEnn8" data-id="2a33fad6-4482-45b1-8206-105db78e8e85"></div><div class="textlabel-CcEnn8" data-id="785ec54b-1c18-43e5-8b69-1889077cce98">عام</div></div><div class="group-11-C61RwL" data-id="4c8252b3-1594-4e43-a4c4-fcee9c1e1f41"><img class="mask-group-3-bAyQtV" data-id="30160442-3cf3-46a6-a4dd-1573fb38ebfb" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/mask-group-3-2@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/mask-group-3-2@1x.svg"><div class="rectangle-12-bAyQtV" data-id="8c9f66e3-286a-4886-8622-bb8f588ca4c3"></div><div class="x2-bAyQtV dinnextltarabic-bold-white-20px" data-id="36646174-5ab2-4269-ba7e-ae81d43ecd3d">‏صحفيو الأحساء يتجولون في ⁧‫#كرنفال الزهور2 في جواثى<br></div><p class="x07-01-2021-bAyQtV dinnextltarabic-regular-normal-white-14px" data-id="8f666866-2cea-42d1-b681-e87ae45a920b">الخميس 07 / 01 / 2021 م</p><div class="rectangle-13-bAyQtV" data-id="8f716757-7b95-4935-80f1-58e39f59080e"></div><div class="textlabel-bAyQtV" data-id="c00efd5e-89a8-443a-b9cb-21b375d0174b">عام</div></div><div class="down-arrow-3-QxM5SU" data-id="686c18e6-951d-4a64-a7c0-61448d3a4d81"><div class="group-2-2P6mkC" data-id="5c147e76-6554-4f9f-9c9f-8025eca8e2d2"><img class="path-1-rFW5xj" data-id="2474858d-1380-48c0-a102-a47e82dee55f" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-1-3@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-1-3@1x.svg"></div></div><div class="down-arrow-3-2P4qUJ" data-id="3eb99101-b752-4be3-9a7c-0121d44c66e2"><div class="group-2-GAqQv4" data-id="83a70ced-a295-4a2f-9a5e-51133c084cf9"><img class="path-1-hC1ZJx" data-id="2556e6f4-4f7c-4e8a-b315-cce5819af8e0" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-1-3@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-1-3@1x.svg"></div></div><div class="down-arrow-3-qr8e7q" data-id="a1b8e834-131c-4bc5-8428-525ee56b52ba"><div class="group-2-KSzZLP" data-id="dd370edd-3fa9-46c7-9575-a34c92b1f369"><img class="path-1-qpjULP" data-id="f97d7923-794f-499f-ba01-40e204ff858b" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-1-3@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-1-3@1x.svg"></div></div><div class="group-16-C61RwL" data-id="2a082421-fac6-4a13-a69f-52e9bd228e7a"><div class="textlabel-vUOK69" data-id="bb93c28e-427e-4620-a780-73d2c410b828">اللائحة الأساسية لهيئة الصحفيين السعوديين<br></div><div class="x15-vUOK69" data-id="c54c04da-6b59-4a2c-97b3-3a8e98e099af">1.5 ميجابايت</div><div class="x2189719823-vUOK69" data-id="7c864fa1-fb4f-493c-8145-3ad817f99c2d">2189719823</div><div class="paper-1-vUOK69" data-id="c6da22e7-52ae-4580-ab0a-25474df7879c"><img class="path-8-BDVYIj" data-id="1030d78d-93fd-4409-8a55-daaf175ad384" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-8@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-8@1x.svg"><img class="path-9-BDVYIj" data-id="7b795465-8295-40c7-a5d8-fd6e243d4b62" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-9@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-9@1x.svg"><img class="path-10-BDVYIj" data-id="ef0e9eec-1369-4ba5-9cc8-dea3110e7b72" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-10@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-10@1x.svg"><img class="path-11-BDVYIj" data-id="5d3bc89a-77df-48a9-b3fc-fe2d34d87535" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-11@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-11@1x.svg"><img class="path-12-BDVYIj" data-id="dd66473b-9a96-45ba-8d8a-48aff4eb6f49" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-12@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-12@1x.svg"></div><div class="down-arrow-4-vUOK69" data-id="a2a97df9-1c10-424f-b849-3ba671229132"><div class="group-13-jPptoO" data-id="abc6ca39-5487-444f-95bc-25b5342cdab0"><div class="group-12-NAvAIr" data-id="cf50daeb-8547-485b-8f2b-28a6cf9592a2"></div></div><div class="group-15-jPptoO" data-id="36505782-d424-46f5-b38c-ff93fbdd4e1c"><div class="group-14-6uPUs0" data-id="971be10e-3da7-4687-b800-a4dbf8e37152"></div></div></div></div><div class="group-17-C61RwL" data-id="ca90362a-1917-401f-944b-7e0995479c1b"><div class="textlabel-B2GfxI" data-id="2e361746-f088-4332-a07d-dc31668b37cf">اللائحة الأساسية لهيئة الصحفيين السعوديين<br></div><div class="x15-B2GfxI" data-id="07005cf1-35c0-4e93-a4c9-0fff16b206fe">1.5 ميجابايت</div><div class="x2189719823-B2GfxI" data-id="aa063f3d-c9f9-40ef-ab4a-47edfa91ad39">2189719823</div><div class="paper-1-B2GfxI" data-id="c6326023-1bdf-4078-8e4a-6154631a9765"><img class="path-8-Vk12Zd" data-id="a5ff8605-43e6-4743-a56a-b2fb72a90d48" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-8@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-8@1x.svg"><img class="path-9-Vk12Zd" data-id="3c50469d-641d-4f3b-ab68-2fe4dfb80d54" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-9@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-9@1x.svg"><img class="path-10-Vk12Zd" data-id="44cfd8cd-d968-49c5-8313-2896aed4b8a3" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-10@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-10@1x.svg"><img class="path-11-Vk12Zd" data-id="1253d0f6-cd35-414b-be74-8c0ce3e73e3b" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-11@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-11@1x.svg"><img class="path-12-Vk12Zd" data-id="eb20a5d2-7ba5-4419-a40f-8c5796d12121" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-12@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-12@1x.svg"></div><div class="down-arrow-4-B2GfxI" data-id="413b116c-ee24-4836-9f91-6306a95f864a"><div class="group-13-mfPh9b" data-id="1e15a615-992b-48dc-b1f8-e8cba5459983"><div class="group-12-Hq3tTi" data-id="a8f353a0-2278-42ca-ac59-f38b59eb5ae3"></div></div><div class="group-15-mfPh9b" data-id="1a43bbc8-bdc7-4a4f-a5c0-fdf14e8ca0ad"><div class="group-14-a5qPDp" data-id="8b8ead6d-9ac6-4ad5-bc60-0ffc65d22270"></div></div></div></div><div class="group-18-C61RwL" data-id="12840e5b-c06a-4c5d-9f6a-d37bc6deb0b8"><div class="textlabel-0xverS" data-id="10aedbf1-7397-4ef2-b46c-8f2108348a45">اللائحة الأساسية لهيئة الصحفيين السعوديين<br></div><div class="x15-0xverS" data-id="ae8f424d-a9eb-44eb-adc9-8dfab17583d4">1.5 ميجابايت</div><div class="x2189719823-0xverS" data-id="477ccd3a-2b9f-4502-8603-094e7c5e1c02">2189719823</div><div class="paper-1-0xverS" data-id="3449b294-23cc-4c27-a1e0-ca973f554ec6"><img class="path-8-Pdo3nh" data-id="34a0f624-3836-4b07-bfea-49acf1fe68fd" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-8@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-8@1x.svg"><img class="path-9-Pdo3nh" data-id="52b79dcf-6790-4364-994b-71d1eb9fe68f" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-9@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-9@1x.svg"><img class="path-10-Pdo3nh" data-id="130f07c3-a3df-414a-9acc-846f69a6de42" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-10@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-10@1x.svg"><img class="path-11-Pdo3nh" data-id="089b4d83-7d85-4b37-818c-2023f54b0de9" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-11@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-11@1x.svg"><img class="path-12-Pdo3nh" data-id="b9cbf5ae-e2d6-4458-b575-d71544c8a6b3" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-12@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-12@1x.svg"></div><div class="down-arrow-4-0xverS" data-id="db202a30-4257-4794-a4fe-1bb04e138587"><div class="group-13-F9Fwyw" data-id="e0833565-eb10-4774-afd9-2f358d4cb0a2"><div class="group-12-snFBxC" data-id="07bd8175-b8ba-4f9d-8888-587755de9ea3"></div></div><div class="group-15-F9Fwyw" data-id="1eff1db9-f2ed-497f-9bcc-77ce3ea0a849"><div class="group-14-5UzcaE" data-id="e3b1f1e0-c74e-4bbd-848a-50d1b0c97dc1"></div></div></div></div><div class="x110522-C61RwL dinnextltarabic-bold-salem-53px" data-id="064f072f-e19e-4dbd-8c55-49685587cf7f">110,522</div><div class="textlabel-K0Quix dinnextltarabic-bold-salem-23px" data-id="c178dfc1-9bc2-4864-8e6e-97a44193f471">عدد العضويات</div><div class="certificate-1-C61RwL" data-id="d59dd108-d3a6-4969-8e99-ef4d536a2d68"><div class="group-20-Ju0xSg" data-id="eba1603a-4ad2-45a8-bbc5-cc55af6fc46c"><img class="path-16-Vdnrqs" data-id="bd52562c-43a5-4ce9-8d08-1298f2f9986e" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-16@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-16@1x.svg"><img class="path-17-Vdnrqs" data-id="8bf7c936-5522-4104-989e-de3b88c31bcf" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-17@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-17@1x.svg"><img class="path-18-Vdnrqs" data-id="235f26cb-d758-402e-b21c-d452501d3e68" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-18@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-18@1x.svg"><img class="path-19-Vdnrqs" data-id="67f512a2-18b2-4a2b-b5d0-29c20137907f" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-19@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-19@1x.svg"><img class="path-20-Vdnrqs" data-id="d0032bed-75cf-4a82-81b5-db5ac6cc363a" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-20@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-20@1x.svg"><img class="path-21-Vdnrqs" data-id="aabd8c5f-30be-4a89-9cea-7e94efbef7cc" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-21@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-21@1x.svg"><img class="path-22-Vdnrqs" data-id="09ad607c-32d9-4a4e-af14-be0ebdd7c3a2" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-22@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-22@1x.svg"><img class="path-23-Vdnrqs" data-id="9555d1ec-6f38-4b32-8702-9342c7a7ef95" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-23@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-23@1x.svg"><img class="path-24-Vdnrqs" data-id="8d6f923d-c378-4902-a640-2d1f601e42c1" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-24@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-24@1x.svg"></div></div><div class="x44224-C61RwL dinnextltarabic-bold-salem-53px" data-id="e352906a-bad7-4314-b73f-fa55e862f9df">44,224</div><div class="textlabel-oGxSr2 dinnextltarabic-bold-salem-23px" data-id="04f3786a-d6ce-4365-87f8-8dee7d281c41">عدد الأعضاء</div><div class="group-3-C61RwL" data-id="37c1f3f0-4fe6-4134-902f-0236067cd7be"><div class="group-22-hvAGCq" data-id="98e68fbf-3ebb-4e26-ad6a-959229593a91"><div class="group-21-R9td65" data-id="746c74af-5f1d-47cc-9c1c-438440ca7e5a"></div></div><div class="group-24-hvAGCq" data-id="667d283c-6c3e-4e2b-aa0b-b55fbec66ba0"><div class="group-23-mhOZds" data-id="5b33a343-0fd7-4c4d-8f41-c916080eb1e6"></div></div><div class="group-26-hvAGCq" data-id="bd17e894-af7e-4ecb-8e39-2cacf2865269"><div class="group-25-JNNVZB" data-id="2e586c6e-99c1-4b07-9966-ab1661a598ea"></div></div><div class="group-28-hvAGCq" data-id="ac447320-6c1b-4187-a5ad-72f8024c16d3"><div class="group-27-70fnSN" data-id="5022403e-ae47-4c76-9460-ee5c43086196"></div></div><div class="group-30-hvAGCq" data-id="6fcf56b8-44f0-4161-a5cd-df4c7621fc04"><div class="group-29-aGnX7n" data-id="e2e6d512-7eb5-4677-8dcc-118e39ca27f2"></div></div><div class="group-32-hvAGCq" data-id="d0ad8825-17cf-4e88-92d0-f95c0c97deb7"><div class="group-31-tc4m1e" data-id="7a05c32f-fd26-4398-93b9-7c2b3fcb32fa"></div></div><div class="group-34-hvAGCq" data-id="c85babbd-af94-42c6-8edd-31c56e761095"><div class="group-33-1Uvi6f" data-id="3fc35099-c4d4-42e5-b8f1-bb6cf541ad8f"></div></div><div class="group-36-hvAGCq" data-id="399582a5-830e-4521-b79b-dbe076863bd7"><div class="group-35-Wf2jKW" data-id="fface61f-5f78-4cdc-a1dd-726fc677c049"></div></div><div class="group-38-hvAGCq" data-id="bd8d28dc-672e-4038-876c-8eb44b64ef0e"><div class="group-37-3Rqxx0" data-id="d1a17a0c-0e95-41dd-bdd6-5fceb7023fbb"></div></div><div class="group-40-hvAGCq" data-id="9cddd216-087c-42ad-a5ed-fa87a63b03d0"><div class="group-39-I6xh79" data-id="89ffa767-d92b-4dbc-baca-463b0cab4880"></div></div><div class="group-42-hvAGCq" data-id="855f8075-3175-4f11-bef4-bb2cf5351270"><div class="group-41-6FshY4" data-id="42bf050a-a186-4633-8dc7-f9f2e09ff2b8"></div></div></div><div class="x3566-C61RwL dinnextltarabic-bold-salem-53px" data-id="de61e220-126d-4fee-b612-d7151773775e">3,566</div><div class="textlabel-NjZa5V dinnextltarabic-bold-salem-23px" data-id="416203b2-c992-427e-abd5-75f888478555">عدد المؤتمرات</div><div class="conference-C61RwL" data-id="04d2882a-6949-45cc-9af4-98fd080ef179"><div class="group-44-zr5wVD" data-id="7ba098eb-6de9-4b34-8c9e-2b61174c532b"><div class="group-43-ZqXNp2" data-id="aff48711-b29a-4da0-8004-ee546527709a"></div></div><div class="group-46-zr5wVD" data-id="a6b0c5c7-cb17-4a3a-8ed7-b3d207e5f8b1"><div class="group-45-qiI7sJ" data-id="9ebbb4c6-63db-48f2-9086-6f26a49c8a49"></div></div><div class="group-48-zr5wVD" data-id="a82afc8b-83c6-4f38-ab98-3654d00920de"><div class="group-47-xkQ6g1" data-id="6f91dd6f-a970-4a05-acc9-ae75a0c461ce"></div></div><div class="group-50-zr5wVD" data-id="ae6c1c0b-c8d0-44fb-b375-c6da64cabd8e"><div class="group-49-RgDte2" data-id="d11c5a49-8bab-4331-87ff-e3d1b05a90ab"></div></div></div><div class="x1245-C61RwL dinnextltarabic-bold-salem-53px" data-id="5ced45b3-4f4c-4a1a-88f0-7fc750f7bdb3">1,245</div><div class="textlabel-JNxCmP dinnextltarabic-bold-salem-23px" data-id="f44651a0-ba56-402f-b9a1-a15b7e15f4ee">عدد ورش العمل</div><img class="online-conference-C61RwL" data-id="48e15169-0b51-4236-a92b-bacbca69ef07" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/online-conference@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/online-conference@1x.svg"><div class="rectangle-47-C61RwL" data-id="e1abda25-acd4-4716-8444-4b2310b96320"></div><div class="rectangle-48-C61RwL" data-id="8c4066f0-fd42-4828-8199-66eee5c6f98d"></div><div class="rectangle-49-C61RwL" data-id="cf7da9f5-6413-4515-b142-5a0c765afb8e"></div><div class="rectangle-50-C61RwL" data-id="a7197862-8741-4e17-b510-f0ae802595da"></div><div class="rectangle-51-C61RwL" data-id="36eedd51-ad44-4f03-ae08-5afebf68c88b"></div><div class="textlabel-NVuCL2" data-id="8a46cf9d-f8c7-4332-874b-3dea964a7ab7">تابعنا</div><div class="textlabel-uUmcMD dinnextltarabic-bold-white-26px" data-id="34ede55c-32f5-4bbf-ae95-a87edc739ee5">عنوان القائمة</div><div class="textlabel-sOxCtc dinnextltarabic-regular-normal-gray-16px" data-id="5ecd17a5-cf3c-41e7-af77-71ab9502728e">عنصر القائمة</div><div class="textlabel-V4bTox dinnextltarabic-regular-normal-gray-16px" data-id="b92a5159-0a62-4375-be38-bd3bacffb80c">عنصر القائمة</div><div class="textlabel-Pmjxql dinnextltarabic-regular-normal-gray-16px" data-id="ba9cbb0a-9d3a-4815-9cd3-1edb32e1ed48">عنصر القائمة</div><div class="textlabel-XZCSIE dinnextltarabic-regular-normal-gray-16px" data-id="adfc391f-025c-4a66-882e-e4384ec02e04">عنصر القائمة</div><div class="textlabel-fFhl4P dinnextltarabic-regular-normal-gray-16px" data-id="d1073e8b-be9d-47a4-b220-3b7ef9a80977">عنصر القائمة</div><div class="textlabel-xsJokX dinnextltarabic-regular-normal-gray-16px" data-id="c94b5593-d981-4123-b08a-fb22629508e3">عنصر القائمة</div><div class="textlabel-AViU91 dinnextltarabic-bold-white-26px" data-id="18825bbc-c5f6-4366-9867-37bbac017d31">عنوان القائمة</div><div class="textlabel-4yyt9N dinnextltarabic-regular-normal-gray-16px" data-id="26285f58-93d5-43b4-910b-7e3bba9e42b7">عنصر القائمة</div><div class="group-55-C61RwL" data-id="447fc6af-cb85-4745-b484-385091f65f13"><p class="textlabel-4W6TZx" data-id="784f7fa2-2a18-42d7-bf33-77943452cb23">جميع الحقوق محفوظة لهيئة الصحفيين السعوديين</p><div class="textlabel-nJJrl1 dinnextltarabic-regular-normal-gray-16px" data-id="d1c2dee0-812d-4c08-921f-7f1a540faaf1">سياسة الخصوصية</div><div class="textlabel-RG4bZJ dinnextltarabic-regular-normal-gray-16px" data-id="ce82e4b7-fabb-4eb3-9628-bd07d6b88d15">حقوق النشر</div></div><div class="textlabel-4XW1xH dinnextltarabic-regular-normal-gray-16px" data-id="8868dd95-902e-406a-87f3-e9d3178709e3">عنصر القائمة</div><div class="textlabel-ucCvyV dinnextltarabic-regular-normal-gray-16px" data-id="dd21e6a8-88d7-49e3-a0d8-d91377382293">عنصر القائمة</div><div class="textlabel-6y9Vs4 dinnextltarabic-regular-normal-gray-16px" data-id="6788b9d7-0ce5-422a-bc69-390945d3b37d">عنصر القائمة</div><div class="textlabel-fxLfJc dinnextltarabic-regular-normal-gray-16px" data-id="81ac72bb-a5ca-47ec-8777-7a9684ddeabb">عنصر القائمة</div><div class="textlabel-YulvC6 dinnextltarabic-regular-normal-gray-16px" data-id="ab60260a-6f76-4749-ace7-9beb23a4516b">عنصر القائمة</div><div class="textlabel-KWQdvW dinnextltarabic-bold-white-26px" data-id="899323ed-771a-4499-a485-94fe4237ca5a">عنوان القائمة</div><div class="textlabel-XewAxu dinnextltarabic-regular-normal-gray-16px" data-id="6d3817eb-057a-4150-9be1-017ec2322474">عنصر القائمة</div><div class="textlabel-ujBnGL dinnextltarabic-regular-normal-gray-16px" data-id="29e8544a-abe9-40c1-863d-8967968cdd1c">عنصر القائمة</div><div class="textlabel-o8kkY2 dinnextltarabic-regular-normal-gray-16px" data-id="18a98476-54ba-46e4-aa95-173a831e0eb6">عنصر القائمة</div><div class="textlabel-cOS1dg dinnextltarabic-regular-normal-gray-16px" data-id="125d187d-b110-4cee-9c28-0a773b575a3b">عنصر القائمة</div><div class="textlabel-1xrfOz dinnextltarabic-regular-normal-gray-16px" data-id="aff3257e-ed8d-4a21-a942-51c4ec0a7511">عنصر القائمة</div><div class="textlabel-braEeW dinnextltarabic-regular-normal-gray-16px" data-id="99077d2b-7f4b-4708-8676-782da9c1042a">عنصر القائمة</div><div class="textlabel-pIlutZ dinnextltarabic-bold-white-26px" data-id="7751bac2-936e-4115-8e1e-b3c87db31af5">عنوان القائمة</div><div class="textlabel-JyuZ4U dinnextltarabic-regular-normal-gray-16px" data-id="16ebf619-e1f4-48eb-ba01-60636326b57d">عنصر القائمة</div><div class="textlabel-Yjvnfr dinnextltarabic-regular-normal-gray-16px" data-id="78040f24-8631-480f-8e2a-d9db0bc7b5c8">عنصر القائمة</div><div class="textlabel-IyHLVi dinnextltarabic-regular-normal-gray-16px" data-id="79908a71-8bb3-401a-8134-599f62a1bf13">عنصر القائمة</div><div class="textlabel-92ze9u dinnextltarabic-regular-normal-gray-16px" data-id="8184f68b-ea83-42f0-b009-534e19bd376f">عنصر القائمة</div><div class="textlabel-c0AJH2 dinnextltarabic-regular-normal-gray-16px" data-id="b9de67c1-47eb-46dc-a96b-1282ef6fd7e6">عنصر القائمة</div><div class="textlabel-XJjdz4 dinnextltarabic-regular-normal-gray-16px" data-id="69333e1d-8a57-4de7-b064-fb40d24e54f4">عنصر القائمة</div><div class="textlabel-lK5iyl" data-id="7f1a1598-a74b-45c7-8100-c160c84e03cc">تواصل معنا</div><div class="infosjuorgsa-C61RwL" data-id="051fc8b3-a196-4aa9-8ff2-f1f6c70afbae">info@sju.org.sa</div><div class="x0114878555-0114878855-C61RwL" data-id="cd18c461-3449-4ca3-86b3-1a66cc7c1c7e">0114878555 – 0114878855</div><div class="x0114878444-C61RwL" data-id="3c9b2181-cc20-4fa8-824d-207967e2afff">0114878444</div><p class="textlabel-xvqGsu" data-id="351da40c-c175-4e6b-a0ec-5ceff5393f44">تابعنا على مواقع التواصل الإجتماعي</p><img class="path-62-C61RwL" data-id="081998b9-b7d4-4528-9ff5-4449ae3d29db" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-62@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-62@1x.svg"><img class="path-63-C61RwL" data-id="32cb0187-2335-4727-9d39-d8e4a452bf5d" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-63@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-63@1x.svg"><img class="path-64-C61RwL" data-id="055f3536-3c1f-47e1-aa3e-96bf3581c883" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-64@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-64@1x.svg"><div class="black-C61RwL" data-id="f166b6aa-b632-4d66-80a1-23637abd63e6"><div class="youtube-mIXknJ" data-id="2a27867f-fd5f-4cc5-8ca6-8368f7b89827"></div></div><img class="whatsapp-C61RwL" data-id="0810bc90-1ea3-4200-a9ef-31588331c226" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/whatsapp@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/whatsapp@1x.svg"><img class="screen-sho--114612-pm-C61RwL" data-id="9d27ed67-885c-4923-a89e-58a312c53c4f" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/screen-shot-2021-01-29-at-11-46-12-pm@1x.png" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/screen-shot-2021-01-29-at-11-46-12-pm@1x.png"><div class="email-1-C61RwL" data-id="0c8f79d3-b188-44d3-929c-2b7f51693cf9"><div class="group-52-bxRgYj" data-id="fd9cc39d-6c58-4ac0-9a5e-bd1f21f9576a"><div class="group-51-SlKBxm" data-id="96beafd7-8164-4bfb-bb88-306788468b0b"><img class="path-66-dOxxEk" data-id="192de3de-f8af-45c9-b23a-03e6e0630f47" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-66@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-66@1x.svg"></div></div></div><div class="call-C61RwL" data-id="8695948f-736d-4d79-aa22-4c950efd354b"><div class="group-54-uBKP6Q" data-id="c2139d4b-230d-4cff-b967-9973f1acaaff"><div class="group-53-OQRFIN" data-id="dd3652cb-c662-49da-a4a0-6bada93f4139"><img class="path-68-LcnPDl" data-id="7e3fa9fc-bb35-42ec-aa11-a99162aeaacf" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-68@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-68@1x.svg"><img class="path-69-LcnPDl" data-id="2cbfcca5-e41f-445a-af9e-49d295dbe59b" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-69@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-69@1x.svg"><img class="path-70-LcnPDl" data-id="19d100a7-73ad-48f8-aad5-d75d15137363" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-70@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/path-70@1x.svg"></div></div></div><img class="fax-C61RwL" data-id="5a8bc7b5-4f62-4228-a26e-a4eabda7e351" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/fax@1x.svg" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/fax@1x.svg"><img class="image-1-VMr6Om" data-id="c6f59805-af42-499a-885f-207899ce5a04" src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/image-1-1@1x.png" anima-src="https://cdn.animaapp.com/projects/6024dc8eaa166ebde7beb8a1/releases/6024dd094f48929f1b3980cc/img/image-1-1@1x.png"></div></div><script src="launchpad-js/launchpad-banner.js" async=""></script><script defer="" src="https://animaapp.s3.amazonaws.com/static/restart-btn.min.js"></script><div class="omniview-anima-action-links idle" id="actions-wrap">

<a class="link" id="comments-link" target="_blank" href="https://projects.animaapp.com/p/null/s/null?mode=comments" style="display: none;">
<svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.301 15.137a.551.551 0 01.199-.55c.314-.23.554-.554.718-.965A6.015 6.015 0 014 10 6.006 6.006 0   0110.001 4 6.006 6.006 0 0116 10.001 6.006 6.006 0 019.999 16a5.98 5.98 0 01-3.095-.86 3.165 3.165 0 01-1.65.438 3.6  3.6 0 01-.57-.044c-.191-.03-.34-.186-.383-.397z" fill="#fff"></path></svg>
</a>

<a class="link" id="code-link" target="_blank" href="https://projects.animaapp.com/p/null/s/null?mode=code" style="display: none;">
<svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 15.667a1 1 0 01-.707-1.708l3.626-3.625-3.626-3.626a1 1 0 111.415-1.415l4.333 4.333a1 1 0 010 1.414l-4.333 4.333a.993.993 0 01-.707.294zM7.333 5a1 1 0 01.707 1.708l-3.626 3.625 3.627 3.626a1 1 0 11-1.415 1.415L2.293 11.04a1 1 0 010-1.415l4.333-4.333A.992.992 0 017.333 5z" fill="#fff"></path></svg>
</a>

<div class="restart" id="restart-btn" style="display: none;">
 <svg style="margin-right:6px" width="12" height="12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 11.817A5.017 5.017 0 01.994 6.811c0-.207.169-.375.375-.375s.375.168.375.375A4.265 4.265 0 006 11.067a4.265 4.265 0 004.256-4.256A4.265 4.265 0 006 2.555a.376.376 0 01-.375-.376c0-.206.169-.374.375-.374a5.017 5.017 0 015.006 5.006A5.017 5.017 0 016 11.817z" fill="#fff"></path><path d="M6.75 4.237a.37.37 0 01-.263-.112l-1.65-1.65a.363.363 0 010-.525L6.487.3c.15-.15.375-.15.525 0 .15.15.15.375 0 .525L5.625 2.212 7.012 3.6c.15.15.15.375 0 .525-.056.075-.15.112-.262.112z" fill="#fff"></path></svg>
    Restart
</div>

</div></body>
</html>
