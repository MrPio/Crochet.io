<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Article;
use App\Models\Category;
use App\Models\Colour;
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
        $categories = [['name' => 'Amigurumi'], ['name' => 'Scialle'], ['name' => 'Abbigliamento per cani']];
        $articles = [[
            '_photos' => 'owl_1.jpg:owl_2.jpg:owl_3.jpg',
            'thumbnail' => 'owl_1.jpg',
            'description' => "Adorabile gufo fatto a mano all'uncinetto, perfetto come regalo per lauree 
            o per decorare la casa. Realizzato con cura nei dettagli: cappello di laurea, tocco rosso e 
            diploma. Un pezzo unico e artigianale che unisce creatività e qualità!",
            'name' => 'Gufo di laurea',
            'title' => 'Gufo di laurea - versione Big',
            'price' => 25.00,
            '_colours' => 'Verde:Nero:Viola:Rosso:Blu:Bianco:Rosa:Giallo:Celeste:Grigio:Ocra:Arancione:Marrone',
            'size' => '14P x 16l x 22H cm',
            'composition' => '100% Acrillico',
            'availability' => 'Su ordinazione',
            'category_id' => 1,
            'tool_id' => 1,
        ], [
            '_photos' => 'bambola_Mari.png:bambola_Mari_2.png',
            'thumbnail' => 'bambola_Mari.png',
            'description' => "Incantevole bambola bionda realizzata a mano all'uncinetto, perfetta per decorazioni
             o come regalo speciale. Curata nei dettagli, con capelli biondi, abiti colorati e un design unico.
              Morbida, sicura e ideale per tutte le età.",
            'name' => 'Bambola Mari',
            'title' => 'Bambola bionda',
            'price' => 74.50,
            'discount' => 10,
            '_colours' => 'Giallo:Bianco:Rosa',
            'size' => '14P x 24l x 40H cm',
            'composition' => '100% Acrillico',
            'availability' => 'Su ordinazione',
            'category_id' => 1,
            'tool_id' => 1,
        ],[
            '_photos' => 'pig_1.png:pig_2.jpg:pig_3.jpg',
            'thumbnail' => 'pig_1.png',
            'description' => "Cerchi un regalo unico e adorabile? Questo maialino amigurumi è realizzato interamente
             a mano con amore. Il suo design dolce e morbido lo rende perfetto sia come decorazione
              sia come coccoloso compagno. Con un fiocco rosso brillante che aggiunge un tocco di eleganza,
               è l'accessorio perfetto per dare un po' di allegria a qualsiasi ambiente. Ideale per: decorare la camera,
                come regalo di compleanno o per chi ama gli amigurumi e le creazioni fatte a mano.
                 Regala un sorriso con questo tenero amigurumi maialino!",
            'name' => 'Maialino amigurumi',
            'title' => 'Maialino amigurumi',
            'price' => 18.50,
            'discount' => 10,
            '_colours' => 'Rosa:Rosso',
            'size' => '22P x 18l x 15H cm',
            'composition' => '100% Acrillico',
            'availability' => 'Su ordinazione',
            'category_id' => 1,
            'tool_id' => 1,
        ], [
            '_photos' => 'whale_1.jpg:whale_2.jpg:whale_3.jpg',
            'thumbnail' => 'whale_1.jpg',
            'description' => "Questa tenera balena amigurumi è realizzata interamente a mano. 
            Con il suo corpo blu mare e pancia bianca, è perfetta per 
            chi cerca un oggetto unico e originale. Ideale per: arredare la cameretta, come mascotte su una scrivania 
            o per regalare un sorriso agli amanti delle balene e degli amigurumi.",
            'name' => 'Balena Blu',
            'title' => 'Balena Blu',
            'price' => 5.50,
            'discount' => 0,
            '_colours' => 'Blu:Bianco',
            'size' => '8P x 8l x 6H cm',
            'composition' => '100% Acrillico',
            'availability' => 'Su ordinazione',
            'category_id' => 1,
            'tool_id' => 1,
        ], [
            '_photos' => 'scialle_1.png:scialle_2.png:scialle_3.jpg:scialle_4.jpg:scialle_5.jpg',
            'thumbnail' => 'scialle_1.png',
            'description' => "TODO",
            'name' => 'Scialle Blu-Giallo',
            'title' => 'Scialle Blu-Giallo',
            'price' => 72.50,
            'discount' => 10,
            '_colours' => 'Blu:Giallo',
            'size' => '1.5l x 0.75H m',
            'composition' => 'TODO',
            'availability' => 'Disponibile ora',
            'category_id' => 2,
            'tool_id' => 1,
        ], [
            '_photos' => 'dog_1.jpg:dog_2.png:dog_3.jpg',
            'thumbnail' => 'dog_1.jpg',
            'description' => "TODO",
            'name' => 'Maglioncino per cani celeste',
            'title' => 'Maglioncino per cani celeste',
            'price' => 38.50,
            'discount' => 0,
            '_colours' => 'Celeste',
            'size' => 'S',
            'composition' => 'TODO',
            'availability' => 'Disponibile ora',
            'category_id' => 3,
            'tool_id' => 1,
        ],
            [
                '_photos' => 'dog_2_1.png:dog_2_2.png:dog_2_3.png:dog_2_4.png',
                'thumbnail' => 'dog_2_1.png',
                'description' => "TODO",
                'name' => 'Maglioncino per cani marrone',
                'title' => 'Maglioncino per cani marrone',
                'price' => 38.50,
                'discount' => 0,
                '_colours' => 'Marrone',
                'size' => 'S',
                'composition' => 'TODO',
                'availability' => 'Disponibile ora',
                'category_id' => 3,
                'tool_id' => 1,
            ]];

        $colours=[
            ['id'=>'Verde','hex'=>'#48bc4e'],
            ['id'=>'Nero','hex'=>'#292d32'],
            ['id'=>'Viola','hex'=>'#8333df'],
            ['id'=>'Rosso','hex'=>'#ea4646'],
            ['id'=>'Blu','hex'=>'#345eff'],
            ['id'=>'Bianco','hex'=>'#f2f2f2'],
            ['id'=>'Rosa','hex'=>'#f02a7f'],
            ['id'=>'Giallo','hex'=>'#f3c432'],
            ['id'=>'Celeste','hex'=>'#32b5f9'],
            ['id'=>'Grigio','hex'=>'#adb7d0'],
            ['id'=>'Ocra','hex'=>'#d68038'],
            ['id'=>'Arancione','hex'=>'#fa923c'],
            ['id'=>'Marrone','hex'=>'#7a4d61'],
        ];

        foreach ($tools as $tool)
            Tool::create($tool);
        foreach ($categories as $category)
            Category::create($category);
        foreach ($articles as $article)
            Article::create($article);
        foreach ($colours as $colour)
            Colour::create($colour);
    }
}
