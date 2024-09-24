<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logging Service - Coming Soon</title>
    <!-- Fonts and Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- CSS Styling -->
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to bottom, #1c1f24, #2a2f33);
            color: white;
        }

        .container {
            text-align: center;
            padding: 20px;
            max-width: 100%;
        }

        h1 {
            font-size: 4rem;
            margin-bottom: 20px;
            color: #B0303B;
        }

        h3 {
            margin-bottom: 30px;
            font-weight: normal;
            color: #e0e0e0;
        }

        .countdown {
            display: flex;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 40px;
        }

        .countdown div {
            margin: 0 10px;
            text-align: center;
        }

        .countdown div span {
            font-size: 2rem;
            display: block;
            color: #B0303B;
        }

        .btn {
            padding: 10px 25px;
            background-color: #B0303B;
            border: none;
            border-radius: 5px;
            color: #1c1f24;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #f57f17;
        }

        .social-icons {
            margin-top: 30px;
        }

        .social-icons a {
            margin: 0 10px;
            font-size: 1.5rem;
            color: #B0303B;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: #f57f17;
        }

        footer {
            position: absolute;
            bottom: 20px;
            text-align: center;
            width: 100%;
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 768px) {
            h1 {
                font-size: 3rem;
            }

            h3 {
                font-size: 1.2rem;
                margin-bottom: 20px;
            }

            .countdown {
                flex-direction: column;
                font-size: 1.2rem;
            }

            .countdown div {
                margin-bottom: 10px;
            }

            .countdown div span {
                font-size: 1.8rem;
            }

            .btn {
                padding: 10px 20px;
                font-size: 1rem;
            }

            .social-icons a {
                font-size: 1.2rem;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 2.5rem;
            }

            h3 {
                font-size: 1rem;
            }

            .countdown {
                flex-direction: column;
                font-size: 1rem;
            }

            .countdown div span {
                font-size: 1.5rem;
            }

            .btn {
                padding: 8px 16px;
                font-size: 0.9rem;
            }

            .social-icons a {
                font-size: 1rem;
            }

            img {
                width: 80%;
                max-width: 300px;
                border-radius: 150px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{asset("laralogs/logo.png")}}" width="550px">
        <h1>Logging Service</h1>
        <h3>We are launching soon! Stay tuned...</h3>

        <!-- Countdown Section -->
        <div class="countdown" id="countdown">
            <div><span id="days">00</span>Days</div>
            <div><span id="hours">00</span>Hours</div>
            <div><span id="minutes">00</span>Minutes</div>
            <div><span id="seconds">00</span>Seconds</div>
        </div>

        <!-- Subscribe Button -->
        <a href="#" class="btn">Notify Me</a>

        <!-- Social Icons -->
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>

    <footer>&copy; 2024 laralogs.com. All Rights Reserved.</footer>

    <!-- Countdown Script -->
    <script>
        function countdown() {
            const launchDate = new Date('October 25, 2024 00:00:00').getTime();
            const now = new Date().getTime();
            const distance = launchDate - now;

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById('days').innerHTML = days;
            document.getElementById('hours').innerHTML = hours;
            document.getElementById('minutes').innerHTML = minutes;
            document.getElementById('seconds').innerHTML = seconds;

            if (distance < 0) {
                document.getElementById('countdown').innerHTML = "We are live!";
            }
        }

        setInterval(countdown, 1000);
    </script>
</body>
</html>
