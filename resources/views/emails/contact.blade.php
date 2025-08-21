<!DOCTYPE html>
<html>
<head>
    <title>Nouveau message de contact</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        /* Base styles */
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: #333333;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        /* Container */
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* Header */
        .email-header {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .email-header h2 {
            margin: 0;
            font-size: 24px;
        }

        /* Content */
        .email-content {
            padding: 30px;
        }

        .info-item {
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eeeeee;
        }

        .info-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .info-label {
            font-weight: bold;
            color: #4CAF50;
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
        }

        .info-value {
            color: #555555;
            font-size: 16px;
        }

        .message-content {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 4px;
            margin-top: 10px;
            white-space: pre-line;
        }

        /* Footer */
        .email-footer {
            text-align: center;
            padding: 20px;
            font-size: 12px;
            color: #999999;
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <h2>Nouveau message de contact</h2>
        </div>

        <div class="email-content">
            <div class="info-item">
                <span class="info-label">Nom</span>
                <span class="info-value">{{ $data['name'] }}</span>
            </div>

            <div class="info-item">
                <span class="info-label">Email</span>
                <span class="info-value">{{ $data['email'] }}</span>
            </div>

            <div class="info-item">
                <span class="info-label">Sujet</span>
                <span class="info-value">{{ $data['subject'] }}</span>
            </div>

            <div class="info-item">
                <span class="info-label">Message</span>
                <div class="message-content">
                    {{ $data['message'] }}
                </div>
            </div>
        </div>

        <div class="email-footer">
            <p>Ce message a été envoyé via le formulaire de contact de votre site web.</p>
            <p>© {{ date('Y') }} AfricanESC. All Rights Reserved.</p>
        </div>
    </div>
</body>
</html>
