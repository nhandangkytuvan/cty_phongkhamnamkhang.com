<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Post extends Model{
    protected $table = 'post';
    public function user(){
    	return $this->belongsTo('App\User','user_id','id');
    }
    public function term(){
    	return $this->belongsTo('App\Term','term_id','id');
    }
    public function visit(){
    	return $this->hasOne('App\Visit','post_id','id');
    }
    //get rules
    public static function rulesEdit($id){
        return [
            'post_name' => 'required|unique:post,post_name,'.$id,
            'post_description' => 'required',
            'term_id' => 'required',
        ];
    }
}