@extends('layouts.front')

@section('content')
    
<div class="main-content-wrapper medium-padding120">
	<section class="pt-mobile-80">
		<div class="container">
			<div class="row medium-padding80">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					
				</div>
			</div>
			<hr class="divider">
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row medium-padding80">
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mb30">
					<div class="tabs tabs--style3">
						<ul role="tablist">

							<li role="presentation" class="tab-control active">
								<a href="#tab-13" role="tab" data-toggle="tab" class="control-item">
									<h6 class="tab-title">Bitcoin <span>BTC</span></h6>
								</a>
							</li>

							<li role="presentation" class="tab-control">
								<a href="#tab-14" role="tab" data-toggle="tab" class="control-item">
									<h6 class="tab-title">Ethereum <span>ETH</span></h6>
								</a>
							</li>

							<li role="presentation" class="tab-control">
								<a href="#tab-15" role="tab" data-toggle="tab" class="control-item">
									<h6 class="tab-title">Dash <span>DASH</span></h6>
								</a>
							</li>

						</ul>

						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade active" id="tab-13">
								<h3 class="tab-content-title">Bitcoin <span>BTC</span></h3>

								<p>Launched in 2009, Bitcoin is the world's largest cryptocurrency by market cap. Unlike fiat currency, Bitcoin is created, distributed, traded, and stored with the use of a decentralized ledger system known as a blockchain.
								</p>

								<div class="currency-details currency-details--inline">
									<div class="currency-details-item">
										<h6 class="title">Market Cap:</h6>
										<h6 class="value">$91.926.166.165 USD</h6>
									</div>
									<div class="currency-details-item">
										<h6 class="title">Volume (24h):</h6>
										<h6 class="value">$2.323.180.000 USD</h6>
									</div>
									<div class="currency-details-item">
										<h6 class="title">Circulating Supply:</h6>
										<h6 class="value">97.730.789 ETH</h6>
									</div>
								</div>

								<div class="content-align-justify">
									<div class="value-growth h4">$940.70
										<div class="growth">+ 1.25%</div>
									</div>
									<a href="#" class="btn btn--large btn--green-light">
										Buy Now!
									</a>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tab-14">
								<h3 class="tab-content-title">Ethereum <span>ETH</span></h3>

								<p>Ethereum is the second largest cryptocurrency platform by market capitalization, behind Bitcoin. It is a decentralized open source blockchain featuring smart contract functionality. 
								</p>

								<div class="currency-details currency-details--inline">
									<div class="currency-details-item">
										<h6 class="title">Market Cap:</h6>
										<h6 class="value">$91.926.166.165 USD</h6>
									</div>
									<div class="currency-details-item">
										<h6 class="title">Volume (24h):</h6>
										<h6 class="value">$2.323.180.000 USD</h6>
									</div>
									<div class="currency-details-item">
										<h6 class="title">Circulating Supply:</h6>
										<h6 class="value">97.730.789 ETH</h6>
									</div>
								</div>

								<div class="content-align-justify">
									<div class="value-growth h4">$940.70
										<div class="growth">+ 1.25%</div>
									</div>
									<a href="#" class="btn btn--large btn--green-light">
										Buy Now!
									</a>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tab-15">
								<h3 class="tab-content-title">Dash <span>Dash</span></h3>

								<p>Litecoin is a peer-to-peer cryptocurrency and open-source software project released under the MIT/X11 license. Creation and transfer of coins is based on an open source cryptographic protocol and is not managed by any central authority.
								</p>

								<div class="currency-details currency-details--inline">
									<div class="currency-details-item">
										<h6 class="title">Market Cap:</h6>
										<h6 class="value">$91.926.166.165 USD</h6>
									</div>
									<div class="currency-details-item">
										<h6 class="title">Volume (24h):</h6>
										<h6 class="value">$2.323.180.000 USD</h6>
									</div>
									<div class="currency-details-item">
										<h6 class="title">Circulating Supply:</h6>
										<h6 class="value">97.730.789 ETH</h6>
									</div>
								</div>

								<div class="content-align-justify">
									<div class="value-growth h4">$940.70
										<div class="growth">+ 1.25%</div>
									</div>
									<a href="#" class="btn btn--large btn--green-light">
										Buy Now!
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mb30">
					<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">Market Data</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
  {
  "colorTheme": "dark",
  "dateRange": "12m",
  "showChart": true,
  "locale": "en",
  "width": "100%",
  "height": "600",
  "largeChartUrl": "",
  "isTransparent": false,
  "plotLineColorGrowing": "rgba(25, 118, 210, 1)",
  "plotLineColorFalling": "rgba(25, 118, 210, 1)",
  "gridLineColor": "rgba(42, 46, 57, 1)",
  "scaleFontColor": "rgba(120, 123, 134, 1)",
  "belowLineFillColorGrowing": "rgba(33, 150, 243, 0.12)",
  "belowLineFillColorFalling": "rgba(33, 150, 243, 0.12)",
  "symbolActiveColor": "rgba(33, 150, 243, 0.12)",
  "tabs": [
    {
      "title": "Indices",
      "symbols": [
        {
          "s": "FOREXCOM:SPXUSD",
          "d": "S&P 500"
        },
        {
          "s": "FOREXCOM:NSXUSD",
          "d": "Nasdaq 100"
        },
        {
          "s": "FOREXCOM:DJI",
          "d": "Dow 30"
        },
        {
          "s": "INDEX:NKY",
          "d": "Nikkei 225"
        },
        {
          "s": "INDEX:DEU30",
          "d": "DAX Index"
        },
        {
          "s": "FOREXCOM:UKXGBP",
          "d": "FTSE 100"
        }
      ],
      "originalTitle": "Indices"
    },
    {
      "title": "Commodities",
      "symbols": [
        {
          "s": "CME_MINI:ES1!",
          "d": "E-Mini S&P"
        },
        {
          "s": "CME:6E1!",
          "d": "Euro"
        },
        {
          "s": "COMEX:GC1!",
          "d": "Gold"
        },
        {
          "s": "NYMEX:CL1!",
          "d": "Crude Oil"
        },
        {
          "s": "NYMEX:NG1!",
          "d": "Natural Gas"
        },
        {
          "s": "CBOT:ZC1!",
          "d": "Corn"
        }
      ],
      "originalTitle": "Commodities"
    },
    {
      "title": "Bonds",
      "symbols": [
        {
          "s": "CME:GE1!",
          "d": "Eurodollar"
        },
        {
          "s": "CBOT:ZB1!",
          "d": "T-Bond"
        },
        {
          "s": "CBOT:UB1!",
          "d": "Ultra T-Bond"
        },
        {
          "s": "EUREX:FGBL1!",
          "d": "Euro Bund"
        },
        {
          "s": "EUREX:FBTP1!",
          "d": "Euro BTP"
        },
        {
          "s": "EUREX:FGBM1!",
          "d": "Euro BOBL"
        }
      ],
      "originalTitle": "Bonds"
    },
    {
      "title": "Forex",
      "symbols": [
        {
          "s": "FX:EURUSD"
        },
        {
          "s": "FX:GBPUSD"
        },
        {
          "s": "FX:USDJPY"
        },
        {
          "s": "FX:USDCHF"
        },
        {
          "s": "FX:AUDUSD"
        },
        {
          "s": "FX:USDCAD"
        }
      ],
      "originalTitle": "Forex"
    }
  ]
}
  </script>
</div>
<!-- TradingView Widget END -->
				</div>
			</div>
			<hr class="divider">
		</div>
	</section>

	

	

</div>
@endsection
