<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Distributions Reinvested</title>
</head>

<body style="background:#f4f4f4;font-family:Calibri,sans-serif;">
<table width="100%" cellpadding="0" cellspacing="0">
<tr>
<td align="center">
<table width="600" bgcolor="#ffffff" cellpadding="20">
<tr>
<td align="center">
    <img src="{{ asset('logo.png') }}" width="200" alt="Propestateholdings REIT">
</td>
</tr>

<tr>
<td>
    <h2>Distributions Reinvested</h2>

    <p>Dear {{ $name }},</p>

    <p>
        We are pleased to inform you that your distributions have been
        successfully reinvested into your Propestateholdings REIT account.
    </p>

    <p><strong>Reinvestment Details:</strong></p>

    <p>
        <strong>Amount:</strong> ${{ number_format($amount, 2) }}<br>
        <strong>Transaction ID:</strong> {{ $transaction_id }}
    </p>

    <p>
        These funds are now actively working toward generating future returns.
    </p>

    <p>
        If you have any questions, please contact us at
        <a href="mailto:support@propestateholdings.com">support@propestateholdings.com</a>.
    </p>

    <p>
        Best Regards,<br>
        <strong>The Propestateholdings REIT Team</strong>
    </p>
</td>
</tr>

<tr>
<td align="center" style="font-size:13px;color:#aaa;">
    &copy; {{ date('Y') }} Propestateholdings REIT
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>
