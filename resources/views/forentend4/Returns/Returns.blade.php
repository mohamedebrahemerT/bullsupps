   @extends('forentend4.index')

@section('content')
 
<div id="account-return" class="container">
  <ul class="breadcrumb">
        <li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=common/home"> الصفحة الرئيسية</a></li>
        <li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/account"> الحساب</a></li>
        <li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/return/add"> المنتجات المرتجعة</a></li>
      </ul>
    <div class="row"> 
                <div id="content" class="col-sm-9"> 
      <h1>SOthemes Cart</h1>
      <p>الرجاء استكمال النموذج التالي للحصول على رقم إرجاع المنتج.</p>
      <form action="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/return/add" method="post" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
          <legend>طلباتي</legend>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-firstname">الاسم الاول:</label>
            <div class="col-sm-10">
              <input type="text" name="firstname" value="" placeholder="الاسم الاول:" id="input-firstname" class="form-control" />
               </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-lastname">اسم العائلة:</label>
            <div class="col-sm-10">
              <input type="text" name="lastname" value="" placeholder="اسم العائلة:" id="input-lastname" class="form-control" />
               </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-email">البريد الالكتروني:</label>
            <div class="col-sm-10">
              <input type="text" name="email" value="" placeholder="البريد الالكتروني:" id="input-email" class="form-control" />
               </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-telephone">رقم الهاتف أو الجوال:</label>
            <div class="col-sm-10">
              <input type="text" name="telephone" value="" placeholder="رقم الهاتف أو الجوال:" id="input-telephone" class="form-control" />
               </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-order-id">رقم الطلب:</label>
            <div class="col-sm-10">
              <input type="text" name="order_id" value="" placeholder="رقم الطلب:" id="input-order-id" class="form-control" />
               </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-date-ordered">تاريخ الطلب:</label>
            <div class="col-sm-3">
              <div class="input-group date">
                <input type="text" name="date_ordered" value="" placeholder="تاريخ الطلب:" data-date-format="YYYY-MM-DD" id="input-date-ordered" class="form-control" />
                <span class="input-group-btn">
                <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                </span></div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>Products: </legend>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-product">اسم المنتج:</label>
            <div class="col-sm-10">
              <input type="text" name="product" value="" placeholder="اسم المنتج:" id="input-product" class="form-control" />
               </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-model">نوع المنتج:</label>
            <div class="col-sm-10">
              <input type="text" name="model" value="" placeholder="نوع المنتج:" id="input-model" class="form-control" />
               </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-quantity">الكمية:</label>
            <div class="col-sm-10">
              <input type="text" name="quantity" value="1" placeholder="الكمية:" id="input-quantity" class="form-control" />
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label">سبب الإرجاع:</label>
            <div class="col-sm-10">                             <div class="radio">
                <label>
                  <input type="radio" name="return_reason_id" value="1" />
                  Dead On Arrival</label>
              </div>
                                                        <div class="radio">
                <label>
                  <input type="radio" name="return_reason_id" value="4" />
                  Faulty, please supply details</label>
              </div>
                                                        <div class="radio">
                <label>
                  <input type="radio" name="return_reason_id" value="3" />
                  Order Error</label>
              </div>
                                                        <div class="radio">
                <label>
                  <input type="radio" name="return_reason_id" value="5" />
                  Other, please supply details</label>
              </div>
                                                        <div class="radio">
                <label>
                  <input type="radio" name="return_reason_id" value="2" />
                  Received Wrong Item</label>
              </div>
                                           </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label">هل تم فتح المنتج؟</label>
            <div class="col-sm-10">
              <label class="radio-inline">                 <input type="radio" name="opened" value="1" />
                                نعم</label>
              <label class="radio-inline">                 <input type="radio" name="opened" value="0" checked="checked" />
                                لا</label>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-comment">تفاصيل أو عيوب أخرى:</label>
            <div class="col-sm-10">
              <textarea name="comment" rows="10" placeholder="تفاصيل أو عيوب أخرى:" id="input-comment" class="form-control"></textarea>
            </div>
          </div>
          
        </fieldset>
                <div class="buttons clearfix">
          <div class="pull-left"><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/account" class="btn btn-default">رجوع</a></div>
          <div class="pull-right">
            <input type="submit" value="أرسل" class="btn btn-primary" />
          </div>
        </div>
              </form>
      </div>
    	<aside class="col-md-3 col-sm-4 col-xs-12 content-aside right_column sidebar-offcanvas" >
	 	   <span id="close-sidebar" class="fa fa-times"></span>
		  		  <div class="marketplace">
	<div class="list-group">
					  <a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/customerpartner/become_partner" class="list-group-item">Yes, I want to become a Seller.</a>
			</div>
