<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<div class="form signup_form">
        <form method="POST" action="{{route('register')}}" id="myForm">
          @csrf
          <h2>Signup</h2>
          <div class="input_box">
            <div class="validate">
            <input type="text" name="firstName" placeholder="First Name" />
            <i class="uil uil-user"></i>
            </div>
          </div>
          <div class="input_box">
            <input type="text" name="lastName" placeholder="Last Name"  />
            <i class="uil uil-user"></i>
            </div>
        <div class="input_box">
            <input type="email" name="email" placeholder="Email Address"  />
            <i class="uil uil-envelope"></i>
        </div>
        <div class="input_box">
            <input type="text" name="address" placeholder="Home Address"  />
            <i class="uil uil-home"></i>
        </div>
        <div class="input_box">
            <input type="tel" name="contactNumber" placeholder="Phone Number" onkeypress="return onlyNumberKey(event)" />
            <i class="uil uil-phone"></i>
        </div>
          <div class="input_box">
            <input type="password" id="password" name="password" placeholder="Create password"  />
            <i class="uil uil-lock password"></i>
            <i class="uil uil-eye-slash pw_hide"></i>
          </div>
          <div class="input_box">
            <input type="password" id="confirmPassword" name="password_confirmation" placeholder="Confirm password"  />
            <i class="uil uil-lock password"></i>
            <i class="uil uil-eye-slash pw_hide"></i>
          </div>
          <button type="submit" class="button">Signup Now</button>

          <div class="login_signup">Already have an account? <a href="#" id="login">Login</a></div>
        </form>
      </div>
      <script>
        function onlyNumberKey(evt) {
             
             // Only ASCII character in that range allowed
             var ASCIICode = (evt.which) ? evt.which : evt.keyCode
             if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                 return false;
             return true;
        }
      </script>
      <script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                firstName: {
                    required : true,
                }, 
                lastName: {
                    required : true,
                }, 
                email: {
                    required : true,
                    email : true,
                }, 
                contactNumber:{
                    required:true,
                },
                address: {
                    required : true,
                }, 
                password: {
                    required: true,
                    minlength: {
                        depends: function(element) {
                            return $(element).val().length > 0;
                        },
                        param: 8
                    },
                    equalTo: {
                        depends: function(element) {
                            return $(element).val().length > 0;
                        },
                        param: "#confirmPassword"
                    }
                },
                password_confirmation: {
                    required: true,
                    equalTo: {
                        depends: function(element) {
                            return $(element).val().length > 0;
                        },
                        param: "#password"
                    }
                }, 
               
            },
            messages :{
                password: {
                    equalTo : 'The password confirmation does not match.',
                },
                confirm_password: {
                    equalTo : 'Password and confirm password does not match.',
                },
            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.validate').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>