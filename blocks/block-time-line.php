<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<style>
    .prueba_bloques {
        /* background-color: red; */
    }
    .line_time {
        display: flex;
        flex-direction: row;
    }

    .year_division {
        display: flex;
        flex-direction: column; /* Cambiado a columna */
        /* margin-left: 1px; */
        width: 100%; 
        height: 100px; /* Modificado para que la altura sea suficiente */
        /* border-radius: 30%; */
        justify-content: center; 
        align-items: center; /* Cambiado a align-items para centrar verticalmente */
        position: relative;
        
    }

    .year_experience {
        width: 100%; 
        height: 60%; 
        position: absolute; 
        top: 0;
        border-radius: 7px;
    }


    .year_study{
        width: 100%; 
        height: 60%; 
        position: absolute; 
        bottom: 0;
        border-radius: 7px;

    }

    .decade{
        position: absolute; 
        background-color: aquamarine; 
        border-radius: 100%; 
        width: 50px; height: 50px; 
        display: flex; 
        justify-content: center; 
        align-items: center; 
        z-index: 40;
    }

    .dotted{
        position: absolute; 
        background-color: black; 
        border-radius: 40%; 
        width: 10px; height: 5px; 
        display: flex; 
        justify-content: center; 
        align-items: center; 
        z-index: 30;
    }

    
    .experience, .study{
        /* background-color: gray; */
        height: 200px; 
        min-width: 40px; 
        display: flex;
        flex-direction: row;
    }

    .year_experience_division, .year_study_division{
        /* background-color: lime; */
        display: flex;
        flex-direction: column; /* Cambiado a columna */
        /* margin-left: 1px; */
        /* height: 100px; Eliminado */
        /* border-radius: 30%; */
        align-items: center; /* Cambiado a align-items para centrar verticalmente */
        position: relative; 
        width: 100%;
    }


    [class*="logo_experience"], [class*="logo_study"] {
    border-radius: 100%; 
    width: 60px; 
    height: 60px; 
    display: flex; 
    justify-content: center; 
    align-items: center; 
    overflow: hidden;
    z-index: 30;
    position: absolute;
    }

    [class*="logo_experience"] {
        top: 0;
        transition: transform 0.1s ease-in-out;
    }

    [class*="logo_study"] {
        bottom: 0;
        transition: transform 0.1s ease-in-out;
    }

    [class*="logo_experience"]:hover, [class*="logo_study"]:hover {
        transform: scale(1.05);
    }

    [class*="logo_experience"] img, [class*="logo_study"] img  {
        max-width: 100%;
        height: auto;
    }

    .connector_experience, .connector_study{
        width: 90%; 
        height: 65%; 
        position: absolute; 
        overflow: hidden;
        display: flex; 
        justify-content: center; 
        align-items: center; 
    }

    .connector_experience {
        bottom: 0;

    }

    .connector_study{
        top: 0;

    }
    .connector_experience img, .connector_study img  {
        max-height: 100%;
        width: auto;
        object-fit: contain;
        z-index: 40;
    }

    .dotted {
        transition: transform 0.2s ease-in-out;
    }

    .dotted:hover {
        transform: scale(2.5);
        cursor: none;
    }

    .dotted p {
        display: none;
        transition: display 0.2s ease-in-out;
        color: white; 
        font-size: 0.2rem;
    }

    .dotted:hover p {
        display: block;
    }

    .dotted:hover .popup {
        display: block;
    }
    .div_line_time {
        /* background-color: red; */
        display: flex;
        flex-direction: row;
    }

    .swiper-slide {
        /* overflow: hidden;  OCULTA LOGOS*/

    }
    .swiper-wrapper {
        /* overflow: hidden; OCULTA años que no caben en pantalla*/

    }
    .swiper-container {
        overflow: hidden;
    }

    section {
        padding-right: 5vw;
        padding-left: 5vw;
    }
</style>

<?php 

$connector_experience = 'https://realeselvis.files.wordpress.com/2024/01/flecha-arriba.webp';
$connector_study = 'https://realeselvis.files.wordpress.com/2024/01/flecha-abajo.webp';

