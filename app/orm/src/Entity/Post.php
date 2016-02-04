<?php
/**
 * Created by PhpStorm.
 * User: Maps_red
 * Date: 04/02/2016
 * Time: 16:07
 */

namespace ORM\Entity;

class Post extends Entity {
    const TABLE = 'post';  //Table name
    protected $id; //Id field (primary key)
    protected $title; //Title field
    protected $content; //Content field

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function getContent() {
        return $this->content;
    }

}