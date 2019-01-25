  <div id="indexSearchContainer">
  

          <h4 style="letter-spacing:-1px;font-weight: bolder; " class="center amber-text text-darken-2">Find the lodge of your dreams</h4>
          <!-- <h6 class="center blue-text">Nigeria's no.1 lodge finder website</h6> -->
          <br>

        <div class="container">

          <div class="row">
            <form class="col s12" action="<?php echo htmlspecialchars(SITEURL . '/search');?>" method="post">
              <div style="padding:0px 25px 0px 25px;">          
                <div class="row">

                  <div class="col s12 m4 l3">
                    <div class="input-field">
                      <i class="ion-ios-location grey-text text-darken-2 prefix"></i>
                      <select class="red-text select" name="location">
                        <option selected value="abia">Abia</option>
                        <option value="imo">Imo</option>
                        <option value="rivers">Rivers</option>
                        <option value="lagos">Lagos</option>
                      </select>
                    </div>
                  </div>

                  <div class="col s12 m4 l3">
                    <div class="input-field">
                      <i class="ion-cash grey-text text-darken-2 prefix"></i>
                      <select class="select" name="price">
                        <option selected value="50000">50k & below</option>
                        <option value="100000">100k & below</option>
                        <option value="150000">More than 100k</option>
                      </select>
                    </div>
                  </div>

                  <div class="col s12 m4 l4">
                    <div class="input-field">
                      <i class="ion-android-options grey-text text-darken-2 prefix"></i>
                      <select class="select" name="type">
                        <option selected value="1room">A Room</option>
                        <option value="2">2 Rooms & Above</option>
                      </select>
                    </div>
                  </div>

                  <div class="col s12 l2">
                    <div class="input-field">
                      <button class="btn appGradient curved waves-effect white-text right" type="submit" name="sl">
                        <i class="ion-ios-search left"></i>find
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </form>

          </div>
            


        </div>


    </div>

    <div class="tabContainer">
      <div class="row">
      <div class="col s12">
        <ul class="tabs transparent">
          <li id="featured_tab" class="tab col s4 m2"><a class="active" href="#featured"><i class="ion-trophy small left"></i>Featured</a></li>
          <li id="location_tab" class="tab col s4 m2"><a href="#location"><i class="ion-ios-location small left"></i>Locations</a></li>
          <li id="rating_tab" class="tab col s4 m2"><a href="#rating"><i class="ion-ios-star small left"></i>Popular</a></li>
        </ul>
      </div>

      <div class="col s12 white">
   
         <section>
          <div id="featured" style="padding: 45px 9% 45px 9%;">
            <br>

              <div id="featuredContainer" class="row"></div>
          </div>
        </section>
      </div>



      <div id="location" class="col s12">

      <section>
        <div style="padding: 45px 9% 45px 9%;">
          <br>
          <div id="locationContainer" style="margin-bottom: 0;" class="row location"></div>

          <br>
          <div class="right">     
            <a class="btn center-align appGradient white-text waves-effect" href="">
              <i class="ion-map left"></i> View All
            </a>
          </div>
          <br>

        </div>
      </section>
      </div>
      <div id="rating" class="col s12">
        
        <div style="padding: 45px 9% 45px 9%;">
            <br>

              <div id="ratingContainer" class="row">
              </div>
          </div>

      </div>
    </div>
  </div>



  <section>

    <div class="newsletter" style="padding: 45px 9% 45px 9%;" class="grey lighten-3">
      <br>
      <h4 class="left-align purple-text text-darken-4 center"><b>Get Notified</b></h4>
      <h6 style="font-weight: lighter;" class="amber-text text-darken-2 center"><b>Signup to our newsletter and get new updates.</b></h6>
      <br>

      <div class="row">

        <div class="col s12 m8 l6 offset-m2 offset-l3">
            <form action="<?php echo SITEURL; ?>/pages/newsletter" method="post">
              <div class="row">
                <div class="col s12">
                  <div class="input-field">
                    <!-- <i class="ion-ios-bell purple-text text-darken-2 prefix"></i> -->
                    <input class="white-text" id="newsletter_email" type="email" name="newsletter_email">
                    <label class="grey-text" for="newsletter_email">mymail@email.com</label>
                  </div>
                </div>
                <div class="col s12">
                  <div class="input-field">
                    <button class="btn appGradient curved">Signup</button>
                  </div>
                </div>
              </div>
            </form>
        </div>

      </div>


      <br>

    </div>

    
  </section>
