<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Aplikasi pendaftaran Siswa SMKN DARUL ULUM MUNCAR.">
  <meta name="author" content="e-development.tech">

  <title>SEMINAR ONLINE</title>

  <!-- gambar title -->
  <link rel="icon" href="assets/img/pormiki.png">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- css datepicker -->
  <link href="assets/vendor/datepicker/css/bootstrap-datepicker.css" rel="stylesheet">

  <style>
    .logo-login {
        max-height: 160px;
        margin-bottom: 20px;
    }
  </style>

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-md-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-md-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Pendaftaran Seminar Online "Kontribusi PMIK dengan Hadirnya PMK 24 Th 2022 tentang Rekam Medis"</h1>
                  </div>
                  <form class="user" action="registrasi_control.php" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Email Aktif</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Email" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Instansi Kerja</label>
                        <input type="text" class="form-control" id="nama" placeholder="Instansi Kerja" name="nama" required>
                    </div>
                    <div class="col-md-6">
                            <label for="agama">Asal DPC</label>
                            <select name="agama" id="agama" class="form-control" required>
                              <option value="">Pilih DPC</option>
                                <option value="islam">BANYUMAS</option>
                                <option value="kristen">BATANG</option>
                                <option value="katolik">BLORA</option>
                                <option value="hindu">BOYOLALI</option>
                                <option value="budha">BANJARNEGARA</option>
                                <option value="budha">CILACAP</option>
                                <option value="budha">BREBES</option>
                                <option value="budha">DEMAK</option>
                                <option value="budha">BREBES</option>
                                <option value="budha">GROBOGAN</option>
                                <option value="budha">KARANGANYAR</option>
                                <option value="budha">JEPARA</option>
                                <option value="budha">KEBUMEN</option>
                                <option value="budha">KENDAL</option>
                                <option value="budha">KLATEN</option>
                                <option value="budha">KUDUS</option>
                                <option value="budha">MAGELANG</option>
                                <option value="budha">PATI</option>
                                <option value="budha">PEKALONGAN</option>
                                <option value="budha">MAGELANG</option>
                                <option value="budha">PEMALANG</option>
                                <option value="budha">PURBALINGGA</option>
                                <option value="budha">PURWOREJO</option>
                                <option value="budha">PURBALINGGA</option>
                                <option value="budha">REMBANG</option>
                                <option value="budha">PURBALINGGA</option>
                                <option value="budha">SALATIGA</option>
                                <option value="budha">SEMARANG KOTA</option>
                                <option value="budha">SEMARANG KAB</option>
                                <option value="budha">SRAGEN</option>
                                <option value="budha">SUKOHARJO</option>
                                <option value="budha">SURAKARTA</option>
                                <option value="budha">TEGAL</option>
                                <option value="budha">TEMANGGUNG</option>
                                <option value="budha">WONOGIRI</option>
                                <option value="budha">WONOSOBO</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nomor E-KTA</label>
                        <input type="text" class="form-control" id="nama" placeholder="Mohon diisi tanpa 'strip' hanya angka, contoh. 3374167890123" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Masa Berlaku KTA</label>
                        <input type="text" class="form-control" id="nama" placeholder="Misalnya : 2023" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Upload E-KTA</label>
                        <input type="text" class="form-control" id="nama" placeholder="Misalnya : 2023" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Masa Habis STR</label>
                        <input type="date" class="form-control" id="nama" placeholder="Misalnya : 2023" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">No HP</label>
                        <input type="text" class="form-control" id="nama" placeholder="" name="nama" required>
                    </div>
                    <div class="form-group row">
                        
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label>Sesi Acara (Pilih salah satu sesi seminar)</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="lk" value="L">
                                <label class="form-check-label" for="lk">
                                    Sesi 1(07.00-10.00)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="pr" value="P">
                                <label class="form-check-label" for="pr">
                                    Sesi 2(10.30-13.30)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="pr" value="P">
                                <label class="form-check-label" for="pr">
                                    Sesi 3(14.00-17.00)
                                </label>
                            </div>
                        </div>                       
                    </div>

                    <input type="checkbox" name="" value="">Saya mengisi data dengan benar dan dapat dipertanggungjawabkan<br>

                    <button name="btn_registrasi" value="simpan" class="btn btn-primary btn-user btn-block">
                      Registrasi
                    </button>
                  </form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/js/sb-admin-2.min.js"></script>

  <!-- js datepicker -->
  <script src="assets/vendor/datepicker/js/bootstrap-datepicker.min.js"></script>

  <script type="text/javascript">
    $(function(){
        $(".datepicker").datepicker({
            format: 'dd-mm-yyyy',
            autoclose: true,
            todayHighlight: true,
        }).on('change.datepicker', function (ev) {
            console.log('tes');
        });
    });
  </script>

</body>

</html>
