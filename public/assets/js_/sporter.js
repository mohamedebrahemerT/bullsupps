require(['jquery', 'mage/tabs', 'mage/translate', 'domReady!', 'jquery/jquery.cookie'], function($) {
    function eqHeightCol() { var HeightArray = 0; var i = 0; var max = 0;
        $(".product-items .product-name, .prod-content .product-name, #instant-search-results-container .product-name").each(function() { HeightArray = $(this).height();
            max = Math.max(max, HeightArray); });
        $(".product-items .product-name, .prod-content .product-name, #instant-search-results-container .product-name").each(function() { $(this).height(max); }); };
    $('.book-appointment').click(function() { $('.overlay').css('display', 'block');
        $('.swiper-lazy-preloader').css('display', 'block'); });
    $(document).ready(function() {
        eqHeightCol();
        $('.user-account').click(function(event) { event.stopPropagation();
            $('.link.authorization-link').toggle();
            $('.my-account-link').toggle();
            $('.my-orders-link').toggle();
            $('.my-rewards-link').toggle();
            $('.register-link').toggle();
            $('.social-media-link').toggle();
            $('.account-menu-list').toggle(); });
        $("#header-account").on("click", function(event) { event.stopPropagation(); });
        $(document).on("click", function() { $("#header-account").hide();
            $('.link.authorization-link').hide();
            $('.my-account-link').hide();
            $('.my-orders-link').hide();
            $('.my-rewards-link').hide();
            $('.register-link').hide();
            $('.social-media-link').hide();
            $('.account-menu-list').hide(); });
        $(document).on("click", ".button-review", function() { var display = $(".toggle-form").css("display");
            $(".toggle-form").toggle(); if (display == "none") { $(".toggle-form").addClass('active'); } else { $(".toggle-form").removeClass('active'); } });
        $("#product-addtocart-button").click(function() { $("#product_addtocart_form").submit(); });

        function spiningContent() { var prev = $(".spining-content li:first-child");
            $.unique(prev).each(function(i) { $(this).delay(i * 600).slideUp(function() { $(this).appendTo(this.parentNode).slideDown(); }); }); }
        window.setInterval(spiningContent, 2500);
        if ($(window).width() >= 768) { $(".add-to-cart.top-add-to-cart").remove(); }
        $(this).on('click', ".btn-qty-control--plus", function(event) { qty = parseInt($('#qty').val()) + 1;
            $("input[name=qty]").each(function() { this.value = qty; }); });
        $(this).on('click', ".btn-qty-control--minus", function(event) { qty = parseInt($('#qty').val()) - 1; if (parseInt($('#qty').val()) > 1) { $("input[name=qty]").each(function() { this.value = qty; }); } });
        $(document).on('keyup input', 'input[name=qty]', function(event) {
            qty = parseInt($('#qty').val());
            if (parseInt($('#qty').val()) > 1) { $("input[name=qty]").each(function() { this.value = qty; }); } else if (qty == 0) { $("input[name=qty]").each(function() { this.value = 1; }); }
            event.preventDefault();
        });
        $(this).on('keypress', 'input[name=qty], input[name$="[qty]"]', function(event) { var regex = new RegExp("^[a-zA-Z0-9]+$"); var key = String.fromCharCode(!event.charCode ? event.which : event.charCode); if (!regex.test(key)) { event.preventDefault(); return false; } });
        $(document).on("click", ".toggle-password", function() { if ($('#pass').attr('type') == "password") { $('#pass').attr("type", "text");
                $('.toggle-password').removeClass('fa-eye-slash');
                $('.toggle-password').addClass('fa-eye'); } else { $('#pass').attr("type", "password");
                $('.toggle-password').removeClass('fa-eye');
                $('.toggle-password').addClass('fa-eye-slash'); } });
        $(document).on("click", ".toggle-password-add", function() { if ($('#password').attr('type') == "password") { $('#password').attr("type", "text");
                $('.toggle-password-add').removeClass('fa-eye-slash');
                $('.toggle-password-add').addClass('fa-eye'); } else { $('#password').attr("type", "password");
                $('.toggle-password-add').removeClass('fa-eye');
                $('.toggle-password-add').addClass('fa-eye-slash'); } });
        $(document).on("click", ".toggle-password-confirm", function() { if ($('#password-confirmation').attr('type') == "password") { $('#password-confirmation').attr("type", "text");
                $('.toggle-password-confirm').removeClass('fa-eye-slash');
                $('.toggle-password-confirm').addClass('fa-eye'); } else { $('#password-confirmation').attr("type", "password");
                $('.toggle-password-confirm').removeClass('fa-eye');
                $('.toggle-password-confirm').addClass('fa-eye-slash'); } });
        if (dataLayer.length) { var allBannerData = bannerData.concat(sidebannerData);
            dataLayer.push({ 'event': 'promoView', 'ecommerce': { 'promoView': { 'promotions': allBannerData.concat(imageBannerData) } } }); }
        $('.nutritious-left img, .nutritious-right img, .imagewidgetclass img').on('click', function() {
            if ($(this).attr('srcset') === undefined) { var url = $(this).attr('src').split("?")[0]; } else { var url = $(this).attr('srcset').split("?")[0]; }
            dataLayer.push({ 'event': 'promoClick', 'ecommerce': { 'promoClick': { 'promotions': [{ 'id': $(this).attr('alt'), 'name': $(this).attr('alt'), 'creative': url.split("/").pop(), 'position': $(this).attr('data-position'), 'vertical': $(this).attr('data-vertical') }] } } });
        });
    });
    $(document).on("click", ".login-to-account", function() { $('#customer-login-tab div:nth-child(1)').addClass('active');
        $('#customer-login-tab div:nth-child(3)').removeClass('active');
        $('#register').css("display", "none");
        $('#login').css("display", "block");
        $('.page-heading').text($.mage.__('Welcome To Sporter'));
        $('.social-media-login span').text($.mage.__('Sign In With Social Media')); });
    $(document).on("click", ".create-account", function() { $('#customer-login-tab div:nth-child(3)').addClass('active');
        $('#customer-login-tab div:nth-child(1)').removeClass('active');
        $('#register').css("display", "block");
        $('#login').css("display", "none");
        $('.page-heading').text($.mage.__('Become A Sporter'));
        $('.social-media-login span').text($.mage.__('Sign In With Social Media')); });
    $(document).on("click", "#customer-login-tab div:nth-child(1)", function() { $('.page-heading').text($.mage.__('Welcome To Sporter')); });
    $(document).on("click", "#customer-login-tab div:nth-child(3)", function() { $('.page-heading').text($.mage.__('Become A Sporter')); });
    $.ajax({
        url: AJAX_DYNAMIC_BLOCKS_LINK,
        dataType: "json",
        success: function(data) {
            var pophtml = data.dispophtml;
            var storeCode = data.country;
            $(".currency-switcher li .icon-checkmark").remove();
            $(".country-switcher li").each(function(li) { if ($(this).attr("onclick").indexOf(storeCode) !== -1) { $(this).append('<i class="fas fa-check fa-checkmark"></i>'); } });
            $("a.header-store-link").replaceWith(data.current_country);
            if (data.show_annouce) { $(".annouce-msg").fadeIn(300); } else { $(".page").removeClass("black_friday_top_banner_exists"); }
            if (data.imagepopup && data.displaypopup != 1) { $('.blackfriday_web_dialog_overlay').show(function() { $('body').addClass('blackfriday-offer-popup');
                    $('.image-popup>.blackfriday_web_dialog').show();
                    setTimeout(function() { $(".logo-wrapper").show(); }, 1000);
                    setTimeout(function() { $(".title-block").show(); }, 1500);
                    setTimeout(function() { $(".gifts-list .gift-item").each(function(i) { $(this).delay(i * 700).fadeIn(300); }); }, 2500);
                    setTimeout(function() { $(".shop-now-link").show();
                        $(".image-close-icon").show(); }, 6000); }); }
            if (data.displaypopup == 1) {
                $(pophtml).insertAfter(".page-main");
                ShowDialog(true);
                $('.switch-popup-content select').each(function() {
                    var obselect = $(this);
                    numberOfOptions = $(this).children('option').length;
                    obselect.addClass('s-hidden');
                    obselect.wrap('<div class="select"></div>');
                    obselect.after('<div class="styledSelect"></div>');
                    var divselobj = obselect.next('div.styledSelect');
                    divselobj.text(obselect.children('option').eq(0).text());
                    var selectedval = obselect.find("option[custom='selected']").val();
                    var selctedtext = obselect.find("option[custom='selected']").text();
                    divselobj.text(selctedtext);
                    divselobj.attr("value", selectedval);
                    var ulobj = $('<ul />', { 'class': 'options' }).insertAfter(divselobj);
                    for (var i = 0; i < numberOfOptions; i++) { $('<li />', { text: obselect.children('option').eq(i).text(), rel: obselect.children('option').eq(i).val() }).appendTo(ulobj); }
                    var liobj = ulobj.children('li');
                    divselobj.click(function(e) {
                        e.stopPropagation();
                        var selectid = $(this).prev('select').attr('id');
                        if (selectid == "selectbox1") { $("#selectbox2").next("div.styledSelect").removeClass('active').next('ul.options').hide(); } else { $("#selectbox1").next("div.styledSelect").removeClass('active').next('ul.options').hide(); }
                        $(this).toggleClass('active').next('ul.options').toggle();
                    });
                    liobj.click(function(e) { e.stopPropagation();
                        divselobj.text($(this).text()).removeClass('active');
                        $(this).closest('ul').attr('id');
                        divselobj.attr("value", $(this).attr('rel'));
                        obselect.val($(this).attr('rel'));
                        ulobj.hide(); });
                    $(document).click(function() { divselobj.removeClass('active');
                        ulobj.hide(); });
                });
            }
        }
    });
    $(document).on('click', '.change-store', function(e) { $("#overlay").hide();
        $("#dialog").fadeOut(300);
        e.preventDefault(); var country = $("#selectbox1").next("div.styledSelect").attr('value'); var store = $("#selectbox2").next("div.styledSelect").attr('value'); var site_base_uri = $(".site_base_uri").text(); var site_req_uri = $(".site_req_uri").text();
        url = site_base_uri + "international/index/index/force/1/country/" + country + "/storelang/" + store + "/uri/" + site_req_uri + "/";
        window.location.href = url; });
    $(document).on('click', '#btnClose', function(e) { ClickHideDialog();
        e.preventDefault(); });
    $(document).on('click', '.switch-close-icon, .switch-close-link', function(e) { ClickHideDialog();
        e.preventDefault(); });
    $(document).on('click', '.image-close-icon', function(e) { BlackFridayHideDialog(); });

    function BlackFridayHideDialog() { $('body').removeClass('blackfriday-offer-popup'); var date = new Date();
        date.setTime(date.getTime() + 24 * 60 * 60 * 365 * 10);
        $.cookie('is_image_popup_closed', 1, { expires: date, path: '/' });
        $(".blackfriday_web_dialog_overlay").hide();
        $(".image-popup .blackfriday_web_dialog").fadeOut(300); }
    $(document).on('change', '#selectbox1', function() { $('#selectbox1').next('div.styledSelect').attr('value', this.value);
        $('#selectbox1').next('div.styledSelect').text(this.value) });
    $(document).on('change', '#selectbox2', function() { $('#selectbox2').next('div.styledSelect').attr('value', this.value);
        $('#selectbox2').next('div.styledSelect').text(this.value) });
    $(document).on('click', '#confirm_order', function() { $('.success-page-loader').show();
        $('.change-mobile-number p.error_msg').hide();
        $('.check-otp-number p.error_msg').hide(); var otp = $('input[name^=otp]').map(function(idx, elem) { return $(elem).val(); }).get().join(""); if (otp !== "") { $.ajax({ type: "POST", url: mobile_number_verifycheck_link, dataType: "json", data: { "request_id": $("input[name='request_id']").val(), "otp": otp, "mobile": $("input[name='telephone_number']").val(), "address_id": $("input[name='address_id']").val(), "order_id": $("input[name='order_id']").val(), "guest": $("input[name='guest']").val() }, success: function(data) { $('.success-page-loader').hide(); if (data.status == "0") { if (data.isdisplaypopup == 1) { $("body").addClass("no-scroll");
                            $('.overlay').fadeIn(); var fblightbox = $('#fblightbox');
                            centerAppointmentModal(fblightbox);
                            $("#fblightbox .fblightbox-wrap").append(data.makeappointmenthtml);
                            $('.appointment-steps').hide();
                            $('.appointment-back').hide();
                            $('.appointment-close').hide();
                            fblightbox.fadeIn(); } else { window.location.reload(); } } else { $('.check-otp-number p.error_msg').text(data.error_text);
                        $('.check-otp-number p.error_msg').show(); } } }); } else { $('.success-page-loader').hide();
            $('.check-otp-number p.error_msg').text($.mage.__("Please enter code"));
            $('.check-otp-number p.error_msg').show(); } });
    $(document).on('click', '#cancel_change_number', function() { $('.check-otp-number').show();
        $('.change-number').show();
        $('.change-mobile-number').hide();
        $('#f1').val('');
        $('#f2').val('');
        $('#f3').val('');
        $('#f4').val('');
        $('input.otp:first').focus(); });
    $(document).on('click', '#save_number', function() {
        $('.success-page-loader').show();
        $('.change-mobile-number p.error_msg').hide();
        $('.check-otp-number p.error_msg').hide();
        if ($("#mobile").val() == '' || typeof($("#mobile").val()) === "undefined") { $('.success-page-loader').hide();
            $('.change-mobile-number p.error_msg').text($.mage.__("Please enter mobile number."));
            $('.change-mobile-number p.error_msg').show(); return; }
        $.ajax({
            type: "POST",
            url: $("#check_mobile_link").val(),
            dataType: "json",
            data: { "mobile": $("#mobile").val(), "address_id": $("input[name='address_id']").val(), "order_id": $("input[name='order_id']").val(), "guest": $("input[name='guest']").val() },
            success: function(data) {
                $('.success-page-loader').hide();
                if (data.verify_mobile == true) {
                    if (data.verify_mobile == true) {
                        $.ajax({
                            type: "POST",
                            url: $("#mobile_number_verify_link").val(),
                            dataType: "json",
                            data: { "mobile": $("#mobile").val(), },
                            success: function(data) {
                                if (data.status == "0") { location.reload(); } else {
                                    $("input[name='request_id']").val(data.request_id);
                                    $("#save_number").css('pointer-events', 'none');
                                    $('.change-mobile-number p.error_msg').text($.mage.__(data.error_text));
                                    $('.change-mobile-number p.error_msg').append('<span id="error_counter_change_mobile"> 5 min.</span>');
                                    $('.change-mobile-number p.error_msg').show();
                                    var counter = 300;
                                    var elem = $('#resend-link-mobile-change');
                                    var error_element = $('#error_counter_change_mobile');
                                    elem.text('');
                                    var inst = setInterval(saveNumber, 1000);

                                    function saveNumber() {
                                        if (error_element.length > 0) {
                                            var m = parseInt(counter / 60);
                                            var s = checkSecond(((counter % 60) - 1));
                                            if (s == 59) { m = m - 1 }
                                            error_element.text(" " + m + ":" + s);
                                            counter--;
                                            if (counter <= 0) { $("#save_number").css('pointer-events', 'visible');
                                                clearInterval(inst);
                                                $('.change-mobile-number p.error_msg').hide(); }
                                        }
                                    }
                                }
                            }
                        });
                    }
                }
            }
        });
    });
    $(document).on('click', '#resendCode', function() {
        $('.success-page-loader').show();
        $('.change-mobile-number p.error_msg').hide();
        $('.check-otp-number p.error_msg').hide();
        $.ajax({
            type: "POST",
            url: mobile_number_reverify_link,
            dataType: "json",
            data: { "mobile": $("input[name='telephone_number']").val(), "request_id": $("input[name='request_id']").val() },
            success: function(data) {
                $('.success-page-loader').hide();
                if (data.status == "0") { $("input[name='request_id']").val(data.request_id);
                    $("#resendCode").css('pointer-events', 'none'); var counter = 30; var elem = $('#resend-link'); var inst = setInterval(resendCode, 1000);

                    function resendCode() { if (elem.length > 0) { elem.text(data.resend_seconds_text + counter + $.mage.__(" s"));
                            counter--; if (counter <= 0) { $("#resendCode").css('pointer-events', 'visible');
                                elem.text('');
                                clearInterval(inst); } } } } else if (data.status == "19") {
                    $("input[name='request_id']").val(data.request_id);
                    $("#resendCode").css('pointer-events', 'none');
                    $('.check-otp-number p.error_msg').text($.mage.__(data.error_text));
                    $('.check-otp-number p.error_msg').append('<span id="error_counter"> 5 min.</span>');
                    $('.check-otp-number p.error_msg').show();
                    var counter = 300;
                    var elem = $('#resend-link');
                    var error_element = $('#error_counter');
                    elem.text('');
                    var inst = setInterval(resendCodeAgain, 1000);

                    function resendCodeAgain() {
                        if (error_element.length > 0) {
                            var m = parseInt(counter / 60);
                            var s = checkSecond(((counter % 60) - 1));
                            if (s == 59) { m = m - 1 }
                            error_element.text(m + ":" + s);
                            counter--;
                            if (counter <= 0) { $("#resendCode").css('pointer-events', 'visible');
                                clearInterval(inst);
                                $('.check-otp-number p.error_msg').hide(); }
                        }
                    }
                } else { $('.check-otp-number p.error_msg').text($.mage.__(data.error_text));
                    $('.check-otp-number p.error_msg').show(); }
            }
        });
    });
    $(document).on('click', '#verifyNumber', function() {
        $.ajax({
            type: "POST",
            url: $("#check_mobile_link").val(),
            dataType: "json",
            data: { "mobile": $("#mobile").val(), "address_id": $("input[name='address_id']").val(), "guest": $("input[name='checkout_method']:checked").val() },
            success: function(data) {
                if (data.verify_mobile == true) {
                    $.ajax({
                        type: "POST",
                        url: $("#mobile_number_verify_link").val(),
                        dataType: "json",
                        data: { "mobile": $("#mobile").val(), },
                        success: function(data) {
                            if (data.status == "0") {
                                $('.switch-popup-header p').text(data.message_sent_text + ' ' + $("#mobile").val());
                                var html = '<p>' + data.enter_code_text + '</p>' +
                                    '<input id="mobile" name="mobile" type="hidden" value="' + $("#mobile").val() + '"/>' +
                                    '<input id="request_id" name="request_id" type="hidden" value="' + data.request_id + '"/>' +
                                    '<div class="input-field clearfix">' +
                                    '<input type="text" id="f1" name="otp" class="otp number-only" maxlength="1" value="" size="3" pattern="[0-9]" autocomplete="off" />' +
                                    '<input type="text" id="f2" name="otp" class="otp number-only" maxlength="1" value="" size="3" pattern="[0-9]" autocomplete="off" />' +
                                    '<input type="text" id="f3" name="otp" class="otp number-only" maxlength="1" value="" size="3" pattern="[0-9]" autocomplete="off" />' +
                                    '<input type="text" id="f4" name="otp" class="otp number-only" maxlength="1" value="" size="3" pattern="[0-9]" autocomplete="off" />' +
                                    '</div>' +
                                    '<p class="error_msg"></p>' +
                                    '<button id="verifyCheck" class="verify button">' + data.verify_text + '</button>' +
                                    '<div class="clearfix center" id="resend-link">' + data.resend_seconds_text + '<div>';
                                var link = '<a href="javascript:void(0)" id="reverifyNumber" class="edit-link">' + data.resend_code_text + '</a>';
                                $('.switch-popup-content').html(html);
                                $('input.otp:first').focus();
                                var counter = 30;
                                var elem = $('#resend-link');
                                var inst = setInterval(changeverifyNumber, 1000);

                                function changeverifyNumber() { if (elem.length > 0) { elem.text(data.resend_seconds_text + counter + $.mage.__(" s"));
                                        counter--; if (counter <= 0) { elem.html(link);
                                            clearInterval(inst); } } }
                            } else { $('.switch-popup-content p.error_msg').text($.mage.__(data.error_text));
                                $('.switch-popup-content p.error_msg').show(); }
                        },
                        error: function(jqXHR, textStatus, errorThrown) { alert(errorThrown); }
                    });
                } else { $('.switch-popup-header p').text(data.verified_text);
                    $('.switch-popup-content').html('<img src="' + data.verified_image + '" />'); if ($(location).attr("href").indexOf('customer/address') != -1) { $("#dialog").fadeOut(500);
                        location.reload(); } else { $('#is_verified').val(1);
                        $('#is_verified').attr('telephone', data.telephone);
                        $("input[name='billing[telephone]']").val(data.telephone); } }
            },
            error: function(jqXHR, textStatus, errorThrown) { alert(errorThrown); }
        });
    });
    $(document).on('click', '#verifyCheck', function() { var otp = $('input[name^=otp]').map(function(idx, elem) { return $(elem).val(); }).get().join(""); if (otp !== "") { $('.switch-popup-content p.error_msg').hide();
            $.ajax({ type: "POST", url: mobile_number_verifycheck_link, dataType: "json", data: { "request_id": $("input[name='request_id']").val(), "otp": otp, "mobile": $("input[name='mobile']").val(), "address_id": $("input[name='address_id']").val(), "guest": $("input[name='checkout_method']:checked").val() }, success: function(data) { if (data.status == "0") { $('.switch-popup-header p').text(data.verified_text);
                        $('.switch-popup-content').html('<img src="' + data.verified_image + '" />');
                        $("<span onclick=skipNumberVerification('" + data.telephone + "'); class='switch-close-link button'>" + $.mage.__('close') + "</span>").insertAfter('.switch-popup-content'); if ($(location).attr("href").indexOf('customer/address') != -1) { $("#dialog").fadeOut(500);
                            location.reload(); } else if ($(location).attr("href").indexOf('checkout/onepage') != -1) { $('#is_verified').val(1);
                            $('#is_verified').attr('telephone', data.telephone);
                            $("input[name='billing[telephone]']").val(data.telephone); } else { var telephone = data.telephone.replace($.trim($('#country_code').text()), '');
                            $('#telephone').val(telephone);
                            doAjax(); } } else if (data.status == "17") { $('.switch-popup-content p.error_msg').text($.mage.__(data.error_text));
                        $('.switch-popup-content p.error_msg').show(); } else { $('.switch-popup-content p.error_msg').text($.mage.__(data.error_text));
                        $('.switch-popup-content p.error_msg').show(); } }, error: function(jqXHR, textStatus, errorThrown) { alert(errorThrown); } }); } else { $('.switch-popup-content p.error_msg').text($.mage.__("Please enter code"));
            $('.switch-popup-content p.error_msg').show(); } });
    $(document).on('click', '#reverifyNumber', function() {
        $('.switch-popup-content p.error_msg').hide();
        $.ajax({
            type: "POST",
            url: mobile_number_reverify_link,
            dataType: "json",
            data: { "mobile": $("#mobile").val(), "request_id": $("input[name='request_id']").val() },
            success: function(data) {
                if (data.status == "0") { $("input[name='request_id']").val(data.request_id); var link = '<a href="javascript:void(0)" id="reverifyNumber" class="edit-link">' + data.resend_code_text + '</a>'; var counter = 30; var elem = $('#resend-link'); var inst = setInterval(changereverifyNumber, 1000);

                    function changereverifyNumber() { if (elem.length > 0) { elem.text(data.resend_seconds_text + counter + $.mage.__(" s"));
                            counter--; if (counter <= 0) { elem.html(link);
                                clearInterval(inst); } } } } else if (data.status == "19") {
                    $("input[name='request_id']").val(data.request_id);
                    $('.switch-popup-content p.error_msg').text($.mage.__(data.error_text));
                    $('.switch-popup-content p.error_msg').append('<span id="error_counter"> 5 min.</span>');
                    $('.switch-popup-content p.error_msg').show();
                    var link = '<a href="javascript:void(0)" id="reverifyNumber" class="edit-link">' + data.resend_code_text + '</a>';
                    var counter = 300;
                    var elem = $('#resend-link');
                    var error_element = $('#error_counter');
                    elem.text('');
                    var inst = setInterval(changereverifyNumberAgain, 1000);

                    function changereverifyNumberAgain() {
                        if (error_element.length > 0) {
                            var m = parseInt(counter / 60);
                            var s = checkSecond(((counter % 60) - 1));
                            if (s == 59) { m = m - 1 }
                            error_element.text(m + ":" + s);
                            counter--;
                            if (counter <= 0 && elem.length > 0) { elem.html(link);
                                clearInterval(inst);
                                $('.switch-popup-content p.error_msg').hide(); }
                        }
                    }
                } else { $('.switch-popup-content p.error_msg').text($.mage.__(data.error_text));
                    $('.switch-popup-content p.error_msg').show(); }
            },
            error: function(jqXHR, textStatus, errorThrown) { alert(errorThrown); }
        });
    });
    $('.rating-links-link').click(function(event) { event.preventDefault();
        $('html,body').animate({ scrollTop: $("#collateral-tabs").offset().top + 40 }, 'slow'); });
    $(document).on('click', '#edit-mobile', function() { $('#mobile').text($('#txtBoxValue').val());
        $('#txtBoxValue').hide();
        $(this).hide();
        $('#mobile').show();
        $('#mobile').focus();
        initializePhone('mobile', false, ''); });
    $(document).on('keyup', '#f1,#f2,#f3', function(e) { if ($(this).val().length == $(this).attr('maxlength')) { $(this).next(':input').focus().select(); } });
    $(document).on('keyup', '#f2,#f3,#f4', function(e) { if (e.keyCode == 8) { $(this).prev(':input').focus().select(); } });
    $(document).on('keypress', '.number-only', function(e) { if (e.which != 8 && e.which != 43 && e.which != 0 && (e.which < 48 || e.which > 57)) { return false; } });
    $(window).load(function() { $(window).scroll(function() { var sc = $(window).scrollTop(); if (sc > 500) { $(".headerbar-wrapper").addClass("show"); if ($('#loadHeaderPrice').hasClass('loadPrice') && $(window).width() > 768) { $('#loadHeaderPrice > .price-box').html($('.product-info-price .price-box').html()); } } else { $(".headerbar-wrapper").removeClass("show"); } }); if ($(window).width() <= 768) { var PriceHtml = $('.product-info-price').html(); var cartHtml = $('.headerbar-wrapper .right-div').clone(); var deliveryHtml = $('.expected-delivery').clone();
            $('.product-info-price .price-box').appendTo('#mobile-price .product-info-price-mobile');
            $('.product-options-wrapper').after('<div class="mobile-cart"><div class="header-bar"></div><div>');
            $('.mobile-cart .header-bar').html(cartHtml);
            $('.mobile-cart').after('<div class="mobile-cart-delivery-date"></div>');
            $('.mobile-cart-delivery-date').html(deliveryHtml); } });
});