$multimedias = array(
    'year_1990' => array(
        'year' => 1990,
        'type_div_central' => 'decade',

    ),
    'year_1991' => array(
        'logo_experience' => '',
        'year' => 1991,
        'type_div_central' => 'dotted',
        'logo_study' => '',
        'bg_year_experience' => '',
        'bg_year_study' => '',
    ),
    'year_1992' => array(
        'logo_experience' => '',
        'year' => 1992,
        'type_div_central' => 'dotted',
        'logo_study' => '',
        'bg_year_experience' => '',
        'bg_year_study' => '',
    ),
    'year_1993' => array(
        'logo_experience' => '',
        'year' => 1993,
        'type_div_central' => 'dotted',
        'logo_study' => '',
        'bg_year_experience' => '',
        'bg_year_study' => '',
    ),
    'year_1994' => array(
        'logo_experience' => '',
        'year' => 1994,
        'type_div_central' => 'dotted',
        'logo_study' => '',
        'bg_year_experience' => '',
        'bg_year_study' => '',
    ),
    'year_1995' => array(
        'logo_experience' => '',
        'year' => 1995,
        'type_div_central' => 'dotted',
        'logo_study' => '',
        'bg_year_experience' => '',
        'bg_year_study' => '',
    ),
    'year_1996' => array(
        'logo_experience' => '',
        'year' => 1996,
        'type_div_central' => 'dotted',
        'logo_study' => '',
        'bg_year_experience' => '',
        'bg_year_study' => '',
    ),
    'year_1997' => array(
        'logo_experience' => '',
        'year' => 1997,
        'type_div_central' => 'dotted',
        'logo_study' => '',
        'bg_year_experience' => '',
        'bg_year_study' => '',
    ),
    'year_1998' => array(
        'logo_experience' => '',
        'year' => 1998,
        'type_div_central' => 'dotted',
        'logo_study' => '',
        'bg_year_experience' => '',
        'bg_year_study' => '',
    ),
    'year_1999' => array(
        'logo_experience' => '',
        'year' => 1999,
        'type_div_central' => 'dotted',
        'logo_study' => '',
        'bg_year_experience' => '',
        'bg_year_study' => '',
    ),
    'year_2000' => array(
        'logo_experience' => '',
        'year' => 2000,
        'type_div_central' => 'decade',
        'logo_study' => '',
        'bg_year_experience' => '',
        'bg_year_study' => '',
    ),
    'year_2001' => array(
        'logo_experience' => '',
        'year' => 2001,
        'type_div_central' => 'dotted',
        'logo_study' => '',
        'bg_year_experience' => '',
        'bg_year_study' => '',
    ),
    'year_2002' => array(
        'logo_experience' => '',
        'year' => 2002,
        'type_div_central' => 'dotted',
        'logo_study' => '',
        'bg_year_experience' => '',
        'bg_year_study' => '',
    ),
    'year_2003' => array(
        'logo_experience' => '',
        'year' => 2003,
        'type_div_central' => 'dotted',
        'logo_study' => '',
        'bg_year_experience' => '',
        'bg_year_study' => '',
    ),
    'year_2004' => array(
        'logo_experience' => '',
        'year' => 2004,
        'type_div_central' => 'dotted',
        'logo_study' => '',
        'bg_year_experience' => '',
        'bg_year_study' => 'rgba(44, 121, 151, 0.75)',
    ),
    'year_2005' => array(
        'logo_experience' => '',
        'year' => 2005,
        'type_div_central' => 'dotted',
        'logo_study' => 'https://realeselvis.online/wp-content/uploads/2024/02/nunez_ponte.webp',
        'bg_year_experience' => '',
        'bg_year_study' => 'rgba(44, 121, 151, 0.75)',
    ),
    'year_2006' => array(
        'logo_experience' => '',
        'year' => 2006,
        'type_div_central' => 'dotted',
        'logo_study' => '',
        'bg_year_experience' => '',
        'bg_year_study' => 'rgba(44, 121, 151, 0.75)',
    ),
    'year_2007' => array(
        'logo_experience' => '',
        'year' => 2007,
        'type_div_central' => 'dotted',
        'logo_study' => '',
        'bg_year_experience' => '',
        'bg_year_study' => 'rgba(134, 10, 24, 0.75)',
    ),
    'year_2008' => array(
        'logo_experience' => '',
        'year' => 2008,
        'type_div_central' => 'dotted',
        'logo_study' => 'https://realeselvis.online/wp-content/uploads/2024/02/images.webp',
        'bg_year_experience' => '',
        'bg_year_study' => 'rgba(134, 10, 24, 0.75)',
    ),
    'year_2009' => array(
        'logo_experience' => 'https://realeselvis.online/wp-content/uploads/2024/02/Diseno-sin-titulo-3.png',
        'year' => 2009,
        'type_div_central' => 'dotted',
        'logo_study' => '',
        'bg_year_experience' => 'rgba(238, 29, 35, 0.75)',
        'bg_year_study' => 'rgba(134, 10, 24, 0.75)',
    ),
    'year_2010' => array(
        'logo_experience' => '',
        'year' => 2010,
        'type_div_central' => 'decade',
        'logo_study' => '',
        'bg_year_experience' => 'rgba(162, 168, 161, 0.75)',
        'bg_year_study' => 'rgba(0, 0, 102, 0.75)',
    ),
    'year_2011' => array(
        'logo_experience' => 'https://realeselvis.online/wp-content/uploads/2024/02/trabajo_informal.png',
        'year' => 2011,
        'type_div_central' => 'dotted',
        'logo_study' => 'https://realeselvis.online/wp-content/uploads/2024/02/uneser.webp',
        'bg_year_experience' => 'rgba(162, 168, 161, 0.75)',
        'bg_year_study' => 'rgba(0, 0, 102, 0.75)',
    ),
    'year_2012' => array(
        'logo_experience' => '',
        'year' => 2012,
        'type_div_central' => 'dotted',
        'logo_study' => '',
        'bg_year_experience' => 'rgba(162, 168, 161, 0.75)',
        'bg_year_study' => 'rgba(0, 0, 102, 0.75)',
    ),
    'year_2013' => array(
        'logo_experience' => 'https://realeselvis.online/wp-content/uploads/2024/02/Diseno-sin-titulo-4.png',
        'year' => 2013,
        'type_div_central' => 'dotted',
        'logo_study' => '',
        'bg_year_experience' => 'rgba(206, 126, 68, 0.75)',
        'bg_year_study' => 'rgba(142, 80, 52, 0.75)',
    ),
    'year_2014' => array(
        'logo_experience' => '',
        'year' => 2014,
        'type_div_central' => 'dotted',
        'logo_study' => '',
        'bg_year_experience' => 'rgba(253, 220, 1, 0.75)',
        'bg_year_study' => 'rgba(142, 80, 52, 0.75)',
    ),
    'year_2015' => array(
        'logo_experience' => 'https://realeselvis.online/wp-content/uploads/2024/02/epa-def.webp',
        'year' => 2015,
        'type_div_central' => 'dotted',
        'logo_study' => 'https://realeselvis.online/wp-content/uploads/2024/02/ucv.webp',
        'bg_year_experience' => 'rgba(253, 220, 1, 0.75)',
        'bg_year_study' => 'rgba(142, 80, 52, 0.75)',
    ),
    'year_2016' => array(
        'logo_experience' => '',
        'year' => 2016,
        'type_div_central' => 'dotted',
        'logo_study' => '',
        'bg_year_experience' => 'rgba(253, 220, 1, 0.75)',
        'bg_year_study' => 'rgba(142, 80, 52, 0.75)',
    ),
    'year_2017' => array(
        'logo_experience' => 'https://realeselvis.online/wp-content/uploads/2024/02/farmatodo-logo.webp',
        'year' => 2017,
        'type_div_central' => 'dotted',
        'logo_study' => '',
        'bg_year_experience' => 'rgba(25, 30, 99, 0.75)',
        'bg_year_study' => 'rgba(142, 80, 52, 0.75)',
    ),
    'year_2018' => array(
        'logo_experience' => '',
        'year' => 2018,
        'type_div_central' => 'dotted',
        'logo_study' => '',
        'bg_year_experience' => '',
        'bg_year_study' => '',
    ),
    'year_2019' => array(
        'logo_experience' => '',
        'year' => 2019,
        'type_div_central' => 'dotted',
        'logo_study' => '',
        'bg_year_experience' => 'rgba(255, 0, 131, 0.75)',
        'bg_year_study' => 'rgba(161, 207, 107, 0.75)',
    ),
    'year_2020' => array(
        'logo_experience' => 'https://realeselvis.online/wp-content/uploads/2024/02/1674490415487.webp',
        'year' => 2020,
        'type_div_central' => 'decade',
        'logo_study' => 'https://realeselvis.online/wp-content/uploads/2024/02/icfes.png',
        'bg_year_experience' => 'rgba(255, 0, 131, 0.75)',
        'bg_year_study' => 'rgba(161, 207, 107, 0.75)',
    ),
    'year_2021' => array(
        'logo_experience' => '',
        'year' => 2021,
        'type_div_central' => 'dotted',
        'logo_study' => '',
        'bg_year_experience' => 'rgba(255, 0, 131, 0.75)',
        'bg_year_study' => 'rgba(161, 207, 107, 0.75)',
    ),
    'year_2022' => array(
        'logo_experience' => 'https://realeselvis.online/wp-content/uploads/2024/02/konecta-logo.webp',
        'bg_image_experience' => 'https://realeselvis.online/wp-content/uploads/2024/02/Farmatodo.png',
        'title_experience' => 'Sentire Taller SAS',
        'date_experience' => 'Practicante de programación - Sep 2023 / Actualidad',
        'text_experience' => 'Usamos plugins como ACF, Learndash, Woocommerce, entre otros. Administramos las bases de datos en MySQL a través de PhpMyAdmin (C-panel). Desarrollo y despliegue de app’s (sin código) para IOS y Android con Ádalo y AppMySite (se integra a Wordpress a través de su  plugin). En las plataformas: futurosresidentes.com y sculapp.com',

        'year' => 2022,
        'type_div_central' => 'dotted',
        'logo_study' => '',
        'bg_year_experience' => 'rgba(28, 45, 81, 0.75)',
        'bg_year_study' => 'rgba(254, 89, 1, 0.75)',
    ),
    'year_2023' => array(
        'logo_experience' => 'https://realeselvis.online/wp-content/uploads/2024/02/Diseno-sin-titulo-1-4.png',
        'bg_image_experience' => 'https://realeselvis.online/wp-content/uploads/2024/02/Diseno-sin-titulo-1.png',
        'title_experience' => 'Sentire Taller SAS',
        'date_experience' => 'Practicante de programación - Sep 2023 / Actualidad',
        'text_experience' => 'Experiencia en desarrollo web, y soluciones para usuarios de plataformas centradas en la educación en línea, a través de la metodología SCRUM (Trello) y control versiones con Git. Usando tecnologías como PHP, JavaScript, HTML, Tailwind y React entre otras, para integrar diseños de Figma en páginas desarrolladas en WordPress. Usamos plugins como ACF, Learndash, Woocommerce, entre otros. Administramos las bases de datos en MySQL a través de PhpMyAdmin (C-panel). Desarrollo y despliegue de app’s (sin código) para IOS y Android con Ádalo y AppMySite (se integra a Wordpress a través de su  plugin). En las plataformas: futurosresidentes.com y sculapp.com',
        'year' => 2023,
        'type_div_central' => 'dotted',
        'logo_study' => 'https://realeselvis.online/wp-content/uploads/2024/02/logo-sena.webp',
        'bg_image_study' => 'https://realeselvis.online/wp-content/uploads/2024/02/Diseno-sin-titulo-1-1.png',
        'title_study' => 'Software - Sentire Taller SAS (Almus)',
        'date_study' => 'Septiembre 2023 - Actualidad',
        'text_study' => 'Este es el texto de descriptivo de la experiencia estudiantil',
        'bg_year_experience' => 'rgba(15, 191, 128, 0.75)',
        'bg_year_study' => 'rgba(254, 89, 1, 0.75)',
    ),
    'year_2024' => array(
        'logo_experience' => '',
        'year' => 2024,
        'type_div_central' => 'dotted',
        'logo_study' => '',
        'bg_year_experience' => '',
        'bg_year_study' => 'rgba(254, 89, 1, 0.75)',
    ),



);

