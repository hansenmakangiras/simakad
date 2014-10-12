<?php echo $this->load->view('operator/template/header'); ?>

<body>
    <header>
        <img src="<?php echo base_url('assets/images/logo_2.png');?>" alt="logo" />
              
        <?php echo $this->load->view('operator/template/user-nav-operator') ;?>
        
    </header>
    <div class="container-fluid">
        <div class="dashboard-container">
            <?php echo $this->load->view('operator/template/top-nav-operator') ;?> 
            <div class="dashboard-wrapper">
                <div class="left-sidebar">
                    <div class="row-fluid">
                        <?php echo $this->load->view($content);?>
                    </div>
                </div>
                <div class="right-sidebar">
                    <?php echo $this->load->view($right_content);?>
                </div>
            </div><!--/.end-wrapper-->
        </div><!--/.fluid-container-->
    </div>
    <footer>
        <p>
            &copy; BP2IP Barombong Makassar 2014 | SIMREG BP2IP v1.0 | Developed By Hansen Makangiras | Page rendered in <strong>{elapsed_time}</strong> seconds
        </p>
    </footer>
    
    
    <?php echo $this->load->view('operator/template/footer');
    