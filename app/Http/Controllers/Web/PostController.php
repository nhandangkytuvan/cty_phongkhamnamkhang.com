<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use Session;
use BrowserDetect;
class PostController extends Controller{
    public $post = null;
    public $post_pre = null;
    public $post_next = null;
    public $post_lienquans = null;
    public $term = null;

    public function show($post_link,Request $request){
        $array_link = explode('-',$post_link);
        $post_id = end($array_link);
    	$post = Post::find($post_id);
        // check exit
        if(!$post){return redirect('/');}
        
        $term = $post->term;
        if(BrowserDetect::isDesktop()){
            $post_pre = $term ? $term->post()->where('id','<',$post->id)->orderBy('id','desc')->first() : null;    
            $post_next = $term ? $term->post()->where('id','>',$post->id)->orderBy('id','asc')->first() : null;
            $post_lienquans = $term ? $term->post()->where('id','<>',$post->id)->limit(6)->get() : null;
            $data['post'] = $post;
            $data['term'] = $term;
            $data['post_pre'] = $post_pre;
            $data['post_next'] = $post_next;
            $data['post_lienquans'] = $post_lienquans;
        	return view('web.desktop.post',['data'=>$data]); 
        }else{
            $post_lienquans = $term ? $term->post()->where('id','<>',$post->id)->limit(6)->get() : null;
            $data['post'] = $post;
            $data['term'] = $term;
            $data['post_lienquans'] = $post_lienquans;
        	return view('web.mobile.post',['data'=>$data]); 
        }
    }
    // public function showold($post_alias,$post_id,Request $request){
    //     $post = Post::find($post_id);
    //     if(!$post){
    //         return redirect('/');
    //     }
    //     $data['post'] = $post;
    //     if(BrowserDetect::isDesktop()){
    //         return view('web.desktop.post',['data'=>$data]); 
    //     }else{
    //         return view('web.mobile.post',['data'=>$data]); 
    //     }
    // }
}