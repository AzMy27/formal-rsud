<div class="page-content">
    <div class="section-berita py-5 bg-light">
        <div class="container">

            <div class="row">
                <div class="col-lg-10 mx-auto">

                    <div class="section-head text-center mb-5">
                        <h2 class="text-uppercase text-primary">
                            <i class="fas fa-rss"></i> Berita
                        </h2>

                        <div class="dez-separator-outer">
                            <div class="dez-separator bg-primary style-skew"></div>
                        </div>
                    </div>

                    <div class="row g-4">

                        @forelse($index as $row)

                            <div class="col-lg-4 col-md-6">
                                <article class="news-card h-100">

                                    <a href="{{ $row->link }}">
                                        <img
                                            src="{{ $row->thumbnail }}"
                                            alt="{{ $row->title }}"
                                            class="news-image"
                                            loading="lazy">
                                    </a>

                                    <div class="news-content">

                                        <div class="news-meta">
                                            <span>
                                                <i class="fa fa-calendar"></i>
                                                {{ $row->created_at->translatedFormat('d M Y') }}
                                            </span>
                                        </div>

                                        <h3 class="news-title">
                                            <a href="{{ $row->link }}">
                                                {{ $row->title }}
                                            </a>
                                        </h3>

                                        <p class="news-excerpt">
                                            {{ $row->short_content }}
                                        </p>

                                        <a href="{{ $row->link }}" class="news-link">
                                            Selengkapnya
                                            <i class="fa fa-arrow-right"></i>
                                        </a>

                                    </div>

                                </article>
                            </div>

                        @empty

                            <div class="col-12 text-center py-5">
                                <h4>Belum Ada Berita</h4>
                                <p>Informasi terbaru akan segera ditampilkan.</p>
                            </div>

                        @endforelse

                    </div>

                    <div class="pagination-bx text-center mt-5">
                        {{ $index->links('pagination::bootstrap-5') }}
                    </div>

                    </div>
                    </div>

        </div>
    </div>
</div>