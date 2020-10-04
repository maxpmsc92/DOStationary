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
    
    <form action="/do" id="doform" method="post">
     @csrf
       <table style="width:50%">
            <tr>
                <th style="text-align:left">Product</th>
                <th style="text-align:left">Quantity</th>
                <th style="text-align:left">Vendor</th>
            </tr>
            @for ($i =0; $i<=4; $i++)
            <tr>
                <td><select id="product{{ $i }}" name="product{{ $i }}">
                        <option value="sel">Select Product</option>
                        <option value="Pen">Pen</option>
                        <option value="Pencil">Pencil</option>
                        <option value="Storybook">Storybook</option>
                        <option value="Stapler">Stapler</option>
                        <option value="Eraser">Eraser</option>
                    </select>
                </td>
                <td><input type="number" id="quantity{{ $i }}" value="0" name="quantity{{ $i }}"></td>
                <td><select id="vendor{{ $i }}" name="vendor{{ $i }}">
                        <option value="sel">Select Vendor</option>
                        <option value="A">Vendor A</option>
                        <option value="B">Vendor B</option>
                        <option value="C">Vendor C</option>
                    </select>
                </td>
            </tr>
            @endfor
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit"></td>
            </tr>

        </table>
        </form>
       
    </body>
</html>
