<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                    <?php
                        if(Auth::user()->role==0){
                    ?>
                <li>
                    <a href="{{ route('resources.home') }}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('resources.buy') }}">
                        <i class="fa fa-money"></i>
                        <span>Buy </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('resources.sell') }}">
                        <i class="fa fa-money"></i>
                        <span>Sell </span>
                    </a>
                </li>
				 <li>
                    <a href="sell.php">
                        <i class="fa fa-money"></i>
                        <span>Fixed Dollar By Taka </span>
                    </a>
                </li>
				
				
				 <li>
                    <a href="sell.php">
                        <i class="fa fa-money"></i>
                        <span>Mail Manage </span>
                    </a>
                </li>

                        <?php }else{?>
                        <li>
                            <a href="{{ route('resources.trx') }}">
                                <i class="fa fa-money"></i>
                                <span>Transections</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('resources.users') }}">
                                <i class="fa fa-money"></i>
                                <span>Users</span>
                            </a>
                        </li>
                        <?php }?>

            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
    