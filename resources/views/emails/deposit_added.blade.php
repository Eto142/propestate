<!DOCTYPE html>
<html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:w='urn:schemas-microsoft-com:office:word'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <title>Deposit Successful</title>

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

        .footer {
            background-color: #f4f4f4;
            padding: 20px;
            text-align: center;
            font-size: 14px;
            color: #aaaaaa;
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
                <img src="{{ asset('logo.png') }}" alt="Propestateholdings REIT" width='200' />
            </td>
        </tr>

        <tr>
            <td class='content'>
                <h2>Deposit Successful</h2>

                <p>Dear {{ $name }},</p>

                <p>
                    We are pleased to inform you that your deposit has been
                    successfully credited to your Propestateholdings REIT account.
                </p>

                <p><strong>Deposit Details:</strong></p>

                <p>
                    <strong>Amount:</strong> ${{ number_format($amount, 2) }}<br>
                    <strong>Payment Method:</strong> {{ $payment_method }}<br>
                    <strong>Transaction ID:</strong> {{ $transaction_id }}
                </p>

                <p>
                    Your funds are now available and ready to be allocated toward
                    investment opportunities on our platform.
                </p>

                <p>
                    If you have any questions or believe this transaction was made in error,
                    please contact our support team at
                    <a href="mailto:support@thepropestateholdings.com">support@thepropestateholdings.com</a>.
                </p>

                <p>
                    Thank you for investing with Propestateholdings REIT.
                </p>

                <p>
                    Best Regards,<br/>
                    <strong>The Propestateholdings REIT Team</strong>
                </p>
            </td>
        </tr>

        <tr>
            <td class='footer'>
                <p>&copy; {{ date('Y') }} Propestateholdings REIT - All Rights Reserved</p>
            </td>
        </tr>
    </table>
</body>
</html>
