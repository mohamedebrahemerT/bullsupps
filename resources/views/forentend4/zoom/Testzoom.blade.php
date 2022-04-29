 @extends('forentend3.index')
@push('js')
  <style>
    body { min-height: 100vh;background-image: linear-gradient(to top, #d9afd9 0%, #97d9e1 100%); }
    #exzoom {
        width: 400px;
        /*height: 400px;*/
    }
    .container { margin: 150px auto; max-width: 960px; }
    .hidden { display: none; }


 
  
.products-section {
  display: grid;
  grid-template-columns: 1fr 3fr;
  margin: 80px auto 80px;
}

.products-section .sidebar li.active {
  font-weight: 500;
}

.products-section .products {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-gap: 60px 30px;
}

.products-section .products .product-price {
  color: #919191;
}

.products-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.product-section {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 120px;
  padding: 100px 0 120px;
}

.product-section .selected {
  border: 1px solid #979797;
}

.product-section-images {
  display: grid;
  grid-template-columns: repeat(6, 1fr);
  grid-gap: 20px;
  margin-top: 20px;
}

.product-section-thumbnail {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  border: 1px solid lightgray;
  min-height: 66px;
  cursor: pointer;
}

.product-section-thumbnail:hover {
  border: 1px solid #979797;
}

.product-section-image {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  border: 1px solid #979797;
  padding: 30px;
  text-align: center;
  height: 400px;
}

.product-section-image img {
  opacity: 0;
  -webkit-transition: opacity .10s ease-in-out;
  transition: opacity .10s ease-in-out;
  max-height: 100%;
}

.product-section-image img.active {
  opacity: 1;
}

.product-section-information p {
  margin-bottom: 16px;
}

.product-section-title {
  margin-bottom: 0;
}

.product-section-subtitle {
  font-size: 20px;
  font-weight: bold;
  color: #919191;
}

.product-section-price {
  font-size: 38px;
  color: #212121;
  margin-bottom: 16px;
}
/*----------------------------*\
    Product view
\*----------------------------*/

#product-main-view .slick-arrow {
  opacity: 0;
}

#product-main-view:hover .slick-arrow {
  opacity: 1;
}

#product-view {
  margin-top: 10px;
  margin-bottom: 15px;
}

#product-view .product-view.slick-slide {
  opacity: 0.2;
}

#product-view .product-view.slick-slide.slick-current {
  opacity: 1;
  -webkit-box-shadow: 0px 0px 0px 2px #EC6524 inset;
  box-shadow: 0px 0px 0px 2px #EC6524 inset;
}

#product-view .product-view {
  padding: 7.5px;
}

.product-view>img {
  width: 100%;
}

/*----------------------------*\
    Product details
\*----------------------------*/

.product.product-details .product-name {
  margin-top: 15px;
}

.product.product-details .product-rating {
  margin-right: 15px;
  margin-bottom: 15px;
}

.product.product-details .product-options {
  padding-top: 30px;
  margin-bottom: 15px;
  border-top: 1px solid #DADADA;
  margin-top: 15px;
}

.product-options .size-option {
  margin-bottom: 15px;
}

.size-option>li {
  display: inline-block;
  margin-right: 6px;
  margin-bottom: 6px;
  vertical-align: top;
}

.size-option>li:last-child {
  margin-right: 0px;
}

.size-option>li>a {
  display: block;
  border: 1px solid #DADADA;
  font-weight: 700;
  padding: 2px 7px 0px 8px;
}

.size-option>li.active a {
  color: #EC6524;
  border-color: #EC6524;
}

.color-option>li {
  display: inline-block;
  margin-right: 6px;
  margin-bottom: 6px;
  vertical-align: top;
}

.color-option>li:last-child {
  margin-right: 0px;
}

.color-option>li>a {
  display: block;
  width: 20px;
  height: 20px;
}

.color-option>li.active a {
  -webkit-box-shadow: 0px 0px 0px 2px #FFF, 0px 0px 0px 3px #EC6524;
  box-shadow: 0px 0px 0px 2px #FFF, 0px 0px 0px 3px #EC6524;
}

.product.product-details .qty-input {
  display: inline-block;
}

.product.product-details .qty-input .input {
  width: 90px;
}

/*----------------------------*\
    Product tab
\*----------------------------*/

.product-tab {
  margin-top: 30px;
}

.product-tab .tab-nav {
  border-bottom: 1px solid #DADADA;
  margin-bottom: 30px;
}

