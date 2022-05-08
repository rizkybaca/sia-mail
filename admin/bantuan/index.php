<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card">
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

            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->