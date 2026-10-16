<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title ?? 'Home = mY Store') ?></title>
    
    <!-- CSS INTERNAL UTUH - JANGAN SAMPAI ADA BARIS YANG TERPOTONG -->
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f6f9;
            color: #333;
        }

        header, nav, main, footer {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: #ffffff;
            border: 1px solid #e3e6f0;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        header h1 {
            color: #4e73df;
            margin: 0 0 5px 0;
        }

        header p {
            color: #858796;
            margin: 0;
        }

        /* Navigasi Horizontal Warna Biru */
        nav {
            display: flex !important;
            flex-direction: row !important;
            justify-content: flex-start !important;
            gap: 15px !important;
            background: #4e73df !important;
            padding: 12px 20px !important;
        }

        nav a {
            color: #ffffff !important;
            text-decoration: none !important;
            font-weight: 600 !important;
            padding: 6px 12px !important;
            border-radius: 4px !important;
        }

        nav a:hover {
            background: rgba(255, 255, 255, 0.2) !important;
        }

        main h3 {
            color: #4e73df;
            border-bottom: 2px solid #e3e6f0;
            padding-bottom: 5px;
        }
    </style>
</head>
<body>

    <?php require __DIR__ . '/../components/header.php'; ?>

    <?php require __DIR__ . '/../components/navbar.php'; ?>

    <main>
        <?php echo $content; ?>
    </main>

    <?php require __DIR__ . '/../components/footer.php'; ?>

    <script src="js/app.js"></script>
</body>
</html>