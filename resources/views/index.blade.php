@include('layouts.header')
@include('layouts.sidebar')


		<!-- //market-->
		<div class="market-updates">
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-2">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-usd"> </i>
					</div>
					 <div class="col-md-8 market-update-left">
					 <h4>BUY DOLLAR</h4>
				  </div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-usd"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>SELL DOLLAR</h4>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-4">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>EXCHANGE</h4>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>	
		<div class="row">
			<div class="table-agile-info">
			<div class="panel panel-default">
    <div class="panel-heading">
     Transaction History of Buying
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">SL</th>
            <th>Date</th>
            <th>Transection Type</th>
            <th data-breakpoints="xs">Buy Method</th>
            <th data-breakpoints="xs sm md" data-title="DOB">Receive Method</th>
            <th>Amonut</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
        @php
            $a=0;
        @endphp
		@if($buy_infoes!=null)
        @foreach($buy_infoes as $buy_info)
          <tr data-expanded="true">
            <td>{{ ++$a }}</td>
            <td>{{ $buy_info->created_at }}</td>
            <td>{{ $buy_info->trx_type }}</td>
            <td>{{ $buy_info->send_method }}</td>
            <td>{{ $buy_info->receive_method }}</td>
            <td>{{ $buy_info->receive_amount }}</td>
              <?php if($buy_info->status==0){ ?>
			  <td>Pending</td>
              <?php }else{?>
			  <td>Done</td>
              <?php }?>
          </tr>
        @endforeach
		@endif
        </tbody>
      </table>
		<div class="panel-heading">
			Transaction History of Selling
		</div>
		<table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
			<thead>
			<tr>
				<th data-breakpoints="xs">SL</th>
				<th>Date</th>
				<th>Transection Type</th>
				<th data-breakpoints="xs">Buy Method</th>
				<th data-breakpoints="xs sm md" data-title="DOB">Receive Method</th>
				<th>Amonut</th>
				<th>Status</th>
			</tr>
			</thead>
			<tbody>
			@php
				$a=0;
			@endphp
			@if($sell_infoes!=null)
				@foreach($sell_infoes as $sell_info)
					<tr data-expanded="true">
						<td>{{ ++$a }}</td>
						<td>{{ $sell_info->created_at }}</td>
						<td>{{ $sell_info->trx_type }}</td>
						<td>{{ $sell_info->send_method }}</td>
						<td>{{ $sell_info->receive_method }}</td>
						<td>{{ $sell_info->receive_amount }}</td>
                        <?php if($sell_info->status==0){ ?>
						<td>Pending</td>
                        <?php }else{?>
						<td>Done</td>
                        <?php }?>
					</tr>
				@endforeach
			@endif
			</tbody>
		</table>
    </div>
  </div></div>
		</div>

		<div class="row">
			<div class="table-agile-info">
			<div class="panel panel-default">
    <div class="panel-heading">
     Your Referral Link 
    </div>
    <div>
    	<table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead><center><a href="#">http://tdbsewallet.com/home/signup?user=hasib2486@gmail.com</a></center></thead>
      
  </table>
    </div>
  </div></div></div>
@include('layouts.footer')