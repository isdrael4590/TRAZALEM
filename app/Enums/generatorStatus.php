<?php

namespace App\Enums;

enum generatorStatus:int
{
    case EN_CURSO=0;
    case VALIDADO=1;
    case RECHAZADO=2;
    case FALLA=3;

    public function label():string{
        return match($this){
            self::EN_CURSO => _('EN_CURSO'),
            self::VALIDADO  => _('VALIDADO'),
            self::RECHAZADO => _('RECHAZADO'),
            self::FALLA => _('FALLA'),
            
        };
    }
}