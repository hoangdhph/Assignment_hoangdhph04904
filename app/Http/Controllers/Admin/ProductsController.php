<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Product;
use App\Gallery;

class ProductsController extends Controller
{
    public function getList(){
    	$product = Product::orderBy('id', 'desc')->paginate(10);
    	return view('admin.products.productslist', compact('product'));
    }

    public function getAdd(){
    	$cate = Category::all();
    	return view('admin.products.add', compact('cate'));
    }

    public function save(Request $rq){
    	if($rq->id){
    		$model = Product::find($rq->id);
    	}else{
    		$model = new Product;
    	}

        $files = $rq->file('images');
    	$model->product_name = $rq->product_name;
    	$model->cate_id = $rq->cate_id;
    	$model->price = $rq->price;
        $model->description = $rq->description;
    	$model->sale_price = $rq->sale_price;
    	$model->create_by = $rq->user()->id;

    	if($rq->hasFile('image')){
    		$file = $rq->file('image');
    		$fileExtension = $file->getClientOriginalExtension();
    		if(!in_array( $fileExtension, ['jpg','png','gif','jpeg'])){
                return redirect(route('addproduct'))->with('msg', 'Khong dung dinh dang anh');
            }
    		$fileName = $file->getClientOriginalName();
    		$image = time() . "_" . rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." . $fileName;
    		$file->move('upload/', $image);
    		$model->image_link = $image;
    	}else{
    		if(!$model->id) $model->image_link = "";
    	}

        $model->save();

        
        $text = $rq->input('images_text');
        $image_ids = $rq->image_ids;
        if ($files) {
            foreach ($files as $i => $img) { //;
           // $text[$i]
               $fileExtensionGalery = $img->getClientOriginalExtension();
               if(!in_array( $fileExtensionGalery, ['jpg','png','gif','jpeg'])){
                    return redirect(route('addproduct'))->with('msg', 'Khong dung dinh dang anh');
                }
                $fileNameGalery = $img->getClientOriginalName();
                $images = time() . "_" . rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." . $fileNameGalery;
                $img->move('upload/',$images);
                // new co image id thi tim trong gallery
                if(isset($image_ids[$i]) && $image_ids[$i] && $g = Gallery::find($image_ids[$i])){
                    $gModel = $g;
                }else{
                    // ko co thi tao moi roi gan parent id cai  $image_ids[$i] isset($image_ids[$i]) sao? 2 cai 
                    // n khac nhau nhu n
                    $gModel = new Gallery;
                    $gModel->parent_id = $model->id;
                }
                $gModel->image_link = $images;
                $gModel->image_text = $text[$i];
                $gModel->parent_id = $model->id;
                $gModel->save();
            }
        }
        
        // for ($i=0; $i < count($files); $i++){
        //     for ($k=0; $k < count($text); $k++) {           
        //         if($rq->hasFile("images.$i")){
        //             $file = $rq->file("images.$i");
        //             $text = $rq->input("text.$k");
                   
        //             $fileExtensionGalery = $file->getClientOriginalExtension();
        //             if(!in_array( $fileExtensionGalery, ['jpg','png','gif','jpeg'])){
        //                 return redirect(route('addproduct'))->with('msg', 'Khong dung dinh dang anh');
        //             }
        //             $fileNameGalery = $file->getClientOriginalName();
        //             $images = time() . "_" . rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." . $fileNameGalery;

        //              $file->move('upload/',$images);

        //              $Gallery = new Gallery;

        //              $Gallery->image_link = $images;
        //              $Gallery->image_text = $text;
        //              $Gallery->parent_id = $model->id;



        //              $Gallery->save();

        //         }
        //     }
        // }
        
    	
    	return redirect(route('productlist'))->with('success', 'ok');
    }

    public function getEdit($id){
        $product = Product::find($id);
        $cate = Category::all();
        $gallery = Gallery::where('parent_id', $id)->get();
    	return view('admin.products.edit', compact('product','cate','gallery')); 
    }

    public function getDelete($id){
        $product = Product::find($id);
        if($product){ 
            $product->delete();
        }else{
            dd('not-found'); 
        }
        return redirect(route('productlist'))->with('success', 'ok');
    }
}
