# Symla-CLI
Base structure for Joomla CLI scripts
Provides support classes for simplified CLI scripts development for Joomla

# 1. Install Dependencies
To work with this. You need to pull it via composer

```
composer require symla/cli
```

# 2. Let Joomla know about it
In your cli script you have to specify path to composer autoloader, copy bootstrap.php from cli folder to your cli folder
and require it in your cli script
```
require_once(__DIR__ . '/bootstrap.php');
```

# 3. Create CLI file
Now you can use simplified CLI bootstrap class like this:
```

use Symla\Joomla\Cli\ApplicationCli;

class SimplifiedCli extends ApplicationCli
{
	public function doExecute()
	{
		// do something useful
	}
}

ApplicationCli::getInstance('SimplifiedCli')->execute();
```