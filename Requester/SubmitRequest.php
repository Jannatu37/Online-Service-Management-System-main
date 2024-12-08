<?php

define('TITLE', 'Submit Request');

define('PAGE', 'SubmitRequest');

include('includes/header.php'); 

include('../dbConnection.php');

session_start();

if($_SESSION['is_login']){

    $rEmail = $_SESSION['rEmail'];

} else {

    echo "<script> location.href='RequesterLogin.php'; </script>";

}


if(isset($_REQUEST['submitrequest'])){

    // Checking for Empty Fields

    if(empty($_REQUEST['requestinfo']) || 

       empty($_REQUEST['requestdesc']) || 

       empty($_REQUEST['requestertype']) || 

       empty($_REQUEST['requestername']) || 

       empty($_REQUEST['requesteradd1']) || 

       empty($_REQUEST['requesteradd2']) || 

       empty($_REQUEST['requestercity']) || 

       empty($_REQUEST['requesterstate']) || 

       empty($_REQUEST['requesterzip']) || 

       empty($_REQUEST['requesteremail']) || 

       empty($_REQUEST['requestermobile']) || 

       empty($_REQUEST['requestdate']) || 

       empty($_REQUEST['paymentmethod'])) {

        // msg displayed if required field missing

        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fields </div>';

    } else {

        // Assigning User Values to Variable

        $rinfo = $_REQUEST['requestinfo'];

        $rdesc = $_REQUEST['requestdesc'];

        $rtype = $_REQUEST['requestertype'];

        $rname = $_REQUEST['requestername'];

        $radd1 = $_REQUEST['requesteradd1'];

        $radd2 = $_REQUEST['requesteradd2'];

        $rcity = $_REQUEST['requestercity'];

        $rstate = $_REQUEST['requesterstate'];

        $rzip = (int)$_REQUEST['requesterzip']; // Cast to integer

        $remail = $_REQUEST['requesteremail'];

        $rmobile = $_REQUEST['requestermobile']; // Keep as string for leading zeros

        $rdate = $_REQUEST['requestdate'];

        $paymentmethod = $_REQUEST['paymentmethod'];


        // Prepare SQL statement

        $sql = "INSERT INTO submitrequest_tb(request_info, request_desc, request_type, requester_name, requester_add1, requester_add2, requester_city, requester_state, requester_zip, requester_email, requester_mobile, request_date, payment_method) 

                VALUES ('$rinfo','$rdesc', '$rtype', '$rname', '$radd1', '$radd2', '$rcity', '$rstate', '$rzip', '$remail', '$rmobile', '$rdate', '$paymentmethod')";


        if($conn->query($sql) === TRUE){

            $genid = mysqli_insert_id($conn);

            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Request Submitted Successfully! Your Request ID is ' . $genid . '</div>';

            $_SESSION['myid'] = $genid;

            echo "<script> location.href='submitrequestsuccess.php'; </script>";

        } else {

            $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Submit Your Request </div>';

        }

    }

}

?>

