yii2-panel-count
===================

Panel animation number.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either add

```
"require": {
    "keygenqt/yii2-panel-count": "*"
}
```

of your `composer.json` file.

## Latest Release

The latest version of the module is v0.5.0 `BETA`.

## Usage

```php
<div class="row">
	<div class="col-md-3">
		<?= keygenqt\panelCount\PanelCount::widget([
			'icon'      => 'fa fa-video-camera',
			'count'     => 155.50,
			'title'     => 'My title',
			'format'    => true,
		]) ?>
	</div>
	<div class="col-md-3">
		<?= keygenqt\panelCount\PanelCount::widget([
			'icon'      => 'fa fa-user',
			'count'     => 124.50 . ' $',
			'title'     => 'My title',
			'duration'  => 1000,
			'up'        => true,
			'color'     => 'cadetblue'
		]) ?>
	</div>
	<div class="col-md-3">
		<?= keygenqt\panelCount\PanelCount::widget([
			'icon'      => 'fa fa-users',
			'count'     => 19999,
			'title'     => 'My title',
			'up'        => false,
			'color'     => 'darkmagenta'
		]) ?>
	</div>
	<div class="col-md-3">
		<?= keygenqt\panelCount\PanelCount::widget([
			'count'     => 19999,
			'title'     => 'My title',
			'color'     => 'tomato'
		]) ?>
	</div>
</div>
```

## Screenshot

![Alt text](https://raw.githubusercontent.com/keygenqt/yii2-panel-count/master/screenshot/example.png?raw=true "Empty")

## License

**yii2-panel-count** is released under the BSD 3-Clause License. See the bundled `LICENSE.md` for details.


