@if($sambutan = query()->detail('sambutan'))
<section id="sambutan">
  <div class="sambutan-visual">
    <div class="dir-photo">
      <!-- Placeholder silhouette -->
      <img src="{{ $sambutan->thumbnail }}" alt="">
      {{-- <svg class="dir-silhouette" viewBox="0 0 200 260" fill="none" xmlns="http://www.w3.org/2000/svg">
        <ellipse cx="100" cy="72" rx="48" ry="52" fill="rgba(11,61,110,0.5)"/>
        <path d="M20 260 C20 180 180 180 180 260" fill="rgba(11,61,110,0.5)"/>
        <rect x="80" y="90" width="40" height="12" rx="4" fill="white" opacity=".8"/>
        <rect x="94" y="76" width="12" height="40" rx="4" fill="white" opacity=".8"/>
      </svg> --}}
    </div>
    <!--<div class="dir-badge">
      <strong>25+</strong>
      <span>Tahun Melayani</span>
    </div>-->
  </div>
 
  <div class="sambutan-text">
    <p class="section-eyebrow">Kata Sambutan</p>
    <h2 class="section-title">Salam Sehat dari<br><em>Direktur Utama</em></h2>
    <div class="sambutan-body">
      {!!$sambutan->content!!}
      {{-- <p>Assalamu'alaikum Warahmatullahi Wabarakatuh. Puji syukur kehadirat Allah SWT atas segala nikmat dan karunia-Nya, sehingga RSUD Pratama Pulau Rupat hadir untuk mendekatkan akses pelayanan kesehatan bagi masyarakat Pulau Rupat dan sekitarnya.</p> --}}
      {{-- <p>Kami berkomitmen memberikan pelayanan kesehatan yang mudah diakses, berkualitas, dan berorientasi pada keselamatan pasien sebagai wujud pengabdian kepada masyarakat. </p> --}}
		  {{-- <p>Kami mengucapkan terima kasih atas kepercayaan masyarakat dan akan terus berupaya meningkatkan mutu pelayanan demi terwujudnya masyarakat yang sehat dan sejahtera.</p> --}}
    </div>
    <div class="dir-signature">
      <p>Hormat kami,</p>
      <strong>{{$sambutan->field?->nama}}</strong>
      <span class="sig-title">{{$sambutan->field?->jabatan}}</span>
    </div>
  </div>
</section>
@endif