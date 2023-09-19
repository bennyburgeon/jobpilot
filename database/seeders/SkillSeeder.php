<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Modules\Language\Entities\Language;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = [
            'html',
            'css',
            'js',
            'php',
            'laravel',
            'mysql',
            'vuejs',
            'reactjs',
            'nodejs',
            'expressjs',
            'python',
            'django',
        ];

        // foreach ($skills as $data) {
        //     Skill::create([
        //         'name' => $data,
        //     ]);
        // }

        $languages = Language::all();

        foreach ($skills as $data) {
            $translation = new Skill();
            $translation->save();

            foreach ($languages as $language) {
                $translation->translateOrNew($language->code)->name = $data;
            }

            $translation->save();
        }
    }
}
