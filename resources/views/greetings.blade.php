<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greetings</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            max-width: 800px;
            width: 100%;
        }

        .greeting-card {
            background: white;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .greeting-card:hover {
            transform: translateY(-5px);
        }

        .message {
            font-size: 24px;
            color: #2d3748;
            margin-bottom: 10px;
        }

        .language {
            font-size: 14px;
            color: #718096;
            font-style: italic;
        }

        .timestamp {
            font-size: 12px;
            color: #a0aec0;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="container">
        @foreach($greetings as $greeting)
            <div class="greeting-card">
                <div class="message">{{ $greeting->message }}</div>
                <div class="language">{{ $greeting->language }}</div>
                <div class="timestamp">Added: {{ $greeting->created_at->diffForHumans() }}</div>
            </div>
        @endforeach
    </div>
</body>
</html>