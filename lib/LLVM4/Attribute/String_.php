<?php declare(strict_types=1);
namespace PHPLLVM\LLVM4\Attribute;

use PHPLLVM\Attribute as CoreAttribute;
use PHPLLVM\LLVM4\Attribute;

class String_ extends Attribute implements CoreAttribute\String_ {

    public function getKind(): string {
        // Todo: need int_ptr class...
    }

    public function getValue(): string {
        // Todo: need int_ptr class...
    }

    public function isEnumAttribute(): bool {
        return false;
    }

    public function isStringAttribute(): bool {
        return true;
    }
    
}
