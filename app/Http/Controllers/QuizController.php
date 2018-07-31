<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{


    
    public function create()
    {
         
        return view('lessons.aaquiz');
    }


    public function check( )
    {




         
        //check to see id score is set_error_handler
        if(!isset($_SESSION['score'])){
            $_SESSION['score'] = 0;
        }

        if($_POST){
            $number = $POST['number'];
            $selected_choice = $_POST['choice'];
            $next = $number+1;

            //get total questions
            $query = "SELECT * FROM `questions`";
            //get results
            $results= $mysqli->query($query) or die ($mysqli->error.__LINE__);
            $total= $results->num_rows;
            //get correct choice
            $query= "SELECT * FROM `choices` WHERE question_number = $number AND is_correct= 1";
            //get result
            $result= $mysqli->query($query) or die ($mysqli->error.__LINE__);
            //get row
            $row = $result->fetech_assoc();
            //set correct choice 
            $correct_choice = $row['id'];
            //compare
            if($correct_choice ==$selected_choice){
                //answer is correct
                $_SESSION['score']++;
            }
            //check if last question
            if($number == $total){
                header("Location: aafinal");
                exit();
            }else{
                header("Location: aaquiz?n=".$next);
            }

        }

        

    }


    public function store(Request $request)
    {
         
        

        //create post
        $post = new Post;
        $post->title = $request ->input('title');
        $post->body = $request ->input('body');
        $post->user_id= auth()->user()->id;
        $post->cover_image= $fileNameToStore;

        $post->save();

        return redirect('/posts')->with('success', 'Post Created');

    }
}
