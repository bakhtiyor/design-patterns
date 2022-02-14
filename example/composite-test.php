<?php

use Composite\Fieldset;
use Composite\Form;
use Composite\Input;

require_once 'vendor/autoload.php';

$form = new Form('product', "Add product", "/product/add");
$form->add(new Input('name', "Name", 'text'));
$form->add(new Input('description', "Description", 'text'));

$picture = new Fieldset('photo', "Product photo");
$picture->add(new Input('caption', "Caption", 'text'));
$picture->add(new Input('image', "Image", 'file'));
$form->add($picture);

$data = [
    'name' => 'Apple MacBook',
    'description' => 'A decent laptop.',
    'photo' => [
        'caption' => 'Front photo.',
        'image' => 'photo1.png',
    ],
];

$form->setData($data);
echo $form->render();