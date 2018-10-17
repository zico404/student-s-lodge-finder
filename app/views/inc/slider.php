
	<!-- Slider -->

  <div class="slider">

      <div id="searchForm">

          <div style="margin-bottom:0 ; " class="row container">
            <div style="padding:0; " class="col s12">
              <ul class="tabs transparent">
                <li class=" tab col s6 m4  z-depth-2"><a class="active" href="#lodge">Find Lodge</a></li>
                <li class="tab col s6 m4 z-depth-2"><a href="#roomie">Find Room mate</a></li>
              </ul>
            </div>
          </div>


    <div id="lodge" class="col s12 container">

      <div class="row">
        <form class="col s12" action="" method="get">
          <div style="padding:0px 25px 0px 25px;" class="white">          
            <div class="row">

              <div class="col s12 m4">
                <div class="input-field">
                 <!--  <i class="ion-ios-search prefix"></i> -->
                  <input id="keyword" type="text" name="key">
                  <label class="grey-text text-darken-2" for="keyword">Keywords (optional)</label>
                </div>
              </div>

              <div class="col s12 m4">
                <div class="input-field">
                  <select name="price">
                    <option value="50">Less than 50k</option>
                    <option value="100">Less than 100k</option>
                    <option value="150">Less than 150k</option>
                  </select>
                </div>
              </div>

              <div class="col s12 m2">
                <div class="input-field">
                  <select>
                    <option>A Room</option>
                    <option>2 Rooms & Above</option>
                  </select>
                </div>
              </div>

              <div class="col s12 m2">
                <div class="input-field">
                  <input id="sl" class="btn blue white-text right" type="submit" name="sl" value="find">
                </div>
              </div>

            </div>
          </div>
        </form>
      </div>

    </div>



    <div id="roomie" class="col s12 container">
      
      <div class="row">
        <form class="col s12" action="" method="get">
          <div style="padding:0px 15px 0px 15px;" class="white">          
            <div class="row">

              <div class="col s12 m4">
                <div class="input-field">
                    <select>
                      <option selected disabled>School</option>
                      <option>School Name</option>
                    </select>
                </div>
              </div>

              <div class="col s12 m3">
                <div class="input-field">
                  <select name="price">
                    <option selected disabled value="50">Level</option>
                    <option value="100">ND1</option>
                    <option value="150">HND2</option>
                  </select>
                </div>
              </div>

              <div class="col s12 m3">
                <div class="input-field">
                  <select name="gender">
                    <option selected disabled value="50">Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
                </div>
              </div>

              <div class="col s12 m2">
                <div class="input-field">
                  <input id="sr" class="btn blue white-text right" type="submit" name="search" value="Find">
                </div>
              </div>

            </div>
          </div>
        </form>
      </div>

    </div>


        
      </div>

    <ul class="slides">
      <li>
        <img src="<?php echo SITEURL;?>/img/338e11ef6aed9ffb32b9690bcc6de4c51a60a2d9.jpg">
        <div class="caption right-align white-text">
          Finding a lodge in Nigeria is now easier !
        </div>
      </li>
      <li>
        <img src="<?php echo SITEURL;?>/img/overhead2.jpg">
        <div class="caption left-align white-text">
          ... Likewise finding a room mate.
        </div>
      </li>
    </ul>
  </div>

  <br>
