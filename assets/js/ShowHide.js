/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var appended_question="<div id='OpendEnded'><div class='form-group'><label for='exampleInputEmail1'>Answer</label><textarea name='answer1' class='form-control' id='exampleInputEmail1' placeholder='Question' required></textarea></div>";
var appended_option='<div id="Options"> <div class="form-group"> <label for="option1">Option 1</label> <input type="text" name="option1" class="form-control" id="exampleInputPassword1" placeholder="Option 1" required> </div> <div class="form-group"> <label for="option2">Option 2</label> <input type="text" name="option2" class="form-control" id="exampleInputPassword1" placeholder="Option 2" required> </div> <div class="form-group"> <label for="option3">Option 3</label> <input type="text" name="option3" class="form-control" id="exampleInputPassword1" placeholder="Option 3" required> </div> <div class="form-group"> <label for="option4">Option 4</label> <input type="text" name="option4" class="form-control" id="exampleInputPassword1" placeholder="Option 4" required> </div> <hr/> <div class="form-group"> <label for="Answer">Correct Answer</label><br/> <label class="radio-inline"> <input type="radio" value="option1" name="answer" checked="checked"> Option 1 </label> <label class="radio-inline"> <input type="radio" value="option2" name="answer"> Option 2 </label> <label class="radio-inline"> <input type="radio" value="option3" name="answer"> Option 3 </label> <label class="radio-inline"> <input type="radio" value="option4" name="answer"> Option 4 </label> </div> </div>';
$( "#OpenEndedQuestions" ).click(function() {
    
  $("#Options").fadeOut(700, function() { $( "#Options" ).remove(); 
  $("#OpenEndedMultipleQuestionsAppended").append(appended_question);
  });
  //$( "#Options" ).hide('slow', $( "#Options" ).remove());
  
});
$( "#MultipleChoiceQuestions" ).click(function() {
    $("#Options").fadeOut(700, function() {
  $( "#OpendEnded" ).remove();
  $("#OpenEndedMultipleQuestionsAppended").append(appended_option);
  });
  
});

