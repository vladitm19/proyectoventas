<?php include_once 'includes/templates/header.php'; ?>
<section class="seccion contenedor">
    <h2>La mejor conferecia de diseño web en español</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, recusandae voluptate. Laboriosam necessitatibus odio adipisci quos accusamus illo quod tempora repudiandae incidunt exercitationem maiores nostrum odit velit facere, recusandae aspernatur!</p>
</section>
<section class="programa">
    <div class="contenedor-video">
        <video autoplay loop poster="img/bg-talleres.jpg">
            <source src="video/video.mp4" type="video/mp4">
            <source src="video/video.webm" type="video/webm">
            <source src="video/video.ogv" type="video/ogv">
        </video>
    </div>
    <div class="contenido-programa">
        <div class="contenedor">
            <div class="programa-evento">
                <h2>Programa del evento</h2>
                <?php
                try {
                    require_once('includes/funciones/bd_conexion.php');
                    $sql = " SELECT * FROM `categoria_evento` ";
                    $resultado = $conn->query($sql);
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
                ?>



                <nav class="menu-programa">
                    <?php while ($cat = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                        <?php $categoria = $cat['cat_evento'] ?>
                        <a href="#<?php echo strtolower($categoria) ?>">
                            <i class="fa <?php echo $cat['icono'] ?>" aria-hidden="true"></i> <?php echo $categoria ?>
                        </a>
                    <?php } ?>
                </nav>
                <div id="talleres" class="infor-curso ocultar clearfix">
                    <div class="detalle-evento">
                        <h3>HTML5, CSS3 y JavaScript</h3>
                        <p><i class="fa fa-clock"></i> 16:00 hrs</p>
                        <p><i class="fa fa-calendar"></i> 19 de mayo</p>
                        <p><i class="fa fa-user"></i> Elmer Vladimir Torrez Macias</p>
                    </div>
                    <div class="detalle-evento">
                        <h3>Resposive Web Design</h3>
                        <p><i class="fa fa-clock"></i> 16:00 hrs</p>
                        <p><i class="fa fa-calendar"></i> 19 de mayo</p>
                        <p><i class="fa fa-user"></i> Elmer Vladimir Torrez Macias</p>
                    </div>
                    <a href="#" class="boton float-right">Ver Todos</a>
                </div>
                <div id="conferencias" class="infor-curso ocultar clearfix">
                    <div class="detalle-evento">
                        <h3>Como ser freelancer</h3>
                        <p><i class="fa fa-clock"></i> 10:00 hrs</p>
                        <p><i class="fa fa-calendar"></i> 20 de mayo</p>
                        <p><i class="fa fa-user"></i> Fernando Cornejo</p>
                    </div>
                    <div class="detalle-evento">
                        <h3>Tecnologias del futuro</h3>
                        <p><i class="fa fa-clock"></i> 11:00 hrs</p>
                        <p><i class="fa fa-calendar"></i> 20 de mayo</p>
                        <p><i class="fa fa-user"></i> Fernando Cornejo</p>
                    </div>
                    <a href="#" class="boton float-right">Ver Todos</a>
                </div>
                <div id="seminarios" class="infor-curso ocultar clearfix">
                    <div class="detalle-evento">
                        <h3>Diseño UI/UX para móviles</h3>
                        <p><i class="fa fa-clock"></i> 12:00 hrs</p>
                        <p><i class="fa fa-calendar"></i> 21 de mayo</p>
                        <p><i class="fa fa-user"></i> Ivan Galarza</p>
                    </div>
                    <div class="detalle-evento">
                        <h3>Aprender a programar en una mañana</h3>
                        <p><i class="fa fa-clock"></i> 12:00 hrs</p>
                        <p><i class="fa fa-calendar"></i> 21 de mayo</p>
                        <p><i class="fa fa-user"></i> Ivan Galarza</p>
                    </div>
                    <a href="#" class="boton float-right">Ver Todos</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include_once 'includes/templates/invitados.php'; ?>
<div class="contador parallax">
    <div class="contenedor">
        <ul class="resumen-evento clearfix">
            <li>
                <p class="numero">0</p> Invitados
            </li>
            <li>
                <p class="numero">0</p> Talleres
            </li>
            <li>
                <p class="numero">0</p> Días
            </li>
            <li>
                <p class="numero">0</p> Conferencias
            </li>
        </ul>
    </div>
</div>
<section class="precios seccion">
    <h2>precios</h2>
    <div class="contenedor">
        <ul class="lista-precios clearfix">
            <li>
                <div class="tabla-precio">
                    <h3>Pase por día</h3>
                    <p class="numero">$30</p>
                    <ul>
                        <li class="check"><i class="fas fa-check"></i>Bocadillos Gratis</li>
                        <li class="check"><i class="fas fa-check"></i>Todas Las Conferencias</li>
                        <li class="check"><i class="fas fa-check"></i>Todos Los Talleres</li>
                    </ul>
                    <a href="#" class="boton hollow">Comprar</a>
                </div>
            </li>
            <li>
                <div class="tabla-precio">
                    <h3>Todos los días</h3>
                    <p class="numero">$50</p>
                    <ul>
                        <li class="check"><i class="fas fa-check"></i>Bocadillos Gratis</li>
                        <li class="check"><i class="fas fa-check"></i>Todas Las Conferencias</li>
                        <li class="check"><i class="fas fa-check"></i>Todos Los Talleres</li>
                    </ul>
                    <a href="#" class="boton">Comprar</a>
                </div>
            </li>
            <li>
                <div class="tabla-precio">
                    <h3>Pase por dos días</h3>
                    <p class="numero">$45</p>
                    <ul>
                        <li class="check"><i class="fas fa-check"></i>Bocadillos Gratis</li>
                        <li class="check"><i class="fas fa-check"></i>Todas Las Conferencias</li>
                        <li class="check"><i class="fas fa-check"></i>Todos Los Talleres</li>
                    </ul>
                    <a href="#" class="boton hollow">Comprar</a>
                </div>
            </li>
        </ul>
    </div>
</section>
<div id="mapa" class="mapa"></div>
<section class="seccion">
    <h2>Testimoniales</h2>
    <div class="testimoniales contenedor clearfix">
        <div class="testimonial">
            <blockquote>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus enim, unde dignissimos autem magnam dolore illum quidem, quo animi reiciendis ullam odio rem. Nemo, rem porro sapiente architecto praesentium blanditiis</p>
                <footer class="info-testimonial clearfix">
                    <img src="img/testimonial.jpg" alt="imagen testimonial">
                    <cite>Oswaldo Aponte Escobedo <span>Direñador en @prisma</span></cite>
                </footer>
            </blockquote>
        </div>
        <div class="testimonial">
            <blockquote>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus enim, unde dignissimos autem magnam dolore illum quidem, quo animi reiciendis ullam odio rem. Nemo, rem porro sapiente architecto praesentium blanditiis</p>
                <footer class="info-testimonial clearfix">
                    <img src="img/testimonial.jpg" alt="imagen testimonial">
                    <cite>Oswaldo Aponte Escobedo <span>Direñador en @prisma</span></cite>
                </footer>
            </blockquote>
        </div>
        <div class="testimonial">
            <blockquote>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus enim, unde dignissimos autem magnam dolore illum quidem, quo animi reiciendis ullam odio rem. Nemo, rem porro sapiente architecto praesentium blanditiis</p>
                <footer class="info-testimonial clearfix">
                    <img src="img/testimonial.jpg" alt="imagen testimonial">
                    <cite>Oswaldo Aponte Escobedo <span>Direñador en @prisma</span></cite>
                </footer>
            </blockquote>
        </div>
    </div>
</section>
<div class="newsletter parallax">
    <div class="contenido contenedor">
        <p>Registrate al Newsletter:</p>
        <h3>Gdlwebcamp</h3>
        <a href="#" class="boton transparente">Registro</a>
    </div>
</div>
<section class="seccion">
    <h2>Faltan</h2>
    <div class="cuenta-regresiva contenedor">
        <ul class="clearfix">
            <li>
                <p id="dias" class="numero"></p>Días
            </li>
            <li>
                <p id="horas" class="numero"></p>Horas
            </li>
            <li>
                <p id="minutos" class="numero"></p>Minutos
            </li>
            <li>
                <p id="segundos" class="numero"></p>Segundos
            </li>
        </ul>
    </div>
</section>

<?php include_once 'includes/templates/footer.php'; ?>