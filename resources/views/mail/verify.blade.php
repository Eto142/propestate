<!DOCTYPE html>
<html xmlns:v='urn:schemas-microsoft-com:vml'>

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0;' />
    <link href='https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet'>
    <title>Propestate Holdings</title>
    <style type='text/css'>
        body {
            width: 100%;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            font-family: 'Work Sans', Calibri, sans-serif;
            -webkit-font-smoothing: antialiased;
        }
        p, h1, h2, h3, h4 {
            margin: 0;
            padding: 0;
        }
        span.preheader {
            display: none;
            font-size: 1px;
        }
        table {
            border-spacing: 0;
            border-collapse: collapse;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: auto;
        }
        .header img {
            width: 150px;
            height: auto;
            display: block;
            margin: 0 auto;
        }
        .content {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
        }
        .content h2 {
            color: #333333;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .content p {
            color: #555555;
            font-size: 16px;
            line-height: 24px;
            margin-bottom: 20px;
        }
        .footer {
            background-color: #f4f4f4;
            padding: 20px;
            text-align: center;
            color: #aaaaaa;
            font-size: 14px;
        }
        .footer a {
            color: #5caad2;
            text-decoration: none;
            font-weight: bold;
        }
        @media only screen and (max-width: 640px) {
            .content h2 {
                font-size: 20px !important;
            }
            .content p {
                font-size: 14px !important;
            }
        }
        @media only screen and (max-width: 479px) {
            .content h2 {
                font-size: 18px !important;
            }
            .content p {
                font-size: 12px !important;
            }
        }
    </style>
</head>

<body>

    <table class='container' cellpadding='0' cellspacing='0'>
        <tr>
            <td class='header'>
                <img src="{{asset('logo.png')}}" alt="Propestate Holdings Logo"/>
            </td>
        </tr>
        <tr>
            <td class='content'>
                <p class='preheader'>Confirm Your Registration</p>
                <h2>Welcome to Propestate Holdings</h2>
                <p>Your registration is successful, and you are just a step away from verifying your account.</p>
                <p>Here is your activation code:</p>
                <p><strong>Activation Code:</strong> {{$validToken}}</p>
                <p><strong>Security Tips:</strong><br/>
                * Never share your login credentials with anyone.<br/>
                * This is an automated message; please do not reply.</p>
                <p>Kind Regards,<br/>Propestate Holdings</p>
            </td>
        </tr>
        <tr>
            <td class='footer'>
                <p>&copy; 2024 Propestate Holdings. All Rights Reserved.</p>
                <p><a href=''>UNSUBSCRIBE</a></p>
            </td>
        </tr>
    </table>

</body>

</html>
