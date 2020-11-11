<?php 

namespace App\Repositories\SchoolSetup;

use App\SchoolSetup\Branch;
	
class BranchRepository
{
    protected $branch;

    public function __construct()
    {
    	$this->branch = new Branch;
    }

    public function all()
    {
    	return $this->branch->all();
    }
}
 ?>