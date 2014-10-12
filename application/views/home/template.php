<?php echo $this->load->view('components/tpl_head'); ?>

<body>
    <header>
        <img src="<?php echo base_url('assets/images/logo_2.png');?>" alt="logo" />
              
        <?php echo $this->load->view('components/user-nav') ;?>
        <?php echo $this->load->view('components/notifikasi') ;?>
    </header>
    
    <div class="container-fluid">
        <div class="dashboard-container">
            <?php echo $this->load->view('components/top-nav') ;?>
            <div class="dashboard-wrapper">
                <div class="left-sidebar">
                    <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-body">
                                 <?php echo $output;?>
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
            &copy; BP2IP Barombong Makassar 2014 | Developed By Hansen Makangiras | Page rendered in <strong>{elapsed_time}</strong> seconds
        </p>
    </footer>
    
    <?php echo $this->load->view('components/tpl_foot');
    