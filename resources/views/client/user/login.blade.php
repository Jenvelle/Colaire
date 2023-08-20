<div class="form login_form">
        <form method="POST" action="{{ route('login') }}">
          @csrf

          <h2>Login</h2>

          <div class="input_box">
            <input type="email" name="email" placeholder="Enter your email" required />
            <i class="uil uil-envelope-alt email"></i>
          </div>
          <div class="input_box">
            <input type="password" name="password" placeholder="Enter your password" required />
            <i class="uil uil-lock password"></i>
            <i class="uil uil-eye-slash pw_hide"></i>
          </div>

          <div class="option_field">
            <span class="checkbox">
              <input type="checkbox" id="check" name="remember" />
              <label for="check">Remember me</label>
            </span>
            <a href="{{route('password.request')}}" class="forgot_pw">Forgot password?</a>
          </div>

          <button type="submit" class="button">Login Now</button>

          <div class="login_signup">Don't have an account? <a href="#" id="signup">Signup</a></div>
        </form>
</div>