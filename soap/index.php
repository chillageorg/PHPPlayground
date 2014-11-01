<!DOCTYPE html>
<html>
<head>
 <meta charset="ISO-8859-1">
	<title>SOAP Project</title>

	<!-- jQuery -->
	<script src="pluggins/js/jquery-1.11.1.js"></script>



	<!-- Tablesorter: required -->
	<link rel="stylesheet" href="pluggins/css/theme.blue.css">
	<script src="pluggins/js/jquery.tablesorter.js"></script>
	<script src="pluggins/js/jquery.tablesorter.widgets.js"></script>

	<!-- Tablesorter: optional -->
	<link rel="stylesheet" href="pluggins/addons/pager/jquery.tablesorter.pager.css">
	<script src="pluggins/addons/pager/jquery.tablesorter.pager.js"></script>
	

	<script id="js">$(function(){

	// **********************************
	//  Description of ALL pager options
	// **********************************
	var pagerOptions = {

		// target the pager markup - see the HTML block below
		container: $(".pager"),

		// use this url format "http:/mydatabase.com?page={page}&size={size}&{sortList:col}"
		ajaxUrl: null,

		// modify the url after all processing has been applied
		customAjaxUrl: function(table, url) { return url; },

		// process ajax so that the data object is returned along with the total number of rows
		// example: { "data" : [{ "ID": 1, "Name": "Foo", "Last": "Bar" }], "total_rows" : 100 }
		ajaxProcessing: function(ajax){
			if (ajax && ajax.hasOwnProperty('data')) {
				// return [ "data", "total_rows" ];
				return [ ajax.total_rows, ajax.data ];
			}
		},

		// output string - default is '{page}/{totalPages}'
		// possible variables: {page}, {totalPages}, {filteredPages}, {startRow}, {endRow}, {filteredRows} and {totalRows}
		output: '{startRow} to {endRow} ({totalRows})',

		// apply disabled classname to the pager arrows when the rows at either extreme is visible - default is true
		updateArrows: true,

		// starting page of the pager (zero based index)
		page: 0,

		// Number of visible rows - default is 10
		size: 15,

		// Save pager page & size if the storage script is loaded (requires $.tablesorter.storage in jquery.tablesorter.widgets.js)
		savePages : true,
		
		//defines custom storage key
		storageKey:'tablesorter-pager',

		// if true, the table will remain the same height no matter how many records are displayed. The space is made up by an empty
		// table row set to a height to compensate; default is false
		fixedHeight: true,

		// remove rows from the table to speed up the sort of large tables.
		// setting this to false, only hides the non-visible rows; needed if you plan to add/remove rows with the pager enabled.
		removeRows: false,

		// css class names of pager arrows
		cssNext: '.next', // next page arrow
		cssPrev: '.prev', // previous page arrow
		cssFirst: '.first', // go to first page arrow
		cssLast: '.last', // go to last page arrow
		cssGoto: '.gotoPage', // select dropdown to allow choosing a page

		cssPageDisplay: '.pagedisplay', // location of where the "output" is displayed
		cssPageSize: '.pagesize', // page size selector - select dropdown that sets the "size" option

		// class added to arrows when at the extremes (i.e. prev/first arrows are "disabled" when on the first page)
		cssDisabled: 'disabled', // Note there is no period "." in front of this class name
		cssErrorRow: 'tablesorter-errorRow' // ajax error information row

	};

	$("table")

		// Initialize tablesorter
		// ***********************
		.tablesorter({
			theme: 'blue',
			widthFixed: true,
			widgets: ['zebra','filter']
		})

		// bind to pager events
		// *********************
		.bind('pagerChange pagerComplete pagerInitialized pageMoved', function(e, c){
			var msg = '"</span> event triggered, ' + (e.type === 'pagerChange' ? 'going to' : 'now on') +
				' page <span class="typ">' + (c.page + 1) + '/' + c.totalPages + '</span>';
			$('#display')
				.append('<li><span class="str">"' + e.type + msg + '</li>')
				.find('li:first').remove();
		})

		// initialize the pager plugin
		// ****************************
		.tablesorterPager(pagerOptions);

		

		

		

});</script>
</head>
<body id="pager-demo">
	

	<div id="main">

		
	
	<div class="pager">
		<img src="pluggins/addons/pager/icons/first.png" class="first" alt="First" />
		<img src="pluggins/addons/pager/icons/prev.png" class="prev" alt="Prev" />
		<span class="pagedisplay"></span> <!-- this can be any element, including an input -->
		<img src="pluggins/addons/pager/icons/next.png" class="next" alt="Next" />
		<img src="pluggins/addons/pager/icons/last.png" class="last" alt="Last" />
		
		
	</div>

<table class="tablesorter">
	<thead>
		<tr>
			<th class="filter-false">ID</th>
			<th>Name</th>
			<th>Symbol</th>
			<th>Valor</th>
			<th>Value</th>
			<th>Currency</th>
			<th>Package</th>
			<th>Opening</th>
		</tr>
	</thead>
	
	<tbody>
	<?php 
	//phpinfo(INFO_VARIABLES);
	require_once 'db/dbinternal.php';
	if($db_internal){
		$strQry = "SELECT * FROM shares";
		$result = mysql_query($strQry, $link);
		while($row = mysql_fetch_assoc($result))
		{
			echo "<tr>";
			echo "<td>". $row['share_id'] ."</td>";
			echo "<td>". $row['share_name'] ."</td>";
			echo "<td>". $row['share_symbol'] ."</td>";
			echo "<td>". $row['share_valor'] ."</td>";
			echo "<td>". $row['share_value'] ."</td>";
			echo "<td>". $row['share_currency'] ."</td>";
			echo "<td>". $row['share_package'] ."</td>";
			echo "<td>". $row['share_opening'] ."</td>";
			echo "</tr>";

		}
	}
	?>
		
		</tbody>
</table>

<p><a href="<?php HOSTPATH?>soapclient.php" >Liste neu einlesen mittels SOAP</a></p>
</div>
	

</body>
</html>

