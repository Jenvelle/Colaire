@extends('client.client_master')
@section('client')
<div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">My Profile</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="card mb-4">
                    <h5 class="card-header">Profile Details</h5>
                    <!-- Account -->
                    
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST" action="{{route('change-profile-info')}}" >
                        @csrf
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">First Name</label>
                            <input
                              class="form-control"
                              type="text"
                              id="firstName"
                              name="firstName"
                              value="{{$profileInfo->firstName}}"
                              autofocus
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input class="form-control" type="text" name="lastName" id="lastName" value="{{$profileInfo->lastName}}" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="phoneNumber">Phone Number</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text">PH (+63)</span>
                              @php
                              $contactNumber=intval($profileInfo->contactNumber);
                              @endphp
                              <input
                                type="text"
                                id="phoneNumber"
                                name="contactNumber"
                                class="form-control"
                                value="{{$contactNumber}}"
                                onkeypress="return onlyNumberKey(event)"
                              />
                            </div>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{$profileInfo->address}}" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input
                              class="form-control"
                              type="text"
                              id="email"
                              name="email"
                              value="{{$profileInfo->email}}"
                            />
                          </div>
                          <div class="mb-3 col-md-3 validate">
                            <label for="Password" class="form-label">Password</label>
                            <input class="form-control" type="text" id="password" name="password" placeholder="Enter New Password" />
                          </div>
                          <div class="mb-3 col-md-3 validate">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input class="form-control" type="text" id="confirmPassword" name="confirmPassword" placeholder="Confirm New Password" />
                          </div>
                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Save changes</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
                  <div class="card">
                    <h5 class="card-header">Delete Account</h5>
                    <div class="card-body">
                      <div class="mb-3 col-12 mb-0">
                        <div class="alert alert-danger">
                          <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
                          <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                        </div>
                      </div>
                      <form id="formAccountDeactivation" onsubmit="return false">
                        <div class="form-check mb-3">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="accountActivation"
                            id="accountActivation"
                          />
                          <label class="form-check-label" for="accountActivation">I confirm my account deactivation</label>
                        </div>
                        <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>
      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
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
        $('#formAccountSettings').validate({
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
                    minlength: {
                        depends: function(element) {
                            return $(element).val().length > 0;
                        },
                        param: 6
                    },
                    equalTo: {
                        depends: function(element) {
                            return $(element).val().length > 0;
                        },
                        param: "#confirmPassword"
                    }
                },
                confirmPassword: {
                    
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
@endsection