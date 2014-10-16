<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
	global $q;
    global $rand_keys;
    $q = array(
    1 => array( "question" => "At a party do you:",
                            "A" => "  Interact with many,including strangers",
                            "B" => "  Interact with a few,know to you"
                            ),

    2 => array( "question" => "Are you more:",
                            "A" => "  Realistic than speculative", 
                            "B" => "  Speculative than realistic"
                            ), 
                
    3 => array( "question" => "Is it worse to:", 
                                "A" => "  Have your 'head in the clouds'", 
                                "B" => "  Be 'in a rut'"
                            ),
                
    4 => array( "question" => "Are you more impressed by:", 
                                "A" => "  Principles", 
                                "B" => "  Emotions"
                            ),

    5 => array( "question" => "Are more drawn toward the:", 
                            "A" => "  Convincing", 
                            "B" => "  Touching"
                            ), 

    6 => array( "question" => "Do you prefer to work:", 
                            "A" => "  To deadlines", 
                            "B" => "  Just 'whenever'"
                            ), 

    7 => array( "question" => "Do you tend to choose:", 
                            "A" => "  Rather carefully", 
                            "B" => "  Somewhat impulsively"
                            ), 

    8 => array( "question" => "At party do you:", 
                            "A" => "  Stay late,with increasing energy", 
                            "B" => "  Leave early with decreased energy"
                            ), 

    9 => array( "question" => "Are you more attracted to:", 
                            "A" => "  Sensible people", 
                            "B" => "  Imaginative people"
                            ),

    10 => array( "question" => "Are you more interested in:", 
                            "A" => "  What is actual", 
                            "B" => "  What is possible"
                            ),

    11 => array( "question" => "In judging others are you more swayed by:", 
                            "A" => "  Laws than circumstances", 
                            "B" => "  Circumstances than laws"
                            ),

    12 => array( "question" => "In approaching others is your inclination to be somewhat:", 
                            "A" => "  Objective", 
                            "B" => "  Personal"
                            ),

    13 => array( "question" => "Are you more:", 
                            "A" => "  Punctual", 
                            "B" => "  Leisurely"
                            ),

    14 => array( "question" => "Does it bother you more having things:", 
                            "A" => "  Incomplete", 
                            "B" => "  Completed"
                            ), 

    15 => array( "question" => "Is your social groups do you:", 
                            "A" => "  Keep abreast of other's happenings", 
                            "B" => "  Get behind on the news"
                            ), 

    16 => array( "question" => "In doing ordinary things are you more likely to:", 
                            "A" => "  Do it the usual way", 
                            "B" => "  Do it your own way"
                            ), 

    17 => array( "question" => "Writers should:", 
                            "A" => "  'Say what they mean and what they say'", 
                            "B" => "  Express things more by use of analogy"
                            ), 

    18 => array( "question" => "Which appeals do you more:", 
                            "A" => "  Consistency of thought", 
                            "B" => "  Harmonious human relationships"
                            ), 

    19 => array( "question" => "Are you more comfortable in making:", 
                            "A" => "  Logical judgements", 
                            "B" => "  Value judgements"
                            ), 

    20 => array( "question" => "Do you want things:", 
                            "A" => "  Settled and decided", 
                            "B" => "  Unsettled and undecided"
                            ),

    21 => array( "question" => "Would you say you are more:", 
                            "A" => "  Serious and determined", 
                            "B" => "  Easy-going"
                            ), 

    22 => array( "question" => "In phoning do you:", 
                                "A" => "  Rarely question that it will all we said", 
                                "B" => "  Rehearse what you'll say"
                            ), 

    23 => array( "question" => "Facts:", 
                            "A" => "  Speak for themselves", 
                            "B" => "  Illustrate principles"
                            ), 

    24 => array( "question" => "Are visionaries:", 
                            "A" => "  Somewhat annoying", 
                            "B" => "  Rather fascinating"
                            ),

    25 => array( "question" => "Are you more often:", 
                            "A" => "  A cool-headed person", 
                            "B" => "  A warm-hearted person"
                            ), 

    26 => array( "question" => "Is it worse to be:", 
                            "A" => "  Unjust", 
                            "B" => "  Merciless"
                            ), 
    27 => array( "question" => "Should one usually let events occur:", 
                            "A" => "  By careful selection and choice", 
                            "B" => "  Randomly and by chance"
                            ), 

    28 => array( "question" => "Do you feel better about:", 
                            "A" => "  Having purchased", 
                            "B" => "  Having the option to buy"
                            ), 

    29 => array( "question" => "In company do you:", 
                            "A" => "  Initiate conversation", 
                            "B" => "  Wait to be approached"
                            ), 

    30 => array( "question" => "Common sense is:", 
                            "A" => "  Rarely questionable", 
                            "B" => "  Frequently questionable"
                            ), 

    31 => array( "question" => "Children often do not:", 
                            "A" => "  Make themselves useful enough", 
                            "B" => "  Exercise their fantasy enough"
                            ),

    32 => array( "question" => "In making decisions do you feel more comfortable with:", 
                            "A" => "  Standards", 
                            "B" => "  Feelings"
                            ),

    33 => array( "question" => "Are you more :",
                            "A" => "  Firm than gentle",
                            "B" => "  Gentle than firm"
                            ),

    34 => array( "question" => "Which is more admirable:", 
                            "A" => "  The ability to organize and to be methodical", 
                            "B" => "  The ability to adapt and make do"
                            ),

    35 => array( "question" => "Do you put more value on:", 
                            "A" => "  Infinite", 
                            "B" => "  Open-minded"
                            ),

    36 => array( "question" => "Does new and non-routine interaction with others:", 
                            "A" => "  Stimulate and energize you", 
                            "B" => "  Tax your reserves"
                            ), 

    37 => array( "question" => "Are you more frequently :",
                            "A" => "  A practical sort of person",
                            "B" => "  A fanciful sort of person"
                            ),

    38 => array( "question" => "Are you more likely to:", 
                            "A" => "  See how others are useful", 
                            "B" => "  See how others see"
                            ),

    39 => array( "question" => "Which is more satisfying :", 
                            "A" => "  To discuss an issue thoroughly", 
                            "B" => "  To arrive at agreement on an issue"
                            ),

    40 => array( "question" => "Which rules you more :", 
                            "A" => "  Your head", 
                            "B" => "  Your heart"
                            ),

    41 => array( "question" => "Are you more comfortable with work that is :", 
                            "A" => "  Contracted", 
                            "B" => "  done on a casual basis"
                            ),

    42 => array( "question" => "Do you tend to look for :" , 
                            "A" => "  The orderly", 
                            "B" => "  Whatever turns up"
                            ),

    43 => array( "question" => "Do you prefer : ", 
                            "A" => "  Many friends with brief contact", 
                            "B" => "  A few friends with more lengthly contact"
                            ),

    44 => array( "question" => "Do you go more by :", 
                            "A" => "  Facts", 
                            "B" => "  Principles"
                            ),

    45 => array( "question" => "Are you more interested in :", 
                            "A" => "  Production and Distribution", 
                            "B" => "  Design and Research"
                            ),

    46 => array( "question" => "Which is more of a compliment:", 
                            "A" => "  'There is a very logical person'", 
                            "B" => "  'There is a very sentimental person'"
                            ),

    47 => array( "question" => "Do you value in yourself more than you are:",         
                            "A" => "  Unwavering", 
                            "B" => "  Devoted"
                            ), 

    48 => array( "question" => "Do you more often prefer the:", 
                            "A" => "  Final and unalterable statement", 
                            "B" => "  Tentative and preliminary statement"
                            ), 

    49 => array( "question" => "Are you more comfortable:", 
                            "A" => "  After a decision", 
                            "B" => "  Before a decision"
                            ), 

    50 => array( "question" => "Do you:", 
                            "A" => "  Speak easily and at length with strangers", 
                            "B" => "  Find little to say to strangers"
                            ), 

    51 => array( "question" => "Are you more likely to trust your:", 
                            "A" => "  Experience", 
                            "B" => "  Hunch"
                            ), 

    52 => array( "question" => "Do you feel:", 
                            "A" => "  More practical than ingenious", 
                            "B" => "  More ingenious than practical"
                            ),

    53 => array( "question" => "Which person is more to be complicated one of:", 
                            "A" => "  Clear reason", 
                            "B" => "  Strong feeling"
                            ),         

    54 => array( "question" => "Are you inclined more to be:", 
                            "A" => "  Fairly-minded", 
                            "B" => "  sympathetic"
                            ),

    55 => array( "question" => "Is it preferable mostly to:", 
                            "A" => "  Make sure things are arranged", 
                            "B" => "  Just let things happen"
                            ),

    56 => array( "question" => "In relationships should most things be:", 
                            "A" => "  Re-negotiable", 
                            "B" => "  Random and circumstantial"
                            ), 

    57 => array( "question" => "When the phone rings do you:",         
                            "A" => "  Hasten to get it first", 
                            "B" => "  Hope someone else will answer"
                            ), 

    58 => array( "question" => "Do you prize more in yourself:", 
                            "A" => "  A strong sense of reality", 
                            "B" => "  A vivid imagination"
                            ), 

    59 => array( "question" => "Are you drawn more to:", 
                            "A" => "  Fundamentals", 
                            "B" => "  Overtones"
                            ), 

    60 => array( "question" => "Which seems the greater error:", 
                            "A" => "  To be too passionate", 
                            "B" => "  To be too objective"
                            ), 

    61 => array( "question" => "Do you see yourself as basically:", 
                            "A" => "  Hard-hearted", 
                            "B" => "  Soft-hearted"
                            ), 

    62 => array( "question" => "Which situation appeals to you more:", 
                            "A" => "  The structured and scheduled", 
                            "B" => "  The unstructured and unscheduled"
                            ), 

    63 => array( "question" => "Are you a person that is more:", 
                            "A" => "  Routinised than whimsical", 
                            "B" => "  Whimsical than routinised"
                            ), 

    64 => array( "question" => "Are you more inclined to be:", 
                            "A" => "  Easy to approach", 
                            "B" => "  Somewhat reserved"
                            ),

    65 => array( "question" => "In writings do you prefer:", 
                            "A" => "  The more literal", 
                            "B" => "  The more figurative"
                            ), 

    66 => array( "question" => "Is it harder for you to:", 
                            "A" => "  Identify with others", 
                            "B" => "  Utilize others"
                            ), 

    67 => array( "question" => "Which do you wish more for yourself:", 
                            "A" => "  Clarity of reason", 
                            "B" => "  Strength of compassion"
                            ),

    68 => array( "question" => "Which is the greater fault:", 
                            "A" => "  Being indiscriminate", 
                            "B" => "  Being critical"
                            ), 

    69 => array( "question" => "Do you prefer the:", 
                            "A" => "  Planned event", 
                            "B" => "  Unplanned event"
                            ), 

    70 => array( "question" => "Do you tend to be more:", 
                            "A" => "  Deliberate than spontaneous", 
                            "B" => "  Spontaneous than deliberate"
                            ),
    );
