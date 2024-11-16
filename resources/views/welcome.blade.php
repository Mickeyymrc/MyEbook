<!DOCTYPE html>
   <html lang="en">
   <head>

      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== FAVICON ===============-->
      <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">

      <!--=============== SWIPER CSS ===============-->
      <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">


      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

      <title>Responsive book website - Bedimcode</title>
   </head>
   <body>
      <!--==================== HEADER ====================-->
      <header class="header" id="header">
        @include('navbar')
      </header>

      <!--==================== SEARCH ====================-->
      <div class="search" id="search-content">
         <form action="" class="search__form">
            <i class="ri-search-line search__icon"></i>
            <input type="search" placeholder="What are you looking for?" class="search__input">
         </form>

         <i class="ri-close-line search__close" id="search-close"></i>
      </div>

      <!--==================== LOGIN ====================-->
      {{--  <div class="login grid" id="login-content">
        <form action="{{ route('login') }}" method="POST" class="login__form grid">
            @csrf <!-- Ajoutez le jeton CSRF pour la sécurité -->

            <h3 class="login__title">Log In</h3>

            <div class="login__group grid">
                <div>
                    <label for="login-email" class="login__label">Email</label>
                    <input type="email" placeholder="Write your email" id="login-email" class="login__input" name="email">
                </div>

                <div>
                    <label for="login-pass" class="login__label">Password</label>
                    <input type="password" placeholder="Enter your password" id="login-pass" class="login__input" name="password">
                </div>
            </div>

            <div>
                <span class="login__signup">
                    You do not have an account? <a href="#">Sign up</a>
                </span>

                <a href="#" class="login__forgot">
                    You forgot your password
                </a>

                <button type="submit" class="login__button button">Log In</button>
            </div>
        </form>
                  <i class="ri-close-line login__close" id="login-close"></i>
    </div>  --}}



      <!--==================== MAIN ====================-->
      <main class="main">

      </main>
         <!--==================== HOME ====================-->
         <section class="home section" id="home">
            <div class="home__container container grid">
               <div class="home__data">
                  <h1 class="home__title">
                    Parcourir & <br>
                    Sélectionner des livres électroniques
                  </h1>

                  <p class="home__description">
                    Trouvez les meilleurs e-books de votre favori
                    écrivains, explorez des centaines de livres avec tous les
                    catégories possibles, profitez de
                    50% de réduction et bien plus encore.
                  </p>


               </div>

               <div class="home__images">
                  <div class="home__swiper swiper">
                     <div class="swiper-wrapper">
                        <article class="home__article swiper-slide">
                            <img src="{{asset('img/home-book-1.png')}}" alt="image" class="home__img">
                        </article>

                        <article class="home__article swiper-slide">
                            <img src="{{asset('img/home-book-2.png')}}" alt="image" class="home__img">
                        </article>

                        <article class="home__article swiper-slide">
                            <img src="{{asset('img/home-book-3.png')}}" alt="image" class="home__img">
                        </article>

                        <article class="home__article swiper-slide">
                            <img src="{{asset('img/home-book-4.png')}}" alt="image" class="home__img">
                        </article>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <!--==================== SERVICES ====================-->
         <section class="services section">
            <div class="services__container container grid">
               <article class="services__card">
                  <i class="ri-truck-line"></i>
                  <h3 class="services__title">Livraison gratuite</h3>
                  <p class="services__description">Commandez plus de 100 $</p>
               </article>

               <article class="services__card">
                  <i class="ri-lock-line"></i>
                  <h3 class="services__title">Paiement sécurisé</h3>
                  <p class="services__description">100% Paiement sécurisé</p>
               </article>

               <article class="services__card">
                  <i class="ri-customer-service-2-line"></i>
                  <h3 class="services__title">24/7 Support</h3>
                  <p class="services__description">Appelez-nous à tout moment</p>
               </article>
            </div>
         </section>

         <!--==================== FEATURED ====================-->
         <section class="featured section" id="featured">
            <h2 class="section__title">
                               Livres en vedette

            </h2>
            <div class="featured__container container">
               <div class="featured__swiper swiper">
                  <div class="swiper-wrapper">
                     <article class="featured__card swiper-slide">
                        <img src="{{asset('img/book-1.png')}}" alt="image" class="featured__img">
                        <h2 class="featured__title">Livre en vedette</h2>
                        <div class="featured__prices">
                           <span class="featured__discount">$11.99</span>
                           <span class="featured__price">$19.99</span>
                        </div>


                        <button class="button">Ajouter au panier</button>
                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>


                        </div>
                     </article>

                     <article class="featured__card swiper-slide">
                        <img src="{{asset('img/book-2.png')}}" alt="image" class="featured__img">
                        <h2 class="featured__title">Livre en vedette</h2>
                        <div class="featured__prices">
                           <span class="featured__discount">$11.99</span>
                           <span class="featured__price">$19.99</span>
                        </div>


                        <button class="button">Ajouter au panier</button>
                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>


                        </div>
                     </article>

                     <article class="featured__card swiper-slide">
                        <img src="{{asset('img/book-3.png')}}" alt="image" class="featured__img">
                        <h2 class="featured__title">Livre en vedette</h2>
                        <div class="featured__prices">
                           <span class="featured__discount">$11.99</span>
                           <span class="featured__price">$19.99</span>
                        </div>


                        <button class="button">Ajouter au panier</button>
                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>


                        </div>
                     </article>

                     <article class="featured__card swiper-slide">
                        <img src="{{asset('img/book-4.png')}}" alt="image" class="featured__img">
                        <h2 class="featured__title">Livre en vedette</h2>
                        <div class="featured__prices">
                           <span class="featured__discount">$11.99</span>
                           <span class="featured__price">$19.99</span>
                        </div>


                        <button class="button">Ajouter au panier</button>
                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>


                        </div>
                     </article>

                     <article class="featured__card swiper-slide">
                        <img src="{{asset('img/book-5.png')}}" alt="image" class="featured__img">

                        <h2 class="featured__title">Livre en vedette</h2>
                        <div class="featured__prices">
                           <span class="featured__discount">$11.99</span>
                           <span class="featured__price">$19.99</span>
                        </div>


                        <button class="button">Ajouter au panier</button>
                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>


                        </div>
                     </article>

                     <article class="featured__card swiper-slide">
                        <img src="{{asset('img/book-6.png')}}" alt="image" class="featured__img">
                        <h2 class="featured__title">FLivre en vedetteeatured Book</h2>
                        <div class="featured__prices">
                           <span class="featured__discount">$11.99</span>
                           <span class="featured__price">$19.99</span>
                        </div>


                        <button class="button">Ajouter au panier</button>
                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>


                        </div>
                     </article>

                     <article class="featured__card swiper-slide">
                        <img src="{{asset('img/book-7.png')}}" alt="image" class="featured__img">
                        <h2 class="featured__title">Livre en vedette</h2>
                        <div class="featured__prices">
                           <span class="featured__discount">$11.99</span>
                           <span class="featured__price">$19.99</span>
                        </div>


                        <button class="button">Ajouter au panier</button>
                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>


                        </div>
                     </article>

                     <article class="featured__card swiper-slide">
                        <img src="{{asset('img/book-8.png')}}" alt="image" class="featured__img">
                        <h2 class="featured__title">Livre en vedette</h2>
                        <div class="featured__prices">
                           <span class="featured__discount">$11.99</span>
                           <span class="featured__price">$19.99</span>
                        </div>


                        <button class="button">Ajouter au panier</button>
                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>


                        </div>
                     </article>

                     <article class="featured__card swiper-slide">
                        <img src="{{asset('img/book-9.png')}}" alt="image" class="featured__img">
                        <h2 class="featured__title">Livre en vedette</h2>
                        <div class="featured__prices">
                           <span class="featured__discount">$11.99</span>
                           <span class="featured__price">$19.99</span>
                        </div>


                        <button class="button">Ajouter au panier</button>
                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>


                        </div>
                     </article>

                     <article class="featured__card swiper-slide">
                        <img src="{{asset('img/book-10.png')}}" alt="image" class="featured__img">
                        <h2 class="featured__title">Livre en vedette/h2>
                        <div class="featured__prices">
                           <span class="featured__discount">$11.99</span>
                           <span class="featured__price">$19.99</span>
                        </div>


                        <button class="button">Ajouter au panier</button>
                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>


                        </div>
                     </article>
                  </div>

                  <div class="swiper-button-prev">
                     <i class="ri-arrow-left-s-line"></i>
                  </div>

                  <div class="swiper-button-next">
                     <i class="ri-arrow-right-s-line"></i>
                  </div>
               </div>
            </div>
         </section>

         <!--==================== DISCOUNT ====================-->
         <section class="discount section" id="discount">
            <div class="discount__container container grid">
               <div class="discount__data">
                  <h2 class="discount__title section__title">
                  Jusqu’à 50% de réduction
                  </h2>

                  <p class="discount__description">
                    Profitez des jours de réduction que nous
                    avons pour vous, achetez des livres de votre
                    écrivains, plus vous achetez, plus les
                    réductions augmenteront.
                  </p>


               </div>

               <div class="discount__images">
                <img src="{{asset('img/discount-book-1.png')}}" alt="image" class="discount__img-1">
                <img src="{{asset('img/discount-book-2.png')}}" alt="image" class="discount__img-2">
               </div>
            </div>
         </section>

         <!--==================== NEW BOOKS ====================-->
         <section class="new section" id="new">
            <h2 class="section__title">
                Nouveau livre
            </h2>

            <div class="new__container container">
               <div class="new__swiper swiper">
                  <div class="swiper-wrapper">
                     <a href="#" class="new__card swiper-slide">
                        <img src="{{asset('img/book-1.png')}}" alt="image" class="new__image">

                        <div>
                           <h2 class="new__title">Nouveau livre</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card swiper-slide">
                        <img src="{{asset('img/book-2.png')}}" alt="image" class="new__image">
                        <div>
                           <h2 class="new__title">Nouveau livre</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card swiper-slide">
                        <img src="{{asset('img/book-3.png')}}" alt="image" class="new__image">


                        <div>
                           <h2 class="new__title">Nouveau livre</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card swiper-slide">
                        <img src="{{asset('img/book-4.png')}}" alt="image" class="new__image">
                        <div>
                           <h2 class="new__title">Nouveau livre</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card swiper-slide">
                        <img src="{{asset('img/book-5.png')}}" alt="image" class="new__image">
                        <div>
                           <h2 class="new__title">Nouveau livre</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card swiper-slide">
                        <img src="{{asset('img/book-6.png')}}" alt="image" class="new__image">
                        <div>
                           <h2 class="new__title">Nouveau livre</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card swiper-slide">
                        <img src="{{asset('img/book-7.png')}}" alt="image" class="new__image">
                        <div>
                           <h2 class="new__title">Nouveau livre</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card">
                        <img src="{{asset('img/book-8.png')}}" alt="image" class="new__image">


                        <div>
                           <h2 class="new__title">Nouveau livre</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card">
                        <img src="{{asset('img/book-9.png')}}" alt="image" class="new__image">
                        <div>
                           <h2 class="new__title">Nouveau livre</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card">
                        <img src="{{asset('img/book-10.png')}}" alt="image" class="new__image">
                        <div>
                           <h2 class="new__title">Nouveau livre</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>

               <div class="new__swiper swiper">
                  <div class="swiper-wrapper">
                     <a href="#" class="new__card swiper-slide">
                        <img src="{{asset('img/book-10.png')}}" alt="image" class="new__image">

                        <div>
                           <h2 class="new__title">Nouveau livre</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card swiper-slide">
                        <img src="{{asset('img/book-9.png')}}" alt="image" class="new__image">
                        <div>
                           <h2 class="new__title">Nouveau livre</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card swiper-slide">
                        <img src="{{asset('img/book-8.png')}}" alt="image" class="new__image">
                        <div>
                           <h2 class="new__title">Nouveau livre</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card swiper-slide">
                        <img src="{{asset('img/book-7.png')}}" alt="image" class="new__image">
                        <div>
                           <h2 class="new__title">Nouveau livre</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card swiper-slide">
                        <img src="{{asset('img/book-6.png')}}" alt="image" class="new__image">
                        <div>
                           <h2 class="new__title">Nouveau livre</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card swiper-slide">
                        <img src="{{asset('img/book-5.png')}}" alt="image" class="new__image">
                        <div>
                           <h2 class="new__title">Nouveau livre</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card swiper-slide">
                        <img src="{{asset('img/book-4.png')}}" alt="image" class="new__image">
                        <div>
                           <h2 class="new__title">Nouveau livre</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card">
                        <img src="{{asset('img/book-3.png')}}" alt="image" class="new__image">
                        <div>
                           <h2 class="new__title">Nouveau livre</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card">
                        <img src="{{asset('img/book-2.png')}}" alt="image" class="new__image">
                        <div>
                           <h2 class="new__title">Nouveau livre</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card">
                        <img src="{{asset('img/book-1.png')}}" alt="image" class="new__image">
                        <div>
                           <h2 class="new__title">Nouveau livre</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </section>

         <!--==================== JOIN ====================-->
         <section class="join section">
           <div class="join__container">
            <img src="{{asset('img/join-bg.jpg')}}" alt="image" class="join__bg">
            <div class="join__data contaner grid">
               <h2 class="join__title section__title">
                Abonnez-vous pour recevoir <br>
                Les dernières mises à jour
               </h2>

               <form action="" class="join__form">
                <button  class="button">


                <a href="{{  ('register') }}" > S’inscrire</a>




               </button>

               </form>
            </div>
           </div>
         </section>

         <!--==================== TESTIMONIAL ====================-->
         <section class="testimonial section" id="testimonial">
            <h2 class="section__title">
               Avis des clients
            </h2>
            <div class="testimonial__container container">
               <div class="testimonial__swiper swiper">
                  <div class="swiper-wrapper">
                     <article class="testimonial__card swiper-slide">
                        <img src="{{asset('img/testimonial-perfil-1.png')}}" alt="image" class="testimonial__img">
                        <h2 class="testimonial__title">Rial Loz</h2>
                        <p class="testimonial__description">
                            Le meilleur site pour acheter des livres, l’achat
                            est très facile à faire et offre de grandes remises.
                        </p>

                        <div class="testimonial__stars">
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-half-fill"></i>

                        </div>
                     </article>

                     <article class="testimonial__card swiper-slide">
                        <img src="{{asset('img/testimonial-perfil-2.png')}}" alt="image" class="testimonial__img">

                        <h2 class="testimonial__title">Rial Loz</h2>
                        <p class="testimonial__description">
                            Le meilleur site pour acheter des livres, l’achat
                            est très facile à faire et offre de grandes remises.
                        </p>

                        <div class="testimonial__stars">
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-half-fill"></i>

                        </div>
                     </article>

                     <article class="testimonial__card swiper-slide">
                        <img src="{{asset('img/testimonial-perfil-3.png')}}" alt="image" class="testimonial__img">
                        <h2 class="testimonial__title">Rial Loz</h2>
                        <p class="testimonial__description">
                            Le meilleur site pour acheter des livres, l’achat
                            est très facile à faire et offre de grandes remises.
                        </p>

                        <div class="testimonial__stars">
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-half-fill"></i>

                        </div>
                     </article>

                     <article class="testimonial__card swiper-slide">
                        <img src="{{asset('img/testimonial-perfil-4.png')}}" alt="image" class="testimonial__img">
                        <h2 class="testimonial__title">Rial Loz</h2>
                        <p class="testimonial__description">
                            Le meilleur site pour acheter des livres, l’achat
                            est très facile à faire et offre de grandes remises.
                        </p>

                        <div class="testimonial__stars">
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-half-fill"></i>

                        </div>
                     </article>
                  </div>
               </div>
            </div>
         </section>
      </main>

      <!--==================== FOOTER ====================-->
      @include('footer')

      <!--========== SCROLL UP ==========-->
      <a href="" class="scrollup"id="scroll-up" >
         <i class="ri-arrow-up-line"></i>
      </a>

      <!--=============== SCROLLREVEAL ===============-->
      <script src="{{asset('js/scrollreveal.min.js') }}"></script>

      <script src="assets/js/scrollreveal.min.js"></script>

      <!--=============== SWIPER JS ===============-->
      <script src="{{asset('js/swiper-bundle.min.js') }}"></script>

      <!--=============== MAIN JS ===============-->
      <script src="{{asset('js/main.js') }}"></script>
   </body>
</html>
