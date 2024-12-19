<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criativo Dev</title>

    <link rel="stylesheet" href="assets/css/reset.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link rel="stylesheet" type="text/css" href="assets/css/slick.css" />

    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css" />

    <link href="assets/css/lity.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">

</head>


<body class="pagina-index">
  
<?php require_once('conteudo/topo.php')?>

    <main>

        <section class="banner">
            <div class="site wow animate__animated animate__fadeInUp">
                <div>
                    <div>
                        <h4 class="noto">Bem-vindo</h4>
                    </div>
                    <div>
                        <h3 class="roboto">Somos especialistas em:</h3>
                    </div>

                    <div>
                        <h2 class="robotoBold">Troca de Frases</h2>
                    </div>

                </div>
            </div>
        </section>

        <section class="contato">
            <div class="site wow animate__animated animate__fadeInUp">
                <div>
                    <h2 class="robotoBold wow animate__animated animate__fadeInLeft animate__delay-05s">
                        Sobre nós
                    </h2>

                    <div class="noto">

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione facere repellat inventore sit tempore vero, pariatur perspiciatis, iste mollitia voluptate numquam nesciunt quisquam nihil libero possimus doloremque distinctio eum suscipit..</p>
                    </div>
                    <input class="robotoBold" type="submit" value="Faça um orçamento">
                </div>
                <div class="formulario">
                    <form id="formContato">
                        <div>
                            <input type="text" name="nome" id="nameContato" placeholder="Nome" required>
                        </div>
                        <div>
                            <input type="tel" name="tel" id="telContato" placeholder="Telefone" required>
                        </div>
                        <div>
                            <input type="email" name="email" id="mailContato" placeholder="E-mail" required>
                        </div>
                        <div>
                            <textarea name="men" id="menContato" placeholder="Mensagem" cols="30" rows="10"></textarea>
                        </div>
                        <div class="botoes">
                            <button type="button" id="btnEnviarWhats">Enviar WhatsApp</button>
                            <button type="button" id="btnEnviarEmail">Enviar Email</button>
                        </div>
                    </form>

                </div>
            </div>
        </section>

        <section class="servicos">
            <div class="site">

                <div class="servBase1 wow animate__animated animate__fadeInUp ">
                    <div class="noto wow animate__animated animate__fadeInLeft animate__delay-05s">
                        <h3>
                            Nossos serviços
                        </h3>
                    </div>
                    <div class="robotoBold">
                        <h2>
                            Como trabalhamos
                        </h2>
                    </div>
                    <div class="noto">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium animi eaque vero, dolore impedit in quam excepturi aut dolorem, laboriosam a voluptatibus blanditiis id fugiat itaque repellat fugit nesciunt debitis..
                        </p>
                    </div>

                    <input class="robotoBold" type="submit" value="Faça um orçamento">

                </div>

                <div class="servBase2">
                    <div class="wow animate__animated animate__fadeInTopLeft">
                        <div>
                            Sites e Aplicações Web
                        </div>
                        <div>
                            <p class="noto">
                                Desenvolvemos sites e aplicações sob medida para atender às suas necessidades <!-- adicione os servicos -->
                                específicas, garantindo funcionalidade e uma ótima experiência do usuário.
                            </p>
                        </div>

                    </div>
                    <div class="wow animate__animated animate__fadeInTopRight">

                        <div>Aprimoramento de Sites</div>
                        <div>
                            <p class="noto">
                                Modernizamos e melhoramos seu site atual para garantir que ele esteja sempre atualizado
                                e performático, atendendo às últimas tendências e tecnologias.
                            </p>
                        </div>
                    </div>
                    <div class="wow animate__animated animate__fadeInBottomLeft">

                        <div>Suporte Técnico</div>
                        <div>
                            <p class="noto">
                                Oferecemos suporte contínuo para seu site ou aplicação, incluindo monitoramento,
                                correção de bugs e atualizações regulares para manter tudo funcionando perfeitamente.
                            </p>
                        </div>
                    </div>
                    <div class="wow animate__animated animate__fadeInBottomRight">

                        <div>Design de Sites</div>
                        <div>
                            <p class="noto">
                                Criamos designs atraentes e intuitivos para sites, focando em uma apresentação visual
                                que reflete sua marca e melhora a experiência do usuário.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="selos"> <!-- adicione os selos -->
          
                <div class="site">

                    <div class="flip-card wow animate__animated animate__fadeInLeft">
                        <div class="flip-card-cont">
                            <div class="flip-card-front">
                                <img src="assets/img/selo1.png" alt="Selo 1">
                                <h2 class="robotoBold">Sites rápidos</h2>
                            </div>
                            <div class="flip-card-back">
                                <p class="noto">Nossos sites se destacam pela velocidade, graças ao uso de tecnologia
                                    avançada, servidores de
                                    alto desempenho, imagens em ótimas qualidades em processo de otimização completo
                                    antes da
                                    publicação.</p>
                            </div>
                        </div>
                    </div>

                    <div class="flip-card wow animate__animated animate__fadeInUp">
                        <div class="flip-card-cont">
                            <div class="flip-card-front">
                                <img src="assets/img/selo2.png" alt="Selo 2">
                                <h2 class="robotoBold">Garantia de entrega</h2>
                            </div>
                            <div class="flip-card-back">
                                <p class="noto">Nosso compromisso é entregar cada site dentro do prazo acordado. Temos
                                    um processo bem estruturado que assegura a pontualidade na conclusão de todos os
                                    projetos.</p>
                            </div>
                        </div>
                    </div>

                    <div class="flip-card wow animate__animated animate__fadeInRight">
                        <div class="flip-card-cont">
                            <div class="flip-card-front">
                                <img src="assets/img/selo3.png" alt="Selo 3">
                                <h2 class="robotoBold">Entrega Rápida</h2>
                            </div>
                            <div class="flip-card-back">
                                <p class="noto">Garantimos uma entrega ágil e de alta qualidade, combinando eficiência
                                    com um padrão elevado
                                    de excelência. Mesmo com agilidade, mantemos a qualidade excepcional em cada
                                    projeto.</p>
                            </div>
                        </div>
                    </div>

                </div>
       

        </section>
 
        <section class="metod"> <!-- Altere o que for preciso para sua metodologia -->
            <div class="site">

                <div>
                    <div>
                        <h3 class="noto wow animate__animated animate__fadeInLeft">Agência de sites</h3>

                        <h2 class="robotoBold wow animate__animated animate__fadeInLeft">Metodologia</h2>
                    </div>

                    <div class=" wow animate__animated animate__fadeInDown">
                        <h3 class="noto">Confira o que inclui nossa abordagem e veja como
                            fazemos o desenvolvimento de sites.</h3>

                        <a href="#" class="noto">Faça um orçamento</a>

                    </div>

                </div>

                <div>

                    <div class="wow animate__animated animate__fadeInUp">
                        <div class="circulo">
                            <img src="assets/img/metod1.png" alt="Icon 1">
                        </div>
                        <h2>Briefing</h2>
                        <ul>
                            <li>Objetivos do Projeto</li>
                            <li>Público Alvo</li>
                            <li>Benchmarking</li>
                            <li>Prazos e Orçamento</li>
                        </ul>
                    </div>

                    <div class="wow animate__animated animate__fadeInUp animate__delay-05s">
                        <div class="circulo">
                            <img src="assets/img/metod2.png" alt="Icon 2">
                        </div>
                        <h2>Design</h2>
                        <ul>
                            <li>Identidade Visual</li>
                            <li>Wireframe</li>
                            <li>Protótipo</li>
                            <li>Layout</li>
                        </ul>
                    </div>

                    <div class="wow animate__animated animate__fadeInUp animate__delay-1s">
                        <div class="circulo">
                            <img src="assets/img/metod3.png" alt="Icon 3">
                        </div>
                        <h2>Frond end</h2>
                        <ul>
                            <li>Programação e codificação</li>
                            <li>Estruturação de páginas</li>
                            <li>Responsividade</li>
                            <li>HTML, CSS e JavaScript</li>
                        </ul>
                    </div>

                    <div class="wow animate__animated animate__fadeInUp animate__delay-15s">
                        <div class="circulo">
                            <img src="assets/img/metod4.png" alt="Icon 4">
                        </div>
                        <h2>Entrega</h2>
                        <ul>
                            <li>Hospedagem</li>
                            <li>Validação</li>
                            <li>Publicação</li>
                            <li>Acompanhamento e manutenção</li>
                        </ul>
                    </div>

                </div>
            </div>

        </section>

        <section class="projetos">
            <div class="site wow animate__animated animate__fadeInLeft ">
                <h2>Nossos projetos</h2>
            </div>
            <div class="galeria">
                <img src="assets/img/carrossel1.png" alt=""> <!-- imagens de exemplo -->
                <img src="assets/img/carrossel2.png" alt="">
                <img src="assets/img/carrossel3.png" alt="">
                <img src="assets/img/carrossel4.png" alt="">
                <img src="assets/img/carrossel5.png" alt="">
                <img src="assets/img/carrossel6.png" alt="">
                <img src="assets/img/carrossel1.png" alt="">
                <img src="assets/img/carrossel2.png" alt="">
                <img src="assets/img/carrossel3.png" alt="">
                <img src="assets/img/carrossel4.png" alt="">
                <img src="assets/img/carrossel5.png" alt="">
                <img src="assets/img/carrossel6.png" alt="">
            </div>
        </section>



        <section class="contato2">
            <div class="site ">

                <div class="robotoBold wow animate__animated animate__fadeInLeft">
                    <p>Estamos aqui para tranformar suas ideias em realidade. Fale conos e comece a dar vida ao seu
                        projeto hoje mesmo!</p>
                </div>

                <div class="robotoBold wow animate__animated animate__fadeInUp">
                    <input class="robotoBold" type="submit" value="Entre em contato">
                </div>

            </div>
        </section>



    </main>

    <footer>
        <div class="site wow animate__animated animate__fadeInLeft">
            <div class="robotoBold">
                <div>
                    <h2>Nome agencia</h2>
                </div>
                <div>
                    <p>Transforme sua visão em realidade com nossa equipe. Pronto para levar sua marca ao próximo
                        nível?</p>
                </div>

            </div>

            <div class="robotoBold">
                <div>
                    <h2>
                        Entre em Contato
                    </h2>
                </div>
                <div>
                    <p>Rua , 123 - Cidade, Estado <br>
                        (11) 1234-5678 <br>
                        email@gmail.com</p>
                </div>
            </div>

            <div>

                <div class="robotoBold">
                    <h2>Redes sociais</h2>
                </div>

                <div class="redeSocial">
                    <ul>
                        <li><a href="#" class="insta"><img src="assets/img/insta.png" alt="Intagram"></a></li>
                        <li><a href="#" class="face"><img src="assets/img/face.png" alt="Facebook"></a></li>
                        <li><a href="#" class="linkedin"><img src="assets/img/link.png" alt="Linkedin"></a></li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="footer">
            <div class="site">
                <p>© 2024 Agencia. Todos os direitos reservados.</p>
            </div>
        </div>

    </footer>




    <!-- JQUERY JS -->

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <!-- WOW JS -->

    <script src="assets/js/wow.min.js"></script>

    <!-- SLICK JS -->

    <script src="assets/js/slick.min.js"></script>

    <script src="assets/js/lity.min.js"></script>

    <script src="assets/js/animacoes.js"></script>


</body>

</html>