<?php

namespace App\Models;

use App\Models\File;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blog';
    protected $with = ['files'];
    protected $fillable = ['name', 'text', 'file_id', 'gallery_img', 'publish'];

    public function files()
    {
        return $this->belongsTo(File::class, 'file_id');
    }
	
    public function category(){
		return $this->belongsTo('App\Models\Category','category_id','id');
	}	
    
    function the_excerpt($text)
    {
        $text = preg_replace("~<img(.*)>~siU", "", $text);
        return substr(strip_tags($text), 0, 150);
    }
	 public function author(): BelongsTo
     {
       return $this->belongsTo(User::class, 'author_id');
     }
}
