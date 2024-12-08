<?php
define('TITLE', 'Requests');
define('PAGE', 'request');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();

if(isset($_SESSION['is_adminlogin'])){
    $aEmail = $_SESSION['aEmail'];
} else {
    echo "<script> location.href='login.php'; </script>";
}
?>
<div class="col-sm-4 mb-5">
    <!-- Main Content area start Middle -->
    <?php 
    $sql = "SELECT request_id, request_info, request_desc, request_date FROM submitrequest_tb";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo '<div class="card mt-5 mx-5">';
            echo '<div class="card-header">';
            echo 'Request ID : '. $row['request_id'];
            echo '</div>';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">Request Info : ' . $row['request_info'] . '</h5>';
            echo '<p class="card-text">' . $row['request_desc'] . '</p>';
            echo '<p class="card-text">Request Date: ' . $row['request_date'] . '</p>';
            echo '<div class="float-right">';
            echo '<form action="" method="POST"> 
                    <input type="hidden" name="id" value='. $row["request_id"] .'>
                    <input type="submit" class="btn btn-danger mr-3" name="view" value="View">
                    <input type="submit" class="btn btn-secondary" name="close" value="Close">
                  </form>';
            echo '</div>' ;
            echo '</div>' ;
            echo'</div>';
        }
    } else {
        echo '<div class="alert alert-info mt-5 col-sm-6" role="alert">
                <h4 class="alert-heading">Well done!</h4>
                <p>Aww yeah, you successfully assigned all Requests.</p>
                <hr>
                <h5 class="mb-0">No Pending Requests</h5>
              </div>';
    }

    // Handle the close request
    if(isset($_REQUEST['close'])){
        $sql = "DELETE FROM submitrequest_tb WHERE request_id = {$_REQUEST['id']}";
        if($conn->query($sql) === TRUE){
            echo '<meta http-equiv="refresh" content= "0;URL=?closed" />';
        } else {
            echo "Unable to Delete Data";
        }
    }

    // Handle the view request
    if(isset($_REQUEST['view'])){
        $requestId = $_REQUEST['id'];
        // Fetch request details for viewing
        $viewSql = "SELECT * FROM submitrequest_tb WHERE request_id = $requestId";
        $viewResult = $conn->query($viewSql);
        if($viewResult->num_rows > 0){
            $viewRow = $viewResult->fetch_assoc();
            // Display the request details in a modal or a new page
            echo '<div class="modal" tabindex="-1" role="dialog">';
            echo '<div class="modal-dialog" role="document">';
            echo '<div class="modal-content">';
            echo '<div class="modal-header">';
            echo '<h5 class="modal-title">Request Details</h5>';
            echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
            echo '<span aria-hidden="true">&times;</span>';
            echo '</button>';
            echo '</div>';
            echo '<div class="modal-body">';
            echo '<p><strong>Request Info:</strong> ' . $viewRow['request_info'] . '</p>';
            echo '<p><strong>Description:</strong> ' . $viewRow['request_desc'] . '</p>';
            echo '<p><strong>Request Date:</strong> ' . $viewRow['request_date'] . '</p>';
            // Add more fields as necessary
            echo '</div>';
            echo '<div class="modal-footer">';
            echo '<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        } else {
            echo '<div class="alert alert-danger mt-5 col-sm-6" role="alert">Unable to fetch request details.</div>';
        }
    }
    ?>
</div> <!-- Main Content area End Middle -->

<?php 
include('assignworkform.php');
include('includes/footer.php'); 
$conn->close();
?> ⬤