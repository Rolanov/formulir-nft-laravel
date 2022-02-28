<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Confirmation</title>
 
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
 
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h3 class="text-center">Upload an NFT</h3>
                            <br/>

                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
 
                            <br/>
                             <!-- form validasi -->
                            <form action="/proses" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" class="@error('name') is-invalid @enderror">
                                        @error('name')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="Tagline">Tagline</label>
                                        <input type="text" class="form-control" id="Tagline" name="Tagline" value="{{ old('Tagline') }}" class="@error('Tagline') is-invalid @enderror">
                                        @error('Tagline')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="Description">Description</label>
                                        <input type="text" class="form-control" id="Description" name="Description" value="{{ old('Description') }}" class="@error('Description') is-invalid @enderror">
                                        @error('Description')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="FloorPrice">Floor Price (in USD)</label>
                                        <input type="text" class="form-control" id="FloorPrice" name="FloorPrice" value="{{ old('FloorPrice') }}" class="@error('FloorPrice') is-invalid @enderror">
                                        @error('Floor Price')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Wallet Providers</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="MetaMask" id="MetaMask" name="wallet[]">
                                            <label class="form-check-label" for="MetaMask">
                                                MetaMask
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Coinbase" id="Coinbase" name="wallet[]">
                                            <label class="form-check-label" for="Coinbase">
                                                Coinbase Wallet
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="WalletConnect" id="WalletConnect" name="wallet[]">
                                            <label class="form-check-label" for="WalletConnect">
                                                WalletConnect
                                            </label>
                                        </div>
                                        @error('wallet[]')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="agreement" id="agreement" name="agreement">
                                            <label class="form-check-label" for="agreement">
                                                I have read and accepted the NFT license agreement
                                            </label>
                                        </div>
                                        @error('agreement')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
        
                                    <div class="form-group">
                                        <label for="nftfile">NFT File</label>
                                        <input type="file" class="form-control-file" id="nftfile" name="nftfile" value="{{ old('nftfile') }}">
                                    </div>
                                    @error('nftfile')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
</body>
</html>