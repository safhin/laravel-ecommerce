<?php

namespace App\Repositories\Base;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

interface IBaseRepository{
    
    public function create(array $attributes): Model;
    public function update(int $id, array $attributes): bool;
    public function findById($id);
    public function deleteById($id);
    public function all(): Collection;
    public function with(...$with): Builder;
    public function where(...$where): Builder;
    public function get(): Collection;
}