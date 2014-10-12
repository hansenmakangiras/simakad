        <ul class="mini-nav">
            <li>
                <a>
                    <div class="fs1"><span class="text-warning">
                            Welcome, <?php echo $this->session->userdata['username'];?>
                    </span></div>                                        
                </a>
            </li>
            <li>
                <a>
                    <div class="fs1"><span class="text-info">
                        Hari ini, <?php echo $this->session->userdata['tgl'];?> - 
                        Pukul : <?php echo $this->session->userdata['waktu'];?>
                    </span></div>                                        
                </a>
            </li>
            
        </ul>