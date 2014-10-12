<?php echo $this->load->view('sadmin/template/tpl_head'); ?>

<body>
    <header>
        <img src="<?php echo base_url('assets/images/logo_2.png');?>" alt="logo" />
              
        <?php echo $this->load->view('sadmin/template/user-nav-sadmin') ;?>
        <?php echo $this->load->view('sadmin/template/notifikasi') ;?>
    </header>
    
    <div class="container-fluid">
        <div class="dashboard-container">
            <?php echo $this->load->view('sadmin/template/top-nav-sadmin') ;?>
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
    
    <?php echo $this->load->view('sadmin/template/tpl_foot');
    