?>s

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Personality check</title>
    <link rel="stylesheet" href="resource/index.css">

    <script type="text/javascript" src="jquery-2.1.0.min.js"></script>
    
    <link rel="stylesheet" href="resource/bootstrap.min.css">

    
    <link rel="stylesheet" href="resource/bootstrap-theme.min.css">


    <script src="resource/bootstrap.min.js"></script>
    <script type="text/javascript">
  // alert("If you don't know the answer you can skip them.
  //        \nbut beware the more you answer the more accurate the result will be. \nhave fun!")

$(document).ready(function(){
    $("#jumbotron1").show();
    $(".radio").hide();
});

</script>
  
</head>
<body>

<?php

    shuffle($q);
    echo "<Form name='form1' Method='Post' ACTION='result.php'>"; 
    for ($i=1; $i < 61; $i++) { 
        echo "<div class='jumbotron' id=jumbotron".$i.">";
        echo    "<h1>".$q[$i]["question"]."</h1>";
        echo "</br>";
        echo "<input type='radio' class='radio' name='test".$i."' value='A' id='testa".$i."'></input> <input type='button' class='btn btn-lg btn-primary  ans' id='btnansa".$i."' value='".$q[$i]["A"]."' data-radio='testa".$i."'></input>";
        echo "<br />";
        echo "<br />";
        echo "<input type='radio' class='radio' name='test".$i."' value='B' id='testb".$i."'></input> <input type='button' class='btn btn-lg btn-primary  ans' id='btnansb".$i."' value='".$q[$i]["B"]."' data-radio='testb".$i."'></input>";
        echo "</div>";  

        
    }
    echo "<div class='btn-group' id='btndiv'>";
    echo "<button type='Submit' class='btn btn-lg btn-danger' id='sub'>Submit</button>";
    echo "</div>";
    echo "</Form>";


?>
 
</body>

  <script type="text/javascript">   
  var count = 0;
  var newslide = 1;
  $(".ans").click(function(){
    count++
    newslide++
    var rcall= $(this).data("radio");
    $("#"+rcall).prop("checked", true);
   $(".jumbotron").hide();
   $("#jumbotron" + newslide).slideDown();
   
   } );
  </script>





</html>