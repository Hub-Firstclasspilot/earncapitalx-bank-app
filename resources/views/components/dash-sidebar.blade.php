
    <div class="nk-sidebar" style="background: #141519; color: #fff;">
        <div class="nk-nav-scroll" style="background: #141519; color: #fff;">
                <ul class="metismenu" id="menu"  style="background: #141519; color: #fff;">

                <li class="">
                        <a href="{{ route('user.dashboard') }}" >
                        <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                    </a>

                </li>

                <li>
                        <a class="" href="{{ route('user.profile') }}" aria-expanded="false">
                            <i class="fa fa-user " aria-hidden="true"></i><span class="nav-text">Profile</span>
                        </a>

                </li>
                    <li>
                    <a href="{{ route('user.fund') }}" class="" >
                        <i class="fa fa-credit-card" aria-hidden="true"></i><span class="nav-text">Fund Account</span>
                    </a>
                </li>

                <!--<li>-->
                <!--    <a href="{{ route('user.purchase') }}" class="" >-->
                <!--        <i class="fa fa-credit-card" aria-hidden="true"></i><span class="nav-text">Purchase Plan</span>-->
                <!--    </a>-->
                <!--</li>-->

                    <li>
                    <a href="{{ route('user.wallets') }}" class="" ><i class="fa fa-folder-open" aria-hidden="true"></i> <span class="nav-text"> Wallet Address</span> </a>
                </li>

                    <li>
                    <a href="{{ route('user.deposit.history') }}" class="" ><i class="fa fa-database" aria-hidden="true"></i> <span class="nav-text">Deposit History</span> </a>
                </li>

                    <li>
                    <a href="{{ route('user.earnings.history') }}" > <i class="fa fa-line-chart" aria-hidden="true"></i><span class="nav-text">Earning History</span>  </a>
                </li>

                    <li>
                    <a href="{{ route('user.withdrawal') }}" class="" aria-expanded="false"> <i class="fa fa-money" aria-hidden="true"></i> <span class="nav-text"> Withdraw Funds</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!--**********************************
        Sidebar end
    ***********************************-->
