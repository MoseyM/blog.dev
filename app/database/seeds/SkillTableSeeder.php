$table->increments('id');
			$table->string('skill')->unique();
			$table->float('level');
			$table->timestamps();

<?php 

class SkillTableSeeder extends DatabaseSeeder
{
	public function run()
	{
		$skill = new Skill();
		$skill->skill = "PHP";
		$skill->level = 0.75;
		$skill->save();
	}
}