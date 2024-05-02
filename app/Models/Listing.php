<?php
  namespace App\Models;

  class Listing {
    public static function all(){
      return [
        [
          'id' => 1,
          'title' => 'listing one',
          'description' => 'blah blah blah'
      ],
      [
          'id' => 2,
          'title' => 'listing two',
          'description' => 'blah blah blah'
      ],
      [
          'id' => 3,
          'title' => 'listing three',
          'description' => 'blah blah blah'
      ]
      ];
    }

    public static function find($id) {
      $listings = self::all();

      foreach($listings as $listing) {
        if($listing['id'] == $id) {
          return $listing;
        }
      }
    }
  }