<?php

foreach($data as $elem):

?>
        <div class="col s12 m6 l4">
                <div class="card">
                  <div class="card-image">
                    <img src="<?php echo SITEURL;?>/img/<?php echo $elem->location_img; ?>" height="155">
                      <a class="btn-large btn-floating halfway-fab waves-effect waves-light white"><i class="ion-android-open indigo-text"></i></a>
                  </div>
                  <div class="card-content">
                    <h6><?php echo ucfirst($elem->location_name); ?></h6>
                    <p class="grey-text"> 12 Lodges</p>
                  </div>
                </div>
              </div>

<?php endforeach; ?>