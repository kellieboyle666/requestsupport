<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Redirecting...</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const to = urlParams.get('to');

        if (to && /^https?:\/\//.test(to)) {
            setTimeout(() => {
                window.location.href = to;
            }, 3000);
        }
    </script>
    <style>
        body {
            background: #f9f9f9;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #1d1d1f;
            text-align: center;
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        p {
            font-size: 1rem;
            color: #6e6e73;
        }

        a.button {
            margin-top: 1.5rem;
            padding: 10px 20px;
            background-color: #0071e3;
            color: white;
            text-decoration: none;
            border-radius: 10px;
            font-weight: 500;
            transition: background-color 0.2s ease-in-out;
        }

        a.button:hover {
            background-color: #005bb5;
        }

        .spinner {
            margin-top: 2rem;
            width: 40px;
            height: 40px;
            border: 4px solid #d1d1d6;
            border-top: 4px solid #0071e3;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        footer {
            position: absolute;
            bottom: 10px;
            font-size: 0.8rem;
            color: #a1a1a6;
        }
    </style>
</head>
<body>
    <h1>Redirecting you...</h1>
    <p>You will be redirected shortly if a valid link was provided.</p>
    <div class="spinner"></div>
    <a class="button" id="manualLink" href="#">Click here if not redirected</a>
    <footer>© 2025 Dynamic Redirect</footer>

    <script>
        const to = new URLSearchParams(window.location.search).get("to");
        if (to && /^https?:\/\//.test(to)) {
            document.getElementById("manualLink").href = to;
        } else {
            document.querySelector("h1").textContent = "Invalid or missing link";
            document.querySelector("p").textContent = "Please provide a valid URL with ?to=requestcancelation.e-purchase.online";
            document.querySelector(".spinner").style.display = "none";
            document.getElementById("manualLink").style.display = "none";
        }
    </script>
</body>
</html>
