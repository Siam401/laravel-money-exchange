@include('layouts.header')
@include('layouts.sidebar')
<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Sell Order
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                            	<div class="alert alert-danger" role="alert">
                                                   TDBS এর সম্মানিত সদস্যগণ SKrill / Neteller বিক্রয় করার ক্ষেত্রে মেইল না থাকলে  01767227271 এই নাম্বারে কল দিন । আমরা আপনার Skrill / Neteller উচ্চ মুল্যে ক্রয় করব।
                                </div>
                                <div class="alert alert-info" role="alert">
                                                    Coinbase BTC SELL করার ক্ষেত্রে এই মেইলে পাঠাতে পারবেন   <a href="#">tdbsewallet44@gmail.com </a>  এবং address এ sell  করার ক্ষেত্রে pending active হওয়ার পর প্রেমেন্ট দেওয়া হয় । BTC Sell করার ক্ষেত্রে নোট অফশনে আপনার বিকাশ / রকেট নাম্বার অবশ্যই দেবেন।
                                                </div>


         {!! Form::open(['route' => 'sell.store']) !!}
                                <input type="hidden" name="trx_type" value="sell" class="form-control"/>
                                <input type="hidden" name="sender_name" value="{{ Auth::user()->name }}" class="form-control"/>
                                    <div class="form-group">
                                        <label for="usr">Receive Method</label>
                                        <select class="form-control receive_method" name="receive_method" required="required">
                                            <option value="">--Select Method--</option>
                                            <option value="Rocket">Rocket</option>
                                            <option  value="Bkash">Bkash</option>
                                            <option  value="Nexus">Nexus</option>
                                        </select>
                                    </div>
                  <div class="form-group">
                    <label class="lbl"> Send Method</label>
                    <select class="form-control send_method" name="send_method" required="required">

                        <option value="">--Select Method--</option>
                        <option value="Skill">Skill</option>
                        <option value="Neteller">Neteller</option>
                    </select>
                  </div>
                                    <div class="form-group">
                                        <label for="usr">Send Amount($)</label>
                                        <input type="number" min="10" class="form-control" id="dollar" value="0"  name="send_amount">
                                    </div>
                                    <div class="form-group">
                                        <label for="usr">Receive Amount(৳)</label>
                                        <input type="number" min="0" readonly class="form-control" id="taka" value="0" name="receive_amount">
                                    </div>

                                    <div class="form-group auction_date" style="display: none;">
                                        <label id="lebel1"><!-- Bkash Number* --></label>
                                        <div id="sandbox-container">
                                            <input type="text" name="receive_method_number" value="" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="form-group skrill_email" style="display: none;">
                                        <label class="lbl-recv-name">Skrill Email </label>
                                        <div id="sandbox-container">
                                            <input type="email" name="send_method_address" value="" class="form-control"/>
                                        </div>
                        <div class="row agent-info-div" ng-hide="active">
                                    <div class="col-8 text-center" id="agents_info" style="display: none">
                                        <p>নিচের ইমেইল - তে ডলার পাঠানোর পর সাবমিট বাটনে ক্লিক করুন। <br>
                                            <b class="ng-binding">Send To : </b>
                                            <b class="ng-binding-number"> 01785790915 </b>&nbsp; 
                                            <b ng-hide="active1" class="ng-binding">(Account)</b>
                                        </p>
                                    </div>
                                </div>
                                    </div>
                                    <center><button type="submit" class="btn btn-primary">Submit</button></center>
                                {!! Form::close() !!}
                            </div>

                        </div>
                    </section>
</div></div></div>
<script type="text/javascript">
    //buy page form manepulution
    //send methods
        $('.receive_method').change(function(){
            var type = $('.receive_method').val();
            if(type == 'Bkash'){
                $('.auction_date').show();
                $('#lebel1').text("Bkash Number*");
                $('.ng-binding-name').text("BKash");

            }else if(type == 'Rocket'){
                $('.auction_date').show();
                $('#lebel1').text("Rocket Number*");

                $('.ng-binding-name').text("Rocket");
            }else if(type == 'Nexus'){
                $('.auction_date').show();
                $('#lebel1').text("Nexus Card Number*");
            }else{
                $('.auction_date').hide();


            }
        });
    
        //recived method
    
     $('.send_method').change(function(){
            var type = $('.send_method').val();
            if(type == 'Skill'){
                $('.skrill_email').show();
                $('.lbl-recv-name').text("Skrill Email");
                $('.ng-binding-number').text("Skill@gmail.com");
                $('#agents_info').show();
            }else if(type == 'Neteller'){
                $('.skrill_email').show();
                $('.lbl-recv-name').text("Neteller Email");
                $('.ng-binding-number').text("Neteller@gmail.com");
                $('#agents_info').show();
            }else{
                $('.skrill_email').hide();
                $('#agents_info').hide();
            }
        });
    //calculation of transection
    $( "#dollar" )
        .keyup(function() {
            var value = $( this ).val()*90;
            $( "#taka" ).val( value );
        })
        .keyup();
    
        $('.market_place').change(function(){
            var type = $('.market_place').val();
            if(type == 'exchange_market'){
                $('.exchange_info').show();
            }else{
                $('.exchange_info').hide();
            }
        });
    
    
     $('.mySelect1').change(function(){
            var type = $('.mySelect1').val();
            if(type == 'rocket'){
                $('.rocket_info').show();
            }else{
                $('.rocket_info').hide();
            }
        });
    

</script>
@include('layouts.footer')