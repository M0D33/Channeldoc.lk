<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MyCompany Inc - Products & Services</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

	
</head>
<body>

<h1>MyCompany Inc - Products & Services </h1>

<h2>Products</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tortor urna, pharetra sed felis in, congue elementum erat. Pellentesque vitae bibendum dui. Pellentesque pulvinar elementum massa a consequat. Ut condimentum nisl at dolor vehicula, sed egestas sapien egestas. Ut ut lorem at arcu condimentum ultricies et et ante. Nullam blandit, est vel posuere mollis, dolor elit convallis odio, nec venenatis felis felis non leo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

<h2>Services</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tortor urna, pharetra sed felis in, congue elementum erat. Pellentesque vitae bibendum dui. Pellentesque pulvinar elementum massa a consequat. Ut condimentum nisl at dolor vehicula, sed egestas sapien egestas. Ut ut lorem at arcu condimentum ultricies et et ante. Nullam blandit, est vel posuere mollis, dolor elit convallis odio, nec venenatis felis felis non leo.</p>
<?php

$session=session();

//return view("Welcome/index.php");

if($session->has('id'))
{
    echo "Session + Login Successfull: Welcome ";
    echo $session->getFlashdata('info');
    echo '<br>Welcome ' . $session->fname;
}
echo "<br><a href=". site_url('/Login/logout') . ">Log Out</a> <br>";
?>
<a href=<?php echo site_url('/employeeinfo/index') ?> >Management structure</a>
<br>
<a href=<?php echo site_url('/BranOutDea/index') ?>>Branches,outlets and dealers</a>



</body>
</html>