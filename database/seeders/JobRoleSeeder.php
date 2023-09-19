<?php

namespace Database\Seeders;

use App\Models\JobRole;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Modules\Language\Entities\Language;

class JobRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // JobRole::factory(10)->create();

        $job_roles = [
            'Team Leader', 'Manager', 'Assistant Manager', 'Executive', 'Director', 'Administrator'
        ];

        // foreach ($job_roles as $data) {
        //     JobRole::create([
        //         'name' => $data
        //     ]);
        // }

        $languages = Language::all();

        foreach ($job_roles as $data) {
            $translation = new JobRole();
            $translation->save();

            foreach ($languages as $language) {
                $translation->translateOrNew($language->code)->name = $data;
            }

            $translation->save();
        }
    }
}
