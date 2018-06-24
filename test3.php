<!DOCTYPE html>
<html>
<head>
	<title></title>
<!-- 	<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">

<script src="//code.jquery.com/jquery-1.9.1.js"></script>

<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
      $("button").click(function(){
          $("#test").load("data.txt #aha");
      });

  });
</script> -->
<script src="node_modules/tablefilter/dist/tablefilter/tablefilter.js"></script>  

</head>
<body>


<p>Add a drop-down filter, define its first option, sort it and remove a filter</p>
<table id="table2" cellpadding="0" cellspacing="0">
    <tr>
        <th>World Regions</th>
        <th>Population ( 2007 Est.)</th>
        <th>Population % of World</th>
        <th>% Population ( Penetration )</th>
        <th>Usage % of World</th>
    </tr>
    <tr>
        <td>Africa</td>
        <td>933,448,292</td>
        <td>14.2 %</td>
        <td>3.5 %</td>
        <td>3.0 %</td>
    </tr>
    <tr>
        <td>Asia</td>
        <td>3,712,527,624</td>
        <td>56.5 %</td>
        <td>10.5 %</td>
        <td>35.6 %</td>
    </tr>
    <tr>
        <td>Europe</td>
        <td>809,624,686</td>
        <td>12.3 %</td>
        <td>38.6 %</td>
        <td>28.6 %</td>
    </tr>
    <tr>
        <td>Middle East</td>
        <td>193,452,727</td>
        <td>2.9 %</td>
        <td>10.0 %</td>
        <td>1.8 %</td>
    </tr>
    <tr>
        <td>North America</td>
        <td>334,538,018</td>
        <td>5.1 %</td>
        <td>69.4 %</td>
        <td>21.2 %</td>
    </tr>
    <tr>
        <td>Latin America / Caribbean</td>
        <td>556,606,627</td>
        <td>8.5 %</td>
        <td>16.0 %</td>
        <td>8.1 %</td>
    </tr>
    <tr>
        <td>Oceania / Australia</td>
        <td>34,468,443</td>
        <td>0.5 %</td>
        <td>53.5 %</td>
        <td>1.7 %</td>
    </tr>
</table>




</body>
<script type="text/javascript">
  var table2_Props = {
    col_0: "select",
    col_4: "none",
    display_all_text: " [ Show all ] ",
    sort_select: true
};
var tf2 = setFilterGrid("table2", table2_Props);
</script>
</html>