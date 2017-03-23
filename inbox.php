<?php 
include 'inc/header.php'; 
	echo '<div class="message-container">';
for ($i=0; $i < 12; $i++) { ?>  

	<div class="row" name="message-line">
		<div class="col-md-4 checkbox">
			<input type="checkbox" name="checkbox <?php echo $i;?>" id="checkbox <?php echo $i;?>">
		</div>


		<div class="part m" name="sender <?php echo $i;?>" id="sender <?php echo $i;?>">
			<?php echo "sender name ".$i; ?>
		</div>
		<div class="part subject" name="subject <?php echo $i;?>" id="subject <?php echo $i;?>">
			<?php echo "sender subject ".$i; ?>
		</div>
		<div class="part date" name="date <?php echo $i;?>" id="date <?php echo $i;?>">
			<?php echo strftime('%e %B %Y om %H:%M',time()); ?>
		</div>		
	</div>

<?php  }
echo '</div>';

include 'inc/footer.php'; ?>