</div>

<div class="modal fade" id="myModal-notification" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h3 class="modal-title">Hi  </h3>
			</div>

			<div class="modal-body">
																			    <center><h4>No Notification Found</h4></center>
			  			</div>

			<div class="modal-footer">
				<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/customerpartner/notification" class="btn btn-primary button" style="color:white;">View All Notifications</a>
				<button type="button" class="btn btn-default button" data-dismiss="modal">Close</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<style type="text/css">
#myModal-notification li{
  //font-family: monospace;
}

/*	.modal-dialog {
		width: 500px;
	}*/
	.sellerBackground {
					background-color: #FF4D45;
				height: 200px;
		text-align: center;
	}
	.seller_detail_stripe {
		background-color: rgba(255, 255, 255, 0.1);
		box-shadow: 0 0 1px 1px rgba(255, 255, 255, 0.2);
		height: 30px;
		margin-top: 5px;
		width: 100%;
	}
	.seller_detail_stripe p {
		color: #fff;
	    font-size: 18px;
	    line-height: 30px;
	}
	.seller-dp {
		height: 100px;
		margin-top: 35px;
	}
</style>

	<div class="modal fade" id="myModal-seller-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  	<div class="modal-dialog">
	    	<div class="modal-content" style="border-radius:0px">
	      		<div class="modal-body" style="padding-top:0px">
						    		<div class="row">
		      			<div class="col-sm-12">
												      			<fieldset>
		      					<lagend>
		      						<h3>Most viewed</h3>
		      					</lagend>
			      				<div class="table-responsive">
			      					<table class="table table-bordered table-hover">
				      					<thead>
					      					<tr>
						      					<th>Product Name</th>
						      					<th>Model</th>
						      					<th class="text-right">Views</th>
					      					</tr>
				      					</thead>
				      					<tbody>
																		      				<tr>
						      					<td class="text-center" colspan="3">
						      						Add new products to gain customers attraction
						      					</td>
						      				</tr>
			      									      						</tbody>
			      					</table>
			      				</div>
			      			</fieldset> <!-- view fieldset -->
		      			</div> <!-- col-sm-12 -->
		    		</div> <!-- row -->
					<div class="row">
						<div class="col-sm-12">
						    <div class="pull-right">
						      	<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">
						      		Close
						      	</button>
						    </div>
						</div>
					</div> <!-- row -->
	      		</div> <!-- modal-body -->
	    	</div> <!-- modal-content -->
		</div> <!-- modal-dialog -->
	</div> <!-- modal -->

<script>
var launchModal =  0;
$(document).ready(function() {
	// $('#myModal-seller-info').modal();
	if(launchModal && window.innerWidth > 767) {
		$('#myModal-seller-info').modal();
	}
});



</script>

		  		  
<div class="list-group">
    <a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/login" class="list-group-item">دخول</a> <a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/register" class="list-group-item">تسجيل</a> <a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/forgotten" class="list-group-item">نسيت كلمة المرور</a>
    <a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/account" class="list-group-item">حسابي</a>
    <a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/address" class="list-group-item">دفتر العناويين</a> <a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/wishlist" class="list-group-item">قائمة رغباتي</a> <a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/order" class="list-group-item">طلباتي</a> <a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/download" class="list-group-item">ملفات التنزيل الرقمية</a><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/recurring" class="list-group-item">المدفوعات المتكررة</a> <a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/reward" class="list-group-item">نقاط المكافآت</a> <a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/return" class="list-group-item">المنتجات المرتجعة</a> <a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/transaction" class="list-group-item">رصيدي</a> <a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/newsletter" class="list-group-item">القائمة البريدية</a>
  </div>

		  	</aside>
</div>
</div>
<script type="text/javascript"><!--
$('.date').datetimepicker({
	language: 'ar',
	pickTime: false
});
//--></script> 

@endsection
