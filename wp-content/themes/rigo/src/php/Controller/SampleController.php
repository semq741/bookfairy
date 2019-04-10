<?php
namespace Rigo\Controller;

use Rigo\Types\Course;
use Rigo\Types\Post;

class SampleController{
    
    public function getHomeData(){
        return [
            'name' => 'Rigoberto'
        ];
    }
    
    public function getDraftCourses(){
        $query = Course::all([ 'status' => 'draft' ]);
        return $query->post;
    }
    
    public function getDraftPost(){
        $query = Post::all([ 'status' => 'draft' ]);
        return $query->post;
    }
    
}
?>