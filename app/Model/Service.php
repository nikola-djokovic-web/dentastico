<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
  public $table = 'services';

  public $fillable = ['title','title2','title3','description','content','content2','content3','image', 'active', 'deleted'];

  public function scopeNotdeleted($query){
      return $query->where('deleted', 0);
  }

  public function scopeActive($query){
      return $query->where('active', 1);
  }

  public function serviceUrl(){
      return route('single-service', [
          'id' => $this->id,
          'slug' => str_slug($this->title)
      ]);
  }

  public function serviceUrlEn(){
      return route('single-service', [
          'id' => $this->id,
          'slug' => str_slug($this->title2)
      ]);
  }

  public function serviceUrlIt(){
      return route('single-service', [
          'id' => $this->id,
          'slug' => str_slug($this->title3)
      ]);
  }

  public function getImage($dimension = 'xl'){

      $image = $this->image;

      if(!in_array($dimension, ['xl', 'l'])){
          $dimension = 'xl';
      }

      $extension = pathinfo($image, PATHINFO_EXTENSION);
      $image = str_replace("." . $extension, "", $image);
      $image = $image . '-' . $dimension . '.' . $extension;

      return $image;

  }
}
