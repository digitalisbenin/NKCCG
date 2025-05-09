<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NKCCG</title>
    <link rel="icon" href="logo.jpeg">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>


<body x-data="{ page: 'home', 'darkMode': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
$watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" :class="{ 'b eh': darkMode === true }">
    <!-- ===== Header Start ===== -->

    <header class="g s r vd ya  " :class="{ 'hh sm _k dj bl ll': stickyMenu }"
    @scroll.window="stickyMenu = (window.pageYOffset > 20) ? true : false">
    <div class="bb ze ki xn 2xl:ud-px-0 oo wf yf i">
        <div class="vd to/4 tc wf yf">

            <a href="/">
                <img class="om h-7 lg:h-16" src="logo.jpeg" alt="Logo Light" height="60" />

            </a>

            <!-- Hamburger Toggle BTN -->
            <button class="po rc" @click="navigationOpen = !navigationOpen">
                <span class="rc i pf re pd">
                    <span class="du-block h q vd yc">
                        <span class="rc i r s eh um tg te rd eb ml jl dl"
                            :class="{ 'ue el': !navigationOpen }"></span>
                        <span class="rc i r s eh um tg te rd eb ml jl fl"
                            :class="{ 'ue qr': !navigationOpen }"></span>
                        <span class="rc i r s eh um tg te rd eb ml jl gl"
                            :class="{ 'ue hl': !navigationOpen }"></span>
                    </span>
                    <span class="du-block h q vd yc lf">
                        <span class="rc eh um tg ml jl el h na r ve yc"
                            :class="{ 'sd dl': !navigationOpen }"></span>
                        <span class="rc eh um tg ml jl qr h s pa vd rd"
                            :class="{ 'sd rr': !navigationOpen }"></span>
                    </span>
                </span>
            </button>
            <!-- Hamburger Toggle BTN -->
        </div>

        <div class="vd  sd  qo f ho oo wf yf " :class="{ 'd hh rm sr td ud qg ug jc yh': navigationOpen }">
            <nav>
                <ul class="tc _o sf yo cg ">
                    {{--  <li>
                        <button id="enjeuxButton"
                            class="xl text-black whitespace-nowrap hover:text-blue-600  border-b-4 border-transparent hover:border-blue-600  ">
                            {{ __('ENJEUX') }}
                        </button>
                        <nav id="enjeuxNav"
                            class="fixed z-10 h-screen bg-slate-800 w-full top-16 text-slate-100 left-0 p-8 shadow-lg"
                            style="display: none;">
                            <button id="closeEnjeuxNav" class="float-right">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                            <div class="lg:flex">
                                <div>
                                    <h1 class="lg:text-4xl text-sm lg:mt-16 text-blue-500">{{ __('ENJEUX') }}</h1>
                                    <a href="#"
                                        class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2  border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Mécanisation et dynamisation de l’agriculture en  Afrique') }}</a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2  border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Automatisation et dynamisation de l’élevage') }} </a>
                                    <p></p>
                                    <a href="/transformation"
                                        class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('transformation') ? 'text-blue-700' : '' }}">
                                        {{ __('Transformation des business models') }}</a>
                                    <p></p>
                                    <a href="/transparence"
                                        class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('transparence') ? 'text-blue-700' : '' }}">
                                        {{ __('Transparence et maîtrise des risques') }}
                                    </a>





                                </div>
                                <div class="lg:ml-24">
                                    <h1 class="lg:text-2xl lg:mt-24"></h1>
                                    <a href="/technologie"
                                        class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('technologie') ? 'text-blue-700' : '' }}">
                                        {{ __('Technologie et performance') }}</a>
                                    <p></p>

                                    <a href="/transition"
                                        class="lg:text-xl text-sm lg:mt-4  text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('transition') ? 'text-blue-700' : '' }}">
                                        {{ __('Transition écologique et sociétale') }}</a>
                                    <p></p>



                                        <a href="#"
                                        class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Responsabilité Sociétale des Entreprises') }}</a>







                                </div>
                                <div class="lg:ml-24">
                                    <h1 class="lg:text-2xl lg:mt-24"></h1>

                                    <a href="/croissance"
                                        class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('croissance') ? 'text-blue-700' : '' }}">
                                        {{ __('Croissance des ETI') }}</a>
                                    <p></p>
                                    <a href="/startups"
                                        class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent {{ request()->is('startups') ? 'text-blue-700' : '' }}">
                                        {{ __('Startups et innovation') }}</a>
                                        <p></p>
                                        <a href="/creation"
                                        class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('creation') ? 'text-blue-700' : '' }}">
                                        {{ __('Création et préservation de valeur') }}</a>

                                </div>
                            </div>
                        </nav>
                    </li>  --}}

                    {{-- <li><a href="/enjeux"
                        class="xl  text-black hover:text-blue-600 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-blue-600  {{ request()->is('enjeux') ? 'text-blue-700' : '' }}">{{ __('ENJEUX') }}
                    </a>
                </li> --}}
                <li><a href="/a-propos"
                    class="xl  text-black hover:text-blue-600 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-blue-600  {{ request()->is('a-propos') ? 'text-blue-700' : '' }}">{{ __('QUI SOMMES-NOUS ') }}
                </a>
            </li>
                <li><a href="/solutions"
                    class="xl  text-black hover:text-blue-600 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-blue-600  {{ request()->is('solutions') ? 'text-blue-700' : '' }}">{{ __('SOLUTIONS DIGITALES') }}
                </a>
            </li>

           
                    <li><a href="/activites"
                        class="xl  text-black hover:text-blue-600 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-blue-600  {{ request()->is('activites') ? 'text-blue-700' : '' }}">{{ __('SECTEURS D’ACTIVITES') }}
                    </a>
                </li>
                    <li><a href="/expertises"
                        class="xl  text-black hover:text-blue-600 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-blue-600  {{ request()->is('expertises') ? 'text-blue-700' : '' }}">{{ __('EXPERTISES') }}
                    </a>
                </li>
                    {{--  <li class="">
                        <button id="secteurButton"
                            class="xl text-black whitespace-nowrap hover:text-blue-600 inline-block border-b-4 border-transparent hover:border-blue-600 ">
                            {{ __('SECTEURS D’ACTIVITES') }}
                        </button>
                        <nav id="secteurNav"
                            class="fixed z-10 h-screen bg-slate-800 w-full top-12 text-slate-100 left-0 p-8 shadow-lg"
                            style="display: none;">
                            <button id="closeSecteurNav" class="float-right">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                            <div class="lg:flex">
                                <div>
                                    <h1 class="lg:text-4xl lg:mt-9 text-blue-500">{{ __('SECTEURS D’ACTIVITES') }}
                                    </h1>

                                    <a href="#"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Service Public') }}
                                    </a>
                                    <p></p>
                                    <a href="/assurance"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('assurance') ? 'text-blue-700' : '' }}">
                                        {{ __('Conseils juridique et fiscal') }}</a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Passation des marchés publics') }}
                                    </a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Education') }}
                                    </a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Services') }}
                                    </a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2  border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Etude et Conseils Agricoles (Agriculture, Elevage et la Pêche)') }}
                                    </a>
                                    <p></p>

                                    <a href="/energie"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('energie') ? 'text-blue-700' : '' }}">
                                        {{ __('Energie') }}</a>
                                    <p></p>
                                    <a href="/hotelle"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('hotelle') ? 'text-blue-700' : '' }}">
                                        {{ __('Génie-civil') }}</a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Développement économique et institutionnel') }}
                                    </a>


                                </div>
                                <div class="lg:ml-24">
                                    <h1 class="lg:text-2xl lg:mt-20"></h1>

                                    <a href="/ingenerie"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('ingenerie') ? 'text-blue-700' : '' }}">
                                        {{ __('Ingénierie et construction') }}

                                    </a>
                                    <p></p>
                                    <a href="/distrubition"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('distrubition') ? 'text-blue-700' : '' }}">
                                        {{ __('Biens et services de consommation') }}
                                    </a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Ressources Naturelles') }}
                                    </a>
                                    <p></p>

                                    <a href="#"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Sciences de la Vie') }}
                                    </a>
                                    <p></p>
                                    <a href="/techonologieservice"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('techonologieservice') ? 'text-blue-700' : '' }}">
                                        {{ __('Technologie') }}</a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Chimie') }}</a>
                                    <p></p>
                                    <a href="/telecommunication"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('telecommunication') ? 'text-blue-700' : '' }}">
                                        {{ __('Ingénierie réseaux') }}</a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('L’eau') }}
                                    </a>
                                    <p></p>

                                    <a href="#"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('High-tech') }}
                                    </a>



                                </div>
                                <div class="lg:ml-24">
                                    <h1 class="lg:text-2xl lg:mt-20"></h1>




                                    <a href="#"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Transport') }}
                                    </a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Environnement') }}
                                    </a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Santé') }}
                                    </a>
                                    <p></p>
                                    <a href="/industrie"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('industrie') ? 'text-blue-700' : '' }}">
                                        {{ __('Industries de santé') }}
                                    </a>
                                    <p></p>
                                    <a href="/media"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('media') ? 'text-blue-700' : '' }}">
                                        {{ __('Communication  et Médias') }}
                                    </a>
                                    <p></p>
                                    <a href="/aeronautique"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                        {{ __('Défense et sécurité') }}</a>
                                    <p></p>

                                    <a href="/automobile"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('automobile') ? 'text-blue-700' : '' }}">
                                        {{ __('Automobile') }}</a>
                                    <p></p>
                                    <a href="/banque"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('banque') ? 'text-blue-700' : '' }}">
                                        {{ __('Capital Markets') }}
                                    </a>
                                    <p></p>

                                    <a href="#"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Voyage') }}
                                    </a>

                                </div>
                            </div>
                        </nav>
                    </li>  --}}
                    {{--  <li>
                        <button id="expertisesButton"
                            class="xl text-black whitespace-nowrap hover:text-blue-600 inline-block border-b-4 border-transparent hover:border-blue-600 ">
                            {{ __('EXPERTISES') }}
                        </button>
                        <nav id="expertisesNav"
                            class="fixed z-10 h-screen bg-slate-800 w-full top-12 text-slate-100 left-0 p-8 shadow-lg"
                            style="display: none;">
                            <button id="closeExpertisesButton" class="float-right ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                            <div class="lg:flex">
                                <div>
                                    <a href="/expertise"
                                        class="lg:text-4xl lg:mt-9 text-sm text-blue-500 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('expertise') ? 'text-blue-700' : '' }}">EXPERTISES</a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Etudes') }}</a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('transition') ? 'text-blue-700' : '' }}">
                                        {{ __('Formations') }}
                                    </a>

                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('transition') ? 'text-blue-700' : '' }}">
                                        {{ __('Prestations de services') }}
                                    </a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Finances publiques') }}</a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Management et organisation') }}</a>
                                        <p></p>
                                        <a href="#"
                                        class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('transition') ? 'text-blue-700' : '' }}">
                                        {{ __('Agriculture et élevage') }}
                                    </a>
                                    <p></p>

                                    <a href="/transaction"
                                        class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('transition') ? 'text-blue-700' : '' }}">
                                        {{ __('Transactions') }}
                                    </a>


                                </div>

                                <div class="lg:ml-12 lg:mt-20">

                                    <a href="#"
                                        class="lg:text-xl text-sm  lg:mt-4 text-green-600 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Conseils') }}</a>
                                    <p></p>

                                    <a href="#"
                                        class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Conseils juridique et fiscal') }} </a>
                                        <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Conseil en production animale') }}
                                    </a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Conduite de changement') }}</a>
                                    <p></p>
                                    <a href="/organisations"
                                        class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('organisations') ? 'text-blue-700' : '' }}">
                                        {{ __('Conseil aux organisations') }}</a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Conseil en stratégie') }}
                                    </a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Conseil agricole') }}
                                    </a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Conseil Financier ou TS') }}</a>
                                    <p></p>


                                </div>
                                <div class="lg:ml-12 lg:mt-20">
                                    <a href="#"
                                        class="lg:text-2xl lg:mt-6 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}"></a>
                                        <a href="#"
                                        class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Conseil en opérations') }}
                                    </a>

                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm  lg:mt-6 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Conseils en Politique et Communication') }}
                                    </a>

                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Conseil en digital & data') }}</a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Conseil à la fonction finance et risques') }}</a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Génie civil et BTP') }}
                                    </a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Développement durable') }}
                                    </a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Responsabilité Sociale de l’Entreprise (RSE)') }}
                                    </a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('transition') ? 'text-blue-700' : '' }}">
                                        {{ __('Représentation de groupes internationaux') }}
                                    </a>




                                </div>
                                <div class="lg:ml-12 lg:mt-20">
                                    <a href="#"
                                        class="lg:text-2xl lg:mt-6 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}"></a>
                                        <a href="#"
                                        class="lg:text-xl text-sm  lg:mt-4 text-green-600 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Transformation digitale') }}
                                    </a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Big data') }}</a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Ingénierie en système d’information') }}
                                    </a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Ingénierie industrielle') }}
                                    </a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Ingénierie en technologie alimentaire') }}
                                    </a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Ingénierie en énergie électrique') }}
                                    </a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Ingénierie en énergie solaire') }}
                                    </a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                        {{ __('Ingénierie en mines et géologie') }}
                                    </a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('transition') ? 'text-blue-700' : '' }}">
                                        {{ __('Ingénierie informatique et réseaux') }}
                                    </a>
                                    <p></p>










                                </div>

                            </div>
                        </nav>
                    </li>  --}}



                    <li><a href="/partenaire"
                        class="xl  text-black hover:text-blue-600 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-blue-600  {{ request()->is('partenaire') ? 'text-blue-700' : '' }}">{{ __('PARTENAIRES') }}
                    </a>
                </li>
                    <li><a href="/carriere"
                        class="xl  text-black hover:text-blue-600 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-blue-600  {{ request()->is('carriere') ? 'text-blue-700' : '' }}">{{ __('CARRIERES') }}
                    </a>
                </li>
                    {{--  <li>
                        <button id="sidenavButton"
                            class="xl text-black whitespace-nowrap hover:text-blue-600 inline-block border-b-4 border-transparent hover:border-blue-600 ">
                            {{ __('QUI SOMMES-NOUS ?') }}
                        </button>
                        <nav id="sidenavNav"
                            class="fixed z-10 h-screen bg-slate-800 w-full top-16 text-slate-100 left-0 p-8 shadow-lg"
                            style="display: none;">
                            <button id="closeSidenavButton" class="float-right ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                            <div class="lg:flex">
                                <div>
                                    <a href="/a-propos"
                                        class="lg:text-4xl mg:mt-16 text-blue-500 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('a-propos') ? 'text-blue-700' : '' }}">
                                        {{ __('QUI SOMMES-NOUS ?') }}</a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                        {{ __('Stratégie') }}</a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                        {{ __('Raison d’être et valeurs') }}</a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm lg:mt-2 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                        {{ __('Actualités et perspectives') }}</a>



                                </div>
                                <div class="lg:ml-24">
                                    <h1 class="lg:text-2xl lg:mt-9"></h1>
                                    <a href="#"
                                        class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                        {{ __('Gouvernance') }}</a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                        {{ __('Ethique et conformité') }}</a>
                                    <p></p>

                                    <a href="#"
                                        class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                        {{ __('Agir collectivement pour un impact positif') }}
                                    </a>



                                </div>
                                <div class="lg:ml-24">
                                    <h1 class="lg:text-2xl lg:mt-9"></h1>
                                    <a href="/contact"
                                        class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('contact') ? 'text-blue-700' : '' }}">
                                        {{ __('Où nous trouver ?') }}</a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                        {{ __('Publications institutionnelles') }}</a>


                                </div>
                            </div>
                        </nav>
                    </li>  --}}
                    {{--  <li>
                        <button id="sidepartButton"
                            class="xl text-black whitespace-nowrap hover:text-blue-600 inline-block border-b-4 border-transparent hover:border-blue-600 ">
                            {{ __('PARTENAIRES') }}
                        </button>
                        <nav id="sidepartNav"
                            class="fixed z-10 h-screen bg-slate-800 w-full top-16 text-slate-100 left-0 p-8 shadow-lg"
                            style="display: none;">
                            <button id="closeSidepartButton" class="float-right ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>

                            <div class="lg:flex">
                                <div class="">
                                    <h1 class="lg:text-4xl lg:mt-16 text-blue-500">{{ __('NOS PARTENAIRES') }}
                                    </h1>
                                    <a href="#"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                        {{ __('BENIN') }}</a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                        {{ __('BENIN FISHER (pisciculture)') }}
                                    </a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                        {{ __('Ministère de l’Economie et des Finances (MEF)') }}</a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                        {{ __('Direction Générale des Impôts (DGI)') }}
                                    </a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                        {{ __('Direction Générale des Douanes (DGD)') }}
                                    </a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                        {{ __('Direction Générale de l’Economie (DGE)') }}</a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                        {{ __('Ministère de l’Industrie et du Commerce (MIC) ') }}
                                    </a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                        {{ __('Ministère de la Communication et de la Poste (MCP) ') }}
                                    </a>





                                </div>
                                <div class=" w-1/4 lg:ml-12">
                                    <h1 class="lg:text-2xl lg:mt-24"></h1>
                                    <a href="#"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                        {{ __('Ministère de la Santé (MS)') }}

                                    </a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2  border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                        {{ __('Ministère de la Culture et du Tourisme  ') }}</a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2  border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                        {{ __('Autorité de Régulation  de l’Electricité (ARE)') }}
                                    </a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                        {{ __('Agence Nationale d’Identification des Personnes (ANIP)') }}
                                    </a>
                                    <p></p>

                                    <a href="#"
                                        class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2  border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                        {{ __('Société Nationale des Eaux du Bénin (SONEB)') }}
                                    </a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2  border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                        {{ __('Société Béninoise d’Energie Electrique (SBEE)') }}</a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                        {{ __('Coris Bank International Bénin') }}
                                    </a>
                                    <p></p>


                                    <a href="#"
                                        class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                        {{ __('Mairie de Cotonou ') }}
                                    </a>



                                </div>
                                <div class=" w-1/4 lg:ml-12">
                                    <h1 class="lg:text-2xl lg:mt-24"></h1>
                                    <a href="#"
                                        class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                        {{ __('TOGO') }} </a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                        {{ __('Ministère de l’Economie et des Finances') }}</a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                        {{ __('Direction Nationale des Assurances (DNA)') }} </a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                        {{ __('Ministère des Armées') }}
                                    </a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                        {{ __('UNION DES COMORES') }}
                                    </a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">

                                        {{ __('Ministère de l’Agriculture') }}
                                    </a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">


                                        {{ __('Ministère de la Pêche') }}
                                    </a>
                                    <p></p>

                                    <a href="/distrubition"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                        {{ __('Ministère de l’Environnement du Tourisme') }}
                                    </a>
                                </div>


                            </div>
                        </nav>
                    </li>  --}}
                    {{--  <li>
                        <button id="sidenavaButton"
                            class="xl text-black whitespace-nowrap hover:text-blue-600  border-b-4 border-transparent hover:border-blue-600 ">
                            {{ __('CARRIERES') }}
                        </button>
                        <nav id="sidenavaNav"
                            class="fixed z-10 h-screen bg-slate-800 w-full top-16 text-slate-100 left-0 p-8 shadow-lg"
                            style="display: none;">
                            <button id="closeSidenavaButton" class="float-right ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>

                            <div class="lg:flex">
                                <div>
                                    <h1 class="lg:text-4xl text-sm lg:mt-16 text-blue-500">{{ __('CARRIERES') }}
                                    </h1>
                                    <a href="#"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                        {{ __('Pourquoi faire le choix de NKCCG ?') }}</a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                        {{ __('Quel métier est fait pour moi ?') }}</a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                        {{ __('Échanger avec nos collaborateurs') }}</a>
                                    <p></p>
                                    <a href="#"
                                        class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                        {{ __('Postuler') }}</a>
                                </div>

                            </div>
                        </nav>
                    </li>  --}}

                    <li><a href="/contact"
                            class="xl text-black hover:text-blue-600 inline-block border-b-4 border-transparent hover:border-blue-600  {{ request()->is('contact') ? 'text-blue-700' : '' }}">{{ __('CONTACT') }}

                        </a>
                    </li>
                    @include('partials/language_switcher')

                </ul>
            </nav>


        </div>
    </div>
