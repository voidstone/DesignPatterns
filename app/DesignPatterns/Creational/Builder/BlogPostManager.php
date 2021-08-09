<?php

namespace App\DesignPatterns\Creational\Builder;

use App\DesignPatterns\Creational\Builder\Interfaces\BlogPostBuilderInterface;

class BlogPostManager
{

    private $builder;


    public function setBuilder(BlogPostBuilderInterface $builder)
    {
        $this->builder = $builder;

        return $this;

    }

    public function createCleanPost()
    {
        $blogPost = $this->builder->getBlogPost();

        return $blogPost;

    }

    public function createNewPostIt()
    {

        $blogPost = $this->builder->setTitle("Новыйц пост про IT")
            ->setBody("Новый пост про it тело")
            ->setCategories([
                "it категория"
            ])->setTags([
                "java",
                "javascript"
            ])->getBlogPost();

        return $blogPost;

    }

    public function createNewPostCats()
    {
        $blogPost = $this->builder->setTitle("Новыйц пост про котов")
            ->setCategories([
                "котики"
            ])->setTags([
                "коты",
                "юмор"
            ])->getBlogPost();

        return $blogPost;
    }

}
