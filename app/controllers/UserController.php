<?php

class UserController extends Controller {


    private $users;


    public function __construct(UserInterface $users)
    {
        $this->user = $users;
    }


	public function showUserGroupByCity()
	{
		$users  = $this->user->groupByCity();
        $status = $this->user->getDictionary('status');

        return View::make('user.index', compact('users', 'status'));
	}


	public function showUserGroupByDepartment()
	{
		$users  = $this->user->groupByDepartment();
        $status = $this->user->getDictionary('status');

        return View::make('user.index', compact('users', 'status'));
	}

}
