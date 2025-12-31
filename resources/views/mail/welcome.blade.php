<!DOCTYPE html>
<html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:w='urn:schemas-microsoft-com:office:word'>

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <title>Welcome to Propestateholdings REIT</title>
    <style type='text/css'>
        body {
            width: 100%;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            font-family: 'Work Sans', Calibri, sans-serif;
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
            border-collapse: collapse;
            border-spacing: 0;
        }

        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
        }

        .content {
            padding: 20px;
        }

        h2 {
            font-size: 24px;
            color: #333333;
            margin-bottom: 15px;
        }

        p {
            font-size: 16px;
            color: #666666;
            line-height: 24px;
            margin-bottom: 15px;
        }

        ul {
            font-size: 16px;
            color: #666666;
            line-height: 24px;
            margin-bottom: 15px;
            padding-left: 20px;
        }

        .footer {
            background-color: #f4f4f4;
            padding: 20px;
            text-align: center;
            font-size: 14px;
            color: #aaaaaa;
        }

        .footer a {
            color: #5caad2;
            text-decoration: none;
            font-weight: bold;
        }

        @media only screen and (max-width: 640px) {
            .container {
                width: 90% !important;
            }

            h2 {
                font-size: 20px !important;
            }

            p {
                font-size: 14px !important;
            }
        }
    </style>
</head>

<body>
    <table class='container' cellpadding='0' cellspacing='0'>
        <tr>
            <td align='center' style='padding: 20px 0;'>
                <img src="{{asset('logo.png')}}" alt="Propestateholdings REIT" width='200' />
            </td>
        </tr>
        <tr>
            <td class='content'>
                <h2>Welcome to Propestateholdings REIT</h2>
                <p>Dear {{$data['name']}},</p>
                <p>We are pleased to welcome you to Propestateholdings REIT, where we are committed to delivering exceptional returns through strategic real estate investments.</p>
                <p>As a new investor, here’s what you can look forward to:</p>
                <ul>
                    <li><strong>Diversified Investment Opportunities:</strong> Access a broad portfolio of high-quality real estate assets across various sectors.</li>
                    <li><strong>Transparent Reporting:</strong> Receive regular updates on the performance of our properties and the REIT’s financial health.</li>
                    <li><strong>Professional Management:</strong> Benefit from our experienced team who manage and optimize our property investments.</li>
                </ul>
                <p><strong>Your Account Details:</strong></p>
                <p>Email: {{$data['email']}}</p>
                <p>Temporary Password: {{$data['password']}}</p>
                <p>We encourage you to log in to your investor portal and review your account details. Here, you can track your investments, access reports, and stay informed about upcoming opportunities.</p>
                <p>If you have any questions or need assistance, please do not hesitate to reach out to our Investor Relations team at support@propestateholdings.com.</p>
                <p>Thank you for joining us. We look forward to a prosperous partnership.</p>
                <p>Best Regards,<br/>The Propestateholdings REIT Team</p>
            </td>
        </tr>
        <tr>
            <td class='footer'>
                <p>&copy; 2024 Propestateholdings REIT - All Rights Reserved</p>
                <p><a href='#'>UNSUBSCRIBE</a></p>
            </td>
        </tr>
    </table>
</body>
</html>
