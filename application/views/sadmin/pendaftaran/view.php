                    <div class="row-fluid">
                        <div class="span12">
                            <div class="widget">
                                <div class="widget-header">
                                    <div class="title">Data Peserta Pendaftaran</div>
                                    <span class="tools">
                                        <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>                                        
                                    </span>
                                </div>
                                <div class="widget-body">
                                    <a href="<?php echo base_url('operator/registrasi/create');?>" class="btn btn-small"><i class="icon-plus"></i> Tambah</a>
                                    <a href="<?php echo base_url('operator/registrasi/cetak_kartu');?>" class="btn btn-small"><i class="icon-print"></i> Cetak Kartu</a>
                                    <a href="<?php echo base_url('operator/registrasi/upload_foto');?>" class="btn btn-small"><i class="icon-upload-2"></i> Upload Foto</a>
                                    <a href="<?php echo base_url('operator/registrasi/cetak_form');?>" class="btn btn-small"><i class="icon-print"></i> Cetak Formulir</a>
                                    <hr class="hr-stylish">
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
                                    <table class="table table-condensed table-striped table-bordered table-hover no-margin">
                                        <thead>
                                            <tr>
                                                <th style="width:5%">No</th>
                                                <th style="width:10%">No. Registrasi</th>
                                                <th style="width:30%">Nama Peserta</th>
                                                <th style="width:10%">Telepon</th>
                                                <th style="width:10%">Sertifikat</th>
                                                <th style="width:10%">Periode Awal</th>
                                                <th style="width:10%">Periode Akhir</th>
                                                <th style="width:5%">Kelas</th>
                                                <th style="width:5%">Angkatan</th>           
                                                <th style="width:20%">Pembayaran</th>
                                                <th style="width:30%">Aktif</th>
                                                <th style="width:10%">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(count($registrasi)): foreach ($registrasi as $regs): ?>	
                                            <tr>
                                                <td class="hidden-phone"><?php echo $regs->id; ?></td>
                                                <td class="hidden-phone">
                                                    <span class="label label label-inverse">
                                                        <?php echo $regs->no_registrasi; ?>
                                                    </span>
                                                </td>
                                                <td class="hidden-phone">
                                                    <span class="name">
                                                        <?php echo anchor('pendaftaran/edit/'.$regs->id,$regs->nama_peserta); ?>
                                                    </span>
                                                </td>
                                                <td class="hidden-phone"><?php echo $regs->telepon; ?></td>
                                                <td>
                                                    <span class="label label label-info">
                                                        <?php echo $regs->id_sertifikat; ?>
                                                    </span>
                                                </td>
                                                <td class="hidden-phone">
                                                    <span class="name">
                                                        <?php echo $regs->periode_awal; ?>
                                                    </span>
                                                </td>                                                                                                                                       
                                                <td class="hidden-phone">
                                                    <span class="name">
                                                        <?php echo $regs->periode_akhir; ?>
                                                    </span>
                                                </td>                                                                                                                                       
                                                <td class="hidden-phone"><?php echo $regs->id_kelas; ?></td>
                                                <td class="hidden-phone"><?php echo $regs->id_angkatan; ?></td>                             
                                                <td class="hidden-phone">
                                                    <?php if ($regs->status_byr == 'Y') {
                                                        echo'L';
                                                        }else{ echo'B';                                                   
                                                    }?>
                                                </td>                                                                                                                                            
                                                <td class="hidden-phone"> 
                                                    <span class="label label-success">
                                                        <?php if($regs->is_aktif == 'Y'){
                                                            echo 'Aktif';
                                                        }else{
                                                            echo 'Tidak Aktif';
                                                        }
                                                        ?>
                                                    </span>
                                                </td>
                                                <td class="hidden-phone">
                                                    <div class="btn-group">
                                                        <button data-toggle="dropdown" class="btn btn-mini dropdown-toggle">
                                                            Aksi 
                                                            <span class="caret">
                                                            </span>
                                                        </button>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <?php echo anchor('operator/registrasi/detail/'.$regs->id,'View') ; ?>
                                                                </li>
                                                                <li>
                                                                    <?php echo anchor('operator/registrasi/edit/'.$regs->id,'Edit') ; ?>
                                                                </li>
                                                                <li>
                                                                    <?php echo anchor('operator/registrasi/delete/'.$regs->id,'Hapus', array('onclick' => "return confirm ('Apakah Anda yakin untuk menghapus, data ini tidak dapat dikembalikan. Anda Yakin?'")) ; ?>
                                                                </li>
                                                            </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                        <?php else: ?>
                                        <tr>
                                            <td>Data tidak ditemukan</td>
                                        </tr>
                                        <?php endif; ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>