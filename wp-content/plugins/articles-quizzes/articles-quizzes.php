<?php
/**
 * Plugin Name: Articles Quizzes
 * Description: Plugin for displaying a quizzes under the posts for registered users
 */

function display_quiz_function() {
    $quiz = '';

    if (is_user_logged_in()) {
        if (get_field('display')) {
            list (
                $question,
                $score,
                $answer1,
                $answer2,
                $answer3,
                $answer4,
                $current_selection
                ) = [
                get_field('question'),
                get_field('score'),
                get_field('answer_choice_1'),
                get_field('answer_choice_2'),
                get_field('answer_choice_3'),
                get_field('answer_choice_4'),
                get_field('current_answer') ?? '',
                ];

            $quiz .= "<div>Question: $question ($score points)</div>";

            $quiz .= "<ol id='answers'>
                        <li id='answer1'>$answer1 </li>
                        <li id='answer2'>$answer2 </li>
                        <li id='answer3'>$answer3 </li>
                        <li id='answer4'>$answer4 </li>
                     </ol>";

            if ($current_selection != ''): ?>
                <script>
                    document.addEventListener('DOMContentLoaded', function (event){
                        document.getElementById("answer<?php echo $current_selection ?>").innerHTML += '(current selection)';
                    })
                </script>
            <?php endif;
        }
    }

    return $quiz;
}
add_shortcode('display_quiz', 'display_quiz_function');
