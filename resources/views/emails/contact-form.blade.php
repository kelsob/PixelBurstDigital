<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(to right, #3b82f6, #ef4444);
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            background: #f9fafb;
            padding: 20px;
            border: 1px solid #e5e7eb;
            border-top: none;
            border-radius: 0 0 5px 5px;
        }
        .field {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
            color: #4b5563;
        }
        .value {
            background: white;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #e5e7eb;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New Contact Form Submission</h1>
        </div>
        <div class="content">
            <div class="field">
                <div class="label">Name:</div>
                <div class="value">{{ $data['name'] }}</div>
            </div>
            <div class="field">
                <div class="label">Email:</div>
                <div class="value">{{ $data['email'] }}</div>
            </div>
            <div class="field">
                <div class="label">Message:</div>
                <div class="value">{{ $data['message'] }}</div>
            </div>
            @if(isset($data['referral']) && $data['referral'])
            <div class="field">
                <div class="label">Referral Source:</div>
                <div class="value">{{ $data['referral'] }}</div>
            </div>
            @endif
            @if(isset($data['services']) && count($data['services']) > 0)
            <div class="field">
                <div class="label">Services Interested In:</div>
                <div class="value">
                    <ul>
                        @foreach($data['services'] as $service)
                            <li>{{ ucwords(str_replace('_', ' ', $service)) }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif
        </div>
    </div>
</body>
</html> 