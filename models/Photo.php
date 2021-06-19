<?php

namespace Models;

class Photo {
    public $Id;
    public $PhotoUrl;
    public $Description;

    static function getPhotos() {
        $photos = [];

        $result = \Database::query("SELECT * FROM photos");

        while ($row = $result->fetch()) {
            $photo = new Photo();
            $photo->Id          = $row["id"];
            $photo->PhotoUrl    = $row["photo_url"];
            $photo->Description = $row["description"];

            $photos[] = $photo;
        }

        return $photos;
    }
}