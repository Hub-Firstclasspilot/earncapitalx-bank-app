        @if ($variables['show_invoice'] === false)
         <div class="card card-gradient mx-auto" style="min-width: 250px;">
                 <div class="card-body">

                     <div class="my-2 alert card-gradient col-12"> Current account balance is $ {{ $user->account->balance }}</div>

                    <div class="row">
                         <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
                            <div class="alert alert-primary" role="alert">
                                <strong>Starter Plan</strong>
                                <p>
                                    Minimum Deposit: $100
                                    <br>
                                    Maximum Deposit: $5,000
                                    <br>
                                    Duration: 3 days
                                    <br>
                                    Referral Percentage: 2%
                                    <br>
                                    Returns: 15%
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
                            <div class="alert alert-info" role="alert">
                                <strong>Premium Plan</strong>
                                <p>
                                    Minimum Deposit: $5,500
                                    <br>
                                    Maximum Deposit: $25,000
                                    <br>
                                    Duration: 7 days
                                    <br>
                                    Referral Percentage: 2%
                                    <br>
                                    Returns: 25%
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
                            <div class="alert alert-secondary" role="alert">
                                <strong>Gold Plan</strong>
                                <p>
                                    Minimum Deposit: $25,500
                                    <br>
                                    Maximum Deposit: $50,000
                                    <br>
                                    Duration: 28 days
                                    <br>
                                    Referral Percentage: 2%
                                    <br>
                                    Returns: 35%
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
                            <div class="alert alert-primary" role="alert">
                                <strong>Platinum Plan</strong>
                                <p>
                                    Minimum Deposit: $55,000
                                    <br>
                                    Maximum Deposit: Above $100k
                                    <br>
                                    Duration: 46 days
                                    <br>
                                    Referral Percentage: 2%
                                    <br>
                                    Returns: 45%
                                </p>
                            </div>
                        </div>
                    </div>

                     <form method="POST" action="{{ route('user.fund.store') }}">
                         @csrf

                          <input type="hidden" name="transaction_id" value="{{ uniqid('TRX-') }}">

                          <input type="hidden" name="show_options_page" value="show">

                         <div class="form-group row">
                             <div class="col-md-6 col-sm-12">
                                <label for="plans">Select a plan</label>
                                <select name="plan" id="plans" class="form-control input--yellow">
                                    <option value="Starter">Starter</option>
                                    <option vlaue="Premium">Premium</option>
                                    <option value="Gold">Gold</option>
                                    <option value="Platinum">Platinum</option>
                                </select>
                             </div>

                             <div class="col-md-6 col-sm-12">
                                 <label for="amount">Enter an amount</label>
                                 <input class="form-control input--yellow" name="amount" id="amount">
                             </div>
                         </div>

                         <div class="form-group">
                             <button type="submit" class="mb-1 btn btn--small btn--yellow">Fund Account</button>
                         </div>
                     </form>
                 </div>
         </div>
        @endif

         @if ($variables['show_invoice'] === true)

            <div class="m-2 card-regular gradient-7" style="border-left: 3px solid green; margin-bottom:1rem;">
                        <div class="card-body">

                        <div class="row">
                            <div class="col-6">

                                 <p style="font-size: 13px; color: #ddd">Amount: ${{ $variables['amount'] }}  <br>Charge: ${{ $variables['charge'] }} <br>Total: ${{ $variables['total'] }} </p>



                            </div>

                            <div class="col-6 d-flex justify-content-end">
                                <p>status: </p><br>
                                <div> <span class="badge badge-success"> Unpaid</span> </div>
                            </div>
                        </div>
                            @php
                            $admin = App\Models\Admin::find(1);
                            if ($variables["method"] == "bitcoin") {
                                $wallet = $admin->bitcoin_wallet_address;
                            }else {
                                $wallet = $admin->ethereum_wallet_address;
                            }
                            @endphp
                            <div class="row">
                                <h3 class="mt-3 text-center">Pay to the {{ $variables['method'] }} wallet Below!</h3>
                            <h5 class="mt-3" style="color: green; text-align: center;">{{ $wallet }}</h5>

                                <h4 class="mt-3 text-center">
                                    Or scan the QR code to pay
                                </h4>
                                
                                <hr>
                                
                                @if($variables['method'] === 'bitcoin')
                                <div class="mx-5 p-2 d-flex justfiy-content-center align-items-center mx-auto">
                                    <svg version="1.1" baseProfile="tiny" xmlns="http://www.w3.org/2000/svg" width="200" height="200">
                                        <rect shape-rendering="optimizeSpeed"  x="0" y="0" width="200" height="200" fill="white" />
                                        <rect shape-rendering="optimizeSpeed"  x="13" y="13" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="19" y="13" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="25" y="13" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="31" y="13" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="37" y="13" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="43" y="13" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="49" y="13" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="61" y="13" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="67" y="13" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="73" y="13" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="85" y="13" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="121" y="13" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="145" y="13" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="151" y="13" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="157" y="13" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="163" y="13" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="169" y="13" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="175" y="13" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="181" y="13" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="13" y="19" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="49" y="19" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="61" y="19" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="67" y="19" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="73" y="19" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="109" y="19" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="127" y="19" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="133" y="19" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="145" y="19" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="181" y="19" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="13" y="25" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="25" y="25" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="31" y="25" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="37" y="25" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="49" y="25" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="61" y="25" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="73" y="25" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="79" y="25" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="91" y="25" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="103" y="25" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="109" y="25" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="115" y="25" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="133" y="25" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="145" y="25" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="157" y="25" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="163" y="25" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="169" y="25" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="181" y="25" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="13" y="31" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="25" y="31" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="31" y="31" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="37" y="31" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="49" y="31" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="61" y="31" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="67" y="31" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="79" y="31" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="97" y="31" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="103" y="31" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="109" y="31" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="115" y="31" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="121" y="31" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="133" y="31" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="145" y="31" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="157" y="31" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="163" y="31" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="169" y="31" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="181" y="31" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="13" y="37" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="25" y="37" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="31" y="37" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="37" y="37" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="49" y="37" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="91" y="37" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="97" y="37" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="109" y="37" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="121" y="37" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="127" y="37" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="145" y="37" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="157" y="37" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="163" y="37" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="169" y="37" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="181" y="37" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="13" y="43" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="49" y="43" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="61" y="43" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="79" y="43" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="85" y="43" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="91" y="43" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="97" y="43" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="103" y="43" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="127" y="43" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="133" y="43" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="145" y="43" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="181" y="43" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="13" y="49" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="19" y="49" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="25" y="49" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="31" y="49" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="37" y="49" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="43" y="49" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="49" y="49" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="61" y="49" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="73" y="49" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="85" y="49" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="97" y="49" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="109" y="49" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="121" y="49" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="133" y="49" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="145" y="49" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="151" y="49" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="157" y="49" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="163" y="49" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="169" y="49" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="175" y="49" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="181" y="49" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="67" y="55" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="85" y="55" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="97" y="55" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="115" y="55" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="133" y="55" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="13" y="61" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="19" y="61" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="37" y="61" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="43" y="61" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="49" y="61" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="79" y="61" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="91" y="61" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="97" y="61" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="103" y="61" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="127" y="61" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="133" y="61" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="151" y="61" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="163" y="61" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="169" y="61" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="175" y="61" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="181" y="61" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="31" y="67" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="37" y="67" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="55" y="67" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="61" y="67" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="67" y="67" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="73" y="67" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="85" y="67" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="115" y="67" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="121" y="67" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="127" y="67" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="145" y="67" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="151" y="67" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="157" y="67" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="169" y="67" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="175" y="67" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="181" y="67" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="19" y="73" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="31" y="73" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="43" y="73" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="49" y="73" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="79" y="73" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="85" y="73" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="91" y="73" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="97" y="73" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="103" y="73" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="109" y="73" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="115" y="73" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="133" y="73" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="145" y="73" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="175" y="73" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="181" y="73" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="19" y="79" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="25" y="79" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="31" y="79" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="61" y="79" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="73" y="79" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="79" y="79" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="91" y="79" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="103" y="79" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="115" y="79" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="127" y="79" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="133" y="79" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="139" y="79" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="181" y="79" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="13" y="85" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="19" y="85" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="25" y="85" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="43" y="85" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="49" y="85" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="55" y="85" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="61" y="85" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="73" y="85" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="85" y="85" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="91" y="85" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="109" y="85" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="115" y="85" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="127" y="85" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="139" y="85" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="151" y="85" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="25" y="91" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="31" y="91" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="37" y="91" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="91" y="91" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="97" y="91" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="109" y="91" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="121" y="91" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="133" y="91" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="157" y="91" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="163" y="91" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="169" y="91" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="175" y="91" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="181" y="91" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="13" y="97" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="25" y="97" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="37" y="97" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="43" y="97" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="49" y="97" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="55" y="97" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="67" y="97" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="73" y="97" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="103" y="97" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="109" y="97" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="121" y="97" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="133" y="97" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="139" y="97" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="145" y="97" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="157" y="97" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="169" y="97" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="175" y="97" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="181" y="97" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="13" y="103" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="19" y="103" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="25" y="103" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="37" y="103" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="55" y="103" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="67" y="103" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="85" y="103" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="97" y="103" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="109" y="103" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="115" y="103" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="121" y="103" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="127" y="103" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="145" y="103" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="181" y="103" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="37" y="109" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="43" y="109" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="49" y="109" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="55" y="109" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="61" y="109" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="73" y="109" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="79" y="109" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="91" y="109" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="97" y="109" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="109" y="109" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="115" y="109" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="133" y="109" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="139" y="109" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="175" y="109" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="181" y="109" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="13" y="115" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="19" y="115" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="31" y="115" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="43" y="115" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="61" y="115" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="67" y="115" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="73" y="115" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="85" y="115" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="103" y="115" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="115" y="115" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="127" y="115" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="139" y="115" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="151" y="115" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="157" y="115" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="163" y="115" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="49" y="121" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="55" y="121" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="61" y="121" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="79" y="121" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="85" y="121" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="91" y="121" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="97" y="121" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="103" y="121" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="115" y="121" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="133" y="121" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="139" y="121" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="145" y="121" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="157" y="121" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="181" y="121" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="31" y="127" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="43" y="127" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="73" y="127" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="79" y="127" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="91" y="127" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="103" y="127" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="115" y="127" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="121" y="127" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="139" y="127" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="157" y="127" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="163" y="127" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="181" y="127" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="13" y="133" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="19" y="133" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="31" y="133" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="37" y="133" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="49" y="133" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="55" y="133" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="61" y="133" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="85" y="133" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="91" y="133" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="103" y="133" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="127" y="133" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="133" y="133" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="139" y="133" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="145" y="133" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="151" y="133" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="157" y="133" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="169" y="133" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="61" y="139" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="91" y="139" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="97" y="139" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="103" y="139" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="109" y="139" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="133" y="139" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="157" y="139" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="163" y="139" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="169" y="139" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="175" y="139" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="181" y="139" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="13" y="145" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="19" y="145" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="25" y="145" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="31" y="145" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="37" y="145" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="43" y="145" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="49" y="145" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="67" y="145" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="103" y="145" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="133" y="145" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="145" y="145" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="157" y="145" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="169" y="145" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="175" y="145" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="181" y="145" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="13" y="151" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="49" y="151" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="61" y="151" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="73" y="151" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="85" y="151" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="97" y="151" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="103" y="151" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="115" y="151" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="121" y="151" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="127" y="151" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="133" y="151" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="157" y="151" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="163" y="151" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="175" y="151" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="13" y="157" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="25" y="157" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="31" y="157" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="37" y="157" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="49" y="157" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="61" y="157" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="67" y="157" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="73" y="157" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="79" y="157" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="91" y="157" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="97" y="157" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="103" y="157" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="115" y="157" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="121" y="157" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="127" y="157" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="133" y="157" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="139" y="157" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="145" y="157" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="151" y="157" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="157" y="157" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="163" y="157" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="13" y="163" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="25" y="163" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="31" y="163" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="37" y="163" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="49" y="163" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="67" y="163" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="73" y="163" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="85" y="163" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="109" y="163" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="115" y="163" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="127" y="163" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="139" y="163" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="163" y="163" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="169" y="163" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="181" y="163" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="13" y="169" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="25" y="169" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="31" y="169" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="37" y="169" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="49" y="169" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="67" y="169" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="79" y="169" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="85" y="169" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="91" y="169" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="97" y="169" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="103" y="169" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="115" y="169" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="139" y="169" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="169" y="169" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="175" y="169" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="181" y="169" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="13" y="175" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="49" y="175" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="61" y="175" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="67" y="175" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="79" y="175" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="91" y="175" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="103" y="175" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="115" y="175" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="127" y="175" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="133" y="175" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="151" y="175" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="175" y="175" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="181" y="175" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="13" y="181" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="19" y="181" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="25" y="181" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="31" y="181" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="37" y="181" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="43" y="181" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="49" y="181" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="61" y="181" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="67" y="181" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="73" y="181" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="85" y="181" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="91" y="181" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="109" y="181" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="133" y="181" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="145" y="181" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="151" y="181" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="157" y="181" width="6" height="6" fill="black" />
                                        <rect shape-rendering="optimizeSpeed"  x="175" y="181" width="6" height="6" fill="black" />
                                    </svg>
                                </div>
                                <hr>
                                @endif
                                <p class="mt-3 text-center" style="font-size: 18px;">After payment, your account will be credited immediately. You can contact our support team with your Transaction ID below as reference if you are having issues.</p>


                                <div class="mt-5 border-top" style="">
                                    <p class="pt-2">Transaction ID: #{{ $variables['transaction_id'] }}</p>
                                </div>
                            </div>
                        </div>

            </div>
            <style>
                .tn {
                    text
                }
            </style>
         @endif
