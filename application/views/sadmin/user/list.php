                    <div class="row-fluid">
                        <div class="span12">
                            <div class="widget">
                                <div class="widget-header">
                                    <div class="title">Data User</div>
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
                                    <div id="data-table" class="example_alt_pagination">
                                        <table class="table table-condensed table-striped table-bordered table-hover no-margin" id="data-table">
                                            <thead>
                                                <tr>
                                                    <th style="width:5%">No</th>
                                                    <th style="width:30%">Username</th>
                                                    <th style="width:30%">Nama Lengkap</th>
                                                    <th style="width:10%">Email</th>
                                                    <th style="width:10%">Level Akses</th>
                                                    <th style="width:10%">Status</th>
                                                    <th style="width:10%">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(count($user)): foreach ($user as $users): ?>
                                                <?php dump($users) ;?>
                                                <tr>
                                                    <td class="hidden-phone"><?php echo $users->id_user; ?></td>
                                                    <td class="hidden-phone">
                                                        <span class="label label label-inverse">
                                                            <?php echo $users->username; ?>
                                                        </span>
                                                    </td>
                                                    <td class="hidden-phone">
                                                        <span class="name">
                                                            <?php echo anchor('admin/user/edit'.$users->id_user,$users->nama_lengkap); ?>
                                                        </span>
                                                    </td>
                                                    <td class="hidden-phone"><?php echo $users->email; ?></td>                                                                          

                                                    <td class="hidden-phone">
                                                        <?php if ($users->id_level == 1) {
                                                            echo'Super Admin';
                                                        }elseif ($users->id_level == 2) {
                                                            echo'Administrator';
                                                        }elseif ($users->id_level == 3) {
                                                            echo'Operator';
                                                        }elseif ($users->id_level == 4) {
                                                            echo'Catar';
                                                        }else{ echo'Guest';                                                   
                                                        }?>
                                                    </td>                                                                                                                                            
                                                    <td class="hidden-phone"> 
                                                        <span class="label label-success">
                                                            <?php echo $users->status; ?>
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
                    </div>