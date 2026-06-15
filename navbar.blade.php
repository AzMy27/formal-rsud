<header id="navbar">
  <a href="{{ url('/') }}" class="nav-brand">
    <div class="nav-logo">
      {{-- <svg viewBox="0 0 24 24" fill="none" stroke="#0B3D6E" stroke-width="2" stroke-linecap="round">
        <path d="M12 2L12 22M2 12L22 12"/>
        <rect x="5" y="5" width="14" height="14" rx="2" stroke="#0B3D6E" fill="none"/>
      </svg> --}}
      <img src="{{ get_banner('logo')->image }}" alt="RSUD Pratama Pulau Rupat">
    </div>
    <div class="nav-name">
      <span>RSUD Pratama Pulau Rupat</span>
      <span>Rumah Sakit Umum Daerah</span>
    </div>
  </a>
  <nav>
    <ul>
      <li><a href="{{ url('/') }}">Beranda</a></li>
      <li><a href="{{ url('/profil') }}">Profil</a></li>
      <li><a href="{{ url('/layanan') }}">Layanan</a></li>
      <li><a href="{{ url('/dokter') }}">Dokter</a></li>
      <li><a href="{{ url('/berita') }}">Berita</a></li>
      <li><a href="{{ url('/informasi') }}">Informasi</a></li>
      <!-- <li><a href="#" class="nav-cta">Buat Janji</a></li> -->
    </ul>
  </nav>
</header>