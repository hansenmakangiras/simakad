            <div class="row-fluid">
                <div class="span12">
                    <div class="navbar no-margin">
                        <div class="navbar-inner">
                            <form class="navbar-form">
                                <div class="input-append">
                                    <input class="span2" id="appendedInputButtons" type="text">
                                    <button class="btn" type="button">
                                        Search
                                    </button>
                                    <button class="btn btn-info" type="submit">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr class="hr-stylish">
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-header">
                            <div class="title">
                                Input Data Pendaftar 
                                <span class="mini-title">
                                    Registrasi Peserta Diklat 2014
                                </span>
                            </div>
                            <span class="tools">
                                
                            </span>
                        </div>
                        <div class="widget-body">
                            <form class="form-horizontal no-margin" action="<?php echo base_url('operator/registrasi/create');?>" method="POST">
                                <div class="control-group">
                                    <label class="control-label" for="no_reg">
                                        No. Registrasi
                                    </label>
                                    <div class="controls">
                                        <input type="text" name="no_registrasi" id="no_reg" class="span6" value="<?php echo $isi_noreg ;?>" placeholder="Masukkan No. Registrasi" readonly="" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="name">
                                        Nama Peserta
                                    </label>
                                    <div class="controls">
                                        <input type="text" class="span6" placeholder="Masukkan Nama Lengkap Anda">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="email1">
                                        Email Address
                                    </label>
                                    <div class="controls">
                                        <input type="text" name="email1" id="email1" class="span6" placeholder="Enter your Email Address"  />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="telepon">
                                        Telp./No.HP
                                    </label>
                                    <div class="controls">
                                        <input type="text" name="telepon" id="telepon" class="span6" placeholder="Masukkan No. Telp./HP anda"  />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="tempat_lahir">
                                        Tempat Lahir
                                    </label>
                                    <div class="controls">
                                        <input type="text" name="tempat_lahir" id="tempat_lahir" class="span6" placeholder="Tempat Kelahiran Anda"  />
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="DateOfBirthMonth">
                                        Tanggal Lahir
                                    </label>
                                    <div class="controls controls-row">
                                        <?php echo $isihari ;?>
                                        <?php echo $isibulan ;?>
                                        <?php echo $isitahun ;?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">
                                        Jenis Kelamin
                                    </label>
                                    <div class="controls">
                                        <label class="radio inline">
                                            <input type="radio" name="jenkel" id="jenkel" value=1 checked>
                                            Laki-Laki
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="jenkel" id="jenkel" value=2>
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="agama">
                                        Agama
                                    </label>
                                    <div class="controls">
                                        <?php echo $isiagama ;?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="pendidikan">
                                        Pendidikan
                                    </label>
                                    <div class="controls">
                                        <?php echo $isipendidikan ;?>
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label" for="sertifikat">
                                        Sertifikat Diklat
                                    </label>
                                    <div class="controls">
                                        <?php echo $isisertifikat ;?>
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label" for="date_range1">
                                        Periode
                                    </label>
                                    <div class="controls">
                                        <div class="input-append">
                                            <input type="text" name="date_range1" id="date_range1" class="date_picker" placeholder="01/29/2013 - 01/31/2013"/>
                                            <span class="add-on btn date_picker">
                                                <i class="icon-calendar">
                                                </i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label" for="kelas">
                                        Kelas
                                    </label>
                                    
                                    <div class="controls">
                                        <?php echo $isikelas ;?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="angkatan">
                                        Angkatan
                                    </label>
                                    <div class="controls">
                                        <?php echo $isiangkatan ;?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">
                                        Status Pembayaran
                                    </label>
                                    <div class="controls">
                                        <label class="radio inline">
                                            <input type="radio" name="status_byr" id="status_byr" value="Y" checked>
                                            Sudah
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="status_byr" id="status_byr" value="N">
                                            Belum
                                        </label>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">
                                        Status Aktif
                                    </label>
                                    <div class="controls">
                                        <label class="radio inline">
                                            <input type="radio" name="is_aktif" id="is_aktif" value="0" checked>
                                            Aktif
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="is_aktif" id="is_aktif" value="1">
                                            Tidak Aktif
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <div class="controls">
                                        <label class="checkbox">
                                            <input type="checkbox" value="a">
                                            Saya setuju untuk mendaftar, dan mengikuti semua peraturan yang ada.
                                        </label>
                                    </div>
                                </div>
                                <div class="form-actions no-margin">
                                    <button type="submit" class="btn btn-info pull-right">
                                        Daftar
                                    </button>
                                    <div class="clearfix">
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>

            </div>