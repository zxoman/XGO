<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>orders</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/css/animate.css">

    <link rel="stylesheet" type="text/css" href="/css/select2.min.css">

    <link rel="stylesheet" type="text/css" href="/css/perfect-scrollbar.css">

    <link rel="stylesheet" type="text/css" href="/css/util.css">

    <link rel="stylesheet" type="text/css" href="/css/main.css">

    <meta name="robots" content="noindex, follow">
</head>

<body>
    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100">
                    <table>
                        <thead>
                            <tr class="table100-head">
                                <th class="column1">Date</th>
                                <th class="column3">Name Prodact</th>
                                <th class="column4">Price</th>
                                <th class="column5">Name Client</th>
                                <th class="column6">Phone</th>
                                <th class="column6">Address</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td class="column1">{{  $order['date'] }}</td>
                                    <td class="column3">{{ $order['prodact']['name'] }}</td>
                                    <td class="column4">${{ $order['prodact']['price'] }}</td>
                                    <td class="column5">{{ $order['user']['name'] }}</td>
                                    <td class="column6">{{ $order['user']['phone'] }}</td>
                                    <td class="column7">{{ $order['user']['address'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script src="/js/select2.min.js"></script>

    <script src="/js/main.js"></script>


</body>

</html>
