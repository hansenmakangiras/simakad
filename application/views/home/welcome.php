<?php echo $this->load->view('home/template/header'); ?>

<body>
    <header>
        <img src="<?php echo base_url('assets/images/logo_2.png');?>" alt="logo"  />
    </header>
    <div class="container-fluid">
        <div class="dashboard-container">
            <div class="dashboard-wrapper">
                <div class="left-sidebar">
                    <div class="row-fluid">
                        <div class="span12">
                            <?php echo $this->load->view('subview/gallery') ;?>
                        </div>
                    </div><hr>
                    <?php echo $this->load->view($view_content);?>
                </div>
                
                <!-- Right Sidebar Start -->
                <div class="right-sidebar">
                    <div class="wrapper">
                        <?php if (validation_errors()) { ?>
                                <div class="alert alert-block alert-info fade in no-margin">
                                    <button data-dismiss="alert" class="close" type="button">×</button>
                                    <h4 class="alert-heading">Error!!!</h4>
                                    <p><?php echo validation_errors(); ?></p>
                                </div>                        
                            <?php } ?>
                        <?php echo form_open('user/login') ;?>
                        <div class="viewport">
                            <div class="overview">
                                <div class="featured-articles-container">
                                    <h5 class="heading-blue">
                                        SIMREG BP2IP LOGIN
                                    </h5>
                                    <div class="row-fluid">
                                        <input class="input span12 username" id="username" name="username" placeholder="Username" type="text" autofocus="autofocus">
                                    </div>
                                    <div class="row-fluid">
                                        <input class="input span12 password" id="password" name="password" placeholder="Password" type="password">
                                    </div>
                                    <div class="row-fluid">
                                        <select class="input span12 select" id="level" name="level" >
                                            <option value="">--- Pilih Level ---</option>
                                            <?php foreach ($level_akses as $level) { ?>
                                                <option value="<?php echo $level['id_level'] ?>"><?php echo $level['akses'] ?></option>
                                            <?php } ?>                        
                                        </select>
                                    </div>
                                    <div class="row-fluid">
                                        <button  name="btnOperator" class="btn btn-info btn-block" type="submit" id="operator">
                                            <i class="icon-user"></i> Login
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper">
                        <?php echo $this->load->view('home/informasi') ;?>
                    </div>
                    <div class="wrapper">                        
                        <div class="btn-toolbar no-margin">
                            <a href="<?php echo base_url() ;?>" class="btn btn-block"> Back To Home</a>
                        </div>
                    </div>
                </div><!--/.end right sidebar-->
            </div><!--/.end-wrapper-->
        </div><!--/.fluid-container-->
    </div>
    <footer>
        <p>
            &copy; BP2IP Barombong Makassar 2014 | Developed By Hansen Makangiras
        </p>
    </footer>
       
    <?php echo $this->load->view('home/template/footer');
    