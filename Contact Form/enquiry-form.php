<section id="enquiry">
		        <div class="container">
		    <div class="enquiry-bg">
		            <div class="row">
		                <div class="col-md-12 col-sm-6">
		                    <div class="form-wrap">
                        <form id="myForm" name="contact_form" method="post" class="default-form">
		                          <h2 style="color: #e63945;">Request For a Call</h2>
		                          
		                          <div id="check1"></div>
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <input type="text" name="name" id="name" class="form-control mb-3" placeholder="Name">

                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="email" name="email" id="email" class="form-control mb-3" placeholder="Email">

                                    </div>
                    
                                    <div class="form-group col-md-3">
                                         <input type="text" name="phone" id="phone" class="form-control mb-3" placeholder="Phone Number">

                                    </div>
                                    <div class="form-group col-md-3 d-md-block">
                                        <button type="submit" id="btn_submit" class="btn btn-danger w-100" style="padding: 13px;">Submit</button>
                                    </div>
                                </div>
                            </form>
                            </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</section>

<style>
@media (min-width: 500px) {
    #enquiry {
        padding: 15px 0px 15px 0;
       
    }
}
#enquiry {
    background-color: #f5f5dc;
}
section {
  padding: 15px;
}

/* Padding for mobile view */
@media only screen and (max-width: 768px) {
  section {
    padding: 25px; /* Padding for mobile view */
  }
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#myForm').submit(function(e){
            e.preventDefault();

            var name = $('#name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();

            var name_regex = /^[a-zA-Z\s]*$/;
            var email_regex = /\b(^(\S+@).+((\.com)|(\.net)|(\.edu)|(\.mil)|(\.gov)|(\.org)|(\.info)|(\.in)|(\.biz)|(\..{2,2}))$)\b/gi;
            var mobile_regex = /\d{10}/;

            var error = false;


            // Validation for name
            if (!name.match(name_regex) || name === "") {
                $('#check1').html('** Please Enter your Name **').css("color", "red");
                $("#name").focus();
                return false;
            }

            // Validation for email
            if (!email.match(email_regex) || email === "") {
                $('#check1').html('** Please Enter a Valid Email **').css("color", "red");
                $("#email").focus();
                return false;
            }

            // Validation for phone
            if (!phone.match(mobile_regex) || phone === "") {
                $('#check1').html('** Please Enter a Valid Phone No **').css("color", "red");
                $("#phone").focus();
                return false;
            }


            if (!error) {
                $('#btn_submit').attr('disabled', true).val('Sending...');
                var form = $('#myForm')[0];
                var formData = new FormData(form);
                $.ajax({
                    url: "enquiry_valid.php",
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
            var project_unique_code = "enermax134";
            var domain = "<?php echo $domain; ?>";
            var url = "<?php echo $curPageName; ?>";  // Current page name without extension

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

            if (!error) {

                $('#btn_submit').attr('disabled', true).val('Sending...');

                var form = $('#myForm')[0];

                var formData = new FormData(form);

                formData.append('domain', domain);  

                formData.append('project_unique_code', project_unique_code);  

                formData.append('url', url);  

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