.product-tab .tab-nav li {
  display: inline-block;
}

.product-tab .tab-nav li+li {
  margin-left: 30px;
}

.product-tab .tab-nav li a {
  display: block;
  padding: 15px 0px;
  text-transform: uppercase;
  font-weight: 700;
}

.product-tab .tab-nav li.active {
  position: relative;
}

.product-tab .tab-nav li.active a {
  color: #EC6524;
}

.product-tab .tab-nav li.active a:after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -1.5px;
  height: 3px;
  width: 30px;
  background-color: #EC6524;
}

/*-- reviews --*/

.single-review {
  margin-bottom: 30px;
}

.single-review .review-heading>div {
  display: inline-block;
}

.single-review .review-heading>div+div {
  margin-left: 10px;
}

.single-review .review-rating {
  display: inline-block;
}

.single-review .review-rating>i {
  color: #FFB656;
}

.single-review .review-rating>i.empty {
  color: #DADADA;
}

.single-review .review-body {
  margin-top: 10px;
}

.reviews-pages li {
  display: inline-block;
  margin-right: 6px;
}

.reviews-pages li a {
  display: block;
  min-width: 10px;
  text-align: center;
}

.reviews-pages li.active {
  color: #EC6524;
}

/*-- review form --*/

.review-form textarea.input {
  height: 90px;
}

.review-form .input-rating .stars {
  display: inline-block;
  vertical-align: top;
}

.review-form .input-rating .stars input[type="radio"] {
  display: none;
}

.review-form .input-rating .stars>label {
  float: right;
  cursor: pointer;
  padding: 0px 3px;
  margin: 0px;
  -webkit-transition: 0.3s all;
  transition: 0.3s all;
}

.review-form .input-rating .stars>label:hover, .review-form .input-rating .stars>label:hover~label {
  -webkit-transform: scale(1.5);
  -ms-transform: scale(1.5);
  transform: scale(1.5);
}

.review-form .input-rating .stars>label:before {
  content: "\f006";
  font-family: FontAwesome;
  font-style: normal;
  font-weight: normal;
  color: #DADADA;
  font-size: 14px;
  -webkit-transition: 0.3s all;
  transition: 0.3s all;
}

.review-form .input-rating .stars>label:hover:before, .review-form .input-rating .stars>label:hover~label:before {
  content: "\f005";
  color: #FFB656;
}

.review-form .input-rating .stars>input:checked label:before, .review-form .input-rating .stars>input:checked~label:before {
  content: "\f005";
  color: #FFB656;
}

/*=========================================================
    09 -> CHECKOUT PAGE
===========================================================*/

.shiping-methods {
  margin-bottom: 30px;
}

/*-- shopping cart table --*/

.shopping-cart-table>tbody>tr>td, .shopping-cart-table>tbody>tr>th, .shopping-cart-table>tfoot>tr>td, .shopping-cart-table>tfoot>tr>th, .shopping-cart-table>thead>tr>td, .shopping-cart-table>thead>tr>th {
  padding: 15px 0px;
  vertical-align: middle;
  border-top: 1px solid #DADADA;
}

.shopping-cart-table>thead>tr>th {
  color: #30323A;
  text-transform: uppercase;
  border-bottom: 1px solid #DADADA;
}

.shopping-cart-table>tbody>tr:last-child>td {
  border-bottom: 1px solid #DADADA;
}

.shopping-cart-table>tfoot>tr>td, .shopping-cart-table>tfoot>tr>th {
  color: #30323A;
  border-top: 0px
}

.shopping-cart-table>tfoot>tr>td:not(.empty), .shopping-cart-table>tfoot>tr>th:not(.empty) {
  padding: 15px;
  background-color: #F6F7F8;
  border: 1px solid #DADADA;
}

.shopping-cart-table>tbody>tr>.details>a {
  font-size: 18px;
  font-weight: 700;
}

.shopping-cart-table>tbody>tr>.thumb>img {
  width: 60px;
}

.shopping-cart-table>tbody>tr>.qty .input {
  width: 90px;
}

.shopping-cart-table>tbody>tr>.price {
  font-size: 18px;
}

.shopping-cart-table>tbody>tr>.total {
  font-size: 18px;
}

.shopping-cart-table>tfoot>tr>.sub-total {
  font-size: 18px;
}

.shopping-cart-table>tfoot>tr>.total {
  font-size: 24px;
  color: #EC6524;
}


/*----------------------------*\
    Product view
\*----------------------------*/

