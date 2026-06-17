{{web_header()}}
<section class="info-section">
    <div class="container">
        <div class="section-header">
            <h2>Informasi Rumah Sakit</h2>
            <p> Berbagai informasi penting mengenai pelayanan, prosedur, dan ketentuan yang berlaku di RSUD Pratama Pulau Rupat.
            </p>
        </div>
        <div class="info-grid">
            {{-- Jam pelayanan --}}
            <div class="info-card">
                <div class="info-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h4>Jam Pelayanan</h4>
                <p> Informasi jadwal pelayanan rawat jalan, IGD, dan layanan kesehatan lainnya. </p>
                <button class="info-toggle">
                    Selengkapnya <i class="fas fa-chevron-down"></i>
                </button>
                <div class="info-content">
                    <p>
                        <strong>IGD:</strong> 24 Jam setiap hari.<br>
                        <strong>Rawat Jalan:</strong> Senin - Jumat pukul 08.00 - 14.00 WIB.<br>
                        <strong>Administrasi:</strong> Senin - Jumat pukul 08.00 - 16.00 WIB.
                    </p>
                </div>
            </div>
            {{-- Berobat --}}
            <div class="info-card">
                <div class="info-icon">
                    <i class="fas fa-file-medical"></i>
                </div>
                <h4>Persyaratan Berobat</h4>
                <p> Panduan dokumen dan persyaratan yang perlu dibawa saat melakukan pemeriksaan.
                </p>
                <button class="info-toggle">
                    Selengkapnya <i class="fas fa-chevron-down"></i>
                </button>
                <div class="info-content">
                    <p> Dokumen yang perlu dibawa: </p>
                    <ul>
                        <li>KTP / Kartu Identitas</li>
                        <li>Kartu BPJS (jika peserta BPJS)</li>
                        <li>Surat Rujukan dari Faskes Tingkat Pertama</li>
                        <li>Berkas pemeriksaan sebelumnya (jika ada)</li>
                    </ul>
                </div>
            </div>
            {{-- Informasi BPJS --}}
            <div class="info-card">
                <div class="info-icon">
                    <i class="fas fa-hospital-user"></i>
                </div>
                <h4>Informasi BPJS</h4>
                <p> Ketentuan dan prosedur penggunaan BPJS Kesehatan untuk mendapatkan pelayanan. </p>
                <button class="info-toggle">
                    Selengkapnya <i class="fas fa-chevron-down"></i>
                </button>
                <div class="info-content">
                    <p> Pasien BPJS wajib membawa: </p>
                    <ul>
                        <li>Kartu BPJS Kesehatan</li>
                        <li>KTP atau Kartu Keluarga</li>
                        <li>Surat Rujukan (jika diperlukan)</li>
                    </ul>
                </div>
            </div>
            {{-- Fasilitas & Sarana --}}
            <div class="info-card">
                <div class="info-icon">
                    <i class="fas fa-hospital"></i>
                </div>
                <h4>Fasilitas & Sarana</h4>
                <p> Informasi terbaru dan pengumuman resmi dari RSUD Pratama Pulau Rupat.
                </p>
                <button class="info-toggle">
                    Selengkapnya <i class="fas fa-chevron-down"></i>
                </button>
                <div class="info-content">
                    <ul>
                        <li>Instalasi Gawat Darurat (IGD) 24 Jam</li>
                        <li>Poliklinik Rawat Jalan</li>
                        <li>Rawat Inap</li>
                        <li>Farmasi / Apotek</li>
                        <li>Laboratorium</li>
                        <li>Ruang Tunggu Pasien dan Keluarga</li>
                        <li>Area Parkir Kendaraan</li>
                    </ul>
                </div>
            </div>
            {{-- Sistem Rujukan --}}
            <div class="info-card">
                <div class="info-icon">
                    <i class="fas fa-share-nodes"></i>
                </div>
                <h4>Sistem Rujukan</h4>
                <p> Informasi mengenai hak serta kewajiban pasien selama menerima pelayanan kesehatan. </p>
                <button class="info-toggle">
                    Selengkapnya <i class="fas fa-chevron-down"></i>
                </button>
                <div class="info-content">
                    <p> Pasien peserta BPJS dapat memperoleh pelayanan melalui sistem rujukan berjenjang. </p>
                    <ul>
                        <li>Datang ke Fasilitas Kesehatan Tingkat Pertama (FKTP).</li>
                        <li>Membawa surat rujukan yang masih berlaku.</li>
                        <li>Membawa kartu BPJS dan identitas diri.</li>
                        <li>Pasien gawat darurat dapat langsung ke IGD tanpa rujukan.</li>
                    </ul>
                </div>
            </div>
            {{-- Hak & Kewajiban Pasian --}}
            <div class="info-card">
                <div class="info-icon">
                    <i class="fas fa-share-nodes"></i>
                </div>
                <h4>Hak & Kewajiban Pasien</h4>
                <p> Informasi mengenai hak dan kewajiban pasien selama menerima pelayanan kesehatan. </p>
                <button class="info-toggle">
                    Selengkapnya <i class="fas fa-chevron-down"></i>
                </button>
                <div class="info-content">
                    <p><strong>Hak Pasien:</strong></p>
                    <ul>
                        <li>Mendapatkan pelayanan yang aman dan bermutu.</li>
                        <li>Mendapatkan informasi mengenai kondisi kesehatan.</li>
                        <li>Menjaga kerahasiaan data medis.</li>
                        <li>Menyampaikan saran dan pengaduan.</li>
                    </ul>
                    <p><strong>Kewajiban Pasien:</strong></p>
                    <ul>
                        <li>Memberikan informasi kesehatan yang benar.</li>
                        <li>Mematuhi tata tertib rumah sakit.</li>
                        <li>Menghormati hak pasien lain dan petugas kesehatan.</li>
                        <li>Memenuhi kewajiban administrasi sesuai ketentuan.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
{{ web_footer() }}