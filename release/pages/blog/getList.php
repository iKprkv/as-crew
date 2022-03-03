<?php
  include_once $_SERVER['DOCUMENT_ROOT'].'/elements/database.php';
  use SleekDB\Store;
  $postStore = new Store('posts', $dataDir, $configuration);

  $postsCount = $postStore->count(); // cколько всего постов

  // Pagination
  if (isset($_POST['page'])) {
    $page = $_POST['page'];
  }
  else {
    $page = 1;
  }
  $limit = 6;
  $skip = ($page - 1) * $limit;

  if ($_POST['type'] == 'all') {
    $result = $postStore->findBy([ ["_id", ">", 0] ], ["_id" => "DESC"], $limit, $skip);
  }
  else {
    $type = $_POST['type'];
    $postsCount  = count($postStore->findBy(["type", "=", $type]));
    $result = $postStore->findBy(
        [
          ["type", "=", $type],
        ],
        ["_id" => "desc"],
        $limit,
        $skip
     );
  }
  ////
  $pagination_html = '
  	<div class="pages-list">
	';

	$total_links = ceil($postsCount/$limit);
  if ($total_links == 0) {

    echo json_encode(array(''));
    die;
  }
	$previous_link = '';
	$next_link = '';
	$page_link = '';

	if($total_links > 3)
	{
		if($page < 4)
		{
			for($count = 1; $count <= 4; $count++)
			{
				$page_array[] = $count;
			}
			$page_array[] = '...';
			$page_array[] = $total_links;
		}
		else
		{
			$end_limit = $total_links - 4;

			if($page > $end_limit)
			{
				$page_array[] = 1;

				$page_array[] = '...';

				for($count = $end_limit; $count <= $total_links; $count++)
				{
					$page_array[] = $count;
				}
			}
			else
			{
				$page_array[] = 1;

				$page_array[] = '...';

				for($count = $page - 1; $count <= $page + 1; $count++)
				{
					$page_array[] = $count;
				}

				$page_array[] = '...';

				$page_array[] = $total_links;
			}
		}
	}
	else
	{
		for($count = 1; $count <= $total_links; $count++)
		{
			$page_array[] = $count;
		}
	}

	for($count = 0; $count < count($page_array); $count++)
	{
		if($page == $page_array[$count])
		{
			$page_link .= '
        <a class="page t-19 t-w-n c-2c2c2c active">'.$page_array[$count].'</a>
			';
		}
		else
		{
			if($page_array[$count] == '...')
			{
				$page_link .= '
        <a class="page t-19 t-w-n c-2c2c2c space">...</a>
				';
			}
			else
			{
        // <a class="page t-19 t-w-n c-2c2c2c underline" href="javascript:load_data(`'.$_POST["query"].'`, '.$page_array[$count].')">'.$page_array[$count].'</a>
				$page_link .= '
					<a data-type="'.$_POST["type"].'" data-pageNum="'.$page_array[$count].'" class="page t-19 t-w-n c-2c2c2c underline">'.$page_array[$count].'</a>
				';
			}
		}
	}
  if ($total_links > 1) {
    $pagination_html .= $page_link;
  }
  else {
    $pagination_html = '';
  }

	$pagination_html .= '
	 </div>
	';
  ////

  $output = array(
    'total' => $total_links,
    'page' => $page,
		'data'				=>	$result,
		'pagination_html'		=>	$pagination_html
	);

	echo json_encode($output);
  //echo json_encode($result);
?>
