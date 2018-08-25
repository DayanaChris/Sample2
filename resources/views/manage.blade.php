@extends('layouts.app')

@section('content')

   <div class="container" style="margin-top:20px">
     <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="card">
                 <div class="card-header">MANAGE</div>

                 <div class="card-body">
                     @if (session('status'))
                         <div class="alert alert-success" role="alert">
                             {{ session('status') }}
                         </div>
                     @endif

                     <div class="panel-body">
                         <h3>Manage Category</h3>
                         <table class="table table-striped">
                             <tr>
                                 <th>PARTS</th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>



                             </tr>
                                 <tr>
                                     <td>MANAGE CATEGORY</td>
                                     <td><a href="./categorys/create" class= "btn btn-primary"> create</a></td>
                                     <td>  <a href="./categorys" class= "btn btn-primary"> manage</a></td>
                                     <td>  <a href="./categorys.dashboard" class= "btn btn-primary"> LIST VIEW</a></td>
                                     <td> <a href="./category_menu" class= "btn btn-primary"> Category Menu</a></td>


                                 </tr>
                                 <tr>
                                     <td>MANAGE LEVEL </td>
                                     <td><a href="./levels/create" class= "btn btn-primary"> create</a></td>
                                     <td>  <a href="./levels" class= "btn btn-primary"> manage</a></td>
                                     <td>  <a href="./levels.dashboard" class= "btn btn-primary"> LIST VIEW</a></td>
                                     <td> <a href="./level_menu" class= "btn btn-primary"> LEVEL Menu</a></td>


                                 </tr>
                                 <tr>
                                     <td>MANAGE Questionnaire- TO FOLLOW</td>
                                     <td><a href="./questionnaires/create" class= "btn btn-primary"> create</a></td>
                                     <td>  <a href="./questionnaires" class= "btn btn-primary"> manage</a></td>
                                     <td>  <a href="./questionnaires.dashboard" class= "btn btn-primary"> LIST VIEW</a></td>
                                     <!-- <td> <a href="./level_menu" class= "btn btn-primary"> LEVEL Menu</a></td> -->
                                     <td> <a href="./questionnaires.getquestion" class= "btn btn-primary"> Get Questions Json file</a></td>


                                 </tr>


                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>
   </div>

   @endsection
