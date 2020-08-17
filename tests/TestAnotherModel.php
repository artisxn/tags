<?php

namespace codicastudio\Tags\Test;

use Illuminate\Database\Eloquent\Model;
use codicastudio\Tags\HasTags;

class TestAnotherModel extends Model
{
    use HasTags;

    public $table = 'test_another_models';

    protected $guarded = [];

    public $timestamps = false;
}