<div class="col-sm-9 col-md-10 mt-5">

    <form class="mx-5" action="" method="POST">

        <div class="form-group">

            <label for="inputRequestInfo">Request Info</label>

            <select class="form-control" id="inputRequestInfo" name="requestinfo" onchange="updateDescriptionOptions()">

                <option value="">Select a Service</option>

                <option value="Home Maintenance">Home Maintenance</option>

                <option value="Appliance Repair and Installation">Ap pliance Repair and Installation</option>

                <option value="Cleaning Services">Cleaning Services</option>

                <option value="IT and Technical Support">IT and Technical Support</option>

                <option value="Gardening and Landscaping">Gardening and Landscaping</option>

                <option value="Elderly Care and Support">Elderly Care and Support</option>

                <option value="Childcare Services">Childcare Services</option>

                <option value="Paramedic Services">Paramedic Services</option>

                <option value="Helping Hand">Helping Hand</option>

            </select>

        </div>

        <div class="form-group">

            <label for="inputRequestDescription">Description</label>

            <select class="form-control" id="inputRequestDescription" name="requestdesc" onchange="updateServiceTypeOptions()">

                <option value="">Select a Description</option>

            </select>

        </div>

        <div class="form-group">

            <label for="inputServiceType">Service Type</label>

            <select class="form-control" id="inputServiceType" name="requestertype" onchange="updatePriceRange()">

                <option value="">Select a Service Type</option>

            </select>

        </div>

        <div class="form-group">

            <label for="inputPriceRange">Price Range (in Taka)</label>

            <input type="text" class="form-control" id="inputPriceRange" readonly>

        </div>

        <div class="form-group">

            <label for="inputName">Name</label>

            <input type="text" class="form-control" id="inputName" placeholder="Your Full Name" name="requestername">

        </div>

        <!-- Address Fields -->

        <div class="form-row">

            <div class="form-group col-md-6">

                <label for="inputAddress">Address Line 1</label>

                <input type="text" class="form-control" id="inputAddress" placeholder="House No" name="requesteradd1">

            </div>

            <div class="form-group col-md-6">

                <label for="inputAddress2">Address Line 2</label>

                <input type="text" class="form-control" id="inputAddress2" placeholder="Location" name="requesteradd2">

            </div>

        </div>

        <div class="form-row">

            <div class="form-group col-md-6">

                <label for="inputrequestercity">City</label>

                <input type="text" class="form-control" id="inputrequestercity" placeholder="City Name" name="requestercity">

            </div>

            <div class="form-group col-md-4">

                <label for="inputrequesterstate">State</label>

                <input type="text" class="form-control" id="requesterstate" placeholder="Location" name="requesterstate">

            </div>

            <div class="form-group col-md-2">

                <label for="inputrequesterzip">ZIP</label>

                <input type="text" class="form-control" id="requesterzip" placeholder="ZIP Code" name="requesterzip">

            </div>

        </div>

        <!-- Contact Fields -->

        <div class="form-row">

            <div class="form-group col-md-6">

                <label for="inputEmail">Email</label>

                <input type="email" class="form-control" id="inputEmail" name="requesteremail">

            </div>

            <div class="form-group col-md-2">

                <label for="inputMobile">Mobile</label>

                <input type="text" class="form-control" id="inputMobile" name="requestermobile" onkeypress="isInputNumber(event)">

            </div>

            <div class="form-group col-md-2">

                <label for="inputDate">Date</label>

                <input type="date" class="form-control" id="inputDate" name="requestdate">

            </div>

        </div>

        <div class="form-group">

            <label for="inputPaymentMethod">Payment Method</label>

            <select class="form-control" id="inputPaymentMethod" name="paymentmethod">

                <option value="">Select Payment Method</option>

                <option value="Master Card">Master Card</option>

                <option value="Visa Card">Visa Card</option>

                <option value="Bkash">Bkash</option>

                <option value="Nagad">Nagad</option>

                <option value="Pay After Service">Pay After Service</option>

            </select>

        </div>

        <button type=" submit" class="btn btn-danger" name="submitrequest">Submit</button>

        <button type="reset" class="btn btn-secondary">Reset</button>

    </form>

    <?php if(isset($msg)) {echo $msg; } ?>

</div>


