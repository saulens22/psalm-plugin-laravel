--FILE--
<?php declare(strict_types=1);

use App\Models\User;

User::fakeQueryMethodThatDoesntExist();
?>
--EXPECTF--
UndefinedMagicMethod on line %d: Magic method App\Models\User::fakequerymethodthatdoesntexist does not exist
