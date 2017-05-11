<?php

// generowanie ID
function random_string($length) {
    $key = '';
    $keys = array_merge(range(0, 9), range('a', 'z'));

    for ($i = 0; $i < $length; $i++) {
        $key .= $keys[array_rand($keys)];
    }

    return $key;
}

echo random_string(8);
$mojeID = random_string(8);
// koniec - generowanie ID

//tworzenie folderu do upload zdjec

$path = 'upload/'.$mojeID;

if (!file_exists($path)) {
    mkdir($path, 0777, true);
}
// koniec - tworzenie folderu do upload zdjec

// dodany mejl dla klienta
$to2 = 'adam.butwin@gmail.com';
$subject2 = "Send HTML Email Using PHP";
// tresc mejla z fundation-email
$htmlContent2 = '
<!-- Inliner Build Version 4380b7741bb759d6cb997545f3add21ad48f010b -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/xhtml" style="min-height: 100%; background-color: #f3f3f3 !important;">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Title</title>
  </head>
  <body style="width: 100% !important; min-width: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 1.3; font-size: 16px; background-color: #f3f3f3 !important; margin: 0; padding: 0;" bgcolor="#f3f3f3 !important"><style type="text/css">
@media only screen and (max-width: 596px) {
  .small-float-center {
    margin: 0 auto !important; float: none !important; text-align: center !important;
  }
  .small-text-center {
    text-align: center !important;
  }
  .small-text-left {
    text-align: left !important;
  }
  .small-text-right {
    text-align: right !important;
  }
  .hide-for-large {
    display: block !important; width: auto !important; overflow: visible !important; max-height: none !important; font-size: inherit !important; line-height: inherit !important;
  }
  table.body table.container .hide-for-large {
    display: table !important; width: 100% !important;
  }
  table.body table.container .row.hide-for-large {
    display: table !important; width: 100% !important;
  }
  table.body table.container .callout-inner.hide-for-large {
    display: table-cell !important; width: 100% !important;
  }
  table.body table.container .show-for-large {
    display: none !important; width: 0; mso-hide: all; overflow: hidden;
  }
  table.body img {
    width: auto; height: auto;
  }
  table.body center {
    min-width: 0 !important;
  }
  table.body .container {
    width: 95% !important;
  }
  table.body .columns {
    height: auto !important; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; padding-left: 16px !important; padding-right: 16px !important;
  }
  table.body .column {
    height: auto !important; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; padding-left: 16px !important; padding-right: 16px !important;
  }
  table.body .columns .column {
    padding-left: 0 !important; padding-right: 0 !important;
  }
  table.body .columns .columns {
    padding-left: 0 !important; padding-right: 0 !important;
  }
  table.body .column .column {
    padding-left: 0 !important; padding-right: 0 !important;
  }
  table.body .column .columns {
    padding-left: 0 !important; padding-right: 0 !important;
  }
  table.body .collapse .columns {
    padding-left: 0 !important; padding-right: 0 !important;
  }
  table.body .collapse .column {
    padding-left: 0 !important; padding-right: 0 !important;
  }
  td.small-1 {
    display: inline-block !important; width: 8.33333% !important;
  }
  th.small-1 {
    display: inline-block !important; width: 8.33333% !important;
  }
  td.small-2 {
    display: inline-block !important; width: 16.66667% !important;
  }
  th.small-2 {
    display: inline-block !important; width: 16.66667% !important;
  }
  td.small-3 {
    display: inline-block !important; width: 25% !important;
  }
  th.small-3 {
    display: inline-block !important; width: 25% !important;
  }
  td.small-4 {
    display: inline-block !important; width: 33.33333% !important;
  }
  th.small-4 {
    display: inline-block !important; width: 33.33333% !important;
  }
  td.small-5 {
    display: inline-block !important; width: 41.66667% !important;
  }
  th.small-5 {
    display: inline-block !important; width: 41.66667% !important;
  }
  td.small-6 {
    display: inline-block !important; width: 50% !important;
  }
  th.small-6 {
    display: inline-block !important; width: 50% !important;
  }
  td.small-7 {
    display: inline-block !important; width: 58.33333% !important;
  }
  th.small-7 {
    display: inline-block !important; width: 58.33333% !important;
  }
  td.small-8 {
    display: inline-block !important; width: 66.66667% !important;
  }
  th.small-8 {
    display: inline-block !important; width: 66.66667% !important;
  }
  td.small-9 {
    display: inline-block !important; width: 75% !important;
  }
  th.small-9 {
    display: inline-block !important; width: 75% !important;
  }
  td.small-10 {
    display: inline-block !important; width: 83.33333% !important;
  }
  th.small-10 {
    display: inline-block !important; width: 83.33333% !important;
  }
  td.small-11 {
    display: inline-block !important; width: 91.66667% !important;
  }
  th.small-11 {
    display: inline-block !important; width: 91.66667% !important;
  }
  td.small-12 {
    display: inline-block !important; width: 100% !important;
  }
  th.small-12 {
    display: inline-block !important; width: 100% !important;
  }
  .columns td.small-12 {
    display: block !important; width: 100% !important;
  }
  .column td.small-12 {
    display: block !important; width: 100% !important;
  }
  .columns th.small-12 {
    display: block !important; width: 100% !important;
  }
  .column th.small-12 {
    display: block !important; width: 100% !important;
  }
  table.body td.small-offset-1 {
    margin-left: 8.33333% !important;
  }
  table.body th.small-offset-1 {
    margin-left: 8.33333% !important;
  }
  table.body td.small-offset-2 {
    margin-left: 16.66667% !important;
  }
  table.body th.small-offset-2 {
    margin-left: 16.66667% !important;
  }
  table.body td.small-offset-3 {
    margin-left: 25% !important;
  }
  table.body th.small-offset-3 {
    margin-left: 25% !important;
  }
  table.body td.small-offset-4 {
    margin-left: 33.33333% !important;
  }
  table.body th.small-offset-4 {
    margin-left: 33.33333% !important;
  }
  table.body td.small-offset-5 {
    margin-left: 41.66667% !important;
  }
  table.body th.small-offset-5 {
    margin-left: 41.66667% !important;
  }
  table.body td.small-offset-6 {
    margin-left: 50% !important;
  }
  table.body th.small-offset-6 {
    margin-left: 50% !important;
  }
  table.body td.small-offset-7 {
    margin-left: 58.33333% !important;
  }
  table.body th.small-offset-7 {
    margin-left: 58.33333% !important;
  }
  table.body td.small-offset-8 {
    margin-left: 66.66667% !important;
  }
  table.body th.small-offset-8 {
    margin-left: 66.66667% !important;
  }
  table.body td.small-offset-9 {
    margin-left: 75% !important;
  }
  table.body th.small-offset-9 {
    margin-left: 75% !important;
  }
  table.body td.small-offset-10 {
    margin-left: 83.33333% !important;
  }
  table.body th.small-offset-10 {
    margin-left: 83.33333% !important;
  }
  table.body td.small-offset-11 {
    margin-left: 91.66667% !important;
  }
  table.body th.small-offset-11 {
    margin-left: 91.66667% !important;
  }
  table.body table.columns td.expander {
    display: none !important;
  }
  table.body table.columns th.expander {
    display: none !important;
  }
  table.body .right-text-pad {
    padding-left: 10px !important;
  }
  table.body .text-pad-right {
    padding-left: 10px !important;
  }
  table.body .left-text-pad {
    padding-right: 10px !important;
  }
  table.body .text-pad-left {
    padding-right: 10px !important;
  }
  table.menu {
    width: 100% !important;
  }
  table.menu td {
    width: auto !important; display: inline-block !important;
  }
  table.menu th {
    width: auto !important; display: inline-block !important;
  }
  table.menu.vertical td {
    display: block !important;
  }
  table.menu.vertical th {
    display: block !important;
  }
  table.menu.small-vertical td {
    display: block !important;
  }
  table.menu.small-vertical th {
    display: block !important;
  }
  table.menu[align="center"] {
    width: auto !important;
  }
  table.button.small-expand {
    width: 100% !important;
  }
  table.button.small-expanded {
    width: 100% !important;
  }
  table.button.small-expand table {
    width: 100%;
  }
  table.button.small-expanded table {
    width: 100%;
  }
  table.button.small-expand table a {
    text-align: center !important; width: 100% !important; padding-left: 0 !important; padding-right: 0 !important;
  }
  table.button.small-expanded table a {
    text-align: center !important; width: 100% !important; padding-left: 0 !important; padding-right: 0 !important;
  }
  table.button.small-expand center {
    min-width: 0;
  }
  table.button.small-expanded center {
    min-width: 0;
  }
}
</style>
    <!-- <style> -->
    <table class="body" data-made-with-foundation="" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; background-color: #f3f3f3 !important; height: 100%; width: 100%; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; font-size: 16px; margin: 0; padding: 0;" bgcolor="#f3f3f3 !important"><tr style="vertical-align: top; text-align: left; padding: 0;" align="left"><td class="float-center" align="center" valign="top" style="word-wrap: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: center; float: none; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; font-size: 16px; margin: 0 auto; padding: 0;">
          <center data-parsed="" style="width: 100%; min-width: 580px;">
            <table class="spacer float-center" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: center; width: 100%; float: none; margin: 0 auto; padding: 0;"><tbody><tr style="vertical-align: top; text-align: left; padding: 0;" align="left"><td height="16px" style="font-size: 16px; line-height: 16px; word-wrap: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; mso-line-height-rule: exactly; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; margin: 0; padding: 0;" align="left" valign="top"> </td>
                </tr></tbody></table><table align="center" class="container header float-center" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: center; width: 580px; float: none; background: #f3f3f3; margin: 0 auto; padding: 0;" bgcolor="#f3f3f3"><tbody><tr style="vertical-align: top; text-align: left; padding: 0;" align="left"><td style="word-wrap: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; font-size: 16px; margin: 0; padding: 0;" align="left" valign="top">
                    <table class="row" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; position: relative; display: table; padding: 0;"><tbody><tr style="vertical-align: top; text-align: left; padding: 0;" align="left"><th class="small-12 large-12 columns first last" style="width: 564px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 1.3; font-size: 16px; margin: 0 auto; padding: 0 16px 16px;" align="left">
                            <table style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; padding: 0;"><tr style="vertical-align: top; text-align: left; padding: 0;" align="left"><th style="color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 1.3; font-size: 16px; margin: 0; padding: 0;" align="left">
                                  <h1 class="text-center" style="text-align: center; color: inherit; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; word-wrap: normal; font-size: 34px; margin: 0 0 10px; padding: 0;" align="center">Welcome to Kraken Academy</h1>
                                  <center data-parsed="" style="width: 100%; min-width: 532px;">
                                    <table align="center" class="menu text-center float-center" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: center; width: auto !important; float: none; margin: 0 auto; padding: 0;"><tr style="vertical-align: top; text-align: left; padding: 0;" align="left"><td style="word-wrap: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; font-size: 16px; margin: 0; padding: 0;" align="left" valign="top">
                                          <table style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; padding: 0;"><tr style="vertical-align: top; text-align: left; padding: 0;" align="left"><th class="menu-item float-center" style="float: none; text-align: center; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; font-size: 16px; margin: 0 auto; padding: 10px;" align="center"><a href="#" style="color: #2199e8; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: center; line-height: 1.3; text-decoration: none; margin: 0; padding: 0;">About</a></th>
                                              <th class="menu-item float-center" style="float: none; text-align: center; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; font-size: 16px; margin: 0 auto; padding: 10px;" align="center"><a href="#" style="color: #2199e8; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: center; line-height: 1.3; text-decoration: none; margin: 0; padding: 0;">Course List</a></th>
                                              <th class="menu-item float-center" style="float: none; text-align: center; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; font-size: 16px; margin: 0 auto; padding: 10px;" align="center"><a href="#" style="color: #2199e8; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: center; line-height: 1.3; text-decoration: none; margin: 0; padding: 0;">Campus Map</a></th>
                                              <th class="menu-item float-center" style="float: none; text-align: center; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; font-size: 16px; margin: 0 auto; padding: 10px;" align="center"><a href="#" style="color: #2199e8; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: center; line-height: 1.3; text-decoration: none; margin: 0; padding: 0;">Contact</a></th>
                                            </tr></table></td>
                                      </tr></table></center>
                                </th>
                                <th class="expander" style="visibility: hidden; width: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 1.3; font-size: 16px; margin: 0; padding: 0;" align="left"></th>
                              </tr></table></th>
                        </tr></tbody></table></td>
                </tr></tbody></table><table align="center" class="container body-border float-center" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: center; width: 580px; float: none; border-top-width: 8px; border-top-color: #663399; border-top-style: solid; background: #fefefe; margin: 0 auto; padding: 0;" bgcolor="#fefefe"><tbody><tr style="vertical-align: top; text-align: left; padding: 0;" align="left"><td style="word-wrap: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; font-size: 16px; margin: 0; padding: 0;" align="left" valign="top">
                    <table class="row" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; position: relative; display: table; padding: 0;"><tbody><tr style="vertical-align: top; text-align: left; padding: 0;" align="left"><th class="small-12 large-12 columns first last" style="width: 564px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 1.3; font-size: 16px; margin: 0 auto; padding: 0 16px 16px;" align="left">
                            <table style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; padding: 0;"><tr style="vertical-align: top; text-align: left; padding: 0;" align="left"><th style="color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 1.3; font-size: 16px; margin: 0; padding: 0;" align="left">
                                  <table class="spacer" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; padding: 0;"><tbody><tr style="vertical-align: top; text-align: left; padding: 0;" align="left"><td height="32px" style="font-size: 32px; line-height: 32px; word-wrap: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; mso-line-height-rule: exactly; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; margin: 0; padding: 0;" align="left" valign="top"> </td>
                                      </tr></tbody></table><center data-parsed="" style="width: 100%; min-width: 532px;"> <img src="http://placehold.it/200x200" align="center" class="float-center" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; width: auto; max-width: 100%; clear: both; display: block; float: none; text-align: center; margin: 0 auto;" /></center>
                                  <table class="spacer" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; padding: 0;"><tbody><tr style="vertical-align: top; text-align: left; padding: 0;" align="left"><td height="16px" style="font-size: 16px; line-height: 16px; word-wrap: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; mso-line-height-rule: exactly; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; margin: 0; padding: 0;" align="left" valign="top"> </td>
                                      </tr></tbody></table><h4 style="color: inherit; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 1.3; word-wrap: normal; font-size: 24px; margin: 0 0 10px; padding: 0;" align="left">An exciting future of terrorizing sailors awaits you at Kraken Academy.</h4>
                                  <p style="color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 1.3; font-size: 16px; margin: 0 0 10px; padding: 0;" align="left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque culpa vel architecto, perspiciatis eius cum autem quidem, sunt consequuntur, impedit dolor vitae illum nobis sint nihil aliquid? Assumenda, amet, officia.</p>
                                  <center data-parsed="" style="width: 100%; min-width: 532px;">
                                    <table align="center" class="menu float-center" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: center; width: auto !important; float: none; margin: 0 auto; padding: 0;"><tr style="vertical-align: top; text-align: left; padding: 0;" align="left"><td style="word-wrap: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; font-size: 16px; margin: 0; padding: 0;" align="left" valign="top">
                                          <table style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; padding: 0;"><tr style="vertical-align: top; text-align: left; padding: 0;" align="left"><th class="menu-item float-center" style="float: none; text-align: center; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; font-size: 16px; margin: 0 auto; padding: 10px;" align="center"><a href="#" style="color: #2199e8; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 1.3; text-decoration: none; margin: 0; padding: 0;">krakenacademy.com</a></th>
                                              <th class="menu-item float-center" style="float: none; text-align: center; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; font-size: 16px; margin: 0 auto; padding: 10px;" align="center"><a href="#" style="color: #2199e8; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 1.3; text-decoration: none; margin: 0; padding: 0;">Facebook</a></th>
                                              <th class="menu-item float-center" style="float: none; text-align: center; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; font-size: 16px; margin: 0 auto; padding: 10px;" align="center"><a href="#" style="color: #2199e8; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 1.3; text-decoration: none; margin: 0; padding: 0;">Twitter</a></th>
                                              <th class="menu-item float-center" style="float: none; text-align: center; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; font-size: 16px; margin: 0 auto; padding: 10px;" align="center"><a href="#" style="color: #2199e8; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 1.3; text-decoration: none; margin: 0; padding: 0;">(408)-555-0123</a></th>
                                            </tr></table></td>
                                      </tr></table></center>
                                </th>
                                <th class="expander" style="visibility: hidden; width: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 1.3; font-size: 16px; margin: 0; padding: 0;" align="left"></th>
                              </tr></table></th>
                        </tr></tbody></table><table class="spacer" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; padding: 0;"><tbody><tr style="vertical-align: top; text-align: left; padding: 0;" align="left"><td height="16px" style="font-size: 16px; line-height: 16px; word-wrap: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; mso-line-height-rule: exactly; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; margin: 0; padding: 0;" align="left" valign="top"> </td>
                        </tr></tbody></table></td>
                </tr></tbody></table></center>
        </td>
      </tr></table></body>
