<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Your New Website - Aisbir Cloud Nusantara</title>
    <meta name="description"
        content="This domain has been successfully registered and hosted at Aisbir Cloud Nusantara.">
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
            background-image: url('https://id-cdn.aisbirnusantara.com/brand/poppy-hill-disneyscreencaps.com-1758.webp');
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
            max-width: 650px;
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

        /* Guidance Alert */
        .guidance-box {
            background-color: rgba(59, 130, 246, 0.08);
            border: 1px dashed rgba(59, 130, 246, 0.4);
            border-radius: 12px;
            padding: 1.25rem;
            margin-top: 2rem;
            text-align: left;
        }

        .guidance-box h3 {
            font-size: 0.95rem;
            color: #2563eb;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .guidance-box p,
        .guidance-box ol {
            font-size: 0.875rem;
            color: #334155;
            line-height: 1.5;
        }

        .guidance-box ol {
            margin-top: 0.5rem;
            margin-left: 1.25rem;
        }

        .guidance-box li {
            margin-bottom: 0.25rem;
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
    <!-- 
    ========================================================
    HOW TO CHANGE THIS DEFAULT PAGE:
    ========================================================
    This is the default placeholder page for your domain. 
    To publish your own website, follow these steps:
    
    1. Log in to your DirectAdmin control panel.
    2. Go to File Manager -> Domains -> [your domain] -> public_html
    3. Delete or rename this file (index.html).
    4. Upload your own website files (e.g., your own index.html or index.php) into the public_html folder.
    ========================================================
    -->
    <div class="container-wrapper">
        <div class="card">

            <div class="card-header">
                <img src="https://id-cdn.aisbirnusantara.com/brand/auth-logo.png" alt="Aisbir Cloud Nusantara Logo"
                    class="logo">
            </div>

            <h1>Welcome to <?php echo htmlspecialchars($_SERVER['HTTP_HOST'] ?? 'our server'); ?>!</h1>
            
            <p>This domain has been successfully registered and hosted. The site is currently being prepared by its
                owner. Please check back later.</p>

            <div class="guidance-box">
                <h3>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="16" x2="12" y2="12"></line>
                        <line x1="12" y1="8" x2="12.01" y2="8"></line>
                    </svg>
                    How to change this page
                </h3>
                <p>To publish your own website:</p>
                <ol>
                    <li>Log in to your <strong>DirectAdmin</strong> panel.</li>
                    <li>Go to <strong>File Manager</strong> &rarr; <strong>Domains</strong> &rarr; <em>your domain</em>
                        &rarr; <strong>public_html</strong>.</li>
                    <li>Delete this <code>index.html</code> file.</li>
                    <li>Upload your own website files here.</li>
                </ol>
            </div>

            <div class="footer-text">
                <a href="https://aisbirnusantara.com" rel="noopener noreferrer">Aisbir Cloud Nusantara</a>
            </div>
        </div>
    </div>

</body>

</html>
