<div class="page-content">

  {{-- Slider & Sambutan --}}
  {{ get_element('slider') }}
  {{ get_element('sambutan') }}

  {{-- Layanan --}}
  {{ get_element('layanan') }}
 
  <!-- ═══ BERITA ═══ -->
  {{ get_element(('berita')) }}
</div>
 
<script>
  // ── Navbar scroll effect ──
  const navbar = document.getElementById('navbar');
  window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 60);
  });
  navbar.classList.add('scrolled'); // start solid so logo readable
 
  // ── Slider ──
  const slides = document.querySelectorAll('.slide');
  const dots   = document.querySelectorAll('.dot');
  let current  = 0, timer;
 
  function goTo(n) {
    slides[current].classList.remove('active');
    dots[current].classList.remove('active');
    current = (n + slides.length) % slides.length;
    slides[current].classList.add('active');
    dots[current].classList.add('active');
    resetTimer();
  }
  function next() { goTo(current + 1); }
  function prev() { goTo(current - 1); }
  function resetTimer() { clearInterval(timer); timer = setInterval(next, 5500); }
  resetTimer();
</script>