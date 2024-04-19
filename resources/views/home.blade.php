<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.typeit/3.0.1/typeit.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
    <link rel="stylesheet"
        href="https://cdn-uicons.flaticon.com/2.1.0/uicons-regular-rounded/css/uicons-regular-rounded.css" />
    <title>Sistema de control de agua</title>
</head>

<body>
    <main>
        <section id="pantall1">
            <header>
                <div class="header">
                    <div class="">
                        <img src="../img/pngfind.com-gota-de-agua-png-4591579 (1).png" alt="logo" />
                    </div>
                    <div class="divbotonesheader">
                        <a class="dropbtn">Control</a>
                        <a class="dropbtn">Registrar casa</a>
                        <div class="dropdown">
                            <span class="dropbtn"> Apartados </span>
                            <div>
                                <div class="dropdown-content">
                                    <a href="#pantalla1">Home</a>
                                    <a href="#pantalla2">Información</a>
                                    <a href="#pantalla3">Descargar</a>
                                </div>
                            </div>
                        </div>
                        <a class="botones" href="./login">Inicio de sesión</a>
                    </div>
                </div>
            </header>

            <article>
                <div class="article">
                    <div>
                        <h2 class="gradiante">Control total de tu agua</h2>
                    </div>
                    <div class="cosasUno">
                        <div class="cosas">
                            <p id="ejemplo"></p>
                            <div class="info">
                                <ul>
                                    <span>
                                        <i class="fi fi-rr-bell-ring"></i>
                                        <li class="gradiante">Notificaciones en tiempo real</li>
                                    </span>
                                    <span>
                                        <i class="fi fi-rr-chart-histogram"></i>
                                        <li class="gradiante">Estadísticas de tu consumo</li>
                                    </span>
                                    <span>
                                        <i class="fi fi-rr-checkbox"></i>
                                        <li class="gradiante">Aplicación fácil de usar</li>
                                    </span>
                                </ul>
                            </div>
                        </div>
                        <div class="slider-container">
                            <img class="slider-img" src="../img/tinacos/_09bad0bc-8b69-4f6e-86d4-7a7a45dce989.webp"
                                alt="Imagen 2" />
                            <img class="slider-img" src="../img/tinacos/_90b2e226-ec92-46d9-ab14-e282b44c209d.webp"
                                alt="Imagen 3" />
                            <img class="slider-img" src="../img/tinacos/_a0eb0738-61d4-4cd1-a91d-1f4eb6808b46.webp"
                                alt="Imagen 1" />
                            <button class="prev" onclick="plusSlides(-1)">&#10094;</button>
                            <button class="next" onclick="plusSlides(1)">&#10095;</button>
                        </div>
                    </div>
                </div>
            </article>
        </section>

        <section id="pantalla2">
            <article>

                <div class="comofunciona">
                    <h2 class="gradiante">¿Còmo funciona?</h2>
                </div>

                <div class="dosimagenes">

                    <div class="dos">
                        <img src="{{ asset('img/nivelapp.webp') }}" alt="imagen de una aplicacion" />
                        <div class="fondito">
                            <h3>Control eficiente del nivel de tu agua desde la App</h3>
                        </div>
                        <div>
                            <p>
                                Consulte el estado en tiempo real en nuestra Aplicacion
                            </p>
                        </div>
                    </div>


                    <div class="dos">
                        <img src="{{ asset('img/sensoragua.webp') }}" alt="imagen de un sensor" />
                        <div class="fondito">
                            <h3>Sensor moderno en su almacenamiento de agua</h3>
                        </div>
                        <div>
                            <p>
                                se coloca un sensor encima de la bomba de agua dentro de su almacenamiento
                            </p>
                        </div>
                    </div>

                </div>

            </article>
        </section>

        <section id="pantalla3">
            <article>
                <div class="descargar">
                    <img src="../img/android.png" alt="" />
                    <div class="descargarbien">
                        <div>
                            <h3 id="aplicacion"></h3>
                        </div>
                        <button>Descargar</button>
                    </div>
                    <div>
                        <img src="../img/ios.png" alt="imagen de un movil iOS" />
                    </div>
                </div>
            </article>
        </section>

        <section>
            <div class="muchotexto">

                <article class="mision">
                    <div>
                        <span>Mision</span>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum impedit repudiandae
                            corrupti
                            quis quaerat animi laborum eos accusantium. Suscipit ex ut officiis voluptas repellendus
                            laborum
                            soluta. Vitae totam optio quae?
                            Consequatur nobis nulla doloremque ratione corrupti velit, quia eos et officia amet eveniet
                            ipsum repellat quidem rerum voluptatum eius sunt officiis tenetur. Error blanditiis corporis
                            ex
                            sequi explicabo quos aperiam.
                            Error ipsam sint nobis molestiae animi officia porro tempore cumque in! Impedit magnam
                            assumenda
                            architecto placeat repellendus voluptates porro exercitationem non. Eos blanditiis assumenda
                            eum
                            harum sint natus, officia in.
                            Molestiae, tempore cum odio debitis cupiditate libero voluptatem veniam necessitatibus quam
                            fuga
                            amet molestias commodi, incidunt blanditiis ipsa? Officia fugiat, non delectus totam
                            blanditiis
                            facilis ad! Accusamus neque fugit fuga.
                            Expedita nostrum omnis accusamus maxime adipisci hic minus consequuntur numquam, ratione qui
                            dolorem nulla, porro pariatur? Amet vero unde eos officiis odio blanditiis illo corrupti
                            quas
                            sint, quasi suscipit. Laboriosam!
                        </p>
                    </div>

                </article>

                <article class="objetivo">
                    <div>
                        <span>Objetivo</span>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est repudiandae doloremque
                            doloribus
                            blanditiis, pariatur delectus numquam, ipsam placeat beatae possimus esse voluptate. Rerum
                            eaque
                            laudantium quasi ipsam qui perspiciatis aut!
                            Magnam dicta quibusdam labore culpa molestiae repellat repudiandae, voluptates deserunt, a
                            explicabo vitae! Iusto incidunt itaque saepe non numquam consectetur, fugiat, pariatur
                            similique, iure necessitatibus eius officiis? Perspiciatis, totam labore.
                            Voluptatibus, praesentium fugiat! Dolore perspiciatis enim consectetur ducimus repudiandae
                            possimus temporibus magnam animi sunt suscipit, sint ullam architecto reiciendis quia
                            maiores!
                            Impedit repellat quas consectetur voluptatem quisquam, unde nesciunt qui.
                            Animi numquam quo reiciendis provident incidunt ut sapiente sit nam, necessitatibus quia non
                            accusamus illum omnis dolorum asperiores quam. Facilis laborum aliquam, cumque pariatur
                            ducimus
                            eum et obcaecati error nihil.
                            Ea laboriosam placeat facere dolorem consectetur reprehenderit, quas sed eos necessitatibus
                            perferendis nam sapiente possimus ducimus nulla pariatur nihil praesentium voluptatum sint
                            modi
                            beatae veniam! Consectetur aliquid at debitis sapiente?
                        </p>
                    </div>

                </article>

                <article class="ubicacion">
                    <div>
                        <span>ubicacion</span>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia facilis rem molestiae sunt
                            possimus tempore, eius tenetur non officiis quos dolorem quis amet nemo ea sint ducimus
                            omnis
                            pariatur saepe?
                            Soluta, architecto vitae inventore fugiat, odio porro eaque quos, laudantium recusandae
                            similique maxime maiores necessitatibus voluptates? Culpa doloremque minima possimus
                            distinctio
                            soluta placeat porro! Quisquam iure quaerat expedita doloribus harum?
                            Ducimus quia omnis nam numquam officiis in delectus assumenda voluptatibus animi, suscipit
                            eos,
                            minima ipsa consequuntur sapiente possimus perspiciatis sit? Quisquam, id alias possimus
                            aspernatur esse corrupti porro dolores optio.
                            Voluptatum expedita sit nam ex perspiciatis amet velit libero optio accusantium natus! Id
                            repellat nulla inventore. Ratione unde, modi laboriosam ab reiciendis corrupti delectus
                            natus,
                            facilis, sed accusantium provident odit.
                            In voluptatum eos quis quibusdam, aliquam hic consequatur impedit porro nemo praesentium
                            iusto
                            unde neque mollitia sed quam ipsam nulla illo magnam. Maiores aut doloremque voluptates,
                            quam
                            deleniti eum est!
                        </p>
                    </div>

                </article>

            </div>
            <footer>
                <a href="#">
                    <img src="../img/facebook.png" target="_blank" alt="" />
                </a>

                <a href="#">
                    <img src="../img/instagram.png" alt="" />
                </a>

                <a href="">
                    <img src="../img/twitter.png" alt="" />
                </a>

                <a href="">
                    <img src="../img/whatsapp.png" alt="" />
                </a>

                <a href="">
                    <img src="../img/google.png" alt="" />
                </a>
            </footer>
            </article>
        </section>
    </main>
</body>
<script src="{{ asset('js/home.js') }}"></script>

</html>