#product-main-view .slick-arrow {
  opacity: 0;
}

#product-main-view:hover .slick-arrow {
  opacity: 1;
}

#product-view {
  margin-top: 10px;
  margin-bottom: 15px;
}

#product-view .product-view.slick-slide {
  opacity: 0.2;
}

#product-view .product-view.slick-slide.slick-current {
  opacity: 1;
  -webkit-box-shadow: 0px 0px 0px 2px #EC6524 inset;
  box-shadow: 0px 0px 0px 2px #EC6524 inset;
}

#product-view .product-view {
  padding: 7.5px;
}

.product-view>img {
  width: 100%;
}

/*----------------------------*\
    Product details
\*----------------------------*/

.product.product-details .product-name {
  margin-top: 15px;
}

.product.product-details .product-rating {
  margin-right: 15px;
  margin-bottom: 15px;
}

.product.product-details .product-options {
  padding-top: 30px;
  margin-bottom: 15px;
  border-top: 1px solid #DADADA;
  margin-top: 15px;
}

.product-options .size-option {
  margin-bottom: 15px;
}

.size-option>li {
  display: inline-block;
  margin-right: 6px;
  margin-bottom: 6px;
  vertical-align: top;
}

.size-option>li:last-child {
  margin-right: 0px;
}

.size-option>li>a {
  display: block;
  border: 1px solid #DADADA;
  font-weight: 700;
  padding: 2px 7px 0px 8px;
}

.size-option>li.active a {
  color: #EC6524;
  border-color: #EC6524;
}

.color-option>li {
  display: inline-block;
  margin-right: 6px;
  margin-bottom: 6px;
  vertical-align: top;
}

.color-option>li:last-child {
  margin-right: 0px;
}

.color-option>li>a {
  display: block;
  width: 20px;
  height: 20px;
}

.color-option>li.active a {
  -webkit-box-shadow: 0px 0px 0px 2px #FFF, 0px 0px 0px 3px #EC6524;
  box-shadow: 0px 0px 0px 2px #FFF, 0px 0px 0px 3px #EC6524;
}

.product.product-details .qty-input {
  display: inline-block;
}

.product.product-details .qty-input .input {
  width: 90px;
}

/*----------------------------*\
    Product tab
\*----------------------------*/

.product-tab {
  margin-top: 30px;
}

.product-tab .tab-nav {
  border-bottom: 1px solid #DADADA;
  margin-bottom: 30px;
}

.product-tab .tab-nav li {
  display: inline-block;
}

.product-tab .tab-nav li+li {
  margin-left: 30px;
}

.product-tab .tab-nav li a {
  display: block;
  padding: 15px 0px;
  text-transform: uppercase;
  font-weight: 700;
}

.product-tab .tab-nav li.active {
  position: relative;
}

.product-tab .tab-nav li.active a {
  color: #EC6524;
}

.product-tab .tab-nav li.active a:after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -1.5px;
  height: 3px;
  width: 30px;
  background-color: #EC6524;
}

/*-- reviews --*/

.single-review {
  margin-bottom: 30px;
}

.single-review .review-heading>div {
  display: inline-block;
}

.single-review .review-heading>div+div {
  margin-left: 10px;
}

.single-review .review-rating {
  display: inline-block;
}

.single-review .review-rating>i {
  color: #FFB656;
}

.single-review .review-rating>i.empty {
  color: #DADADA;
}

.single-review .review-body {
  margin-top: 10px;
}

.reviews-pages li {
  display: inline-block;
  margin-right: 6px;
}

.reviews-pages li a {
  display: block;
  min-width: 10px;
  text-align: center;
}

.reviews-pages li.active {
  color: #EC6524;
}

/*-- review form --*/

.review-form textarea.input {
  height: 90px;
}

.review-form .input-rating .stars {
  display: inline-block;
  vertical-align: top;
}

.review-form .input-rating .stars input[type="radio"] {
  display: none;
}

.review-form .input-rating .stars>label {
  float: right;
  cursor: pointer;
  padding: 0px 3px;
  margin: 0px;
  -webkit-transition: 0.3s all;
  transition: 0.3s all;
}

.review-form .input-rating .stars>label:hover, .review-form .input-rating .stars>label:hover~label {
  -webkit-transform: scale(1.5);
  -ms-transform: scale(1.5);
  transform: scale(1.5);
}

.review-form .input-rating .stars>label:before {
  content: "\f006";
  font-family: FontAwesome;
  font-style: normal;
  font-weight: normal;
  color: #DADADA;
  font-size: 14px;
  -webkit-transition: 0.3s all;
  transition: 0.3s all;
}

