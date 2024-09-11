<?php

use App\Models\YourModel;

covers(YourModel::class);

test('guarded', function () {
    expect((new YourModel)->getGuarded())->toEqual(['id', 'created_at', 'updated_at']);
});

test('hidden', function () {
    expect((new YourModel)->getHidden())->toEqual(['id', 'created_at', 'updated_at']);
});
