<?php

namespace Database\Seeders;

use App\Models\NewsItem;
use Illuminate\Database\Seeder;

/**
 * Real, verifiable coverage only. Add more articles here as they are found;
 * leave published_at null when the date has not been confirmed.
 */
class NewsItemSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'title' => '2025 Invictus Games: FG signs pact with Africa Unconquered Foundation to prepare Team Nigeria',
                'publication' => 'Leadership',
                'url' => 'https://leadership.ng/2025-invictus-games-fg-signs-pact-with-african-unconquered-foundation-to-prepare-team-nigeria/',
                'excerpt' => 'The Federal Government partners with the Africa Unconquered Foundation to prepare wounded, injured and sick service personnel for the Invictus Games.',
                'category' => 'Foundation',
                'published_at' => null,
            ],
            [
                'title' => 'UNIPASS launches in Nigeria, pledges support for students seeking international education',
                'publication' => 'Champion Newspapers',
                'url' => 'https://championnews.com.ng/2025/12/11/unipass-launches-in-nigeria-pledges-support-for-students-seeking-intl-education/',
                'excerpt' => 'At the Abuja launch, Alvin Atsegwasi set out a commitment to transparent, accountable pathways for students seeking education abroad.',
                'category' => 'Education',
                'published_at' => '2025-12-11',
            ],
            [
                'title' => 'UNIPASS launches in Nigeria, pledges support for vulnerable groups',
                'publication' => 'Voice of Nigeria',
                'url' => 'https://von.gov.ng/unipass-launches-in-nigeria-pledges-support-for-vulnerable-groups/',
                'excerpt' => 'UNIPASS begins Nigerian operations with a pledge to widen access to quality higher education.',
                'category' => 'Education',
                'published_at' => null,
            ],
            [
                'title' => 'UNIPASS expands operations to Nigeria, unveils plans for quality access to higher education',
                'publication' => 'National Accord',
                'url' => 'https://www.nationalaccordnewspaper.com/unipass-expands-operations-to-nigeria-unveils-plans-for-quality-access-to-higher-education/',
                'excerpt' => 'Coverage of the UNIPASS Nigeria launch in Abuja and its plans for students.',
                'category' => 'Education',
                'published_at' => null,
            ],
        ];

        foreach ($items as $item) {
            NewsItem::updateOrCreate(['url' => $item['url']], $item);
        }
    }
}
