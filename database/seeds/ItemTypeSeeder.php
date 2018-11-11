<?php

use App\ItemType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_types')->delete();
        $itemType = new ItemType();
        $itemType->typeName = "Beverages";
        $itemType->logoUrl = "-";
        $itemType->save();

        $itemType = new ItemType();
        $itemType->typeName = "Snack";
        $itemType->logoUrl = "-";
        $itemType->save();

        $itemType = new ItemType();
        $itemType->typeName = "Non-Food";
        $itemType->logoUrl = "-";
        $itemType->save();

        $itemType = new ItemType();
        $itemType->typeName = "Clothes";
        $itemType->logoUrl = "-";
        $itemType->save();
    }
}
