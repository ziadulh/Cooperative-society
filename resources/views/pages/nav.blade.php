<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>
</head>
<body>

<ul>
  <li><a href="/">Home</a></li>
  <li><a href="/members">Member List</a></li>
  <li><a href="/members/create">Add new Member</a></li>
  <li style="float:right">@include('layouts.app')</li>
</ul>

</body>
</html>
