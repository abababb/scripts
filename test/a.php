<?php
$people = new ArrayIterator(array('John', 'Jane', 'Jack', 'Judy'));
$roles = new ArrayIterator(array('Developer', 'Scrum Master', 'Project Owner'));

$team = new MultipleIterator();
$team->attachIterator($people, 'person');
$team->attachIterator($roles, 'role');

foreach ($team as $member) {
    print_r($member);
}
?>