</header>

    <!-- ===== Header End ===== -->

    <main>

        <section>

            {{--  #000e38  --}}
            <div class=" min-h-screen  lg:flex  lg:px-12 py-8  mt-20 h-full" style="background-color:#e9e9e9 ;">
                <div>
                    <h1 class="lg:text-4xl lg:mt-9 text-blue-500">{{ __('NOS SECTEURS D’ACTIVITES') }}
                    </h1>

                    <a href="#"
                        class="lg:text-xl uppercase  lg:mt-4 text-sm text-green-600 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                        {{ __('Secteurs institutionnels et publics ') }}
                    </a>
                    <p></p>
                    <a href="/assurance"
                        class="lg:text-xl lg:mt-4 text-sm text-gray-900 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('assurance') ? 'text-blue-700' : '' }}">
                        {{ __('Finances publiques') }}</a>
                    <p></p>
                    <a href="#"
                        class="lg:text-xl lg:mt-4 text-sm text-gray-900 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                        {{ __('Réformes administratives, institutionnelles et organisationnelles') }}
                    </a>
                    <p></p>
                    <a href="#"
                        class="lg:text-xl lg:mt-4 text-sm text-gray-900 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                        {{ __('Gouvernance et services publics') }}
                    </a>
                    <p></p>

                    <a href="#"
                        class="lg:text-xl lg:mt-4 text-sm text-gray-900 hover:bg-orange-500 hover:px-2  border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                        {{ __('Gestion des marchés publics)') }}
                    </a>
                    <p></p>

                    <a href="#"
                        class="lg:text-xl lg:mt-4 text-sm text-gray-900 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('energie') ? 'text-blue-700' : '' }}">
                        {{ __('Développement économique et institutionnel') }}</a>
                    <p></p>
                    <a href="#"
                        class="lg:text-xl lg:mt-4 text-sm text-gray-900 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('hotelle') ? 'text-blue-700' : '' }}">
                        {{ __('Éducation') }}</a>
                    <p></p>
                    <a href="#"
                        class="lg:text-xl lg:mt-4 text-sm text-gray-900 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                        {{ __('Conseils juridiques et fiscaux') }}
                    </a>
                    <p></p>
                    <a href="#"
                        class="lg:text-xl lg:mt-4 text-sm text-gray-900 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('hotelle') ? 'text-blue-700' : '' }}">
                        {{ __('Fiscalité') }}</a>
                    <p></p>

                    <a href="#"
                        class="lg:text-xl uppercase  lg:mt-9 text-sm text-green-600 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                        {{ __('Secteurs technologiques et de l\'innovation  ') }}
                    </a>
                    <p></p>
                    <a href="#"
                        class="lg:text-xl lg:mt-4 text-sm text-gray-900 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('hotelle') ? 'text-blue-700' : '' }}">
                        {{ __('Technologie et high-tech') }}</a>
                    <p></p>
                    <a href="#"
                        class="lg:text-xl lg:mt-4 text-sm text-gray-900 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('hotelle') ? 'text-blue-700' : '' }}">
                        {{ __('Ingénierie réseaux') }}</a>
                    <p></p>
                    <a href="#"
                        class="lg:text-xl lg:mt-4 text-sm text-gray-900 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('hotelle') ? 'text-blue-700' : '' }}">
                        {{ __('Communication et médias') }}</a>
                    <p></p>
                    <a href="#"
                        class="lg:text-xl lg:mt-4 text-sm text-gray-900 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('hotelle') ? 'text-blue-700' : '' }}">
                        {{ __('Transformation numérique et digitalisation ') }}</a>
                    <p></p>


                    <a href="#"
                        class="lg:text-xl uppercase lg:mt-9 text-sm text-green-600 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                        {{ __('Secteurs de consommation et de services   ') }}
                    </a>
                    <p></p>
                    <a href="#"
                        class="lg:text-xl lg:mt-4 text-sm text-gray-900 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('hotelle') ? 'text-blue-700' : '' }}">
                        {{ __('Biens et services de consommation') }}</a>
                    <p></p>
                    <a href="#"
                        class="lg:text-xl lg:mt-4 text-sm text-gray-900 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('hotelle') ? 'text-blue-700' : '' }}">
                        {{ __('Services (divers) ') }}</a>
                    <p></p>
                </div>
                <div class="lg:ml-24">
                    <h1 class="lg:text-2xl lg:mt-20"></h1>

                    <a href="#"
                        class="lg:text-xl uppercase lg:mt-4 text-sm text-green-600 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('ingenerie') ? 'text-blue-700' : '' }}">
                        {{ __('Secteurs économiques et industriels ') }}

                    </a>
                    <p></p>
                    <a href="#"
                        class="lg:text-xl lg:mt-4 text-sm text-gray-900 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('distrubition') ? 'text-blue-700' : '' }}">
                        {{ __('Capital markets (marchés financiers)') }}
                    </a>
                    <p></p>
                    <a href="#"
                        class="lg:text-xl lg:mt-4 text-sm text-gray-900 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                        {{ __('Recherche de financement ') }}
                    </a>
                    <p></p>

                    <a href="#"
                        class="lg:text-xl lg:mt-4 text-sm text-gray-900 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                        {{ __('Etudes en Génie-civil') }}
                    </a>
                    <p></p>
                    <a href="#"
                        class="lg:text-xl lg:mt-4 text-sm text-gray-900 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('techonologieservice') ? 'text-blue-700' : '' }}">
                        {{ __('Ingénierie et construction') }}</a>
                    <p></p>
                    <a href="#"
                        class="lg:text-xl lg:mt-4 text-sm text-gray-900 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                        {{ __('Recherches géologiques et minières') }}</a>
                    <p></p>
                    <a href="#"
                        class="lg:text-xl uppercase lg:mt-4 text-sm text-green-600 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('ingenerie') ? 'text-blue-700' : '' }}">
                        {{ __('Secteurs des ressources naturelles et de l’environnement  ') }}

                    </a>
                    <p></p>
                    <a href="#"
                        class="lg:text-xl lg:mt-4 text-sm text-gray-900 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('telecommunication') ? 'text-blue-700' : '' }}">
                        {{ __('Ressources naturelles') }}</a>
                    <p></p>
                    <a href="#"
                        class="lg:text-xl lg:mt-4 text-sm text-gray-900 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                        {{ __('Eau et Assainissement ') }}
                    </a>
                    <p></p>

                    <a href="#"
                        class="lg:text-xl lg:mt-4 text-sm text-gray-900 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                        {{ __('Hygiène, Sécurité et Environnement') }}
                    </a>
                    <p></p>
                    <a href="#"
                        class="lg:text-xl uppercase lg:mt-4 text-sm text-green-600 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('ingenerie') ? 'text-blue-700' : '' }}">
                        {{ __('Secteur agricole ') }}

                    </a>
                    <p></p>
                    <a href="#"
                        class="lg:text-xl lg:mt-4 text-sm text-gray-900 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                        {{ __('Études et conseils agricoles (Agriculture, élevage et pêche)') }}
                    </a>
                    <p></p>
                    <a href="#"
                        class="lg:text-xl uppercase  lg:mt-4 text-sm text-green-600 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('ingenerie') ? 'text-blue-700' : '' }}">
                        {{ __('Secteurs spécifiques  ') }}

                    </a>
                    <p></p>
                    <a href="#"
                        class="lg:text-xl lg:mt-4 text-sm text-gray-900 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                        {{ __('Énergie') }}
                    </a>
                    <p></p>
                    <a href="#"
                        class="lg:text-xl lg:mt-4 text-sm text-gray-900 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                        {{ __('Transport') }}
                    </a>
                    <p></p>
                    <a href="#"
                        class="lg:text-xl lg:mt-4 text-sm text-gray-900 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                        {{ __('Santé') }}
                    </a>
                    <p></p>
                    <a href="#"
                        class="lg:text-xl lg:mt-4 text-sm text-gray-900 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                        {{ __('Défense et sécurité') }}
                    </a>
                    <p></p>
                    <a href="#"
                        class="lg:text-xl lg:mt-4 text-sm text-gray-900 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                        {{ __('Chimie') }}
                    </a>
                    <p></p>
                    <a href="#"
                        class="lg:text-xl lg:mt-4 text-sm text-gray-900 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                        {{ __('Voyage') }}
                    </a>
                    <p></p>
                    <a href="#"
                        class="lg:text-xl lg:mt-4 text-sm text-gray-900 hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent  {{ request()->is('#') ? 'text-blue-700' : '' }}">
                        {{ __('Sciences de la vie') }}
                    </a>
                    <p></p>



                </div>

            </div>
        </section>

    </main>


</html>
<!-- ====== Back To Top End ===== -->

<script>
    //  Pricing Table
    const setup = () => {
        return {
            isNavOpen: false,
            isDropdownOpen: false,

            billPlan: 'monthly',

            plans: [{
                    name: 'Starter',
                    price: {
                        monthly: 29,
                        annually: 29 * 12 - 199,
                    },
                    features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
                },
                {
                    name: 'Growth Plan',
                    price: {
                        monthly: 59,
                        annually: 59 * 12 - 100,
                    },
                    features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
                },
                {
                    name: 'Business',
                    price: {
                        monthly: 139,
                        annually: 139 * 12 - 100,
                    },
                    features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
                },
            ],
        };
    };
    toggleDropdown() {

        this.isDropdownOpens = false;
    },
</script>
<script defer src="js/bundle.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const enjeuxButton = document.getElementById('enjeuxButton');
        const enjeuxNav = document.getElementById('enjeuxNav');
        const closeEnjeuxNav = document.getElementById('closeEnjeuxNav');

        enjeuxButton.addEventListener('click', function() {
            enjeuxNav.style.display = 'block';
        });

        closeEnjeuxNav.addEventListener('click', function() {
            enjeuxNav.style.display = 'none';
        });
    });
    document.addEventListener('DOMContentLoaded', function() {
        const secteurButton = document.getElementById('secteurButton');
        const secteurNav = document.getElementById('secteurNav');
        const closeSecteurNav = document.getElementById('closeSecteurNav');

        secteurButton.addEventListener('click', function() {
            secteurNav.style.display = 'block';
        });

        closeSecteurNav.addEventListener('click', function() {
            secteurNav.style.display = 'none';
        });
    });
    document.addEventListener('DOMContentLoaded', function() {
        const sidenavButton = document.getElementById('sidenavButton');
        const sidenavNav = document.getElementById('sidenavNav');
        const closeSidenavButton = document.getElementById('closeSidenavButton');

        sidenavButton.addEventListener('click', function() {
            sidenavNav.style.display = 'block';
        });

        closeSidenavButton.addEventListener('click', function() {
            sidenavNav.style.display = 'none';
        });
    });
    document.addEventListener('DOMContentLoaded', function() {
        const expertisesButton = document.getElementById('expertisesButton');
        const expertisesNav = document.getElementById('expertisesNav');
        const closeExpertisesButton = document.getElementById('closeExpertisesButton');

        expertisesButton.addEventListener('click', function() {
            expertisesNav.style.display = 'block';
        });

        closeExpertisesButton.addEventListener('click', function() {
            expertisesNav.style.display = 'none';
        });
    });
    document.addEventListener('DOMContentLoaded', function() {
        const sidepartButton = document.getElementById('sidepartButton');
        const sidepartNav = document.getElementById('sidepartNav');
        const closeSidepartButton = document.getElementById('closeSidepartButton');

        sidepartButton.addEventListener('click', function() {
            sidepartNav.style.display = 'block';
        });

        closeSidepartButton.addEventListener('click', function() {
            sidepartNav.style.display = 'none';
        });
    });
    document.addEventListener('DOMContentLoaded', function() {
        const sidenavaButton = document.getElementById('sidenavaButton');
        const sidenavaNav = document.getElementById('sidenavaNav');
        const closeSidenavaButton = document.getElementById('closeSidenavaButton');

        sidenavaButton.addEventListener('click', function() {
            sidenavaNav.style.display = 'block';
        });

        closeSidenavaButton.addEventListener('click', function() {
            sidenavaNav.style.display = 'none';
        });

    });
</script>
<script>
    function toggleDropdown() {
        var dropdownMenu = document.getElementById("dropdown-menu");
        dropdownMenu.classList.toggle("hidden");
    }
</script>
</body>

</html>
