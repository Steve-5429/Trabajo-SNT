<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>regiones</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;1,200;1,300;1,400&display=swap');
   
*,
*::before,
*::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    font-family: 'Poppins', sans-serif;
    font-size: 10px;
    color: rgb(8, 8, 8);
    scroll-behavior: smooth;
}

body {
    overflow-x: hidden;
    background-color: white;
}

section {
    padding: 3.9rem 0;
    overflow: hidden;
}

img {
    width: 100%;
    max-width: 100%;
}

a {
    text-decoration: none;
}

p {
    font-size: 1.6rem;
}

.container {
    width: 100%;
    max-width: 122.5rem;
    margin:  0 auto;
    padding: 0 2.4rem;
}

header {
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    background-image: linear-gradient(to bottom, rgba(0,0,0,.5), transparent);
}
.nav {
    height: 7.2rem;
    display: flex;
    align-items: center;
    justify-content: center;
}

.menu-toggle {
    color: rgb(240, 236, 236);
    font-size: 2.2rem;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: 2.5rem;
    cursor: pointer;
    z-index: 1500;
}

.fa-times {
    display: none;
}

.nav-list {
    list-style: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 80%;
    height: 100vh;
    background-color: #252525;
    padding: 4.4rem;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    z-index: 1250;
    transform: translateX(-100%);
   
}

.nav::before {
    content: '';
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background-color: rgba(0, 0, 0, .8);
    z-index: 1000;
    opacity: 0;
    transform: scale(0);
    transition: opacity .5s;

}

.open .fa-times {
    display: block;
}

.open .fa-bars {
    display: none;
}

.open .nav-list {
    transform: translateX(0);
}
.open .nav::before{
    opacity: 1;
    transform: scale(1);
}

.logo {
    color: red;
    font-size: 2rem;
    font-weight: 600;
}

.nav-item {
    border-bottom: 2px solid rgba(255, 255, 255, .3);
}

.nav-link {
    display: block;
    color: red;
    text-transform: uppercase;
    font-size: 1.6rem;
    letter-spacing: 2px;
    margin-right: -2px;
}

.nav-link:hover {
    color: #0af167;
}

.hero {
    width: 100%;
    height: 70vh;
    background: url("https://th.bing.com/th/id/R.4ee2cde7094650dffb4d49938bf75350?rik=0qzJWgmOwqdpDw&pid=ImgRaw&r=0") center no-repeat;
    background-size: cover;
    display: flex;
    align-items: center;
    text-align: center;
}

.h2-sub {
    font-size: 3rem;
    font-family: 'Poppins', sans-serif;
    color: red;
    font-weight: 600;
    line-height: 3.0;
}

.fil {
    text-transform: uppercase;
    font-size: 3rem;
}

.head {
    color: #fff;
    font-size: 3.7rem;
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
    font-weight: 900;
    letter-spacing: 3.5rem;
}

.circle {
    font-size: 1.5rem;
    color: #3bcc75;
    margin: 0 1.6rem;
}

.he-des h5 {
    color: #fff;
    font-size: 1.4rem;
    font-weight: 100;
    text-transform: uppercase;
    margin-bottom: 1.2rem;
    letter-spacing: 3px;
    margin-right: -3px;
}

.btn {
    display: inline-block;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-right: -2px;
}

.cta-btn {
    font-size: 1.1rem;
    background-color: #9147;
    padding: 1.5rem 3rem;
    color: #fff;
    border-radius: .4rem;
}
.cta-btn:hover,
.cta-btn:focus {
    color: #fff;
    background-color: #3bcc75;
}


.global {
    text-align: center;
    margin-top: 3.9rem;
}

.dis-sto .global {
    margin-top: 6.9rem;
}

.global .circle {
    color: #227;
    margin: 2.4rem 0;
}

.hea-dark {
    color: #090909;
    letter-spacing: .7rem;
    margin-right: -.7rem;
}

.global .h2-sub {
    letter-spacing: -1px;
    line-height: .42;
}

.res-info {
    text-align: center;
}

.res-des {
    margin-bottom: 3rem;
}

.res-des p {
    line-height: 1.6;
    margin-bottom: 2.4rem
}

.taste {
    background: url("https://www.diarymama.com/wp-content/uploads/2015/11/ENTRANCE.jpg") center no-repeat;
    background-size: cover;
}

.bt {
    min-height: 65vh;
    display: flex;
    align-items: center;
}

.Steve {
 
    color: #fff;
    font-size: 1.8rem;
    font-family: 'Poppins', sans-serif;
   
    font-weight: 900;
   
}
     
.image-group {
    width: 100%;
    max-width: 100%;
   
}

