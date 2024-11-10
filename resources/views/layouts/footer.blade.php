<footer id="footer" class="footer dark-background">

  <div class="container footer-top mt-5">
    <div class="row gy-4">
      <div class="col-lg-3 col-md-6 footer-about">
        <a href="index.html" class="d-flex align-items-center">
          <img src="{{ asset('assets/img/logo_footer.png') }}" height="80px" alt="">
        </a>
        <div class="footer-contact pt-3">
          <p><strong>Cím:</strong> 7030 Paks, Vasút utca 10.</p>
          <!-- <p>New York, NY 535022</p> -->
          <p class="mt-3"><strong>Telefon:</strong> <span>+36 00 0000 00</span></p>
          <p class="mt-3"><strong>Email:</strong> <span>info@humanregen.hu</span></p>
        </div>
        <!-- <div class="social-links d-flex mt-4">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div> -->
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Hasznos linkek</h4>
        <ul>
          <li><a href="{{ route('home') }}">Főoldal</a></li>
          <li><a href="{{ route('effects') }}">Jótékony hatások</a></li>
          <li><a href="#">Adatkezelési feltételek</a></li>
          <li><a href="{{ route('price') }}">Árak</a></li>
          <li><a href="{{ route('contacts') }}">Kapcsolat</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-3 footer-links">
        <h4>Nyitvatartás</h4>

        <ul>
          <li><a href="" class="text-decoration-none">Az előre jelzett időpontban</a></li>
          {{-- <i class="fa-regular fa-clock ms-5" style="font-size: 24px;"></i> --}}
          <li><a href="" class="text-decoration-none">Hétfőtől – péntekig:</a></li>
          <li><a href="" class="text-decoration-none">8:00 - 18:00</a></li>
          <!-- <li><a href="">Product Management</a></li> -->
          <li><a href="" class="text-decoration-none">Szombat:</a></li>
          <li><a href="" class="text-decoration-none">9:00 - 12:00</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-12 footer-newsletter">
        <h4>Hírlevelünk</h4>
        <p>Iratkozzon fel hírlevelünkre, és értesüljön legfrissebb híreinkről szolgáltatásainkkal kapcsolatban!
        </p>
        <form action="forms/newsletter.php" method="post" class="php-email-form">
          <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Feliratkozás">
          </div>
          <!-- <div class="loading">Loading</div> -->
          <div class="error-message"></div>
          <div class="sent-message">Adja meg az email címét!</div>
        </form>
      </div>

    </div>
  </div>

  <div class="container copyright text-center mt-4">
    <p>© <span>Copyright 2024</span> <span>All Rights Reserved</span></p>
    <div class="credits">

      Designed by <a href="https://pikft.hu/" style="color: #fff;">Paksi informatika</a>
    </div>
  </div>

</footer>