@extends('layouts.user')



@section('content')
    <div class="col-lg-12 mt-4">
                <div class="mx-0 row page-titles card-gradient">
                    <div class="col p-md-0">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}"><i class="fa fa-home"></i> Home</a></li>
                        </ol>
                    </div>
                </div>

            @if ($user->account->status != 'Active')
             <div class="mt-3 alert card-gradient alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <strong>
                  Welcome {{ $user->name }}
              </strong>
              <p>
                  Your account is currently inactive, meet the following requirements for your account to be acivated.
                  <ul>
                      @if(!$user->avatar)
                      <li>Upload your profile picture <a href="{{ route('user.profile') }}" class="btn btn--small btn--yellow" style="width: 100px;">Here</a></li>
                      @endif
                      @if($user->account->balance == 0)
                      <li>Make a deposit <a href="{{ route('user.fund') }}" class="btn btn--small btn--yellow" style="width: 100px;">Here</a></li>
                      @endif
                  </ul>
              </p>
            </div>

            <script>
              $(".alert").alert();
            </script>
            @endif

        </div>
            <div class="mt-3 container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card card-gradient">
                            <div class="card-body">
                                <h3 class="text-white card-title">Total Balance</h3>
                                <div class="d-inline-block">
                                    <h5 class="text-white">$ {{ number_format(max(intval($user->account->profit + $user->account->balance), 0)) ?? 0 }}</h5>

                                    <p class="mb-0 text-white">Total gain</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-line-chart"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card card-gradient">
                            <div class="card-body">
                                <h3 class="text-white card-title">Daily Profit</h3>
                                <div class="d-inline-block">
                                    <h5 class="text-white">$ {{ number_format(max(intval($user->account->profit), 0)) }}</h5>
                                    <p class="pb-4 mb-0 text-white"></p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card card-gradient">
                            <div class="card-body">
                                <h1 class="card-title">Plan: {{ $user->account->plan }}</h1>
                                <h5 class="text-white card-title">Percentage:  {{ $user->account->percentage }}%</h5>
                                <div class="d-inline-block">
                                    <p class="mb-0 text-white">Duration: {{ $user->account->duration }} days</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-database"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card card-gradient">
                            <div class="card-body">
                                <div class="d-inline-block">
                                    <h5 class="text-white card-title">Total Deposit</h5>
                                    <p class="text-white">${{ number_format($total) }}</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-flag-checkered"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="card card-gradient">
                                <div class="card-body">
                           <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank"><span class="blue-text"></span></a></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                            {
                            "width": "100%",
                            "height": "290",
                            "defaultColumn": "overview",
                            "screener_type": "crypto_mkt",
                            "displayCurrency": "USD",
                            "colorTheme": "dark",
                            "locale": "en"
                            }
                            </script>
                            </div>
                            <!-- TradingView Widget END -->
                            </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-widget card-gradient">
                                <div class="card-body">
                                    <h5 class="text-muted">Account Status</h5>
                                    <span class="label label-success">{{ $user->account->status }}</span>
                                    <h5 class="mt-2"></h5>
                                    <div class="mt-2">
                                        <h4>Joined</h4>
                                        <h6 class="m-t-10 text-muted">{{ date('jS M Y', strtotime($user->created_at)) }}</h6>
                                        <div class="mb-3 progress" style="height: 7px">
                                            <div class="progress-bar bg-success" style="width: 90%;" role="progressbar"><span class="sr-only">50% Order</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="text-center card card-gradient">
                                    <div class="card-body">
                                        <h5 class="card-title">Referral Link</h5>
                                        <p class="card-text">
                                        Automatically top up your account balance by sharing your referral link, Earn a percentage of whatever plan your reffered user buys.
                                        URL: <br><span style="light-grey">{{ env('APP_URL').'/'.$user->referral_link }}</span></p>
                                    </div>
                                    <div class="card-footer text-muted">

                                    </div>
                                </div>
                        </div>
                    </div>
                <div class="row">

                    <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6">

                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div id="tradingview_55b01"></div>
                            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/AAPL/" rel="noopener" target="_blank"><span class="blue-text">Apple</span></a>, <a href="https://www.tradingview.com/symbols/GOOGL/" rel="noopener" target="_blank"><span class="blue-text">Google</span></a> <span class="blue-text">and</span> <a href="https://www.tradingview.com/symbols/MSFT/" rel="noopener" target="_blank"><span class="blue-text">Microsoft Quotes</span></a> by TradingView</div>
                            <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                            <script type="text/javascript">
                            new TradingView.MediumWidget(
                            {
                            "symbols": [
                                [
                                "Apple",
                                "AAPL"
                                ],
                                [
                                "Google",
                                "GOOGL"
                                ],
                                [
                                "Microsoft",
                                "MSFT"
                                ]
                            ],
                            "chartOnly": false,
                            "width": "100%",
                            "height": "300",
                            "locale": "en",
                            "colorTheme": "dark",
                            "gridLineColor": "#2a2e39",
                            "trendLineColor": "rgba(0, 0, 255, 1)",
                            "fontColor": "#787b86",
                            "underLineColor": "rgba(0, 0, 255, 0.15)",
                            "isTransparent": false,
                            "autosize": true,
                            "container_id": "tradingview_55b01"
                            }
                            );
                            </script>
                        </div>
                        <!-- TradingView Widget END -->

                       <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/FX-EURUSD/" rel="noopener" target="_blank"><span class="blue-text">EURUSD Rates</span></a> by TradingView</div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                            {
                            "symbol": "FX:EURUSD",
                            "width": "100%",
                            "colorTheme": "light",
                            "isTransparent": false,
                            "locale": "en"
                            }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>

                    <div class="col-xl-4 col-lg-6 col-sm-6 col-xxl-6">
                                                    <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/stocks-usa/" rel="noopener" target="_blank"><span class="blue-text">Stock Market Today</span></a> by TradingView</div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js" async>
                            {
                            "colorTheme": "dark",
                            "dateRange": "12M",
                            "exchange": "US",
                            "showChart": true,
                            "locale": "en",
                            "largeChartUrl": "",
                            "isTransparent": false,
                            "showSymbolLogo": false,
                            "showFloatingTooltip": false,
                            "width": "400",
                            "height": "600",
                            "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                            "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                            "gridLineColor": "rgba(42, 46, 57, 0)",
                            "scaleFontColor": "rgba(120, 123, 134, 1)",
                            "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                            "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                            "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                            "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                            "symbolActiveColor": "rgba(41, 98, 255, 0.12)"
                            }
                            </script>
                            </div>
                            <!-- TradingView Widget END -->
                    </div>


                </div>

                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-sm-6 col-xxl-6">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/NASDAQ-AAPL/technicals/" rel="noopener" target="_blank"><span class="blue-text">Technical Analysis for AAPL</span></a> by TradingView</div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
                            {
                            "interval": "1m",
                            "width": 425,
                            "isTransparent": false,
                            "height": 450,
                            "symbol": "NASDAQ:AAPL",
                            "showIntervalTabs": true,
                            "locale": "en",
                            "colorTheme": "dark"
                            }
                            </script>
                            </div>
                            <!-- TradingView Widget END -->
                        </div>

                        <div class="col-xl-4 col-lg-6 col-sm-6 col-xxl-6">
                            <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank"><span class="blue-text">Cryptocurrency Markets</span></a> by TradingView</div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                                {
                                "width": "100%",
                                "height": "100%",
                                "defaultColumn": "overview",
                                "screener_type": "crypto_mkt",
                                "displayCurrency": "USD",
                                "colorTheme": "dark",
                                "locale": "en"
                                }
                                </script>
                                </div>
                                <!-- TradingView Widget END -->
                        </div>
                </div>



        </div>
<!-- #/ container -->
@endsection
