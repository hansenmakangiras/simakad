<div class="row-fluid">
    <div class="span12">
        <div class="widget">            
            <div class="widget-body">
                <div class="navbar">
                    <div class="navbar-inner">
                        <div class="container">
                            <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar">
                                <span class="icon-bar">
                                </span>
                                <span class="icon-bar">
                                </span>
                                <span class="icon-bar">
                                </span>
                            </a>
                            <a href="#" class="brand">
                                Filter Data untuk ditampilkan
                            </a>                            
                            <?php echo form_open('operator/cari','class="navbar-form pull-right"');?>
                                <input type="text" placeholder="Cari Data..." class="search-query input-large" name="cari" id="cari">  
                                <button class="btn btn-small btn-info" type="submit" name="btn_cari"> Cari</button>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
                <?php echo form_open('operator/set', 'class="form-horizontal" name="frm_filter"'); ?>
                <div class="control-group">  
                    <select class="chosen-select" style="width: 15%" id="id_angkatan" name="id_angkatan">
                        <option value=""> Pilih Angkatan </option>
                        <?php
                        foreach ($angkatan as $ang) {
                            if ($this->session->userdata("id_angkatan_session") == $ang['id_angkatan']) {
                                ?>
                                <option value="<?php echo $ang['id_angkatan']; ?>" selected="selected"><?php echo $ang['angkatan']; ?></option>
                                <?php
                            } else {
                                ?>
                                <option value="<?php echo $ang['id_angkatan']; ?>"><?php echo $ang['angkatan']; ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>

                    <select class="chosen-select" style="width: 15%" id="id_sub_prodi" name="id_sub_prodi">
                        <option value=""> Pilih Jenis Diklat</option>
                        <?php
                        foreach ($diklat as $dik) {
                            if ($this->session->userdata("id_diklat_session") == $dik['id_sub_prodi']) {
                                ?>
                                <option value="<?php echo $dik['id_sub_prodi']; ?>" selected="selected"><?php echo $dik['sub_prodi']; ?></option>
                                <?php
                            } else {
                                ?>
                                <option value="<?php echo $dik['id_sub_prodi']; ?>"><?php echo $dik['sub_prodi']; ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                    <select class="chosen-select" style="width: 15%" id="id_kelas" name="id_kelas">
                        <option value="">Pilih Kelas</option>
                        <?php
                        foreach ($kelas as $kls) {
                            if ($this->session->userdata("id_kelas_session") == $dik['id_sub_prodi']) {
                                ?>
                                <option value="<?php echo $kls['id_kelas']; ?>" selected="selected"><?php echo $kls['nama_kelas']; ?></option>
                                <?php
                            } else {
                                ?>
                                <option value="<?php echo $kls['id_kelas']; ?>"><?php echo $kls['nama_kelas']; ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>                    
                    <input autofocus style="width: 15%" type="text" name="no_registrasi" value="<?php echo $this->session->userdata("no_registrasi"); ?>" id="no_registrasi" placeholder="Ketikkan No Registrasi.."/>
                    <input style="width: 15%" type="text" name="nama_peserta" value="<?php echo $this->session->userdata("nama_peserta"); ?>" id="nama_peserta" placeholder="Ketikkan nama untuk mencari.."/>

                    <button class="btn btn-info" type="submit" name="btn_cari">
                        <i class="icon-search"></i>
                    </button>                    
                    
                    <a href ="<?php echo base_url('operator/eksport'); ?>" class="btn btn-inverse" name="eksport" type="submit">
                        <i class="icon-upload"></i>
                    </a>
                </div>
<!--                <script>
                    $(".chosen-select").chosen().change(function(){ 
                            document.forms["frm_filter"].submit();
                    });
		</script>-->
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="widget no-margin">
            <div class="widget-header">
                <div class="title">
                    Laporan Peserta Pendaftaran
                </div>
            </div>
            <div class="widget-body">
                <div class="invoice">
                    <img src="<?php echo base_url('assets/images/kop-small.png'); ?>" class="logo" alt="logo" />
                    <div class="invoice-data-container">
                        <div class="from">
                            <h5>
                                DAFTAR PENETAPAN KELAS PESERTA UJIAN
                            </h5>
                        </div><hr>
                        <table class="table table-condensed table-striped table-bordered table-hover no-margin">
                            <thead>
                                <tr>
                                    <th style="width:3%">
                                        No.
                                    </th>
                                    <th style="width:10%">
                                        No. Registrasi
                                    </th>
                                    <th style="width:20%" class="hidden-phone">
                                        Nama Peserta
                                    </th>

                                    <th style="width:10%" class="hidden-phone">
                                        Tgl Lahir
                                    </th>
                                    <th style="width:10%" class="hidden-phone">
                                        Angkatan
                                    </th>
                                    <th style="width:10%" class="hidden-phone">
                                        Jenis Diklat
                                    </th>
                                    <th style="width:10%" class="hidden-phone">
                                        Kelas
                                    </th>
                                    <th style="width:10%" class="hidden-phone">
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(count($cari_data)): foreach ($cari_data as $regs): ?>
                                <tr>
                                    <td>
                                        <?php echo $regs['id_registrasi']; ?>
                                    </td>
                                    <td>
                                        <?php echo $regs['no_registrasi']; ?>
                                    </td>
                                    <td class="hidden-phone">
                                        <?php echo $regs['nama_peserta']; ?>
                                    </td>
                                    <td class="hidden-phone">
                                        <?php echo $regs['tgl_lahir']; ?>
                                    </td>
                                    <td class="hidden-phone">
                                        <?php echo $regs['id_angkatan']; ?>
                                    </td>
                                    <td class="hidden-phone">
                                        <?php echo $regs['id_sub_prodi']; ?>
                                    </td>
                                    <td class="hidden-phone">
                                        <?php echo $regs['id_kelas']; ?>
                                    </td>
                                    <td class="hidden-phone">
                                        <?php echo $regs['status_daftar']; ?>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td class="total" colspan="7">
                                        Total Peserta
                                    </td>
                                    <td class="hidden-phone">
                                        30 orang
                                    </td>
                                </tr>                                
                                <tr class="success">
                                    <td class="total" colspan="7">
                                        Total Data
                                    </td>
                                    <td class="hidden-phone">
                                        300
                                    </td>
                                </tr>
                                <?php endforeach; ?>                                 
                                <?php endif; ?>
                            </tbody>
                        </table>
                        <div class="pagination pagination-centered no-margin">
                            <ul>
                                <?php echo $paginator; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
