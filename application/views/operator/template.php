<?php echo $this->load->view('operator/template/tpl_head'); ?>

<body>
    <header>
        <img src="<?php echo base_url('assets/images/logo_2.png');?>" alt="logo" />
              
        <?php echo $this->load->view('operator/template/user-nav-operator') ;?>
        <?php echo $this->load->view('operator/template//notifikasi') ;?>
    </header>
    
    <div class="container-fluid">
        <div class="dashboard-container">
            <?php echo $this->load->view('operator/template/top-nav-operator') ;?>
            <div class="dashboard-wrapper">
<!--                <div class="row-fluid">
                    <div class="wrapper">
                        <div class="span12">
                            <div class="widget">
                                <div class="widget-body">
                                    <div class="hero-unit">
                                        <h2>
                                            Welcome, <?php echo $this->session->userdata['username'] ;?>
                                        </h2>
                                        <p>
                                            Anda berada dihalaman operator. Gunakan hak anda sebaik-baiknya. Hubungi Developer bila ada yang ingin diperbarui.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                
                <div class="row-fluid">
                    <div class="wrapper">
                        <div class="span12">
                            <div class="widget">
                                <div class="widget-body">
                                     <?php echo $output;?>
                                     <?php
                                     if (isset($dropdown_setup)) {
                                         $this->load->view('operator/dependent_dropdown', $dropdown_setup);
                                     }
                                     ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div><!--/.end-wrapper-->
        </div><!--/.fluid-container-->
    </div>
    <footer>
        <p>
            &copy; BP2IP Barombong Makassar 2014 |SIMREG BP2IP v1.0 | Developed By Hansen Makangiras | Page rendered in <strong>{elapsed_time}</strong> seconds
        </p>
    </footer>
    
    <?php echo $this->load->view('operator/template/tpl_foot');
    