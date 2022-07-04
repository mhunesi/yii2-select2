Yii2 Select2 Extension
======================
Yii2 Select2 Extension

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require --prefer-dist mhunesi/yii2-select2 "*"
```

or add

```
"mhunesi/yii2-select2": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

``` php
<?= \mhunesi\select2\Select2Widget::widget([
    'id' => 'my-id',
    'name' => 'my-name',
    'items' => ['1' => 'Deneme']
]) ?>
```

``` php
<?= $form
    ->field($model, 'address')
    ->widget(\mhunesi\select2\Select2Widget::className(),
        [
            'items' => [1 => 'Address Title 1', 2 => 'Address Title 2'],
            'options' => [
                'options' => [
                    1 => [
                        'data-title' => 'Address Title 1',
                        'data-name' => 'Mustafa Hayri',
                        'data-lastname' => 'ÜNEŞİ',
                        'data-country' => 'Country',
                        'data-province' => 'Province',
                        'data-phone' => '+90 542 999 99 99',
                        'data-address' => '214 West 36th Street',
                    ],
                    2 => [
                        'data-title' => 'Address Title 2',
                        'data-name' => 'Mustafa Hayri',
                        'data-lastname' => 'ÜNEŞİ',
                        'data-country' => 'Country',
                        'data-province' => 'Province',
                        'data-phone' => '+90 542 999 99 99',
                        'data-address' => '214 West 36th Street',
                    ]
                ]
            ],
            'clientOptions' => [
                'templateResult' => new JsExpression('
                    function(item){
                      if (!item.id) {
                        return item.text;
                      }
                      var data = $(item.element).data();
                      var template = $(
                        `<strong>${data.title}</strong> <br>
                        <span>${data.address} - ${data.province} / ${data.country}</span> <br>
                        <span>${data.name} ${data.lastname}  ${data.phone}</span>`
                      );
                      return template;
                    }
                ')
            ]
        ]
    ) ?>
```


``` php
<?= \mhunesi\select2\Select2Widget::widget([
    'id' => 'accounts-select',
    'name' => 'accounts',
    'options' => [
        'class' => 'w-100',
        'multiple' => false
    ],
    'clientOptions' => [
        'placeholder' => 'Account select..',
        'allowClear' => true,
        'drops' => 'up',
        'ajax' => [
            'url' => '/banking/accounts/search',
            'dataType' => 'json',
            'minimumInputLength' => '2',
            'beforeSend' => false,
            'complete' => false,
            'cache' => true,
            'error' => true,
            'delay' => 250,
        ],
        'language' => 'tr'
    ],
]) ?>
```

