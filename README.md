HC Widget for Yii2
======================

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require klxdr/yii2-hc-widget:~1.0
```
or add

```json
"klxdr/yii2-hc-widget" : "~1.0"
```

to the require section of your application's `composer.json` file.

Usage
-----
Read documentation firstly https://www.hypercomments.com/ru/documentation/

To display HC comments

```php
use klxdr\hc\Comments;

echo Comments::widget([
    'siteid' => WIDGET_ID,
    'identifier' => XID
]);
```

To render CommentsCount widget write:

```php
use klxdr\hc\CommentsCount;

CommentsCount::widget([
    'siteid' => WIDGET_ID,
    'identifier' => XID
]);
```
