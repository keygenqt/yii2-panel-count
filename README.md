Panel Count
===================

![Packagist Downloads](https://img.shields.io/packagist/dt/keygenqt/yii2-panel-count?label=Packagist%20Downloads)

A nice panel for displaying information with animation of the value.

<p>
    <a href="https://old.keygenqt.com/work/yii2-panel-count">
        <img src="data/demo_button.gif" width="136px"/>
    </a>
</p>

#### Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

```
"require": {
    "keygenqt/yii2-panel-count": "*"
}
```

#### Usage

```php
<?= keygenqt\panelCount\PanelCount::widget([
    'icon'      => 'fas fa-book',
    'count'     => 155.50,
    'title'     => 'My books',
    'format'    => true,
]) ?>

<?= keygenqt\panelCount\PanelCount::widget([
    'icon' => 'fas fa-bookmark',
    'count' => 124.50 . ' $',
    'title' => 'My bookmark',
    'duration' => 1000,
    'up' => true,
    'color' => 'cadetblue',
    'format' => true,
]) ?>

<?= keygenqt\panelCount\PanelCount::widget([
    'icon'      => 'fas fa-font',
    'count'     => 19999,
    'title'     => 'My font',
    'up'        => false,
    'color'     => 'darkmagenta'
]) ?>

<?= keygenqt\panelCount\PanelCount::widget([
    'count'     => 19999,
    'title'     => 'My title',
    'color'     => 'tomato'
]) ?>
```

#### License

```
Copyright 2016-2024 Vitaliy Zarubin

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
```
