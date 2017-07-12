<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Term;
use Session;
use BrowserDetect;
class TermController extends Controller{
    public $term = null;
    public $term_parent = null;
    public $post_top = null;
    public $post_terms = null;

    public function show($term_link,Request $request){
        $array_link = explode('-',$term_link);
        $term_id = end($array_link);
        $term = Term::find($term_id);
        if(!$term){
            return redirect('/');
        }
        if(BrowserDetect::isDesktop()){
            switch ($term_id) {
                case 33:
                    $data['term'] = $term;
                    return view('web.desktop.thietbi',['data'=>$data]); 
                    break;
                case 34:
                    $data['term'] = $term;
                    return view('web.desktop.hoiphuc',['data'=>$data]); 
                    break;
                default:
                    $post_top = $term->post()->orderBy('id','desc')->where('post_status',1)->first();
                    $post_top_id = $post_top ? $post_top->id : 0;
                    $post_terms = $term->post()->where('id','<>',$post_top_id)->orderBy('id','desc')->where('post_status',1)->paginate(6);
                    
                    $data['term'] = $term;
                    $data['post_top'] = $post_top;
                    $data['post_terms'] = $post_terms;
                    return view('web.desktop.term',['data'=>$data]); 
                    break;
            }
        }else{
            $term_parent = $term->parent;
            $post_terms = $term->post()->orderBy('id','desc')->where('post_status',1)->paginate(6);
            $data['term'] = $term;
            $data['term_parent'] = $term_parent;
            $data['post_terms'] = $post_terms;
            return view('web.mobile.term',['data'=>$data]);  
        }
    }
    // public function showold($term_alias,$term_id,Request $request){
    //     $term = Term::find($term_id);
    //     if(!$term){
    //         return redirect('/');
    //     }
    //     $data['term'] = $term;
    //     if(BrowserDetect::isDesktop()){
    //         switch ($term_id) {
    //             case 33:
    //                 return view('web.desktop.thietbi',['data'=>$data]); 
    //                 break;
    //             case 32:
    //                 return view('web.desktop.kythuat',['data'=>$data]); 
    //                 break;
    //             case 34:
    //                 return view('web.desktop.hoiphuc',['data'=>$data]); 
    //                 break;
    //             default:
    //                 return view('web.desktop.term',['data'=>$data]); 
    //                 break;
    //         }
    //     }else{
    //         switch ($term_id) {
    //             case 33:
    //                 return view('web.mobile.term',['data'=>$data]);
    //                 break;
    //             case 32:
    //                 return view('web.mobile.kythuat',['data'=>$data]);
    //                 break;
    //             case 34:
    //                 return view('web.mobile.hoiphuc',['data'=>$data]); 
    //                 break;
    //             default:
    //                 return view('web.mobile.term',['data'=>$data]);  
    //                 break;
    //         }
    //     }
    // }
}