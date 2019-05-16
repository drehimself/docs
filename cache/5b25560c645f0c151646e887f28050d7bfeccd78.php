---
title: Installation
description: todo
extends: _layouts.documentation
section: content
---

Livewire has both a PHP component AND a Javascript component. You need to make sure both are available in your project before you can use it.

## Step 1: Include the PHP
```bash
composer require calebporzio/livewire
```

## Step 2: Include the JavaScript
You can either include the JavaScript via the provided Blade helper (easiest), or include it via NPM if you have a build pipeline for your JavaScript.

### Option A) Blade Snippet

<div title="Component"><div title="Component__class"><div char="fade">

```html
    ...
```
</div>

```php
    <?php echo Livewire::scripts(); ?>

```
<div char="fade">

```html
</body>
</html>
```
</div></div></div>

<div title="Warning"><div title="Warning__content">

Including the JavaScript this way will result in the JavaScript being loaded directly on the page. This should be used for experimentation only. Option B will utilize the browser's caching to reduce page sizes and a faster overall experience.
</div></div>

### Option B) install via NPM

```bash
npm install laravel-livewire --save-dev
```

```js
import Livewire from 'laravel-livewire'

window.livewire = new Livewire
```
<?php /**PATH /Users/calebporzio/Documents/Code/sites/livewire-docs/cache/4452576f7252b688a011c64d1611e544ac563a0b.blade.md ENDPATH**/ ?>