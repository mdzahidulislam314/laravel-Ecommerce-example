<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Str;
use Session;

class OrdersController extends Controller
{

    public function index()
    {
        $orders = Order::all();
        return view('admin.orders.index')->with('orders', $orders);
    }

    public function show($id)
    {
        $order = Order::find($id);

        return view('admin.orders.show')->with('order', $order);
    }

    
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'slug' => 'required',
        ]);

        Category::create([
            
            'name' => $request->name,
            'slug' => $request->slug,
        ]);

        Session::flash('success', 'Category created successfully');

        return redirect()->back();
    }


    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit',compact('category'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'slug' => 'required',
        ]);

        $category = Category::find($id);

        $category->name = $request->name;
        $category->slug = $request->slug;

        $category->save();

        Session::flash('success', 'Category updated successfully');

        return redirect()->back();
    }


    public function OrderStatus(Request $request, $id)
    {

        $order = Order::findOrfail($id);

        if ($request->status == 1){
            $order->order_status = 1;
        }
        if ($request->status == 2){
            $order->order_status = 2;
        }
        if ($request->status == 3){
            $order->order_status = 3;
        }
        if ($request->status == 4){
            $order->order_status = 4;
        }

        $order->save();

        Session::flash('success', 'Order Status Change successfully');
        return redirect()->back();

    }

    public function PaymentStatus(Request $request, $id)
    {

        $order = Order::findOrfail($id);

        if ($request->payment == 1){
            $order->payment_status = 1;
        }
        if ($request->payment == 2){
            $order->payment_status = 2;
        }
        if ($request->payment == 3){
            $order->payment_status = 3;
        }

        $order->save();

        Session::flash('success', 'Payment Status Change successfully');
        return redirect()->back();

    }

    
    public function destroy($id)
    {
        $category = Category::find($id);

        $category->delete();

        Session::flash('success', 'Category deleted successfully');

        return redirect()->back();
    }

}

