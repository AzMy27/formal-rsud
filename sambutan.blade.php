@if($sambutan = query()->detail('sambutan'))
<section id="sambutan">
  <div class="sambutan-visual">
    <div class="dir-photo">
      <img src="{{ $sambutan->thumbnail }}" alt="">
    </div>
  </div>
 
  <div class="sambutan-text">
    <p class="section-eyebrow">Kata Sambutan</p>
    <h2 class="section-title">Salam Sehat dari<br><em>Direktur Utama</em></h2>
    <div class="sambutan-body">
      {!!$sambutan->content!!}
    </div>
    <div class="dir-signature">
      <p>Hormat kami,</p>
      <strong>{{$sambutan->field?->nama}}</strong>
      <span class="sig-title">{{$sambutan->field?->jabatan}}</span>
    </div>
  </div>
</section>
@endif