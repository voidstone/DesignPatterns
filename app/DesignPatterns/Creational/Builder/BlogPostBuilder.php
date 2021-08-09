<?php

namespace App\DesignPatterns\Creational\Builder;

use App\DesignPatterns\Creational\Builder\Classes\BlogPost;
use App\DesignPatterns\Creational\Builder\Interfaces\BlogPostBuilderInterface;

class BlogPostBuilder implements BlogPostBuilderInterface
{

    private $blogPost;


    public function __construct()
    {
        $this->create();
    }


    /**
     * @return BlogPostBuilderInterface
     */
    public function create(): BlogPostBuilderInterface
    {
       $this->blogPost = new BlogPost();

       return $this;
    }

    /**
     * @param string $val
     * @return BlogPostBuilderInterface
     */
    public function setTitle(string $val): BlogPostBuilderInterface
    {
       $this->blogPost->title = $val;

       return $this;
    }

    /**
     * @param string $val
     * @return BlogPostBuilderInterface
     */
    public function setBody(string $val): BlogPostBuilderInterface
    {
        $this->blogPost->body = $val;

        return $this;
    }

    /**
     * @param array $val
     * @return BlogPostBuilderInterface
     */
    public function setCategories(array $val): BlogPostBuilderInterface
    {
        $this->blogPost->categories = $val;

        return $this;
    }

    /**
     * @param array $val
     * @return BlogPostBuilderInterface
     */
    public function setTags(array $val): BlogPostBuilderInterface
    {
        $this->blogPost->tags = $val;

        return $this;
    }

    /**
     * @return BlogPost
     */
    public function getBlogPost(): BlogPost
    {
        $result = $this->blogPost;
        $this->create();

        return $result;
    }
}
