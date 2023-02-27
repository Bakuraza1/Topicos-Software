<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    use HasFactory;
    /**
     * BIKE ATTRIBUTES
     * $this->attributes['id'] - int - contains the bike PK
     * $this->attributes['stock'] - int - contains stock of the bike 
     * $this->attributes['shareable'] - bool - tells if a bike can be seen by other users
     * $this->attributes['type'] - string - contains the type of bike (prefabricated or created by users)
     * $this->attributes['brand'] - string - contains the brand of the bike 
     * $this->attributes['description'] - string - contains a description of the bike
     * $this->attributes['id']
     * 
     */

     protected $fillable = ['id', 'price', 'image', 'name', 'stock', 'shareable', 'type', 'brand', 'description'];

     public function getId(): int
     {
         return $this->attributes['id'];
     }
 
     public function setId($id): void
     {
         $this->attributes['id'] = $id;
     }

     public function getPrice(): int
     {
         return $this->attributes['price'];
     }
 
     public function setPrice($price): void
     {
         $this->attributes['price'] = $price;
     }
 
     public function getStock(): int
     {
         return $this->attributes['stock'];
     }
 
     public function setStock($stock): void
     {
         $this->attributes['stock'] = $stock;
     }
 
     public function getShareable(): bool
     {
         return $this->attributes['shareable'];
     }
 
     public function setShareable($shareable): void
     {
         $this->attributes['shareable'] = $shareable;
     }
 
     public function getType(): string
     {
         return $this->attributes['type'];
     }
 
     public function setType($type): void
     {
         $this->attributes['type'] = $type;
     }
 
     public function getBrand(): string
     {
         return $this->attributes['brand'];
     }
 
     public function setBrand($brand): void
     {
         $this->attributes['brand'] = $brand;
     }
 
     public function getDescription(): string
     {
         return $this->attributes['description'];
     }
 
     public function setDescription($description): void
     {
         $this->attributes['description'] = $description;
     }

     public function getImage(): string
     {
         return $this->attributes['image'];
     }
 
     public function setImage($image): void
     {
         $this->attributes['image'] = $image;
     }
 
}
