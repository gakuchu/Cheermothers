<footer>
  <div class="map">
    <div class="info">
      <a href="<?php echo esc_url( home_url() ); ?>">
        <h5><?php bloginfo( 'name' ) ?></h5>
      </a>
      <p>
        〒111-0053<br>
        東京都台東区浅草橋3-33-5<br>
        ホーユービル2F<br>
        TEL：03-6362-4429<br>
        FAX：03-6740-1610
      </p>
    </div>
    <div class="link">
      <h5>LINKS</h5>
      <ul>
        <li><a href="<?php echo esc_url( home_url() ); ?>">HOME</a></li>
        <li><a href="<?php echo esc_url( home_url( '/service/' ) ); ?>">SERVICE</a></li>
        <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">BLOG</a></li>
        <li><a href="<?php echo esc_url( home_url( '/company/' ) ); ?>">COMPANY</a></li>
        <li><a href="<?php echo esc_url( home_url( '/recruit/' ) ); ?>">RECRUIT</a></li>
        <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">CONTACT</a></li>
      </ul>
    </div>
    <div class="items">
      <h5>SERVICE</h5>
      <ul>
        <li><a href="<?php echo esc_url( home_url( '/service_1/' ) ); ?>">アウトソーシング事業</a></li>
        <li><a href="<?php echo esc_url( home_url( '/service_2/' ) ); ?>">保育事業</a></li>
      </ul>
    </div>
  </div>
  <div class="bar">
    <div class="company_info">
      <h5><?php bloginfo( 'name' ) ?></h5>
      <p>2019 All rights reserved by Cheer mothers.</p>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="assets/js/scroll.js"></script>

</body>

</html>