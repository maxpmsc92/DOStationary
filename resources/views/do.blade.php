<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

</html>
    </head>
    <body class="antialiased">
    @foreach ($vendors as $vendor)
    <div style="width: 300px">
    <div style="outline-style: dotted">
        Delievery Order
        </br>
        </br>
        Vendor : {{ $vendor->vendor_name }}
        </br>
        </br>
        <table style="width:100%">
            <tr>
                <th style="text-align:left">Product</th>
                <th style="text-align:left">Quantity</th>
            </tr>
            @foreach ($products as $product)
            @if ($product->vendor_id == $vendor->vendor_name)

            <tr>
                <td>{{ $product->product_name}}</td>
                <td>{{ $product->quantity }}</td>
            </tr>
            @endif
            @endforeach
        </table>
        </br>
        </br>
        <span></span>
        </div>
        </div>
    <div style="height: 50px"></div>
    @endforeach
    <form action="/">
        <input type="submit" value="Back to Form">
    </form>
    </body>
</html>
