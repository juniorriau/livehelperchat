<h1><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('department/new','New department');?></h1>

<?php if (isset($errors)) : ?>
	<?php include(erLhcoreClassDesign::designtpl('lhkernel/validation_error.tpl.php'));?>
<?php endif; ?>

<form action="<?php echo erLhcoreClassDesign::baseurl('departament/new')?>" method="post">
	<label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('department/edit','Name');?></label>
    <input type="text" name="Name"  value="<?php echo htmlspecialchars($departament->name);?>" />

    <?php if ($current_user->hasAccessTo('lhdepartament','manage_instance')) : ?>
    	<label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('department/edit','Instance ID');?></label>
    	<input type="text" name="InstanceID"  value="<?php echo htmlspecialchars($departament->instance_id);?>" />
	<?php endif;?>

    <ul class="button-group radius">
    <li><input type="submit" class="small button" name="Save_departament" value="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('department/new','Save');?>"/></li>
	<li><input type="submit" class="small button" name="Cancel_departament" value="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('department/new','Cancel');?>"/></li>
	</ul>

</form>
