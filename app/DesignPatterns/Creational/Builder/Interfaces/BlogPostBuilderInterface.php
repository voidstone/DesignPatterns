<?php

namespace App\DesignPatterns\Creational\Builder\Interfaces;

use App\DesignPatterns\Creational\Builder\Classes\BlogPost;

interface BlogPostBuilderInterface
{

    /**
     * @return BlogPostBuilderInterface
     */
    public function create() :BlogPostBuilderInterface;

    /**
     * @param string $val
     * @return BlogPostBuilderInterface
     */
    public function setTitle(string $val) : BlogPostBuilderInterface;

    /**
     * @param string $val
     * @return BlogPostBuilderInterface
     */
    public function setBody(string $val) : BlogPostBuilderInterface;

    /**
     * @param array $val
     * @return BlogPostBuilderInterface
     */
    public function setCategories(array $val) : BlogPostBuilderInterface;

    /**
     * @param array $val
     * @return BlogPostBuilderInterface
     */
    public function setTags(array $val) : BlogPostBuilderInterface;


    public function getBlogPost() : BlogPost;

}
