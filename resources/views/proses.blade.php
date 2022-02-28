<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validation</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3>NFT Confirmation</h3>
                        <h3 class="my-4">Preview : </h3>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:150px">Name</td>
                                <td>{{ $data->name }} #{{ $data->Tagline }}</td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>{{ $data->Description }}</td>
                            </tr>
                            <tr>
                                <td>Floor Price in USD</td>
                                <td>{{ $data->FloorPrice }} USD</td>
                            </tr>
                            <tr>
                                <img class="object-fill h-48 w-96" width="200px" src="{{ $data->nftfile }}" alt="nftfile"  />
                            </tr>
                            
                        </table>

                        <a href="/input" class="btn btn-primary">Return</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html> 