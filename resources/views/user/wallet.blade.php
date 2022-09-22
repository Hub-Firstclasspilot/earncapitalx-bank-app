@extends('layouts.user')

@section('content')

      <div class="col-lg-12">

                <div class="mx-0 row page-titles card-gradient" style="margin-top: 20px;">
                    <div class="col p-md-0">
                        <span class="text-center" style="color: #000">
                        <h2>Wallet</h2>
                    </span>
                    </div>
                </div>


        </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card gradient-10" style="margin-top: 10px;">
                            <div class="card-body">
                                <h4 class="card-title">Cryptocurrency wallet address</h4>
                              @if (Session::has('message'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                  <strong>
                                      {{ Session::get('message') }}
                                  </strong>
                                </div>

                                <script>
                                  $(".alert").alert();
                                </script>
                              @endif
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped verticle-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">S/N</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Wallet Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                   Bitcoin
                                                </td>

                                                <td>
                                                     <form action="{{ route('user.wallet.bitcoin', $user->id) }}" method="POST">
                                                        @csrf
                                                            <div class="input-group">
                                                                <input type="text" name="address" value="{{ $user->account->bitcoin }}" class="form-control form-control-sm input--yellow">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn--small btn--yellow btn--height" type="submit" name="bitcoin">update</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                </td>
                                            </tr>
                                             <tr>
                                                <td>2</td>
                                                <td>
                                                   Litecoin
                                                </td>
                                                       <td>
                                                        <form action="{{ route('user.wallet.litecoin', $user->id) }}" method="POST">
                                                            @csrf
                                                            <div class="input-group">
                                                                <input type="text" name="address" value="{{ $user->account->litecoin }}" class="form-control form-control-sm input--yellow">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn--small btn--yellow btn--height" type="submit" name="bitcoin">update</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                       </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                   Bitcoin Cash
                                                </td>
                                                      <td>
                                                         <form action="{{ route('user.wallet.bitcoin-cash', $user->id) }}" method="POST">
                                                             @csrf
                                                            <div class="input-group">
                                                                <input type="text" name="address" value="{{ $user->account->bitcoin_cash }}" class="form-control form-control-sm input--yellow">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn--small btn--yellow btn--height" type="submit" name="bitcoin">update</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                      </td>
                                            </tr>
                                             <tr>
                                                <td>4</td>
                                                <td>
                                                   Ethereum
                                                </td>
                                                     <td>
                                                         <form action="{{ route('user.wallet.ethereum', $user->id) }}" method="POST">
                                                            @csrf
                                                            <div class="input-group">
                                                                <input type="text" name="address" value="{{ $user->account->ethereum }}" class="form-control form-control-sm input--yellow">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn--small btn--yellow btn--height" type="submit" name="bitcoin">update</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                     </td>


                                            </tr>

                                            <tr>
                                                <td>5</td>
                                                <td>
                                                   Stellar
                                                </td>
                                                <td>
                                                     <form action="{{ route('user.wallet.stellar', $user->id) }}" method="POST">
                                                         @csrf
                                                            <div class="input-group">
                                                                <input type="text" name="address" value="{{ $user->account->stellar }}" class="form-control form-control-sm input--yellow">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn--small btn--yellow btn--height" type="submit" name="bitcoin">update</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                </td>


                                            </tr>
                                             <tr>
                                                <td>6</td>
                                                <td>
                                                   Dash
                                                </td>
                                                      <td>
                                                         <form action="{{ route('user.wallet.dash', $user->id) }}" method="POST">
                                                            @csrf
                                                            <div class="input-group">
                                                                <input type="text" name="address" value="{{ $user->account->dash }}" class="form-control form-control-sm input--yellow">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn--small btn--yellow btn--height" type="submit" name="bitcoin">update</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                      </td>

                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
