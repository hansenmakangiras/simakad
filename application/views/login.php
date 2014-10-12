<?php echo $this->load->view('global/header'); ?>
<body>
    <header>
        <img src="<?php echo base_url('assets/images/logo_2.png'); ?>" alt="logo" />                
    </header>
    
    <div class="container-fluid">
        <div class="span3">&nbsp;</div>
        <div class="span6">
        <div class="span6">
            <div class="sign-in-container">                
                <form action="<?php echo base_url('user/login');?>" class="login-wrapper form-horizontal" method="POST">
                    <div class="header">
                        <div class="row-fluid">
                            <div class="span12">
                                <img src="<?php echo base_url('assets/images/login-logo.png'); ?>" alt="Logo" class="pull-right">                                
                            </div>
                        </div>
                    </div><hr class="hr-stylish-1">
                    <div class="content">
                        <div class="row-fluid">
                            <?php if (validation_errors()) { ?>
                                <div class="alert alert-block alert-info fade in no-margin">
                                    <button data-dismiss="alert" class="close" type="button">×</button>
                                    <h4 class="alert-heading">Error!!!</h4>
                                    <p><?php echo validation_errors(); ?></p>
                                </div>                        
                            <?php } ?>
                            <div class="span12">
                                <div class="control-group">
                                    <label class="control-label" for="username">
                                        <span class="text-info">Username :</span>
                                    </label>
                                    <div class="controls">
                                        <input class="input span10 username" id="username" name="username" placeholder="Username" type="text" autofocus="autofocus">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span12">
                                <div class="control-group">
                                    <label class="control-label" for="password">
                                        <span class="text-info">Password :</span>
                                    </label>
                                    <div class="controls">
                                        <input class="span4" id="password" name="password" placeholder="Password" type="password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span12">
                                <div class="control-group">
                                    <label class="control-label" for="level">
                                        <span class="text-info">Level Akses :</span>
                                    </label>
                                    <div class="controls">
                                        <select class="input span10 select" id="level" name="level" >
                                            <option value="">--- Pilih Level ---</option>
                                            <?php foreach($level_akses as $level){ ?>
                                            <option value="<?php echo $level['id_level']?>"><?php echo $level['akses']?></option>
                                            <?php } ?>                        
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="actions">
                        <button class="btn btn-danger" name="btnLogin" type="submit"> Masuk Sistem</button>
                        <a class="link" href="#"> Lupa Password</a>
                        <a class="link" href="<?php echo base_url('home') ;?>"> Kembali</a>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>
        <div class="span3">&nbsp;</div>
        <div class="clearfix"></div>
    </div>
    

    <?php echo $this->load->view('global/footer');
    