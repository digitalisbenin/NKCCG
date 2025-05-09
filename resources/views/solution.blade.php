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
        <section class=" bg-[url('/images/slide-2.jpg')]  lg:bg-cover mt-16 ">
            <!-- Bg Shape -->
            <div class="tc  w-full   ">

                <div class="  lg:ml-6 mx-4 lg:mt-52 lg:mr-6 lg:px-20 lg:h-96">
                    <h1 class="lg:text-4xl text-2xl font-serif text-left lg:ml-9 mt-44  text-white bg-black px-4">
                        {{ __('NKCCG Store : accélérez votre transformation digitale et améliorez vos performances') }}<br>
                        <span
                            class="text-2xl font-bold">{{ __('Accédez aux solutions digitales développées par le réseau NKCCG et ses partenaires') }}</span>
                    </h1>

                    <div class="lg:ml-9 mt-2 lg:mt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-9 h- text-white bg-black">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z" />
                        </svg>

                    </div>


                </div>

            </div>

        </section>
        <section class="bg-gray-200 lg:h-96">
            <div class="lg:h-12 h-6"></div>
            <div class="lg:mx-64 mx-6 ">
                <p class="text-black text-xl  lg:mr-24">
                    {{ __('Avec des solutions digitales développées par l’ensemble du réseau NKCCG et ses partenaires, la plateforme NKCCG Store permet aux entreprises d’accélérer leur transformation digitale et d’améliorer leur performance. Les solutions digitales en ligne s’appuient sur des technologies innovantes telles que la data, l’automatisation, le no code ou encore l’Intelligence Artificielle (IA).') }}

                </p>
                <p class="text-black text-xl mt-6 lg:mr-24">
                    {{ __('La plateforme NKCCG Store permet d’accéder simplement à des solutions digitales adaptées aux enjeux majeurs rencontrés par les entreprises.') }}

                </p>
                <a href="/#" class="flex  gi lg:mt-9  w-64 text-white hover:bg-blue-700 block bg-orange-700">
                    <span class="ml-9">{{ __('Découvrez le NKCCG Store') }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4 mt-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </div>
            <div class="lg:h-0 h-6"></div>
        </section>

        {{--  <section class=" bg-yellow-500">
            <!-- Bg Shape -->
            <div class="mx-6 lg:mx-80">
                <div class="lg:h-24 h-9"></div>
                <h1 class="lg:text-3xl text-xl font-serif text-left lg:ml-9  text-black">
                    {{ __('NKCCG Store : des solutions combinant technologie et expertise métier') }}
                </h1>
                <p class="text-black lg:ml-9 mt-6 lg:mr-24 text-lg">
                    {{ __('Le NKCCG Store regroupe un ensemble de solutions digitales combinant la technologie, les données et l’expertise NKCCG à destination de différents métiers allant des fonctions juridiques aux fonctions IT.') }}

                </p>
                <p class="text-black lg:ml-9 mt-6 lg:mr-24 text-lg">
                    {{ __('Ces produits sont développés par NKCCG en France et au sein de son réseau international, ou co-développés avec des partenaires. Avec cette plateforme, NKCCG accélère votre dynamique d’innovation afin d’améliorer vos performances opérationnelles.') }}

                </p>
                <div class="relative overflow-hidden  stop-scroll  lg:ml-9 mt-9">
                    <div id="glide2" class="glide">
                        <div class="glide__track" data-glide-el="track">
                            <div class="glide__slides">
                                <video class=" lg:w-full" autoplay loop muted>
                                    <source
                                        src="https://metamorphosegroup.com/wp-content/uploads/2023/11/Spot-publicitaire-Metamorphose-Final.mp4"
                                        type="video/mp4">
                                    <!-- Ajoutez d'autres sources pour la compatibilité avec différents navigateurs -->
                                    Votre navigateur ne prend pas en charge la balise vidéo.
                                </video>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="h-24"></div>
            </div>
        </section>  --}}
        <section class=" ">
            <!-- Bg Shape -->
            <div class="mx-6 lg:mx-80">
                <div class="lg:h-24 h-9"></div>
                <h1 class="lg:text-4xl text-2xl font-serif text-left lg:ml-9  text-black">
                    {{ __('Des applications digitales dédiées à vos enjeux') }}
                </h1>

                <img src="images/fr-france-67.png" alt="marketing-digital-service-création-de-site-web"
                    class="lg:h-96 mt-6 lg:mx-9">
                <p class="text-black lg:ml-9 mt-12 lg:mr-24 text-lg">
                    {{ __('Les solutions digitales proposées par NKCCG bénéficient des derniers standards en matière de sécurité. Indépendance, sécurisation des données, juridique, sécurité… : près de dix critères sont pris en compte et sont évalués dès la phase de conception du produit.') }}
                </p>
                <p class="text-black lg:ml-9 mt-6 lg:mr-24 text-lg">
                    {{ __('Leur développement s’appuie sur l’expertise transverse de NKCCG dans le domaine de la digitalisation et sur la connaissance approfondie des défis auxquels les organisations font face :') }}
                </p>
                <ul class="  text-black list-inside mt-16 lg:ml-9 text-lg">
                    <li class="flex items-center">
                        <svg class="w-3.5 h-3.5 me-2 text-orange-700 flex-shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        {{ __('la cybersécurité ;') }}
                    </li>
                    <li class="flex items-center mt-6">
                        <svg class="w-3.5 h-3.5 me-2 text-orange-700  flex-shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        {{ __('les problématiques environnementales, sociales et de gouvernance (ESG) ;') }}
                    </li>
                    <li class="flex items-center mt-6">
                        <svg class="w-3.5 h-3.5 me-2 text-orange-700 flex-shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        {{ __('les enjeux de risques et de conformité ;') }}
                    </li>
                    <li class="flex items-center mt-6">
                        <svg class="w-3.5 h-3.5 me-2 text-orange-700 flex-shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        {{ __('les services de litiges et investigations (Forensics) ;') }}
                    </li>
                    <li class="flex items-center mt-6">
                        <svg class="w-3.5 h-3.5 me-2 text-orange-700 flex-shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        {{ __('la Process Intelligence ;') }}
                    </li>
                    <li class="flex items-center mt-6">
                        <svg class="w-3.5 h-3.5 me-2 text-orange-700 flex-shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        {{ __('les enjeux liés aux approvisionnements et au management de la performance.') }}
                    </li>
                </ul>
                <p class="text-black lg:ml-9 mt-6 lg:mr-24 text-lg">
                    {{ __('NKCCG est également en mesure de développer ou co-développer de nouveaux produits adaptés à vos besoins.') }}


                </p>
                <div class="lg:h-24 h-9"></div>
            </div>
        </section>
        <section class="bg-gray-200 ">
            <!-- Bg Shape -->
            <div class="mx-6 lg:mx-80">
                <div class="lg:h-24 h-9"></div>
                <h1 class="lg:text-4xl text-2xl font-serif text-left lg:ml-9  text-black">
                    {{ __('Vous avez choisi la solution digitale qu’il vous faut : comment NKCCG vous accompagne ?') }}
                </h1>
                <p class="text-black lg:ml-9 mt-12 lg:mr-24 text-lg">
                    {{ __('Pour proposer des solutions adaptées à vos enjeux, les produits disponibles sur NKCCG Store ont été testés en avant-première par différents early adopters qui est et sera appliquée pour chaque nouvelle solution ou fonctionnalité.') }}

                </p>
                <p class="text-black lg:ml-9 mt-6 lg:mr-24 text-lg">
                    {{ __('Tous les produits disposent de supports et équipes de service client dédiés afin de vous accompagner au quotidien dans la formation, l’utilisation et l’implémentation des solutions digitales au sein de vos systèmes.') }}
                </p>
                <img src="images/C1.jpg" alt="marketing-digital-service-création-de-site-web" class=" mt-6 lg:mx-9">


                <div class="lg:h-24 h-9"></div>
            </div>
        </section>

        <section class=" bg-yellow-500">
            <!-- Bg Shape -->
            <div class="mx-6 lg:mx-80">
                <div class="lg:h-24 h-9"></div>
                <h1 class="lg:text-3xl text-2xl font-serif text-left lg:ml-9  text-black">
                    {{ __('Réinventez votre transformation digitale avec NKCCG') }}
                </h1>
                <p class="text-black lg:ml-9 mt-6 lg:mr-24 text-lg">
                    {{ __('Grâce à une plateforme innovante, NKCCG élargit son offre pour simplifier l’accès aux meilleures solutions digitales tout en bénéficiant de l’expertise de ses professionnels.') }}

                </p>
                <p class="text-black lg:ml-9 mt-6 lg:mr-24 text-lg">
                    {{ __('Nos solutions, faciles à utiliser et rapides à déployer, répondent à deux priorités stratégiques : instaurer la confiance et réussir des transformations durables.') }}
                    {{--  <span class="font-bold">
                        {{ __('créer de la confiance et mener des transformations pour des résultats durables.') }}</span>  --}}
                </p>

                <div class="lg:h-24 h-9"></div>
            </div>
        </section>
        <section class="bg-orange-600">
            <!-- Bg Shape -->
            <div class="flex lg:h-44 lg:mx-64 mx-6">
                <img src="images/go-there-white.webp" class="h-24 mt-6">

                <div class="ml-6">

                    <p class="text-white lg:ml-4 mt-6 ">
                        NKCCG Store
                    </p>
                    <a href="/contact" class="flex gi lg:mt-4 lg:ml-4  text-white lg:text-3xl text-xl  lg:block">
                        <span class="">
                            {{ __('Accélérez votre transformation digitale et améliorez votre performances') }}</span>

                    </a>
                </div>

            </div>
        </section>
        <section class="bg-gray-200 lg:h-96">
            <div class="h-9"></div>
            <div class=" mb-6  shadow-solid-13  ">
                <h2 class="fk vj zp   pr text-xl kk wm qb mx-6 lg:mx-24 ">{{ __('Pour aller plus loin') }}
                </h2>
                <div class="w-full ">

                    <div class="lg:flex lg:mx-24 mx-6 justify-between ">
                        <div class=" ">
                            <img src="images/groupe-afro-americains-travaillant-ensemble_1303-8983.webp"
                                alt="marketing-digital-service-création-de-site-web" class="h-44 w-80">

                            <p class=" text-sm text-center lg:text-lg   mt-4 text-gray-600">
                                [Outil] Source-to-Secure Optimizer
                            </p>

                        </div>
                        <div class=" ">
                            <img src="images/groupe-afro-americains-travaillant-ensemble_1303-8983.webp"
                                alt="marketing-digital-service-création-de-site-web" class="h-44 w-80">

                            <p class=" text-sm text-center lg:text-lg   mt-4 text-gray-600">
                                [Outil] Connected Risk Engine Cyber
                            </p>

                        </div>
                        <div class=" ">
                            <img src="images/groupe-afro-americains-travaillant-ensemble_1303-8983.webp"
                                alt="marketing-digital-service-création-de-site-web" class="h-44 w-80">

                            <p class=" text-sm text-center lg:text-lg   mt-4 text-gray-600">
                                [Outil] FEC 4.0
                            </p>

                        </div>
                        <div class="">
                            <div class="flex ">
                                <img src="images/African_workplace.png"
                                    alt="marketing-digital-service-création-de-site-web" class=" h-44 w-80 ">
                            </div>

                            <p class=" text-sm text-center lg:text-lg  mt-4 text-gray-600">
                                [Outil] Carbon Cockpit
                            </p>


                        </div>




                    </div>
                </div>
            </div>

        </section>
        <section class="mt-2 bg-black  flex items-center justify-center">
            <div class="h-16 flex">
                <h1 class="lg:text-3xl text-xl font-serif text-white mt-4">
                    {{ __('Suivez-nous !') }}
                </h1>
                <img src="images/follow_linkedin.webp" class="lg:h-9 lg:w-9 w-6 h-6 ml-6 mt-4">
                <img src="images/follow_twitter.png" class="lg:h-9 lg:w-9 w-6 h-6 ml-2 mt-4">
                <img src="images/follow_youtube.webp" class="lg:h-9 lg:w-9 w-6 h-6 ml-2 mt-4">
                <img src="images/follow_instagram.webp" class="lg:h-9 lg:w-9 w-6 h-6 ml-2 mt-4">
            </div>
        </section>
        <section class=" lg:h-64 ">
            <div class="h-16 bg-yellow-600">
                <h1 class="text-3xl font-serif text-black mx-16">
                    {{ __('Contactez-nous') }}
                </h1>

            </div>
            <div class="flex items-center">
                <div class="flex lg:mx-16 mt-6">
                    <div class="flex ">
                        <img src="images/fr-france-800xage.jpg" alt="marketing-digital-service-création-de-site-web"
                            class=" ">
                    </div>
                    <div class=" ">
                        <h1 class="text-2xl mx-6 font-serif text-black">{{ __('Nom') }}</h1>
                        <p class="mx-6 text-sm  lg:text-sm  mt-2 text-gray-600">
                            {{ __('Post') }}
                        </p>
                        <h1 class="text-xl mx-6 font-bold text-black">{{ __('Email') }}</h1>
                    </div>

                </div>

            </div>
        </section>


    </main>
    <!-- ===== Footer Start ===== -->
    <footer class=" bg-gray-700 lg:h-96">

        <!-- Footer Top -->
        <h1 class="text-xl ml-16 text-white ">
            NKC CONSULTING GROUP
        </h1>
        <div class="bb ze ki xn 2xl:ud-px-0 mt-6">
            <nav>
                <ul class="tc _o sf yo cg ep">
                    <li><a href="/"
                            class=" text-white xl hover:text-orange-500  {{ request()->is('/') ? 'text-blue-700' : '' }}  ">
                            {{ __('Enjeux') }}</a>
                    </li>

                    <li class="c i" x-data="{ dropdown: false }">
                        <a href="/solutions-numeriques"
                            class="tc wf yf bg  xl text-white hover:text-orange-500 {{ request()->is('solutions-numeriques') ? 'text-blue-700' : '' }} ">
                            {{ __('Secteur activité') }}
                        </a>


                        <!-- Dropdown End -->
                    </li>
                    <li><a href="/a-propos"
                            class="  xl text-white hover:text-orange-500 {{ request()->is('a-propos') ? 'text-blue-700' : '' }} ">{{ __('Expertises') }}
                        </a></li>
                    <li><a href="/contact"
                            class="xl  text-white hover:text-orange-500 {{ request()->is('contact') ? 'text-blue-700' : '' }}">{{ __('Solutions digitales') }}
                        </a>
                    </li>
                    <li><a href="/a-propos"
                            class=" xl text-white hover:text-orange-500 {{ request()->is('a-propos') ? 'text-blue-700' : '' }} ">
                            {{ __('Qui sommes-nous ?') }}</a></li>

                    <li><a href="/#"
                            class="xl text-white hover:text-orange-500 {{ request()->is('contact') ? 'text-blue-700' : '' }}">
                            {{ __('Partenaires') }}

                        </a>
                    </li>
                    <li><a href="/contact"
                            class="xl text-white hover:text-orange-500 {{ request()->is('contact') ? 'text-blue-700' : '' }}">{{ __('Carrières') }}
                        </a>
                    </li>

                    <li><a href="/#"
                            class="xl text-white hover:text-orange-500 {{ request()->is('contact') ? 'text-blue-700' : '' }}">{{ __('Contact') }}

                        </a>
                    </li>
                    <li><a href="https://web53.lws-hosting.com:2096/cpsess9121598487/3rdparty/roundcube/?_task=mail&_mbox=INBOX" target="_blank"
                        class="xl text-white hover:text-orange-500 {{ request()->is('contact') ? 'text-blue-700' : '' }}">{{ __('Webmail') }}

                    </a>
                </li>
                </ul>
            </nav>
        </div>
        <div class="   mt-2 bg-white lg:mx-16 border border-line"></div>
        <p class="text-white  mt-6 lg:mx-48  text-sm mx-6">
            {{ __('© 2023 - 2024 NKCCG. Tous droits réservés NKCCG fait référence au réseau NKCCG et/ou à une ou plusieurs de ses entités membres, dont chacune constitue une entité juridique distincte. Pour plus information, rendez-vous sur le site www.nkccg.com') }}
        </p>
        <div class="lg:flex lg:mx-48 lg:mt-9 mt-4 mx-6">
            <h1 class="text-sm   text-white ">
                {{ __('Nos contacts') }}
            </h1>
            <h1 class="text-sm   text-white lg:ml-6 ">
                {{ __('(+229) 01 97 97 56 72 // (+229) 01 41 48 28 28') }}
            </h1>
            <h1 class="text-sm   text-white lg:ml-6 ">
                {{ __('nkcconsultinggroup@gmail.com') }}
            </h1>
            <h1 class="text-sm   text-white lg:ml-6 ">
                {{ __('contact@nkccg.com') }}
            </h1>
        </div>
        <div class="lg:flex lg:mx-48 lg:mt-9 mt-4 mx-6">
            <h1 class="text-sm   text-white ">
                {{ __('Informations légales') }}
            </h1>
            <h1 class="text-sm   text-white lg:ml-6 ">
                {{ __('Informations sur les cookies') }}
            </h1>
            <h1 class="text-sm   text-white lg:ml-6 ">
                {{ __('Paramétrer les cookies') }}
            </h1>

        </div>
        </div>

    </footer>
    <!-- Footer Top -->


    <!-- Footer Bottom -->

    <!-- ===== Footer End ===== -->

    <!-- ====== Back To Top Start ===== -->
    <button class="xc wf xf ie ld vg sr gh tr g sa ta _a bg-orange-500 mb-9 mr-6 lg:mr-0 "
        @click="window.scrollTo({top: 0, behavior: 'smooth'})"
        @scroll.window="scrollTop = (window.pageYOffset > 50) ? true : false" :class="{ 'uc': scrollTop }">
        <svg class="uh se qd" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path
                d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
        </svg>
    </button>


</html>
<!-- ====== Back To Top End ===== -->

<script>
    //  Pricing Table
    const setup = () => {
        return {
            isNavOpen: false,
            showModalModele: false,

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
    toggleModalModele() {
        this.showModalModele = !this.showModalModele;
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
</body>

</html>
