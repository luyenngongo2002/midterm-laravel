<?php

namespace App\Http\Controllers;

use App\Models\T_restaurant;
use Illuminate\Http\Request;

class T_restaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = T_restaurant::get();
        return view('food_list', ['foods' => $foods]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $foods = T_restaurant::get();
        return view('food_create',['foods' => $foods]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { {
            $name = '';
            if ($request->hasFile('image')) {
                $this->validate($request, [
                    'image' => 'mimes:jpg,png,jpeg|max:2048',
                ], [
                    'image.mimes' => 'Chỉ chấp nhận files ảnh',
                    'image.max' => 'Chỉ chấp nhận files ảnh dưới 2Mb',

                ]);
                $file = $request->file(('image'));
                $name = time() . '_' . $file->getClientOriginalName();
                $destinationPath = public_path('images');
                $file->move($destinationPath, $name);
            }
            $this->validate($request, [
                'name' => 'required',
                'description' => 'required',
                'price' => 'required',
            ], [
                'name.required' => 'Bạn chưa nhập tên',
                'description.required' => 'Bạn chưa nhập mô tả',
                'price.required' => 'Bạn chưa nhập giá',
                
            ]);
            $food = new T_restaurant();
            $food->name = $request->name;
            $food->description = $request->description;
            $food->price = $request->price;
            $food->image = $name;
            $food->save();

            return redirect()->route('foods.index')->with('Success', 'Bạn đã cập nhật thành công');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $foods = T_restaurant::find($id);
        return view('show_detail', ['food' => $foods]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
