
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Let's make it count | Les cardinaux - Upian</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="A la fin d�un voyage � L.A., quatre potes d�cident de s�parer leurs routes et cherchent � vivre de fa�on m�morable leur derni�re journ�e dans la cit� des Anges.">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="dist/main.css">
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fetch/1.0.0/fetch.js"></script>
    <script src="https://code.createjs.com/preloadjs-0.6.2.min.js"></script>
    <script src="https://code.createjs.com/tweenjs-0.6.2.min.js"></script>
    <script src="https://code.createjs.com/soundjs-0.6.2.min.js"></script>
    <script src="/assets/lib/jquery.min.js"></script>

    <meta property="og:type" content="website" />
    <meta property="og:title" content="Let's make it count | Les cardinaux - Upian" />
    <meta property="og:site_name" content="Les Cardinaux">
    <meta property="og:url" content="http://www.lescardinaux.com" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="http://www.lescardinaux.com" />
    <meta name="twitter:title" content="Let's make it count | Les cardinaux - Upian" />
    <meta name="twitter:description" content="A la fin d�un voyage � L.A., quatre potes d�cident de s�parer leurs routes et cherchent � vivre de fa�on m�morable leur derni�re journ�e dans la cit� des Anges." />

    <!-- Icons ! -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />
    <link rel="icon" href="/assets/img/logo/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="icon" href="/assets/img/logo/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/logo/apple-touch-icon.png">

    <meta name="application-name" content="Let's make it count">
    <meta name="msapplication-TileImage" content="/assets/img/logo/mstile-150x150.png">
    <meta name="msapplication-TileColor" content="#000000">
