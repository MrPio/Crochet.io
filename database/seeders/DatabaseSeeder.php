<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tool;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $tools = [['name' => 'Uncinetto'], ['name' => 'Ferri lineari'], ['name' => 'Ferri circolari']];
        $categories = [['name' => 'Amigurumi'], ['name' => 'Scialle']];
        $articles = [[
            'photo' => 'owl_1.jpg:owl_2.jpg',
            'description' => "Adorabile gufo fatto a mano all'uncinetto, perfetto come regalo per lauree 
            o per decorare la casa. Realizzato con cura nei dettagli: cappello di laurea, tocco rosso e 
            diploma. Un pezzo unico e artigianale che unisce creatività e qualità!",
            'name' => 'Gufo di laurea',
            'title' => 'Gufo di laurea - versione Big',
            'price' => 25.00,
            'colour' => 'A scelta',
            'size' => '14P x 16l x 22H cm',
            'composition' => '100% Acrillico',
            'availability' => 'Su ordinazione',
            'category_id' => 1,
            'tool_id' => 1,
        ], [
            'photo' => 'bambola_Mari.jpg:bambola_Mari_2.jpg',
            'description' => "Incantevole bambola bionda realizzata a mano all'uncinetto, perfetta per decorazioni
             o come regalo speciale. Curata nei dettagli, con capelli biondi, abiti colorati e un design unico.
              Morbida, sicura e ideale per tutte le età.",
            'name' => 'Bambola Mari',
            'title' => 'Bambola bionda',
            'price' => 74.50,
            'discount' => 10,
            'colour' => 'Giallo, Bianco, Magenta',
            'size' => '14P x 24l x 40H cm',
            'composition' => '100% Acrillico',
            'availability' => 'Su ordinazione',
            'category_id' => 1,
            'tool_id' => 1,
        ]];
        foreach ($tools as $tool)
            Tool::create($tool);
        foreach ($categories as $category)
            Category::create($category);
        foreach ($articles as $article)
            Article::create($article);
    }
}
