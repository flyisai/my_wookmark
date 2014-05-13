<?php
$raw_post_data = file_get_contents('php://input', 'r');
$data = json_decode($raw_post_data);
$test->per_page = 20;
$test->page_num = $data->next_page;
for($i=0;$i<20;$i++)
{
	$list[$i]->image_path = '';
	$list[$i]->thumbnail_path = 'image_' . ($i+1+20*($test->page_num-1)) . '.jpg';
	$list[$i]->likes = '';
	$list[$i]->weibo_link = '';
}
echo json_encode($list);
?>