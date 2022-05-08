<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card mb-4">
        <div class="card-header">
            Bantuan
        </div>
        <div class="card-body">
            <h5 class="card-title">Bantuan alur penggunaan sistem</h5>
            <p class="card-text">Berikut adalah alur penggunaan sistem beserta penjelasan dari fitur tersebut dengan menekan tombol yang tersedia.</p>

            <div class="accordion" id="accordionBantuan">
                <div class="card">
                    <div class="card-header" id="headingGuru">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseGuru" aria-expanded="true" aria-controls="collapseGuru">
                                #1 Guru (Menu Guru)
                            </button>
                        </h2>
                    </div>

                    <div id="collapseGuru" class="collapse show" aria-labelledby="headingGuru" data-parent="#accordionBantuan">
                        <div class="card-body">
                            Anda adalah admin, hal yang pertama anda lakukan adalah membuat data guru, bisa dengan tombol cepat menambah guru satu-persatu, bisa juga dengan menu import guru menggunakan file csv. Format csv suah tersedia. Data yang disimpan adalah data profil dan data otentikasi login. Email yang disimpan akan dikirimi password untuk otentikasi login pada sistem ini.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingKurikulum">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseKurikulum" aria-expanded="false" aria-controls="collapseKurikulum">
                                #2 Kurikulum (Menu Akademik)
                            </button>
                        </h2>
                    </div>
                    <div id="collapseKurikulum" class="collapse" aria-labelledby="headingKurikulum" data-parent="#accordionBantuan">
                        <div class="card-body">
                            Berisi data kurikulum pendidikan yang digunakan di sekolah. Biasanya sekolah akan membuat kurikulum baru sesuai arahan dari dinas pendidikan. Kurikulum menjadikan acuan dari pelajaran apa saja yang akan diterima siswa di tiap jenjang masing-masing. Misalnya, setelah membuat data kurikulum, silakan membuat daftar pelajaran yang akan diterima siswa dari kelas 7(tujuh) sampai 9(sembilan).
                            Catatan: tidak perlu menghapus kurikulum yang sudah tidak terpakai, karena akan mempengaruhi data lain yang tersimpan.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTahunAkademik">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTahunAkademik" aria-expanded="false" aria-controls="collapseTahunAkademik">
                                #3 Tahun Akademik (Menu Akademik)
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTahunAkademik" class="collapse" aria-labelledby="headingTahunAkademik" data-parent="#accordionBantuan">
                        <div class="card-body">
                            Tahun akademik untuk menyimpan data akademik sekolah. Diisi dengan tahun beserta semesternya (genap atau ganjil).
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTahunAngkatan">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTahunAngkatan" aria-expanded="false" aria-controls="collapseTahunAngkatan">
                                #4 Tahun Angkatan (Menu Akademik)
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTahunAngkatan" class="collapse" aria-labelledby="headingTahunAngkatan" data-parent="#accordionBantuan">
                        <div class="card-body">
                            Tahun Angkatan untuk menyimpan data angkatan siswa. Diisi dengan tahunnya saja.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingJenjang">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseJenjang" aria-expanded="false" aria-controls="collapseJenjang">
                                #5 Jenjang (Menu Akademik)
                            </button>
                        </h2>
                    </div>
                    <div id="collapseJenjang" class="collapse" aria-labelledby="headingJenjang" data-parent="#accordionBantuan">
                        <div class="card-body">
                            Jenjang untuk menyimpan data jenjang sekolah. Diisi dengan jenjangnya saja.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingKelas">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseKelas" aria-expanded="false" aria-controls="collapseKelas">
                                #6 Kelas (Menu Akademik)
                            </button>
                        </h2>
                    </div>
                    <div id="collapseKelas" class="collapse" aria-labelledby="headingKelas" data-parent="#accordionBantuan">
                        <div class="card-body">
                            Kelas untuk menyimpan data kelas yang ada di sekolah. Diisi berdasarkan jenjangnya.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingPelajaran">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsePelajaran" aria-expanded="false" aria-controls="collapsePelajaran">
                                #7 Pelajaran (Menu KBM)
                            </button>
                        </h2>
                    </div>
                    <div id="collapsePelajaran" class="collapse" aria-labelledby="headingPelajaran" data-parent="#accordionBantuan">
                        <div class="card-body">
                            Pelajaran untuk menyimpan data pelajaran yang ada di sekolah. Diisi berdasarkan kurikulum yang sudah ada, sifatnya menjadi universal di pakai di kelas yang berbeda dengan jenjang yang sama.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSiswa">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSiswa" aria-expanded="false" aria-controls="collapseSiswa">
                                #8 Siswa (Menu Siswa)
                            </button>
                        </h2>
                    </div>
                    <div id="collapseSiswa" class="collapse" aria-labelledby="headingSiswa" data-parent="#accordionBantuan">
                        <div class="card-body">
                            Siswa untuk menyimpan data siswa yang ada di sekolah. Sama dengan guru, data yang disimpan adalah data profil dan otentikasi untuk login ke dalam sistem.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingRombel">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseRombel" aria-expanded="false" aria-controls="collapseRombel">
                                #9 Rombel (Menu KBM)
                            </button>
                        </h2>
                    </div>
                    <div id="collapseRombel" class="collapse" aria-labelledby="headingRombel" data-parent="#accordionBantuan">
                        <div class="card-body">
                            Rombel untuk membuat kelompok siswa berdasarkan tahun angkatan dan kelasnya. Data ini diperlukan untuk menentukan pelajaran dengan kurikulum mana yang akan diterima siswa, dsb.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingDetailRombel">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseDetailRombel" aria-expanded="false" aria-controls="collapseDetailRombel">
                                #10 Detail Rombel (Menu KBM->Rombel)
                            </button>
                        </h2>
                    </div>
                    <div id="collapseDetailRombel" class="collapse" aria-labelledby="headingDetailRombel" data-parent="#accordionBantuan">
                        <div class="card-body">
                            Detail rombel untuk menyimpan data siswa ke dalam rombel.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingJadwalPelajaran">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseJadwalPelajaran" aria-expanded="false" aria-controls="collapseJadwalPelajaran">
                                #11 Jadwal Pelajaran (Menu KBM)
                            </button>
                        </h2>
                    </div>
                    <div id="collapseJadwalPelajaran" class="collapse" aria-labelledby="headingJadwalPelajaran" data-parent="#accordionBantuan">
                        <div class="card-body">
                            Jadwal pelajaran untuk menyimpan jadwal pelajaran di sekolah, sekaligus menghubungkan antara data pelajaran dan kelasnya.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingKalenderAkademik">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseKalenderAkademik" aria-expanded="false" aria-controls="collapseKalenderAkademik">
                                #12 Kalender Akademik (Menu Akademik)
                            </button>
                        </h2>
                    </div>
                    <div id="collapseKalenderAkademik" class="collapse" aria-labelledby="headingKalenderAkademik" data-parent="#accordionBantuan">
                        <div class="card-body">
                            Kalender akademik untuk menyimpan kegiatan di sekolah beserta waktunya.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingKehadiran">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseKehadiran" aria-expanded="false" aria-controls="collapseKehadiran">
                                #13 Kehadiran (Menu KBM)
                            </button>
                        </h2>
                    </div>
                    <div id="collapseKehadiran" class="collapse" aria-labelledby="headingKehadiran" data-parent="#accordionBantuan">
                        <div class="card-body">
                            Kehadiran untuk menyimpan kehadiran siswa di sekolah berdasarkan jadwal pelajaran.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingDetailKehadiran">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseDetailKehadiran" aria-expanded="false" aria-controls="collapseDetailKehadiran">
                                #14 Detail Kehadiran (Menu KBM->Kehadiran)
                            </button>
                        </h2>
                    </div>
                    <div id="collapseDetailKehadiran" class="collapse" aria-labelledby="headingDetailKehadiran" data-parent="#accordionBantuan">
                        <div class="card-body">
                            Detail kehadiran untuk menyimpan detail kehadiran siswa di sekolah berdasarkan kehadirannya.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingNilai">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseNilai" aria-expanded="false" aria-controls="collapseNilai">
                                #15 Nilai (Menu KBM)
                            </button>
                        </h2>
                    </div>
                    <div id="collapseNilai" class="collapse" aria-labelledby="headingNilai" data-parent="#accordionBantuan">
                        <div class="card-body">
                            Nilai untuk menyimpan nilai siswa di sekolah berdasarkan jadwal pelajaran.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingDetailNilai">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseDetailNilai" aria-expanded="false" aria-controls="collapseDetailNilai">
                                #16 Detail Nilai (Menu KBM->Nilai)
                            </button>
                        </h2>
                    </div>
                    <div id="collapseDetailNilai" class="collapse" aria-labelledby="headingDetailNilai" data-parent="#accordionBantuan">
                        <div class="card-body">
                            Detail Nilai untuk menyimpan detail Nilai siswa di sekolah berdasarkan Nilainya.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingProfilSekolah">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseProfilSekolah" aria-expanded="false" aria-controls="collapseProfilSekolah">
                                #17 Profil Sekolah (Menu Profil Sekolah)
                            </button>
                        </h2>
                    </div>
                    <div id="collapseProfilSekolah" class="collapse" aria-labelledby="headingProfilSekolah" data-parent="#accordionBantuan">
                        <div class="card-body">
                            Profil sekolah untuk menyimpan profil sekolah.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingProfilSistem">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseProfilSistem" aria-expanded="false" aria-controls="collapseProfilSistem">
                                #18 Profil Sistem (Menu Profil Sistem)
                            </button>
                        </h2>
                    </div>
                    <div id="collapseProfilSistem" class="collapse" aria-labelledby="headingProfilSistem" data-parent="#accordionBantuan">
                        <div class="card-body">
                            Profil Sistem untuk menyimpan profil sistem.
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->