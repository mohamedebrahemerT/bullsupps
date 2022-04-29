   @extends('forentend4.index')



@section('content')

        



<div id="affiliate-register" class="container">

  <ul class="breadcrumb">

        <li><a href="{{url('/')}}">الصفحة الرئيسية</a></li>

        <li><a href="{{url('/')}}">الحساب</a></li>

        <li><a href="{{url('/')}}/affiliate/register">التسجيل في برنامج نظام العمولة</a></li>

      </ul>

    <div class="row">

                <div id="content" class="col-sm-12">

      <h1>برنامج نظام العمولة</h1>

      <p>اذا كنت تملك حساب سابق معنا في برنامج نظام العمولة, الرجاء <a href="https://opencart.opencartworks.com/themes/so_emarket/layout2/index.php?route=affiliate/login">الدخول من هنا</a>.</p>

      <p>لإنشاء حساب نظام العمولة, الرجاء تعبئة النموذج أدناه:</p>





 



                    @if ($errors->any())

    <div class="alert alert-danger">

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif







      <form action="{{url('/')}}/affiliate/register" method="post" enctype="multipart/form-data" class="form-horizontal">

        @csrf

        <fieldset id="account">

          <legend>بياناتك الشخصية</legend>

          <div class="form-group required" style="display:  none ;">

            <label class="col-sm-2 control-label">مجموعة العميل</label>

            <div class="col-sm-10">                            <div class="radio">

                <label>

                  <input type="radio" name="customer_group_id" value="1" checked="checked" />

                  Default</label>

              </div>

                            </div>

          </div>

          <div class="form-group required">

            <label class="col-sm-2 control-label" for="input-firstname">الاسم الأول</label>

            <div class="col-sm-10">

              <input type="text" name="firstname" value="{{old('firstname')}}" placeholder="الاسم الأول" id="input-firstname" class="form-control" required/>

               </div>

          </div>

          <div class="form-group required">

            <label class="col-sm-2 control-label" for="input-lastname">اسم العائلة</label>

            <div class="col-sm-10">

              <input type="text" name="lastname" value="{{old('lastname')}}" placeholder="اسم العائلة" id="input-lastname" class="form-control" required/>

               </div>

          </div>

          <div class="form-group required">

            <label class="col-sm-2 control-label" for="input-email">البريد الالكتروني</label>

            <div class="col-sm-10">

              <input type="text" name="email" value="{{old('email')}}" placeholder="البريد الالكتروني" id="input-email" class="form-control"  required/>

               </div>

          </div>

          <div class="form-group required">

            <label class="col-sm-2 control-label" for="input-telephone">رقم الهاتف أو الجوال</label>

            <div class="col-sm-10">

              <input type="text" name="telephone" value="{{old('telephone')}}" placeholder="رقم الهاتف أو الجوال" id="input-telephone" class="form-control" required/>

               </div>

          </div>

                  </fieldset>

        <fieldset id="affiliate">

          <legend>معلومات الدفع</legend>

       
 
 

          <div class="form-group">

            <label class="col-sm-2 control-label">طريقة الدفع</label>

            <div class="col-sm-10">

              <div class="radio">

                <label>                   <input type="radio" name="payment" value="cheque" checked="checked" />

                                    فوادافون كاش</label>

              </div>

              

              <div class="radio">

                <label>                   <input type="radio" name="payment" value="bank" />

                                    تحويل بنكي</label>

              </div>

            </div>

          </div>

          <div class="form-group payment required" id="payment-cheque">

            <label class="col-sm-2 control-label" for="input-cheque">رقم فوادافون كاش</label>

            <div class="col-sm-10">

              <input type="text" name="VodafoneCash" value="{{old('VodafoneCash')}}" placeholder="رقم فوادافون كاش" id="input-cheque" class="form-control" />

               </div>

          </div>

         

          <div class="payment" id="payment-bank">

            <div class="form-group">

              <label class="col-sm-2 control-label" for="input-bank-name">اسم البنك</label>

              <div class="col-sm-10">

                <input type="text" name="bank_name" value="{{old('bank_name')}}" placeholder="اسم البنك" id="input-bank-name" class="form-control" />

              </div>

            </div>

            <div class="form-group">

              <label class="col-sm-2 control-label" for="input-bank-branch-number">رقم الفرع</label>

              <div class="col-sm-10">

                <input type="text" name="bank_branch_number" value="{{old('bank_branch_number')}}" placeholder="رقم الفرع" id="input-bank-branch-number" class="form-control" />

              </div>

            </div>

            <div class="form-group">

              <label class="col-sm-2 control-label" for="input-bank-swift-code">رمز السويفت</label>

              <div class="col-sm-10">

                <input type="text" name="bank_swift_code" value="{{old('bank_swift_code')}}" placeholder="رمز السويفت" id="input-bank-swift-code" class="form-control" />

              </div>

            </div>

            <div class="form-group required">

              <label class="col-sm-2 control-label" for="input-bank-account-name">اسم صاحب الحساب</label>

              <div class="col-sm-10">

                <input type="text" name="bank_account_name" value="{{old('bank_account_name')}}" placeholder="اسم صاحب الحساب" id="input-bank-account-name" class="form-control" />

                 </div>

            </div>

            <div class="form-group required">

              <label class="col-sm-2 control-label" for="input-bank-account-number">رقم الحساب</label>

              <div class="col-sm-10">

                <input type="text" name="bank_account_number" value="{{old('bank_account_number')}}" placeholder="رقم الحساب" id="input-bank-account-number" class="form-control" />

                 </div>

            </div>

             </div>

        </fieldset>

        <fieldset>

          <legend>كلمة المرور</legend>

          <div class="form-group required">

            <label class="col-sm-2 control-label" for="input-password">كلمة المرور</label>

            <div class="col-sm-10">

              <input type="password" name="password" value="" placeholder="كلمة المرور" id="input-password" class="form-control" required/>

               </div>

          </div>

          <div class="form-group required">

            <label class="col-sm-2 control-label" for="input-confirm">تأكيد كلمة المرور</label>

            <div class="col-sm-10">

              <input type="password" name="confirm" value="" placeholder="تأكيد كلمة المرور" id="input-confirm" class="form-control" required/>

               </div>

          </div>

        </fieldset>

        

                <div class="buttons clearfix">

          <div class="pull-right">لقد قرأت ووافقت على   





                        <input type="checkbox" name="agree" value="1" />

                        &nbsp;

            <input type="submit" value="متابعة" class="btn btn-primary" />

          </div>

        </div>

              </form>

      </div>

    </div>

</div>

 







<script type="text/javascript"><!--

$('.date').datetimepicker({

	language: 'ar',

	pickTime: false

});



$('.time').datetimepicker({

	language: 'ar',

	pickDate: false

});



$('.datetime').datetimepicker({

	language: 'ar',

	pickDate: true,

	pickTime: true

});

//--></script>





<script type="text/javascript"><!--

$('input[name=\'payment\']').on('change', function() {

	$('.payment').hide();



	$('#payment-' + this.value).show();

});



$('input[name=\'payment\']:checked').trigger('change');

//--></script> 



   <br>

   <br>

@endsection

