<html>
<h1>Welcome to Bangalore University</h1>
<ul>
<?php
$json=file_get_contents('http://course-service');
$content=json_decode($json);
$courses=$content->courses;
foreach ($courses as $courseitem){
echo "<li>$courseitem</li>";
}
?>
</ul>
</html>

