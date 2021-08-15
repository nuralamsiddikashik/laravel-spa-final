<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class CommonSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        About::create( [
            'about_title'       => 'Grow Your Business With Our Digital Agency',
            'about_subtitle'    => 'Over 25 years Reobiz helping companies reach
            their financial and branding goals.',
            'about_description' => 'On the other hand we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment so blinded by desire. Letraset sheets containing Lorem passages, desktop publishing',
        ] );
    }
}
