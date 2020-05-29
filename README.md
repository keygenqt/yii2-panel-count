[Panel Count](http://keygenqt.com/work/yii2-panel-count)
===================

![GitHub](https://img.shields.io/github/license/keygenqt/yii2-panel-count)
![Packagist Downloads](https://img.shields.io/packagist/dt/keygenqt/yii2-panel-count)

Panel animation number

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either add

```
"require": {
    "keygenqt/yii2-panel-count": "*"
}
```

of your `composer.json` file.

## Usage

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

## Screenshot

![Alt text](https://raw.githubusercontent.com/keygenqt/yii2-panel-count/master/screenshot/example.png?raw=true "Empty")
