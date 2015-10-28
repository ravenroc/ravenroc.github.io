<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge,chrome=1">
        <title>digsite_ :: Jeremy Paris</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/dist/main.css">
    </head>
    <body>
        <?
        include_once("svg-inc.php");
        ?>

        <div class="page-wrap">
            <header class="site-head">
            	<h1>digsite_</h1>

                <nav class="main">
                    <ul>
                        <li><a href="#" class="nav-item active" title="About" data-section="about"><svg class="icon icon-about"><use xlink:href="#icon-about"></use></svg></a></li>
                        <li><a href="#" class="nav-item" title="Code" data-section="code"><svg class="icon icon-code"><use xlink:href="#icon-code"></use></svg></a></li>
                        <?/* <li><a href="#" class="nav-item" title="Resum&eacute;" data-section="resume"><svg class="icon icon-resume"><use xlink:href="#icon-resume"></use></svg></a></li> */?>
                        <li><a href="mailto:paris.jeremyj@gmail.com" title="Contact"><svg class="icon icon-contact"><use xlink:href="#icon-contact"></use></svg></a></li>
                    </ul>
                </nav>
            </header>

            <main>
            	<section class="about active">
            		<h1>Jeremy Paris</h1>

                    <p>I&rsquo;m a web developer who is currently crafting websites for <a href="http://www.wedu.com" rel="external">wed&uuml;</a>. I started coding while taking an extra-curricular HTML course in high school, and I haven&rsquo;t stopped since. I strive to learn a little more everyday, and drive my skill sets forward.</p>

                    <h2>Fun Facts</h2>

                    <ul>
                        <li>I have two adorable cats named Atris and Aurra, both of whom are named after Star Wars characters.</li>
                        <li>I hold a 2<sup>nd</sup> Degree Black Belt in Ed Parker Kenpo Karate and a Blue Belt in Gracie Jiu-Jitsu</li>
                    </ul>
            	</section>

                <section class="code">
                    <h1>Code</h1>

                    <article>
                        <header>
                            <h1>Social Code</h1>
                        </header>

                        <ul class="social-code">
                            <li><a href="http://codepen.io/digsite_/" rel="external"><svg class="icon icon-codepen"><use xlink:href="#icon-codepen"></use></svg><span class="text">Codepen</span></a></li>
                            <li><a href="https://github.com/digsite" rel="external"><svg class="icon icon-github"><use xlink:href="#icon-github"></use></svg><span class="text">GitHub</span></a></li>
                        </ul>
                    </article>

                    <hr />

                    <article>
                        <header>
                            <h1>Responsive Site Builds</h1>
                        </header>

                        <ul>
                            <li><a href="http://www.henryscheinworkday.com/" rel="external">Henry Schein Workday</a></li>
                            <li><a href="http://cc-nh.org/" rel="external">Catholic Charities New Hampshire</a></li>
                            <li><a href="http://fireupyourfeet.org" rel="external">Fire Up Your Feet</a></li>
                            <li><a href="http://www.atra-online.com" rel="external">American Therapeutic Recreation Association</a></li>
                        </ul>
                    </article>

                    <hr />

                    <article>
                        <header>
                            <h1>Animation</h1>
                        </header>

                        <ul>
                            <li><a href="http://www.proconinc.com/welcome" rel="external">Pro Con Inc. Welcome Screen</a></li>
                            <li><a href="http://www.mclane.com" rel="external">McLane Middleton "M"</a></li>
                        </ul>
                    </article>
                </section>
            </main>
        </div>

        <footer class="site-footer">
            &copy; 2015 Jeremy Paris 
            <span class="socials">
                <a href="//twitter.com/digsite_" title="digsite_ on Twitter" rel="exteral"><svg class="icon icon-twitter"><use xlink:href="#icon-twitter"></use></svg></a>
                <a href="//github.com/digsite" title="digsite on Github" rel="exteral"><svg class="icon icon-github"><use xlink:href="#icon-github"></use></svg></a>
                <a href="//codepen.io/digsite_" title="digsite_ on Codepen" rel="exteral"><svg class="icon icon-codepen"><use xlink:href="#icon-codepen"></use></svg></a>
            </span>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="js/site.js"></script>
        <script type="text/javascript">
            WebFontConfig = {
                google: { families: [ 'PT+Mono::latin', 'Roboto:400,700italic,700,400italic:latin', 'Orbitron:700:latin' ] }
            };
            (function() {
                var wf = document.createElement('script');
                wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                    '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
                wf.type = 'text/javascript';
                wf.async = 'true';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(wf, s);
            })(); 
        </script>
        <!-- GOOGLE ANALYTICS -->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-68295470-1', 'auto');
          ga('send', 'pageview');

        </script>
    </body>
</html>
