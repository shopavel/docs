<!DOCTYPE html>
<html>
    <head>
        <title>Shopavel</title>

        <link rel="stylesheet" href="/assets/stylesheets/normalize.css">
        <link rel="stylesheet" href="/assets/stylesheets/foundation.min.css">
        <link rel="stylesheet" href="/assets/stylesheets/application.css">
        <link rel="stylesheet" href="/assets/stylesheets/highlight/drive.css">
    </head>
    <body>
        <header id="site-header" class="contain-to-grid sticky">
            <nav class="top-bar">
                <ul class="title-area">
                    <li class="name">
                        <h1><a href="/"><strong>shopavel</strong> ecommerce for laravel</a></h1>
                    </li>
                </ul>
                <section class="top-bar-section">
                    <ul class="right">
                        <li><a href="/docs">Documentation</a></li>
                        <li><a href="http://github.com/shopavel">Github</a></li>
                    </ul>
                </section>
            </nav>
        </header>

        <div class="bar">
            <div class="one"></div>
            <div class="two"></div>
            <div class="three"></div>
            <div class="four"></div>
            <div class="five"></div>
        </div>

        <div id="site-content">
            @section('body')

            @show
        </div>

        <footer id="site-footer">
            <div class="row">
                <p>by <a href="http://www.gelatindesign.co.uk">lsjroberts</a></p>
            </div
        </footer>

        <script src="/assets/javascripts/vendor/highlight.js"></script>
        <script src="/assets/javascripts/vendor/jquery.js"></script>
        <script src="/assets/javascripts/application.js"></script>
    </body>
</html>