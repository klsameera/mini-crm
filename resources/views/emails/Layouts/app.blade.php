<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
    xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="format-detection" content="date=no" />
    <meta name="format-detection" content="address=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="x-apple-disable-message-reformatting" />
    @include('emails.Includes.css')
</head>

<body class="body"
    style="padding:0 !important; margin:0 auto !important; display:block !important; min-width:100% !important; width:100% !important; background:#5aa7d7; -webkit-text-size-adjust:none;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#5aa7d7" class="gwfw">
        <tbody>
            <tr>
                <td align="center" valign="top" class="px-10 pt-40 pb-40 mpt-20 mpb-10"
                    style="padding-left: 10px; padding-right: 10px; padding-top: 40px; padding-bottom: 40px;">
                    <table width="650" border="0" cellspacing="0" cellpadding="0" class="m-shell">
                        <tbody>
                            <tr>
                                <td class="td"
                                    style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <!-- start logo -->
                                        @include('emails.Includes.logo')
                                    </table>
                                    <!-- content -->
                                    @yield('content')
                                    <!-- Footer -->
                                    @include('emails.Includes.footer')
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
