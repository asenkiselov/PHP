<!DOCTYPE html>
<html><head>
	<style>
		table {
	background: light;
    font-size: 30px;
    border: solid 2px darkgray;
		}
		tr, td{
    border: solid 1px darkgray;
    padding: 15px;   
}
tr>td:nth-child(1){font-weight: bold;}
	</style>
</head>
	<body>
		<table cellpadding="-10">
			<tr>
				<td bgcolor="orange">Name</td>
				<td><?php echo $name = 'Gosho' ?></td>
			</tr>
			<tr>
				<td bgcolor="orange">Phone Nummber</td>
				<td><?php echo $phone = "0882 32 32 42" ?></td>
			</tr>
		</table>
	</body>
</html>