<script>

  const servicesWithDescriptions = {

    "Home Maintenance": ["Plumbing", "Electrical Work", "Carpentry"],

    "Appliance Repair and Installation": ["Refrigerator Repair", "Oven Installation", "Dishwasher Repair"],

    "Cleaning Services": ["House Cleaning", "Office Cleaning"],

    "IT and Technical Support": ["Computer Repair", "Hardware Issues", "Software Issues"],

    "Gardening and Landscaping": ["Lawn Mowing", "Trimming", "Lawn Maintenance"],

    "Elderly Care and Support": ["Home Assistance", "Medical Support"],

    "Childcare Services": ["Baby Sitting", "Child Supervision"],

    "Paramedic Services": ["First Aid", "Emergency Medical Assistance"],

    "Helping Hand": ["General Assistance", "Errand Running"]

  };


  const descriptionsWithServiceTypes = {

    "Plumbing": ["Pipe Repair", "Drain Cleaning", "Water Heater Installation"],

    "Electrical Work": ["Wiring", "Lighting Installation", "Appliance Installation"],

    "Carpentry": ["Furniture Assembly", "Cabinet Installation", "Woodworking"],

    "Refrigerator Repair": ["Compressor Replacement", "Defrosting", "Door Seal Replacement"],

    "Oven Installation": ["Electric Oven Installation", "Gas Oven Installation"],

    "Dishwasher Repair": ["Dishwasher Installation", "Dishwasher Maintenance"],

    "House Cleaning": ["One-Time Cleaning", "Regular Cleaning", "Deep Cleaning"],

    "Office Cleaning": ["Daily Cleaning", "Weekly Cleaning", "Monthly Cleaning"],

    "Computer Repair": ["Hardware Repair", "Software Repair", "Virus Removal"],

    "Hardware Issues": ["Motherboard Replacement", "RAM Upgrade", "Hard Drive Replacement"],

    "Software Issues": ["Operating System Installation", "Software Installation", "Troubleshooting"],

    "Lawn Mowing": ["Weekly Mowing", "Bi-Weekly Mowing", "Monthly Mowing"],

    "Trimming": ["Tree Trimming", "Bush Trimming", "Hedge Trimming"],

    "Lawn Maintenance": ["Fertilization", "Pest Control", "Weed Control"],

    "Home Assistance": ["Personal Care", "Household Chores", "Meal Preparation"],

    "Medical Support": ["Medication Management", "Wound Care", "Mobility Assistance"],

    "Baby Sitting": ["Infant Care", "Toddler Care", "Child Development"],

    "Child Supervision": ["Homework Help", "Activity Planning", "Safety Monitoring"],

    "First Aid": ["Wound Care", "Burn Care", "Cardiopulmonary Resuscitation"],

    "Emergency Medical Assistance": ["Ambulance Service", "Emergency Room Care", "Urgent Care"],

    "General Assistance": ["Errand Running", "Grocery Shopping", "Household Chores"],

    "Errand Running": ["Grocery Shopping", "Dry Cleaning", "Post Office Errands"]

  };


  const serviceTypePriceRanges = {

    "Pipe Repair": "1000 - 2000",

    "Drain Cleaning": "800 - 1500",

    "Water Heater Installation": "3000 - 5000",

    "Wiring": "1500 - 3000",

    "Lighting Installation": "1000 - 2500",

    "Appliance Installation": "1200 - 2200",

    "Furniture Assembly": "800 - 1500",

    "Cabinet Installation": "2000 - 4000",

    "Woodworking": "1500 - 3500",

    "Compressor Replacement": "2500 - 4000",

    "Defrosting": "500 - 1000",

    "Door Seal Replacement": "700 - 1200",

    "Electric Oven Installation": "2000 - 3000",

    "Gas Oven Installation": "2500 - 3500",

    "Dishwasher Installation": "1500 - 2500",

    "Dishwasher Maintenance": "800 - 1500",

    "One-Time Cleaning": "1000 - 2000",

    "Regular Cleaning": "800 - 1500",

    "Deep Cleaning": "2000 - 4000",

    "Daily Cleaning": "1500 - 3000",

    "Weekly Cleaning": "1000 - 2000",

    "Monthly Cleaning": "2500 - 4000",

    "Hardware Repair": "1000 - 2000",

    "Software Repair": "800 - 1500",

    "Virus Removal": "500 - 1000",

    " Motherboard Replacement": "3000 - 5000",

    "RAM Upgrade": "1500 - 3000",

    "Hard Drive Replacement": "2000 - 4000",

    "Operating System Installation": "1000 - 2000",

    "Software Installation": "500 - 1000",

    "Troubleshooting": "800 - 1500",

    "Weekly Mowing": "1000 - 1500",

    "Bi-Weekly Mowing": "800 - 1200",

    "Monthly Mowing": "1500 - 2500",

    "Tree Trimming": "1000 - 2000",

    "Bush Trimming": "800 - 1500",

    "Hedge Trimming": "700 - 1200",

    "Fertilization": "1000 - 2000",

    "Pest Control": "1500 - 3000",

    "Weed Control": "800 - 1500",

    "Personal Care": "2000 - 4000",

    "Household Chores": "1000 - 2000",

    "Meal Preparation": "1500 - 3000",

    "Medication Management": "800 - 1500",

    "Wound Care": "1000 - 2000",

    "Mobility Assistance": "1500 - 3000",

    "Infant Care": "2000 - 4000",

    "Toddler Care": "1500 - 3000",

    "Child Development": "1000 - 2000",

    "Homework Help": "800 - 1500",

    "Activity Planning": "500 - 1000",

    "Safety Monitoring": "1000 - 2000",

    "Wound Care": "500 - 1000",

    "Burn Care": "800 - 1500",

    "Cardiopulmonary Resuscitation": "1000 - 2000",

    "Ambulance Service": "3000 - 5000",

    "Emergency Room Care": "2000 - 4000",

    "Urgent Care": "1500 - 3000",

    "Errand Running": "500 - 1000",

    "Grocery Shopping": "300 - 500",

    "Household Chores": "800 - 1500"

  };


  function updatePriceRange() {

    const serviceType = document.getElementById('inputServiceType').value;

    const priceRangeInput = document.getElementById('inputPriceRange');


    if (serviceTypePriceRanges[serviceType]) {

      priceRangeInput.value = serviceTypePriceRanges[serviceType];

    } else {

      priceRangeInput.value = '';

    }

  }


  function updateDescriptionOptions() {

    const requestInfo = document.getElementById('inputRequestInfo').value;

    const descriptionSelect = document.getElementById('inputRequestDescription');


    // Clear previous options

    descriptionSelect.innerHTML = '<option value="">Select a Description</option>';


    if (servicesWithDescriptions[requestInfo]) {

      servicesWithDescriptions[requestInfo].forEach(description => {

        const option = document.createElement('option');

        option.value = description;

        option.textContent = description;

        descriptionSelect.appendChild(option);

      });

    }

  }


  function updateServiceTypeOptions() {

    const requestDescription = document.getElementById('inputRequestDescription').value;

    const serviceTypeSelect = document.getElementById('inputServiceType');


    // Clear previous options

    serviceTypeSelect.innerHTML = '<option value="">Select a Service Type</option>';


    if (descriptionsWithServiceTypes[requestDescription]) {

      descriptionsWithServiceTypes[requestDescription].forEach(serviceType => {

        const option = document.createElement('option');

        option.value = serviceType;

        option.textContent = serviceType;

        serviceTypeSelect.appendChild(option);

      });

    }

  }


  function isInputNumber(evt) {

    var ch = String.fromCharCode(evt.which);

    if (!(/[0-9]/.test(ch))) {

      evt.preventDefault();

    }

  }

</script>


<?php

include('includes/footer.php'); 

$conn->close();

?> ```php