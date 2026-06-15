<section id="slider">
  <div class="slider-wrapper">
    @foreach(get_banner('slider',3) as $key => $row)
    <div class="slider-item {{ $key == 0 ? 'active' : '' }}">
      <img src="{{ $row->image }}" alt="Banner RSUD">
      <div class="slider-overlay"></div>
      <div class="slider-caption">
        <span>RSUD PRATAMA PULAU RUPAT</span>
        <h1>Melayani Dengan Hati,<br>Untuk Masyarakat Sehat</h1>
      </div>
    </div>
    @endforeach
  </div>
</section>