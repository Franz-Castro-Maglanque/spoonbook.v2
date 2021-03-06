<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
</head>
<body>
<div id="users">

<!-- class="search" automagically makes an input a search field. -->
  <input class="search" placeholder="Search" />
<!-- class="sort" automagically makes an element a sort buttons. The date-sort value decides what to sort by. -->
  <button class="sort" data-sort="name">
    Sort
  </button>

<!-- Child elements of container with class="list" becomes list items -->
  <ul class="list">
    <li>
<!-- The innerHTML of children with class="name" becomes this items "name" value -->
      <h3 class="name">Jonny Stromberg</h3>
      <p class="born">1986</p>
    </li>
    <li>
      <h3 class="name">Jonas Arnklint</h3>
      <p class="born">1985</p>
    </li>
    <li>
      <h3 class="name">Martina Elm</h3>
      <p class="born">1986</p>
    </li>
    <li>
      <h3 class="name">Gustaf Lindqvist</h3>
      <p class="born">1983</p>
    </li>
  </ul>

</div>
<script type="text/javascript">
	var options = {
  valueNames: [ 'name', 'born' ]
};

var userList = new List('users', options);
</script>
</body>
</html>