<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                 



                    <li><a href="/partenaire"
                        class="xl  text-black hover:text-blue-600 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-blue-600  {{ request()->is('partenaire') ? 'text-blue-700' : '' }}">{{ __('PARTENAIRES') }}
                    </a>
                </li>
                    <li><a href="/carriere"
                        class="xl  text-black hover:text-blue-600 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-blue-600  {{ request()->is('carriere') ? 'text-blue-700' : '' }}">{{ __('CARRIERES') }}
                    </a>
                </li>
                  
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
      
        <section class="py-10">
            <div class="h-9"></div>
            <!-- Page Title -->
            <div class="bg-gray-900 text-white py-6">
                <div class="container mx-auto flex flex-col lg:flex-row justify-between items-center px-4">
                    <h1 class="text-2xl font-bold mb-2 lg:mb-0">Formations</h1>
                    <nav class="text-sm">
                        <ol class="flex space-x-2">
                            <li><a href="/" class="hover:underline">Accueil</a></li>
                            <li class="text-gray-400">/ Formations</li>
                        </ol>
                    </nav>
                </div>
            </div>
            
            @foreach($formation->sortByDesc('created_at') as $value)
            <section class="py-10">
                <div class="container mx-auto px-4">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                        <div>
                            <h1 class="text-center text-3xl font-bold">{{$value->titre}}</h1>
                            <p class="mt-4 text-gray-700 line-clamp-4 text-justify">{!! $value->description !!}</p>
                            <h2 class="mt-6 text-xl font-semibold">Nos modules de la formation</h2>
                            @foreach($value->chapitres as $val)
                            <h4 class="py-2 font-semibold text-lg">{{$val->titre}}</h4>
                            @endforeach
                        </div>
                        <div>
                            <img src="{{ asset('assets/uploads/formation_images/'.$value->image_url) }}" class="w-full rounded-lg shadow-md" alt="">
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="py-10">
                <div class="container mx-auto px-4">
                    <h2 class="text-2xl font-bold text-center mb-6">NOS MODULES PAR FORMATION</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($value->chapitres as $chapitre)
                        <div class="bg-white p-6 rounded-lg shadow-md product_data  ">
                            <img src="{{ asset('assets/uploads/chapitre_images/'.$chapitre->image_url) }}" class="w-full rounded-lg mb-4" alt="">
                            <h3 class="text-lg font-semibold text-center">{{$chapitre->titre}}</h3>
                            <h5 class="text-center mt-2 text-gray-800">Montant: <strong>{{$chapitre->montant}}</strong> XOF</h5>
                            <p class="mt-2 text-gray-600 line-clamp-3">{!! $value->description !!}</p>
                            <input type="hidden" value="{{ $value->id }}" class="formation_id">
                            <input type="hidden" value="{{ $chapitre->id }}" class="chapitre_id">
                            <input type="hidden" value="{{ $chapitre->montant }}" class="prix">
                            <input type="hidden" value="1" class="qty-input">
                            <button class="mt-4 w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-600 transition addToCartBtn ">Ajouter au panier</button>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
            @endforeach
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



<!-- ====== Back To Top End ===== -->

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
  @if(session('status'))
      <script>
          swal("{{ session('status') }}");
      </script>
  @endif

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script><script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
  <script>
      $(document).ready(function () {
          loadcart();

          $('.addToCartBtn').click( function (e) {
              e.preventDefault();

                  var product_id= $(this).closest('.product_data').find('.chapitre_id').val();
                  var product_qty= $(this).closest('.product_data').find('.qty-input').val();
                  var prixe= $(this).closest('.product_data').find('.formation_id').val();
                  var montans= $(this).closest('.product_data').find('.prix').val();
                  (product_id);
                  console.log(product_qty);
                  console.log(prixe);
                  console.log(montans);
                
                  $.ajaxSetup({
                      headers:{
                          'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                      }
                  });
                  $.ajax({
                      method:"Post",
                      url:"/add-to-cart",
                      data:{
                          'chapitre_id':product_id,
                          'quantite':product_qty,
                          'formation_id':prixe,
                          'montant':montans,
                      },

                      success:function(response){
                          console.log(response);
                          swal(response.status);
                          loadcart();
                          //window.location.reload();

                      }

                  });

          });
          function loadcart()
          {
              $.ajax({
                  method:"GET",
                  url:"/load-cart-data",
                  success:function(response){
                       $('.cart-count').html('');
                       $('.cart-count').html(response.count);
                      //alert(response.count)
                  }

              });
          };
          $(document).on('click','.delete-cart-item', function (e) {
              e.preventDefault();

                  var prod_id= $(this).closest('.product_data').find('.prod_id').val();

                  //alert(prod_id)
                  $.ajaxSetup({
                      headers:{
                          'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                      }
                  });
                  $.ajax({
                      method:"Post",
                      url:"/delete-cart-item",
                      data:{
                          'article_id':prod_id,

                      },
                      success:function(response){
                          //window.location.reload();
                          setTimeout(function() {
                              window.location.reload();
                          }, 2000);
                         loadcart();
                         // $('.cartitems').load(location.href +" .cartitems");
                          swal("",response.status,"success")
                      }

                  });



          });

          $(document).on('click','.changeQuantity', function (e) {
              e.preventDefault();

                  var product_id= $(this).closest('.product_data').find('.prod_id').val();
                  var qty= $(this).closest('.product_data').find('.qty-input').val();
                 // alert(product_id)
                 // alert(qty)
                  data={
                      'article_id':product_id,
                      'quantite':qty,

                  },

                  $.ajaxSetup({
                      headers:{
                          'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                      }
                  });
                  $.ajax({
                      method:"Post",
                      url:"/update-cart",
                      data:data,
                      success:function(response){
                          loadcart();

                           swal("",response.status,"success")
                          //window.location.reload();
                         //$('.cartitems').load(location.href +" .cartitems");
                      }

                  });



          });

           {{--  function commandes (e,transaction) {
              e.preventDefault();


                      var adresses= $(this).closest('.product_data').find('.adresse').val();
                      var phones= $(this).closest('.product_data').find('.phone').val();



                      $.ajaxSetup({
                          headers:{
                              'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                          }
                      });
                      $.ajax({
                          method:"Post",
                          url:"/placer-commande",
                          data:{
                              'transaction_id':transaction,
                              'adresse':adresses,
                              'phone':phones,

                          },
                          success:function(response){
                              //window.location.reload();

                             //loadcart();
                             // $('.cartitems').load(location.href +" .cartitems");
                              swal("",response.status,"success")
                          }

                      });






          };  --}}




      });


  </script>
<script defer src="js/bundle.js"></script>


</body>

</html>
