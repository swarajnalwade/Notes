<?php include('header.php');?>

        <div class="page-title-area bg-1">
			<div class="container">
				<div class="page-title-content">
					<h2>Contact-us</h2>

					<ul>
						<li>
							<a href="index.php">
								Home 
							</a>
						</li>

						<li class="active">Contact-us</li>
					</ul>
				</div>
			</div>
		</div>



<section class="section">
      <div class="cont">
         <div class="row align-items-center">
            <div class="col-md-6 text-center">
                <div class="contact-img">
                    <img src="assets/img/contact1.webp" alt="" style="height:500px;">
                </div>
            </div>
            <div class="col-md-6">
                <form id="myForm" class="contact-form">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>Contact us</h2>
                            </div>
                        <div id="check1"></div>
                        <div class="col-md-6">
                             <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                              <input name="name" id="name" class="form-control" type="text" placeholder="Enter Name">
                              </div>
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputEmail1">Phone</label>
                               <input name="phone" id="phone" class="form-control" type="text" placeholder="Enter Phone">
                              </div>
                       
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                           <input name="email" id="email" class="form-control required email" type="email" placeholder="Enter Email">
                          </div>
                        </div>
                        <!--<div class="col-md-12">-->
                        <!--                  <div class="form-group">-->
                        <!--        <label for="exampleInputEmail1">Address</label>-->
                        <!--       <input class="form-control" type="text" placeholder="Address">-->
                        <!--      </div>-->
                        <!--</div>-->
                        <!--<div class="col-md-12">-->
                        <!--     <div class="form-group">-->
                        <!--        <label for="exampleInputEmail1">Company Name</label>-->
                        <!--       <input class="form-control" type="text" placeholder="Company Name">-->
                        <!--      </div>-->
                        <!--</div>-->
                        
                        <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Message</label>
                         <textarea name="message" id="message" class="form-control required" rows="5" placeholder="Enter your message*"></textarea>
                          </div>
                        </div>
                        <div class="col-sm-4 mt-3">
                          <button type="submit" name="submit" id="btn_submit" class="default-btn ">Submit</button>
                          </div>
                    </div>
                     </div>
</form>
            </div>
          </div>
     </div>
</section>

<section>
    <div class="cont">
    <div class="map-section">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.1915596168333!2d73.73713157522789!3d19.958444681436383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddecaef072d55b%3A0x81bd83b8c33b4384!2sEnermax%20Systems!5e0!3m2!1sen!2sin!4v1730185325627!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>


<?php include('footer.php');?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
<script type="text/javascript">
    $(document).ready(function(){
        $('#myForm').submit(function(e){
            e.preventDefault();
            
            var name = $('#name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var message = $('#message').val();

            var error = false;

            var name_regex = /^[a-zA-Z\s]*$/;
            var email_regex = /\b(^(\S+@).+((\.com)|(\.net)|(\.edu)|(\.mil)|(\.gov)|(\.org)|(\.info)|(\.in)|(\.biz)|(\..{2,2}))$)\b/gi;
            var mobile_regex = /\d{10}/;

            if (!name.match(name_regex) || name === "") {
                $('#check1').html('** Please Enter your Name **').css("color", "red");
                $("#name").focus();
                return false;
            }
            if (!email.match(email_regex) || email === "") {
                $('#check1').html('** Please Enter a Valid Email **').css("color", "red");
                $("#email").focus();
                return false;
            }
            if (!phone.match(mobile_regex) || phone === "") {
                $('#check1').html('** Please Enter a Valid Phone No **').css("color", "red");
                $("#phone").focus();
                return false;
            }
            if (message === "") {
                $('#check1').html('** Please Enter Your Message **').css("color", "red");
                $("#message").focus();
                return false;
            }

            if (!error) {
                $('#btn_submit').attr('disabled', true).val('Sending...');
                var form = $('#myForm')[0];
                var formData = new FormData(form);
                $.ajax({
                    url: "contact_valid.php",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if (data == 'sent') {
                            $('#btn_submit').removeAttr('disabled').val('Sent');
                            $('#check1').html('** Thank You For Contacting Us, We Will Contact You Soon **').css("color", "green");
                            $("#myForm")[0].reset();
                        } else {
                            $('#btn_submit').removeAttr('disabled').val('Retry');
                            $('#check1').html(data).css("color", "red");
                        }
                    }
                });
            }
        });
    });
</script>

<?php
$domain = $_SERVER['SERVER_NAME']; 
$curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1); 
$curPageName1 = ucfirst(substr($curPageName, 0, -4));
?>


<script type="text/javascript">

    $(document).ready(function(){

        $('#myForm').submit(function(e){

            e.preventDefault();

            
            var name = $('#name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var message = $('#message').val();
            var project_unique_code = "enermax134";  
            var domain = "<?php echo $domain; ?>";  
            var url = "<?php echo $curPageName; ?>"; 


            var error = false;
            var name_regex = /^[a-zA-Z\s]*$/;
            var email_regex = /\b(^(\S+@).+((\.com)|(\.net)|(\.edu)|(\.mil)|(\.gov)|(\.org)|(\.info)|(\.in)|(\.biz)|(\..{2,2}))$)\b/gi;
            var mobile_regex = /\d{10}/;

            if (!name.match(name_regex) || name === "") {
                $('#check1').html('** Please Enter your Name **').css("color", "red");
                $("#name").focus();
                return false;
            }

            if (!email.match(email_regex) || email === "") {
            $('#check1').html('** Please Enter the Valid Email **').css("color", "red");
            $("#email").focus();
            return false;       
            }

            if (!phone.match(mobile_regex) || phone === "") {
                $('#check1').html('** Please Enter a Valid Phone Number **').css("color", "red");
                $("#phone").focus();
                return false;
            }
            
            if (message === "") {
                $('#check1').html('** Please Enter Your Message **').css("color", "red");
                $("#message").focus();
                return false;
            }

            if (!error) {

                $('#btn_submit').attr('disabled', true).val('Sending...');
                var form = $('#myForm')[0];
                var formData = new FormData(form);
                formData.append('domain', domain);  // Adding domain to form data
                formData.append('project_unique_code', project_unique_code);  // Adding project_unique_code to form data
                formData.append('url', url);  // Adding current page name to form data
                $.ajax({

                    url: "https://script.google.com/macros/s/AKfycbyq-3aslv9EJImCF5faDnBvm2ZhAqVOEaQzm5Ld6hCzGU4k9oq3sPJ6OBPbJ1VBktIX/exec",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {

                            $('#btn_submit').removeAttr('disabled').val('Sent');
                            $('#check1').html('** Thank You For Contacting Us, We Will Contact You Soon **').css("color", "green");
                            $("#myForm")[0].reset();

                    }
                });
            }
        });
    });

</script>