.disco .res-des {
    padding-top: 3rem;
    margin-bottom: 0;
}

.pb {
    background: url("https://th.bing.com/th/id/R.501c542aa4ed432a93bd022b0c135c44?rik=%2b0PjvFxNad9jeA&pid=ImgRaw&r=0") center no-repeat;
    background-size: cover;
}

.goku {
    background: url("https://i0.wp.com/perudesconocido.pe/wp-content/uploads/2019/05/Arequipa.jpg?w=525&ssl=") center no-repeat;
    background-size: cover;
}

.broly {
    background: url("https://i0.wp.com/perudesconocido.pe/wp-content/uploads/2019/05/L%C3%ADneas-de-nazca.jpg?w=554&ssl=1") center no-repeat;
    background-size: cover;
}

footer {
    padding: 6.9rem 0;
    background-color: #4157;
    color: #fff;
    text-align: center;
    position: relative;
}

.footer-content {
    overflow: hidden;
}

.footer-content h4 {
    font-size: 1.9rem;
    text-transform: uppercase;
    font-weight: 100;
    letter-spacing: 3px;
    margin-bottom: 3rem;
}

.footer-content .circle{
    margin: 2.4rem 0;
}

.footer-content-about {
    margin-bottom: 5.4rem;
}

.footer-content-about p {
    line-height: 2;
}

.social-icons {
    list-style: none;
    margin-bottom: 5.4rem;
    display: flex;
    justify-content: center;
}

.social-icons i {
    font-size: 2rem;
    color: #258;
    padding: .8rem 2rem;
    
}

.social-icons i:hover,
.social-icons i:focus {
    color: #ffc845;
}

.news-form {
    width: 100%;
    position: relative;
    display: flex;
    justify-content: center;

}

.news-input {
    width: 100%;
    max-width: 25rem;
    padding: 1rem;
    border-radius: .4rem;
}
.news-btn {
    background: while;
    border: none;
    color: #252525;
    cursor: pointer;
    font-size: 1.6rem;
    padding: 1px .6rem;
    position: absolute;
    top: 30%;
    margin-left: 20.5rem;
}

@media screen and (min-width: 900px) {

    section {
        padding: 7.9rem;
    }

    .menu-toggle {
        display: none;
    }

    .nav {
        justify-content: space-between;
    }

    .nav-list {
        position: initial;
        width: initial;
        height: initial;
        background-color: transparent;
        padding: 0;
        justify-content: initial;
        flex-direction: row;
        transform: initial;
        transition: initial;
    }

    .nav-item {
        margin: 0 2.4rem;
    }

    .nav-item:last-child {
        margin-right: 0;
    }

    .nav-link {
        font-size: 1.3rem;
    }

    .active {
        position: relative;
    }
    .active::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 2px;
        background-color: red;
        left: 0;
        bottom: -3px;
    }

    .h2-sub {
        font-size: 3rem;
    }

    .fil {
        font-size: 3rem;
    }
    .head {
        font-size: 4.7rem;
        letter-spacing: .8rem;
    }

    .res-info {
        display: flex;
        align-items: center;
    }

    .res-info > div {
        flex: 1;
    }

    .pad-rig {
        padding-right: 7rem;
    }

    .footer-content {
        max-width: 77.5rem;
        margin: auto;
    }

    .footer-content-about {
        max-width: 51.3rem;
        margin:  0 auto 5.4rem;
    }

    .footer-div{
        display: flex;
        justify-content: space-between;
    }

    .social-media,
    .news-form {
        width: 100%;
        max-width: 27.3rem;
        margin: 0 1rem;
    }

   .news-btn {
       margin-left: 7.5rem;
   }
    
}

</style>

