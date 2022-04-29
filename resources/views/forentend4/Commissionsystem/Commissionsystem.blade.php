   @extends('forentend4.index')

@section('content')
 
<div id="affiliate-login" class="container">
  <ul class="breadcrumb">
        <li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=common/home">الصفحة الرئيسية</a></li>
        <li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/account">الحساب</a></li>
        <li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=affiliate/login">دخول</a></li>
      </ul>
      <div class="row">
                <div id="content" class="col-sm-12">
      <h1>SOthemes Cart</h1>
      <p>Your Store نظام العمولة هو نظام مجاني ويمكن الأعضاء المشتركين في هذا النظام من ربح ايرادات ودخل مناسب بوضع رابط أو عدة روابط في مواقعهم كإعلان لـ Your Store أو كتوصيف للمنتجات. وأي مبيعات تتم من خلال هذا النقر على هذه الروابط يتم حسابها مباشرة وبشكل تلقائي في نظام العمولة. العمولة الافتراضية الحالية في متجرنا هي 5%.</p><p>ولمزيد من المعلومات, الرجاء زيارة صفحة نظام العمولة.</p>
      <div class="row">
        <div class="col-sm-6">
          <div class="well">
            <h2>تسجيل جديد في نظام العمولة</h2>
            <p><p>لا يوجد لديك حساب نظام العمولة معنا؟</p><p>انقر على متابعة لإنشاء حسابك. الرجاء الانتباه إلى أن حساب نظام العمولة هو حساب مستقل عن حساب الشراء من الموقع</p></p>
            <a class="btn btn-primary" href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=affiliate/register">متابعة</a></div>
        </div>
        <div class="col-sm-6">
          <div class="well">
            <h2>الدخول لبرنامج نظام العمولة</h2>
            <p><strong>إذا كنت تملك حساب سابق في برنامج نظام العمولة معنا، فتفضل بتسجيل دخولك من هنا...</strong></p>
            <form action="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=affiliate/login" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label class="control-label" for="input-email">البريد الالكتروني:</label>
                <input type="text" name="email" value="" placeholder="البريد الالكتروني:" id="input-email" class="form-control" />
              </div>
              <div class="form-group">
                <label class="control-label" for="input-password">كلمة المرور:</label>
                <input type="password" name="password" value="" placeholder="كلمة المرور:" id="input-password" class="form-control" />
                <a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/forgotten">نسيت كلمة المرور؟</a> </div>
              <input type="submit" value="دخول" class="btn btn-primary" />
                            <input type="hidden" name="redirect" value="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=customerpartner/profile&id=17" />
                          </form>
          </div>
        </div>
      </div>
      </div>
    </div>
</div>

@endsection
