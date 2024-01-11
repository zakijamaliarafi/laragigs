<?php

namespace App\Models;

class Listing {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eos vero facere quas! Exercitationem laborum omnis id eius. Inventore temporibus ipsam explicabo autem, laborum saepe. Suscipit, mollitia. Sint, perspiciatis eligendi.'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eos vero facere quas! Exercitationem laborum omnis id eius. Inventore temporibus ipsam explicabo autem, laborum saepe. Suscipit, mollitia. Sint, perspiciatis eligendi.'
            ],
        ];
    }

    public static function find($id) {
        $listings = self::all();

        foreach($listings as $listing) {
            if($listing['id'] == $id){
                return $listing;
            }
        }
    }
}