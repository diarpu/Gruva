<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$phone = trim($_POST["tel"]);
$message = trim($_POST["message"]);
$form = trim($_POST["form"]);

$mail = new PHPMailer();
        //Server settings
$mail->SMTPDebug = 0; 
$mail->isSMTP();
// $mail->Host = '';  // Specify main and backup SMTP servers
$mail->Host = '	free.mboxhosting.com';
 $mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'contacto@diarpu.ga';                 // SMTP username
$mail->Password = '74291074d';                           // SMTP password
$mail->SMTPSecure = 'tls';
$mail->Port = 25;
// $mail->Port = 587;                                   // TCP port to connect to
$mail->CharSet = 'UTF8';

$mail->setFrom('contacto@diarpu.ga', 'Gruva');  // Host
$mail->addAddress('danilhamsik@gmail.com', 'Diego');
$mail->addReplyTo($email,$name);

    //Content
$mail->isHTML(true);
$mail->Subject = $form;

$mailContent = '
                <!DOCTYPE HTML
                    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
                    xmlns:o="urn:schemas-microsoft-com:office:office">

                <head>
                    <!--[if gte mso 9]>
                <xml>
                <o:OfficeDocumentSettings>
                    <o:AllowPNG/>
                    <o:PixelsPerInch>96</o:PixelsPerInch>
                </o:OfficeDocumentSettings>
                </xml>
                <![endif]-->
                    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta name="x-apple-disable-message-reformatting">
                    <!--[if !mso]><!-->
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <!--<![endif]-->
                    <title></title>

                    <style type="text/css">
                        table,
                        td {
                            color: #000000;
                        }

                        @media (max-width: 480px) {
                            #u_column_3 .v-col-background-color {
                                background-color: #ffffff !important;
                            }

                            #u_column_4 .v-col-background-color {
                                background-color: #ffffff !important;
                            }

                            #u_column_35 .v-col-background-color {
                                background-color: #ffffff !important;
                            }

                            #u_column_39 .v-col-background-color {
                                background-color: #ffffff !important;
                            }
                        }

                        @media only screen and (min-width: 620px) {
                            .u-row {
                                width: 600px !important;
                            }

                            .u-row .u-col {
                                vertical-align: top;
                            }

                            .u-row .u-col-41p57 {
                                width: 249.42px !important;
                            }

                            .u-row .u-col-58p43 {
                                width: 350.58px !important;
                            }

                            .u-row .u-col-100 {
                                width: 600px !important;
                            }

                        }

                        @media (max-width: 620px) {
                            .u-row-container {
                                max-width: 100% !important;
                                padding-left: 0px !important;
                                padding-right: 0px !important;
                            }

                            .u-row .u-col {
                                min-width: 320px !important;
                                max-width: 100% !important;
                                display: block !important;
                            }

                            .u-row {
                                width: calc(100% - 40px) !important;
                            }

                            .u-col {
                                width: 100% !important;
                            }

                            .u-col>div {
                                margin: 0 auto;
                            }

                            .no-stack .u-col {
                                min-width: 0 !important;
                                display: table-cell !important;
                            }

                            .no-stack .u-col-41p57 {
                                width: 41.57% !important;
                            }

                            .no-stack .u-col-58p43 {
                                width: 58.43% !important;
                            }

                        }

                        body {
                            margin: 0;
                            padding: 0;
                        }

                        table,
                        tr,
                        td {
                            vertical-align: top;
                            border-collapse: collapse;
                        }

                        p {
                            margin: 0;
                        }

                        .ie-container table,
                        .mso-container table {
                            table-layout: fixed;
                        }

                        * {
                            line-height: inherit;
                        }
                    </style>

                    <!--[if !mso]><!-->
                    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
                    <!--<![endif]-->

                </head>

                <body class="clean-body"
                    style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #eeeeee;color: #000000">
                    <!--[if IE]><div class="ie-container"><![endif]-->
                    <!--[if mso]><div class="mso-container"><![endif]-->
                    <table
                        style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #eeeeee;width:100%"
                        cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr style="vertical-align: top">
                                <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #eeeeee;"><![endif]-->


                                    <div class="u-row-container"
                                        style="padding: 0px;background-color: #f6f6f6">
                                        <div class="u-row"
                                            style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #070761;">
                                            <div
                                                style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                                                <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: #f6f6f6;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #070761;"><![endif]-->

                                                <!--[if (mso)|(IE)]><td align="center" width="600" class="v-col-background-color" style="background-color: #000000;width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                                                <div class="u-col u-col-100"
                                                    style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                                                    <div class="v-col-background-color"
                                                        style="background-color: #000000;width: 100% !important;">
                                                        <!--[if (!mso)&(!IE)]><!-->
                                                        <div
                                                            style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                                            <!--<![endif]-->

                                                            <table style="font-family:"Open Sans",sans-serif;" role="presentation"
                                                                cellpadding="0" cellspacing="0" width="100%" border="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:"Open Sans",sans-serif;"
                                                                            align="left">

                                                                            <div
                                                                                style="color: #ecf0f1; line-height: 140%; text-align: left; word-wrap: break-word;">
                                                                                <p style="font-size: 14px; line-height: 140%;">&nbsp;
                                                                                </p>
                                                                                <p style="font-size: 14px; line-height: 140%;">
                                                                                    <strong><span
                                                                                            style="font-size: 16px; line-height: 22.4px; margin-left: 10px">GRUVA</span></strong>
                                                                                </p>
                                                                                <p style="font-size: 14px; line-height: 140%;">&nbsp;
                                                                                </p>
                                                                            </div>

                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                            <!--[if (!mso)&(!IE)]><!-->
                                                        </div>
                                                        <!--<![endif]-->
                                                    </div>
                                                </div>
                                                <!--[if (mso)|(IE)]></td><![endif]-->
                                                <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                                            </div>
                                        </div>
                                    </div>



                                    <div class="u-row-container" style="padding: 0px;background-color: #f6f6f6">
                                        <div class="u-row"
                                            style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                                            <div
                                                style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                                                <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: #f6f6f6;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #ffffff;"><![endif]-->

                                                <!--[if (mso)|(IE)]><td align="center" width="600" class="v-col-background-color" style="background-color: #ffffff;width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                                                <div id="u_column_3" class="u-col u-col-100"
                                                    style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                                                    <div class="v-col-background-color"
                                                        style="background-color: #ffffff;width: 100% !important;">
                                                        <!--[if (!mso)&(!IE)]><!-->
                                                        <div
                                                            style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                                            <!--<![endif]-->

                                                            <table style="font-family:"Open Sans",sans-serif;" role="presentation"
                                                                cellpadding="0" cellspacing="0" width="100%" border="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:"Open Sans",sans-serif;"
                                                                            align="left">

                                                                            <div
                                                                                style="color: #47484b; line-height: 140%; text-align: center; word-wrap: break-word;">
                                                                                <p style="font-size: 14px; line-height: 140%;">&nbsp;
                                                                                </p>
                                                                                <p style="font-size: 14px; line-height: 140%;"><span
                                                                                        style="font-size: 16px; line-height: 22.4px;"><strong><span
                                                                                                style="line-height: 22.4px; font-size: 16px;">Nuevos
                                                                                                datos recibidos</span></strong></span>
                                                                                </p>
                                                                                <p style="font-size: 14px; line-height: 140%;">&nbsp;
                                                                                </p>
                                                                            </div>

                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                            <table style="font-family:"Open Sans",sans-serif;" role="presentation"
                                                                cellpadding="0" cellspacing="0" width="100%" border="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="overflow-wrap:break-word;word-break:break-word;padding:0px;font-family:"Open Sans",sans-serif;"
                                                                            align="left">

                                                                            <table height="0px" align="center" border="0"
                                                                                cellpadding="0" cellspacing="0" width="90%"
                                                                                style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                                                <tbody>
                                                                                    <tr style="vertical-align: top">
                                                                                        <td
                                                                                            style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                                                            <span>&#160;</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>

                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                            <!--[if (!mso)&(!IE)]><!-->
                                                        </div>
                                                        <!--<![endif]-->
                                                    </div>
                                                </div>
                                                <!--[if (mso)|(IE)]></td><![endif]-->
                                                <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                                            </div>
                                        </div>
                                    </div>



                                    <div class="u-row-container" style="padding: 0px;background-color: transparent">
                                        <div class="u-row"
                                            style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                                            <div
                                                style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                                                <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #ffffff;"><![endif]-->

                                                <!--[if (mso)|(IE)]><td align="center" width="600" class="v-col-background-color" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                                                <div class="u-col u-col-100"
                                                    style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                                                    <div class="v-col-background-color" style="width: 100% !important;">
                                                        <!--[if (!mso)&(!IE)]><!-->
                                                        <div
                                                            style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                                            <!--<![endif]-->

                                                            <table style="font-family:"Open Sans",sans-serif;" role="presentation"
                                                                cellpadding="0" cellspacing="0" width="100%" border="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="overflow-wrap:break-word;word-break:break-word;padding:0px;font-family:"Open Sans",sans-serif;"
                                                                            align="left">

                                                                            <table height="0px" align="center" border="0"
                                                                                cellpadding="0" cellspacing="0" width="90%"
                                                                                style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                                                <tbody>
                                                                                    <tr style="vertical-align: top">
                                                                                        <td
                                                                                            style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                                                            <span>&#160;</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>

                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                            <!--[if (!mso)&(!IE)]><!-->
                                                        </div>
                                                        <!--<![endif]-->
                                                    </div>
                                                </div>
                                                <!--[if (mso)|(IE)]></td><![endif]-->
                                                <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                                            </div>
                                        </div>
                                    </div>



                                    <div class="u-row-container" style="padding: 0px;background-color: #f6f6f6">
                                        <div class="u-row no-stack"
                                            style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                                            <div
                                                style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                                                <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: #f6f6f6;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #ffffff;"><![endif]-->

                                                <!--[if (mso)|(IE)]><td align="center" width="351" class="v-col-background-color" style="background-color: #ffffff;width: 351px;padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                                                <div id="u_column_4" class="u-col u-col-58p43"
                                                    style="max-width: 320px;min-width: 351px;display: table-cell;vertical-align: top;">
                                                    <div class="v-col-background-color"
                                                        style="background-color: #ffffff;width: 100% !important;">
                                                        <!--[if (!mso)&(!IE)]><!-->
                                                        <div
                                                            style="padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                                            <!--<![endif]-->

                                                            <table style="font-family:"Open Sans",sans-serif;" role="presentation"
                                                                cellpadding="0" cellspacing="0" width="100%" border="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:"Open Sans",sans-serif;"
                                                                            align="left">

                                                                            <div
                                                                                style="color: #615e5e; line-height: 140%; text-align: left; word-wrap: break-word;">
                                                                                <p style="font-size: 14px; line-height: 140%;">&nbsp;
                                                                                </p>
                                                                                <p style="font-size: 14px; line-height: 140%;"><span
                                                                                        style="font-size: 12px; line-height: 16.8px;">Nombre</span>
                                                                                </p>
                                                                                <p style="font-size: 14px; line-height: 140%;">&nbsp;
                                                                                </p>
                                                                            </div>

                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                            <!--[if (!mso)&(!IE)]><!-->
                                                        </div>
                                                        <!--<![endif]-->
                                                    </div>
                                                </div>
                                                <!--[if (mso)|(IE)]></td><![endif]-->
                                                <!--[if (mso)|(IE)]><td align="center" width="249" class="v-col-background-color" style="width: 249px;padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                                                <div class="u-col u-col-41p57"
                                                    style="max-width: 320px;min-width: 249px;display: table-cell;vertical-align: top;">
                                                    <div class="v-col-background-color" style="width: 100% !important;">
                                                        <!--[if (!mso)&(!IE)]><!-->
                                                        <div
                                                            style="padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                                            <!--<![endif]-->

                                                            <table style="font-family:"Open Sans",sans-serif;" role="presentation"
                                                                cellpadding="0" cellspacing="0" width="100%" border="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:"Open Sans",sans-serif;"
                                                                            align="left">

                                                                            <div
                                                                                style="color: #615e5e; line-height: 140%; text-align: right; word-wrap: break-word;">
                                                                                <p style="font-size: 14px; line-height: 140%;">&nbsp;
                                                                                </p>
                                                                                <p style="font-size: 14px; line-height: 140%;"><span
                                                                                        style="font-size: 12px; line-height: 16.8px;">'.$name.'</span>
                                                                                </p>
                                                                                <p style="font-size: 14px; line-height: 140%;">&nbsp;
                                                                                </p>
                                                                            </div>

                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                            <!--[if (!mso)&(!IE)]><!-->
                                                        </div>
                                                        <!--<![endif]-->
                                                    </div>
                                                </div>
                                                <!--[if (mso)|(IE)]></td><![endif]-->
                                                <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                                            </div>
                                        </div>
                                    </div>



                                    <div class="u-row-container" style="padding: 0px;background-color: #f6f6f6">
                                        <div class="u-row no-stack"
                                            style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                                            <div
                                                style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                                                <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: #f6f6f6;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #ffffff;"><![endif]-->

                                                <!--[if (mso)|(IE)]><td align="center" width="351" class="v-col-background-color" style="background-color: #ffffff;width: 351px;padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                                                <div id="u_column_35" class="u-col u-col-58p43"
                                                    style="max-width: 320px;min-width: 351px;display: table-cell;vertical-align: top;">
                                                    <div class="v-col-background-color"
                                                        style="background-color: #ffffff;width: 100% !important;">
                                                        <!--[if (!mso)&(!IE)]><!-->
                                                        <div
                                                            style="padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                                            <!--<![endif]-->

                                                            <table style="font-family:"Open Sans",sans-serif;" role="presentation"
                                                                cellpadding="0" cellspacing="0" width="100%" border="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:"Open Sans",sans-serif;"
                                                                            align="left">

                                                                            <div
                                                                                style="color: #615e5e; line-height: 140%; text-align: left; word-wrap: break-word;">
                                                                                <p style="font-size: 14px; line-height: 140%;"><span
                                                                                        style="font-size: 12px; line-height: 16.8px;">Celular</span>
                                                                                </p>
                                                                                <p style="font-size: 14px; line-height: 140%;">&nbsp;
                                                                                </p>
                                                                            </div>

                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                            <!--[if (!mso)&(!IE)]><!-->
                                                        </div>
                                                        <!--<![endif]-->
                                                    </div>
                                                </div>
                                                <!--[if (mso)|(IE)]></td><![endif]-->
                                                <!--[if (mso)|(IE)]><td align="center" width="249" class="v-col-background-color" style="width: 249px;padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                                                <div class="u-col u-col-41p57"
                                                    style="max-width: 320px;min-width: 249px;display: table-cell;vertical-align: top;">
                                                    <div class="v-col-background-color" style="width: 100% !important;">
                                                        <!--[if (!mso)&(!IE)]><!-->
                                                        <div
                                                            style="padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                                            <!--<![endif]-->

                                                            <table style="font-family:"Open Sans",sans-serif;" role="presentation"
                                                                cellpadding="0" cellspacing="0" width="100%" border="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:"Open Sans",sans-serif;"
                                                                            align="left">

                                                                            <div
                                                                                style="color: #615e5e; line-height: 140%; text-align: right; word-wrap: break-word;">
                                                                                <p style="font-size: 14px; line-height: 140%;"><span
                                                                                        style="font-size: 12px; line-height: 16.8px;">'.$phone.'
                                                                                    </span></p>
                                                                                <p style="font-size: 14px; line-height: 140%;">&nbsp;
                                                                                </p>
                                                                            </div>

                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                            <!--[if (!mso)&(!IE)]><!-->
                                                        </div>
                                                        <!--<![endif]-->
                                                    </div>
                                                </div>
                                                <!--[if (mso)|(IE)]></td><![endif]-->
                                                <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                                            </div>
                                        </div>
                                    </div>



                                    <div class="u-row-container" style="padding: 0px;background-color: #f6f6f6">
                                        <div class="u-row no-stack"
                                            style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                                            <div
                                                style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                                                <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: #f6f6f6;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #ffffff;"><![endif]-->

                                                <!--[if (mso)|(IE)]><td align="center" width="351" class="v-col-background-color" style="background-color: #ffffff;width: 351px;padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                                                <div id="u_column_39" class="u-col u-col-58p43"
                                                    style="max-width: 320px;min-width: 351px;display: table-cell;vertical-align: top;">
                                                    <div class="v-col-background-color"
                                                        style="background-color: #ffffff;width: 100% !important;">
                                                        <!--[if (!mso)&(!IE)]><!-->
                                                        <div
                                                            style="padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                                            <!--<![endif]-->

                                                            <table style="font-family:"Open Sans",sans-serif;" role="presentation"
                                                                cellpadding="0" cellspacing="0" width="100%" border="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:"Open Sans",sans-serif;"
                                                                            align="left">

                                                                            <div
                                                                                style="color: #615e5e; line-height: 140%; text-align: left; word-wrap: break-word;">
                                                                                <p style="font-size: 14px; line-height: 140%;"><span
                                                                                        style="font-size: 12px; line-height: 16.8px;">Correo</span>
                                                                                </p>
                                                                            </div>

                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                            <!--[if (!mso)&(!IE)]><!-->
                                                        </div>
                                                        <!--<![endif]-->
                                                    </div>
                                                </div>
                                                <!--[if (mso)|(IE)]></td><![endif]-->
                                                <!--[if (mso)|(IE)]><td align="center" width="249" class="v-col-background-color" style="width: 249px;padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                                                <div class="u-col u-col-41p57"
                                                    style="max-width: 320px;min-width: 249px;display: table-cell;vertical-align: top;">
                                                    <div class="v-col-background-color" style="width: 100% !important;">
                                                        <!--[if (!mso)&(!IE)]><!-->
                                                        <div
                                                            style="padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                                            <!--<![endif]-->

                                                            <table style="font-family:"Open Sans",sans-serif;" role="presentation"
                                                                cellpadding="0" cellspacing="0" width="100%" border="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:"Open Sans",sans-serif;"
                                                                            align="left">

                                                                            <div
                                                                                style="color: #615e5e; line-height: 140%; text-align: right; word-wrap: break-word;">
                                                                                <p style="font-size: 14px; line-height: 140%;"><span
                                                                                        style="font-size: 12px; line-height: 16.8px;">'.$email.'
                                                                                    </span></p>
                                                                                <p style="font-size: 14px; line-height: 140%;">&nbsp;
                                                                                </p>
                                                                            </div>

                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                            <!--[if (!mso)&(!IE)]><!-->
                                                        </div>
                                                        <!--<![endif]-->
                                                    </div>
                                                </div>
                                                <!--[if (mso)|(IE)]></td><![endif]-->
                                                <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="u-row-container" style="padding: 0px;background-color: #f6f6f6">
                                        <div class="u-row no-stack"
                                            style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                                            <div
                                                style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                                                <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: #f6f6f6;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #ffffff;"><![endif]-->

                                                <!--[if (mso)|(IE)]><td align="center" width="351" class="v-col-background-color" style="background-color: #ffffff;width: 351px;padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                                                <div id="u_column_4" class="u-col u-col-58p43"
                                                    style="max-width: 320px;min-width: 351px;display: table-cell;vertical-align: top;">
                                                    <div class="v-col-background-color"
                                                        style="background-color: #ffffff;width: 100% !important;">
                                                        <!--[if (!mso)&(!IE)]><!-->
                                                        <div
                                                            style="padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                                            <!--<![endif]-->

                                                            <table style="font-family:"Open Sans",sans-serif;" role="presentation"
                                                                cellpadding="0" cellspacing="0" width="100%" border="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:"Open Sans",sans-serif;"
                                                                            align="left">

                                                                            <div
                                                                                style="color: #615e5e; line-height: 140%; text-align: left; word-wrap: break-word;">
                                                                                <p style="font-size: 14px; line-height: 140%;">&nbsp;
                                                                                </p>
                                                                                <p style="font-size: 14px; line-height: 140%;"><span
                                                                                        style="font-size: 12px; line-height: 16.8px;">Mensaje</span>
                                                                                </p>
                                                                                <p style="font-size: 14px; line-height: 140%;">&nbsp;
                                                                                </p>
                                                                            </div>

                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                            <!--[if (!mso)&(!IE)]><!-->
                                                        </div>
                                                        <!--<![endif]-->
                                                    </div>
                                                </div>
                                                <!--[if (mso)|(IE)]></td><![endif]-->
                                                <!--[if (mso)|(IE)]><td align="center" width="249" class="v-col-background-color" style="width: 249px;padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                                                <div class="u-col u-col-41p57"
                                                    style="max-width: 320px;min-width: 249px;display: table-cell;vertical-align: top;">
                                                    <div class="v-col-background-color" style="width: 100% !important;">
                                                        <!--[if (!mso)&(!IE)]><!-->
                                                        <div
                                                            style="padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                                            <!--<![endif]-->

                                                            <table style="font-family:"Open Sans",sans-serif;" role="presentation"
                                                                cellpadding="0" cellspacing="0" width="100%" border="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:"Open Sans",sans-serif;"
                                                                            align="left">

                                                                            <div
                                                                                style="color: #615e5e; line-height: 140%; text-align: right; word-wrap: break-word;">
                                                                                <p style="font-size: 14px; line-height: 140%;">&nbsp;
                                                                                </p>
                                                                                <p style="font-size: 14px; line-height: 140%;"><span
                                                                                        style="font-size: 12px; line-height: 16.8px;">'.$message.'</span>
                                                                                </p>
                                                                                <p style="font-size: 14px; line-height: 140%;">&nbsp;
                                                                                </p>
                                                                            </div>

                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                            <!--[if (!mso)&(!IE)]><!-->
                                                        </div>
                                                        <!--<![endif]-->
                                                    </div>
                                                </div>
                                                <!--[if (mso)|(IE)]></td><![endif]-->
                                                <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="u-row-container" style="padding: 0px;background-color: transparent">
                                        <div class="u-row"
                                            style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                                            <div
                                                style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                                                <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #ffffff;"><![endif]-->

                                                <!--[if (mso)|(IE)]><td align="center" width="600" class="v-col-background-color" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                                                <div class="u-col u-col-100"
                                                    style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                                                    <div class="v-col-background-color" style="width: 100% !important;">
                                                        <!--[if (!mso)&(!IE)]><!-->
                                                        <div
                                                            style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                                            <!--<![endif]-->

                                                            <table style="font-family:"Open Sans",sans-serif;" role="presentation"
                                                                cellpadding="0" cellspacing="0" width="100%" border="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="overflow-wrap:break-word;word-break:break-word;padding:0px;font-family:"Open Sans",sans-serif;"
                                                                            align="left">

                                                                            <table height="0px" align="center" border="0"
                                                                                cellpadding="0" cellspacing="0" width="90%"
                                                                                style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                                                <tbody>
                                                                                    <tr style="vertical-align: top">
                                                                                        <td
                                                                                            style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                                                            <span>&#160;</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>

                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                            <!--[if (!mso)&(!IE)]><!-->
                                                        </div>
                                                        <!--<![endif]-->
                                                    </div>
                                                </div>
                                                <!--[if (mso)|(IE)]></td><![endif]-->
                                                <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                                            </div>
                                        </div>
                                    </div>



                                    <div class="u-row-container" style="padding: 0px;background-color: transparent">
                                        <div class="u-row"
                                            style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                                            <div
                                                style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                                                <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #ffffff;"><![endif]-->

                                                <!--[if (mso)|(IE)]><td align="center" width="600" class="v-col-background-color" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                                                <div class="u-col u-col-100"
                                                    style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                                                    <div class="v-col-background-color" style="width: 100% !important;">
                                                        <!--[if (!mso)&(!IE)]><!-->
                                                        <div
                                                            style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                                            <!--<![endif]-->

                                                            <table style="font-family:"Open Sans",sans-serif;" role="presentation"
                                                                cellpadding="0" cellspacing="0" width="100%" border="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="overflow-wrap:break-word;word-break:break-word;padding:0px;font-family:"Open Sans",sans-serif;"
                                                                            align="left">

                                                                            <table height="0px" align="center" border="0"
                                                                                cellpadding="0" cellspacing="0" width="90%"
                                                                                style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                                                <tbody>
                                                                                    <tr style="vertical-align: top">
                                                                                        <td
                                                                                            style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                                                            <span>&#160;</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>

                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                            <!--[if (!mso)&(!IE)]><!-->
                                                        </div>
                                                        <!--<![endif]-->
                                                    </div>
                                                </div>
                                                <!--[if (mso)|(IE)]></td><![endif]-->
                                                <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                                            </div>
                                        </div>
                                    </div>



                                    <div class="u-row-container" style="padding: 0px;background-color: transparent">
                                        <div class="u-row"
                                            style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                                            <div
                                                style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                                                <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #ffffff;"><![endif]-->

                                                <!--[if (mso)|(IE)]><td align="center" width="600" class="v-col-background-color" style="background-color: #ffffff;width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                                                <div class="u-col u-col-100"
                                                    style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                                                    <div class="v-col-background-color"
                                                        style="background-color: #ffffff;width: 100% !important;">
                                                        <!--[if (!mso)&(!IE)]><!-->
                                                        <div
                                                            style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                                            <!--<![endif]-->

                                                            <table style="font-family:"Open Sans",sans-serif;" role="presentation"
                                                                cellpadding="0" cellspacing="0" width="100%" border="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:"Open Sans",sans-serif;"
                                                                            align="left">

                                                                            <div
                                                                                style="line-height: 140%; text-align: left; word-wrap: break-word;">

                                                                            </div>

                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                            <table style="font-family:"Open Sans",sans-serif;" role="presentation"
                                                                cellpadding="0" cellspacing="0" width="100%" border="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:"Open Sans",sans-serif;"
                                                                            align="left">

                                                                            <div
                                                                                style="line-height: 140%; text-align: left; word-wrap: break-word;">

                                                                            </div>

                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                            <!--[if (!mso)&(!IE)]><!-->
                                                        </div>
                                                        <!--<![endif]-->
                                                    </div>
                                                </div>
                                                <!--[if (mso)|(IE)]></td><![endif]-->
                                                <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                                            </div>
                                        </div>
                                    </div>


                                    <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!--[if mso]></div><![endif]-->
                    <!--[if IE]></div><![endif]-->
                </body>

                </html>
'; 

$mail->Body    = $mailContent ;

    if($mail->send()){
    }   	
    else{
        echo 'Ups, no se pudo enviar';
        echo 'Error: '. $mail->ErrorInfo;
    }
?>