<?php $user_id = get_current_user_id(); ?>
<?php if ( ($user_id == 0 || current_user_can( 'read_answers', 0 )) && is_question_answered() ) { ?>
	<div id="answer-list">
		<h2><?php the_answer_count(); ?></h2>
		<?php the_answer_list(); ?>
	</div>
<?php } ?>
<?php if ( $user_id == 0 || current_user_can( 'publish_answers', 0 ) ) { ?>
	<div id="edit-answer">
		<h2><?php _e( 'Your Answer', QA_TEXTDOMAIN ); ?></h2>
		<?php the_answer_form(); ?>
	</div>
<?php } ?>

<p><?php the_question_subscription(); ?></p>