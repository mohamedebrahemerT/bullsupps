     <!-- Home Popup Section -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Select Delivery Address</h5>
                    <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                        <div class="ms-3">
                            <span class="text_dark"><b>Ship To:</b></span>
                        </div>
                        <div class="lng_dropdown">
                            <select name="countries" class="custome_select">
                            <option value='UAE' data-image="assets/images/UAE.svg" data-title="English"> <a href="{{url('/')}}/#" alt="UAE-country"><span>UAE</span></a></option>
                            <option value='KSA' data-image="assets/images/KSA.svg" data-title="France"> <a href="{{url('/')}}/#" alt="KSA-country"><span>KSA</span></a></option>
                        </select>
                        </div>
                    </div>
                </div>
                <div class="modal-body bg_light_gray">
                    <div class="container-fluid">
                        <form class="form cf">
                            <section class="plan cf">

                                <input type="radio" name="radio1" id="free" value="free" checked>
                                <label class="free-label four mb-2" for="free">
                                    <div class="col-12">
                                    <div class="border border-radius2 box_shadow1 p-3 p-md-4" style="background-color:#ffffff">
                                        <div class="contact_text">
                                            <row>
                                                <div class="d-flex bd-highlight">
                                                    <div class="p-2 flex-grow-1 bd-highlight">
                                                        <div class="bardhe">
                                                            <div class="kolonat-hom align-content-center">
                                                                <div class="ikonat-home"> <i class="linearicons-map"></i> </div>
                                                                <div class="contact_text">
                                                                    <span>Home</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-2 bd-highlight">
                                                        <a class="alink" href="{{url('/')}}/#" Alt="Edit"><span><i class="linearicons-pencil5 text_green pe-2"></i>Edit</span></a>
                                                    </div>
                                                    <div class="p-2 bd-highlight">
                                                        <div class="defultaddress">Default</div>
                                                        <!-- <a class="alink" href="{{url('/')}}/#" Alt="Delete"><span><i class="linearicons-trash2 text_default pe-2"></i>Delete</span></a> -->
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="table-responsive">
                                                        <table class="table mb-0">
                                                            <tbody class="">
                                                                <tr class="noborderall">
                                                                    <td class="cart_total_label noborderall text_gray">Name:</td>
                                                                    <td class="cart_total_amount  noborderall">Ahmed Abo Ibrahim</td>
                                                                </tr>
                                                                <tr class="noborderall">
                                                                    <td class="cart_total_label noborderall text_gray">Address:</td>
                                                                    <td class="cart_total_amount  noborderall">2500, Escape Tower - 57R6+QR - Dubai, United Arab Emirates</td>
                                                                </tr>
                                                                <tr class="noborderall">
                                                                    <td class="cart_total_label noborderall text_gray">Mobile Number:</td>
                                                                    <td class="cart_total_amount  noborderall">+971-50-10101010</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </row>
                                        </div>
                                    </div>
        
                                </div>
                            </label>
                                <input type="radio" name="radio1" id="basic" value="basic">
                                <label class="basic-label four mb-2" for="basic">
                                    <div class="col-12 ">
                                    <div class="border border-radius2 box_shadow1 p-3 p-md-4" style="background-color:#ffffff">
                                        <div class="contact_text">
                                            <row>
                                                <div class="d-flex bd-highlight">
                                                    <div class="p-2 flex-grow-1 bd-highlight">
                                                        <div class="bardhe">
                                                            <div class="kolonat-hom align-content-center">
                                                                <div class="ikonat-home"> <i class="linearicons-map"></i> </div>
                                                                <div class="contact_text">
                                                                    <span>Home</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-2 bd-highlight">
                                                        <a class="alink" href="{{url('/')}}/#" Alt="Edit"><span><i class="linearicons-pencil5 text_green pe-2"></i>Edit</span></a>
                                                    </div>
                                                    <div class="p-2 bd-highlight">
                                                        <a class="alink" href="{{url('/')}}/#" Alt="Delete"><span><i class="linearicons-trash2 text_default pe-2"></i>Delete</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="table-responsive">
                                                        <table class="table mb-0">
                                                            <tbody class="">
                                                                <tr class="noborderall">
                                                                    <td class="cart_total_label noborderall text_gray">Name:</td>
                                                                    <td class="cart_total_amount  noborderall">Ahmed Abo Ibrahim</td>
                                                                </tr>
                                                                <tr class="noborderall">
                                                                    <td class="cart_total_label noborderall text_gray">Address:</td>
                                                                    <td class="cart_total_amount  noborderall">2500, Escape Tower - 57R6+QR - Dubai, United Arab Emirates</td>
                                                                </tr>
                                                                <tr class="noborderall">
                                                                    <td class="cart_total_label noborderall text_gray">Mobile Number:</td>
                                                                    <td class="cart_total_amount  noborderall">+971-50-10101010</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </row>
                                        </div>
                                    </div>
        
                                </div>
                            </label>
                                <input type="radio" name="radio1" id="premium" value="premium">
                                <label class="premium-label four mb-2" for="premium"> 
                                    <div class="col-12 ">
                                    <div class="border border-radius2 box_shadow1 p-3 p-md-4" style="background-color:#ffffff">
                                        <div class="contact_text">
                                            <row>
                                                <div class="d-flex bd-highlight">
                                                    <div class="p-2 flex-grow-1 bd-highlight">
                                                        <div class="bardhe">
                                                            <div class="kolonat-hom align-content-center">
                                                                <div class="ikonat-home"> <i class="linearicons-map"></i> </div>
                                                                <div class="contact_text">
                                                                    <span>Home</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-2 bd-highlight">
                                                        <a class="alink" href="{{url('/')}}/#" Alt="Edit"><span><i class="linearicons-pencil5 text_green pe-2"></i>Edit</span></a>
                                                    </div>
                                                    <div class="p-2 bd-highlight">
                                                        <a class="alink" href="{{url('/')}}/#" Alt="Delete"><span><i class="linearicons-trash2 text_default pe-2"></i>Delete</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="table-responsive">
                                                        <table class="table mb-0">
                                                            <tbody class="">
                                                                <tr class="noborderall">
                                                                    <td class="cart_total_label noborderall text_gray">Name:</td>
                                                                    <td class="cart_total_amount  noborderall">Ahmed Abo Ibrahim</td>
                                                                </tr>
                                                                <tr class="noborderall">
                                                                    <td class="cart_total_label noborderall text_gray">Address:</td>
                                                                    <td class="cart_total_amount  noborderall">2500, Escape Tower - 57R6+QR - Dubai, United Arab Emirates</td>
                                                                </tr>
                                                                <tr class="noborderall">
                                                                    <td class="cart_total_label noborderall text_gray">Mobile Number:</td>
                                                                    <td class="cart_total_amount  noborderall">+971-50-10101010</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </row>
                                        </div>
                                    </div>
        
                                </div>
                            </label>
                            </section>
                        </form>



                    </div>
                </div>
                <div class="modal-footer">
                    <div class="p-2 flex-grow-1 bd-highlight">
                        <a class="alink" href="{{url('/')}}/#" Alt="Edit"><span><i class="linearicons-plus pe-2"></i>Add New Address</span></a>
                    </div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Confirm</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Screen Load Popup Section -->


