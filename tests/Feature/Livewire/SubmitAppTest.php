<?php

use App\Livewire\SubmitApp;
use Illuminate\Http\UploadedFile;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(SubmitApp::class)
        ->assertStatus(200);
});


test('the component can validate mimes for the icon field', function () {

    $component = Livewire::test(SubmitApp::class);

    $component
        ->set('icon', UploadedFile::fake()
            ->create('not-a-png-image.pdf', 512, 512))
        ->call('submit')
        ->assertHasErrors([
            'icon' => 'mimes'
        ]);
});
