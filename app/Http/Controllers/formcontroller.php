<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

 
class FormController extends Controller
{
    public function input()
    {
        return view('input');
    }
 
    public function proses(Request $request)
    {
        $messagesError = [
            'required' => ':attribute must be filled!',
            'min' => ':attribute must be filled with the minimum of :min characters!',
            'max' => ':attribute must be filled with the maximum of :max characters!',
            'accepted' => 'You have to accept the license and agreement to continue!'
        ];
        
        $this->validate($request,[
           'name' => 'required|min:5|max:20',
           'Tagline' => 'required|numeric',
           'Description' => 'required|min:10',
           'FloorPrice' => 'required|numeric|min:2.50|max:99.9',
           'wallet' => 'required',
           'agreement' => 'required',
           'nftfile' => 'mimes:jpg,jpeg,png|max:2048'
        ]);
        $img_link = $this->saveImage( $request , 1);
        $request->nftfile = $img_link;
        return view('proses',['data' => $request]);
    }
    public function saveImage(Request $request, $id)
    {
        $img = $request->nftfile; 
        $img_name = ''; 
        if ($img !== NULL) {
            $img_name = 'nftfile'. $id . "." . $img->extension();
            $img_name = str_replace(' ', '-', strtolower($img_name)); 
            $img->storeAs(null, $img_name, ['disk' => 'public']); 
        }
        return asset('storage') . '/' . $img_name; 
    }
}