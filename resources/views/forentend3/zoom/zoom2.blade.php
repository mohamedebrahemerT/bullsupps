 @extends('forentend3.index')


@section('content')


@push('js')

<style type="text/css">
  
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
.magnify-container {
    display: inline-block;
    padding: 25px;
    width auto;
}

.magnify {
    position: relative;
    cursor: none
}

.magnify-large {
    position: absolute;
    display: none;
    width:300px;
    height:300px;

    -webkit-box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 0 0 7px 7px rgba(0, 0, 0, 0.25), inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
       -moz-box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 0 0 7px 7px rgba(0, 0, 0, 0.25), inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
            box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 0 0 7px 7px rgba(0, 0, 0, 0.25), inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
   
    -webkit-border-radius: 100%;
       -moz-border-radius: 100%;
             border-radius: 100%
}
</style>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


     <script>
        (function(){
            const currentImage = document.querySelector('#currentImage');
            const images = document.querySelectorAll('.product-section-thumbnail');

            images.forEach((element) => element.addEventListener('mouseover', thumbnailClick));

            function thumbnailClick(e) {
                currentImage.classList.remove('active');

                currentImage.addEventListener('transitionend', () => {
                    currentImage.src = this.querySelector('img').src;
                    currentImage.classList.add('active');
          
    a =  this.querySelector('img').src
    img = $("#currentImage")
    img.attr("src", a );
    img.magnify()



                })

                images.forEach((element) => element.classList.remove('selected'));
                this.classList.add('selected');
            }

        })();
    </script>

 <script type="text/javascript">
 	!function ($) { 
    "use strict";

    var Magnify = function (element, options) {
        this.init('magnify', element, options)
    } 
    Magnify.prototype = { 
        constructor: Magnify 
        , init: function (type, element, options) {
            var event = 'mousemove'
                , eventOut = 'mouseleave';

            this.type = type
            this.$element = $(element)
            this.options = this.getOptions(options)
            this.nativeWidth = 0
            this.nativeHeight = 0

            if(!this.$element.parent().hasClass('magnify')) {
                this.$element.wrap('<div class="magnify" \>');
                this.$element.parent('.magnify').append('<div class="magnify-large" \>');
            }           
            this.$element.siblings(".magnify-large").css("background","url('" + this.$element.attr("src") + "') no-repeat");

            this.$element.parent('.magnify').on(event + '.' + this.type, $.proxy(this.check, this));
            this.$element.parent('.magnify').on(eventOut + '.' + this.type, $.proxy(this.check, this));
        } 
        , getOptions: function (options) {
            options = $.extend({}, $.fn[this.type].defaults, options, this.$element.data())
             if (options.delay && typeof options.delay == 'number') {
                options.delay = {
                    show: options.delay
                    , hide: options.delay
                }
            } 
            return options
        }
         , check: function (e) {
            var container = $(e.currentTarget);
            var self = container.children('img');
            var mag = container.children(".magnify-large");

            // Get the native dimensions of the image
            if(!this.nativeWidth && !this.nativeHeight) {
                var image = new Image();
                image.src = self.attr("src");

                this.nativeWidth = image.width;
                this.nativeHeight = image.height;

            } else {

                var magnifyOffset = container.offset();
                var mx = e.pageX - magnifyOffset.left;
                var my = e.pageY - magnifyOffset.top;

                if (mx < container.width() && my < container.height() && mx > 0 && my > 0) {
                    mag.fadeIn(100);
                } else {
                    mag.fadeOut(100);
                } 
                if(mag.is(":visible"))
                {
                    var rx = Math.round(mx/container.width()*this.nativeWidth - mag.width()/2)*-1;
                    var ry = Math.round(my/container.height()*this.nativeHeight - mag.height()/2)*-1;
                    var bgp = rx + "px " + ry + "px";

                    var px = mx - mag.width()/2;
                    var py = my - mag.height()/2;

                    mag.css({left: px, top: py, backgroundPosition: bgp});
                }
            }

        }
    } 
    $.fn.magnify = function ( option ) {
        return this.each(function () {
            var $this = $(this)
                , data = $this.data('magnify')
                , options = typeof option == 'object' && option
            if (!data) $this.data('tooltip', (data = new Magnify(this, options)))
            if (typeof option == 'string') data[option]()
        })
    } 
    $.fn.magnify.Constructor = Magnify

    $.fn.magnify.defaults = {
        delay: 0
    }   
  
    $(window).on('load', function () {
        $('[data-toggle="magnify"]').each(function () {
            var $mag = $(this);
            $mag.magnify()
        })
    })

} ( window.jQuery );

$('[data-toggle="magnify"]').each(function () {
    var $mag = $(this);
    $mag.magnify()
})

$('#change').click(SwitchPic)

function SwitchPic() {

    a = 'http://www.mendhammoves.com/articles/rescue_dogs/puppy.png'
    img = $("#currentImage")
    img.attr("src", a );
    img.magnify()
}


 </script>
 


@endpush

 


				<div class="col-md-6">

 <div class="product-section">
        <div>
            <div class="product-section-image">
                <img src="{{Storage::url($product->photo)}}" alt="product" class="active magnify-container" id="currentImage" data-toggle="magnify" width="300" height="300">
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

 <a href='#' id="change">Change Image</a>

				</div>

@endsection