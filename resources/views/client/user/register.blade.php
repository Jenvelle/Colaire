<div class="form signup_form">
        <form method="POST" action="{{route('register.client')}}">
          @csrf
          <h2>Signup</h2>

          <div class="input_box">
            <input type="text" name="firstName" placeholder="First Name" required />
            <i class="uil uil-user"></i>
          </div>
          <div class="input_box">
            <input type="text" name="lastName" placeholder="Last Name" required />
            <i class="uil uil-user"></i>
            </div>
        <div class="input_box">
            <input type="email" name="email" placeholder="Email Address" required />
            <i class="uil uil-envelope"></i>
        </div>
        <div class="input_box">
            <input type="text" name="address" placeholder="Home Address" required />
            <i class="uil uil-home"></i>
        </div>
        <div class="input_box">
            <input type="tel" name="contactNumber" placeholder="Phone Number" onkeypress="return onlyNumberKey(event)" required />
            <i class="uil uil-phone"></i>
        </div>
          <div class="input_box">
            <input type="password" placeholder="Create password" required />
            <i class="uil uil-lock password"></i>
            <i class="uil uil-eye-slash pw_hide"></i>
          </div>
          <div class="input_box">
            <input type="password" placeholder="Confirm password" required />
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