<?php

namespace App\Models;

class Catalog
{
    public function byName($query, $name)
    {
        return $query->where('title', 'like', '%' . $name . '%');
    }

    public function byAvailability($query, $availability)
    {
        return $availability == null ? $query : $query->where('availability', [true => 'Disponibile ora', false => 'Su ordinazione'][$availability]);
    }

    public function byCategory($query, $category)
    {
        return $category == null ? $query : $query->whereHas('category', fn($query) => $query->where('name', $category));
    }

    public function byTool($query, $tool)
    {
        return $tool == null ? $query : $query->whereHas('tool', fn($query) => $query->where('name', $tool));
    }
}
