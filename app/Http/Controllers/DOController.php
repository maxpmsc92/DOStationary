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
        $products[] = new Product;
        $sum=0;
        $push = true;
        for($i=0; $i<=4; $i++)
        {          
            if(request('vendor' . $i) != "sel" && request('product' . $i) != "sel" && request('quantity' . $i) > 0)
            {
                $vendor = Vendor::firstOrNew(['vendor_name' => request('vendor' . $i)]);
                $vendor->vendor_name = request('vendor' . $i);
                $vendor->save();
                $prod = new Product;
                $prod->product_name = request('product' . $i);
                $prod->quantity = request('quantity' . $i);
                $prod->vendor_id = $vendor->vendor_name;
                foreach($products as &$product)
                {
                    if($prod->product_name == $product->product_name && $prod->vendor_id == $product->vendor_id)
                    {
                        $prod->quantity = $product->quantity + $prod->quantity;
                        $product = $prod;
                        $push = false;
                        break;
                    }
                    else 
                    {
                        $push = true;
                    }
                  
                    
                }
                if ($push == true)
                {
                array_push($products, $prod);
                }
            }
        }
        
      foreach($products as &$product)
        {
            if($product->product_name != NULL)
            {
                $product->save();
            }
        }
        return redirect('viewdo');
    }
     

}