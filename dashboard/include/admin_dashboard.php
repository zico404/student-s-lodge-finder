   
        <div class="row">

          <div class="col s12 m6 l4">
            <div class="card">
              <div class="card-content purple darken-4 white-text">
                <h4 style="letter-spacing: -1px" class="card-title white-text text-darken-4">All Users</h4>

                  <div class="row">
                    <div class="col s12 m6 l4">
                      <h1 style="font-weight: bold;" class="white-text center"><?php echo get_user_count();?></h1>
                  </div>
                    <div class="col s12 m6 l8 grey-text"> 
                      <div class="container left-align"> View all users, Edit/Delete user, Change user role here. </div>
                  </div>
                  </div>
              </div>
              <div class="card-action center white darken-3">
                <a href="lodge.php" class="purple-text text-darken-4 white btn hoverable waves-effect waves-light" href="#"><i class="ion-eye left"></i> view</a>
              </div>
            </div>

          </div>


          <div class="col s12 m6 l4">

            <div class="card">
              <div class="card-content purple darken-3 white-text">
                <h4 style="letter-spacing: -1px" class="card-title white-text text-darken-4">Lodges</h4>

                  <div class="row">
                    <div class="col s12 m6 l4">
                      <h1 style="font-weight: bold;" class="white-text center"><?php echo get_total_lodge_size();?></h1>
                  </div>
                    <div class="col s12 m6 l8 grey-text"> 
                      <div class="container left-align"> View your uploaded lodges and lodges uploaded by users</div>
                  </div>
                  </div>
              </div>
              <div class="card-action center white darken-3">
                <a href="lodge.php" class="purple-text text-darken-4 white btn hoverable waves-effect waves-light" href="#"><i class="ion-eye left"></i> view</a>
              </div>
            </div>

          </div>



          <div class="col s12 m6 l4">

            <div class="card">
              <div class="card-content purple darken-1 white-text">
                <h4 style="letter-spacing: -1px" class="card-title white-text text-darken-4">Orders</h4>

                  <div class="row">
                    <div class="col s12 m6 l4">
                      <h1 style="font-weight: bold;" class="white-text center">8</h1>
                  </div>
                    <div class="col s12 m6 l8 grey-text"> 
                      <div class="container left-align"> View all the lodges you uploaded & make modifications.</div>
                  </div>
                  </div>
              </div>
              <div class="card-action center white darken-3">
                <a href="lodge.php" class="purple-text text-darken-4 white btn hoverable waves-effect waves-light" href="#"><i class="ion-eye left"></i> view</a>
              </div>
            </div>

          </div>

        </div>

        <div class="row">

          <div class="col s12 m6">

                <p class="flow-text">Lodge Stats</p>

            <ul class="collapsible" data-collapsible="accordion">

              <li>
                <div class="collapsible-header purple darken-4 white-text active waves-effect waves-light">
                  <i style="font-size: 1em;" class="ion-ios-medical-outline yellow-text text-darken-4"></i>
                  <b>New Lodges</b>
                  </div>
                <div class="collapsible-body"><?php echo get_new_lodges(4); ?></div>
              </li>
              <li>
                <div class="collapsible-header purple darken-3 white-text active waves-effect waves-light">
                  <i style="font-size: 1em;" class="ion-ios-star yellow-text text-darken-4"></i>
                  <b>Popular Lodges</b>
                  </div>
                <div class="collapsible-body"><?php echo get_popular_lodges(4); ?></div>
              </li>
              <li>
                <div class="collapsible-header purple darken-1 white-text active waves-effect waves-light">
                  <i style="font-size: 1em;" class="ion-ios-stopwatch yellow-text text-darken-4"></i>
                  <b>Pending Lodges</b>
                  </div>
                <div class="collapsible-body"><?php echo get_pending_lodges(4); ?></div>
              </li>
            </ul>
            

          </div>
          

          <div class="col s12 m6">

                <p class="flow-text">Order Stats</p>

            <ul class="collapsible" data-collapsible="accordion">
              <li>
                <div class="collapsible-header purple darken-4 white-text active waves-effect waves-light">
                  <i style="font-size: 1em;" class="ion-ios-medical-outline yellow-text text-darken-4"></i>
                  <b>New Lodges</b>
                  </div>
                <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
              </li>
              <li>
                <div class="collapsible-header purple darken-3 white-text active waves-effect waves-light">
                  <i style="font-size: 1em;" class="ion-ios-star yellow-text text-darken-4"></i>
                  <b>Popular Lodges</b>
                  </div>
                <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
              </li>
              <li>
                <div class="collapsible-header purple darken-1 white-text active waves-effect waves-light">
                  <i style="font-size: 1em;" class="ion-ios-stopwatch yellow-text text-darken-4"></i>
                  <b>Pending Lodges</b>
                  </div>
                <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
              </li>
            </ul>
            

          </div>




        </div>


