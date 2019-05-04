<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Главная', route('home'));
});

// Home > About
Breadcrumbs::for('about', function ($trail) {
    $trail->parent('home');
    $trail->push('О компании', route('about'));
});

// Home > Blog
Breadcrumbs::for('blog', function ($trail) {
    $trail->parent('home');
    $trail->push('Новости', route('blog'));
});

// Home > Blog > [Category]
Breadcrumbs::for('category', function ($trail, $category) {
    $trail->parent('blog');
    $trail->push($category->name, route('blog-category', $category->slug));
});

// Home > Blog > [Category] > [Post]
Breadcrumbs::for('article', function ($trail, $post) {
    $trail->parent('blog');
    $trail->push($post->title, route('article', $post->slug));
});

// Home > Catalog
Breadcrumbs::for('catalog', function ($trail) {
    $trail->parent('home');
    $trail->push('Каталог', route('catalog'));
});

// Home > Product
Breadcrumbs::for('product', function ($trail, $product) {
    $trail->parent('catalog');
    // $trail->push('Каталог', route('catalog'));
    $trail->push($product->name);
});

