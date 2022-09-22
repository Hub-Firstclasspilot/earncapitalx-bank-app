<div>
    <div>
        <button type="button" class="mb-1 btn btn-rounded btn-danger" data-toggle="modal" data-target="#basicModal"><span class="btn-icon-left"><i class="fa fa-envelope color-danger"></i> </span>CoinPayment - BTC</button>
    </div>
    <div class="modal-dialog col-4" role="document">
                <div class="modal fade" id="basicModal">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Deposit via CoinPayment - BTC</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="">
                        <div class="modal-body">
                            <p style="font-size: 13px;">Deposit amount $(1 - 5000000) <br>
                            Charged $0.51 + 2.52%</p>

                            <div class="mb-3 input-group">
                                <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                <input type="text" name="amount" class="form-control" wire:model='amount' wire:keyup.debounce.500='handleAmount'>
                                <div class="input-group-append"><span class="input-group-text">.00</span></div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>


    <div class="m-2 card gradient-7 {{ $showInvoice }}" style="border-left: 3px solid green;">
        <div class="card-body">

        <div class="row">
            <div class="col-6">
                <h3 style="" class="text-danger">Payment Invoice</h3><br>
                <p style="font-size: 13px; color: #ddd">Amount: ${{ $amount }}  <br>Charge: ${{ $charge }} <br>Total: ${{ $amount + $charge }} </p>


            </div>

            <div class="col-6 d-flex justify-content-end">
                <p>status: </p><br>
                <div> <span class="badge badge-success"> Unpaid</span> </div>
            </div>
        </div>
        <br>
        <br>
            <h3 class="mt-3 text-center">Pay to the Bitcoin Address Below!</h3>
            <h2 class="mt-3 text-center" style="color: green;">1ye7nk2Fw9G5QQBgjSxEq9b95uDL7dJkD</h2>

                <p class="mt-3 text-center" style="font-size: 18px;">After payment, your account will be credited immediately. You can contact our support team with your Transaction ID below as reference if you are having issues.</p>

                <div class="mt-5 border-top" style="">
                    <p class="pt-2">Transaction ID: #{{ uniqid('TRX') }}</p>
                </div>
        </div>
    </div>

</div>
