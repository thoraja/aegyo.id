<?php

namespace App\Services\Content;

use App\Models\Content\Category;

class CategoryService
{
    /**
     * Handle create category
     *
     * @param mixed $value
     *
     * @return Category
     */
    public function store($value)
    {
        $category = Category::create($value);

        return $category;
    }

    /**
     * @param Category $category
     * @param mixed $value
     *
     * @return void
     */
    public function update(Category $category, $value)
    {
        $category->update($value);
    }

    /**
     * @param Category $category
     *
     * @return void
     */
    public function destroy(Category $category)
    {
        $category->delete();
    }
}
