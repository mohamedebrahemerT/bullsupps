 
 <li class="customer-link site-nav__item">
 		 
								 
									<div id="LoginModal" class="mfp-hide" style="max-width: 500px;margin: 0 auto;">
										<div id="loginBox" class="loginLightbox">
											<div id="lightboxlogin">
			<form method="post" action="{{ route('login') }}" id="customer_login" accept-charset="UTF-8">
			    @csrf
		 
		 
													<div id="bodyBox">
									<h3>{{trans('admin.Login')}}</h3>
														<label for="CustomerEmail" class="hidden-label">{{trans('admin.email')}}</label>
				<input type="{{trans('admin.email')}}" name="customer[email]" id="CustomerEmail" class="input-full" placeholder="{{trans('admin.email')}}" name="email">

		       <strong>{{ $errors->first('email') }}</strong>

														<label for="CustomerPassword" class="hidden-label">{{trans('admin.Password')}}</label>
			<input type="password"  name="customer[password]" id="CustomerPassword" class="input-full" placeholder="{{trans('admin.Password')}}" name="password">

			                  @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                                 @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

		<input type="submit" class="btn btn2 btn--full" value="{{trans('admin.SignIn')}}">
														<div>
								<p class="forgot">
					<a href="{{url('/')}}/forentend3/factory/ecover" onclick="showRecoverPasswordForm();return false;" id="RecoverPassword">{{trans('admin.Forgotyourpassword?')}}</a></p>
															<p class="create"><a href="{{url('/')}}/forentend3/factory/reate_accountBox" onclick="showCreateAccountForm();return false;" id="CreateAccountPassword">
															{{trans('admin.CreateAccount')}}</a></p>
														</div>
													</div>
												</form>
											</div>
											<div id="recover-password" style="display:none;">
												<h3>{{trans('admin.Resetyourpassword')}}</h3>
												<p class="note">
                      {{trans('admin.Wewillsendyouanemailtoresetyourpassword')}}
												 .</p>
												<form method="post" action="/account/recover" accept-charset="UTF-8">
													<input type="hidden" name="form_type" value="recover_customer_password" />
													<input type="hidden" name="utf8" value="✓" />
													<p>
														<label for="recover-email" class="label">{{trans('admin.email')}}</label>
													</p>
													<input type="email" value="" size="30" name="email" id="recover-email" class="text" />
													<div class="action_bottom">
														<p>
															<input class="btn btn2" type="submit" value="Submit" />
														</p>
														<p>
														<a class="btn--secondary back btn--full" href="{{url('/')}}/forentend3/factory/ onclick="hideRecoverPasswordForm();return false;">{{trans('admin.Cancel')}}</a>
														</p>
													</div>
												</form>
											</div>
											<div id="create_accountBox" style="display:none;">
												<h3>{{trans('admin.Register')}}</h3>
												<div class="form-vertical">
				<form method="post" action="{{url('/')}}/M_V_L_R_post_register" id="create_customer" accept-charset="UTF-8">

					  @csrf
		 
														<input type="hidden" name="form_type" value="create_customer" />
														<input type="hidden" name="utf8" value="✓" />
							 

														<label for="name" class="hidden-label">{{trans('admin.LastName')}}</label>
														<input type="text" name="name" id="name" class="input-full" placeholder="{{trans('admin.LastName')}}">
														  @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
														<label for="Email" class="hidden-label">{{trans('admin.email')}}</label>
														<input type="email" name="email" id="Email2" class="input-full" placeholder="{{trans('admin.email')}}">
 @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

														<label for="CreatePassword" class="hidden-label">{{trans('admin.Password')}}</label>
											<input type="password" name="password" id="CreatePassword" class="input-full" placeholder="{{trans('admin.Password')}}">

														   @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
														<p>

															<input type="submit" value="{{trans('admin.Create')}}" class="btn btn2 btn--full">
														</p>
														<p><span><a class="btn--secondary btn--full" href="{{url('/')}}/forentend3/factory/ onclick="hideRecoverPasswordForm();return false;">{{trans('admin.Cancel')}}</a></span></p>
													</form>
												</div>
											</div>
											<script>
												function showRecoverPasswordForm() {
													$('#recover-password').css("display", 'block');
													$('#lightboxlogin').css("display", 'none');
													$('#create_accountBox').css("display", 'none');
												}

												function hideRecoverPasswordForm() {
													$('#recover-password').css("display", 'none');
													$('#lightboxlogin').css("display", 'block');
													$('#create_accountBox').css("display", 'none');
												}

												function showCreateAccountForm() {
													$('#recover-password').css("display", 'none');
													$('#lightboxlogin').css("display", 'none');
													$('#create_accountBox').css("display", 'block');
												}
											</script>
										</div>
										<button title="Close (Esc)" type="button" class="mfp-close">×</button>
									</div>
								</li>