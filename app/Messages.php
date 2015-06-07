<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model {          //should have named it Message (not in plural because Eloquent by default searches databases by taking plural of model name)
    protected $table = 'messages2';
	//

}
