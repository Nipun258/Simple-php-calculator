<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<style type="text/css">
    fieldset{
    	width: 500px;
    }

	</style>
</head>
<script type="text/javascript">
	function selectOnlyThis(id) {
    for (var i = 1;i <= 4; i++)
    {
        document.getElementById(i).checked = false;
    }
    document.getElementById(id).checked = true;
}
</script>
<body align="center">
   <form action="process.php" method="POST">
   	<fieldset>
   		<legend><strong>Calculator</strong></legend>
   		<strong>Enter Number 01: </strong>
   		<input type="text" name="num01"><br><br>
   		<strong>Enter Number 02: </strong>
   		<input type="text" name="num02"><br><br>
   		<strong>Operation: </strong>
   		<input type="checkbox" id="1" value="addition" name="calculation" onclick="selectOnlyThis(this.id)" /> Addition
        <input type="checkbox" id="2" value="subtraction" name="calculation" onclick="selectOnlyThis(this.id)" /> Subtraction
        <input type="checkbox" id="3" value="multifly" name="calculation" onclick="selectOnlyThis(this.id)" /> Multifly
        <input type="checkbox" id="4" value="divide" name="calculation" onclick="selectOnlyThis(this.id)" /> Divide<br><br>
        <input type="submit" value="Calculate" name="submit">
   	</fieldset>
   </form>
</body>
</html>