<body>
    <header>
        <div class="container">
            <nav class="nav">
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </div>
                <a href="#" class="logo"></a>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Inicio</a>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">Tienda</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">Contacto</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero" id="hero">
        <div class="container">
            <h2 class="h2-sub">
                <span class="fil">B</span>ienvenidos
            </h2>
            <h1 class="head">Lugares Turisticos del perú</h1>
            <div class="he-des">
                <h5>No te quedes sin conocer</h5>
                <a href="#" class="btn cta-btn">Conozcamos </a>
            </div>
        </div>
    </section>

    <section class="dis-sto">
        <div class="container">
            <div class="res-info">
                <div>
                    <img src=https://th.bing.com/th/id/R.e1a1c03ef9432cdde1d7adf6887af367?rik=5QUpJ2t11YHJyQ&pid=ImgRaw&r=0" alt="">
                </div>
            
                <div class="res-des pad-rig">
                    <div class="global">
                        <h2 class="h2-sub">
                            <span class="fil">C</span>onoce
                        </h2>
                        <h1 class="head hea-dark">Laguna de Los Milagros</h1>
                        <div class="circle">
                            <i class="fas fa-circle"></i>
                        </div>
                    </div>
                    <p> 
                    Ubicada en una meseta con un área aproximada de una hectárea y media, 
                     su profundidad es relativa varia de 2 a 8 metros, tiene como principal 
                     afluente las aguas de dos pequeñas quebradas, el cual alberga una variedad de 
                     peces y aves; tanto en el centro y a orillas de la laguna existen chozas y lugares
                      de descanso donde el visitante puede degustar de los platos típicos y bebidas exóticas
                       del lugar, también se pueden realizar diversas actividades tales como 
                       caminata hacia el mirador del cerro Belen, paseos en bote y pedalones, 
                       cosecha del huairuro, observación de flora, ya que a unos cien metros de la
                        laguna se encuentra el árbol de la Lupuna con una antigüedad aproximada de 300 años 
                    de raíces y cortezas anchas con una altitud aprox. De 60 metros.
                    </p>
                    <a href="#" class="btn cta-btn">Nosotros</a>
                </div>

            </div>
        </div>
    </section>

    <section class="taste bt">
        <div class="container">
            <div class="global">
                <h2 class="h2-sub">
                    <span class="fil">C</span>onoce
                </h2>
                <h1 class="head hea-dark">Cueva de Las Pavas</h1>
                <div class="circle">
                    <i class="fas fa-circle"></i>
                </div>
                <div>
                    <h1 class="STeve">En esta cueva de las Pavas, se tiene una hermosa vista de la Diosa de las Aguas, 
                        pues esta vista tiene una leyenda que guarda un misterioso secreto, aquellas parejas de enamorados o 
                        esposos que buscan fortalecer su felicidad, tienen que recurrir en una noche de luna llena a bañarse 
                        y brindar junto a la Diosa de las Aguas para purificar sus cuerpos y asi lograr la felicidad que anhelan.</h1>
                </div>
                
              
            </div>
        </div>
    </section>


    <section class="disco">
        <div class="container">
            <div class="res-info">
                <div class="res-des">
                    <div class="global">
                        <h2 class="h2-sub">
                            <span class="fil">C</span>onoce
                        </h2>
                        <h1 class="head hea-dark">Catarata Santa Carmen</h1>
                        <div class="circle">
                            <i class="fas fa-circle"></i>
                        </div>
                    </div>
                    <p>
                    Ubicada en la parte noreste del Distrito de Mariano Dámaso Beraun, a 2 km y medio de
                     la carretera central, luego de una caminata de 30 minutos por la trocha de selva se puede
                      apreciar esta maravilla natural la Catarata Santa Carmen de 18 mts de caída aproximadamente
                       formando una piscina natural de agua cristalina que invita a los visitantes a darse un baño,
                        unos 5 mts antes de llegar a la piscina existe una cascada pequeña de 3 mts también natural 
                        formada por la continuidad de la caída de la primera catarata que también tiene una piscina 
                        natural con una profundidad de 2 metros aproximadamente; rodeado de flora, como helechos,
                         musgos y plantas rastreras, piedras de variedad de tamaños existentes en la zona, se encuentra 
                         insectos propios de la zona como saltamontes, chicharras, etc, en animales menores tenemos el añuje,
                     las iguanas, entre otros, tenemos cantidad de especies de mariposas.
                    </p>
                    <a href="#" class="btn cta-btn">nosotros</a>
                </div>
                <div class="image-group pad-rig">
                    <img src="https://th.bing.com/th/id/R.c7e61dd7f232e16af37781afaf9c21e6?rik=3lxbZORPeJFbDg&pid=ImgRaw&r=0" alt="">
                </div>

            </div>
        </div>
    </section>

    
    <section class="pb bt">
        <div class="container">
            <div class="global">
                <h2 class="h2-sub">
                    <span class="fil">C</span>onoce
                </h2>
                <h1 class="head hea-dark">Machu Pichu</h1>
                <div class="circle">
                    <i class="fas fa-circle"></i>
                </div>
                <div>
                    <h1 class="Steve">Edificada aproximadamente a mediados del siglo XV en un inecesible promontorio rocoso que une las montañas Machu Picchu y Huayna Picchu en la vertiente oriental de los Andes Centrales, al sur del Perú.


                     Cuando asciendes a la ciudadela, encontrarás un apropiado local en el que funciona un hotel el Machipichu Sanctuary Lodge, al servicio de los visitantes, hotel que cuenta con todos los elementos modernos indispensables para un buen servicio.</h1>
                </div>            
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="res-info">

                <div class="image-group">
                    <img src="https://hotelesen.net/wp-content/uploads/2020/06/2.jpg" alt="">

                </div>
                <div class="res-des pad-rig">
                    <div class="global">
                        <h2 class="h2-sub">
                            <span class="fil">C</span>onoce
                        </h2>
                        <h1 class="head hea-dark">Lago Titi Caca</h1>
                        <div class="circle">
                            <i class="fas fa-circle"></i>
                        </div>
                    </div>
                    <p>
                    El Titicaca es el lago navegable más alto del mundo, ubicado en los Andes centrales, 
                    dentro de la meseta del Collao, a una altitud media 
                    de 3812 m s. n. m. entre los territorios de Bolivia y Perú.
                    </p>
                    <a href="#" class="btn cta-btn">nosotros</a>
                </div>

            </div>
        </div>
    </section>

    <section class="goku">
        <div class="container">
            <div class="global">
                <h2 class="h2-sub">
                    <span class="fil">C</span>onoce
                </h2>
                <h1 class="head hea-dark">Arequipa</h1>
                <div class="circle">
                    <i class="fas fa-circle"></i>
                </div>
                <div>
                    <h1 class="Steve">Arequipa es otro de esos Patrimonios de la Humanidad declarados por la UNESCO que no 
                        se podían dejar por fuera de esta lista de destinos turísticos tan importantes del 
                        país latinoamericano. Esta hermosísima ciudad, también conocida como la Ciudad Blanca, 
                        ha sido otro de los tantos puntos preferidos por los turistas debido a la arquitectura 
                        colonial que ha conservado a pesar del modernismo en el que ha entrado el país en los 
                        últimos años.</h1>
                </div>
              
            </div>
        </div>
    </section>

    <section class="disco">
        <div class="container">
            <div class="res-info">
                <div class="res-des">
                    <div class="global">
                        <h2 class="h2-sub">
                            <span class="fil">D</span>escubre
                        </h2>
                        <h1 class="head hea-dark">Cuzco</h1>
                        <div class="circle">
                            <i class="fas fa-circle"></i>
                        </div>
                    </div>
                    <p>
                    Si se está buscando un lugar que contenga lo más valioso del país a nivel histórico y cultural, 
                    el mejor sitio de todos es Cuzco, el cual conserva muchas de las características con
                    las que contaba
                    el país en la época del Imperio Inca en el plano arquitectónico.
                   
                    </p>
                    <a href="#" class="btn cta-btn">nosotros</a>
                </div>
                <div class="image-group pad-rig">
                    <img src="https://th.bing.com/th/id/R.34c3ef49f9251432349741ddfe814fcf?rik=epx8qV5smZNQTQ&pid=ImgRaw&r=0" alt="">
                </div>

            </div>
        </div>
    </section>

