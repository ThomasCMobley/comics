<?php

use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table("comics")->insert(["comic_url" => "http://www.arcamax.com/thefunnies/babyblues", "comic_name" => "Baby Blues", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.arcamax.com/thefunnies/beetlebailey", "comic_name" => "Beetle Baily", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.arcamax.com/thefunnies/blondie", "comic_name" => "Blondie", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.gocomics.com/broomhilda", "comic_name" => "Broomhilda", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.seattlepi.com/comics-and-games/fun/Buckles/", "comic_name" => "Buckles", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.gocomics.com/calvinandhobbes", "comic_name" => "Calvin and Hobbes", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.arcamax.com/thefunnies/crankshaft", "comic_name" => "Crankshaft", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.arcamax.com/thefunnies/curtis", "comic_name" => "Curtis", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.arcamax.com/thefunnies/dilbert/", "comic_name" => "Dilbert", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.gocomics.com/doonesbury", "comic_name" => "Doonesbury", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.gocomics.com/forbetterorforworse", "comic_name" => "For Better Or Worse", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.gocomics.com/foxtrot", "comic_name" => "Foxtrot", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.gocomics.com/getfuzzy", "comic_name" => "Get Fuzzy", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.gocomics.com/grand-avenue", "comic_name" => "Grand Avenue", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.arcamax.com/thefunnies/hiandlois", "comic_name" => "Hi And Lois", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.gocomics.com/inthebleachers", "comic_name" => "In The Bleachers", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.gocomics.com/jumpstart", "comic_name" => "Jumpstart", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.jewishworldreview.com/cols/elder1.asp", "comic_name" => "Larry Elder", "category_id" => 1]);
      DB::table("comics")->insert(["comic_url" => "http://www.gocomics.com/luann", "comic_name" => "Luann", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.arcamax.com/thefunnies/mallardfillmore", "comic_name" => "Mallard Fillmore", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.uexpress.com/newsoftheweird/", "comic_name" => "News Of The Wierd", "category_id" => 1]);
      DB::table("comics")->insert(["comic_url" => "http://www.jewishworldreview.com/cols/greenberg1.asp", "comic_name" => "Paul Greenberg", "category_id" => 1]);
      DB::table("comics")->insert(["comic_url" => "http://www.seattlepi.com/comics-and-games/fun/Piranha/", "comic_name" => "Piranhna Club", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.gocomics.com/pluggers", "comic_name" => "Pluggers", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.gocomics.com/preteena", "comic_name" => "Pre-Teena", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.gocomics.com/shirley-and-son-classics", "comic_name" => "Shirly And Son", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.gocomics.com/shoe", "comic_name" => "Shoe", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.jewishworldreview.com/cols/sowell1.asp", "comic_name" => "Thomas Sowell", "category_id" => 1]);
      DB::table("comics")->insert(["comic_url" => "http://www.jewishworldreview.com/cols/williams1.asp", "comic_name" => "Walter Williams", "category_id" => 1]);
      DB::table("comics")->insert(["comic_url" => "http://www.arcamax.com/thefunnies/zits", "comic_name" => "Zits", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.seattlepi.com/comics-and-games/fun/Lawyer/", "comic_name" => "Pros & Cons", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.arcamax.com/thefunnies/deflocked/", "comic_name" => "Deflocked", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.arcamax.com/thefunnies/rhymeswithorange", "comic_name" => "Rhymes With Orange", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.arcamax.com/thefunnies/tinasgroove", "comic_name" => "Tina's Groove", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.seattlepi.com/comics-and-games/fun/Pajama/", "comic_name" => "Pajama Diaries", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.arcamax.com/thefunnies/mutts", "comic_name" => "Mutts", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.gocomics.com/geech", "comic_name" => "Geech", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.gocomics.com/arloandjanis", "comic_name" => "Arlo and Janis", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.gocomics.com/bloomcounty", "comic_name" => "Bloom County", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.retailcomic.com/", "comic_name" => "Retail", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.gocomics.com/rubes", "comic_name" => "Rubes", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.seattlepi.com/comics-and-games/fun/Bizarro/", "comic_name" => "Bizarro", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.arcamax.com/thefunnies/speedbump/", "comic_name" => "Speed Bump", "category_id" => 0]);
      DB::table("comics")->insert(["comic_url" => "http://www.gocomics.com/boondocks", "comic_name" => "Boondocks", "category_id" => 0]);
    }
}
