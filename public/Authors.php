<?php
use Luracast\Restler\RestException;

class Authors
{
	

    function index()
    {
        return array(
        array('id' => 1, 'name' => 'Jac Wright',
        'email' => 'jacwright@gmail.com'),
        array('id' => 2, 'name' => 'Arul Kumaran',
        'email' => 'arul@luracast.com'));
    }

    /**
     * @param int $id
     *
     * @return array
     */
    function get($id)
    {
        $all = array(
        array('id' => 1, 'name' => 'Jac Wright',
        'email' => 'jacwright@gmail.com'),
        array('id' => 2, 'name' => 'Arul Kumaran',
        'email' => 'arul@luracast.com')); 
    	$r = $all[$id];
        if ($r === false)
            throw new RestException(404);
        return $r;
    }

}

