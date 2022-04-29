  @extends('forentend4.index')



@section('content')



      



<div id="affiliate-login" class="container">

  <ul class="breadcrumb">

        <li><a href="https://opencart.opencartworks.com/themes/so_emarket/layout2/index.php?route=common/home">الصفحة الرئيسية</a></li>

        <li><a href="https://opencart.opencartworks.com/themes/so_emarket/layout2/index.php?route=account/account">الحساب</a></li>

        <li><a href="https://opencart.opencartworks.com/themes/so_emarket/layout2/index.php?route=affiliate/login">دخول</a></li>

      </ul>

      <div class="row">

                <div id="content" class="col-sm-12">







     



      <h1>برنامج نظام العمولة</h1>

      <p>

       نظام البيع بالعمولة من اكسبريمو هو نظام مجاني يمكن من خلاله تحقيق ارباح عاليه من خلال بيع المنتجات من موقعنا ....سجل معنا

      </p>

      <div class="row">

        <div class="col-sm-6">

          <div class="well">

            <h2>تسجيل جديد في نظام العمولة</h2>

            <p><p>لا يوجد لديك حساب نظام العمولة معنا؟</p><p>انقر على متابعة لإنشاء حسابك. الرجاء الانتباه إلى أن حساب نظام العمولة هو حساب مستقل عن حساب الشراء من الموقع</p></p>

            <a class="btn btn-primary" href="{{url('/')}}/affiliate/register">متابعة</a></div>

        </div>

        <div class="col-sm-6">

             @if(session('danger'))

   <div class="alert alert-danger ">

   {{session('danger')}}



     </div>

   @endif

          <div class="well">

            <h2>الدخول لبرنامج نظام العمولة</h2>

            <p><strong>إذا كنت تملك حساب سابق في برنامج نظام العمولة معنا، فتفضل بتسجيل دخولك من هنا...</strong></p>

            <form action="{{url('affiliate/login')}}" method="post" enctype="multipart/form-data">

              @csrf

              <div class="form-group">

                <label class="control-label" for="input-email">البريد الالكتروني:</label>

                <input type="text" name="email" value="{{old('email')}}" placeholder="البريد الالكتروني:" id="input-email" class="form-control" required />

              </div>

              <div class="form-group">

                <label class="control-label" for="input-password">كلمة المرور:</label>

                <input type="password" name="password" value="" placeholder="كلمة المرور:" id="input-password" class="form-control" required />

                <a href="{{url('/')}}/account/forgotten">نسيت كلمة المرور؟</a> </div>

              <input type="submit" value="دخول" class="btn btn-primary" />

                          </form>

          </div>

        </div>

      </div>

      </div>

    </div>

</div>



@endsection

  