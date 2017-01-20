<?php
/**
 * Created by PhpStorm.
 * User: fregini
 * Date: 20/12/2016
 * Time: 10:17
 */

namespace Teams;

use DataAccess_AbstractDaoSilentStruct ;
use DataAccess_IDaoStruct ;

class TeamStruct extends DataAccess_AbstractDaoSilentStruct implements DataAccess_IDaoStruct {

    public $id ;
    public $name;
    public $created_by;
    public $created_at ;

}