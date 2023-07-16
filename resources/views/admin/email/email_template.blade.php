@php
$setting_info = \App\Helper\GeneralHelper::setting_info('Company');
@endphp


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$setting_info['COMPANY_NAME']['vValue']}}</title>
</head>

<body style="margin: 0;">

     <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td bgcolor="#fff">
                <table width="620" border="0" cellspacing="0" cellpadding="0" align="center"
                    style="font-family: 'Times New Roman', Times, serif;">
                    <tr>
                        <td
                            style="padding: 20px;background-color:#fff; border: 1px solid #ec8c00;border-bottom: unset;">
                            <div style="width: 100%;height:60%;text-align: center; ">
                                <img src="{{asset('admin/assets/img/logo/logo.png')}}" style="display:inline-block;margin: auto; height: 100px;"
                                     alt="">
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td
                            style="padding: 20px;background-color:#fff; border: 1px solid #ec8c00;border-top: unset;text-align: center;">
                            {!! $msg !!}

                        </td>
                    </tr>
                    <tr>
                        <td
                            style="padding: 20px; background-color: #000000;border: 1px solid #ec8c00;color: #fff;margin-top: 5px;text-align: center;">
                            <strong> if you have any quary please email us at</strong> <a href="# "
                                style="text-decoration: underline; color: #ec8c00; "
                                target="_blank ">help@www.snapride.com</a>
                            <br>if this was sent to you by mistake please email us at <a href="# "
                                style="text-decoration: underline; color: #ec8c00; "
                                target="_blank ">help@www.snapride.com</a>
                            <div>Copyright 2022 &copy;snapride. All Rights Reserved.</div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
