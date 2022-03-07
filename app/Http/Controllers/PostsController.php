<?php
namespace App\Http\Controllers;

class PostsController extends Controller
{
   public  $data =[
    ["id"=>1, "title"=>"Java","desc"=>"lorem 1"],
    ["id"=>2, "title"=>"PHP","desc"=>"lorem 2"],
    ["id"=>3, "title"=>"C#","desc"=>"lorem 3"],
    ["id"=>4, "title"=>"Python","desc"=>"lorem 4"],
    ["id"=>5, "title"=>"Node.js","desc"=>"lorem 5"],
    ["id"=>6, "title"=>"C","desc"=>"lorem 6"]
];

    function posts(){
        return view("homepage",["posts"=>$this->data]);
    }

    function viewpost($id){
        foreach ($this->data as $post)
        {
            if ($post["id"]==$id){return view("viewpost",["post"=>$post]);}
        }
     return NULL ; 
    }

    function add(){
        return view("addpage");
    }
                
         
    function update($id){
        foreach ($this->data as $post)
        {
            if ($post["id"]==$id){
                return view("updatepage",["post"=>$post]);
                
            }
        }
     return NULL ; 
}

}