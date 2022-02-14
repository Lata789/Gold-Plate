<?php include "header.php"; ?>	
	<!-- Start All Pages -->
		
	<img src="cn3.jpg" width="100%">
	<!-- End All Pages -->
	
	<!-- Start Contact -->
	
	<div class="contact-box">
		
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Contact</h2>
						<p>Contact Information are Listed here Thanks for Visit Our Site</p>
					</div>
				</div>
			</div>
			<div class="container w-50 m-auto">
        <form action="action.php" method="POST" autocomplete="off">
            <div class="user my-4">
              <label for="username"><b>Username: </label>
              <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="email my-4">
              <label for="email"><b>E-mail: </label>
              <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="contact my-4">
              <label for="contact"><b>Contact: </label>
              <input type="number" name="contact" id="contact" class="form-control" required>
            </div>
            <div class="address my-4">
              <label for="address"><b>Address: </label>
              <input type="text" name="address" id="address" class="form-control" required>
            </div>
            <div class="message my-4">
              <label for="message"><b>Message: </label>
              <textarea name="message" id="message" class="form-control" cols="30" rows="5"></textarea>
            </div>
            <button class="btn btn-common"><b>Send Message</button>
        </form>
    </div>
			</div>
		</div>
	</div>
	<!-- End Contact -->
<?php include "footer.php"; ?>