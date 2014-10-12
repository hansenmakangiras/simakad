            <div class="wrapper">
                <div class="hero-unit no-margin" style="padding: 10px;">
                    <h5 class="text-success">
                        Welcome, <?php echo $this->session->userdata['nama_lengkap'];?>
                    </h5>
                    <small><span class="text-error"><b>
                            Anda login Hari ini | <?php echo $this->session->userdata['tgl'];?> 
                        </b></span></small>
                    
                    <small><span class="text-error"><b>
                            | Pukul : <?php echo $this->session->userdata['waktu'];?>
                        </b></span></small>
                </div>
            </div>
            
<!--            <div class="wrapper">
                <div class="btn-group">
                    <button class="btn">
                        Panduan
                    </button>
                    <button class="btn">
                        Tentang
                    </button>
                    <button class="btn">
                        Developer
                    </button>
                </div>
            </div>-->

<!--            <div class="wrapper">
                <table class="table table-condensed table-striped table-bordered table-hover no-margin">
                    <thead>
                        <tr>
                            <th style="width:70%">
                                Peserta Daftar Hari Ini
                            </th>
                            <th style="width:20%">
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(count($this->session->userdata['info_regis'])): foreach ($info_regis as $regs): ?>
                        <tr>
                            <td>
                                <span class="name">
                                    <?php echo $this->session->userdata['nama_peserta']; ?>
                                </span>
                            </td>
                            <td>
                                <span class="label label label-info">
                                    <?php echo $this->session->userdata['jenis_diklat']; ?>
                                </span>
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
            </div>-->

            <div class="wrapper">
                <a href="<?php echo base_url('user/logout') ;?>" class="btn btn-warning2 btn-block">
                    <i class="icon-white icon-off">
                    </i> Logout
                </a>
            </div>
