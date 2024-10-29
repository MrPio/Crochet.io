<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'price', 'discount', 'colour', 'size', 'composition', 'origin', 'availability', 'category_id', 'tool_id'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function tool(): BelongsTo
    {
        return $this->belongsTo(Tool::class);
    }

    public function photos(): array
    {
        return explode(':', $this->_photos);
    }

    public function formattedPrice(): string
    {
        return number_format($this->price, 2, ',', '.');
    }

    public function colours(): array
    {
        return explode(':', $this->_colours);
    }
}
