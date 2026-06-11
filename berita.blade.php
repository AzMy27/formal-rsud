<section id="berita">
    <div class="section-header">
        <p class="section-eyebrow">Info Terkini</p>
        <h2 class="section-title">Berita</em></h2>
        <p>Informasi terbaru seputar kegiatan, program kesehatan, dan pengumuman penting dari RSUD Pratama Pulau Rupat.</p>
    </div>
    @php
    $berita = query()->index_limit('berita', 3)
    @endphp

    @if (count($berita) > 0)
    <div class="news-grid">
        @foreach ($berita as $row )
        <a href="{{ $row->link }}">
            <div class="news-card main">
                <div class="news-img">
                    <img src="{{ $row->thumbnail }}" alt="{{ $row->title }}">
                </div>
                <div class="news-body">
                {{-- <span class="news-tag">{{$row->slug}}</span> --}}
                <h3 class="news-title">{{$row->title}}</h3>
                <p class="news-excerpt">{{$row->short_content}}</p>
                <div class="news-meta">
                    <span>{{ $row->created_at }}</span>
                    <span>• {{ $row->visited }} dilihat</span>
                </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
    @else
    <div class="view-more">
        <a href="#" class="btn-sec">
        Lihat Semua Berita
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
    </div>
    @endif
</section>