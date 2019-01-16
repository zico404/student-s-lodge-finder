    <?php

       foreach($data as $elem):

     ?>          
             <div class="col s12 m6 l4">
                  <div class="card">
                    <div class="card-image">
                      <img src="<?php echo SITEURL;?>/img/<?php echo $elem->lodge_img; ?>" height="175">
                      <div class="lodgeLocation"></div>
                    </div>
                    <div class="card-content">
                      <a href="" class="purple-text text-darken-2"><p><b><?php echo ucfirst($elem->lodge_name); ?></b></p></a>
                      <p class="amber-text text-darken-2"><?php echo $elem->price; ?> (Annually)</p>
                    </div>
                  </div>
                </div>


      <?php endforeach; ?>