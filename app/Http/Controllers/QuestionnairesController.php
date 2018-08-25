<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


use App\Category;
use App\Level;

use DB;
use App\User;
use App\Questionnaire;

class QuestionnairesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function dashdash()
     {
       // $questionnaires ="SELECT questions.question_id,questions.question_name, questions.question_image, questions.choice1, questions.choice2, questions.choice3, questions.choice4, questions.choice5, categorys.category_name, levels.level_name
       //    FROM `questionnaires`
       //    INNER JOIN `categorys` ON questionnaires.category_id= categorys.category_id
       //    INNER JOIN `levels` ON questionnaires.level_id= levels.level_id
       //    INNER JOIN `questions` ON questionnaires.question_id= questions.question_id";
       //    return view('questionnaires_menu')->with('questionnaires',$questionnaires);

          // $questionnaires = Questionnaire::orderBy('questionnaire_id' )->paginate(1); // paginate by 1 . 1 post per page.
          // return view('questionnaires_menu')->with('questionnaires',$questionnaires);
          // $questionnaires = Questionnaire::select('select * from `questionnaires` where id = ?', [1]);
          //
          //
          //       return view('questionnaires_menu')->with('questionnaires',$questionnaires);
          //
                  // $questionnaires ="SELECT questions.question_id,questions.question_name, questions.question_image, questions.choice1, questions.choice2, questions.choice3, questions.choice4, questions.choice5, categorys.category_name, levels.level_name
                  //    FROM `questionnaires`
                  //    INNER JOIN `categorys` ON questionnaires.category_id= categorys.category_id
                  //    INNER JOIN `levels` ON questionnaires.level_id= levels.level_id
                  //    INNER JOIN `questions` ON questionnaires.question_id= questions.question_id";
                  //    return view('questionnaires_menu')->with('questionnaires',$questionnaires);

                     // $questionnaires = Questionnaire::orderBy('questionnaire_id' )->paginate(1); // paginate by 1 . 1 post per page.
                     // return view('questionnaires_menu')->with('questionnaires',$questionnaires);
                     // $questionnaires = Questionnaire::select('select * from `questionnaires` where id = ?', [1]);
                     $questionnaires =DB::select( DB::raw("SELECT questionnaires.*, categorys.category_name, levels.level_name , levels.level_image FROM `questionnaires`
                       inner join `levels`
                       on questionnaires.level_id=levels.level_id
                       inner join `categorys`
                       on questionnaires.category_id=categorys.category_id
                        "));
                      return view('questionnaires_menu')->with('questionnaires',$questionnaires);


// DB::select( DB::raw("SELECT p.* FROM `rent_properties` p
//   inner join levels l
//   on p.level_id=l.level_id  "));



     }


     public function  getquestion()
      {
         $questionnaires ="SELECT questions.question_id,questions.question_name, questions.question_image, questions.choice1, questions.choice2, questions.choice3, questions.choice4, questions.choice5, categorys.category_name, levels.level_name
            FROM `questionnaires`
            INNER JOIN `categorys` ON questionnaires.category_id= categorys.category_id
            INNER JOIN `levels` ON questionnaires.level_id= levels.level_id
            INNER JOIN `questions` ON questionnaires.question_id= questions.question_id";
          $results= DB::select($questionnaires);
          $results = json_decode(json_encode($results), true);
          for($i = 0; $i < count($results); $i++) {
            $results[$i]['choice1'] = json_decode($results[ $i]['choice1']);
            $results[$i]['choice2'] = json_decode($results[$i]['choice2']);
            $results[$i]['choice3'] = json_decode($results[$i]['choice3']);
            $results[$i]['choice4'] = json_decode($results[$i]['choice4']);
            $results[$i]['choice5'] = json_decode($results[$i]['choice5']);
        }
        return ($results);
        return view('questionnaires.quiz')->with($results);
      }

     public function dashboard()
     {
       $questionnaires = Questionnaire::orderBy('questionnaire_id' )->paginate(1); // paginate by 1 . 1 post per page.
       return view('questionnaires.dashboard')->with('questionnaires', $questionnaires);
     }

    public function index()
    {
        $questionnaires = Questionnaire::orderBy('questionnaire_id' )->paginate(1); // paginate by 1 . 1 post per page.
        return view('questionnaires.index')->with('questionnaires', $questionnaires);
    }

    public function menu()
    {
      $questionnaires = Questionnaire::orderBy('questionnaire_id' )->paginate(10); // paginate by 1 . 1 post per page.
      return view('questionnaires_menu')->with('questionnaires', $questionnaires);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


        // $projects = Category::orderBy('category_name' )->paginate(10); // paginate by 1 . 1 post per page.
        // return view('questionnaires.create')->with('categorys', $projects);

        $categoryDropDown = Category::pluck('category_name', 'category_id');
        $levelDropDown = Level::pluck('level_name', 'level_id');
        return view('questionnaires.create', compact('categoryDropDown','levelDropDown'));

    }
    public function create2()
    {
        //

        // $projects = Category::orderBy('category_name' )->paginate(10); // paginate by 1 . 1 post per page.
        // return view('questionnaires.create')->with('categorys', $projects);




    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
