<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Splash Screen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="/logos/Lambang Kota Pariaman.png" type="image/x-icon">
    <link rel="shortcut icon" href="/logos/Lambang Kota Pariaman.png" type="image/x-icon">
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to top, #256ef5, #fcff36); /* Warna biru ke kuning kesamping */
            overflow: hidden;
        }

        .splash-container {
            text-align: center;
            color: white;
            font-family: 'Arial', sans-serif;
            animation: fadeIn 1s ease-in-out;
        }

        .logo {
            width: 120px;
            height: auto;
            margin-bottom: 20px;
            animation: bounce 2s infinite;
        }

        .text-animation {
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
            animation: textFlicker 2s infinite;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-20px);
            }
            60% {
                transform: translateY(-10px);
            }
        }

        @keyframes textFlicker {
            0% {
                opacity: 1;
            }
            50% {
                opacity: 0.5;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="splash-container">
        <img src="/logos/Lambang_Kota_Pariaman.png" alt="Logo Kota Pariaman" class="logo">
        <h1 class="text-animation">Portal Website Resmi</h1>
        <h2 class="text-animation">Pemerintah Kota Pariaman</h2>
    </div>

    <script>
        setTimeout(() => {
            window.location.href = "/home";
        }, 3000);
    </script>
</body>
</html>