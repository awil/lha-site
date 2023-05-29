<?PHP
$companyName = $_POST["companyName"];
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$fax = $_POST["fax"];
$ofnumber = $_POST["ofnumber"];
$currentOwner = $_POST["currentOwner"];
$update = $_POST["update"];
$twoThirdsOwner = $_POST["twoThirdsOwner"];
$acquisitionForward = $_POST["acquisitionForward"];
$fullTitle = $_POST["fullTitle"];
$subdForward = $_POST["subdForward"];
$docRetrieval = $_POST["docRetrieval"];
$buyerName = $_POST["buyerName"];
$ownerName = $_POST["ownerName"];
$propertyAddress = $_POST["propertyAddress"];
$city = $_POST["city"];
$parish = $_POST["parish"];
$squareOrLot = $_POST["squareOrLot"];
$legalDescription = $_POST["legalDescription"];
$latestMonth = $_POST["latestMonth"];
$latestDay = $_POST["latestDay"];
$CopyDeeds = $_POST["CopyDeeds"];
$DeedCopies = $_POST["DeedCopies"];
$CopyMortgages = $_POST["CopyMortgages"];
$MortgagesCopies = $_POST["MortgagesCopies"];
$CopyAssignments = $_POST["CopyAssignments"];
$AssignmentsCopies = $_POST["AssignmentsCopies"];
$CopyAcquisition = $_POST["CopyAcquisition"];
$AcquisitionsCopies = $_POST["AcquisitionsCopies"];
$CopyPlats = $_POST["CopyPlats"];
$PlatsCopies = $_POST["PlatsCopies"];
$OtherInfo = $_POST["OtherInfo"];

$to = "email@yahoo.com, orders@website.com";
$subject = "Abstract request from: $name";
$headers = "From: $name $email\n";


$message = "An abstract has been requested on your website from: $name. Their email address is: $email.\n
\n
Company Name: $companyName
Client Name: $name
Email Address: $email
Phone Number: $phone
Fax Number: $fax
Order/File Number: $ofnumber
Type of Search:
	Current Owner: $currentOwner
	Update: $update
	2/3 Owner: $twoThirdsOwner
	Acquisition Forward: $acquisitionForward
	Full Title: $fullTitle
	Subdivision Forward: $subdForward
	Document Retrieval: $docRetrieval
Buyer's Name: $buyerName
Owner's Name: $ownerName
Property Address: $propertyAddress
City: $city
Parish: $parish
Square / Lot: $squareOrLot
Brief Legal Description: $legalDescription
Latest Due Date: $latestMonth $latestDay
Copies Requested:
	Deeds: $CopyDeeds $DeedCopies
	Mortgages: $CopyMortgages $MortgagesCopies
	Assignments: $CopyAssignments $AssignmentsCopies
	Acquisition Forwards: $CopyAcquisition $AcquisitionsCopies
	Plats: $CopyPlats $PlatsCopies
Other Information or requirements: $OtherInfo";

$user = "$email";
$usersubject = "Thank You";
$userheaders = "From [Name here]\n";

$usermessage = "Thank you for submitting your Abstract request.";

mail($to,$subject,$message,$headers);

mail($user,$usersubject,$usermessage,$userheaders);
?>
<?php include '../includes/header.php'; ?>

	<div id="content">	
		<h1>Thank You!</h1>
		<div class="content-text">
		<p>Your request has been submitted.</p> 
		<img class="bbb" src="../img/BBB_BNI.jpg">
		</div><!-- content-text" -->
	</div><!-- content -->
	
</Body>
</Html>
