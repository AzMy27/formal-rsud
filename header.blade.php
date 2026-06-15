<!DOCTYPE html>
<html lang="id">
<head>
	<link rel="stylesheet" type="text/css" href="/template/formal/assets/css/plugins.css">
	<link rel="stylesheet" type="text/css" href="/template/formal/assets/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="/template/formal/assets/css/skin/{{ !empty(get_option('scheme_color')) ? str(get_option('scheme_color'))->slug() : 'skin-1' }}.css">
	<link rel="stylesheet" type="text/css" href="/template/formal/assets/css/templete.css">
	
	<!-- REVOLUTION SLIDER CSS -->
	<link rel="stylesheet" type="text/css" href="/template/formal/assets/plugins/revolution/revolution/css/settings.css">
	<link rel="stylesheet" type="text/css" href="/template/formal/assets/plugins/revolution/revolution/css/navigation.css">
	<!-- REVOLUTION SLIDER CSS END -->
 <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
 
    :root {
      --navy:   #0B3D6E;
      --blue:   #2B9FD9;
      --sky:    #E8F4FD;
      --white:  #FFFFFF;
      --gray:   #F0F5FA;
      --text:   #1A2A3A;
      --muted:  #5A7080;
      --gold:   #D4A843;
    }
 
    html { scroll-behavior: smooth; }
    body { font-family: 'Inter', sans-serif; color: var(--text); background: var(--white); overflow-x: hidden; }
 
    /* ── NAVBAR ─────────────────────────────────── */
    #navbar {
      position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
      padding: 15px 5%;
      display: flex; align-items: center; justify-content: space-between;
      height: 72px;
      background: rgba(11, 61, 110, 0.9);
      backdrop-filter: blur(8px);
      transition: background .35s ease, box-shadow .35s ease;
    }
    #navbar.scrolled {
      background: var(--navy);
      box-shadow: 0 2px 20px rgba(0,0,0,.25);
    }
    .nav-brand { display: flex; align-items: center; gap: 12px; text-decoration: none; }
    .nav-logo {
      width: 44px; height: 44px; border-radius: 50%;
      background: var(--white); display: flex; align-items: center; justify-content: center;
    }
    .nav-logo img { width: 26px; height: 26px; }
    .nav-logo img { width: 100%; height: 100%; object-fit:contain; }
    .nav-name { display: flex; flex-direction: column; line-height: 1.1; }
    .nav-name span:first-child { font-family: 'Inter', serif; font-size: 1.05rem; font-weight: 700; color: var(--white); }
    .nav-name span:last-child { font-size: .68rem; color: rgba(255,255,255,.7); letter-spacing: .05em; text-transform: uppercase; }
    nav ul { list-style: none; display: flex; gap: 28px; }
    nav ul li a { text-decoration: none; color: rgba(255,255,255,.88); font-size: .88rem; font-weight: 500; letter-spacing: .02em; transition: color .2s; position: relative; padding-bottom: 4px;  }
    nav ul li a.active { color: var(--white); }
    nav ul li a.active::after { width: 100%; }
    nav ul li a::after { content:''; position: absolute; bottom: 0; left: 0; width: 0; height: 2px; background: var(--gold); transition: width .25s; }
    nav ul li a:hover { color: var(--white); }
    nav ul li a:hover::after { width: 100%; }
    .nav-cta {
      background: var(--gold); color: var(--navy) !important; padding: 8px 20px;
      border-radius: 50px; font-weight: 600 !important; font-size: .82rem !important;
      transition: background .2s, transform .2s !important;
    }
    .nav-cta::after { display: none !important; }
    .nav-cta:hover { background: #e8b94e !important; transform: translateY(-1px); }
 
    /* ── SLIDER ──────────────────────────────────── */
    #slider { position: relative; min-height: 600px; overflow: hidden; }
    .slide {
      position: absolute; inset: 0;
      opacity: 0; transition: opacity 1.2s ease;
      background-size: cover; background-position: center;
    }
    .slide.active { opacity: 1; }
    .slide-overlay {
      position: absolute; inset: 0;
      background: linear-gradient(120deg, rgba(11,61,110,.82) 0%, rgba(11,61,110,.35) 60%, transparent 100%);
    }
    .slide-content {
      position: absolute; bottom: 18%; left: 8%;
      color: var(--white); max-width: 560px;
    }
    .slide-tag { font-size: .75rem; letter-spacing: .18em; text-transform: uppercase; color: var(--gold); font-weight: 600; margin-bottom: 12px; }
    .slide-title { font-family: 'Playfair Display', serif; font-size: clamp(2rem, 5vw, 3.4rem); line-height: 1.18; margin-bottom: 16px; }
    .slide-sub { font-size: 1rem; color: rgba(255,255,255,.8); line-height: 1.7; margin-bottom: 28px; max-width: 440px; }
    .btn-primary {
      display: inline-flex; align-items: center; gap: 8px;
      background: var(--blue); color: var(--white);
      padding: 13px 28px; border-radius: 50px; font-weight: 600; font-size: .9rem;
      text-decoration: none; transition: background .2s, transform .2s;
    }
    .btn-primary:hover { background: #1b8fc9; transform: translateY(-2px); }
    .btn-outline {
      display: inline-flex; align-items: center; gap: 8px;
      border: 2px solid var(--white); color: var(--white);
      padding: 11px 26px; border-radius: 50px; font-weight: 500; font-size: .9rem;
      text-decoration: none; margin-left: 12px; transition: background .2s;
    }
    .btn-outline:hover { background: rgba(255,255,255,.15); }
    .slider-dots {
      position: absolute; bottom: 32px; left: 50%; transform: translateX(-50%);
      display: flex; gap: 10px;
    }
    .dot {
      width: 8px; height: 8px; border-radius: 50%;
      background: rgba(255,255,255,.4); cursor: pointer; transition: all .3s;
    }
    .dot.active { background: var(--gold); width: 28px; border-radius: 4px; }
    .slider-arrows { position: absolute; top: 50%; transform: translateY(-50%); width: 100%; display: flex; justify-content: space-between; padding: 0 24px; pointer-events: none; }
    .arrow {
      pointer-events: all; cursor: pointer;
      width: 46px; height: 46px; border-radius: 50%;
      background: rgba(255,255,255,.15); border: 2px solid rgba(255,255,255,.4);
      display: flex; align-items: center; justify-content: center;
      color: white; font-size: 1.2rem; transition: background .2s;
      backdrop-filter: blur(4px);
    }
    .arrow:hover { background: rgba(255,255,255,.3); }
    /* slide backgrounds using CSS gradients as placeholders */
    .slide-1 { background: linear-gradient(135deg, #0B3D6E 0%, #2B9FD9 50%, #0B3D6E 100%); }
    .slide-2 { background: linear-gradient(135deg, #1a5276 0%, #2980b9 60%, #1a5276 100%); }
    .slide-3 { background: linear-gradient(135deg, #0d4f8a 0%, #3498db 60%, #0d4f8a 100%); }
    /* medical cross decorative pattern */
    .slide-deco {
      position: absolute; right: 6%; top: 50%; transform: translateY(-50%);
      opacity: .07;
    }
 
    /* ── SAMBUTAN DIREKTUR ───────────────────────── */
    #sambutan {
      display: grid;
      grid-template-columns: 420px 1fr;
      gap: 50px;
      align-items: center;
      padding: 100px 8%;
    }
    .sambutan-visual { position: relative; }
    .sambutan-visual::before {
        content: "";
        position: absolute;
        top: -15px;
        left: -15px;
        width: 100%;
        height: 100%;
        border: 3px solid var(--blue);
        border-radius: 16px 80px 16px 80px;
        z-index: -1;
    }
    .dir-photo {
      max-width: 420px;
      margin: auto;
      border-radius: 20px;
      overflow: hidden;
    }
    .dir-photo img{ width:100%; height:100%; object-fit:cover; }
    .dir-silhouette { width: 75%; opacity: .55; }
    .sambutan-text { max-width: 700px; }
    .section-eyebrow { font-size: .72rem; letter-spacing: .2em; text-transform: uppercase; color: var(--blue); font-weight: 600; margin-bottom: 14px; }
    .section-title { font-family: 'Playfair Display', serif; font-size: clamp(1.8rem, 3.5vw, 2.6rem); line-height: 1.25; margin-bottom: 24px; color: var(--navy); }
    .section-title em { color: var(--blue); font-style: normal; }
    .sambutan-body p {
      font-size: 1rem;
      line-height: 1.9;
      text-align: justify;
    }
    .dir-signature { margin-top: 28px; padding-top: 24px; border-top: 1px solid #e0eaf2; }
    .dir-signature p { font-size: .85rem; color: var(--muted); }
    .dir-signature strong { display: block; color: var(--navy); font-size: 1rem; margin-top: 4px; font-family: 'Playfair Display', serif; }
    .sig-title { font-size: .78rem; color: var(--blue); font-weight: 500; }
 
    /* ── LAYANAN UNGGULAN ────────────────────────── */
    #layanan {
      padding: 100px 8%;
      background: var(--gray);
    }
    .section-header { text-align: center; margin-bottom: 60px; }
    .section-header .section-title { margin-bottom: 12px; }
    .section-header p { color: var(--muted); font-size: .95rem; max-width: 520px; margin: 0 auto; line-height: 1.7; }
	.services-grid {
		display: grid;
		grid-template-columns: repeat(4, 1fr);
		gap: 24px;
	}
  .services-grid .service-card:nth-child(5) {
      grid-column: 2;
  }

  /* item ke-6 (Ambulans) */
  .services-grid .service-card:nth-child(6) {
      grid-column: 3;
  }
	 .service-card {
      background: var(--white); border-radius: 20px;
      padding: 32px 22px; text-align: center;
      transition: transform .3s, box-shadow .3s;
      cursor: default; position: relative; overflow: hidden;
    }
    .service-card::before {
      content: ''; position: absolute; top: 0; left: 0; right: 0; height: 4px;
      background: linear-gradient(90deg, var(--navy), var(--blue));
      transform: scaleX(0); transform-origin: left; transition: transform .3s;
    }
    .service-card:hover { transform: translateY(-8px); box-shadow: 0 20px 50px rgba(11,61,110,.12); }
    .service-card:hover::before { transform: scaleX(1); }
    .service-card.featured { background: var(--navy); }
    .service-card.featured .service-title { color: var(--white); }
    .service-card.featured .service-desc { color: rgba(255,255,255,.65); }
    .service-card.featured::before { background: var(--gold); transform: scaleX(1); }
    .service-icon {
      width: 64px; height: 64px; margin: 0 auto 20px;
      border-radius: 16px; display: flex; align-items: center; justify-content: center;
      background: var(--sky);
    }
    .service-card.featured .service-icon { background: rgba(255,255,255,.12); }
    .service-icon svg { width: 34px; height: 34px; }
    .service-title { font-family: 'Playfair Display', serif; font-size: 1rem; font-weight: 700; color: var(--navy); margin-bottom: 10px; line-height: 1.3; }
    .service-desc { font-size: .8rem; color: var(--muted); line-height: 1.65; }
 
    /* ── BERITA ──────────────────────────────────── */
    #berita { padding: 100px 8%; background: var(--white); }
    .news-grid { display: grid; grid-template-columns: 1.6fr 1fr 1fr; gap: 28px; }
    .news-card {
      border-radius: 16px; overflow: hidden;
      border: 1px solid #e2eaf2;
      transition: box-shadow .3s, transform .3s;
      cursor: pointer;
    }
    .news-card:hover { box-shadow: 0 16px 48px rgba(11,61,110,.1); transform: translateY(-4px); }
    .news-img {
      width: 100%; aspect-ratio: 16/9; object-fit: cover; overflow: hidden;
      background: linear-gradient(135deg, var(--sky), #b8d8f2);
      display: flex; align-items: center; justify-content: center;
      font-size: 2.5rem;
      border-radius: 16px 16px 0 0;
    }
    .news-img img { width: 100%; height: 100%; object-fit: cover; display: block; }
    .news-body { padding: 22px; }
    .news-tag { display: inline-block; font-size: .7rem; letter-spacing: .12em; text-transform: uppercase; font-weight: 600; color: var(--blue); background: var(--sky); padding: 4px 10px; border-radius: 20px; margin-bottom: 10px; }
    .news-title { font-family: 'Playfair Display', serif; font-size: 1rem; color: var(--navy); line-height: 1.4; margin-bottom: 8px; }
    .news-excerpt { font-size: .82rem; color: var(--muted); line-height: 1.65; margin-bottom: 14px; }
    .news-meta { font-size: .75rem; color: #8fa8bc; display: flex; align-items: center; gap: 6px; }
    .news-meta span { display: flex; align-items: center; gap: 4px; }
    .view-more { text-align: center; margin-top: 48px; }
    .btn-sec {
      display: inline-flex; align-items: center; gap: 8px;
      border: 2px solid var(--navy); color: var(--navy);
      padding: 12px 28px; border-radius: 50px; font-weight: 600; font-size: .88rem;
      text-decoration: none; transition: all .2s;
    }
    .btn-sec:hover { background: var(--navy); color: var(--white); }
 
    /* ── FOOTER ──────────────────────────────────── */
    footer {
      background: #071f37;
      color: var(--white);
    }
    .footer-main {
      display: grid; grid-template-columns: 1.5fr 1fr 1fr 2fr;
      gap: 48px; padding: 72px 8% 56px;
    }
    .footer-brand {}
    .footer-logo { display: flex; align-items: center; gap: 12px; margin-bottom: 18px; }
    .footer-logo-icon {
      width: 48px; height: 48px; border-radius: 50%;
      background: var(--blue); display: flex; align-items: center; justify-content: center;
    }
    .footer-logo-icon svg { width: 28px; height: 28px; }
    .footer-logo-text span:first-child { display: block; font-family: 'Poppins', sans-serif, serif; font-size: 1.1rem; color: var(--white); }
    .footer-logo-text span:last-child { font-size: .72rem; color: rgba(255,255,255,.5); text-transform: uppercase; letter-spacing: .08em; }
    .footer-desc { font-size: .85rem; line-height: 1.8; color: rgba(255,255,255,.55); max-width: 340px; }
    .footer-socials { display: flex; gap: 10px; margin-top: 22px; }
    .social-btn {
      width: 36px; height: 36px; border-radius: 50%;
      background: rgba(255,255,255,.08); border: 1px solid rgba(255,255,255,.12);
      display: flex; align-items: center; justify-content: center;
      color: rgba(255,255,255,.6); text-decoration: none; font-size: .8rem;
      transition: background .2s, color .2s;
    }
    .social-btn:hover { background: var(--blue); color: var(--white); border-color: var(--blue); }
    .footer-col h4 { font-size: .8rem; letter-spacing: .15em; text-transform: uppercase; color: var(--gold); font-weight: 600; margin-bottom: 18px; }
    .footer-links { list-style: none; }
    .footer-links li { margin-bottom: 10px; }
    .footer-links a { text-decoration: none; color: rgba(255,255,255,.55); font-size: .85rem; transition: color .2s; display: flex; align-items: center; gap: 8px; }
    .footer-links a::before { content: '›'; color: var(--blue); font-size: 1rem; }
    .footer-links a:hover { color: var(--white); }
    .footer-map iframe {
      width: 100%; height: 220px; border-radius: 10px; border: none;
      filter: grayscale(.3) contrast(1.1);
    }
    .footer-address { margin-top: 14px; }
    .addr-item { display: flex; gap: 10px; align-items: flex-start; margin-bottom: 10px; font-size: .82rem; color: rgba(255,255,255,.55); }
    .addr-item svg { flex-shrink: 0; margin-top: 1px; color: var(--blue); }
    .footer-bottom {
      border-top: 1px solid rgba(255,255,255,.08);
      padding: 20px 8%;
      display: flex; justify-content: space-between; align-items: center;
    }
    .footer-bottom p { font-size: .8rem; color: rgba(255,255,255,.35); }
    .footer-bottom a { color: rgba(255,255,255,.5); text-decoration: none; }
    .footer-bottom a:hover { color: var(--white); }

    /* ── SIDEBAR ─────────────────────────────── */
    .sidebar-banner-item img,
    .popular-thumb img,
    .widget img { width: 100%; height: auto; display: block; }
    .sidebar-banner-item { overflow: hidden; border-radius: 12px; }
    .sidebar-banner-item img { width: 100%; height: 250px; object-fit: cover; display: block; }
    .popular-thumb { width: 80px; height: 60px; overflow: hidden; border-radius: 8px; } 
    .popular-thumb img { width: 100%; height: 100%; object-fit: cover; }
    .widget img { max-width: 100%; height: auto; display: block; }
    .widget img.w-100 { width: 100%; max-width: 100%; height: auto; }
    .sidebar-sticky, .widget { overflow: hidden; }

    /* ── BERITA INDEX ─────────────────────────────── */
    .page-content { padding-top: 72px}
    .news-card{
        background:#fff;
        border-radius:16px;
        overflow:hidden;
        border:1px solid #e5e7eb;
        transition:.3s;
        height:100%;
    }
    .news-card:hover{
        transform:translateY(-5px);
        box-shadow:0 15px 40px rgba(0,0,0,.08);
    }
    .news-image{
        width:100%;
        aspect-ratio:16/9;
        object-fit:cover;
        display:block;
    }
    .news-content{
        padding:20px;
    }
    .news-meta{
        font-size:.8rem;
        color:#6b7280;
        margin-bottom:12px;
    }
    .news-title{
        font-size:1.1rem;
        font-weight:700;
        line-height:1.5;
        margin-bottom:12px;
    }
    .news-title a{
        color:#0B3D6E;
        text-decoration:none;
    }
    .news-title a:hover{
        color:#2B9FD9;
    }
    .news-excerpt{
        color:#64748b;
        line-height:1.7;
        font-size:.9rem;
        margin-bottom:18px;

        display:-webkit-box;
        -webkit-line-clamp:3;
        -webkit-box-orient:vertical;
        overflow:hidden;
    }
    .news-link{
        color:#2B9FD9;
        text-decoration:none;
        font-weight:600;
    }
    .news-link:hover{
        color:#0B3D6E;
    }

    /* ── HALAMAN INFORMASI ─────────────────────────────── */
    .info-section{ padding:80px 5%; background:#f8fafc; }
    .section-header{ text-align:center; margin-bottom:50px; }
    .section-header h2{ font-size:2.2rem; color:#0b3d6e; font-weight:700; margin-bottom:15px; }
    .section-header p{ max-width:700px; margin:auto; color:#64748b; line-height:1.8; }
    .info-grid{ display:grid; grid-template-columns:repeat(3, 1fr); gap:25px; }
    .info-card{
      background:#fff;
      padding:30px;
      border-radius:16px;
      box-shadow:0 8px 24px rgba(0,0,0,.06);
      transition:.3s;
    }
    .info-card:hover{ transform:translateY(-6px); box-shadow:0 15px 30px rgba(0,0,0,.1); }
    .info-icon{
      width:60px;
      height:60px;
      border-radius:15px;
      background:#e8f1fb;
      color:#0b3d6e;
      display:flex;
      align-items:center;
      justify-content:center;
      font-size:24px;
      margin-bottom:20px;
    }
    .info-card h4{ color:#0b3d6e; margin-bottom:12px; font-size:1.1rem; }
    .info-card p{ color:#64748b; line-height:1.7; margin-bottom:15px; }
    .info-card a{ color:#0b3d6e; text-decoration:none; font-weight:600; }
    .info-card a:hover{ color:#d4a437; }
    .info-toggle{
      width:100%;
      border:none;
      background:none;
      cursor:pointer;
      display:flex;
      justify-content:space-between;
      align-items:center;
      font-weight:600;
      color:#0b3d6e;
      padding:10px 0;
    }
    .info-content{ max-height:0; overflow:hidden; transition:max-height .3s ease; }
    .info-card.active .info-content{ max-height:200px; }
    .info-card.active .fa-chevron-down{ transform:rotate(180deg); }
    .fa-chevron-down{ transition:.3s; }

    /* ── PROFIL ───────────────────────────── */
    #profil{ padding:100px 8%; background:#fff; }
    .profil-grid{
      display:grid;
      grid-template-columns:1.2fr 1fr;
      gap:50px;
      align-items:center;
      margin-top:50px;
    }
    .profil-content h3{ color:var(--navy); margin-bottom:20px; font-size:1.8rem; }
    .profil-content p{
      color:var(--muted);
      line-height:1.9;
      margin-bottom:18px;
      text-align:justify;
    }
    .profil-image img{ width:100%; border-radius:20px; display:block; box-shadow:0 20px 50px rgba(0,0,0,.08); }
    .profil-stats{ display:grid; gap:15px; margin-top:30px;
      grid-template-columns:repeat(3,1fr);
    }
    .stat-box{ background:#f8fafc; padding:20px; border-radius:14px; text-align:center; }
    .stat-box h4{ color:var(--blue); font-size:1.4rem; margin-bottom:5px; }
    .stat-box span{ color:var(--muted); font-size:.85rem; }
    .visi-misi-grid{ display:grid; gap:30px; margin-top:70px;
      grid-template-columns:1fr 1fr;
    }
    .visi-card,
    .misi-card{
    background:#f8fafc;
    padding:35px;
    border-radius:20px;
    border:1px solid #e5edf5;
    }
    .visi-card h3,
    .misi-card h3{ color:var(--navy); margin-bottom:18px; }
    .visi-card p{ line-height:1.8; color:var(--muted); }
    .misi-card ul{ padding-left:20px; }
    .misi-card li{ margin-bottom:12px; color:var(--muted); line-height:1.7; }

    /* ── LAYANAN ───────────────────────── */
    #layanan{ padding:100px 8%; background:#fff; }
    .layanan-grid{ display:grid; grid-template-columns:repeat(3,1fr); gap:30px; margin-top:60px; }
    .layanan-card{
        background:#fff;
        border:1px solid #e5edf5;
        border-radius:18px;
        padding:30px;
        text-align:center;
        transition:.3s;
    }
    .layanan-card:hover{ transform:translateY(-5px); box-shadow:0 15px 40px rgba(11,61,110,.08); }
    .layanan-icon{
        width:70px;
        height:70px;
        margin:0 auto 20px;
        border-radius:18px;
        background:#e8f1fb;
        color:var(--blue);
        display:flex;
        align-items:center;
        justify-content:center;
        font-size:28px;
    }
    .layanan-card h3{ color:var(--navy); margin-bottom:10px; }
    .layanan-card p{ color:var(--muted); line-height:1.8; }

    /* Alur Pelayanan */
    .alur-pelayanan{ margin-top:90px; }
    .alur-pelayanan h3{
      text-align:center;
      margin-bottom:40px;
      color:var(--navy);
      font-size:2rem;
    }
    .alur-grid{ display:grid; grid-template-columns:repeat(5,1fr); gap:20px; }
    .alur-step{
      text-align:center;
      padding:30px 20px;
      background:#f8fafc;
      border-radius:16px;
    }
    .alur-step span{
      width:55px;
      height:55px;
      border-radius:50%;
      background:var(--blue);
      color:#fff;
      display:flex;
      align-items:center;
      justify-content:center;
      margin:auto;
      font-weight:bold;
      margin-bottom:15px;
    }
    .alur-step h4{ color:var(--navy); }
 
    /* ── RESPONSIVE ─────────────────────────────── */
    @media (max-width: 1100px) {
      .services-grid { grid-template-columns: repeat(3, 1fr); }
      .news-grid { grid-template-columns: 1fr 1fr; }
      .news-card.main { grid-column: 1 / -1; }
      .footer-main { grid-template-columns: 1fr 1fr; }
    }
    @media (max-width: 768px) {
      #sambutan { grid-template-columns: 1fr; gap: 32px; padding: 72px 6%; text-align: center; }
      .sambutan-text { padding-left: 0; max-width: 100%; }
      .sambutan-body p { text-align: left; }
      .services-grid { grid-template-columns: repeat(2, 1fr); }
      .news-grid { grid-template-columns: 1fr; }
      nav ul { display: none; }
      .footer-main { grid-template-columns: 1fr; gap: 32px; padding: 48px 6% 40px; }
      .footer-bottom { flex-direction: column; gap: 8px; text-align: center; }
    }
  </style>
</head>
<body id="bg" class="layout-light {{ !empty(get_option('body_style'))  ? str(get_option('body_style'))->lower() : ''}}" style="padding:0;{{ !empty(get_option('body_background_color'))?'background-color:'.get_option('body_background_color').';' : 'background-color:#fff;' }}{{ !empty(get_option('body_background_image')) && media_exists(get_option('body_background_image')) ?'background-image:url('.get_option('body_background_image').');' : null }}"><div id="loading-area"></div>
<div class="page-wraper">
{{ get_element('navbar') }}