<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin - Earncapitalx</title>
  <meta charset="utf-8">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.png') }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  @livewireStyles
</head>
<body>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="text-success">Earndot <i class=" fa fa-bitcoin"></i></h1>
    <p>Manipulate your accounts here!</p>

    <a href="{{ route('admin.index') }}" class="btn btn-primary">All Users</a>

    <a href="{{ route('admin.logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> <button class="btn btn-warning">Logout</button></a>

    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modelId">
                      Add Bitcoin Wallet Address
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Bitcoin Wallet Address</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('admin.wallet') }}" id="wallet_address">
                                        @csrf
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="wallet_address">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" onclick="document.getElementById('wallet_address').submit()">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>

  </div>


</div>

    <div class="container">
        @yield('admin')
    </div>
    <script src="//code.tidio.co/lbjhyo4cve59urv8bdl9fk37wv0msn5n.js" async></script>
    @include('sweetalert::alert')
    @livewireScripts
</body>
</html>