<section class="broly">
    <div class="container">
        <div class="global">
            <h2 class="h2-sub">
                <span class="fil">D</span>escubre
            </h2>
            <h1 class="head hea-dark">Líneas de nazca</h1>
            <div class="circle">
                <i class="fas fa-circle"></i>
            </div>
            <div>
                <h1 class="Steve">Patrimonio de la Humanidad por parte de la UNESCO. Una de las 
                    razones por las que ha llamado tanto la atención del turismo latino es que no
                     han podido ser precisados los nombres de sus autores ni con qué fin las hicieron.
                      Lo que sí se ha descubierto es que las líneas pueden datar desde 200 años A.C., 
                      pero aún continúan realizándose todo tipo de estudios a finde 
                    determinar el tiempo que tiene talladas con una mayor exactitud que la que ya se posee.</h1>
            </div>
          
        </div>
    </div>
</section>

<footer>
        <div class="container">
            <div class="footer-content">

                <div class="footer-content-about">
                    <h4>Nosotros</h4>
                    <div class="circle">
                        <i class="fas fa-circle"></i>
                    </div>
                    <p>Soy estudiante de senati este es mi trabajo finalizado :)
                    </p>
                </div>
                <div class="footer-div">
                    <div class="social-media">
                        <h4>encuentranos en</h4>
                        <ul class="social-icons">
                            <li>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-github"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4>Noticias</h4>
                        <form action="" class="news-form">
                            <input type="text" class="news-input"
                            placeholder="Escribe tu email"
                            >
                            <button class="news-btn" type="submit">
                                <i class="fas fa-envelope"></i>
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <script>

const selectElement = function(element) {
    return document.querySelector(element);
}


let menuToggle = selectElement('.menu-toggle');
let body = selectElement('body');

menuToggle.addEventListener('click', function(){
    body.classList.toggle('open');
})

</script>


</body>
</html>