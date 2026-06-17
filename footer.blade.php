<!-- ═══ FOOTER ═══ -->
<footer id="footer">
  <div class="footer-main">
 
    <!-- Brand & Deskripsi -->
    <div class="footer-brand">
      <div class="footer-logo">
        <div class="footer-logo-icon">
          <img src="{{ get_banner('logo')->image }}" alt="RSUD Pratama Pulau Rupat">
          {{-- <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round">
            <path d="M12 2L12 22M2 12L22 12"/>
          </svg> --}}
        </div>
        <div class="footer-logo-text">
          <span>RSUD Pratama Pulau Rupat</span>
          <span>Rumah Sakit Umum Daerah</span>
        </div>
      </div>
      <p class="footer-desc">RSUD Pratama Pulau Rupat hadir untuk memberikan pelayanan kesehatan yang mudah diakses, aman, dan berkualitas bagi masyarakat Pulau Rupat dan sekitarnya.</p>
      {{-- <div class="footer-socials">
        <a href="#" class="social-btn" title="Facebook">f</a>
        <a href="#" class="social-btn" title="Instagram">ig</a>
        <a href="#" class="social-btn" title="YouTube">yt</a>
        <a href="#" class="social-btn" title="Twitter/X">x</a>
      </div> --}}
    </div>
 
    <!-- Navigasi -->
    <div class="footer-col">
      <h4>Navigasi</h4>
      <ul class="footer-links">
        <li><a href="{{ url('/') }}">Beranda</a></li>
        <li><a href="{{ url('/profil') }}">Profil</a></li>
        <li><a href="{{ url('/layanan') }}">Layanan Kesehatan</a></li>
        <li><a href="{{ url('/dokter') }}">Dokter Spesialis</a></li>
        <li><a href="{{ url('/berita') }}">Berita & Info</a></li>
        <li><a href="{{ url('/informasi') }}">Jadwal Poli</a></li>
        {{-- <li><a href="#">Pendaftaran Online</a></li> --}}
      </ul>
    </div>
 
    <!-- Layanan -->
    <div class="footer-col">
      <h4>Layanan</h4>
      <ul class="footer-links">
        <li><a href="#">IGD 24 Jam</a></li>
        <li><a href="#">Rawat Jalan</a></li>
        <li><a href="#">Rawat Inap</a></li>
        <li><a href="#">Persalinan & KIA</a></li>
        <li><a href="#">Farmasi</a></li>
        <li><a href="#">Ambulans</a></li>
      </ul>
    </div>
 
    <!-- Peta & Alamat -->
    <div class="footer-col">
      <h4>Lokasi Kami</h4>
      <div class="footer-map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.1801256831764!2d101.7011982!3d2.0837155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d2410059119a4f%3A0x3d7b51379d876000!2sUPT%20BK%20RSUD%20PULAU%20RUPAT!5e0!3m2!1sen!2sid!4v1780970576513!5m2!1sen!2sid"
          allowfullscreen="" loading="lazy"></iframe>
      </div>
      <div class="footer-address">
        <div class="addr-item">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
          <span>Jl. Jenderal Sudirman, Tj. Punak, Kec. Rupat Utara, Kab. Bengkalis, Riau</span>
        </div>
        <div class="addr-item">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.63A2 2 0 012 .98h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 8.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
          <a href="tel:+628136815323">+62 813 6815 323</a>
        </div>
        <div class="addr-item">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          <span>rsudrupat@bengkaliskab.go.id</span>
        </div>
      </div>
    </div>
 
  </div>
 
  <div class="footer-bottom">
    <p>© 2026 Tim IT Diskominfotik Bengkalis - Pemerintah Kabupaten Bengkalis</p>
    <p>
      <a href="#">Kebijakan Privasi</a> &nbsp;·&nbsp;
      <a href="#">Syarat & Ketentuan</a> &nbsp;·&nbsp;
      <a href="#">Sitemap</a>
    </p>
  </div>
</footer>
    <!-- Footer END-->
    <!-- scroll top button -->
    <button class="scroltop fa fa-arrow-up style5" ></button>
</div>
<script src="/template/formal/assets/js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<!-- JavaScript  files ========================================= -->
<script src="/template/formal/assets/plugins/bootstrap/js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="/template/formal/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="/template/formal/assets/plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
<script src="/template/formal/assets/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
<script src="/template/formal/assets/plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
<script src="/template/formal/assets/plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="/template/formal/assets/plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="/template/formal/assets/plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
<script src="/template/formal/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.min.js"></script><!-- Perfect Scrollbar -->
<script src="/template/formal/assets/plugins/masonry/masonry-4.2.2.js"></script><!-- MASONRY -->
<script src="/template/formal/assets/plugins/masonry/isotope.pkgd.min.js"></script><!-- MASONRY -->
<script src="/template/formal/assets/plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
<script src="/template/formal/assets/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="/template/formal/assets/js/dz.carousel.js"></script><!-- SORTCODE FUCTIONS  -->
<script src="/template/formal/assets/js/dz.ajax.js"></script><!-- CONTACT JS  -->

<!-- contact-us js -->
<!-- revolution JS FILES -->
<script src="/template/formal/assets/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="/template/formal/assets/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="/template/formal/assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="/template/formal/assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="/template/formal/assets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="/template/formal/assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="/template/formal/assets/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="/template/formal/assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="/template/formal/assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="/template/formal/assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="/template/formal/assets/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script  src="/template/formal/assets/js/rev.slider.js"></script>
<script>
jQuery(document).ready(function() {
	'use strict';
	dz_rev_slider_4();
});	/*ready*/
</script>
<script>
document.querySelectorAll('.info-toggle').forEach(button => {
    button.addEventListener('click', function() {

        const card = this.closest('.info-card');
        const text = this.querySelector('.toggle-text');

        card.classList.toggle('active');

        if(card.classList.contains('active')){
            text.textContent = 'Sembunyikan';
        } else {
            text.textContent = 'Selengkapnya';
        }
    });
});
</script>
</body>
</html>