.review-form .input-rating .stars>label:hover:before, .review-form .input-rating .stars>label:hover~label:before {
  content: "\f005";
  color: #FFB656;
}

.review-form .input-rating .stars>input:checked label:before, .review-form .input-rating .stars>input:checked~label:before {
  content: "\f005";
  color: #FFB656;
}

/*=========================================================
    09 -> CHECKOUT PAGE
===========================================================*/

.shiping-methods {
  margin-bottom: 30px;
}

/*-- shopping cart table --*/

.shopping-cart-table>tbody>tr>td, .shopping-cart-table>tbody>tr>th, .shopping-cart-table>tfoot>tr>td, .shopping-cart-table>tfoot>tr>th, .shopping-cart-table>thead>tr>td, .shopping-cart-table>thead>tr>th {
  padding: 15px 0px;
  vertical-align: middle;
  border-top: 1px solid #DADADA;
}

.shopping-cart-table>thead>tr>th {
  color: #30323A;
  text-transform: uppercase;
  border-bottom: 1px solid #DADADA;
}

.shopping-cart-table>tbody>tr:last-child>td {
  border-bottom: 1px solid #DADADA;
}

.shopping-cart-table>tfoot>tr>td, .shopping-cart-table>tfoot>tr>th {
  color: #30323A;
  border-top: 0px
}

.shopping-cart-table>tfoot>tr>td:not(.empty), .shopping-cart-table>tfoot>tr>th:not(.empty) {
  padding: 15px;
  background-color: #F6F7F8;
  border: 1px solid #DADADA;
}

.shopping-cart-table>tbody>tr>.details>a {
  font-size: 18px;
  font-weight: 700;
}

.shopping-cart-table>tbody>tr>.thumb>img {
  width: 60px;
}

.shopping-cart-table>tbody>tr>.qty .input {
  width: 90px;
}

.shopping-cart-table>tbody>tr>.price {
  font-size: 18px;
}

.shopping-cart-table>tbody>tr>.total {
  font-size: 18px;
}

.shopping-cart-table>tfoot>tr>.sub-total {
  font-size: 18px;
}

.shopping-cart-table>tfoot>tr>.total {
  font-size: 24px;
  color: #EC6524;

</style>

    <script src="{{url('/')}}/forentend3/assets/js/main.js"></script>
    <script src="{{url('/')}}/forentend3/assets/js/jquery.zoom.min.js"></script>
    <script src="{{url('/')}}/slick2.min.js"></script>

   
    


        <script>
        (function(){
            const currentImage = document.querySelector('#currentImage');
            const images = document.querySelectorAll('.product-section-thumbnail');

            images.forEach((element) => element.addEventListener('click', thumbnailClick));

            function thumbnailClick(e) {
                currentImage.classList.remove('active');


                currentImage.addEventListener('transitionend', () => {
                    currentImage.src = this.querySelector('img').src;

                 
                    currentImage.classList.add('active');
                })

                   x=this.querySelector('img').src;

          $('.sucess_message').html("<img src="+x+">").removeClass('hidden');


                images.forEach((element) => element.classList.remove('selected'));
                this.classList.add('selected');
            }

        })();
    </script>


        <script>
        (function(){
            const currentImage = document.querySelector('#currentImage');
            const images = document.querySelectorAll('.product-section-thumbnail');

            images.forEach((element) => element.addEventListener('click', thumbnailClick));

            function thumbnailClick(e) {
                currentImage.classList.remove('active');

                currentImage.addEventListener('transitionend', () => {
                    currentImage.src = this.querySelector('img').src;
                    currentImage.classList.add('active');
                })

                images.forEach((element) => element.classList.remove('selected'));
                this.classList.add('selected');
            }

        })();
    </script>


@endpush

@section('content')

 

 <div class="product-section container">
        <div>

<div id="product-main-view">

                            <div class="product-view">
                <div class="product-section-image">
                <img src="{{Storage::url($product->photo)}}" alt="product" class="active" id="currentImage">
            </div>
                            </div>

                             
</div>

          

            <div class="product-section-images">   
        		@foreach($filess as $file)
                
                    <div class="product-section-thumbnail">
                <img src="{{Storage::url($file->full_file)}}" alt="product" height="100" width="60">
                    </div>
 
   @endforeach
               
              
            </div>


        </div>
        </div>  
@endsection
 
 

 
