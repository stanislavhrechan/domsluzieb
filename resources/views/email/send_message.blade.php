<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Nová správa — na stránke Domu služieb v Starej Ľubovni</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f4f4; font-family: Arial, Helvetica, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="padding:30px 0;">
    <tr>
        <td align="center">

            <table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:16px; overflow:hidden; box-shadow:0 10px 30px rgba(0,0,0,0.08);">

                <tr>
                    <td style="background:#000000; padding:24px; text-align:center;">
                        <h1 style="margin:0; font-size:20px; color:#ffffff; letter-spacing:1px;">
                            Dom služieb v Starej Ľubovni
                        </h1>
                        <p style="margin:8px 0 0; font-size:13px; color:#cccccc;">
                            Dostali ste novú správu prostredníctvom kontaktného formulára.
                        </p>
                    </td>
                </tr>

                <tr>
                    <td style="padding:30px; color:#333333;">

                        <table width="100%" cellpadding="0" cellspacing="0" style="font-size:14px;">
                            <tr>
                                <td style="padding:8px 0; width:120px; color:#666;"><strong>Meno:</strong></td>
                                <td style="padding:8px 0;">{{ $data['name'] }}</td>
                            </tr>
                            <tr>
                                <td style="padding:8px 0; color:#666;"><strong>Email:</strong></td>
                                <td style="padding:8px 0;">
                                    <a href="mailto:{{ $data['email'] }}" style="color:#000; text-decoration:none;">
                                        {{ $data['email'] }}
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:8px 0; color:#666;"><strong>Telefónne číslo:</strong></td>
                                <td style="padding:8px 0;">
                                    <a href="mailto:{{ $data['email'] }}" style="color:#000; text-decoration:none;">
                                        {{ $data['tel'] }}
                                    </a>
                                </td>
                            </tr>
                        </table>

                        <hr style="border:none; border-top:1px solid #eeeeee; margin:24px 0;">

                        <p style="margin:0 0 8px; font-size:14px; color:#666;">
                            <strong>Správa:</strong>
                        </p>

                        <div style="background:#f8f8f8; padding:16px; border-radius:12px; font-size:14px; line-height:1.6;">
                            {{ $data['message'] }}
                        </div>

                    </td>
                </tr>

                <tr>
                    <td style="background:#f8f8f8; padding:20px; text-align:center; font-size:12px; color:#999;">
                        © {{ date('Y') }} Rybnik v Humne<br>
                        Táto správa bola odoslaná z kontaktného formulára na stránke.
                    </td>
                </tr>

            </table>

        </td>
    </tr>
</table>

</body>
</html>