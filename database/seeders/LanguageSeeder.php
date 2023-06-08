<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            [
                'name' => 'HTML',
                'badge_color' => '#dd4b25'
            ],
            [
                'name' => 'CSS',
                'badge_color' => '#254bdd'
            ],
            [
                'name' => 'PHP',
                'badge_color' => '#4f5b93'
            ],
            [
                'name' => 'JavaScript',
                'badge_color' => '#efd81d'
            ],

        ];

        foreach ($languages as $language) {
            $newLang = new Language();
            $newLang->name = $language['name'];
            $newLang->slug = Str::slug($language['name'], '-');
            $newLang->badge_color = $language['badge_color'];
            $newLang->save();

        }
    }
}
