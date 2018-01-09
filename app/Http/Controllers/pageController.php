<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\slide;
use App\xe;
use App\hang;
use App\loai;
use App\phankhuc;
use App\contact;

class pageController extends Controller
{
    public function home()
    {
        $slide = slide::all();
        $new = DB::table('xe')->where('soluong','>','8')->take(3)->get();
        return view('pages.home',compact('slide','new'));
    }

    public function products()
    {
        $allproduct = xe::paginate(6);
        return view('pages.products',compact('allproduct'));
    }

    public function detail(Request $re)
    {
        $product = xe::where('id',$re->id)->first();
        return view('pages.detail',compact('product'));
    }



    public function allproducts()
    {
        $allproduct = xe::all();
        $num = xe::count();
        $total = DB::table('xe')->sum('soluong');
        return view('pages.allproducts',compact('allproduct','num','total'));
    }

    public function management()
    {
        $allproduct = xe::all();
        $hang = hang::all();
        $loai = loai::all();
        $phankhuc = phankhuc::all();
        return view('pages.management',compact('allproduct','hang','loai','phankhuc'));
    }

    public function changepass()
    {
        return view('pages.changepass');
    }

    public function contact()
    {
              
        return view('pages.contact');
    }    
    public function pcontact(Request $re)
    {
        
        $this->validate($request,[
            'ten'=>'required',
            'mail'=>'required',
            'sdt'=>'required',
            'sub'=>'required'
           
        ],[
            'ten.required'=>'Your Name?',
            'mail.required'=>'Your Email?',
            'sdt.min'=>'Your Phone?',
            'sub.unique'=>'Your Opinion?'
            

        ]);
        $contact = new contact;
        $contact->ten=$re->ten;
        $contact->mail=$re->mail;
        $contact->sdt=$re->sdt;
        $contact->sub=$re->sub;
        $contact->save();

        return redirect('contact');
    }

    



    public function addmotor()
    {
        $allproduct = xe::all();
        
        return view('pages.manage.addmotor',compact('allproduct'));
    }    
    public function paddmotor(Request $re)
    {
        $this->validate($re,[            
            'tenxe'=>'required',
            'soluong'=>'required'
        ]);
        $xe = xe::where('id','=',$re->tenxe)->first();
        $xe->soluong+=$re->soluong;
        $xe->save();
        return redirect('addmotor');
    }

    public function addmodel()
    {
        $allproduct = xe::all();
        $hang=hang::all();
        $loai=loai::all();
        $pk=phankhuc::all();
        
        return view('pages.manage.addmodel',compact('allproduct','hang','loai','pk'));
    }

    
    public function paddmodel(Request $re)
    {
        $this->validate($re,[
            'brand'=>'required',
            'type'=>'required',
            'seg'=>'required',
            'tenxe'=>'required',
            'soluong'=>'required',
            'namsx'=>'required',
            'mota'=>'required',
            'hinh'=>'required',
            'gia'=>'required'
            
        ]);
        $xe=new xe;
        $xe->tenxe=$re->tenxe;
        $xe->gia=$re->gia;
        $xe->namsx=$re->namsx;
        $xe->mota=$re->mota;
        
        $xe->soluong=$re->soluong;
        $xe->hang=$re->brand;
        $xe->loai=$re->type;
        $xe->pk=$re->seg;

        if($re ->hasFile('hinh'))
        {
            $file = $re->file('hinh');
            $name = $file->getClientOriginalName();
            $image = "images/". $name;
            while(file_exists("public/images" .$image))
            {
                $image = "images/". $name;
            }
            $file->move("public/images",$image);
            $xe->hinh = $image;
        }
        else
        {
            $xe->hinh="";
        }

        $xe->save();
        return redirect('addmodel');
    }

    public function remove()
    {
        $allproduct = xe::all();
        
        return view('pages.manage.remove',compact('allproduct'));
    }    
    public function premove(Request $re)
    {
        $this->validate($re,[            
            'tenxe'=>'required',
            'soluong'=>'required'
        ]);
        $xe = xe::where('id','=',$re->tenxe)->first();
        $xe->soluong-=$re->soluong;
        $xe->save();
        return redirect('remove');
    }

    
   
        
      
    
    public function editmodel()
    {
        $allproduct=xe::all();
        $hang=hang::all();
        $loai=loai::all();
        $pk=phankhuc::all();
        
        return view('pages.manage.editmodel',compact('allproduct','hang','loai','pk'));
    }    
    public function peditmodel(Request $re)
    {
        $this->validate($re,[            
            'brand'=>'required',
            'type'=>'required',
            'seg'=>'required',
            'tenxe'=>'required',
            'soluong'=>'required',
            'namsx'=>'required',
            'mota'=>'required',
            'hinh'=>'required',
            'gia'=>'required'
        ]);
        $xe = xe::where('id','=',$re->laytenxe)->first();
        $xe->tenxe=$re->tenxe;
        $xe->gia=$re->gia;
        $xe->namsx=$re->namsx;
        $xe->mota=$re->mota;
        
        $xe->soluong=$re->soluong;
        $xe->hang=$re->brand;
        $xe->loai=$re->type;
        $xe->pk=$re->seg;

        if($re ->hasFile('hinh'))
        {
            $file = $re->file('hinh');
            $name = $file->getClientOriginalName();
            $image = "images/". $name;
            while(file_exists("public/images" .$image))
            {
                $image = "images/". $name;
            }
            $file->move("public/images",$image);
            $xe->hinh = $image;
        }
        else
        {
            $xe->hinh="";
        }
        $xe->save();
        
        return redirect('editmodel');
    }
}
