@include('layouts.header')
@include('layouts.sidebar')
<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Buy Order
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <div class="alert alert-info" role="alert">
                                                    <strong> Tdbs</strong> এর সম্মানিত সদস্যগন <strong>Skrill / Neteller</strong> ক্রয় করার ক্ষেত্রে <strong>30 $ </strong>বা তার বেশি দ্রুত দেওয়া হয় । কিন্তু 30 $ এর নিচে ক্রয় করলে ট্রানজেকশন ফি<strong>1 $</strong>  কেটে রাখা হবে এবং <strong>11$</strong> এর নিচে কেও অডার করবেন না ।
                                                </div>



               {!! Form::open(['route' => 'buy.store']) !!}
                                    <input type="hidden" name="trx_type" value="buy" class="form-control"/>
                                    <input type="hidden" name="sender_name" value="{{ Auth::user()->name }}" class="form-control"/>

							          <div class="form-group">
										<label class="lbl"> Send Method</label>
										<select class="form-control market_place" name="send_method" required="required">
											<option value="">--Select Method--</option>
											<option value="Rocket">Rocket</option>
											<option  value="Bkash">Bkash</option>
											<option  value="Nexus">Nexus</option>
										
										</select>
									</div>
                                  <div class="form-group">
                                    <label for="usr">Receive Method</label>
                                    <select class="form-control recive_method" name="receive_method" required="required">
                                        <option value="">--Select Method--</option>
                                        <option value="Skill">Skill</option>
                                        <option value="Neteller">Neteller</option>

                                      </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="usr">Send Amount(৳)</label>
                                    <input type="number" readonly min="0" class="form-control" id="taka" value="0.00"  name="send_amount">
                                  </div>
                                  <div class="form-group">
                                    <label for="usr">Receive Amount($)</label>
                                    <input type="number" min="0" class="form-control" id="dollar" value="0" name="receive_amount">
                                  </div>
								  
								  <div class="form-group auction_date" style="display: none;">
										<label id="lebel1"><!-- Bkash Number* --></label>
										<div id="sandbox-container">
											<input type="text" name="send_method_number" value="" class="form-control"/>
										</div>
									</div>
									<div class="form-group auction_date" style="display: none;">
										<label class="lebel2"><!-- BKash TRX ID* --></label>
										<div id="sandbox-container">
											<input type="text" name="send_method_trx_id" value="" class="form-control"/>
										</div>
                                    </div>
                                    <div class="form-group skrill_email" style="display: none;">
                                        <label class="lbl-recv-name">Skrill Email </label>
                                        <div id="sandbox-container">
                                            <input type="text" name="receive_method_address" value="" class="form-control"/>
                                        </div>
                                    </div>
				                <div class="row agent-info-div" ng-hide="active">
                                    <div class="col-8 text-center" id="agents_info" style="display: none">
                                        <p>নিচের <span class="ng-binding-name">BKash</span> নাম্বারে টাকা পাঠানোর পর Submit Button-এ ক্লিক করুন ।<br>
                                            <b class="ng-binding">Cash Out From : </b>
                                            <b class="ng-binding-number"> 01785790915 </b>&nbsp; 
                                            <b ng-hide="active1" class="ng-binding">(Agent Number)</b>
                                        </p>
                                    </div>
                                </div>						
				                    

			</div>
								  
                                    <center><button type="submit" class="btn btn-primary">Submit</button></center>
                            {!! Form::close() !!}
                            </div>
                    </section>
                        </div>
                    </section>
                    </div></div></div>
<script type="text/javascript">
    //buy page form manepulution
    //send methods
        $('.market_place').change(function(){
            var type = $('.market_place').val();
            if(type == 'Bkash'){
                $('.auction_date').show();
                $('#lebel1').text("Bkash Number*");
                $('.lebel2').text("BKash TRX ID*");
                $('.ng-binding-number').text("01785790915");
                $('.ng-binding-name').text("BKash");
                $('#agents_info').show();
            }else if(type == 'Rocket'){
                $('.auction_date').show();
                $('#lebel1').text("Rocket Number*");
                $('.lebel2').text("Rocket TRX ID*");
                $('.ng-binding-number').text("01854652133");
                $('.ng-binding-name').text("Rocket");
                $('#agents_info').show();
            }else if(type == 'Nexus'){
                $('.auction_date').show();
                $('#lebel1').text("Nexus Card Number*");
                $('.lebel2').text("Nexus TRX ID*");
                $('#agents_info').hide();
            }else{
                $('.auction_date').hide();
                $('#agents_info').hide();

            }
        });
		
        //recived method
		
		 $('.recive_method').change(function(){
            var type = $('.recive_method').val();
            if(type == 'Skill'){
                $('.skrill_email').show();
                $('.lbl-recv-name').text("Skrill Email");
            }else if(type == 'Neteller'){
                $('.skrill_email').show();
                $('.lbl-recv-name').text("Neteller Email");
            }else{
                $('.skrill_email').hide();
            }
        });

		 //calculation of transection
        $( "#dollar" )
            .keyup(function() {
            var value = $( this ).val()*105;
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


