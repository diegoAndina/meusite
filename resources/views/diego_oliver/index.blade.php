<x-page title="Página Inicial" class=" ">
    <style>
        @font-face {
            font-family: origin;
            src: url('Origin.ttf');
        }

        @font-face {
            font-family: over;
            src: url('over.ttf');
        }

        @font-face {
            font-family: speed;
            src: url('speed.ttf');
        }

        .gradient-dark {
            background-image: url('fundo_dark.jpg');
            background-repeat: no-repeat;
            background-size: 100% 100%;
            opacity: 0.9;

            /* background: linear-gradient(to bottom right, rgb(0, 0, 0), rgba(1, 3, 29, 0.826), rgba(2, 8, 52, 0.693)); */
        }

        .principal {
            height: 55vh;
        }

        .principal h1 {
            color: white;
            opacity: 1.0;
            font-family: speed;
            font-weight: normal;
            letter-spacing: 3px;
        }

        h2 {
            opacity: 1;
            font-family: speed;
            font-weight: normal;
            letter-spacing: 3px;
            text-shadow: 1px -1px rgb(108, 206, 219);
        }

        .web {
            /* color: cyan; */
            opacity: 1;
            font-family: over;
            font-weight: normal;
            letter-spacing: 3px;
            text-shadow: 1px -1px rgb(32, 8, 150);
        }

        .face-logo {
            height: 10vh;

            max-width: 150px;
            opacity: 0.7;
        }

        .face-logo img {
            width: 80;
            height: 100%;
        }

        .web-developer,
        .seta-baixo {
            /* color: rgba(48, 128, 128, 255); */
            opacity: 1;
            font-family: speed;
            font-weight: normal;
            letter-spacing: 3px;
            /* text-shadow: 2px -1px rgb(15, 31, 93); */
        }

        .projects {
            margin-top: 100px;
            /* border: solid 2px red; */
        }

        .row {
            height: 100%;
        }

        .bounce-top {
            -webkit-animation: heartbeat 1.5s ease-in-out infinite both;
            animation: heartbeat 1.5s ease-in-out infinite both;
        }

        @-webkit-keyframes heartbeat {
            from {
                -webkit-transform: scale(1);
                transform: scale(1);
                -webkit-transform-origin: center center;
                transform-origin: center center;
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
            }

            10% {
                -webkit-transform: scale(0.91);
                transform: scale(0.91);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }

            17% {
                -webkit-transform: scale(0.98);
                transform: scale(0.98);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
            }

            33% {
                -webkit-transform: scale(0.87);
                transform: scale(0.87);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }

            45% {
                -webkit-transform: scale(1);
                transform: scale(1);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
            }
        }

        @keyframes heartbeat {
            from {
                -webkit-transform: scale(1);
                transform: scale(1);
                -webkit-transform-origin: center center;
                transform-origin: center center;
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
            }

            10% {
                -webkit-transform: scale(0.91);
                transform: scale(0.91);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }

            17% {
                -webkit-transform: scale(0.98);
                transform: scale(0.98);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
            }

            33% {
                -webkit-transform: scale(0.87);
                transform: scale(0.87);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }

            45% {
                -webkit-transform: scale(1);
                transform: scale(1);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
            }
        }

        .box-img {
            height: 302px;
        }

        .box-img img {
            width: 60%;
            height: 60%;
        }

        footer {
            display: flex;
            justify-content: center;
            align-items: center;
            align-content: center;
            background: black;
            min-height: 20vh;
        }
    </style>
    {{-- *********************  MAIN  ******************************** --}}
    <main class="container-fluid  gradient-dark py-5 mb-5 text-3xl md:text-4xl xl:text-5xl">

        <div class="principal container-fluid py-5 d-grid align-content-center  ">
            <div class="row center">
                <img src="face-logo.png" alt="" class="col-3 col-md-3 col-lg-3  col-xl-2 face-logo ">
            </div>
            <x-title font="speed" class="my-2 text-white  text-3xl md:text-5xl lg:text-6xl my-2">DIEGO OLIVER</x-title>
            <div class="container mt-3">
                <div class="col  text-center mb-4  web text-info text-xl md:text-2xl xl:text-3xl">WEB </div>
                <div class="col  text-center text-yellow-300 web-developer"> DEVELOPER</div>
            </div>
        </div>
    </main>

    {{-- *********************  PROJETOS TITLE ******************************** --}}
    <div class="projects container my-3  p-0 ">

        <x-title font="Over" class="text-dark p-5 my-3 text-lg md:text-xl lg:text-2xl ">PROJETOS</x-title>

        {{-- *********************  DIVIDER ******************************** --}}
        <x-divider></x-divider>

    </div>

    {{-- *********************  PROJETOS GRID ******************************** --}}
    <section class="section-projects m-0 mb-5 ">
        <div class="container p-0 ">
            <div class=" row row-cols-1 row-cols-md-2 row-cols-lg-3 p-1">
                <div class="box-img col center p-1"><img class="" src="logo-site.png" alt="projetos"></div>
                <div class="box-img col center p-1"><img class="" src="logo-site.png" alt="projetos"></div>
                <div class="box-img col center p-1"><img class="" src="logo-site.png" alt="projetos"></div>
                <div class="box-img col center p-1"><img class="" src="logo-site.png" alt="projetos"></div>
                <div class="box-img col center p-1"><img class="" src="logo-site.png" alt="projetos"></div>
                <div class="box-img col center p-1"><img class="" src="logo-site.png" alt="projetos"></div>
            </div>
        </div>
    </section>

    {{-- *********************  SOBRE ******************************** --}}
    <div class="container-fluid gradient-dark mt-3 mb-5 py-5 text-white  text-2xl md:text-3xl lg:text-4xl">

        <x-title font="speed" class="text-white"> SOBRE</x-title>

        {{-- *********************  DIVIDER ******************************** --}}
        <x-divider></x-divider>

        <div class="container text-base lg:text-2xl ">
            <div class="row p-2 justify-center justify-content-md-around ">
                <div class="col-10 col-md-4 my-3">
                    <p class="">Freelancer is a free bootstrap theme created by Start Bootstrap. The download
                        includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS
                        stylesheets for easy customization.
                    </p>
                </div>

                <div class="col-10 col-md-4 my-3  ">
                    <p class="">You can create your own custom avatar for the masthead, change the icon in the
                        dividers, and add your email address to the contact form to make it fully functional!</p>
                </div>
            </div>
        </div>
    </div>

    {{-- ********************** FORMULARIO DE CONTATO **************************************** --}}
    <section class="">
        <x-title font="speed" class="text-xl md:text-3xl lg:text-4xl">
            ENTRE EM CONTATO
        </x-title>
        <x-divider></x-divider>
    </section>
    <form action="{{ route('painel.store') }}" method="post">
        @csrf
        @method('post')

        <x-form-create></x-form-create>
    </form>

    <!-- ***************************** FOOTER  ******************************************-->
    <footer class="container-fluid gradient-dark ">
        <div class="container text-center  text-white text-lg p-5 p-md-4 p-lg-0 ">
            <div class="row p-5">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Location</h4>
                    <p class="lead mb-0">
                        2215 John Daniel Drive
                        <br />
                        Clark, MO 65243
                    </p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Around the Web</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                            class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                            class="fab fa-fw fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                            class="fab fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                            class="fab fa-fw fa-dribbble"></i></a>
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">About Freelancer</h4>
                    <p class="lead mb-0">
                        Freelance is a free to use, MIT licensed Bootstrap theme created by
                        <a href="http://startbootstrap.com">Start Bootstrap</a>
                        .
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Copyright Section-->
    <div class="copy py-4 text-center text-white bg-dark  text-lg">
        <div class="container"><small>Copyright &copy; Desenvolvido por <strong>Diego Oliver</strong></small></div>
    </div>

</x-page>
