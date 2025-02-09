<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Disabled</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
            color: #333;
            text-align: center;
        }
        .container {
            padding: 40px;
            border: 2px solid #ccc;
            border-radius: 12px;
            background-color: white;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            max-width: 600px; /* Optional: max width for larger screens */
            width: 100%; /* Full width on smaller screens */
        }
        h1 {
            margin-bottom: 20px;
            font-size: 3em; /* Larger font size */
        }
        p {
            margin: 10px 0;
            font-size: 1.5em; /* Larger font size */
        }
    </style>
</head>
<body>
@if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif
<div class="container">
    <h1>{{trans('auth.welcome')}}</h1>
    <p>{{trans('auth.your account is currently disabled')}}</p>
    <p>{{trans('auth.please contact us to enable it')}}</p>
</div>
</body>
</html>