?>
<!--Prueba -->
<section class="">
    <div class="swiper-container">
        <div class="swiper-wrapper div_line_time">
            <?php foreach ($multimedias as $multimedia): ?>
                <!--Contenedor slider <?php echo $multimedia['year']?> -->
                <div class="swiper-slide" style="display: flex; justify-content: center; align-items: center;">
                    <div style = "width: 100%;">                
                        <!--Contenedor superior -->
                        <div class="experience">
                            <!--Contenedor conector y logo -->
                            <div class="year_experience_division">
                                <div class="logo_experience_<?php echo $multimedia['year']?>"> 
                                    <?php if (!empty($multimedia['logo_experience'])) { ?>
                                        <img src="<?php echo $multimedia['logo_experience']?>" alt="">    
                                    <?php } ?>
                                </div>
                                <div class="connector_experience">
                                    <?php if (!empty($multimedia['logo_experience']) && !empty($connector_experience)) {?>
                                        <img src="<?php echo $connector_experience?>" alt="">        
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                        <!--Línea central -->
                        <div class="line_time">
                            <!--1990 -->
                            <div class="year_division" >
                                <div class="year_experience" id="exp<?php echo $multimedia['year']?>" <?php echo !empty($multimedia['bg_year_experience']) ? 'style="background-color: ' . $multimedia['bg_year_experience'] . '"' : '' ?>>
                                    <p></p>
                                </div>
                                <div class="<?php echo $multimedia['type_div_central']?>"> 
                                    <p ><?php echo $multimedia['year']?></p>  
                                </div>
                                <div class="year_study" id="stu<?php echo $multimedia['year']?>" <?php echo !empty($multimedia['bg_year_study']) ? 'style="background-color: ' . $multimedia['bg_year_study'] . '"' : '' ?>>
                                    <p></p>
                                </div>
                            </div>    
                        </div>
                        <!--Contenedor inferior -->
                        <div class="study" >
                            <!--1990 -->
                            <div class="year_study_division" >
                                <div class="connector_study" >
                                    <?php if (!empty($multimedia['logo_study']) && !empty($connector_study)) {?>
                                        <img src="<?php echo $connector_study?>" alt="">        
                                    <?php } ?>
                                </div>
                                <div class="logo_study_<?php echo $multimedia['year']?>"  > 
                                    <?php if (!empty($multimedia['logo_study'])) { ?>
                                        <img src="<?php echo $multimedia['logo_study']?>" alt="">    
                                    <?php }?>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>+
        </div>

        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>

    <!-- Popup para mostrar info experience -->
    <?php foreach ($multimedias as $multimedia): ?>
        <?php if (isset($multimedia['logo_experience']) && !empty($multimedia['logo_experience']) && isset($multimedia['bg_image_experience']) && !empty($multimedia['bg_image_experience'])) : ?>
            <div data_experience_popup_<?php echo $multimedia['year'] ?> class="div_container">
                <div class="div_context">
                    <img src="<?php echo $multimedia['bg_image_experience'] ?>" alt="">
                    <div class="button_container">
                        <?php if (isset($multimedia['title_experience'])) : ?>
                            <h3 style="color: white; margin-top: 0px; margin-bottom: 10px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);">
                                <?php echo $multimedia['title_experience']; ?>
                            </h3> 
                        <?php endif; ?>                        
                        <?php if (isset($multimedia['date_experience'])) : ?>
                            <h5 style="color: white; margin-top: 0px; margin-bottom: 10px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);">
                                <?php echo $multimedia['date_experience']; ?>
                            </h5> 
                        <?php endif; ?>
                        <?php if (isset($multimedia['text_experience'])) : ?>
                            <p style="color: white; font-weight: 300; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);"><?php echo $multimedia['text_experience'] ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>




    <!-- Popup para mostrar info study -->
    <?php foreach ($multimedias as $multimedia): ?>
        <?php if (isset($multimedia['logo_study']) && !empty($multimedia['logo_study']) && isset($multimedia['bg_image_study']) && !empty($multimedia['bg_image_study'])) : ?>
            <div data_study_popup_<?php echo $multimedia['year'] ?> class="div_container">
                <div class="div_context">
                    <img src="<?php echo $multimedia['bg_image_study'] ?>" alt="">
                    <div class="button_container">
                        <?php if (isset($multimedia['title_study'])) : ?>
                            <h3 style="color: white; margin-top: 0px; margin-bottom: 10px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);">
                                <?php echo $multimedia['title_study']; ?>
                            </h3> 
                        <?php endif; ?>                        
                        <?php if (isset($multimedia['date_study'])) : ?>
                            <h5 style="color: white; margin-top: 0px; margin-bottom: 10px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);">
                                <?php echo $multimedia['date_study']; ?>
                            </h5> 
                        <?php endif; ?>
                        <?php if (isset($multimedia['text_study'])) : ?>
                            <p style="color: white; font-weight: 300; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);"><?php echo $multimedia['text_study'] ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</section>


<style>
/* Ajustes para el div de video popup */
.div_container {
    visibility: hidden; /* Inicialmente oculto pero permitiendo interacción */
    opacity: 0; /* Asegurando que esté invisible */
    position: fixed;
    top: 50%;
    left: 50%;
    border-radius: 20px;
    transform: translate(-50%, -50%);
    overflow: hidden;
    z-index: 50;
    background-color: #131313;
    min-width: 45vw;
    min-height: 45vh;
    transition: opacity 0.3s ease; /* Transición suave de opacidad */
}

.div_container.show {
    visibility: visible; /* Mostrar cuando tiene la clase show */
    opacity: 1; /* Hacer visible */
}

.div_context {
    position: relative;
}

.div_context img {
    width: 100%;
    height: 100%;
    display: block;
}

.button_container {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    width: 40vw;
    height: 40vh;
}

.button_container button {
    display: block;
    margin: 0 auto; /* Esto centrará el botón horizontalmente */
}

</style>



<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const swiper = new Swiper('.swiper-container', {
            // Optional parameters
            direction: 'horizontal',
            loop: false,
            slidesPerView: 18,
            spaceBetween: 2,
            initialSlide: 30, // Este sería el índice del último slide


            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            // scrollbar: {
            //     el: '.swiper-scrollbar',
            // },
        });
    });
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        <?php foreach ($multimedias as $multimedia): ?>
            // Agregar clase show a div info experience
            $('.logo_experience_<?php echo $multimedia['year']; ?>').hover(function() {
                $('[data_experience_popup_<?php echo $multimedia['year']; ?>]').addClass('show');
            }, function() {
                $('[data_experience_popup_<?php echo $multimedia['year']; ?>]').removeClass('show');
            });

            $('.logo_experience_<?php echo $multimedia['year']; ?>').click(function() {
                $('[data_experience_popup_<?php echo $multimedia['year']; ?>]').toggleClass('show');
            });

            // Agregar clase show a div info study
            $('.logo_study_<?php echo $multimedia['year']; ?>').hover(function() {
                $('[data_study_popup_<?php echo $multimedia['year']; ?>]').addClass('show');
            }, function() {
                $('[data_study_popup_<?php echo $multimedia['year']; ?>]').removeClass('show');
            });

            $('.logo_study_<?php echo $multimedia['year']; ?>').click(function() {
                $('[data_study_popup_<?php echo $multimedia['year']; ?>]').toggleClass('show');
            });
        <?php endforeach; ?>
    });
</script>
