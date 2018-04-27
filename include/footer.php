
<!-- Floating Button & Components -->

<div class="fixed-action-btn">
	

	<a href="#modal1" id="menu" class="modal-trigger waves-effect waves-light hoverable btn btn-floating purple darken-4 btn-large">

		<i class="large ion-ios-chatboxes"></i>

	</a>


</div>




  <!-- Modal Structure -->
  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4 style="letter-spacing: -2px;font-weight: bold;" class="purple-text text-darken-4"><i class="ion-ios-chatboxes"></i> Contact Us</h4>
      <p>Do you have a message,complaint or suggestion feel free to message us, we'll reply you as soon as possible.</p>

      	<div class="progress purple darken-4">
      		<div class="indeterminate grey"></div>
  		</div>

      <br>

        <div class="row">
          <form class="col s12">
            <div class="row">
              <div class="input-field col m6">
                <input id="first_name" type="text" class="validate">
                <label for="first_name" class="active">First Name</label>
              </div>
              <div class="input-field col m6">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Last Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="email" type="email" class="validate">
                <label for="email" data-error="Invalid Email Address" data-success="Valid Email Address">Email</label>
              </div>
            </div>
            <div class="row">
		        <div class="input-field col s12">
		          <textarea id="message" class="materialize-textarea"></textarea>
		          <label for="message">Message</label>
		        </div>
      		</div>
            <button style="border-radius: 100px" class="purple darken-4 hoverable btn waves-effect"> Send</button>
          </form>
        </div>


    </div>
  </div>
  

<div style="padding: 40px;" class="container center">

		<div class="row">
			
			<div class="s4"></div>
			<div class="s4"></div>
			<div class="s4"></div>

		</div>	

	<p class="grey-text text-darken-4 center">
		&copy; Copyright <?php echo date("Y");?>, All rights reserved .
	</p>

</div>

<script type="text/javascript">
	
	$(function(){

		$(".button-collapse").sideNav();
	  $('.modal').modal();
	    $('.scrollspy').scrollSpy();
	  $('.carousel.carousel-slider').carousel({fullWidth: true}); 
	    $('select').material_select();
		
	});


</script>


</body>
</html>