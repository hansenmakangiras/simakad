            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-header">
                            <div class="title">
                                Detail Data Pendaftar 
                                <span class="mini-title">
                                    
                                </span>
                            </div>
                            <span class="tools">
                                <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                            </span>
                        </div>
                        <div class="widget-body">
                            <?php echo empty($registrasi->id) ? : 'Detail Peserta : '.$regs->nama_peserta ;?>
                                <div class="control-group">
                                    <label class="control-label" for="no_reg">
                                        No. Registrasi
                                    </label>
                                    <div class="controls">
                                        <input type="text" name="no_registrasi" id="no_reg" class="span6" value="<?php echo set_value('no_registrasi',$registrasi->no_registrasi) ;?>" placeholder="Masukkan No. Registrasi" readonly="" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="nama_peserta">
                                        Nama Peserta
                                    </label>
                                    <div class="controls">
                                        <input type="text" value="<?php echo set_value('nama_peserta',$registrasi['nama_peserta']) ;?>" class="span6" placeholder="Masukkan Nama Lengkap Anda">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="email">
                                        Alamat Email
                                    </label>
                                    <div class="controls">
                                        <input type="text" name="email" id="email" value="<?php echo set_value('email',$registrasi->email) ;?>" class="span6" placeholder="Enter your Email Address"  />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="telepon">
                                        Telp./No.HP
                                    </label>
                                    <div class="controls">
                                        <input type="text" name="telepon" id="telepon" class="span6" value="<?php echo set_value('telepon',$registrasi->telepon) ;?>" placeholder="Masukkan No. Telp./HP anda"  />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="tempat_lahir">
                                        Tempat Lahir
                                    </label>
                                    <div class="controls">
                                        <input type="text" name="tempat_lahir" id="tempat_lahir" class="span6" value="<?php echo set_value('tempat_lahir',$registrasi->tempat_lahir) ;?>" placeholder="Tempat Kelahiran Anda"  />
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
                                <div class="form-actions no-margin">
                                    <a href="<?php echo base_url('operator/registrasi/index') ;?>" class="btn btn-info pull-right">
                                        Kembali
                                    </a>
                                    <div class="clearfix">
                                    </div>
                                </div>                                
                        </div>
                    </div>
                </div>

            </div>