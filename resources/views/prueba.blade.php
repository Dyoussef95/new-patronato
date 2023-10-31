<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>

    </title>
    <link rel="stylesheet" href="../../thirdparty/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../fontawesome/css/all.css">
    <link href="/../../select2/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        #contenedorrr {
    margin: 4px auto;
    width: 100%;  /* Ancho del contenedor */
box-sizing: border-box;
-moz-box-sizing: border-box;
}

#contenedorrr input {
height: 32px;
visibility: hidden;
}

#contenedorrr label {
float: left;
cursor: pointer;
font-size: 15px;  /* Tamaño del texto de las pestañas */
line-height: 40px;
height: 40px;
padding: 0 5px;
display: block;
color: #000;  /* Color del texto de las pestañas */
text-align: center;
border-radius: 0px 0px 0 0;
background: #DF013A;  /* Fondo de las pestañas */
margin-right: 1px;
}

#contenedorrr input:hover + label {
background: #ddd;  /* Fondo de las pestañas al pasar el cursor por encima */
color: #666;  /* Color del texto de las pestañas al pasar el cursor por encima */
}

#contenedorrr input:checked + label {
background: #2E64FE;  /* Fondo de las pestañas al presionar */
color: #000; /* Color de las pestañas al presionar */
z-index: 6;
line-height: 45px;
height: 45px;
position: relative;
top: -5px;
-webkit-transition: .1s;
-moz-transition: .1s;
-o-transition: .1s;
-ms-transition: .1s;
}

.contenttt {
background: #000;  /* Fondo del contenido */
position: relative;
width: 100%;
height:100%;  /* Alto del contenido */
padding: 5px;
z-index: 5;
border-radius: 0 5px 5px 5px;
opacity: 0.8;
}

.contenttt div {
position: absolute;
z-index: -100;
opacity: 0;
transition: all linear 0.1s;
}

#contenedorrr input.tabb-selector-1:checked ~ .contenttt .contenttt-1,
#contenedorrr input.tabb-selector-2:checked ~ .contenttt .contenttt-2,
#contenedorrr input.tabb-selector-3:checked ~ .contenttt .contenttt-3,
#contenedorrr input.tabb-selector-4:checked ~ .contenttt .contenttt-4
#contenedorrr input.tabb-selector-4:checked ~ .contenttt .contenttt-5{
    z-index: 100;
    opacity: 1;
    -webkit-transition: all ease-out 0.2s 0.1s;
-moz-transition: all ease-out 0.2s 0.1s;
-o-transition: all ease-out 0.2s 0.1s;
-ms-transition: all ease-out 0.2s 0.1s;
}

    </style>

</head>
<body>
        <div class="container-fluid">
                
                 
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Nacionales</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Destacados</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Techno</a>
                            </li>
                          </ul>
                          <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                   <a title="Los Tejos" href="http://www.lostejos.com"><img class="img-fluid" src="https://i.ibb.co/Q82YH46/mariano-santos-original.png"  alt="Los Tejos" /></a>
                                                </div>
                                                <div class="col">
                                                   <a title="Los Tejos" href="http://www.lostejos.com"><img class="img-fluid" src="https://i.ibb.co/Q82YH46/mariano-santos-original.png" alt="Los Tejos" /></a>
                                                </div>
                                                <div class="col">
                                                  <a title="Los Tejos" href="http://www.lostejos.com"><img class="img-fluid" src="https://i.ibb.co/Q82YH46/mariano-santos-original.png" alt="Los Tejos" /></a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col">
                                                       <a title="Los Tejos" href="http://www.lostejos.com"><img class="img-fluid" src="https://i.ibb.co/Q82YH46/mariano-santos-original.png"  alt="Los Tejos" /></a>
                                                    </div>
                                                    <div class="col">
                                                       <a title="Los Tejos" href="http://www.lostejos.com"><img class="img-fluid" src="https://i.ibb.co/Q82YH46/mariano-santos-original.png" alt="Los Tejos" /></a>
                                                    </div>
                                                    <div class="col">
                                                      <a title="Los Tejos" href="http://www.lostejos.com"><img class="img-fluid" src="https://i.ibb.co/Q82YH46/mariano-santos-original.png" alt="Los Tejos" /></a>
                                                    </div>
                                            </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="container-fluid">
                            
                
                                            <div class="row"> 
                                                <div class="col"> 
                                                    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/mrkAU2Qib_k?list=PLDKkQBH8I6JBN1ltVljlj8aAA47-D6D92" frameborder="0" allowfullscreen></iframe> 
                                                </div> 
                                                <div class="col">
                                                    <iframe class="embed-responsive-item"  src="//www.youtube.com/embed/ahzc-xAvIkk" frameborder="0" allowfullscreen></iframe>
                                                </div> 
                                                <div class="col"> 
                                                    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/g5z2HNXAtRo" frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                            <div class="row"> 
                                                <div class="col"> 
                                                    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/H2fkge3qrmY?list=PL0cWlOyqP6_M_gH-VeXsvCxL01Qs85Blv" frameborder="0" allowfullscreen></iframe>
                                                </div> 
                                                <div class="col"> 
                                                    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/wJHtaTFb1WE?list=PL71067954340BBA04" frameborder="0" allowfullscreen></iframe> 
                                                </div> 
                                                <div class="col"> 
                                                    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/m94tfO0HcGM?list=PL6RLee9oArCDytHLSIuYpy_iCWgh0hcux" frameborder="0" allowfullscreen></iframe> 
                                                </div>
                                            </div>
                                    </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                          </div>
                
                
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            </body>
</html>