<html>

<head>
	<title>Jaxrock Voting Booth</title>
	<link rel="stylesheet" type="text/css" href="css/poll.css"/>
	<script language="javascript">
	     function setVote(voteName)
	     {
	      	document.getElementById("votefor").value = voteName;
	     }
	     function confirmSubmit() 
	     { 
		if (document.getElementById("votefor").value == "")
		{
		     var agree=confirm("Please select an entry before voting."); 
		     return false; 
		}
	     } 
	</script>
</head>

<body>
	<FORM id="frmVote" action="results.php" method="POST">
	     <table id="tblMain" align="center">
	       	<tr>
			<td class="header">Header Text</td>
	     	</tr>
		<tr>
			<td>
			     <?php
				include "loadpoll.php";
			     ?>
			</td>
		</tr>
		<tr>
			<td>
			     <input name="votefor" type="hidden"/>
			</td>
		</tr>
 		<tr>
			<td class="button">
			     <INPUT id="btnVote" onclick="return confirmSubmit()" type="submit" value="Vote"/>
			</td>
		</tr>
		<tr>
			<td class="footer">
			Footer Text
		      </td>
	     	</tr>
	     </table>
	</FORM>
</body>

</html>