function setCountry(countryCode) { uri = jQuery('#international-request-uri').val();
    url = jQuery('#base-request-uri').val();
    url += "international/index/index/force/1/country/" + countryCode + "/uri/" + uri + "/";
    window.location.href = url; }

function changeLanguage() { url = jQuery('#base-request-uri').val();
    uri = jQuery('#international-request-uri').val();
    storeCode = jQuery('#store-code').val();
    url += 'international/index/index/force/1/store/' + storeCode + '/uri/' + uri + '/';
    console.log("url:" + url);
    window.location.href = url; }

function ShowDialog(modal) { jQuery("#overlay").show();
    jQuery("#dialog").fadeIn(300); if (modal) { jQuery("#overlay").unbind("click"); } else { jQuery("#overlay").click(function(e) { HideDialog(); }); } }

function HideDialog() { jQuery("#overlay").hide();
    jQuery("#dialog").fadeOut(300); }

function ClickHideDialog() { var d = new Date();
    d.setTime(d.getTime() + (24 * 60 * 60 * 365 * 10 * 1000)); var expires = "expires=" + d.toGMTString(); var cookie_domain = jQuery('.cookie_domain').text(); var cookie_website_name = jQuery('.cookie_website_name').text(); var cookie_website_id = jQuery('.cookie_website_id').text(); var cookie_sotre_name = jQuery('.cookie_store_name').text(); var cookie_store_id = jQuery('.cookie_store_id').text(); var cookie_country_name = jQuery('.cookie_country_name').text(); var cookie_country_code = jQuery('.cookie_country_code').text();
    document.cookie = cookie_website_name + "=" + cookie_website_id + ";expires=" + expires + ";domain=." + cookie_domain + "; ?>;path=/";
    document.cookie = cookie_sotre_name + "=" + cookie_store_id + ";expires=" + expires + ";domain=." + cookie_domain + "; ?>;path=/";
    document.cookie = cookie_country_name + "=" + cookie_country_code + ";expires=" + expires + ";domain=." + cookie_domain + "; ?>;path=/";
    jQuery("#overlay").hide();
    jQuery("#dialog").fadeOut(300); }

function checkSecond(sec) {
    if (sec < 10 && sec >= 0) { sec = "0" + sec }
    if (sec < 0) { sec = "59" }
    return sec;
}

function skipNumberVerification(telephone) { var d = new Date();
    d.setTime(d.getTime() + (24 * 60 * 60 * 365 * 10)); var expires = "expires=" + d.toGMTString();
    document.cookie = "ignore_mobile=" + telephone + ";expires=" + expires + ";path=/"; }

function enableEditNumberBox() { jQuery('.check-otp-number').hide();
    jQuery('.change-number').hide();
    jQuery('.change-mobile-number').show(); }

function initializePhone(telephone, default_dialcode, country) { jQuery('.' + telephone).intlTelInput({ allowExtensions: true, nationalMode: false, autoHideDialCode: default_dialcode, initialCountry: country, numberType: "MOBILE", dropdownContainer: ".flag-container", onlyCountries: JSON.parse(country_options).onlyCountries, }); }