                    
                    <div class="wrapper">
                        <div id="scrollbar-two">
                            <div class="scrollbar">
                                <div class="track">
                                    <div class="thumb">
                                        <div class="end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="viewport">
                                <div class="overview">
                                    <div class="featured-articles-container">
                                        <h5 class="heading-blue">
                                            Informasi Diklat
                                        </h5>
                                        <div class="articles">
                                            <?php foreach ($info as $inf) { ?>
                                                <a href="<?php echo base_url($inf['url']);?>">
                                                    <span class="label-bullet-blue">
                                                        &nbsp;
                                                    </span>
                                                    <?php echo $inf['judul'] ?>
                                                </a>                                                
                                            <?php } ?>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>