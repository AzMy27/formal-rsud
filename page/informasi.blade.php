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
                    <span class="toggle-text">Selengkapnya</span>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <div class="info-content">
                    <p>
                        <strong>IGD:</strong> 24 Jam setiap hari.<br>
                        <strong>Rawat Jalan:</strong> Senin - Jumat pukul 08.00 - 12.00 WIB.<br>
                        <strong>Administrasi:</strong> Senin - Jumat pukul 08.00 - 11.00 WIB.
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
                    <span class="toggle-text">Selengkapnya</span>
                    <i class="fas fa-chevron-down"></i>
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
                    <span class="toggle-text">Selengkapnya</span>
                    <i class="fas fa-chevron-down"></i>
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
                    <span class="toggle-text">Selengkapnya</span>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <div class="info-content">
                    <ul>
                        <li>Instalasi Gawat Darurat (IGD) 24 Jam</li>
                        <li>Poliklinik Rawat Jalan</li>
                        <li>Rawat Inap</li>
                        <li>Farmasi / Apotek</li>
                        <li>Ruang Tunggu Pasien dan Keluarga</li>
                        <li>Area Parkir Kendaraan</li>
                    </ul>
                </div>
            </div>
            {{-- Sistem Rujukan --}}
            <div class="info-card">
                <div class="info-icon">
                    <i class="fas fa-share"></i>
                </div>
                <h4>Sistem Rujukan</h4>
                <p> Alur dan prosedur rujukan berjenjang BPJS Kesehatan. </p>
                <button class="info-toggle">
                    <span class="toggle-text">Selengkapnya</span>
                    <i class="fas fa-chevron-down"></i>
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
            {{-- Hak & Kewajiban Pasien --}}
            <div class="info-card">
                <div class="info-icon">
                    <i class="fas fa-file-contract"></i>
                </div>
                <h4>Hak & Kewajiban Pasien</h4>
                <p>Sesuai Pasal 276 & 277 UU No. 17 Tahun 2023 tentang Kesehatan.</p>
                <button class="info-toggle">
                    <span class="toggle-text">Selengkapnya</span>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <div class="info-content">
                    <p><strong>Hak Pasien:</strong></p>
                    <ul>
                        <li>Mendapatkan informasi mengenai Kesehatan dirinya.</li>
                        <li>Mendapatkan penjelasan yang memadai mengenai Pelayanan Kesehatan yang diterimanya.</li>
                        <li>Mendapatkan Pelayanan Kesehatan sesuai dengan kebutuhan medis, standar profesi, dan pelayanan yang bermutu.</li>
                        <li>Menolak atau menyetujui tindakan medis, kecuali untuk tindakan medis yang diperlukan dalam rangka pencegahan penyakit menular dan penanggulangan KLB atau Wabah.</li>
                        <li>Mendapatkan akses terhadap informasi yang terdapat di dalam rekam medis.</li>
                        <li>Meminta pendapat Tenaga Medis atau Tenaga Kesehatan lain.</li>
                        <li>Mendapatkan hak lain sesuai dengan ketentuan peraturan perundangan-undangan.</li>
                    </ul>
                    <p><strong>Kewajiban Pasien:</strong></p>
                    <ul>
                        <li>Memberikan informasi kesehatan yang benar. Memberikan informasi yang lengkap dan jujur tentang masalah kesehatannya.</li>
                        <li>Mematuhi nasihat dan petunjuk Tenaga Medis dan Tenaga Kesehatan.</li>
                        <li>Menghormati hak pasien lain dan petugas kesehatan.Mematuhi ketentuan yang berlaku pada Fasilitas Pelayanan Kesehatan.</li>
                        <li>Memberikan imbalan jasa atas pelayanan yang diterima.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
{{ web_footer() }}