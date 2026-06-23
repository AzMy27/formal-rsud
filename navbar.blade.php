<header id="navbar">
  <a href="{{ url('/') }}" class="nav-brand">
    <div class="nav-logo">
      <img src="{{ get_banner('logo')->image }}" alt="RSUD Pratama Pulau Rupat">
    </div>
    <div class="nav-name">
      <span>RSUD Pratama Pulau Rupat</span>
      <span>Rumah Sakit Umum Daerah</span>
    </div>
  </a>
  <button class="menu-toggle">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-menu-2">
      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
      <path d="M4 6l16 0" />
      <path d="M4 12l16 0" />
      <path d="M4 18l16 0" />
    </svg>
  </button>
  <nav>
    <ul>
      <li><a href="{{ url('/') }}">Beranda</a></li>

      <!--
      <li class="has-dropdown">
        <a href="{{ url('/profil') }}">Profil <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{ url('/tentang-kami') }}">Tentang Kami</a></li>
          {{-- <li><a href="{{ url('/sejarah') }}">Sejarah</a></li> --}}
          {{-- <li><a href="{{ url('/visi-misi') }}">Visi & Misi</a></li> --}}
          <li><a href="{{ url('/struktur-organisasi') }}">Struktur Organisasi</a></li>
          {{-- <li><a href="{{ url('/fasilitas') }}">Fasilitas</a></li> --}}
        </ul>
      </li>
      -->
      <li><a href="{{ url('/layanan') }}">Layanan</a></li>

      <li class="has-dropdown">
        <a href="{{ url('/layanan') }}">Layanan <span class="caret"></span></a>
        <ul class="dropdown-menu">
          {{-- <li><a href="{{ url('/instalasi-gawat-darurat') }}">IGD</a></li> --}}
          <li><a href="{{ url('/rawat-jalan') }}">Rawat Jalan</a></li>
          <li><a href="{{ url('/rawat-inap') }}">Rawat Inap</a></li>
          {{-- <li><a href="{{ url('/penunjang') }}">Penunjang Medis</a></li> --}}
        </ul>
      </li>

      <li><a href="{{ url('/berita') }}">Berita</a></li>
      <!--
      <li class="has-dropdown">
        <a href="{{ url('/informasi') }}">Informasi <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{ url('/jadwal-dokter') }}">Jadwal Dokter</a></li>
          {{-- <li><a href="{{ url('/tarif-layanan') }}">Tarif Layanan</a></li> --}}
          <li><a href="{{ url('/ppid') }}">PPID</a></li>
          <li><a href="{{ url('/pengumuman') }}">Pengumuman</a></li>
        </ul>
      </li>
      -->
      <li><a href="{{ url('/informasi') }}">Informasi</a></li>

    </ul>
  </nav>
</header>