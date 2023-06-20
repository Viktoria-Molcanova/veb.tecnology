<?php
// Опыт работы
$job = [
'job_Name' => ['GB', 'Виктория Молчанова', 'Стоматология'],
'job_Data' => ['2018-2023гг.'],
'job_Desc' => ['Ассистент стоматолога', 'Медсетра']
]
?>

<div class="w3-container w3-card w3-white w3-margin-bottom">
<h2 class="w3-text-grey w3-padding-16"><i
class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
<div class="w3-container">
<h3 class="w3-opacity"><b>
<?php echo $job['job_Name'][0]; ?>
</b></h3>
<h5 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
<?php echo $job['job_Data'][0]; ?>
</h5>
<p>
<?php echo $job['job_Desc'][0]; ?>
</p>
<hr>
</div>
<div class="w3-container">
<h5 class="w3-opacity"><b>
<?php echo $job['job_Name'][1]; ?>
</b></h5>
<h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
<?php echo $job['job_Data'][1]; ?>
</h6>
<p>
<?php echo $job['job_Desc'][1]; ?>
</p>
<hr>
</div>
<div class="w3-container">
<h5 class="w3-opacity"><b>
<?php echo $job['job_Name'][2]; ?>
</b></h5>
<h5 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
<?php echo $job['job_Data'][2]; ?>
</h5>
<p>
<?php echo $job['job_Desc'][2]; ?>
</p><br>
</div>
</div>
