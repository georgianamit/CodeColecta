<?php
include_once('class.database.php');

class ManagePosts
{
  public $link;
  function __construct()
  {
    $db_connection = new dbConnection();
    $this->link=$db_connection->connect();
    return $this->link;
  }

  function uploadPost($post_title,$post_content,$userid,$upload_time){
    $query = $this->link->prepare("INSERT INTO post (post_title,post_content,userid,upload_time) VALUES (?,?,?,?)");
    $values = array($post_title,$post_content,$userid,$upload_time);
    $query->execute($values);
    $counts = $query->rowCount();
    return $counts;
  }

  function updatePost($username){

  }

  function getTrendingPost(){
    $query=$this->link->query("SELECT * FROM post");
    $rowcount = $query->rowCount();
    if($rowcount != 0){
      $result=$query->fetchAll();
      return $result;
    }else{
      return $rowcount;
    }
  }

  function getPostContent($userid){
    $query=$this->link->query("SELECT * FROM post WHERE userid = '$userid'");
    $rowcount = $query->rowCount();
    if($rowcount != 0){
      $result=$query->fetchAll();
      return $result;
    }else{
      return $rowcount;
    }
  }
}
?>
