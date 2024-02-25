<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\content;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $all_data=[
            [
                'name'=>'Swadhin Mojumder',
                'catagory_id'=>'1',
                'head'=>'i am Swadhin',
                'date'=>'2002-12-16',
                'story'=>'A blog (a truncation of "weblog") is an informational website consisting of discrete, often informal diary-style text entries (posts). Posts are typically displayed in reverse chronological order so that the most recent post appears first, at the top of the web page.A blog (a truncation of "weblog") is an informational website consisting of discrete, often informal diary-style text entries (posts). Posts are typically displayed in reverse chronological order so that the most recent post appears first, at the top of the web page.A blog (a truncation of "weblog") is an informational website consisting of discrete, often informal diary-style text entries (posts). Posts are typically displayed in reverse chronological order so that the most recent post appears first, at the top of the web page.',

            ],
            [
                'name'=>'Alex Mojumder',
                'catagory_id'=>'1',
                'head'=>'i am Alex',
                'date'=>'2002-12-16',
                'story'=>'A blog (a truncation of "weblog") is an informational website consisting of discrete, often informal diary-style text entries (posts). Posts are typically displayed in reverse chronological order so that the most recent post appears first, at the top of the web page.A blog (a truncation of "weblog") is an informational website consisting of discrete, often informal diary-style text entries (posts). Posts are typically displayed in reverse chronological order so that the most recent post appears first, at the top of the web page.A blog (a truncation of "weblog") is an informational website consisting of discrete, often informal diary-style text entries (posts). Posts are typically displayed in reverse chronological order so that the most recent post appears first, at the top of the web page.',

            ],
            [
                'name'=>'Shuvo Mojumder',
                'catagory_id'=>'2',
                'head'=>'i am Shuvo',
                'date'=>'2002-12-16',
                'story'=>'A blog (a truncation of "weblog") is an informational website consisting of discrete, often informal diary-style text entries (posts). Posts are typically displayed in reverse chronological order so that the most recent post appears first, at the top of the web page.A blog (a truncation of "weblog") is an informational website consisting of discrete, often informal diary-style text entries (posts). Posts are typically displayed in reverse chronological order so that the most recent post appears first, at the top of the web page.A blog (a truncation of "weblog") is an informational website consisting of discrete, often informal diary-style text entries (posts). Posts are typically displayed in reverse chronological order so that the most recent post appears first, at the top of the web page.',

            ],
            [
                'name'=>'Maxwell Mojumder',
                'catagory_id'=>'2',
                'head'=>'i am Maxwell',
                'date'=>'2002-12-16',
                'story'=>'A blog (a truncation of "weblog") is an informational website consisting of discrete, often informal diary-style text entries (posts). Posts are typically displayed in reverse chronological order so that the most recent post appears first, at the top of the web page.A blog (a truncation of "weblog") is an informational website consisting of discrete, often informal diary-style text entries (posts). Posts are typically displayed in reverse chronological order so that the most recent post appears first, at the top of the web page.A blog (a truncation of "weblog") is an informational website consisting of discrete, often informal diary-style text entries (posts). Posts are typically displayed in reverse chronological order so that the most recent post appears first, at the top of the web page.',

            ],
            [
                'name'=>'Shemul Mojumder',
                'catagory_id'=>'3',
                'head'=>'i am Shemul',
                'date'=>'2002-12-16',
                'story'=>'A blog (a truncation of "weblog") is an informational website consisting of discrete, often informal diary-style text entries (posts). Posts are typically displayed in reverse chronological order so that the most recent post appears first, at the top of the web page.A blog (a truncation of "weblog") is an informational website consisting of discrete, often informal diary-style text entries (posts). Posts are typically displayed in reverse chronological order so that the most recent post appears first, at the top of the web page.A blog (a truncation of "weblog") is an informational website consisting of discrete, often informal diary-style text entries (posts). Posts are typically displayed in reverse chronological order so that the most recent post appears first, at the top of the web page.',

            ],
            [
                'name'=>'Arman Sir',
                'catagory_id'=>'3',
                'head'=>'i am Arman',
                'date'=>'2002-12-16',
                'story'=>'A blog (a truncation of "weblog") is an informational website consisting of discrete, often informal diary-style text entries (posts). Posts are typically displayed in reverse chronological order so that the most recent post appears first, at the top of the web page.A blog (a truncation of "weblog") is an informational website consisting of discrete, often informal diary-style text entries (posts). Posts are typically displayed in reverse chronological order so that the most recent post appears first, at the top of the web page.A blog (a truncation of "weblog") is an informational website consisting of discrete, often informal diary-style text entries (posts). Posts are typically displayed in reverse chronological order so that the most recent post appears first, at the top of the web page.',

            ],
        ];
        content::insert($all_data);
    }
}
