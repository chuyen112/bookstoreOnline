<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class QuanLyController extends Controller
{
   
   //nha xuat ban 
   //hien ds nxb
    public function quanlynhaxuatban(){
        
        $quanly_nxb = DB::table('tbl_category_product')->get();
        $manager_nxb = view('admin.quanlynhaxuatban')->with('quanly_nxb', $quanly_nxb);
        return view('adminlayout')->with('admin.quanlynhaxuatban', $manager_nxb);
    }
    //them nxb
    public function themnxb(){
        
        return view('admin.themnxb');
    }
    //save nxb vua them
    public function save_themnxb(Request $request){
       
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;
        DB::table('tbl_category_product')->insert($data);
        Session::put('message','Thêm Nhà xuất bản thành công');
        return Redirect::to('themnxb');
    }
    //sua nxb
    public function suanxb($category_product_id){
       
        $sua_nxb = DB::table('tbl_category_product')->where('category_id', $category_product_id)->get();
        $manager_nxb = view('admin.suanxb')->with('sua_nxb', $sua_nxb);
        return view('adminlayout')->with('admin.suanxb', $manager_nxb);
    }
    //update nxb 
    public function update_nxb(Request $request,$category_product_id){
        
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;
        DB::table('tbl_category_product')->where('category_id',$category_product_id)->update($data);
        Session::put('message','Cập nhật Nhà xuất bản thành công');
        return Redirect::to('quanlynhaxuatban');   
    }
    //xoa nxb
    public function xoa_nxb($category_product_id){
        
        DB::table('tbl_category_product')->where('category_id',$category_product_id)->delete();
        Session::put('message','Xóa Nhà xuất bản thành công');
        return Redirect::to('quanlynhaxuatban');  
    }
//ket thuc admin page

//show danh mục nxb
    public function show_category_home($category_id){
        $quanly_nxb = DB::table('tbl_category_product')->orderBy('category_id','desc')->get();
        $category_by_id_km = DB::table('tbl_product')->where('khuyen_mai','1')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->where('tbl_product.category_id',$category_id)->get();
        $category_by_id = DB::table('tbl_product')->where('khuyen_mai','0')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->where('tbl_product.category_id',$category_id)->get();

        return view('user.show_category')->with('quanly_nxb', $quanly_nxb)->with('category_by_id_km',$category_by_id_km)->with('category_by_id',$category_by_id);
    }
  

}
