<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Suspended - Aisbir Cloud Nusantara</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #e63946;
            --primary-hover: #b91c1c;
            --text-main: #0f172a;
            --text-muted: #334155;
            --glass-bg: rgba(255, 255, 255, 0.85);
            --glass-border: rgba(255, 255, 255, 0.4);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Outfit', sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f1f5f9;
            background-image: url('https://id-cdn.aisbirnusantara.com/brand/poppy-hill-disneyscreencaps.com-6394.webp');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: var(--text-main);
        }

        .container-wrapper {
            position: relative;
            z-index: 2;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1.5rem;
            min-height: 100vh;
        }

        .card {
            width: 100%;
            max-width: 600px;
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 2.5rem;
            text-align: center;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            animation: fadeIn 0.8s ease-out forwards;
            opacity: 0;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }

            from {
                opacity: 0;
                transform: translateY(20px);
            }
        }

        .card-header {
            display: flex;
            justify-content: center;
            margin-bottom: 2rem;
        }

        .logo {
            max-width: 180px;
            width: 100%;
            height: auto;
            display: block;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background-color: rgba(239, 68, 68, 0.1);
            /* Red background */
            color: #ef4444;
            /* Red text */
            padding: 0.5rem 1rem;
            border-radius: 9999px;
            font-size: 0.875rem;
            font-weight: 600;
            border: 1px solid rgba(239, 68, 68, 0.3);
            /* Red border */
            text-transform: uppercase;
            letter-spacing: 0.05em;
            white-space: nowrap;
        }

        .pulse-dot {
            width: 8px;
            height: 8px;
            background-color: #ef4444;
            /* Red dot */
            border-radius: 50%;
            box-shadow: 0 0 0 0 rgba(239, 68, 68, 0.7);
            animation: pulse-red 2s infinite;
            flex-shrink: 0;
        }

        @keyframes pulse-red {
            0% {
                box-shadow: 0 0 0 0 rgba(239, 68, 68, 0.7);
            }

            70% {
                box-shadow: 0 0 0 8px rgba(239, 68, 68, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(239, 68, 68, 0);
            }
        }

        h1 {
            font-size: 2.25rem;
            font-weight: 800;
            margin-bottom: 1rem;
            color: var(--text-main);
            line-height: 1.2;
            word-break: break-word;
        }

        p {
            font-size: 1.05rem;
            line-height: 1.6;
            color: var(--text-muted);
            margin-bottom: 2.5rem;
            font-weight: 400;
        }

        .btn-container {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        @media (min-width: 500px) {
            .btn-container {
                justify-content: center;
            }
        }

        @media (max-width: 499px) {
            .btn-container {
                flex-direction: column;
            }
        }

        .btn {
            flex: 1;
            min-width: 160px;
            max-width: 250px;
            margin: 0 auto;
            padding: 0.875rem 1.5rem;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.2s ease;
            cursor: pointer;
            border: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .btn-primary {
            background-color: var(--primary);
            color: white;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: var(--primary-hover);
            transform: translateY(-2px);
        }

        .footer-text {
            margin-top: 2.5rem;
            font-size: 0.875rem;
            color: #64748b;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
            padding-top: 1.5rem;
            text-align: center;
        }

        .footer-text a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.2s;
        }

        .footer-text a:hover {
            color: var(--primary-hover);
        }

        @media (min-width: 500px) {
            .card {
                padding: 3rem;
            }
        }

        @media (max-width: 499px) {
            .card {
                padding: 2rem 1.5rem;
            }

            h1 {
                font-size: 1.875rem;
            }
        }
    </style>
</head>

<body>
    <div class="container-wrapper">
        <div class="card">

            <div class="card-header">
                <img src="https://id-cdn.aisbirnusantara.com/brand/auth-logo.png" alt="Aisbir Cloud Nusantara Logo"
                    class="logo">
            </div>

            <h1 id="domain-name">Account Suspended!</h1>

            <p><strong><?php echo htmlspecialchars($_SERVER['HTTP_HOST'] ?? 'This account'); ?></strong> has been suspended due to an overdue invoice. Please renew via the Website Portal to reactivate.</p>

            <div class="btn-container">
                <a href="https://portal.aisbirnusantara.com" class="btn btn-primary" target="_blank"
                    rel="noopener noreferrer">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                        <line x1="12" y1="17" x2="12.01" y2="17"></line>
                    </svg>
                    Website Portal
                </a>
            </div>

            <div class="footer-text">
                <a href="https://aisbirnusantara.com" rel="noopener noreferrer">Aisbir Cloud
                    Nusantara</a>
            </div>
        </div>
    </div>

</body>

</html>
