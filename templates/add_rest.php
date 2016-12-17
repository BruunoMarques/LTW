<link href='http://fonts.googleapis.com/css?family=Lekton' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css'>

<div id="add_rest">
<h1>New Restaurant!</h1>
	<form id= "addRestaurant" action="./" method="post">
		<ul>
			<li>
				<label for="Name of the Restaurant"></label>
		    	<input type="text" id="Name" name="Name" placeholder='Name of the Restaurant' required>
		  	</li>
		  	<li>
				<label for="Contacts"></label>
		    	<input type="text" id="Contacts" name="Contacts" placeholder='Contact of the Restaurant' required>
		  	</li>
		  	<li>
				<label for="Average Cost"></label>
		    	<input type="text" id="Average Cost" name="Average Cost" placeholder='Average cost per person of the Restaurant' required>
		  	</li>
		  <li>
				<label for="Schedule"></label>
		    	<input type="text" id="Schedule" name="Schedule" placeholder='Schedule of the Restaurant' required>
		  	</li>
		  <li>
				<label for="Adress of the Restaurant"></label>
		    	<input type="text" id="Adress" name="Adress" placeholder='Adress of the Restaurant!' required>
		  	</li>
		  <li>
				<label for="Category of the Restaurant"></label>
		    	<input type="text" id="Categoty" name="Category" placeholder='Category of the Restaurant!' required>
		  	</li>

		</ul>
		<input type="submit" id="add" value="">
	</form>
</div>