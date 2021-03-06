<div class="form-section">
	<div class="row">
		<div class="col-md-6">

			<h2>Overview</h2>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Start Date</label>
						<?php $mb->the_field('start_date'); ?>
						<input class="datepicker" type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>End Date</label>
						<?php $mb->the_field('end_date'); ?>
						<input class="datepicker" type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label>Researchers</label>
				<?php $mb->the_field('researchers'); ?>
				<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
			</div>
			<div class="form-group">
				<label>Moderators</label>
				<?php $mb->the_field('moderators'); ?>
				<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
			</div>
			<div class="form-group">
				<?php $mb->the_field('description'); ?>
				<label>Description</label>
				<textarea class="ckeditor" name="<?php $mb->the_name(); ?>" rows="8"><?php $mb->the_value(); ?></textarea>
			</div>
		</div>
		<div class="col-md-6">
			<h2>Other Details</h2>
			<div class="form-group">
				<label>Product Design Team</label>
				<?php $mb->the_field('design_team'); ?>
				<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
			</div>
			<div class="form-group">
				<label>Product Management Team</label>
				<?php $mb->the_field('management_team'); ?>
				<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
			</div>
			<h2>Goals</h2>
			<?php while($mb->have_fields_and_multi('goals')): ?>
			<?php $mb->the_group_open(); ?>
			<div class="goal-repeatable">
				<div class="form-group">
					<label>Goal</label>
					<a href="#" class="dodelete icon">delete</a>
					<?php $mb->the_field('goal'); ?>
					<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
				</div>
			</div>
			<?php $mb->the_group_close(); ?>
			<?php endwhile; ?>

			<p style="margin-bottom:15px; padding-top:5px;"><a href="#" class="docopy-goals button">Add Goal</a></p>

		</div>
	</div>
</div>
