<?php include '../includes/header.php'; ?>
<div id="content">
<form id="entry" method="post" action="process.php">

<h1>Request Abstract</h1>
	<fieldset><legend>Your Information</legend>
		<label for="companyName">Company:</label><input type='text' name="companyName" id='companyName' required><br>
		<label for="name">Name: </label><input type='text' name='name' id='name' required><br>
		<label for="email">E-Mail Address: </label><input type='email' name='email' id='email' required><br>
		<label for="phone">Phone Number: </label><input type='text' name="phone" id='phone' maxlength="10" required><br>
		<label for="fax">Fax Number: </label><input type='text' name="fax" id='fax' size='24' maxlength="10" required><br>
		<label for="ofnumber">Order/File Number: </label><input name="ofnumber" type='text' id='ofnumber' required><br>
	</fieldset><br>
	<fieldset class="checkbox">
		<legend class="list-label">Type of Search: (Please check all that apply.)</legend>
		<ul>
			<li><input type="checkbox" name="currentOwner" id="currentOwner" value="Yes"><label for="currentOwner">Current Owner </label></li>
			<li><input type="checkbox" name="twoThirdsOwner" id="twoThirdsOwner" value="Yes"><label for="twoThirdsOwner">2/3 Owner </label></li> 
			<li><input type="checkbox" name="acquisitionForward" id="acquisitionForward" value="Yes"><label for="acquisitionForward">Acquisition Forward </label></li> 
			<li><input type="checkbox" name="fullTitle" id="fullTitle" value="Yes"><label for="fullTitle">Full Title </label></li>
			<li><input type="checkbox" name="subdForward" id="subdForward" value="Yes"><label for="subdForward">Subdivision Forward </label></li>
			<li><input type="checkbox" name="docRetrieval" id="docRetrieval" value="Yes"><label for="docRetrieval">Document Retrieval </label></li>
			<li><input type="checkbox" name="update" id="update" value="Yes"><label for="update">Update </label></li>
		</ul>
	</fieldset>
	<fieldset><legend>Buyer Information</legend>
		<label for="buyerName">Name(s):</label><input type='text'  name="buyerName" id='buyerName' required><br>
		<label for="ownerName">Owner's Name(s):</label><input type='text' name="ownerName" id='ownerName' required><br>
		<label for="propertyAddress">Property Address:</label><input type='text' name="propertyAddress" id='propertyAddress' required><br>
		<label for="city">City:</label><input type='text' name="city" id='city' required><br>
		<label for="parish">Parish:</label><input type='text' name="parish" id='parish' required><br>
		<label for="squareOrLot">Square / Lot:</label><input type='text' name="squareOrLot" id='squareOrLot' required><br>
		<label for="legalDescription">Brief Legal Description:</label><input type='text' name="legalDescription" id='legalDescription' required><br>
	</fieldset><br>
	<fieldset><legend>Latest Due Date:</legend>
		<select name="latestMonth" id="latestMonth" size="1">
			<option>Month</option>
			<option value="January">January</option>
			<option value="February">February</option>
			<option value="March">March</option>
			<option value="April">April</option>
			<option value="May">May</option>
			<option value="June">June</option>
			<option value="July">July</option>
			<option value="August">August</option>
			<option value="September">September</option>
			<option value="October">October</option>
			<option value="November">November</option>
			<option value="December">December</option>
		</select>
		<select name="latestDay" id="latestDay" size="1">
			<option>Day</option>
			<option value="1st">1</option>
			<option value="2nd">2</option>
			<option value="3rd">3</option>
			<option value="4th">4</option>
			<option value="5th">5</option>
			<option value="6th">6</option>
			<option value="7th">7</option>
			<option value="8th">8</option>
			<option value="9th">9</option>
			<option value="10th">10</option>
			<option value="11th">11</option>
			<option value="12th">12</option>
			<option value="13th">13</option>
			<option value="14th">14</option>
			<option value="15th">15</option>
			<option value="16th">16</option>
			<option value="17th">17</option>
			<option value="18th">18</option>
			<option value="19th">19</option>
			<option value="20th">20</option>
			<option value="21st">21</option>
			<option value="22nd">22</option>
			<option value="23rd">23</option>
			<option value="24th">24</option>
			<option value="25th">25</option>
			<option value="26th">26</option>
			<option value="27th">27</option>
			<option value="28th">28</option>
			<option value="29th">29</option>
			<option value="30th">30</option>
			<option value="31st">31</option>
		</select>
	</fieldset>
	<fieldset class="checkbox">
		<legend>Copies Requested: (Please check all that apply.)</legend>
		<ul>
			<li><input type="checkbox" name="CopyDeeds" id="CopyDeeds" value="Yes"><label for="CopyDeeds">Deeds</label> 
				<select id="DeedCopies">
				<option selected></option>
				<option>full copy</option>
				<option>partial copy</option>
				</select></li>			
			<li><input type="checkbox" name="CopyMortgages" id="CopyMortgages" value="Yes"><label for="CopyMortgages">Mortgages</label>
				<select id="MortgagesCopies">
				<option selected></option>
				<option>full copy</option>
				<option>partial copy</option>
				</select></li>
			<li><input type="checkbox" name="CopyAssignments" id="CopyAssignments" value="Yes"><label for="CopyAssignments">Assignments</label>
				<select id="AssignmentsCopies" >
				<option selected></option>
				<option>full copy</option>
				<option>partial copy</option>
				</select></li>								
			<li><input type="checkbox" name="CopyAcquisition" id="CopyAcquisition" value="Yes"><label for="CopyAcquisition">Acquisition Forwards</label>
				<select id="AcquisitionsCopies" >
				<option selected></option>
				<option>full copy</option>
				<option>partial copy</option>
				</select></li>			
			<li><input type="checkbox" name="CopyPlats" id="CopyPlats" value="Yes"><label for="CopyPlats">Plats</label>
				<select id="PlatsCopies" >
				<option selected></option>
				<option>full copy</option>
				<option>partial copy</option>
				</select></li>
		</ul>
	</fieldset>
	<fieldset>
		<label for="OtherInfo">Other Information or Requirements:</label> <textarea name="OtherInfo" id="OtherInfo" cols="24"></textarea><br>
	</fieldset>
<fieldset>
	<input id="submit" type="submit" value="Submit">
	<input id="reset" type="reset" value="Reset">
</fieldset>
</form>
	
</div>

</Body>
</Html>