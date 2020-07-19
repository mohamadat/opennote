<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/notesite/css/style2.css">
    <link rel="stylesheet" href="/notesite/css/style.css">

    <title>Atwa</title>
</head>
<body>


    <!-- Header -->
    <header class="container">
        <!--  1- logo -->
        <div class="logo">
            <img src="/notesite/images/logo.svg" alt="Logo image" class="logoimg">
            <h2>Atwa Tech</h2>
        </div>
        <!-- 2- navigation -->
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="/notes">All Notes</a></li>

                <li><a href="/notes/new#notesection" class="highligh">Take a note</a></li>


            </ul>
        </nav>

    </header>

    <main class="container">
        <section class="hero container">
            <div>
                    <h1>Atwa Notes</h1>
                    <p>Web app, Api made with Laravel 7. . .
                    </p>
                    <a href="/notes/new#notesection">Try it for free</a>
            </div>
            </section>
            <div class="device">
                <figure>
                    <img src="/notesite/images/illustration.svg" alt="illueseration image">
                </figure>

            </div>
    </main>

<!-- Adding note section -->
    @yield('noteform')
    @yield('allnotes')


<footer>
	<div class="footer-inner">
		<div class="footer-col">
			<img src="/notesite/images/logo.svg" class="footer-logo">
		</div>
		<div class="footer-col">
			<h3>Links</h3>
			<ul>
				<li><a href="#notesection"></a>notesection</li>
				<li><a href="#"></a>Home</li>
			</ul>
		</div>
		<div class="footer-col">
			<h3>where to find us</h3>
			<ul>
				<li><a href="#"></a>Utrecht, Netherlands</li>
				<li><a href="#"></a>3602VL</li>
			</ul>
		</div>
	</div>
    <h3 class="made_by">Made with ♡ by Atwa</h3>
</footer>

    <!-- Hero -->