</html>
';

// Set content-type header for sending HTML email
$headers2 = "MIME-Version: 1.0" . "\r\n";
$headers2 .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers2 .= 'From: CodexWorld<info@codexworld.com>' . "\r\n";
$headers2 .= 'Cc: welcome@example.com' . "\r\n";
$headers2 .= 'Bcc: welcome2@example.com' . "\r\n";

// Send email
if(mail($to2,$subject2,$htmlContent2,$headers2)):
    $successMsg = 'Email has sent successfully.';
else:
    $errorMsg = 'Email sending fail.';
endif;

// Pierwszy mejl:
// check if fields passed are empty - Pierwszy mejl
if(empty($_POST['name'])        ||
   empty($_POST['foo'])         ||
   empty($_POST['phone'])       ||
   empty($_POST['email'])       ||
   empty($_POST['message']) ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
    echo "No arguments Provided!";
    return false;
   }

$name = $_POST['name'];
$foo = $_POST['foo'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$message = $_POST['message'];

// create email body and send it
$to = 'adam.butwin@gmail.com'; // PUT YOUR EMAIL ADDRESS HERE
$email_subject = "Modern Business Contact Form:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "You have received a new message from your website's contact form.\n\n"."Here are the details:\n\nName: $name\n\nfoo: $foo\n\nPhone: $phone\n\nEmail: $email_address\n\nMessage:\n$message\n\nmojeID:\n$mojeID\n\nmojeID2:\n$mojeID";
$headers = "From: noreply@your-domain.com\n";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
