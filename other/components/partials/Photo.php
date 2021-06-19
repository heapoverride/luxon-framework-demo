<?php

class Photo extends Html\Div {
    function __construct($image_url, $description)
    {
        parent::__construct();
        parent::set("class", "photo");

        $img = new Html\Img($image_url);
        $text = new Html\P($description);

        parent::add($img, $text);
    }

    static function getPhotos() {
        $photos = [];

        foreach (Models\Photo::getPhotos() as $photo) {
            $photos[] = new Photo($photo->PhotoUrl, $photo->Description);
        }

        return $photos;
    }
}