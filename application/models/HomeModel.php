<?php
class HomeModel extends CI_Model{

    public function __construct()
    {
        $this->load->database();// loads the database


    }

    //Get for all games
    public function getGame()
    {
        //Select the values from the database that we need
        $query = $this->db->query("SELECT gameName,ReviewImage,slug FROM `activereviews`");
        return $query->result();// returns the results of the query

    }

  //  Get the details for a game once it has been clicked on.
    function getReview($slug)
    {
        if(!empty($slug)){// if the slug isnt empty

           $query = $this->db->get_where('activereviews', array('slug'=> $slug));// return all the information in the table on the row of the slug value
            return $query->result();
        }else{
            $this->db->select('*');
            $query =$this->db->get('activereviews');//else return all games
            return $query->results();
        }
        //var_dump($this->db->last_query());


    }
    function insertComment($username,$comment,$id){// inserts the comment witht the relevent ids
      $query = $this->db->query("INSERT INTO `gamescomments` (`UserName`, `ReviewID`,`UserComment`) VALUES ('$username', '$id', '$comment')");

    }
    public function getComments($id)
    {
        //Select the values from the database that we need
        $query = $this->db->query("SELECT UserName,UserComment FROM `gamescomments` WHERE ReviewID='$id' ");
        return $query->result();// returns the results of the query

    }





    function can_login($username, $password)// Checks top see if the user can login in by seeing if any rows match the username and password
    {
        $query = $this->db->query("SELECT * FROM `users` WHERE username='$username' AND UserPassword='$password'");
        if($query->num_rows() > 0)
        {
            return true;

        }
        else{

            return false;


        }
    }
    function can_signup($username, $password)//check to see if the username is in use by runnng a select query to find the username if no results are returned then the data is inserted
    {
        $query = $this->db->query("SELECT * FROM `users` WHERE username='$username'");
        if($query->num_rows() > 0)
        {
            return false;

        }
        else{
            $query = $this->db->query("INSERT INTO `users` (`UID`, `UserName`, `UserPassword`, `DarkMode`) VALUES (NULL, '$username', '$password', '0')");

            return true;


        }
    }
}