</head>
<body class="is-loading">
    <div id="views">
        <div class="view view--intro" data-view="intro">
            <div class="intro-wrapper">
                <header class="intro-header">
                    <h2>Les cardinaux</h2>
                    <h2 class="logo-upian">
                        <img src="/assets/img/upian.png" alt="Upian.com">
                    </h2>
                </header>
                <p class="view-text" data-text="intro:0">Pr�sentent</p>

                <img class="intro-title" src="/assets/img/title.png" alt="Let's make it count"/>

                <div class="intro-loader">
                    <span class="load-text" data-text="intro:1">Chargement</span> <span class="load-percent">0%</span>
                </div>

                <div class="view-text intro-loaded" data-text="intro:2">
                    Le film dure entre 10 et 35 minutes.
                    Nous vous recommandons de brancher vos �couteurs.
                    Vous pouvez passer d'un personnage � l'autre � tout moment.
                </div>
            </div>
        </div>
        <div class="view view--credits" data-view="credits">
            <div class="credits-wrapper">
                <div class="credits">
                    <h2 class="cardinaux-name">Les cardinaux</h2>
                    <h2 class="logo-upian">
                        <img src="/assets/img/upian.png" alt="Upian.com">
                    </h2>
                    <img class="intro-title" src="/assets/img/title.png" alt="Let's make it count">

                    <ul class="list-cast">
                        <li class="list-title" data-text="credits:cast">Acteurs</li>

                        <li class="cast-item">
                            <ul class="cast-cardinal">
                                <li class="cardinal-item cardinal-title" data-text="credits:north">Nord</li>
                                <li class="cardinal-item"><span data-text="credits:by">par</span> Simon Bouisson</li>
                                <li class="cardinal-item">Florian Haberland</li>
                                <li class="cardinal-item">Anna Paternot</li>
                                <li class="cardinal-item">Thia Schuessler</li>
                                <li class="cardinal-item">Ambarish Manepalli</li>
                                <li class="cardinal-item">Ludovic Zuili</li>
                            </ul>
                        </li>
                        <li class="cast-item">
                            <ul class="cast-cardinal">
                                <li class="cardinal-item cardinal-title" data-text="credits:est">Est</li>
                                <li class="cardinal-item"><span data-text="credits:by">par</span> Akihiro Hata</li>
                                <li class="cardinal-item">Jer�me Charvet</li>
                                <li class="cardinal-item">Decker Sadowski</li>
                                <li class="cardinal-item">Akihiro Hata</li>
                                <li class="cardinal-item">Ludovic Zuili</li>
                            </ul>
                        </li>
                        <li class="cast-item">
                            <ul class="cast-cardinal">
                                <li class="cardinal-item cardinal-title" data-text="credits:west">Ouest</li>
                                <li class="cardinal-item"><span data-text="credits:by">par</span> Ambarish Manepalli</li>
                                <li class="cardinal-item">Bertrand XavierCorbi</li>
                                <li class="cardinal-item">Simon Bouisson</li>
                                <li class="cardinal-item">Ambarish Manepalli</li>
                                <li class="cardinal-item">Thia Schuessler</li>
                                <li class="cardinal-item">Adrian Todd Zuniga</li>
                            </ul>
                        </li>
                        <li class="cast-item">
                            <ul class="cast-cardinal">
                                <li class="cardinal-item cardinal-title" data-text="credits:south">Sud</li>
                                <li class="cardinal-item"><span data-text="credits:by">par</span> Ludovic Zuili</li>
                                <li class="cardinal-item">Matthew Luret</li>
                                <li class="cardinal-item">Ciprian Cosma</li>
                                <li class="cardinal-item">Thia Schuessler</li>
                                <li class="cardinal-item">Ambarish Manepalli</li>
                            </ul>
                        </li>

                        <li class="list-title" data-text="credits:crew">L'�quipe</li>

                        <li class="cast-item">
                            <ul class="cast-cardinal">
                                <li class="cardinal-item cardinal-title" data-text="credits:north">Nord</li>
                                <li class="cardinal-item"><span data-text="credits:by">par</span> Simon Bouisson</li>
                                <li class="cardinal-item"><span data-text="credits:dop">Directeur de la photographie </span> - Ludovic Zuili</li>
                                <li class="cardinal-item"><span data-text="credits:sound">Chef op�rateur son</span> - Nicolas Osorio</li>
                                <li class="cardinal-item"><span data-text="credits:grip">Machiniste</span> - Akihiro Hata</li>
                                <li class="cardinal-item"><span data-text="credits:crew">L'�quipe</span> - Ambarish Manepalli</li>
                                <li class="cardinal-item"><span data-text="credits:and">et</span> Rex New</li>
                                <li class="cardinal-item"><span data-text="credits:mix">Mixage</span> - Croissant.</li>
                            </ul>
                        </li>
                        <li class="cast-item">
                            <ul class="cast-cardinal">
                                <li class="cardinal-item cardinal-title" data-text="credits:est">Est</li>
                                <li class="cardinal-item"><span data-text="credits:by">par</span> Akihiro Hata</li>
                                <li class="cardinal-item"><span data-text="credits:dop">Directeur de la photographie </span> - s�ndl</li>
                                <li class="cardinal-item"><span data-text="credits:sound">Chef op�rateur son</span> - Nicolas Osorio</li>
                                <li class="cardinal-item"><span data-text="credits:grip">Machiniste</span> - Ambarish Manepalli</li>
                                <li class="cardinal-item"><span data-text="credits:crew">L'�quipe</span> - Rex New</li>
                                <li class="cardinal-item"><span data-text="credits:mix">Mixage</span> - Croissant.</li>
                            </ul>
                        </li>
                        <li class="cast-item">
                            <ul class="cast-cardinal">
                                <li class="cardinal-item cardinal-title" data-text="credits:west">Ouest</li>
                                <li class="cardinal-item"><span data-text="credits:by">par</span> Ambarish Manepalli</li>
                                <li class="cardinal-item"><span data-text="credits:dop">Directeur de la photographie </span> - Ludovic Zuili</li>
                                <li class="cardinal-item"><span data-text="credits:and">et</span> Ambarish Manepalli</li>
                                <li class="cardinal-item"><span data-text="credits:sound">Chef op�rateur son</span> - Nicolas Osorio</li>
                                <li class="cardinal-item"><span data-text="credits:crew">L'�quipe</span> - Rex New</li>
                                <li class="cardinal-item"><span data-text="credits:mix">Mixage</span> - Croissant.</li>
                            </ul>
                        </li>
                        <li class="cast-item">
                            <ul class="cast-cardinal">
                                <li class="cardinal-item cardinal-title" data-text="credits:south">Sud</li>
                                <li class="cardinal-item"><span data-text="credits:by">par</span> Ludovic Zuili</li>
                                <li class="cardinal-item"><span data-text="credits:dop">Directeur de la photographie </span> - s�ndl</li>
                                <li class="cardinal-item"><span data-text="credits:sound">Chef op�rateur son</span> - Nicolas Osorio</li>
                                <li class="cardinal-item"><span data-text="credits:crew">L'�quipe</span> - Ambarish Manepalli,</li>
                                <li class="cardinal-item">Akihiro Hata <span data-text="credits:and">et</span> Rex New</li>
                                <li class="cardinal-item"><span data-text="credits:mix">Mixage</span> - Croissant.</li>
                            </ul>
                        </li>

                        <li class="list-title" data-text="credits:music">Musique</li>

                        <li class="cast-item">
                            <ul class="cast-cardinal">
                                <li class="cardinal-item cardinal-title" data-text="credits:north">Nord</li>
                                <li class="cardinal-item">NTM</li>
                                <li class="cardinal-item">Alexandre Desplat</li>
                            </ul>
                        </li>
                        <li class="cast-item">
                            <ul class="cast-cardinal">
                                <li class="cardinal-item cardinal-title" data-text="credits:est">Est</li>
                                <li class="cardinal-item">Frank Sinatra - Somethin� Stupid</li>
                                <li class="cardinal-item">A Nightmare on Elm Street Theme �</li>
                                <li class="cardinal-item">Charles Bernstein</li>
                            </ul>
                        </li>
                        <li class="cast-item">
                            <ul class="cast-cardinal">
                                <li class="cardinal-item cardinal-title" data-text="credits:west">Ouest</li>
                                <li class="cardinal-item" data-text="credits:rights">Musique mise � disposition par Freemusicarchive.org</li>
                                <li class="cardinal-item">Maceo Plex & Gabriel Ananda - Solitary Daze</li>
                                <li class="cardinal-item">Us Army Blues - Main Stem</li>
                                <li class="cardinal-item">US Army Blues - Dance of the Stargazer</li>
                                <li class="cardinal-item">Philippe Weigl - Even where we Fall</li>
                                <li class="cardinal-item">Jon Luc Hefferman - Discovery</li>
                                <li class="cardinal-item">Tri�Tachyon - Little Lily Swing</li>
                            </ul>
                        </li>
                        <li class="cast-item">
                            <ul class="cast-cardinal">
                                <li class="cardinal-item cardinal-title" data-text="credits:south">Sud</li>
                                <li class="cardinal-item">Mr Oizo - WC</li>
                                <li class="cardinal-item">Mr Oizo - Stunt (feat Sebastien Tellier)</li>
                                <li class="cardinal-item">Sebastian - Walkman</li>
                                <li class="cardinal-item">Darius - Espoir</li>
                            </ul>
                        </li>

                        <li class="credit-item">
                            <span data-text="credits:association">En association avec</span> Shy Ruby Productions
                            <span data-text="credits:manager">Charg�s de production</span> Thia Schuessler <span data-text="credits:and">et</span> Rex New
                            <span data-text="credits:ad">Premier assistant r�alisateur</span> � Rex New
                        </li>
                        
                        <li class="credit-item">
                            <span data-text="credits:shot">Film� � Los Angeles en 2016</span>
                        </li>

                        <li class="list-title" data-text="credits:postprod">Post-production</li>

                        <li class="credit-item">
                            <span>Granon Digital</span>
                            <span data-text="credits:etalonneur">Etalonneur</span> - Antoine Grasset
                        </li>

                        <li class="list-title" data-text="credits:upian">Produit par Upian</li>

                        <li class="cast-item">
                            <ul class="cast-cardinal">
                                <li class="cardinal-item cardinal-title" data-text="credits:production">Production</li>
                                <li class="cardinal-item">Alexandre Brachet</li>
                                <li class="cardinal-item">Margaux Missika</li>
                                <li class="cardinal-item">Gregory Trowbridge</li>
                                <li class="cardinal-item">Auriane Meilhon</li>
                            </ul>
                        </li>

                        <li class="cast-item">
                            <ul class="cast-cardinal">
                                <li class="cardinal-item cardinal-title" data-text="credits:dirart">Direction Artistique</li>
                                <li class="cardinal-item">Karim Moreau</li>
                                <li class="cardinal-item">S�bastien Brothier</li>
                            </ul>
                        </li>

                        <li class="cast-item">
                            <ul class="cast-cardinal">
                                <li class="cardinal-item cardinal-title" data-text="credits:dirtech">Direction technique et d�veloppement web</li>
                                <li class="cardinal-item">Maxime Quintard</li>
                                <li class="cardinal-item">Th�o Baes</li>
                            </ul>
                        </li>
                        <li class="cast-item">
                            <ul class="cast-cardinal">
                                <li class="cardinal-item cardinal-title" data-text="credits:assistantes">Assistantes de production</li>
                                <li class="cardinal-item">Carlotta Verny</li>
                                <li class="cardinal-item">Agn�s Tiberghien</li>
                            </ul>
                        </li>

                        <li class="credit-item item--thx">
                            <b data-text="credits:thx">Remerciements</b>
                            Family Manepalli, Ford, In & Out, the Los Angeles Dodgers, Tinder Inc, Olivier Demangel, No�mie Merlant, Morgane Fonvieille, Alice Hammer, Kamel Gemra, Emmanuel Rey�, Julie Mathieu, Vincent Ballesstrino, Sean Hart.
                        </li>
                        <li class="credit-item" data-text="credits:copyright">
                            <b>� CARDINAUX 2016</b> ALL RIGHTS RESERVED
                        </li>
                    </ul>
                </div>
            </div>

            <aside class="credits-actions">
                <div class="replay" data-proceed="00:00">
                    <span class="icon-replay"></span>
                    <span class="text-replay" data-text="credits:replay">Rejouer</span>
                </div>

                <div class="credits-share">
                    <h3 data-text="credits:share">Partager</h3>

                    <div class="credits-share-actions">
                        <a class="action-facebook" data-social="facebook" target="_blank"></a>
                        <a class="action-twitter" data-social="twitter" target="_blank"></a>
                    </div>
                </div>
            </aside>

            <span class="icon-close"></span>
        </div>
        <div class="view view--about" data-view="about">
            <div class="about-wrapper">
                <div class="about">
                    <h1 class="view-title" data-text="about:0">� Le web est un outil de cin�ma. �</h1>

                    <p class="view-text">
                        <span data-text="about:5">Simon Bouisson (NORD) Akihiro Hata (EST)</span>
                        <span data-text="about:6">Ambarish Manepalli (OUEST) Ludovic Zuili (SUD)</span>
                    </p>

                    <p class="view-text" data-text="about:1">
                        Les Cardinaux est un collectif de quatre potes r�alisateurs qui confrontent et font r�sonner leurs quatre points de vue sur le monde. A travers des courts-m�trages de fictions qui s�entrecroisent autour d�une intrigue commune, ils explorent de nouvelles formes de narration sur le web.
                    </p>

                    <p class="view-text" data-text="about:2">
                        4 films l 4 directions I 4x10min
                    </p>

                    <p class="view-text" data-text="about:3">
                        Apr�s le lancement en 2013 de l�exp�rience de fiction web L'Apocalypse,<br>Let�s make it count est le deuxi�me volet de leur collection de courts-m�trages.
                    </p>

                    <a href="http://apocalypse.lescardinaux.com" class="about-btn" data-text="about:4" target="_blank" data-prevent>
                        Voir L'apocalypse
                    </a>

                    <p class="view-text no-wrap">
                        <a href="mailto:contact@lescardinaux.com" class="about-mail" target="_blank" data-prevent data-text="about:7">contact@lescardinaux.com</a>
                    </p>

                    <p class="view-text" data-text="about:8">
                        Ne ratez pas les prochains courts-m�trages des Cardinaux
                    </p>

                    <form action="//upian.us9.list-manage.com/subscribe/post-json?u=17fef627b0b99cfe87ce95cd9&id=18514b3f95&c=?" method="get" class="subscribe-form" novalidate>
                        <div id="mce-response" data-prevent></div>
                        <input type="email" name="EMAIL" placeholder="Mon email" data-prevent class="required email" id="mce-EMAIL" required>
                        <button type="submit" class="about-btn" id="mc-embedded-subscribe" data-text="about:9" data-prevent>S'abonner</button>

                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_17fef627b0b99cfe87ce95cd9_18514b3f95" tabindex="-1" value=""></div>
                    </form>

                    <div class="about-share">
                        <a class="action-facebook" data-social="facebook" target="_blank" data-prevent></a>
                        <a class="action-twitter" data-social="twitter" target="_blank" data-prevent></a>
                    </div>
                </div>
            </div>
            <span class="icon-close"></span>
        </div>
        <div class="view view--ios" data-view="ios">
            <h1 class="view-title" data-text="ios:0">
                :(<br>
                D�sol�.<br>
                Ce programme n'est pas compatible<br>
                avec vore appareil.
            </h1>
        </div>
        <div class="view view--orientation" data-view="orientation">
            <span class="icon-replay"></span>
            <p class="view-text" data-text="orientation:0">
                Retournez<br>
                votre appareil
            </p>
        </div>
    </div>

    <menu>
        <ul class="menu-list">
            <li class="menu-item switch">
                <span class="switch-title" data-text="interface:quality">Qualit�</span>

                <div class="switch-wrapper">
                    <input type="radio" name="quality" id="quality-4k" value="4K" data-prevent>
                    <label for="quality-4k" class="switch-option">4k</label>

                    <input type="radio" name="quality" id="quality-hd" value="HD" data-prevent>
                    <label for="quality-hd" class="switch-option">hd</label>

                    <input type="radio" name="quality" id="quality-md" value="MD" data-prevent>
                    <label for="quality-md" class="switch-option">md</label>

                    <input type="radio" name="quality" id="quality-sd" value="SD" checked data-prevent>
                    <label for="quality-sd" class="switch-option">sd</label>
                </div>
            </li>
            <li class="menu-item switch">
                <span class="switch-title" data-text="interface:subtitles">Sous titres</span>

                <div class="switch-wrapper">
                    <input type="radio" name="subtitles" id="subtitles-on" value="on">
                    <label for="subtitles-on" class="switch-option is-active" data-text="interface:on">on</label>

                    <input type="radio" name="subtitles" id="subtitles-off" value="off">
                    <label for="subtitles-off" class="switch-option" data-text="interface:off">off</label>
                </div>
            </li>
            <li class="menu-item switch">
                <span class="switch-title" data-text="interface:language">Langue</span>

                <div class="switch-wrapper">
                    <input type="radio" name="language" id="language-fr" value="fr">
                    <label for="language-fr" class="switch-option is-active" data-text="interface:fr">fr</label>

                    <input type="radio" name="language" id="language-en" value="en">
                    <label for="language-en" class="switch-option" data-text="interface:en">en</label>

                    <input type="radio" name="language" id="language-jp" value="jp">
                    <label for="language-jp" class="switch-option" data-text="interface:jp">jp</label>
                </div>
            </li>
            <li class="menu-item" data-href="credits" data-text="interface:credits">Cr�dits</li>
            <li class="menu-item" data-href="about" data-text="interface:about">A propos</li>
        </ul>

        <span class="icon-close"></span>
    </menu>

    <div id="wrapper">
        <video id="main" preload="auto" webkit-playsinline playsinline muted>
            <source src="http://cdn.lescardinaux.com/videos/letsmakeitcount_854.mp4" type="video/mp4">
        </video>

        <div class="squares">
            <div class="square" data-square="1" data-cardinal="NORTH" tabindex="1">
                <div class="rect"></div>
                <div class="caption"></div>
            </div>
            <div class="square" data-square="2" data-cardinal="EAST" tabindex="2">
                <div class="rect"></div>
                <div class="caption"></div>
            </div>
            <div class="square" data-square="3" data-cardinal="WEST" tabindex="3">
                <div class="rect"></div>
                <div class="caption"></div>
            </div>
            <div class="square" data-square="4" data-cardinal="SOUTH" tabindex="4">
                <div class="rect"></div>
                <div class="caption"></div>
            </div>
        </div>
    </div>

    <div class="loader">
        <div class="loading">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>

        <div class="cardinaux">
            <span>N</span>
            <span>O</span>
            <span>E</span>
            <span>S</span>
        </div>
    </div>

    <div id="controls">
        <div class="action-time">
            <div class="time-passed"></div>
            <div class="time-preload"></div>
            <div class="time-all"></div>

            <ul class="list-chapters">
                <li class="item-chapter" data-proceed="01:09"></li>
                <li class="item-chapter" data-proceed="03:10"></li>
                <li class="item-chapter" data-proceed="05:13"></li>
                <li class="item-chapter" data-proceed="07:24"></li>
                <li class="item-chapter" data-proceed="09:30"></li>
            </ul>
        </div>

        <div class="controls-actions">
            <div class="action-play" data-play></div>

            <div class="action-sound" data-sound>
                <div class="sound-icon"></div>
                <div class="sound-control">
                    <div class="sound-controller"></div>
                </div>
            </div>

            <div class="info-time">
                <span class="time-remaining">00:00</span>
                <span class="time-sep">/</span>
                <span class="time-total">00:00</span>
            </div>

            <div class="action-menu" data-open="menu"></div>
            <div class="action-fullscreen" data-fullscreen></div>
            <a class="action-twitter" data-social="twitter" target="_blank"></a>
            <a class="action-facebook" data-social="facebook" target="_blank"></a>
        </div>
    </div>

    <script src="dist/bundle.js" defer></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-91585405-1', 'auto');
        ga('send', 'pageview');
    </script>
</body>
</html>