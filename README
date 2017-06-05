Installation via composer
====================


```

composer require 'somesh/php-query'

```

or add 'somesh/php-query' as a dependency in composer.json

I added a composer.json and autoloaded the php file so that it can be setup using composer directly. This doesn't  use psr-0 autoloading

Using phpQuery


```php

 $doc = phpQuery::newDocumentHTML($markup); 
 $doc = phpQuery::newDocumentXML();
 $doc = phpQuery::newDocumentFileXHTML('test.html'); 
 $doc = phpQuery::newDocumentFilePHP('test.php'); 
 $doc = phpQuery::newDocument('test.xml', 'application/rss+xml'); 
 $doc = phpQuery::newDocument('<div/>');
//Manipulating
$doc['ul > li'] ->addClass('my-new-class') 
//For more information about usage, visit the code.google.com/p/phpquery pahe

```

Description from https://github.com/punkave/phpQuery

This is phpQuery, a PHP port of jQuery selectors, super useful for DOM traversal 
and functional testing.

It is originally by **Tobiasz Cudnik:**

http://code.google.com/p/phpquery/

And was released under the MIT license.

We've cloned it into github because no issues have been fixed upstream in the 
last two years and we needed to fix a bug relating to the serialize()
method to get our functional tests to work. You can find our github
repository here:

https://github.com/punkave/phpQuery

"What did you fix?" 

Our initial commit includes a fix for the serialize() method, crucial to do 
form submissions (a big deal for functional testing). See the commit history
in github for any later changes.

- P'unk Avenue
