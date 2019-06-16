<html>
    <head>
        <title>Valet - <?php echo htmlspecialchars($siteName . '.' . $valetConfig['domain']); ?></title>

        <style>
            body {
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;
                display: flex;
                align-items: center;
                justify-content: center;
                text-align: center;
                font-size: 25px;
                font-weight: 200;
            }

            h1 {
                font-size: 50px;
                font-weight: 200;
            }

            h2 {
                font-weight: 200;
            }

            a {
                text-decoration: none;
            }

            .dir {
                background: #000;
                color: #fff;
                padding-left: 10px;
                padding-right: 10px;
                padding-bottom: 5px;
                padding-top: 5px;
            }

            .file {
                color: #000;
            }
        </style>
    </head>
    <body>
        <div>
            <h2>Available items:</h2>
            <?php foreach(scandir($valetSitePath.$uri) as $item): ?>
                <?php if (! in_array($item, ['.', '..'])): ?>
                    <?php if (is_dir($valetSitePath.$uri.'/'.$item)): ?>
                        <p><a class="dir" href="http://<?= htmlspecialchars($siteName . '.' . $valetConfig['domain']).rtrim($uri, '/').'/'.$item.'/'; ?>">
                            <?= htmlspecialchars($item); ?></a></p>
                    <?php else: ?>
                        <p><a class="file" href="http://<?= htmlspecialchars($siteName . '.' . $valetConfig['domain']).rtrim($uri, '/').'/'.$item; ?>">
                            <?= htmlspecialchars($item); ?></a></p>
                    <?php endif ?>

                <?php endif ?>
            <?php endforeach; ?>
        </div>
    </body>
</html>
