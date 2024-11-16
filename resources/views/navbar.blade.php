<header class="header" id="header">
    <nav class="nav container">
        <a href="#" class="nav__logo">
        <i class="ri-book-3-line"></i>MATbook
     </a>

     <div class="nav__menu">
        <ul class="nav__list">
           <li class="nav__item">
              <a href="#home" class="nav__link active-link">
                 <i class="ri-home-line"></i>
                 <span>Home</span>
              </a>
           </li>


        </ul>
     </div>

     <div class="nav__actions">
        <!-- search button-->



        <!-- login button-->
    <a href="{{ ('login') }}">

        <i class="ri-user-line login-button" ></i>
    </a>




        <!-- theme button-->
        <i class="ri-moon-line change-theme" id="theme-button"></i>
     </div>
     </nav>

  </header>

  <!--==================== SEARCH ====================-->
  <div class="search" id="search-content">
     <form action="" class="search__form">
        <i class="ri-search-line search__icon"></i>
        <input type="search" placeholder="What are you looking for?" class="search__input">
     </form>
        <i class="ri-close-line"></i>
  </div>

  <!--==================== LOGIN ====================-->
  {{--  <div class="login grid" id="login-content">
     <form action="" class="login__form grid">
        <h3 class="login__title">Log In</h3>

        <div class="login__group grid">
           <div>
              <label for="login-email" class="login__label">Email</label>
              <input type="email" placeholder="Write your email" id="login-email" class="login__input">
           </div>

           <div>
              <label for="login-pass" class="login__label">Password</label>
              <input type="password" placeholder="Enter your password" id="login-pass" class="login__input">
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
