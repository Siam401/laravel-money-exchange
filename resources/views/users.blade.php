@include('layouts.header')
@include('layouts.sidebar')


<!-- //market-->

<div class="row">
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div>
                <div class="panel-heading">
                    All Users Data
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $a=0;
                    @endphp
                        @foreach($users as $user)
                            <tr data-expanded="true">
                                <td>{{ ++$a }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <?php if($user->role==0){ ?>
                                <td>Customer</td>
                                <?php }else{?>
                                <td>Admin</td>
                                <?php }?>
                            </tr>
                        @endforeach
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