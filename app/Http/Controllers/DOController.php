<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use App\Models\Product;

use Illuminate\Http\Request;

class DOController extends Controller
{
    public function store()
    {
        $rules = array(
            'vendor_name' => 'required',
        );
        for($i=1; $i<=5; $i++)
        {          
            if(request('vendor' . $i) != "sel" && request('product' . $i) != "sel" && request('quantity' . $i)!="0" )
            {
                $vendor = Vendor::firstOrNew(['vendor_name' => request('vendor' . $i)]);
                $vendor->vendor_name = request('vendor' . $i);
                $product = new Product;
                $product->product_name = request('product' . $i);
                $product->quantity = request('quantity' . $i);
                $product->vendor_id = $vendor->vendor_name;
                $vendor->save();
                $product->save();
            }
        }
        return redirect('viewdo');
    }
}
