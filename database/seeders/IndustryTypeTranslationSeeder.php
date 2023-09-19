<?php

namespace Database\Seeders;

use App\Models\IndustryType;
use Illuminate\Database\Seeder;
use App\Models\IndustryTypeTranslation;
use Modules\Language\Entities\Language;

class IndustryTypeTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = Language::all();

        $types = IndustryType::all();
        if($types && count($types) && count($types) != 0){
            foreach ($types as $data) {
                foreach ($languages as $language) {
                    IndustryTypeTranslation::create([
                        'industry_type_id' => $data->id,
                        'locale' => $language->code,
                        'name' => $data->name ?? "{$language->code} name",
                    ]);
                }
            }
        }
    }
}
