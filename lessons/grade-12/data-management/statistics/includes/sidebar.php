<?php
$unitId = isset($stats_unit) ? $stats_unit : "unit1";
$catalog = stats_course_catalog();
$sidebarUnit = isset($catalog[$unitId]) ? $catalog[$unitId] : $catalog["unit1"];
?>
<div class="panel panel-default">
  <div class="panel-heading"><h5 class="text-center">Review these lessons:</h5></div>
  <div class="panel-body">
    <ul class="list-group">
      <?php foreach ($sidebarUnit["lessons"] as $sidebarLesson): ?>
        <li class="list-group-item"><a href="<?php echo stats_course_h($sidebarLesson["file"]); ?>"><?php echo stats_course_h($sidebarLesson["title"]); ?></a></li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading"><h5 class="text-center">Try these questions:</h5></div>
  <div class="panel-body">
    <ul class="list-group">
      <li class="list-group-item"><a href="<?php echo stats_course_h($sidebarUnit["review"]); ?>">Unit <?php echo $sidebarUnit["number"]; ?> Practice Questions</a></li>
    </ul>
  </div>
</div>
