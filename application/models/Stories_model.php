<?php

/*
 *
 * Stories Model
 *
 */
defined('BASEPATH') OR exit('Forbidden');

class Stories_model extends CI_Model {

/* These are 3 "stories" that would normally be stored in a database. We are
 * faking a database retrival by simply putting the stories here in private
 * class attributes. Normally this would not be be here and you'd have to
 * query the database to get this information. */


        private $story1 = ["id"=>1, "title"=>"This is my story", "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur."];
        
        private $story2 = ["id"=>2, "title"=>"This is another story", "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur."];
        
        private $story3 = ["id"=>3, "title"=>"This is a third story", "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur."];
 


    function __construct() {
        parent::__construct();
    }

    /*
     * **********************************
     * Setters
     * **********************************
     */

    public function get_story($id) {
    
        /* Pretend you access a database and pull up a single "story" by it's id.
         * That story will be in an associative array like you see above. */

        /* this is NOT the way to this, this is just simulating pulling the correct
          story from the database. This is where you normally write your db query*/
        if($id == 1) {
            $story = $this->story1;
        } else if($id == 2){
            $story = $this->story2;
        } else {
            $story = $this->story3;
        }
        
        // send the story array back to the controller
        return $story;
    }

    public function get_stories() {
         /* Pretend you access a database and pull up multiple "stories"
         * which are each composed of an id, title, and text. That will be
         * in an array of associatives array like you see above. */
    
        /* this is NOT the way to this, this is just simulating pulling all the
          stories from the database. This is where you normally write your db query*/

        // put all stories in a single array to fake getting them from a database
        $stories = [$this->story1, $this->story2, $this->story3];
        
        // send the stories array of arrays back to the controller
        return $stories;
   }

}
