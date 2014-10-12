        <div class="btn-group">
            <button class="btn btn-primary">
                <?php echo $this->session->userdata['nama_lengkap'];?>
            </button>
            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">
                <span class="caret">
                </span>
            </button>
            <ul class="dropdown-menu pull-right">
                <li>
                    <a href="<?php echo base_url('user/profile');?>">
                        Profil <?php echo $this->session->userdata['nama_lengkap'];?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('user/logout');?>">
                        Logout
                    </a>
                </li>
            </ul>
        </div>